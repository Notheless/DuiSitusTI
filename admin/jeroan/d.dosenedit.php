<?php
	include '../../database.php';
	$id=0;
	$Nama = "";
	$Email = "";
	$Telp = "";
	$HP = "";
	$Alamat = "";
	$Pendidikan = "";
	$Bidang = "";
	$sql = "SELECT * FROM dosen";
	$result = $conn->query($sql);
	if($_GET["ID"]) 
	{
		$id=$_GET["ID"];
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				if($id==$row['ID']){
					$Nama = $row["Nama"];
					$Email = $row["Email"];
					$Telp = $row["Telp"];
					$HP = $row["HP"];
					$Alamat = $row["Alamat"];
					$Pendidikan = $row["Pendidikan"];
					$Bidang = $row["Bidang"];
				}
			}
			$sql = "SELECT * FROM `detaildosen` WHERE `IDDosen` = ".$id." AND `IDCatagory`=1";
			$Pengajaran = $conn->query($sql);

			
			$sql = "SELECT * FROM `detaildosen` WHERE `IDDosen` = ".$id." AND `IDCatagory`=2";
			$Penelitian = $conn->query($sql);

			
			$sql = "SELECT * FROM `detaildosen` WHERE `IDDosen` = ".$id." AND `IDCatagory`=3";
			$Pengabdian = $conn->query($sql);

			
			$sql = "SELECT * FROM `detaildosen` WHERE `IDDosen` = ".$id." AND `IDCatagory`=4";
			$Penunjang = $conn->query($sql);
		}
		$path = '..\\..\\img\\'.$id.'.jpg';
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
	}
