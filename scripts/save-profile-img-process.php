<?php
include "../includes/connection.php";
session_start();
$user = $_SESSION["user"];

if (empty($_FILES["img"])) {
    echo("empty");
}else{
    $rs = Database::search("SELECT * FROM `user` WHERE `id` = '" . $user["id"] . "'");
    $row = $rs->fetch_assoc();

    if (!empty($row["img"])) {
        unlink($row["img"]);
    }
    
    $newImgName = uniqid() . ".png";
    
    $path = "../assets/images/profile-img/" . $newImgName;
    move_uploaded_file($_FILES["img"]["tmp_name"], $path);
    
    $savePath = "/zencart/assets/images/profile-img/" . $newImgName;
    Database::iud("UPDATE `user` SET `img` = '$savePath' WHERE `id` = '".$user['id']."'");
    echo($path);
}