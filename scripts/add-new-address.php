<?php
include "../includes/connection.php";
session_start();
$user = $_SESSION["user"];

$lineOne = $_POST["lineOne"];
$lineTwo = $_POST["lineTwo"];
$city = $_POST["city"];
$province = $_POST["province"];
$pcode = $_POST["pcode"];
$country = $_POST["country"];

if (empty($lineOne)) {
    echo ("Please enter your address line 1 to continue.");
} else if (empty($lineTwo)) {
    echo ("Don't forget to add your address line 2.");
} else if (empty($city)) {
    echo ("We need your city for a complete address.");
} else if (empty($province)) {
    echo ("Please provide your province or state.");
} else if (empty($pcode)) {
    echo ("Your postal code is missing. Please enter it.");
} else if ($country == "0") {
    echo ("Please select your country to finalize the address.");
} else {
    $rs = Database::search("SELECT * FROM `address` WHERE `line_one` = '$lineOne' AND `line_two` = '$lineTwo' AND `city` = '$city' AND `province` = '$province' AND `postal_code` = '$pcode' AND `country_id` = '$country' AND `user_id` = '" . $user["id"] . "' AND `status_id` = '1'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo("This address already exists in our records. Please enter a new one.");
    } else {
        Database::iud("INSERT INTO `address`(`line_one`,`line_two`, `city`,`province`, `postal_code`,`country_id`,`user_id`,`status_id`) VALUES
           ('$lineOne','$lineTwo','$city','$province','$pcode','$country','" . $user["id"] . "', 1)");
        echo ("success");
    }
}
