<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @php
        $nama = 'Daffa';
        $nilai = 95.99;
    @endphp
    @if ($nilai >= 60)
        @php $ket = "Lulus"; @endphp
    @else
        @php $ket = "Gagal"; @endphp
    @endif
    <h1>Siswa {{ $nama }} dengan nilai {{ $nilai }} dinyatakan {{ $ket }}</h1>
</body>
</html>