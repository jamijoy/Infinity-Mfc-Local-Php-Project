-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 07:41 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `military_base_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_code` varchar(15) NOT NULL,
  `branch_of_service` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_code`, `branch_of_service`) VALUES
('B-008', 'Army'),
('B-009', 'Navy'),
('B-010', 'Airforce');

-- --------------------------------------------------------

--
-- Table structure for table `military`
--

CREATE TABLE `military` (
  `military_id` int(15) NOT NULL,
  `rank_id` varchar(15) NOT NULL,
  `branch_code` varchar(15) NOT NULL,
  `mission_code` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(5) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `military`
--

INSERT INTO `military` (`military_id`, `rank_id`, `branch_code`, `mission_code`, `name`, `age`, `adress`, `gender`) VALUES
(3001, 'R-187', 'B-008', 'M-1826', 'George Califer Ramen', 28, 'North Frankfort, CA.', 'male'),
(3002, 'R-187', 'B-010', 'M-1998', 'Micheal Demore', 32, 'North tampline street 48, LA.', 'male'),
(3003, 'R-123', 'B-008', 'M-1826', 'William Philips', 25, 'Lord lameng park street, NA.', 'male'),
(3004, 'R-187', 'B-008', 'M-1826', 'August weke Lia', 23, 'Adams Law st, DC.', 'male'),
(3005, 'R-123', 'B-010', 'M-1998', 'Adam Lane', 30, 'Rossenbarg st, Ramenbarg, CA.', 'male'),
(3006, 'R-187', 'B-009', 'M-1826', 'Adele Fort', 34, 'Rossenbarg st, Ramenbarg, CA.', 'male'),
(3007, 'R-123', 'B-008', 'M-1212', 'William Simpson', 32, 'East Raterlane, NC.', 'male'),
(3008, 'R-187', 'B-008', 'M-1826', 'Farell Raidfle', 34, 'East Height Square, NY.', 'male'),
(3009, 'R-190', 'B-008', 'M-1998', 'Yallen Chaimen', 28, 'East Height Square, NY.', 'male'),
(3010, 'R-123', 'B-009', 'M-1212', 'Cate Marshal', 28, 'Las Adenfall, LA.', 'female'),
(3011, 'R-187', 'B-009', 'M-1826', 'Laren Pie', 28, 'Las Stainard Street, LA.', 'female'),
(3012, 'R-190', 'B-009', 'M-1998', 'Maria Saraprova', 32, 'Western Bay Lane, SA.', 'female'),
(3013, 'R-123', 'B-010', 'M-1212', 'Lord Tribbioni', 30, 'Pile Yard Garden, SA.', 'male'),
(3014, 'R-187', 'B-010', 'M-1826', 'Alfred Ross Galler', 32, 'Pile Yard Sen, NY.', 'male'),
(3015, 'R-190', 'B-010', 'M-1998', 'Maraden Lagen Hill', 28, 'Rose Silver Garden, NY.', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `mission_code` varchar(15) NOT NULL,
  `assigned_country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`mission_code`, `assigned_country`) VALUES
('M-1212', 'People\'s Republic Of Bangladesh'),
('M-1826', 'The Republic of India'),
('M-1998', 'United States Of America');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `military`
--
ALTER TABLE `military`
  ADD PRIMARY KEY (`military_id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`mission_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `military`
--
ALTER TABLE `military`
  MODIFY `military_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3016;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
