<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Create Training</h1>
    <p>Berikut adalah halaman untuk create</p>

    <form action="{{route('kirim.kelas')}}" method="post">
        <div class="">
            <label for="nama_training">Nama training</label>
            <input type="text" name="nama_training"  value="{{old('nama_training')}}" required>

            @error('nama_training')
                <span style="color: #ff0000;">{{$message}}</span>
            @enderror

        </div>
        <div class="">
            <label for="nama_trainer">Nama Trainer</label>
            <input type="text" name="nama_trainer" value="{{old('nama_trainer')}}" required>

            @error('nama_trainer')
                <span style="color: #ff0000;">{{$message}}</span>
            @enderror

        </div>
        <div class="">
            <label for="durasi">Durasi Training</label>
            <input type="number" name="durasi" required value="{{old('durasi')}}">
            @error('durasi')
                <span style="color: #ff0000;">{{$message}}</span>
            @enderror
        </div>
        <div class="">
            <button type="submit">Kirim Data</button>
        </div>
    </form>

</body>
</html>