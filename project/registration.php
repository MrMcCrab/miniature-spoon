

<!-- registration sript -->
<?php
include "connect.php";

$uname = $_POST["username"];
$pwd1 = $_POST["password1"];
$pwd2 = $_POST["password2"];
$email1 = $_POST["email1"];
$email2 = $_POST["email2"];

//Check if username is taken
$query = mysqli_query($db, "select user_name FROM users where user_name = '$uname' ");
$rows = mysqli_fetch_array($query, MYSQLI_ASSOC);
if ($rows >= 1) {
  echo "Username is taken";
  header("refresh:2; url=register.php");
  die();
} else if
//Check if passwords and emails match
   ($pwd1 != $pwd2) {
  echo "Passwords do not match";
  header("refresh:2; url=register.php");
  die();
}else if($email1 != $email2){
  echo "Emails do not match";
  header("refresh:2; url=register.php");
  die();
}else {
  //Register new user
  $sql = "insert into users(user_name, user_pass, user_email)
    values ('$uname', '$pwd1', '$email1')";
  if ($db->query($sql) === TRUE) {
     echo "You have succesfully registered";
     } else {
     echo $db->error;
  }
}

//Redirect to index after succesfull registration
header("refresh:2; url=index.php");
die();
?>
