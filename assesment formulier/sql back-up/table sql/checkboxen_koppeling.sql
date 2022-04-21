-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 mrt 2022 om 13:28
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
-- Tabelstructuur voor tabel `checkboxen_koppeling`
--

CREATE TABLE `checkboxen_koppeling` (
  `id` int(11) NOT NULL,
  `formulier_id` int(11) NOT NULL,
  `checkboxen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `checkboxen_koppeling`
--

INSERT INTO `checkboxen_koppeling` (`id`, `formulier_id`, `checkboxen_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `checkboxen_koppeling`
--
ALTER TABLE `checkboxen_koppeling`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `checkboxen_koppeling`
--
ALTER TABLE `checkboxen_koppeling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
