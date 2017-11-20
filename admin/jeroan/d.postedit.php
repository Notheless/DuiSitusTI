 <?php
	include '../../database.php';
	$id=0;
	$judul ='';
	$tanggal ='';
	$isi ='';
	if($_GET["ID"]) 
	{	
		$id=$_GET["ID"];
		$sql = "SELECT * FROM posting";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				if($id==$row['ID']){
					$judul =$row["Judul"];
					$tanggal =$row["Tanggal"];
					$isi =$row["Isi"];
				}
			}
		}
		
	}
?>
<h2 class="content-title">Update Artikel</h2>
                <form action="jeroan/d.test.php" enctype="multipart/form-data" method="POST">
				<input type="hidden" name="ID"  <?php echo "value=\"".$id."\""; ?>>
                    <table class="table-index">
                        <tr>
                            <td><p>Judul Artikel : </p></td>
                            <td width="70%"><input class="data-input" type="text" name="judul_artikel" placeholder="judul artikel" <?php echo "value=\"".$judul."\""; ?>></td>
                        </tr>
                        <tr>
                            <td><p>Tanggal : </p></td>
                            <td><input class="data-input" type="datetime-local" name="tanggal_artikel" placeholder="11/7/2017"  <?php echo "value=\"".$tanggal."\""; ?>></td>
                        </tr>
                        <tr>
                            <td><p>Isi Artikel: </p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea rows="3" name="isi_artikel" placeholder="isi artikel"><?php echo $isi; ?></textarea></td>
                        </tr>
                        <tr>
							<td><p>Gambar: </p></td>
							<td><label class ="button"><input type="file" name="gambar[]" multiple="multiple" accept="image/*" style ="display: none;"/>Tambah gambar</label></td>
						</tr>
                        <tr>
							<td colspan="2">
								<?php
								if($_GET["ID"]) 
								{	
									$id=$_GET["ID"];
									$sql = "SELECT * FROM `gambar` WHERE `gambar`.`TagPost` = ".$id.";";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) 
									{
										while($row = $result->fetch_assoc()) 
										{
								?>
											<img src="../imgpost/<?php echo $row['ID'];?>-thumbnail.jpg">	
								<?php
										}
									}
								}
								?>
							</td>
						</tr>
                        <tr>
                            <td><button type="button" onclick="hideInsertDiv()">kembali</button></td>
                            <td style="text-align: right"><input class="button" type="submit" value="Masukkan"></td>
                        </tr>
                    </table>
                </form>