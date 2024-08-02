<?php
include "includes/connection.php";
session_start();

$userId = $_SESSION["user"]["id"];

if (isset($_SESSION["user"])) {
?>
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
                <div class="col-12 bg-white mb-4 p-0">

                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/system-img/1.png" class="d-block w-100 carousel-img" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/system-img/2.png" class="d-block w-100 carousel-img" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/system-img/3.png" class="d-block w-100 carousel-img" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

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

                    <?php
                    $rs = Database::search("SELECT * FROM `category`");
                    $num = $rs->num_rows;

                    if ($num > 0) {
                        for ($i = 0; $i < $num; $i++) {
                            $row = $rs->fetch_assoc();
                    ?>
                            <a href="category-item.php?id=<?php echo ($row["id"]); ?>" class="text-decoration-none text-dark">
                                <h5 class="rounded-pill bg-white px-4 py-2"><?php echo ($row["name"]); ?></h5>
                            </a>
                    <?php
                        }
                    }
                    ?>

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

                                        <img src="assets/images/product-img/black-t.png" alt="product-image" class="product-image">

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

                                            <img src="assets/images/product-img/red-t.png" alt="product-image" class="product-image">

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

                                            <img src="assets/images/product-img/green-t.png" alt="product-image" class="product-image">

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

                                            <img src="assets/images/product-img/olive-t.png" alt="product-image" class="product-image">

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

                                            <img src="assets/images/product-img/red-t.png" alt="product-image" class="product-image">

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

                                            <img src="assets/images/product-img/red-t.png" alt="product-image" class="product-image">

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
<?php
}else{
    header('Location:signin.php');
}
?>