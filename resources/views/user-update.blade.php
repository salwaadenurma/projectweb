<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Create</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        Form User
                    </div>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="card-body">
                        <form action="/user/edit/{{ $user->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <table>
                                <tr>
                                    <td>Nama</td>
                                    <td><input type="text" name="name" class="@error('name') error @enderror" id="" placeholder="Masukkan nama produk" value="{{ $user->name}}"></td>
                                    <td>
                                        @error('name')
                                            {{ $message}}
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>Email</td>
                                    <td><input type="email" name="email" id="" placeholder="Masukkan email user" value="{{ $user->email}}"></td>
                                </tr>

                                <tr>
                                    <td>Password</td>
                                    <td><input type="password" name="password"id="" placeholder="Masukkan nama produk" value="{{ $user->password}}"></td>
                                    <td>
                                        @error('password')
                                            {{ $message}}
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="" id="" value="Simpan"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
