<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Data Produk</h2>

    <!-- Form Aksi -->
    <form method="POST" action="{{ route('products.action') }}">
        @csrf
        <button type="submit" name="action" value="load" class="button">Load</button>
        <button type="submit" name="action" value="insert" class="button">Insert</button>
        <button type="submit" name="action" value="update" class="button">Update</button>
        <button type="submit" name="action" value="delete" class="button">Delete</button>

        <!-- Tabel Produk -->
        @if (count($products) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Pilih</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td><input type="radio" name="kode" value="{{ $product->kode }}"></td>
                            <td>{{ $product->kode }}</td>
                            <td>{{ $product->nama }}</td>
                            <td>{{ $product->harga }}</td>
                            <td>{{ $product->stock }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Belum ada data. Klik Load untuk memuat produk.</p>
        @endif
    </form>
</body>
</html>
