<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah</title>
    <link rel="stylesheet" href="{{asset('assets/styles.css')}}">
</head>
<body>
        <h1>Daftar Mata Kuliah</h1>
        <table>
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($matkuls as $matkul)
                    <tr>
                        <td>{{ $matkul->kode }}</td>
                        <td>{{ $matkul->nama }}</td>
                        <td>{{ $matkul->kelas }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>
