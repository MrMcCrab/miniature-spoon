

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Forum</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='stylesheet.css' rel='stylesheet'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'></script>
      <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->

  </head>
  <body>
    <div class="container">
      <?php include "header.php" ?>

<div class="row">
  <div class="col-md-4">
  </div>


  <!-- Registration form -->
  <div class="col-md-4">
    <form action='registration.php' method='post'>

      <div class="form-group">
        <label class="sr-only" for="user">Username</label><br>
        <input class="form-control" type='text' minlength="3" name="username" id="user" placeholder="Username" required>
      </div>

      <div class="form-group">
        <label class="sr-only" for="pass">Password</label>
        <input class="form-control" type='text' minlength="6" name="password1" id="pass" placeholder="Passsword" required>
      </div>

      <div class="form-group">
        <label class="sr-only" for="pass">Password again</label>
        <input class="form-control" type='text' minlength="6" name="password2" id="pass" placeholder="Passsword again" required>
      </div>

      <div class="form-group">
        <label class="sr-only" for="mail">Email</label>
        <input class="form-control" type='text' name="email1" id="mail" placeholder="Email" required>
      </div>

      <div class="form-group">
        <label class="sr-only" for="mail">Email again</label>
        <input class="form-control" type='text' name="email2" id="mail" placeholder="Email again" required>
      </div>

      <input class="btn btn-info" type='submit' value='Register'>
    </form>
    <form action="register.php">
    </form>
  </div>


  <div class="col-md-4">
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</div>
</html>
