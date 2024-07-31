<?php
$password = $_POST["password"];
$repassword = $_POST["repassword"];



if (empty($password)) {
    echo("We need your password to keep your account secure. Please enter it.");
} else if (empty($repassword)) {
    echo("Please confirm your password by entering it again.");
} else if (strlen($password) < 6) {
    echo("Your password is a bit too short. It needs to be at least 6 characters long.");
} else if (strlen($password) > 20) {
    echo("Whoa, that's a long password! Please keep it under 20 characters.");
} else if($password != $repassword) {
    echo("The passwords do not match. Please re-enter them to ensure they're the same.");
}else{
    echo("success");
}
?>