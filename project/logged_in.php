
<!--Show welcome message and redirect to index-->
<?php
   include "session.php";
?>
<html>
  <link href='stylesheet.css' rel='stylesheet'>
   <head>
      <title>Logged in</title>
   </head>

   <body>
      <div class='error'>Welcome <?php echo $login_session; ?></div>
   </body>
   <?php
   header("refresh:2; url=index.php");
   ?>
</html>
