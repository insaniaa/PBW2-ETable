<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tugas</title>
</head>
<body>
    <h1>Detail Tugas</h1>
    <ul>
        <li>ID: {{ $task->id }}</li>
        <li>Kelas: {{ $task->Kelas }}</li>
        <li>Mata Kuliah: {{ $task->Matakuliah }}</li>
        <li>Kode Dosen: {{ $task->kode_Dosen }}</li>
        <li>Due Date: {{ $task->due_date }}</li>
        <li>Deskripsi: {{ $task->deskripsi_tugas }}</li>
    </ul>
</body>
</html>
