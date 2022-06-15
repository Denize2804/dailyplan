-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 05:45 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simplesched`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`username`, `email`, `message`) VALUES
('Mangalam', '6239@gsis.ac.in', 'I really like the color palettes chosen.'),
('Denize', '6137@gsis.ac.in', 'cant access registration page'),
('df', 'sfwsf', 'fwafed'),
('Mangalam', '6239@gsis.ac.in', 'I cant access my tasks.'),
('Mangalam', 'mangalam@gsis.ac.in', 'i dont like the task page.');

-- --------------------------------------------------------

--
-- Table structure for table `daily_habits`
--

CREATE TABLE `daily_habits` (
  `id` int(50) NOT NULL,
  `habit` varchar(100) NOT NULL,
  `reps` int(50) NOT NULL,
  `timeframe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_habits`
--

INSERT INTO `daily_habits` (`id`, `habit`, `reps`, `timeframe`) VALUES
(4, 'MATH', 3, 'Weekly'),
(5, 'workout', 4, 'Weekly'),
(6, 'CS', 2, 'Monthly'),
(8, 'Water', 3, 'Daily');

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

CREATE TABLE `new_record` (
  `id` int(11) NOT NULL,
  `trn_date` datetime NOT NULL,
  `subject` varchar(50) NOT NULL,
  `task` varchar(100) NOT NULL,
  `submittedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_record`
--

INSERT INTO `new_record` (`id`, `trn_date`, `subject`, `task`, `submittedby`) VALUES
(8, '2022-04-03 12:16:03', 'Email', 'email math teacher', 'Jeffin'),
(9, '2022-04-03 15:00:42', 'science', 'textbook pg 123, Q7,8,9', 'Jeffin'),
(10, '2022-04-03 15:00:49', 'CS', 'IA', 'Jeffin');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `description`, `create_date`) VALUES
(58, 'Drama Club', 'Finish making script for coursework. Ask partner how to describe stage placement.', '2022-04-03 14:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `slno` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `period` int(2) NOT NULL,
  `plan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`slno`, `day`, `period`, `plan`) VALUES
(16, 'MON', 1, 'dt'),
(17, 'TUES', 3, 'science'),
(20, 'THURS', 5, 'dance'),
(24, 'WED', 4, 'math'),
(25, 'MON', 2, 'sdfg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'Mangalam', '6239@gsis.ac.in', 'mango6239', '2022-03-29 12:02:42'),
(2, 'Aishwarya', 'aishu5959@gmail.com', 'aishu12345', '2022-03-29 12:03:27'),
(3, 'Jeffin', 'jeffin7180@gsis.ac.in', 'jthomas1234', '2022-03-29 12:04:01'),
(4, 'Antony', '6157@gsis.ac.in', 'antonyachu6157', '2022-03-29 12:05:13'),
(6, 'Kaashvi', '6579@gsis.ac.in', 'kaashvi6579', '2022-03-31 07:23:45'),
(8, 'Kaashvi1234', 'kaashvi6137@gmai.com', '12345', '2022-04-03 17:25:45'),
(9, 'Aishu1234', 'aishu1234@gmail.com', '12345', '2022-04-03 17:37:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_habits`
--
ALTER TABLE `daily_habits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_record`
--
ALTER TABLE `new_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_habits`
--
ALTER TABLE `daily_habits`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `new_record`
--
ALTER TABLE `new_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
