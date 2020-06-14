<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "2020.05.ia.01.login.system";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}
