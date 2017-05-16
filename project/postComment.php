<?php
  include 'session.php';
  include 'connect.php';

  $replyContent = htmlspecialchars($_POST['reply']);
  $replyMaker = $_SESSION['login_user'];
  $replyThread = $_POST['thread_id'];

  $stmt_reply = $db->prepare("insert into messages (message_content, user_name, thread_id) values (?, ?, ?)");
  $stmt_reply->bind_param("ssi", $replyContent, $replyMaker, $replyThread);
  $stmt_reply->execute();

  header ("refresh:1, url=viewThread.php?id=$replyThread");
 ?>
