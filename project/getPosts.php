<?php

$id = $_GET['id'];

$sql = "select * from threads where thread_id = '$id'";
$result = $db->query($sql);

$sql2 = "select * from messages where thread_id = '$id'";
$result2 = $db->query($sql2);

if($result->num_rows > 0){
  while ($row = $result->fetch_assoc()) {
    echo "
      <div class='row threadContainer'>
        <div class=col-md-12>
          $row[thread_title]
        </div>
        <div class='col-md-12'>
          $row[thread_content]
        </div>
      </div>";
  }
}
if($result2->num_rows > 0){
  while ($row2 = $result2->fetch_assoc()) {
    echo "
      <div class='col-md-12'>
      <hr>
        $row2[user_name]
      </div>
      <div class='col-md-10'>
        $row2[message_content]
      </div>";
  }
}

?>
