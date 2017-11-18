<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	
    <meta charset="utf-8" />
    <title>Fasilitas dan Sistem Informasi</title>
    <?php include 'admin-header.html';?>
</head>
<body>
    <?php include 'admin-navbar.html';?>
    <div class="admin-content-pos">
    <?php
	function Namadosen($input,$resultx) {
		mysqli_data_seek($resultx,0);
		while($rowx = $resultx->fetch_assoc()){
			if($rowx["ID"]===$input) return $rowx["Nama"];
		}
		return "";
	}

	include '../database.php';
	$sql = "SELECT * FROM lulusan";
	$result = $conn->query($sql);
	$sqlx = "SELECT * FROM dosen";
	$resultx = $conn->query($sqlx);
	$i=1;
	if ($result->num_rows > 0) 
	{
        echo"<div class=\"admin-main-content\">";
        echo"    <table style=\"width:100%\">";
		echo"	<tr>";
		echo"		<th>NO</th>";
		echo"		<th>Nama</th>";
		echo"		<th>Judul</th>";
		echo"		<th>Pembimbing </th>";
		echo"		<th>Penguji </th>";
		echo"		<th>Tanggal</th>";
		echo"		<th>Action</th>";
		echo"	</tr>";
		while($row = $result->fetch_assoc()) 
		{
			echo"<tr>";
			echo"	<td rowspan=\"3\" style=\"text-align:center;\">".$i."</td>";
			echo"	<td rowspan=\"3\">".$row["Nama"]."</td>";
			echo"	<td rowspan=\"3\">".$row["Judul"]."</td>";
			echo"	<td >".Namadosen($row["Pembimbing1"],$resultx)."</td>";
			echo"	<td >".Namadosen($row["Penguji1"],$resultx)."</td>";
			echo"	<td rowspan=\"3\">".$row["TanggalLulus"]."</td>";
			echo"	<td rowspan=\"3\" style=\"text-align:center;\">";
		//	echo"		<a href=\"..\\dosen.php?ID=".$row["ID"]."\"><img src=\"img/detail.png\" style=\"width:25px\"></a>";
			echo"		<a href=\"editL.php?ID=".$row["ID"]."\"><img src=\"img/edit.png\" style=\"width:25px\"></a>";
			echo"		<a ><img src=\"img/delete.png\" style=\"width:25px;cursor: pointer;\" onclick=\"javascript:deleteL(".$row["ID"].")\"></a>";
			echo"	</td>";
			echo"</tr>";
			echo"<tr>";
			echo"	<td >".Namadosen($row["Pembimbing2"],$resultx)."</td>";
			echo"	<td >".Namadosen($row["Penguji2"],$resultx)."</td>";
			echo"</tr>";
			echo"<tr>";
			echo"	<td></td>";
			echo"	<td >".Namadosen($row["Penguji3"],$resultx)."</td>";
			echo"</tr>";
			$i+=1;
		}
		echo"	</table>";
	}
	else{
		echo "<h1>No data found</h1>";
	}
	?>
        </div>
    </div>
    <script type="text/javascript" src="js/textarea.js"></script>
    <script type="text/javascript" src="js/DeleteL.js"></script>
</body>
</html>