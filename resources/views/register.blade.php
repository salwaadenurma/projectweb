<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <style>
        body{
            font-family: 'oxygen', sans-serif;
            font-size: 15px;
            color: $dark;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center">
            <div class="col-lg-9">
                <div class="shadow">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="bg-register h-100" style="background-color:#c2acad; background-size: cover"></div>
                        </div>
                        <div class="col-lg-7">
                            <h5 class="mb-1 fw-bold text-center" style="margin-top: 6%">Register Here!</h5>
                            <div class="p mb-4 text-muted text-center">Please fill all fields below</div>
                            <div class="p-5 ps-4 text-dark">
                                <form action="/register" method="post" >
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="name"> Name</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="pass" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="pass">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Level</label>
                                        <input type="text" class="form-control" id="levels_id">
                                    </div>
                                    <div class="d-grid mb-3">
                                        <button type="submit" class="btn py-2" style="background-color: #c2acad">Register</button>
                                    </div>
                                </form>
                                <p class="text-muted fz-13 text-center">Already have an account? <a href="/login">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>




