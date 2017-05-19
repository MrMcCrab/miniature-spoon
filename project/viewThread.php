
<!-- Shows user the message they posted -->

<?php
include "session.php";
include "header.php";
include "connect.php";
?>

      <div class='row'>


        <?php
        include 'getPosts.php';

        if (isset($_SESSION['login_user'])) {
          echo "
                <div class='col-md-2'>
                </div>
                <div class='col-md-8 col-lg-8'>
                  <form action='postComment.php' method='post'>

                    <div class='form-group'>
                      <textarea class='form-control' rows='6' name='reply'></textarea>
                    </div>
                    <input type='hidden' name='thread_id' value='$id'>

                    <input class='btn btn-info post-button' type='submit' value='Post reply'>

                  </form>
                </div>
                <div class='col-md-2'>
                </div>
          ";
        }else {
          echo "
                <div class='col-md-8'>

                </div>
          ";
        }
        ?>

      </div>



<?php
include 'footer.php';
 ?>
