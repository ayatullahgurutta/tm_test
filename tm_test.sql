-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2018 at 02:16 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tm_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `pasien_id` int(11) NOT NULL,
  `pasien_nrm` varchar(32) NOT NULL,
  `pasien_rfid` varchar(64) NOT NULL,
  `pasien_kk` varchar(32) NOT NULL,
  `pasien_nid_tipe` tinyint(4) NOT NULL,
  `pasien_nid_no` varchar(32) NOT NULL,
  `pasien_nama` varchar(128) NOT NULL,
  `pasien_jenis_kelamin` tinyint(4) NOT NULL,
  `pasien_gol_darah` varchar(4) NOT NULL,
  `pasien_tempat_lahir` varchar(64) NOT NULL,
  `pasien_tanggal_lahir` datetime NOT NULL,
  `pasien_umur` tinyint(4) NOT NULL,
  `pasien_jenis` tinyint(4) NOT NULL,
  `pasien_no_telp` varchar(32) NOT NULL,
  `pasien_no_hp` varchar(32) NOT NULL,
  `pasien_alamat` varchar(256) NOT NULL,
  `pasien_email` varchar(64) NOT NULL,
  `pasien_negara` int(11) NOT NULL,
  `pasien_kota` int(11) NOT NULL,
  `pasien_kecamatan` int(11) NOT NULL,
  `pasien_kelurahan` int(11) NOT NULL,
  `pasien_rt_rw` varchar(16) NOT NULL,
  `pasien_domisili` varchar(128) NOT NULL,
  `pasien_agama` int(11) NOT NULL,
  `pasien_suku` int(11) NOT NULL,
  `pasien_pendidikan` int(11) NOT NULL,
  `pasien_pekerjaan` int(11) NOT NULL,
  `pasien_nikah` int(11) NOT NULL,
  `pasien_valid` int(11) NOT NULL,
  `pasien_catatan` varchar(512) NOT NULL,
  `pasien_wali_nama` varchar(128) NOT NULL,
  `pasien_wali_tgl_lahir` datetime NOT NULL,
  `pasien_wali_jk` tinyint(4) NOT NULL,
  `pasien_wali_alamat` varchar(256) NOT NULL,
  `pasien_wali_hub` varchar(64) NOT NULL,
  `pasien_create_by` int(11) NOT NULL,
  `pasien_create_at` datetime NOT NULL,
  `pasien_update_by` int(11) NOT NULL,
  `pasien_update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`pasien_id`, `pasien_nrm`, `pasien_rfid`, `pasien_kk`, `pasien_nid_tipe`, `pasien_nid_no`, `pasien_nama`, `pasien_jenis_kelamin`, `pasien_gol_darah`, `pasien_tempat_lahir`, `pasien_tanggal_lahir`, `pasien_umur`, `pasien_jenis`, `pasien_no_telp`, `pasien_no_hp`, `pasien_alamat`, `pasien_email`, `pasien_negara`, `pasien_kota`, `pasien_kecamatan`, `pasien_kelurahan`, `pasien_rt_rw`, `pasien_domisili`, `pasien_agama`, `pasien_suku`, `pasien_pendidikan`, `pasien_pekerjaan`, `pasien_nikah`, `pasien_valid`, `pasien_catatan`, `pasien_wali_nama`, `pasien_wali_tgl_lahir`, `pasien_wali_jk`, `pasien_wali_alamat`, `pasien_wali_hub`, `pasien_create_by`, `pasien_create_at`, `pasien_update_by`, `pasien_update_at`) VALUES
(1, '000001', '029810310', '089103192', 1, '23110', 'Ayatullah', 1, 'A', 'Kediri', '2018-08-02 00:00:00', 0, 1, '092182093', '123123193', 'Gresik', 'ayatullahgurutta@gmail.com', 1, 1, 1, 1, '2_4', 'Weew', 0, 0, 0, 1, 0, 1, 'Nope Nope', 'Wololo', '2018-08-03 00:00:00', 0, 'Wololy', 'Lolol', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(2, '000002', '029810310', '089103192', 1, '23110', 'Ayatullah', 1, 'A', 'Kediri', '2016-06-08 00:00:00', 2, 1, '092182093', '123123193', 'Gresik', 'ayatullahgurutta@gmail.com', 1, 1, 1, 1, '2_4', 'Weew', 0, 0, 0, 1, 0, 1, 'Nopelu', 'Wololo', '1992-07-08 00:00:00', 0, 'Wololy', 'Lolol', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_jalan`
--

CREATE TABLE `rawat_jalan` (
  `rawat_id` int(11) NOT NULL,
  `rawat_pasien` int(11) NOT NULL,
  `rawat_tanggal` datetime NOT NULL,
  `rawat_bayar` int(11) NOT NULL,
  `rawat_asuransi` varchar(64) NOT NULL,
  `rawat_penanggung` int(11) NOT NULL,
  `rawat_kadaluarsa` datetime NOT NULL,
  `rawat_kelas` int(11) NOT NULL,
  `rawat_unit` int(11) NOT NULL,
  `rawat_dokter` int(11) NOT NULL,
  `rawat_paket` int(11) NOT NULL,
  `rawat_cara_masuk` int(11) NOT NULL,
  `rawat_tarif` varchar(32) NOT NULL,
  `rawat_create_by` int(11) NOT NULL,
  `rawat_create_at` datetime NOT NULL,
  `rawat_update_by` int(11) NOT NULL,
  `rawat_update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawat_jalan`
--

INSERT INTO `rawat_jalan` (`rawat_id`, `rawat_pasien`, `rawat_tanggal`, `rawat_bayar`, `rawat_asuransi`, `rawat_penanggung`, `rawat_kadaluarsa`, `rawat_kelas`, `rawat_unit`, `rawat_dokter`, `rawat_paket`, `rawat_cara_masuk`, `rawat_tarif`, `rawat_create_by`, `rawat_create_at`, `rawat_update_by`, `rawat_update_at`) VALUES
(0, 0, '2018-08-03 09:08:30', 1, '87120398', 1, '2018-08-17 00:00:00', 1, 1, 1, 1, 1, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`pasien_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `pasien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
