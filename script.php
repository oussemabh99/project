<?php
$servername = 'localhost';
$username = 'root';
$password = 'oussemaest19';
$conn = new mysqli($servername, $username, $password);
if($conn->connect_error){
die('Erreur : ' .$conn->connect_error);}
else 
{
  $result = $conn->query("SELECT * FROM projet.session ");
  foreach ($result as $row) {
    if ($row['Nom']==$_POST['username'])
      {
        if($row["Password"]==$_POST['password'])
         {
          session_start();
          $_SESSION['Nom']=$_POST["Username"] ; 
          header('Location: http://www.facebook.com');
          exit();
         
         }
        else
        {
          echo 'mot de pass incorrect'; 
        }
      }
       
  }
}

?>