<?php include('../server.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Solway:400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <title>connexion</title>
    <link rel="stylesheet" href="connecter.css">
    <link rel="scriptsheet" href="connecter.js">
    <style>
        body {
    font-family: 'Solway', serif;
    background: url(../login_livreur/login_img/bg-l3.jpg) top left/cover no-repeat;
}
    </style>
</head>
<body>
    <div class="lfo9">
        <div class="logo">
            <a href="../home.html"><img src="image/logo2.png" alt="Logo"></a>
        </div>
        <nav>
            <ul class="leschoix">
                <li><a href="../home.html" class="choix">Acceuil</a></li>
                <li><a href="../home.html#services" class="choix">Services</a></li>
                <li><a href="../home.html#contact" class="choix">Contact</a></li>
            </ul>
        </nav>  
    </div>
    <div class="ltht">
        <form class="login" action="connecter.php" method="POST">
           <?php include('../errors.php'); ?>
           <span class="info">Adresse e-mail:</span>
           <input class="input" type="text" name="email" placeholder="Entrer votre Email  " >
           <span class="info">Mot de passe:</span>
           <input class="input" type="password" name="password" placeholder="Entrer votre mot de passe">
           <br>
           <span ><a class="error" href="error.html">J'ai oublié le mot de passe.</a></span> 
           <br>
           <input class="button" type="submit" name="signin_submit" value="Se connecter" />
           <br>
           <span class="info">Si vous n'avez pas de compte ?<a class="inscription" href="../login_livreur/login2_livreur.php">inscrivez vous.</a></span> 
        </form>
    </div>
      
</body>
</html>