<?php
include "includes/connection.php";
session_start();
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
    <?php
    include "includes/header.php";
    ?>
    <!-- Header -->

    <div class="container my-4">
        <div class="row">

            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-secondary" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Messages</li>
                </ol>
            </nav>

            <div class="col-12">
                <div class="row gap-2">

                    <div class="col-3 p-2 d-none d-md-block bg-white shadow-sm rounded-2">
                        <h5 class="mt-2" style="font-weight: 600; font-size: 18px;">Personal Account</h5>

                        <div class="d-grid">
                            <a href="overview.php" class="text-decoration-none text-dark p-2 acc-navigation">Overview</a>
                            <a href="ratings.php" class="text-decoration-none text-dark p-2 acc-navigation">Settings</a>
                            <a href="orders.php" class="text-decoration-none text-dark p-2 acc-navigation">My Orders</a>
                            <a href="messages.php" class="text-decoration-none text-dark p-2 acc-navigation nav-selected">Messages</a>
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
                        <div class="col-12 mb-3">
                            <h5 class="my-2" style="font-weight: 600; font-size: 18px;">Messages</h5>
                        </div>

                        <div class="col-12 d-flex align-items-start bg-white rounded-2 shadow-sm">
                            <div class="nav flex-column nav-pills bg-white" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link d-flex align-items-center p-1 active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <div class="p-1">
                                        <img src="/zencart/assets/images/profile-img/66adcb9eec0eb.png" class="message-user-img" alt="">
                                    </div>
                                    <div class="text-start d-none d-lg-block p-1">
                                        Saneth Dassanayake
                                    </div>
                                </button>
                                <button class="nav-link d-flex align-items-center p-1" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    <div class="p-1">
                                        <img src="/zencart/assets/images/profile-img/66ae6ce9e329a.png" class="message-user-img" alt="">
                                    </div>
                                    <div class="text-start d-none d-lg-block p-1">
                                        David Guitta
                                    </div>
                                </button>
                            </div>
                            <div class="tab-content w-100 border-start rounded-2" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">

                                    <div class="col-12 d-flex align-items-center p-2 gap-2">
                                        <img src="/zencart/assets/images/profile-img/66adcb9eec0eb.png" class="message-user-img" alt="">
                                        <h5 class="my-2" style="font-weight: 600; font-size: 18px;">Saneth Dassanayake</h5>
                                    </div>
                                    <div class="col-12 p-2 border-top border-bottom overflow-y-scroll" style="height: 500px;">
                                        <div class="d-flex justify-content-start his-msg">
                                            <h5 class="message-box">Hello</h5>
                                        </div>
                                        <div class="d-flex justify-content-end my-msg">
                                            <h5 class="message-box">Hello there!</h5>
                                        </div>
                                        <div class="d-flex justify-content-start his-msg">
                                            <h5 class="message-box">Is stock available?</h5>
                                        </div>
                                        <div class="d-flex justify-content-end my-msg">
                                            <h5 class="message-box">Yes Sir</h5>
                                        </div>
                                        <div class="d-flex justify-content-start his-msg">
                                            <h5 class="message-box">thank you</h5>
                                        </div>
                                        <div class="d-flex justify-content-end my-msg">
                                            <h5 class="message-box">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                                        </div>
                                        <div class="d-flex justify-content-start his-msg">
                                            <h5 class="message-box">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium placeat explicabo harum deserunt.</h5>
                                        </div>
                                        <div class="d-flex justify-content-start his-msg">
                                            <h5 class="message-box">Lorem ipsum dolor sit amet consectetur</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex gap-2 p-2">
                                        <input class="form-control" type="text" placeholder="Type your message here">
                                        <button class="btn btn-dark"><i class="bi bi-send"></i></button>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">

                                    <div class="col-12 d-flex align-items-center p-2 gap-2">
                                        <img src="/zencart/assets/images/profile-img/66ae6ce9e329a.png" class="message-user-img" alt="">
                                        <h5 class="my-2" style="font-weight: 600; font-size: 18px;">Saneth Dassanayake</h5>
                                    </div>
                                    <div class="col-12 p-2 border-top border-bottom overflow-y-scroll" style="height: 500px;">
                                        <div class="d-flex justify-content-start his-msg">
                                            <h5 class="message-box">Hello</h5>
                                        </div>
                                        <div class="d-flex justify-content-end my-msg">
                                            <h5 class="message-box">Hello there!</h5>
                                        </div>
                                        <div class="d-flex justify-content-start his-msg">
                                            <h5 class="message-box">Is stock available?</h5>
                                        </div>
                                        <div class="d-flex justify-content-end my-msg">
                                            <h5 class="message-box">Yes Sir</h5>
                                        </div>
                                        <div class="d-flex justify-content-start his-msg">
                                            <h5 class="message-box">thank you</h5>
                                        </div>
                                        <div class="d-flex justify-content-end my-msg">
                                            <h5 class="message-box">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                                        </div>
                                        <div class="d-flex justify-content-start his-msg">
                                            <h5 class="message-box">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laudantium placeat explicabo harum deserunt.</h5>
                                        </div>
                                        <div class="d-flex justify-content-start his-msg">
                                            <h5 class="message-box">Lorem ipsum dolor sit amet consectetur</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex gap-2 p-2">
                                        <input class="form-control" type="text" placeholder="Type your message here">
                                        <button class="btn btn-dark"><i class="bi bi-send"></i></button>
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