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
                        <?php
                        $userId = $_SESSION["user"]["id"];
                        $rs = Database::search("SELECT * FROM `order_history`WHERE `user_id` = '$userId'");
                        $num = $rs->num_rows;
                        ?>

                        <div class="col-12 d-flex justify-content-between">
                            <h5 class="my-2" style="font-weight: 600; font-size: 18px;">My Orders (<?php echo ($num); ?>)</h5>
                        </div>

                        <?php
                        if ($num > 0) {
                            for ($i = 0; $i < $num; $i++) {
                                $row = $rs->fetch_assoc();

                                $rs2 = Database::search("SELECT * FROM `stock` INNER JOIN `size` ON `stock`.`size_id` = `size`.`id` INNER JOIN `material` ON `stock`.`material_id` = `material`.`id` INNER JOIN `color` ON `stock`.`color_id` = `color`.`id` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id` INNER JOIN `status` ON `stock`.`status_id` = `status`.`id` INNER JOIN `business` ON `stock`.`business_id` = `business`.`id` INNER JOIN `category` ON `category`.`id` = `product`.`category_id` INNER JOIN `brand` ON `brand`.`id` = `product`.`brand_id` INNER JOIN `product_type` ON `product_type`.`id` = `product`.`product_type_id` INNER JOIN `product_img` ON `product`.`id` = `product_img`.`product_id`  WHERE `product`.`id` = '" . $row["product_id"] . "'");
                                $productRow = $rs2->fetch_assoc();
                        ?>
                                <div class="col-12 d-flex justify-content-between align-items-center bg-white product p-3 mb-2 rounded-2 shadow-sm">
                                    <img src="<?php echo ($productRow["path"]); ?>" class="orders-product-img" alt="">
                                    <div class="d-grid">
                                        <h5 class="col-12 d-block text-truncate mt-2" style="font-weight: 400; font-size: 18px;"><?php echo ($productRow["title"]); ?></h5>
                                        <h5 class="" style="font-weight: 400; font-size: 14px;"><?php echo ($productRow["name"]); ?></h5>
                                        <div class="d-flex gap-1">
                                            <i class="bi bi-star-fill rating-star"></i>
                                            <i class="bi bi-star-fill rating-star"></i>
                                            <i class="bi bi-star-fill rating-star"></i>
                                            <i class="bi bi-star-half rating-star"></i>
                                            <i class="bi bi-star rating-star"></i>
                                        </div>
                                    </div>
                                    <h5 class="mt-2" style="font-weight: 400; font-size: 18px;">X<?php echo($row["qty"]);?></h5>
                                    <h5 class="mt-2" style="font-weight: 400; font-size: 18px;">$<?php echo($row["price"]);?></h5>
                                    <!-- <div class="d-grid gap-2">
                                        <a href="#" class="text-decoration-none text-dark">Order details ></a>
                                        <button class="btn btn-dark"><i class="bi bi-bag"></i></button>
                                        <button class="btn btn-dark"><i class="bi bi-trash3"></i></button>
                                    </div> -->
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="mt-2">
                                <h3 class="text-secondary"><i class="bi bi-exclamation-triangle-fill text-secondary"></i> You do not have any ordered product to show</h3>
                                <button class="btn btn-dark mt-2">Start Shopping</button>
                            </div>
                        <?php
                        }
                        ?>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>