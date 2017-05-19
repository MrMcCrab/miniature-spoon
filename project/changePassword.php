<?php
include 'session.php';
include 'header.php';
include 'connect.php';
 ?>

 <div class='row'>

   <div class='col-md-4'>

   </div>

   <div class='col-md-4'>
     <form action='updatePassword.php' method='post'>

       <div class='form-group'>
         <input class='form-control' type='password' name='oldpass'  placeholder='Current password'>
       </div>

       <div class='form-group'>
         <input class='form-control' type='password' name='newpass1' placeholder='New password' minlength='6'>
       </div>

       <div class='form-group'>
         <input class='form-control' type='password' name='newpass2' placeholder='New password again' minlength='6'>
       </div>

       <input class='btn btn-info' type='submit' value='Change password'>

     </form>
   </div>

   <div class='col-md-4'>

   </div>

 </div>

 <?php
include 'footer.php';
  ?>
