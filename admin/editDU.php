<?php
	include '../database.php';
	
	$id =$_GET["ID"];
	$nama =$_GET["Nama"];
	$email =$_GET["Email"];
	$telp =$_GET["Telp"];
	$hp =$_GET["HP"];
	$alamat =$_GET["Alamat"];
	$pendidikan =$_GET["Pendidikan"];
	$bidang =$_GET["Bidang"];
	
	$sql = "UPDATE `dosen` SET 
	`Nama` = '".$nama."',
	`Email` = '".$email."',
	`Telp` = '".$telp."',
	`HP` = '".$hp."',
	`Alamat` = '".$alamat."',
	`Pendidikan` = '".$pendidikan."',
	`Bidang` = '".$bidang."' 
	WHERE `dosen`.`ID` = ".$id.";";
	if ($conn->query($sql) === TRUE) {
		header("Location: ViewD.php"); /* Redirect browser */
		exit();
	} else {
		echo "
		<script>
			alert('terjadi kelasahan');
			window.location.href='editD.php?ID=".$id."';
		</script>";
	}
?>