-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2019 at 10:06 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cbinge`
--

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `droit` int(11) NOT NULL,
  `afficher` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `nom`, `lien`, `droit`, `afficher`) VALUES
(2, 'Agenda', '/events', 0, 1),
(3, 'Folklore', NULL, 0, 1),
(4, 'Comite', NULL, 0, 1),
(5, 'Multimédia', NULL, 6, 1),
(6, 'Discussion', NULL, 6, 1),
(7, 'Sponsor', '#', 5, 1),
(8, 'Messe', NULL, 5, 1),
(9, 'Tuyaux', '#', 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;