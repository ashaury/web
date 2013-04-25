-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2013 at 08:44 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wrtmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kate_id` int(3) NOT NULL AUTO_INCREMENT,
  `k_nama` varchar(11) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`kate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kate_id`, `k_nama`) VALUES
(1, 'baju'),
(2, 'topi');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `prod_id` varchar(5) NOT NULL,
  `prod_nama` varchar(25) NOT NULL,
  `prod_hrg` decimal(10,0) NOT NULL,
  `prod_tgl` date NOT NULL,
  `url` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`prod_id`, `prod_nama`, `prod_hrg`, `prod_tgl`, `url`) VALUES
('1', 'Topi', '5000', '2013-04-24', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(10) NOT NULL,
  `username` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `staffnama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `staffstatus` varchar(1) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`staff_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `username`, `password`, `email`, `staffnama`, `staffstatus`) VALUES
(0, 'admin', 'admin', 'admin@jajadung.com', 'admin', ''),
(1, 'ashaury', '12345', 'herdi_ashaury@plasa.com', 'Herdi Ashaury', 'y'),
(2, 'tebe', '12345', 'empire_1988@yahoo.com', 'Tubagus Maulana Yusuf', 'y'),
(3, 'rinaha', 'rinaha', 'rinaha@gmail.com', 'Rinaha Ardiya Fatihana', 'y'),
(4, 'ledi', 'ledi', 'ledi@yahoo.com', 'Ledi Nuge', 'y'),
(5, 'shaury', '12345', 'shaury.lamb2@gmail.com', 'Herdi Ashaury', 'y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
