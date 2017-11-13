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
    <div class="admin-content"> 
			<?php
				include '../database.php';
				$sql = "SELECT * FROM dosen";
				$result = $conn->query($sql);
				$id = 0;
				$nama ='';
				$email ='';
				$telp ='';
				$hp ='';
				$alamat ='';
				$pendidikan ='';
				$bidang ='';
				if($_GET["ID"]) 
				{
					$id=$_GET["ID"];
				}			
				if ((!$id==0)&&($result->num_rows > 0)) 
				{
					while($row = $result->fetch_assoc()) 
					{
						if($row["ID"]==$id)
						{
							$nama =$row["Nama"];
							$email =$row["Email"];
							$telp =$row["Telp"];
							$hp =$row["HP"];
							$alamat =$row["Alamat"];
							$pendidikan =$row["Pendidikan"];
							$bidang =$row["Bidang"];
						}
					}
					if($nama==='')notfound();
				}
				else
				{	
					notfound();
				}
				function notfound() {
					header("Location: ViewD.php"); /* Redirect browser */
					exit();
				}
			?>
            <h2 class="content-title">Update Artikel</h2>
            <form action="editDU.php" method="get">
				<?php echo "<input type=\"hidden\" name=\"ID\" value=".$id.">"; ?>
                <table>
                    <tr>
                        <td><p>Nama dosen : </p></td>
                        <td width="70%"><input class="data-input" type="text" name="Nama" placeholder="Nama Dosen" <?php echo "value=\"".$nama."\""; ?>></td>
                    </tr>
                    <tr>
                        <td><p>Email : </p></td>
                        <td width="70%"><input class="data-input" type="text" name="Email" placeholder="Email" <?php echo "value=\"".$email."\""; ?>></td>
                    </tr>
                    <tr>
						<td><p>Telp : </p></td>
                        <td width="70%"><input class="data-input" type="text" name="Telp" placeholder="Nomor Telepon" <?php echo "value=\"".$telp."\""; ?>></td>
                    </tr>
                    <tr>
						<td><p>HP : </p></td>
                        <td width="70%"><input class="data-input" type="text" name="HP" placeholder="Nomor Handphone" <?php echo "value=\"".$hp."\""; ?>></td>
                    </tr>
                    <tr>
                        <td><p>Alamat: </p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea id="textarea0" rows="3" name="Alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea></td>
                    </tr>
                    <tr>
                        <td><p>Pendidikan: </p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea id="textarea1" rows="3" name="Pendidikan" placeholder="Riwayat pendidikan"><?php echo $pendidikan; ?></textarea></td>
                    </tr>
                    <tr>
                        <td><p>Bidang: </p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea id="textarea2" rows="3" name="Bidang" placeholder="Bidang"><?php echo $bidang; ?></textarea></td>
                    </tr>
                        <td></td><td style="text-align: right"><input class="button" type="submit" value="Masukkan"></td>
                </table>
            </form>
    </div>

        <!-- insert -->
        <!-- <div class="admin-content"> 
            <h2 class="content-title">Input Dosen</h2>
            <form action="test.php" method="post">
                <table>
                    <tr>
                        <td><p>Judul Artikel : </p></td>
                        <td width="70%"><input class="data-input" type="text" name="judul_artikel" placeholder="judul artikel"></td>
                    </tr>
                    <tr>
                        <td><p>Tanggal : </p></td>
                        <td><input class="data-input" type="datetime-local" name="tanggal_artikel" placeholder="11/7/2017" ></td>
                    </tr>
                    <tr>
                        <td><p>Isi Artikel: </p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea rows="3" name="isi_artikel" placeholder="isi artikel"></textarea></td>
                    </tr>
                        <td></td><td style="text-align: right"><input class="button" type="submit" value="Masukkan"></td>
                </table>
            </form>
        </div> -->

        <!-- update -->
        <!--  -->

        <!-- delete -->
        <!-- <div class="admin-content"> 
            <h2 class="content-title">Hapus Artikel</h2>
            <form action="" method="post">
                <table style="text-align:center">
                    <tr>
                        <td><p>Artikel dengan judul : </p></td>
                    </tr>
                    <tr>
                        <td><p>- ... -</p></td>
                    </tr>
                    <tr>
                        <td><p>Akan dihapus dan tidak bisa dikembalikan, apakah anda yakin? </p></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" style="display:inline-block; margin-top: 20px;"><p style="display:inline">Saya yakin dengan apa yang saya lakukan</p></td>
                    </tr>
                        <td><input class="button" type="submit" value="Hapus"></td>
                </table>
            </form>
        </div> -->
    </div>
    <script type="text/javascript" src="js/textarea_dosen.js"></script>
</body>
</html>