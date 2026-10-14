<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Courses</h1>
    <p>Berikut adalah data kursus</p>

    <table style="width: 80%; margin:auto; border-collapse:collapse;" border="1">
        <thead>
            <th>Nama Kelas</th>
            <th>Durasi</th>
            <th>#</th>
        </thead>
        <tbody>
            @forelse ($courses as $course)
                <tr>
                    <td>{{$course->course_name}}</td>
                    <td>{{$course->duration}}</td>
                    <td>
                        <a href="{{route('detail.course', $course->id)}}" class="">detail</a>
                    </td>
                </tr>
            @empty
                
            @endforelse
        </tbody>
    </table>

</body>
</html>