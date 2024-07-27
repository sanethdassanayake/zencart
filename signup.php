<!DOCTYPE html>
<html lang="en">

<?php
include "includes/connection.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ZenCart</title>

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
                        <h5 class="mb-4" style="font-weight: 400; font-size: 28px;">Create account</h5>
                        <div class="d-flex gap-2">
                            <div class="mb-2 w-100">
                                <label for="fname">First name</label>
                                <input class="form-control shadow-none" id="fname" type="text">
                            </div>
                            <div class="mb-2 w-100">
                                <label for="lname">Last name</label>
                                <input class="form-control shadow-none" id="lname" type="text">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="email">Email address</label>
                            <input class="form-control shadow-none" id="email" type="text">
                        </div>
                        <div class="mb-2">
                            <label for="mobile">Mobile</label>
                            <div class="input-group">
                                <select class="form-select shadow-none" id="country_code">
                                    <?php
                                    $rs = Database::search("SELECT `country_code`,`calling_code` FROM `country`");
                                    $num = $rs->num_rows;

                                    for ($i = 0; $i < $num; $i++) {
                                        $row = $rs->fetch_assoc();
                                    ?>
                                        <option value="<?php echo($row["country_code"]);?>">+<?php echo($row["calling_code"]);?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <input type="text" class="form-control shadow-none" id="mobile" style="width: 250px;" aria-label="Text input with dropdown button">
                            </div>

                        </div>
                        <div class="mb-2">
                            <label for="password">Password</label>
                            <input class="form-control shadow-none" id="password" type="password" placeholder="At least 6 characters">
                        </div>
                        <div class="mb-4">
                            <label for="repassword">Re-enter password</label>
                            <input class="form-control shadow-none" id="repassword" type="password">
                        </div>
                        <button class="btn w-100 mb-3 text-white" style="background-color: #2c7596;" onclick="signUp();">Continue</button>
                        <hr class="border-secondary">
                        <p style="font-size: 14px;">Create a bussiness with ZenCart <a href="#">Start selling items</a></p>
                        <hr class="border-secondary">
                        <p style="font-size: 14px;">Already have an account? <a href="signin.php">Sign in</a></p>
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