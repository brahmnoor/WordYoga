<?php
session_start();
$_SESSION["userName"] = $_POST["userName"];
header("Location: https://wordyoga.herokuapp.com/game.php");

?>
