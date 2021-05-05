<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata</title>
</head>
<body>
    <h1>Biodata</h1>
    <p>Nama : {{ $nama }}</p>

    <p>Kelas : {{ $kelas }}</p>

    <p>NIM : {{ $nim }}</p>

    <p>Idol Favorit</p>
    <ul>
        @foreach ($idol as $idolfavorit)
    <li>{{ $idolfavorit }}</li>
        @endforeach

    <p>Vtuber Favorit</p>
    <ul>
        @foreach ($vtuber as $vtuberfavorit)
    <li>{{ $vtuberfavorit }}</li>
        @endforeach
    </ul>
</body>
</html>
