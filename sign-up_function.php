<?php
$link = mysqli_connect("localhost", "safixkx1_vps", "penguin231");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

function clean_str($string) {
   $string = trim($string);
   $string = stripslashes($string);
   return $string;
}

$user_first_name = mysqli_real_escape_string($link, clean_str($_POST['first_name']));
$user_last_name = mysqli_real_escape_string($link, clean_str($_POST['last_name']));
$user_address = mysqli_real_escape_string($link, clean_str($_POST['street']) . ", " . clean_str($_POST['city']) . ", " . clean_str($_POST['state']));
$user_level = $_POST['user_level'];
$user_email = mysqli_real_escape_string($link, clean_str($_POST['user_email']));
$user_description = mysqli_real_escape_string($link, clean_str($_POST['user_description']));
$user_hashed = password_hash(mysqli_real_escape_string($link, $_POST['user_password']), PASSWORD_DEFAULT);

$sql = "INSERT INTO User (First, Last, Address, Experience, Email, HashedPass, Description) VALUES ('$first_name', '$last_name', '$user_address', '$user_level', '$user_email', '$user_hashed', '$user_description')";

function querry($querry, $link_parem) {
  if (!preg_match('/@/', clean_str($_POST['user_email'])) or !preg_match('/./', clean_str($_POST['user_email']))){
      echo "Please use a correct email";
  } elseif (clean_str($_POST['user_email']) != clean_str($_POST['user_email_conf'])) {
    echo "Emails don't match!";
  } elseif (mysqli_query($link_parem, $querry)){
          echo "Records added successfully.";
          mysqli_close($link);
          header('Location: http://safixk.x10host.com/');

      } else {
          echo "ERROR: Could not execute querry " . mysqli_error($link_parem);
          mysqli_close($link);
          header('Location: http://safixk.x10host.com/');
  } 
}


querry($sql, $link);
?>