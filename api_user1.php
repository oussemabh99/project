<?php
session_start();
include ('db_connect.php');
 
    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
      if($_POST["Password"]==$_POST["c-password"])
      {
        
        $sql = 'INSERT INTO projet.session(Nom,Password,Role) VALUES("'.$_POST['Nom'].'","'.$_POST['Password'].'",'.$_POST['type'].')';
        $result=$conn->query($sql);
        if($result)
          {
            echo("ajouté");
          }
        else
         {
            echo("non ajouté");
         }
      }
      else
      {
        echo 'les deux mots de pass sont differents';
      }
        
    }
    elseif($_SERVER['REQUEST_METHOD']=='GET')
    {
      $sql= 'SELECT Nom,Role from projet.session';
      $result=$conn->query($sql);
      foreach($result as $row)
      {
        echo $row['Nom'].'  '.$row['Role'].'<br>';
      }
    }   


?>