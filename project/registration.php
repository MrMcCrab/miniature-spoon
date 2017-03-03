

<!-- Login sript -->
<?php
include "connect.php";

$uname = $_POST["username"];
$pwd = $_POST["password"];
$email = $_POST["email"];

$sql = "insert into users(user_name, user_pass, user_email)
  values ('$uname', '$pwd', '$email')";
if ($db->query($sql) === TRUE) {
   echo "You have succesfully registered";
   } else {
   echo $db->error;
}

header("refresh:2; url=index.php");
die();
?>
