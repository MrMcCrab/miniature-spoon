

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
      <?php
        session_start();
        include "header.php";
        include "connect.php";
      ?>

      <div class='row'>
        <div class='col-md-3'>
        </div>

        <div class='col-md-3'>
        </div>

        <div class='col-md-4'>
        </div>

        <div class='col-md-2'>

          <!--Hide login form is user is logged in-->
          <?php if(!isset($_SESSION['login_user'])){
              echo "<div class='login-form'>
              <form class='' id='login_form' action='login.php' method='post'>
                <div class='form-group'>
                  <label class='sr-only' for='user'>Username</label><br>
                  <input class='form-control' type='text' minlength='3' name='username' id='user' placeholder='Username'>
                </div>

                <div class='form-group'>
                  <label class='sr-only' for='pass'>Password</label>
                  <input class='form-control' type='password' minlength='3' name='password' id='pass' placeholder='Passsword'>
                </div>
              </form>

              <div class='row'>
                <div class='col-md-5'>
                  <input class='btn btn-info' type='submit' value='Login' form='login_form'>
                </div>
                <div class='col-md-7'>
                  <form action='register.php'>
                    <div class='form-group'>
                      <input class='btn btn-info' type='submit' value='Register'>
                    </div>
                  </form>
                </div>
              </div>
            </div>";
          }else {
            ?>
              <div class='col-md-12 login_echo'>
                <?php
                  echo "Logged in, " . $_SESSION['login_user'];
                 ?>
              </div>
                <?php
                  echo "<div class='col-md-12 login_button'>
                    <form action='logout.php'>
                      <input class='btn btn-info' type='submit' value='Logout'>
                    </form>
                  </div>";
                }?>

        </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src='js/bootstrap.min.js'></script>
  </body>
</div>
</html>
