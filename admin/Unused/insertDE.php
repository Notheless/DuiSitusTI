<?php
	include '../database.php';
	
	$nama =$_GET["Nama"];
	$email =$_GET["Email"];
	$telp =$_GET["Telp"];
	$hp =$_GET["HP"];
	$alamat =$_GET["Alamat"];
	$pendidikan =$_GET["Pendidikan"];
	$bidang =$_GET["Bidang"];
	
	$sql = "INSERT INTO `dosen` (`ID`, `Nama`, `Email`, `HP`, `Telp`, `Alamat`, `Pendidikan`, `Bidang`) VALUES (NULL, '".$nama."', '".$email."', '".$hp."', '".$telp."', '".$alamat."', '".$pendidikan."', '".$bidang."');";
	if ($conn->query($sql) === TRUE) {
		echo "
		<script>
			alert('Data berhasil ditambahkan');
			window.location.href='ViewD.php'; 
		</script>";
	} else {
		echo "
		<script>
			alert('Terjadi Kelasahan');
			window.location.href='editD.php?ID=".$id."';
		</script>";
	}
?>