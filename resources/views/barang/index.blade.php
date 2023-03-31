<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Halaman Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
</head>

<body style="background-color:black">

    <!-- navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary h-25" style="background-color:bisque">
            <div class="container-fluid">
                <a class="navbar-brand">HaikalStocks</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navbar -->

        <!-- table -->
        <div class="container card mt-5">
            <a href="{{ route('barang.create') }}" class="btn btn-primary mt-3">
                Add Product
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Type</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $row)

                    <tr>
                        <th scope="row">1</th>
                        <th scope="col">{{ $row->name }}</th>
                        <th scope="col">{{ number_format($row->price) }}</th>
                        <th scope="col">{{ $row->type }}</th>
                        <th scope="col">{{ $row->stock }}</th>
                        <td>
                            <a href="{{ route('barang.show', $row->id) }}" class="btn btn-primary">
                                Show
                            </a>
                            <a href="{{ route('barang.edit', $row->id) }}" class="btn btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('barang.destroy', $row->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Delete</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
            <!-- end table -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>