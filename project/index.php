<?php
include "session.php";
include "header.php";
include "connect.php";
 ?>

      <div class='row'>

        <div class='col-md-12'>
          <?php
            include 'getThreads.php';
          ?>
        </div>

      </div>

      <div class='row'>
        <div class='col-md-12'>
          <form class='new-thread' action='newThread.php' method='post'>
            <input class='btn btn-info' type='submit' value='New thread'>
          </form>
        </div>
      </div>

<?php
include 'footer.php';
 ?>
