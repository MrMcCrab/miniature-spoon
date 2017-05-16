<?php

$id = $_GET['id'];

$sql = "select * from threads where thread_id = '$id'";
$result = $db->query($sql);

$sql2 = "select * from messages where thread_id = '$id'";
$result2 = $db->query($sql2);

if($result->num_rows > 0){
  while ($row = $result->fetch_assoc()) {
    echo "
      <div class='row'>
        <div class=col-md-12>
          <h3>$row[thread_title]</h3>
          <br>
        </div>
        <div class='col-md-12 messageContainer'>
          <div class='row'>
            <div class='col-md-12'>
              $row[thread_content]
            </div>
            <div class='col-md-12'>
              <hr>
            </div>
            <div class='col-md-6'>
              <p class='threadStarter'>$row[thread_starter]</p>
            </div>
          </div>
        </div>
          ";
  }
}
if($result2->num_rows > 0){
  while ($row2 = $result2->fetch_assoc()) {
    echo "
    <div class='col-md-12 messageContainer'>
      <div class='row'>
        <div class='col-md-12'>
          $row2[message_content]
        </div>
        <div class='col-md-12'>
          <hr>
        </div>
        <div class='col-md-6'>
          <p class='threadStarter'>$row2[user_name]</p>
        </div>
        <div class='col-md-6'>
          <p class='threadId'>#$row2[message_id]</p>
        </div>
      </div>
    </div>
    ";
  }
}

?>
