<?php
	include '../database.php';
	
	$id =$_GET["ID"];
	
	$sql = "DELETE FROM `dosen` WHERE `dosen`.`ID` = ".$id.";";
	if ($conn->query($sql) === TRUE) {
		echo "
		<script>
			alert('Data berhasil dihapus');
			window.location.href='ViewD.php';
		</script>";
	} else {
		echo "
		<script>
			alert('terjadi kelasahan');
			window.location.href='editD.php?ID=".$id."';
		</script>";
	}
?>