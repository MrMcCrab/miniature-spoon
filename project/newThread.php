<?php
  include 'connect.php';
  include 'session.php';
  include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='stylesheet.css' rel='stylesheet'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">

      <div class="col-md-2 col-lg-2">
      </div>

      <?php

        if(!isset($_SESSION['login_user'])){
          echo "You need to be logged it to create a new thread";
          header("refresh:2; url=index.php");
        }else{
          echo "<div class='col-md-8 col-lg-8'>
                  <form action='postThread.php' method='post'>

                  <div class='form-group'>
                    <input class='form-control' name='topic' placeholder='Title'>
                  </div>

                  <div class='form-group'>
                    <textarea class='form-control' rows='6' name='message' placeholder='Messsage...'></textarea>
                  </div>

                  <input class='btn btn-info post-button' type='submit' value='Submit'>

                  <form>
                    <button class='btn btn-info post-button' formaction='/index.php'>Cancel</button>
                  </form>
                </div>";
              }
       ?>
       <div class="col-md-2 col-lg-2">
       </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
