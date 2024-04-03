-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 07:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lars_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `username` varchar(32) NOT NULL,
  `timeIn` varchar(32) NOT NULL,
  `timeOut` varchar(32) NOT NULL,
  `Attendance` varchar(32) NOT NULL,
  `date` text NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`username`, `timeIn`, `timeOut`, `Attendance`, `date`, `day`, `month`, `year`) VALUES
('employee1', '12:37:58am', '09:49:27pm', 'Present', '2023-08-06', 6, 8, 2023),
('employee1', '09:10:23am', '09:10:23pm', 'Present', '2023-01-01', 1, 1, 2023),
('employee2', '09:10:23am', '09:10:23pm', 'Present', '2023-01-01', 1, 1, 2023),
('employee1', '09:10:23am', '09:10:23pm', 'Present', '2023-07-01', 1, 7, 2023),
('employee2', '09:10:23am', '09:10:23pm', 'Present', '2023-07-01', 1, 7, 2023),
('employee1', '09:10:23am', '09:10:23pm', 'Present', '2023-07-02', 2, 7, 2023),
('employee1', '09:10:23am', '09:10:23pm', 'Present', '2022-01-01', 1, 1, 2022),
('employee1', '09:10:23am', '09:10:23pm', 'Present', '2022-01-02', 2, 1, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `leaveapplications`
--

CREATE TABLE `leaveapplications` (
  `uid` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `type_of_leave` varchar(32) NOT NULL,
  `description_of_leave` varchar(32) NOT NULL,
  `reason_of_leave` varchar(64) NOT NULL,
  `from_date` text NOT NULL,
  `to_date` text NOT NULL,
  `status` varchar(32) NOT NULL,
  `days` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leaveapplications`
--

INSERT INTO `leaveapplications` (`uid`, `username`, `type_of_leave`, `description_of_leave`, `reason_of_leave`, `from_date`, `to_date`, `status`, `days`, `year`, `month`) VALUES
('64cbb8eb0497e', 'employee1', 'Full', 'Casual', 'Sorry cant attend tomorrow', '2023-08-01', '2023-08-02', 'Accepted', 1, 2023, 8),
('64cbbd828965a', 'employee1', 'Half', 'Earned', 'I have earned these leaves', '2023-07-30', '2023-08-05', 'Accepted', 6, 2023, 7),
('64d0bdd8d2341', 'employee1', 'Full', 'Earned', 'I am sick today', '2023-07-01', '2023-07-30', 'Accepted', 2, 2023, 3),
('64d0bdf07bca2', 'employee1', 'Full', 'Earned', 'I am leaving city for two days', '2023-06-01', '2023-06-03', 'Accepted', 1, 2023, 5),
('64d0befcc6824', 'employee1', 'Full', 'Earned', 'I have an urgent matter to attend, so I cant attend', '2023-07-05', '2023-07-08', 'Accepted', 3, 2023, 7),
('64d0bf20e9f47', 'employee1', 'Full', 'Earned', 'I am sick today', '2023-08-10', '2023-08-11', 'Accepted', 1, 2023, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `home_address` varchar(32) NOT NULL,
  `email_address` varchar(32) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `type`, `password`, `phone`, `first_name`, `last_name`, `home_address`, `email_address`, `gender`, `date_of_birth`, `age`) VALUES
('admin', 'admin', 'admin', '0300-1234567', 'admin', '1', 'H#1 Street#1', 'admin1@emial.com', 'male', '1999-07-10', 24),
('admin2', 'admin', '12345678', '0301-1234567', 'admin', '2', 'H#2 Street#1', 'admin2@emial.com', 'female', '2002-07-18', 21),
('employee1', 'employee', '12345678', '0311-1234567', 'employee', '1', 'H#1 Street#2', 'employee1@emial.com', 'male', '2001-01-02', 22),
('employee2', 'employee', '12345678', '0322-1234567', 'employee', '2', 'H#2 Street#2', 'employee2@email.com', 'female', '1998-01-06', 25),
('employee3', 'employee', '12345678', '0333-1234567', 'employee', '3', 'H#3 Street#2', 'employee3@email.com', 'female', '1995-01-06', 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leaveapplications`
--
ALTER TABLE `leaveapplications`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
