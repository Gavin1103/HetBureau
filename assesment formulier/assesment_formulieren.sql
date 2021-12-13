-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 dec 2021 om 22:05
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.12

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
-- Tabelstructuur voor tabel `assesment_form1`
--

CREATE TABLE `assesment_form1` (
  `id` int(11) NOT NULL,
  `fase1` varchar(50) NOT NULL,
  `intro_tekst` varchar(200) NOT NULL,
  `checklist` varchar(50) NOT NULL,
  `student` varchar(20) NOT NULL,
  `leerling_nummer` varchar(20) NOT NULL,
  `coach` varchar(20) NOT NULL,
  `datum` datetime NOT NULL,
  `checkboxen_id` int(11) NOT NULL,
  `Review_fase_1` varchar(50) NOT NULL,
  `review_fase_1_tekst` varchar(200) NOT NULL,
  `Vormgeven_beoordeling` varchar(50) NOT NULL,
  `techniek_beoordeling` varchar(50) NOT NULL,
  `ondernemend_beoordeling` varchar(50) NOT NULL,
  `softskills_beoordeling` varchar(50) NOT NULL,
  `AVO_beoordeling` varchar(50) NOT NULL,
  `evt_kwaliteiten` varchar(300) NOT NULL,
  `terug_koppelingsfase_1` varchar(50) NOT NULL,
  `deel_c_tekst_1` varchar(300) NOT NULL,
  `deel_c_tekst_2` varchar(300) NOT NULL,
  `deel_c_tekst_3` varchar(300) NOT NULL,
  `Doorgroei_advies` varchar(50) NOT NULL,
  `handtekening_assessor` varchar(20) NOT NULL,
  `handtekening_student` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `assesment_form1`
--

INSERT INTO `assesment_form1` (`id`, `fase1`, `intro_tekst`, `checklist`, `student`, `leerling_nummer`, `coach`, `datum`, `checkboxen_id`, `Review_fase_1`, `review_fase_1_tekst`, `Vormgeven_beoordeling`, `techniek_beoordeling`, `ondernemend_beoordeling`, `softskills_beoordeling`, `AVO_beoordeling`, `evt_kwaliteiten`, `terug_koppelingsfase_1`, `deel_c_tekst_1`, `deel_c_tekst_2`, `deel_c_tekst_3`, `Doorgroei_advies`, `handtekening_assessor`, `handtekening_student`) VALUES
(1, 'Afsluiting Fase 1', 'Dit formulier gaat je helpen om te komen tot een assessment voor fase 1. Als je deel A samen met je coach \r\nhebt doorlopen laat je op deel B de vakdocenten hun feedback invullen. Pas als beide delen c', '1', 'student:', 'Leerling nummer:', 'coach', '2021-11-30 11:16:24', 1, 'Review Fase 1', 'Maak op school of tijdens de les een afspraak met de desbetrefende docent en laat hem de \r\nbeoordeling en feedback invullen. Bespreek deze zodat je ook begrijpt hoe de feedback tot stand \r\nis gekomen.', 'vormgeven:', 'techniek:', 'ondernemend:', 'softskills:', 'AVO:', 'evt. kwaliteiten', 'Terug Koppling Fase 1', 'je hebt jezelf voorgesteld en het is duidelijk wat je ambities zijn', 'Je hebt inzicht in de medestudenten, docenten, opleiding en vakgebied.\r\n', 'Je hebt laten zien welke skills je kan toepassen en beheerst.\r\n', 'Doorgroei advies', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `assesment_form2`
--

CREATE TABLE `assesment_form2` (
  `titel_AF2` varchar(50) NOT NULL,
  `tekst_intro` varchar(500) NOT NULL,
  `titel_checklist` varchar(25) NOT NULL,
  `veld1` varchar(20) NOT NULL,
  `veld2` varchar(20) NOT NULL,
  `veld3` varchar(20) NOT NULL,
  `checkboxen` int(11) NOT NULL,
  `titelRF2` varchar(50) NOT NULL,
  `tekst_uitleg` varchar(400) NOT NULL,
  `vormgeven_beoordeling` varchar(25) NOT NULL,
  `techniek_beoordeling` varchar(25) NOT NULL,
  `tools_beoordeling` varchar(25) NOT NULL,
  `softskills_beoordeling` varchar(25) NOT NULL,
  `AVO_beoordeling` varchar(25) NOT NULL,
  `bijzondere_kwaliteiten` varchar(25) NOT NULL,
  `titel_TF2` varchar(25) NOT NULL,
  `tekst1` varchar(50) NOT NULL,
  `tekst2` varchar(50) NOT NULL,
  `tekst3` varchar(50) NOT NULL,
  `titel_doorgroeiAdvies` varchar(50) NOT NULL,
  `handtekening_assesor` int(11) NOT NULL,
  `handtekening_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `assesment_form2`
--

INSERT INTO `assesment_form2` (`titel_AF2`, `tekst_intro`, `titel_checklist`, `veld1`, `veld2`, `veld3`, `checkboxen`, `titelRF2`, `tekst_uitleg`, `vormgeven_beoordeling`, `techniek_beoordeling`, `tools_beoordeling`, `softskills_beoordeling`, `AVO_beoordeling`, `bijzondere_kwaliteiten`, `titel_TF2`, `tekst1`, `tekst2`, `tekst3`, `titel_doorgroeiAdvies`, `handtekening_assesor`, `handtekening_student`) VALUES
('Afsluiting Fase 2', 'Dit formulier gaat je helpen om te komen tot een assessment voor fase 1. Als je deel A samen met je coach \r\nhebt doorlopen laat je op deel B de vakdocenten hun feedback invullen. Pas als beide delen compleet zijn\r\nkun je bij je coach het assessment indienen. Deze zal je voordragen en een terug koppeling geven als het\r\nassessment is bekeken en beoordeeld', 'Checklist', 'Student', 'Coach', 'Datum', 2, 'Review Fase 2', 'In te vullen door de vakdocent: <br>Maak een afspraak met de desbetrefende docent en laat hem de beoordeling en feedback invullen. \r\nBespreek deze zodat je ook begrijpt hoe de feedback tot stand is gekomen.', 'Vormgeven', 'Techniek', 'Tools', 'Softskills', 'AVO', 'Bijzondere kwaliteiten', 'Terug koppeling fase 2', 'Je hebt een beeld van het profiel webdesigner.', 'Je weet waar je staat t.o.v. het beeld van een web', 'Je bent op het niveau van een beginnend webdesigne', 'Doorgroei advies', 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `assesment_form4`
--

CREATE TABLE `assesment_form4` (
  `titel_AF4` varchar(50) NOT NULL,
  `tekst_intro` varchar(400) NOT NULL,
  `titel_checklist` varchar(30) NOT NULL,
  `student_input` varchar(30) NOT NULL,
  `coach_input` varchar(30) NOT NULL,
  `datum_input` varchar(30) NOT NULL,
  `checkboxen` int(11) NOT NULL,
  `titel_RF4` varchar(50) NOT NULL,
  `tekst_intro_deel_B` varchar(400) NOT NULL,
  `vormgeven_beoordeling` varchar(30) NOT NULL,
  `techniek_beoordeling` varchar(30) NOT NULL,
  `ondernemen_beoordeling` varchar(30) NOT NULL,
  `softskills_beoordeling` varchar(30) NOT NULL,
  `AVO_beoordeling` varchar(30) NOT NULL,
  `evt_kwaliteiten` varchar(30) NOT NULL,
  `TF3` varchar(50) NOT NULL,
  `input_tekst_1_deel_c` varchar(100) NOT NULL,
  `input_tekst_2_deel_c` varchar(100) NOT NULL,
  `input_tekst_3_deel_c` varchar(100) NOT NULL,
  `input_tekst_4_deel_c` varchar(100) NOT NULL,
  `titel_doorgroei_advies` varchar(50) NOT NULL,
  `handtekening_assesor` int(11) NOT NULL,
  `handtekening_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `assesment_form4`
--

INSERT INTO `assesment_form4` (`titel_AF4`, `tekst_intro`, `titel_checklist`, `student_input`, `coach_input`, `datum_input`, `checkboxen`, `titel_RF4`, `tekst_intro_deel_B`, `vormgeven_beoordeling`, `techniek_beoordeling`, `ondernemen_beoordeling`, `softskills_beoordeling`, `AVO_beoordeling`, `evt_kwaliteiten`, `TF3`, `input_tekst_1_deel_c`, `input_tekst_2_deel_c`, `input_tekst_3_deel_c`, `input_tekst_4_deel_c`, `titel_doorgroei_advies`, `handtekening_assesor`, `handtekening_student`) VALUES
('Afsluiting Fase 4', '', 'Checklist', 'Student', 'Coach', 'Datum', 0, 'Review Fase 4', '', 'Vormgeven', 'Techniek', 'Ondernemen', 'Softskills', 'AVO', 'Evt. bijzondere kwaliteiten', 'Terug koppelings fase 3', '', '', '', '', 'Doorgroei advies', 0, 0);

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

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `assesment_form1`
--
ALTER TABLE `assesment_form1`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `assesment_form2`
--
ALTER TABLE `assesment_form2`
  ADD UNIQUE KEY `titel_checklist` (`titel_AF2`);

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
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `assesment_form1`
--
ALTER TABLE `assesment_form1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
