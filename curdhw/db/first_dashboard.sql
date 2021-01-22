-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 03:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `h_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `first_dashboard`
--

CREATE TABLE `first_dashboard` (
  `id` int(255) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `first_dashboard`
--

INSERT INTO `first_dashboard` (`id`, `name`, `date`, `category`, `img`) VALUES
(20, 'Mosjid 201 gombuj', '2021-01-21', 'Mosjid ', '2021-Jan-Thu-12-17-48129955876_3414409635323287_6886079570179091558_o.jpg'),
(22, 'Sailfi', '2021-01-21', 'Picture', '2021-Jan-Thu-12-19-57index.jpg'),
(25, 'gnew', '2020-08-03', 'Picture', '2021-Jan-Thu-13-51-34Screenshot_20201114_135959_com.google.android.gm.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `first_dashboard`
--
ALTER TABLE `first_dashboard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `first_dashboard`
--
ALTER TABLE `first_dashboard`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
