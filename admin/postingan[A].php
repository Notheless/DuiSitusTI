<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Fasilitas dan Sistem Informasi</title>
    <?php include 'admin-header.html';?>
	<script>
		function showUser(str) {

}
</script>
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
				?>
						<tr>
						<td> <?php echo	$row["Judul"] ?></td>
						<td> <?php echo	$row["Tanggal"] ?></td>
						<td>
							<button id="update-button" type="button" onclick="showUpdateDiv(<?php echo	$row["ID"] ?>)">edit</button>
							<button id="delete-button" type="button" onclick="showDeleteDiv(<?php echo	$row["ID"] ?>)">hapus</button></td>
						</tr>
						
				<?php
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
            <div class="admin-content" id="update"> 
                
            </div>
        </div>

        <!-- delete -->
        <div id="divDelete" class="background-content">
            <div class="background" onclick="hideDeleteDiv()"></div>
            <div id="delete" class="admin-content"> 
                
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/show-div[A].js"></script>
    <script type="text/javascript" src="js/textarea.js"></script>
</body>
</html>