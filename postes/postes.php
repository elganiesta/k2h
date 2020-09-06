<?php include('../server.php') ?>
<?php 
$username = $_SESSION['username'];
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
    padding: 15px;
}




/*****************LTHT*********************/
.ltht{
    display:flex;
    margin:auto; 
    
}


/****************LEFT*******************/



.left{
    height:auto;
    width:220px;
    background-color:#edebfb;
    margin:auto;
    padding:25px; 
    margin-top:0px; 
}
.choisir{
    color:#242963; 
    font-size:20px;  
}
.label{
    color:#696969;
    font-size:20px; 
}

/******************RIGHT******************/



.right{
    height:auto;
    width:1050px;
    background-color:#edebfb;
    padding:30px;
    margin-left:20px; 
}

/************FIRSTRIGHT*************/


.chercher{
    height:70px;
    display:flex;
}
.input{
    height:40px;
    width:350px; 
    padding:10px; 
    border-bottom:1px solid;
    margin:5px; 
    box-shadow:0 2px 4px rgba(0,0,0,0.6);
    transition: 0.2s ease;
    font-family: 'Roboto', sans-serif;
    font-size: 15px;
    border-bottom:2px solid #fff; 
}
.input:focus{
    height:42px;
    width:352px;
}

#titre{
	height:35px;
	width:350px; 
}
#email{
	height:35px;
	width:350px; 
}
#description{
    height:35px;
	width:350px;
}

.posterbtn{
    border-radius:20px;
    height:35px;
    width:140px; 
    background:#333975;
    cursor:pointer;
    box-shadow:0 2px 3px rbga(0,0,0,0.6);
    color:antiquewhite;
    border:none;
    margin-left:350px;
}
.posterbtn:hover{ 
    background:#daa520; 
}



/**************SECONDRIGHT*****************/

#bigcard{
    border-bottom:2px solid gray; 
    overflow: hidden;
    position: relative;
	height:90px;
}


@keyframes k_height {
    0% {
        height: 90px;
    }
    100% {
        height: 340px;
    }
}
.intro{
    color:#242963;
    width:90%;
    font-size:15px;
    margin:auto; 
    margin-left:10px; 
}
.introtitle{
    font-size:30px;
}
#form{
    
   
    width:50%;
    margin:auto;
    margin-left:100px;
    position:relative; 
    padding:0px;  
    font-family: Arial, Helvetica, sans-serif;
}

.publierbtn{
    border-radius:40px;
    height:30px;
    width:100px; 
    background:#333975;
    cursor:pointer;
    box-shadow:0 2px 3px rbga(0,0,0,0.6);
    color:antiquewhite;
    border:none;
}
.publierbtn:hover{ 
    background:#daa520; 
}

input[type=text], textarea {
  width:95%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
.label{
	font-size:14px; 
}



/****************THIRDRIGHT*********************/



.post{
    border-bottom:2px solid #aaaaaa;
    border-left:2px solid #D3D3D3;
    border-right:2px solid #D3D3D3;    
    list-style-type:none;
    padding:10px; 
    padding-left:40px;
	width:100%;
    height:auto; 
    cursor:default;
}
.post:hover{
    box-shadow:0  4px  8px  rgba(0, 0, 0, 0.6);}
.post:active{
	border-color:black;
}
.pubs{
    border-bottom:2px solid #b29b8d;
	background:rgb(211, 208, 255);;
	width:100%; 
}
#title{
	font-size:17px; 
}


#name{
	margin-bottom:20px; 
	color:#417374; 
}
.name:hover{
	text-decoration:underline;
	color:#005EA5; 
}
#title{
    margin-bottom:5px; 
}
#descriptionn{
	margin-bottom:10px;  
}


input[name="friend"] {
    width:20%;
    background: #242963;
    color:white;
    border :none;
    padding:5px;
    font-size:16px;
    font-family: 'Solway', serif;
    margin-bottom:12px;
    text-align:center;
    cursor:default;
}

input[name="voir"]:hover{ 
    background:#daa520; 
}

input[name="voir"] {
    width:15%;
    background: #242963;
    color:white;
    border :none;
    border-radius:20px;
    padding:5px;
    height:30px;
    font-size:12px;
    font-family: 'Solway', serif;
    margin-bottom:12px;
    text-align:center;
    cursor:pointer;
    margin-left:80%;
}



  </style>

    <title>My Room</title>
