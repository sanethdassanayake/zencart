<?php
include "../includes/connection.php";

$userId = $_POST["userId"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];

if (empty($userId)) {
    header("Location: signin.php");
}
if (empty($fname)) {
    echo ("Please enter your first name to proceed.");
} else if (empty($lname)) {
    echo ("Don't forget to enter your last name.");
} else if (empty($password)) {
    echo ("We need your password to keep your account secure. Please enter it.");
} else if (empty($mobile)) {
    echo ("Please provide your mobile number so we can reach you.");
} else {

    Database::iud("UPDATE `user` SET `fname` = '$fname', `lname` = '$lname', `mobile` = '$mobile',  `password` = '$password' WHERE `id` = '$userId'");
    echo ("success");
}
