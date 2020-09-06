<?php include('../server.php') ?>
<?php 
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$type = $_SESSION['type'];

if($type == 'livreur') {
    $partner = 'entreprise';
} else {
    $partner = 'livreur';
}

$_SESSION['partner'] = $partner;



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

.body {
    padding: 1%;
}

.acces {
    display: flex;
}

.have_id {
    flex: 1;
    text-align: center;
    padding: 5%;
    color: #121431;
}

.create_id {
    flex: 1;
    text-align: center;
    padding: 5%;
    color: #121431;
}

input[name="id"], input[name="partner"] {
    border: none;
    color:black;
    background: transparent;
    margin: 5px;
    text-align: center;
    height: 20px;;
}

.line {
    width: 50%;
    margin: auto;
    padding: 1px;
    border-top: 1px solid #242963;
    border-radius: 80%;
    margin-bottom: 15px;
}

.room {
    width: 50%;
    margin: auto;
    padding: 1%;
    background: #242963;
    border-radius: 5px;
}

.room_title {
    font-size: 18px;
    color: white;
    font-weight: 500;
    margin-bottom: 3px;
}


input[name="enter"],input[name="delete"] {
    width: 70%;
    padding: 2px;
    cursor: pointer;
    background: #242963;
    border: none;
    color: white;
    font-size:12px;
    font-family: 'Roboto', sans-serif;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
    transition: 0.2s ease;
    margin-left: 0%;
    border-radius:20px;
}


input[name="partner_haut"] {
    border: none;
    border-bottom: 1px solid #242963;
    background: transparent;
    margin: 10px;
    text-align: center;
    height: 20px;;
}

input[name="create_room"] {
    width: 30%;
    margin: auto;
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
    height: 25px;

}


.tab_style {
    text-align: center;
    font-size: 12px;
    background-color: rgb(211, 208, 255);
    height:0px;
}

    </style>

    <title>My Projets</title>
</head>
<body>


    <main>
        <header>
            <nav>
                <ul class="nav-links">
                    <li><a class="nav-link" href="../postes/postes.php">Dashboard</a></li>
                    <li><a class="nav-link" href="../profil/profil.php">Profil</a></li>
                    <li><a style="background: #0b1142;border-bottom: 3px solid #424889;}" class="nav-link" href="../projets/projets.php">Projects</a></li>
                    <li><a class="nav-link" href="../To_Do_List/list2.php">Room</a></li>
                </ul>
            </nav>
            <div class="logout">
                <p class="username">Welcome <?php echo $username ?></p>
                <img class="max-img" src="./imgs/logout.png" alt="logout">
                <h1><a href="postes.php?logout='1'">LogOut</a></h1>
                
            </div>
        </header>

        <div class="body">
        <?php include('../rooms_errors.php'); ?>
            <div class="acces">
                <div class="create_id">
                    <form method="POST" action="projets.php">
                        <h3>it's time to create your room !</h3>
                        <input type="text" name="partner_haut" placeholder="Your Partner"><br>
                        <input type="submit" name="create_room" value="Create Room">
                    </form>
                </div>
            </div>
            <div class="line"></div>
            <div class="table">
                <table id="my_table" style="width:70%;margin:auto">
                        <tr class="tab_head">
                            <td>Room</td>
                            <td>Partner</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php
                            $select_query = "SELECT * FROM rooms";
                            $result = $db->query($select_query);
                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo '  <tr class="tab_style">
                                            <form action="projets.php" method="POST">
                                                <td><input type="text" name="id" value="'.$row["R_id"].'"></td>
                                                <td><input type="text" name="partner" value="'.$row["$partner"].'"></td>
                                                <td><input type="submit" name="enter" value="OPEN"></td>
                                                <td><input type="submit" name="delete" value="DELETE"></td>
                                            </form>
                                        </tr>
                                    ';
                            }
                            } 
                 
            ?>
                </table>
            
                
            </div> 
            
            
            <div style="height: 150px; width: 100%;"></div>

        </div>
    </main>


    <script src="./projets.js">


    </script>
</body>
</html>