?>
<h2 class="content-title">Dosen Edit</h2>
               <form action="jeroan/d.editDE.php"  enctype="multipart/form-data" method="POST" onload="loaded();">
					<table id="myTable">
						<input type="hidden" value="<?php echo $id ; ?>" name="ID">
                        <tr>
                            <td><p>Nama Dosen : </p></td>
                            <td width="70%"><input class="data-input" type="text" name="Nama" placeholder="Nama Dosen" value="<?php echo $Nama ; ?>" required></td>
                        </tr>
                        <tr>
                            <td><p>Email : </p></td>
                            <td><input class="data-input" type="Email" name="Email" placeholder="Email" value="<?php echo $Email ; ?>" ></td>
                        </tr>
                        <tr>
                            <td><p>Telp : </p></td>
                            <td><input class="data-input" type="text" name="Telp" placeholder="Telp" value="<?php echo $Telp ; ?>"></td>
                        </tr>
                        <tr>
                            <td><p>HP : </p></td>
                            <td><input class="data-input" type="text" name="HP" placeholder="HP" value="<?php echo $HP ; ?>"></td>
                        </tr>
                        
                        <tr>
                            <td><p>Alamat: </p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea rows="3" name="Alamat" placeholder="Alamat"><?php echo $Alamat ; ?></textarea></td>
                        </tr>
                        
                        <tr>
                            <td><p>Pendidikan: </p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea rows="3" name="Pendidikan" placeholder="Pendidikan"><?php echo $Pendidikan ; ?></textarea></td>
                        </tr>
                        <tr>
                            <td><p>Bidang Riset: </p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea rows="3" name="Bidang" placeholder="Bidang Riset"><?php echo $Bidang ; ?></textarea></td>
                        </tr>
                        <tr>
                            <td><p>Unggah gambar:</p></td>
							<td><label class ="button"><input id ="imgbutton" type="file" accept="image/*" style ="display: none;" onchange="loadFile(event)" />Tambah gambar</label></td>
						</tr>
                        <tr>
                            <td><input id="imgval" type="hidden" name="Foto[]" value="<?php echo $base64 ; ?>"></td>
                        <td> 
                            <img id="preview" src="<?php echo $base64 ; ?>" alt="Foto" width='200px' height='200px'/>
                        </td>
                        </tr>
                        
                        <tr>
                            <td><p>Pengajaran : </p></td>
                            <td>
							<?php 
									$count=0;
								if ($Pengajaran->num_rows > 0) 
								{
									$count=0;
									while($row = $Pengajaran->fetch_assoc()) 
									{
							?>
										<label><input class="data-input" type="text" name="Pengajaran[]" placeholder="Pengajaran" onkeypress="newA(<?php echo $count ?>)" id="Pengajaran<?php echo $count;?>" value="<?php echo $row["Isi"] ?>"> </label>
							<?php
									$count+=1;
									}
								}
							?>
								
                                <label><input class="data-input" type="text" name="Pengajaran[]" placeholder="Pengajaran" onkeypress="newA(<?php echo $count;?>)" id="Pengajaran<?php echo $count;?>"> </label>
                                <label id="LastA"></label>
                                <input type="hidden" value="<?php echo $count;?>" id="Anum">
                            </td>
                        </tr>
                        
                        <tr>
                            <td><p>Penelitian : </p></td>
							<td>
							<?php 
									$count=0;
								if ($Penelitian->num_rows > 0) 
								{
									$count=0;
									while($row = $Penelitian->fetch_assoc()) 
									{
							?>
										<label><input class="data-input" type="text" name="Penelitian[]" placeholder="Penelitian" onkeypress="newB(<?php echo $count ?>)" id="Penelitian<?php echo $count;?>" value="<?php echo $row["Isi"] ?>"> </label>
							<?php
									$count+=1;
									}
								}
							?>
								
                                <label><input class="data-input" type="text" name="Penelitian[]" placeholder="Penelitian" onkeypress="newB(<?php echo $count;?>)" id="Penelitian<?php echo $count;?>"> </label>
                                <label id="LastB"></label>
                                <input type="hidden" value="<?php echo $count;?>" id="Bnum">
                            </td>
                        </tr>
                        
                        <tr>
                            <td><p>Penunjang : </p></td>
							<td>
							<?php 
									$count=0;
								if ($Penunjang->num_rows > 0) 
								{
									$count=0;
									while($row = $Penunjang->fetch_assoc()) 
									{
							?>
										<label><input class="data-input" type="text" name="Penunjang[]" placeholder="Penunjang" onkeypress="newC(<?php echo $count ?>)" id="Penunjang<?php echo $count;?>" value="<?php echo $row["Isi"] ?>"> </label>
							<?php
									$count+=1;
									}
								}
							?>
								
                                <label><input class="data-input" type="text" name="Penunjang[]" placeholder="Penunjang" onkeypress="newC(<?php echo $count;?>)" id="Penunjang<?php echo $count;?>"> </label>
                                <label id="LastC"></label>
                                <input type="hidden" value="<?php echo $count;?>" id="Cnum">
                            </td>
                        </tr>
                        
                        <tr>
                            <td><p>Pengabdian : </p></td>
							<td>
							<?php 
									$count=0;
								if ($Pengabdian->num_rows > 0) 
								{
									$count=0;
									while($row = $Pengabdian->fetch_assoc()) 
									{
							?>
										<label><input class="data-input" type="text" name="Pengabdian[]" placeholder="Pengabdian" onkeypress="newD(<?php echo $count ?>)" id="Pengabdian<?php echo $count;?>" value="<?php echo $row["Isi"] ?>"> </label>
							<?php
									$count+=1;
									}
								}
							?>
								
                                <label><input class="data-input" type="text" name="Pengabdian[]" placeholder="Pengabdian" onkeypress="newD(<?php echo $count;?>)" id="Pengabdian<?php echo $count;?>"> </label>
                                <label id="LastD"></label>
                                <input type="hidden" value="<?php echo $count;?>" id="Dnum">
                            </td>
                        </tr>

                        <tr>
                            <td><button  type="button" onclick="hideInsertDiv()">◀ kembali</button></td>
                            <td style="text-align: right"><input id="submit" class="button" type="submit" value="Masukkan"></td>
						</tr>
                    </table>
                </form>