-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 05:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cup tracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `design_layout`
--

CREATE TABLE `design_layout` (
  `projectID` varchar(100) NOT NULL,
  `DLid` varchar(100) NOT NULL,
  `statusApproval` varchar(50) NOT NULL,
  `progressPercetange` int(3) NOT NULL,
  `projectCover` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dl_milestones`
--

CREATE TABLE `dl_milestones` (
  `projectID` varchar(100) NOT NULL,
  `actionItemID` varchar(100) NOT NULL,
  `startDate` date NOT NULL,
  `targetDate` date NOT NULL,
  `actualDate` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `isbn`
--

CREATE TABLE `isbn` (
  `projectID` varchar(100) NOT NULL,
  `isbnID` varchar(100) NOT NULL,
  `SKU_number` varchar(30) NOT NULL,
  `statusApproval` varchar(50) NOT NULL,
  `appliedDate` date NOT NULL,
  `obtainedDate` date NOT NULL,
  `ISBN_number` varchar(30) NOT NULL,
  `rejectedNote` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `IDpersonnel` varchar(6) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectID` varchar(6) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Siri` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `typeOfDesign` varchar(50) NOT NULL,
  `typeOfFinishing` varchar(50) NOT NULL,
  `ProjectSize` varchar(50) NOT NULL,
  `TotalPages` int(4) NOT NULL,
  `Graphic Designer` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Editor` varchar(100) NOT NULL,
  `illustrator` varchar(100) NOT NULL,
  `writer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `design_layout`
--
ALTER TABLE `design_layout`
  ADD PRIMARY KEY (`DLid`),
  ADD UNIQUE KEY `projectID` (`projectID`);

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`IDpersonnel`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectID`),
  ADD UNIQUE KEY `Graphic Designer` (`Graphic Designer`),
  ADD UNIQUE KEY `Editor` (`Editor`),
  ADD UNIQUE KEY `illustrator` (`illustrator`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
