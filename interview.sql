-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 11:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `question` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `created_at`, `deleted_at`) VALUES
(1, 'what is error function in php?', '2023-04-29 06:03:32', '2023-04-29 06:03:32'),
(2, 'is php case sensoitive?', '2023-04-29 06:03:32', '2023-04-29 06:03:32'),
(3, 'What is constructor in php?', '2023-04-29 06:04:21', '2023-04-29 06:04:21'),
(4, 'What is namespace in php?', '2023-04-29 06:04:21', '2023-04-29 06:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE `question_options` (
  `question_option_id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `question_option` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_correct` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_options`
--

INSERT INTO `question_options` (`question_option_id`, `question_id`, `question_option`, `created_at`, `deleted_at`, `is_correct`) VALUES
(1, 1, 'first ans', '2023-04-29 06:07:55', '2023-04-29 06:07:55', 0),
(2, 1, 'second ans', '2023-04-29 06:07:55', '2023-04-29 06:07:55', 1),
(3, 1, 'third ans', '2023-04-29 06:07:55', '2023-04-29 06:07:55', 0),
(4, 1, 'fourth ans', '2023-04-29 06:07:55', '2023-04-29 06:07:55', 0),
(5, 2, 'first ans', '2023-04-29 06:07:55', '2023-04-29 06:07:55', 0),
(6, 2, 'second ans', '2023-04-29 06:07:55', '2023-04-29 06:07:55', 0),
(7, 2, 'third ans', '2023-04-29 06:07:55', '2023-04-29 06:07:55', 1),
(8, 2, 'fourth ans', '2023-04-29 06:07:55', '2023-04-29 06:07:55', 0),
(9, 3, 'first ans', '2023-04-29 06:10:26', '2023-04-29 06:10:26', 1),
(10, 3, 'second ans', '2023-04-29 06:10:26', '2023-04-29 06:10:26', 0),
(11, 3, 'third ans', '2023-04-29 06:10:26', '2023-04-29 06:10:26', 0),
(12, 3, 'fourth and', '2023-04-29 06:10:26', '2023-04-29 06:10:26', 0),
(13, 4, 'first ands', '2023-04-29 06:10:26', '2023-04-29 06:10:26', 0),
(14, 4, 'second ans', '2023-04-29 06:10:26', '2023-04-29 06:10:26', 0),
(15, 4, 'third ans', '2023-04-29 06:10:26', '2023-04-29 06:10:26', 0),
(16, 4, 'fourth ans', '2023-04-29 06:10:26', '2023-04-29 06:10:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `created_at`, `deleted_at`) VALUES
(1, 'zahid', '2023-04-29 05:28:02', '2023-04-29 05:28:02'),
(2, 'testuser', '2023-04-29 05:28:02', '2023-04-29 05:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `users_questions_options`
--

CREATE TABLE `users_questions_options` (
  `user_questions_option_id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `option_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_skiped` int(11) NOT NULL DEFAULT 0,
  `is_correct` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_questions_options`
--

INSERT INTO `users_questions_options` (`user_questions_option_id`, `question_id`, `option_id`, `user_id`, `created_at`, `deleted_at`, `is_skiped`, `is_correct`) VALUES
(21, 1, NULL, 1, '2023-04-29 08:32:25', '2023-04-29 08:32:25', 1, 0),
(22, 2, 7, 1, '2023-04-29 08:32:28', '2023-04-29 08:32:28', 0, 1),
(23, 3, 10, 1, '2023-04-29 08:32:32', '2023-04-29 08:32:32', 0, 0),
(24, 4, 16, 1, '2023-04-29 08:32:36', '2023-04-29 08:32:36', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
  ADD PRIMARY KEY (`question_option_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_questions_options`
--
ALTER TABLE `users_questions_options`
  ADD PRIMARY KEY (`user_questions_option_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
  MODIFY `question_option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_questions_options`
--
ALTER TABLE `users_questions_options`
  MODIFY `user_questions_option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
