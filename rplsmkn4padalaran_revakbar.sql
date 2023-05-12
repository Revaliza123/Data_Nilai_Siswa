-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 04:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnilai_revaliza`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `NIP` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `kode` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`NIP`, `nama`, `jabatan`, `kode`) VALUES
('222', 'Agus', 'guru', '1'),
('333', 'Ida hamidah', 'guru', '2'),
('444', 'Yulia', 'guru', '3'),
('555', 'Siti Fatimah', 'guru', '4'),
('666', 'Aam Amalia', 'guru', '5');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kode` varchar(5) NOT NULL,
  `namamapel` varchar(12) NOT NULL,
  `guru` varchar(20) NOT NULL,
  `guru_nip` varchar(20) NOT NULL,
  `id_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kode`, `namamapel`, `guru`, `guru_nip`, `id_nilai`) VALUES
('1', 'INDO', 'Agus', '222', 1),
('2', 'MTK', 'Ida Hamidah', '333', 2),
('3', 'PPKN', 'Yulia ', '444', 3),
('4', 'ING', 'Siti Fatimah', '555', 4),
('5', 'KIMIA', 'Aam Amalia', '666', 5);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `NISN` varchar(12) NOT NULL,
  `mapel` varchar(15) NOT NULL,
  `nilai1` int(11) NOT NULL,
  `nilai2` int(11) NOT NULL,
  `nilai3` int(11) NOT NULL,
  `siswa_nisn` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `NISN`, `mapel`, `nilai1`, `nilai2`, `nilai3`, `siswa_nisn`) VALUES
(1, '001', 'INDO', 80, 80, 80, '001'),
(2, '002', 'INDO', 90, 90, 90, '002'),
(3, '003', 'INDO', 90, 80, 85, '003'),
(4, '004', 'INDO', 90, 90, 90, '004'),
(5, '005', 'INDO', 90, 90, 90, '005'),
(6, '006', 'PPKN', 90, 80, 85, '006'),
(7, '007', 'MTK', 90, 90, 90, '007'),
(8, '008', 'PPKN', 80, 85, 82, '008'),
(9, '009', 'KIMIA', 80, 85, 0, '009'),
(10, '009', 'INDO', 90, 90, 0, '009');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NISN` varchar(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(7) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NISN`, `nama`, `kelas`, `tanggal_lahir`) VALUES
('001', 'Arhab Yasar', 'RPL', '2006-10-27'),
('002', 'Allen Rahman', 'RPL', '2005-04-03'),
('003', 'Alwi Yuspani', 'RPL', '2006-08-14'),
('004', 'Alfath Izha ', 'RPL', '2005-03-02'),
('005', 'Abeng', 'RPL', '2005-01-01'),
('006', 'Mutiara', 'RPL', '2006-06-07'),
('007', 'taufik', 'KIMIA', '2006-05-08'),
('008', 'Revaliza', 'ORACLE', '2006-03-06'),
('010', 'Tyar', 'AGROO', '2006-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `usersiswa`
--

CREATE TABLE `usersiswa` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersiswa`
--

INSERT INTO `usersiswa` (`id`, `username`, `password`) VALUES
(1, 'siswa', 'siswa1');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vguru`
-- (See below for the actual view)
--
CREATE TABLE `vguru` (
`NIP` varchar(20)
,`nama` varchar(30)
,`jabatan` varchar(40)
,`namamapel` varchar(12)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vnilai`
-- (See below for the actual view)
--
CREATE TABLE `vnilai` (
`NISN` varchar(12)
,`nama` varchar(30)
,`mapel` varchar(15)
,`rata_rata` decimal(16,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vsiswa`
-- (See below for the actual view)
--
CREATE TABLE `vsiswa` (
`NISN` varchar(12)
,`nama` varchar(30)
,`kelas` varchar(7)
,`mapel` varchar(15)
,`nilai1` int(11)
,`nilai2` int(11)
,`nilai3` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `vguru`
--
DROP TABLE IF EXISTS `vguru`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vguru`  AS SELECT `guru`.`NIP` AS `NIP`, `guru`.`nama` AS `nama`, `guru`.`jabatan` AS `jabatan`, `mapel`.`namamapel` AS `namamapel` FROM (`guru` left join `mapel` on(`guru`.`NIP` = `mapel`.`guru_nip`))  ;

-- --------------------------------------------------------

--
-- Structure for view `vnilai`
--
DROP TABLE IF EXISTS `vnilai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnilai`  AS SELECT `siswa`.`NISN` AS `NISN`, `siswa`.`nama` AS `nama`, `nilai`.`mapel` AS `mapel`, (`nilai`.`nilai1` + `nilai`.`nilai2` + `nilai`.`nilai3`) / 3 AS `rata_rata` FROM (`siswa` left join `nilai` on(`siswa`.`NISN` = `nilai`.`siswa_nisn`))  ;

-- --------------------------------------------------------

--
-- Structure for view `vsiswa`
--
DROP TABLE IF EXISTS `vsiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vsiswa`  AS SELECT `siswa`.`NISN` AS `NISN`, `siswa`.`nama` AS `nama`, `siswa`.`kelas` AS `kelas`, `nilai`.`mapel` AS `mapel`, `nilai`.`nilai1` AS `nilai1`, `nilai`.`nilai2` AS `nilai2`, `nilai`.`nilai3` AS `nilai3` FROM (`siswa` left join `nilai` on(`siswa`.`NISN` = `nilai`.`siswa_nisn`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NISN`);

--
-- Indexes for table `usersiswa`
--
ALTER TABLE `usersiswa`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
