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
-- Dumping data for table `sous_menus`
--

INSERT INTO `sous_menus` (`id`, `id_menu`, `nom`, `lien`, `droit`, `afficher`) VALUES
(1, 3, 'Chants', '/folklore/chants', 0, 1),
(2, 3, 'Oripeaux', '/folklore/oripeaux', 0, 1),
(3, 4, 'Comité actuel', '/comite/actuel', 0, 1),
(4, 4, 'Anciens comités', '/comite/anciens', 0, 1),
(5, 4, 'Anciens webmasters', '/comite/webmaster', 0, 1),
(6, 5, 'Photos', '#', 6, 1),
(7, 5, 'Archives', '#', 6, 1),
(8, 6, 'Pv du comité', '/pvcomite', 5, 1),
(9, 6, 'FORUUUUM', '/forum', 5, 1),
(10, 6, 'Forum des bleus', '/bleus/forum', 5, 1),
(11, 6, 'Pense-bête', '#', 5, 1),
(12, 6, 'Insultes', '#', 6, 1),
(13, 6, 'Citations', '#', 6, 1),
(14, 6, 'Tu préfères', '#', 6, 1),
(15, 6, 'Sondages', '#', 5, 1),
(16, 6, 'Top 50 messages', '#', 5, 1),
(17, 8, 'Délations', '#', 5, 1),
(18, 8, 'Invité Messe', '#', 3, 1),
(19, 10, 'Menus', '/admin/menus', 1, 1);

--
-- Indexes for dumped tables
--
