<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <style>
        .form-row {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .form-row p {
            margin: 0;
        }
    </style>
</head>
<body>
    <h2>Tambah Produk Baru</h2>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="form-row">
            <p>Kode: <input type="number" name="kode" required></p>
            <p>Nama: <input type="text" name="nama" required></p>
            <p>Harga: <input type="number" name="harga" required></p>
            <p>Stock: <input type="number" name="stock" required></p>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>
</html>
