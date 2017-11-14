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
            <h2 class="content-title">Tambah Data Dosen</h2>
            <form action="insertDE.php" method="get">
                <table>
                    <tr>
                        <td><p>Nama dosen : </p></td>
                        <td width="70%"><input class="data-input" type="text" name="Nama" placeholder="Nama Dosen"? </td>
                    </tr>
                    <tr>
                        <td><p>Email : </p></td>
                        <td width="70%"><input class="data-input" type="text" name="Email" placeholder="Email" ></td>
                    </tr>
                    <tr>
						<td><p>Telp : </p></td>
                        <td width="70%"><input class="data-input" type="text" name="Telp" placeholder="Nomor Telepon"></td>
                    </tr>
                    <tr>
						<td><p>HP : </p></td>
                        <td width="70%"><input class="data-input" type="text" name="HP" placeholder="Nomor Handphone"></td>
                    </tr>
                    <tr>
                        <td><p>Alamat: </p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea id="textarea0" rows="3" name="Alamat" placeholder="Alamat"></textarea></td>
                    </tr>
                    <tr>
                        <td><p>Pendidikan: </p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea id="textarea1" rows="3" name="Pendidikan" placeholder="Riwayat pendidikan"></textarea></td>
                    </tr>
                    <tr>
                        <td><p>Bidang: </p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea id="textarea2" rows="3" name="Bidang" placeholder="Bidang"></textarea></td>
                    </tr>
                        <td></td><td style="text-align: right"><input class="button" type="submit" value="Masukkan"></td>
                </table>
            </form>
    </div>
    </div>
    <script type="text/javascript" src="js/textarea_dosen.js"></script>
</body>
</html>