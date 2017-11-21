<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Fasilitas dan Sistem Informasi</title>
    <?php include 'header.html';?>
</head>
<body>
    <?php include 'Navbar.html';?>
	<?php
		error_reporting(0);
		include 'database.php';
		$sql = "SELECT * FROM posting";
		$result = $conn->query($sql);
	?>
	<div class="grid-article-container">
        <!-- navigasi kiri -->
        <?php include 'left_nav.html';?>
		<?php
			$id = 0;
			if($_GET["ID"]){
			$id = $_GET["ID"];
			while($row = $result->fetch_assoc()) {
			if($row["ID"]==$id){
        ?>
        <div class="grid-article-header">
            <h1 class="headline-header"><?php echo$row["Judul"];?></h1>
            <!-- <h1 class="headline-header"> FASILITAS <span class="header-revcolor">DAN SISTEM INFORMASI </span></h1> -->
        </div>
        <div class="grid-article-status">
            <p>
            <?php echo$row["Tanggal"];?> <br /> <?php echo$row["Author"];?>
            </p>
        </div>
        <div class="grid-article-para">
            <div class="contentstyle" style="margin:40px;text-align:justify">
            <p><?php echo$row["Isi"];?></p>
            <!-- <p>Pada tanggal 25 – 26 Oktober 2017 , 7 orang mahasiswa TI yang tergabung dalam 2 tim berhasil melaksanakan presentasi dua artikel ilmiah di ajang 3rd International Conference on Science in Information Technology (ICSITech 2017) yang dilaksanakan di GH Universal Hotel, Bandung, Jawa Barat. <br />
Tim pertama terdiri dari Fajar Satria, Hafiz Aditra, M. Dean Aji Wibowo, dan Hilmi Luthfiansyah yaitu mahasiswa TI angkatan 2014 yang diwakili presentasinya oleh M. Dean Aji Wibowo. Tim pertama ini mempresentasikan artikel yang berjudul “EFL Learning Media for Early Childhood Through Speech Recognition Application”, sebuah game-based learning untuk pembelajaran bahasa Inggris bagi anak-anak melalui pengenalan suara. <br />
Tim kedua terdiri dari Gustara Sapto Ajie, M. Azhari Marpaung, dan Agung Kurniawan yaitu mahasiswa TI angkatan 2014 juga, diwakili presentasinya oleh Gustara Sapto Ajie. Tim kedua mempresentasikan artikel yang berjudul “The Development and Usability Testing of Game-based Learning as A Medium to Introduce Zoology to Young Learners”, sebuah aplikasi game-based learning pengenalan aneka hewan bagi anak-anak melalui teknik hand gesture recognition. <br />
Kedua artikel yang dihasilkan merupakan hasil penelitian dari kedua tim selama 1 semester perkuliahan Human Computer Interaction. Selain aplikasi yang dihasilkan, mahasiswa juga harus mampu menuangkan hasil karyanya ke dalam artikel ilmiah. Kegiatan penelitian ini dibimbing oleh 3 dosen pengampu yaitu: Mira Suryani, S.Pd., M.Kom Erick Paulus, S.Si., M.Kom, dan Ino Suryana, Drs., M.Kom. <br />
</p> -->
            </div>
        </div>
        <div class="grid-article-image">
            a
        </div>
		<?php
			}
		?>
    </div>
</body>
</html>