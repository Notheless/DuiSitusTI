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
        
        <div class="admin-main-content">
            
        </div>
        <div class="admin-content"> 
            <h2 class="content-title">Artikel baru</h2>
            <form action="insertPE.php" method="get">
			<input type="hidden" name="auth" value="EX">
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
                </table>
				<!-- Gotta tag em all -->
				<table>
					<?php
					include '../database.php';
					$sql = "SELECT * FROM tags";
					$result = $conn->query($sql);
					if ($result->num_rows > 0)
					{
						for ($i=0; $i<9; $i+=1) 
						{
							$x = $i;
							$x %=3;
							if($x===0)
							{
								echo "<tr>";
							}
							echo "
							<td>
								<select class=\"tagg\" name=\"tag".$i."\">";
								echo "<option value=\"\">----</option>";
							while($row = $result->fetch_assoc()){
								echo "<option value=".$row["ID"].">".$row["Text"]."</option>";
							}
							mysqli_data_seek($result,0); 	
							echo"</select>
							</td>";
							
							if($x===2)
							{
								echo "</tr>";
							}
						}
					}
					?>
                </table>
				<table>
                    <tr>
                        <td></td><td style="text-align: right"><input class="button" type="submit" value="Masukkan"></td>
					</tr>
                </table>
            </form>
        </div>

        <!-- update -->
        <!-- <div class="admin-content"> 
            <h2 class="content-title">Update Artikel</h2>
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
    <script type="text/javascript" src="js/textarea.js"></script>
</body>
</html>