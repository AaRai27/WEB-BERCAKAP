
<?php
$dbhost = 'localhost:3306'; //dimana kita ngejalanin database
$dbuser = 'root';	//id user si pembuat database
$dbpass = '';	//password id si pembuat database
$dbname = 'webdev';	//nama database yang ingin di connectin
$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);	//membuat database baru

if($db->connect_errno > 0){ //connect errno menunjukan apakah ada error atau tidak, misal error ada 3, maka 3>0 sehinga mengeluark
die('Unable to connect to database [' . $db->connect_error . ']');
}
echo '-';
?>

