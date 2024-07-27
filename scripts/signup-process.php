<?php
include "../includes/connection.php";
include "mobile-valid.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$country_code = $_POST["country_code"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];

$phoneNumberHandler = new PhoneNumberHandler($mobile, $country_code);
$processedNumber = $phoneNumberHandler->processPhoneNumber();

if (empty($fname)) {
    echo ("Please enter your first name.");
} else if (empty($lname)) {
    echo ("Please enter your last name.");
} else if (empty($email)) {
    echo ("Please enter your email address.");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Please enter a valid email address.");
} else if (empty($mobile)) {
    echo ("Please enter your mobile number.");
} else if ($processedNumber == "Invalid") {
    echo ("Please enter a valid mobile number.");
} else if (empty($password)) {
    echo ("Please enter your password.");
} else if (empty($repassword)) {
    echo ("Please enter your re-password.");
} else if ($password != $repassword) {
    echo ("Passwords do not match. Please re-enter your password.");
} else {
    $rs = Database::search("SELECT * FROM `user` WHERE `email`='$email'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo("This account already exists. Please sign in.");
    } else {
        Database::iud("INSERT INTO `user`(`fname`,`lname`,`email`,`mobile`,`password`,`status_id`,`account_type_id`) VALUES ('$fname','$lname','$email','$processedNumber','$password',1,2)");
        echo("success");
    }
}
