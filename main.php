<?php
include("db_connect.php");
if (isset($_SESSION['Nom']))
 {
  if ($_SERVER['REQUEST_METHOD']=='Get')
   {
    $query="SELECT * from  projet.session";
    $result=$conn->query($query);
    while($row = mysqli_fetch_array($result))
    {
      $response[] = $row;
    }

    header('Content-Type: application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);
   }
  elseif($_SERVER['REQUEST_METHOD']=='Post')
   {
    
   }

 }
 else
 {
    echo 'session delayed';
   header('Location: index.html');
 }
 ?>