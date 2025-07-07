<!DOCTYPE html>
<html>
<head>
    <title>Menu Transaksi</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Transaksi Penjualan</h2>

    <!-- Form Input Transaksi -->
    <form method="POST" action="{{ route('sales.add') }}">
        @csrf
        <p>
            Kode Produk:
            <select name="kode" required>
                <option value="">Pilih Produk</option>
                @foreach ($products as $product)
                    <option value="{{ $product->kode }}">{{ $product->kode }} - {{ $product->nama }}</option>
                @endforeach
            </select>
        </p>
        <p>Jumlah: <input type="number" name="qty" value="1" required></p>
        <button type="submit">Tambah ke List</button>
    </form>

    <!-- List Produk Dibeli -->
    @if (count($cart) > 0)
        <h3>Daftar Belanja</h3>
        <table>
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $index => $item)
                    <tr>
                        <td>{{ $item['kode'] }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['harga'] }}</td>
                        <td>
                            <form method="POST" action="{{ route('sales.edit') }}" style="display: inline;">
                                @csrf
                                <input type="hidden" name="index" value="{{ $index }}">
                                <input type="number" name="qty" value="{{ $item['qty'] }}" min="1" style="width: 60px;">
                                <button type="submit">Edit</button>
                            </form>
                        </td>
                        <td>{{ $item['total'] }}</td>
                        <td>
                            <form method="POST" action="{{ route('sales.remove') }}" style="display: inline;">
                                @csrf
                                <input type="hidden" name="index" value="{{ $index }}">
                                <button type="submit" onclick="return confirm('Hapus barang ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <form method="POST" action="{{ route('sales.checkout') }}">
            @csrf
            <button type="submit">Bayar</button>
        </form>
    @else
        <p>Belum ada produk yang ditambahkan.</p>
    @endif
</body>
</html>
