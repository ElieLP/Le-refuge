-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2016 at 03:24 AM
-- Server version: 5.5.53-0+deb8u1
-- PHP Version: 5.6.27-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `refuge`
--

-- --------------------------------------------------------

--
-- Table structure for table `ligne`
--

CREATE TABLE IF NOT EXISTS `ligne` (
`id` int(200) NOT NULL,
  `lat` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lng` varchar(255) CHARACTER SET utf8 NOT NULL,
  `prix` int(4) NOT NULL,
  `ville` varchar(30) CHARACTER SET utf8 NOT NULL,
  `categorie` varchar(20) CHARACTER SET utf8 NOT NULL,
  `sous_categorie` varchar(30) CHARACTER SET utf8 NOT NULL,
  `id_user` int(200) NOT NULL COMMENT 'clé secondaire',
  `vote` int(4) NOT NULL,
  `nom` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(200) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `point` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ligne`
--
ALTER TABLE `ligne`
 ADD PRIMARY KEY (`id`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ligne`
--
ALTER TABLE `ligne`
MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ligne`
--
ALTER TABLE `ligne`
ADD CONSTRAINT `ligne_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
