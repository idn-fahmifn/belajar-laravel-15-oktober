<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detail Kelas</h1>

    <p>Nama Kelas : {{$course->course_name}}</p>
    <p>Durasi : {{$course->duration}} Hari</p>
    <p>Deskripsi : {{$course->description}}</p>
</body>
</html>