</head>
<body>


    <main>
        <header>
            <nav>
                <ul class="nav-links">
                    <li><a style="background: #0b1142;border-bottom: 3px solid #424889;}"class="nav-link" href="../postes/postes.php">Dashboard</a></li>
                    <li><a class="nav-link" href="../profil/profil.php">Profil</a></li>
                    <li><a class="nav-link" href="../projets/projets.php">Projects</a></li>
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
            
        <div class="ltht">
            <div class="left">
              <h class="choisir"><strong>Choisir une ville:</strong></h>
              <br><br>
              <table>
                    <tr>
                        <td><input type="checkbox" checklist-value="type.value" ng-model="checked" class="ng-pristine ng-valid ng-touched"></td>
                        <td>Agadir</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" checklist-value="type.value" ng-model="checked" class="ng-pristine ng-valid ng-touched"></td>
                        <td>Casablanca</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" checklist-value="type.value" ng-model="checked" class="ng-pristine ng-valid ng-touched"></td>
                        <td>Marrakech</td>
                    </tr>            
                    <tr>
                        <td><input type="checkbox" checklist-value="type.value" ng-model="checked" class="ng-pristine ng-valid ng-touched"></td>
                        <td>Fès</td>
                    </tr>                            
                    <tr>
                        <td><input type="checkbox" checklist-value="type.value" ng-model="checked" class="ng-pristine ng-valid ng-touched"></td>
                        <td>Tanger</td>
                    </tr> 
                    <tr>
                        <td><input type="checkbox" checklist-value="type.value" ng-model="checked" class="ng-pristine ng-valid ng-touched"></td>
                        <td>Salé</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" checklist-value="type.value" ng-model="checked" class="ng-pristine ng-valid ng-touched"></td>
                        <td>Meknes</td>
                     </tr> 
                    <tr>
                        <td><input type="checkbox" checklist-value="type.value" ng-model="checked" class="ng-pristine ng-valid ng-touched"></td>
                        <td>Rabat</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" checklist-value="type.value" ng-model="checked" class="ng-pristine ng-valid ng-touched"></td>
                        <td>Témara</td>
                    </tr>                                                                                    
                    <tr>
                        <td><input type="checkbox" checklist-value="type.value" ng-model="checked" class="ng-pristine ng-valid ng-touched"></td>
                        <td>Oujda</td>
                    </tr>                                                  
              </table>
            </div>
            <div class="right">
            
             
              <div class="chercher">
                  <input class="input" id="research" type="search" placeholder="chercher une offre" pattern="(.|\s)*\S(.|\s)*">
                  
                 <div class="rightlfo9">
                 <button onclick="card_height()" class="posterbtn" ><strong>Poster une offre </strong></button>
              </div> 
                  
              </div>
              
                
                
              
              <div id="bigcard">
                    <div class="intro">
                         <h><strong class="introtitle">Exprimer vos besoins</strong></h>
                         <br>
                         <p>Vous pouvez contacter les livreurs,voir leurs profils avant de choisir votre livreur,et payez lorsque vous êtes satisfaits.</p>
                         <br>
                    </div>
                    <form id="form" action="postes.php" method="post">
                        <label for="titre"><strong class="label">Le titre :</strong></label>
                        <br>
                        <input type="text" id="titre" name="titre" placeholder="Entrer un titre">
                        <br>         
                        <label for="description"><strong class="label">Déscription :</strong></label>
                        <br>
                        <textarea id="description" name="description" placeholder="Décrir vos besoins" style="height:80px"></textarea>
                        <br>
                        <input type="submit" id="submit" class="publierbtn" name="poster" value="Publier">
                    </form>  
                    <br><br><br>
             </div> <!--FIN BIGCARD-->
                   
             <div class="pubs" id="pubs">
                <?php
                    $select_query = "SELECT * FROM pubs";
                    $result = $db->query($select_query);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '  
                                    <form action="postes.php" method="POST">
                                        <ul class="post" id="mylist">
                                            <input type="text" name="friend" value="'.$row["username"].'">
                                            <li id="title"><strong>'.$row["titre"].'</strong></li>
                                            <li id="descriptionn">'.$row["description"].'</li>
                                            <input type="submit" name="voir" value="VOIR PROFIL">
                                        </ul>
                                    </form>
                            ';
                    }
                    } 
                 
            ?>
               
             

                
                
             </div><!--FIN pubs-->
          </div> <!--FIN RIGHT-->
        </div> <!--FIN LTHT-->
        
        <div style="height: 100px; width: 100%;"></div>
        </div>
    </main>


    <script>
const title=document.getElementById('titre');
const description=document.getElementById('description');
const email=document.getElementById('email');

const form=document.getElementById('form');
var mydiv = document.getElementById('pubs');


/*
class Post {
    constructor(title,description,email) {
        this.title = title ;
        this.description = description;
        this.email = email;
    }
}



// Store
class Store {
    static getPosts() {
      let posts;
      if(localStorage.getItem('Posts') === null) {
        posts = [];
      } else {
        posts = JSON.parse(localStorage.getItem('Posts'));
      }
  
      return posts;
    }

  
    static addPost(post) {
      const posts = Store.getPosts();
      posts.push(post);
      localStorage.setItem('Posts', JSON.stringify(posts));
    }

  }


  // Locale Storage
class My_Ls {
    static displayPosts() {
    
        const StoredPosts = Store.getPosts();

    StoredPosts.forEach( (post) => {
        My_Ls.addPostToList(post);
    });
}

    static addPostToList(post) {
        var mydiv = document.getElementById('pubs');

        var collection = document.createElement('ul');
        collection.className = 'post' ;
        collection.id = 'mylist';
        
        
        collection.innerHTML = `
        <li id="title"><strong>${post.title}</strong></li>
        <li id="descriptionn">${post.description}</li>
        <li id="emaill">${post.email}</li>
        `;

        //append tr to mytable
        mydiv.appendChild(collection);

    }
}



//all event listeners 

 loadEventListeners();

 function loadEventListeners() {
     //load stored books
     document.addEventListener('DOMContentLoaded',My_Ls.displayPosts);
     //Add Task
     form.addEventListener('submit',addMyPost);
     
 }

 function addMyPost (e) {
    

    const obj = new Post(title.value,description.value,email.value);
    Store.addPost(obj);


    var collection = document.createElement('ul');
        collection.className = 'post' ;
        collection.id = 'mylist';
        
        
        collection.innerHTML = `
        <li id="title"><strong>${post.title}</strong></li>
        <li id="descriptionn">${post.description}</li>
        <li id="emaill">${post.email}</li>
        `;

        mydiv.appendChild(collection);
    
    
    //form.reset();
    //refresh 
    //document.location.reload(true);

    e.preventDefault();
}

*/

var card = document.getElementById('bigcard');
function card_height() {
	
    setTimeout(wait,2000);
    card.style.animation = 'k_height 2s ease';
    function wait() {
        card.style.height = '340px';
    }
}

    </script>

</body>
</html>








