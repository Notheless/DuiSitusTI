-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2017 at 02:59 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `situsti`
--

-- --------------------------------------------------------

--
-- Table structure for table `datahalaman`
--

CREATE TABLE `datahalaman` (
  `ID` int(11) NOT NULL,
  `Katagori` int(11) NOT NULL,
  `Header` tinyint(1) NOT NULL DEFAULT '0',
  `Judul` text,
  `Isi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datahalaman`
--

INSERT INTO `datahalaman` (`ID`, `Katagori`, `Header`, `Judul`, `Isi`) VALUES
(1, 1, 1, NULL, 'Program Studi Teknik Informatika Universitas Padjadjaran merupakan salah satu Program Studi dalam Fakultas Matematika dan Ilmu Pengetahun Alam Universitas Padjadjaran.\n\nPada awalnya Program Studi Teknik Informatika termasuk bagian dari Departemen Matematika.'),
(2, 1, 0, 'Pendidikkan D3', 'Sebelum bedirinya pendidikan S1 untuk Prgram Studi Teknik Informatika FMIPA Universitas Padjadjaran, Program pendidikan D3 sudah berdiri dan sudah menghasilkan lulusan yang cukup berkualitas.'),
(3, 1, 0, 'Pendiikan S1', 'Program Studi Teknik Informatika (TI) FMIPA Unpad bertujuan menghasilkan lulusan yang mampu menyerap, mengaplikasikan, dan mengembangkan TI dengan kompetensi utama Rekayasa Perangkat Lunak, meliputi 4 peminatan studi yaitu Sistem Informasi, Jaringan Komputer dan Komunikasi Data, Sistem Cerdas dan Grafika Komputer, serta Komputasi dan Metode Numerik.\r\n\r\nLulusan TI FMIPA Unpad diharapkan mampu mengembangkan perangkat lunak untuk berbagai keperluan, melakukan analisis terhadap sistem dalam suatu instansi, membuat solusi yang integratif dengan memanfaatkan perangkat lunak, mampu merencanakan dan mengevaluasi penerapan TI pada sebuah organisasi, mampu merancang dan memelihara basis data termasuk data warehouse untuk suatu instansi atau perusahaan, mampu melakukan pengujian fungsi-fungsi perangkat lunak, mampu mengembangkan, merancang dan membangun serta memelihara website dengan berbagai layanan dan fasilitasnya.'),
(4, 1, 0, 'Prospek Kerja', 'Lulusan program studi TI FMIPA Unpad diarahkan dapat mengisi karir pekerjaan bidang supervisi, asisten manajer dan administrator. Sebagai contoh lulusan Teknik Informatika harus mampu menjadi Capacity Planning Supervisor, Database Administrator, Customer Service Supervisor, Data Communication Assistant manager, Data Entry Supervisor, Information Center Manager, Hardware Installation Supervisor, System Administrator, Webmaster, Project Manager Applications, Project Manager Distributed Systems, Project Network Technical Services, Project Manager Implementation Deployment, dan lain-lain.'),
(5, 2, 1, NULL, 'Visi adalah pandangan jauh tentang suatu perusahaan ataupun lembaga, dapat di artikan sebagai tujuan dan apa yang harus dilakukan untuk mencapai tujuannya tersebut. \r\n\r\nSedangkan Misi adalah suatu pernyataan tentang apa yang harus dikerjakan oleh perusahaan atau lembaga dalam usaha mewujudkan Visi.'),
(6, 2, 0, 'Visi', 'Pada tahun 2026, menjadi Prodi Teknik Informatika yang unggul di tingkat nasional serta diakui di tingkat regional dalam bidang pendidikan, penelitian, dan pengabdian kepada masyarakat.'),
(7, 2, 0, 'Misi', '<ol>\r\n                        <li>Menghasilkan lulusan yang bermutu, bermoral, dan profesional dalam bidang teknik informatika serta mampu beradaptasi terhadap perkembangan ilmu pengetahuan dan teknologi sehingga dapat bersaing secara nasional dan regional.</li>\r\n                        <li>Meningkatkan pemberdayaan kelompok penelitian/kelompok bidang Minat (KBM) dalam pengembangan dan penerapan bidang sistem informasi dan rekayasa perangkat lunak, jaringan komputer dan komunikasi data, sistem cerdas dan sistem grafika, dan ilmu komputasi dan metode numerik. yang bertaraf nasional dan regional, untuk mendukung pengembangan ilmu pengetahuan dan teknologi.</li>\r\n                        <li>Meningkatkan penerapan hasil penelitian dasar dan terapan dalam bidang informatika untuk ikut serta dalam mendukung pembangunan nasional dan kesejahteraan masyarakat.</li>\r\n                    </ol>'),
(8, 2, 0, 'Sasaran', NULL),
(9, 2, 0, 'Tujuan', NULL),
(10, 2, 0, 'Rencana Strategis', '<ol>\n                        <li><a href="">Rencana Strategis UNPAD 2015-2019</a></li>\n                        <li><a href="">Rencana Strategis Fakultas MIPA 2017-2021</a></li>\n                    </ol>'),
(11, 2, 0, 'Latar Belakang', 'Program Sarjana Program Studi Teknik Informatika merupakan pengembangan dari Bidang Minat Ilmu Komputer di Jurusan Matematika FMIPA Universitas Padjadjaran, sesuai dengan rencana strategis jurusan, fakultas, dan universitas. Kurikulum Bidang Minat Ilmu Komputer diberlakukan tahun 2004 dan telah menghasilkan lulusan yang terserap di berbagai institusi baik negeri maupun swasta tersebar di Indonesia.\n\n                    Mengingat pertumbuhan teknologi yang cepat dan tingginya kebutuhan masyarakat dalam bidang Teknik Informatika (lulusan sekitar 5% dari kebutuhan), dan tingginya minat untuk mengikuti pendidikan bidang Teknik Informatika (sekitar 4% diterima dari peminat SNMPTN), serta mempertimbangkan berbagai masukan dari stakeholder dan alumni untuk menyempurnakan kurikulum yang mandiri sesuai dengan kebutuhan, maka disusun proposal pendirian Program Studi Teknik Informatika, dan telah mendapat persetujuan Dikti dengan<a href=""><b>SK Mendikbud Nomor: 305/E/O/2011</b></a> tanggal 21 Desember 2011 tentang Ijin Penyelenggaraan Program Studi Teknik Informatika pada Universitas Padjadjaran. Pada tahun 2014 program studi S-1 Teknik Informatika memperoleh akreditasi B dari BAN PT sesuai dengan<a href=""><b>Surat Keputusan Nomor 483/SK/BAN-PT/Akred/S/XII/2014</b></a>.'),
(12, 2, 0, 'Kompetensi Lulusan\r\n', 'Lulusan Program Studi Teknik Informatika Universitas Padjadjaran bergelar Sarjana Teknik (S.Kom.,/S.Inf.), memiliki kompetensi sebagai berikut:\r\n\r\nKOMPETENSI UTAMA: mampu melakukan pengembangan perangkat lunak untuk berbagai keperluan, melakukan analisis terhadap sistem dalam suatu instansi atau perusahaan dan membuat solusi yang integratif dengan memanfaatkan perangkat lunak, mampu merencanakan dan pengevaluasian penerapan Teknologi Informasi pada sebuah organisasi, mampu merancang dan memelihara basis data termasuk data warehouse untuk suatu instansi atau perusahaan, mampu melakukan pengujian fungsi-fungsi perangkat lunak, mampu mengembangkan, merancang dan membangun serta memelihara website dengan berbagai layanan dan fasilitasnya.\r\n\r\nKOMPETENSI KHUSUS: lulusan teknik Informatika Unpad dapat memilih salah satu dari empat peminatan berikut: \r\n(1) Sistem Informasi dan Rekayasa Perangkat Lunak (SIRPL), \r\n(2) Jaringan Komputer dan Komunikasi Data (JKKD), \r\n(3) Sistem Cerdas dan Sistem Grafika (SCSG), serta \r\n(4) Ilmu Komputasi dan Metode Numerik (IKMN).'),
(13, 2, 0, 'Prospek Lulusan', '<ul>                        <li>Lulusan program studi Teknik Informatika Universitas Padjadjaran diharapkan dapat mengisi lapangan kerja di berbagai institusi pemerintah, perusahaan swasta, dan industri.</li>                        <li>Lulusan Teknik Informatika dapat menjadi karyawan, wiraswastawan (entreupreneur), profesional, birokrat, dan akademisi.</li>                        <li>Lulusan diarahkan dapat mengisi karir pekerjaan bidang supervisi, asisten manajer dan administrator.</li>                        <li>Sebagai contoh lulusan Teknik Informatika harus mampu menjadi Capacity Planning Supervisor, Database Administrator, Customer Service Supervisor, Data Communication Assistant manager, Data Entry Supervisor, Information Center Manager, Hardware Installation Supervisor, System Administrator, Webmaster, Project Manager Applications, Project Manager Distributed Systems, Project Network Technical Services, Project Manager Implementation Deployment, dan lain-lain.</li>\n                    </ul>'),
(14, 3, 1, NULL, 'Kegiatan akademik dilaksanakan di Kampus Jatinangor, didukung sarana ruang kuliah, ruang seminar, ruang dosen, perpustakaan, dan laboratorium.'),
(15, 3, 0, NULL, 'Fasilitas tersebut didukung pula sarana akses internet/hotspot area, meeting-point area, lapangan olah raga, sarana ibadah, ruang himpunan, dan kantin mahasiswa. Sistem informasi terintegrasi dengan sistem informasi fakultas dan universitas meliputi hampir semua aspek pendidikan dan pengelolaannya termasuk juga fasilitas <a href="http://elearning-dev.unpad.ac.id" target="_blank">E-Learning</a> dan <a href="http://e5.onthehub.com/WebStore/ProductsByMajorVersionList.aspx?ws=ef1ad7d6-869b-e011-969d-0030487d8897&amp;vsro=8">Perangkat Lunak berlisensi</a>'),
(16, 3, 0, 'Ruang Kelas\r\n', ''),
(17, 3, 0, 'Laboratorium', ''),
(18, 3, 0, '<a href="http://informatika.unpad.ac.id/web/?page_id=404">Perpustakaan</a>', ''),
(19, 3, 0, 'Ruang Dosen', ''),
(20, 3, 0, 'Fasilitas Lainnya', ''),
(21, 4, 1, NULL, 'Sistem tata pamong di Prodi Teknik Informatika FMIPA Unpad, yang mengacu kepada sistem Organisasi dan Tata Kelola (OTK) Universitas Padjadjaran, terdiri dari tiga komponen yaitu tenaga pendidik, tenaga kependidikan dan mahasiswa. Selain itu komponen lainnya yaitu alumni dan pengguna alumni juga terlibat dalam pengembangan Prodi.'),
(22, 4, 0, NULL, 'Selain itu komponen lainnya yaitu alumni dan pengguna alumni juga terlibat dalam pengembangan Prodi. Prodi Teknik Informatika dipimpin oleh seorang Ketua Prodi dibantu oleh seorang Sekretaris Prodi. Ketua dan Sekretaris Prodi dipilih dari dosen Prodi melalui mekanisme aturan pemilihan yang mengacu pada peraturan dan undang-undang yang berlaku. Calon yang akan dipilih berasal dari staf dosen yang telah memenuhi persyaratan baik dari kualifikasi akademik, jabatan, kepangkatan serta syarat non akademik seperti memiliki sifat kepemimpinan dan tanggung jawab. Calon terpilih diusulkan oleh Prodi ke Fakultas kemudian ke Universitas dalam rangka penetapan Ketua dan Sekretaris Prodi oleh Rektor. Uraian lebih jauh tentang tata pamong, susunan organisisi dan lain sebagainya dapat dilihat disini.'),
(23, 4, 0, 'Umpan Balik', '<a href="">Umpan balik dari Dosen -&gt; Institusi</a>\n                    <a href="">Umpan bali dari Tenaga Kependidikan -&gt; Institusi</a>\n                    <a href="">Umpan balik dari Masyarakat</a>'),
(24, 4, 0, 'Pemantauan dan Evaluasi (Monev)', ' Sistem Akreditasi Nasional Perguruan Tinggi oleh BAN-PT\n                Sistem Penjaminan Mutu Universitas oleh <a href="">SPM Unpad</a>\n                    Monitoring dan Evaluasi Internal oleh Fakultas\n                    Evaluasi Laporan Kinerja Dosen oleh Tim Sertifikasi Dosen\n                    Evaluasi Pelaksanaan Pengajaran oleh Program Studi'),
(25, 5, 1, NULL, 'Aktivitas penelitian, pengabdian kepada masyarakat dan kerjasama telah banyak dilakukan mengingat dosen prodi Teknik Informatika sebelumnya adalah dosen prodi Matematika bidang minat Ilmu Komputer. \r\n\r\nBerbagai jenis penelitian baik secara kompetitif nasional maupun lokal telah diikuti dan memberikan kontribusi internal dan eksternal, misalnya penelitian Fundamental, Hibah Bersaing, Penelitian Strategis Nasional, Penelitian BOPTN dan Penelitian Swadana.'),
(26, 5, 0, NULL, 'Selain itu beberapa penelitian yang bersifat internasional dan multi perusahaan juga telah dilakukan. Pengabdian kepada masyarakat dilakukan melalui berbagai aktivitas penerapan kepakaran dalam hal pelatihan keilmuan dan aktivitas kemasyarakatan yang terutama ditujukan bagi masyarakat lingkungan sekitar kampus. Kerjasama telah dilakukan dari berbagai sektor ABG (Academics, Business dan Government). Uraian lebih jauh tentang penelitian, pengabdian kepada masyarakat dan kerjasama yang telah dilakukan dapat dilihat disini.'),
(27, 5, 0, 'Kerjasama dengan Institusi Akademik', 'Program SAME 2013 : Program Scheme for Academic Mobility and Exchange merupakan program Kemdikbud berbasis MoU yang salah satu aktivitasnya adalah mengirimkan tenaga pengajar ke institusi pendidikan di luar negeri dengan lama maksimum 3 bulan untuk melakukan aktivitas penelitian dan kerjasama. Untuk tahun 2013 ini telah dikirim satu dosen ke University of Skovde Swedia. Foto aktivitasnya bisa dilihat disini. '),
(28, 5, 0, 'Kerjasama dengan Bisnis dan Industri', 'Microsoft: Pada tahun 2013 Program Teknik Informatika telah bekerjasama dengan Microsoft dalam bentuk bantuan (i) peralatan komputer dan (ii) fasilitas ruang maya yang dapat diakses dosen dan mahasiswa dalam rangka kegiatan akademik, pelatihan dan penelitian di bidang Cloud Computing.\r\n\r\nThomson Reuters: Pada tahun 2013, kerjasama dilakukan antara prodi Teknik Informatika dengan perusahaan Thomson Reuters dalam skema Scientific Business and Training Agreement yang dinyatakan dalam bentuk bantuan perangkat lunak EndNote serta bahan-bahan untuk sosialisasi dan pelatihan penggunaannya.'),
(29, 5, 0, 'Kerjasama dengan Pemerintah', ''),
(30, 6, 1, NULL, 'Sumber daya manusia (SDM) adalah salah satu faktor yang sangat penting bahkan tidak dapat dilepaskan dari sebuah organisasi, baik institusi maupun perusahaan. SDM juga merupakan kunci yang menentukan perkembangan perusahaan. Pada hakikatnya, SDM berupa manusia yang dipekerjakan di sebuah organisasi sebagai penggerak, pemikir dan perencana untuk mencapai tujuan organisasi itu.'),
(31, 6, 0, 'Staf Pengajar (Tenaga Pendidik)', 'Staf pengajar Program Studi Teknik Informatika, terdiri dari staf pengajar tetap yang profesional dengan kualifikasi Doktor (S3) dan Master/Magister di bidang Ilmu Komputer dan Teknik Informatika dari dalam dan luar negeri serta berpengalaman mengelola dan mengajar program Sarjana Bidang Minat Ilmu Komputer dan Program Diploma 3 Komputer Universitas Padjadjaran sejak tahun 1993. Selain itu program studi Teknik Informatika Universitas Padjadjaran juga didukung oleh staf pengajar berkualitas Doktor dan Magister dalam bidang Matematika, Statistika, Riset Operasi, Teknik Industri, Fisika, dan Elektronika, yang ada di FMIPA Unpad. Proses Perkuliahan juga akan melibatkan kerjasama dengan stakeholder dan alumni yang berpengalaman bergerak dalam bidang Teknologi Informasi, baik di industri pemerintah, perusahaan swasta maupun industri.\r\n                <i>Informasi selanjutnya tentang tentang staf pengajar/tenaga pendidik di Program Studi S1 Teknik Informatika Universitas Padjadjaran dapat dilihat <a href="dosen.php "><strong>disini</strong></a>.</i>            \r\n<a href="http://informatika.unpad.ac.id/new/wp-content/uploads/2013/07/edit-IMG_3765.jpg"><img class="content-image" src="http://informatika.unpad.ac.id/new/wp-content/uploads/2013/07/edit-IMG_3765.jpg" height="auto" width="auto"></a>'),
(32, 6, 0, 'Tenaga Kependidikan', 'Tenaga kependidikan memiliki keahlian dalam bidang administrasi, kesekretariatan, teknisi, laboran, operator dan pustakawan. Saat ini Departemen Ilmu Komputer memiliki 6 tenaga kependidikan yang profesional dan berkualitas mendukung kelancaran kegiatan Departemen Ilmu Komputer, Program Studi S-1 Teknik Informatika, serta Laboratorium-laboratorium yang ada.'),
(33, 7, 1, NULL, 'Mahasiswa program studi S1 Teknik Informatika Universitas Padjadjaran bersumber dari seleksi masuk yang diadakan secara nasional dan terpadu. Secara umum komposisinya adalah mahasiswa undangan, mahasiswa reguler (melalui ujian tulis), dan mahasiswa bidikmisi.'),
(34, 7, 0, 'Seleksi Masuk', '<b>Untuk tahun akademik 2013/2014</b>, Program Studi Teknik Informatika Universitas Padjadjaran akan menerima mahasiswa baru dari dua jalur yaitu, jalur SNMPTN/Undangan dan jalur SBMPTN (Seleksi Bersama Masuk Perguruan Tinggi Negeri). Seleksi calon mahasiswa pada jalur SNMPTN atau undangan dilakukan melalui penilaian prestasi akademik siswa selama di sekolah tingkat menengah atas. Sedangkan seleksi calon mahasiswa pada jalur SBMPTN dilakukan melalui ujian tulis sebagaimana SNMPTN tahun yang lalu.\r\n\r\n<b>Untuk tahun akademik 2012/2013</b>, Program Studi Teknik Informatika Universitas Padjadjaran akan menerima mahasiswa baru dari dua jalur yaitu, jalur SNMPTN dan jalur SMUP (Seleksi Masuk Universitas Padjadjaran). Kedua jalur masuk tersebut memiliki kesamaan, yaitu: pendaftaran dilakukan secara online bersamaan pada saat pendaftaran jalur SNMPTN. Perbedaannya adalah calon mahasiswa yang hanya berniat masuk SNMPTN cukup memilih dua program studi di Unpad, sedangkan yang berniat masuk SNMPTN dan jalur SMUP, selain memilih dua program studi jalur SNMPTN, juga memilih dua program studi pada jalur SMUP, dengan terlebih dahulu membeli formulir pendaftaran jalur SNMPTN dan formulir pendaftaran jalur SMUP.'),
(35, 7, 0, 'Data Mahasiswa', '<img src="img/Grafik1.jpg" height="auto" width="auto">\r\n<img src="img/Grafik2.jpg" height="auto" width="auto">\r\n'),
(36, 9, 1, NULL, 'Apakah Program Studi S1 Teknik Informatika Universitas Padjadjaran belum memiliki prestasi sama sekali?'),
(37, 9, 0, 'Prestasi Mahasiswa\r\n', NULL),
(38, 9, 0, 'Prestasi Dosen', NULL),
(39, 8, 1, NULL, 'Mahasiswa program studi S1 Teknik Informatika Universitas Padjadjaran bersumber dari seleksi masuk yang diadakan secara nasional dan terpadu. Secara umum komposisinya adalah mahasiswa undangan, mahasiswa reguler (melalui ujian tulis), dan mahasiswa bidikmisi.'),
(40, 8, 0, 'Alumni\r\n', NULL),
(41, 10, 1, NULL, 'Kurikulum adalah peran mata pelajaran dan program pendidikan yang diberikan oleh suatu lembaga penyelenggara pendidikan yang berisi rancangan pelajaran yang akan diberikan kepada peserta pelajaran dalam satu periode jenjang pendidikan. Penyusunan perangkat mata pelajaran ini disesuaikan dengan keadaan dan kemampuan setiap jenjang pendidikan dalam penyelenggaraan pendidikan tersebut serta kebutuhan lapangan kerja.'),
(42, 10, 0, 'Kurikulum', '<p><b>Deskripsi</b>: Kurikulum Program Studi Teknik Informatika Universitas Padjadjaran disusun dengan fokus yang terletak pada teori, riset dan penerapan di bidang Teknik Informatika, bidang ilmu lainnya serta masyarakat dan industri.</a></p>\n                <p><b>Landasan Hukum</b>:</p>\n                <ul>\n                    <li>Undang?Undang Republik Indonesia Nomor 12 Tahun 2012 tentang Pendidikan Tinggi</li>\n                    <li>Peraturan Menteri Riset, Teknologi, dan Pendidikan Tinggi Republik Indonesia Nomor 44 Tahun 2015 tentang Standar Nasional Pendidikan Tinggi (SN?DIKTI)</li>\n                </ul>\n                <p><b>Informasi dan Rujukan Teknis:</b>:</p>\n                <ul>\n                    <li>Beban studi minimal 144 SKS yang dapat diselesaikan dalam waktu 8 semester.</li>\n                    <li><a href="http://www.acm.org/education/curricula-recommendations" target="_blank">Computing Curricula 2005</a> dari ACM dan IEEE serta Turunannya.</li>\n                </ul>\n\n                <h2>Daftar Mata Kuliah</h2>\n                <ul>\n                    <li>\n                        <b>Angkatan 2012-2015</b>\n                        <ul>\n                            <li><a href="http://informatika.unpad.ac.id/web/?page_id=70">Daftar Mata Kuliah Per Semester</a></li>\n                            <li><a href="http://informatika.unpad.ac.id/web/?page_id=83">Daftar Mata Kuliah Pilihan </a></li>\n                        </ul>\n                    </li>\n                    <li>\n                        <b>Angkatan 2016</b>\n                        <ul>\n                            <li>\n                                <a href="http://informatika.unpad.ac.id/web/?page_id=2557">Daftar Mata Kuliah Per Semester</a>\n                            </li>\n                            <li>\n                                <a href="http://informatika.unpad.ac.id/web/?page_id=2563">Daftar Mata Kuliah Pilihan </a>\n                            </li>\n                        </ul>\n                    </li>\n                    <li>\n                        <b>Angkatan 2017</b>\n                        <ul>\n                            <li>\n                                <a href="http://informatika.unpad.ac.id/web/?page_id=2568">Daftar Mata Kuliah Per Semester</a>\n                            </li>\n                            <li>\n                                <a href="http://informatika.unpad.ac.id/web/?page_id=2570">Daftar Mata Kuliah Pilihan </a>\n                            </li>\n                        </ul>\n                    </li>\n                </ul>\n'),
(43, 11, 1, NULL, 'Pengabdian kepada masyarakat dilakukan sebagai sarana untuk mempererta hubungan lembaga dengan masyarakat sekitar sehingga eksistensi lembaga lebih baik dimata khalayak.'),
(44, 11, 0, '2016', 'PpM Fakultas MIPA\r\nFun with Multimedia: SMP Muhamadiah Jatinangor.'),
(45, 11, 0, '2015', ''),
(46, 11, 0, '2014', ''),
(47, 12, 1, '', 'Program studi S1 Teknik Informatika Universitas Padjadjaran telah bekerjasama dengan berbagai lembaga untuk membangun sebuah hubungan harmonis dalam mencapai tujuan dan kebaikan bersama.'),
(48, 12, 0, 'Kerjasama', '<table style=''font-size:9pt; border:1px solid black; size=100%;''>\n				<tbody>\n				<tr>\n				<th>#</th>\n				<th>Partner</th>\n				<th>Program</th>\n				<th>Jenis</th>\n				</tr>\n				<tr>\n				<td>1<p></p>\n				</td><td>Microsoft<p></p>\n				</td><td>Microsoft Imagine a.k.a Dreamspark.<p></p>\n				</td><td> Penyediaan fasilitas penyediaan perangkat lunak berlisensi resmi non-Office dari Microsoft bagi mahasiswa dan SDM Unpad. Alamatnya adalah <a href="http://informatika.unpad.ac.id/dreamspark/" target="_blank">http://informatika.unpad.ac.id/dreamspark/</a>.<br>\n				</td></tr>\n				<tr>\n				<td>2<p></p>\n				</td><td>Microsoft<p></p>\n				</td><td>Microsoft Certified Educator, Microsoft Technology Associate (MTA), dan Microsoft Office Specialist (MOS)<p></p>\n				</td><td> Penyediaan fasilitas pelatihan Computer Literacy, Office Excel, Jaringan Dasar dan Database. Informasi singkat dapat dilihat <a href="http://informatika.unpad.ac.id/new/ujian-sertifikai-kompetensi-microsoft/" target="_blank">disini</a>.<br>\n				</td></tr>\n				<tr>\n				<td>3<p></p>\n				</td><td>Oracle <p></p>\n				</td><td>Oracle Academy<p></p>\n				</td><td>Penyedia training resmi Oracle dengan pengajar berlisensi dalam bentuk <a href="http://informatika.unpad.ac.id/new/layanan-oracle-academy-di-universitas-padjadjaran/" target="_blank">Oracle Academy</a>.<p></p>\n				</td><td>\n				</td></tr>\n				<tr>\n				<td>4</td>\n				<td>L3i University of La Rochelle (ULR), La Rochelle, France</td>\n				<td>Ancient Manuscript Digitation and Indexation, funded with STIC ASIE EC, 2015 (2 years)</td>\n				<td>Research Collaboration, Post Graduate, Joint Publication, Joint Supervision, Visiting Professors, Student Exchange</td>\n				</tr>\n				<tr>\n				<td>5<p></p>\n				</td><td>Thomson Reuters<p></p>\n				</td><td>Scientific Business and Training Agreement<p></p>\n				</td><td>Bantuan perangkat lunak EndNote serta bahan-bahan untuk sosialisasi dan pelatihan penggunaannya.<br>\n				</td></tr>\n				<tr>\n				<td>6<p></p>\n				</td><td>University of Skovde Swedia<p></p>\n				</td><td>Scheme for Mobility and Exchange (SAME)<p></p>\n				</td><td>Lecture exchange, student exchange, research collaboration, joint supervisor, post graduate initiation<br>\n				</td></tr>\n				<tr>\n				<td>7<p></p>\n				</td><td>Institut Teknologi Bandung<p></p>\n				</td><td>Bebras: International Challenge on Informatics<br>\n				and Computational Thinking<p></p>\n				</td><td>Training and testing algorithms and computational thinking for competition<p></p>\n				</td></tr><tr>\n				<td>8<p></p>\n				</td><td>Universitas Pendidikan Ganesha (Undiksha)<p></p>\n				</td><td>AMADI Research<p></p>\n				</td><td>Ancient Manuscriot Research for ditization and Indexation<p></p>\n				</td></tr><tr>\n				<td>9<p></p>\n				</td><td>Cambodia Institute of Technology (CIT)<p></p>\n				</td><td>AMADI Research<p></p>\n				</td><td>Ancient Manuscriot Research for ditization and Indexation<br>\n				</td></tr>\n				<tr>\n				<td>10<p></p>\n				</td><td>Universitas Duissburg Essen (menunggu hasil)<p></p>\n				</td><td>Social Media Analytics Research<p></p>\n				</td><td>RISE dalam Skema Horizon 2020 Uni Eropa (proposed)<br>\n				</td></tr>\n				</tbody>\n				</table>'),
(49, 13, 1, '', 'Beikut adalah publikasi dari penelitan maupun seminar yang telah dilakukan oleh Dosen maupun mahasiswa Program Studi S1 FMIPA Universitas Padjadjaran.'),
(50, 13, 0, '2016', '<ol>\r\n					<li>Made Windu Antara Kesiman, Dona Valy, Jean-Christophe Burie, Erick Paulus, I Made Gede Sunarya, Setiawan Hadi, Kim Heng Sok, Jean-Marc Ogier. Asian Palm Leaf Manuscript Images: A New Challenge for Handwritten Text Line Segmentation Method. Published in Journal of Electronic Imaging (JEI) SPEI., 2016\r\n					</li>\r\n					<li>Harits Muhammad, R Sudrajat, Rudi Rosadi. Implementation of Data Mining in Analyzing Social Media Users Personality with Naive Bayes Classifier: A Case Study of Instagram Social Media, Published in IJCSI Journal, Volume 13, Issue 4, No 1, July 2016\r\n					</li>\r\n					<li>Evaluasi Aplikasi Semi-Immersive Virtual Reality pada Bidang Pendidikan Menurut Aspek Heuristik dan Pembelajaran, Jurnal Informatika dan Komputer (JIKO) STMIK AKAKOM, 2016\r\n					</li>\r\n					<li>Klasifikasi Newsgroup Menggunakan Vector Space Model dan K Nearest Neighbors, Jurnal Informatika UNPAD (JIN), 2016\r\n					</li>\r\n					<li>Pengaruh Ukuran Jendela Observasi Terhadap Kinerja Conditional Random Field pada Pengenalan Fase Gerak, Jurnal Informatika UNPAD (JIN), 2016\r\n					</li>\r\n					<li>Jean-Christophe Burie, Mickaël Coustaty, Setiawan Hadi, Made Windu Antara Kesiman, Jean-Marc Ogier, Erick Paulus, Kimheng Sok, I Made Gede Sunarya, Dona Valy. ICFHR2016 Competition on Analysis of Handwritten Text in Images of Balinese Palm Leaf Manuscripts. 15th Int. Conf. on Frontiers in Handwriting Recognition (ICFHR-2016) Proceedings 23-26, October 2016, Shanghai China\r\n					</li>\r\n					<li>Setiawan Hadi, Asep Sholahuddin, Lanny Rahmawati. The design and preliminary implementation of low-cost brain-computer interface for enable moving of rolling robot, International conference on Informatics and Computer (ICIC) Proceedings, 2016\r\n					</li>\r\n					<li>Mira Suryani, Ayi Muhammad Iqbal Nasuha, Setiawan Hadi. Sundanese Ancient Manuscript Retrieval System Comparison of Two Probability Approaches, International conference on Informatics and Computer (ICIC) Proceedings, 2016\r\n					</li>\r\n					<li>Ethnomathematics in Sundanese cultural perspective, Asian Mathematics Conference Poster, 2016\r\n					</li>\r\n					<li>Spatial data mining for evaluation standards of quality education in West Java using semiparametric geographical regression model, Asian Mathematics Conference Poster, 2016\r\n					</li>\r\n					<li>Data mining for classification naming of the village at Java island, Asian Mathematics Conference Proceedings, 2016\r\n					</li>\r\n					<li>Face recognition using moment invariant and neural network, Asian Mathematics Conference Poster, 2016\r\n					</li>\r\n				</ol>'),
(51, 13, 0, '2015', ''),
(52, 13, 0, '2014', '');

-- --------------------------------------------------------

--
-- Table structure for table `detaildosen`
--

CREATE TABLE `detaildosen` (
  `ID` int(11) NOT NULL,
  `IDDosen` int(11) NOT NULL,
  `IDCatagory` int(11) NOT NULL,
  `Isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detaildosen`
--

INSERT INTO `detaildosen` (`ID`, `IDDosen`, `IDCatagory`, `Isi`) VALUES
(1, 1, 1, 'Pengajar mata kuliah Interaksi Manusia & Komputer - Semester Genap 2016/2017'),
(2, 1, 2, 'Studi Indikator pendidikan di Indonesia 2004 (anggota peneliti), Survei Balitbang Depdiknas 2004-2005.'),
(3, 1, 1, 'Pengajar mata kuliah Etika Profesi -\r\n Semester Genap 2016/2017'),
(4, 1, 2, 'Studi Analisis Sebaran Kompetensi Guru 2004 (anggota peneliti, koordinator survey wilayah Lampung), Survei Balitbang Depdiknas 2004-2005'),
(5, 1, 2, 'Karakteristik reservoir minyak bumi melalui pendekatan spatio-temporal (Tim Teknis), Riset Unggulan XI 2004 - 2005.'),
(6, 1, 2, 'Pengolahan data CPNS provinsi Jawa Barat 2004 (Ketua Tim Pengolahan Data), Kerjasama UNPAD dengan Pemda provinsi Jawa Barat.'),
(7, 1, 2, 'Analisis data hasil Survei Dasar Pendidikan Nasional 2003 se Indonesia (Ketua Tim), Balitbang Depdiknas 2003'),
(8, 1, 2, 'Pengolahan data hasil Survei Dasar Pendidikan Nasional 2003 se Indonesia (Ketua Tim), Sensus data pendidikan Indonesia - Balitbang Depdiknas 2003.'),
(9, 1, 2, 'Ketua Tim Penelitian Hibah Bersaing/Unggulan Perguruan Tinggi berjudul “Sistem Pencitraan Dijital Pendeteksian Kanker Secara Visual Dan Implementasinya Pada Citra Biomedis”, 2013-2015 (3 tahun)'),
(10, 1, 2, 'Survei Dasar Pendidikan Nasional 2003 (Tim Inti Balitbang Depdiknas dan Sekretaris Wilayah provinsi Jawa Barat dan Banten), Sensus Data Pendidikan Indonesia, Balitbang Depdiknas 2003.'),
(11, 1, 2, 'Sistem Informasi Nasional Pendidikan Tinggi di 10 PTN Indonesia 1990-2001 (Ketua Tim sebagai Kepala Pusat Komputer UNPAD), Kerjasama PUSKOM UNPAD dengan Dikti 1990-2001.'),
(12, 2, 1, 'Pengajar mata kuliah Computer Vision dan Computer Graphics, Pengolahan Citra Digital, Metodologi Penelitian, pada program studi S-1 Teknik Informatika UNPAD tahun 2016'),
(13, 2, 1, 'Pengajar mata kuliah Computer Vision, Mobile Computing, dan Computer Graphics, pada program studi S-1 Teknik Informatika UNPAD tahun 2015'),
(14, 2, 1, 'Pengajar Mata Kuliah Sistem Operasi, Analisis Algoritma, Bahasa Pemrograman C/C++, Pascal, Sistem Tersebar, Sistem Keamanan Informasi, Pengolahan Citra, Grafika Komputer antara 1997 sampai dengan 2000'),
(15, 2, 1, 'Pengajar Mata Kuliah Grafika Komputer, Pengolahan Citra dan Visi Komputer di Program Diploma, Ekstensi dan S1 Reguler Jurusan Matematika FMIPA Universitas Padjadjaran, mulai tahun 2000'),
(16, 2, 1, 'Pengajar Mata Kuliah Interaksi Manusia dan Komputer mulai tahun semester genap 2009-2010'),
(17, 2, 1, 'Pengajar Mata Pemrograman Non Prosedural, Kecerdasan Buatan, 2011'),
(18, 2, 1, 'Pengajar Mata Kuliah dan pembimbing pada program S3 FMIPA UNPAD, 2008'),
(19, 2, 2, 'International Research Partner with L3I University of La Rochelle France, AMADI: Ancient Manuscript Digitation and Indexation, 2015-2017'),
(20, 2, 2, 'International Research Partner with L3I University of La Rochelle France, AMADI: Ancient Manuscript Digitation and Indexation, 2015-2017'),
(21, 2, 2, 'RISE-Social Media Analytics Research, Marie Sklodowska-Curie Action Program, HORIZON 2020 European Community, 2017-2021'),
(22, 2, 2, 'NANUM, Korean Government, 2014'),
(23, 2, 2, 'Program Mobility and Exchange SAME, University of Skovde Swedia, 2013'),
(24, 2, 2, 'Ketua Tim Penelitian Kerjasama Luar Negeri dan Publikasi Internasional berjudul Ancient Manuscript Digitization and Indexation, 2016-2018.'),
(25, 2, 2, 'Ketua Tim Penelitian Kerjasama Luar Negeri dan Publikasi Internasional berjudul Ancient Manuscript Digitization and Indexation, 2016-2018.'),
(26, 2, 2, 'Anggota tim penelitian PUPT Fakultas Psikologi, dengan judul penelitian: Pengembangan Alat Intervensi Kecemasan Sosial Implisit Approach-Avoidance Task, 2016.'),
(27, 2, 2, 'Anggota tim penelitian PUPT Fakultas Psikologi, dengan judul penelitian: Pengembangan Alat Intervensi Kecemasan Sosial Implisit Approach-Avoidance Task, 2016.'),
(28, 2, 2, 'Ketua Tim Penelitian Hibah Bersaing/Unggulan Perguruan Tinggi berjudul “Sistem Pencitraan Dijital Pendeteksian Kanker Secara Visual Dan Implementasinya Pada Citra Biomedis”, 2013-2015 (3 tahun)'),
(29, 2, 2, 'Ketua Tim Penelitian Hibah Bersaing/Unggulan Perguruan Tinggi berjudul “Sistem Pencitraan Dijital Pendeteksian Kanker Secara Visual Dan Implementasinya Pada Citra Biomedis”, 2013-2015 (3 tahun)'),
(30, 2, 2, 'Anggota Tim Academic Leadership Group (Prof. Asep K Supriatna) dan anggota Tim Academic Leadership Group (Prof. Wilis Sri Sayekti), 2015-2018'),
(31, 2, 2, 'Anggota Tim Academic Leadership Group (Prof. Asep K Supriatna) dan anggota Tim Academic Leadership Group (Prof. Wilis Sri Sayekti), 2015-2018'),
(32, 2, 2, 'Ketua Tim Penelitian Fundamental DIKTI, judul penelitian “Eksplorasi Metode Visi Komputer Baru Untuk Mengekstraksi Makna Semantik pada Citra Dijital, 2011.'),
(33, 2, 2, 'Ketua Tim Penelitian Fundamental DIKTI, judul penelitian “Eksplorasi Metode Visi Komputer Baru Untuk Mengekstraksi Makna Semantik pada Citra Dijital, 2011.'),
(34, 2, 2, 'Anggota tim penelitian Hibah Strategis Nasional 2009, judul penelitian “Optimasi Lahan Panen di Kabupaten Bandung Barat“.'),
(35, 2, 2, 'Anggota tim penelitian Hibah Strategis Nasional 2009, judul penelitian “Optimasi Lahan Panen di Kabupaten Bandung Barat“.'),
(36, 2, 2, 'Riset Doktoral Program Studi Informatika ITB, sejak 2003 sampai 2008, bidang penelitian Pendeteksian Wajah.'),
(37, 2, 2, 'Ketua Tim Peneliti PHK A2 Jurusan Matematika FMIPA UNPAD tahun 2006, judul penelitian “Pemanfaatan Informasi Warna Kulit Untuk Pendeteksian Wajah pada Citra Dijital”.'),
(38, 2, 2, 'Anggota Tim Peneliti PHK A2 Jurusan Matematika FMIPA UNPAD tahun 2007, judul penelitian “Intelejensia Buatan untuk Pendeteksian Jenis Gas”.'),
(39, 2, 2, 'Anggota Peneliti Tim Hibah Pasca Sarjana Institut Teknologi Bandung, 2006 dan 2007, judul penelitian “Kerangka Kerja Cerdas untuk Pemahaman Citra Dijital”.'),
(40, 2, 4, 'Tim Reviewer Beasiswa LPDP, sejak 2016'),
(41, 2, 4, 'Reviewer Jurnal Informatika Universitas Padjadjaran, sejak 2016'),
(42, 2, 4, 'Tim Evaluator Program Studi Baru, sejak 2016'),
(43, 2, 4, 'Tim Evaluasi Kinerja Akademik (EKA) KEMENRISTEKDIKTI, 2015'),
(44, 2, 4, 'Analis dan nara sumber dalam tim adhoc sistem informasi Unpad, 2015'),
(45, 2, 4, 'Asesor Sertifikasi Dosen Nasional, sejak 2011'),
(46, 2, 4, 'Reviewer Journal Of Information and Communication Technology Research and Application (JICTRA), sejak 2012'),
(47, 2, 4, 'Reviewer International Journal Of International Journal on Electrical Engineering and Informatics, sejak 2014'),
(48, 2, 4, 'Asesor BAN-PT Program Sarjana dan Diploma, sejak 2010'),
(49, 2, 4, 'Anggota tim dan nara sumber pengembangan sistem administrasi akademik UNPAD (SIAT), 2010'),
(50, 2, 4, 'Anggota tim Monitoring dan Evaluasi (MONEV) Program Hibah Kompetisi A2 Jurusan Matematika UNPAD, 2005, 2006, 2007'),
(51, 2, 4, 'Anggota tim Monitoring dan Evaluasi (MONEV) Internal Universitas Padjadjaran UNPAD, 2006, 2007'),
(52, 2, 4, 'Anggota tim Borang Program Diploma FMIPA Universitas Padjadjaran, 2006'),
(53, 2, 4, 'Anggota Tim Survey Balitbang DIKNAS untuk Survey Dasar Pendidikan Nasional, Survey Bantuan Operasional Sekolah, dan Survey ICT di Pendidikan Dasar dan Menengah'),
(54, 2, 4, 'Anggota Tim Penerimaan CPNS Wilayah Jawa Barat, Banten dan Departemen PU, Kominfo dan Perindustrian tahun penerimaan 2006'),
(55, 2, 4, 'Anggota Tim Data dan Evaluasi Seleksi Masuk Universitas Padjadjaran (SMUP) Program S1 Universitas Padjadjaran Tahun 2007'),
(56, 2, 4, 'Kepala Bagian Penelitian dan Pengembangan Centre of Communication and Information Technology (CCIT) Universitas Padjadjaran, 2006, 2007'),
(57, 2, 4, 'Kepala Laboratorium Teknologi Informasi Program Ekstensi (Kelas khusus) Ilmu Komputer UNPAD, 2005 -2007'),
(58, 2, 4, 'Instruktur Pelatihan Peningkatan Kemampuan Penelusuran Pustaka Ilmiah dan Penulisan Karya Ilmiah, Program A2 PHK Jurusan Matematika FMIPA UNPAD, 2007'),
(59, 2, 4, 'Ketua Tim Data dan Evaluasi Seleksi Masuk Universitas Padjadjaran (SMUP) Program S1 Ekstensi UNPAD Tahun 2002, 2003, 2004, 2005, 2006, 2007, Menggunakan DMR (Digital Mark Reader), Web dan SMS Server (tim)'),
(60, 2, 4, 'Ketua program studi Teknik Informatika Program Diploma III FMIPA Universitas Padjadjaran, 2006, 2007'),
(61, 2, 4, 'Panitia Penilai Sertifikasi Dosen Jurusan Matematika, tahun 2009, 2010'),
(62, 2, 4, 'Panitia Pemeriksaan Pengadaan Barang Universitas Padjadjaran tahun 2009'),
(63, 2, 4, 'Editor pada jurnal Matematika Integratif mulai tahun 2001'),
(64, 2, 4, 'Mitra Bestari pada Jurnal DiSainTek'),
(65, 5, 2, 'Penelitian Hibah Bersaing dengan judul Pembuatan model matematika dan software untuk menghitung tingkat vaksinasi, 2014.'),
(66, 6, 1, 'Pengajar mata kuliah Organisasi dan Arsitektur Komputer , pada program studi S-1 Teknik Informatika dan Matematika UNPAD tahun 2007-2015'),
(67, 6, 1, 'Pengajar mata kuliah Proses Paralel, pada program studi S-1 Matematika UNPAD tahun 2010 – 2012'),
(68, 6, 1, 'Pengajar Mata Kuliah Komputasi Matematika, pada program studi S-1 Matematika UNPAD tahun 2007 – 2012'),
(69, 6, 1, 'Pengajar Mata Kuliah Metoda Numerik, pada program studi S-1 Teknik Informatika dan Matematika UNPAD tahun 2010-2015'),
(70, 6, 1, 'Pengajar Mata Kuliah Logika Informatika, pada program studi S-1 Teknik Informatika UNPAD tahun 2015 hingga kini'),
(71, 6, 2, 'Anggota Tim Penelitian FMIPA Unpad yang berjudul Deteksi Skeleton sebagai sign signal social, 2016-2018'),
(72, 6, 2, 'Ketua tim penelitian Hibah Mandiri, dengan judul penelitian: Pemrograman Linier Dengan Kendala Fuzzy Untuk Optimisasi Produksi, 2009.'),
(73, 6, 2, 'Anggota Tim Penelitian PHK-A2 Jurusan Matematika FMIPA-Unpad. berjudul Magang Penelitian Bidang Matematika Terapan. 2006.'),
(74, 6, 2, 'Pemrograman Linier Dengan Kendala Fuzzy Untuk Optimisasi Produksi, Seminar Nasional Matematika 2010, Dept Matematika UI, 6 Feb 2010'),
(75, 6, 2, 'Algoritma Perubahan Pemrograman Linier Klasik Menjadi Pemrograman Linier Fuzzy Konferensi Nasional Matematika XV, UNIMA Manado, 30 Juni – 3 Juli 2010.'),
(76, 6, 2, 'Identifikasi Kualitas Buah Strawberry Menggunakan Metoda Image Moments dan Bounding Box Seminar Nasional Matematika dan Pendidikan Matema-tika, Jur. Matematika Unpad, 2 Juli 2011.'),
(77, 6, 2, 'Sistem Penerjemah Sandi Semaphore dengan Sensor Kinect Sebagai Media Pmbelajaran Seminar Nasional Teknologi Informasi XII Untar, Jakarta 31 Oktober 2015.'),
(78, 6, 2, 'Deteksi Penyakit Kanker Payudara Menggunakan Bayesian Network Konferensi Nasional Matematika XVII, ITS Surabaya, 30 Juni – 3 Juli 2014.'),
(79, 6, 2, 'Sistem Cerdas Pendeteksi kerusakan mesin Diesel Konferensi Nasional Matematika XVI, Unpad Bandung, 30 Juni – 3 Juli 2012.'),
(80, 6, 3, 'Instruktur Pelatihan Komputer Tingkat Dasar “MS Word, Exel, dan Internet”, 22 Okt 2011.'),
(81, 6, 3, 'Wakil Ketua Panitia Seminar Nasional Matematika Unpad-UI, 1-4 Jul 2011.'),
(82, 6, 3, 'Instruktur Pelatihan Jaringan Komputer kepada Guru-guru SMK YP Geusan Ulun Sumedang, 26 Mar 2010.'),
(83, 6, 3, 'Instruktur Diklat Fungsional Teknikal Khusus Bidang Informatika di PT. Kereta Api Indonesia, 7 Jun – 9 Jul 2010.'),
(84, 7, 1, 'Pengajar mata kuliah Pemrograman Komputer, Analisis Algoritma, Pengenalan Teknologi Informasi, Struktur Data & Algoritma, dan Basis Data, pada program studi S-1 Matematika UNPAD tahun 2005-2010'),
(85, 7, 1, 'Pengajar mata kuliah Struktur Data pada program studi D-3 Teknik Informatika UNPAD tahun 2008-2010'),
(86, 7, 2, 'Ketua Tim Penelitian Swadana dengan judul Teknik Komputasi Model Matematika Kolam Ikan Tertutup, 2012.'),
(87, 7, 2, 'Ketua Tim Penelitian Swadana dengan judul Enkripsi dan Dekripsi Data menggunakan Aplikasi 3DES, 2011.'),
(88, 7, 2, 'Anggota Tim Penelitian Litmud DIK Unpad dengan judul Perhitungan Premi Tunggal Bersih dengan data Kohort Kabupaten Tasikmalaya, 2010.'),
(89, 7, 2, 'Ketua Tim Penelitian Mandiri dengan judul Pemanfaatan Memory ekstra Untuk Optimisasi Join Query menggunakan Metode Hybrid Hash Join, 2009.'),
(90, 7, 2, 'Anggota Tim penelitian Eksploitasi Optimal Sumber Alam Kelautan Sebuah Kajian Teoritis, Dana DIK Unpad Tahun Anggaran 1999/2000 No: 060/23/1999, 2000.'),
(91, 7, 2, 'Model Matematika Untuk Optimisasi Kolam Ikan Pekarangan, Jurusan Matematika Unpad dan IndoMS, 2012.'),
(92, 7, 2, 'Analisis Klasifikasi Data Mining dengan Membandingkan Agoritma C4.5 dan ID3, Jurusan Matematika Unpad Departemen Matematika UI , 2011.'),
(93, 7, 2, 'Analisis Operasi Divisi pada Basis Data Relasional, Jurusan Matematika Unpad Departemen Matematika UI , 2011.'),
(94, 7, 2, 'Pemanfaatan Memory Ekstra Untuk Optimisasi Join Query menggunakan Metode Hybrid Hash Join, Departemen Matematika UI – Jurusan Matematika Unpad, 2010.'),
(95, 7, 2, 'Analisis Optimisasi Formula Distributed Query dalam Basis Data Relasional, Jurusan Matematika Unpad- Departemen Matematika-UI, 2008.'),
(96, 7, 2, 'Analisis Optimisasi Query dalam Database Terdistribusi, Himpunan Matematika Indonesia, 2005.'),
(97, 7, 3, 'Penyuluhan/Tutorial Pendidikan Guru Sekolah Dasar (PGSD), Kabupaten Karawang, 2011.'),
(98, 7, 3, 'Penyuluhan/Tutorial Pendidikan Guru Sekolah Dasar (PGSD), Kabupaten Cirebon, 2010.'),
(99, 7, 3, 'Motivator dan Orang Tua Asuh untuk Peduli Anak Asuh Sekolah tingkat Fakultas, Fakultas MIPA UNPAD, 2009.'),
(100, 7, 3, 'Pengawas Yayasan Sosial dan Pendidikan Islam ” Atta’awun Sugih Sentosa”, Kabupaten Bandung, 2009.'),
(101, 7, 3, 'Penyuluhan/Tutorial Pendidikan Guru Sekolah Dasar (PGSD), Kabupaten Cirebon, 2009.'),
(102, 7, 3, 'Penyuluhan/Tutorial Pendidikan Guru Sekolah Dasar (PGSD), Kabupaten Tasikmalaya, 2009.'),
(103, 7, 3, 'Penyuluhan/Tutorial Pendidikan Guru Sekolah Dasar (PGSD), Kabupaten Kuningan, 2008.'),
(104, 7, 3, 'Penyuluhan/Tutorial Pendidikan Guru Sekolah Dasar (PGSD), Kabupaten Indramayu, 2007.'),
(105, 7, 3, 'Pelatihan Komputer DHARMA WANITA PROVINSI JAWA BARAT, Laboratorium Komputer D III FMIPA UNPAD Bandung, 1996.'),
(106, 7, 3, 'Pembimbing Mahasiswa KKN Unpad, Kec. Paseh (2) Kab. Bandung, 1996.'),
(107, 7, 3, 'Pelatihan Komputer Putra/Putri anggota Unit Dharma Wanita tk. Propinsi Jawa Barat, Laboratorium Komputer D III FMIPA UNPAD Bandung, 1995.'),
(108, 7, 3, 'Pembimbing Mahasiswa KKN Unpad, Kec. Salawu Kab. Tasikmalaya, 1995.'),
(109, 7, 3, 'Instruktur Pelatihan Komputer Tingkat Dasar bagi Dharma Wanita Tk. Propinsi Jawa Barat, Laboratorium Komputer D III FMIPA UNPAD Bandung, 1995.'),
(110, 7, 3, 'Pelatihan Komputer untuk Masyarakat di Wilayah Kecamatan Cikeruh Kabupaten Sumedang Propinsi Jawa Barat, Laboratorium Komputer Jurusan Matematika FMIPA UNPAD, 1995.'),
(111, 7, 3, 'Instruktur dan Panitia Pelatihan Komputer Tingkat Dasar bagi Para Pegawai di Lingkungan Pemerintah Daerah Kab. Sumedang Propinsi Jawa Barat, Laboratorium Komputer Jurusan Matematika FMIPA UNPAD, 1995.'),
(112, 7, 3, 'Panitia Pelatihan dan Pemahaman Komputer Wordstar Bagi Pegawai Administratif FMIPA UNPAD, Laboratorium FMIPA UNPAD, 1994.'),
(113, 7, 4, 'Reviewer Buku Teks Pelajaran Teknologi Informasi dan Komunikasi SMP dan SMA, Badan Standar Nasional Pendidikan (BSNP), 2009.'),
(114, 7, 4, 'Pendamping Wirausaha pada Kegiatan Program Wirausaha Mahasiswa Unpad 2009.'),
(115, 7, 4, 'Pendamping pada Prosesi Penerimaan Mahasiswa Baru 2009.'),
(116, 7, 4, 'Ketua Pelaksana Pelatihan Kreatifitas dan entrepreneur Kemahasiswaan, Kampus FMIPA Unpad Bandung, 2009.'),
(117, 7, 4, 'Ketua Pelaksana Pemilihan Mahasiswa Berprestasi program Diploma III, Kampus FMIPA Unpad Bandung, 2009.'),
(118, 7, 4, 'Pembimbing Pekan Ilmiah Mahasiswa Daerah III Jawa Barat, Kampus IKIP Bandung, 1997.'),
(119, 8, 1, 'Analisis Kombinatorik pada program Studi S-1 Matematika FMIPA Unpad 2008-2011'),
(120, 8, 1, 'Sistem Operasi pada program Studi S-1 Matematika FMIPA Unpad 2003-2011'),
(121, 8, 1, 'Struktur Data dan Algoritma pada program Studi S-1 Matematika FMIPA Unpad 2003-2011'),
(122, 8, 1, 'Organisasi Komputer pada program Studi S-1 Matematika FMIPA Unpad 1999-2004'),
(123, 8, 1, 'Pemrograman Komputer pada program Studi S-1 Matematika FMIPA Unpad 1998-2004'),
(124, 8, 2, 'Ketua Tim Penelitian Swakelola FMIPA Unpad dengan judul Pewarnaan Backbone pada Graf Backbone Segitiga (Akmal, Diane Amor Kusuma), 2011.'),
(125, 8, 2, 'Anggota Tim Penelitian Litmud, DIPA Unpad dengan judul Model Penangkapan Ikan Kerapu di Pantai Selatan TasikMalaya: Kajian Terhadap Model Pertumbuhan Logistik dan Model Gompertz (Nurul Gusriani, Nursanti Anggriani, Akmal), 2010.'),
(126, 8, 2, 'Ketua Tim Penelitian Hibah Penelitian Fakultas MIPA Unpad dengan judul Pemanfaatan Magic Graph pada Optimisasi Pengalamatan Jaringan Komputer (Akmal), 2009.'),
(127, 8, 2, 'Anggota Tim Penelitian Peneliti Muda DIPA Unpad dengan judul Membangun Sebuah Permukaan yang Memiliki Nilai Energi Minimum (Endang Rusyaman, Akmal, Kankan Parmikanti), 2009.'),
(128, 8, 2, 'Anggota Tim Penelitian Hibah Penelitian Strategis Nasional dengan judul Pengembangan Model Penentuan Daya Tampung Mahasiswa dan Prototipe DSS (Decision Support System) dalam kaitan antara Desentralisasi Perguruan Tinggi dengan Indikator Kinerja Kunci Dikti (Iwan Hastiawan, Akmal, Agus Muhtarom), 2009.'),
(129, 8, 2, 'Anggota Tim Penelitian Hibah Kompetensi dengan judul Mathematical Approach of Epidemiogical Problems(Asep K. Supriatna, Nursanti Anggriani, Akmal, Nurul Gusriani), 2008-2010.'),
(130, 8, 2, 'Ketua Tim Penelitian Litmud Unpad, DIPA Unpad dengan judul Pengembangan Model Penjadwalan Kuliah di Jurusan Matematika FMIPA Unpad dengan Menggunakan Metoda Algoritma Genetika(Akmal, Monika Hidayanti, Nursanti Anggriani), 2007.'),
(131, 8, 2, 'Anggota Tim Penelitian A2 Matematika dengan judul Pemanfaatan Informasi Warna Kulit untuk Pendeteksian Wajah pada Citra Digital, 2006.'),
(132, 8, 2, 'Anggota Tim Penelitian A2 Matematika dengan judul Hidden Markov Model dan Penggunaannya pada Pengenalan Suara, 2006.'),
(133, 8, 2, 'Anggota Tim Penelitian A2 Matematika dengan judul Desain Kontrol Sub-Optimal melalui Linear Matrix Inequalities pada Sistem Motor Generator Listrik, 2005.'),
(134, 8, 2, 'Jurnal Matematika Integratif, Vol 7, No. 1, April 2008,Hal 43-54, ISSN 1412-6184, Multikolinearitas pada Analisis Regresi: Kajian Terhadap Metoda Komponen Utama, Metoda Kuadrat Terkecil Parsial, dan Metoda Ridge dengan Penduga Bayes.'),
(135, 8, 2, 'Prosiding Seminar Nasional Matematika dan Pendidikan Matematika 2006, UNY, Yogyakarta, 24 November 2006, Hal 201-214, ISSN 978-979-16353-9-1, Hidden Markov Model.'),
(136, 8, 2, 'Jurnal Matematika Integratif, vol 4. 2006, Desain Kontrol Sub-Optimal melalui Linear Matrix Inequalities pada Sistem Motor Generator Listrik.'),
(137, 8, 2, 'Jurnal Matematika Integratif vol. 3, no. 1, April 2004, Titik Hilang Pada Interpretasi Citra Jalan.'),
(138, 8, 2, 'Bilangan Kromatik ?-Backbone Pada Graf Menggunakan Backbone Segitiga, Semnas Jurusan Matematika FMIPA Unpad - UI, 2011.'),
(139, 8, 2, 'Pemanfaatan Magic Graph pada Optimisasi Pengalamatan Jaringan Komputer, Semnas Matematika, Departemen Matematika Universitas Indonesia, 2010.'),
(140, 8, 2, 'Algoritma Metode Interpolasi Untuk meminimumkan Integral Kurvatur, Semnas Jurusan Matematika FMIPA Unpad, 2008.'),
(141, 8, 2, 'Rekonstruksi citra dengan Invers Hough Transform berbasis windows, Seminar Nasional Matematika di UI Depok, 2005.'),
(142, 8, 2, 'Interpretasi jalan dengan metode komputasi geometri proyektif, Seminar Nasional Matematika Jurusan Matematika FMIPA UNPAD, 2003.'),
(143, 8, 3, 'Orang Tua Asuh, Fakultas MIPA Unpad, 2011.'),
(144, 8, 3, 'Instruktur pada Workshop Pembina Olimpiade matematika Tingkat SMA (SMA Islam berasrama dan Pondok Pesantren), Kanwil Kementrian Agama Jabar dan SMA Pesantren Unggul Al-Bayan, Sukabumi, 2010.'),
(145, 8, 3, 'Instruktur pada Program Pelatihan Guru SMP Bidang Matematika (Olimpiade), Fakultas MIPA Unpad dan Direktorat Pendidikan Luar Biasa, 2010.'),
(146, 8, 4, 'Tim Pengolahan Data Survei Dasar Pendidikan Nasional 2003, Unpad, 2003.'),
(147, 8, 4, 'Instruktur Pelatihan Pemrograman Website 2002, Unpad, 2002.'),
(148, 9, 1, 'Basis Data (Prodi S1Matematika, Prodi D3 Manajemen Informatika-Sem. Ganjil)'),
(149, 9, 1, 'Pemrograman Berbasis Objek (Prodi S1 Teknik Informatika-Sem.Ganjil)'),
(150, 9, 1, 'Pemrograman 4 -Mobile Programming (Prodi D3 Manajemen Informatika-Sem.Genap)'),
(151, 9, 1, 'Pemrograman Komputer (Prodi S1 Matematika-Sem. Genap)'),
(152, 9, 2, 'Pengembangan Arboretum-Unpad sebagai Upaya Pemberdayaan Ekonomi Mandiri dan Pemanfaatan Sumber Daya lingkungan Kampus melalui Program Edukasi Lingkungan yang Berkelanjutan, Program Penelitian Ipteks Bagi Inovasi Dan Kreativitas Kampus (Tahun ketiga), DIKTI 2013, sebagai Anggota Peneliti'),
(153, 9, 2, 'Pengembangan Aplikasi Ensiklopedia Kebudayaan Sunda Berbasis Android Studi Kasus Kabupaten Sumedang, Penelitian PPM Produktif, Universitas Padjadjaran, 2012, sebagai Ketua Peneliti'),
(154, 9, 2, 'Prototipe Aplikasi Informasi Layanan Kesehatan berbasis Facility Location, Penelitian Swadana, Jurusan Matematika FMIPA Unpad, 2012 sebagai Ketua Peneliti'),
(155, 9, 3, 'Membangun aplikasi Emergency Capacity Buliding-Joint Need Assessment (ECB-JNA Project) berkolaborasi dengan NGO Save the Children dan konsorsium ECB Indonesia, 2012-2013'),
(156, 9, 4, 'Membangun kerjasama dengan Nokia melalui program pelatihan dan perlombaan, 2012'),
(157, 9, 4, 'Membangun kerjasama dengan Mircosoft melalui program pelatihan, magang dan perlombaan, 2013'),
(158, 11, 2, 'Pengembangan Aplikasi Fuzzy C-Means Clustering Untuk Mengelompokkan Data Kinerja Akademik Mahasiswa Unpad, DIPA BLU, 2016.'),
(159, 11, 2, 'Sistem pencitraan dijital pendeteksian kanker secara visual dan implementasinya pada citra biomedis (Tahun2), DIPA BLU, 2014.'),
(160, 11, 2, 'Sistem pencitraan dijital pendeteksian kanker secara visual dan implementasinya pada citra biomedis (Tahun1), DIPA BLU, 2013.'),
(161, 11, 2, 'Pengembangan sistem informasi berbasis web untuk berbagai jenis tumbuhan di lokasi arboretum, DIPA BLU, 2012.'),
(162, 11, 2, 'Implementasi Basis Data Spasial Dalam Penyebaran Potensi Desa Di Kabupaten Bandung, Penelitian Mandiri, 2011.'),
(163, 11, 2, 'Aplikasi Metode Moment Invariant Pada Kedefikasi Jenis Wajah Untuk Menentukan Sidik Wajah Seseorang, DIPA BLU, 2011.'),
(164, 11, 2, 'Sistem Keamanan Ruangan Berdasarkan Pengenalan Wajah Berbasis Kamera Menggunakan Model Jaringan Syaraf Tiruan, DIPA BLU, 2010.'),
(165, 11, 2, 'Pengembangan Aplikasi Spatial Data Mining Menggunakan Spatial Autoregressive (Sar) Dan Spatial Expantion(E-Sar) Untuk Pemetaan Mutu Pendidikan Di Provinsi Jawa Tengah, Penelitian Mandiri, 2010.'),
(166, 11, 2, 'Pengembangan Aplikasi Spatial Data Mining Menggunakan Spatial Autoregressive (Sar) Dan Spatial Expantion(E-Sar) Untuk Pemetaan Mutu Pendidikan Di Provinsi Jawa Timur, Penelitian Mandiri, 2010.');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `ID` int(11) NOT NULL,
  `Nama` text NOT NULL,
  `Email` text,
  `HP` text,
  `Telp` text,
  `Alamat` text,
  `Pendidikan` text NOT NULL,
  `Bidang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`ID`, `Nama`, `Email`, `HP`, `Telp`, `Alamat`, `Pendidikan`, `Bidang`) VALUES
(1, 'Dr. Atje Setiawan A.,MS, M.Kom', 'atje.setiawan@unpad.ac.id', NULL, '62-22-7798983', 'Gedung D PPBS Ruang GLB 2.1\r\n', 'S3: Ilmu Komputer UGM, 2009\r\nS2: Ilmu Komputer UGM, 2002\r\nS2: Teknik Industri ITB, 1991\r\nS1: Matematika UNPAD, 1990', 'Data Mining, Decision Support Systems, Knowledge Engineering'),
(2, 'Dr. Setiawan Hadi, M.Sc.CS.', 'setiawanhadi@unpad.ac.id', '081-22323328', '62-22-7798983', 'Gedung D PPBS Ruang GLB 2.1', 'S3: Informatika ITB, 2008\r\nS2: Computer Science, UNB Canada, 1996\r\nS1: Matematika UNPAD, 1991\r\nS0: PAT Diploma III ITB, 1983', 'Computer Vision, Image Processing, Computer Graphics and Visualization'),
(3, 'Drs. Akik Hidayat, M.Kom', 'akik.hidayat@unpad.ac.id\r\n', NULL, '62-22-7798983\r\n', 'Gedung D PPBS Ruang GLB 2.1\r\n', 'S2: Ilmu Komputer UGM, 2004\r\nS1: Matematika UNPAD, 1985', 'Computational Mathematics, Cryptography'),
(4, 'Dr. Juli Rejito, M.Kom', 'juli.rejito@unpad.ac.id', NULL, '62-22-7798983', 'Gedung D PPBS Ruang GLB 2.1', 'S3: Ilmu Komputer UGM\r\nS2: Ilmu Komputer UGM\r\nS1: Matematika UNPAD', 'Database, Image Retrieval, Knowledge Engineering'),
(5, 'Dr. Asep Sholahuddin, MT', 'a_sholahuddin@unpad.ac.id', NULL, '62-22-7798983', 'Gedung D PPBS Ruang GLB 2.1', 'S3: MIPA Unpad Bidang Minat Ilmu Komputer, 2012\r\nS2: Informatika ITB\r\nS1: Matematika UNPAD', 'Robotics, Artificial Intelligence, Microcontroller'),
(6, 'Drs. Ino Suryana, M.Kom', NULL, NULL, '62-22-7798983', 'Gedung D PPBS Ruang GLB 2.1', 'S2: Ilmu Komputer UI\r\nS1: Matematika UNPAD', 'Computational Mathematics, High Performance Computing, Computer Architecture'),
(7, 'Drs. R. Sudrajat, M.Kom', 'r_sudrajat@unpad.ac.id', NULL, '62-22-7798983', 'Gedung D PPBS Ruang GLB 2.1', 'S3: Ilmu Komputer UGM\r\nS2: Ilmu Komputer IPB\r\nS1: Matematika UNPAD', 'Algorithms Optimization, Database, Bioinformatics'),
(8, 'Akmal, S.Si., MT', 'akmal@unpad.ac.id', '08122461048', '62-22-7798983', 'Gedung D PPBS Ruang GLB 2.1', 'S2: Informatika ITB\r\nS1: Matematika UNPAD', 'Graph and Combinatorics, Data Structure, Operating System'),
(9, 'Erick Paulus, M.Kom', 'erick_paulus@yahoo.com ; erick.paulus@unpad.ac.id', '6281802798853', '62-22-7798983', 'Gedung D PPBS Ruang GLB 2.1', 'S2: Ilmu Komputer UGM\r\nS1: Matematika UNPAD', 'Mobile Programming, Cloud Computing, Mathematics Programming'),
(10, 'Deni Setiana,S.Si., M.CS', 'deni@unpad.ac.id', NULL, '62-22-7798983', 'Gedung D PPBS Ruang GLB 2.1', 'S2: Ilmu Komputer UGM\r\nS1: Matematika UNPAD', 'Advanced Networking, Distribution Systems, Information Security'),
(11, 'Rudi Rosadi, S.Si., M.Kom.', 'rudi.rosadi@unpad.ac.id', NULL, '62-22-7798983', 'Gedung D PPBS Ruang GLB 2.1', 'S2: Ilmu Komputer UGM\r\nS1: Matematika UNPAD', 'Knowledge Engineering, Web Design and Programming, Mobile Image Processing'),
(12, 'Intan Nurma Yulita, M.T.', 'intan.nurma@unpad.ac.id', NULL, '62-22-7798983', 'Gedung D PPBS Ruang GLB 2.1', 'S2: Telkom University\r\nS1: Telkom University', 'Data Mining, Computational Science, Imaging Science'),
(13, 'Aditya Pradana, M.Eng.', 'aditya.pradana@unpad.ac.id', NULL, '62-22-7798983', 'Gedung D PPBS Ruang GLB 2.1', 'S2: Universitas Gadjah Mada\r\nS1: Universitas Kristen Maranatha', 'Networking, Data Communication, Hardware and Infrastructure, Web Design and Mobile Programming'),
(14, 'Mira Suryani, S.Pd, M.Kom.', 'mira.suryani@unpad.ac.id', NULL, '62-22-7798983', 'Gedung D PPBS Ruang GLB 2.1', 'S2: Universitas Indonesia\r\nS1: Universitas Pendidikan Indonesia', 'Multimedia, Learning Management, Image Processing');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `ID` int(11) NOT NULL,
  `TagPost` int(11) NOT NULL,
  `Utama` tinyint(1) NOT NULL,
  `caption` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`ID`, `TagPost`, `Utama`, `caption`) VALUES
(1, 1, 0, NULL),
(2, 1, 0, NULL),
(4, 1, 0, NULL),
(7, 1, 0, NULL),
(11, 1, 0, NULL),
(16, 1, 0, NULL),
(17, 2, 0, NULL),
(18, 2, 0, NULL),
(20, 2, 0, NULL),
(23, 2, 0, NULL),
(27, 2, 0, NULL),
(32, 2, 0, NULL),
(38, 2, 0, NULL),
(45, 2, 0, NULL),
(46, 3, 0, NULL),
(47, 3, 0, NULL),
(49, 3, 0, NULL),
(50, 4, 0, NULL),
(51, 4, 0, NULL),
(53, 4, 0, NULL),
(56, 4, 0, NULL),
(60, 4, 0, NULL),
(61, 5, 0, NULL),
(62, 5, 0, NULL),
(64, 5, 0, NULL),
(67, 5, 0, NULL),
(68, 6, 0, NULL),
(69, 6, 0, NULL),
(71, 6, 0, NULL),
(74, 6, 0, NULL),
(78, 6, 0, NULL),
(83, 6, 0, NULL),
(84, 7, 0, NULL),
(85, 7, 0, NULL),
(87, 7, 0, NULL),
(90, 7, 0, NULL),
(94, 7, 0, NULL),
(99, 7, 0, NULL),
(100, 8, 0, NULL),
(101, 8, 0, NULL),
(103, 8, 0, NULL),
(104, 9, 0, NULL),
(105, 9, 0, NULL),
(107, 9, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lulusan`
--

CREATE TABLE `lulusan` (
  `ID` int(11) NOT NULL,
  `Nama` text NOT NULL,
  `Pembimbing1` int(11) DEFAULT NULL,
  `Pembimbing2` int(11) DEFAULT NULL,
  `Penguji1` int(11) DEFAULT NULL,
  `Penguji2` int(11) DEFAULT NULL,
  `Penguji3` int(11) DEFAULT NULL,
  `TanggalLulus` date NOT NULL,
  `Judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lulusan`
--

INSERT INTO `lulusan` (`ID`, `Nama`, `Pembimbing1`, `Pembimbing2`, `Penguji1`, `Penguji2`, `Penguji3`, `TanggalLulus`, `Judul`) VALUES
(1, 'Jordy Saragih, S.Kom.', 1, 4, NULL, NULL, NULL, '2016-01-08', 'Sistem Informasi Persediaan Barang Berbasis Web dan Sistem Monitoring Berbasis Mobile pada Perusahaan Distribusi'),
(2, 'Faishal Wahiduddin, S.Kom.', 2, 10, NULL, NULL, NULL, '2016-06-22', 'Pemanfaatan Kartu Tanda Penduduk Elektronik sebagai Alternatif Otentikasi (Studi Kasus Pada Sistem PAUS ID di Universitas Padjadjaran)'),
(3, 'Harits Muhammad, S.Kom.', 7, 11, NULL, NULL, NULL, '2016-06-22', 'Penerapan Data Mining dalam Menganlisis Kepribadian Pengguna Media SOsial Dengan Naive Baye Classifier: Studi Kasus Media Sosial Instagram'),
(4, 'Riva Farabi, S.Kom.', 3, 9, NULL, NULL, NULL, '2016-06-22', 'Implementasi Simulasi Wisata Shark Cage Diving Dengan Perangkat Virtual Reality Google Cardboard Menggunakan Game Engine Unity 3D'),
(5, 'Deisna Rahmaningtyas, S.Kom.', 2, 8, NULL, NULL, NULL, '2016-08-11', 'Analisis Perbandingan Metode Binerisasi Terhadap Citra Naskah Lontar Sunda Kuno'),
(6, 'M. Raditya Putra, S.Kom.', 5, 11, NULL, NULL, NULL, '2016-08-11', 'Aplikasi Steganografi Suara Menggunakan Metode Phase Coding'),
(7, 'Billal M. Hadian, S.Kom.', 9, 10, NULL, NULL, NULL, '2016-08-11', 'Network Behavior Anomaly Detection (Studi Kasus di Gedung D PPBS Universitas Padjadjaran)'),
(8, 'Luqman Adibiarso, S.Kom.', 1, 4, NULL, NULL, NULL, '2016-10-15', 'Pengembangan Aplikasi Temporal Data Mining Prediksi Curah Hujan Berbasis PHP dan MySQL Menggunakan Model Autoregressive di Propinsi Jawa Barat'),
(9, 'Indah Maulidia Turrohmah, S.Kom.', 7, 5, NULL, NULL, NULL, '2016-12-07', 'Program Aplikasi Pengenalan Plat Nomor Kendaraan Mobil Menggunakan Template Matching Pada Sistem Informasi Parkir'),
(10, 'Izzan Latryana O, S.Kom.', 6, 11, NULL, NULL, NULL, '2016-12-07', 'Analisis Jaringan Komputer Untuk Mendapatkan Informasi Perilaku Pengguna Jaringan Studi Kasus Gedung D PPBS Jatinangor'),
(11, 'Muhammad Miftah Al Rasyid, S.Kom.', 6, 2, NULL, NULL, NULL, '2017-01-11', 'Rancang Bangun Aplikasi Penyisipan Pesan Ke Dalam Gambar Menggunakan Teknik Steganografi Dengan Metode Enhance LSB'),
(12, 'Benarivo Triadi Putra, S.Kom.', 4, 10, NULL, NULL, NULL, '2017-01-11', 'Implementasi Pemodelan Ontologi dan Pembangunan Web Semantik Pada Studi Kasus Pencarian Buku di Perpustakaan Digital (Informatics E-Library)'),
(13, 'Amir Mujahiduddien, S.Kom.', 5, 3, NULL, NULL, NULL, '2017-02-06', 'Pemanfaatan Augmented Reality Sebagai Sarana Pembelajaran Sistem Gerak Tubuh Manusia'),
(14, 'Jansen Giovanni, S.Kom.', 8, 10, NULL, NULL, NULL, '2017-02-06', 'Analisis dan Perancangan Jaringan Wireless di Gedung PPBS Unpad Untuk Mengoptimalkan Peletakan Posisi Access Point'),
(15, 'Muhammad Iqbal, S.Kom.', 2, 8, NULL, NULL, NULL, '2017-02-06', 'Pembangunan Aplikasi Navigasi Dalam Gedung D PPBS Universitas Padjajdaran Menggunakan Model Pemetaan Indoor Geolocation Berbasis Android'),
(16, 'Anaz Tazcia Lestari, S.Kom.', 5, 10, NULL, NULL, NULL, '2017-02-06', 'Implementasi Algoritma Spyware Dalam Program Aplikasi Remote Access'),
(17, 'Rahmatullah Arrizal P, S.Kom.', 2, 7, NULL, NULL, NULL, '2017-02-06', 'Perhitungan Jumlah Kendaraan di Jalan Tol Menggunakan Metode Image Subtracting'),
(18, 'Zahra Solihah, S.Kom.', NULL, NULL, 4, 9, NULL, '2017-02-13', 'Rancang Bangun Sistem Pakar untuk Mendiagnosa Kondisi Gangguan Kepribadian Menggunakan Metode Forward Chaining Berbasis Mobile Android'),
(19, 'Ichsan Alfiansyah, S.Kom.', 8, 7, 4, 9, 6, '2017-02-13', 'Klasifikasi Anomali Trafik Jaringan Unpad Jatinangor Menggunakan Naive Bayes Classifier: Studi Kasus Data Trafik Periode April-Mei 2016'),
(20, 'Fadel Muhammad P, S.Kom.', 11, 8, NULL, NULL, NULL, '2017-04-07', 'Analisis Pengaruh Firewall Terhadap Kinerja Komputer Dalam Mengurangi Dampak Serangan DoS'),
(21, 'Rahadian Hilmy, S.Kom.', 3, 6, NULL, NULL, NULL, '2017-04-07', 'Implementasi Algoritma Kriptografi AES Dengan Model ECB Pada APlikasi LAN Messenger'),
(22, 'Rizky Maulana Rachyan, S.Kom.', 11, 5, NULL, NULL, NULL, '2017-04-07', 'Membangun Program Aplikasi CCTV Berbasis Smartphone Android Untuk Menghitung Jnmlah Pelanggar Lajur Kendaraan Studi Kasus di Universitas Padjadjaran'),
(23, 'Andrean Taufik, S.Kom.', 4, 11, NULL, NULL, NULL, '2017-04-07', 'Analisis Filtering Email SPAM Menggunakan Metode Naive Bayesian'),
(24, 'Albertus Aditya Wisnu Whardana, S.Kom.', 1, 4, NULL, NULL, NULL, '2017-04-07', 'Pengembangan Aplikasi Travelling Salesman Problem Dengan Optimasi Robust (Studi Kasus PAda Pekan Paralimpik Nasional XV 2016)'),
(25, 'Sopyan Mulyana, S.Kom.', 2, 11, NULL, NULL, NULL, '2017-05-31', 'Pengenalan Gestur Tangan Berbasis Warna Kulit untuk Penerjemahan Bahasa Isyarat'),
(26, 'Wahyudin Buca Kalauw, S.Kom.', 4, 6, NULL, NULL, NULL, '2017-05-31', 'Implementasi Algoritma K-Means Clustering untuk Menentukan Prioritas Pembangunan Pendidikan di Provinsi Jawa Barat'),
(27, 'Mochamad Edwin Lokyta, S.Kom.', 6, 9, NULL, NULL, NULL, '2017-05-31', 'Pengembangan Aplikasi Mobile Manajemen Aset dengan QR-Code'),
(28, 'Febrian Suhendra Citromulyo, S.Kom.', 3, 5, NULL, NULL, NULL, '2017-06-14', 'Manajemen Traffic Jaringan Internet Berbasis Web Dengan Protocol SNMP (Studi Kasus di Lab SIM Departemen Ilmu Komputer Universitas Padjadjaran)'),
(29, 'Muhammad Fadly Rahman, S.Kom.', 2, 3, NULL, NULL, NULL, '2017-06-14', 'Membangun Automatic Facial Recognition System Menggunakan Metode Euclidean Distance Sebai Alat untuk Mengenali Kondisi Emosi Seseorang'),
(30, 'Anggie Audina Ikhwanudin, S.Kom.', 5, 3, NULL, NULL, NULL, '2017-06-14', 'Perancangan dan Implementasi Sistem Informasi Sidang Tilang Pada Pengadilan Negeri Indramayu Berbasis Web'),
(31, 'Yusup Septiananda, S.Kom.', 9, 6, NULL, NULL, NULL, '2017-06-14', 'Pengembangan Aplikasi Sistem Pemantauan dan Evaluasi Proyek'),
(32, 'Hilga Dwiana Hardani, S.Kom.', 2, 9, NULL, NULL, NULL, '2017-06-14', 'Analisis Sentimen pada Review Film Menggunakan Text Mining dengan Menggunakan Naive Bayes Classifier'),
(33, 'Agung Kurniati, S.Kom.', 1, 7, NULL, NULL, NULL, '2017-06-14', 'Pengembangan Sistem Pendukung Keputusan Pemilihan Kelompok Tani Penerima Bantuan Pertanian Menggunakan Metode Analytical Hierarchy Process Berbasis Web'),
(34, 'Hilmi Wijaksana Wahyudi, S.Kom.', 2, 9, NULL, NULL, NULL, '2017-07-05', 'Penerapan K-Optimal Pada Algoritma K-Nearest Neighbor (KKN) Untuk Klasifikasi Dan Prediksi Masa Studi Mahasiswa FMIPA Unpad'),
(35, 'Raynaldo Kristiadi Sola Gratia, S.Kom.', 10, 7, NULL, NULL, NULL, '2017-07-03', 'Pengujian Keamanan Wireless Access Point Dengan Protokol Keamanan WEP, WPA, dan WPA2 Menggunakan Aircrack-ng Pada Sistem Operasi Kali Linux'),
(36, 'M. Fathurrahman, S.Kom.', 2, 11, NULL, NULL, NULL, '2017-07-03', 'Pengenalan Wajah Berbasis Android Menggunakan Metode Principal Component Analysis'),
(37, 'Alvin Niza Aulia, S.Kom.', 1, 11, NULL, NULL, NULL, '2017-07-03', 'Sistem Pendukung Keputusan Investasi Properti Berbasis Web Menggunakan Metode Analytical Hierarchy Process'),
(38, 'Yoko Suryadi, S.Kom.', 4, 7, NULL, NULL, NULL, '2017-07-03', 'Implementasi Algoritma Kriptografi RSA Pada Aplikasi Chatting Berbasis Socket Programming Dengan Menggunakan Bahasa C'),
(39, 'Muhammad Iqbal Pandailing Widodo, S.Kom.', 5, 9, NULL, NULL, NULL, '2017-07-03', 'Perbandingan Haar Cascade Classification Dan LBP Cascade Classification Sebagai Hand Gesture Recognition Dalam Aplikasi Virtual Reality'),
(40, 'Rezky Pratomo, S.Kom.', 1, 3, NULL, NULL, NULL, '2017-07-03', 'Implementasi Perbandingan Metode Fuzzy Analytical Hierarchy Process Dan Simple Additive Weighting Dalam Sistem Pendukung Keputusan Pemilihan Pengawas Sekolah Terbaik Di Kabupaten Tanjung Jabung Timur'),
(41, 'Anne Devia, S.Kom.', 1, 4, NULL, NULL, NULL, '2017-07-03', 'Data Mining Untuk Clustering Ethnoinformatika Penamaan Kampung Di Kabupaten Bandung'),
(42, 'Carinna Sunny Budiono Putri, S.Kom.', 1, 10, NULL, NULL, NULL, '2017-07-03', 'Naive Bayes Classifier Untuk Kategori Berita Bahasa Indonesia Berbasis Web'),
(43, 'Fath Imtiaz, S.Kom.', 1, 3, NULL, NULL, NULL, '2017-07-26', 'Penerapan Data Mining Dengan Teknik Semi-Supervised Clustering Untuk Mengelompokan Statistik Pemain Sepak Bola Berdasarkan Posisi Dalam Formasi'),
(44, 'Asep Sudrajat, S.Kom.', 1, 7, NULL, NULL, NULL, '2017-07-26', 'Sistem Informasi Etnoinformatika Penamaan Dusun Dalam Mengetahui Karakteristik Masyarakat Ciamis Berbasis Website'),
(45, 'Ai Siti Sobariah, S.Kom.', 1, 7, NULL, NULL, NULL, '2017-07-26', 'Perancangan Dan Implementasi Sistem Informasi Etnoinformatika Penamaan Kampung Untuk Melihat Karakteristik Kebudayaan Sunda Di Kabupaten Tasikmalaya Berbasis Web'),
(46, 'Linda Angela Putri, S.Kom.', 1, 4, NULL, NULL, NULL, '2017-07-26', 'Perancangan Dan Implementasi Sistem Informasi Etnoinformatika Penamaan Kampung Di Kabupaten Garut Berbasis Java'),
(47, 'Rizki Fitrah Mutaqin, S.Kom.', 2, 6, NULL, NULL, NULL, '2017-07-26', 'Aplikasi Sistem Pendukung Keputusan Dalam Menentukan Kenaikan Pangkat Dan Promosi Jabatan Struktural Di Kabupaten Garut Menggunakan Metode Topsis'),
(48, 'Henry Aulia Rahman, S.Kom.', 1, 6, NULL, NULL, NULL, '2017-07-26', 'Sistem Informasi Perpustakaan Berbasis Web Di SMA Darul Falah Cihampelas Bandung Barat'),
(49, 'Edwin Ginanjar Sonjaya, S.Kom.', 3, 9, NULL, NULL, NULL, '2017-07-26', 'Metode Fuzzy Analytical Hierarchy Process Untuk Pemilihan Rayon Terbaik Dalam Perspektif Pelanggan Pada PT. PLN (Persro) Area Cirebon'),
(50, 'Ivan Alexander Yunadi, S.Kom.', 5, 11, NULL, NULL, NULL, '2017-07-28', 'Pemanfaatan Kartu Tanda Penduduk Elektronik Sebagai Sistem Informasi Absensi Kelas Di Program Studi Teknik Informatika Fakultas MIPA Universitas Padjadjaran'),
(51, 'Muhamad Ilham D, S.Kom.', 7, 3, NULL, NULL, NULL, '2017-07-28', 'Program Rute Terpendek UNPAD Jatinangor Menggunakan Algoritma DIKSTRA'),
(52, 'Nero Gading Laksamana, S.Kom.', 7, 3, NULL, NULL, NULL, '2017-07-28', 'Pemanfaatan Kartu Tanda Mahasiswa Untuk Autentikasi Dalam Pengembangan Sistem Informasi Akademik Universitas Padjadjaran Berbasis Android'),
(53, 'Rifky Fachry Muhamad, S.Kom.', 9, 4, NULL, NULL, NULL, '2017-07-28', 'Pengembangan Aplikasi Berbasis Chrome Extension Untuk Mengakses Browser Game Kantai Collection Dengan Menggunakan Metode IP Spoofing'),
(54, 'Tiara Rizki Maharani, S.Kom.', 1, 10, NULL, NULL, NULL, '2017-07-28', 'Sistem Pendukung Keputusan Dalam Menentukan Atlet Taekwondo Untuk Mengikuti Kejuaraan Dengan Metode Analytical Hierarchy Process (AHP)'),
(55, 'Selano Putra, S.Kom.', 1, 5, NULL, NULL, NULL, '2017-07-28', 'Penerapan Data Mining Algoritma K-Means Clustering Dalam Segmentasi Wilayah Nasabah Permohonan Kredit Untuk Membantu Strategi Pemasaran PT. BPR Ganto Nagari 1854'),
(56, 'Isa Abdul Muhyi, S.Kom.', 6, 3, NULL, NULL, NULL, '2017-08-09', 'Sistem Informasi Tracer Study Berbasis Web Menggunakan Framework Laravel'),
(57, 'Mauludy Nugrahani, S.Kom.', 2, 5, NULL, NULL, NULL, '2017-08-09', 'Aplikasi Sistem Pendukung Keputusan Prioritas Pembangunan Kesehatan Di Provinsi Jawa Barat Menggunakan Metode Fuzzy Analytical Hierarchy Process'),
(58, 'Nirdan Anshari, S.Kom.', 4, 10, NULL, NULL, NULL, '2017-08-09', 'Analisis Dan Perbandingan Enkripsi Dekripsi Pada File Menggunakan Metode AES Rijndael Dan 3DES'),
(59, 'Akmaluddin Fadhilah, S.Kom.', 10, 11, NULL, NULL, NULL, '2017-08-09', 'Sistem Informasi Monitoring Aset Berbasis Web Pada Departemen IT Santosa Hospital Bandung Kopo'),
(60, 'Fadhli Aufar Syahmi, S.Kom.', 5, 9, NULL, NULL, NULL, '2017-08-09', 'Analisis Aplikasi Peringkasan Teks Otomatis Menggunakan Metode Term Frequency Inverse Document Frequency (TF-IDR)'),
(61, 'Aldi Maulana, S.Kom.', NULL, NULL, NULL, NULL, NULL, '2017-08-09', 'Sistem Pendukung Keputusan Pemilihan Smartphone Menggunakan Metode Fuzzy Analytical Hierarchy Process Berbasis Web'),
(62, 'O Ginanjar, S.Kom.', 5, 9, NULL, NULL, NULL, '2017-08-11', 'Desain Dan Analisis Pengembangan Program Aplikasi IDMS Dengan Metodologi Scrum Framework'),
(63, 'Firdaus Perdana Yusuf, S.Kom.', 6, 9, NULL, NULL, NULL, '2017-08-11', 'Simulasi Eksplorasi Hutan Pada Malam Hari Berbasis Virtual Reality Menggunakan Game Engine Unity 3D'),
(64, 'Ardhi Rizki Harahap, S.Kom.', 1, 7, NULL, NULL, NULL, '2017-08-11', 'Sistem Informasi Mobile Berbasis Web Service Untuk Pemantauan Lokasi Perangkat Android (Studi Kasus Bus Damri Kota Bandung)'),
(65, 'Dion Alamsah, S.Kom.', 9, 6, NULL, NULL, NULL, '2017-10-18', 'Analisis Performa Algoritma Kriptografi AES Untuk Citra Digital Pada Berbagai Perangkat Android'),
(66, 'Muhammad Adamul Khair, S.Kom.', 5, 11, NULL, NULL, NULL, '2017-10-18', 'Implementasi Sistem Pemungutan Suara Elektronik Dengan Menggunakan Teknologi NFC (Near Field Communication) Pada Platform Android (Studi Kasus Pemilihan Ketua HIMATIF FMIPA Unpad)'),
(67, 'Fieny Mughnisari S, S.Kom.', 11, 3, NULL, NULL, NULL, '2017-10-18', 'Sistem Pendukung Keputusan Berbasis Fuzzy Analytical Hierarchy Process Untuk Penentuan Kelayakan Penerimaan Kredit (Studi Kasus : Koperasi Keluarga Besar Dinas Pendapatan (KKBD) Provinsi Jawa Barat)');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `ID` int(11) NOT NULL,
  `Judul` text NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Isi` text NOT NULL,
  `Author` text NOT NULL,
  `tag0` int(11) DEFAULT NULL,
  `tag1` int(11) DEFAULT NULL,
  `tag2` int(11) DEFAULT NULL,
  `tag3` int(11) DEFAULT NULL,
  `tag4` int(11) DEFAULT NULL,
  `tag5` int(11) DEFAULT NULL,
  `tag6` int(11) DEFAULT NULL,
  `tag7` int(11) DEFAULT NULL,
  `tag8` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`ID`, `Judul`, `Tanggal`, `Isi`, `Author`, `tag0`, `tag1`, `tag2`, `tag3`, `tag4`, `tag5`, `tag6`, `tag7`, `tag8`) VALUES
(1, 'Partisipasi Mahasiswa Informatika pada Kegiatan IndonesiaNEXT', '2017-11-20 04:16:12', '<p>Para mahasiswa Teknik Informatika telah berpartisipasi dalam kegiatan IndonesiaNEXT pada hari Jumat 20 Oktober 2017. Program IndonesiaNEXT 2017 ini merupakan acara yang diselenggarakan atas kerja sama Unpad dengan Telkomsel sebagai program edukasi yang memberikan kesempatan kepada para mahasiswa untuk meningkatkan kompetensinya dengan mengikuti sertifikasi standar International yang diverifikasi oleh Microsoft dan Adobe. Tidak hanya itu, para peserta akan mendapat <em>Communication Skills Training</em> yang dapat meningkatkan kepercayaan diri serta wawasan dalam menghadapi persaingan global.</p>\n<p>Acara ini juga sekaligus merupakan Kuliah Umum yang diberikan oleh Direktur Human Capital Management Telkomsel Irfan A. Tachrir yang intinya mengatakan bahwa para mahasiswa saat ini harus lebih mempersiapkan diri dengan lebih baik untuk masa depannya. Dengan revolusi ekonomi saat ini, salah satu yang harus dipersiapkan adalah bersaing dalam era digital. â€œ<em>Kita harus bisa membangun digital competitiveness.  Salah satu tantangan yang harus dihadapi adalah VUCA</em> (Volatility, Uncertainty, Complexity, Ambiguity),â€ ujar alumni Unpad ini.</p>', 'ADMIN', 2, 4, 5, 7, 15, 17, 19, 0, 0),
(2, 'Sertifikat Profesional Dosen Departemen Ilmu Komputer', '2017-11-20 04:21:06', '<p>Sampai saat ini telah 6 dosen Departemen Ilmu Komputer telah memiliki Sertifikasi Profesional dari institusi internasional yaitu dari Microsoft dan dari Oracle. Sertifikat dari Microsoft berupa  Microsoft Certified Educator (MCE) untuk 3 orang dosen, Microsoft Technology Associate (MTA) untuk satu orang dosen, dan Microsoft Office Specialist (MOS) untuk satu orang dosen. Sedangkan dari Oracle adalah sertifikat  Database Design and Programming with SQL. Berkaitan dengan Oracle, Departemen Ilmu Komputer juga telah menjadi â€œInstitution Memberâ€ dari Oracle Academy. Sedangkan untuk spersiapan pembentukan asesor profesi informatika, dua dosen telah dilatih dan siap menjadi asesor LSP Informatika yang akan dibangun.  Berikut sertifikat yang telah dimiliki.</p>', 'ADMIN', 2, 10, 16, 17, 0, 0, 0, 0, 0),
(3, 'Prestasi Mahasiswa TI Unpad di 3rd International Conference on Science in Information Technology (ICSITech) 2017', '2017-11-20 04:26:57', '\r\n<p style="text-align: left">Pada tanggal 25 â€“ 26 Oktober 2017 , 7 orang mahasiswa TI yang tergabung dalam 2 tim berhasil melaksanakan presentasi dua artikel ilmiah di ajang 3rd International Conference on Science in Information Technology (ICSITech 2017) yang dilaksanakan di GH Universal Hotel, Bandung, Jawa Barat.</p>\r\n\r\n<p>Tim pertama terdiri dari <strong>Fajar Satria, Hafiz Aditra, M. Dean Aji Wibowo, dan Hilmi Luthfiansyah</strong> yaitu mahasiswa TI angkatan 2014 yang diwakili presentasinya oleh M. Dean Aji Wibowo. Tim pertama ini mempresentasikan artikel yang berjudul â€œEFL Learning Media for Early Childhood Through Speech Recognition Applicationâ€, sebuah <em>game-based learning</em> untuk pembelajaran bahasa Inggris bagi anak-anak melalui pengenalan suara.</p>\r\n<p>Tim kedua terdiri dari <strong>Gustara Sapto Ajie, M. Azhari Marpaung, dan Agung Kurniawan</strong> yaitu mahasiswa TI angkatan 2014 juga, diwakili presentasinya oleh Gustara Sapto Ajie. Tim kedua mempresentasikan artikel yang berjudul â€œThe Development and Usability Testing of Game-based Learning as A Medium to Introduce Zoology to Young Learnersâ€, sebuah aplikasi <em>game-based learning</em> pengenalan aneka hewan bagi anak-anak melalui teknik hand gesture recognition.</p>\r\n<p><span id="more-3075"></span></p>\r\n<p>Kedua artikel yang dihasilkan merupakan hasil penelitian dari kedua tim selama 1 semester perkuliahan Human Computer Interaction. Selain aplikasi yang dihasilkan, mahasiswa juga harus mampu menuangkan hasil karyanya ke dalam artikel ilmiah. Kegiatan penelitian ini dibimbing oleh 3 dosen pengampu yaitu: Mira Suryani, S.Pd., M.Kom Erick Paulus, S.Si., M.Kom, dan Ino Suryana, Drs., M.Kom.</p>\r\n</p>', 'ADMIN', 5, 8, 10, 12, 0, 0, 0, 0, 0),
(4, 'Teknik Informatika Unpad di Tech in Asia Jakarta', '2017-11-20 04:28:43', 'Pada tanggal 1-2 November 2017, Prodi Teknik Informatika Unpad yang diwakili oleh Dr. Asep Sholahuddin, M.T dan Aditya Pradana, M.Eng serta 50 mahasiswa dari berbagai angkatan mengikuti acara Tech in Asia yang berlangsung di Jakarta Convention Center.\r\nAcara terdiri dari presentasi dari beberapa sponsor, perwakilan startup serta pameran dari para Bootstrap Alley. Diharapkan dengan mengikuti acara seperti ini akan menumbuhkan kreatifitas dari pada mahasiswa untuk berkreasi dan mengetahui perkembangan teknologi terbaru.', 'ADMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Rakornas APTIKOM dan ICIC 2017', '2017-12-16 06:14:00', '<p>Pada tanggal 1-4 Nov 2017, Dosen Teknik Informatika, Universitas Padjadjaran ikut berpartisipasi aktif pada kegiatan Rapat Koordinasi Nasional (RAKORNAS) Asosiasi Pendidikan Tinggi Informatika dan Komputer (APTIKOM) 2017. Kegiatan Rakornas yang bekerjasama dengan Universitas YAPIS Papua ini mengusung tema Peningkatan Kompetensi SDM TIK dan Daya Saing Daerah di Era Global. Pada kesempatan yang sama juga diselenggarakan beberapa kegiatan:</p>\r\n<ol>\r\n<li>Seminar Nasional Aptikom (Semnastikom) Call For Paper dengan tema : Pengembangan SDM TIK Untuk Percepatan Pembangunan Daerah.</li>\r\n<li>The 2nd International Conference on Informatics and Computing (ICIC 2017) dengan tema : Improving Competencies of ICT Human Resources and Regional Competitiveness in Global Era.</li>\r\n<li>Higher Education Sharing of Best Practice</li>\r\n<li>Industrial Sharing of Technology</li>\r\n<li>Higher Education Clinics</li>\r\n<li>Country Side Tour</li>\r\n</ol>\r\n<p>Adapun kegiatan ICIC 2017 ini menyajikan sekitar 97 artikel, diantaranya adalah </p>\r\n<ol>\r\n<li>A Novel Scheme for Handwritten Binarization Method on Sundanese Palm Leaf Document Images oleh Erick Paulus, Mira Suryani, Setiawan Hadi and Intan Nurma Yulita</li>\r\n<li>Quality enhancement of degraded Sundanese lontar images using direct subtraction and retrospective correction methods in several color spaces oleh Setiawan Hadi, Undang Ahmad Darsa, Erick Paulus and Mira Suryani</li>\r\n</ol>', 'NULL', 12, 16, 19, 0, 0, 0, 0, 0, 0),
(6, 'Sertifikat Kompetensi Keahlian Dosen', '2017-12-16 06:16:08', '<p>3 (tiga) dosen Ilmu Komputer telah mengikuti kegiatan Sertifikasi Kompetensi yaitu 2 orang mengikuti Sertifikasi Kompetensi sebagai Programmer dan 1 orang mengikuti Sertifikasi Reviewer Penelitian. Dengan ini meningkatkan dan mengembangkan jumlah dosen Ilkom yang memiliki Sertifikat Kompetensi.</p>\r\n', 'NULL', 3, 7, 8, 10, 16, 17, 18, 0, 0),
(7, 'Unpad Experience Day di Huawei', '2017-12-16 06:18:04', '<p>Pada hari Jumat, 24 November 2017, Unpad mengikuti <em>Experience Day</em> di Huawei yang diwakili oleh dosen dari Teknik Informatika, Dr. Asep Sholahuddin, M.T. dan 10 mahasiswa FMIPA yang terdiri dari Prodi Teknik Informatika (4 mahasiswa), Teknik Elektro (3 mahasiswa), dan Fisika (3 mahasiswa).</p>\r\n<p>Tim mengikuti seminar dan diskusi dengan Huawei. Beberapa materinya adalah tentang Advance Mobile Service, sharing pengalaman, serta pemaparan beberapa teknologi yang ada di Huawei.\r\n</p>\r\n', 'NULL', 15, 16, 19, 0, 0, 0, 0, 0, 0),
(8, 'Dosen Ilmu Komputer mendapat Penghargaan dalam Konferensi Internasional', '2017-12-16 06:20:31', '<p>Makalah dosen Departemen Ilmu Komputer FMIPA Universitas Padjadjaran telah berhasil terpilih sebagai makalah terbaik dan memperoleh sertifikat The Best Paper Award dalam International Conference of Computer and Applied Informatics (ICCAI) yang diselenggarakan di Medan pada tanggal 28-30 November 2017 oleh  Fakultas Ilmu Komputer dan Informatika Universitas Sumatera Utara. Makalah ilmiah yang berjudul berjudul "Improved Line Segmentation Framework for Old Sundanese Documents" ini, dipresentasikan dalam kancah ilmiah berstandar internasioanal dan hasilnya dipublikasikan dalam Journal of Physics IOP. </p>\r\n<p>Informasi lain dapat dilihat di <a href="http://www.unpad.ac.id/2017/12/penelitian-dosen-fmipa-unpad-raih-penghargaan-di-iccai-medan/" target="_blank">situs UNPAD</a>.</p>', 'NULL', 8, 10, 12, 16, 19, 0, 0, 0, 0),
(9, 'Alumni UNPAD Sukses Menjadi Deputi Direktur Perusahaan Multi Finance', '2017-12-16 06:19:58', '<p>William Francis Indra adalah alumni Universitas Padjadjaran lulusan tahun 2003 yang saat ini diberi amanah untuk menjabat Deputi Direktur Perusahaan Mandiri Tunas Finance (MTF), sebuah anak perusahaan Bank Mandiri, yang bergerak di bidang pembiayaan (financing). Di Universitas Padjadjaran, William aktif dalam bidang akademik di program D-3 Teknik Informatika yang dimulainya pada tahun 1999 sebagai asisten laboratorium. Ia kemudian melanjutkan pendidikan sarjananya di Program Ekstensi Jurusan Matematika Bidang minat Ilmu Komputer. Jejak karirnya di Mandiri Tunas Finance diawali pada tahun 2009 sebagai manager di bidang Jaringan Komputer, meningkat menjadi general manager di bidang IT. Selanjutnya ia diangkat menjadi Direktur yang membawahi bidang IT dan bidang lainnya.  Pada kuliah umum yang diadakan di Departemen Ilmu Komputer pada tanggal 7 Desember 2017 dihadapan para dosen dan mahasiswa S-1 Teknik Informatika, William memberikan gambaran tentang kegiatan di perusahaan nasional yang memiliki ratusan cabang di Indonesia dan perputaran uangnya hampir 2 triliun per bulan ini, tidak bisa terlepas dari Teknologi Informasi. Di sisi lain, pemanfaatan Teknologi Informasi di MTF ini tidak stagnan namun terus menerus dikembangkan sehingga membutuhkan tenaga-tenaga muda Informatika, menambah pasukan tenaga yang sekarang ada sehingga mencapai 50 orang. Dia menawarkan berbagai jenis kesempatan mulai dari magang, beasiswa, hingga kesempatan kerja ekslusif yang mudah-mudahan bisa dimanfaatkan oleh para mahasiswa Teknik Informatika dan mahasiswa UNPAD pada umumnya. Sebagai salah seorang alumni UNPAD  yang menduduki jabatan eksekutif dan pengelola di perusahaan yang memiliki visi nasional dan salah satu misinya adalah memakmurkan bangsa Indonesia, dia mengharapkan ikatannya dengan UNPAD dapat terus ditingkatkan meliputi berbagai aspek.</p>', 'NULL', 4, 7, 15, 20, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `ID` int(11) NOT NULL,
  `Text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`ID`, `Text`) VALUES
(1, 'Kecendekiawanan'),
(2, 'Kerjasama'),
(3, 'Laboratorium'),
(4, 'Lulusan'),
(5, 'Mahasiswa'),
(6, 'Monev-mutu'),
(7, 'Pendidikan'),
(8, 'Penelitian'),
(9, 'Pengabdian'),
(10, 'Prestasi'),
(11, 'Sarpras'),
(12, 'Seminar'),
(13, 'Standar 1'),
(14, 'Standar 2'),
(15, 'Standar 3'),
(16, 'Standar 4'),
(17, 'Standar 5'),
(18, 'Standar 6'),
(19, 'Standar 7'),
(20, 'Tridarma Lainnya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datahalaman`
--
ALTER TABLE `datahalaman`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `detaildosen`
--
ALTER TABLE `detaildosen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lulusan`
--
ALTER TABLE `lulusan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datahalaman`
--
ALTER TABLE `datahalaman`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `detaildosen`
--
ALTER TABLE `detaildosen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `lulusan`
--
ALTER TABLE `lulusan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
