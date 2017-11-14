<?php
	include '../database.php';
	
	$id =$_GET["ID"];
	
	$sql = "DELETE FROM `lulusan` WHERE `lulusan`.`ID` = ".$id.";";
	if ($conn->query($sql) === TRUE) {
		echo "
		<script>
			alert('Data berhasil dihapus');
			window.location.href='ViewL.php';
		</script>";
	} else {
		echo "
		<script>
			alert('terjadi kelasahan');
			window.location.href='editL.php?ID=".$id."';
		</script>";
	}
?>