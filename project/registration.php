<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href='stylesheet.css' rel='stylesheet'>
  </head>

  <body>

<!-- registration sript -->
<?php
include "connect.php";

$uname = $_POST["username"];
$pwd1 = $_POST["password1"];
$pwd1hash = password_hash($pwd1, PASSWORD_DEFAULT);
$pwd2 = $_POST["password2"];

$email1 = $_POST["email1"];
$email2 = $_POST["email2"];

//Check if username is taken
$query = mysqli_query($db, "select user_name FROM users where user_name = '$uname' ");
$rows = mysqli_fetch_array($query, MYSQLI_ASSOC);
if ($rows >= 1) {
  echo "<div class='echo'>Username is taken</div>";
  header("refresh:2; url=register.php");
  die();
} else if
//Check if passwords and emails match
   ($pwd1hash != password_verify($pwd2, $pwd1hash)) {
  echo "<div class='echo'>Passwords do not match</div>";
  header("refresh:2; url=register.php");
  die();
}else if($email1 != $email2){
  echo "Emails do not match";
  header("refresh:2; url=register.php");
  die();
}else {
  //Register new user
  $sql = "insert into users(user_name, user_pass, user_email)
    values ('$uname', '$pwd1hash', '$email1')";
  if ($db->query($sql) === TRUE) {
     echo "<div class='echo'>You have succesfully registered</div>";
     } else {
     echo $db->error;
  }
}

//Redirect to index after succesfull registration
header("refresh:2; url=index.php");
die();
?>

  </body>
</html>
