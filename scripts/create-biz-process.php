<?php
include "../includes/connection.php";
include "mobile-valid.php";

$bname = $_POST["bname"];
$country_code = $_POST["country_code"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$address = $_POST["address"];

$phoneNumberHandler = new PhoneNumberHandler($mobile, $country_code);
$processedNumber = $phoneNumberHandler->processPhoneNumber();

if (empty($bname)) {
    echo ("Uh-oh! It looks like you missed entering your business name. Can you fill that in?");
} else if (empty($mobile)) {
    echo ("We need your mobile number to reach you. Please provide it.");
} else if ($processedNumber == "Invalid") {
    echo ("The mobile number you entered seems to be invalid. Please try again.");
} else if (empty($email)) {
    echo ("Please enter your email address to proceed.");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Hmm, that doesn't look like a valid email address. Could you check it again?");
} else if (empty($address)) {
    echo ("Looks like you forgot to enter your address. Please add it so we can get in touch.");
} else {

    $userRs = Database::search("SELECT `id` FROM `user` WHERE `email` = '$email'");
    $userNum = $userRs->num_rows;

    if ($userNum > 0) {

        $userId = $userRs->fetch_assoc();

        $rs = Database::search("SELECT * FROM `business` WHERE `name` = '$bname'");
        $num = $rs->num_rows;

        if ($num > 0) {
            echo ("This business has been already rigistered!");
        } else {
            Database::iud("INSERT INTO `business` (`name`,`mobile`,`email`,`user_id`,`address_id`) VALUES ('$bname','$processedNumber','$email','" . $userId["id"] . "','$address')");
            echo ("success");
        }
    } else {
        echo ("We couldn't find any users. Please sign in first.");
    }
}
