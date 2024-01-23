-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 05:36 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `sno` int(255) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `attend` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sno`, `date`, `time`, `name`, `attend`) VALUES
(1, '2022-11-22', '21:53:00.000000', 'Bishal', 'absent'),
(21, '2022-11-15', '23:33:00.000000', 'Bishal', 'present'),
(38, '2022-11-14', '07:04:00.000000', 'Roock', 'present'),
(39, '2022-11-22', '10:42:00.000000', 'Kaushik', 'present'),
(41, '2022-11-07', '20:35:00.000000', 'Kaustav', 'present'),
(42, '2022-11-07', '20:38:00.000000', 'Kaustav Raj Chakraborty', 'present'),
(44, '2022-11-07', '22:08:00.000000', 'clive', 'absent'),
(46, '2022-11-21', '22:09:00.000000', 'john', 'present'),
(47, '2022-11-07', '22:13:00.000000', 'barker', 'absent'),
(48, '2022-11-14', '20:27:00.000000', 'johnny', 'present'),
(49, '2022-11-14', '08:54:00.000000', 'Jenny', 'present'),
(50, '2022-11-15', '09:39:00.000000', 'bruce', 'absent'),
(51, '2023-07-04', '03:52:00.000000', 'clive', 'present'),
(52, '0000-00-00', '00:00:00.000000', 'Dean', 'present'),
(53, '2023-08-15', '01:33:00.000000', 'Charlie', 'present'),
(54, '2024-01-08', '21:37:00.000000', 'kim', 'present'),
(55, '2024-01-11', '00:00:00.000000', 'cliff', 'absent'),
(56, '2024-01-08', '21:37:00.000000', 'john', 'present'),
(57, '2024-01-02', '21:50:00.000000', 'howard', 'absent'),
(58, '0000-00-00', '00:00:00.000000', '', ''),
(59, '0000-00-00', '00:00:00.000000', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `name`, `email`, `phone`, `aadhar`, `password`, `gender`) VALUES
(2, 'Bishal Sarma', 'bishalrocks2k2@gmail.com', 2147483647, 'KAVC12334455', 'b1234', 'male'),
(14, 'Bishal Sarma', '1@gmail.com', 8133996538, 'DBEWEJ123', '123', 'male'),
(15, 'Kaustav', 'nylon@gmail.com', 8133996521, 'DC234498B56', '1234', 'male'),
(16, 'Samiran', 'samiran@gmail.com', 9395513125, 'DSDVDVDV12333', '1234', 'male'),
(20, '89', '8@g.com', 9636879758, '123124q', '123', 'male'),
(22, 'kev', '34@g.com', 9236879758, '1413414', '123', 'male'),
(23, '456', '456@gn.com', 7666079758, '2112121', '456', 'male'),
(26, '12', '12@g.com', 7636879758, '12', '12', 'male'),
(27, 'kakak', '121@gmail.com', 9763687975, '121', '$2y$10$G/x0En4t44Bx5pCQrIkDLOJGpxEuyOhmvBy4tQSG/23ZXH25X.PSa', 'male'),
(28, 'nkslfa', 'dada@gmail.com', 9854185645, 'qwrafafa', '123', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `sno` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `creche` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`sno`, `name`, `email`, `phone`, `aadhar`, `creche`, `password`, `gender`) VALUES
(1, 'Bishal SArma', 'bishalrocks2k2@gmail.com', 429496, 'DC234498BBB', '1234', 'Kidzee', 'male'),
(13, 'Kaustav Raj Chakraborty', '1@g.com', 4294967295, '1413431234', 'qwe', '$2y$10$t2Xz6RCRq15d7BsRLEGy6ujuTVFyiEJIuvSb18Jb05tHX16Gkla9S', 'male'),
(14, 'Kaustav  Chakraborty', '1@6g.com', 7343879758, 'iuyiuyu2131241', '123', '$2y$10$2Y03fkBbLnOtHMHJhlq7VeYLA0H/ye1iDFAwo2kiSAhV4yU4OGYQO', 'male'),
(15, '12', '12@g.com', 7636879758, '12', '12', '$2y$10$tLwFssOKZGSVpt1/dFu6uOmRdzxI0u4v.XskkhQEQfR8pHU6Jcq9W', 'male'),
(17, 'bruce', '2@gmail.com', 9111441122, '31243124', '1weefwa', '$2y$10$wvxJPfklYLNZIF8qEzeFK.CN2bdo0To3F03zldmZPOMgpW2DZMGfG', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `aadhar` (`aadhar`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `aadhar` (`aadhar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `sno` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
