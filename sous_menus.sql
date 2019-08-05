-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2019 at 10:07 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cbinge`
--

-- --------------------------------------------------------

--
-- Table structure for table `sous_menus`
--

CREATE TABLE `sous_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_menu` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `droit` int(11) NOT NULL,
  `afficher` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sous_menus`
--

INSERT INTO `sous_menus` (`id`, `id_menu`, `nom`, `lien`, `droit`, `afficher`) VALUES
(1, 3, 'Chants', '#', 0, 1),
(2, 3, 'Oripaux', '#', 0, 1),
(3, 4, 'Comité actuel', '/comite/actuel', 0, 1),
(4, 4, 'Anciens comités', '#', 0, 1),
(5, 4, 'Anciens webmasters', '#', 0, 1),
(6, 5, 'Photos', '#', 6, 1),
(7, 5, 'Videos', '#', 6, 1),
(8, 5, 'Archives', '#', 6, 1),
(9, 6, 'Pv du comité', '/pvcomite', 5, 1),
(10, 6, 'FORUUUUM', '/forum', 5, 1),
(11, 6, 'Forum des bleus', '#', 5, 1),
(12, 6, 'Pense-bête', '#', 5, 1),
(13, 6, 'Insultes', '#', 6, 1),
(14, 6, 'Citations', '#', 6, 1),
(15, 6, 'Tu préfères', '#', 6, 1),
(16, 6, 'Sondages', '#', 5, 1),
(17, 6, 'Top 50 messages', '#', 5, 1),
(18, 8, 'Délations', '#', 5, 1),
(19, 8, 'Invité Messe', '#', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sous_menus`
--
ALTER TABLE `sous_menus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sous_menus`
--
ALTER TABLE `sous_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;