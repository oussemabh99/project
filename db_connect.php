<?php

$servername = 'localhost';
$username = 'root';
$password = 'oussemaest19';
$conn = new mysqli($servername, $username, $password);
if($conn->connect_error){
die('Erreur : ' .$conn->connect_error);}
?>