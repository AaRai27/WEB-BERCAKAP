<!DOCTYPE html>
<html>
<head>
<title>Daftar Anggota Baru</title>
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
  <li><a href="login.php"><span class="glyphicon glyphicon-plus"></span> Log In </a></li>
  <li><a  class="active" href="add.php"><span class="glyphicon glyphicon-plus"></span> Sign Up </a></li>
  <li><a href="loginadmin.php"><span class="glyphicon glyphicon-user"></span> Member List</a></li>
  <li ><a href="https://www.youtube.com/"><span class="glyphicon glyphicon-expand"></span> Youtube</a></li>
  <p style="text-align: right;font-size: 20px;color: white;padding-right: 40px;margin-top: 3px; text-transform: capitalize;font-family: verdana;"><U> selamat datang di website kami </U></p>
</ul>

<!-- <h2>FORM TAMBAH DATA</h2>
<form action="" method="POST"> --> <!-- action = "" , makasudnya adalah actionya ke dirinya sendiri -->
	<!-- <table>
		<tr>
			<td>NIM </td>
			<td><input type="text" name="nim" placeholder="Masukkan NIM" /></td>
		</tr>
		<tr>
			<td>Nama </td>
			<td><input type="text" name="nama" placeholder="Masukkan Nama" /></td>
		</tr>
		<tr>
			<td>Umur</td>
			<td> <input type="text" name="umur" placeholder="Masukkan Umur"></td>
		</tr>
		<tr>
			<td>No HP</td>
			<td><input type="text" name="no_hp" placeholder="Masukkan No HP"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="tambah" value="Tambah">
			<button type="reset" value="Reset">Reset</button>
			</td>
		</tr>
	</table>
</form> -->

<div class="col-md-12"><img src="inaa.png"> </div>	
<br>
<br>
<div class="container">
<h1>Mendaftar Member Bercakap</h1>

<form action="" method="POST" name="input">
	<table class="table" class="form-group">
	<div class="form-group">
		<label><span class="glyphicon glyphicon-number"></span>NIM Anda:</label>
		<input type="text" style="text-align: center;" name="nim" class="form-control" placeholder="Masukkan NIM Anda...">
	</div>

	<div class="form-group">
		<label>Nama Anda:</label>
		<input type="text" style="text-align: center;" name="nama" class="form-control" id="alamat" placeholder="Masukkan Nama Anda...">
	</div>

	<div class="form-group">
		<label>Umur Anda:</label>
		<input type="text" style="text-align: center;" name="umur" class="form-control" id="alamat" placeholder="Masukkan Umur Anda...">
	</div>

	<div class="form-group">
		<label>Nomor HP Anda:</label>
		<input type="text" style="text-align: center;" name="no_hp" class="form-control" id="alamat" placeholder="Masukkan Nomor HP Anda...">
	</div>

	<tr>
		<td>
		<input type="submit" class="btn btn-primary" name="tambah" value="+Tambah">
		<button type="reset" class="btn btn-primary" value="Reset"><span class="glyphicon glyphicon-remove-circle"></span>Reset</button>
		</td>
	</tr>
	</table>
</form>
<br>
<br>
<br>
	<a href="WEBFIX.php" class="menu"><button class="btn btn-primary"><span class="glyphicon glyphicon-home"></span> BERANDA</button></a> ||
	<a href="add.php" class="menu"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> TAMBAH DATA</button></a>
	<br>


<?php
include "connect.php";
if(isset($_POST['tambah'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$no_hp = $_POST['no_hp'];

	$querytambah = mysqli_query($db, "INSERT INTO mahasiswa VALUES('$nim', '$nama', '$umur', '$no_hp')") or die(mysqli_error());	
	/*INSERT INTO = masukkan data kedalam ;;;   VALUES = isi dari data yang ingin dimasukkan, ==DATA HARUS URUT BERDASARKAN YANG DITULIS==*/

if($querytambah) {
	header('location: WEBFIX.php'); /*HEADER =mengarahkan data database ke index.php */
} else{
	echo "Upss Something wrong..";
}
}
?>
	
	
</body>
<footer>
	<p style="text-align: center;"><span class="glyphicon glyphicon-copyright-mark"></span> Copyright MAR_27</p>
	<p style="text-align: center;">Dibuat di Kamar Asrama Telkom University Kamar 213</p>
</footer>
</html>