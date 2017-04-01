<?php
include "session.php";
include "header.php";
include "connect.php";
 ?>

<!DOCTYPE html>

<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Forum</title>

    <!-- Bootstrap -->
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='stylesheet.css' rel='stylesheet'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'></script>
      <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->

  </head>
  <body>
    <div class='container'>

      <div class='row'>
        <div class='col-md-1'>
        </div>

        <div class='col-md-9'>

          <?php
            include 'getThreads.php';
          ?>

          <form class='new-thread' action='newThread.php' method='post'>
            <input class='btn btn-info' type='submit' value='New thread'>
          </form>
        </div>

        <!--<div class='col-md-2'>
        </div>-->

        <div class='col-md-2'>

        </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src='js/bootstrap.min.js'></script>
  </body>
</div>
</html>
