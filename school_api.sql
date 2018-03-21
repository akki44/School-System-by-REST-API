-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 02:22 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_tb`
--

CREATE TABLE `student_tb` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` varchar(211) NOT NULL,
  `password` varchar(211) NOT NULL,
  `standard` int(11) NOT NULL,
  `subject` varchar(211) NOT NULL,
  `address` longtext NOT NULL,
  `phone_number` varchar(211) NOT NULL,
  `location` varchar(211) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tb`
--

INSERT INTO `student_tb` (`id`, `name`, `surname`, `email`, `password`, `standard`, `subject`, `address`, `phone_number`, `location`) VALUES
(1, 'akshay', 'saxena', 'akshaysaxena74@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 12, 'matchs', 'vandana nagar,indore', '9098561456', 'indore'),
(2, 'chetan', 'namdev', 'chetan.pixlrit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 11, 'science', 'nagda', '9565656', 'nagda'),
(3, 'chetan1', 'namdev1', 'chetan.pixlrit@gmail.com1', 'aaa42296669b958c3cee6c0475c8093e', 111, 'science1', 'nagda1', '95656561', 'nagda1'),
(4, 'test', 'test', 'test@gmail.com', '83b4ef5ae4bb360c96628aecda974200', 11, 'arts', 'test', '98864', 'indore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_tb`
--
ALTER TABLE `student_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_tb`
--
ALTER TABLE `student_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
