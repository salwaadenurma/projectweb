<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 fw-bold" style="text-align: center">Transaksi</h2>
        <form action="/beli/{{$transaksi->id}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Nama Penerima</label>
                        <textarea class="form-control" name="nama_penerima" id="alamat"  rows="1" placeholder="Masukkan nama penerima"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan alamat penerima"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="metode_pembayaran" class="form-label">Metode pembayaran</label>
                        <select class="form-select" name="metode_pembayaran" id="metode_pembayaran">
                            <option value="cod">COD (Cash on Delivery)</option>
                            <option value="dana">Dana</option>
                            <option value="bri">BRI</option>
                            <option value="indomaret">indomaret</option>
                            <option value="alfamaret">alfamaret</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="catatan" class="form-label">Catatan</label>
                        <textarea class="form-control" name="note" id="catatan" rows="3" placeholder="tambahkan catatan jika perlu"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-3" style="margin: 0px 0px 0px 0px">
                        <h5>Ringkasan</h5>
                        <div class="">
                            <span>Jumlah Beli: </span><span style="color: #7A1CAC">1</span>
                        </div>
                        <h5 class="mt-3 mb-4 pb-3" style="border-bottom: 1px solid rgb(191, 191, 191)">Total Tagihan <span style="color: #7A1CAC ">{{$transaksi->harga}}</span></h5>
                        <button type="submit" class="btn btn-outline-succes w-100">Beli</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
