<?php
session_start();

// initializing variables
$errors = array(); 
$business_name = "";
$adress="";
$city="";
$banque="";
$rib="";
$tele="";
$birthday="jour/mois/année";
$experience ="x ans";
$price = "prix en dh/livraison";
$description = "example : je suis hanane chrif el asri , 20ans, ...";


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'site');


//initializing type

if (isset($_POST['signup_submit_E'])) {
  $type = "entreprise" ;
  $business_name = mysqli_real_escape_string($db, $_POST['business_name']);
}
if (isset($_POST['signup_submit_L'])) {
  $type = "livreur" ;
}



// REGISTER user
if (isset($_POST['signup_submit_E']) || isset($_POST['signup_submit_L'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);
  $adress = mysqli_real_escape_string($db, $_POST['adress']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $banque = mysqli_real_escape_string($db, $_POST['banque']);
  $rib = mysqli_real_escape_string($db, $_POST['rib']);
  $tele = mysqli_real_escape_string($db, $_POST['tele']);

  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $password2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$password_crypted = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password,business_name, adress, city, banque, rib, tele, type,birthday,experience,price,description) 
    VALUES ('$username' , '$email', '$password','$business_name','$adress','$city','$banque',$rib,$tele,'$type','$birthday','$experience','$price','$description')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['type'] = $type;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../profil/profil.php');
  }
}

// ... 
// ... 







// LOGIN USER
if (isset($_POST['signin_submit'])) {
  //$username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  /*if (empty($username)) {
    array_push($errors, "Username is required");
  }*/
  if (empty($email)) {
    array_push($errors, "Username is required");
   } 
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    //$password = md5($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($results);
    if (mysqli_num_rows($results) == 1) {

      //$_SESSION['username'] = $username;
      $_SESSION['username']=$user['username'];
      $_SESSION['type']=$user['type'];
      $_SESSION['email']= $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: ../postes/postes.php');
    }else {
      array_push($errors, "Wrong username or email or password ");
    }
  }
}

//-------------
//__






// edit profile
        
if (isset($_POST['update'])) {
  $username=$_SESSION['username'];
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $adress = mysqli_real_escape_string($db, $_POST['adress']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $tele = mysqli_real_escape_string($db, $_POST['tele']);
  $birthday = mysqli_real_escape_string($db, $_POST['birthday']);
  $experience = mysqli_real_escape_string($db, $_POST['experience']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
  $description = mysqli_real_escape_string($db, $_POST['description']);

  mysqli_query($db, "UPDATE users SET  city='$city', email='$email', tele='$tele', adress='$adress' , birthday='$birthday', experience='$experience'
  , price='$price', description='$description' WHERE username='$username'");
  $_SESSION['success'] = "Profile updated!"; 

  header('location: profil.php');
}/*
//--------
//--------
//---image de profile----
 if (isset($_POST['upload'])) {
  $username=$_SESSION['username'];
    // Get image name
    $image = $_FILES['image']['name'];

    // image file directory
    $target = "./images/".basename($image);
    $sql = "UPDATE users SET image ='$image' WHERE username='$username' ";
    // execute query
    mysqli_query($db, $sql);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
//------------
 
*/
//----visitprofile

if (isset($_POST['voir'])) {
  $friendname = mysqli_real_escape_string($db, $_POST['friend']);
   $querys = "SELECT * FROM users WHERE username='$friendname' ";
    $results = mysqli_query($db, $querys);
    if (mysqli_num_rows($results) == 1) {

      $_SESSION['friendname'] = $friendname;
      header('location: ../profil/othersprofil.php');
    }else {
      array_push($errors, "Ce compte n'existe pas");
    }
}



//send orders to db
/*
if (isset($_POST['submit'])) {
  $code = mysqli_real_escape_string($db, $_POST['code']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $adress = mysqli_real_escape_string($db, $_POST['adress']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $note = mysqli_real_escape_string($db, $_POST['note']);
  $checked = "";
 

  mysqli_query($db, "INSERT INTO orders(name, adress, price, phone, note,checked, R_idS) 
                      VALUES ('$name','$adress','$price','$phone','$note','$checked','$id')");
  $_SESSION['success'] = "Profile updated!"; 

  header('location:list2.php');
}*/



//create rooms's id 
if(isset($_POST['create_room'])) {
  $username = $_SESSION['username'];
  $partner = mysqli_real_escape_string($db, $_POST['partner_haut']);
  $type = $_SESSION['type'];
  if ($type == 'livreur') {
    $livreur = $username;
    $entreprise = $partner;
  } else {
    $entreprise = $username;
    $livreur = $partner;
  }
  if ($username == $partner) { array_push($errors, "Don't put your username"); }

  $partner_check_query = "SELECT * FROM users WHERE username='$partner' LIMIT 1";
  $result = mysqli_query($db, $partner_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if (!$user) { // if user exists
    array_push($errors, "Your Partner Doesn't exist!");
  }

  if (count($errors) == 0) {
    mysqli_query($db, "INSERT INTO rooms (entreprise, livreur) VALUES ('$entreprise','$livreur')");
    $_SESSION['created'] = "room created!"; 
    header('location: projets.php');
  }
}

//enter room
if(isset($_POST['enter'])) {
  $_SESSION['partner_name'] = mysqli_real_escape_string($db, $_POST['partner']);
  $_SESSION['id'] = mysqli_real_escape_string($db, $_POST['id']);
  header('location: ../To_Do_List/list2.php');
}

if(isset($_POST['delete'])) {
  $id = mysqli_real_escape_string($db, $_POST['id']);
  mysqli_query($db, "DELETE FROM rooms WHERE R_id='$id'");
  header('location: projets.php');
}

//create pubs 

if(isset($_POST['poster'])) {
  $username = $_SESSION['username'];
  $titre = mysqli_real_escape_string($db, $_POST['titre']);
  $description = mysqli_real_escape_string($db, $_POST['description']);

  if (empty($titre)) { array_push($errors, "title is required"); }
 

  if (count($errors) == 0) {
    mysqli_query($db, "INSERT INTO pubs (username,titre,description, email) VALUES ('$username','$titre','$description','email')");
    header('location: postes.php');
  }
}

?>