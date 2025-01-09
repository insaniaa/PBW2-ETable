@if (count($schedules) > 0)

@foreach ($schedules as $schedule)
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
@else
<h1>Data Jadwal kosong</h1>
@endif
