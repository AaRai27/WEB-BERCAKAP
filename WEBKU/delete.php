<?php
	include('connect.php');
	$nim = $_GET['nim'];
	$queryhapus = mysqli_query($db, "DELETE FROM mahasiswa WHERE nim = $nim");	/*DELETE menghapus primary*/
	if($queryhapus){
		header('location: WEBFIX.php');
	}else{
		echo "Upss Something wrong..";
	}
?>