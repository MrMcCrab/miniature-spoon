<?php
   include('session.php');
?>
<html">

   <head>
      <title>Logged in</title>
   </head>

   <body>
      <h1>Welcome <?php echo $login_session; ?></h1>
   </body>
   <?php
   header("refresh:2; url=index.php");
   ?>
</html>
