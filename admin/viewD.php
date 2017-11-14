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
	include '../database.php';
	$sql = "SELECT * FROM dosen";
	$result = $conn->query($sql);
	$i=1;
	if ($result->num_rows > 0) 
	{
        echo"<div class=\"admin-main-content\">";
        echo"    <table style=\"width:100%\">";
		echo"	<tr>";
		echo"		<th>NO</th>";
		echo"		<th>Dosen</th>";
		echo"		<th>Action</th>";
		echo"	</tr>";
		while($row = $result->fetch_assoc()) 
		{
			echo"<tr>";
			echo"	<td style=\"text-align:center;\">".$i."</td>";
			echo"	<td>".$row["Nama"]."</td>";
			echo"	<td style=\"text-align:center;\">";
			echo"		<a href=\"..\\dosen.php?ID=".$row["ID"]."\"><img src=\"img/detail.png\" style=\"width:25px\"></a>";
			echo"		<a href=\"editD.php?ID=".$row["ID"]."\"><img src=\"img/edit.png\" style=\"width:25px\"></a>";
			echo"		<a ><img src=\"img/delete.png\" style=\"width:25px;cursor: pointer;\" onclick=\"javascript:deleteD(".$row["ID"].")\"></a>";
			echo"	</td>";
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
    <script type="text/javascript" src="js/DeleteD.js"></script>
</body>
</html>