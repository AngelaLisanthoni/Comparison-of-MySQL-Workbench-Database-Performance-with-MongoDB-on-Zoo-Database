-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2022 pada 16.20
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoo_management`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `animal`
--

CREATE TABLE `animal` (
  `animal_id` varchar(20) NOT NULL,
  `animal_category` varchar(100) NOT NULL,
  `animal_name` varchar(100) NOT NULL,
  `animal_quantity` int(100) NOT NULL,
  `animal_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `animal`
--

INSERT INTO `animal` (`animal_id`, `animal_category`, `animal_name`, `animal_quantity`, `animal_location`) VALUES
('A-1', 'Aves', 'Peacock', 5, 'Garden-2'),
('A-2', 'Aves', 'Ostrich', 5, 'Garden-4'),
('M-1', 'Mamalia', 'Lion', 3, 'Afrika-1'),
('M-2', 'Mamalia', 'Dolphin', 2, 'Aquarium-3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `animal_shift_schedule`
--

CREATE TABLE `animal_shift_schedule` (
  `animal_schedule_id` varchar(20) NOT NULL,
  `animal_id` varchar(20) NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  `start_working_hours` int(50) NOT NULL,
  `finish_working_hours` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `animal_shift_schedule`
--

INSERT INTO `animal_shift_schedule` (`animal_schedule_id`, `animal_id`, `employee_id`, `start_working_hours`, `finish_working_hours`) VALUES
('A-1JH1', 'A-1', 'K-3', 7, 12),
('A-2JH2', 'A-2', 'K-4', 12, 17),
('M-1JH1', 'M-1', 'K-1', 7, 12),
('M-2JH2', 'M-2', 'K-2', 12, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `check_up_schedule`
--

CREATE TABLE `check_up_schedule` (
  `check_up_id` varchar(20) NOT NULL,
  `animal_id` varchar(20) NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  `check_up_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `check_up_schedule`
--

INSERT INTO `check_up_schedule` (`check_up_id`, `animal_id`, `employee_id`, `check_up_date`) VALUES
('A-1CU2', 'A-2', 'D-2', '2022-03-10'),
('A-1CU3', 'A-1', 'D-2', '2022-03-10'),
('M-1CU1', 'M-1', 'D-1', '2022-02-14'),
('M-2CU1', 'M-2', 'D-1', '2022-02-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `employee_id` varchar(20) NOT NULL,
  `employee_name` varchar(20) NOT NULL,
  `employee_DOB` date NOT NULL,
  `employee_number` varchar(100) NOT NULL,
  `employee_gender` varchar(50) NOT NULL,
  `employee_salary` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_name`, `employee_DOB`, `employee_number`, `employee_gender`, `employee_salary`, `username`, `password`) VALUES
('D-1', 'Ariyanto', '1992-06-20', '081234567810', 'Male', 5000000, 'ariyantodmamalia', 'ao*200692'),
('D-2', 'Karina', '1982-11-04', '081234567896', 'Female', 5000000, 'karinadaves', 'ka*041082'),
('K-1', 'Jatmiko', '1985-07-30', '081234567216', 'Male', 3000000, 'jatmikokmamalia', 'jo*300785'),
('K-2', 'Rina', '1990-09-17', '081234567218', 'Female', 3000000, 'rinakmamalia', 'ra*170990'),
('K-3', 'Kelly', '2000-04-29', '081234567329', 'Female', 2500000, 'kellykaves', 'ky*290420'),
('K-4', 'Arif', '1999-01-06', '081234567322', 'Male', 2500000, 'arifkaves', 'af*060199'),
('S-1', 'Bambang ', '1977-08-15', '081234567893', 'Male', 3000000, 'bambangfacility1', 'bg*150877'),
('S-2', 'Joko', '1983-04-29', '081234567895', 'Male', 2500000, 'jokofacility2', 'jo*290483');

-- --------------------------------------------------------

--
-- Struktur dari tabel `facility`
--

CREATE TABLE `facility` (
  `facility_id` varchar(20) NOT NULL,
  `facility_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `facility`
--

INSERT INTO `facility` (`facility_id`, `facility_name`) VALUES
('KK', 'Animal Safety Key'),
('KP', 'Visitor Chairs'),
('PG', 'Visitor Fence'),
('TM ', 'Animal Feeding Place');

-- --------------------------------------------------------

--
-- Struktur dari tabel `food`
--

CREATE TABLE `food` (
  `food_id` varchar(20) NOT NULL,
  `animal_id` varchar(20) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `food_stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `food`
--

INSERT INTO `food` (`food_id`, `animal_id`, `food_name`, `food_stock`) VALUES
('DG-1', 'M-1', 'Beef', '20 Kg'),
('IK-1', 'M-2', 'Fish', '15 Kg'),
('SR-4', 'A-1', 'Cricket', '3 Kg'),
('SY-6', 'A-2', 'Water Spinach', '20 bundles');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` varchar(20) NOT NULL,
  `food_id` varchar(20) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `supplier_number` int(100) NOT NULL,
  `supplier_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `food_id`, `supplier_name`, `supplier_number`, `supplier_date`) VALUES
('DG-145', 'DG-1', 'Toni', 812345634, '2022-03-24'),
('IK-150', 'IK-1', 'Risa', 812345620, '2022-03-23'),
('SR-402', 'SR-4', 'Nela', 812345645, '2022-03-21'),
('SY-613', 'SY-6', 'Dedi', 812345692, '2022-03-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `work_shift_facility`
--

CREATE TABLE `work_shift_facility` (
  `facility_schedule_id` varchar(20) NOT NULL,
  `facility_id` varchar(20) NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  `facility_checked_date` date NOT NULL,
  `facility_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `work_shift_facility`
--

INSERT INTO `work_shift_facility` (`facility_schedule_id`, `facility_id`, `employee_id`, `facility_checked_date`, `facility_status`) VALUES
('KK-JS1', 'KK', 'S-2', '2022-03-01', 'Good'),
('KP-JS2', 'KP', 'S-1', '2022-03-01', '1 Broken'),
('PG-JS2', 'PG', 'S-1', '2022-03-01', 'Good'),
('TM-JS1', 'TM', 'S-2', '2022-03-01', 'Good');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indeks untuk tabel `animal_shift_schedule`
--
ALTER TABLE `animal_shift_schedule`
  ADD PRIMARY KEY (`animal_schedule_id`),
  ADD KEY `animal_id` (`animal_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indeks untuk tabel `check_up_schedule`
--
ALTER TABLE `check_up_schedule`
  ADD PRIMARY KEY (`check_up_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `animal_id` (`animal_id`);

--
-- Indeks untuk tabel `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indeks untuk tabel `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`facility_id`);

--
-- Indeks untuk tabel `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `animal_id` (`animal_id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD KEY `food_id` (`food_id`);

--
-- Indeks untuk tabel `work_shift_facility`
--
ALTER TABLE `work_shift_facility`
  ADD PRIMARY KEY (`facility_schedule_id`),
  ADD KEY `facility_id` (`facility_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `animal_shift_schedule`
--
ALTER TABLE `animal_shift_schedule`
  ADD CONSTRAINT `animal_shift_schedule_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`animal_id`),
  ADD CONSTRAINT `animal_shift_schedule_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Ketidakleluasaan untuk tabel `check_up_schedule`
--
ALTER TABLE `check_up_schedule`
  ADD CONSTRAINT `check_up_schedule_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
  ADD CONSTRAINT `check_up_schedule_ibfk_2` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`animal_id`);

--
-- Ketidakleluasaan untuk tabel `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`animal_id`);

--
-- Ketidakleluasaan untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`);

--
-- Ketidakleluasaan untuk tabel `work_shift_facility`
--
ALTER TABLE `work_shift_facility`
  ADD CONSTRAINT `work_shift_facility_ibfk_1` FOREIGN KEY (`facility_id`) REFERENCES `facility` (`facility_id`),
  ADD CONSTRAINT `work_shift_facility_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
