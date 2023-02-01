<?php
$host = "localhost";
$username = "id20157560_setibadi12";
$password = "Yantobasna!@2";
$database = "id20157560_setibadi";

$connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
