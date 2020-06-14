<?php

$server = "sql109.epizy.com";
$username = "epiz_26013423";
$password = "wBuZWawcQ0";
$dbname = "epiz_26013423_insatgramlogin";

$conn = mysql_connect($server, $username, $password,$dbname)

if(!$conn){
       die("Connection Failed:".mysqli_connect_error)));

}