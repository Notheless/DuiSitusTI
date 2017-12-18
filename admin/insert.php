<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Admin</title>
    <?php include 'admin-header.html';?>
</head>
<body>
    <?php include 'admin-navbar.php';?>
    <div class="admin-content-pos">
        
        <div class="admin-main-content">
            <table>
                <col><col><col>
                <tr>
                    <td>Judul</td>
                    <td>Tanggal</td>
                    <td>Pengaturan</td>
                </tr>
                <tr>
                    <td>Prestasi Mahasiswa TI Unpad di 3rd International Conference on Science in Information Technology (ICSITech) 2017</td><td>11/05/2017</td><td><button type="button" onclick="alert('Hello world!')">edit</button><button type="button">delete</button></td>
                </tr>
                <tr>
                    <td></td><td></td><td><button type="button" onclick="alert('Hello world!')">edit</button><button type="button">delete</button></td>
                </tr>
            </table>
        </div>
		<!-- insert -->
        <!--<div class="admin-content"> 
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
        </div>-->

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