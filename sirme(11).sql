-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 05:12 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirme`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `pid` char(64) NOT NULL,
  `no_pasien` int(100) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `status_pernikahan` varchar(100) NOT NULL,
  `nama_penanggungjawab` varchar(100) NOT NULL,
  `hubungan_penanggungjawab` varchar(100) NOT NULL,
  `no_telpon_penanggungjawab` varchar(1000) NOT NULL,
  `hubungan` varchar(100) NOT NULL,
  `nama_kerabat` varchar(100) NOT NULL,
  `no_telpon_kerabat` varchar(100) NOT NULL,
  `no_telpon` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tanggal_daftar` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`pid`, `no_pasien`, `no_ktp`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `alamat`, `kecamatan`, `kota`, `provinsi`, `status_pernikahan`, `nama_penanggungjawab`, `hubungan_penanggungjawab`, `no_telpon_penanggungjawab`, `hubungan`, `nama_kerabat`, `no_telpon_kerabat`, `no_telpon`, `email`, `tanggal_daftar`, `foto`, `user_id`) VALUES
('', 1000, '12222222', 'Fadhil', 'Perempuan', '02-September-1912', '12', 'Bandung', '', '', '', 'Belum Nikah', 'Haja', '', '0855', 'Wali', '', '', '0822', '', '', '12222222.PNG', 0),
('', 1001, '454888', 'Teguh Piganta', 'Laki-laki', '13 - Juli - 1910', 'Pariaman', 'Bandung', 'Bojongsoang', 'Kab Bandung', 'Jawa Barat', 'Belum Kawin', 'Haja', '', '0988', 'Saudara Kandung', 'Zaki', '545454', '977', 'teg@teg.com', '', '9445252362346.jpg', 102),
('', 1002, '690038', 'Nurlela', 'Perempuan', '13 - Oktober - 1911', 'Pematang Siantar', 'Peru', '', '', '', 'Sudah Nikah', 'Hariai', '', '', '', '', '', '089923432365', '', '', '690038.jpg', 0),
('', 1003, '236545236541', 'John Doe', 'Laki-laki', '02 - Juli - 1951', 'Bandung', 'Bandung', '', '', '', 'Belum Nikah', 'Kudli', '', '', '', '', '', '085263523652', '', '', 'default-image.png', 0),
('', 1004, '1202145213', 'Abiluda Awalum', 'Laki-laki', '02 - Juli - 1992', 'Jakarta', 'Jakarta', '', '', '', 'Belum Nikah', 'Kudli', '', '', '', '', '', '082240118844', '', '', 'default-image.png', 0),
('', 1005, '1566354798542365', 'Meisarohmi', 'Perempuan', '15 - Oktober - 1992', 'Makasar', 'Bandung', '', '', '', 'Belum Nikah', 'Arisman', '', '', '', '', '', '082265424853', '', '', 'default-image.png', 0),
('', 1006, '5632154785632125', 'Alhilman Alqarin', 'Laki-laki', '14 - Oktober - 1913', 'Jakartah', 'Bandung', '', '', '', 'Sudah Nikah', 'Alisman', '', '', '', '', '', '086542145426', '', '', 'default-image.png', 0),
('', 1007, '8954785412365422', 'Monaqi Affu', 'Perempuan', '09 - Oktober - 1996', 'Jakarta', 'Bandung', '', '', '', 'Belum Nikah', 'Kurta', '', '', '', '', '', '08996325415', '', '', 'default-image.png', 0),
('', 1008, '3214569875365412', 'Qukila Naehm', 'Perempuan', '12 - Oktober - 1995', 'Semarang', 'Bandung', '', '', '', 'Belum Nikah', 'Alwi Munsari', '', '', '', '', '', '082240118856', '', '', 'default-image.png', 0),
('', 1009, '5632145232145212', 'Edwardo Pratama', 'Laki-laki', '11 - Agustus - 1991', 'Bandung', 'Bandung', '', '', '', 'Belum Nikah', 'Darmunis', '', '', '', '', '', '082240115544', '', '05-07-2018', 'default-image.png', 0),
('', 1013, '12345676547345', 'M. Zaki', 'Laki-laki', '04 - Juli - 2018 -  - ', 'Padang', 'Bandung', '', '', '', 'Belum Nikah', 'Fafd', '', '', '', '', '', '082245654677', '', '10-07-2018', 'default-image.png', 0),
('', 1017, '6666666666666', 'Muhammad Ihsan', 'Laki-laki', '04 - Juli - 1995', 'Bandung', 'Jl. Buah Batu Kab. Bandung', '', '', '', 'Belum Nikah', 'fffff', '', '', '', '', '', '089977665544', '', '25-07-2018', 'default-image.png', 0),
('5ad0cbb0-a162-11e8-922c-4ccc6a6a5b3g', 1018, '4567756433455656', 'Abiluda Awalums', 'Perempuan', '04 - Juli - 2018', 'Jakarta', 'Jl. Buah Batu Kab. Bandung', '', '', '', 'Belum Nikah', 'ABAC', '', '', '', '', '', '087766554433', '', '25-07-2018', 'default-image.png', 0),
('3219caf4-c716-11e8-a09f-4ccc6a6a5b3f', 1022, '6542', 'Edward De Gusri', 'Laki-laki', '10 - Juli - 1996', 'Bandung', 'Jl. Buah Batu Kab. Bandung', 'Bandung', 'Bandung', 'Jawa Barat', 'Belum Nikah', 'Khaidir', '', '0822', '', '', '', '0822', 'ra@y.com', '03-10-2018', 'default-image.png', 102),
('P0710185bb985796ca81', 1024, '45', 'Khalil Qibran One', 'Laki-laki', '10 - Februari - 2011', 'Padang', 'Jl. Buah Batu Kab. Bandung', 'Dayeuhkolot', 'Bandung', 'Jawa Barat', 'Sudah Nikah', 'rwr', '', '353', '', '', '', '54545', 'rajadwikhagusri@gmail.com', '07-10-2018', 'default-image.png', 102),
('P0910185bbc241674b15', 1025, '1333485444774474', 'Irvan Setiawan', 'Laki-laki', '13 - Juli - 1996', 'Pariaman', 'Bandung', 'Bojongsoang', 'Kab Bandung', 'Jawa Barat', 'Belum Kawin', 'Heb', '', '089955667788', 'Wali', 'Hey', '089956473845', '085522441166', 'irvan@yahoo.com', '09-10-2018', 'default-image.png', 102),
('P2610185bd284d1ec31f', 1026, '52522', 'Nutela Nasaya', 'Perempuan', '30 - September - 1996', 'New York', 'Jl. Buah Batu Kab. Bandung', 'Dayeuhkolot', 'Kab. Bandung', 'Jawa Barat', 'Sudah Nikah', 'Tela', 'Orangtua', '5252525', 'Lainya', 'Darm', '52552', '050505525', 'eddie@yahoo.com', '26-10-2018', '', 102),
('P2610185bd28560f33bd', 1027, '753868928528626', 'Terejani Andyani', 'Perempuan', '03 - Oktober - 1996', 'New York', 'Jl. Buah Batu Kab. Bandung', 'Dayeuhkolot', 'Kab. Bandung', 'Jawa Barat', 'Sudah Nikah', 'Tela', 'Orangtua', '082255112222', 'Lainya', 'Darm', '588888', '085522441155', 'john@yahoo.com', '26-10-2018', 'default-image.png', 102),
('P2610185bd2860c98321', 1028, '125456217517465485', 'Arminov Kolaski', 'Laki-laki', '02 - Oktober - 1996', 'New York', 'Jl. Buah Batu Kab. Bandung', 'Dayeuhkolot', 'Kab. Bandung', 'Jawa Barat', 'Sudah Nikah', 'Tela', 'Orangtua', '085244112241', 'Wali', 'Darm', '02554115445', '08254441123', 'eddie@yahoo.com', '26-10-2018', 'default-image.png', 102);

