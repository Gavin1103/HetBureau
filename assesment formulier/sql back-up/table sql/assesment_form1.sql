-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 mrt 2022 om 09:18
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

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `assesment_form1`
--
ALTER TABLE `assesment_form1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `assesment_form1`
--
ALTER TABLE `assesment_form1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
