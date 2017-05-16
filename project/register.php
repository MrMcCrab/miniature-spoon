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
        <input class="form-control" type='password' minlength="6" name="password1" id="pass" placeholder="Passsword" required>
      </div>

      <div class="form-group">
        <label class="sr-only" for="pass">Password again</label>
        <input class="form-control" type='password' minlength="6" name="password2" id="pass" placeholder="Passsword again" required>
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

<?php
include 'footer.php';
 ?>
