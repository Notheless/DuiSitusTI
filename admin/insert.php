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
            <h2 class="content-title">Input Data Dosen</h2>
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
        </div>
    </div>
    <script type="text/javascript" src="js/textarea.js"></script>
</body>
</html>