
<?php
  include 'connect.php';

  $sql = "select * from threads";
  $result = $db->query($sql);

  // Selects and echoes all threads from databes to the index.php page
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      //echo $row["thread_title"] . $row["thread_starter"] . $row["thread_content"];
      echo"

        <div class='row threadContainer'>
          <div class=col-md-12>
            <h4><a  href='viewThread.php?id=$row[thread_id]&title=$row[thread_title]'>$row[thread_title]</a></h4>
            $row[thread_content]
            <hr>
          </div>

          <div class='col-md-4'>
            <p class='threadStarter'>$row[thread_starter]</p>
          </div>
          <div class='col-md-4'>

          </div>
          <div class=col-md-4>
            <p class='threadId'>#$row[thread_id]</p>
          </div>
        </div>";
    }
  }
 ?>
