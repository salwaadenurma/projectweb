<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <style>
        .checkout-container {
            margin-top: 30px;
        }
        .summary-box {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
        }
    </style>
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

<div class="container checkout-container">
    <div class="row">
        <!-- Payment Form -->
        <div class="col-md-7">
            <h4 class="mb-4">Billing Details</h4>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="zip">Zip Code</label>
                        <input type="text" class="form-control" id="zip" required>
                    </div>
                </div>

                <h5 class="mt-4">Payment Information</h5>

                <div class="form-group">
                    <label for="cardName">Name on Card</label>
                    <input type="text" class="form-control" id="cardName" required>
                </div>

                <div class="form-group">
                    <label for="cardNumber">Card Number</label>
                    <input type="text" class="form-control" id="cardNumber" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="expiration">Expiration Date</label>
                        <input type="text" class="form-control" id="expiration" placeholder="MM/YY" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-block">Place Order</button>
            </form>
        </div>

        <!-- Order Summary -->
        <div class="col-md-5">
            <div class="summary-box">
                <h5>Order Summary</h5>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product 1</h6>
                            <small class="text-muted">Quantity: 2</small>
                        </div>
                        <span class="text-muted">Rp 200,000</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product 2</h6>
                            <small class="text-muted">Quantity: 1</small>
                        </div>
                        <span class="text-muted">Rp 150,000</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (IDR)</span>
                        <strong>Rp 350,000</strong>
                    </li>
                </ul>
                <button class="btn btn-primary btn-block">Edit Cart</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
