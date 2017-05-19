<?php include "header.php" ?>

<div class="row">
  <div class="col-md-4">
  </div>


  <!-- Registration form -->
  <div class="col-md-4">
    <form action='registration.php' method='post'>

      <div class="form-group">
        <input class="form-control" type='text' minlength="3" name="username" placeholder="Username" required>
      </div>

      <div class="form-group">
        <input class="form-control" type='password' minlength="6" name="password1" placeholder="Passsword" required>
      </div>

      <div class="form-group">
        <input class="form-control" type='password' minlength="6" name="password2" placeholder="Passsword again" required>
      </div>

      <div class="form-group">
        <input class="form-control" type='text' name="email1" placeholder="Email" required>
      </div>

      <div class="form-group">
        <input class="form-control" type='text' name="email2" placeholder="Email again" required>
      </div>

      <input class="btn btn-info" type='submit' value='Register'>
    </form>
    <form action="register.php">
    </form>
  </div>


  <div class="col-md-4">
  </div>
</div>

<?php
include 'footer.php';
 ?>
