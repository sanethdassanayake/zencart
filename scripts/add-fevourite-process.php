<?php
include "../includes/connection.php";
session_start();
$user = $_SESSION["user"];
$userId = $user["id"];

$productId = $_GET["pid"];

if (isset($user)) {
    $rs = Database::search("SELECT * FROM `fevourite` WHERE `user_id` = '$userId' AND `product_id` = '$productId'");
    $num = $rs->num_rows;

    if ($num > 0) {
        Database::iud("DELETE FROM `fevourite` WHERE `user_id` = '$userId' AND `product_id` = '$productId'");
        echo("removed");
    } else {
        Database::iud("INSERT INTO `fevourite` (`user_id`, `product_id`) VALUES ('$userId', '$productId')");
        echo("added");
    }
}
