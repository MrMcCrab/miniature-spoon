
<link href='stylesheet.css' rel='stylesheet'>

<?php
  include 'connect.php';

  $sql = "select * from threads";
  $result = $db->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      //echo $row["thread_title"] . $row["thread_starter"] . $row["thread_content"];
      echo"
      <div class='row background'>

        <div class='col-md-12 thread'>
          <div class='row'>

            <div class='col-md-2 title'>
              $row[thread_title]
            </div>

            <div class='col-md-8'>

            </div>

            <div class='col-md-2 starter'>
              $row[thread_starter]
            </div>


          </div>
        </div>

      </div>";
    }
  }

 ?>
