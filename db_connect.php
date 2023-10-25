<?php
$Host= "localhost";
$User= "root";
$Password="oussemaest19";
$conn= new mysqli($Host,$User,$Password);
if (!$conn)
{
    echo "not connected";
    die("La connexion a échoué : " . mysqli_connect_error());
}
 
?>