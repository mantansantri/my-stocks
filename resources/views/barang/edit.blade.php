<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Halaman Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
</head>

<body style="background-color:black">

    <div class="container mt-5">
        <form action="{{ route('barang.update', $barang->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Name</span>
                <input type="text" class="form-control" placeholder="Name" value="{{ $barang->name }}" name="name">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Price</span>
                <input type="text" class="form-control" placeholder="Price" value="{{ $barang->price }}" name="price">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Type</span>
                <input type="text" class="form-control" placeholder="Type" value="{{ $barang->type }}" name="type">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Stock</span>
                <input type="text" class="form-control" placeholder="Stock" value="{{ $barang->stock }}" name="stock">
            </div>

            <button type="submit" class="btn btn-primary">Edit Product</button>

            <a href="{{ route('barang.index') }}" class="btn btn-primary">kembali</a>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>