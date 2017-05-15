<?php
  include 'session.php';
  include 'connect.php';

  $replyContent = htmlspecialchars($_POST['reply']);
  $replyMaker = $_SESSION['login_user'];
  $replyThread =
 ?>
