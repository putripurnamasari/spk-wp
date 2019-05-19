-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 09:47 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`UserName`, `Password`) VALUES
('putripurnama', 'putridoraemoners');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `anggotaID` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `NoHP` varchar(15) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`anggotaID`, `Nama`, `TanggalLahir`, `NoHP`, `Alamat`) VALUES
(2, 'jio', '2018-09-05', '089577778899', 'Bogor JL. Rainbow, Perum Moon Blok C No.21'),
(4, 'Putri ', '0000-00-00', '089577778899', 'dekat'),
(5, 'lala', '2018-09-04', '9999990000000', 'jauh'),
(7, 'mutamimah', '1996-09-15', '089766554433', 'Bogor, JL.Cidokom Raya Blok.B no.3'),
(12, 'yanti', '2018-09-27', '8uuu', 'jbhhgskj'),
(14, 'muhammad rizky', '2000-06-14', '0977668866554', 'Jakarta, Jl. Suka bakti blok.A no.88'),
(22, 'suratmi sri handayani', '2018-09-26', '09888776655434', 'Bogor Jl.sukbakti blok.a no.77'),
(25, 'jaka', '2018-09-12', '0988655664834', 'jauh'),
(26, 'joki', '2018-09-26', '7789880900', 'jauh'),
(27, 'joko', '2018-12-05', '097766886655775', 'jauh');

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `eventID` int(20) NOT NULL,
  `NamaEvent` varchar(20) NOT NULL,
  `TanggalEvent` date NOT NULL,
  `HargaTiket` int(20) NOT NULL,
  `Peserta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`eventID`, `NamaEvent`, `TanggalEvent`, `HargaTiket`, `Peserta`) VALUES
(1, 'ghatnas', '2018-09-25', 9000, 'putri'),
(2, 'kopdar', '2018-09-27', 9000, 'joko'),
(3, 'ghatnas', '2018-09-26', 9000, 'salsabillah'),
(4, 'kopdar', '2018-09-11', 8000, 'salsabillah'),
(5, 'bukber', '2018-09-19', 10000, 'mutamimah'),
(10, 'ghatnas', '2018-09-27', 9000, 'rani putriasih'),
(13, 'ghatnas', '2018-09-19', 9000, 'joko');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`anggotaID`);

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`eventID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `anggotaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `eventID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
