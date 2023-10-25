<?php
include ("db_connect.php"); 
$query ="SELECT* FROM projet.session";
$result=$conn->query($query);
$a=FALSE;
foreach($result as $row) 
{
   
   if ($_POST["Nom"]==$row["Nom"])
    {
      
      if($_POST["Password"]==$row["Password"])
        {
         
         

         session_start();
         $_SESSION["Nom"]=$_POST["Nom"];
         $_SESSION["Role"]=$row["Role"];
         $a=TRUE;
         if ($_SESSION["Role"]== 1)
            {
              include("admin.php");
            }   
         elseif($_SESSION["Role"]== 0)
            {
              include("user.php");
            }  
        }
        else
        {
           echo 'mot de passe incorrecte';
           $a=TRUE; 
           
        }
        
        }
      
    }
if (!$a)
{
  
  echo "utilisateur n'existe pas";
}



?>