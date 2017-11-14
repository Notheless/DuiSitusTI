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
            <table>
                <col><col><col>
                <tr>
                    <td>Judul</td>
                    <td>Tanggal</td>
                    <td>Pengaturan</td>
                </tr>
				<?php
					include '../database.php';
					$sql = "SELECT `ID`, `Judul`, `Tanggal`, `Author` FROM `posting`";
					$result = $conn->query($sql);
					$i=1;
					while($row = $result->fetch_assoc()) 
					{
						echo"<tr>";
						echo"	<td>".$row["Judul"]."</td>";
						echo"	<td>".$row["Tanggal"]."</td>";
						echo"	<td><button id=\"update-button\" type=\"button\" onclick=\"showUpdateDiv()\">edit</button><button id=\"delete-button\" type=\"button\" onclick=\"showDeleteDiv()\">hapus</button></td>";
						echo"</tr>";
					}
				?>
            </table>
            <button id="insert-button" style="left:0;" type="button" onclick="showInsertDiv()">tambahkan</button>
        </div>

        <!-- insert -->
        <div id="divInsert" class="background-content">
            <div class="background" onclick="hideInsertDiv()"></div>
            <div class="admin-content"> 
                <h2 class="content-title">Input Dosen</h2>
                <form action="test.php" method="get">
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
                            <td><button type="button" onclick="hideInsertDiv()">kembali</button></td>
                            <td style="text-align: right"><input class="button" type="submit" value="Masukkan"></td>
                    </table>
                </form>
            </div>
        </div>

        <!-- update -->
        <div id="divUpdate" class="background-content">
            <div class="background" onclick="hideUpdateDiv()"></div>
            <div class="admin-content"> 
                <h2 class="content-title">Update Artikel</h2>
                <form action="test.php" method="get">
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
                            <td><button type="button" onclick="hideInsertDiv()">kembali</button></td>
                            <td style="text-align: right"><input class="button" type="submit" value="Masukkan"></td>
                    </table>
                </form>
            </div>
        </div>

        <!-- delete -->
        <div id="divDelete" class="background-content">
            <div class="background" onclick="hideDeleteDiv()"></div>
            <div id="divDelete" class="admin-content"> 
                <h2 class="content-title">Hapus Artikel</h2>
                <form action="" method="get">
                    <table style="text-align:center">
                        <tr>
                            <td colspan="2"><p>Artikel dengan judul : </p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><p>- ... -</p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><p>Akan dihapus dan tidak bisa dikembalikan, apakah anda yakin? </p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="checkbox" style="display:inline-block; margin-top: 20px;"><p style="display:inline">Saya yakin dengan apa yang saya lakukan</p></td>
                        </tr>
                            <td><button type="button" onclick="hideInsertDiv()">kembali</button></td>
                            <td style="text-align: right"><input class="button" type="submit" value="Hapus"></td>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/show-div.js"></script>
    <script type="text/javascript" src="js/textarea.js"></script>
</body>
</html>