-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 12:41 PM
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
-- Database: `uderdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `email`, `password`, `last_login`, `is_deleted`) VALUES
(1, 'Malith', 'Madusankha', 'malithsony@gmail.com', '142ac74e7e76dcc195bd10f36672c2093f9d52c2', '2020-05-15 03:32:09', 0),
(3, 'Gayasha', 'Kalpani', 'gayasha@gmail.com', '1c2146c1034d9b5e03f47d6bb94598c1d44e7190', '2020-05-15 00:04:25', 0),
(5, 'Anta', 'Ishara', 'Ishara@gmail.com', '1c2146c1034d9b5e03f47d6bb94598c1d44e7190', '0000-00-00 00:00:00', 0),
(7, 'Amish', 'Malsara', 'malsara@gmail.com', '1c2146c1034d9b5e03f47d6bb94598c1d44e7190', '0000-00-00 00:00:00', 0),
(8, 'Dumal', 'pradeep', 'pradeep@gmail.com', '1c2146c1034d9b5e03f47d6bb94598c1d44e7190', '0000-00-00 00:00:00', 0),
(9, 'Imalka', 'Bandara', 'imalka@gmail.com', '6e1ab2586238566d7181f6792de9a9fc1d18d46d', '2020-05-14 21:40:37', 0),
(10, 'Pavani', 'Nethma', 'pavani@gmail.com', '1c2146c1034d9b5e03f47d6bb94598c1d44e7190', '2020-05-14 12:40:29', 0),
(11, 'Saman', 'Sadaruwan', 'saman@gmail.com', '1c2146c1034d9b5e03f47d6bb94598c1d44e7190', '0000-00-00 00:00:00', 0),
(12, 'Tikiri', 'Sumana', 'tikiri@gmail.com', '1c2146c1034d9b5e03f47d6bb94598c1d44e7190', '0000-00-00 00:00:00', 0),
(13, 'Kanthi', 'Jayasheeli', 'kanthi@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '0000-00-00 00:00:00', 0),
(14, 'Pinbara', 'Sumana', 'pin@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '0000-00-00 00:00:00', 0),
(28, 'Malani', 'Anata', 'mila@gmail.com', '1c2146c1034d9b5e03f47d6bb94598c1d44e7190', '0000-00-00 00:00:00', 0),
(30, 'Sehani', 'Imalka', 'sehenai@gmail.com', '1c2146c1034d9b5e03f47d6bb94598c1d44e7190', '0000-00-00 00:00:00', 0),
(31, 'Hithik', 'Roshan', 'hithik@gmail.com', '1c2146c1034d9b5e03f47d6bb94598c1d44e7190', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
