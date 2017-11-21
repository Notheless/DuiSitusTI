 <?php
	include '../../database.php';$id=0;
	$sql = "SELECT * FROM posting";
	$result = $conn->query($sql);
	$judul ='';
	$tanggal ='';
	$isi ='';
	$i=1;
	if($_GET["ID"]) 
	{		
echo "
		<script>
			alert('Data berhasil dihapus');
		</script>";
		$id=$_GET["ID"];
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
                <form action="jeroan/d.test.php" method="get">
				<input type="hidden" name="ID"  <?php echo "value=\"".$id."\""; ?>>
                    <table>
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
                            <td><button type="button" onclick="hideInsertDiv()">kembali</button></td>
                            <td style="text-align: right"><input class="button" type="submit" value="Masukkan"></td>
                    </table>
                </form>