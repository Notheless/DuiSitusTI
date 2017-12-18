<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Admin - Data Halaman</title>
    <?php include 'admin-header.html';?>
</head>
<body>
    <?php include 'admin-navbar.php';?>
    <div class="admin-content-pos">
        
        <div class="admin-main-content">
            <table class="table-post">
                <col><col>
                <tr>
                    <td>Judul</td>
                    <td>Pengaturan</td>
                </tr>
                <tr>
                    <td>Sejarah</td>
					<td><button id="update-button" type="button" onclick="showUpdateDiv(1)">edit</button></td>
                </tr>
                <tr>
                    <td>Visi Misi</td>
					<td><button id="update-button" type="button" onclick="showUpdateDiv(2)">edit</button></td>
                </tr>
                <tr>
                    <td>Fasilitas</td>
					<td><button id="update-button" type="button" onclick="showUpdateDiv(3)">edit</button></td>
                </tr>
                <tr>
                    <td>Tata Pamong</td>
					<td><button id="update-button" type="button" onclick="showUpdateDiv(4)">edit</button></td>
                </tr>
                <tr>
                    <td>Kerjasama dan Penelitian</td>
					<td><button id="update-button" type="button" onclick="showUpdateDiv(5)">edit</button></td>
                </tr>
                <tr>
                    <td>Sumber Daya Manusia</td>
					<td><button id="update-button" type="button" onclick="showUpdateDiv(6)">edit</button></td>
                </tr>
                <tr>
                    <td>Mahasiswa dan Lulusan</td>
					<td><button id="update-button" type="button" onclick="showUpdateDiv(7)">edit</button></td>
                </tr>
                <tr>
                    <td>Alumni</td>
					<td><button id="update-button" type="button" onclick="showUpdateDiv(8)">edit</button></td>
                </tr>
                <tr>
                    <td>Prestasi</td>
					<td><button id="update-button" type="button" onclick="showUpdateDiv(9)">edit</button></td>
                </tr>
                <tr>
                    <td>Kurikulum</td>
					<td><button id="update-button" type="button" onclick="showUpdateDiv(10)">edit</button></td>
                </tr>
                <tr>
                    <td>Pengabdian</td>
					<td><button id="update-button" type="button" onclick="showUpdateDiv(11)">edit</button></td>
                </tr>
                <tr>
                    <td>Kerjasama</td>
					<td><button id="update-button" type="button" onclick="showUpdateDiv(12)">edit</button></td>
                </tr>
                <tr>
                    <td>Publikasi</td>
					<td><button id="update-button" type="button" onclick="showUpdateDiv(13)">edit</button></td>
                </tr>
            </table>
        </div>

        <!-- update -->
        <div id="divUpdate" class="background-content">
            <div class="background" onclick="hideUpdateDiv()"></div>
            <div class="admin-content" id="update"> 
                
            </div>
        </div>

    </div>
    <script type="text/javascript" src="js/show-div-halaman.js"></script>
    <script type="text/javascript" src="js/textarea.js"></script>
</body>
</html>