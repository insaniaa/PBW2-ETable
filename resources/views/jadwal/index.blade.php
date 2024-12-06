<x-layout>
    <div class="container mt-5">
        <h1>Daftar Jadwal</h1>

        <a href="/jadwal/jadwal" class="btn btn-primary mb-3">Tambah Jadwal</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Hari</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Mata Kuliah</th>
                    <th>Kode Dosen</th>
                    <th>Kode Ruangan</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($jadwals as $index => $jadwal)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $jadwal->hari }}</td>
                <td>{{ $jadwal->tanggal }}</td>
                <td>{{ $jadwal->jam }}</td>
                <td>{{ $jadwal->mata_kuliah }}</td>
                <td>{{ $jadwal->kode_dosen }}</td>
                <td>{{ $jadwal->kode_ruangan }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>