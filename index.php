<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ZenCart</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body style="background-color: #F1F5F9;">

    <!-- Header -->
    <?php include "includes/header.php"; ?>
    <!-- Header -->

    <div class="container-fluid">
        <div class="row">

            <!-- Carousel -->
            <div class="col-12 bg-white mb-4" style="height: 400px;">

            </div>
            <!-- Carousel -->

        </div>

        <div class="container">
            <!-- Functions -->
            <div class="col-12 mb-4">
                <div class="row d-flex align-items-center justify-content-center">

                    <div class="col-12 col-lg-4 p-1">
                        <div class="bg-white d-flex align align-items-center justify-content-center shadow-sm gap-2 p-2" style="height: 180px;">
                            <img src="assets/images/service.png" alt="">
                            <div class="d-grid text-secondary">
                                <h5 style="font-weight: bold;">24/7 Service</h5>
                                <h5 style="font-size: 16px;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 p-1">
                        <div class="bg-white d-flex align align-items-center justify-content-center shadow-sm gap-2 p-2" style="height: 180px;">
                            <img src="assets/images/confirmation.png" alt="">
                            <div class="d-grid text-secondary">
                                <h5 style="font-weight: bold;">Fast & Secured Payments</h5>
                                <h5 style="font-size: 16px;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 p-1">
                        <div class="bg-white d-flex align align-items-center justify-content-center shadow-sm gap-2 p-2" style="height: 180px;">
                            <img src="assets/images/express-delivery.png" alt="">
                            <div class="d-grid text-secondary">
                                <h5 style="font-weight: bold;">Fast Delivery</h5>
                                <h5 style="font-size: 16px;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Functions -->

            <!-- Categories -->
            <div class="col-12 mb-3 d-flex flex-wrap justify-content-center gap-2">

                <a href="#" class="text-decoration-none text-dark">
                    <h5 class="rounded-pill bg-white px-4 py-2">Shoes</h5>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 class="rounded-pill bg-white px-4 py-2">Trouser</h5>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 class="rounded-pill bg-white px-4 py-2">Shorts</h5>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 class="rounded-pill bg-white px-4 py-2">Shirts</h5>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 class="rounded-pill bg-white px-4 py-2">Accessories</h5>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 class="rounded-pill bg-white px-4 py-2">Jeans</h5>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 class="rounded-pill bg-white px-4 py-2">Jackets</h5>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 class="rounded-pill bg-white px-4 py-2">Pants</h5>
                </a>
                <a href="#" class="text-decoration-none text-dark">
                    <h5 class="rounded-pill bg-white px-4 py-2">Hoodies</h5>
                </a>

            </div>
            <!-- Categories -->

            <!-- Product Cards -->
            <div class="col-12" style="margin-bottom: 500px;">
                <div class="row d-flex justify-content-center">

                    <!-- Card 1 -->
                        <div class="col-6 col-lg-3 col-xl-2">
                            <div class="row p-1">

                                <div class="card shadow-sm product border-0 p-0 position-relative">
                                    <div class="row card-body p-2">
                                        <div class="position-absolute d-flex justify-content-end">
                                            <a href="#" class="text-decoration-none text-dark fs-4">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </div>

                                        <img src="assets/images/black-t.png" alt="product-image" class="product-image">

                                        <div class="text-center justify-content-center mt-2">
                                            <h2 class="product-category">Man Shoes</h2>
                                            <h2 class="product-name">Blue Nike Shoe</h2>
                                            <div class="d-flex justify-content-center mb-2 gap-1">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-half rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <h2 class="after-price">$32.99</h2>
                                                <h2 class="real-price"><s>$38.99</s></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <!-- Card 1 -->

                    <!-- Card 2 -->
                    <div class="col-6 col-lg-3 col-xl-2">
                        <div class="row p-1">

                            <a href="#" class="p-0 text-decoration-none">
                                <div class="card shadow-sm border-0 p-0 position-relative">
                                    <div class="row card-body p-2">
                                        <div class="position-absolute d-flex justify-content-end">
                                            <a href="#" class="text-decoration-none text-dark fs-4">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </div>

                                        <img src="assets/images/red-t.png" alt="product-image" class="product-image">

                                        <div class="text-center justify-content-center mt-2">
                                            <h2 class="product-category">Man Shoes</h2>
                                            <h2 class="product-name">Blue Nike Shoe</h2>
                                            <div class="d-flex justify-content-center mb-2 gap-1">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-half rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <h2 class="after-price">$32.99</h2>
                                                <h2 class="real-price"><s>$38.99</s></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Card 2 -->

                    <!-- Card 3 -->
                    <div class="col-6 col-lg-3 col-xl-2">
                        <div class="row p-1">

                            <a href="#" class="p-0 text-decoration-none">
                                <div class="card shadow-sm border-0 p-0 position-relative">
                                    <div class="row card-body p-2">
                                        <div class="position-absolute d-flex justify-content-end">
                                            <a href="#" class="text-decoration-none text-dark fs-4">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </div>

                                        <img src="assets/images/green-t.png" alt="product-image" class="product-image">

                                        <div class="text-center justify-content-center mt-2">
                                            <h2 class="product-category">Man Shoes</h2>
                                            <h2 class="product-name">Blue Nike Shoe</h2>
                                            <div class="d-flex justify-content-center mb-2 gap-1">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-half rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <h2 class="after-price">$32.99</h2>
                                                <h2 class="real-price"><s>$38.99</s></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Card 3 -->

                    <!-- Card 4 -->
                    <div class="col-6 col-lg-3 col-xl-2">
                        <div class="row p-1">

                            <a href="#" class="p-0 text-decoration-none">
                                <div class="card shadow-sm border-0 p-0 position-relative">
                                    <div class="row card-body p-2">
                                        <div class="position-absolute d-flex justify-content-end">
                                            <a href="#" class="text-decoration-none text-dark fs-4">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </div>

                                        <img src="assets/images/olive-t.png" alt="product-image" class="product-image">

                                        <div class="text-center justify-content-center mt-2">
                                            <h2 class="product-category">Man Shoes</h2>
                                            <h2 class="product-name">Blue Nike Shoe</h2>
                                            <div class="d-flex justify-content-center mb-2 gap-1">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-half rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <h2 class="after-price">$32.99</h2>
                                                <h2 class="real-price"><s>$38.99</s></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Card 4 -->

                    <!-- Card 4 -->
                    <div class="col-6 col-lg-3 col-xl-2">
                        <div class="row p-1">

                            <a href="#" class="p-0 text-decoration-none">
                                <div class="card shadow-sm border-0 p-0 position-relative">
                                    <div class="row card-body p-2">
                                        <div class="position-absolute d-flex justify-content-end">
                                            <a href="#" class="text-decoration-none text-dark fs-4">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </div>

                                        <img src="assets/images/olive-t.png" alt="product-image" class="product-image">

                                        <div class="text-center justify-content-center mt-2">
                                            <h2 class="product-category">Man Shoes</h2>
                                            <h2 class="product-name">Blue Nike Shoe</h2>
                                            <div class="d-flex justify-content-center mb-2 gap-1">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-half rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <h2 class="after-price">$32.99</h2>
                                                <h2 class="real-price"><s>$38.99</s></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Card 4 -->

                    <!-- Card 4 -->
                    <div class="col-6 col-lg-3 col-xl-2">
                        <div class="row p-1">

                            <a href="#" class="p-0 text-decoration-none">
                                <div class="card shadow-sm border-0 p-0 position-relative">
                                    <div class="row card-body p-2">
                                        <div class="position-absolute d-flex justify-content-end">
                                            <a href="#" class="text-decoration-none text-dark fs-4">
                                                <i class="bi bi-heart"></i>
                                            </a>
                                        </div>

                                        <img src="assets/images/olive-t.png" alt="product-image" class="product-image">

                                        <div class="text-center justify-content-center mt-2">
                                            <h2 class="product-category">Man Shoes</h2>
                                            <h2 class="product-name">Blue Nike Shoe</h2>
                                            <div class="d-flex justify-content-center mb-2 gap-1">
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-fill rating-star"></i>
                                                <i class="bi bi-star-half rating-star"></i>
                                                <i class="bi bi-star rating-star"></i>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <h2 class="after-price">$32.99</h2>
                                                <h2 class="real-price"><s>$38.99</s></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Card 4 -->

                </div>
            </div>
            <!-- Product Cards -->
        </div>

    </div>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>