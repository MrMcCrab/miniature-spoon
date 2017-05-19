<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href='stylesheet.css' rel='stylesheet'>
  </head>

<body>

<?php
   session_start();
   include"connect.php";
   //include"session.php";

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $l_username = mysqli_real_escape_string($db, $_POST['username']);
      $l_password = mysqli_real_escape_string($db, $_POST['password']);

      //Check if login credentails match database
      //$sql = "SELECT user_name FROM users WHERE user_name = '$l_username' and user_pass = '$l_password'";
      $sql = "SELECT user_pass FROM users WHERE user_name = '$l_username'";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $hashFromDb = $row['user_pass'];

      $passwordHash = password_verify($l_password, $hashFromDb);

      //$count = mysqli_num_rows($result);
      // Returns only one result if username and password matches

      //if($count == 1) {
        if($passwordHash){

        $_SESSION['login_user'] = $l_username;

         header("location: logged_in.php");
      }else {
         $error = "<div class='error'>Invalid username or password</div>";
         echo $error;
         header("refresh:2; url=index.php");
      }
   }else{
     header ("refresh:1 url=index.php");
   }
?>

  </body>
</html>
