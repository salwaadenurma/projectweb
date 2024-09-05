<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        Form Produk
                    </div>
                    <div class="card-body">
                        <form action="/dashboard/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group pt-2">
                                <label for="productName">Nama Produk</label>
                                <input type="text" name="nama" class="form-control" id="productName" placeholder="Masukkan nama produk">
                            </div>
                            <div class="form-group pt-2">
                                <label for="category">Kategori</label>
                                <input type="text" name="kategori" class="form-control" id="category" placeholder="Masukkan kategori produk">
                            </div>
                            <div class="form-group pt-2">
                                <label for="price">Harga</label>
                                <input type="number" name="harga" class="form-control" id="price" placeholder="Masukkan harga produk">
                            </div>
                            <div class="form-group pt-2">
                                <label for="quantity">Stok</label>
                                <input type="number" name="stok" class="form-control" id="quantity" placeholder="Masukkan jumlah produk">
                            </div>
                            <div class="form-group pt-2">
                                <label for="quantity">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukkan deskripsi">
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
</html>
<script src="{{ asset('asset/bootstrap-5.0.2-dist/js/bootstrap.min.js')}}"></script>

