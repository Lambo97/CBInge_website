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
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `nom`, `lien`, `droit`, `afficher`) VALUES
(2, 'Agenda', '/agenda', 0, 1),
(3, 'Folklore', NULL, 0, 1),
(4, 'Comite', NULL, 0, 1),
(5, 'Multimédia', NULL, 6, 1),
(6, 'Discussion', NULL, 6, 1),
(7, 'Sponsor', '#', 5, 1),
(8, 'Messe', NULL, 5, 1),
(9, 'Tuyaux', '/tuyaux', 6, 1),
(10, 'Admin', NULL, 2, 1),
(11, 'Signaler un bug', '/bug', 6, 1);

--
-- Indexes for dumped tables
--