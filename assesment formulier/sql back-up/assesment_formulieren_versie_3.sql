-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 jan 2022 om 16:14
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
(1, 'gavin', 'Tjin', '', '', 'admin', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `assesment_form1`
--

CREATE TABLE `assesment_form1` (
  `id` int(11) NOT NULL,
  `AF1` varchar(50) NOT NULL,
  `tekst_intro` varchar(200) NOT NULL,
  `checklist_titel` varchar(50) NOT NULL,
  `veld_student` varchar(20) NOT NULL,
  `veld_leerlingnummer` varchar(20) NOT NULL,
  `veld_coach` varchar(20) NOT NULL,
  `datum` datetime NOT NULL,
  `checkboxen_id` int(11) NOT NULL,
  `review_fase_1` varchar(50) NOT NULL,
  `titel_docent_invullen` varchar(100) NOT NULL,
  `review_fase_1_tekst` varchar(200) NOT NULL,
  `vormgeven_beoordeling` varchar(50) NOT NULL,
  `techniek_beoordeling` varchar(50) NOT NULL,
  `ondernemend_beoordeling` varchar(50) NOT NULL,
  `softskills_beoordeling` varchar(50) NOT NULL,
  `avo_beoordeling` varchar(50) NOT NULL,
  `bijzondere_kwaliteiten` varchar(300) NOT NULL,
  `terug_koppelingsfase_1` varchar(50) NOT NULL,
  `deel_c_tekst_1` varchar(300) NOT NULL,
  `deel_c_tekst_2` varchar(300) NOT NULL,
  `deel_c_tekst_3` varchar(300) NOT NULL,
  `doorgroei_advies` varchar(50) NOT NULL,
  `handtekening_assessor` varchar(20) NOT NULL,
  `handtekening_student` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `assesment_form1`
--

INSERT INTO `assesment_form1` (`id`, `AF1`, `tekst_intro`, `checklist_titel`, `veld_student`, `veld_leerlingnummer`, `veld_coach`, `datum`, `checkboxen_id`, `review_fase_1`, `titel_docent_invullen`, `review_fase_1_tekst`, `vormgeven_beoordeling`, `techniek_beoordeling`, `ondernemend_beoordeling`, `softskills_beoordeling`, `avo_beoordeling`, `bijzondere_kwaliteiten`, `terug_koppelingsfase_1`, `deel_c_tekst_1`, `deel_c_tekst_2`, `deel_c_tekst_3`, `doorgroei_advies`, `handtekening_assessor`, `handtekening_student`) VALUES
(1, 'Afsluiting Fase 1', 'Dit formulier gaat je helpen om te komen tot een assessment voor fase 1. Als je deel A samen met je coach \r\nhebt doorlopen laat je op deel B de vakdocenten hun feedback invullen. Pas als beide delen c', 'checklist', 'student:', 'Leerling nummer:', 'coach', '2021-11-30 11:16:24', 1, 'Review Fase 1', 'In te vullen door docent:', 'Maak op school of tijdens de les een afspraak met de desbetrefende docent en laat hem de \r\nbeoordeling en feedback invullen. Bespreek deze zodat je ook begrijpt hoe de feedback tot stand \r\nis gekomen.', 'vormgeven:', 'techniek:', 'ondernemend:', 'softskills:', 'AVO:', 'evt. kwaliteiten', 'Terug Koppling Fase 1', 'je hebt jezelf voorgesteld en het is duidelijk wat je ambities zijn', 'Je hebt inzicht in de medestudenten, docenten, opleiding en vakgebied.\r\n', 'Je hebt laten zien welke skills je kan toepassen en beheerst.\r\n', 'Doorgroei advies', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `assesment_form2`
--

CREATE TABLE `assesment_form2` (
  `id` int(11) NOT NULL,
  `AF2` varchar(50) NOT NULL,
  `tekst_intro` varchar(500) NOT NULL,
  `checklist_titel` varchar(25) NOT NULL,
  `veld_student` varchar(20) NOT NULL,
  `veld_leerlingnummer` varchar(20) NOT NULL,
  `veld_coach` varchar(20) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `checkboxen_id` int(11) NOT NULL,
  `review_fase_2` varchar(50) NOT NULL,
  `titel_docent_invullen` int(11) NOT NULL,
  `review_fase_2_tekst` varchar(400) NOT NULL,
  `vormgeven_beoordeling` varchar(25) NOT NULL,
  `techniek_beoordeling` varchar(25) NOT NULL,
  `tools_beoordeling` varchar(25) NOT NULL,
  `softskills_beoordeling` varchar(25) NOT NULL,
  `avo_beoordeling` varchar(25) NOT NULL,
  `bijzondere_kwaliteiten` varchar(25) NOT NULL,
  `terug_kopppelingsfase_2` varchar(25) NOT NULL,
  `deel_c_tekst_1` varchar(50) NOT NULL,
  `deel_c_tekst_2` varchar(50) NOT NULL,
  `deel_c_tekst_3` varchar(50) NOT NULL,
  `doorgroei_advies` varchar(50) NOT NULL,
  `handtekening_assesor` int(11) NOT NULL,
  `handtekening_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `assesment_form2`
--

INSERT INTO `assesment_form2` (`id`, `AF2`, `tekst_intro`, `checklist_titel`, `veld_student`, `veld_leerlingnummer`, `veld_coach`, `datum`, `checkboxen_id`, `review_fase_2`, `titel_docent_invullen`, `review_fase_2_tekst`, `vormgeven_beoordeling`, `techniek_beoordeling`, `tools_beoordeling`, `softskills_beoordeling`, `avo_beoordeling`, `bijzondere_kwaliteiten`, `terug_kopppelingsfase_2`, `deel_c_tekst_1`, `deel_c_tekst_2`, `deel_c_tekst_3`, `doorgroei_advies`, `handtekening_assesor`, `handtekening_student`) VALUES
(1, 'Afsluiting Fase 2', 'Dit formulier gaat je helpen om te komen tot een assessment voor fase 1. Als je deel A samen met je coach \r\nhebt doorlopen laat je op deel B de vakdocenten hun feedback invullen. Pas als beide delen compleet zijn\r\nkun je bij je coach het assessment indienen. Deze zal je voordragen en een terug koppeling geven als het\r\nassessment is bekeken en beoordeeld', 'Checklist', 'Student', 'Coach', 'Datum', '2022-01-12 10:48:40', 2, 'Review Fase 2', 0, 'Maak een afspraak met de desbetreffende docent en laat hem de beoordeling en feedback invullen. \r\nBespreek deze zodat je ook begrijpt hoe de feedback tot stand is gekomen.', 'Vormgeven', 'Techniek', 'Tools', 'Softskills', 'AVO', 'Bijzondere kwaliteiten', 'Terug koppeling fase 2', 'Je hebt een beeld van het profiel webdesigner.', 'Je weet waar je staat t.o.v. het beeld van een web', 'Je bent op het niveau van een beginnend webdesigne', 'Doorgroei advies', 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `assesment_form4`
--

CREATE TABLE `assesment_form4` (
  `id` int(11) NOT NULL,
  `AF4` varchar(50) NOT NULL,
  `tekst_intro` varchar(400) NOT NULL,
  `checklist_titel` varchar(30) NOT NULL,
  `veld_student` varchar(30) NOT NULL,
  `veld_leerlingnummer` int(11) NOT NULL,
  `veld_coach` varchar(30) NOT NULL,
  `datum` varchar(30) NOT NULL,
  `checkboxen_id` int(11) NOT NULL,
  `review_fase_4` varchar(50) NOT NULL,
  `titel_docent_invullen` varchar(100) NOT NULL,
  `review_fase_4_tekst` varchar(400) NOT NULL,
  `vormgeven_beoordeling` varchar(30) NOT NULL,
  `techniek_beoordeling` varchar(30) NOT NULL,
  `ondernemen_beoordeling` varchar(30) NOT NULL,
  `softskills_beoordeling` varchar(30) NOT NULL,
  `AVO_beoordeling` varchar(30) NOT NULL,
  `bijzondere_kwaliteiten` varchar(30) NOT NULL,
  `terug_koppelingsfase_4` varchar(50) NOT NULL,
  `deel_c_tekst_1` varchar(100) NOT NULL,
  `deel_c_tekst_2` varchar(100) NOT NULL,
  `deel_c_tekst_3` varchar(100) NOT NULL,
  `deel_c_tekst_4` varchar(100) NOT NULL,
  `doorgroei_advies` varchar(50) NOT NULL,
  `handtekening_assesor` int(11) NOT NULL,
  `handtekening_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `assesment_form4`
--

INSERT INTO `assesment_form4` (`id`, `AF4`, `tekst_intro`, `checklist_titel`, `veld_student`, `veld_leerlingnummer`, `veld_coach`, `datum`, `checkboxen_id`, `review_fase_4`, `titel_docent_invullen`, `review_fase_4_tekst`, `vormgeven_beoordeling`, `techniek_beoordeling`, `ondernemen_beoordeling`, `softskills_beoordeling`, `AVO_beoordeling`, `bijzondere_kwaliteiten`, `terug_koppelingsfase_4`, `deel_c_tekst_1`, `deel_c_tekst_2`, `deel_c_tekst_3`, `deel_c_tekst_4`, `doorgroei_advies`, `handtekening_assesor`, `handtekening_student`) VALUES
(1, 'Afsluiting Fase 4', 'Dit formulier gaat je helpen  te komen tot een assessment voor fase 3.Als je deel A samen met je coach hebt doorlopen laat je op deel B vakdocenten hun feedback invullen. Als als beide delen compleet zijn kun je bij je coach het assessment indienen. Deze zal je voordrangen en een terug koppeling geven als het assessment is bekeken en beoordeeld.', 'Checklist', 'Student', 0, 'Coach', 'Datum', 0, 'Review Fase 4', 'In te vullen door docent:', 'Maak op school of tijdens de les een afspraak met de desbetreffende docent en laat hem de beoordeling en feedback invullen. Bespreek deze zodat je ook begrijpt hoe de feedback tot stand is gekomen', 'Vormgeven', 'Techniek', 'Ondernemen', 'Softskills', 'AVO', 'Evt. bijzondere kwaliteiten', 'Terug koppelings fase 3', 'Je ontwikkeldt je \"in house\" verder als professioneel webdesigner', 'Je gaat met je semiprofessionele team aan de slag met echte klantopdrachten.', 'Je werkt aan je eigen profiel en verstevigt je showcaseportfolio', 'Je hebt een beeld van de type profielen/rollen van een webdesign bureau.', 'Doorgroei advies', 0, 0);

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
(30, 533187, 'Gavin', 'Tjin', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', '533187@student.glu.nl', '2wdv2');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `admin_docent`
--
ALTER TABLE `admin_docent`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `assesment_form1`
--
ALTER TABLE `assesment_form1`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `assesment_form2`
--
ALTER TABLE `assesment_form2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titel_checklist` (`AF2`);

--
-- Indexen voor tabel `assesment_form4`
--
ALTER TABLE `assesment_form4`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `assesment_form1`
--
ALTER TABLE `assesment_form1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `assesment_form2`
--
ALTER TABLE `assesment_form2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `assesment_form4`
--
ALTER TABLE `assesment_form4`
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

--
-- AUTO_INCREMENT voor een tabel `studenten`
--
ALTER TABLE `studenten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
