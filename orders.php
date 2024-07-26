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

    <div class="container my-4">
        <div class="row">

            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-secondary" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Orders</li>
                </ol>
            </nav>

            <div class="col-12">
                <div class="row gap-4">

                    <div class="col-3 p-2 d-none d-md-block p-2 bg-white shadow-sm rounded-2">
                        <h5 class="mt-2" style="font-weight: 600; font-size: 18px;">Personal Account</h5>

                        <div class="d-grid">
                            <a href="overview.php" class="text-decoration-none text-dark p-2 acc-navigation">Overview</a>
                            <a href="settings.php" class="text-decoration-none text-dark p-2 acc-navigation">Settings</a>
                            <a href="orders.php" class="text-decoration-none text-dark p-2 acc-navigation nav-selected">My Orders</a>
                            <a href="messages.php" class="text-decoration-none text-dark p-2 acc-navigation">Messages</a>
                            <a href="payments.php" class="text-decoration-none text-dark p-2 acc-navigation">Payments</a>
                            <a href="ratings.php" class="text-decoration-none text-dark p-2 acc-navigation mb-3">My Ratings</a>
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
                        <div class="col-12 d-flex justify-content-between">
                            <h5 class="my-2" style="font-weight: 600; font-size: 18px;">My Orders (3)</h5>
                            <h5 class="my-2" style="font-weight: 600; font-size: 18px;">Total: $98.97</h5>
                        </div>

                        <div class="col-12 d-flex justify-content-between align-items-center bg-white product p-3 mb-2 rounded-2 shadow-sm">
                            <img src="assets/images/product-img/green-t.png" class="orders-product-img" alt="">
                            <div class="d-grid">
                                <h5 class="col-12 d-block text-truncate mt-2" style="font-weight: 400; font-size: 18px;">Blue Nike Shoe M size men original</h5>
                                <h5 class="" style="font-weight: 400; font-size: 14px;">Men T-shirts</h5>
                                <div class="d-flex gap-1">
                                    <i class="bi bi-star-fill rating-star"></i>
                                    <i class="bi bi-star-fill rating-star"></i>
                                    <i class="bi bi-star-fill rating-star"></i>
                                    <i class="bi bi-star-half rating-star"></i>
                                    <i class="bi bi-star rating-star"></i>
                                </div>
                            </div>
                            <h5 class="mt-2" style="font-weight: 400; font-size: 18px;">x1</h5>
                            <h5 class="mt-2" style="font-weight: 400; font-size: 18px;">$32.99</h5>
                            <div class="d-grid gap-2">
                                <a href="#" class="text-decoration-none text-dark">Order details ></a>
                                <button class="btn btn-dark"><i class="bi bi-bag"></i></button>
                                <button class="btn btn-dark"><i class="bi bi-trash3"></i></button>
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