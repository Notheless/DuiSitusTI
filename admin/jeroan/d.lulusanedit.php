<?php
	include '../../database.php';
	$id=0;
	$Nama = "";
	$Tanggal = "";
	$Judul = "";
	$Penguji1=0;
	$Penguji2=0;
	$Penguji3=0;
	$Pembimbing1=0;
	$Pembimbing2=0;

	$sql = "SELECT * FROM lulusan";
	$result = $conn->query($sql);
	if($_GET["ID"]) 
	{
		$id=$_GET["ID"];
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				if($id==$row['ID']){	
					$Nama = $row['Nama'];
					$Tanggal = $row['TanggalLulus'];
					$Judul = $row['Judul'];
					$Penguji1= $row['Penguji1'];
					$Penguji2= $row['Penguji2'];
					$Penguji3= $row['Penguji3'];
					$Pembimbing1= $row['Pembimbing1'];
					$Pembimbing2= $row['Pembimbing2'];
				}
			}
		}
	}
	$sql = "SELECT * FROM dosen";
	$result = $conn->query($sql);
?>
<h2 class="content-title">Lulusan Edit</h2>
               <form action="jeroan/d.editLE.php"  enctype="multipart/form-data" method="POST" onload="loaded();">
					<table id="myTable">
						<input type="hidden" value="<?php echo $id ; ?>" name="ID">
                        
                        <tr>
						<td><p>Nama Dosen : </p></td>
						<td width="70%"><input class="data-input" type="text" name="Nama" placeholder="Nama Dosen" value="<?php echo $Nama;?>" required></td>
					</tr>
					<tr>
						<td><p>Judul Skripsi : </p></td>
						<td><input class="data-input" type="text" name="Judul" placeholder="Judul Skripsi" value="<?php echo $Judul;?>"></td>
					</tr>
					<tr>
						<td><p>Tanggal : </p></td>
						<td><input class="data-input" type="date" name="Tanggal" placeholder="Tanggal" value="<?php echo $Tanggal;?>" ></td>
					</tr>
					<tr>
						<td><p>Pembimbing 1 : </p></td>
						<td>
							<select class="data-input" type="text" name="Pembimbing1">
								<option value=0>Pilih dosen</option>
							<?php
							mysqli_data_seek($result,0);
							while($row = $result->fetch_assoc()){
								if($row['ID']==$Pembimbing1)echo "<option value=".$row["ID"]." selected>".$row["Nama"]."</option>";
								else echo "<option value=".$row["ID"].">".$row["Nama"]."</option>";
							} 	
							?>
						</td>
					</tr>
					
					<tr>
					<td><p>Pembimbing 2 : </p></td>
					<td>
						<select class="data-input" type="text" name="Pembimbing2">
							<option value=0>Pilih dosen</option>
						<?php
						mysqli_data_seek($result,0);
						while($row = $result->fetch_assoc()){
							if($row['ID']==$Pembimbing2)echo "<option value=".$row["ID"]." selected>".$row["Nama"]."</option>";
							else echo "<option value=".$row["ID"].">".$row["Nama"]."</option>";
						} 	
						?>
					</td>
					</tr>

					<tr>
					<td><p>Penguji 1 : </p></td>
					<td>
						<select class="data-input" type="text" name="Penguji1">
							<option value=0>Pilih dosen</option>
						<?php
						mysqli_data_seek($result,0);
						while($row = $result->fetch_assoc()){
							if($row['ID']==$Penguji1)echo "<option value=".$row["ID"]." selected>".$row["Nama"]."</option>";
							else echo "<option value=".$row["ID"].">".$row["Nama"]."</option>";
						} 	
						?>
					</td>
					</tr>
					

					<tr>
					<td><p>Penguji 2 : </p></td>
					<td>
						<select class="data-input" type="text" name="Penguji2">
							<option value=0>Pilih dosen</option>
						<?php
						mysqli_data_seek($result,0);
						while($row = $result->fetch_assoc()){
							if($row['ID']==$Penguji2)echo "<option value=".$row["ID"]." selected>".$row["Nama"]."</option>";
							else echo "<option value=".$row["ID"].">".$row["Nama"]."</option>";
						} 	
						?>
					</td>
					</tr>
					

					<tr>
					<td><p>Penguji 3 : </p></td>
					<td>
						<select class="data-input" type="text" name="Penguji3">
							<option value=0>Pilih dosen</option>
						<?php
						mysqli_data_seek($result,0);
						while($row = $result->fetch_assoc()){
							if($row['ID']==$Penguji3)echo "<option value=".$row["ID"]." selected>".$row["Nama"]."</option>";
							else echo "<option value=".$row["ID"].">".$row["Nama"]."</option>";
						} 	
						?>
					</td>
					</tr>

					<tr>
						<td><button  type="button" onclick="hideInsertDiv()">◀ kembali</button></td>
						<td style="text-align: right"><input id="submit" class="button" type="submit" value="Masukkan"></td>
					</tr>
                    </table>
                </form>