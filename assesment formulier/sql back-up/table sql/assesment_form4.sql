-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 mrt 2022 om 09:17
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

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `assesment_form4`
--
ALTER TABLE `assesment_form4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `assesment_form4`
--
ALTER TABLE `assesment_form4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
