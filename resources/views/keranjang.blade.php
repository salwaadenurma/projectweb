<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-sm text-white" style="background-color: #695a5b; height:12vh shadow">
            <div class="container">
                <a href="#" class="navbar-brand text-white fw-bold" style="font-size: 30px">BUTTERFLY</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#home" class="nav-link text-white" style="font-size: 18px">Home</a>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" style="margin-top: 14px; margin-left: 14px">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                              </svg>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <div class="container my-5">
        <h2 class="mb-4">Keranjang Belanja</h2>
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5>Daftar Produk</h5>
                    </div>
                    <div class="card-body">
                        @foreach ($keranjang as $item)
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <img src="{{ asset('storage/gambar/'.$item->produk->gambar)}}" class="img-fluid" alt="{{ $item->produk->gambar }}">
                                </div>
                                <div class="col-md-4">
                                    <h5>{{ $item->produk->name}}</h5>
                                    <p class="mb-0">{{ number_format($item->produk->harga, 2, ',','.')}}</p>
                                </div>
                                <div class="col-md-2 text-center">
                                    <input type="number" value="{{ $item->quantity}}" min="1">
                                </div>
                                <div class="col-md-2 text-end">
                                    <a href="/delete-cart/{{ $item->id }}">
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>






        {{-- <div class="table-responsive">
            <table class="table align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Produk</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kuantitas</th>
                        <th scope="col">Total</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="https://via.placeholder.com/80" alt="Produk 1" class="img-fluid rounded">
                        </td>
                        <td>Produk 1</td>
                        <td>Rp 100.000</td>
                        <td>
                            <input type="number" class="form-control" value="1" min="1">
                        </td>
                        <td>Rp 100.000</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="https://via.placeholder.com/80" alt="Produk 2" class="img-fluid rounded">
                        </td>
                        <td>Produk 2</td>
                        <td>Rp 200.000</td>
                        <td>
                            <input type="number" class="form-control" value="2" min="1">
                        </td>
                        <td>Rp 400.000</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <button class="btn btn-outline-secondary">Lanjut Belanja</button>
            <h5>Total: Rp 500.000</h5>
            <button class="btn btn-primary">Lanjut ke Checkout</button>
        </div>
    </div> --}}
        <!-- Link Bootstrap JS (Optional, jika memerlukan interaksi JS Bootstrap) -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

