

<!-- Server connection script -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forum";
//$createDb = "create database if not exists 'forum'";
$createTableUsers = "create table if not exists users(
  user_id int(8) auto_increment primary key,
  user_name varchar(32) not null,
  user_pass varchar(255) not null,
  user_email varchar(64) not null
  )";
$creteTableMessages = "create table if not exists messages(
  message_id varchar(8) primary key not null,
  message_title varchar(32) not null,
  message_content varchar(512) not null,
  user_id int(8) not null
  )";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

//create users table if it does not exist
if ($db->query($createTableUsers) === TRUE){
  echo"";
}else{
  die("error creating users table " . $db->connect_error);
}

//create messages table if it does not exist
if ($db->query($creteTableMessages) === TRUE){
  echo"";
}else{
  die("error creating messages table " . $db->connect_error);
}
echo "";
?>
