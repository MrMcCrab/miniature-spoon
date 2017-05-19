<?php
   session_start();
   //Destroys session when login button is pressed
   if(session_destroy()) {
      header("Location: index.php");
   }
?>
