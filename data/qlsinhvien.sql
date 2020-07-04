-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 04:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlsinhvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `ketqua`
--

CREATE TABLE `ketqua` (
  `MaKQ` int(11) NOT NULL,
  `MaMH` int(11) NOT NULL,
  `MaSV` int(11) NOT NULL,
  `Diem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ketqua`
--

INSERT INTO `ketqua` (`MaKQ`, `MaMH`, `MaSV`, `Diem`) VALUES
(1, 1, 1, 10),
(2, 7, 2, 10),
(3, 4, 3, 10),
(4, 7, 4, 10),
(5, 7, 5, 10),
(6, 3, 7, 9),
(7, 10, 10, 10),
(8, 9, 9, 10),
(9, 6, 3, 9),
(10, 5, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` int(11) NOT NULL,
  `TenKhoa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NamThanhLap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`, `NamThanhLap`) VALUES
(1, 'Công nghệ thông tin', 1999),
(2, 'Toán', 1974),
(3, 'Hóa', 1982),
(4, 'Lý', 1234),
(5, 'Tiếng Anh', 1357),
(6, 'Du lịch', 2000),
(7, 'Tiếng Trung', 1998),
(8, 'Công nghệ Sinh học', 1999),
(9, 'Tiếng Hàn', 1888),
(10, 'Tiếng Pháp', 1800);

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `MaLop` int(11) NOT NULL,
  `TenLop` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaKhoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaKhoa`) VALUES
(1, 'K44.CNTT.A', 1),
(2, 'K44.CNTT.D', 1),
(3, 'K44.CNTT.C', 1),
(4, 'K44.CNTT.D', 1),
(5, 'K44.CNTT.E', 1),
(6, 'SPTIN.A', 1),
(7, 'SPTIN.B', 1),
(8, 'TOAN.A', 2),
(9, 'TOAN.B', 2),
(10, 'TOAN.C', 2),
(11, 'HOA.A', 3),
(12, 'HOA.B', 3),
(13, 'HOA.C', 3);

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` int(11) NOT NULL,
  `TenMon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SoTC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMon`, `SoTC`) VALUES
(1, 'Công nghệ Web', 3),
(2, 'Phát triển ứng dụng di động', 3),
(3, 'Toán rời rạc', 3),
(4, 'Toán đại cương 1', 4),
(5, 'Toán đại cương 2', 4),
(6, 'Hóa đại cương 1', 4),
(7, 'Hóa cao cấp 1', 4),
(8, 'Giải tích', 3),
(9, 'Đại số tuyến tính', 3),
(10, 'Xác suất thống kê và ứng dụng', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` int(11) NOT NULL,
  `Hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `Hoten`, `NgaySinh`, `Email`, `MaLop`) VALUES
(1, 'Võ Minh Quốc Việt', '2020-07-01', 'viet@gmail.com', 1),
(2, 'Phùng Tiến Đạt', '2020-07-09', 'dat@gmail.com', 3),
(3, 'Lý Mỹ Như', '2020-07-16', 'nhu@gmail.com', 8),
(4, 'Trần Thanh Hùng', '2020-07-23', 'hung@gmail.com', 12),
(5, 'Trịnh Kim Chi', '2020-07-17', 'chi@gmail.com', 10),
(6, 'Phạm Thị Thanh Thảo', '2020-07-28', 'thao@gmail.com', 13),
(7, 'Hồ Thị Kim Hà', '2020-07-01', 'ha@gmail.com', 4),
(8, 'Ngụy Thế Dương', '2020-07-31', 'duong@gmail.com', 7),
(9, 'Võ Tuấn Hào', '2020-07-12', 'hao@gmail.com', 2),
(10, 'Huỳnh Đức Cường', '2020-07-23', 'cuong@gmail.com', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ketqua`
--
ALTER TABLE `ketqua`
  ADD PRIMARY KEY (`MaKQ`),
  ADD KEY `fk_MaMH_KQ` (`MaMH`),
  ADD KEY `fk_MaSV_KQ` (`MaSV`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `fk_MaKhoa` (`MaKhoa`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `fk_MaLop_SV` (`MaLop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ketqua`
--
ALTER TABLE `ketqua`
  MODIFY `MaKQ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `khoa`
--
ALTER TABLE `khoa`
  MODIFY `MaKhoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lop`
--
ALTER TABLE `lop`
  MODIFY `MaLop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `MaMH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `MaSV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ketqua`
--
ALTER TABLE `ketqua`
  ADD CONSTRAINT `fk_MaMH_KQ` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`),
  ADD CONSTRAINT `fk_MaSV_KQ` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`);

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `fk_MaKhoa` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `fk_MaLop_SV` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
