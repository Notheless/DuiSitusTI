<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Fasilitas dan Sistem Informasi</title>
    <?php include 'header.html';?>
</head>
<body>
    <?php include 'Navbar.html';?>
	<div class="grid-dosen-container">
        <!-- navigasi kiri -->
			<?php include 'left_nav.html';?>
        <!-- konten -->
        <div class="grid-dosen-header">
            <h1 class="headline-header"> DAFTAR <span class="header-revcolor">DOSEN </span></h1>
        </div>
		<?php
		error_reporting(0);
		include 'database.php';
		$sql = "SELECT * FROM dosen";
		$result = $conn->query($sql);
		$id = 0;
		if($_GET["ID"]) 
		{
			$id=$_GET["ID"];
		}			
		while($row = $result->fetch_assoc()) {
		if($row["ID"]==$id){
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
        echo        "<p>Nama : ".$row["Nama"]."</p>";
        echo        "<p>Email : ".$row["Email"]."</p>";
        echo        "<p>Telp : ".$row["Telp"]."</p>";
        echo        "<p>HP : ".$row["HP"]."</p>";
        echo        "<p>Alamat : ".$row["Alamat"]."</p>";
        echo        "<p>Pendidikan : ".$row["Pendidikan"]."</p>";
        echo    "</div>";
        echo"</div";
		}
		}
		?>
        <div class="grid-dosen-data">
            a
        </div>
        <div class="grid-dosen-list">a</div>
    </div>
</body>
</html>