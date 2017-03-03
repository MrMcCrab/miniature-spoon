<?php
   include("connect.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $l_username = mysqli_real_escape_string($db, $_POST['username']);
      $l_password = mysqli_real_escape_string($db, $_POST['password']);

      $sql = "SELECT user_name FROM users WHERE user_name = '$l_username' and user_pass = '$l_password'";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      //$active = $row['active'];

      $count = mysqli_num_rows($result);

      // Returns only one result if username and password matches

      if($count == 1) {
         //session_register("l_username");
         $_SESSION['login_user'] = $l_username;

         header("location: logged_in.php");
      }else {
         $error = "Invalid username or password";
         echo $error;
         header("refresh:2; url=index.php");
      }
   }
?>
