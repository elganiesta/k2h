<?php include('../server.php') ?>
<?php 
$username = $_SESSION['username'];
$friend = $_SESSION['friendname'];
$email = $_SESSION['email'];
$type = $_SESSION['type'];



 if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location:../home.html');
  
 }
 
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../home.html");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Solway:400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    
    
    <title><?php echo $friend ?> </title>

    <style>
        * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

.max-img {
    max-width: 30px;
    max-height: 30px;
}

.normal {
    font-size: 16px;
    text-align: center;
}

ul {
    list-style: none;
}

body {
    font-family: 'Solway', serif;
}

/***************** header ***************/

main {
    background: #edebfb;
    width: 100%;

}

nav {
    flex: 10;
    align-content: center;
}

.logout {
    flex: 3;
    display: flex;
    align-items: center;
}

.username {
    margin-right : 14px;
    color : white;
    font-weight : 500;
}

.logout h1 {
    color: white;
    font-size: 16px;
    font-weight: 500;
    padding: 5px;
}

.logout h1 a {
    color: white;
    text-decoration: none;
}

header {
    display: flex;
    align-items: center;
    background: #242963;
    padding: 12px 0px;
}

.nav-links {
    display: flex;
}

.nav-link {
    text-decoration: none;
    color: white;
    font-weight:300;
    padding: 17px;
}

.nav-active {
    background: #0b1142;
    border-bottom: 3px solid #424889;
}

.nav-link:hover {
    background: #0b1142;
    border-bottom: 3px solid #424889;
}

/*************** body ********/

.body {
    padding: 0px;
}


input,textarea {
    border: none;
    background: transparent;
    border-bottom : 1px solid grey;
}



/* ~~~~~~~~~~~~~~~~~~~~~~main~~~~~~~~~~~~~~~~~~~~~~*/


/* ***********main_card********* */
.main_card {
    width: 80%;
    margin: auto;
    display: flex;
    padding-top: 20px;
}
.sub_main_card {
    flex: 2;
    padding: 20px;
     
}
.title {
    text-align: center;
}
.title input {
    text-align: center;
    
    font-size: 15px;
    font-family: 'Solway', serif;
    margin-top:7px;
}
.title h1{
    font-size: 25px;
    color : #242963 ;
}

.title h1:hover {
    color: #9a0808 ;
}

.no_margin {
    margin-top:0px;
}

.with_margin {
    margin-left: 40px;
    margin-top: 35px;
}



.main_infos img {
    width: 30px;
}
.social ul {
    display: flex;
    list-style: none;
    justify-content: space-around;
    width: 50%;
    margin: auto;
}
.social p {
    text-align: center;
    font-weight: bold;
    padding: 10px;
    margin-top: 30px;
}
.social img {
    width: 30px;
    border-radius: 50%;
    box-shadow: 2px 2px 2px 2px grey;
}
.social a :hover {
    box-shadow: 2px 2px 5px 5px grey;
}
.pic {
    flex: 1;
}
.pic img {
    width: 200px;
    border-radius: 50%;
    box-shadow: 2px 2px 5px 5px grey;
}

/* ***********infos_card********* */
.infos_card {
    width: 80%;
    margin: auto;
}
.infos_card_title {
    background-color: #242963;
    width: 100px;
    text-align: center;
    color: white;
    border-radius: 10px;
    font-size: 12px;
    padding: 12px;
}
.infos_card_text {
    padding: 20px;
    margin-left: 88px;
    border-left: 5px solid #242963;
    border-bottom: 5px solid #242963;
    width: 70%;
    font-size: 15px;
}
#list {
    margin-left: 55px;
}

/* ***********about_card********* */
.about_card {
    width: 80%;
    margin: auto;
    padding: 20px;
}
.about_card_title {
    background-color: #242963;
    width: 200px;
    text-align: center;
    color: white;
    border-radius: 50%;
    border-radius: 10px;
    font-size: 12px;
    padding: 10px;
}
.about_card_text {
    padding: 20px;
    width: 70%;
    margin-left: 88px;
    font-size: 16px;
    border-left: 5px solid #242963;
    border-bottom: 5px solid #242963;
}
.about_card_text input {
    width: 100%;
    height: 100px;
}

/* ***********but_card********* */
.but_card {
    text-align: center;
    padding: 20px;
}
.but_card button {
    padding: 10px;
    background-color: #025283;
    color: white;
    font-size: 20px;
    cursor: pointer;
    box-shadow: 2px 2px 5px 2px grey;
    font-family: 'Solway', serif;
}
.but_card button:hover {
    background-color: white;
    color: #025283;
    font-weight: bold;
}

