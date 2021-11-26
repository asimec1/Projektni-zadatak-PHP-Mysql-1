<?php
session_start();
$servername = "localhost";
$user = "root";
$password = "";
$database = "clanstvo";

$db = mysqli_connect($servername, $user, $password, $database);
$_SESSION['db'] = $db;

?>