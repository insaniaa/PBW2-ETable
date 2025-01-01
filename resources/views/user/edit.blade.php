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
        <div class="rounded-4 py-4 px-5" style="background-color: #ffe0e0; border-radius: 30px;">
            <h4 class="fw-bold text-dark mb-4">Edit User</h4>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label"><strong>Name:</strong></label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}">
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Email:</strong></label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Password:</strong></label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Confirm Password:</strong></label>
                    <input type="password" name="confirm-password" class="form-control" placeholder="Confirm Password">
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Role:</strong></label>
                    <select name="roles[]" class="form-control" multiple="multiple">
                        @foreach ($roles as $value => $label)
                            <option value="{{ $value }}" {{ isset($userRole[$value]) ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between mt-5">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary" style="border-radius: 10px; padding: 10px 30px;">Back</a>
                    <button type="submit" class="btn text-white" style="background-color: #bc1010; border-radius: 10px; padding: 10px 30px;">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
