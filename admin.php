<?php
if (!isset($_SESSION['Nom']))
{ 
   echo 'vous devez reconnecter';
}

elseif($_SESSION["Role"]=!1)
{
   echo 'il faut etre admin pour acceder a cette page';
}
else
{
    include("adminfn.php");
}
?>