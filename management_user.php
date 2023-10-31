<?php
       session_start();
       echo "bonjours ".$_SESSION["Nom"]; 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management_User</title>
    <link rel="stylesheet" href="styles.css"> <!-- You can create a CSS file for styling -->
</head>
<body class="body"> 
    
    <div class="container">
        <div class="get_zone">
        <form action= "api_user.php" method = "POST">
                <h1>ajouter</h1>
                <label for="username">Username:</label>
                <input type="text" id="username" name="Nom" required class="champ1">
                <label for="password">Password:</label>
                <input type="password" id="Password" name="Password" class="champ1" required>
                <label for="c-password">Confirmer le Password:</label>
                <input type="password" id="Password" name="c-password" class="champ1" required>
                <select name="type" id="user/admin">
                 <option value= 1 >Administrateur</option>
                 <option value= 0 >user</option>
                </select>
                 <button type="submit" class="Button">confirmer</button>
                 <br>
                 
        </form>
                 <div>
        
                     <form action= "api_user" method = "GET">
                     <h1>show</h1>
                     <button type="submit" class="Button">show_all_users</button>
                     </form>
                </div>
                <div>
                    <form action="api_user" method="POST">
                        <h1> Update </h1>
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="Nom" required class="champ1">
                        <label for="password">changer le Password:</label>
                        <input type="password" id="Password" name="Password" class="champ1" required>
                        <label for="c-password">confirmer le nouveau Password:</label>
                        <input type="password" id="Password" name="c-password" class="champ1" required>
                        <select name="type" id="user/admin">
                              <option value= 1 >Administrateur</option>
                              <option value= 0 >user</option>
                        </select>
                </div>

        </div> 
        
    </div>
              
              
             

</body>
</html>
