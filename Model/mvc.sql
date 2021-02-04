-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2021 at 09:43 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `isbn` bigint(13) UNSIGNED NOT NULL,
  `title` varchar(400) NOT NULL,
  `author` varchar(255) NOT NULL,
  `genre` varchar(55) NOT NULL,
  `language` varchar(255) NOT NULL,
  `pages` int(11) UNSIGNED NOT NULL,
  `published` int(4) UNSIGNED NOT NULL,
  `cover_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn`, `title`, `author`, `genre`, `language`, `pages`, `published`, `cover_image`) VALUES
(9789058754370, 'Basiscursus - Basiscursus PHP7 en MySQL', 'Victor Peters', 'Programming', 'Dutch', 189, 2016, NULL),
(9789043017121, 'PHP kookboek', 'Ward van der Put', 'Programming', 'Dutch', 608, 2012, NULL),
(9021302268, 'Sprookjes van altijd en overal', 'Lea Smulders', 'Kids', 'Dutch', 128, 1985, NULL),
(9781408868737, 'The saffron tales', 'Yasmin Khan', 'Cooking', 'English', 238, 2016, NULL),
(9789077437117, 'Pallet design', 'Claudia Guther', 'Creative', 'Dutch', 109, 2015, NULL),
(9789018031558, 'Oslo', 'Annette Ster', 'Travelling', 'Dutch', 126, 2011, NULL),
(9000000000, 'Allokez', 'Arthure', 'creative', 'english', 5, 1900, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_collection`
--

CREATE TABLE `book_collection` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `book_isbn` int(13) UNSIGNED NOT NULL,
  `available` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `borrow_service`
--

CREATE TABLE `borrow_service` (
  `user_id_offer` int(11) NOT NULL,
  `book_isbn` int(11) NOT NULL,
  `user_id_borrow` int(11) NOT NULL,
  `borrow_date` int(11) NOT NULL,
  `return_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_number`, `city`) VALUES
(1, 'Leo', 'leo.miauwkes@gmail.com', 'I love my mom', '+32495756602', 'Gentbrugge');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_collection`
--
ALTER TABLE `book_collection`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
