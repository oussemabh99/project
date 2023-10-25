<?php
if (!isset($_SESSION['Nom']))
 { 
    echo 'vous devez reconnecter';
 }

else
{
    include("userfn.php");
}
?>
