-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 06:23 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `mata_pelajaran`) VALUES
(1, '146328', 'Jian maulana', 'laki-laki', 'bandung', '04 april 1999', 'produktif'),
(2, '254316', 'Defi andriani', 'perempuan', 'bandung', '14 desember ', 'PPKN'),
(3, '382549', 'Ade ahmad', 'Laki-laki', 'Bandung', '26 Mei 1989', 'Matematika'),
(4, '420841', 'Manda alawiyah rasid', 'Perempuan', 'Bandung', '13 Maret 1999', 'Produktif'),
(5, '304682', 'Rizal purnama', 'Laki-laki', 'Bandung', '15 Januari 1995', 'Produktif'),
(6, '519362', 'Eva lestari', 'Perempuan', 'Bandung', '22 Februari 1995', 'Bahasa Inggris'),
(7, '619357', 'Lilis evi mulyani', 'Perempuan', 'Bandung', '06 Agustus 1996', 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL,
  `nilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nis`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `mata_pelajaran`, `nilai`) VALUES
(1, '143680', 'Maulida putri azizah', 'Perempuan', 'Bandung', '01 April 2006', 'PPKN', '85'),
(2, '215483', 'Nadia trihapsari', 'Perempuan', 'Bandung', '07 Juli 2005', 'Bahasa Inggris', '80'),
(3, '357869', 'Nurlaelasari', 'Perempuan', 'Bandung', '14 Oktober 2005', 'Bahasa Indonesia ', '88'),
(4, '721395', 'Hariyanto', 'Laki-laki', 'Bandung', '04 Desember 2004', 'Produktif', '75'),
(5, '926824', 'Ilham mustofa', 'Laki-laki', 'Bandung', '17 Oktober 2005', 'Matematika', '87');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `bagian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `bagian`) VALUES
(1, '142765', 'Feri supriyadi nugraha', 'laki-laki', 'bandung', '06 september 1996', 'operator'),
(2, '247168', 'cece', 'laki-laki', 'bandung', '24 juni 1987', 'kebersihan');

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `waktu` int(11) NOT NULL,
  `senin` varchar(100) NOT NULL,
  `selasa` varchar(50) NOT NULL,
  `rabu` varchar(100) NOT NULL,
  `kamis` varchar(100) NOT NULL,
  `jumat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `kelas`, `jurusan`) VALUES
(1, '143680', 'Maulida Putri Azizah', 'Perempuan', 'Bandung', '01 April 2006', 'XII', 'Rekayasa Perangkat Lunak'),
(2, '215483', 'Nadia Trihapsari', 'Perempuan', 'Bandung', '07 Juli 2005', 'XII', 'Rekayasa Perangkat Lunak'),
(3, '357869', 'Nurlaelasari', 'Perempuan', 'Bandung', '14 Oktober 2005', 'XII', 'Rekayasa Perangkat Lunak'),
(4, '428963', 'Dina haryanti', 'Perempuan', 'Bandung', '05 Maret 2005', 'XII', 'Rekayasa Perangkat Lunak'),
(5, '512384', 'Sulistyan', 'Perempuan', 'Bandung', '20 Januari 2006', 'XII', 'Rekaysa Perangkat Lunak'),
(6, '612384', 'Alya agisna', 'Perempuan', 'Bandung', '09 Juli 2005', 'XII', 'Teknik kendaraan ringan otomotif'),
(7, '721395', 'Hariyanto', 'Laki-laki', 'Bandung', '04 Desember 2004', 'XII', 'Perhotelan'),
(8, '712539', 'Siti hanifah', 'Perempuan', 'Bandung', '05 Mei 2006', 'XI', 'Rekayasa Perangkat Lunak'),
(9, '815372', 'Sinta', 'Perempuan', 'Bandung', '15 September 2006', 'XI', 'Rekayasa Perangkat Lunak'),
(10, '926824', 'Ilham mustofa', 'Laki-laki', 'Bandung', '17 Oktober 2005', 'XII', 'Perhotelan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`waktu`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `waktu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
