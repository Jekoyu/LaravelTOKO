<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
</head>
<body>
    <h1>Data Produk</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Stok</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $produk)
            <tr>
                <td>{{ $produk->id_produk }}</td>
                <td>{{ $produk->nama_produk }}</td>
                <td>{{ $produk->harga_satuan }}</td>
                 <td>{{ $produk->satuan }}</td>
                <td>{{ $produk->stok }}</td>
                 <td>{{ $produk->kategori }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>