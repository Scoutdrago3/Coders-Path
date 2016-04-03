<?php
$user_email = clean_str($_POST['user_email']);
$user_password = $_POST['user_password'];
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

function clean_str($string) {
   $string = trim($string);
   $string = stripslashes($string);
   return $string;
}

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$hashed_password = mysqli_query($link, "SELECT HashedPass FROM Users WHERE Email = " . $user_email);

$authenticated = password_verify($user_password, $hashed_password);
?>