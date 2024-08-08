<?php
session_start();

if (isset($_SESSION["user"])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <?php
    include "includes/connection.php";
    ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bussiness Register - ZenCart</title>

        <link rel="icon" href="assets/images/system-img/icon.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
    </head>

    <body>

        <div class="container">
            <div class="row d-flex justify-content-center vh-100">

                <div style="width: 400px;">
                    <div class="d-flex justify-content-center my-4">
                        <img src="assets/images/system-img/logo.png" style="width: auto; height: 80px;" alt="logo">
                    </div>

                    <div class="row card position-relative shadow-sm mb-3">
                        <div class="position-absolute" style="margin-top: 14px;">
                            <a href="index.php" class="text-decoration-none text-secondary fs-4"><i class="bi bi-arrow-left-circle"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="mb-4" style="font-weight: 400; font-size: 28px;">Business Register</h5>
                            </div>

                            <div class="mb-2">
                                <label for="bname">Business name</label>
                                <input class="form-control shadow-none" id="bname" type="text">
                            </div>

                            <div class="mb-2">
                                <label for="mobile">Mobile</label>
                                <div class="input-group">
                                    <select class="form-select shadow-none" id="country_code">
                                        <?php
                                        $rs = Database::search("SELECT * FROM `country`");
                                        $num = $rs->num_rows;

                                        for ($i = 0; $i < $num; $i++) {
                                            $row = $rs->fetch_assoc();
                                        ?>
                                            <option value="<?php echo ($row["country_code"]); ?>">+<?php echo ($row["calling_code"]); ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <input type="text" class="form-control shadow-none" id="mobile" style="width: 250px;" aria-label="Text input with dropdown button">
                                </div>
                            </div>

                            <div class="mb-2">
                                <label for="email">Email address</label>
                                <input class="form-control shadow-none" id="email" type="text">
                            </div>

                            <div class="mb-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label for="address">Address</label>
                                </div>
                                <div class="d-flex justify-content-center rounded-2 p-2" style="border-style: dashed; border-color: #2c759650;">
                                    <?php
                                    if (isset($_POST['btnradio'])) {

                                        $selectedId = $_POST['btnradio'];
                                        $addressResult = Database::search("SELECT * FROM `address` WHERE `id` = '$selectedId'");
                                        $addressRow = $addressResult->fetch_assoc();

                                        $country_rs2 = Database::search("SELECT `name` FROM `country` WHERE `id` = '" . $addressRow["country_id"] . "'");
                                        $country_name2 = $country_rs2->fetch_assoc();

                                    ?>
                                        <div class="d-flex gap-5">
                                            <div class="d-grid text-start">
                                                <span><?php echo ($addressRow["line_one"]); ?></span>
                                                <span><?php echo ($addressRow["line_two"]); ?></span>
                                                <span><?php echo ($addressRow["city"]); ?></span>
                                            </div>
                                            <div class="d-grid text-start">
                                                <span><?php echo ($addressRow["province"]); ?></span>
                                                <span><?php echo ($addressRow["postal_code"]); ?></span>
                                                <span><?php echo ($country_name2["name"]); ?></span>
                                            </div>
                                        </div>
                                        <?php
                                        ?>
                                        <a class="" href="" data-bs-toggle="modal" data-bs-target="#selectAddress">Change</a>
                                    <?php
                                    } else {
                                    ?>
                                        <button class="btn border-0" data-bs-toggle="modal" data-bs-target="#selectAddress">Select Your Address</button>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <!-- Select address model -->
                                <div class="modal fade" id="selectAddress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="d-flex justify-content-between align-items-center p-2">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Select Address</h1>
                                                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="border border-warning bg-warning-subtle border-start-0 border-end-0 text-center">
                                                <p class="my-2">If you want to manage your address? you can manage that <a href="#">here</a></p>
                                            </div>

                                            <div class="modal-body">

                                                <div class="d-flex justify-content-end">
                                                    <a class="text-dark" href="#">Create New</a>
                                                </div>

                                                <div class="d-grid gap-2" role="group" aria-label="Basic radio toggle button group">

                                                    <?php
                                                    $userId = $_SESSION["user"]["id"];
                                                    $rs2 = Database::search("SELECT * FROM `address` WHERE `user_id` = '$userId'");
                                                    $num2 = $rs2->num_rows;

                                                    for ($i = 0; $i < $num2; $i++) {
                                                        $row2 = $rs2->fetch_assoc();

                                                        $country_rs = Database::search("SELECT `name` FROM `country` WHERE `id` = '" . $row2["country_id"] . "'");
                                                        $country_name = $country_rs->fetch_assoc();

                                                    ?>  
                                                        <input type="radio" class="btn-check" name="btnradio" id="<?php echo ($row2["id"]); ?>" value="<?php echo ($row2["id"]); ?>" autocomplete="off">
                                                        <label class="btn btn-outline-dark" for="<?php echo ($row2["id"]); ?>">
                                                            <div class="d-flex gap-5">
                                                                <div class="d-grid text-start">
                                                                    <span><?php echo ($row2["line_one"]); ?></span>
                                                                    <span><?php echo ($row2["line_two"]); ?></span>
                                                                    <span><?php echo ($row2["city"]); ?></span>
                                                                </div>
                                                                <div class="d-grid text-start">
                                                                    <span><?php echo ($row2["province"]); ?></span>
                                                                    <span><?php echo ($row2["postal_code"]); ?></span>
                                                                    <span><?php echo ($country_name["name"]); ?></span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    <?php
                                                    }
                                                    ?>

                                                    <div class="d-flex justify-content-end">
                                                        <button class="btn btn-primary mt-3" onclick="selectAddress();">Select</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Select address model -->

                                <!-- Add address model -->
                                <div class="modal fade" id="addAddress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="d-flex justify-content-between align-items-center p-2">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Address</h1>
                                                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-2">
                                                    <label class="form-label" for="lineOne">Address Line 1</label>
                                                    <input class="form-control shadow-none" id="lineOne" type="text" placeholder="123 Elm Street">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label" for="lineTwo">Address Line 2</label>
                                                    <input class="form-control shadow-none" id="lineTwo" type="text" placeholder="Apt 4B">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label" for="city">City</label>
                                                    <input class="form-control shadow-none" id="city" type="text" placeholder="Colombo">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label" for="province">Province/ State</label>
                                                    <input class="form-control shadow-none" id="province" type="text" placeholder="Western Province">
                                                </div>
                                                <div class="d-flex gap-2">
                                                    <div class="w-100">
                                                        <label class="form-label" for="pcode">Postal Code</label>
                                                        <input class="form-control shadow-none" id="pcode" type="text" placeholder="00500">
                                                    </div>
                                                    <div class="w-100">
                                                        <label class="form-label" for="country">Country</label>

                                                        <select class="form-select shadow-none" id="country">
                                                            <option value="0">Select Country</option>
                                                            <?php
                                                            $rs3 = Database::search("SELECT * FROM `country`");
                                                            $num3 = $rs3->num_rows;

                                                            for ($i = 0; $i < $num3; $i++) {
                                                                $row3 = $rs3->fetch_assoc();
                                                            ?>
                                                                <option value="<?php echo ($row3["id"]); ?>"><?php echo ($row3["name"]); ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end gap-2 p-2">
                                                <button type="button" class="btn btn-primary" onclick="addNewAddress();">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add address model -->
                            </div>

                            <button class="btn w-100 mb-3 text-white" style="background-color: #2c7596;" onclick="bizRegister(<?php echo ($selectedId); ?>);">Continue</button>

                            <hr class="border-secondary">
                            <p style="font-size: 14px;">New to Zencart? <a href="signup.php">Create new account</a></p>
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
