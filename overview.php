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
                    <li class="breadcrumb-item text-dark active" aria-current="page">Account</li>
                </ol>
            </nav>

            <div class="col-12">
                <div class="row gap-4">

                    <div class="col-3 d-none d-md-block p-2 bg-white shadow-sm rounded-2">
                        <h5 class="mt-2" style="font-weight: 600; font-size: 18px;">Personal Account</h5>

                        <div class="d-grid">
                            <a href="overview.php" class="text-decoration-none text-dark p-2 acc-navigation nav-selected">Overview</a>
                            <a href="settings.php" class="text-decoration-none text-dark p-2 acc-navigation">Settings</a>
                            <a href="orders.php" class="text-decoration-none text-dark p-2 acc-navigation">My Orders</a>
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
                        <div class="row gap-3">

                            <div class="col-12 p-3 d-flex justify-content-between align-items-center shadow-sm rounded-2 bg-white">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="assets/images/profile-img/user1.jpg" class="overview-user-img" alt="user-img">
                                    <h5 class="mt-2 fs-4" style="font-weight: 600;">Saneth Dassanayake</h5>
                                </div>
                                <div>
                                    <a href="settings.php" class="btn me-0 rounded-pill shadow border-0">
                                        <i class="bi bi-gear fs-4"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 p-3 d-flex justify-content-between align-items-center shadow-sm rounded-2 bg-white">
                                <div class="col-3 d-grid text-center">
                                    <i class="bi bi-box-seam fs-1"></i>
                                    <a href="orders.php" class="mt-2 text-decoration-none text-dark text-nowrap" style="font-size: 18px;">My Orders</a>
                                </div>
                                <div class="col-3 d-grid text-center">
                                    <i class="bi bi-chat-left-dots fs-1"></i>
                                    <a href="messages.php" class="mt-2 text-decoration-none text-dark text-nowrap" style="font-size: 18px;">Messages</a>
                                </div>
                                <div class="col-3 d-grid text-center">
                                    <i class="bi bi-credit-card fs-1"></i>
                                    <a href="payments.php" class="mt-2 text-decoration-none text-dark text-nowrap" style="font-size: 18px;">Payments</a>
                                </div>
                                <div class="col-3 d-grid text-center">
                                    <i class="bi bi-star fs-1"></i>
                                    <a href="ratings.php" class="mt-2 text-decoration-none text-dark text-nowrap" style="font-size: 18px;">My Ratings</a>
                                </div>
                            </div>

                            <div class="col-12 p-3 shadow-sm rounded-2 bg-white">
                                <div class="col-12">
                                    <h3 class="" style="font-weight: 600;">Start selling with ZenCart</h3>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos voluptatum consequatur.</p>
                                    <button class="btn btn-dark mb-2">Start Selling</button>
                                </div>
                            </div>

                            <div class="col-12 p-3 shadow-sm rounded-2 bg-white">
                                <div class="col-12 mb-3">
                                    <h5 class="" style="font-weight: 600; font-size: 18px;">Selling Account</h5>
                                </div>

                                <div class="col-12 d-flex">
                                    <div class="col-3 d-grid text-center">
                                        <i class="bi bi-gear fs-1"></i>
                                        <a href="orders.php" class="mt-2 text-decoration-none text-dark text-nowrap" style="font-size: 18px;">Settings</a>
                                    </div>
                                    <div class="col-3 d-grid text-center">
                                        <i class="bi bi-archive fs-1"></i>
                                        <a href="messages.php" class="mt-2 text-decoration-none text-dark text-nowrap" style="font-size: 18px;">My Products</a>
                                    </div>
                                    <div class="col-3 d-grid text-center">
                                    <i class="bi bi-diagram-2 fs-1"></i>
                                        <a href="payments.php" class="mt-2 text-decoration-none text-dark text-nowrap" style="font-size: 18px;">Stock</a>
                                    </div>
                                    <div class="col-3 d-grid text-center">
                                    <i class="bi bi-graph-up-arrow fs-1"></i>
                                        <a href="ratings.php" class="mt-2 text-decoration-none text-dark text-nowrap" style="font-size: 18px;">Sales</a>
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