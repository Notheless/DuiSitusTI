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
    <?php
	include '../database.php';
	$sql = "SELECT * FROM dosen";
	$result = $conn->query($sql);
	$i=1;
	if ($result->num_rows > 0) 
	{
        echo"<div class=\"admin-main-content\">";
        echo"    <table style=\"width:100%\">";
		echo"	<tr>";
		echo"		<th>NO</th>";
		echo"		<th>Dosen</th>";
		echo"		<th>Action</th>";
		echo"	</tr>";
		while($row = $result->fetch_assoc()) 
		{
			echo"<tr>";
			echo"	<td style=\"text-align:center;\">".$i."</td>";
			echo"	<td>".$row["Nama"]."</td>";
			echo"	<td style=\"text-align:center;\">";
			echo"		<a href=\"detailD.php?ID=".$row["ID"]."\"><img src=\"img/detail.png\" style=\"width:25px\"></a>";
			echo"		<a href=\"editD.php?ID=".$row["ID"]."\"><img src=\"img/edit.png\" style=\"width:25px\"></a>";
			echo"		<a href=\"deleteD.php?ID=".$row["ID"]."\"><img src=\"img/delete.png\" style=\"width:25px\"></a>";
			echo"	</td>";
			echo"</tr>";
			$i+=1;
		}
		echo"	</table>";
	}
	?>
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