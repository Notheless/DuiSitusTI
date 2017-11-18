<?php
	function checkValue($pembimbing1,$pembimbing2,$penguji1,$penguji2,$penguji3){
		if (!$pembimbing1==0){
			if ($pembimbing1==$pembimbing2) return false;
			if ($pembimbing1==$penguji1) return false;
			if ($pembimbing1==$penguji2) return false;
			if ($pembimbing1==$penguji3) return false;
		}
		if (!$pembimbing2==0){
			if ($pembimbing2==$penguji1) return false;
			if ($pembimbing2==$penguji2) return false;
			if ($pembimbing2==$penguji3) return false;
		}
		if (!$penguji1==0){
			if ($penguji1==$penguji2) return false;
			if ($penguji1==$penguji3) return false;
		}
		if (!$penguji2==0){
			if ($penguji2==$penguji3) return false;
		}
		return true;
	}

	include '../database.php';
	
	$nama =$_GET["nama"];
	$judul =$_GET["judul"];
	$tanggal =$_GET["tanggal"];
	$pembimbing1 =$_GET["pembimbing1"];
	$pembimbing2 =$_GET["pembimbing2"];
	$penguji1 =$_GET["penguji1"];
	$penguji2 =$_GET["penguji2"];
	$penguji3 =$_GET["penguji3"];
	
	if(!$tanggal){
		$t=getdate();
		$tanggal = $t['year']."-".$t['mon']."-".$t['mday']." ".$t['hours'].":".$t['minutes'].":".$t['seconds'];
	}
	if(checkValue($pembimbing1,$pembimbing2,$penguji1,$penguji2,$penguji3)){
		
		$sql = "INSERT INTO `lulusan` (`ID`, `Nama`, `Pembimbing1`, `Pembimbing2`, `Penguji1`, `Penguji2`, `Penguji3`, `TanggalLulus`, `Judul`) 
		VALUES (NULL, '".$nama."', ".$pembimbing1.", ".$pembimbing2.", ".$penguji1.", ".$penguji2.", ".$penguji3.", '".$tanggal."', '".$judul."');";
		if ($conn->query($sql) === TRUE) {
			echo "
			<script>
				alert('Data berhasil ditambahkan');
				window.location.href='ViewL.php'; 
			</script>";
		} else {
			echo "
			<script>
				alert('Terjadi Kelasahan');
				window.location.href='insertL.php';
			</script>";
		}
	}
	else{
			echo "
			<script>
				alert('Terjadi Kelasahan');
				window.location.href='insertL.php';
			</script>";
	}
?>