<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - ZenCart</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body style="background-color: #F1F5F9;">

    <!-- Header -->
    <?php include "includes/header.php"; ?>
    <!-- Header -->

    <!-- Heading -->
    <!-- <div class="col-12 d-flex justify-content-center align-items-center bg-dark" style="height: 200px;">
        <h5 class="mt-2 fs-3 text-white" style="font-weight: 600;">New Arrivals</h5>
    </div> -->
    <!-- Heading -->

    <div class="container">
        <div class="row d-flex justify-content-center gap-2 p-2">

            <nav class="mt-3" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-secondary" href="/zencart/index.php">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Shopping Cart</li>
                </ol>
            </nav>

            <!-- Products List -->
            <div class="col">
                <div class="row">

                    <h5 class="mt-2 fs-4 mb-3" style="font-weight: 600;">Shopping Cart</h5>

                    <div class="col-12 px-2">
                        <!-- Item -->
                        <div class="card border-0 product shadow-sm mb-2">
                            <div class="card-body d-flex p-0 position-relative">
                                <div>
                                    <img src="assets/images/olive-t.png" class="cart-prd-img" alt="">
                                </div>
                                <div class="p-2">
                                    <h5 class="product-category">Shoes</h5>
                                    <h5 class="product-name">Blue Nike Shoe</h5>

                                    <div class="d-flex gap-2 align-items-end">
                                        <h5 class="after-price">$32.99</h5>
                                        <h5 class="real-price"><s>$38.99</s></h5>
                                    </div>

                                    <div class="d-flex gap-1">
                                        <i class="bi bi-star-fill rating-star"></i>
                                        <i class="bi bi-star-fill rating-star"></i>
                                        <i class="bi bi-star-fill rating-star"></i>
                                        <i class="bi bi-star-half rating-star"></i>
                                        <i class="bi bi-star rating-star"></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end align-items-end w-100">
                                    <div class="col-2 d-flex align-items-center gap-2 p-2">
                                        <label class="form-label mt-2" for="">Qty</label>
                                        <input class="form-control" onchange="" value="1" min="1" type="number">
                                    </div>
                                </div>
                                <div class="position-absolute end-0 m-2">
                                    <a href="#" class="text-decoration-none text-dark fs-5 cart-prd-icon mx-2"><i class="bi bi-heart"></i></a>
                                </div>
                                <div class="position-absolute end-0 me-5 m-2">
                                    <a href="#" class="text-decoration-none text-dark fs-5 cart-prd-icon mx-2"><i class=" bi bi-trash"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Item -->

                    </div>

                </div>
            </div>
            <!-- Products List -->

            <!-- Summery -->
            <div class="col-12 col-lg-3">
                <div class="row">

                    <div class="col-12 bg-white rounded-2 p-2 shadow-sm">
                        <h5 class=" fs-4 mb-4" style="font-weight: 600;">Summery</h5>

                        <div class="p-2">
                            <div class="d-flex justify-content-between mb-2">
                                <h5>Total</h5>
                                <h4 class="fw-bold">$98.97</h4>
                            </div>

                            <a href="#" class="btn w-100 text-white fs-5 p-2" style="height: 50px; background-color: #2C7596;">Checkout</a>
                        </div>
                    </div>

                    <div class="col-12">

                    </div>

                </div>
            </div>
            <!-- Summery -->

        </div>
    </div>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>