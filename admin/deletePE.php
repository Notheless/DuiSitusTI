<?php
	include '../database.php';
	
	$id =$_GET["ID"];
	
	$sql = "DELETE FROM `posting` WHERE `posting`.`ID` = ".$id.";";
	if ($conn->query($sql) === TRUE) {
		echo "
		<script>
			alert('Data berhasil dihapus');
			window.location.href='ViewP.php';
		</script>";
	} else {
		echo "
		<script>
			alert('terjadi kelasahan');
			window.location.href='editP.php?ID=".$id."';
		</script>";
	}
?>