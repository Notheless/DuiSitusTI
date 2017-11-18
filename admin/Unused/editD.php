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
            <h2 class="content-title">Update Data Dosen</h2>
            <form action="editDE.php" method="get">
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
    </div>
    <script type="text/javascript" src="js/textarea_dosen.js"></script>
    <script type="text/javascript" src="js/viedDosen.js"></script>
</body>
</html>