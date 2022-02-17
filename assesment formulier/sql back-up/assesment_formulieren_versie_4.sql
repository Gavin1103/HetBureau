-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 17 feb 2022 om 15:10
-- Serverversie: 10.5.12-MariaDB-0+deb11u1
-- PHP-versie: 8.0.15

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
-- Tabelstructuur voor tabel `admin_docent`
--

CREATE TABLE `admin_docent` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `functie` varchar(255) NOT NULL,
  `afkorting` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `admin_docent`
--

INSERT INTO `admin_docent` (`id`, `naam`, `achternaam`, `email`, `wachtwoord`, `functie`, `afkorting`) VALUES
(1, 'gavin', 'Tjin', '', '', 'admin', ''),
(2, 'admin', 'admin', 'admin@admin.nl', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `checkboxen`
--

CREATE TABLE `checkboxen` (
  `id` int(11) NOT NULL,
  `naam_vak` varchar(50) NOT NULL,
  `actief` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `checkboxen`
--

INSERT INTO `checkboxen` (`id`, `naam_vak`, `actief`) VALUES
(1, 'startportfolio', 0),
(2, 'challenge 1', 0);

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

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `form_questions`
--

CREATE TABLE `form_questions` (
  `id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL COMMENT 'de id van de vorm',
  `auteur` varchar(255) NOT NULL COMMENT 'wie heeft het gemaakt',
  `vraagen` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT 'de vragen in json formaat' CHECK (json_valid(`vraagen`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `form_questions`
--

INSERT INTO `form_questions` (`id`, `form_id`, `auteur`, `vraagen`) VALUES
(3, 3, '3', '[\r\n    {\r\n        \"vraag\": \"kaas of boter?\",\r\n        \"antwoorden\":[\r\n            {\r\n                \"label\": \"form3\"\r\n            }\r\n           \r\n        ]\r\n    }\r\n]'),
(4, 1, '1', '[\r\n    {\r\n        \"vraag\": \"kaas of boter?\",\r\n        \"antwoorden\":[\r\n            {\r\n                \"type\": \"radio\",\r\n                \"label\": \"form1\"\r\n            }\r\n           \r\n        ]\r\n    }\r\n]'),
(5, 2, '2', '[\r\n    {\r\n        \"vraag\": \"kaas of boter?\",\r\n        \"antwoorden\":[\r\n            {\r\n                \"type\": \"radio\",\r\n                \"label\": \"form2\"\r\n            }\r\n           \r\n        ]\r\n    }\r\n]'),
(6, 4, '4', '[\r\n    {\r\n        \"vraag\": \"kaas of boter?\",\r\n        \"antwoorden\":[\r\n            {\r\n                \"type\": \"radio\",\r\n                \"label\": \"form4\"\r\n            }\r\n           \r\n        ]\r\n    }\r\n]');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klassen`
--

CREATE TABLE `klassen` (
  `id` int(11) NOT NULL,
  `klas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `klassen`
--

INSERT INTO `klassen` (`id`, `klas`) VALUES
(1, '1WDS1'),
(2, '1WDS2'),
(3, '2WDS1'),
(4, '2WDS2'),
(5, '3WDS1'),
(6, '3WDS2');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `studenten`
--

CREATE TABLE `studenten` (
  `id` int(11) NOT NULL,
  `leerlingnummer` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `klas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `studenten`
--

INSERT INTO `studenten` (`id`, `leerlingnummer`, `naam`, `achternaam`, `wachtwoord`, `email`, `klas`) VALUES
(30, 533187, 'Gavin', 'Tjin', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', '533187@student.glu.nl', '2wdv2'),
(31, 1234, 'test', 'test', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 'test@test.nl', '1test1'),
(32, 200532, 'constantijn', 'van hartesveldt', 'c910926c650a1f2afc23277e7cf38354034c318954b78ac675e8442543518d22', '200532@student.glu.nl', '2wdv1'),
(33, 1, 'e', 'e', '3f79bb7b435b05321651daefd374cdc681dc06faa65e374e38337b88ca046dea', 'd', 'e');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `admin_docent`
--
ALTER TABLE `admin_docent`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `checkboxen`
--
ALTER TABLE `checkboxen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `checkboxen_koppeling`
--
ALTER TABLE `checkboxen_koppeling`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `form_questions`
--
ALTER TABLE `form_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `klassen`
--
ALTER TABLE `klassen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `studenten`
--
ALTER TABLE `studenten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `admin_docent`
--
ALTER TABLE `admin_docent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `checkboxen`
--
ALTER TABLE `checkboxen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `checkboxen_koppeling`
--
ALTER TABLE `checkboxen_koppeling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `form_questions`
--
ALTER TABLE `form_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `klassen`
--
ALTER TABLE `klassen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `studenten`
--
ALTER TABLE `studenten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
