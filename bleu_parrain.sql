-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql5-5.pro
-- Généré le :  jeu. 08 août 2019 à 12:32
-- Version du serveur :  5.6.43-log
-- Version de PHP :  5.6.40-0+deb8u2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cbingecaillou`
--

--
-- Déchargement des données de la table `pv_par_fil`
--

INSERT INTO `bleu_parrain` (`parrain_id`, `bleu_id`, `created_at`) VALUES
(3, 1, 0),
(40, 3, 0),
(16, 4, 0),
(18, 4, 0),
(112, 5, 0),
(113, 5, 0),
(114, 5, 0),
(115, 5, 0),
(20, 7, 0),
(17, 9, 0),
(55, 10, 0),
(65, 10, 0),
(34, 12, 0),
(36, 12, 0),
(37, 12, 0),
(38, 12, 0),
(39, 12, 0),
(40, 12, 0),
(41, 12, 0),
(82, 12, 0),
(83, 12, 0),
(1, 13, 0),
(10, 13, 0),
(19, 13, 0),
(44, 13, 0),
(4, 14, 0),
(5, 14, 0),
(10, 14, 0),
(4, 15, 0),
(5, 15, 0),
(70, 15, 0),
(54, 16, 0),
(59, 17, 0),
(137, 18, 0),
(16, 19, 0),
(7, 21, 0),
(20, 21, 0),
(31, 21, 0),
(32, 21, 0),
(7, 23, 0),
(20, 23, 0),
(21, 25, 0),
(32, 25, 0),
(21, 26, 0),
(31, 26, 0),
(46, 26, 0),
(49, 26, 0),
(21, 27, 0),
(31, 27, 0),
(46, 27, 0),
(49, 27, 0),
(18, 28, 0),
(62, 28, 0),
(63, 28, 0),
(70, 28, 0),
(54, 29, 0),
(3, 30, 0),
(66, 30, 0),
(37, 31, 0),
(9, 33, 0),
(12, 33, 0),
(28, 33, 0),
(76, 33, 0),
(134, 34, 0),
(144, 41, 0),
(66, 42, 0),
(76, 42, 0),
(78, 42, 0),
(57, 43, 0),
(79, 43, 0),
(197, 44, 0),
(2, 46, 0),
(3, 46, 0),
(106, 46, 0),
(163, 46, 0),
(46, 47, 0),
(46, 48, 0),
(133, 49, 0),
(2, 50, 0),
(34, 50, 0),
(35, 50, 0),
(54, 50, 0),
(71, 50, 0),
(55, 52, 0),
(148, 55, 0),
(137, 56, 0),
(37, 57, 0),
(34, 58, 0),
(173, 59, 0),
(174, 59, 0),
(54, 60, 0),
(195, 60, 0),
(210, 61, 0),
(56, 62, 0),
(57, 62, 0),
(60, 62, 0),
(73, 62, 0),
(3, 63, 0),
(36, 63, 0),
(37, 63, 0),
(39, 63, 0),
(82, 63, 0),
(106, 63, 0),
(107, 63, 0),
(161, 63, 0),
(162, 63, 0),
(165, 63, 0),
(72, 64, 0),
(56, 65, 0),
(57, 65, 0),
(60, 65, 0),
(54, 66, 0),
(61, 67, 0),
(61, 68, 0),
(56, 69, 0),
(82, 70, 0),
(194, 71, 0),
(36, 72, 0),
(41, 72, 0),
(83, 72, 0),
(148, 72, 0),
(149, 72, 0),
(157, 72, 0),
(60, 74, 0),
(151, 75, 0),
(54, 76, 0),
(71, 76, 0),
(72, 76, 0),
(60, 77, 0),
(73, 77, 0),
(161, 78, 0),
(162, 78, 0),
(165, 78, 0),
(34, 79, 0),
(83, 79, 0),
(148, 79, 0),
(61, 81, 0),
(211, 82, 0),
(71, 87, 0),
(17, 98, 0),
(60, 98, 0),
(210, 99, 0),
(54, 101, 0),
(183, 101, 0),
(209, 101, 0),
(16, 102, 0),
(56, 103, 0),
(57, 103, 0),
(60, 103, 0),
(73, 103, 0),
(34, 106, 0),
(18, 108, 0),
(63, 108, 0),
(70, 108, 0),
(63, 109, 0),
(83, 117, 0),
(38, 121, 0),
(34, 124, 0),
(58, 126, 0),
(67, 126, 0),
(79, 126, 0),
(57, 127, 0),
(56, 128, 0),
(7, 129, 0),
(65, 129, 0),
(34, 131, 0),
(34, 132, 0),
(34, 133, 0),
(134, 139, 0),
(18, 158, 0),
(54, 161, 0),
(72, 161, 0),
(41, 170, 0),
(225, 172, 0),
(281, 172, 0),
(59, 175, 0),
(59, 176, 0),
(59, 177, 0),
(17, 179, 0),
(99, 179, 0),
(17, 180, 0),
(99, 180, 0),
(173, 185, 0),
(71, 196, 0),
(71, 197, 0),
(71, 198, 0),
(61, 208, 0),
(103, 223, 0),
(75, 228, 0),
(7, 231, 0),
(18, 231, 0),
(86, 231, 0),
(14, 239, 0),
(69, 239, 0),
(59, 240, 0),
(176, 240, 0),
(177, 240, 0),
(280, 254, 0),
(103, 256, 0),
(110, 256, 0),
(252, 256, 0),
(62, 257, 0),
(26, 260, 0),
(27, 260, 0),
(225, 260, 0),
(228, 260, 0),
(236, 260, 0),
(237, 260, 0),
(281, 260, 0),
(95, 281, 0),
(124, 281, 0),
(126, 281, 0),
(61, 282, 0),
(55, 283, 0),
(58, 288, 0),
(67, 288, 0),
(1, 298, 0),
(7, 298, 0),
(59, 299, 0),
(177, 299, 0),
(44, 301, 0),
(98, 301, 0),
(283, 301, 0),
(27, 302, 0),
(225, 302, 0),
(228, 302, 0),
(237, 302, 0),
(4, 303, 0),
(27, 304, 0),
(225, 304, 0),
(228, 304, 0),
(236, 304, 0),
(237, 304, 0),
(67, 305, 0),
(127, 305, 0),
(99, 306, 0),
(102, 307, 0),
(288, 307, 0),
(58, 308, 0),
(79, 308, 0),
(18, 310, 0),
(99, 311, 0),
(10, 312, 0),
(9, 313, 0),
(5, 314, 0),
(12, 314, 0),
(231, 316, 0),
(256, 316, 0),
(99, 317, 0),
(63, 318, 0),
(25, 319, 0),
(128, 319, 0),
(158, 319, 0),
(2, 322, 0),
(3, 322, 0),
(16, 322, 0),
(17, 322, 0),
(34, 322, 0),
(54, 322, 0),
(60, 322, 0),
(71, 322, 0),
(72, 322, 0),
(82, 322, 0),
(83, 322, 0),
(171, 323, 0),
(179, 323, 0),
(55, 324, 0),
(296, 326, 0),
(58, 327, 0),
(79, 327, 0),
(239, 330, 0),
(260, 330, 0),
(57, 332, 0),
(25, 333, 0),
(128, 333, 0),
(158, 333, 0),
(7, 346, 0),
(158, 347, 0),
(76, 348, 0),
(288, 348, 0),
(301, 349, 0),
(313, 349, 0),
(328, 349, 0),
(319, 350, 0),
(320, 350, 0),
(322, 350, 0),
(324, 350, 0),
(302, 351, 0),
(307, 351, 0),
(44, 352, 0),
(80, 352, 0),
(98, 352, 0),
(299, 353, 0),
(12, 354, 0),
(4, 355, 0),
(5, 355, 0),
(9, 355, 0),
(12, 355, 0),
(102, 356, 0),
(239, 356, 0),
(231, 357, 0),
(256, 357, 0),
(318, 357, 0),
(25, 358, 0),
(1, 359, 0),
(67, 359, 0),
(32, 360, 0),
(49, 360, 0),
(91, 360, 0),
(105, 360, 0),
(109, 360, 0),
(296, 362, 0),
(4, 363, 0),
(9, 364, 0),
(28, 364, 0),
(57, 366, 0),
(79, 366, 0),
(57, 367, 0),
(79, 367, 0),
(16, 368, 0),
(18, 368, 0),
(54, 368, 0),
(72, 368, 0),
(5, 369, 0),
(298, 370, 0),
(305, 370, 0),
(308, 370, 0),
(312, 370, 0),
(330, 370, 0),
(333, 370, 0),
(10, 371, 0),
(319, 372, 0),
(320, 372, 0),
(322, 372, 0),
(324, 372, 0),
(333, 372, 0),
(283, 373, 0),
(243, 378, 0),
(128, 379, 0),
(231, 1001, 0),
(256, 1001, 0),
(2, 1002, 0),
(16, 1002, 0),
(17, 1002, 0),
(18, 1002, 0),
(54, 1002, 0),
(71, 1002, 0),
(72, 1002, 0),
(83, 1002, 0),
(296, 1003, 0),
(312, 1003, 0),
(283, 1004, 0),
(356, 1005, 0),
(360, 1005, 0),
(367, 1005, 0),
(102, 1006, 0),
(333, 1006, 0),
(372, 1006, 0),
(5, 1007, 0),
(1, 1008, 0),
(14, 1009, 0),
(213, 1009, 0),
(301, 1010, 0),
(368, 1010, 0),
(376, 1010, 0),
(380, 1010, 0),
(359, 1011, 0),
(1054, 1011, 0),
(357, 1012, 0),
(366, 1012, 0),
(231, 1013, 0),
(318, 1014, 0),
(310, 1015, 0),
(319, 1015, 0),
(321, 1015, 0),
(1006, 1015, 0),
(1027, 1015, 0),
(1044, 1015, 0),
(1048, 1015, 0),
(1055, 1015, 0),
(240, 1016, 0),
(320, 1016, 0),
(4, 1018, 0),
(12, 1018, 0),
(67, 1018, 0),
(283, 1018, 0),
(288, 1018, 0),
(370, 1019, 0),
(5, 1020, 0),
(1009, 1021, 0),
(1038, 1021, 0),
(1043, 1021, 0),
(351, 1022, 0),
(357, 1022, 0),
(366, 1022, 0),
(349, 1023, 0),
(352, 1023, 0),
(1024, 1023, 0),
(69, 1024, 0),
(240, 1025, 0),
(299, 1026, 0),
(306, 1026, 0),
(353, 1026, 0),
(364, 1027, 0),
(370, 1027, 0),
(239, 1028, 0),
(312, 1029, 0),
(158, 1030, 0),
(333, 1030, 0),
(5, 1031, 0),
(348, 1032, 0),
(322, 1033, 0),
(323, 1033, 0),
(332, 1033, 0),
(368, 1033, 0),
(318, 1034, 0),
(1004, 1037, 0),
(1012, 1037, 0),
(1016, 1037, 0),
(1045, 1037, 0),
(25, 1038, 0),
(1, 1040, 0),
(320, 1041, 0),
(321, 1044, 0),
(4, 1045, 0),
(364, 1046, 0),
(370, 1046, 0),
(239, 1047, 0),
(321, 1048, 0),
(296, 1049, 0),
(298, 1049, 0),
(305, 1049, 0),
(308, 1049, 0),
(312, 1049, 0),
(330, 1049, 0),
(67, 1050, 0),
(128, 1051, 0),
(25, 1052, 0),
(128, 1052, 0),
(127, 1053, 0),
(307, 1055, 0),
(310, 1055, 0),
(315, 1055, 0),
(319, 1055, 0),
(321, 1055, 0),
(350, 1055, 0),
(296, 1057, 0),
(48, 1058, 0),
(172, 1058, 0),
(283, 1058, 0),
(364, 1060, 0),
(256, 1061, 0),
(1, 1063, 0),
(231, 1063, 0),
(240, 1063, 0),
(318, 1063, 0),
(1007, 1064, 0),
(1008, 1064, 0),
(1024, 1064, 0),
(5, 1065, 0),
(354, 1066, 0),
(358, 1066, 0),
(364, 1066, 0),
(1001, 1068, 0),
(1002, 1068, 0),
(310, 1071, 0),
(319, 1071, 0),
(1006, 1071, 0),
(1018, 1071, 0),
(357, 1072, 0),
(256, 1073, 0),
(366, 1074, 0),
(1020, 1075, 0),
(1021, 1075, 0),
(1028, 1075, 0),
(1037, 1075, 0),
(1001, 1076, 0),
(1002, 1076, 0),
(2, 1077, 0),
(4, 1077, 0),
(5, 1077, 0),
(12, 1077, 0),
(16, 1077, 0),
(25, 1077, 0),
(67, 1077, 0),
(128, 1077, 0),
(318, 1077, 0),
(310, 1078, 0),
(356, 1078, 0),
(1038, 1078, 0),
(1047, 1078, 0),
(367, 1079, 0),
(1005, 1079, 0),
(1030, 1079, 0),
(1031, 1079, 0),
(1053, 1079, 0),
(1007, 1081, 0),
(1024, 1081, 0),
(320, 1084, 0),
(302, 1086, 0),
(1009, 1086, 0),
(1034, 1086, 0),
(1038, 1086, 0),
(2, 1090, 0),
(4, 1090, 0),
(5, 1090, 0),
(12, 1090, 0),
(16, 1090, 0),
(25, 1090, 0),
(67, 1090, 0),
(128, 1090, 0),
(318, 1090, 0),
(306, 1091, 0),
(231, 1094, 0),
(1014, 1095, 1),
(1017, 1095, 2),
(1022, 1095, 2),
(1025, 1095, 2),
(370, 1097, 0),
(312, 1098, 0),
(1006, 1098, 0),
(1008, 1098, 0),
(1030, 1099, 0),
(1031, 1099, 0),
(1038, 1099, 0),
(1014, 1100, 1),
(1017, 1100, 2),
(1022, 1100, 2),
(1025, 1100, 2),
(359, 1101, 0),
(370, 1101, 0),
(1054, 1101, 0),
(1008, 1102, 0),
(1018, 1102, 0),
(1041, 1102, 0),
(1, 1103, 0),
(351, 1105, 0),
(357, 1105, 0),
(1020, 1110, 0),
(1021, 1110, 0),
(1028, 1110, 0),
(1037, 1110, 0),
(1004, 1111, 0),
(1013, 1111, 0),
(1016, 1111, 0),
(1001, 1112, 2),
(1028, 1377, 0),
(1018, 1112, 2),
(1020, 1112, 2),
(1025, 1112, 2),
(1028, 1112, 2),
(256, 1113, 0),
(296, 1113, 0),
(312, 1113, 0),
(320, 1113, 0),
(351, 1117, 0),
(366, 1117, 0),
(1027, 1118, 0),
(1041, 1118, 0),
(1065, 1118, 0),
(296, 1119, 0),
(240, 1120, 0),
(364, 1120, 0),
(1024, 1120, 0),
(364, 1121, 0),
(312, 1122, 0),
(1033, 1123, 0),
(1063, 1123, 0),
(1064, 1123, 0),
(1067, 1123, 0),
(367, 1127, 0),
(1005, 1127, 0),
(1053, 1127, 0),
(310, 1128, 0),
(321, 1128, 0),
(1032, 1129, 0),
(1034, 1129, 0),
(1010, 1130, 0),
(1026, 1130, 0),
(1040, 1130, 0),
(1068, 1130, 0),
(1055, 1136, 0),
(1028, 1148, 0),
(1007, 1150, 0),
(1074, 1152, 0),
(1081, 1152, 0),
(1097, 1152, 0),
(1118, 1152, 0),
(364, 1153, 0),
(1004, 1154, 2),
(1391, 1480, 0),
(1017, 1154, 2),
(1021, 1154, 2),
(1020, 1154, 2),
(1037, 1154, 2),
(1078, 1155, 0),
(1082, 1155, 0),
(1098, 1155, 0),
(310, 1156, 0),
(312, 1156, 0),
(321, 1156, 0),
(1055, 1156, 0),
(1028, 1157, 0),
(364, 1158, 0),
(366, 1158, 0),
(1002, 1158, 0),
(1007, 1158, 0),
(1012, 1159, 0),
(351, 1160, 0),
(1005, 1161, 0),
(1032, 1161, 0),
(1034, 1161, 0),
(1038, 1161, 0),
(1049, 1161, 0),
(1076, 1163, 0),
(1090, 1163, 0),
(1100, 1163, 0),
(1105, 1163, 0),
(1111, 1163, 0),
(1130, 1163, 0),
(1117, 1164, 0),
(1124, 1164, 0),
(364, 1166, 0),
(1112, 1167, 0),
(1114, 1167, 0),
(1119, 1167, 0),
(1123, 1167, 0),
(1007, 1168, 0),
(1016, 1168, 0),
(1028, 1168, 0),
(1041, 1168, 0),
(1128, 1168, 0),
(1004, 1169, 2),
(1014, 1169, 1),
(1017, 1169, 2),
(1020, 1169, 2),
(1021, 1169, 2),
(1037, 1169, 2),
(1077, 1170, 0),
(1123, 1170, 0),
(1009, 1171, 0),
(1075, 1171, 0),
(1078, 1171, 0),
(1076, 1172, 0),
(1090, 1172, 0),
(1100, 1172, 0),
(1105, 1172, 0),
(1111, 1172, 0),
(1130, 1172, 0),
(1001, 1173, 0),
(1002, 1173, 0),
(4, 1175, 0),
(12, 1175, 0),
(128, 1175, 0),
(318, 1175, 0),
(370, 1175, 0),
(1013, 1177, 0),
(1018, 1177, 0),
(1033, 1177, 0),
(1102, 1177, 0),
(1038, 1179, 0),
(1025, 1180, 0),
(1094, 1182, 0),
(1101, 1182, 0),
(1103, 1182, 0),
(357, 1183, 0),
(366, 1184, 0),
(231, 1185, 0),
(256, 1185, 0),
(1030, 1186, 0),
(1031, 1186, 0),
(1064, 1186, 0),
(1067, 1186, 0),
(1109, 1187, 0),
(1110, 1187, 0),
(1004, 1188, 0),
(1016, 1188, 0),
(1025, 1188, 0),
(296, 1189, 0),
(1102, 1190, 0),
(1032, 1192, 0),
(1034, 1192, 0),
(1038, 1192, 0),
(1013, 1193, 0),
(1063, 1193, 0),
(1082, 1193, 0),
(1084, 1193, 0),
(1113, 1193, 0),
(1120, 1193, 0),
(1256, 1408, 0),
(1090, 1194, 0),
(1105, 1194, 0),
(1113, 1194, 0),
(1, 1196, 0),
(1077, 1197, 0),
(1112, 1197, 0),
(1114, 1197, 0),
(1119, 1197, 0),
(1123, 1197, 0),
(1127, 1197, 0),
(1010, 1199, 0),
(1026, 1199, 0),
(1040, 1199, 0),
(1037, 1201, 0),
(1006, 1202, 0),
(1041, 1203, 0),
(1128, 1203, 0),
(1001, 1207, 0),
(364, 1209, 0),
(1013, 1210, 0),
(1018, 1210, 0),
(1084, 1210, 0),
(1102, 1210, 0),
(1120, 1210, 0),
(351, 1211, 0),
(1028, 1212, 0),
(1173, 1212, 0),
(1073, 1213, 0),
(1154, 1213, 0),
(1158, 1213, 0),
(1182, 1213, 0),
(1185, 1213, 0),
(1030, 1214, 0),
(1031, 1214, 0),
(1053, 1214, 0),
(1066, 1214, 0),
(1150, 1214, 0),
(1177, 1214, 0),
(1179, 1214, 0),
(1100, 1215, 0),
(1183, 1215, 0),
(1014, 1217, 1),
(1016, 1217, 2),
(1078, 1218, 0),
(1082, 1218, 0),
(1004, 1219, 0),
(1021, 1219, 0),
(1025, 1219, 0),
(1037, 1219, 0),
(304, 1220, 0),
(1041, 1220, 0),
(1128, 1220, 0),
(1006, 1221, 0),
(1031, 1221, 0),
(1038, 1221, 0),
(1136, 1221, 0),
(1151, 1221, 0),
(1167, 1221, 0),
(1177, 1221, 0),
(1179, 1221, 0),
(1180, 1221, 0),
(1186, 1221, 0),
(351, 1222, 0),
(357, 1222, 0),
(1028, 1222, 0),
(1041, 1222, 0),
(1, 1223, 0),
(4, 1223, 0),
(231, 1223, 0),
(256, 1223, 0),
(296, 1223, 0),
(366, 1223, 0),
(1007, 1223, 0),
(1148, 1224, 0),
(1157, 1224, 0),
(1159, 1224, 0),
(1161, 1224, 0),
(1168, 1224, 0),
(364, 1225, 0),
(1028, 1225, 0),
(1094, 1226, 0),
(1041, 1227, 0),
(1017, 1229, 0),
(1103, 1230, 0),
(1074, 1231, 0),
(1076, 1231, 0),
(1081, 1231, 0),
(1095, 1231, 0),
(1101, 1231, 0),
(1118, 1231, 0),
(366, 1233, 0),
(1007, 1233, 0),
(357, 1236, 0),
(366, 1236, 0),
(1010, 1237, 0),
(1189, 1237, 0),
(1034, 1239, 0),
(1077, 1239, 0),
(1151, 1239, 0),
(1152, 1239, 0),
(1153, 1239, 0),
(1171, 1239, 0),
(1192, 1239, 0),
(1001, 1240, 0),
(1002, 1240, 0),
(1090, 1243, 0),
(1105, 1243, 0),
(1111, 1243, 0),
(1130, 1243, 0),
(1154, 1244, 0),
(1155, 1244, 0),
(1158, 1244, 0),
(1172, 1244, 0),
(1183, 1244, 0),
(1185, 1244, 0),
(1074, 1247, 0),
(1076, 1247, 0),
(1081, 1247, 0),
(1095, 1247, 0),
(1101, 1247, 0),
(1118, 1247, 0),
(1009, 1248, 0),
(1038, 1248, 0),
(1043, 1248, 0),
(1020, 1249, 0),
(1169, 1249, 0),
(1173, 1249, 0),
(1175, 1249, 0),
(1197, 1249, 0),
(1075, 1250, 0),
(1078, 1250, 0),
(1151, 1250, 0),
(351, 1251, 0),
(372, 1251, 0),
(1001, 1256, 0),
(1002, 1256, 0),
(1121, 1258, 0),
(1140, 1258, 0),
(1009, 1259, 0),
(1011, 1259, 0),
(1037, 1259, 0),
(1169, 1259, 0),
(1220, 1259, 0),
(1075, 1262, 0),
(1078, 1262, 0),
(1189, 1264, 0),
(1014, 1265, 1),
(1017, 1265, 2),
(1148, 1266, 0),
(1159, 1266, 0),
(1230, 1267, 0),
(1232, 1267, 0),
(1240, 1267, 0),
(351, 1268, 0),
(357, 1268, 0),
(364, 1268, 0),
(366, 1268, 0),
(1002, 1268, 0),
(1007, 1268, 0),
(1041, 1268, 0),
(351, 1269, 0),
(1157, 1269, 0),
(1159, 1269, 0),
(1161, 1269, 0),
(1076, 1271, 0),
(1100, 1271, 0),
(1130, 1271, 0),
(1094, 1272, 0),
(1090, 1273, 0),
(1105, 1273, 0),
(1111, 1273, 0),
(1077, 1274, 0),
(1114, 1274, 0),
(1119, 1274, 0),
(1123, 1274, 0),
(1170, 1274, 0),
(1197, 1274, 0),
(1219, 1274, 0),
(1231, 1274, 0),
(1237, 1274, 0),
(1016, 1276, 0),
(1163, 1277, 0),
(1213, 1278, 0),
(1226, 1278, 0),
(1244, 1278, 0),
(1221, 1279, 0),
(1222, 1279, 0),
(1223, 1279, 0),
(1224, 1279, 0),
(1243, 1279, 0),
(1247, 1279, 0),
(1250, 1279, 0),
(1251, 1279, 0),
(351, 1281, 0),
(357, 1281, 0),
(364, 1281, 0),
(366, 1281, 0),
(1002, 1281, 0),
(1041, 1281, 0),
(1211, 1282, 0),
(1212, 1282, 0),
(1225, 1282, 0),
(1229, 1282, 0),
(1001, 1286, 0),
(1090, 1286, 0),
(1094, 1286, 0),
(1100, 1286, 0),
(1091, 1287, 0),
(1209, 1288, 0),
(1211, 1288, 0),
(1212, 1288, 0),
(1217, 1288, 0),
(1081, 1289, 0),
(1103, 1289, 0),
(1016, 1290, 0),
(1105, 1290, 0),
(1074, 1291, 0),
(1076, 1291, 0),
(1095, 1291, 0),
(1157, 1291, 0),
(1161, 1291, 0),
(1168, 1291, 0),
(1090, 1292, 0),
(1118, 1292, 0),
(1077, 1293, 0),
(1114, 1293, 0),
(1119, 1293, 0),
(1123, 1293, 0),
(1170, 1293, 0),
(1197, 1293, 0),
(1219, 1293, 0),
(1231, 1293, 0),
(1237, 1293, 0),
(1081, 1294, 0),
(1103, 1294, 0),
(1221, 1295, 0),
(1222, 1295, 0),
(1223, 1295, 0),
(1224, 1295, 0),
(1243, 1295, 0),
(1247, 1295, 0),
(1250, 1295, 0),
(1251, 1295, 0),
(1154, 1296, 0),
(1158, 1296, 0),
(1183, 1296, 0),
(1209, 1296, 0),
(1028, 1297, 0),
(1009, 1298, 0),
(1152, 1298, 0),
(1171, 1298, 0),
(1214, 1298, 0),
(1221, 1298, 0),
(1009, 1299, 0),
(1011, 1299, 0),
(1037, 1299, 0),
(1107, 1299, 0),
(1114, 1301, 0),
(1123, 1301, 0),
(1170, 1301, 0),
(1240, 1301, 0),
(1074, 1302, 0),
(1076, 1302, 0),
(1095, 1302, 0),
(1168, 1302, 0),
(1014, 1303, 1),
(1017, 1303, 2),
(1169, 1303, 2),
(1184, 1304, 0),
(1185, 1304, 0),
(1209, 1304, 0),
(1006, 1306, 0),
(1028, 1306, 0),
(1032, 1306, 0),
(1034, 1306, 0),
(1081, 1306, 0),
(1094, 1306, 0),
(1100, 1306, 0),
(1103, 1306, 0),
(1118, 1306, 0),
(1148, 1306, 0),
(1158, 1306, 0),
(1159, 1306, 0),
(1183, 1306, 0),
(1225, 1306, 0),
(1030, 1307, 0),
(1031, 1307, 0),
(1167, 1307, 0),
(1177, 1307, 0),
(1186, 1307, 0),
(1221, 1307, 0),
(1498, 1588, 0),
(1095, 1310, 0),
(1118, 1310, 0),
(1121, 1311, 0),
(1140, 1311, 0),
(1082, 1313, 0),
(1155, 1313, 0),
(1173, 1313, 0),
(1185, 1313, 0),
(1213, 1313, 0),
(1244, 1313, 0),
(1026, 1318, 0),
(1095, 1318, 0),
(1161, 1319, 0),
(1028, 1320, 0),
(1100, 1320, 0),
(1005, 1321, 0),
(1006, 1321, 0),
(1032, 1321, 0),
(1049, 1321, 0),
(1067, 1321, 0),
(1136, 1321, 0),
(1004, 1322, 0),
(1021, 1322, 0),
(1025, 1322, 0),
(1075, 1323, 0),
(1078, 1323, 0),
(220, 1328, 0),
(1154, 1329, 0),
(1232, 1329, 0),
(351, 1330, 0),
(357, 1330, 0),
(364, 1330, 0),
(366, 1330, 0),
(1001, 1330, 0),
(1002, 1330, 0),
(1017, 1330, 0),
(1028, 1330, 0),
(1100, 1330, 0),
(1211, 1331, 0),
(1212, 1331, 0),
(1225, 1331, 0),
(1169, 1332, 0),
(1190, 1332, 0),
(1303, 1332, 0),
(1077, 1333, 0),
(1114, 1333, 0),
(1119, 1333, 0),
(1123, 1333, 0),
(1170, 1333, 0),
(1237, 1333, 0),
(1014, 1335, 1),
(1016, 1335, 3),
(1081, 1335, 3),
(1158, 1335, 3),
(1159, 1335, 2),
(1214, 1337, 0),
(1217, 1337, 0),
(1221, 1337, 0),
(1222, 1337, 0),
(1265, 1337, 0),
(1276, 1337, 0),
(1265, 1338, 0),
(1292, 1338, 0),
(1294, 1338, 0),
(1302, 1338, 0),
(1315, 1338, 0),
(1320, 1338, 0),
(1034, 1339, 0),
(1111, 1339, 0),
(1130, 1339, 0),
(1173, 1339, 0),
(1177, 1339, 0),
(1247, 1339, 0),
(1256, 1339, 0),
(1303, 1339, 0),
(1016, 1340, 0),
(1158, 1340, 0),
(1004, 1341, 0),
(1017, 1341, 0),
(1022, 1341, 0),
(1025, 1341, 0),
(1016, 1343, 0),
(1118, 1343, 0),
(1076, 1344, 0),
(1081, 1344, 0),
(1225, 1345, 0),
(1223, 1348, 0),
(1240, 1348, 0),
(1267, 1348, 0),
(1279, 1348, 0),
(1295, 1348, 0),
(1224, 1350, 0),
(1258, 1350, 0),
(1271, 1350, 0),
(1289, 1350, 0),
(1290, 1350, 0),
(1148, 1351, 0),
(1159, 1351, 0),
(1266, 1351, 0),
(1014, 1353, 0),
(1287, 1355, 0),
(1310, 1355, 0),
(1311, 1355, 0),
(1313, 1355, 0),
(1268, 1356, 0),
(1269, 1356, 0),
(1282, 1356, 0),
(1287, 1356, 0),
(1297, 1356, 0),
(1320, 1356, 0),
(1229, 1357, 0),
(1230, 1357, 0),
(1105, 1358, 0),
(1173, 1358, 0),
(1181, 1358, 0),
(1183, 1358, 0),
(1185, 1358, 0),
(1152, 1359, 0),
(1171, 1359, 0),
(1183, 1359, 0),
(1319, 1359, 0),
(1322, 1359, 0),
(1028, 1360, 0),
(1236, 1360, 0),
(1306, 1360, 0),
(1186, 1361, 0),
(1263, 1361, 0),
(1266, 1361, 0),
(1272, 1361, 0),
(1281, 1361, 0),
(1296, 1361, 0),
(1211, 1417, 0),
(1211, 1440, 0),
(1211, 1442, 0),
(1211, 1403, 0),
(1225, 1422, 0),
(1225, 1404, 0),
(1225, 1430, 0),
(1225, 1403, 0),
(1341, 1395, 0),
(1341, 1453, 0),
(1271, 1425, 0),
(1271, 1408, 0),
(1338, 1368, 0),
(1338, 1421, 0),
(1154, 1388, 0),
(1154, 1416, 0),
(1154, 1389, 0),
(1154, 1430, 0),
(1171, 1420, 0),
(1171, 1381, 0),
(1171, 1449, 0),
(1171, 1452, 0),
(1229, 1442, 0),
(1229, 1440, 0),
(1229, 1430, 0),
(1229, 1385, 0),
(1171, 1447, 0),
(1268, 1425, 0),
(1268, 1383, 0),
(1360, 1377, 0),
(1236, 1377, 0),
(1306, 1377, 0),
(1223, 1436, 0),
(1223, 1379, 0),
(1152, 1447, 0),
(1223, 1398, 0),
(1223, 1407, 0),
(1152, 1449, 0),
(1152, 1381, 0),
(1355, 1421, 0),
(1355, 1368, 0),
(1148, 1398, 0),
(1148, 1409, 0),
(1148, 1430, 0),
(1148, 1379, 0),
(1148, 1382, 0),
(1224, 1424, 0),
(1076, 1391, 0),
(1158, 1391, 0),
(1359, 1420, 0),
(1153, 1420, 0),
(1181, 1420, 0),
(1322, 1420, 0),
(1214, 1420, 0),
(1366, 1453, 0),
(1366, 1437, 0),
(1345, 1368, 0),
(1345, 1421, 0),
(1292, 1418, 0),
(1292, 1419, 0),
(1076, 1409, 0),
(1361, 1396, 0),
(1340, 1396, 0),
(1351, 1396, 0),
(1329, 1396, 0),
(1164, 1449, 0),
(1361, 1406, 0),
(1159, 1382, 0),
(1266, 1382, 0),
(1351, 1382, 0),
(1348, 1368, 0),
(1348, 1421, 0),
(1335, 1457, 0),
(1335, 1450, 0),
(1357, 1421, 0),
(1357, 1437, 0),
(1357, 1368, 0),
(1290, 1425, 0),
(1290, 1451, 0),
(1290, 1383, 0),
(1158, 1388, 0),
(1356, 1368, 0),
(1356, 1421, 0),
(1152, 1420, 0),
(1152, 1452, 0),
(1164, 1420, 0),
(1164, 1381, 0),
(1490, 1685, 0),
(1301, 1424, 0),
(1301, 1432, 0),
(1212, 1371, 0),
(1212, 1407, 0),
(1212, 1403, 0),
(1294, 1418, 0),
(1294, 1419, 0),
(1222, 1457, 0),
(1222, 1450, 0),
(1276, 1457, 0),
(1276, 1450, 0),
(1226, 1424, 0),
(1230, 1385, 0),
(1158, 1385, 0),
(1287, 1433, 0),
(1313, 1433, 0),
(1310, 1433, 0),
(1311, 1433, 0),
(1475, 1669, 0),
(1130, 1408, 0),
(1240, 1436, 0),
(1240, 1371, 0),
(1240, 1407, 0),
(1387, 1478, 0),
(1296, 1406, 0),
(1263, 1406, 0),
(1263, 1390, 0),
(1296, 1426, 0),
(1340, 1426, 0),
(1343, 1426, 0),
(1269, 1390, 0),
(1158, 1400, 0),
(1014, 1372, 0),
(1016, 1372, 0),
(1028, 1372, 0),
(351, 1372, 0),
(1333, 1453, 0),
(1237, 1453, 0),
(1331, 1443, 0),
(1330, 1368, 0),
(1358, 1368, 0),
(1266, 1379, 0),
(1232, 1379, 0),
(1334, 1379, 0),
(1331, 1417, 0),
(1358, 1421, 0),
(1329, 1416, 0),
(1330, 1421, 0),
(1331, 1374, 0),
(1330, 1437, 0),
(1320, 1384, 0),
(1295, 1384, 0),
(1267, 1384, 0),
(1266, 1404, 0),
(1232, 1404, 0),
(1016, 1412, 0),
(1185, 1412, 0),
(1173, 1412, 0),
(1279, 1418, 0),
(1302, 1418, 0),
(1272, 1406, 0),
(1272, 1405, 0),
(1272, 1375, 0),
(1221, 1457, 0),
(1221, 1450, 0),
(1244, 1423, 0),
(1230, 1436, 0),
(1230, 1407, 0),
(1334, 1398, 0),
(1351, 1398, 0),
(1214, 1450, 0),
(1217, 1450, 0),
(1265, 1450, 0),
(1001, 1372, 0),
(1343, 1374, 0),
(1279, 1383, 0),
(1118, 1448, 0),
(1103, 1448, 0),
(1287, 1455, 0),
(1337, 1437, 0),
(1333, 1446, 0),
(1297, 1390, 0),
(1315, 1390, 0),
(1230, 1401, 0),
(1111, 1448, 0),
(1232, 1375, 0),
(1302, 1375, 0),
(1296, 1375, 0),
(1340, 1375, 0),
(1281, 1375, 0),
(1214, 1457, 0),
(1214, 1452, 0),
(1002, 1372, 0),
(1232, 1400, 0),
(1232, 1416, 0),
(1320, 1405, 0),
(1153, 1452, 0),
(366, 1372, 0),
(1041, 1372, 0),
(357, 1372, 0),
(1103, 1372, 0),
(1302, 1419, 0),
(1118, 1372, 0),
(1339, 1449, 0),
(1339, 1420, 0),
(1339, 1381, 0),
(1339, 1447, 0),
(1359, 1452, 0),
(1359, 1449, 0),
(1164, 1447, 0),
(1442, 1518, 0),
(1359, 1447, 0),
(1339, 1452, 0),
(1117, 1449, 0),
(1117, 1381, 0),
(1164, 1452, 0),
(1117, 1447, 0),
(1117, 1420, 0),
(1117, 1452, 0),
(370, 1372, 0),
(364, 1372, 0),
(1331, 1403, 0),
(1159, 1372, 0),
(1153, 1381, 0),
(1322, 1381, 0),
(1321, 1381, 0),
(1214, 1381, 0),
(1186, 1406, 0),
(1274, 1431, 0),
(1077, 1420, 0),
(1231, 1431, 0),
(1210, 1431, 0),
(1237, 1431, 0),
(1081, 1372, 0),
(1387, 1524, 0),
(1442, 1524, 0),
(1420, 1524, 0),
(1420, 1476, 0),
(1076, 1475, 0),
(1076, 1513, 0),
(1361, 1489, 0),
(1361, 1467, 0),
(1154, 1474, 0),
(1154, 1462, 0),
(1154, 1501, 0),
(1154, 1468, 0),
(1406, 1467, 0),
(1406, 1480, 0),
(1406, 1515, 0),
(1329, 1501, 0),
(1329, 1468, 0),
(1329, 1489, 0),
(1329, 1463, 0),
(1412, 1462, 0),
(1341, 1508, 0),
(1341, 1507, 0),
(1341, 1502, 0),
(1014, 1474, 0),
(1081, 1474, 0),
(1295, 1526, 0),
(1295, 1494, 0),
(1389, 1480, 0),
(1389, 1515, 0),
(1315, 1526, 0),
(1453, 1480, 0),
(1436, 1480, 0),
(1451, 1480, 0),
(1407, 1480, 0),
(1382, 1480, 0),
(1385, 1480, 0),
(1411, 1480, 0),
(1345, 1459, 0),
(1290, 1459, 0),
(1266, 1406, 0),
(1400, 1480, 0),
(1416, 1480, 0),
(1397, 1490, 0),
(1396, 1490, 0),
(1388, 1480, 0),
(1448, 1490, 0),
(1427, 1490, 0),
(1372, 1480, 0),
(1395, 1480, 0),
(1405, 1480, 0),
(1379, 1480, 0),
(1423, 1490, 0),
(1450, 1490, 0),
(1148, 1496, 0),
(1148, 1474, 0),
(1148, 1469, 0),
(1390, 1506, 0),
(1345, 1471, 0),
(1345, 1493, 0),
(1223, 1510, 0),
(1223, 1487, 0),
(1223, 1460, 0),
(1223, 1485, 0),
(1223, 1495, 0),
(1417, 1508, 0),
(1417, 1507, 0),
(1409, 1507, 0),
(1409, 1508, 0),
(1422, 1508, 0),
(1422, 1507, 0),
(1430, 1508, 0),
(1430, 1507, 0),
(1404, 1507, 0),
(1404, 1508, 0),
(1440, 1507, 0),
(1440, 1596, 0),
(1382, 1496, 0),
(1382, 1527, 0),
(1382, 1519, 0),
(1382, 1506, 0),
(1384, 1462, 0),
(1028, 1473, 0),
(1306, 1473, 0),
(1377, 1473, 0),
(1440, 1508, 0),
(1388, 1514, 0),
(1388, 1515, 0),
(1212, 1498, 0),
(1212, 1475, 0),
(1212, 1469, 0),
(1212, 1513, 0),
(1266, 1510, 0),
(1272, 1510, 0),
(1338, 1493, 0),
(1338, 1471, 0),
(1385, 1519, 0),
(1385, 1527, 0),
(1455, 1524, 0),
(1453, 1514, 0),
(1453, 1515, 0),
(1296, 1467, 0),
(1296, 1489, 0),
(1296, 1494, 0),
(1391, 1494, 0),
(1294, 1491, 0),
(1294, 1472, 0),
(1294, 1495, 0),
(1431, 1502, 0),
(1224, 1485, 0),
(1387, 1476, 0),
(1186, 1467, 0),
(1186, 1494, 0),
(1408, 1506, 0),
(1357, 1502, 0),
(1357, 1471, 0),
(1357, 1493, 0),
(1348, 1471, 0),
(1348, 1493, 0),
(1268, 1477, 0),
(1268, 1526, 0),
(1339, 1476, 0),
(1297, 1526, 0),
(1297, 1494, 0),
(1418, 1491, 0),
(1292, 1491, 0),
(1240, 1498, 0),
(1451, 1522, 0),
(1290, 1522, 0),
(1567, 1685, 0),
(1232, 1468, 0),
(1416, 1468, 0),
(1343, 1489, 0),
(1334, 1489, 0),
(1351, 1489, 0),
(1340, 1489, 0),
(1340, 1494, 0),
(1265, 1495, 0),
(1320, 1495, 0),
(1217, 1495, 0),
(1272, 1495, 0),
(1263, 1495, 0),
(1315, 1495, 0),
(1209, 1485, 0),
(1226, 1485, 0),
(1377, 1465, 0),
(1425, 1507, 0),
(1425, 1508, 0),
(1290, 1477, 0),
(1372, 1515, 0),
(1436, 1515, 0),
(1411, 1515, 0),
(1379, 1506, 0),
(1418, 1508, 0),
(1416, 1519, 0),
(1379, 1519, 0),
(1407, 1460, 0),
(1169, 1212, 0),
(1240, 1460, 0),
(1266, 1496, 0),
(1159, 1496, 0),
(1230, 1460, 0),
(1407, 1514, 0),
(1407, 1502, 0),
(1266, 1467, 0),
(1272, 1467, 0),
(1263, 1467, 0),
(1290, 1487, 0),
(1405, 1462, 0),
(1371, 1503, 0),
(1353, 1495, 0),
(1286, 1495, 0),
(1351, 1496, 0),
(1374, 1524, 0),
(1426, 1478, 0),
(1374, 1476, 0),
(1457, 1503, 0),
(1381, 1503, 0),
(1429, 1503, 0),
(1450, 1503, 0),
(1396, 1503, 0),
(1402, 1503, 0),
(1416, 1527, 0),
(1379, 1527, 0),
(1501, 1599, 0),
(1118, 1469, 0),
(1111, 1469, 0),
(1416, 1501, 0),
(1334, 1463, 0),
(1426, 1524, 0),
(1374, 1478, 0),
(1418, 1507, 0),
(1272, 1481, 0),
(1232, 1481, 0),
(1118, 1474, 0),
(1016, 1474, 0),
(1171, 1478, 0),
(1398, 1478, 0),
(1449, 1478, 0),
(1164, 1478, 0),
(1266, 1497, 0),
(1232, 1501, 0),
(1418, 1472, 0),
(1292, 1472, 0),
(1302, 1472, 0),
(1127, 1212, 0),
(1175, 1212, 0),
(1020, 1212, 0),
(1197, 1212, 0),
(1342, 1518, 0),
(1287, 1518, 0),
(1310, 1518, 0),
(1313, 1518, 0),
(1210, 1518, 0),
(1433, 1518, 0),
(1392, 1506, 0),
(86, 259, 0),
(1302, 1491, 0),
(1356, 1471, 0),
(1028, 1474, 0),
(1395, 1514, 0),
(1267, 1494, 0),
(1320, 1494, 0),
(1014, 1546, 0),
(1154, 1549, 0),
(1154, 1546, 0),
(1154, 1579, 0),
(1510, 1555, 0),
(1496, 1550, 0),
(1475, 1564, 0),
(1475, 1540, 0),
(1475, 1592, 0),
(1518, 1592, 0),
(1489, 1554, 0),
(1489, 1553, 0),
(1518, 1540, 0),
(1442, 1572, 0),
(1442, 1558, 0),
(1508, 1596, 0),
(1375, 1592, 0),
(1508, 1555, 0),
(1375, 1540, 0),
(1468, 1539, 0),
(1468, 1555, 0),
(1468, 1547, 0),
(1468, 1544, 0),
(1494, 1564, 0),
(1431, 1558, 0),
(1431, 1572, 0),
(1223, 1549, 0),
(1223, 1546, 0),
(1388, 1603, 0),
(1388, 1586, 0),
(1388, 1559, 0),
(1388, 1533, 0),
(1388, 1582, 0),
(1387, 1592, 0),
(1387, 1540, 0),
(1392, 1552, 0),
(1416, 1552, 0),
(1389, 1582, 0),
(1389, 1559, 0),
(1389, 1586, 0),
(1408, 1552, 0),
(1212, 1549, 0),
(1212, 1546, 0),
(1405, 1582, 0),
(1405, 1579, 0),
(1433, 1572, 0),
(1424, 1572, 0),
(1406, 1559, 0),
(1406, 1586, 0),
(1406, 1582, 0),
(1527, 1544, 0),
(1471, 1544, 0),
(1507, 1544, 0),
(1266, 1550, 0),
(1266, 1549, 0),
(1266, 1546, 0),
(1515, 1544, 0),
(1382, 1550, 0),
(1382, 1582, 0),
(1382, 1563, 0),
(1382, 1586, 0),
(1420, 1558, 0),
(1420, 1592, 0),
(1420, 1540, 0),
(1148, 1550, 0),
(1148, 1546, 0),
(1148, 1549, 0),
(1412, 1579, 0),
(1384, 1579, 0),
(1515, 1559, 0),
(1372, 1559, 0),
(1436, 1559, 0),
(1453, 1559, 0),
(1348, 1565, 0),
(1416, 1563, 0),
(1343, 1563, 0),
(1385, 1563, 0),
(1379, 1563, 0),
(1357, 1565, 0),
(1338, 1565, 0),
(1355, 1565, 0),
(1356, 1565, 0),
(1230, 1549, 0),
(1229, 1549, 0),
(1240, 1549, 0),
(1014, 1549, 0),
(1076, 1549, 0),
(1351, 1545, 0),
(1240, 1546, 0),
(1230, 1546, 0),
(1076, 1546, 0),
(1229, 1546, 0),
(1272, 1605, 0),
(1489, 1561, 0),
(1329, 1535, 0),
(1329, 1551, 0),
(1329, 1541, 0),
(1470, 1540, 0),
(1429, 1540, 0),
(1374, 1540, 0),
(1398, 1540, 0),
(1465, 1540, 0),
(1426, 1540, 0),
(1351, 1550, 0),
(1424, 1558, 0),
(1433, 1558, 0),
(1398, 1592, 0),
(1416, 1562, 0),
(1503, 1564, 0),
(1506, 1564, 0),
(1472, 1564, 0),
(1505, 1564, 0),
(1472, 1542, 0),
(1459, 1542, 0),
(1495, 1542, 0),
(1476, 1542, 0),
(1290, 1534, 0),
(1477, 1534, 0),
(1477, 1554, 0),
(1495, 1554, 0),
(1476, 1554, 0),
(1473, 1554, 0),
(1487, 1554, 0),
(1473, 1591, 0),
(1522, 1554, 0),
(1407, 1582, 0),
(1385, 1582, 0),
(1453, 1582, 0),
(1436, 1582, 0),
(1416, 1582, 0),
(1451, 1582, 0),
(1480, 1582, 0),
(1372, 1582, 0),
(1411, 1582, 0),
(1379, 1582, 0),
(1391, 1582, 0),
(1487, 1609, 0),
(1390, 1609, 0),
(1467, 1609, 0),
(1392, 1609, 0),
(1290, 1536, 0),
(1472, 1554, 0),
(1495, 1561, 0),
(1522, 1561, 0),
(1341, 1614, 0),
(1476, 1561, 0),
(1467, 1561, 0),
(1487, 1561, 0),
(1514, 1561, 0),
(1477, 1561, 0),
(1481, 1561, 0),
(1441, 1572, 0),
(1417, 1572, 0),
(1417, 1558, 0),
(1417, 1596, 0),
(1441, 1558, 0),
(1472, 1533, 0),
(1495, 1533, 0),
(1340, 1551, 0),
(1341, 1548, 0),
(1502, 1548, 0),
(1357, 1548, 0),
(1477, 1581, 0),
(1430, 1596, 0),
(1517, 1555, 0),
(1471, 1547, 0),
(1515, 1547, 0),
(1491, 1533, 0),
(1491, 1599, 0),
(1491, 1597, 0),
(1522, 1599, 0),
(1459, 1599, 0),
(1481, 1599, 0),
(1484, 1599, 0),
(1485, 1599, 0),
(1474, 1599, 0),
(1159, 1550, 0),
(1429, 1592, 0),
(1505, 1542, 0),
(1527, 1555, 0),
(1527, 1539, 0),
(1361, 1551, 0),
(1334, 1551, 0),
(1351, 1551, 0),
(1478, 1597, 0),
(1465, 1592, 0),
(1470, 1592, 0),
(1426, 1592, 0),
(1374, 1592, 0),
(1407, 1586, 0),
(1407, 1603, 0),
(1407, 1535, 0),
(1407, 1570, 0),
(1453, 1603, 0),
(1272, 1535, 0),
(1334, 1541, 0),
(1334, 1535, 0),
(1334, 1570, 0),
(1361, 1535, 0),
(1081, 1546, 0),
(1497, 1553, 0),
(1496, 1553, 0),
(1514, 1553, 0),
(1498, 1553, 0),
(1474, 1553, 0),
(1510, 1553, 0),
(1463, 1553, 0),
(1519, 1618, 0),
(1519, 1539, 0),
(1519, 1588, 0),
(1519, 1555, 0),
(1513, 1618, 0),
(1469, 1539, 0),
(1480, 1567, 0),
(1513, 1588, 0),
(1490, 1567, 0),
(1420, 1572, 0),
(1496, 1567, 0),
(1469, 1555, 0),
(1469, 1588, 0),
(1469, 1618, 0),
(1460, 1555, 0),
(1460, 1539, 0),
(1460, 1588, 0),
(1460, 1618, 0),
(1510, 1539, 0),
(1517, 1539, 0),
(1515, 1539, 0),
(1507, 1539, 0),
(1496, 1539, 0),
(1514, 1539, 0),
(1513, 1539, 0),
(1471, 1539, 0),
(1493, 1539, 0),
(1392, 1532, 0),
(1493, 1555, 0),
(1493, 1588, 0),
(1493, 1618, 0),
(1440, 1506, 0),
(1404, 1596, 0),
(1422, 1596, 0),
(1409, 1596, 0),
(1425, 1596, 0),
(1507, 1596, 0),
(1343, 1551, 0),
(1385, 1586, 0),
(1515, 1555, 0),
(1081, 1549, 0),
(1510, 1618, 0),
(1510, 1588, 0),
(1503, 1599, 0),
(1377, 1600, 0),
(1368, 1600, 0),
(1421, 1600, 0),
(1472, 1600, 0),
(1384, 1600, 0),
(1517, 1547, 0),
(1513, 1555, 0),
(1496, 1555, 0),
(1514, 1555, 0),
(1471, 1555, 0),
(1507, 1555, 0),
(1480, 1599, 0),
(1514, 1603, 0),
(1485, 1597, 0),
(1501, 1597, 0),
(1484, 1597, 0),
(1290, 1557, 0),
(1480, 1685, 0),
(1451, 1557, 0),
(1522, 1557, 0),
(1508, 1544, 0),
(1502, 1597, 0),
(1527, 1599, 0),
(1343, 1586, 0),
(1118, 1549, 0),
(1016, 1549, 0),
(1158, 1549, 0),
(1118, 1546, 0),
(1158, 1546, 0),
(1016, 1546, 0),
(1459, 1533, 0),
(1225, 1549, 0),
(1028, 1236, 0),
(1359, 1551, 0),
(1506, 1599, 0),
(1416, 1586, 0),
(1398, 1476, 0),
(1419, 1560, 0),
(1411, 1559, 0),
(1014, 1154, 0),
(1475, 1638, 0),
(1148, 1673, 0),
(1536, 1691, 0),
(1159, 1673, 0),
(1565, 1665, 0),
(1565, 1692, 0),
(1565, 1682, 0),
(1564, 1669, 0),
(1398, 1634, 0),
(1564, 1647, 0),
(1564, 1691, 0),
(1398, 1647, 0),
(1420, 1638, 0),
(1389, 1680, 0),
(1389, 1655, 0),
(1389, 1639, 0),
(1508, 1633, 0),
(1508, 1630, 0),
(1508, 1689, 0),
(1508, 1702, 0),
(1508, 1656, 0),
(1508, 1627, 0),
(1552, 1650, 0),
(1552, 1683, 0),
(1375, 1631, 0),
(1382, 1644, 0),
(1375, 1647, 0),
(1375, 1638, 0),
(1518, 1638, 0),
(1518, 1647, 0),
(1548, 1669, 0),
(1558, 1665, 0),
(1426, 1624, 0),
(1426, 1638, 0),
(1426, 1631, 0),
(1596, 1633, 0),
(1422, 1633, 0),
(1507, 1633, 0),
(1409, 1633, 0),
(1404, 1633, 0),
(1417, 1633, 0),
(1440, 1633, 0),
(1430, 1633, 0),
(1441, 1633, 0),
(1425, 1633, 0),
(1572, 1691, 0),
(1491, 1668, 0),
(1614, 1650, 0),
(1591, 1691, 0),
(1591, 1682, 0),
(1591, 1629, 0),
(1591, 1665, 0),
(1459, 1668, 0),
(1266, 1673, 0),
(1382, 1680, 0),
(1382, 1655, 0),
(1382, 1639, 0),
(1529, 1669, 0),
(1554, 1669, 0),
(1494, 1669, 0),
(1470, 1638, 0),
(1465, 1638, 0),
(1603, 1626, 0),
(1579, 1626, 0),
(1406, 1639, 0),
(1407, 1639, 0),
(1411, 1639, 0),
(1497, 1639, 0),
(1416, 1639, 0),
(1385, 1639, 0),
(1562, 1626, 0),
(1436, 1639, 0),
(1605, 1626, 0),
(1550, 1626, 0),
(1372, 1639, 0),
(1563, 1626, 0),
(1559, 1626, 0),
(1570, 1626, 0),
(1542, 1626, 0),
(1453, 1639, 0),
(1555, 1626, 0),
(1379, 1639, 0),
(1567, 1626, 0),
(1597, 1626, 0),
(1592, 1626, 0),
(1549, 1626, 0),
(1551, 1626, 0),
(1546, 1626, 0),
(1535, 1626, 0),
(1586, 1626, 0),
(1582, 1626, 0),
(1541, 1626, 0),
(1547, 1626, 0),
(1451, 1639, 0),
(1553, 1626, 0),
(1547, 1703, 0),
(1405, 1639, 0),
(1391, 1639, 0),
(1480, 1639, 0),
(1582, 1639, 0),
(1388, 1639, 0),
(1535, 1619, 0),
(1582, 1619, 0),
(1570, 1619, 0),
(1605, 1619, 0),
(1468, 1656, 0),
(1406, 1656, 0),
(1497, 1656, 0),
(1517, 1656, 0),
(1477, 1656, 0),
(1496, 1656, 0),
(1588, 1652, 0),
(1532, 1652, 0),
(1596, 1652, 0),
(1534, 1652, 0),
(1540, 1652, 0),
(1554, 1629, 0),
(1554, 1691, 0),
(1544, 1652, 0),
(1436, 1677, 0),
(1406, 1677, 0),
(1497, 1677, 0),
(1379, 1677, 0),
(1411, 1677, 0),
(1497, 1635, 0),
(1498, 1635, 0),
(1489, 1660, 0),
(1586, 1660, 0),
(1407, 1645, 0),
(1582, 1645, 0),
(1480, 1645, 0),
(1514, 1645, 0),
(1570, 1645, 0),
(1535, 1645, 0),
(1586, 1645, 0),
(1510, 1630, 0),
(1515, 1630, 0),
(1550, 1683, 0),
(1514, 1630, 0),
(1550, 1623, 0),
(1496, 1630, 0),
(1493, 1630, 0),
(1468, 1630, 0),
(1519, 1630, 0),
(1527, 1630, 0),
(1542, 1641, 0),
(1469, 1630, 0),
(1460, 1630, 0),
(1555, 1630, 0),
(1471, 1630, 0),
(1407, 1662, 0),
(1570, 1662, 0),
(1334, 1662, 0),
(1476, 1627, 0),
(1495, 1627, 0),
(1562, 1627, 0),
(1470, 1627, 0),
(1336, 1620, 0),
(1541, 1646, 0),
(1477, 1625, 0),
(1489, 1625, 0),
(1473, 1625, 0),
(1476, 1625, 0),
(1495, 1625, 0),
(1597, 1683, 0),
(1537, 1692, 0),
(1582, 1683, 0),
(1614, 1683, 0),
(1570, 1683, 0),
(1547, 1683, 0),
(1549, 1683, 0),
(1562, 1683, 0),
(1541, 1683, 0),
(1553, 1683, 0),
(1605, 1683, 0),
(1567, 1683, 0),
(1596, 1683, 0),
(1599, 1665, 0),
(1570, 1622, 0),
(1546, 1641, 0),
(1563, 1641, 0),
(1562, 1623, 0),
(1549, 1623, 0),
(1605, 1623, 0),
(1570, 1623, 0),
(1582, 1623, 0),
(1602, 1665, 0),
(1537, 1665, 0),
(1600, 1665, 0),
(1545, 1665, 0),
(1614, 1665, 0),
(1540, 1631, 0),
(1537, 1682, 0),
(1503, 1682, 0),
(1506, 1682, 0),
(1527, 1682, 0),
(1408, 1661, 0),
(1532, 1701, 0),
(1468, 1632, 0),
(1517, 1632, 0),
(1515, 1632, 0),
(1547, 1632, 0),
(1471, 1632, 0),
(1497, 1654, 0),
(1496, 1654, 0),
(1463, 1654, 0),
(1474, 1654, 0),
(1553, 1654, 0),
(1514, 1654, 0),
(1489, 1654, 0),
(1505, 1686, 0),
(1503, 1686, 0),
(1468, 1702, 0),
(1514, 1702, 0),
(1522, 1651, 0),
(1478, 1668, 0),
(1481, 1668, 0),
(1484, 1668, 0),
(1618, 1668, 0),
(1485, 1668, 0),
(1559, 1668, 0),
(1501, 1668, 0),
(1502, 1668, 0),
(1290, 1666, 0),
(1522, 1666, 0),
(1451, 1666, 0),
(1592, 1670, 0),
(1592, 1641, 0),
(1592, 1631, 0),
(1473, 1629, 0),
(1387, 1647, 0),
(1429, 1647, 0),
(1374, 1647, 0),
(1551, 1670, 0),
(1597, 1670, 0),
(1563, 1670, 0),
(1581, 1691, 0),
(1579, 1670, 0),
(1436, 1671, 0),
(1471, 1671, 0),
(1385, 1671, 0),
(1391, 1671, 0),
(1463, 1671, 0),
(1533, 1671, 0),
(1407, 1655, 0),
(1343, 1655, 0),
(1547, 1667, 0),
(1618, 1670, 0),
(1546, 1670, 0),
(1605, 1670, 0),
(1559, 1670, 0),
(1541, 1670, 0),
(1522, 1640, 0),
(1471, 1695, 0),
(1471, 1689, 0),
(1476, 1695, 0),
(1493, 1695, 0),
(1515, 1695, 0),
(1489, 1695, 0),
(1513, 1695, 0),
(1154, 1693, 0),
(1477, 1672, 0),
(1477, 1689, 0),
(1529, 1676, 0),
(1529, 1691, 0),
(1487, 1661, 0),
(1487, 1629, 0),
(1541, 1641, 0),
(1533, 1678, 0),
(1351, 1673, 0),
(1510, 1687, 0),
(1510, 1689, 0),
(1463, 1678, 0),
(1382, 1673, 0),
(1496, 1673, 0),
(1550, 1673, 0),
(1495, 1629, 0),
(1561, 1629, 0),
(1467, 1629, 0),
(1522, 1629, 0),
(1517, 1689, 0),
(1517, 1630, 0),
(1169, 1620, 0),
(1374, 1620, 0),
(1303, 1620, 0),
(1551, 1641, 0),
(1602, 1691, 0),
(1476, 1689, 0),
(1407, 1680, 0),
(1416, 1680, 0),
(1343, 1680, 0),
(1385, 1680, 0),
(1527, 1686, 0),
(1472, 1686, 0),
(1478, 1634, 0),
(1452, 1634, 0),
(1422, 1693, 0),
(1405, 1693, 0),
(1384, 1693, 0),
(1412, 1693, 0),
(1544, 1676, 0),
(1535, 1641, 0),
(1460, 1689, 0),
(1515, 1689, 0),
(1519, 1689, 0),
(1527, 1689, 0),
(1507, 1689, 0),
(1514, 1689, 0),
(1489, 1689, 0),
(1513, 1689, 0),
(1555, 1641, 0),
(1493, 1689, 0),
(1472, 1684, 0),
(1503, 1684, 0),
(1506, 1684, 0),
(1505, 1684, 0),
(1468, 1689, 0),
(1560, 1664, 0),
(1560, 1676, 0),
(1588, 1676, 0),
(1496, 1685, 0),
(1496, 1689, 0),
(1390, 1674, 0),
(1467, 1674, 0),
(1467, 1661, 0),
(1392, 1661, 0),
(1390, 1661, 0),
(1385, 1687, 0),
(1513, 1630, 0),
(1507, 1630, 0),
(1469, 1687, 0),
(1603, 1670, 0),
(1603, 1641, 0),
(1586, 1670, 0),
(1388, 1680, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
