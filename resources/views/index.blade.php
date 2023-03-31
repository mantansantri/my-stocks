<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Halaman Welcome</title>
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
            <a class="nav-link active" href="{{ route('barang.index') }}">Barang</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- title -->
    <div class="position-absolute top-50 start-50 translate-middle">
      <h1 class="text-light display-4">Selamat Datang Di HaikalStocks!</h1>
      <h5 class="text-light">Disini anda bisa menjual berbagai barang!</h5>
    </div>
    <!-- end title -->

    <!-- carousel -->

    <!-- end carousel -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>