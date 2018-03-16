-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2016 at 10:06 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `math`
--

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE IF NOT EXISTS `officers` (
  `studID` varchar(10) NOT NULL,
  `lname` varchar(26) NOT NULL,
  `fname` varchar(26) NOT NULL,
  `mi` varchar(4) NOT NULL,
  `course` varchar(5) NOT NULL,
  `year` int(1) NOT NULL,
  `section` char(1) NOT NULL,
  `position` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`studID`),
  UNIQUE KEY `studID` (`studID`),
  KEY `year` (`year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`studID`, `lname`, `fname`, `mi`, `course`, `year`, `section`, `position`, `password`) VALUES
('00-000-000', 'Mandi', 'Maria Teresa', 'F', 'Prof', 0, '0', 'Adviser', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('11-111-111', 'Henson', 'Ma. Victoria', '_', 'Prof', 0, '0', 'Co-Adviser', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-013', 'Garcia', 'Jerard Joseph', 'M.', 'BSCS', 3, 'B', 'Special Committee', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-044', 'Abawag', 'Amorlina', 'D.', 'BSCS', 3, 'B', 'P.R.O.', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-047', 'Ranada', 'Meredith Faye', 'D.', 'BSCS', 3, 'B', 'Special Committee', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-048', 'Natividad', 'Cariza', 'H.', 'BSCS', 3, 'B', 'Auditor', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-052', 'Velasques', 'Carlo', 'T.', 'BSCS', 3, 'B', 'Special Committee', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-054', 'Escalona', 'Pauline', 'D.', 'BSCS', 3, 'B', 'Treasurer', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-056', 'Balingbing', 'Jemuel', 'T.', 'BSCS', 3, 'B', 'Special Committee', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-058', 'Tablizo', 'Queenie Ann', 'S.', 'BSCS', 3, 'B', 'Secretary', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-059', 'Urgelles', 'Vanessa Grace', 'I.', 'BSCS', 3, 'B', 'Special Committee', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-063', 'Ogdang', 'Alidie Mae', 'A.', 'BSCS', 3, 'B', 'Special Committee', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-064', 'Paguio', 'Hannah', 'C.', 'BSCS', 3, 'B', 'Vice President', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-065', 'Salenga', 'Cecilia', 'B.', 'BSCS', 3, 'B', 'P.R.O.', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-066', 'Coronel', 'Maria Jolina', 'L.', 'BSCS', 3, 'B', 'President', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-069', 'Felix', 'Adrian', 'S.', 'BSCS', 3, 'B', 'Business Manager', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-074', 'Acedera', 'Shaira Denise', 'D.', 'BSCS', 3, 'B', 'Special Committee', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-075', 'Dacquel', 'Sean Glen', 'U.', 'BSCS', 3, 'B', 'Special Committee', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-077', 'Bonifacio', 'Robert Jr.', 'G.', 'BSCS', 3, 'B', 'Special Committee', '08d6c05a21512a79a1dfeb9d2a8f262f'),
('13-027-dk3', 'Ramirez', 'Rona Mae', 'B.', 'BSCS', 3, 'B', 'Special Committee', '08d6c05a21512a79a1dfeb9d2a8f262f');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
