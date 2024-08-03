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
                <div class="row card shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="mb-4" style="font-weight: 400; font-size: 28px;">Business Register</h5>

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

                        <div class="mb-2">
                            <div class="d-flex align-items-center justify-content-between">
                                <label for="address">Address</label>
                           </div>
                            <div class="d-flex justify-content-center rounded-2 p-2" style="border-style: dashed; border-color: #2c759650;">
                                <button class="btn border-0" data-bs-toggle="modal" data-bs-target="#selectAddress">Select Your Address</button>
                            </div>
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
                                                <label class="form-label" for="province">Province / State</label>
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
                                                        $rs4 = Database::search("SELECT * FROM `country`");
                                                        $num4 = $rs4->num_rows;

                                                        for ($i = 0; $i < $num4; $i++) {
                                                            $row4 = $rs4->fetch_assoc();
                                                        ?>
                                                            <option value="<?php echo ($row4["id"]); ?>"><?php echo ($row4["name"]); ?></option>
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
                        
                        <div class="mb-4">
                            <label for="id">Country</label>
                            <select class="form-select shadow-none" id="id">
                                <?php
                                $rs = Database::search("SELECT * FROM `country`");
                                $num = $rs->num_rows;

                                for ($i = 0; $i < $num; $i++) {
                                    $row = $rs->fetch_assoc();
                                ?>
                                    <option value="<?php echo ($row["id"]); ?>"><?php echo ($row["name"]); ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <button class="btn w-100 mb-3 text-white" style="background-color: #2c7596;" onclick="bizRegister();">Continue</button>
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