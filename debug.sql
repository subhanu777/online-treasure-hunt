-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 11:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `debug`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `t_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`username`, `password`, `t_name`) VALUES
('anonLab', 'test', 'anon'),
('root', 'toor', 'snehal'),
('liyakat@123', 'liyakat@321', 'Bajrangi Liyakat '),
('Dummy', 'dummy', 'Dummy'),
('trojanssoe', 'trojanssoe19', 'Trojans'),
('Bro_code', 'jatinverma4621', 'BRO-CODE'),
('aaarks', 'mksjkc', 'Solution Squad'),
('The_weed_weekers', 'Sujeet19@', 'The weed wackers'),
('quest_hunters', 'Quest@15112496', 'Quest hunters'),
('Badalshivraj', 'Badalmeetha', 'Techgurus'),
('Amarnath@thefalcons', '123456#&*', 'Team falcons'),
('syntance', 'Thepla', 'Syntance'),
('rassak67', '1amIronman', 'HYDRA'),
('7374091655', '7374091655', 'Terminator '),
('abhish32_soe', 'Abhi787898', 'Avengers'),
('devash76_soe', 'Standard@123', 'Gamechanger'),
('BITS N\' BYTES', 'MRTVAS', 'BITS N\' BYTES');

-- --------------------------------------------------------

--
-- Table structure for table `knapsack`
--

CREATE TABLE `knapsack` (
  `username` varchar(50) NOT NULL,
  `Valid` int(1) NOT NULL,
  `Ques` int(2) NOT NULL,
  `cost` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `Username` varchar(50) NOT NULL,
  `q1` varchar(1) NOT NULL,
  `q2` varchar(1) NOT NULL,
  `q3` varchar(1) NOT NULL,
  `q4` varchar(1) NOT NULL,
  `q5` varchar(1) NOT NULL,
  `q6` varchar(1) NOT NULL,
  `q7` varchar(1) NOT NULL,
  `q8` varchar(1) NOT NULL,
  `q9` varchar(1) NOT NULL,
  `q10` varchar(1) NOT NULL,
  `q11` varchar(1) NOT NULL,
  `q12` varchar(1) NOT NULL,
  `q13` varchar(1) NOT NULL,
  `q14` varchar(1) NOT NULL,
  `q15` varchar(1) NOT NULL,
  `q16` varchar(1) NOT NULL,
  `q17` varchar(1) NOT NULL,
  `q18` varchar(1) NOT NULL,
  `q19` varchar(1) NOT NULL,
  `q20` varchar(1) NOT NULL,
  `q21` varchar(1) NOT NULL,
  `q22` varchar(1) NOT NULL,
  `q23` varchar(1) NOT NULL,
  `q24` varchar(1) NOT NULL,
  `q25` varchar(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `username` varchar(50) NOT NULL,
  `score` int(3) NOT NULL,
  `t1` int(11) NOT NULL,
  `t2` int(11) NOT NULL,
  `t3` int(11) NOT NULL,
  `t4` int(11) NOT NULL,
  `t5` int(11) NOT NULL,
  `t6` int(11) NOT NULL,
  `t7` int(11) NOT NULL,
  `t8` int(11) NOT NULL,
  `t9` int(11) NOT NULL,
  `t10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`username`, `score`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `t9`, `t10`) VALUES
('anonLab', 10, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `username` varchar(50) NOT NULL,
  `q1` int(2) NOT NULL DEFAULT '0',
  `q2` int(2) NOT NULL DEFAULT '0',
  `q3` int(2) NOT NULL DEFAULT '0',
  `q4` int(2) NOT NULL DEFAULT '0',
  `q5` int(2) NOT NULL DEFAULT '0',
  `q6` int(2) NOT NULL DEFAULT '0',
  `q7` int(2) NOT NULL DEFAULT '0',
  `q8` int(2) NOT NULL DEFAULT '0',
  `q9` int(2) NOT NULL DEFAULT '0',
  `q10` int(2) NOT NULL DEFAULT '0',
  `q11` int(2) NOT NULL DEFAULT '0',
  `q12` int(2) NOT NULL DEFAULT '0',
  `q13` int(2) NOT NULL DEFAULT '0',
  `q14` int(2) NOT NULL DEFAULT '0',
  `q15` int(2) NOT NULL DEFAULT '0',
  `q16` int(2) NOT NULL DEFAULT '0',
  `q17` int(2) NOT NULL DEFAULT '0',
  `q18` int(2) NOT NULL DEFAULT '0',
  `q19` int(2) NOT NULL DEFAULT '0',
  `q20` int(2) NOT NULL DEFAULT '0',
  `q21` int(2) NOT NULL DEFAULT '0',
  `q22` int(2) NOT NULL DEFAULT '0',
  `q23` int(2) NOT NULL DEFAULT '0',
  `q24` int(2) NOT NULL DEFAULT '0',
  `q25` int(2) NOT NULL DEFAULT '0',
  `time` time(2) DEFAULT NULL,
  `Total Score` int(3) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`username`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `time`, `Total Score`) VALUES
('anonLab', -1, 4, 4, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '00:00:00.00', 6),
('prerurocks', -1, -1, -1, -1, 4, 4, 4, -1, -1, -1, -1, 4, 0, 0, -1, 0, -1, 0, 0, 0, 0, 0, 0, 0, 4, '00:28:39.00', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tsp`
--

CREATE TABLE `tsp` (
  `username` varchar(50) NOT NULL,
  `Valid` int(1) NOT NULL,
  `Ques` int(2) NOT NULL,
  `Distance` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
