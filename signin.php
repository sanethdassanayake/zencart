<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - ZenCart</title>

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
                        <h5 class="mb-4" style="font-weight: 400; font-size: 28px;">Sign In</h5>

                        <?php
                        $email = "";
                        $password = "";

                        if (isset($_COOKIE["email"])) {
                            $email = $_COOKIE["email"];
                        }

                        if (isset($_COOKIE["password"])) {
                            $password = $_COOKIE["password"];
                        }
                        ?>

                        <div class="mb-2">
                            <label for="email">Email address</label>
                            <input class="form-control shadow-none" id="email" type="text" value="<?php echo ($email); ?>">
                        </div>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="password">Password</label>
                                <a class="text-decoration-none" style="font-size: 14px;" href="forgot-password.php">Forgot your password?</a>
                            </div>
                            <input class="form-control shadow-none" id="password" type="password" value="<?php echo ($password); ?>">
                        </div>
                        <button class="btn w-100 mb-3 text-white" style="background-color: #2c7596;" onclick="signIn();">Continue</button>
                        <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" id="rmb" <?php
                                                                                                    if (isset($_COOKIE["email"])) {
                                                                                                        echo ("checked");
                                                                                                    }
                                                                                                    ?>>
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                        <hr class="border-secondary">
                        <p style="font-size: 14px;">Create a bussiness with ZenCart <a href="#">Start selling items</a></p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="d-flex justify-content-center mb-3">
                        <div class="col-4">
                            <hr class="border-secondary">
                        </div>
                        <div class="col-4 text-center text-nowrap mt-1">New to ZenCart</div>
                        <div class="col-4">
                            <hr class="border-secondary">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="signup.php" class="text-decoration-none btn border shadow-sm w-100">Create your ZenCart account</a>
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