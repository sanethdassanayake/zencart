<?php
include "mobile-valid.php";

$country_code = $_POST["country_code"];
$mobile = $_POST["mobile"];

$phoneNumberHandler = new PhoneNumberHandler($mobile, $country_code);
$processedNumber = $phoneNumberHandler->processPhoneNumber();

if (empty($mobile)) {
    echo ("empty");
} else if ($processedNumber == "Invalid") {
    echo ("invalid");
} else {
    echo ($processedNumber);
}
