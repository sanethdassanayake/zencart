<?php
include "../includes/connection.php";
include "mobile-valid.php";

$bname = $_POST["bname"];
$country_code = $_POST["country_code"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$address = $_POST["address"];
$country_id = $_POST["country_id"];

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
} else if (empty($address)) {
    echo ("Looks like you forgot to enter your address. Please add it so we can get in touch.");
} else if (empty($country_id)) {
    echo ("Hey, you missed selecting your country. Please choose it from the list.");
} else {
    $rs1 = Database::search("SELECT * FROM `business` WHERE `name`='$bname'");
    $num1 = $rs1->num_rows;

    $rs2 = Database::search("SELECT `id` FROM `user` WHERE `email`='$email'");
    $num2 = $rs2->num_rows;

    if ($num2 > 0) {
        $row = $rs2->fetch_assoc();

        if ($num2 > 0) {
            echo ("This business is already exist");
        } else {
            Database::iud("INSERT INTO `business` (`name`, `mobile`, `email`, `address`, `user_id`, `country_id`) VALUES ('$bname', '$mobile', '$email', '$address', '" . $row["id"] . "', '$country_id')");

            echo ("success");
        }
    }else{
        echo("signin");
    }
}
