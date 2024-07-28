<?php

include "../includes/connection.php";
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

if (empty($email)) {
    echo ("Oops! Looks like you forgot to enter your email. Please give it another try.");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Hmm, that doesn't look like a valid email address. Could you double-check it?");
} else if (empty($password)) {
    echo ("Hey, we need your password to keep your account secure. Please enter it.");
} else {

    $rs = Database::search("SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'");
    $num = $rs->num_rows;

    if ($num > 0) {
        $row = $rs->fetch_assoc();

        if ($row["status_id"] == 1) {
            $_SESSION["user"] = $row;

            if ($_POST["rmb"] == "true") {
                setcookie("email", $email, time() + (60 * 60 * 24 * 7), "/");
                setcookie("password", $password, time() + (60 * 60 * 24 * 7), "/");
            } else {
                setcookie("email", "", time() - 3600, "/");
                setcookie("password", "", time() - 3600, "/");
            }
            

            echo ("success");
        } else {
            echo ("Oh no! Your account has been temporarily blocked. Please contact support for assistance.");
        }
    } else {
        echo ("It looks like this account isn't registered yet. Please sign up to get started.");
    }
}