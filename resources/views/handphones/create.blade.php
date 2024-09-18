<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Handphone</title>
</head>
<body>

    <h1>Tambah Handphone</h1>

    <!-- Formulir untuk menambahkan handphone -->
    <form action="{{ route('handphones.store') }}" method="POST">
        @csrf <!-- Token CSRF untuk keamanan -->

        <label for="brand">Brand:</label>
        <input type="text" name="brand" id="brand" value="{{ old('brand') }}" required><br><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" value="{{ old('harga') }}" required><br><br>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" value="{{ old('stok') }}" required min="0"><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea name="deskripsi" id="deskripsi">{{ old('deskripsi') }}</textarea><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('handphones.index') }}">Kembali ke Daftar Handphone</a>
</body>
</html>
