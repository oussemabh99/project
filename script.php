<?php
$servername = 'localhost';
$username = 'root';
$password = 'oussemaest19';
$conn = new mysqli($servername, $username, $password);
if($conn->connect_error){
die('Erreur : ' .$conn->connect_error);}
echo 'Connexion réussie';
$result = $conn->query("SELECT * FROM projet.session ");
foreach ($result as $row) {
  echo "  Name = " . $row['Nom'] . "\n";
}
?>