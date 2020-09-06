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
    
    <style>
        * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

img {
    max-width: 80px;
}

body {
    font-family: 'Solway', serif;
    background: url(login_img/bg-l3.jpg) top left/cover no-repeat;
}

/***************** header ***************/

header {
    display: flex;
    width: 50%;
    height: 60px;
    margin: auto;
    align-items: center;
    border-bottom: none;
}

.logo-container, .nav-links{
    display: flex;
}

.logo-container {
    flex : 1;
    padding-left: 20px;
}

nav {
    flex : 1;
}

.nav-links {
    justify-content: center;
    list-style: none;
}

.nav-link {
    margin : 20px;
    color: #005EA5;
    text-decoration: none;
    font-weight:500;
}

.nav-link:hover , .nav-link2:hover {
    color:#FF4F09;
}


/******** login ********/

.login-home {
    width: 100%;
    padding-top: 15px;
}


.livreur-card {
    background: #5eabed;
    width: 50%;
    margin: auto;
    height: 530px;
    border-radius: 20px;
    box-shadow: -10px 10px 8px 0px rgba(0, 0, 0, 0.3);
    display: flex;
    overflow: hidden;
}


/***** left box *****/

.card-image {
    background: url(login_img/head3-1.jpg) center/cover ;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    flex: 1;
}

.socialmedia {
    width: 70%;
    margin: 50% auto;
    display: flex;
    flex-direction: column;
    text-align: center;
}

.socialmedia h1 {
    margin: 10px;
    color: #fff;
    font-size: 35px;
    text-shadow: -4px 4px 5px black;
}

button.social-signin {
    border: none;
    margin-bottom: 10px;
    height: 36px;
    color: #fff;
    font-family: 'Roboto' , sans-serif;
    border-radius: 4px;
    cursor: pointer;
}

button.social-signin:hover {
    margin-left: -2px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    transition: 0.2s ease;
}

button.social-signin.facebook {
  background: #32508E;
}

button.social-signin.twitter {
  background: #55ACEE;
}

button.social-signin.google {
  background: #DD4B39;
}

/***** right box *****/


.card-body1, .card-body2  {
    flex: 1;
}

.card-body1 {
    display: block;
}

.myplace {
    margin-top: -25%;
    text-align: center;
    font-size: 11px;
    color: #fff;
    text-shadow: 0 2px 1px black;
}

.myplace a {
    color: #000;
    text-shadow: none;
}

.card-body2 {
    display: none;
    position: relative;
} 



.input-boxs {
    display: flex;
    flex-direction: column;
    width: 90%;
    margin: 30% auto;
    text-align: center;
}

.input-boxs h1 {
    margin-bottom: 20px;
    color: #fff;
    font-size: 35px;
    text-shadow: -4px 4px 5px black;
}

.input-field {
    width: 80%;
    margin: auto;
    margin-bottom: 20px;
    padding: 4px;
    border: none;
    border-bottom: 1px solid #AAA;
    font-family: 'Roboto', sans-serif;
    font-size: 15px;
    transition: 0.2s ease;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
}

.input-btn {
    width: 30%;
    margin: auto;
    padding: 7px;
    cursor: pointer;
    background: #16a085;
    border: none;
    border-radius: 2px;
    color: #FFF;
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
    transition: 0.2s ease;
}

.input-btn:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
    transition: 0.2s ease;
}

.input-field:focus {
    width: 82%;
    border-bottom: 2px solid #fff;
    color: #16a085;
    transition: 0.2s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
}



.buttons {
    display: flex;
    float: right;
    margin-top: 20px;
    margin-right: 10px;
    background-color: aliceblue;
    border-radius: 999px;
    padding: 5px;
    width: 50%;
}
.buttons button {
    cursor: pointer;
    padding: 9px;
    border-radius: 999px;
}
.but_entr {
    border: none;
    font-family: 'Solway', serif;
    background-color: aliceblue;
}
.but_livreur {
    border: none;
    background: #5eabed;
    color: white;
    font-family: 'Solway', serif;
}


@keyframes show {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

@keyframes hide {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

@keyframes left {
    0% {
        left : 50%;
    }
    100% {
        left: 0%;
    }
}

@keyframes up {
    0% {
        bottom: 0%;
    }
    100%{
        bottom: 100%;
    }
}




    </style>

    <title>Login</title>
</head>

<body>
    <header>
        <div class="logo-container">
            <img src="login_img/logo2.png" alt="Logo">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="../home.html" class="nav-link">Accueil</a></li>
                <li><a href="#" class="nav-link">Services</a></li>
                <li><a href="#" class="nav-link">Contact</a></li>
            </ul>
        </nav>
    </header>
    
     
    <section class="login-home">
          <div class="livreur-card">
            <div class="card-image">
                <div class="socialmedia">
                    <h1 class="loginwith">Sign up with</h1>
                    <button class="social-signin facebook">Log up with facebook</button>
                    <button class="social-signin twitter">Log up with Twitter</button>
                    <button class="social-signin google">Log up with Google+</button>
                </div>
            </div>
            <div id="cardprev" class="card-body1">
                <div class="choix">
                   <div class="buttons">
                       <a href="../login_entreprise/login2_entreprise.php"><button class="but_entr">Entreprise</button></a>
                       <a href="../login_livreur/login2_livreur.php"><button class="but_livreur">Livreur</button></a>
                   </div>
               </div>
                <div class="input-boxs">
                    <h1>Rejoindez-nous Maintenant !</h1>
                    <form action="login2_livreur.php" method="POST">
                        <?php include('../errors.php'); ?>
                        <input class="input-field" type="text" name="username" placeholder="Username" />
                        <input class="input-field" type="text" name="email" placeholder="E-mail" />
                        <input class="input-field" type="password" name="password" placeholder="Password" />
                        <input class="input-field" type="password" name="password2" placeholder="Retype password" />
                        <input class="input-btn" type="button" name="next_submit" value="Next" onclick="swept()" />
                
                </div>
                <div class="myplace">
                    <p>Vous êtes une entreprise ? <a href="../login_entreprise/login2_entreprise.php">s'inscrire</a></p>
                </div>
            </div>
            <div id="cardnext" class="card-body2">
                <div class="input-boxs">
                    <h1>One More Step !</h1>
                        <input class="input-field" type="text" name="adress" placeholder="Adress" />
                        <input class="input-field" type="text" name="city" placeholder="City" />
                        <input class="input-field" type="text" name="banque" placeholder="Banque" />
                        <input class="input-field" type="text" name="rib" placeholder="RIB" />
                        <input class="input-field" type="text" name="tele" placeholder="Number Phone" />
                        <input class="input-btn" type="submit" name="signup_submit_L" value="S'inscrire" />
                    </form>
                </div>
                <div class="myplace">
                    <p>Vous avez déja un compte ? <a href="../postes/postes.php">connexion</a></p>
                </div>
            </div>
    
        </div>
           
        
        
        
    </section>
    
    <script src="login2_livreur_js.js"></script>
</body>
</html>