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
					$tag0 =$row["tag0"];
					$tag1 =$row["tag1"];
					$tag2 =$row["tag2"];
					$tag3 =$row["tag3"];
					$tag4 =$row["tag4"];
					$tag5 =$row["tag5"];
					$tag6 =$row["tag6"];
					$tag7 =$row["tag7"];
					$tag8 =$row["tag8"];
				}
			}
		}
		
	}
?>
<h2 class="content-title">Update Artikel</h2>
                <form action="jeroan/d.editPE.php" enctype="multipart/form-data" method="POST">
				<input type="hidden" name="ID"  <?php echo "value=\"".$id."\""; ?>>
                <input type="hidden" value="NULL" name="auth">
				<input type="hidden" value="<?php echo $tag0 ?>" name="tag0">
				<input type="hidden" value="<?php echo $tag1 ?>" name="tag1">
				<input type="hidden" value="<?php echo $tag2 ?>" name="tag2">
				<input type="hidden" value="<?php echo $tag3 ?>" name="tag3">
				<input type="hidden" value="<?php echo $tag4 ?>" name="tag4">
				<input type="hidden" value="<?php echo $tag5 ?>" name="tag5">
				<input type="hidden" value="<?php echo $tag6 ?>" name="tag6">
				<input type="hidden" value="<?php echo $tag7 ?>" name="tag7">
				<input type="hidden" value="<?php echo $tag8 ?>" name="tag8">
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
											<label >
												<img id="Gambar<?php echo $row['ID'];?>" src="../imgpost/<?php echo $row['ID'];?>-thumbnail.jpg" onclick="enable(<?php echo $row['ID'];?>)">
												<input id="GC<?php echo $row['ID'];?>" type='checkbox' name='gambardel[]' value='<?php echo $row['ID'];?>' style="display:none">
											</label>
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