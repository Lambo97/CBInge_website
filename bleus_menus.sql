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
(1, 'Informations', '/bleus/informations', 0, 1),
(2, 'FAQ', '/bleus/faq', 0, 1),
(3, 'Agenda', '/events', 0, 1),
(4, 'Folklore', '/bleus/folklore', 0, 1),
(5, 'Forum', '#', 0, 1),
(6, 'Pv Repet Chants', '/bleus/pvrepetchant', 0, 1),
(7, "S'inscrire", '/register', 0, 0);


--
-- Indexes for dumped tables
--