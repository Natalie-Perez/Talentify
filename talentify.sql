-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2017 at 03:11 AM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `talentify`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `city` varchar(32) NOT NULL,
  `state` char(2) NOT NULL,
  `zipcode` char(5) NOT NULL,
  `service_type` varchar(50) NOT NULL,
  `price` decimal(5,0) unsigned NOT NULL,
  `description` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `city`, `state`, `zipcode`, `service_type`, `price`, `description`) VALUES
(3, 29, 'miami', 'FL', '33144', 'creative', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(4, 30, 'miami', 'FL', '33144', 'computer', 25, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(5, 31, 'miami', 'FL', '33145', 'beauty', 25, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(6, 32, 'miami', 'FL', '33156', 'beauty', 25, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc. '),
(7, 33, 'miami', 'FL', '33145', 'household', 25, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(8, 34, 'New York', 'NY', '11213', 'legal', 38, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(9, 26, 'miami', 'FL', '33144', 'lessons', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(10, 26, 'miami', 'FL', '33144', 'pet', 15, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(13, 37, 'Coral Gables', 'FL', '33133', 'lessons', 150, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(15, 36, 'Los Angeles', 'CA', '90036', 'beauty', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(16, 24, 'Las Vegas', 'NV', '88901', 'labor', 80, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(20, 37, 'Miami', 'FL', '33145', 'other', 85, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(21, 37, 'miami', 'FL', '33155', 'labor', 150, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(22, 37, 'miami', 'FL', '33147', 'legal', 250, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(23, 39, 'Los Angeles', 'CA', '90036', 'legal', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(24, 40, 'Miami Beach', 'FL', '33140', 'lessons', 30, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(25, 36, 'Los Angeles', 'CA', '90036', 'labor', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(26, 40, 'Miami Beach', 'FL', '33140', 'pet', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(27, 39, 'Los Angeles', 'CA', '90036', 'legal', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(28, 39, 'Miami', 'FL', '33141', 'computer', 100, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(29, 42, 'Ft. Lauderdale', 'FL', '33076', 'beauty', 99999, 'I make you beautiful.'),
(32, 45, 'Miami', 'FL', '33144', 'computer', 100, 'Web Dev'),
(34, 46, 'miami', 'FL', '33175', 'household', 25, 'sdfdsfdsfsf'),
(36, 26, 'Miami', 'FL', '33144', 'other', 25, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.'),
(38, 26, 'Miami', 'FL', '33144', 'creative', 15, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget elit eu magna facilisis malesuada sollicitudin eget nunc.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(16) NOT NULL,
  `zipcode` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `language` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hash`, `name`, `phone`, `email`, `address`, `state`, `zipcode`, `gender`, `language`) VALUES
(24, 'toam', '$2y$10$YtnAySSz7WR8K03i4tg0h.Gx4be2VSeFDtQKazsdMdBMLUJmLPIOy', 'Toam', '123-123-6787', 'ormoie@kfjskjf.com', '', 'CO', '12345', 'female', 'english'),
(25, 'natalie', '$2y$10$M4DKQZy62mRM7qEb8kf/wOePCqJC7iafGI9b1bnyKLmI1HpxHiHWm', 'Natalie ', '123-567-6786', 'natalie@kdjhgdjk.com', '', 'FL', '33124', 'female', 'english'),
(26, 'nat', '$2y$10$V6ImPbRP1sOuXd.vqXy9K.T0hsJt4IFQ8xQxz4jR2PRflazS9sRka', 'nat', '305-555-5555', 'nperez@email.com', '', 'FL', '33144', 'female', 'english'),
(29, 'Maria', '$2y$10$hBDvkcUXeIHHzaaewQ0zCOx9Os1cj30ls5PXr0PBPvppsqRu0OfMO', 'Maria', '305-555-5555', 'n@none.com', '', 'FL', '33144', 'female', 'english'),
(30, 'Joan', '$2y$10$bEkALzZMatm17RnzrSF10u7AUTxlT04x28bvac8ueFkJ7EfaCoMZ.', 'Joan', '305-555-5555', 'n@n.com', '', 'FL', '33144', 'female', 'english'),
(31, 'John', '$2y$10$J5uWqy3Sx8qZpJ8.IcAuf.hWsOuVWg/6wZupDA9MY1/zmg4DhPSPe', 'John', '305-555-5555', 'name@email.com', '', 'FL', '33145', 'male', 'english'),
(32, 'Henry', '$2y$10$gVzzYVS636motCSqlFonu.eEmyFuY7e2zbZp2pL0mJZoi/dTz3uyW', 'Henry', '305-555-5555', 'n@email.com', '', 'FL', '33156', 'male', 'english'),
(33, 'Adriana', '$2y$10$e16Hb8TAMBi2ALn41tBkqOAl5XN/sj4iXmZ1TNwRZIMgebqmGZhQ6', 'Adriana', '305-555-5555', 'name3@mail.com', '', 'FL', '33145', 'female', 'english'),
(34, 'Eli', '$2y$10$zkc7XCzFJ4PLCl45IcFfO.7ychAjaEjV.gKPzE00vpsZh36JcXAUK', 'Eli', '123-567-7868', 'elku@flksjefl.com', '', 'FL', '33140', 'male', 'english'),
(35, 'Jane', '$2y$10$BPYk7MT/Sjbf8as3WGCeu.fcFlH2GpIGnYJU0qqOS.G6FEVeNdTfO', 'Jane Rodriguez', '407-555-5555', 'jane@outlook.com', '555 SW 5th Street', 'FL', '32789', 'female', 'english'),
(36, 'Jeff', '$2y$10$be6lb4fk67V6RMkf4zU4KOJYzcB1A6K1nob2MV99VbtZybd/jnDRC', 'Jeff Hewitt', '433-675-4683', 'jeff@talentify.com', '7925 E Crooked Creek Trl', 'AZ', '86314', 'male', 'english'),
(37, 'Angel', '$2y$10$ETrsE5wYsx05/EjngrxS1e4lOZb62L0WttJDDNBk/cUMtdHMwuXxC', 'Angel Delguy', '786-555-5555', 'angel@gmail.com', '', 'FL', '33133', 'male', 'english'),
(39, 'elie', '$2y$10$sQETNKIR3pD1jX2C0TDRY./LHgi0LZYI4m4m7BAqsCuDZPwvrWFXe', 'Eli Eichenblatt', '323-395-7854', 'eli@talentify.com', '4035 N MERIDIAN AVE., Apt PH', 'FL', '33140', 'male', 'english'),
(40, 'romig', '$2y$10$gOhuoYHIciDiSPORjaptd.nz61V5H95aAZkNTFZ7DTjbwXi.4.lB.', 'Romi Goldzweig', '323-723-6550', 'romi.goldzweig@gmail.com', '4035 N MERIDIAN AVE., Apt PH', 'FL', '33140', 'female', 'english'),
(41, 'alexg', '$2y$10$GXR0E/UK/8JNt2XXt8iE1uzHtDZbNs6rD0dsHI2UrXfDKha70kree', 'AlexG', '954-123-4567', 'alexg@yahoo.com', 'Pembroke Pines', 'FL', '33027', 'male', 'english'),
(42, 'r12345', '$2y$10$W1u.TMSTb6Be9pNFu1Kli.o8hOqJurRUUQtRLolTUcRtbBzk/s7Gy', 'Rakeem ', '123-456-7890', 'foo@bar.com', '123 Main Street', 'FL', '33076', 'male', 'spanish'),
(43, 'nolasco', '$2y$10$5HL3mmHEYlXioW3ByWTWoOdN0Sb09n9fugINCxKg2GeNErsHYXsvW', 'Sterling', '555-555-5555', 'pepe@hotmail.com', 'Miami', 'FL', '33142', 'male', 'english'),
(44, 'johnsmith', '$2y$10$2IX5P8nPymdpClZquUC34.JtaeRyRvB11PGshD19r8UfxdKEwmOAi', 'john smith', '305-305-3015', 'smith@robertsonadams.com', 'miami', 'FL', '33133', 'male', 'english'),
(45, 'lukz4', '$2y$10$CqPHYcD9LFmALTwu8cI5SuhgFgWwDBQx/L0/m6FSzswVgi6p6dHgi', 'Lucas', '305-746-7593', 'lukz4@hotmail.com', 'miami', 'FL', '33184', 'male', 'english'),
(46, 'ken', '$2y$10$to4nNRrhvTQMUk4PyhsluOD9dqb71rOPJglPFa.rWVQMFVfmBTAiy', 'Ken Loomis', '123-456-7896', 'ken@email.com', 'Miami', 'FL', '33137', 'male', 'english');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
