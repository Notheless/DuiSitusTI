<?php
	include 'database.php';
	$sql = "SELECT * FROM dosen";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		echo "<table>";
		echo "<th>ID</th>";
		echo "<th>Nama</th>";
		echo "<th>Email</th>";
		echo "<th>Telp</th>";
		echo "<th>HP</th>";
		echo "<th>Alamat</th>";
		echo "<th>Pendidikan</th>";
		echo "<th>Bidang</th>";
		while($row = $result->fetch_assoc()) 
		{
			echo "<tr>";
			echo "<td>".$row["ID"]."</td>";
			echo "<td>".$row["Nama"]."</td>";
			echo "<td>".$row["Email"]."</td>";
			echo "<td>".$row["Telp"]."</td>";
			echo "<td>".$row["HP"]."</td>";
			echo "<td>".$row["Alamat"]."</td>";
			echo "<td>".$row["Pendidikan"]."</td>";
			echo "<td>".$row["Bidang"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	} 
	else 
	{
		echo "0 results";
	}
?>