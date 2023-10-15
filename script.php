<?php

  include("db_connect.php");
  $result = $conn->query("SELECT * FROM projet.session ");
if ( $_SERVER['REQUEST_METHOD']=='Post')
{
  foreach ($result as $row) 
{
    if ($row['Nom']==$_POST['username'])
      {
        if($row["Password"]==$_POST['password'])
         {
          session_start();
          $_SESSION['Nom']=$_POST["Username"] ; 
          $_SESSION['Role']=$row['Role'];
          
         
         }
        else
        {
          echo 'mot de pass incorrect'; 
          header('Refresh: 6 ; index.html');
        }
      }
    else
       {
        echo "nom d'utilisateur n'existe pas ";
        header('Refresh: 6 ; index.html');
       }
    
  }
}  
    
  


?>