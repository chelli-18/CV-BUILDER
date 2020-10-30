-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 07:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `S.NO` int(255) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `DATEOFBIRTH` date NOT NULL,
  `profession` varchar(50) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `NATIONALITY` varchar(10) NOT NULL,
  `MARTIALSTATUS` text NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `CONTACTNO` int(15) NOT NULL,
  `ADDRESS` text NOT NULL,
  `PG_NAMEOFINSTITUTE` varchar(50) NOT NULL,
  `pgnoc` varchar(50) NOT NULL,
  `PG_YEAROFPASSING` int(5) NOT NULL,
  `PG_PERCENTAGE` int(11) NOT NULL,
  `G_NAMEOFINSTITUTE` varchar(50) NOT NULL,
  `gnoc` varchar(50) NOT NULL,
  `G_YEAROFPASSING` int(11) NOT NULL,
  `G_PERCENTAGE` int(11) NOT NULL,
  `HS_NAMEOFINSTITUTE` varchar(50) NOT NULL,
  `HS_YEAROFPASSING` int(11) NOT NULL,
  `HS_PERCENTAGE` int(11) NOT NULL,
  `SSC_NAMEOFINSTITUTE` varchar(50) NOT NULL,
  `SSC_YEAROFPASSING` int(11) NOT NULL,
  `SSC_PERCENTAGE` int(11) NOT NULL,
  `TS_LANGUAGESKNOWN` varchar(100) NOT NULL,
  `TS_CONCEPTS` varchar(100) NOT NULL,
  `areaofinterest` varchar(100) NOT NULL,
  `COMPANYNAME_1` varchar(100) NOT NULL,
  `WORKDONE_1` varchar(100) NOT NULL,
  `COMPANYNAME_2` varchar(100) NOT NULL,
  `WORKDONE_2` varchar(100) NOT NULL,
  `PROJECTNAME1` varchar(100) NOT NULL,
  `WORKDONE_P1` varchar(100) NOT NULL,
  `PROJECTNAME2` varchar(100) NOT NULL,
  `WORKDONE_P2` varchar(100) NOT NULL,
  `ACHIEVEMENTS` varchar(100) NOT NULL,
  `LANGUAGESKNOWN` varchar(100) NOT NULL,
  `INTEREST` varchar(100) NOT NULL,
  `ref` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`S.NO`, `NAME`, `DATEOFBIRTH`, `profession`, `GENDER`, `NATIONALITY`, `MARTIALSTATUS`, `EMAIL`, `CONTACTNO`, `ADDRESS`, `PG_NAMEOFINSTITUTE`, `pgnoc`, `PG_YEAROFPASSING`, `PG_PERCENTAGE`, `G_NAMEOFINSTITUTE`, `gnoc`, `G_YEAROFPASSING`, `G_PERCENTAGE`, `HS_NAMEOFINSTITUTE`, `HS_YEAROFPASSING`, `HS_PERCENTAGE`, `SSC_NAMEOFINSTITUTE`, `SSC_YEAROFPASSING`, `SSC_PERCENTAGE`, `TS_LANGUAGESKNOWN`, `TS_CONCEPTS`, `areaofinterest`, `COMPANYNAME_1`, `WORKDONE_1`, `COMPANYNAME_2`, `WORKDONE_2`, `PROJECTNAME1`, `WORKDONE_P1`, `PROJECTNAME2`, `WORKDONE_P2`, `ACHIEVEMENTS`, `LANGUAGESKNOWN`, `INTEREST`, `ref`, `image`) VALUES
