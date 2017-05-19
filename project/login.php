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


   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $l_username = mysqli_real_escape_string($db, $_POST['username']);
      $l_password = mysqli_real_escape_string($db, $_POST['password']);

      //Check if login credentails match database
      $sql = "SELECT user_pass FROM users WHERE user_name = '$l_username'";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $hashFromDb = $row['user_pass'];

      //returns true is entered password matches one in db
      $passwordHash = password_verify($l_password, $hashFromDb);

        if($passwordHash){

          //Set sessions variable
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
