<!--start new session and check is session exists-->
<?php
   session_start();
   include "connect.php";

   if(isset($_SESSION['login_user'])){
     $user_check = $_SESSION['login_user'];

     $ses_sql = mysqli_query($db, "select user_name FROM users where user_name = '$user_check' ");

     $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

     $login_session = $row['user_name'];
   }

?>
