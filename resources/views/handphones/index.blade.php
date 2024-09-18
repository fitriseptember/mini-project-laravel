<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Handphone</title>
</head>
<body>

    <h1>Daftar Handphone</h1>

    <!-- Menampilkan pesan sukses jika ada dalam session -->
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <!-- Tabel untuk menampilkan daftar handphone -->
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <!-- Header tabel -->
                <th>Brand</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Iterasi melalui koleksi handphones -->
            @forelse ($handphones as $handphone)
            <tr>
                <!-- Menampilkan detail handphone -->
                <td>{{ $handphone->brand }}</td>
                <td>{{ $handphone->harga }}</td>
                <td>{{ $handphone->stok }}</td>
                <td>{{ $handphone->deskripsi }}</td>
                <td>
                    <!-- Link untuk mengedit handphone -->
                    <a href="{{ route('handphones.edit', $handphone->id) }}">Edit</a> |
                    <!-- Form untuk menghapus handphone -->
                    <form action="{{ route('handphones.destroy', $handphone->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <!-- Tombol untuk menghapus handphone dengan konfirmasi -->
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <!-- Menampilkan pesan jika tidak ada data handphone -->
                <td colspan="5">Tidak ada data handphone.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
