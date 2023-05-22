-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 07:38 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2021-2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `first`
--

CREATE TABLE `first` (
  `REGNO` varchar(20) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `BS3171` varchar(20) NOT NULL,
  `CY3151` varchar(20) NOT NULL,
  `GE3151` varchar(20) NOT NULL,
  `GE3171` varchar(20) NOT NULL,
  `HS3151` varchar(20) NOT NULL,
  `MA3151` varchar(20) NOT NULL,
  `PH3151` varchar(20) NOT NULL,
  `ARREARS` int(20) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first`
--

INSERT INTO `first` (`REGNO`, `NAME`, `BS3171`, `CY3151`, `GE3151`, `GE3171`, `HS3151`, `MA3151`, `PH3151`, `ARREARS`, `CGPA`) VALUES
('812821104001', 'AAKASH S', 'A+', 'A', 'A', 'A', 'C', 'B+', 'B', 0, 0),
('812821104002', 'ABISHEIK R', 'A', 'A', 'A', 'A', 'B+', 'B+', 'B', 0, 0),
('812821104003', 'ADHISESHAN C', 'A', 'U', 'A', 'A', 'B+', 'B+', 'U', 0, 0),
('812821104004', 'ANBUSELVAN S', 'A', 'U', 'B+', 'A', 'B+', 'B', 'U', 0, 0),
('812821104005', 'ANUSHA A', 'O', 'A', 'A', 'A+', 'B+', 'B+', 'B+', 0, 0),
('812821104006', 'ARUN PANDIYAN M', 'B+', 'A', 'U', 'A', 'B', 'U', 'U', 0, 0),
('812821104007', 'ASHIK IBRAHIM S', 'A', 'U', 'U', 'A', 'C', 'B+', 'C', 0, 0),
('812821104008', 'ASWIN RAM K', 'A', 'A', 'A', 'A', 'B', 'B+', 'B+', 0, 0),
('812821104009', 'ATCHAYA SRI S', 'B+', 'U', 'U', 'A', 'U', 'U', 'U', 0, 0),
('812821104010', 'BAGAVATH R', 'B+', 'U', 'B+', 'A', 'U', 'U', 'U', 0, 0),
('812821104011', 'BASKAR R', 'A', 'A', 'B+', 'A', 'B', 'U', 'B', 0, 0),
('812821104012', 'BRINDHA K', 'A+', 'A+', 'A', 'A+', 'A', 'B+', 'B', 0, 0),
('812821104013', 'DHARANI R', 'O', 'A', 'A', 'A+', 'A', 'B+', 'B+', 0, 0),
('812821104014', 'DHARSHINI M', 'A', 'A', 'A', 'A', 'B+', 'C', 'B', 0, 0),
('812821104015', 'DINAVATHI  V', 'O', 'A', 'B+', 'A+', 'B+', 'B+', 'B+', 0, 0),
('812821104016', 'ELAKKIAN D', 'B+', 'A', 'B+', 'A', 'B+', 'U', 'B', 0, 0),
('812821104017', 'GAYATHRI B', 'A', 'A', 'B+', 'A', 'B+', 'U', 'U', 0, 0),
('812821104018', 'GAYATHRI S', 'A', 'A', 'B+', 'A', 'B', 'B+', 'B', 0, 0),
('812821104019', 'GOKUL PRASANNA B', 'B+', 'A', 'B+', 'A', 'A', 'B+', 'B+', 0, 0),
('812821104020', 'GOWTHAMI N', 'A', 'U', 'B+', 'A', 'B+', 'B+', 'B+', 0, 0),
('812821104021', 'GUNASEELAN D', 'B+', 'U', 'B+', 'A', 'B+', 'B+', 'B', 0, 0),
('812821104022', 'HARIBASKAR K', 'B+', 'A', 'B+', 'A', 'B', 'U', 'U', 0, 0),
('812821104023', 'HARIKIRUPA NS', 'A+', 'A', 'A', 'A+', 'A', 'A', 'B+', 0, 0),
('812821104024', 'HARINI M', 'A', 'A', 'A', 'A', 'B+', 'B+', 'B+', 0, 0),
('812821104025', 'HEMA PRIYA K', 'B+', 'U', 'U', 'A', 'U', 'U', 'U', 0, 0),
('812821104026', 'IDASCADAR ANBARASI  ', 'A', 'A', 'B+', 'A', 'B+', 'B+', 'B+', 0, 0),
('812821104027', 'JOTHIISWARIYA S M', 'A', 'A', 'B+', 'A+', 'A', 'C', 'B+', 0, 0),
('812821104028', 'KALAISELVI S', 'A', 'A', 'B+', 'A', 'C', 'B+', 'U', 0, 0),
('812821104029', 'KALAISELVI S', 'A', 'U', 'B+', 'A', 'U', 'B+', 'U', 0, 0),
('812821104030', 'KARTHIKEYAN K', 'A', 'A', 'B+', 'A', 'B+', 'B+', 'A', 0, 0),
('812821104031', 'KATHIR A', 'A', 'A', 'B+', 'A', 'B', 'B+', 'B', 0, 0),
('812821104032', 'KAVIYA C', 'A', 'U', 'B+', 'A', 'B', 'B+', 'B', 0, 0),
('812821104033', 'KIRENKUMAR A', 'B+', 'U', 'B+', 'A', 'B', 'U', 'B+', 0, 0),
('812821104034', 'KISHORE KANNA A', 'B+', 'U', 'B+', 'A', 'C', 'U', 'U', 0, 0),
('812821104035', 'KUMARESAN KR', 'A', 'A', 'A', 'A', 'C', 'B+', 'B', 0, 0),
('812821104036', 'LYDIA JOICE A', 'A', 'A', 'B+', 'A', 'B+', 'C', 'B+', 0, 0),
('812821104037', 'MADHAN R', 'B+', 'U', 'B+', 'A', 'C', 'U', 'U', 0, 0),
('812821104038', 'MADHUBALAN M', 'A', 'U', 'B+', 'A', 'C', 'U', 'B+', 0, 0),
('812821104039', 'MAHALAKSHMI S', 'A+', 'A', 'A', 'A', 'B', 'B+', 'B+', 0, 0),
('812821104040', 'MEHAR JABEEN N', 'A', 'A', 'B+', 'A', 'A+', 'B+', 'B+', 0, 0),
('812821104041', 'MOHAMED SIRAJDEEN  I', 'A', 'U', 'B+', 'A', 'B+', 'B+', 'B+', 0, 0),
('812821104042', 'MOHAMED YOUSUF M', 'A', 'A', 'B+', 'A', 'B+', 'B+', 'B+', 0, 0),
('812821104043', 'MOHANAPRABU A', 'A', 'A', 'A', 'A', 'B', 'B+', 'B', 0, 0),
('812821104044', 'MURUGAN A', 'A', 'A', 'B+', 'A', 'B+', 'B+', 'B', 0, 0),
('812821104045', 'NANDHA KUMAR S', 'A', 'A', 'A', 'A', 'B+', 'B+', 'B+', 0, 0),
('812821104046', 'PONSANKARI A', 'B+', 'U', 'A', 'A', 'C', 'U', 'B+', 0, 0),
('812821104047', 'PRAGADEESH S', 'A', 'A', 'B+', 'A', 'B', 'B+', 'U', 0, 0),
('812821104048', 'PRAKASH P', 'A', 'U', 'U', 'A', 'C', 'U', 'U', 0, 0),
('812821104049', 'PRASANTH B', 'A', 'A', 'A', 'A', 'C', 'U', 'U', 0, 0),
('812821104050', 'PRAVEEN KUMAR E', 'A', 'U', 'B+', 'A', 'C', 'U', 'B+', 0, 0),
('812821104052', 'RAJESHKUMAR S', 'B+', 'A', 'A', 'A', 'B', 'B+', 'B', 0, 0),
('812821104053', 'RASIMATHAN M', 'B+', 'U', 'B+', 'A', 'C', 'U', 'U', 0, 0),
('812821104054', 'RENUGADEVI M', 'A', 'A', 'A', 'A', 'C', 'C', 'B+', 0, 0),
('812821104055', 'ROSELIN BALA S', 'A', 'A', 'B+', 'A', 'B', 'C', 'U', 0, 0),
('812821104056', 'SACHITHAN P', 'A', 'A', 'B+', 'A', 'B', 'B+', 'B+', 0, 0),
('812821104057', 'SAKTHIVEL C', 'A', 'A', 'B+', 'A', 'U', 'U', 'U', 0, 0),
('812821104058', 'SANMATHI  P', 'A', 'A', 'A', 'A', 'B+', 'B+', 'B+', 0, 0),
('812821104059', 'SARAVANAKUMAR S', 'A', 'A', 'A+', 'A', 'B', 'B+', 'B', 0, 0),
('812821104061', 'SHARMILA K', 'A', 'A', 'B+', 'A', 'B', 'B', 'B', 0, 0),
('812821104062', 'SHYAM ARIVUKARASAN  ', 'A', 'A', 'B+', 'A', 'B+', 'B', 'C', 0, 0),
('812821104063', 'SIBIRAJ B', 'A', 'U', 'U', 'A', 'B', 'U', 'U', 0, 0),
('812821104064', 'SOORYA S', 'A', 'A', 'A', 'A', 'A', 'B+', 'U', 0, 0),
('812821104065', 'SREE THURGA P', 'A', 'A', 'B+', 'A+', 'C', 'C', 'B', 0, 0),
('812821104066', 'SRI ARAVIND R', 'A', 'U', 'B+', 'A', 'B+', 'B', 'U', 0, 0),
('812821104067', 'SRIKANTH  C', 'A', 'U', 'U', 'A', 'C', 'B', 'U', 0, 0),
('812821104068', 'SUBASH S', 'B+', 'U', 'B+', 'A', 'B', 'B', 'B', 0, 0),
('812821104069', 'THAVASIMANI V', 'A', 'A', 'A', 'A', 'C', 'B', 'C', 0, 0),
('812821104070', 'THIRUPPATHI M', 'B+', 'U', 'B+', 'A', 'B', 'U', 'U', 0, 0),
('812821104071', 'UDHAYA E', 'A', 'A', 'A', 'A', 'A', 'B', 'B+', 0, 0),
('812821104072', 'UDHAYATHARANI D', 'A+', 'U', 'U', 'A', 'U', 'U', 'U', 0, 0),
('812821104073', 'VASUDEVAN S', 'A', 'A', 'A', 'A+', 'B+', 'B', 'U', 0, 0),
('812821104074', 'VEMBARASAN N', 'A', 'U', 'B+', 'A', 'B', 'B', 'U', 0, 0),
('812821104075', 'VIGNESH S', 'A+', 'A', 'B+', 'A', 'B+', 'B', 'B', 0, 0),
('812821104076', 'VIJAYABHARATHI P', 'A+', 'U', 'U', 'B+', 'B+', 'U', 'U', 0, 0),
('812821104077', 'VIJAYALAKSHMI P', 'A', 'A', 'U', 'A+', 'B', 'U', 'B', 0, 0),
('812821104078', 'VINITHA V', 'A+', 'U', 'B+', 'A', 'B', 'B', 'B', 0, 0),
('812821104079', 'WILLIAMS RAJ S', 'A', 'A', 'B+', 'A+', 'B+', 'U', 'U', 0, 0),
('812821104080', 'YUVAN SANKAR B', 'A', 'U', 'U', 'A', 'B+', 'U', 'U', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade` varchar(20) NOT NULL,
  `value` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade`, `value`) VALUES
('O', 10),
('A+', 9),
('A', 8),
('B+', 7),
('B', 6),
('C', 5),
('U', 0);

-- --------------------------------------------------------

--
-- Table structure for table `second`
--

CREATE TABLE `second` (
  `REGNO` varchar(20) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `BE3251` varchar(20) NOT NULL,
  `CS3251` varchar(20) NOT NULL,
  `CS3271` varchar(20) NOT NULL,
  `GE3251` varchar(20) NOT NULL,
  `GE3271` varchar(20) NOT NULL,
  `HS3251` varchar(20) NOT NULL,
  `MA3251` varchar(20) NOT NULL,
  `PH3256` varchar(20) NOT NULL,
  `ARREARS` int(20) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `second`
--

INSERT INTO `second` (`REGNO`, `NAME`, `BE3251`, `CS3251`, `CS3271`, `GE3251`, `GE3271`, `HS3251`, `MA3251`, `PH3256`, `ARREARS`, `CGPA`) VALUES
('812821104001', 'AAKASH  S', 'B+', 'B+', '0', 'B+', '0', 'B+', 'A', 'B+', 0, 0),
('812821104002', 'ABISHEIK R', 'B', 'B+', '0', 'B+', '0', 'A', 'B', 'B+', 0, 0),
('812821104003', 'ADHISESHAN  C', 'B+', 'B', 'A+', 'A', '0', 'B+', 'C', 'B', 0, 0),
('812821104004', 'ANBUSELVAN  S', 'U', 'U', 'A+', 'B', '0', 'B+', 'C', 'U', 0, 0),
('812821104005', 'ANUSHA A', 'B+', 'B+', 'A+', 'A', '0', 'A', 'A', 'B+', 0, 0),
('812821104006', 'ARUN PANDIYAN  M', 'U', 'U', 'A+', 'U', '0', 'B+', 'C', 'U', 0, 0),
('812821104007', 'ASHIK IBRAHIM S', 'U', 'U', 'A+', 'C', '0', 'U', 'U', 'U', 0, 0),
('812821104008', 'ASWIN RAM  K', 'B+', 'B+', '0', 'A', 'A+', 'B', 'B+', 'B+', 0, 0),
('812821104009', 'ATCHAYA SRI  S', 'U', 'U', 'A+', 'U', 'A+', 'C', 'U', 'B+', 0, 0),
('812821104010', 'BAGAVATH  R', 'U', 'U', 'A+', 'B', 'A+', 'C', 'U', 'U', 0, 0),
('812821104011', 'BASKAR  R', 'U', 'U', '0', 'B', 'A+', 'B+', 'B', 'U', 0, 0),
('812821104012', 'BRINDHA  K', 'B+', 'U', '0', 'A', 'A+', 'A', 'B+', 'A', 0, 0),
('812821104013', 'DHARANI  R', 'B+', 'A', '0', 'A', '0', 'B+', 'A', 'A', 0, 0),
('812821104014', 'DHARSHINI  M', 'B+', 'B+', 'A+', 'A', '0', 'B', 'B+', 'B+', 0, 0),
('812821104015', 'DINAVATHI  V', 'B+', 'A', '0', 'A+', '0', 'B+', 'A+', 'A', 0, 0),
('812821104016', 'ELAKKIAN  D', 'U', 'U', '0', 'B+', 'A+', 'B', 'U', 'C', 0, 0),
('812821104017', 'GAYATHRI  B', 'U', 'U', '0', 'B+', 'A+', 'B+', 'U', 'U', 0, 0),
('812821104018', 'GAYATHRI S', 'U', 'B+', '0', 'B+', '0', 'C', 'A', 'B+', 0, 0),
('812821104019', 'GOKUL PRASANNA B', 'U', 'U', 'A+', 'B+', 'A+', 'B+', 'C', 'C', 0, 0),
('812821104020', 'GOWTHAMI  N', 'U', 'U', 'A+', 'B+', 'A+', 'B+', 'U', 'B+', 0, 0),
('812821104021', 'GUNASEELAN  D', 'U', 'U', 'A+', 'B+', '0', 'B+', 'U', 'U', 0, 0),
('812821104022', 'HARIBASKAR K', 'U', 'U', 'A+', 'U', 'A+', 'B+', 'U', 'U', 0, 0),
('812821104023', 'HARIKIRUPA NS', 'B+', 'B+', '0', 'A+', '0', 'A+', 'A', 'B+', 0, 0),
('812821104024', 'HARINI  M', 'B+', 'A', 'A+', 'B+', '0', 'A', 'B+', 'B+', 0, 0),
('812821104025', 'HEMA PRIYA K', 'U', 'U', 'A+', 'U', '0', 'U', 'U', 'U', 0, 0),
('812821104026', 'IDASCADAR ANBARASI R', 'U', 'A', 'A+', 'B+', 'A+', 'B+', 'B', 'U', 0, 0),
('812821104027', 'JOTHIISWARIYA S M', 'U', 'B+', 'A+', 'U', '0', 'A', 'U', 'U', 0, 0),
('812821104028', 'KALAISELVI S', 'U', 'B+', '0', 'U', '0', 'B', 'B', 'U', 0, 0),
('812821104029', 'KALAISELVI  S', 'B+', 'B+', '0', 'U', '0', 'C', 'B', 'U', 0, 0),
('812821104030', 'KARTHIKEYAN  K', 'B+', 'A+', 'A+', 'A', '0', 'A', 'B+', 'B+', 0, 0),
('812821104031', 'KATHIR A', 'B+', 'B', '0', 'A', '0', 'B+', 'U', 'B+', 0, 0),
('812821104032', 'KAVIYA C', 'B', 'B', 'A+', 'B+', '0', 'B+', 'B', '6+', 0, 0),
('812821104033', 'KIRENKUMAR A', 'U', 'U', 'A+', 'B+', '0', 'B', 'C', 'U', 0, 0),
('812821104034', 'KISHORE KANNA A', 'U', 'U', 'A+', 'U', 'A+', 'B', 'U', 'U', 0, 0),
('812821104035', 'KUMARESAN  KR', 'U', 'A', '0', 'B', 'A+', 'B+', 'B+', 'A', 0, 0),
('812821104036', 'LYDIA JOICE A', 'B', 'U', '0', 'B+', '0', 'A+', 'B+', 'B', 0, 0),
('812821104037', 'MADHAN  R', 'U', 'U', '0', 'B', '0', 'U', 'C', 'B', 0, 0),
('812821104038', 'MADHUBALAN  M', 'U', 'U', '0', 'U', 'A+', 'C', 'U', 'U', 0, 0),
('812821104039', 'MAHALAKSHMI  S', 'B+', 'B+', '0', 'A', 'A+', 'A', 'B+', 'A', 0, 0),
('812821104040', 'MEHAR JABEEN  N', 'B+', 'B', '0', 'B+', 'A+', 'A+', 'B', 'B', 0, 0),
('812821104041', 'MOHAMED S1RAJDEEN I', 'B+', 'B+', 'A+', 'B+', 'A+', 'B+', 'B+', 'B+', 0, 0),
('812821104042', 'MOHAMED YOUSUF  M', 'B+', 'U', 'A+', 'B+', 'A+', 'B', 'B', 'B', 0, 0),
('812821104043', 'MOHANAPRABU A', 'U', 'B+', '0', 'A', '0', 'B+', 'B+', 'B+', 0, 0),
('812821104044', 'MURUGAN A', 'B', 'B', '0', 'A', 'A+', 'B+', 'B', 'B', 0, 0),
('812821104045', 'NANDHA KUMAR S', 'B+', 'B+', '0', 'A', '0', '13+', 'A', 'B+', 0, 0),
('812821104046', 'PONSANKARI A', 'U', 'U', 'A+', 'U', '0', 'C', 'U', 'C', 0, 0),
('812821104047', 'PRAGADEESH S', 'U', 'U', 'A+', 'A', '0', 'B+', 'C', 'U', 0, 0),
('812821104048', 'PRAKASH  P', 'UA', 'UA', 'UA', 'UA', 'UA', 'UA', 'UA', 'UA', 0, 0),
('812821104049', 'PRASANTH  B', 'U', 'U', 'A+', 'B+', 'A+', 'B', 'B', 'U', 0, 0),
('812821104050', 'PRAVEEN KUMAR  E', 'U', 'U', 'A+', 'B+', 'A+', 'C', 'U', 'U', 0, 0),
('812821104052', 'RAJESHKUMAR S', 'B', 'B', 'A+', 'B+', 'A+', 'B+', 'B+', 'U', 0, 0),
('812821104053', 'RASIMATHAN  M', 'U', 'U', 'A+', 'U', '0', 'B+', 'U', 'U', 0, 0),
('812821104054', 'RENUGADEVI  M', 'B+', 'B+', 'A+', 'A', 'A+', 'B+', 'B+', 'B+', 0, 0),
('812821104055', 'ROSELIN BALA S', 'B+', 'C', '0', 'U', '0', 'B+', 'C', 'C', 0, 0),
('812821104056', 'SACHITHAN  P', 'U', 'U', 'A+', 'A', 'A+', 'B+', 'C', 'B', 0, 0),
('812821104057', 'SAKTHIVEL C', 'U', 'U', 'A+', 'B+', 'A+', 'C', 'U', 'U', 0, 0),
('812821104058', 'SANMATHI  P', 'B+', 'B+', '0', 'B+', '0', 'U', 'B', 'U', 0, 0),
('812821104059', 'SARAVANAKUMAR S', 'B+', 'B+', '0', 'A', 'A+', 'B+', 'B+', 'B', 0, 0),
('812821104061', 'SHARMILA K', 'B', 'C', 'A+', 'B+', '0', 'B+', 'C', 'B', 0, 0),
('812821104062', 'SHYAM ARIVUKARASAN S', 'U', 'U', 'A+', 'B+', 'A+', 'B+', 'U', 'B', 0, 0),
('812821104063', 'SIBIRAJ  B', 'U', 'U', 'A+', 'U', 'A+', 'U', 'U', 'U', 0, 0),
('812821104064', 'SOORYA S', 'B', 'A', '0', 'B+', '0', 'A', 'U', 'C', 0, 0),
('812821104065', 'SREE THURGA P', 'B', 'B', 'A+', 'A', '0', 'B+', 'B+', 'B+', 0, 0),
('812821104066', 'SRI ARAVIND  R', 'U', 'B+', 'A+', 'B+', 'A+', 'B+', 'U', 'B', 0, 0),
('812821104067', 'SRIKANTH  C', 'U', 'U', 'A+', 'U', 'A+', 'B', 'U', 'U', 0, 0),
('812821104068', 'SUBASH  S', 'U', 'U', '0', 'A', '0', 'B+', 'U', 'B', 0, 0),
('812821104069', 'THAVASIMANI V', 'U', 'B', 'A+', 'B+', '0', 'B', 'C', 'U', 0, 0),
('812821104070', 'THIRUPPATHI  M', 'U', 'U', 'A+', 'U', '0', 'C', 'U', 'U', 0, 0),
('812821104071', 'UDHAYA E', 'B+', 'B+', 'A+', 'A', '0', 'A+', 'B+', 'B+', 0, 0),
('812821104072', 'UDHAYATHARANI  D', 'U', 'U', 'A+', 'A', '0', 'B', 'B', 'U', 0, 0),
('812821104073', 'VASUDEVAN  S', 'B+', 'B+', '0', 'A+', 'A+', 'A', 'B', 'C', 0, 0),
('812821104074', 'VEMBARASAN  N', 'U', 'U', '0', 'A', '0', 'B+', 'U', 'U', 0, 0),
('812821104075', 'VIGNESH  S', 'B+', 'B', 'A+', 'A', '0', 'A', 'B', 'A', 0, 0),
('812821104076', 'VIJAYABHARATHI  P', 'U', 'U', 'A+', 'U', 'A+', 'B', 'U', 'U', 0, 0),
('812821104077', 'VIJAYALAKSHMI  P', 'B', 'B', '0', 'B+', 'A+', 'B', 'B', 'B', 0, 0),
('812821104078', 'VINITHA V', 'B', 'U', 'A+', 'B+', '0', 'B+', 'U', 'U', 0, 0),
('812821104079', 'WILLIAMS RAJ  S', 'B+', 'U', 'A+', 'B+', '0', 'B+', 'U', 'B', 0, 0),
('812821104080', 'YUVAN SANKAR  B', 'U', 'U', 'A+', 'B', '0', 'B', 'U', 'U', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `regno` varchar(25) NOT NULL,
  `studentname` varchar(25) NOT NULL,
  `batch` varchar(100) NOT NULL DEFAULT '2021'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`regno`, `studentname`, `batch`) VALUES
('812821104001', 'AAKASH S', '2021'),
('812821104002', 'ABISHEIK R', '2021'),
('812821104003', 'ADHISESHAN C', '0'),
('812821104004', 'ANBUSELVAN S', '0'),
('812821104005', 'ANUSHA A', '0'),
('812821104006', 'ARUN PANDIYAN M', '0'),
('812821104007', 'ASHIK IBRAHIM S', '0'),
('812821104008', 'ASWIN RAM K', '0'),
('812821104009', 'ATCHAYA SRI S', '0'),
('812821104010', 'BAGAVATH R', '0'),
('812821104011', 'BASKAR R', '0'),
('812821104012', 'BRINDHA K', '0'),
('812821104013', 'DHARANI R', '0'),
('812821104014', 'DHARSHINI M', '0'),
('812821104015', 'DINAVATHI  V', '0'),
('812821104016', 'ELAKKIAN D', '0'),
('812821104017', 'GAYATHRI B', '0'),
('812821104018', 'GAYATHRI S', '0'),
('812821104019', 'GOKUL PRASANNA B', '0'),
('812821104020', 'GOWTHAMI N', '0'),
('812821104021', 'GUNASEELAN D', '0'),
('812821104022', 'HARIBASKAR K', '0'),
('812821104023', 'HARIKIRUPA NS', '0'),
('812821104024', 'HARINI M', '0'),
('812821104025', 'HEMA PRIYA K', '0'),
('812821104026', 'IDASCADAR ANBARASI  R', '0'),
('812821104027', 'JOTHIISWARIYA S M', '0'),
('812821104028', 'KALAISELVI S', '0'),
('812821104029', 'KALAISELVI S', '0'),
('812821104030', 'KARTHIKEYAN K', '0'),
('812821104031', 'KATHIR A', '0'),
('812821104032', 'KAVIYA C', '0'),
('812821104033', 'KIRENKUMAR A', '0'),
('812821104034', 'KISHORE KANNA A', '0'),
('812821104035', 'KUMARESAN KR', '0'),
('812821104036', 'LYDIA JOICE A', '0'),
('812821104037', 'MADHAN R', '0'),
('812821104038', 'MADHUBALAN M', '0'),
('812821104039', 'MAHALAKSHMI S', '0'),
('812821104040', 'MEHAR JABEEN N', '0'),
('812821104041', 'MOHAMED SIRAJDEEN  I', '0'),
('812821104042', 'MOHAMED YOUSUF M', '0'),
('812821104043', 'MOHANAPRABU A', '0'),
('812821104044', 'MURUGAN A', '0'),
('812821104045', 'NANDHA KUMAR S', '0'),
('812821104046', 'PONSANKARI A', '0'),
('812821104047', 'PRAGADEESH S', '0'),
('812821104048', 'PRAKASH P', '0'),
('812821104049', 'PRASANTH B', '0'),
('812821104050', 'PRAVEEN KUMAR E', '0'),
('812821104052', 'RAJESHKUMAR S', '0'),
('812821104053', 'RASIMATHAN M', '0'),
('812821104054', 'RENUGADEVI M', '0'),
('812821104055', 'ROSELIN BALA S', '0'),
('812821104056', 'SACHITHAN P', '0'),
('812821104057', 'SAKTHIVEL C', '0'),
('812821104058', 'SANMATHI  P', '0'),
('812821104059', 'SARAVANAKUMAR S', '0'),
('812821104061', 'SHARMILA K', '0'),
('812821104062', 'SHYAM ARIVUKARASAN  S', '0'),
('812821104063', 'SIBIRAJ B', '0'),
('812821104064', 'SOORYA S', '0'),
('812821104065', 'SREE THURGA P', '0'),
('812821104066', 'SRI ARAVIND R', '0'),
('812821104067', 'SRIKANTH  C', '0'),
('812821104068', 'SUBASH S', '0'),
('812821104069', 'THAVASIMANI V', '0'),
('812821104070', 'THIRUPPATHI M', '0'),
('812821104071', 'UDHAYA E', '0'),
('812821104072', 'UDHAYATHARANI D', '0'),
('812821104073', 'VASUDEVAN S', '0'),
('812821104074', 'VEMBARASAN N', '0'),
('812821104075', 'VIGNESH S', '0'),
('812821104076', 'VIJAYABHARATHI P', '0'),
('812821104077', 'VIJAYALAKSHMI P', '0'),
('812821104078', 'VINITHA V', '0'),
('812821104079', 'WILLIAMS RAJ S', '0'),
('812821104080', 'YUVAN SANKAR B', '0'),
('812821104301', 'JEGAN R K', '0'),
('812821104302', 'KASIVISWANATHAN A', '0'),
('812821104303', 'MANISHPRASANNA V', '0'),
('812821104304', 'MITHIRAN J', '0'),
('812821104305', 'SARAVANAKUMAR M', '0'),
('812821104306', 'GOKUL R', '0');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subjectcode` varchar(20) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `semester` int(10) NOT NULL,
  `credits` decimal(10,1) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjectcode`, `subjectname`, `semester`, `credits`, `year`) VALUES
('BE3251', 'Basic Electrical and ElectronicsEngineering', 2, '3.0', '2021-2022'),
('BS3171', 'Physics and Chemistry Laboratory', 1, '2.0', '2021-2022'),
('CS3251', 'Programming in C', 2, '3.0', '2021-2022'),
('CS3271', 'Programming in C Laboratory', 2, '2.0', '2021-2022'),
('CS3301', 'Data Structures', 3, '3.0', '2022-2023'),
('CS3311', 'Data Structures Laboratory', 3, '1.5', '2022-2023'),
('CS3351', 'Digital principles and Computer Organization', 3, '4.0', '2022-2023'),
('CS3352', 'Foundations of Data Science', 3, '3.0', '2022-2023'),
('CS3361', 'Data Science Laboratory', 3, '2.0', '2022-2023'),
('CS3381', 'Object Oriented Programming Laboratory', 3, '1.5', '2022-2023'),
('CS3391', 'Object Oriented Programming', 3, '3.0', '2022-2023'),
('CS3401', 'Algorithms', 4, '4.0', '2022-2023'),
('CS3451', 'Introduction to Operating Systems', 4, '3.0', '2022-2023'),
('CS3452', 'Theory of Computation', 4, '3.0', '2022-2023'),
('CS3461', 'Operating Systems Laboratory', 4, '1.5', '2022-2023'),
('CS3481', 'Database Management Systems Laboratory', 4, '1.5', '2022-2023'),
('CS3491', 'Artificial Intelligence and Machine Learning', 4, '4.0', '2022-2023'),
('CS3492', 'Database Management Systems', 4, '3.0', '2022-2023'),
('CY3151', 'Engineering Chemistry', 1, '3.0', '2021-2022'),
('GE3151', 'Problem Solving and PythonProgramming', 1, '3.0', '2021-2022'),
('GE3152', 'Heritage of Tamils', 1, '1.0', '2021-2022'),
('GE3171', 'Problem Solving and Python Programming Laboratory', 1, '2.0', '2021-2022'),
('GE3172', 'English Laboratory ', 1, '1.0', '2021-2022'),
('GE3251', 'Engineering Graphics', 2, '4.0', '2021-2022'),
('GE3252', 'Tamils and Technology', 2, '1.0', '2021-2022'),
('GE3271', 'Engineering Practices Laboratory', 2, '2.0', '2021-2022'),
('GE3272', 'Communication Laboratory / Foreign Language ', 2, '2.0', '2021-2022'),
('GE3361', 'Professional Developments', 3, '1.0', '2022-2023'),
('GE3451', 'Environmental Sciences and Sustainability', 4, '2.0', '2022-2023'),
('HS3152', 'Professional English - I', 1, '3.0', '2021-2022'),
('HS3252', 'Professional English - II', 2, '2.0', '2021-2022'),
('MA3151', 'Matrices and Calculus', 1, '4.0', '2021-2022'),
('MA3251', 'Statistics and Numerical Methods', 2, '4.0', '2021-2022'),
('MA3354', 'Discrete Mathematics', 3, '4.0', '2022-2023'),
('PH3151', 'Engineering Physics', 1, '3.0', '2021-2022'),
('PH3256', 'Physics for Information Science', 2, '3.0', '2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `third`
--

CREATE TABLE `third` (
  `REGNO` varchar(20) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `CS3301` varchar(20) NOT NULL,
  `CS3311` varchar(20) NOT NULL,
  `CS3351` varchar(20) NOT NULL,
  `CS3352` varchar(20) NOT NULL,
  `CS3361` varchar(20) NOT NULL,
  `CS3381` varchar(20) NOT NULL,
  `CS3391` varchar(20) NOT NULL,
  `GE3361` varchar(20) NOT NULL,
  `MA3354` varchar(20) NOT NULL,
  `ARREARS` int(11) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `third`
--

INSERT INTO `third` (`REGNO`, `NAME`, `CS3301`, `CS3311`, `CS3351`, `CS3352`, `CS3361`, `CS3381`, `CS3391`, `GE3361`, `MA3354`, `ARREARS`, `CGPA`) VALUES
('812821104001', 'AAKASH S', 'A', 'O', 'A', 'B+', 'O', 'O', 'B+', 'O', 'B+', 0, 0),
('812821104002', 'ABISHEIK R', 'A', 'O', 'A', 'B+', 'O', 'O', 'B+', 'O', 'B+', 0, 0),
('812821104003', 'ADHISESHAN C', 'B+', 'A+', 'B+', 'C', 'O', 'A+', 'U', 'O', 'C', 0, 0),
('812821104004', 'ANBUSELVAN S', 'B+', 'A+', 'A', 'B', 'O', 'A+', 'C', 'A+', 'B', 0, 0),
('812821104005', 'ANUSHA A', 'A', 'O', 'A', 'A', 'O', 'O', 'A', 'O', 'A', 0, 0),
('812821104006', 'ARUN PANDIYAN M', 'B+', 'A+', 'B', 'B', 'A+', 'A+', 'C', 'O', 'U', 0, 0),
('812821104007', 'ASHIK IBRAHIM S', 'B+', 'A+', 'B', 'B', 'A+', 'A+', 'C', 'O', 'U', 0, 0),
('812821104008', 'ASWIN RAM K', 'A', 'O', 'A', 'B+', 'O', 'O', 'B+', 'O', 'B+', 0, 0),
('812821104009', 'ATCHAYA SRI S', 'B+', 'A+', 'B', 'B+', 'A+', 'A+', 'U', 'O', 'U', 0, 0),
('812821104010', 'BAGAVATH R', 'B+', 'A+', 'B', 'C', 'A+', 'A+', 'U', 'A+', 'U', 0, 0),
('812821104011', 'BASKAR R', 'B+', 'A+', 'B', 'B+', 'A+', 'A+', 'C', 'A+', 'C', 0, 0),
('812821104012', 'BRINDHA K', 'A+', 'O', 'A', 'A+', 'O', 'O', 'B+', 'O', 'A', 0, 0),
('812821104013', 'DHARANI R', 'A', 'O', 'A', 'A', 'O', 'O', 'B+', 'O', 'B+', 0, 0),
('812821104014', 'DHARSHINI M', 'B+', 'O', 'B+', 'B+', 'O', 'O', 'B', 'O', 'U', 0, 0),
('812821104015', 'DINAVATHI  V', 'A', 'O', 'A', 'B+', 'O', 'O', 'B+', 'O', 'B+', 0, 0),
('812821104016', 'ELAKKIAN D', 'B', 'A+', 'B+', 'U', 'O', 'A+', 'U', 'A+', 'U', 0, 0),
('812821104017', 'GAYATHRI B', 'U', 'A+', 'B+', 'U', 'O', 'O', 'B', 'O', 'U', 0, 0),
('812821104018', 'GAYATHRI S', 'U', 'O', 'A', 'B', 'O', 'O', 'B', 'O', 'B+', 0, 0),
('812821104019', 'GOKUL PRASANNA B', 'U', 'A+', 'B+', 'C', 'O', 'O', 'C', 'O', 'C', 0, 0),
('812821104020', 'GOWTHAMI N', 'B+', 'O', 'A', 'B+', 'O', 'A+', 'B', 'O', 'U', 0, 0),
('812821104021', 'GUNASEELAN D', 'U', 'A+', 'B+', 'C', 'A+', 'A+', 'C', 'A+', 'U', 0, 0),
('812821104022', 'HARIBASKAR K', 'B', 'A+', 'B+', 'C', 'A+', 'A+', 'C', 'A+', 'U', 0, 0),
('812821104023', 'HARIKIRUPA NS', 'A', 'O', 'A', 'B+', 'O', 'O', 'B+', 'O', 'B+', 0, 0),
('812821104024', 'HARINI M', 'A', 'O', 'A', 'B', 'O', 'O', 'B', 'O', 'B+', 0, 0),
('812821104025', 'HEMA PRIYA K', 'U', 'A+', 'B+', 'U', 'A+', 'A+', 'U', 'O', 'U', 0, 0),
('812821104026', 'IDASCADAR ANBARASI  ', 'B+', 'A+', 'A', 'B', 'A+', 'O', 'B+', 'O', 'B', 0, 0),
('812821104027', 'JOTHIISWARIYA S M', 'B+', 'A+', 'A', 'B+', 'A+', 'O', 'U', 'O', 'U', 0, 0),
('812821104028', 'KALAISELVI S', 'A', 'O', 'B+', 'B', 'O', 'O', 'B+', 'O', 'C', 0, 0),
('812821104029', 'KALAISELVI S', 'A', 'O', 'B+', 'B+', 'O', 'O', 'B+', 'A+', 'U', 0, 0),
('812821104030', 'KARTHIKEYAN K', 'A', 'O', 'B+', 'B', 'O', 'O', 'B+', 'O', 'B+', 0, 0),
('812821104031', 'KATHIR A', 'A', 'A+', 'A', 'B', 'O', 'O', 'B+', 'O', 'U', 0, 0),
('812821104032', 'KAVIYA C', 'A', 'O', 'B+', 'B', 'O', 'O', 'B', 'O', 'U', 0, 0),
('812821104033', 'KIRENKUMAR A', 'A', 'A+', 'B+', 'B', 'O', 'A+', 'C', 'A+', 'U', 0, 0),
('812821104034', 'KISHORE KANNA A', 'B', 'A+', 'B+', 'U', 'A+', 'A+', 'U', 'A+', 'U', 0, 0),
('812821104035', 'KUMARESAN KR', 'A', 'O', 'B+', 'B', 'O', 'O', 'B+', 'O', 'B+', 0, 0),
('812821104036', 'LYDIA JOICE A', 'A', 'O', 'A', 'B+', 'O', 'O', 'A', 'A+', 'U', 0, 0),
('812821104037', 'MADHAN R', 'B', 'A+', 'B+', 'U', 'A+', 'A+', 'C', 'A+', 'U', 0, 0),
('812821104038', 'MADHUBALAN M', 'B', 'A+', 'B+', 'B', 'O', 'A+', 'C', 'A+', 'U', 0, 0),
('812821104039', 'MAHALAKSHMI S', 'A', 'O', 'A', 'B', 'A+', 'O', 'U', 'O', 'B+', 0, 0),
('812821104040', 'MEHAR JABEEN N', 'A', 'O', 'B+', 'B+', 'O', 'O', 'B+', 'O', 'C', 0, 0),
('812821104041', 'MOHAMED SIRAJDEEN  I', 'A', 'A+', 'A', 'B+', 'O', 'O', 'B', 'A+', 'B', 0, 0),
('812821104042', 'MOHAMED YOUSUF M', 'A', 'O', 'B+', 'B+', 'O', 'O', 'C', 'O', 'B', 0, 0),
('812821104043', 'MOHANAPRABU A', 'A', 'O', 'B+', 'B', 'O', 'O', 'B+', 'O', 'B', 0, 0),
('812821104044', 'MURUGAN A', 'A', 'O', 'A', 'B+', 'A+', 'O', 'B', 'O', 'B', 0, 0),
('812821104045', 'NANDHA KUMAR S', 'A', 'O', 'B+', 'B+', 'O', 'O', 'B+', 'O', 'U', 0, 0),
('812821104046', 'PONSANKARI A', 'B+', 'O', 'B+', 'B', 'O', 'O', 'C', 'O', 'U', 0, 0),
('812821104047', 'PRAGADEESH S', 'A', 'O', 'B', 'U', 'O', 'O', 'C', 'O', 'B', 0, 0),
('812821104048', 'PRAKASH P', 'UA', 'UA', 'UA', 'UA', 'UA', 'UA', 'UA', 'U', 'UA', 0, 0),
('812821104049', 'PRASANTH B', 'U', 'A+', 'B', 'B', 'O', 'A+', 'B', 'A+', 'C', 0, 0),
('812821104050', 'PRAVEEN KUMAR E', 'U', 'A+', 'B+', 'U', 'A+', 'A+', 'B', 'O', 'U', 0, 0),
('812821104052', 'RAJESHKUMAR S', 'B+', 'O', 'B+', 'B+', 'O', 'O', 'B+', 'O', 'U', 0, 0),
('812821104053', 'RASIMATHAN M', 'B', 'A+', 'B+', 'U', 'A+', 'A+', 'U', 'A+', 'U', 0, 0),
('812821104054', 'RENUGADEVI M', 'A', 'O', 'A', 'B+', 'O', 'O', 'B+', 'O', 'U', 0, 0),
('812821104055', 'ROSELIN BALA S', 'B', 'A+', 'B+', 'U', 'A+', 'A+', 'C', 'O', 'U', 0, 0),
('812821104056', 'SACHITHAN P', 'B+', 'O', 'B+', 'U', 'A+', 'O', 'C', 'O', 'B+', 0, 0),
('812821104057', 'SAKTHIVEL C', 'U', 'A+', 'B', 'U', 'A+', 'A+', 'U', 'O', 'U', 0, 0),
('812821104058', 'SANMATHI  P', 'A', 'O', 'A', 'B+', 'O', 'O', 'A+', 'O', 'B+', 0, 0),
('812821104059', 'SARAVANAKUMAR S', 'B+', 'O', 'A', 'U', 'O', 'O', 'A', 'O', 'U', 0, 0),
('812821104061', 'SHARMILA K', 'A', 'O', 'A', 'B+', 'A+', 'O', 'U', 'O', 'B', 0, 0),
('812821104062', 'SHYAM ARIVUKARASAN  ', 'B+', 'O', 'B+', 'B', 'A+', 'O', 'U', 'O', 'B', 0, 0),
('812821104063', 'SIBIRAJ B', 'U', 'A+', 'B+', 'U', 'A+', 'O', 'U', 'A+', 'U', 0, 0),
('812821104064', 'SOORYA S', 'A', 'O', 'A', 'U', 'O', 'O', 'B+', 'O', 'B', 0, 0),
('812821104065', 'SREE THURGA P', 'A', 'O', 'A', 'U', 'O', 'O', 'B+', 'O', 'B+', 0, 0),
('812821104066', 'SRI ARAVIND R', 'B', 'O', 'B+', 'U', 'A+', 'A+', 'U', 'O', 'B', 0, 0),
('812821104067', 'SRIKANTH  C', 'U', 'A+', 'B', 'U', 'A+', 'A+', 'U', 'O', 'U', 0, 0),
('812821104068', 'SUBASH S', 'U', 'A+', 'B+', 'U', 'O', 'O', 'U', 'O', 'U', 0, 0),
('812821104069', 'THAVASIMANI V', 'A', 'A+', 'B+', 'B', 'A+', 'A+', 'B', 'O', 'U', 0, 0),
('812821104070', 'THIRUPPATHI M', 'U', 'A+', 'B+', 'U', 'A+', 'A+', 'U', 'O', 'U', 0, 0),
('812821104071', 'UDHAYA E', 'A', 'O', 'B+', 'B+', 'O', 'O', 'B', 'O', 'B+', 0, 0),
('812821104072', 'UDHAYATHARANI D', 'B+', 'A+', 'B+', 'B', 'O', 'O', 'U', 'O', 'U', 0, 0),
('812821104073', 'VASUDEVAN S', 'A', 'A+', 'B+', 'U', 'O', 'O', 'B', 'O', 'B+', 0, 0),
('812821104074', 'VEMBARASAN N', 'U', 'O', 'B', 'U', 'O', 'O', 'U', 'O', 'U', 0, 0),
('812821104075', 'VIGNESH S', 'A', 'O', 'A', 'B+', 'O', 'O', 'B+', 'O', 'B+', 0, 0),
('812821104076', 'VIJAYABHARATHI P', 'B', 'O', 'B+', 'U', 'A+', 'O', 'C', 'O', 'U', 0, 0),
('812821104077', 'VIJAYALAKSHMI P', 'B+', 'O', 'B+', 'B', 'O', 'O', 'B', 'A+', 'U', 0, 0),
('812821104078', 'VINITHA V', 'A', 'O', 'B+', 'U', 'O', 'O', 'C', 'O', 'U', 0, 0),
('812821104079', 'WILLIAMS RAJ S', 'A', 'O', 'B+', 'C', 'O', 'O', 'B', 'A+', 'C', 0, 0),
('812821104080', 'YUVAN SANKAR B', 'UA', 'A', 'U', 'UA', 'A', 'A+', 'UA', 'U', 'UA', 0, 0),
('812821104301', 'JEGAN R K', 'U', 'A', 'U', 'U', 'A+', 'A+', 'U', 'O', 'U', 0, 0),
('812821104302', 'KASIVISWANATHAN A', 'U', 'A', 'U', 'U', 'A+', 'A+', 'U', 'O', 'U', 0, 0),
('812821104303', 'MANISHPRASANNA V', 'U', 'A+', 'U', 'U', 'A+', 'A+', 'U', 'O', 'U', 0, 0),
('812821104304', 'MITHIRAN J', 'U', 'A+', 'U', 'U', 'O', 'A+', 'U', 'O', 'U', 0, 0),
('812821104305', 'SARAVANAKUMAR M', 'U', 'A+', 'U', 'U', 'A+', 'A+', 'U', 'A+', 'U', 0, 0),
('812821104306', 'GOKUL R', 'U', 'A', 'U', 'U', 'A', 'O', 'U', 'A+', 'U', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `first`
--
ALTER TABLE `first`
  ADD PRIMARY KEY (`REGNO`);

--
-- Indexes for table `second`
--
ALTER TABLE `second`
  ADD PRIMARY KEY (`REGNO`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjectcode`);

--
-- Indexes for table `third`
--
ALTER TABLE `third`
  ADD PRIMARY KEY (`REGNO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
