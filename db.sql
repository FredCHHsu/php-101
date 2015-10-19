-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2015 at 04:50 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `guestbook2`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) NOT NULL,
  `title` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `content` text COLLATE utf8_bin,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created-at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `parent_id` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `title`, `content`, `is_deleted`, `created-at`, `parent_id`) VALUES
(4, 'yif this is  a title', 'this is a text', 0, '2015-10-12 09:52:03', 2),
(5, 'Go5 title', 'heLOOOO we are so cooooooooooollll!', 0, '2015-10-12 09:52:12', NULL),
(6, 'aow that was cooooool', 'hello  jjapwefopk p okapowefkl jk', 0, '2015-10-14 01:38:30', 5),
(7, '+Red', 'awefpoijsodijfijwoijefoijapoij', 0, '2015-10-14 01:38:46', NULL),
(8, 'ii', 'omg i delete somthing!!!', 0, '2015-10-14 07:21:17', NULL),
(9, '^^', 'so i must add some new things', 0, '2015-10-14 07:21:32', NULL),
(10, 'we feel cooooool', 'im awesooooom', 0, '2015-10-14 07:21:50', NULL),
(11, 'nike adidas puma', 'aof iwfo  oija f;lkfj ', 0, '2015-10-14 07:22:11', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `created_at`) VALUES
(1, 'admin', 'test', '2015-10-19 02:35:49'),
(3, 'tom', 'test', '2015-10-19 02:36:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;