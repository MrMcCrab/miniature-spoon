<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href='stylesheet.css' rel='stylesheet'>
  </head>

<body>

<?php
include 'session.php';
include 'connect.php';


$oldpass = $_POST['oldpass'];
$newpass1 = $_POST['newpass1'];
$newpass2 = $_POST['newpass2'];
$loginUser = $_SESSION['login_user'];

$sql = "SELECT user_pass FROM users WHERE user_name = '$loginUser'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$hashFromDb = $row['user_pass'];

$passwordHash = password_verify($oldpass, $hashFromDb);


if ($newpass1 != $newpass2) {
  $error = "<div class='error'>Passwords do not match</div>";
  header("refresh:2; url=changePassword.php");
  echo $error;
}elseif (!$passwordHash) {
  $error = "<div class='error'>Wrong current password</div>";
  header("refresh:2; url=changePassword.php");
}else {
  $pwdhash = password_hash($newpass1, PASSWORD_DEFAULT);
  $sql2 = "UPDATE users SET user_pass = '$pwdhash' WHERE user_name = '$loginUser'";
  if ($db->query($sql2)) {
    echo "<div class='echo'>Password succesfully changed</div>";
    header("refresh:2; url=index.php");
  }else {
    echo "<div class='echo'>Something went wrong, password couldn't be changed</div>";
    header("refresh:2; url=index.php");
  }
}



include 'footer.php';
?>
