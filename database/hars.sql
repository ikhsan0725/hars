-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 09:58 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hars`
--

-- --------------------------------------------------------

--
-- Table structure for table `hars_absen`
--

CREATE TABLE `hars_absen` (
  `absen_id` varchar(20) NOT NULL,
  `absen_pasien_id` varchar(20) NOT NULL,
  `absen_hari` varchar(10) NOT NULL,
  `absen_status` enum('lembur','normal') NOT NULL DEFAULT 'normal',
  `absen_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hars_absen`
--

INSERT INTO `hars_absen` (`absen_id`, `absen_pasien_id`, `absen_hari`, `absen_status`, `absen_date_created`) VALUES
('ABS-12144', 'PEG-76226', 'Selasa', 'lembur', '2022-11-22 17:15:44'),
('ABS-13529', 'PEG-74722', 'Selasa', 'normal', '2022-11-22 17:38:49'),
('ABS-45365', 'PAS-71462', 'Sabtu', 'normal', '2022-12-03 12:29:25'),
('ABS-45434', 'PEG-76226', 'Sabtu', 'normal', '2019-08-03 22:17:14'),
('ABS-74757', 'PEG-74722', 'Senin', 'lembur', '2019-07-15 14:12:37'),
('ABS-76293', 'PEG-76226', 'Senin', 'lembur', '2019-07-15 14:38:13'),
('ABS-87489', 'PAS-71462', 'Kamis', 'normal', '2022-12-01 16:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `hars_gaji`
--

CREATE TABLE `hars_gaji` (
  `gaji_id` varchar(20) NOT NULL,
  `gaji_pasien_id` varchar(20) NOT NULL,
  `gaji_lembur` int(20) DEFAULT 0,
  `gaji_total` int(20) NOT NULL,
  `gaji_bayar_pinjaman` int(20) NOT NULL,
  `gaji_tanggal` date DEFAULT NULL,
  `gaji_bulan_ke` int(11) DEFAULT NULL,
  `gaji_status` enum('sudah','belum') NOT NULL DEFAULT 'belum',
  `gaji_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hars_gaji`
--

INSERT INTO `hars_gaji` (`gaji_id`, `gaji_pasien_id`, `gaji_lembur`, `gaji_total`, `gaji_bayar_pinjaman`, `gaji_tanggal`, `gaji_bulan_ke`, `gaji_status`, `gaji_date_created`) VALUES
('GJI-74757', 'PEG-74722', 35000, 105000, 20000, '2022-11-22', 1, 'sudah', '2019-07-15 14:12:37'),
('GJI-76293', 'PEG-76226', 70000, 105000, 20000, '2022-11-22', 1, 'sudah', '2019-07-15 14:38:13'),
('GJI-87489', 'PAS-71462', 0, 70000, 0, '2022-12-03', 1, 'sudah', '2022-12-01 16:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `hars_jabatan`
--

CREATE TABLE `hars_jabatan` (
  `jabatan_id` varchar(20) NOT NULL,
  `jabatan_nama` varchar(255) DEFAULT NULL,
  `jabatan_biaya` int(20) DEFAULT NULL,
  `jabatan_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hars_jabatan`
--

INSERT INTO `hars_jabatan` (`jabatan_id`, `jabatan_nama`, `jabatan_biaya`, `jabatan_date_created`) VALUES
('JAB-74569', 'Pasien', 35000, '2019-07-15 14:09:29'),
('JAB-76910', 'Perawat', 75000, '2022-12-01 13:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `hars_nilai`
--

CREATE TABLE `hars_nilai` (
  `nilai_id` varchar(20) NOT NULL,
  `nilai_pasien_id` varchar(20) NOT NULL,
  `nilai_tanggal_pemeriksaan` datetime NOT NULL DEFAULT current_timestamp(),
  `nilai_item_satu` varchar(20) NOT NULL,
  `nilai_item_dua` varchar(20) NOT NULL,
  `nilai_item_tiga` varchar(20) NOT NULL,
  `nilai_item_empat` varchar(20) NOT NULL,
  `nilai_item_lima` varchar(20) NOT NULL,
  `nilai_item_enam` varchar(20) NOT NULL,
  `nilai_item_tujuh` varchar(20) NOT NULL,
  `nilai_item_delapan` varchar(20) NOT NULL,
  `nilai_item_sembilan` varchar(20) NOT NULL,
  `nilai_item_sepuluh` varchar(20) NOT NULL,
  `nilai_item_sebelas` varchar(20) NOT NULL,
  `nilai_item_duabelas` varchar(20) NOT NULL,
  `nilai_item_tigabelas` varchar(20) NOT NULL,
  `nilai_item_empatbelas` varchar(20) NOT NULL,
  `nilai_total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hars_nilai`
--

INSERT INTO `hars_nilai` (`nilai_id`, `nilai_pasien_id`, `nilai_tanggal_pemeriksaan`, `nilai_item_satu`, `nilai_item_dua`, `nilai_item_tiga`, `nilai_item_empat`, `nilai_item_lima`, `nilai_item_enam`, `nilai_item_tujuh`, `nilai_item_delapan`, `nilai_item_sembilan`, `nilai_item_sepuluh`, `nilai_item_sebelas`, `nilai_item_duabelas`, `nilai_item_tigabelas`, `nilai_item_empatbelas`, `nilai_total`) VALUES
('NIL-39405', 'PAS-35715', '2022-12-04 14:36:45', '2', '2', '0', '0', '0', '1', '2', '2', '0', '0', '10', '8', '1', '1', '27'),
('NIL-39542', 'PAS-35715', '2022-12-04 14:39:02', '3', '6', '6', '7', '2', '5', '5', '5', '5', '4', '11', '8', '5', '8', '80');

-- --------------------------------------------------------

--
-- Table structure for table `hars_pasien`
--

CREATE TABLE `hars_pasien` (
  `pasien_id` varchar(20) NOT NULL,
  `pasien_jabatan_id` varchar(20) DEFAULT NULL,
  `pasien_nama` varchar(255) DEFAULT NULL,
  `pasien_tempat_lahir` varchar(255) DEFAULT NULL,
  `pasien_tanggal_lahir` date DEFAULT NULL,
  `pasien_alamat` text DEFAULT NULL,
  `pasien_tanggal_pemeriksaan` date DEFAULT NULL,
  `pasien_nomor_hp` varchar(20) DEFAULT NULL,
  `pasien_no_rekening` varchar(30) DEFAULT NULL,
  `pasien_date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hars_pasien`
--

INSERT INTO `hars_pasien` (`pasien_id`, `pasien_jabatan_id`, `pasien_nama`, `pasien_tempat_lahir`, `pasien_tanggal_lahir`, `pasien_alamat`, `pasien_tanggal_pemeriksaan`, `pasien_nomor_hp`, `pasien_no_rekening`, `pasien_date_created`) VALUES
('PAS-35715', 'JAB-74569', 'Nisa Mahera Putri', 'Pekanbaru', '2004-07-21', 'Uka', '2022-12-04', '082283818174', NULL, '2022-12-04 13:35:15'),
('PAS-39398', 'JAB-74569', 'Nisa Mahera Putri', 'Pekanbaru', '2004-07-21', 'Uka', '2022-12-04', '082283818174', NULL, '2022-12-04 14:36:38'),
('PAS-71462', 'JAB-74569', 'Ayatul Ikhsan', 'Padang Mutung', '1999-07-25', 'Uka', '2022-12-01', '082241563226', NULL, '2022-12-01 12:11:02'),
('PEG-74722', 'JAB-74569', 'Cucu', 'Pekanbaru', '1997-09-04', 'Disana', '2014-06-14', '081234567890', '', '2019-07-15 14:12:02'),
('PEG-76226', 'JAB-74569', 'widi', 'pku', '2000-07-09', 'pku', '2019-08-03', '081233444433', '', '2019-07-15 14:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `hars_pengguna`
--

CREATE TABLE `hars_pengguna` (
  `pengguna_id` int(20) NOT NULL,
  `pengguna_username` varchar(255) DEFAULT NULL,
  `pengguna_password` varchar(255) DEFAULT NULL,
  `pengguna_nama` varchar(255) DEFAULT NULL,
  `pengguna_foto` text DEFAULT NULL,
  `pengguna_hak_akses` enum('admin','user') DEFAULT NULL,
  `pengguna_date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hars_pengguna`
--

INSERT INTO `hars_pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_nama`, `pengguna_foto`, `pengguna_hak_akses`, `pengguna_date_created`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Ayatul Ikhsan', NULL, 'admin', '2019-06-28 21:06:43'),
(2, 'owner', '72122ce96bfec66e2396d2e25225d70a', 'Surya Darma', NULL, 'user', '2019-07-15 12:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `hars_pinjam`
--

CREATE TABLE `hars_pinjam` (
  `pinjam_id` varchar(20) NOT NULL,
  `pinjam_pasien_id` varchar(20) NOT NULL,
  `pinjam_jumlah` int(20) NOT NULL,
  `pinjam_bayar` int(20) NOT NULL DEFAULT 0,
  `pinjam_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hars_pinjam`
--

INSERT INTO `hars_pinjam` (`pinjam_id`, `pinjam_pasien_id`, `pinjam_jumlah`, `pinjam_bayar`, `pinjam_date_created`) VALUES
('PJM-12200', 'PEG-76226', 20000, 20000, '2022-11-22 17:16:40'),
('PJM-13820', 'PEG-76226', 30000, 20000, '2022-11-22 17:43:40'),
('PJM-44503', 'PEG-76226', 30000, 30000, '2019-08-03 22:01:43'),
('PJM-74863', 'PEG-74722', 50000, 50000, '2019-07-15 14:14:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hars_absen`
--
ALTER TABLE `hars_absen`
  ADD PRIMARY KEY (`absen_id`);

--
-- Indexes for table `hars_gaji`
--
ALTER TABLE `hars_gaji`
  ADD PRIMARY KEY (`gaji_id`);

--
-- Indexes for table `hars_jabatan`
--
ALTER TABLE `hars_jabatan`
  ADD PRIMARY KEY (`jabatan_id`);

--
-- Indexes for table `hars_nilai`
--
ALTER TABLE `hars_nilai`
  ADD PRIMARY KEY (`nilai_id`);

--
-- Indexes for table `hars_pasien`
--
ALTER TABLE `hars_pasien`
  ADD PRIMARY KEY (`pasien_id`);

--
-- Indexes for table `hars_pengguna`
--
ALTER TABLE `hars_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `hars_pinjam`
--
ALTER TABLE `hars_pinjam`
  ADD PRIMARY KEY (`pinjam_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hars_pengguna`
--
ALTER TABLE `hars_pengguna`
  MODIFY `pengguna_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
