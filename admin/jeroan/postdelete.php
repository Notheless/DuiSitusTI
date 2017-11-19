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
<h2 class="content-title">Hapus Artikel</h2>
                <form action="jeroan/deletePE.php" method="POST">
                    <input type="hidden" value="<?php echo $_GET["ID"] ?>" name="ID">
                    <table style="text-align:center">
                        <tr>
                            <td colspan="2"><p>Artikel dengan judul : </p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><p><?php echo $judul; ?></p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><p>Akan dihapus dan tidak bisa dikembalikan, apakah anda yakin? </p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="checkbox" name="checkbox" style="display:inline-block; margin-top: 20px;"><p style="display:inline">Saya yakin dengan apa yang saya lakukan</p></td>
                        </tr>
                            <td><button type="button" onclick="hideInsertDiv()">kembali</button></td>
                            <td style="text-align: right"><input class="button" type="submit" value="Hapus" onclick="if(!this.form.checkbox.checked){alert('Silahkan centang Saya yakin dengan apa yang saya lakukan');return false}"></td>
                    </table>
                </form>