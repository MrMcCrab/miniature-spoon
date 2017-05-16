<?php
  include 'connect.php';
  include 'session.php';
  include 'header.php';
?>

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

    <?php
    include 'footer.php';
     ?>
