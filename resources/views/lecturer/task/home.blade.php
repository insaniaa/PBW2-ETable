@push('js')
    <script>
        $(document).ready(function() {
            var table = $('.table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route($routePrefix . 'tasks_today') }}',
                    type: 'GET'
                },
                columns: [{
                        data: "DT_RowIndex"
                    },
                    {
                        data: 'course_name', // Assuming you are returning the course name for course_code
                        name: 'course_name',
                        title: 'Kelas Mata Kuliah'
                    },
                    {
                        data: 'student_class_name', // Assuming you are returning the student class name for id_student_class
                        name: 'student_class_name',
                        title: 'Kelas'
                    },
                    {
                        data: 'task_name',
                        name: 'task_name',
                        title: 'Nama Tugas'
                    },
                    {
                        data: 'task_description', // Display the task description
                        name: 'task_description',
                        title: 'Deskripsi Tugas',
                    },
                    {
                        data: 'task_deadline',
                        name: 'task_deadline',
                        title: 'Tenggat Waktu',
                    },
                    {
                        data: 'task_module',
                        name: 'task_module',
                        title: 'Module',
                    },
                    {
                        data: 'task_file',
                        name: 'task_file',
                        title: 'Lampiran',
                    },
                    @hasrole('Lecturer')
                        {
                            data: 'actions',
                            name: 'actions',
                            orderable: false,
                            searchable: false,
                            title: 'Aksi'
                        },
                    @endhasrole
                ],
                paging: true,
                searching: true,
                ordering: true,
                serverSide: false,
                processing: true,
                deferRender: true,
            });

            $(document).on('click', '.status-button', function(e) {
                e.preventDefault();

                // Show SweetAlert confirmation
                Swal.fire({
                    title: 'Konfirmasi',
                    text: 'Apakah Anda yakin ingin memperbarui status tugas?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Perbarui!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        const form = $(this).closest('.status-form');
                        console.log(form)
                        form.submit();
                    }
                });
            });

            $('#filter-day, #filter-class').on('change', function() {
                const day = $('#filter-day').val();
                const classId = $('#filter-class').val();

                $.ajax({
                    url: '{{ route('filterSchedules') }}',
                    method: 'GET',
                    data: {
                        day: day,
                        class_id: classId
                    },
                    success: function(response) {
                        $('#schedule-container').html('');
                        $('#schedule-container').html(response.html);
                    },
                    error: function() {
                        Swal.fire('Error', 'Gagal memuat data. Coba lagi.', 'error');
                    }
                });
            });

            $(document).on('click', '.delete-button', function(e) {
                e.preventDefault();

                // Show SweetAlert confirmation
                Swal.fire({
                    title: 'Konfirmasi',
                    text: 'Apakah Anda yakin ingin menghapus tugas ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        const form = $(this).closest('.delete-form');
                        console.log(form)
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush

<x-admin-layout>
    <div style="padding: 2rem 3rem">
        <!-- Navigation Tabs -->
        <h1 class="pb-2">{{ $title }}</h1>

        @hasanyrole(['Lecturer', 'Student'])
            @if (count($schedulesToday) > 0)
                <div class="mt-2">
                    <div class="px-5 py-4 shadow-sm rounded-4"
                        style="background-color: #FFE0E0; border-radius: 20px; max-height: 500px; overflow-y: auto;">
                        <h4 class="mb-3 fw-bold text-danger">Jadwal Kuliah Hari Ini</h4>

                        <div class="mb-4 filters row d-flex">
                            @php
                            $dayMapping = [
                                'Monday' => 'Senin',
                                'Tuesday' => 'Selasa',
                                'Wednesday' => 'Rabu',
                                'Thursday' => 'Kamis',
                                'Friday' => 'Jumat',
                                'Saturday' => 'Sabtu',
                                'Sunday' => 'Minggu',
                            ];

                            // Ambil hari ini dalam format internasional (English)
                            $hariIni = \Carbon\Carbon::now()->format('l'); // Misalnya, "Monday", "Tuesday", etc.

                            // Map hari internasional ke hari dalam bahasa Indonesia
                            $hariIniIndo = $dayMapping[$hariIni];
                        @endphp

                        <div class="">
                            <select id="filter-day" class="form-select">
                                <option value="Senin" {{ $hariIniIndo == 'Senin' ? 'selected' : '' }}>Senin</option>
                                <option value="Selasa" {{ $hariIniIndo == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                <option value="Rabu" {{ $hariIniIndo == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                <option value="Kamis" {{ $hariIniIndo == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                <option value="Jumat" {{ $hariIniIndo == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                                <option value="Sabtu" {{ $hariIniIndo == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                            </select>
                        </div>

                           @hasrole('Lecturer')
                           <div class="">
                            <select id="filter-class" class="form-select">
                                <option value="" selected>Semua Kelas</option>
                                @foreach ($classes as $class)
                                    <option value="{{ $class->id_student_class }}">{{ $class->student_class_name }}</option>
                                @endforeach
                            </select>
                        </div>
                           @endhasrole
                        </div>
                        <div class="mb-5 row g-3" style="overflow-x: auto; display: flex; flex-wrap: nowrap; gap: 15px;"
                            id="schedule-container">
                            @foreach ($schedulesToday as $schedule)
                                <div class="col-md-4">
                                    <div class="text-white shadow-sm card jadwal-card"
                                        style="background-color: #BC1010; border-radius: 20px;">
                                        <div class="text-center card-body">
                                            <h5 class="card-title fw-bold">{{ $schedule->course->course_name }}</h5>
                                            <p>Waktu:
                                                <strong>{{ \Carbon\Carbon::parse($schedule->schedule_start_time)->format('H:i') }}
                                                    -
                                                    {{ \Carbon\Carbon::parse($schedule->schedule_end_time)->format('H:i') }}</strong>
                                            </p>
                                            <p>Ruangan: <strong>{{ $schedule->room->room_name }}</strong></p>
                                            <p>Kode Dosen:
                                                <strong>{{ $schedule->lecturer->lecturer_name . ' - ' . $schedule->lecturer->lecturer_code }}</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        @endhasrole

        @hasanyrole(['Lecturer', 'Super Admin'])
            <!-- Add Button -->
            <a href="{{ route($routePrefix . 'create') }}">
                <button class="mb-4 btn btn-primary">
                    <i class="ti ti-plus"></i>
                    {{ $add_button }}
                </button>
            </a>
        @endhasanyrole
        <!-- Main Content Card -->
        <div class="card">
            <div class="px-4 card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>Mata Kuliah</th>
                                <th>Nama Tugas</th>
                                <th>Deskripsi Tugas</th> <!-- New Column for Task Description -->
                                <th>Tenggat Waktu</th>
                                <th>Module</th>
                                <th>Lampiran</th>
                                @hasanyrole(['Lecturer', 'Super Admin'])
                                    <th>Aksi</th>
                                @endhasanyrole
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
