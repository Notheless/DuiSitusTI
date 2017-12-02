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
            <table class="table-index">
                <tr>
                    <td>
                        <a class="superlink-button" href="postingan.php">
                            <div class="superlink-block">
                                <p>Postingan<br /><br />
                                <span id="dive-text">
                                    - tambah postingan<br />
                                    - edit postingan<br />
                                    - hapus postingan<br />
                                </span>
                                </p>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="superlink-button" href="dosen.php">
                            <div class="superlink-block">
                                <p>Dosen<br /><br />
                                <span id="dive-text">
                                    - tambah keterangan dosen<br />
                                    - edit keterangan dosen<br />
                                </span>
                                </p>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="superlink-button" href="lulusan.php">
                            <div class="superlink-block">
                                <p>Lulusan<br /><br />
                                <span id="dive-text">
                                    - tambah lulusan<br />
                                    - edit lulusan<br />
                                </span>
                                </p>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="superlink-button" href="/">
                            <div class="superlink-block">
                                <p>Keluar<br /><br />
                                <span id="dive-text">
                                    Kembali ke halaman utama<br />
                                </span>
                                </p>
                            </div>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
    <?php 		
	echo "
		<script>
			alert('Ketika si Arthur ulang tahun, dia ditanyakan oleh bojonya.\\n\\n \"Your Highness, ulang tahun nanti ingin hadiah apa.\" \\n \"Aing pen dragon.\" \\n\\nDan tibalah Arthur di suatu tempat yang bernama Avalon.');
		</script>";
		?>
</html>