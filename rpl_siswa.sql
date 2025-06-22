-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2025 at 03:21 PM
-- Server version: 8.4.5
-- PHP Version: 8.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `id` int NOT NULL,
  `nama_peserta_didik` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(60) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_tinggal` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id`, `nama_peserta_didik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat_tinggal`, `nomor_telepon`) VALUES
(6, 'Dita', 'Perempuan', 'Pemalang', '2021-10-01', 'SMP Negeri 86 Nusantara', 'Pemalang', '243243'),
(7, 'Dewita', 'Perempuan', 'Pemalang', '2021-10-01', 'SMP Negeri 86 Nusantara', 'Pemalang', '765765'),
(8, 'Bambang Sugiyono', 'Laki-laki', 'Bandung', '2004-07-15', 'SMP 4 Bandung', 'Bandung, Jawa Barat', '1321312'),
(9, 'Budi Rasuli Setiawan', 'Laki-Laki', 'Jakarta', '2025-06-03', 'Islam', 'Jakarta', '54654654654'),
(10, 'Puji Lestari', 'Perempuan', 'Kenteng', '2025-06-03', 'Kristen', 'Ada', '543543543');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `pass` varchar(260) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `type`) VALUES
('1', 'admin', 'admin', 'admin'),
('2', 'siswa', 'siswa', 'siswa'),
('3', 'Denis Listiadi', '12345', 'siswa'),
('4', 'Slamet', 'slamet', 'siswa'),
('5', 'Bejo', 'bejo', 'siswa'),
('6', 'Maikel', 'maikel', 'siswa'),
('7', 'Alex', 'alex', 'siswa'),
('8', 'murid', 'murid', 'siswa'),
('9', 'BUDI  SETIAWAN', '1234', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
