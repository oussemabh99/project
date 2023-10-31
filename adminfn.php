<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="styles.css"> <!-- You can create a CSS file for styling -->
</head>
<body class="body">
    <nav class="navbar">
    <ul>
            <li><a href="index.html">Accueil</a></li>
            <li><a href="#">Produits</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <div class="barre">
    
    </div>
    <div class="container">
        <div class="menu">
            <div class="partie1">
              <h2>MENU</h2>
              <form action= "userfn.php" method= "">
                <button type="submit" class="Button2" name="switch to user  ">user_mode</button>
                
              </form>
              <form action= " management_user.php" method = "">
                <button type="submit" class="Button2" name= "management_user">management_user</button>
              </form>
                
            </div>
            <div class="partie2">
               <h2>Option</h2>
               <p>Contenu de la partie 2.</p>
            </div> 
        </div> 
    </div>
    <?php echo $_SESSION["Nom"];?> 
</body>
</html>
