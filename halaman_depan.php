<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Halaman Depan</title>
    <link rel="stylesheet" type="text/css" href="css/refresh.css" />
    <link rel="stylesheet" type="text/css" href="css/laman_depan.css" />
    <link rel="stylesheet" type="text/css" href="css/laman_depan_grid.css" />
    <link rel="stylesheet" type="text/css" href="css/navbar.css" />
	<link rel="shortcut icon" href="img/icon_unpad.png"/>
</head>
<body>
    <!-- navigation top bar -->
    <?php include 'Navbar.html';?>
    <!-- slide gambar -->
    <div class="grid-container">
        <div class="grid-slider" style="z-index:4">
            <div class="slideshow-container">
                <div class="presSlides fade">
                    <img class="movpic" src="f_img/01.jpg" style="width:100%">
                    <div class="text">
                        <h1>WELCOME</h1>
                        <p>TO INFORMATICS UNPAD WEBSITE</p>
                        <a class="midbutton" href="">VISIT</a>
                    </div>
                </div>
                <div class="presSlides fade">
                    <img class="movpic" src="f_img/02.jpg" style="width:100%">
                    <div class="text">
                        <h1>VISI MISI</h1>
                        <p>Visi, Misi, Sasaran dan Tujuan Program Studi S1 Teknik Informatika Unpad</p>
                        <a class="midbutton" href="visi_misi.php">READ MORE</a>
                    </div>
                </div>
                <div class="presSlides fade">
                    <img class="movpic" src="f_img/03.jpg" style="width:100%">
                    <div class="text">
                        <h1 id="width-alt">ORGANISASI DAN TATA PAMONG</h1>
                        <p>Program Studi S1 Teknik Informatika Unpad</p>
                        <a class="midbutton" href="organisasi.php">READ MORE</a>
                    </div>
                </div>
                <div class="presSlides fade">
                    <img class="movpic" src="f_img/04.jpg" style="width:100%">
                    <div class="text">
                        <h1>MAHASISWA DAN ALUMNI</h1>
                        <p>Program Studi S1 Teknik Informatika Unpad</p>
                        <a class="midbutton" href="mahasiswa_dan_lulusan.php">READ MORE</a>
                    </div>
                </div>
                <div class="presSlides fade">
                    <img class="movpic" src="f_img/05.jpg" style="width:100%">
                    <div class="text">
                        <h1>SUMBER DAYA MANUSIA</h1>
                        <p>Program Studi S1 Teknik Informatika Unpad</p>
                        <a class="midbutton" href="sdm.php">READ MORE</a>
                    </div>
                </div>
                <div class="presSlides fade">
                    <img class="movpic" src="f_img/06.jpg" style="width:100%">
                    <div class="text">
                        <h1>KURIKULUM</h1>
                        <p>Pembelajaran Mahasiswa Program Studi S1 Teknik Informatika Unpad</p>
                        <a class="midbutton" href="kurikulum.php">READ MORE</a>
                    </div>
                </div>
                <div class="presSlides fade">
                    <img class="movpic" src="f_img/07.jpg" style="width:100%">
                    <div class="text">
                        <h1>FASILITAS</h1>
                        <p>Sarana dan Prasarana Program Studi S1 Teknik Informatika Unpad</p>
                        <a class="midbutton" href="fasilitas.php">READ MORE</a>
                    </div>
                </div>
                <div class="presSlides fade">
                    <img class="movpic" src="f_img/08.jpg" style="width:100%">
                    <div class="text">
                        <h1>PENELITIAN DAN KERJASAMA</h1>
                        <p>Program Studi S1 Teknik Informatika Unpad</p>
                        <a class="midbutton" href="kerjasama_penelitian.php">READ MORE</a>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <!-- tombol prev dan next -->
        <div class="grid-slider-button" style="z-index:6">
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <!-- tombol halaman -->
        <div class="grid-slider-select" style="z-index:7">
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="js/slide.js"></script>
</body>
</html>