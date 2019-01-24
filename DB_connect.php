<?php
//linking mysql
$mysql_host= "mysql6.000webhost.com";
$mysql_user= "a7693816_admin";
$mysql_password= "sammysingh1";
$mysql_database= "a7693816_yoga";
global $connect;
$connect = new mysqli($mysql_host,$mysql_user,$mysql_password,$mysql_database);

// $email = $emailerr = "";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  if(empty($_POST["email"])) {
    $emailerr = "name is required";
  }
  else {
  $email = $_POST["email"];
  }
}


$sql = "INSERT INTO users(email)VALUES('$email')";
if (mysqli_query($connect,$sql,MYSQLI_USE_RESULT) === TRUE) {
  header('Location: http://wordyo.ga/page2.php');
}
else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

?>
