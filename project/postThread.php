<?php
  include 'session.php';
  include 'connect.php';

  $threadTitle = htmlspecialchars($_POST['topic']);
  $threadContent = htmlspecialchars($_POST['message']);
  $threadStarter = $_SESSION['login_user'];

  //Prepared statement used to insert new thread into db
  $stmt_thread = $db->prepare("insert into threads (thread_title, thread_starter, thread_content) values (?, ?, ?)");
  $stmt_thread->bind_param("sss", $threadTitle, $threadStarter, $threadContent);
  $stmt_thread->execute();

  header ("refresh:2, url=index.php");

?>
