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
    <section>
        <nav class="navbar navbar-expand-sm text-white" style="background-color: #695a5b; height:12vh">
            <div class="container">
                <a href="#" class="navbar-brand text-white fw-bold" style="font-size: 30px">BUTTERFLY</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/home" class="nav-link text-white" style="font-size: 18px">Home</a>
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
    <div class="container">
        {{-- <div class="title text-center">
             <h2 class="position-relative d-inline-block fw-bold" style=" width: 4px; position:absolute; height:50px; background-color:violet; margin-left: -11%;  transform:translateY(-50%)">Category</h2>
        </div> --}}

        <div class="row g-0 filter-button-group">
            {{-- <div class="d-flex flex-wrap justify-content-center mt-1">
                <button type="button" class="btn m-2 active-filter-btn text-dark" style="background-color: violet; color:white; border-color:violet important; border-radius: 15px;">ALL</button>
                <button type="button" class="btn m-2 active-filter-btn text-dark" data-filter=".jaket" style="border-radius: 15px">jaket</button>
                <button type="button" class="btn m-2 active-filter-btn text-dark" data-filter=".shirt" style="border-radius: 15px">T-Shirt</button>
                <button type="button" class="btn m-2 active-filter-btn text-dark" data-filter=".kemeja" style="border-radius: 15px">Kemeja</button>
            </div> --}}

            <div class="collection-list mt-4 row gx-0 gy-3 ">
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 jaket shadow">
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
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 shirt shadow">
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
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 kemeja shadow">
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
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 jaket shadow">
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
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 shirt shadow">
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
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 kemeja shadow">
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
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 jaket shadow">
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
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 shirt shadow">
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
    </div>

</body>
</html>l
