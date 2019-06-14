<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS.css">
  <meta name=”viewport” content=”width=device-width, initial-scale=1”>
<style>

  ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #1abc9c;
  }

  li {
      float: left;
      border-right:1px solid #bbb;
  }

  li:last-child {
      border-right: none;
  }

  li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
  }

  li a:hover:not(.active) {
      background-color: #111;
  }

  .active {
      background-color: #4CAF50;
  }
body {
  font-family: Arial, Helvetica, sans-serif;
  color: #1abc9c
}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 200px;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

  <ul>
  <li><a href="WEBFIX.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a href="login.php"><span class="glyphicon glyphicon-plus"></span> Log In </a></li>
  <li><a href="add.php"><span class="glyphicon glyphicon-plus"></span> Sign Up </a></li>
  <li><a class="active" href="loginadmin.php"><span class="glyphicon glyphicon-user"></span> Member List</a></li>
  <li ><a href="https://www.youtube.com/"><span class="glyphicon glyphicon-expand"></span> Youtube</a></li>
  <p style="text-align: right;font-size: 20px;color: white;padding-right: 40px;margin-top: 3px; text-transform: capitalize;font-family: verdana;"><U> login Admin form </U></p>
</ul>


<form method="POST" action="">
  <div class="imgcontainer">
    <img src="afif.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="nama"><b>Username Admin</b></label>
    <input type="text" placeholder="Enter Username" name="nama" required>

    <label for="nim"><b>NIM Admin</b></label>
    <input type="password" placeholder="Enter Password" name="nim" required>
        
    <button name="login" type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

<?php
include "connect.php";
if(isset($_POST['nama'])){
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];

if($nama == 'afif' && $nim == '123'){
    echo "Login Berhasil";
    include "anggota.php";
    exit();
} else{
    echo "Upss Something wrong..";
    include "failed.php";
    exit();
}
}
?>

</body>
</html>



