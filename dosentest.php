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
		while($row = $result->fetch_assoc()) 
		{
			echo "<tr>";
			echo "<td>".$row["ID"]."</td>";
			echo "<td>".$row["Nama"]."</td>";
			echo "<td>".$row["Email"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	} 
	else 
	{
		echo "0 results";
	}
	if ($result->num_rows > 0) 
	{
		echo "<table>";
		echo "<th>ID</th>";
		echo "<th>Nama</th>";
		echo "<th>Email</th>";
		while($row = $result->fetch_assoc()) 
		{
			echo "<tr>";
			echo "<td>".$row["ID"]."</td>";
			echo "<td>".$row["Nama"]."</td>";
			echo "<td>".$row["Email"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	} 
	else 
	{
		echo "0 results";
	}
?>