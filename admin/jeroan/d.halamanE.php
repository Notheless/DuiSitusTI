
	<?php
	include '../../database.php';
	$id= $_POST['ID'];
	$judul = $_POST['Judul'];
	$isi = $_POST['Isi'];
	$header = $_POST['header'];
	$count = 0;

	$sql = "DELETE FROM `datahalaman` WHERE `datahalaman`.`Katagori` = ".$id.";";
	$result = $conn->query($sql);
	foreach($judul as $k){
		if( strcmp($judul[$count],"") || strcmp($isi[$count],"") ) {
			if($count == ($header-1)){
				$sql="INSERT INTO `datahalaman`( `Katagori`, `Header`, `Judul`, `Isi`) VALUES (".$id.",1,'".$judul[$count]."','".$isi[$count]."');";
			}
			else{
				$sql="INSERT INTO `datahalaman`( `Katagori`, `Header`, `Judul`, `Isi`) VALUES (".$id.",0,'".$judul[$count]."','".$isi[$count]."');";
			}
			$result = $conn->query($sql);
		
		}
		$count+=1;

	}
	echo "
		<script>
			alert('Data telah diupdate');
			window.location.href='../halaman.php';
		</script>";
?>