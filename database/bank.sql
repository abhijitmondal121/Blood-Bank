-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 04:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `slno` int(11) NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `p_code` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `A+` varchar(255) NOT NULL,
  `A-` varchar(255) NOT NULL,
  `B+` varchar(255) NOT NULL,
  `B-` varchar(255) NOT NULL,
  `O+` varchar(255) NOT NULL,
  `O-` varchar(255) NOT NULL,
  `AB+` varchar(255) NOT NULL,
  `AB-` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`slno`, `h_name`, `address`, `p_code`, `state`, `A+`, `A-`, `B+`, `B-`, `O+`, `O-`, `AB+`, `AB-`, `date`) VALUES
(1, 'Ruby General Hospital', 'Ruby golpark, anandapur more', '700107', ' West Bengal', '14', '33', '0', '0', '0', '6', '35', '0', '2021-07-07 19:30:20'),
(2, 'AMRI', '24/B Dhakuria, Golpark', ' 700023', 'West Bengal', '0', '4', '0', '0', '0', '2', '5', '0', '2021-07-07 19:30:20'),
(3, 'Fortis', '34 Phool Bagan, Kada Para, Salt lake', '700089', 'West Bengal', '0', '4', '23', '0', '8', '0', '0', '7', '2021-07-07 19:37:30'),
(4, 'S.N Blood Bank', '107 Canaught Place', '110876', ' Delhi', '0', '0', '0', '0', '56', '0', '0', '0', '2021-07-07 19:37:30'),
(5, 'White Cross Blood Bank', 'A Block, East of Kailash, New Delhi', '110065', 'Delhi', '3', '0', '8', '0', '5', '5', '0', '4', '2021-07-07 19:40:07'),
(6, 'Lions Blood Bank', '100, Block AK, Poorbi Shalimar Bag, Shalimar Bagh', '110088', ' Delhi', '0', '0', '10', '0', '0', '101', '0', '24', '2021-07-07 19:40:07'),
(7, 'Borivali Blood Bank', 'Vitthal Apartment, Ground, Sardar Vallabhbhai', '400103', 'Maharashtra', '0', '0', '16', '0', '0', '7', '6', '0', '2021-07-07 19:43:07'),
(8, 'Jankalyan Blood Bank', 'Gadgil Patangan, Nalegaon, Ahmednagar', '414001', 'Maharashtra', '5', '9', '3', '2', '9', '0', '4', '0', '2021-07-07 19:43:07'),
(9, 'St. George Hospital Blood Centre', 'Fort. Behine General Post Office P.D.Mello Road', '400001', 'Maharashtra', '0', '6', '5', '0', '7', '5', '10', '0', '2021-07-07 19:45:42'),
(10, 'Bombay Hospital Trust Blood Bank', 'MRC, Bombay Hospital 12, New Marine Lines', '400020', 'Maharashtra', '7', '0', '0', '0', '0', '5', '3', '3', '2021-07-07 19:45:42'),
(11, 'Dr. Hegdewar Blood Centre', 'Audumbar Apartment,Dharmpeth, Nagpur', '441002', 'Maharashtra', '5', '0', '3', '0', '0', '3', '0', '20', '2021-07-07 19:49:13'),
(12, 'Rotary blood bank', 'Medavakkam Main Rd, Vanuvampet, Madipakkam', '600091', 'Tamil Nadu', '4', '0', '10', '7', '4', '0', '0', '0', '2021-07-07 19:49:13'),
(13, 'Saharias Path Lab & Blood Bank', 'GS Rd, Byelane 3, Ananda Nagar, Bhangagarh', '781005', 'Assam', '0', '11', '7', '0', '0', '0', '0', '8', '2021-07-07 19:51:27'),
(14, 'Bark Blood Bank', 'Central Rd, Tarapur, Kanakpur Part-II', '788005', 'Assam', '0', '0', '8', '6', '10', '0', '0', '5', '2021-07-07 19:51:27'),
(15, 'carvin', 'sdfsdafsdfa', '789456', 'Jharkhand', '18', '23', '20', '11', '10', '12', '69', '15', '2021-07-07 19:56:14'),
(16, 'wegh', '134 56uh vj', '876655', 'Jammu and Kashmir', '12', '0', '0', '0', '0', '0', '0', '0', '2021-07-07 19:56:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
