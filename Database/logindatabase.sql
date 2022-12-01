-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 07:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logindatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1, 'admin', 'Search1@1984');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `cpassword` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`, `cpassword`) VALUES
(1, 'Vimal', 'vimal@gmail.com', '$2y$10$aFE4rb.oIur3gq0t9XXSWue4YaHwXDgV2bVnUS0OPD/5TTi5R9896', '$2y$10$dV0hUwhd3kwxC/J4S/DpyeAVNw14Qyu02voprah5GtdQRx2OPdIAy'),
(2, 'Siddharth', 'siddharthbhoir@gmail.com', '$2y$10$RP4lAj0iZYM9P3oavnMrxuRiIcgTx7Gf3Gcvwc2YTsSMrEaKLv1Ca', '$2y$10$ZmmSCMsLlvkQ2gTKyFroiuxnoYn5PWuJJsCXV.DlhBTCVa7iDCwk6'),
(3, 'Ramesh', 'ramesh@gmail.com', '$2y$10$5m5oKWozaPDogkw.wm1gQuwWImXuGCBqA8f55jmTeYewUeyDE4jjS', '$2y$10$iIo.YsprkKmPLtfCze7UcuGwYhdJQsjSfSHEWSJkwtHBsCk77UOX2'),
(4, 'Suresh', 'sureshraj@gmail.com', '$2y$10$.v9/QuQ8sGovlooVhhGvzuRJKdFlZpP.9qIOE5y/L95HPkzTRkLyW', '$2y$10$wVWD80mE65UDsSYJKhA.2eXnWl8ZiSlVNwiHmM6w6yukp1DCUzj8y'),
(5, 'Devendra', 'devendra@gmail.com', '$2y$10$h5eUtERC/6Tz5ORbJdVBL..LJzrEc.MfnX9oMcyNSTF2XG1Q7A/Xe', '$2y$10$93SnZbk/Nv0YrxJRwrS2iOFOzKVi..SHyhOyDMyIICg.h6LGghaxq'),
(6, 'Rutik', 'rutik@gmail.com', '$2y$10$359MkWoJz5HslM6yv8N.S.kkHdNJp4/1WBp3Hcz59KmVNcCXJEXFi', '$2y$10$yL60VA1/OL9iKCJb2tn8a.OfNnSHkji6FQxM0UVPd9qCeAwXnixrm'),
(7, 'Aditya', 'aditya@gmail.com', '$2y$10$ezMY4wfCrMdz3MzuqpHUr.k9Nn/ej3BIp/lEENhm7nHd1yF.ZvYRC', '$2y$10$itGMLpxVNjXixkJ6LEWUleD7W4o.jlYLr/dHj0FQWEjJoclJhcDym'),
(8, 'Abhilash', 'abhilashnair@gmail.com', '$2y$10$x0XLtFpSU2RVxsynJuuXJOhGH5KRuSIFI2ecDuS9DiuixV6DD1f2O', '$2y$10$q.xHwanmFMbG5Y0b86Y5FupECYOz7AttbI8teuPe0ZjVay6wrphnm'),
(9, 'Ronak', 'ronak@gmail.com', '$2y$10$rD7UOnOklqx5q/E/hClfE.PSCNQeQEKULumPg7Sx/HYxwCGiibXMi', '$2y$10$o4xEl2H6qBGisvqMSgapnOzQv7jPgRRkakxgZe6pzmAlTYcHityg.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
