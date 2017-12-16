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

	include '../../database.php';
	$id=$_POST["ID"];
	$nama =$_POST["Nama"];
	$judul =$_POST["Judul"];
	$tanggal =$_POST["Tanggal"];
	$pembimbing1 =$_POST["Pembimbing1"];
	$pembimbing2 =$_POST["Pembimbing2"];
	$penguji1 =$_POST["Penguji1"];
	$penguji2 =$_POST["Penguji2"];
	$penguji3 =$_POST["Penguji3"];
	
	if(!$tanggal){
		$t=getdate();
		$tanggal = $t['year']."-".$t['mon']."-".$t['mday'];
	}
	if(checkValue($pembimbing1,$pembimbing2,$penguji1,$penguji2,$penguji3)){
		
		$sql = "UPDATE `lulusan` SET `Nama`='".$nama."',`Pembimbing1`='".$pembimbing1."',`Pembimbing2`='".$pembimbing2."',`Penguji1`='".$penguji1."',`Penguji2`='".$penguji2."',`Penguji3`='".$penguji3."',`TanggalLulus`='".$tanggal."',`Judul`='".$judul."' WHERE ID=".$id.";";
		if ($conn->query($sql) === TRUE) {
			echo "
			<script>
				alert('Data berhasil diperbaharui');
			</script>";
		} else {
			echo "
			<script>
				alert('Terjadi Kelasahan');
			</script>";
		}
	}
			echo "
			<script>
				window.location.href='../lulusan.php';
			</script>";
?>