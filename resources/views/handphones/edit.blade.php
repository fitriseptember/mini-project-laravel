<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Handphone</title>
</head>
<body>

    <h1>Edit Handphone</h1>

    <!-- Formulir untuk mengedit handphone -->
    <form action="{{ route('handphones.update', $handphone->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="brand">Brand</label>
            <input type="text" name="brand" id="brand" value="{{ old('brand', $handphone->brand) }}" required>
        </div>

        <div>
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" value="{{ old('harga', $handphone->harga) }}" required>
        </div>

        <div>
            <label for="stok">Stok</label>
            <input type="text" name="stok" id="stok" value="{{ old('stok', $handphone->stok) }}" required>
        </div>

        <div>
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" value="{{ old('deskripsi', $handphone->deskripsi) }}" required>
        </div>

        <button type="submit">Update</button>
    </form>

</body>
</html>
