<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="{{asset('assets/styles.css')}}">
</head>
<body>
        <h1>List Data Mahasiswa</h1>
        <table>
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $no++ }}.</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->alamat }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>
