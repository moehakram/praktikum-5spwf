<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data PenjualanTiket</title>
    <link rel="stylesheet" href="{{asset('assets/styles.css')}}">
</head>
<body>
        <h1>Penjualan Tiket</h1>
        <table>
            <thead>
                <tr>
                    <th>Kode Tiket</th>
                    <th>Jenis Tiket</th>
                    <th>Rute</th>
                    <th>jumlah</th>
                    <th>harga</th>
                    <th>total bayar</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($datas as $data)
                    <tr>
                        <td>{{ $data->kode_tiket }}.</td>
                        <td>{{ $data->jenis_tiket }}</td>
                        <td>{{ $data->rute }}</td>
                        <td>{{ $data->jumlah }}</td>
                        <td>{{ 'Rp' . number_format((int)$data->harga, 2, ',', '.') }}</td>
                        <td>{{ 'Rp' . number_format((int)$data->harga * $data->jumlah, 2, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>
