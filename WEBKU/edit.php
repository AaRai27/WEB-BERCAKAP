<!DOCTYPE html>
<html>
<head>
<title>EDIT DATA</title>
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS.css">
	<meta name=”viewport” content=”width=device-width, initial-scale=1”>
	<style>img {width: 350px} </style>
	<style type="text/css">
	</style>

	<style>
	body{
		color: #1abc9c;
	}
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
</style>
</head>
<body>

<ul>
  <li><a href="WEBFIX.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a class="active" href="add.php"><span class="glyphicon glyphicon-plus"></span> Sign Up</a></li>
  <li><a href="loginadmin.php"><span class="glyphicon glyphicon-user"></span> Member List</a></li>
  <li><a href="https://www.youtube.com/"><span class="glyphicon glyphicon-expand"></span> Youtube</a></li>
  <p style="text-align: right;font-size: 20px;color: white;padding-right: 40px;margin-top: 3px; text-transform: capitalize;font-family: verdana;"><u>edit data</u></p>
</ul>




<?php
	include "connect.php";
	$nim = $_GET['nim'];
	$query = mysqli_query($db, "SELECT * FROM mahasiswa WHERE nim = '$nim'");	/*WHERE = */
	$res = mysqli_fetch_array($query);	/*mysqli_fetch_array = Mengubah datanya menjadi array*/
?>

<form action="" method="POST">
	<table class="table" class="form-group">

	<div class="form-group">
		<label>Nama Anda:</label>
		<input type="text" style="text-align: center;" name="nama" class="form-control" id="alamat"  value="<?php echo $res['nama'] ?>">
	</div>

	<div class="form-group">
		<label>Umur Anda:</label>
		<input type="text" style="text-align: center;" name="umur" class="form-control" id="alamat"  value="<?php echo $res['umur'] ?>">
	</div>

	<div class="form-group">
		<label>Nomor HP Anda:</label>
		<input type="text" style="text-align: center;" name="no_hp" class="form-control" id="alamat"  value="<?php echo $res['no_hp'] ?>">
	</div>

	<tr>
		<td>
		<input type="submit"  class="btn btn-primary" name="edit" value="Edit">
		<button type="reset"  class="btn btn-primary" value=" Reset"><span class="glyphicon glyphicon-remove-circle"></span>  Reset</button>
		</td>
	</tr>

</table>
</form>
</body>
</html>





<?php
if(isset($_POST['edit'])){
	/*NIM TIDAK ADA KARENA NIM ADALAH "PRIMARY KEY" , agar jika data di edit masih dapat dicari*/
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$no_hp = $_POST['no_hp'];
	$queryupdate = mysqli_query($db, "UPDATE mahasiswa SET nama = '$nama', umur = '$umur', no_hp = '$no_hp' WHERE nim = $nim");	/*WHERE BERGUNA untuk menunjukan sasaran data yang ingin di edit, jika tanpa WHERE ,maka data pada database akan keubah semua*/
	if($queryupdate){
		header('location: WEBFIX.php');
	}else{
		echo "Upss Something wrong..";
	}
}
?>