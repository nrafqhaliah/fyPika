<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "FF_SKAS";

$conn = mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);

if (!$conn) {
    die("Couldn't connect");
}
?> 

