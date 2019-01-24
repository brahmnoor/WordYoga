<?php
session_start();
$_SESSION["userName"] = $_POST["userName"];
header("Location: http://www.wordyo.ga/game.html");

?>
