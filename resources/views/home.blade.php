<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-solid-straight/css/uicons-solid-straight.css'>
    <style>

        .navbar{
            box-shadow: 0 3px 9px 3px rgb(0, 0, 0, 0.1);
        }
        .row .card:hover{
            box-shadow: 2px 2px 2px rgb(0, 0, 0, 0.4);
            transform: scale(1.02)
        }
        .category-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }


    </style>
</head>
<body>
    {{-- header --}}
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
    <section>
        <div class="container-fluid  d-flex algn-items-center justfy-content-center" style="background-image: url('images/slide-01.jpg'); height: 100vh;" id="home">
            <div class="banner text-center" style="margin-top: 15%">
                <div class="banner-content" style="margin-left: 10%;">
                    <h1 class="banner-title " style="padding-top:10%">Selamat Datang di Butterfly</h1>
                    <p class="banner-subtitle ">Temukan penawaran terbaik dan produk terbaru kami.</p>
                    <a href="#" class="btn banner-button text-white" style="background-color: #312627">Jelajahi Sekarang</a>
                </div>
            </div>
    </section>
    <section>
        {{-- product --}}
        <div class="container mt-5" id="produk">
            <h1 class="text-center mb-4 fw-bold">Product</h1>
            <div class="row mx-auto gap-1">
                @foreach ($produk as $key => $item)

                <div class="col-1  card mr-2 ml-2" style="width: 16rem; ">
                    <img src="{{ asset('storage/gambar/'.$item->gambar)}}" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                      <h5 class="card-title">{{ $item->nama}}</h5>
                      <p class="card-text" style="margin-top:-10px; margin-bottom:1px">{{ $item->deskripsi}}</p>
                      <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span><br>
                      <button  type="button" class="btn btn-danger" >Rp. {{$item->harga}}</button>
                      <a href="/detailproduk/{{ $item->id}}" class="btn btn-primary">Detail</a>
                      <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg>
                    </div>
                </div>
                @endforeach

                {{-- <div class="card mr-2 ml-2" style="width: 16rem; ">
                    <img src="images/shirt1.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                      <h5 class="card-title">shirt japanese</h5>
                      <p class="card-text" style="margin-top:-10px; margin-bottom:1px">jaket anti dingin</p>
                      <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span><br>
                      <button  type="button" class="btn btn-danger" >RP.300.000</button>
                      <a href="/keranjang" class="btn btn-primary">Detail</a>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg>
                    </div>
                </div>
                <div class="card mr-2 ml-2" style="width: 16rem; ">
                    <img src="images/vest1.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                      <h5 class="card-title">vest sundhne</h5>
                      <p class="card-text" style="margin-top:-10px; margin-bottom:1px">jaket anti dingin</p>
                      <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span><br>
                      <button  type="button" class="btn btn-danger" >RP.300.000</button>
                      <a href="/keranjang" class="btn btn-primary">Detail</a>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg>
                    </div>
                </div>
                <div class="card mr-2 ml-2" style="width: 16rem; ">
                    <img src="images/shirt3.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                      <h5 class="card-title">shirt melow</h5>
                      <p class="card-text" style="margin-top:-10px; margin-bottom:1px">jaket anti dingin</p>
                      <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span><br>
                      <button  type="button" class="btn btn-danger" >RP.300.000</button>
                      <a href="/keranjang" class="btn btn-primary">Detail</a>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg>
                    </div>
                </div>
                <div class="card mr-2 ml-2" style="width: 16rem; ">
                    <img src="images/jaket3.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                      <h5 class="card-title">jaket Quu</h5>
                      <p class="card-text" style="margin-top:-10px; margin-bottom:1px">jaket anti dingin</p>
                      <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span><br>
                      <button  type="button" class="btn btn-danger" >RP.300.000</button>
                      <a href="/keranjang" class="btn btn-primary">Detail</a>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg>
                    </div>
                </div> --}}

                {{-- <div class="card mr-2 ml-2" style="width: 16rem; ">
                    <img src="images/shirt2.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                      <h5 class="card-title">shirt money</h5>
                      <p class="card-text" style="margin-top:-10px; margin-bottom:1px">jaket anti dingin</p>
                      <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span><br>
                      <button  type="button" class="btn btn-danger" >RP.300.000</button>
                      <a href="/keranjang" class="btn btn-primary">Detail</a>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg>
                    </div>
                </div>

                <div class="card mr-2 ml-2" style="width: 16rem; ">
                    <img src="images/vest2.webp" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                      <h5 class="card-title">vest aust</h5>
                      <p class="card-text" style="margin-top:-10px; margin-bottom:1px">jaket anti dingin</p>
                      <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span><br>
                      <button  type="button" class="btn btn-danger" >RP.300.000</button>
                      <a href="/keranjang" class="btn btn-primary">Detail</a>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg>
                    </div>
                </div>

                <div class="card mr-2 ml-2" style="width: 16rem; ">
                    <img src="images/jaket3.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                      <h5 class="card-title">jaket ribb</h5>
                      <p class="card-text" style="margin-top:-10px; margin-bottom:1px">jaket anti dingin</p>
                      <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span><br>
                      <button  type="button" class="btn btn-danger" >RP.300.000</button>
                      <a href="/keranjang" class="btn btn-primary">Detail</a>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg>
                    </div>
                </div>

                <div class="card mr-2 ml-2" style="width: 16rem; ">
                    <img src="images/vest3.webp" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                      <h5 class="card-title">Jvest cool</h5>
                      <p class="card-text" style="margin-top:-10px; margin-bottom:1px">jaket anti dingin</p>
                      <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span><br>
                      <button  type="button" class="btn btn-danger" >RP.300.000</button>
                      <a href="/keranjang" class="btn btn-primary">Detail</a>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg>
                    </div>
                </div>

                <div class="card mr-2 ml-2" style="width: 16rem; ">
                    <img src="images/jaket.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                      <h5 class="card-title">Jaketcuss</h5>
                      <p class="card-text" style="margin-top:-10px; margin-bottom:1px">jaket anti dingin</p>
                      <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                      <span class="text-primary"><i class="fi fi-ss-star"></i></span><br>
                      <button  type="button" class="btn btn-danger" >RP.300.000</button>
                      <a href="/keranjang" class="btn btn-primary">Detail</a>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <section class="py-5" id="kategori">
        <div class="container mt-5">
            <h2 class="text-center mb-4">Kategori Terpopuler</h2>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="images/vest1.jpg" class="card-img-top" alt="Kategori 1">
                        <div class="card-body">
                            <h5 class="card-title text-center">VEST</h5>
                            <a href="#" class="btn btn-primary btn-sm" style="margin-left: 24%">Lihat Produk Lainnya</a>
                        </div>
                    </div>
                </div>
                <!-- Card Kategori 2 -->
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="images/shirt2.jpg" class="card-img-top" alt="Kategori 2">
                        <div class="card-body">
                            <h5 class="card-title text-center">SHIRT</h5>
                            <a href="/kategori-produk" class="btn btn-primary btn-sm" style="margin-left: 24%">Lihat Produk Lainnya</a>
                        </div>
                    </div>
                </div>
                <!-- Card Kategori 3 -->
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="images/jaket.jpg" class="card-img-top" alt="Kategori 3">
                        <div class="card-body">
                            <h5 class="card-title text-center">JAKET</h5>
                            <a href="#" class="btn btn-primary btn-sm" style="margin-left: 24%">Lihat Produk Lainnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="images/shirt4.webp" class="card-img-top" alt="Kategori 3">
                        <div class="card-body">
                            <h5 class="card-title text-center">KEMEJA</h5>
                            <a href="#" class="btn btn-primary btn-sm" style="margin-left: 24%">Lihat Produk Lainnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container">
            <div class="title text-center">
                 <h2 class="position-relative d-inline-block fw-bold" style=" width: 4px; position:absolute; height:50px; background-color:violet; margin-left: -11%;  transform:translateY(-50%)">Category</h2>
            </div>

            <div class="row g-0 filter-button-group">
                <div class="d-flex flex-wrap justify-content-center mt-1">
                    <button type="button" class="btn m-2 active-filter-btn text-dark" style="background-color: violet; color:white; border-color:violet important; border-radius: 15px;">ALL</button>
                    <button type="button" class="btn m-2 active-filter-btn text-dark" data-filter=".jaket" style="border-radius: 15px">jaket</button>
                    <button type="button" class="btn m-2 active-filter-btn text-dark" data-filter=".shirt" style="border-radius: 15px">T-Shirt</button>
                    <button type="button" class="btn m-2 active-filter-btn text-dark" data-filter=".kemeja" style="border-radius: 15px">Kemeja</button>
                </div>

                <div class="collection-list mt-4 row gx-0 gy-3">
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 jaket">
                        <div class="collection-img" style="margin-top: 5%;  ">
                            <img src="images/category-3.jpg" alt="" style=" border-radius: 15px" class="w-100" >
                        </div>
                        <div class="">
                            <div class="rating">
                                <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                            </div>
                            <p class="">gray shirt</p>
                            <p class="" style="margin-top: -4%; font-size: 18px">shirt money</p>
                            <span style="font-size: 18px">Rp. 75.000 </span>
                            <a href="" class="btn btn-sm " style="background-color: #cfbdbe; margin-left:35%; font-size:17px">Put in Bag</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 shirt">
                        <div class="collection-img" style="margin-top: 5%;  ">
                            <img src="images/jaket.jpg" alt="" style=" border-radius: 15px" class="w-100" >
                        </div>
                        <div class="">
                            <div class="rating">
                                <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                            </div>
                            <p class="">gray shirt</p>
                            <p class="" style="margin-top: -4%; font-size: 18px">shirt money</p>
                            <span style="font-size: 18px">Rp. 75.000 </span>
                            <a href="" class="btn btn-sm " style="background-color: #b39e9e; margin-left:35%; font-size:17px">Put in Bag</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 kemeja">
                        <div class="collection-img" style="margin-top: 5%;  ">
                            <img src="images/shirt1.jpg" alt="" style=" border-radius: 15px" class="w-100" >
                        </div>
                        <div class="">
                            <div class="rating">
                                <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                            </div>
                            <p class="">gray shirt</p>
                            <p class="" style="margin-top: -4%; font-size: 18px">shirt money</p>
                            <span style="font-size: 18px">Rp. 75.000 </span>
                            <a href="" class="btn btn-sm " style="background-color: #b39e9e; margin-left:35%; font-size:17px">Put in Bag</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 jaket">
                        <div class="collection-img" style="margin-top: 5%;  ">
                            <img src="images/category-1.jpg" alt="" style="  border-radius: 15px" class="w-100" >
                        </div>
                        <div class="">
                            <div class="rating">
                                <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                            </div>
                            <p class="">gray shirt</p>
                            <p class="" style="margin-top: -4%; font-size: 18px">shirt money</p>
                            <span style="font-size: 18px">Rp. 75.000 </span>
                            <a href="" class="btn btn-sm " style="background-color: #b39e9e; margin-left:35%; font-size:17px">Put in Bag</a>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 shirt">
                        <div class="collection-img" style="margin-top: 5%;  ">
                            <img src="images/jaket3.jpg" alt="" style=" border-radius: 15px" class="w-100" >
                        </div>
                        <div class="">
                            <div class="rating">
                                <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                            </div>
                            <p class="">gray shirt</p>
                            <p class="" style="margin-top: -4%; font-size: 18px">shirt money</p>
                            <span style="font-size: 18px">Rp. 75.000 </span>
                            <a href="" class="btn btn-sm " style="background-color: #b39e9e; margin-left:35%; font-size:17px">Put in Bag</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 kemeja">
                        <div class="collection-img" style="margin-top: 5%;  ">
                            <img src="images/vest1.jpg" alt="" style=" border-radius: 15px" class="w-100" >
                        </div>
                        <div class="">
                            <div class="rating">
                                <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                            </div>
                            <p class="">gray shirt</p>
                            <p class="" style="margin-top: -4%; font-size: 18px">shirt money</p>
                            <span style="font-size: 18px">Rp. 75.000 </span>
                            <a href="" class="btn btn-sm " style="background-color: #b39e9e; margin-left:35%; font-size:17px">Put in Bag</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 jaket">
                        <div class="collection-img" style="margin-top: 5%;  ">
                            <img src="images/shirt3.jpg" alt="" style=" border-radius: 15px" class="w-100" >
                        </div>
                        <div class="">
                            <div class="rating">
                                <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                            </div>
                            <p class="">gray shirt</p>
                            <p class="" style="margin-top: -4%; font-size: 18px">shirt money</p>
                            <span style="font-size: 18px">Rp. 75.000 </span>
                            <a href="" class="btn btn-sm " style="background-color: #b39e9e; margin-left:35%; font-size:17px">Put in Bag</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 shirt">
                        <div class="collection-img" style="margin-top: 5%;  ">
                            <img src="images/jaket4.jpg" alt="" style=" border-radius: 15px" class="w-100" >
                        </div>
                        <div class="">
                            <div class="rating">
                                <span class="text-primary"><i class="fi fi-rs-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                                <span class="text-primary"><i class="fi fi-ss-star"></i></span>
                            </div>
                            <p class="">gray shirt</p>
                            <p class="" style="margin-top: -4%; font-size: 18px">shirt money</p>
                            <span style="font-size: 18px">Rp. 75.000 </span>
                            <a href="" class="btn btn-sm " style="background-color: #b39e9e; margin-left:35%; font-size:17px">Put in Bag</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    <section>
        {{-- footer --}}
        <footer class="container-fluid  text-white " style=" height: 30vh; background-color:#695a5b">
            <h4 class="fw-bold" style="font-size: 15px: padding-left: 30%; " >Bantuan</h4>
            <h4 class="fw-bold" style="font-size: 14px; margin-left: 5%; padding-top: 10%">Dapatkan promo terbaru dan info lainnya hanya <br> dengan mendaftarkan emailmu!</h4>
        </footer>

    </section>


    <script>{{ asset('asset/bootstrap-5.0.2-dist/js/bootstrap.js')}}</script>


</body>
</html>
