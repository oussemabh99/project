<?php
if ($_POST['username']=="oussema")
  session_start();
  $_SESSION['nom']="oussema";
  echo $_SESSION['nom'];

?>