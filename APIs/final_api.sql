-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 09:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `coding_jokes`
--

CREATE TABLE `coding_jokes` (
  `Joke_ID` int(11) NOT NULL,
  `Joke` varchar(1000) DEFAULT NULL,
  `Answer` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coding_jokes`
--

INSERT INTO `coding_jokes` (`Joke_ID`, `Joke`, `Answer`) VALUES
(1, 'What do all developers do before driving a car?', 'Git init!'),
(2, 'Why do developers use dark mode?', 'Because light attracts bugs!'),
(3, 'How many programmers does it take to change a light bulb?', 'None, that\'s a Hardware problem!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `api_key`) VALUES
(1, 'test@test.com', 'abcd1234'),
(2, 'tech', 'tech@tech.com'),
(3, 'testing@testing', '41c5facae2ea705a03b5b350b031debb'),
(4, 'testing@testing', 'dac7764298999cdd623e7e0ca35ac259'),
(5, 'testing@testing', '730a64fc8f1ba6daf4929dd5a662da74'),
(6, 'testing@testing', '2095b0a2fb79a58a83afd32a2d5e6de4'),
(7, '', '0c1d6c96fd5f5185253bf50c41415c80'),
(8, '', '04706b6184a9f4cce69eaee7e0ac4b8d'),
(9, 'joe@joe.com', 'c567d9fc9962d7084ed8b4defb7a3d54'),
(10, 'DillonLGreek@gmail.com', 'd6fa53124dc3e3af4f76fbb6f84abdf3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coding_jokes`
--
ALTER TABLE `coding_jokes`
  ADD PRIMARY KEY (`Joke_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coding_jokes`
--
ALTER TABLE `coding_jokes`
  MODIFY `Joke_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
