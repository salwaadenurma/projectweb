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
    @extends('template')
    @section('content')


    <div style="margin-bottom : 500px">
        <h3>Kategori</h3><br>
        <div class="row">
            <div class="col-md-6">
                <a href="/kategori/create" class="btn btn-primary">Tambah kategori</a>
            </div>
            <div class="col-md-6">
                <form action="kategori" method="post" class="">
                    @csrf
                    <div class="input-group mb-2">
                        <input type="search" name="cari" id="" class="form-control" placeholder="search..">
                        <button class="btn btn-primary" type="submit">Go</button>
                    </div>
                </form>
            </div>
        </div>
        @if (Session::get('pesan'))
        {{ Session::get('pesan')}}
        @endif
        <table class="table" style="width: 800px; height: 100px">
            <thead class="table-dark">
                <tr>
                    <td>NO</td>
                    <td>NAMA KATEGORI</td>
                    <td>AKSI</td>
                </tr>
            </thead>
            <tbody class="table-white">
                @foreach ($kategori as $key => $item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->nm_kategori}}</td>
                    <td>
                        <a href="/kategori/delete/{{ $item->id }}" style="width: 60px; height:30px; font-size:10px;" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-danger">Hapus</a>
                        <a href="/kategori/edit/{{ $item->id}}" style="width: 60px; height:30px; font-size:10px;" class="btn btn-info">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection


