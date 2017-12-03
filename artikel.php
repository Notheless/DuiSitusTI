<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Fasilitas dan Sistem Informasi</title>
    <?php include 'header.html';?>
</head>
<body>
    <?php include 'Navbar.html';?>
	<div class="grid-article-container">
        <!-- navigasi kiri -->
        <?php include 'left_nav.html';?>
		<?php
            error_reporting(0);
            include 'database.php';
            $sql = "SELECT * FROM posting";
            $result = $conn->query($sql);
			$id = 0;
			if($_GET["ID"]){
			$id = $_GET["ID"];
			while($row = $result->fetch_assoc()) {
			if($row["ID"]==$id){
        ?>
        <div class="grid-article-header">
            <h1 class="headline-header"><?php echo$row["Judul"];?></h1>
        </div>
        <div class="grid-article-status">
            <p>
            <?php echo$row["Tanggal"];?> <br /> <?php echo$row["Author"];?>
            </p>
        </div>
        <div class="grid-article-para">
            <div class="contentstyle" style="margin:40px;text-align:justify">
            <p><?php echo$row["Isi"];?></p>
            </div>
        </div>
        <div class="grid-article-image">
            a
        </div>
		<?php
            }
        }
		?>
    </div>
</body>
</html>