-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2019 at 05:40 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `id` int(11) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `stu_dob` date NOT NULL,
  `stu_dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_info`
--

INSERT INTO `students_info` (`id`, `stu_name`, `stu_dob`, `stu_dept`) VALUES
(40, 'sdd', '1994-10-20', 'Bangla'),
(2012, 'hello', '1999-02-07', 'Economics'),
(11111, 'mamun12', '1993-05-12', 'Bangla'),
(20121, 'kamal', '1999-02-07', 'BBA'),
(20130, 'Rahman', '1980-10-10', 'BBA'),
(20222, 'simu', '1993-05-17', 'CS'),
(201230, 'mukul', '2015-02-08', 'English'),
(201730, 'kamal', '1999-01-22', 'Bangla'),
(233344, 'mamun112', '2017-01-17', 'English'),
(303012, 'rafique islam', '1994-10-20', ' Islamic Studies'),
(2023054, 'mamun12', '2015-06-07', ' Islamic Studies'),
(201230514, 'md Anwar Hossain', '1994-01-12', 'CSE'),
(201230752, 'jamal', '2012-10-05', 'English'),
(201230756, 'ismail ', '1993-03-17', 'BBA'),
(201230757, 'kamal', '2012-10-05', 'BBA'),
(201230759, 'jamal', '2012-06-07', 'English'),
(201330766, 'Jamal', '1999-02-07', 'Economics'),
(201430756, 'monir', '1993-03-17', 'CSE'),
(201730756, 'tonmay', '1996-02-07', ' Islamic Studies'),
(201730757, 'rahim', '1994-10-20', 'English'),
(2147483647, 'mamun', '2017-01-26', 'CSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_info`
--
ALTER TABLE `students_info`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
