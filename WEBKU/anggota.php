<!DOCTYPE html>
<html>
<head>
	<title>Daftar Anggota</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS.css">
	<meta name=”viewport” content=”width=device-width, initial-scale=1”>
	<style>img {width: 350px} </style>
	<style type="text/css"></style>

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
  <li><a href="add.php"><span class="glyphicon glyphicon-plus"></span> Sign Up </a></li>
  <li><a class="active" href="loginadmin.php"><span class="glyphicon glyphicon-user"></span> Member List</a></li>
  <li ><a href="https://www.youtube.com/"><span class="glyphicon glyphicon-expand"></span> Youtube</a></li>
  <p style="text-align: right;font-size: 20px;color: white;padding-right: 40px;margin-top: 3px; text-transform: capitalize;font-family: verdana;"><U> Member Bercakap </U></p>
</ul>

	<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Anggota Bercakap</h1>
			<caption>Data Pendaftar</caption>
				<table class="table">

					<tr style="text-align:center;background-color:#1abc9c">
						<td>NIM</td>
						<td>Nama</td>
						<td>Umur</td>
						<td>No HP</td>
						<td>Aksi</td>
					</tr>

					<?php
						include "connect.php";	//manggil file php
						$query = mysqli_query($db, "SELECT * FROM mahasiswa") or die (mysqli_error());	//mejalankan query 
							if(mysqli_num_rows($query) == 0){
								echo "<b>Tidak ada data yang tersedia</b>"; //	pengecekan apakah data ada di dalam database atau tidak
							}else{
								while($r = mysqli_fetch_array($query)): ?>
									<tr style="text-align:center">
										<td>
											<?php echo $r['nim'] ?>
										</td>
										<td>
											<?php echo $r['nama'] ?>
										</td>
										<td>
											<?php echo $r['umur'] ?>
										</td>
										<td>
											<?php echo $r['no_hp'] ?>
										</td>
										<td>
											<a href="edit.php?nim= <?php echo $r['nim'] ?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span>Edit</button></a> ||

											<a href="delete.php?nim=<?php echo $r['nim'] ?>" onClick='return
											confirm("Apakah Ada yakin menghapus?")'><button class="btn btn-primary">
											<span class="glyphicon glyphicon-trash"></span>Hapus</button></a> </td>
									</tr>

								<?php
								endwhile;
									}
					?>
				</table>
		</div>
	</div>
</div>

</body>
<footer>
	<p style="text-align: center;"><span class="glyphicon glyphicon-copyright-mark"></span> Copyright MAR_27</p>
	<p style="text-align: center;">Dibuat di Kamar Asrama Telkom University Kamar 213</p>
</footer>	
</html>