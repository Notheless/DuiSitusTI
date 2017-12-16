<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Visi dan Misi</title>  
    <?php 
        include 'header.html';
        include 'database.php';
    ?>
</head>
<body>
    <?php include 'Navbar.html';?>
    <div class="grid-container">
        <!-- navigasi kiri -->
			<?php include 'left_nav.html';?>
		<!--Recent-->
        <!-- konten -->
		<div class="grid-headline-header">
            <h1 class="headline-header"> VISI <span class="header-revcolor">DAN MISI </span></h1>
        </div>
        <div class="grid-headline-para">
            <p class="headline-para">
                
            <?php
                    
					$sql = "SELECT * FROM `datahalaman`";
					$result = $conn->query($sql);
					$id=2;
					while($row = $result->fetch_assoc()) 
					{
                        if($id==$row["Katagori"]&& 1==$row["Header"]) echo nl2br($row["Isi"]);
                    }
                    mysqli_data_seek($result,0);
                 ?>
            </p>
        </div>
        <div class="grid-headline-thumbnail">
            <img class="thumbnail" src="f_img/02.jpg" height="auto" width="100%"/>
            <div class="headline-thumbnail-det">
                <div style="padding:10px;font-style:italic;color:white">
                    <p>Vision without action is merely a dream. Action without vision just passed the time. Vision with action can change the world.
                        <br> <div style="text-align:right"> - Joel A. Barker</div>
                    </p>
                </div>
            </div>
        </div>
        <div class="grid-content">
            <div class="contentstyle" style="margin:40px;text-align:justify">

            
            <?php
                    
					$sql = "SELECT * FROM `datahalaman`";
					$result = $conn->query($sql);
					$id=2;
					while($row = $result->fetch_assoc()) 
					{
                        if($id==$row["Katagori"]&& 0==$row["Header"]) {
                ?>
                        <h1><?php echo nl2br($row["Judul"]);?> </h1>
                <p>
                        <?php echo nl2br($row["Isi"]);?>
                </p>
                <?php
                        }
                    }
                 ?>

                <!-- content start 
                <h1>Visi</h1>
                <p>
                    Pada tahun 2026, menjadi Prodi Teknik Informatika yang unggul di tingkat nasional serta diakui di tingkat regional dalam bidang pendidikan, penelitian, dan pengabdian kepada masyarakat.
                </p>
                <h1>Misi</h1>
                <p>
                    <ol>
                        <li>Menghasilkan lulusan yang bermutu, bermoral, dan profesional dalam bidang teknik informatika serta mampu beradaptasi terhadap perkembangan ilmu pengetahuan dan teknologi sehingga dapat bersaing secara nasional dan regional.</li>
                        <li>Meningkatkan pemberdayaan kelompok penelitian/kelompok bidang Minat (KBM) dalam pengembangan dan penerapan bidang sistem informasi dan rekayasa perangkat lunak, jaringan komputer dan komunikasi data, sistem cerdas dan sistem grafika, dan ilmu komputasi dan metode numerik. yang bertaraf nasional dan regional, untuk mendukung pengembangan ilmu pengetahuan dan teknologi.</li>
                        <li>Meningkatkan penerapan hasil penelitian dasar dan terapan dalam bidang informatika untuk ikut serta dalam mendukung pembangunan nasional dan kesejahteraan masyarakat.</li>
                    </ol>
                </p>
                <h1>Sasaran</h1>
                <h1>Tujuan</h1>
                <h1>Rencana Strategis</h1>
                <p>
                    <ol>
                        <li><a href>Rencana Strategis UNPAD 2015-2019</a></li>
                        <li><a href>Rencana Strategis Fakultas MIPA 2017-2021</a></li>
                    </ol>
                </p>
                <h1>Latar Belakang</h1>
                <p>
                    Program Sarjana Program Studi Teknik Informatika merupakan pengembangan dari Bidang Minat Ilmu Komputer di Jurusan Matematika FMIPA Universitas Padjadjaran, sesuai dengan rencana strategis jurusan, fakultas, dan universitas. Kurikulum Bidang Minat Ilmu Komputer diberlakukan tahun 2004 dan telah menghasilkan lulusan yang terserap di berbagai institusi baik negeri maupun swasta tersebar di Indonesia.
                </p>
                <p>
                    Mengingat pertumbuhan teknologi yang cepat dan tingginya kebutuhan masyarakat dalam bidang Teknik Informatika (lulusan sekitar 5% dari kebutuhan), dan tingginya minat untuk mengikuti pendidikan bidang Teknik Informatika (sekitar 4% diterima dari peminat SNMPTN), serta mempertimbangkan berbagai masukan dari stakeholder dan alumni untuk menyempurnakan kurikulum yang mandiri sesuai dengan kebutuhan, maka disusun proposal pendirian Program Studi Teknik Informatika, dan telah mendapat persetujuan Dikti dengan
                    <a href><b>SK Mendikbud Nomor: 305/E/O/2011</b></a> tanggal 21 Desember 2011 tentang Ijin Penyelenggaraan Program Studi Teknik Informatika pada Universitas Padjadjaran. Pada tahun 2014 program studi S-1 Teknik Informatika memperoleh akreditasi B dari BAN PT sesuai dengan
                    <a href><b>Surat Keputusan Nomor 483/SK/BAN-PT/Akred/S/XII/2014</b></a>.
                </p>
                <h1>Kompetensi Lulusan</h1>
                <p>
                    Lulusan Program Studi Teknik Informatika Universitas Padjadjaran bergelar Sarjana Teknik (S.Kom.,/S.Inf.), memiliki kompetensi sebagai berikut:
                </p>
                <p>
                    <b>KOMPETENSI UTAMA:</b> mampu melakukan pengembangan perangkat lunak untuk berbagai keperluan, melakukan analisis terhadap sistem dalam suatu instansi atau perusahaan dan membuat solusi yang integratif dengan memanfaatkan perangkat lunak, mampu merencanakan dan pengevaluasian penerapan Teknologi Informasi pada sebuah organisasi, mampu merancang dan memelihara basis data termasuk data warehouse untuk suatu instansi atau perusahaan, mampu melakukan pengujian fungsi-fungsi perangkat lunak, mampu mengembangkan, merancang dan membangun serta memelihara website dengan berbagai layanan dan fasilitasnya.
                </p>
                <p>
                    <b>KOMPETENSI KHUSUS:</b> lulusan teknik Informatika Unpad dapat memilih salah satu dari empat peminatan berikut:
                    <br>(1) Sistem Informasi dan Rekayasa Perangkat Lunak (SIRPL),
                    <br>(2) Jaringan Komputer dan Komunikasi Data (JKKD),
                    <br>(3) Sistem Cerdas dan Sistem Grafika (SCSG), serta
                    <br>(4) Ilmu Komputasi dan Metode Numerik (IKMN).
                </p>
                <h1>Prospek Lulusan</h1>
                <p>
                    <ul>
                        <li>Lulusan program studi Teknik Informatika Universitas Padjadjaran diharapkan dapat mengisi lapangan kerja di berbagai institusi pemerintah, perusahaan swasta, dan industri.</li>
                        <li>Lulusan Teknik Informatika dapat menjadi karyawan, wiraswastawan (entreupreneur), profesional, birokrat, dan akademisi.</li>
                        <li>Lulusan diarahkan dapat mengisi karir pekerjaan bidang supervisi, asisten manajer dan administrator.</li>
                        <li>Sebagai contoh lulusan Teknik Informatika harus mampu menjadi Capacity Planning Supervisor, Database Administrator, Customer Service Supervisor, Data Communication Assistant manager, Data Entry Supervisor, Information Center Manager, Hardware Installation Supervisor, System Administrator, Webmaster, Project Manager Applications, Project Manager Distributed Systems, Project Network Technical Services, Project Manager Implementation Deployment, dan lain-lain.</li>
                    </ul>
                </p>
                content end -->
            </div>
        </div>
    </div>
</body>
</html>