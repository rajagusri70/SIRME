-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 04:28 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `tipe_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `nama`, `foto`, `tipe_admin`) VALUES
(1, 'rajagusri', '88396aee0b0425bb9dae2c6d30c1c283', 'Raja Dwika Gusri', 'rajagusri.jpg', 'dokter'),
(2, 'defri', 'b016ed391f56643cbd84f0b5527680a7', 'Defri Hidayat', 'defri.jpg', 'resepsionis');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `no_pasien` int(100) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `umur` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `golongan_darah` varchar(100) NOT NULL,
  `status_pernikahan` varchar(100) NOT NULL,
  `nama_orangtua` varchar(100) NOT NULL,
  `pekerjaan_orangtua` varchar(100) NOT NULL,
  `nama_suamistri` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `no_telpon` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_pasien`, `no_ktp`, `no_kk`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `umur`, `alamat`, `pekerjaan`, `pendidikan`, `golongan_darah`, `status_pernikahan`, `nama_orangtua`, `pekerjaan_orangtua`, `nama_suamistri`, `agama`, `no_telpon`, `foto`) VALUES
(18, '12222222', '212131313', 'Fadhil', 'Perempuan', '02-September-1912', '12', '12', 'Bandung', 'Mahasiswa', 'Sarjana', 'A', 'Belum Nikah', 'Haja', 'PNS', 'Adita', 'Islam', '0822', '12222222.PNG'),
(20, '9445252362346', '5525235', 'Teguh Piganta', 'Perempuan', '13-Juli-1910', 'Pariaman', '12', 'Bandung', 'Mahasiswa', 'Sarjana', 'A', 'Belum Nikah', 'Haja', 'PNS', 'Adita', 'Islam', '977', '9445252362346.jpg'),
(1002, '690038', '4572364', 'Nurlela', 'Perempuan', '13 - Oktober - 1911', 'Pematang Siantar', '42', 'Peru', '-', 'SMA', 'AB', 'Sudah Nikah', 'Hariai', '-', 'Pasteur', 'Kristen', '089923432365', '690038.jpg'),
(1003, '236545236541', '365423654123', 'John Doe', 'Laki-laki', '02 - Juli - 1951', 'Bandung', '22', 'Bandung', 'Mahasiswa', 'Sarjana', 'AB', 'Belum Nikah', 'Kudli', 'Swasta', 'Astira', 'Islam', '085263523652', '236545236541.png'),
(1004, '1202145213', '2541235785', 'Abiluda Awalum', 'Laki-laki', '02 - Juli - 1992', 'Jakarta', '14', 'Jakarta', 'Mahasiswa', 'Sarjana', 'A', 'Belum Nikah', 'Kudli', 'Swasta', 'Adita', 'Islam', '082240118844', '1202145213.jpg'),
(1005, '1566354798542365', '3214569856321152', 'Meisarohmi', 'Perempuan', '15 - Oktober - 1992', 'Makasar', '21', 'Bandung', '-', '-', 'O', 'Belum Nikah', 'Arisman', '-', 'Ariskq', 'Islam', '082265424853', '1566354798542365.png'),
(1006, '5632154785632125', '5632147896542364', 'Alhilman Alqarin', 'Laki-laki', '14 - Oktober - 1913', 'Jakartah', '34', 'Bandung', 'CEO', 'Magister', 'O', 'Sudah Nikah', 'Alisman', '-', 'Aqila Nur Azizah', 'Islam', '086542145426', '5632154785632125.jpg'),
(1007, '8954785412365422', '9632145896321475', 'Monaqi Affu', 'Perempuan', '09 - Oktober - 1996', 'Jakarta', '22', 'Bandung', 'Mahasiswa', 'Sarjana', 'A', 'Belum Nikah', 'Kurta', 'PNS', '-', 'Islam', '08996325415', '8954785412365422.jpg'),
(1008, '3214569875365412', '3215698745632584', 'Qukila Naehm', 'Perempuan', '12 - Oktober - 1995', 'Semarang', '21', 'Bandung', 'Mahasiswa', 'Sarjana', 'A', 'Belum Nikah', 'Alwi Munsari', 'PNS', '-', 'Islam', '082240118856', '3214569875365412.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_jalan`
--

CREATE TABLE `rawat_jalan` (
  `id_rawat` int(11) NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `biaya` varchar(100) NOT NULL,
  `poliklinik` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `perawat` int(11) NOT NULL,
  `dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawat_jalan`
--

INSERT INTO `rawat_jalan` (`id_rawat`, `no_pasien`, `timestamp`, `tanggal`, `waktu`, `biaya`, `poliklinik`, `status`, `perawat`, `dokter`) VALUES
(24, 1003, '0.75756600 1527577030', '29-05-2018', '13:57:10', '10000', 'Poli Umum', 'Selesai', 0, 0),
(25, 1004, '29-05-20180.86112000 1527601807', '29-05-2018', '20:50:07', '10000', 'Poli Umum', 'Dalam Pemeriksaan', 0, 0),
(133, 1003, 'adddasdad', '29-06-2018', '20:50:07', '20000', 'Poli Mata', 'Menunggu', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosa_umum`
--

CREATE TABLE `tb_diagnosa_umum` (
  `id_diagnosa` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL,
  `tanggal_cek` varchar(100) NOT NULL,
  `jam_cek` varchar(100) NOT NULL,
  `kode_icd10` varchar(100) NOT NULL,
  `diagnosa` text NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diagnosa_umum`
--

INSERT INTO `tb_diagnosa_umum` (`id_diagnosa`, `id_periksa`, `tanggal_cek`, `jam_cek`, `kode_icd10`, `diagnosa`, `keterangan`) VALUES
(1, 180, '29-05-2018', '20:54:39', 'L50.2', 'Urtikaria (Biduran)', 'Biduran karena demam dan perubahan cuaca drastis'),
(4, 180, '03-06-2018', '23:48:59', 'L50.0', 'Allergic urticaria', 'Biduran'),
(6, 180, '04-06-2018', '00:05:44', 'A75.9', 'Typhus fever, unspecified', 'Tipes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_item_transaksi`
--

CREATE TABLE `tb_item_transaksi` (
  `id_item` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
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
(5, 7, 'Pendaftaran', 'Poli Umum', 1, 10000, 10000),
(9, 7, 'Pemeriksaan', 'Poli Umum', 1, 20000, 20000),
(11, 7, 'Pembelian Obat', 'Piroxicam', 3, 7000, 21000),
(12, 7, 'Pembelian Obat', 'Paracetamol', 7, 5000, 35000),
(13, 7, 'Pembelian Obat', 'Optimox', 2, 10000, 20000),
(14, 8, 'Pendaftaran', 'Poli Umum', 1, 10000, 10000),
(15, 8, 'Pemeriksaan', 'Poli Umum', 1, 20000, 20000),
(16, 8, 'Pembelian Obat', 'Piroxicam', 1, 7000, 7000),
(17, 8, 'Pembelian Obat', 'Paracetamol', 4, 5000, 20000),
(18, 8, 'Pembelian Obat', 'Optimox', 2, 10000, 20000),
(19, 8, 'Pemeriksaan', 'Poli Umum', 1, 20000, 20000),
(20, 8, 'Pembelian Obat', 'Piroxicam', 1, 7000, 7000),
(21, 8, 'Pembelian Obat', 'Paracetamol', 4, 5000, 20000),
(22, 8, 'Pembelian Obat', 'Optimox', 2, 10000, 20000),
(23, 8, 'Pembelian Obat', 'Piroxicam', 4, 7000, 28000),
(24, 8, 'Pemeriksaan', 'Poli Umum', 1, 20000, 20000),
(25, 8, 'Pembelian Obat', 'Piroxicam', 1, 7000, 7000),
(26, 8, 'Pembelian Obat', 'Paracetamol', 4, 5000, 20000),
(27, 8, 'Pembelian Obat', 'Optimox', 2, 10000, 20000),
(28, 8, 'Pembelian Obat', 'Piroxicam', 4, 7000, 28000),
(29, 8, 'Pemeriksaan', 'Poli Umum', 1, 20000, 20000),
(30, 8, 'Pembelian Obat', 'Piroxicam', 1, 7000, 7000),
(31, 8, 'Pembelian Obat', 'Paracetamol', 4, 5000, 20000),
(32, 8, 'Pembelian Obat', 'Optimox', 2, 10000, 20000),
(33, 8, 'Pembelian Obat', 'Piroxicam', 4, 7000, 28000),
(34, 8, 'Pemeriksaan', 'Poli Umum', 1, 20000, 20000),
(35, 8, 'Pembelian Obat', 'Piroxicam', 1, 7000, 7000),
(36, 8, 'Pembelian Obat', 'Paracetamol', 4, 5000, 20000),
(37, 8, 'Pembelian Obat', 'Optimox', 2, 10000, 20000),
(38, 8, 'Pembelian Obat', 'Piroxicam', 4, 7000, 28000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluhan`
--

CREATE TABLE `tb_keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL,
  `jam_input` varchar(100) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keluhan`
--

INSERT INTO `tb_keluhan` (`id_keluhan`, `id_periksa`, `jam_input`, `keluhan`, `keterangan`) VALUES
(5, 180, '20:53:28', 'Gatal-gatal', 'Seluruh badan mengalami pembengkakan');

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
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`no_obat`, `nama_obat`, `jenis`, `kategori`, `harga`, `stok`) VALUES
(1, 'Paracetamol', 'Tablet', 'G', 5000, 54),
(2, 'Piroxicam', 'Kapsul', 'G', 7000, 66),
(3, 'Optimox', 'Suntik', 'G', 10000, 34);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemeriksaan`
--

CREATE TABLE `tb_pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL,
  `jam_periksa` varchar(100) NOT NULL,
  `periksa` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemeriksaan`
--

INSERT INTO `tb_pemeriksaan` (`id_pemeriksaan`, `id_periksa`, `jam_periksa`, `periksa`, `keterangan`) VALUES
(7, 180, '20:53:55', 'Cek Bentolan di kulit', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penatalaksanaan`
--

CREATE TABLE `tb_penatalaksanaan` (
  `id_penatalaksanaan` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL,
  `rencana` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penatalaksanaan`
--

INSERT INTO `tb_penatalaksanaan` (`id_penatalaksanaan`, `id_periksa`, `rencana`, `keterangan`) VALUES
(10, 160, 'Jaga Makanan', 'Jangan memakanan makanan yang mengandung banyak asam terutama jangan biarkan perut dalam keadaan kosong'),
(12, 180, 'Jangan biarkan kulit sering kena angin', ''),
(13, 180, 'Jangan memakan makanan yang merangsang reaksi alergi', ''),
(14, 180, 'Makanan', 'Hindari makanan perangsang gatal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_periksa`
--

CREATE TABLE `tb_periksa` (
  `id_periksa` int(11) NOT NULL,
  `id_rawat` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal_masuk` varchar(100) NOT NULL,
  `jam_masuk` varchar(100) NOT NULL,
  `tanggal_keluar` varchar(100) NOT NULL,
  `jam_keluar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_periksa`
--

INSERT INTO `tb_periksa` (`id_periksa`, `id_rawat`, `user_id`, `tanggal_masuk`, `jam_masuk`, `tanggal_keluar`, `jam_keluar`) VALUES
(160, 24, 1, '29-05-2018', '14:10:31', '29-05-2018', '20:47:31'),
(180, 25, 1, '29-05-2018', '20:50:27', '03-06-2018', '23:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `id_poli` int(11) NOT NULL,
  `nama_poli` varchar(100) NOT NULL,
  `biaya_pendaftaran` int(11) NOT NULL,
  `biaya_pemeriksaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`id_poli`, `nama_poli`, `biaya_pendaftaran`, `biaya_pemeriksaan`) VALUES
(1, 'Poli Umum', 10000, 20000),
(2, 'Poli Mata', 20000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_resep`
--

CREATE TABLE `tb_resep` (
  `no_id` int(11) NOT NULL,
  `no_obat` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_resep`
--

INSERT INTO `tb_resep` (`no_id`, `no_obat`, `id_periksa`, `kuantitas`, `keterangan`) VALUES
(2, 2, 160, 3, ''),
(4, 1, 160, 7, ''),
(5, 3, 160, 2, ''),
(6, 2, 180, 1, 'Dua kali sehari'),
(7, 1, 180, 4, 'Dua kali sehari Habis makan'),
(8, 3, 180, 2, 'Dua kali sehari'),
(9, 2, 180, 4, 'Dioleskan di bentolan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat_alergi`
--

CREATE TABLE `tb_riwayat_alergi` (
  `id_alergi` int(11) NOT NULL,
  `no_pasien` int(11) NOT NULL,
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

INSERT INTO `tb_riwayat_alergi` (`id_alergi`, `no_pasien`, `tanggal_input`, `jam_input`, `organ_sasaran`, `gejala`, `bahan_kimia`, `keterangan`) VALUES
(1, 1003, '', '18:47:14', 'Hidung', 'Bersin', '', ''),
(3, 1004, '', '20:52:47', 'Kepala', 'Pusing', 'Paracetamol', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat_hamil`
--

CREATE TABLE `tb_riwayat_hamil` (
  `id_hamil` int(11) NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `macam_persalinan` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `status_lahir` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `penolong_persalinan` varchar(100) NOT NULL,
  `penyulit` varchar(100) NOT NULL,
  `sebab_kematian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_riwayat_hamil`
--

INSERT INTO `tb_riwayat_hamil` (`id_hamil`, `no_pasien`, `macam_persalinan`, `jenis_kelamin`, `status_lahir`, `waktu`, `penolong_persalinan`, `penyulit`, `sebab_kematian`) VALUES
(1, 1004, '', 'Laki-laki', 'Mati', '', '', '', ''),
(3, 1004, '', 'Laki-laki', 'Hidup', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat_penyakit`
--

CREATE TABLE `tb_riwayat_penyakit` (
  `id_riwayat` int(11) NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `tanggal_input` varchar(100) NOT NULL,
  `jam_input` varchar(100) NOT NULL,
  `kode_icd10` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_riwayat_penyakit`
--

INSERT INTO `tb_riwayat_penyakit` (`id_riwayat`, `no_pasien`, `tanggal_input`, `jam_input`, `kode_icd10`, `diagnosa`, `keterangan`) VALUES
(2, 1003, '27-05-2018', '23:01:35', 'R50.9', 'Tiper', ''),
(6, 1003, '28-05-2018', '00:34:15', 'J45.30', 'Asma', ''),
(14, 1004, '03-06-2018', '23:08:24', 'Z29.13', 'Encounter for prophylactic Rho(D) immune globulin', ''),
(16, 1004, '29-05-2018', '20:54:39', 'L50.2', 'Urtikaria (Biduran)', 'Biduran karena demam dan perubahan cuaca drastis'),
(18, 1004, '03-06-2018', '23:48:59', 'L50.0', 'Allergic urticaria', 'Biduran'),
(19, 1004, '03-07-2018', '23:09:42', 'H26.09', 'Other infantile and juvenile cataract', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rm1a`
--

CREATE TABLE `tb_rm1a` (
  `id_rm1a` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL,
  `RM1A11` varchar(100) NOT NULL,
  `RM1A12` varchar(100) NOT NULL,
  `RM1A21` varchar(100) NOT NULL,
  `RM1A22` varchar(100) NOT NULL,
  `RM1A23` varchar(100) NOT NULL,
  `RM1A24` varchar(100) NOT NULL,
  `RM1A25` varchar(100) NOT NULL,
  `RM1A26` varchar(100) NOT NULL,
  `RM1A27` varchar(100) NOT NULL,
  `RM1A28` varchar(100) NOT NULL,
  `RM1A31` varchar(100) NOT NULL,
  `RM1A32` varchar(100) NOT NULL,
  `RM1A33` varchar(100) NOT NULL,
  `RM1A34` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rm1a`
--

INSERT INTO `tb_rm1a` (`id_rm1a`, `id_periksa`, `RM1A11`, `RM1A12`, `RM1A21`, `RM1A22`, `RM1A23`, `RM1A24`, `RM1A25`, `RM1A26`, `RM1A27`, `RM1A28`, `RM1A31`, `RM1A32`, `RM1A33`, `RM1A34`) VALUES
(20, 160, 'Baik', 'Tenang', 'Somnolen', 'e', 'r', 'r', 'r', 'r', 'r', 'r', 'Ada', 'Ada', 'Ya', 'Ya'),
(21, 180, 'Baik', 'Cemas', 'Sopor', '55', '44', '55', '33', '44', '55', '33', 'Tidak Ada', 'Ada', 'Ya', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rm1b`
--

CREATE TABLE `tb_rm1b` (
  `id_rm1b` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL,
  `RM1B11` varchar(100) NOT NULL,
  `RM1B21` varchar(100) NOT NULL,
  `RM1B22` varchar(100) NOT NULL,
  `RM1B23` varchar(100) NOT NULL,
  `RM1B31` varchar(100) NOT NULL,
  `RM1B32` varchar(100) NOT NULL,
  `RM1B33` varchar(100) NOT NULL,
  `RM1B34` varchar(100) NOT NULL,
  `RM1B35` varchar(100) NOT NULL,
  `RM1B36` varchar(100) NOT NULL,
  `RM1B37` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rm1b`
--

INSERT INTO `tb_rm1b` (`id_rm1b`, `id_periksa`, `RM1B11`, `RM1B21`, `RM1B22`, `RM1B23`, `RM1B31`, `RM1B32`, `RM1B33`, `RM1B34`, `RM1B35`, `RM1B36`, `RM1B37`) VALUES
(3, 160, 'Mandiri', 'Ya', 'Ya', 'Tidak Beresiko', 'Nyeri Kronis', 'Mengganggu Aktivitas', 'r', 'r', 'r', 'r', 'Istirahat'),
(4, 180, 'Mandiri', 'Tidak', 'Tidak', 'Tidak Beresiko', 'Tidak Ada Nyeri', 'Tidak Sakit', 'Bahu', 'Nyeri', 'Kadang-kadang', 'Setiap bangun tidur sakit', 'Istirahat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tindakan`
--

CREATE TABLE `tb_tindakan` (
  `id_tindakan` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `tindakan` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tindakan`
--

INSERT INTO `tb_tindakan` (`id_tindakan`, `id_periksa`, `jam`, `tindakan`, `keterangan`) VALUES
(5, 180, '20:55:00', 'Memberikan suntik anti-gatal', ''),
(6, 180, '20:55:04', 'Memberikan obat', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_rawat` int(11) NOT NULL,
  `tanggal_transaksi` varchar(100) NOT NULL,
  `jam_transaksi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_rawat`, `tanggal_transaksi`, `jam_transaksi`, `status`) VALUES
(7, 24, '29-05-2018', '13:57:10', 'Belum Lunas'),
(8, 25, '29-05-2018', '20:50:07', 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

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
  ADD KEY `perawat` (`perawat`),
  ADD KEY `dokter` (`dokter`);

--
-- Indexes for table `tb_diagnosa_umum`
--
ALTER TABLE `tb_diagnosa_umum`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `id_rawat` (`id_periksa`);

--
-- Indexes for table `tb_item_transaksi`
--
ALTER TABLE `tb_item_transaksi`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD KEY `id_periksa` (`id_periksa`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`no_obat`);

--
-- Indexes for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `id_periksa` (`id_periksa`);

--
-- Indexes for table `tb_penatalaksanaan`
--
ALTER TABLE `tb_penatalaksanaan`
  ADD PRIMARY KEY (`id_penatalaksanaan`),
  ADD KEY `id_periksa` (`id_periksa`);

--
-- Indexes for table `tb_periksa`
--
ALTER TABLE `tb_periksa`
  ADD PRIMARY KEY (`id_periksa`),
  ADD UNIQUE KEY `id_rawat_2` (`id_rawat`),
  ADD KEY `id_rawat` (`id_rawat`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tb_resep`
--
ALTER TABLE `tb_resep`
  ADD PRIMARY KEY (`no_id`),
  ADD KEY `no_obat` (`no_obat`),
  ADD KEY `id_rawat` (`id_periksa`);

--
-- Indexes for table `tb_riwayat_alergi`
--
ALTER TABLE `tb_riwayat_alergi`
  ADD PRIMARY KEY (`id_alergi`),
  ADD KEY `no_pasien` (`no_pasien`);

--
-- Indexes for table `tb_riwayat_hamil`
--
ALTER TABLE `tb_riwayat_hamil`
  ADD PRIMARY KEY (`id_hamil`),
  ADD KEY `no_pasien` (`no_pasien`);

--
-- Indexes for table `tb_riwayat_penyakit`
--
ALTER TABLE `tb_riwayat_penyakit`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `no_pasien` (`no_pasien`);

--
-- Indexes for table `tb_rm1a`
--
ALTER TABLE `tb_rm1a`
  ADD PRIMARY KEY (`id_rm1a`),
  ADD KEY `id_rawat` (`id_periksa`);

--
-- Indexes for table `tb_rm1b`
--
ALTER TABLE `tb_rm1b`
  ADD PRIMARY KEY (`id_rm1b`),
  ADD KEY `id_rawat` (`id_periksa`);

--
-- Indexes for table `tb_tindakan`
--
ALTER TABLE `tb_tindakan`
  ADD PRIMARY KEY (`id_tindakan`),
  ADD KEY `id_periksa` (`id_periksa`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `id_rawat_2` (`id_rawat`),
  ADD KEY `id_rawat` (`id_rawat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `no_pasien` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;
--
-- AUTO_INCREMENT for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  MODIFY `id_rawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `tb_diagnosa_umum`
--
ALTER TABLE `tb_diagnosa_umum`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_item_transaksi`
--
ALTER TABLE `tb_item_transaksi`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `no_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_penatalaksanaan`
--
ALTER TABLE `tb_penatalaksanaan`
  MODIFY `id_penatalaksanaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_periksa`
--
ALTER TABLE `tb_periksa`
  MODIFY `id_periksa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
--
-- AUTO_INCREMENT for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_resep`
--
ALTER TABLE `tb_resep`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_riwayat_alergi`
--
ALTER TABLE `tb_riwayat_alergi`
  MODIFY `id_alergi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_riwayat_hamil`
--
ALTER TABLE `tb_riwayat_hamil`
  MODIFY `id_hamil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_riwayat_penyakit`
--
ALTER TABLE `tb_riwayat_penyakit`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_rm1a`
--
ALTER TABLE `tb_rm1a`
  MODIFY `id_rm1a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_rm1b`
--
ALTER TABLE `tb_rm1b`
  MODIFY `id_rm1b` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_tindakan`
--
ALTER TABLE `tb_tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  ADD CONSTRAINT `rawat_jalan_ibfk_1` FOREIGN KEY (`no_pasien`) REFERENCES `pasien` (`no_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_diagnosa_umum`
--
ALTER TABLE `tb_diagnosa_umum`
  ADD CONSTRAINT `tb_diagnosa_umum_ibfk_1` FOREIGN KEY (`id_periksa`) REFERENCES `tb_periksa` (`id_periksa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_item_transaksi`
--
ALTER TABLE `tb_item_transaksi`
  ADD CONSTRAINT `tb_item_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  ADD CONSTRAINT `tb_keluhan_ibfk_1` FOREIGN KEY (`id_periksa`) REFERENCES `tb_periksa` (`id_periksa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD CONSTRAINT `tb_pemeriksaan_ibfk_1` FOREIGN KEY (`id_periksa`) REFERENCES `tb_periksa` (`id_periksa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penatalaksanaan`
--
ALTER TABLE `tb_penatalaksanaan`
  ADD CONSTRAINT `tb_penatalaksanaan_ibfk_1` FOREIGN KEY (`id_periksa`) REFERENCES `tb_periksa` (`id_periksa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_periksa`
--
ALTER TABLE `tb_periksa`
  ADD CONSTRAINT `tb_periksa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `admin` (`user_id`),
  ADD CONSTRAINT `tb_periksa_ibfk_2` FOREIGN KEY (`id_rawat`) REFERENCES `rawat_jalan` (`id_rawat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_resep`
--
ALTER TABLE `tb_resep`
  ADD CONSTRAINT `tb_resep_ibfk_1` FOREIGN KEY (`no_obat`) REFERENCES `tb_obat` (`no_obat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_resep_ibfk_2` FOREIGN KEY (`id_periksa`) REFERENCES `tb_periksa` (`id_periksa`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `tb_rm1a`
--
ALTER TABLE `tb_rm1a`
  ADD CONSTRAINT `tb_rm1a_ibfk_1` FOREIGN KEY (`id_periksa`) REFERENCES `tb_periksa` (`id_periksa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_rm1b`
--
ALTER TABLE `tb_rm1b`
  ADD CONSTRAINT `tb_rm1b_ibfk_1` FOREIGN KEY (`id_periksa`) REFERENCES `tb_periksa` (`id_periksa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_tindakan`
--
ALTER TABLE `tb_tindakan`
  ADD CONSTRAINT `tb_tindakan_ibfk_1` FOREIGN KEY (`id_periksa`) REFERENCES `tb_periksa` (`id_periksa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_rawat`) REFERENCES `rawat_jalan` (`id_rawat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
