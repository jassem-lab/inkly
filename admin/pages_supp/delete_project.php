<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "majdoub";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die('connection failed :' . mysqli_connect_error());
}

	
	$id = $_GET['ID'];
	$sql = "select * from portfolio where id=".$id ; 
	$req = mysqli_query($conn , $sql);
	while ($enreg = mysqli_fetch_array($req)) {
		$titre = $enreg["titre"] ; 
	}
	$sql2 = "DELETE FROM `portfolio_images` WHERE `titre` = '".$titre."' ORDER BY `id` DESC";
	$requete2 = mysqli_query($conn,$sql2); 

	$sql3 = "delete from portfolio where id=".$id;
	$requete3 = mysqli_query($conn,$sql3) ;			
		
	
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="../realisations.php"</SCRIPT>';
  
?>