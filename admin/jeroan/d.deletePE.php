<?php
	include '../../database.php';
	
	$id =$_POST["ID"];
	
	$sql = "DELETE FROM `posting` WHERE `posting`.`ID` = ".$id.";";
	if ($conn->query($sql) === TRUE) {
		echo "
		<script>
			alert('Data berhasil dihapus');
		</script>";
	} else {
		echo "
		<script>
			alert('terjadi kelasahan');
		</script>";
	}
		echo "
		<script>
			window.location.href='../postingan.php';
		</script>";
?>