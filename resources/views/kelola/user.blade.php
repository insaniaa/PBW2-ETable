<x-app-layout>
    <x-slot name="header">
        <div class="position-relative">
            <!-- Kotak Sambutan -->
            <div class="text-white p-4 rounded-4 d-flex align-items-center justify-content-between" style="background-color: #bc1010; height: 150px; border-radius: 20px; position: relative;">
                <div class="ms-5 ps-5">
                    <h1 class="fw-bold mb-2" style="font-size: 28px;">Selamat Datang Admin!</h1>
                    <p class="fw-medium mb-0" style="font-size: 20px;">Kelola pengguna sistem di sini</p>
                </div>
                <img src="{{ asset('images/buku.png') }}" alt="Gambar Buku" 
                    style="width: 250px; height: auto; position: absolute; top: 50%; left: calc(100% - 350px); transform: translateY(-50%);">
            </div>
        </div>
    </x-slot>

    <!-- Konten Utama -->
    <div class="container my-4">
        <!-- Kotak Kelola User -->
        <div id="kelola-user" class="rounded-4 py-4 px-5" style="background-color: #ffe0e0; border-radius: 30px;">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold text-dark">Kelola User</h4>
                <a class="btn" href="{{ route('users.create') }}" style="background-color: #ffffff; color: #585858; border: 1px solid #dcdcdc; border-radius: 10px; padding: 5px 10px;">
                    <i class="fa fa-plus"></i> Tambah User
                </a>
            </div>            
            <div class="table-responsive mt-3">
                <table class="table text-center" style="border-collapse: collapse; background-color: #fff; border-radius: 10px; overflow: hidden;">
                    <thead class="bg-light">
                        <tr>
                            <th style="width: 10%;">No</th>
                            <th style="width: 30%;">Nama</th>
                            <th style="width: 30%;">Email</th>
                            <th style="width: 15%;">Role</th>
                            <th style="width: 15%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($data->count() > 0)
                            @foreach ($data as $key => $user)
                            <tr style="background-color: {{ $key % 2 == 0 ? '#f5f5f5' : '#ffffff' }};">
                                <td>{{ ++$i }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $v)
                                            <label class="badge bg-success" style="padding: 5px 10px; border-radius: 5px;">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('users.edit', $user->id) }}" style="margin-right: 5px;">
                                        <i class="fa-solid fa-pen-to-square"></i> Edit
                                    </a>
                                    <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa-solid fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center py-5">
                                    <img src="{{ asset('images/maskot-logo.png') }}" alt="Placeholder" class="mb-3" style="width: 100px;">
                                    <p class="text-muted">Data pengguna masih kosong</p>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                {!! $data->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
</x-app-layout>
