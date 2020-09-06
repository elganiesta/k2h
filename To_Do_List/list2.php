
<?php include('../server.php') ?>
<?php 
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$type = $_SESSION['type'];

$partner_name = $_SESSION['partner_name'];
$id = $_SESSION['id'];
$partner = $_SESSION['partner'];


 if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location:../home.html');
  
 }

 if (!isset($_SESSION['id'])) {
    $_SESSION['msg'] = "No Room is open";
    header('location: ../projets/projets.php');

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


    <style>
        * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

.max-img {
    max-width: 25px;
    max-height: 25px;
}

.normal {
    font-size: 16px;
    text-align: center;
}

.normal2 {
    font-size: 13px;
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

.nav-link:hover {
    background: #0b1142;
    border-bottom: 3px solid #424889;
}

/*************** body ********/
.nav-active {
    background: #0b1142;
    border-bottom: 3px solid #424889;
}

.body {
    padding: 15px;
}

.room-title {
    display: flex;
    justify-content: space-around;
    padding: 20px;
}

.tasks {
    display: flex;
    margin: auto;
    padding-top: 15px;
}

.invoice {
    flex: 1;
    text-align: center;
    padding-top: 40px;
}

.form {
    flex: 3;
    width: 100%;
    margin: 10px auto;
    text-align: center;
}


.input-style {
    width: 120px;
    padding: 3px;
    border: none;
    background: none;
    border-bottom: 1px solid black;
    margin: 0px 3px;
}

#adress {
    width: 230px;
}

.input-style:focus {
    border-bottom: 2px solid green;
}

.c-btn {
    width: 30%;
    margin: 15px auto;
    padding: 8px 0px;
    border: none;
    background: #242963;
    color: white;
    font-weight: 500;
    font-family: 'Solway', serif;
    border-radius: 10px;
    cursor: pointer;
}

.c-btn2 {
    width: 40%;
    margin: 1px auto;
    padding: 8px 0px;
    border: none;
    background: #242963;
    color: white;
    font-family: 'Solway', serif;
    border-radius: 10px;
    cursor: pointer;
    font-size: 12px;
}

.resume {
    display: flex;
    width: 100%;
    margin: auto;
    justify-content: space-around;
    padding: 5px;
}

.imprimer {
    text-align: center;
    padding: 3px;
}


table, th, td {
    border-top: 1px solid rgb(160, 160, 160);
    border-bottom: 1px solid rgb(160, 160, 160);
    border-collapse: collapse;
  }

.tab_head {
    text-align: center;
    font-size: 14px;
    color: white;
    background-color: #242963;
    height: 35px;

}



.adress {
    width: 400px;
}

.note {
    width: 300px;
}

.tab_style {
    text-align: center;
    font-size: 12px;
    background-color: rgb(211, 208, 255);
}


  .card {
    width: 20%;
    position: relative;
    padding: 1%;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #242963;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    margin: 15px;
    box-shadow: -1px 5px 5px #242963;
    padding-left: 2%;
  }

  .boards {
      width: 100%;
      justify-content: center;
      display: flex;
      margin: 0px auto;
  }

  .price {
    font-size: 12px;
    color: white;
    font-weight: 500;
  }

  .calender {
      font-size: 10px;
      color: rgb(236, 236, 236);
      margin-top: 10px;
      margin-bottom: -8px;
  }

  h4,h5 {
    color: white;
  }
    </style>
    <title>My Room</title>
</head>
<body>
    <main>
        <header>
            <nav>
                <ul class="nav-links">
                    <li><a class="nav-link" href="../postes/postes.php">Dashboard</a></li>
                    <li><a class="nav-link" href="../profil/profil.php">Profil</a></li>
                    <li><a class="nav-link" href="../projets/projets.php">Projects</a></li>
                    <li><a style="background: #0b1142;border-bottom: 3px solid #424889;}" class="nav-link .nav-active " href="../To_Do_List/list2.php">Room</a></li>
                </ul>
            </nav>
            <div class="logout">
                <p class="username">Welcome <?php echo $username ?></p>
                <img class="max-img" src="./imgs/logout.png" alt="logout">
                <h1><a href="list2.php?logout='1'">LogOut</a></h1>
            </div>
        </header>

        <div class="body">
            <div class="room-title">
                <h1 class="normal"><?php echo $type ?> : <?php echo $username ?></h1>
                <h1 class="normal">Room's id : <?php echo $id ?></h1>
                <h1 class="normal"><?php echo $partner ?> : <?php echo $partner_name ?></h1>
            </div>
            <div class="boards">
                <div class="card">
                    <div>
                        <h5>SOLDE TOTALE</h5>
                        <p id="sum" class="price">0 MAD</p>
                    </div>
                    <p class="calender"><span>Ce Mois</span></p>
                </div>
                <div class="card">
                    <div>
                        <h5>PROFIT</h5>
                        <p class="price">0 MAD</p>
                    </div>
                    <p class="calender"><span>Ce Mois</span></p>
                </div>
                <div class="card">
                    <div>
                        <h5>COMMANDES LIVRÉES</h5>
                        <p class="price">0 MAD</p>
                    </div>
                    <p class="calender"><span>Ce Mois</span></p>
                </div>
                <div class="card">
                    <div>
                        <h5>TOP JOURS DE LIVRAISON</h5>
                        <p class="price">Janvier</p>
                    </div>
                    <p class="calender"><span>Cette Année</span></p>
                </div>
            </div>
            <div class="tasks">
                <div class="form">
                    <form id="form-task" >
                        <input type="text" class="input-style" id="code" name="code" placeholder="Code">
                        <input type="text" class="input-style" id="name" name="name" placeholder="Name">
                        <input type="text" class="input-style" id="adress" name="adress" placeholder="Adress">
                        <input type="text" class="input-style" id="price" name="price" placeholder="Price">
                        <input type="text" class="input-style" id="phone" name="phone" placeholder="Phone">
                        <input type="text" class="input-style" id="note" name="note" placeholder="Note">
                        <br>
                        <input type="submit" name="submit" class="c-btn" value="Create Task">
                    </form>
                </div>
                <div class="invoice">
                    <div class="imprimer">
                        <input type="submit" id="clear" class="c-btn2" value="Clear Tasks">
                        <input type="submit" name="imprimer" class="c-btn2" value="imprimer Facture">
                    </div>
                </div>
            </div>
            <div class="table">
                <table id="my_table" style="width:100%">
                    <tr class="tab_head">
                      <td>Code</td>
                      <td>Name</td>
                      <td class="adress">Adress</td>
                      <td>Price</td>
                      <td>Phone</td>
                      <td class="note">Note</td>
                      <td>Check</td>
                      <td>Delete</td>
                    </tr>
                  </table>
            </div>
            <div style="height: 250px; width: 100%;"></div>
        </div>



    </main>


 
<script src="list.js"></script>

</body>
</html>