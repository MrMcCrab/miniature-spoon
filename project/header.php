

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


<div class="page-header">

  <div class="row">

    <div class="col-md-3">
    </div>

    <div class="col-md-3">
    </div>

    <div class="col-md-3">
    </div>

    <div class="col-md-3">
      <!--Hide login button if user is logged in-->
      <?php if(!isset($_SESSION['login_user'])){
          echo "<button type='button' class='btn btn-info' data-toggle='modal' data-target='#myModal'>Login</button>

          <div id='myModal' class='modal fade' role='dialog'>
            <div class='modal-dialog'>

              <div class='modal-content'>
                <div class='modal-header'>
                  <h4><span class='glyphicon glyphicon-lock'></span> Login</h4>
                </div>
                <div class='modal-body'>
                  <form class='' id='login_form' action='login.php' method='post'>
                    <div class='form-group'>
                      <input class='form-control' type='text' placeholder='Username' name='username'>
                    </div>
                    <div class='form-group'>
                      <input class='form-control' type='password' placeholder='Password' name='password'>
                    </div>
                    <button type='submit' class='btn btn-success'>Login</button>
                  </form>
                </div>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-danger' data-dismiss='modal'>Cancel</button>
                </div>

              </div>
            </div>
          </div>";
      }else {
        ?>
          <div class='col-md-8 login_echo'>
            <?php
              echo "Logged in: " . $_SESSION['login_user'];
             ?>
          </div>
            <?php
              echo "
              <div class='col-md-4 login_button'>
                <form action='logout.php'>
                  <input class='btn btn-info' type='submit' value='Logout'>
                </form>
              </div>";
            }?>
    </div>

  </div>

</div>

  </body>
</div>
</html>
