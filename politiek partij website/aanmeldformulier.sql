-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 nov 2022 om 19:10
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aanmeldformulier`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aanmeldformulier_inhoud`
--

CREATE TABLE `aanmeldformulier_inhoud` (
  `naam` varchar(50) NOT NULL,
  `geslacht` varchar(10) NOT NULL,
  `opleiding` varchar(50) NOT NULL,
  `werk` varchar(50) NOT NULL,
  `straat` varchar(50) NOT NULL,
  `rekeningnummer` int(50) NOT NULL,
  `aanmelden_voor_nieuwsbrief` varchar(10) NOT NULL,
  `adres` varchar(50) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `woonplaats` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
