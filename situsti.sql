-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 11:20 AM
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
(2, 1, 2, 'Studi Indikator pendidikan di Indonesia 2004 (anggota peneliti), Survei Balitbang Depdiknas 2004-2005.');

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
(2, 'Dr. Setiawan Hadi, M.Sc.CS.', NULL, '081-22323328\r\n', '62-22-7798983\r\n', 'Gedung D PPBS Ruang GLB 2.1\r\n', 'S3: Informatika ITB, 2008\r\nS2: Computer Science, UNB Canada, 1996\r\nS1: Matematika UNPAD, 1991\r\nS0: PAT Diploma III ITB, 1983', 'Computer Vision, Image Processing, Computer Graphics and Visualization'),
(3, 'Drs. Akik Hidayat, M.Kom', 'akik.hidayat@unpad.ac.id\r\n', NULL, '62-22-7798983\r\n', 'Gedung D PPBS Ruang GLB 2.1\r\n', 'S2: Ilmu Komputer UGM, 2004\r\nS1: Matematika UNPAD, 1985', 'Computational Mathematics, Cryptography');

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
  `Text` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
