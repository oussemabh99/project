
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="stylesheet" href="styles.css"> <!-- You can create a CSS file for styling -->
</head>
<body class="body">
     <?php
        session_start();


     ?>
    
     <form action="upload.php" method="post" enctype="multipart/form-data">
               Select image to upload:
               <?php
                include("db_connect.php");
               ?>
              
     
           <input type="file" name="fileToUpload" id="fileToUpload">
           <select name="name" id="name" >
                           <?php

                           include('sql_query.php');
                           foreach($result as $row) {
                           ?>
                           <option><?php echo $row['Nom'];}?></option> 
           </select>
           <input type="submit" value="Upload Image" name="submit">
           
     </form>
    
     <?php
$row = exec('ls -ls',$output,$error);
while(list(,$row) = each($output)){
echo $row, "<BR>n";
}
if($error){
echo "Error : $error<BR>n";
exit;
}
?>
</body>
</html>
