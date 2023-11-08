<?php  
session_start();
include("db_connect.php");
if($_SERVER['REQUEST_METHOD']=='GET')
{
$sql = 'DELETE from projet.session WHERE Nom="'.$_GET['name'].'"';
$result=$conn->query($sql);
if ($result)
{   
    rmdir("./users/".$_GET['name']);
    echo "deleted";
}   
else
{
    echo "error";
}
}
elseif($_SERVER['REQUEST_METHOD']=='POST')
{
$sql ='UPDATE projet.session SET Password= "'.$_POST["Password"].'" WHERE Nom =" '.$_POST["Nom"].'"';
if ($_POST['Password']==$_POST["c-password"])
  {
    $result=$conn->query($sql);
    if($result)
    {
        echo "mot de passe a bien changé";
    }
  }
else
{echo"mot de passe sont different";}


}
?>