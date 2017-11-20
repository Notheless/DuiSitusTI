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
	$sql = "SELECT * FROM `gambar` WHERE `gambar`.`TagPost` = ".$id.";";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) 
		{
			$file = '../../imgpost/'.$row["ID"].".jpg";
			$fileT = '../../imgpost/'.$row["ID"]."-thumbnail.jpg";
			unlink($file);
			unlink($fileT);
			$sql = "DELETE FROM `gambar` WHERE `gambar`.`ID` = ".$row["ID"].";";
			$conn->query($sql);
		}
	echo "
		<script>
			window.location.href='../postingan.php';
		</script>";
?>