(56, 'Laura ', '1996-02-22', 'Graphic designer', 'female', 'INDIAN', 'unmarried', 'inthecitynewgirl@gmail.com', 2147483647, '2-4-56/7 wingston road,hyderabad', 'university of hyderabad', '', 2018, 87, 'university of hyderabad', '', 2016, 85, 'delhi public high school', 2012, 82, 'sri chaitanya school', 2010, 88, 'c,c++', 'frameworks/systems', '', 'mathica labs', 'worked as a software engineer . designs and create software solutions to solve pain points for vario', 'zincore solutions', 'worked as software developer . developed and implemented software solutions based on client requirem', 'Automated irrigation using soil moisture sensing, MNNIT- Allahabad', ' Designed a model that shows the switching mechanism of the water motor by sensing the moisture pres', 'Look ahead adder, MNNIT- Allahabad', 'Implemented a 32 Bit carry look ahead adder using Verilog on Xilinx.', 'Received Merit Scholarship for being in the top 10% in Electronics and Communication Engineering Dep', 'hindi,english', 'Debating  Public Speaking', '', '5f9bfc58240d60.52745901.png'),
(57, '', '0000-00-00', '', 'male', '', 'married', '', 0, '', '', '', 0, 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5f9c2e46804d58.33017885.'),
(58, '$name', '0000-00-00', '$dob', '$gender', '$nationali', '$marriage', '$email', 0, '$address', '$pgi', '$pgnoc', 0, 0, '$gi', '$gnoc', 0, 0, '$hi', 0, 0, '$si', 0, 0, '$plang', '$pconcepts', '$paoi', '$c1', '$w1', '$c2', '$w2', '$p1', '$pd1', '$p2', '$pd2', '$achieve', '$lang', '$interest', '$ref', '$uni'),
(59, 'Laura ', '0000-00-00', '2020-10-07', 'female', 'INDIAN', 'unmarried', 'inthecitynewgirl@gmail.com', 2147483647, '2-4-56/7 wingston road,hyderabad', 'university of hyderabad', 'master of techonology', 1958, 15, 'university of hyderabad', 'bachelor of techonology', 1957, -14, 'sri chaitanya school', 1959, 13, 'sri chaitanya school', 1961, 9, 'c,c++', 'frameworks/systems', 'web development', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 'RUHEE', '0000-00-00', '2020-10-22', 'male', 'INDIAN', 'unmarried', 'inthecitynewgirl@gmail.com', 2147483647, '2-4-56/7 wingston road,hyderabad', '', '', 0, 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', 'mathica labs', 'fsya', '', '', '', '', '', '', '', '', '', '', '5f9c4ff94f4e23.21179146.'),
(61, 'RUHEE', '0000-00-00', '2020-10-21', 'female', 'INDIAN', 'unmarried', 'inthecitynewgirl@gmail.com', 2147483647, 'asadsdf', '', '', 0, 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', 'jsgxd', 'fsya', 'zincore solutions', 'worked as  software developer', '', '', '', '', '', '', '', '', '5f9c508378d457.07836792.'),
(62, 'RUHEE', '0000-00-00', '2020-10-21', 'female', 'INDIAN', 'unmarried', 'inthecitynewgirl@gmail.com', 2147483647, 'asadsdf', '', '', 0, 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', 'jsgxd', 'fsya', 'zincore solutions', 'worked as  software developer', 'scan2pdf', 'Scan mulitle pages and add them to pdf.Allow user to crop the scanned pages.User should be able to s', '', '', '', '', '', '', '5f9c50d74d5c18.98684171.'),
(63, 'RUHEE', '0000-00-00', '2020-10-21', 'female', 'INDIAN', 'unmarried', 'inthecitynewgirl@gmail.com', 2147483647, 'asadsdf', '', '', 0, 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', 'jsgxd', 'fsya', 'zincore solutions', 'worked as  software developer', 'scan2pdf', 'Scan mulitle pages and add them to pdf.Allow user to crop the scanned pages.User should be able to s', 'CV Builder', 'Ask the user for various details like educations projects experience .Show the available templates', '', '', '', '', '5f9c5138f37ce3.54396829.'),
(64, '', '0000-00-00', '', 'male', '', 'married', '', 0, '', '', '', 0, 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5f9c51df1862e1.09374266.'),
(65, '', '0000-00-00', '', 'male', '', 'married', '', 0, '', '', '', 0, 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5f9c523647de04.13523048.'),
(66, '', '0000-00-00', '', 'male', '', 'married', '', 0, '', '', '', 0, 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5f9c53253a3d08.34057497.'),
(67, '', '0000-00-00', '', 'male', '', 'married', '', 0, '', '', '', 0, 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5f9c57eac92f42.11260780.'),
(68, 'name', '0000-00-00', '2020-10-21', 'female', 'INDIAN', 'unmarried', 'inthecitynewgirl@gmail.com', 2147483647, '2-4-56/7 wingston road,hyderabad', 'university of hyderabad', 'master of techonology', 1959, 16, 'university of hyderabad', 'bachelor of techonology', 1969, 23, 'sri chaitanya school', 1964, 22, 'sri chaitanya school', 1963, 32, 'c,c++', 'frameworks/systems', 'web development', 'mathica labs', 'worked as a software engineer', 'zincore solutions', 'worked as  software developer', 'scan2pdf', 'gch', '', '', '', '', '', '', '5f9c5aff5f44e5.42640661.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`S.NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `S.NO` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
