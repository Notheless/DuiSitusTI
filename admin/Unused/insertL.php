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
            <h2 class="content-title">Data lulusan baru</h2>
            <form action="insertLE.php" method="get">
			<input type="hidden" name="auth" value="EX">					
			<?php
				include '../database.php';
				$sql = "SELECT * FROM dosen";
				$result = $conn->query($sql);
			?>
                <table>
                    <tr>
                        <td><p>Nama : </p></td>
                        <td width="70%"><input class="data-input" type="text" name="nama" placeholder="Nama peserta didik"></td>
                    </tr>
                    <tr>
                        <td><p>Judul Skripsi : </p></td>
                        <td width="70%"><input class="data-input" type="text" name="judul" placeholder="judul artikel"></td>
                    </tr>
                    <tr>
                        <td><p>Tanggal : </p></td>
                        <td><input class="data-input" type="datetime-local" name="tanggal" placeholder="11/7/2017" ></td>
                    </tr>
                    <tr>
                        <td><p>Pembimbing 1 : </p></td>
						<td>
							<select class="data-input" type="text" name="pembimbing1">
								<option value=0>Pilih dosen</option>
							<?php
							mysqli_data_seek($result,0);
							while($row = $result->fetch_assoc()){
								echo "<option value=".$row["ID"].">".$row["Nama"]."</option>";
							} 	
							?>
						</td>
                    </tr>
					
                    <tr>
                        <td><p>Pembimbing 2 : </p></td>
						<td>
							<select class="data-input" type="text" name="pembimbing2">
								<option value=0>Pilih dosen</option>
							<?php
							mysqli_data_seek($result,0);
							while($row = $result->fetch_assoc()){
								echo "<option value=".$row["ID"].">".$row["Nama"]."</option>";
							} 	
							?>
						</td>
                    </tr>
					
                    <tr>
                        <td><p>Penguji 1 : </p></td>
						<td>
							<select class="data-input" type="text" name="penguji1">
								<option value=0>Pilih dosen</option>
							<?php
							mysqli_data_seek($result,0);
							while($row = $result->fetch_assoc()){
								echo "<option value=".$row["ID"].">".$row["Nama"]."</option>";
							} 	
							?>
						</td>
                    </tr>
					
                    <tr>
                        <td><p>Penguji 2 : </p></td>
                        <td>
							<select class="data-input" type="text" name="penguji2">
								<option value=0>Pilih dosen</option>
							<?php
							mysqli_data_seek($result,0);
							while($row = $result->fetch_assoc()){
								echo "<option value=".$row["ID"].">".$row["Nama"]."</option>";
							} 	
							?>
						</td>
                    </tr>
					
                    <tr>
                        <td><p>Penguji 3 : </p></td>
                        <td>
							<select class="data-input" type="text" name="penguji3">
								<option value=0>Pilih dosen</option>
							<?php
							mysqli_data_seek($result,0);
							while($row = $result->fetch_assoc()){
								echo "<option value=".$row["ID"].">".$row["Nama"]."</option>";
							} 	
							?>
						</td>
                    </tr>
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