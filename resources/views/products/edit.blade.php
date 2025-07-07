<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
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
    <h2>Edit Produk</h2>
    <form method="POST" action="{{ route('products.update', $product->kode) }}">
        @csrf
        <div class="form-row">
            <p>Kode: 
                <input type="number" name="kode" value="{{ $product->kode }}" readonly>
            </p>
            <p>Nama: 
                <input type="text" name="nama" value="{{ $product->nama }}" required>
            </p>
            <p>Harga: 
                <input type="number" name="harga" value="{{ $product->harga }}" required>
            </p>
            <p>Stock: 
                <input type="number" name="stock" value="{{ $product->stock }}" required>
            </p>
            <button type="submit">Simpan Perubahan</button>
        </div>
    </form>
</body>
</html>
