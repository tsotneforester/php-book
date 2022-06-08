-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2022 at 10:14 PM
-- Server version: 10.0.36-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpxge_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `mycontacts`
--

CREATE TABLE `mycontacts` (
  `id` varchar(2) NOT NULL DEFAULT '',
  `name` varchar(13) DEFAULT NULL,
  `surname` varchar(14) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `mobile` varchar(9) DEFAULT NULL,
  `birthday` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mycontacts`
--

INSERT INTO `mycontacts` (`id`, `name`, `surname`, `gender`, `mobile`, `birthday`) VALUES
('1', 'Beka', 'Korgalidze', 'm', '557****10', '1989-10-16'),
('10', 'Dato', 'Javakhishvili', 'm', '', '1958-11-12'),
('11', 'Dato', 'Kekutia', 'm', '558****99', '1995-12-21'),
('12', 'Davit', 'Kordzadze', 'm', '577****90', '1990-09-15'),
('13', 'Davit', 'Mechitashvili', 'f', '557****84', '1974-07-01'),
('14', 'Diana', 'Aslanishvili', 'f', '551****13', '1990-01-15'),
('15', 'Eka', 'Asistishvili', 'f', NULL, '0000-08-14'),
('16', 'Elena', 'Chaduneli', 'f', '598****54', '1992-06-20'),
('17', 'Elene', 'Iobidze', 'f', '597****39', NULL),
('18', 'Eliso', 'Khoshtaria', 'f', '577****72', NULL),
('19', 'Gela', 'Sanikidze', 'm', '577****23', '1987-01-26'),
('20', 'George', 'Mchedlidze', 'f', '598****13', '1990-01-14'),
('21', 'Gialo', 'Tomaradze', 'f', '599****33', '1990-09-15'),
('22', 'Giga', 'Aitsuradze', 'm', '597****07', NULL),
('23', 'Giga', 'Oboladze', 'm', '599****42', '1956-04-23'),
('24', 'Gio', 'Saralidze', 'm', '598****72', NULL),
('25', 'Gio', '', 'm', '571****15', NULL),
('26', 'Giorgi', 'Khutsishvili', 'm', '577****70', NULL),
('27', 'Giorgi', 'Korgalidze', 'm', '557****10', '1993-12-06'),
('28', 'Giorgi', 'Metreveli', 'm', '593****40', '1900-10-25'),
('29', 'Giorgi', 'Kochlaevi', 'm', '577****08', '1980-06-30'),
('30', 'Giorgi', 'Chaduneli', 'f', '598****44', '1998-05-04'),
('31', 'Giorgi', 'Mchedlishvili', 'm', '555****24', NULL),
('32', 'Giorgi', 'Gagnidze', 'm', '551****17', '0000-01-01'),
('33', 'Giorgi', 'Tskhvediani', 'm', '599****14', NULL),
('34', 'Giorgi', 'Quntelia', 'f', '595****81', '1977-08-03'),
('35', 'Giorgi', 'Furcxvanidze', 'f', '598****90', '2003-12-19'),
('36', 'Giorgi', 'Mkrtichian', 'm', '577****46', '1990-09-04'),
('37', 'Giorgi', 'Saralidze', 'f', '514****34', NULL),
('38', 'Giorgi', 'Napetvaridze', 'm', '577****75', NULL),
('39', 'Giorgi', 'Davitaia', 'm', '577****90', NULL),
('4', 'Besik', 'Burduli', 'm', '599****88', NULL),
('40', 'Giorgi', 'Kekenadze', 'm', '555****79', NULL),
('41', 'Givi', '', 'f', '577****36', '1966-08-01'),
('42', 'Gocha', 'Shalamberidze', 'm', '551****63', NULL),
('43', 'Goderdzi', 'Kuchava', 'm', '597****99', '1990-03-07'),
('44', 'Goga', 'Narini', 'm', '595****89', '1992-02-13'),
('5', 'Besiki', 'Joglidze', 'm', '577****44', NULL),
('6', 'Beso', 'Korgala', 'm', '568****30', NULL),
('7', 'Dachi', 'Furtskhvanidze', 'm', '598****65', '1964-01-06'),
('8', 'Dadu', 'Mtredi', 'm', '597****99', '2000-01-30'),
('9', 'Datiko Natlia', 'Chaduneli', 'f', '598****52', '1990-09-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mycontacts`
--
ALTER TABLE `mycontacts`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