-- --------------------------------------------------------

--
-- Table structure for table `rawat_jalan`
--

CREATE TABLE `rawat_jalan` (
  `id` varchar(100) NOT NULL,
  `id_rawat` int(11) NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `classSystem` varchar(100) NOT NULL,
  `classCode` varchar(100) NOT NULL,
  `classDisplay` varchar(100) NOT NULL,
  `typeText` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `jam_keluar` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawat_jalan`
--

INSERT INTO `rawat_jalan` (`id`, `id_rawat`, `no_pasien`, `classSystem`, `classCode`, `classDisplay`, `typeText`, `tanggal`, `waktu`, `jam_keluar`, `status`, `dokter`) VALUES
('RJ0810185bbab85b8302d', 1, 1001, 'http://hl7.org/fhir/v3/ActCode', 'amb', 'ambulatory', 'Rawat Jalan', '08-10-2018', '08:52:27', '08:57:34', 'finished', 1),
('RJ0810185bbabe39ecab1', 2, 1001, 'http://hl7.org/fhir/v3/ActCode', 'amb', 'ambulatory', 'Rawat Jalan', '08-10-2018', '09:17:29', '10:03:22', 'finished', 103),
('RJ1110185bbf16fb97d7e', 3, 1001, 'http://hl7.org/fhir/v3/ActCode', 'amb', 'ambulatory', 'Rawat Jalan', '11-10-2018', '16:25:15', '', 'in-progress', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_antrian`
--

CREATE TABLE `tb_antrian` (
  `id` varchar(100) NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `poliklinik` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `praktisi` int(11) NOT NULL,
  `dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_antrian`
--

INSERT INTO `tb_antrian` (`id`, `no_pasien`, `tanggal`, `jam`, `poliklinik`, `status`, `praktisi`, `dokter`) VALUES
('AN0810185bbab84970286', 1001, '08-10-2018', '08:52:09', 'Umum', 'Selesai', 102, 1),
('AN0810185bbabab72d903', 1001, '08-10-2018', '09:02:31', 'Umum', 'Selesai', 102, 103),
('AN1110185bbec43f2e096', 1001, '11-10-2018', '10:32:15', 'Umum', 'Dalam Pemeriksaan', 102, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosis`
--

CREATE TABLE `tb_diagnosis` (
  `id` varchar(100) NOT NULL,
  `status_klinis` varchar(100) NOT NULL,
  `kode_diagnosis` varchar(100) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `no_pasien` varchar(100) NOT NULL,
  `no_rawat_jalan` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `no_id_praktisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diagnosis`
--

INSERT INTO `tb_diagnosis` (`id`, `status_klinis`, `kode_diagnosis`, `diagnosis`, `keterangan`, `no_pasien`, `no_rawat_jalan`, `tanggal`, `jam`, `no_id_praktisi`) VALUES
('CO0810185bbac0653f3a0', 'active', 'J09.X2', 'Influenza due to identified novel influenza A virus with other respiratory manifestations', '', '1001', '2', '08-10-2018', '09:26:45', '103'),
('CO0810185bbac47c380e7', 'active', 'P15.0', 'Birth injury to liver', '', '1001', '2', '08-10-2018', '09:44:12', '103'),
('co2910185bd6a75e07d74', '', 'J09.X2', 'Influenza due to identified novel influenza A virus with other respiratory manifestations', '', '1001', '', '08-10-2018', '09:26:45', ''),
('co2910185bd6a76349b9b', '', 'P15.0', 'Birth injury to liver', '', '1001', '', '08-10-2018', '09:44:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_fhir_url`
--

CREATE TABLE `tb_fhir_url` (
  `pk` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_fhir_url`
--

INSERT INTO `tb_fhir_url` (`pk`, `nama`, `url`) VALUES
(21, 'PACSBackup Server', 'http://192.168.8.102/api/index.php/api/');

-- --------------------------------------------------------

--
-- Table structure for table `tb_instance`
--

CREATE TABLE `tb_instance` (
  `pk` varchar(100) NOT NULL,
  `fk_series` varchar(200) NOT NULL,
  `instance_iuid` varchar(200) NOT NULL,
  `sop_class` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_instance`
--

INSERT INTO `tb_instance` (`pk`, `fk_series`, `instance_iuid`, `sop_class`) VALUES
('in0211185bdc13c00689a', 'sr0211185bdc13bff2b9a', '1.2.826.0.1.3680043.8.1055.1.20111103112244831.30826609.78057758', 'OT'),
('in0211185bdc13f08b847', 'sr0211185bdc13f068113', '1.2.840.113619.2.15.1008000062035011254.825190719.0.31.2.1', 'RF'),
('in0211185bdc17a02f4b3', 'sr0211185bdc17a0263f2', '1.3.46.670589.11.0.4.1996082307380006', 'MR');

-- --------------------------------------------------------

--
-- Table structure for table `tb_item_resep`
--

CREATE TABLE `tb_item_resep` (
  `item_id` int(11) NOT NULL,
  `id_resep` varchar(100) NOT NULL,
  `no_obat` int(11) NOT NULL,
  `kuantitas` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status_resep` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_item_resep`
--

INSERT INTO `tb_item_resep` (`item_id`, `id_resep`, `no_obat`, `kuantitas`, `keterangan`, `status_resep`) VALUES
(1, 'RO0810185bbabe3a3cad3', 9000, '2', 'sekali sehari sehabis bobok', ''),
(2, 'RO0810185bbabe3a3cad3', 9003, '4', 'sekalis sehari sehabis coli', ''),
(3, 'RO1110185bbec44738c26', 9001, '6', 'dua kali sehari', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_item_transaksi`
--

CREATE TABLE `tb_item_transaksi` (
  `id_item` int(11) NOT NULL,
  `id_transaksi` varchar(100) NOT NULL,
  `jenis_transaksi` varchar(100) NOT NULL,
  `nama_transaksi` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `biaya` int(11) AS (harga * jumlah) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_item_transaksi`
--

INSERT INTO `tb_item_transaksi` (`id_item`, `id_transaksi`, `jenis_transaksi`, `nama_transaksi`, `jumlah`, `harga`, `biaya`) VALUES
(1, 'AN0810185bbab84970286', 'Pendaftaran', 'Umum', 1, 10000, 10000),
(2, 'AN0810185bbab84970286', 'Pemeriksaan', 'Umum', 1, 20000, 20000),
(3, 'AN0810185bbabab72d903', 'Pendaftaran', 'Umum', 1, 10000, 10000),
(4, 'AN0810185bbabab72d903', 'Pemeriksaan', 'Umum', 1, 20000, 20000),
(5, 'AN1110185bbec43f2e096', 'Pendaftaran', 'Umum', 1, 10000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`, `keterangan`) VALUES
(0, 'Admin', ''),
(1, 'Dokter', ''),
(2, 'Resepsionis', ''),
(3, 'Kasir', ''),
(4, 'Apoteker', ''),
(5, 'Perawat', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_praktek`
--

CREATE TABLE `tb_jadwal_praktek` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jadwal_praktek` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluhan`
--

CREATE TABLE `tb_keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `jenis_keluhan` varchar(100) NOT NULL,
  `no_rawat_jalan` int(11) NOT NULL,
  `jam_input` varchar(100) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keluhan`
--

INSERT INTO `tb_keluhan` (`id_keluhan`, `jenis_keluhan`, `no_rawat_jalan`, `jam_input`, `keluhan`, `keterangan`) VALUES
(1, 'Keluhan Utama', 2, '10:01:15', 'Sakit Kepala', ''),
(2, 'Keluhan Utama', 2, '10:01:24', 'Sakit perut', 'Diikuti dengan mual'),
(3, 'Keluhan Tambahan', 2, '10:01:42', 'Kurang nafsu makan', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `no_obat` int(11) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`no_obat`, `nama_obat`, `jenis`, `kategori`, `harga`, `stok`, `deskripsi`) VALUES
(9000, 'Potion', 'Strip', 'Generik', 5000, 0, 'Obat herbal tapi daneh banyak bgt'),
(9001, 'Paracetamol 500mg', 'Tablet', 'Generik', 5000, 54, 'pereda nyeri dan panas demam'),
(9002, 'Piroxicam', 'Tablet', 'Generik', 7000, 66, ''),
(9003, 'Optimox', 'Tablet', 'Generik', 10000, 34, ''),
(9004, 'Hi Potion', 'Botol', 'Generik', 699, 88, 'Increase your HP by 5000'),
(9005, 'X Potion', 'Botol', 'Generik', 90000, 99, 'Increase your HP to your maximum HP'),
(9007, 'Mega Potion', 'Botol', 'Generik', 9000000, 99, 'Increase to the maximum HP to all allies'),
(9010, 'Paracetamol', 'Sachet', 'Generik', 67, 67, '5yf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_observation`
--

CREATE TABLE `tb_observation` (
  `id` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tipe_pemeriksaan` varchar(100) NOT NULL,
  `no_pasien` varchar(100) NOT NULL,
  `no_rawat_jalan` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `hasil` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `no_id_praktisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_observation`
--

INSERT INTO `tb_observation` (`id`, `status`, `kategori`, `tipe_pemeriksaan`, `no_pasien`, `no_rawat_jalan`, `tanggal`, `jam`, `hasil`, `unit`, `no_id_praktisi`) VALUES
('OB0810185bbabe3eeae4d', 'final', 'Vital Sign', 'Tekanan Darah', '1001', 2, '08-10-2018', '09:17:34', '56', 'mmHg', '103'),
('OB0810185bbabe4f79ba4', 'final', 'Vital Sign', 'Nadi', '1001', 2, '08-10-2018', '09:17:51', '56', 'x/menit', '103'),
('OB1110185bbf1716d33d6', 'final', 'Vital Sign', 'Tekanan Darah', '1001', 3, '11-10-2018', '16:25:42', '55', 'mmHg', '1'),
('ob2910185bd69c10488a0', 'final', 'Vital Sign', 'Tekanan Darah', '1001', 2, '08-10-2018', '09:17:34', '56', 'mmHg', ''),
('ob2910185bd69c654feaf', 'final', 'Vital Sign', 'Nadi', '1001', 2, '08-10-2018', '09:17:51', '56', 'x/menit', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemeriksaan`
--

CREATE TABLE `tb_pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `no_rawat_jalan` int(11) NOT NULL,
  `jam_periksa` varchar(100) NOT NULL,
  `periksa` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemeriksaan`
--

INSERT INTO `tb_pemeriksaan` (`id_pemeriksaan`, `no_rawat_jalan`, `jam_periksa`, `periksa`, `keterangan`) VALUES
(2, 2, '10:01:53', 'Periksa bagian kepala', ''),
(3, 2, '10:02:01', 'Periksa badan yang demam', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penatalaksanaan`
--

CREATE TABLE `tb_penatalaksanaan` (
  `id_penatalaksanaan` int(11) NOT NULL,
  `no_rawat_jalan` int(11) NOT NULL,
  `rencana` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penatalaksanaan`
--

INSERT INTO `tb_penatalaksanaan` (`id_penatalaksanaan`, `no_rawat_jalan`, `rencana`, `keterangan`) VALUES
(1, 2, 'Perbanyak istirahat', ''),
(2, 2, 'Kurangi minum aer putih  ea :) B)', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `id_poli` int(11) NOT NULL,
  `nama_poli` varchar(100) NOT NULL,
  `biaya_pendaftaran` int(11) NOT NULL,
  `biaya_pemeriksaan` int(11) NOT NULL,
  `maksimum_pasien` int(11) NOT NULL,
  `buka` varchar(100) NOT NULL,
  `tutup` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`id_poli`, `nama_poli`, `biaya_pendaftaran`, `biaya_pemeriksaan`, `maksimum_pasien`, `buka`, `tutup`, `deskripsi`) VALUES
(1, 'Umum', 10000, 20000, 10, '08:00', '20:00', 'Poli umum merupakan salah satu dari jenis layanan di Rumah Sakit yang memberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat agar tidak terjadi penularan dan komplikasi penyakit, serta meningkatkan pengetahuan dan kesadaran masyarakat dalm bidang kesehatan. Pelayanan kesehatan dilakukan oleh dokter dan perawat yang memiliki sertifikat dan kompetensi yang dibutuhkan untuk pelayanan kesehatan primer. Apabila ada kasus yang perlu penanganan lebih lanjut, dokter umum akan berkonsultasi dengan dokter spesialis sesuai dengan keadaan pasien.'),
(2, 'Mata', 20000, 30000, 50, '08:00', '16:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_resep`
--

CREATE TABLE `tb_resep` (
  `id` varchar(100) NOT NULL,
  `no_rawat_jalan` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_resep`
--

INSERT INTO `tb_resep` (`id`, `no_rawat_jalan`, `tanggal`, `status`) VALUES
('RO0810185bbab85bbef5b', 1, '08-10-2018', ''),
('RO0810185bbabe3a3cad3', 2, '08-10-2018', ''),
('RO1110185bbec44738c26', 3, '11-10-2018', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat_alergi`
--

CREATE TABLE `tb_riwayat_alergi` (
  `id_alergi` int(11) NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `no_rawat_jalan` int(11) NOT NULL,
  `tanggal_input` varchar(100) NOT NULL,
  `jam_input` varchar(100) NOT NULL,
  `organ_sasaran` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `bahan_kimia` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_riwayat_alergi`
--

INSERT INTO `tb_riwayat_alergi` (`id_alergi`, `no_pasien`, `no_rawat_jalan`, `tanggal_input`, `jam_input`, `organ_sasaran`, `gejala`, `bahan_kimia`, `keterangan`) VALUES
(1, 1001, 2, '08-10-2018', '10:01:06', 'Hidung', 'Bersin', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat_penyakit`
--

CREATE TABLE `tb_riwayat_penyakit` (
  `id_riwayat` int(11) NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `no_rawat_jalan` int(11) NOT NULL,
  `tanggal_input` varchar(100) NOT NULL,
  `jam_input` varchar(100) NOT NULL,
  `kode_icd10` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_riwayat_penyakit`
--

INSERT INTO `tb_riwayat_penyakit` (`id_riwayat`, `no_pasien`, `no_rawat_jalan`, `tanggal_input`, `jam_input`, `kode_icd10`, `diagnosa`, `keterangan`) VALUES
(1, 1001, 2, '08-10-2018', '10:00:54', 'B00.81', 'Herpesviral hepatitis', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_series`
--

CREATE TABLE `tb_series` (
  `pk` varchar(100) NOT NULL,
  `fk_study` varchar(100) NOT NULL,
  `series_iuid` varchar(200) NOT NULL,
  `modality` varchar(200) NOT NULL,
  `started` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_series`
--

INSERT INTO `tb_series` (`pk`, `fk_study`, `series_iuid`, `modality`, `started`) VALUES
('sr0211185bdc13bff2b9a', 'st0211185bdc13bfea64b', '1.2.826.0.1.3680043.8.1055.1.20111103112244831.29109107.29203688', 'OT', '2018-10-15 02:15:03'),
('sr0211185bdc13f068113', 'st0211185bdc13f05e3a1', '1.2.840.113619.2.15.1008000062035011254.825190719.1.31', 'RF', '2018-11-02 01:40:54'),
('sr0211185bdc17a0263f2', 'st0211185bdc17a02001e', '1.3.46.670589.11.0.2.1996082307380006', 'MR', '2018-11-02 01:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_study`
--

CREATE TABLE `tb_study` (
  `pk` varchar(100) NOT NULL,
  `study_iuid` varchar(200) NOT NULL,
  `no_pasien` int(200) NOT NULL,
  `waktu` varchar(200) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `endpoint` varchar(200) NOT NULL,
  `server` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_study`
--

INSERT INTO `tb_study` (`pk`, `study_iuid`, `no_pasien`, `waktu`, `deskripsi`, `endpoint`, `server`) VALUES
('st0211185bdc13bfea64b', '1.2.826.0.1.3680043.8.1055.1.20111103112244831.40200514.30965937', 1001, '2018-10-15 02:15:02', 'TUBUH BAGIAN ATAS', '1', '21'),
('st0211185bdc13f05e3a1', '1.2.840.113619.2.15.1008000062035011254.825190719.2.31', 1001, '2018-11-02 01:40:54', 'GINJAL', '1', '21'),
('st0211185bdc17a02001e', '1.3.46.670589.11.0.1.1996082307380006', 1001, '2018-11-02 01:41:20', 'OTAK', '1', '21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` varchar(100) NOT NULL,
  `no_rawat_jalan` varchar(100) NOT NULL,
  `tanggal_transaksi` varchar(100) NOT NULL,
  `jam_transaksi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `no_rawat_jalan`, `tanggal_transaksi`, `jam_transaksi`, `status`) VALUES
('AN0810185bbab84970286', '1', '08-10-2018', '08:52:09', 'Lunas'),
('AN0810185bbabab72d903', '2', '08-10-2018', '09:02:31', 'Lunas'),
('AN1110185bbec43f2e096', '3', '11-10-2018', '10:32:15', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tipe_admin` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `tanggal_daftar` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `no_sip` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `status_jaga` varchar(100) NOT NULL,
  `jadwal_praktek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama`, `jenis_kelamin`, `tipe_admin`, `alamat`, `kota`, `no_hp`, `email`, `spesialis`, `tanggal_daftar`, `tanggal_lahir`, `no_sip`, `foto`, `status_jaga`, `jadwal_praktek`) VALUES
(1, 'rajagusri', 'ilovepiaman', 'Raja Dwika Gusri', 'Laki - Laki', 'Dokter', 'Jl. Buah Batu Kab. Bandung', 'Bandung', '086545226633', 'rajagusri@yahoo.co.id', 'Umum', '', '', '028/158/SIP-TU/II/2008', 'rajagusri.png', '', ''),
(100, 'teguh', 'teguh', 'Teguh Piganta Putra', 'Laki - Laki', 'Admin', 'Jl. Buah Batu Kab. Bandung', 'Bandung', '089957675', 'teg@yahoo.co.id', '', '', '', '', 'teguh.png', '', ''),
(102, 'defri', 'defri', 'Defri Hidayat', '', 'Resepsionis', 'Bandung', 'Bandung', '089966321541', '', '', '', '', '', 'defri.png', '', ''),
(103, 'gibran', 'gibran', 'Khalil Ghibran One', 'Laki-laki', 'Dokter', 'Jl. Buah Batu Kab. Bandung', 'Bandung', '089934565544', 'gibran@yahoo.com', 'Umum', '', '', '323', 'gibran.jpg', '', 'Senin,Selasa,Rabu,Kamis,Jum\'at'),
(104, 'edward', 'edward', 'Edward De Gusri', 'Laki-laki', 'Dokter', 'Jl. Buah Batu Kab. Bandung', 'Bandung', '082245667788', 'edwardgusri@gmail.com', 'Mata', '', '', 'ST/12/SP', '', '', 'Senin,Selasa,Rabu,Kamis,Jum\'at'),
(106, 'aprido', 'aprido', 'Apridho Darani', 'Laki-laki', 'Resepsionis', 'Jl. Buah Batu Kab. Bandung', 'Bandung', '081255668347', 'ap@yahoo.com', '', '', '', '', 'aprido1.png', '', ''),
(107, 'irvan', 'irvan', 'Irvan Setiwan', 'Laki - Laki', 'Resepsionis', 'Jl. Buah Batu Kab. Bandung', 'Bandung', '081234567890', 'irv@gmail.com', '', '', '', '', 'irvan.jpg', '', ''),
(108, 'deni', 'deni', 'Deni Alberto', 'Laki-laki', 'Dokter', 'Jl. Buah Batu Kab. Bandung', 'Bandung', '082234443345', 'deni@yahoo.co.id', 'Mata', '', '', 'asdasd', 'deni.jpg', '', 'Senin,Selasa,Rabu,Kamis,Jum\'at'),
(109, 'zakia', 'zaki', 'Muhammad Zaki Ramadhani', 'Laki-laki', 'Resepsionis', 'Jl. Buah Batu Kab. Bandung', 'Bandung', '082249887675', 'zak@gmail.com', '', '', '', '', 'zaki1.jpg', '', ''),
(110, 'pratama', 'pratama', 'Edward Putra Pratama', 'Laki-laki', 'Resepsionis', 'Jl. Soekarno Hatta No. 2 ', 'Bandung', '081245667654', 'soeta@gmail.com', '', '', '', '', 'pratama.jpg', '', ''),
(111, 'zulhilman', 'zulhilman', 'Zulhilman Hakim', 'Laki-laki', 'Dokter', 'Jl. Soekarno Hatta No. 2', 'Bandung', '082299572964', 'zul@gmail.com', 'Umum', '', '', '028/546/SIP-TU/II/2008', '', '', 'Senin,Selasa,Rabu,Kamis'),
(112, 'rahmi', 'rahmi', 'Rahmi Wahyuni Putri', 'Perempuan', 'Perawat', 'Jl. Buah Batu Kab. Bandung', 'Bandung', '08967788346', 'rahmi@yahoo.com', '', '', '', '', 'rahmi.jpg', '', ''),
(113, 'aulia', 'aulia', 'Aulita Putri Anjani', 'Perempuan', 'Apoteker', 'Jl. Soekarno Hatta No. 2', 'Bandung', '089678894155', 'putri@yahoo.co.id', '', '', '', '', 'aulia.jpg', '', ''),
(114, 'teguhi', 'teguh', 'Khalil Qibran One', 'Laki-laki', 'Kasir', 'Jl. Buah Batu Kab. Bandung', 'Bandung', '089934565544', 'rajadwikhagusri@gmail.com', '', '', '', '', '1.jpg', '', ''),
(116, 'qurafu', 'qurafu', 'Qurafu Minaj', 'Perempuan', 'Admin', 'Bandung', 'Kab Bandung', '089934565544', 'qurafu@gmail.com', '', '', '', '', '3.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_pasien`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`);

--
-- Indexes for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  ADD PRIMARY KEY (`id_rawat`),
  ADD KEY `no_pasien` (`no_pasien`),
  ADD KEY `dokter` (`dokter`),
  ADD KEY `dokter_2` (`dokter`);

--
-- Indexes for table `tb_antrian`
--
ALTER TABLE `tb_antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_diagnosis`
--
ALTER TABLE `tb_diagnosis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_fhir_url`
--
ALTER TABLE `tb_fhir_url`
  ADD PRIMARY KEY (`pk`);

--
-- Indexes for table `tb_instance`
--
ALTER TABLE `tb_instance`
  ADD PRIMARY KEY (`pk`),
  ADD KEY `fk_series` (`fk_series`);

--
-- Indexes for table `tb_item_resep`
--
ALTER TABLE `tb_item_resep`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `no_obat` (`no_obat`);

--
-- Indexes for table `tb_item_transaksi`
--
ALTER TABLE `tb_item_transaksi`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_jadwal_praktek`
--
ALTER TABLE `tb_jadwal_praktek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD KEY `no_rawat_jalan` (`no_rawat_jalan`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`no_obat`);

--
-- Indexes for table `tb_observation`
--
ALTER TABLE `tb_observation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rawat` (`no_rawat_jalan`);

--
-- Indexes for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `no_rawat_jalan` (`no_rawat_jalan`);

--
-- Indexes for table `tb_penatalaksanaan`
--
ALTER TABLE `tb_penatalaksanaan`
  ADD PRIMARY KEY (`id_penatalaksanaan`),
  ADD KEY `no_rawat_jalan` (`no_rawat_jalan`);

--
-- Indexes for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tb_resep`
--
ALTER TABLE `tb_resep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rawat` (`no_rawat_jalan`);

--
-- Indexes for table `tb_riwayat_alergi`
--
ALTER TABLE `tb_riwayat_alergi`
  ADD PRIMARY KEY (`id_alergi`),
  ADD KEY `no_pasien` (`no_pasien`);

--
-- Indexes for table `tb_riwayat_penyakit`
--
ALTER TABLE `tb_riwayat_penyakit`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `no_pasien` (`no_pasien`);

--
-- Indexes for table `tb_series`
--
ALTER TABLE `tb_series`
  ADD PRIMARY KEY (`pk`),
  ADD KEY `fk_study` (`fk_study`);

--
-- Indexes for table `tb_study`
--
ALTER TABLE `tb_study`
  ADD PRIMARY KEY (`pk`),
  ADD KEY `no_pasien` (`no_pasien`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `no_pasien` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1029;
--
-- AUTO_INCREMENT for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  MODIFY `id_rawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_fhir_url`
--
ALTER TABLE `tb_fhir_url`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_item_resep`
--
ALTER TABLE `tb_item_resep`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_item_transaksi`
--
ALTER TABLE `tb_item_transaksi`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_jadwal_praktek`
--
ALTER TABLE `tb_jadwal_praktek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `no_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9011;
--
-- AUTO_INCREMENT for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_penatalaksanaan`
--
ALTER TABLE `tb_penatalaksanaan`
  MODIFY `id_penatalaksanaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_riwayat_alergi`
--
ALTER TABLE `tb_riwayat_alergi`
  MODIFY `id_alergi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_riwayat_penyakit`
--
ALTER TABLE `tb_riwayat_penyakit`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  ADD CONSTRAINT `rawat_jalan_ibfk_1` FOREIGN KEY (`no_pasien`) REFERENCES `pasien` (`no_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_instance`
--
ALTER TABLE `tb_instance`
  ADD CONSTRAINT `tb_instance_ibfk_1` FOREIGN KEY (`fk_series`) REFERENCES `tb_series` (`pk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_observation`
--
ALTER TABLE `tb_observation`
  ADD CONSTRAINT `tb_observation_ibfk_1` FOREIGN KEY (`no_rawat_jalan`) REFERENCES `rawat_jalan` (`id_rawat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_riwayat_alergi`
--
ALTER TABLE `tb_riwayat_alergi`
  ADD CONSTRAINT `tb_riwayat_alergi_ibfk_1` FOREIGN KEY (`no_pasien`) REFERENCES `pasien` (`no_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_riwayat_penyakit`
--
ALTER TABLE `tb_riwayat_penyakit`
  ADD CONSTRAINT `tb_riwayat_penyakit_ibfk_1` FOREIGN KEY (`no_pasien`) REFERENCES `pasien` (`no_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_series`
--
ALTER TABLE `tb_series`
  ADD CONSTRAINT `tb_series_ibfk_1` FOREIGN KEY (`fk_study`) REFERENCES `tb_study` (`pk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_study`
--
ALTER TABLE `tb_study`
  ADD CONSTRAINT `tb_study_ibfk_1` FOREIGN KEY (`no_pasien`) REFERENCES `pasien` (`no_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
