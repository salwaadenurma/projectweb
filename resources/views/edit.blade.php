<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-sm text-white" style="background-color: #695a5b;">
        <div class="container">
            <a href="#" class="navbar-brand text-white fw-bold">BUTTERFLY ( namanya )</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-start" id="myNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/home/user" class="nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/produk" class="nav-link text-white">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link text-white">Category</a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link text-white">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        Form Produk
                    </div>
                    <div class="card-body">
                        <form action="/dashboard/edit/{{ $produk->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group pt-2">
                                <label for="productName">Nama Produk</label>
                                <input type="text" name="nama" class="form-control" id="productName" placeholder="Masukkan nama produk" value="{{ $produk->nama}}">
                            </div>
                            <div class="form-group pt-2">
                                <label for="category">Kategori</label>
                                <input type="text" name="kategori" class="form-control" id="category" placeholder="Masukkan kategori produk" value="{{ $produk->kategori}}">
                            </div>
                            <div class="form-group pt-2">
                                <label for="price">Harga</label>
                                <input type="number" name="harga" class="form-control" id="price" placeholder="Masukkan harga produk" value="{{ $produk->harga}}">
                            </div>
                            <div class="form-group pt-2">
                                <label for="quantity">Stok</label>
                                <input type="number" name="stok" class="form-control" id="quantity" placeholder="Masukkan jumlah produk" value="{{ $produk->stok}}">
                            </div>
                            <div class="form-group pt-2">
                                <label for="quantity">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukkan deskripsi" value="{{ $produk->deskripsi}}">
                            </div>
                            <div class="form-group pt-2">
                                <label for="image">Gambar</label>
                                <input type="file" name="gambar" class="form-control-file" id="image">
                            </div>
                            <button type="submit" class="btn btn-secondary w-100 btn-block mt-5">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="{{ asset('asset/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>
</html>
