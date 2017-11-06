-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 03:28 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

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
(64, 2, 4, 'Mitra Bestari pada Jurnal DiSainTek');

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
  `Nama` text NOT NULL,
  `TagPost` int(11) NOT NULL,
  `Utama` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lulusan`
--

CREATE TABLE `lulusan` (
  `ID` int(11) NOT NULL,
  `Nama` point NOT NULL,
  `Pembimbing1` int(11) DEFAULT NULL,
  `Pembimbing2` int(11) DEFAULT NULL,
  `Penguji1` int(11) DEFAULT NULL,
  `Penguji2` int(11) DEFAULT NULL,
  `Penguji3` int(11) DEFAULT NULL,
  `TanggalLulus` date NOT NULL,
  `Judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `ID` int(11) NOT NULL,
  `Judul` text NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Isi` text NOT NULL,
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
(3, 'laboratorium'),
(4, 'lulusan'),
(5, 'Mahasiswa'),
(6, 'monev-mutu'),
(7, 'Pendidikan'),
(8, 'penelitian'),
(9, 'Pengabdian'),
(10, 'Prestasi'),
(11, 'sarpras'),
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
-- AUTO_INCREMENT for table `detaildosen`
--
ALTER TABLE `detaildosen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lulusan`
--
ALTER TABLE `lulusan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
