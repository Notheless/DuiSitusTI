<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Tenaga Pendidik</title>
    <?php include 'header.html';?>
</head>
<body>
    <?php include 'Navbar.html';?>
	<div class="grid-dosen-container">
        <!-- navigasi kiri -->
			<?php include 'left_nav.html';?>
        <!-- konten -->
        <div class="grid-dosen-header">
            <h1 class="headline-header">TENAGA <span class="header-revcolor">PENDIDIK</span></h1>
        </div>
		<?php
		include 'database.php';
		$sql = "SELECT * FROM dosen";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
		if($row["ID"]==$_GET["ID"]){
        echo "<div class=\"grid-dosen-info\">";
        echo    "<div class=\"dosen-info\">";
        echo        "<h1>".$row["Nama"]."</h1>";
        echo        "<div></div>";
        echo        "<p>".$row["Bidang"]."</p>";
        echo    "</div>";
        echo"</div>";
        echo"<div class=\"grid-dosen-pic\">";
        echo    "<div class=\"photo-border\"><img src=\"img/"."sam".".png\"></div>";
        echo"</div>";
        echo"<div class=\"grid-dosen-stats\">";
        echo    "<div class=\"dosen-stats\">";
		echo "<table style=\"width:100%;\">";
		echo "<tr><td width=\"110px\"><p>Nama</p></td><td><p>:</p></td><td><p>".$row["Nama"]."</p></td></tr>";
		echo "<tr><td width=\"110px\"><p>Email</p></td><td><p>:</p></td><td><p>".$row["Email"]."</p></td></tr>";
		echo "<tr><td width=\"110px\"><p>Telp</p></td><td><p>:</p></td><td><p>".$row["Telp"]."</p></td></tr>";
		echo "<tr><td width=\"110px\"><p>HP</p></td><td><p>:</p></td><td><p>".$row["HP"]."</p></td></tr>";
		echo "<tr><td width=\"110px\"><p>Alamat</p></td><td><p>:</p></td><td><p>".$row["Alamat"]."</p></td></tr>";
		echo "<tr><td width=\"110px\"><p>Pendidikan</p></td><td><p>:</p></td><td><p>".$row["Pendidikan"]."</td></tr>";
        echo    "</div>";
        echo"</div";
		}
		}
        ?>
        <div class="grid-dosen-data">
            <div class="menu-bar-aspek">
                <div class="button-menu" onclick="showPengajaranDosen()"><p>Pengajaran</p></div>
                <div class="button-menu" onclick="showPenelitianDosen()"><p>Penelitian</p></div>
                <div class="button-menu" onclick="showPengabdianDosen()"><p>Pengabdian</p></div>
                <div class="button-menu" onclick="showPenunjangDosen()"><p>Penunjang</p></div>
            </div>
            <div class="menu-bar-konten">
                <div id="pengajaran-d" class="konten-data"><p>a</p></div>
                <div id="penelitian-d" class="konten-data"><p>x</p></div>
                <div id="pengabdian-d" class="konten-data"><p>c</p></div>
                <div id="penunjang-d" class="konten-data"><p>s</p></div>
            </div>
        </div>
    </div>
	
</body>
</html>