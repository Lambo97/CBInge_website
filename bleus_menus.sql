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
-- Dumping data for table `bleus_menus`
--

INSERT INTO `bleus_menus` (`id`, `nom`, `lien`, `droit`, `afficher`) VALUES
(6, 'Agenda', '/events', 0, 1),
(3, 'Folklore', /bleus/folklore, 0, 1),
(4, 'FAQ', /bleus/faq, 0, 1),
(5, 'Forum', NULL, 0, 1),
(2, 'Informations', /bleus/information, 0, 1);


--
-- Indexes for dumped tables
--