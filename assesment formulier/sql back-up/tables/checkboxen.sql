-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 mrt 2022 om 13:27
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assesment_formulieren`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `checkboxen`
--

CREATE TABLE `checkboxen` (
  `id` int(11) NOT NULL,
  `actief` tinyint(1) NOT NULL,
  `value` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `checkboxen`
--

INSERT INTO `checkboxen` (`id`, `actief`, `value`, `name`, `type`, `label`) VALUES
(3, 1, '', 'startportfolio_name', 'checkbox', 'checkbox<br>\r\n(Het startportfolio dient als kapstok waar de opgedane kennis en ervaring zichtbaar wo'),
(4, 1, '', 'challenge_1_name', 'checkbox', 'Challenge 1 (interactief zelfpotret)'),
(5, 1, '', 'onderzoek_name', 'checkbox', 'Onderzoek naar vakgebied (omgeving, netwerk, vak)'),
(6, 1, '', 'loopbaan_name', 'checkbox', 'Loopbaan reflectie 1'),
(7, 1, '', 'kennis_name', 'checkbox', 'Kennismakingsopdrachten (poster van jezelf, website van de werkgroep, netwerkopdracht )\r\n'),
(8, 1, '', 'tools_name', 'checkbox', 'Tools (Illustrator, Photoshop)'),
(9, 1, '', 'vormgeven_name', 'checkbox', 'vormgeven'),
(10, 1, '', 'webtechnieken', 'checkbox', 'Webtechnieken'),
(11, 1, '', 'review_name', 'checkbox', 'Reviews van de desbetreffende docenten   ');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `checkboxen`
--
ALTER TABLE `checkboxen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `checkboxen`
--
ALTER TABLE `checkboxen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
