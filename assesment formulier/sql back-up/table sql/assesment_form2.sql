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

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `assesment_form2`
--
ALTER TABLE `assesment_form2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titel_checklist` (`AF2`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `assesment_form2`
--
ALTER TABLE `assesment_form2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
