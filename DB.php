<?php
//linking mysql
$servername = "mysql6.000webhost.com";
$username = "a7693816_admin";
$password = "sammysingh1";
$database = "a7693816_yoga";

//create conection
$conn = new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}

?>