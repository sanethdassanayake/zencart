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

        <div class="container my-4">
            <div class="row">

                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-decoration-none text-secondary" href="index.php">Home</a></li>
                        <li class="breadcrumb-item text-dark active" aria-current="page">Settings</li>
                    </ol>
                </nav>

                <div class="col-12">
                    <div class="row gap-4">

                        <div class="col-3 d-none d-md-block p-2 bg-white shadow-sm rounded-2">
                            <h5 class="mt-2" style="font-weight: 600; font-size: 18px;">Personal Account</h5>

                            <div class="d-grid">
                                <a href="overview.php" class="text-decoration-none text-dark p-2 acc-navigation">Overview</a>
                                <a href="settings.php" class="text-decoration-none text-dark p-2 acc-navigation nav-selected">Settings</a>
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
                            <div class="row">

                                <?php
                                $rs = Database::search("SELECT * FROM `user` WHERE `id` = '$userId'");
                                $row = $rs->fetch_assoc();
                                ?>

                                <div class="col-12 shadow-sm rounded-2 bg-white">
                                    <div class="row p-2">
                                        <div class="col-12 col-lg-3 d-flex justify-content-center mt-3 position-relative">

                                            <img src="<?php
                                                        if (!empty($row["img"])) {
                                                            echo ($row["img"]);
                                                        } else {
                                                            echo ("/zencart/assets/images/profile-img/default_user.png");
                                                        }
                                                        ?>" class="w-100 settings-user-img" alt="user-img" id="imageContainer">
                                            <div class="position-absolute end-0 me-4 mt-3">
                                                <button class="btn btn-light rounded-2" data-bs-toggle="modal" data-bs-target="#changeImage"><i class="bi bi-pencil"></i></button>

                                                <!-- Change Image Modal -->
                                                <div class="modal fade" id="changeImage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="d-flex justify-content-between align-items-center p-2">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Select Image</h1>
                                                                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <input class="form-control shadow-none" type="file" id="profileImg">
                                                            </div>
                                                            <div class="d-flex justify-content-end gap-2 p-2">
                                                                <button type="button" class="btn btn-primary" onclick="saveProfileImg();">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Change Image Modal -->
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-9 mt-3">
                                            <h5 class="mt-2 mb-4" style="font-weight: 600;">Account Details</h5>

                                            <div class="col-12 mb-3 d-flex">
                                                <div class="col-6 d-grid pe-2">
                                                    <label class="form-label" for="fname">First Name</label>
                                                    <input id="fname" class="form-control shadow-none" type="text" placeholder="First Name" value="<?php echo ($row["fname"]); ?>" oninput="activeUpdate();">
                                                </div>
                                                <div class="col-6 d-grid ps-2">
                                                    <label class="form-label" for="lname">Last Name</label>
                                                    <input id="lname" class="form-control shadow-none" type="text" placeholder="Last Name" value="<?php echo ($row["lname"]); ?>" oninput="activeUpdate();">
                                                </div>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label class="form-label" for="email">Email Address</label>
                                                <input id="email" class="form-control shadow-none" type="text" value="<?php echo ($row["email"]); ?>" disabled>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <label class="form-label" for="password">Password</label>
                                                    <a href="#" class="form-text" data-bs-toggle="modal" data-bs-target="#changePassword">Change Password</a>

                                                    <!-- Change password model -->
                                                    <div class="modal fade" id="changePassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog  modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="d-flex justify-content-between align-items-center p-2">
                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Change Password</h1>
                                                                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="mb-2">
                                                                        <label for="password2" class="form-label">Password</label>
                                                                        <input id="password2" type="password" class="form-control shadow-none">
                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <label for="repassword2" class="form-label">Re-password</label>
                                                                        <input id="repassword2" type="password" class="form-control shadow-none">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-end gap-2 p-2">
                                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="changePassword();">Change</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Change password model -->
                                                </div>
                                                <input id="password" class="form-control shadow-none" type="text" value="<?php echo ($row["password"]); ?>" disabled>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <label class="form-label" for="mobile">Mobile</label>
                                                    <a href="#" class="form-text" data-bs-toggle="modal" data-bs-target="#changeMobile">Change Mobile</a>

                                                    <!-- Change mobile model -->
                                                    <div class="modal fade" id="changeMobile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog  modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="d-flex justify-content-between align-items-center p-2">
                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Change Mobile</h1>
                                                                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <label for="mobile">Mobile</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select shadow-none" id="country_code">
                                                                            <?php
                                                                            $rs3 = Database::search("SELECT * FROM `country`");
                                                                            $num3 = $rs3->num_rows;

                                                                            if ($num > 0) {
                                                                                for ($i = 0; $i < $num3; $i++) {
                                                                                    $row3 = $rs3->fetch_assoc();
                                                                            ?>
                                                                                    <option value="<?php echo ($row3["country_code"]); ?>">+<?php echo ($row3["calling_code"]); ?></option>
                                                                            <?php
                                                                                }
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                        <input type="text" class="form-control shadow-none" id="mobile2" style="width: 250px;" aria-label="Text input with dropdown button">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-end gap-2 p-2">
                                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="changeMobile();">Change</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Change mobile model -->
                                                </div>
                                                <input id="mobile" class="form-control shadow-none" type="text" value="<?php echo ($row["mobile"]); ?>" disabled>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <div class="d-flex justify-content-end align-items-center gap-2">
                                                    <a href="settings.php" class="link text-dark text-decoration-underline">Cancel</a>
                                                    <button class="btn btn-dark" id="updateBtn" onclick="userDetailsUpdate('<?php echo ($userId); ?>');" disabled>Update</button>
                                                </div>
                                            </div>

                                            <hr class="border-secondary">

                                            <h5 class="mb-4 mt-5" style="font-weight: 600;">Shipping Address</h5>

                                            <div class="col-12 mb-2">
                                                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addAddress">Add New Address</button>
                                            </div>

                                            <!-- Add address model -->
                                            <div class="modal fade" id="addAddress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog  modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="d-flex justify-content-between align-items-center p-2">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Change Mobile</h1>
                                                            <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div>
                                                                <label class="form-label" for="lineOne">Line 1</label>
                                                                <input class="form-control" id="lineOne" type="text">
                                                            </div>
                                                            <div>
                                                                <label class="form-label" for="lineTwo">Line 1</label>
                                                                <input class="form-control" id="lineTwo" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-end gap-2 p-2">
                                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="">Change</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Add address model -->

                                            <div class="col-12 mb-3">
                                                <div class="row p-2 d-flex gap-4">

                                                    <?php
                                                    $rs2 =  Database::search("SELECT * FROM `address` WHERE `user_id`='" . $row["id"] . "'");
                                                    $num2 = $rs2->num_rows;

                                                    if ($num2 > 0) {
                                                        for ($i = 0; $i < $num2; $i++) {
                                                            $row2 = $rs2->fetch_assoc();

                                                            if ($row2["status_id"] == 1) {
                                                    ?>
                                                                <div class="p-3 shadow-sm border rounded-2">
                                                                    <div class="d-flex mb-2 gap-2">
                                                                        <i class="bi bi-geo-alt"></i>
                                                                        <div class="d-grid">
                                                                            <span class="text-wrap text-start"><?php echo ($row2["line_one"]); ?></span>
                                                                            <span class="text-wrap text-start"><?php echo ($row2["line_two"]); ?></span>
                                                                            <span class="text-wrap text-start"><?php echo ($row2["city"]); ?></span>
                                                                            <span class="text-wrap text-start"><?php echo ($row2["province"]); ?></span>
                                                                            <span class="text-wrap text-start"><?php echo ($row2["postal_code"]); ?></span>
                                                                            <?php
                                                                            $rs3 = Database::search("SELECT `name` FROM `country` WHERE `id` = '" . $row2["country_id"] . "'");
                                                                            $row3 = $rs3->fetch_assoc();
                                                                            ?>
                                                                            <span class="text-wrap text-start"><?php echo ($row3["name"]); ?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mt-2 gap-3">
                                                                        <a class="ms-4 text-decoration-underline">Edit</a>
                                                                        <a class="text-decoration-underline">Delete</a>
                                                                    </div>
                                                                </div>
                                                        <?php
                                                            }
                                                        }
                                                    } else {
                                                        ?>
                                                        <h4 class="text-secondary"><i class="bi bi-exclamation-triangle-fill text-secondary"></i> You do not have any address</h4>
                                                    <?php
                                                    }
                                                    ?>

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

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
<?php
} else {
    header('Location:signin.php');
}
?>