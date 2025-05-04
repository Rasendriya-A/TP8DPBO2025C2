-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2025 at 08:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `genre`, `year`) VALUES
(3, 'Demon Slay er', 'Action', '2025-05-02'),
(4, 'Shark', 'Ikan', '2025-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nim` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `nim`, `phone`, `join_date`) VALUES
(6, 'Daffa', 2300000, '08123456789', '2025-05-01'),
(7, 'Admin', 2300005, '08123456730', '2025-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `student_movie`
--

CREATE TABLE `student_movie` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `watch_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_movie`
--

INSERT INTO `student_movie` (`id`, `student_id`, `movie_id`, `watch_date`) VALUES
(3, 6, 3, '2025-05-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_movie`
--
ALTER TABLE `student_movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_student_id` (`student_id`),
  ADD KEY `fk_movie_id` (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_movie`
--
ALTER TABLE `student_movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_movie`
--
ALTER TABLE `student_movie`
  ADD CONSTRAINT `fk_movie_id` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_student_id` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
