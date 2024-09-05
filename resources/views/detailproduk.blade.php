<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-sm text-white" style="background-color: #695a5b; height:12vh">
        <div class="container">
            <a href="#" class="navbar-brand text-white fw-bold" style="font-size: 30px">BUTTERFLY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/home/user" class="nav-link text-white" style="font-size: 18px">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#produk" class="nav-link text-white" style="font-size: 18px">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="#kategori" class="nav-link text-white" style="font-size: 18px">Category</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="#about" class="nav-link text-white" style="font-size: 18px">About</a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="/logout" class="nav-link text-white" style="font-size: 18px">Logout</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
                            class="bi bi-cart" viewBox="0 0 16 16" style="margin-top: 14px; margin-left: 14px">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('/storage/gambar/' . $produk->gambar) }}" class="d-block w-100"
                                alt="Foto Produk 1">
                        </div>
                        {{-- <div class="carousel-item">
                            <img src="images/jaket1.jpg" class="d-block w-100"  alt="Foto Produk 2">
                        </div>
                        <div class="carousel-item">
                            <img src="images/jaket3.jpg" class="d-block w-100"  alt="Foto Produk 3">
                        </div> --}}
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <h1>{{ $produk->nama }}</h1>
                <p class="text-muted">{{ $produk->kategori }}</p>
                <h3 class="text-primary">Rp. {{ $produk->harga }}</h3>
                <p class="mt-3">{{ $produk->deskripsi }}</p>

                <form action="/keranjang/add/{{ $produk->id }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="quantity" class="form-label">Kuantitas</label>
                        <input type="number" name="qty" id="quantity" class="form-control w-25" value="1"
                            min="1">
                    </div>
                    {{-- <h4>Spesifikasi:</h4>
                <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item">Fitur 1: Detail Fitur 1</li>
                    <li class="list-group-item">Fitur 2: Detail Fitur 2</li>
                </ul> --}}

                    <div class="d-grid gap-2">
                        <input type="submit" class="border-0 rounded-2 shadow text-white ms-3"
                            style="background-color: rgb(57, 104, 148); width:40%; height: 40px"
                            value="Tambah ke keranjang"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
