-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 06:17 PM
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
(1, '545454', '44', 'KARAMBIA CUKIA', 'Perempuan', '-pilih tanggal-', 'eqqwewq', '12', '12', 'Mahasiswa', 'eeqeqeq', 'B', 'Belum Nikah', 'qweqwe', 'eqweqe', 'Adita', '7', '4', '545454.jpg'),
(2, '082240118844Terbaru', '0293746362', 'Raja Dwika Gusri', 'Laki-Laki', '02 - 07 -1996', 'Pariaman', '22', 'Bandung', 'Mahasiswa', 'Sarjana', 'A', '', 'Khaidir', 'PNS', 'Adita', 'Islam', '082240118844', '1202140231.jpg'),
(3, '3', '3', 'KARAMBIA CUKIA', 'Laki-laki', '1', 'eqqwewq', '1', 'qqweqe', 'Mahasiswa', 'eeqeqeq', 'A', 'Belum Nikah', 'qweqwe', 'eqweqe', '1', '12', '3', '3.jpg'),
(4, '5', '5', 'KARAMBIA CUKIA', 'Perempuan', '2', 'eqqwewq', '1', 'qqweqe', 'Mahasiswa', 'eeqeqeq', 'A', 'Sudah Nikah', 'qweqwe', 'eqweqe', 'Adita', 'Islam', '5', '5.jpg'),
(5, '6', '6', 'KARAMBIA CUKIA', 'Perempuan', '-pilih tanggal-', 'eqqwewq', '1', 'qqweqe', '7', 'eeqeqeq', 'B', 'Belum Nikah', 'qweqwe', 'eqweqe', '1', 'a', '6', '6.jpg'),
(6, '7', '7', 'KARAMBIA CUKIAS', 'Perempuan', '-pilih tanggal-', 'eqqwewq', '7', 'qqweqe', '111', '222222', 'A', 'Belum Nikah', 'qweqwe', 'eqweqe', 'Adita', 'Islam', '8', '7.jpg'),
(7, '9', '9', 'KARAMBIA CUKIA', 'Perempuan', '-pilih tanggal-', 'eqqwewq', '7', '12', 'Mahasiswa', 'eeqeqeq', 'A', 'Belum Nikah', 'qweqwe', 'eqweqe', 'Adita', 'Islam', '9', '9.jpg'),
(8, '8', '8', 'KARAMBIA CUKIA', 'Perempuan', '-pilih tanggal-', 'eqqwewq', '1', 'qqweqe', 'Mahasiswa', '12', 'A', 'Belum Nikah', 'qweqwe', 'eqweqe', 'qeqweqe', 'Islam', '8', '8.jpg'),
(9, '11', '11', 'KARAMBIA CUKIA', 'Perempuan', '-pilih tanggal-', 'eqqwewq', 'qweqe', 'qqweqe', '7', 'eeqeqeq', 'A', 'Belum Nikah', 'qweqwe', 'eqweqe', 'Adita', 'Islam', '3', '11.jpg'),
(10, '12', '12', 'KARAMBIA CUKIA', 'Perempuan', '-pilih tanggal-', 'eqqwewq', '4', 'qqweqe', 'Mahasiswa', 'eeqeqeq', 'A', 'Belum Nikah', 'qweqwe', 'eqweqe', 'Adita', 'Islam', '2', '12.jpg'),
(11, 'Pantan Panas', '99', 'KARAMBIA CUKIA', '', '-pilih tanggal-', '12', '1', 'qqweqe', 'Mahasiswa', '1', 'A', '', 'qweqwe', 'eqweqe', 'Adita', 'Islam', '99', '99.jpg'),
(12, '55', '55', 'KARAMBIA CUKIA', 'Perempuan', '-pilih tanggal-', 'eqqwewq', 'qweqe', 'qqweqe', '111', 'eeqeqeq', 'A', 'Belum Nikah', 'qweqwe', '7', 'Adita', 'Islam', '55', '55.jpg'),
(13, '55', '55', 'KARAMBIA CUKIA', 'Perempuan', '-pilih tanggal-', 'eqqwewq', 'qweqe', 'qqweqe', 'Mahasiswa', 'eeqeqeq', 'A', 'Belum Nikah', '7', '7', 'Adita', 'Islam', '55', '551.jpg'),
(14, 'Last times', '66', 'KARAMBIA CUKIA', 'Perempuan', '-pilih tanggal-', 'eqqwewq', '12', 'qqweqe', 'Mahasiswa', 'eeqeqeq', 'A', 'Belum Nikah', 'qweqwe', 'eqweqe', 'qeqweqe', 'Islam', '66', '666.jpg'),
(15, '333', '333', 'KARAMBIA CUKIA', 'Perempuan', '-pilih tanggal-', 'ra', '1', 'qqweqe', 'Mahasiswa', 'eeqeqeq', 'B', 'Belum Nikah', 'qweqwe', 'eqweqe', 'Adita', 'Islam', '33', '333.jpg'),
(16, '677', '777', 'KARAMBIA CUKIA', 'Perempuan', '-pilih tanggal-', 'eqqwewq', '12', 'qqweqe', 'Mahasiswa', 'eeqeqeq', 'A', 'Belum Nikah', 'qweqwe', '7', 'qeqweqe', 'Islam', '77', '677.jpg'),
(17, '10221212', '12121212', 'KARAMBIA CUKIAS', 'Laki - Laki', '2-Juli-1996', 'Padang', '12', 'Bandung', 'Mahasiswa', 'Sarjana', 'A', 'Sudah Nikah', 'Haja', 'PNS', 'Adita', 'Islam', '082244444444', '10221212.jpg'),
(18, '12222222', '212131313', 'Fadhil', 'Perempuan', '02-September-1912', '12', '12', 'Bandung', 'Mahasiswa', 'Sarjana', 'A', 'Belum Nikah', 'Haja', 'PNS', 'Adita', 'Islam', '0822', '12222222.PNG'),
(19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4124234124234.PNG'),
(20, '9445252362346', '5525235', 'Teguh Piganta', 'Perempuan', '13-Juli-1910', 'Pariaman', '12', 'Bandung', 'Mahasiswa', 'Sarjana', 'A', 'Belum Nikah', 'Haja', 'PNS', 'Adita', 'Islam', '977', '9445252362346.jpg'),
(21, '9999999999999', '999999999999', 'Abjad', 'Perempuan', '12-Oktober-1912', 'Padang', '12', 'Bandung', 'Mahasiswa', 'Sarjana', 'A', 'Belum Nikah', 'Haja', 'PNS', 'Adita', 'Islam', '54', '9999999999999.png'),
(22, '242424', '2424424', 'Terbaru', 'Perempuan', '14 - September - 1912', 'Pariaman', '12', 'Bandung', 'Mahasiswa', 'Sarjana', 'A', 'Belum Nikah', 'Haja', 'PNS', 'Adita', 'Islam', '424244', '242424.PNG'),
(1001, 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1002, '690038', '4572364', 'Nurlela', 'Perempuan', '13 - Oktober - 1911', 'Pematang Siantar', '42', 'Peru', '-', 'SMA', 'AB', 'Sudah Nikah', 'Hariai', '-', 'Pasteur', 'Kristen', '089923432365', '690038.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_jalan`
--

CREATE TABLE `rawat_jalan` (
  `id_rawat` int(11) NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `biaya` varchar(100) NOT NULL,
  `poliklinik` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawat_jalan`
--

INSERT INTO `rawat_jalan` (`id_rawat`, `no_pasien`, `tanggal`, `waktu`, `biaya`, `poliklinik`, `status`) VALUES
(1, 19, '03-05-2018', '16:01:22', '40000', 'Poli Kulit dan Kelamin', 'Menunggu'),
(2, 19, '03-07-2018', '16:04:37', '40000', 'Poli Kulit dan Kelamin', 'Menunggu'),
(3, 19, '03-05-2018', '16:21:21', '30000', 'Poli Umum', 'Dalam Pemeriksaan'),
(4, 2, '19-05-2018', '21:09:10', '30000', 'Poli Umum', 'Selesai'),
(5, 12, '19-05-2018', '21:44:54', '30000', 'Poli Umum', 'Dalam Pemeriksaan'),
(6, 3, 'asdaa', 'adadasd', 'asdadasd', 'dadad', 'adadad');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosa_umum`
--

CREATE TABLE `tb_diagnosa_umum` (
  `id_diagnosa` int(11) NOT NULL,
  `id_poli_umum` int(11) NOT NULL,
  `tanggal_cek` varchar(100) NOT NULL,
  `jam_cek` varchar(100) NOT NULL,
  `periksa` text NOT NULL,
  `kode_penyakit` varchar(100) NOT NULL,
  `diagnosa` text NOT NULL,
  `tindakan` text NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diagnosa_umum`
--

INSERT INTO `tb_diagnosa_umum` (`id_diagnosa`, `id_poli_umum`, `tanggal_cek`, `jam_cek`, `periksa`, `kode_penyakit`, `diagnosa`, `tindakan`, `biaya`) VALUES
(117, 7, '19-05-2018', '15:05:33', 'Kanker', 'D70.1', 'Me', 'Kemo', 0),
(118, 9, '20-05-2018', '22:11:48', 'Periksa Perut', 'L50.2', 'Mag akut', 'Pemberian obat', 0);

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
(1, 'Poliklinik Umum', 20000, 20000),
(2, 'Poli Mata', 20000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_poli_umum`
--

CREATE TABLE `tb_poli_umum` (
  `id_poli_umum` int(11) NOT NULL,
  `id_rawat` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal_masuk` varchar(100) NOT NULL,
  `jam_masuk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_poli_umum`
--

INSERT INTO `tb_poli_umum` (`id_poli_umum`, `id_rawat`, `user_id`, `tanggal_masuk`, `jam_masuk`) VALUES
(1, 1, 1, '', '0'),
(2, 2, 1, '19-05-2018', '9'),
(7, 3, 1, '19-05-2018', '14:16:50'),
(9, 4, 2, '19-05-2018', '23:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_resep`
--

CREATE TABLE `tb_resep` (
  `no_id` int(11) NOT NULL,
  `no_obat` int(11) NOT NULL,
  `id_poli_umum` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_resep`
--

INSERT INTO `tb_resep` (`no_id`, `no_obat`, `id_poli_umum`, `kuantitas`, `keterangan`) VALUES
(55, 2, 7, 0, ''),
(59, 1, 2, 0, ''),
(60, 3, 2, 0, ''),
(63, 2, 1, 4, 'Overdosis'),
(67, 1, 1, 0, 'Ah bodo amat, overdosis2 dah lu'),
(68, 1, 9, 10, 'Dua Lipa, eh Dua Kali sehari maksudnya'),
(70, 2, 9, 0, ''),
(71, 2, 9, 0, ''),
(72, 1, 9, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_rawat` int(11) NOT NULL,
  `jenis_transaksi` varchar(100) NOT NULL,
  `nama_transaksi` varchar(100) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_rawat`, `jenis_transaksi`, `nama_transaksi`, `biaya`) VALUES
(26, 4, 'Pendaftaran', 'Poliklinik Umum', 20000),
(27, 4, 'Pembelian Obat', 'Paracetamol', 5000),
(28, 4, 'Pembelian Obat', 'Piroxicam', 7000),
(29, 4, 'Pembelian Obat', 'Piroxicam', 7000),
(30, 4, 'Pembelian Obat', 'Paracetamol', 5000);

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
  ADD PRIMARY KEY (`no_pasien`);

--
-- Indexes for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  ADD PRIMARY KEY (`id_rawat`),
  ADD KEY `no_pasien` (`no_pasien`);

--
-- Indexes for table `tb_diagnosa_umum`
--
ALTER TABLE `tb_diagnosa_umum`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `id_rawat` (`id_poli_umum`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`no_obat`);

--
-- Indexes for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tb_poli_umum`
--
ALTER TABLE `tb_poli_umum`
  ADD PRIMARY KEY (`id_poli_umum`),
  ADD UNIQUE KEY `id_rawat_2` (`id_rawat`),
  ADD KEY `id_rawat` (`id_rawat`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_resep`
--
ALTER TABLE `tb_resep`
  ADD PRIMARY KEY (`no_id`),
  ADD KEY `no_obat` (`no_obat`),
  ADD KEY `id_rawat` (`id_poli_umum`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
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
  MODIFY `no_pasien` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;
--
-- AUTO_INCREMENT for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  MODIFY `id_rawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_diagnosa_umum`
--
ALTER TABLE `tb_diagnosa_umum`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `no_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_poli_umum`
--
ALTER TABLE `tb_poli_umum`
  MODIFY `id_poli_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_resep`
--
ALTER TABLE `tb_resep`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
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
  ADD CONSTRAINT `tb_diagnosa_umum_ibfk_1` FOREIGN KEY (`id_poli_umum`) REFERENCES `tb_poli_umum` (`id_poli_umum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_poli_umum`
--
ALTER TABLE `tb_poli_umum`
  ADD CONSTRAINT `tb_poli_umum_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `admin` (`user_id`),
  ADD CONSTRAINT `tb_poli_umum_ibfk_2` FOREIGN KEY (`id_rawat`) REFERENCES `rawat_jalan` (`id_rawat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_resep`
--
ALTER TABLE `tb_resep`
  ADD CONSTRAINT `tb_resep_ibfk_1` FOREIGN KEY (`no_obat`) REFERENCES `tb_obat` (`no_obat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_resep_ibfk_2` FOREIGN KEY (`id_poli_umum`) REFERENCES `tb_poli_umum` (`id_poli_umum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_rawat`) REFERENCES `rawat_jalan` (`id_rawat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
