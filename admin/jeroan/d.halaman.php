<h2 class="content-title">Halaman Edit</h2>
               <form action="jeroan/d.halamanE.php"  enctype="multipart/form-data" method="POST" onload="loaded();">
					<table  id="LastA">
						<input type="hidden" value="<?php echo $_GET["ID"] ; ?>" name="ID">
						<?php
	include '../../database.php';
	$id=0;
	$sql = "SELECT * FROM datahalaman";
	$result = $conn->query($sql);
	
	if($_GET["ID"]) 
	{
		$id=$_GET["ID"];
		
		$path = '..\\..\\f_img\\cont\\'.$id.'.jpg';
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

		?>
		
		<tr>
                            <td><p>gambar:</p></td>
							<td><label class ="button"><input id ="imgbutton" type="file" accept="image/*" style ="display: none;" onchange="loadFile(event)" />Tambah gambar</label></td>
						</tr>
                        <tr>
                            <td><input id="imgval" type="hidden" name="Foto[]" value="<?php echo $base64 ; ?>"></td>
                        <td> 
                            <img id="preview" src="<?php echo $base64 ; ?>" alt="Foto" width='200px' height='200px'/>
                        </td>
		<?php
		if ($result->num_rows > 0) 
		{
			$count =1;
			while($row = $result->fetch_assoc()) 
			{
				if($id==$row['Katagori']){
					?>
					<tr>
						<td><p>Judul Bagian : </p></td>
                        <td width="70%"><input class="data-input" type="text" name="Judul[]" placeholder="Judul Bagian" value="<?php echo $row['Judul'] ; ?>" onkeypress="newA(<?php echo $count ?>)"></td>
					</tr>
					<tr>
						<td><p>Isi Bagian : </p></td>
                        <td width="70%"></td>
					</tr>
					<tr styles="border-bottom: 1px solid #000;">
                            <td colspan="2"><textarea rows="3" name="Isi[]" placeholder="Isi bagian " onkeypress="newA(<?php echo $count ?>)" ><?php echo $row['Isi'] ; ?></textarea></td>
                    </tr>	
					<tr>
						<td><label><input name="header" value="<?php echo $count ?>" type="radio" required  <?php if($row['Header']==1) echo "checked=\"checked\""?>>Header Konten</label></td>
					</tr>
					
					<tr styles="height: 10px">
            			<td bgcolor="#FFFFFF" colspan="2">&nbsp;</td>
        			</tr>
					<?php
					$count +=1;
				}
			}
		}
	}
	?>
					
					<tr>
						<td><p>Judul Bagian : </p></td>
                        <td width="70%"><input class="data-input" type="text" name="Judul[]" placeholder="Judul Bagian" value="<?php echo $row['Judul'] ; ?>" onkeypress="newA(<?php echo $count ?>)"></td>
					</tr>
					<tr>
						<td><p>Isi Bagian : </p></td>
                        <td width="70%"></td>
					</tr>
					<tr styles="border-bottom: 1px solid #000;">
                            <td colspan="2"><textarea rows="3" name="Isi[]" placeholder="Isi bagian " onkeypress="newA(<?php echo $count ?>)" ><?php echo $row['Isi'] ; ?></textarea></td>
                    </tr>	
					<tr>
						<td><label><input name="header" value="<?php echo $count ?>" type="radio" required  <?php if($row['Header']==1) echo "checked=\"checked\""?>>Header Konten</label></td>
					</tr>
					
					<tr styles="height: 10px">
            			<td bgcolor="#FFFFFF" colspan="2">&nbsp;</td>
        			</tr>
	</table><table>
                        <tr>
                                <input type="hidden" value="<?php echo $count;?>" id="Anum">
                            <td><button  type="button" onclick="hideInsertDiv()">◀ kembali</button></td>
                            <td style="text-align: right"><input id="submit" class="button" type="submit" value="Masukkan"></td>
						</tr>
                    </table>
                </form>