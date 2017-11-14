<?php
	include '../database.php';
	
	$judul =$_GET["judul_artikel"];
	$tanggal =$_GET["tanggal_artikel"];
	$isi =$_GET["isi_artikel"];
	$auth =$_GET["auth"];
	$tag0 =$_GET["tag0"];
	$tag1 =$_GET["tag1"];
	$tag2 =$_GET["tag2"];
	$tag3 =$_GET["tag3"];
	$tag4 =$_GET["tag4"];
	$tag5 =$_GET["tag5"];
	$tag6 =$_GET["tag6"];
	$tag7 =$_GET["tag7"];
	$tag8 =$_GET["tag8"];
	if(!$tanggal){
		$t=getdate();
		$tanggal = $t['year']."-".$t['mon']."-".$t['mday']." ".$t['hours'].":".$t['minutes'].":".$t['seconds'];
	}
	$sql = "INSERT INTO `posting` (`ID`, `Judul`, `Tanggal`, `Isi`, `Author`, `tag0`, `tag1`, `tag2`, `tag3`, `tag4`, `tag5`, `tag6`, `tag7`, `tag8`) VALUES (NULL,'".$judul."','".$tanggal."','".$isi."','".$auth."','".$tag0."','".$tag1."','".$tag2."','".$tag3."','".$tag4."','".$tag5."','".$tag6."','".$tag7."','".$tag8."');";
	if ($conn->query($sql) === TRUE) {
		echo "
		<script>
			alert('Data berhasil ditambahkan');
			window.location.href='ViewP.php';
		</script>"; 
	} else {
		echo "
		<script>
			alert('Terjadi Kelasahan');
			window.location.href='insertP.php';
		</script>";
		//echo $sql;
	}
?>