<?php
$host = '127.0.0.1';
$username = 'root';
$password = '123456';
$db = 'fastfood';

$conn = new mysqli($host, $username, $password, $db);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
