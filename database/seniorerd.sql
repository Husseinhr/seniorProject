-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2025 at 01:13 AM
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
-- Database: `senioredr`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `AddressID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `houseNumber` int(11) NOT NULL,
  `postalCode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appllications`
--

CREATE TABLE `appllications` (
  `appID` int(11) NOT NULL,
  `applicationPath` varchar(255) NOT NULL,
  `vollmachtPath` varchar(255) NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `uploadPath` varchar(255) NOT NULL,
  `clientID` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `submitionDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(11) NOT NULL,
  `outgoing_msg_id` int(11) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientID` int(11) NOT NULL,
  `FN` varchar(255) NOT NULL,
  `LN` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `houseNumber` int(11) NOT NULL,
  `postalCode` int(11) NOT NULL,
  `DOB` date DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `maritalState` varchar(255) NOT NULL,
  `phoneNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employeeID` int(11) NOT NULL,
  `FN` varchar(255) NOT NULL,
  `LN` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `picLoc` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `lastLogin` time NOT NULL,
  `lastLogout` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employeeID`, `FN`, `LN`, `email`, `password`, `position`, `picLoc`, `status`, `lastLogin`, `lastLogout`) VALUES
(100000, 'hussein', 'raad', '11931520@students.liu.edu.lb', '$2y$10$G/sg0uqpGAIfyombEYS62Ok2qB0O/p79p1rQuvL9TjDScKlZc8iXS', 'CEO', '98024-hussein.jpeg', 'online', '09:50:50', '09:17:11');

-- --------------------------------------------------------

--
-- Table structure for table `personalinfo`
--

CREATE TABLE `personalinfo` (
  `personalInfoID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `phoneNumber` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`AddressID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `appllications`
--
ALTER TABLE `appllications`
  ADD PRIMARY KEY (`appID`),
  ADD KEY `clientID` (`clientID`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD PRIMARY KEY (`personalInfoID`),
  ADD KEY `userID` (`userID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appllications`
--
ALTER TABLE `appllications`
  MODIFY `appID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personalinfo`
--
ALTER TABLE `personalinfo`
  MODIFY `personalInfoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `employees` (`employeeID`);

--
-- Constraints for table `appllications`
--
ALTER TABLE `appllications`
  ADD CONSTRAINT `appllications_ibfk_1` FOREIGN KEY (`clientID`) REFERENCES `client` (`clientID`);

--
-- Constraints for table `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD CONSTRAINT `personalinfo_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `employees` (`employeeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
