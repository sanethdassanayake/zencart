<?php
include "includes/connection.php";
session_start();

$userId = $_SESSION["user"]["id"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ZenCart</title>

    <link rel="icon" href="assets/images/system-img/icon.png">
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
                    <li class="breadcrumb-item text-dark active" aria-current="page">Payments</li>
                </ol>
            </nav>

            <div class="col-12">
                <div class="row gap-4">

                    <div class="col-3 p-2 d-none d-md-block bg-white rounded-2 shadow-sm">
                        <h5 class="mt-2" style="font-weight: 600; font-size: 18px;">Personal Account</h5>

                        <div class="d-grid">
                            <a href="overview.php" class="text-decoration-none text-dark p-2 acc-navigation">Overview</a>
                            <a href="settings.php" class="text-decoration-none text-dark p-2 acc-navigation">Settings</a>
                            <a href="orders.php" class="text-decoration-none text-dark p-2 acc-navigation">My Orders</a>
                            <a href="messages.php" class="text-decoration-none text-dark p-2 acc-navigation">Messages</a>
                            <a href="payments.php" class="text-decoration-none text-dark p-2 acc-navigation nav-selected">Payments</a>
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
                        <div class="col-12 d-flex justify-content-between mb-3">
                            <h5 class="my-2" style="font-weight: 600; font-size: 18px;">Payments</h5>
                            <!-- <div>
                                <select class="form-select border-0 shadow-sm" name="" id="">
                                    <option value="1" selected>Newest Items</option>
                                    <option value="2">Oldest Itmes</option>
                                    <option value="3">Payment Success</option>
                                    <option value="4">Payment Declined</option>
                                    <option value="5">Price: High to Low</option>
                                    <option value="6">Price: Low to High</option>
                                </select>
                            </div> -->
                        </div>

                        <div class="col-12 bg-white rounded-2 shadow-sm p-2">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td scope="col">Product Name</td>
                                        <td>Qty</td>
                                        <td>Price</td>
                                        <td>Time/Date</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    
                                    $rs = Database::search("SELECT * FROM `payment_history` INNER JOIN `product` ON `product`.`id` = `payment_history`.`product_id` WHERE `user_id` = '$userId'");
                                    $num = $rs->num_rows;

                                    for ($i = 0; $i < $num; $i++) {
                                        $row = $rs->fetch_assoc();

                                    ?>
                                        <tr>
                                            <td scope="row"><?php echo ($row["title"]); ?></td>
                                            <td>x<?php echo ($row["qty"]); ?></td>
                                            <td>$<?php echo ($row["cost"]); ?></td>
                                            <td><?php echo ($row["time_date"]); ?></td>
                                            <?php
                                            if ($row["status_id"] == '3') {
                                            ?>
                                                <td class="badge bg-success text-white m-2">Success</td>
                                            <?php
                                            } else {
                                            ?>
                                                <td class="badge bg-danger text-white m-2">Declined</td>
                                            <?php
                                            }
                                            ?>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
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