input[name="upload"] {
    width: 30%;
    margin: 7px auto;
    padding: 5px;
    cursor: pointer;
    background: #242963;
    border: none;
    border-radius: 2px;
    color: #FFF;
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
    transition: 0.2s ease;
}

    </style>

</head>
<body>
    <main>
        <header>
            <nav>
                <ul class="nav-links">
                    <li><a class="nav-link" href="../postes/postes.php">Dashboard</a></li>
                    <li><a style="background: #0b1142;border-bottom: 3px solid #424889;}" class="nav-link .nav-active " href="../profil/profil.php">Profil</a></li>
                    <li><a class="nav-link" href="../projets/projets.php">Projects</a></li>
                    <li><a class="nav-link" href="../To_Do_List/list2.php">Room</a></li>
                </ul>
            </nav>
            <div class="logout">
            <p class="username">Welcome <?php echo $username ?></p>
                <img class="max-img" src="./imgs/logout.png" alt="logout">
                <h1><a href="profil.php?logout='1'">LogOut</a></h1>
            </div>
        </header>
          
       
        <div class="body">
            <section id="main">
                <div class="main_card">
                    <div class="sub_main_card">
                        <div class="title">

                        <?php $results = mysqli_query($db, "SELECT * FROM users WHERE username LIKE '$friend' "); 
                        while ($row = mysqli_fetch_array($results)) { ?>
                           <form method="POST" action="profil.php" >
                               <h1>Nom d'utilisateur : <?php echo $friend ?></h1>
                               <p><?php echo $row['city']; ?></p>
                           
                            
                        </div>
                        <div class="main_infos">
                           
                               <table class="with_margin">
                                <tr>
                                    <td><img class="max_img" src="./images/email.png" alt="email"></td>
                                    <td><strong>Email</strong></td>
                                    <td style="font-size:14px">: <?php echo $row['email']; ?></td>
                                </tr>
                                <tr>
                                    <td><img class="max_img" src="./images/phone.png" alt="phone"></td>
                                    <td><strong>Téléphone</strong></td>
                                    <td style="font-size:14px">: 0<?php echo $row['tele'] ; ?></td>
                                </tr>
                                <tr>
                                    <td><img class="max_img" src="./images/adress.png" alt="adresse"></td>
                                    <td><strong>Adresse</strong></td>
                                    <td style="font-size:14px">: <?php echo $row['adress']; ?></td>
                                        
                                </tr>
                            </table>
                           
                            
                        </div>
                        <div class="social">
                            <p>trouvez-moi dans:</p>
                            <ul>
                                <li><a href="https://www.facebook.com/"><img class="max_img" src="./images/fb.png" alt="fb"></a></li>
                                <li><a href="https://twitter.com/?lang=fr"><img class="max_img" src="./images/twit.png" alt="twit"></a></li>
                                <li><a href="https://mail.google.com/mail"><img class="max_img" src="./images/google.png" alt="google"></a></li>
                                <li><a href="https://www.linkedin.com/mynetwork/"><img class="max_img" src="./images/linked.png" alt="linkedin"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="pic" style="text-align:center">
                        <img src="./images/profil.jpeg" alt="photo de profil"><br><br>
                        
                    </div>
                </div>
                <div class="infos_card">
                    <div class="infos_card_title">
                        <h1>Infos</h1>
                    </div>
                    <div class="infos_card_text">
                        <table class="no_margin">
                            <tr>
                                <td><strong>Date de naissance</strong></td>
                                <td style="font-size:14px"><strong>:  </strong><?php echo $row['birthday'] ; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Expérience</strong></td>
                                <td style="font-size:14px"><strong>:  </strong><?php echo $row['experience'] ; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Prix</strong></td>
                                <td style="font-size:14px"><strong>:  </strong><?php echo $row['price'] ; ?></td>
                            </tr>
                        </table> 
                    </div></div>
                <div class="about_card">
                    <div class="about_card_title">
                        <h1>A propos de moi</h1>
                    </div>
                    <div class="about_card_text">
                       <p style="font-size:14px" name="description" cols="85" rows="5"><?php echo $row['description'] ; ?></p>
                        
                       
                    </div>
                </div>
                <div class="but_card" >
                     
                     </form>
                       <?php } ?>
                     <style>
                         .input-btn {
    width: 30%;
    margin: auto;
    padding: 10px;
    cursor: pointer;
    background: #242963;
    border: none;
    border-radius: 2px;
    color: #FFF;
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
    transition: 0.2s ease;
}
                     </style>
                </div>
            </section>
        </div>












        <script src="profil.js"></script>

    </body>
    </html>