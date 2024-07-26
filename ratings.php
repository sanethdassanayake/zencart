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
    <?php
    include "includes/header.php";
    ?>
    <!-- Header -->

    <div class="container mt-4">
        <div class="row">

            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-secondary" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Ratings</li>
                </ol>
            </nav>

            <div class="col-12">
                <div class="row gap-4">

                    <div class="col-3 p-2 d-none d-md-block bg-white">
                        <h5 class="mt-2" style="font-weight: 600; font-size: 18px;">Personal Account</h5>

                        <div class="d-grid">
                            <a href="overview.php" class="text-decoration-none text-dark p-2 acc-navigation">Overview</a>
                            <a href="settings.php" class="text-decoration-none text-dark p-2 acc-navigation">Settings</a>
                            <a href="orders.php" class="text-decoration-none text-dark p-2 acc-navigation">My Orders</a>
                            <a href="messages.php" class="text-decoration-none text-dark p-2 acc-navigation">Messages</a>
                            <a href="payments.php" class="text-decoration-none text-dark p-2 acc-navigation">Payments</a>
                            <a href="ratings.php" class="text-decoration-none text-dark p-2 acc-navigation mb-3 nav-selected">My Ratings</a>
                        </div>

                        <h5 class="mt-2" style="font-weight: 600; font-size: 18px;">Selling Account</h5>

                        <div class="d-grid">
                            <a href="#" class="text-decoration-none text-dark p-2 acc-navigation">Overview</a>
                            <a href="#" class="text-decoration-none text-dark p-2 acc-navigation">Settings</a>
                            <a href="#" class="text-decoration-none text-dark p-2 acc-navigation">My Products</a>
                            <a href="#" class="text-decoration-none text-dark p-2 acc-navigation">Stock</a>
                            <a href="#" class="text-decoration-none text-dark p-2 acc-navigation mb-3">Sales</a>
                        </div>
                    </div>

                    <div class="col">
                        <h5 class="my-2" style="font-weight: 600; font-size: 18px;">My Ratings</h5>

                        <div class="col-12 p-2">
                            <div class="row gap-2">

                                <div class="d-flex rounded-2 bg-white shadow-sm py-2 px-3">
                                    <div>
                                        <img src="assets/images/product-img/green-t.png" class="product-rating-img" alt="">
                                    </div>
                                    <div class="d-grid">
                                        <h5 class="mt-2" style="font-weight: 400; font-size: 18px;">Blue Nike Shoe M size men original</h5>
                                        <h5 class="" style="font-weight: 400; font-size: 14px;">Men T-shirts</h5>
                                        <div class="d-flex gap-1">
                                            <i class="bi bi-star-fill rating-star"></i>
                                            <i class="bi bi-star-fill rating-star"></i>
                                            <i class="bi bi-star-fill rating-star"></i>
                                            <i class="bi bi-star-half rating-star"></i>
                                            <i class="bi bi-star rating-star"></i>
                                        </div>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat dolorem delectus totam dolorum a sed obcaecati consectetur dolor</p>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <span style="font-size: 14px;">23:32PM 05-23-2024</span>
                                            </div>
                                            <div class="d-flex justify-content-end gap-2">
                                                <a href="#" class="text-dark">Edit</a>
                                                <a href="#" class="text-dark">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="d-flex rounded-2 bg-white shadow-sm py-2 px-3">
                                    <div>
                                        <img src="assets/images/product-img/green-t.png" class="product-rating-img" alt="">
                                    </div>
                                    <div class="d-grid">
                                        <h5 class="mt-2" style="font-weight: 400; font-size: 18px;">Blue Nike Shoe M size men original</h5>
                                        <h5 class="" style="font-weight: 400; font-size: 14px;">Men T-shirts</h5>
                                        <div class="d-flex gap-1">
                                            <i class="bi bi-star-fill rating-star"></i>
                                            <i class="bi bi-star-fill rating-star"></i>
                                            <i class="bi bi-star-fill rating-star"></i>
                                            <i class="bi bi-star-half rating-star"></i>
                                            <i class="bi bi-star rating-star"></i>
                                        </div>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat dolorem delectus totam dolorum a sed obcaecati consectetur dolor</p>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <span style="font-size: 14px;">23:32PM 05-23-2024</span>
                                            </div>
                                            <div class="d-flex justify-content-end gap-2">
                                                <a href="#" class="text-dark">Edit</a>
                                                <a href="#" class="text-dark">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>