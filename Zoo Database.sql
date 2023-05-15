-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 09:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbinatang`
--

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `id_hewan` varchar(255) NOT NULL,
  `kategori_hewan` varchar(255) NOT NULL,
  `nama_hewan` varchar(255) NOT NULL,
  `jumlah_hewan` int(255) NOT NULL,
  `lokasi_hewan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`id_hewan`, `kategori_hewan`, `nama_hewan`, `jumlah_hewan`, `lokasi_hewan`) VALUES
('A-1', 'Aves', 'Burung Merak', 5, 'Taman-2'),
('A-2', 'Aves', 'Burung Unta', 5, 'Taman-4'),
('M-1', 'Mamalia', 'Singa', 3, 'Afrika-1'),
('M-2', 'Mamalia', 'Lumba-lumba', 2, 'Akuarium-3');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_checkup`
--

CREATE TABLE `jadwal_checkup` (
  `id_checkup` varchar(255) NOT NULL,
  `id_hewan` varchar(255) NOT NULL,
  `id_pegawai` varchar(255) NOT NULL,
  `tanggal_checkup` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_checkup`
--

INSERT INTO `jadwal_checkup` (`id_checkup`, `id_hewan`, `id_pegawai`, `tanggal_checkup`) VALUES
('A-1CU2', 'A-2', 'D-2', '2022-03-10'),
('A-1CU3', 'A-1', 'D-2', '2022-03-10'),
('M-1CU1', 'M-2', 'D-1', '2022-02-14'),
('M-2CU1', 'M-2', 'D-1', '2022-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_shift_hewan`
--

CREATE TABLE `jadwal_shift_hewan` (
  `id_jadwal_hewan` varchar(255) NOT NULL,
  `id_hewan` varchar(255) NOT NULL,
  `id_pegawai` varchar(255) NOT NULL,
  `jam_mulai` int(255) NOT NULL,
  `jam_akhir` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_shift_hewan`
--

INSERT INTO `jadwal_shift_hewan` (`id_jadwal_hewan`, `id_hewan`, `id_pegawai`, `jam_mulai`, `jam_akhir`) VALUES
('A-1JH1', 'A-1', 'K-3', 7, 12),
('A-2JH2', 'A-2', 'K-4', 12, 17),
('M-1JH1', 'M-1', 'K-1', 7, 12),
('M-2JH2', 'M-2', 'K-2', 12, 17);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_shift_sarana`
--

CREATE TABLE `jadwal_shift_sarana` (
  `id_jadwal_sarana` varchar(255) NOT NULL,
  `id_sarana` varchar(255) NOT NULL,
  `id_pegawai` varchar(255) NOT NULL,
  `tgl_check_sarana` date NOT NULL,
  `keadaan_sarana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_shift_sarana`
--

INSERT INTO `jadwal_shift_sarana` (`id_jadwal_sarana`, `id_sarana`, `id_pegawai`, `tgl_check_sarana`, `keadaan_sarana`) VALUES
('KK-JS1', 'KK', 'S-2', '2022-03-01', 'Baik'),
('KP-JS2', 'KP', 'S-1', '2022-03-01', '1 Rusak'),
('PG-JS2', 'PG', 'S-1', '2022-03-01', 'Baik'),
('TM-JS1', 'TM', 'S-2', '2022-03-01', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` varchar(255) NOT NULL,
  `id_hewan` varchar(255) NOT NULL,
  `nama_makanan` varchar(255) NOT NULL,
  `stok_makanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `id_hewan`, `nama_makanan`, `stok_makanan`) VALUES
('DG-1', 'M-1', 'Daging Sapi', '20kg'),
('IK-1', 'M-2', 'Ikan', '15kg'),
('SR-4', 'A-1', 'Jangkrik', '3kg'),
('SY-6', 'A-2', 'Kangkung', '20ikat');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(255) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `ttl_pegawai` date NOT NULL,
  `no_pegawai` varchar(255) NOT NULL,
  `gender_pegawai` varchar(255) NOT NULL,
  `gaji_pegawai` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `ttl_pegawai`, `no_pegawai`, `gender_pegawai`, `gaji_pegawai`, `username`, `password`) VALUES
('D-1', 'Ariyanto', '1992-06-20', '81234567810', 'Laki-laki', 5000000, 'ariyantodmamalia', 'ao*200692'),
('D-2', 'Karina', '1982-11-04', '81234567896', 'Perempuan', 5000000, 'karinadaves', 'ka*041082'),
('K-1', 'Jatmiko', '1985-07-30', '81234567216', 'Laki-laki', 3000000, 'jatmikokmamalia', 'jo*300785'),
('K-2', 'Rina', '1990-09-17', '8123456718', 'Perempuan', 3000000, 'rinakmamalia', 'ra*170990'),
('K-3', 'Kelly', '2000-04-29', '81234567329', 'Perempuan', 2500000, 'kellykaves', 'ky*290420'),
('K-4', 'Arif', '1999-01-06', '81234567322', 'Laki-laki', 2500000, 'arifkaves', 'af*060199'),
('S-1', 'Bambang', '1977-08-15', '81234567893', 'Laki-laki', 3000000, 'bambangsarana1', 'bg*15987'),
('S-2', 'Joko', '1983-04-29', '81234567895', 'Laki-laki', 2500000, 'jokosarana2', 'jo*290483');

-- --------------------------------------------------------

--
-- Table structure for table `sarana`
--

CREATE TABLE `sarana` (
  `id_sarana` varchar(255) NOT NULL,
  `nama_sarana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarana`
--

INSERT INTO `sarana` (`id_sarana`, `nama_sarana`) VALUES
('KK', 'Kunci Keamanan Satwa'),
('KP', 'Kursi Pengunjung'),
('PG', 'Pagar dari Pengunjung'),
('TM', 'Tempat Makan Satwa');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(255) NOT NULL,
  `id_makanan` varchar(255) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `no_supplier` int(255) NOT NULL,
  `tgl_supplier` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `id_makanan`, `nama_supplier`, `no_supplier`, `tgl_supplier`) VALUES
('DG-145', 'DG-1', 'Toni', 812345634, '2022-03-24'),
('IK-150', 'IK-1', 'Risa', 812345620, '2022-03-23'),
('SR-402', 'SR-4', 'Nela', 812345645, '2022-03-21'),
('SY-613', 'SY-6', 'Dedi', 812345692, '2022-03-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indexes for table `jadwal_checkup`
--
ALTER TABLE `jadwal_checkup`
  ADD PRIMARY KEY (`id_checkup`),
  ADD KEY `id_hewan` (`id_hewan`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `jadwal_shift_hewan`
--
ALTER TABLE `jadwal_shift_hewan`
  ADD PRIMARY KEY (`id_jadwal_hewan`),
  ADD KEY `id_hewan` (`id_hewan`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `jadwal_shift_sarana`
--
ALTER TABLE `jadwal_shift_sarana`
  ADD PRIMARY KEY (`id_jadwal_sarana`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_sarana` (`id_sarana`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`),
  ADD KEY `id_hewan` (`id_hewan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `sarana`
--
ALTER TABLE `sarana`
  ADD PRIMARY KEY (`id_sarana`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`),
  ADD KEY `id_makanan` (`id_makanan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_checkup`
--
ALTER TABLE `jadwal_checkup`
  ADD CONSTRAINT `jadwal_checkup_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `jadwal_checkup_ibfk_2` FOREIGN KEY (`id_hewan`) REFERENCES `hewan` (`id_hewan`);

--
-- Constraints for table `jadwal_shift_hewan`
--
ALTER TABLE `jadwal_shift_hewan`
  ADD CONSTRAINT `jadwal_shift_hewan_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `jadwal_shift_hewan_ibfk_2` FOREIGN KEY (`id_hewan`) REFERENCES `hewan` (`id_hewan`);

--
-- Constraints for table `jadwal_shift_sarana`
--
ALTER TABLE `jadwal_shift_sarana`
  ADD CONSTRAINT `jadwal_shift_sarana_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `jadwal_shift_sarana_ibfk_2` FOREIGN KEY (`id_sarana`) REFERENCES `sarana` (`id_sarana`);

--
-- Constraints for table `makanan`
--
ALTER TABLE `makanan`
  ADD CONSTRAINT `makanan_ibfk_1` FOREIGN KEY (`id_hewan`) REFERENCES `hewan` (`id_hewan`);

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id_makanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
