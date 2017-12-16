<?php
	include '../../database.php';
	
	$id =$_POST["ID"];
	
	$sql = "DELETE FROM `dosen` WHERE `dosen`.`ID` = ".$id.";";
	if ($conn->query($sql) === TRUE) {
		$file = '../../img/'.$id.".jpg";
		unlink($file);
		$sql = "DELETE FROM `detaildosen` WHERE `IDDosen`=".$id.";";
		$conn->query($sql);
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
			window.location.href='../dosen.php';
		</script>";
?>