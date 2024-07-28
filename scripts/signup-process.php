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
    echo("Please enter your first name to proceed.");
} else if (empty($lname)) {
    echo("Don't forget to enter your last name.");
} else if (empty($email)) {
    echo("We need your email address to continue.");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("Hmm, that doesn't look like a valid email address. Could you check it again?");
} else if (empty($mobile)) {
    echo("Please provide your mobile number so we can reach you.");
} else if ($processedNumber == "Invalid") {
    echo("The mobile number you entered seems to be invalid. Please try again.");
} else if (empty($password)) {
    echo("We need your password to keep your account secure. Please enter it.");
} else if (empty($repassword)) {
    echo("Please confirm your password by entering it again.");
} else if (strlen($password) < 6) {
    echo("Your password is a bit too short. It needs to be at least 6 characters long.");
} else if (strlen($password) > 20) {
    echo("Whoa, that's a long password! Please keep it under 20 characters.");
} else if ($password != $repassword) {
    echo("The passwords do not match. Please re-enter them to ensure they're the same.");
} else {
    $rs = Database::search("SELECT * FROM `user` WHERE `email`='$email'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo("This account already exists. Please sign in.");
    } else {
        Database::iud("INSERT INTO `user`(`fname`, `lname`, `email`, `mobile`, `password`, `status_id`, `account_type_id`) VALUES ('$fname', '$lname', '$email', '$processedNumber', '$password', 1, 2)");
        echo("success");
    }
}
