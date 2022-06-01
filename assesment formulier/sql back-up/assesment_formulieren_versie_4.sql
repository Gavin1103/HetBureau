-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 01 jun 2022 om 14:39
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
(2, 'admin', 'admin', 'admin@admin.nl', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin', 'admin'),
(3, 'vikry', 'hh', 'hh', '72b289ec78e0a928c565480a435453e30acb92eddb3b78ff168b28737cf6a849', 'docent', 'hh'),
(4, 'vikry', 'h', 'h', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 'docent', 'h'),
(5, 'Gavin', 'Tjin', '533187@student.glu.nl', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 'admin', 'GTA');

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
  `veld_klas` varchar(255) NOT NULL,
  `datum` varchar(25) NOT NULL,
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

INSERT INTO `assesment_form1` (`id`, `AF1`, `tekst_intro`, `checklist_titel`, `veld_student`, `veld_leerlingnummer`, `veld_coach`, `veld_klas`, `datum`, `checkboxen_id`, `review_fase_1`, `titel_docent_invullen`, `review_fase_1_tekst`, `vormgeven_beoordeling`, `techniek_beoordeling`, `ondernemend_beoordeling`, `softskills_beoordeling`, `avo_beoordeling`, `bijzondere_kwaliteiten`, `terug_koppelingsfase_1`, `deel_c_tekst_1`, `deel_c_tekst_2`, `deel_c_tekst_3`, `doorgroei_advies`, `handtekening_assessor`, `handtekening_student`) VALUES
(1, 'Afsluiting Fase 1', 'Dit formulier gaat je helpen om te komen tot een assessment voor fase 1. Als je deel A samen met je coach  hebt doorlopen laat je op deel B de vakdocenten hun feedback invullen. Pas als beide delen c', 'Checklist', 'Student:', 'Leerling nummer:', 'Coach:', 'Klas:', 'Datum:', 1, 'Review Fase 1', 'In te vullen door docent:', 'Techniek:', 'Vormgeven:', 'Techniek:', 'Ondernemend:', 'Softskills:', 'AVO:', 'Evt. kwaliteiten:', 'Terug Koppling Fase 1', 'Je hebt jezelf voorgesteld en het is duidelijk wat je ambities zijn.', 'Je hebt inzicht in de medestudenten, docenten, opleiding en vakgebied.\r\n', 'Je hebt laten zien welke skills je kan toepassen en beheerst.\r\n', 'Doorgroei advies', '', '');

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
(3, 1, '', 'startportfolio_name', 'checkbox', 'startportfolio<br>\r\n(Het startportfolio dient als kapstok waar de opgedane kennis en ervaring zichtbaar wo'),
(4, 1, '', 'challenge_1_name', 'checkbox', 'Challenge 1 (interactief zelfpotret)'),
(5, 1, '', 'onderzoek_name', 'checkbox', 'Onderzoek naar vakgebied (omgeving, netwerk, vak)'),
(6, 1, '', 'loopbaan_name', 'checkbox', 'Loopbaan reflectie '),
(7, 1, '', 'kennis_name', 'checkbox', 'Kennismakingsopdrachten (poster van jezelf, website van de werkgroep, netwerkopdracht )\r\n'),
(8, 1, '', 'tools_name', 'checkbox', 'Tools (Illustrator, Photoshop)'),
(9, 1, '', 'vormgeven_name', 'checkbox', 'vormgeven'),
(10, 1, '', 'webtechniek_name', 'checkbox', 'Webtechnieken'),
(11, 1, '', 'review_name', 'checkbox', 'Reviews van de desbetreffende docenten   '),
(12, 1, '', 'ontwikkelport_name', 'checkbox', 'Ontwikkelportfolio<br>\r\n(Het ontwikkelportfolio dient als kapstok waar de opgedane kennis en ervaring zichtbaar wordt. \r\n	Het portfolio moet een overzicht geven van jou als aankomend webdesigner.)'),
(13, 1, '', 'eigenproject_name', 'checkbox', 'Eigen project'),
(14, 1, '', 'groepsopdracht_name', 'checkbox', 'Groepsopdracht'),
(15, 1, '', 'challenge2_name', 'checkbox', 'Challenge 2 (Magazine)'),
(16, 1, '', 'burgerschap_name', 'checkbox', 'Burgerschap 1 en 2'),
(17, 1, '', 'prototyping_name', 'checkbox', 'prototyping, XD'),
(18, 1, '', 'appdesign_name', 'checkbox', 'App design'),
(19, 1, '', 'keuzedeel_name', 'checkbox', 'Keuzedeel 1 (ondernemend gedrag)');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `checkboxen_koppeling`
--

CREATE TABLE `checkboxen_koppeling` (
  `id` int(11) NOT NULL,
  `formulier_id` varchar(100) NOT NULL,
  `checkboxen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `checkboxen_koppeling`
--

INSERT INTO `checkboxen_koppeling` (`id`, `formulier_id`, `checkboxen_id`) VALUES
(1, 'form1', 3),
(2, 'form1', 4),
(5, 'form1', 10),
(7, 'form1', 5),
(8, 'form1', 6),
(9, 'form1', 7),
(10, 'form1', 8),
(12, 'form1', 11),
(13, 'form1', 9);

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
(3, 3, '\r\n', '{\r\n    \"formulier\": {\r\n        \"titel\": \"Afsluiting fase 3\",\r\n        \"beschrijving\": \"dit formulier gaat je helpen om te komen tot een a\",\r\n        \"subtitel_A\": \"Checklist\",\r\n        \"subtitel_A_info\": \"samen met coach invullen\",\r\n        \"subtitel_B\": \"Review Fase 3\",\r\n        \"subtitel_B_info\": \"Maak op school of tijdens de les een afspraak met de desbetrefende docent en laat hem de beoordeling en feedback invullen.<br> Bespreek deze zodat je ook begrijpt hoe de feedback tot stand is gekomen\",\r\n        \"subtitel_C\": \"Terugkoppeling Fase 3 \",\r\n        \r\n        \"deel_A\": [\r\n            {\r\n                \"vraag\": \"wat is je leerling nummer\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"studentnummer\",\r\n                        \"name\": \"student nummer\",\r\n                        \"type\": \"number\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"coach\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Coach\",\r\n                        \"name\": \"coach_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"datum\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"datum\",\r\n                        \"name\": \"date_name\",\r\n                        \"type\": \"date\"\r\n                    }\r\n                ]\r\n            }\r\n        ],\r\n\r\n        \"deel_B\": [\r\n            {\r\n                \"vraag\": \"Vormgeven input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"vormgeven:\",\r\n                        \"name\": \"vormgeven_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"Techniek input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Techniek:\",\r\n                        \"name\": \"Techniek_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"ondernemen input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"ondernemen:\",\r\n                        \"name\": \"ondernemen_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"Softskills input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Tools:\",\r\n                        \"name\": \"techniek_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"AVO input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"AVO: (Nederlands, Engels, rekenen)\",\r\n                        \"name\": \"AVO_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"vul hier je bijzondere kwaliteiten in\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Evt. bijzondere kwaliteiten\",\r\n                        \"name\": \"kwaliteiten_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            }\r\n        ],\r\n\r\n\r\n        \"deel_C\": [\r\n            {\r\n                \"vraag\": \"vraag 1 deel c\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Je hebt aangetoond dat je klaar bent om voor klanten te werken\",\r\n                        \"name\": \"vraag1C_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"vraag 2 deel c\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Je weet waar je kwaliteiten en je ontwikkelpunten liggen\",\r\n                        \"name\": \"vraag2C_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"vraag 3 deel c\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Je kunt dit vertalen naar leerdoelen\",\r\n                        \"name\": \"vraag3C_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"vraag 4 deel c\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Je kan met collega\'s samenwerken aan een product\",\r\n                        \"name\": \"vraag4C_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"vraag 5 deel c\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Je kan professioneel handelen en weet wanneer je welke tool in kan zetten\",\r\n                        \"name\": \"vraag5C_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"doorgroei advies\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Doorgroei advies\",\r\n                        \"name\": \"advies_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"handtekening docent\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Handtekening assesor\",\r\n                        \"name\": \"handtekening_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"handtekening leerling\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Handtekening leerling\",\r\n                        \"name\": \"handtekening_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            }\r\n\r\n        ]\r\n    }\r\n}'),
(4, 1, '1', '{\r\n    \"formulier\": {\r\n        \"titel\": \"afsluiting fase 1\",\r\n        \"beschrijving\": \"dit formulier gaat je helpen om te komen tot een a\",\r\n        \"subtitel_A\": \"Checklist\",\r\n        \"subtitel_A_info\": \"samen met coach invullen\",\r\n        \"subtitel_B\": \"Review Fase 1\",\r\n        \"subtitel_B_info\": \"In te vullen door vakdocent: <br> Maak op school of tijdens de les een afspraak met de desbetrefende docent en laat hem de beoordeling en feedback invullen. Bespreek deze zodat je ook begrijpt hoe de feedback tot stand is gekomen.\",\r\n        \"subtitel_C\": \"Terugkoppeling Fase 1\",\r\n        \"deel_A\": [\r\n            {\r\n                \"vraag\": \"wat is je leerling nummer\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"studentnummer\",\r\n                        \"name\": \"student_nummer\",\r\n                        \"type\": \"number\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"coach\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Coach\",\r\n                        \"name\": \"coach_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"datum\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"datum\",\r\n                        \"name\": \"date_name\",\r\n                        \"type\": \"date\"\r\n                    }\r\n                ]\r\n            }\r\n        ],\r\n        \"deel_B\": [\r\n            {\r\n                \"vraag\": \"Vormgeven input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"vormgeven:\",\r\n                        \"name\": \"vormgeven_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"techniek input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Techniek:\",\r\n                        \"name\": \"techniek_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"Ondernemend input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Ondernemend:\",\r\n                        \"name\": \"ondernemend_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"softskills input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"softskills\",\r\n                        \"name\": \"softskills_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"AVO input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"AVO: (Nederlands, Engels, rekenen)\",\r\n                        \"name\": \"AVO_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"vul hier je bijzondere kwaliteiten in\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Evt. bijzondere kwaliteiten\",\r\n                        \"name\": \"kwaliteiten_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            }\r\n        ],\r\n        \"deel_C\": [\r\n            {\r\n                \"vraag\": \"vraag 1 deel c\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Je hebt jezelf voorgesteld en het is duidelijk wat je ambities zijn.\",\r\n                        \"name\": \"vraag1C_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"vraag 2 deel c\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Je hebt inzicht in de medestudenten, docenten, opleiding en vakgebied.\",\r\n                        \"name\": \"vraag2C_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"vraag 3 deel c\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Je hebt laten zien welke skills je kan toepassen en begeerst\",\r\n                        \"name\": \"vraag1C_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"doorgroei advies\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Doorgroei advies\",\r\n                        \"name\": \"advies_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"handtekening docent\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Handtekening assesor\",\r\n                        \"name\": \"handtekening_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"handtekening leerling\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Handtekening leerling\",\r\n                        \"name\": \"handtekening_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            }\r\n        ],\r\n\r\n        \"checkboxen\": [\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"Startportfolio\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\":\"startportfolio_name_f1\"\r\n                    }\r\n                ]\r\n\r\n            },\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"Challenge 1 (interactie)\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\":\"challenge_name_f1\"\r\n                    }\r\n                ]\r\n\r\n            },\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"Onderzoek\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\":\"onderzoek_name_f1\"\r\n                    }\r\n                ]\r\n\r\n            },\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"Loopbaan reflectie 1\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\":\"loopbaan_name_f1\"\r\n                    }\r\n                ]\r\n\r\n            },\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"Kennismakings opdrachten (poster van jezelf, website vd werkgroep en netwerkopdracht)\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\":\"kennismakings_name_f1\"\r\n                    }\r\n                ]\r\n\r\n            },\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"Tools (Illustrator en Photoshop)\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\":\"tools_name_f1\"\r\n                    }\r\n                ]\r\n\r\n            },\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"Vormgeven\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\":\"vormgeven_name_f1\"\r\n                    }\r\n                ]\r\n\r\n            },\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"Webtechnieken\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\":\"webtechnieken_name_f1\"\r\n                    }\r\n                ]\r\n\r\n            },\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"Reviews van de docenten\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\":\"review_docenten_name_f1\"\r\n                    }\r\n                ]\r\n\r\n            }\r\n        ]\r\n    }\r\n}'),
(5, 2, '2', '{\r\n    \"formulier\": {\r\n        \"titel\": \"Afsluiting fase 2\",\r\n        \"beschrijving\": \"dit formulier gaat je helpen om te komen tot een a\",\r\n        \"subtitel_A\": \"Checklist\",\r\n        \"subtitel_A_info\": \"samen met coach invullen\",\r\n        \"subtitel_B\": \"Review Fase 2\",\r\n        \"subtitel_B_info\": \"Maak een afspraak met de desbetrefende docent en laat hem de beoordeling en feedback invullen.<br> Bespreek deze zodat je ook begrijpt hoe de feedback tot stand is gekomen\",\r\n        \"subtitel_C\": \"Terugkoppeling Fase 2\",\r\n        \r\n        \"deel_A\": [\r\n            {\r\n                \"vraag\": \"wat is je leerling nummer\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"studentnummer\",\r\n                        \"name\": \"student nummer\",\r\n                        \"type\": \"number\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"coach\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Coach\",\r\n                        \"name\": \"coach_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"datum\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"datum\",\r\n                        \"name\": \"date_name\",\r\n                        \"type\": \"date\"\r\n                    }\r\n                ]\r\n            }\r\n        ],\r\n\r\n        \"deel_B\": [\r\n            {\r\n                \"vraag\": \"Vormgeven input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"vormgeven:\",\r\n                        \"name\": \"vormgeven_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"Techniek input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Techniek:\",\r\n                        \"name\": \"techniek_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"Tools input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Tools:\",\r\n                        \"name\": \"techniek_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"Softskills input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Tools:\",\r\n                        \"name\": \"techniek_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"AVO input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"AVO: (Nederlands, Engels, rekenen)\",\r\n                        \"name\": \"AVO_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"vul hier je bijzondere kwaliteiten in\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Evt. bijzondere kwaliteiten\",\r\n                        \"name\": \"kwaliteiten_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            }\r\n        ],\r\n\r\n\r\n        \"deel_C\": [\r\n            {\r\n                \"vraag\": \"vraag 1 deel c\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Je hebt een beeld van het profiel webdesigner\",\r\n                        \"name\": \"vraag1C_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"vraag 2 deel c\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Je weet waar je staat T.O.V het beeld van een webdesigner.\",\r\n                        \"name\": \"vraag2C_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"vraag 3 deel c\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Je bent op het niveau van een beginnend webdesigner.\",\r\n                        \"name\": \"vraag1C_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"doorgroei advies\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Doorgroei advies\",\r\n                        \"name\": \"advies_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"handtekening docent\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Handtekening assesor\",\r\n                        \"name\": \"handtekening_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"handtekening leerling\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Handtekening leerling\",\r\n                        \"name\": \"handtekening_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            }\r\n\r\n        ]\r\n    }\r\n}'),
(6, 4, '4', '{\r\n    \"formulier\": {\r\n        \"titel\": \"Afsluiting fase 4\",\r\n        \"beschrijving\": \"dit formulier gaat je helpen om te komen tot een a\",\r\n        \"subtitel_A\": \"Checklist\",\r\n        \"subtitel_A_info\": \"samen met coach invullen\",\r\n        \"subtitel_B\": \"Review Fase 4\",\r\n        \"subtitel_B_info\": \"Maak op school of tijdens de les een adspraak met de desbretefende docent en laat hem de beoordeling en feedback invullen. Bespreek deze zodat je ook begrijpt hoe de feedback tot stand is gekomen\",\r\n        \"subtitel_C\": \"Terugkoppeling Fase 4 \",\r\n        \"deel_A\": [\r\n            {\r\n                \"vraag\": \"wat is je leerling nummer\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"studentnummer\",\r\n                        \"name\": \"student nummer\",\r\n                        \"type\": \"number\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"coach\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Coach\",\r\n                        \"name\": \"coach_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"datum\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"datum\",\r\n                        \"name\": \"date_name\",\r\n                        \"type\": \"date\"\r\n                    }\r\n                ]\r\n            }\r\n        ],\r\n        \"deel_B\": [\r\n            {\r\n                \"vraag\": \"Vormgeven input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"vormgeven:\",\r\n                        \"name\": \"vormgeven_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"Techniek input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Techniek:\",\r\n                        \"name\": \"Techniek_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"ondernemen input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"ondernemen:\",\r\n                        \"name\": \"ondernemen_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"Softskills input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Tools:\",\r\n                        \"name\": \"techniek_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"AVO input veld\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"AVO: (Nederlands, Engels, rekenen)\",\r\n                        \"name\": \"AVO_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"vul hier je bijzondere kwaliteiten in\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Evt. bijzondere kwaliteiten\",\r\n                        \"name\": \"kwaliteiten_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            }\r\n        ],\r\n        \"deel_C\": [\r\n            {\r\n                \"vraag\": \"vraag 1 deel c\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Je ontwikkelt je \'in house\' verder als professioneel webdesigner\",\r\n                        \"name\": \"vraag1C_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"vraag 2 deel c\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Je gaat met je semiprofessionele tean aan de slag met  echte opdrachten voor klanten\",\r\n                        \"name\": \"vraag2C_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"vraag 3 deel c\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Je werkt aan je eigen profiel en verstevigd je showcase portfolio\",\r\n                        \"name\": \"vraag3C_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"vraag 4 deel c\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Je hebt een beeld van de type profielen/rollen van een webdesign bureau.\",\r\n                        \"name\": \"vraag4C_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"doorgroei advies\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Doorgroei advies\",\r\n                        \"name\": \"advies_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"handtekening docent\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Handtekening assesor\",\r\n                        \"name\": \"handtekening_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"vraag\": \"handtekening leerling\",\r\n                \"antwoorden\": [\r\n                    {\r\n                        \"label\": \"Handtekening leerling\",\r\n                        \"name\": \"handtekening_name\",\r\n                        \"type\": \"text\"\r\n                    }\r\n                ]\r\n            }\r\n        ],\r\n        \"checkboxen\": [\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"Ontwikkelportfolio<br>(Het ontwikkelportfolio dient...)\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\": \"ontwikkelportfolio_name_f4\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"Ondernemersschap\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\": \"ondernemer_name_f1\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"Promotie van showcase portfolio\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\": \"promotie_name_f1\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"klantopdracht\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\": \"klantopdracht_name_f1\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"Loopbaan reflecties 1,2,3 en 4\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\": \"loopbaan_name_f1\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"Keuzedeel 3\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\": \"keuzedeel_name_f1\"\r\n                    }\r\n                ]\r\n            },\r\n            {\r\n                \"checkbox\": [\r\n                    {\r\n                        \"label\": \"reviews van docenten.\",\r\n                        \"type\": \"checkbox\",\r\n                        \"name\": \"reviews_name_f1\"\r\n                    }\r\n                ]\r\n            }\r\n        ]\r\n    }\r\n}');

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
(3, '3WDV2'),
(15, '3WDV33');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opgeslagen_form_af1`
--

CREATE TABLE `opgeslagen_form_af1` (
  `id` int(11) NOT NULL,
  `student` varchar(255) NOT NULL,
  `leerlingnummer` varchar(255) NOT NULL,
  `coach` varchar(255) NOT NULL,
  `klas` varchar(25) NOT NULL,
  `datum` varchar(255) NOT NULL,
  `checkboxen` varchar(1000) NOT NULL,
  `vormgeven_veld` varchar(1000) NOT NULL,
  `techniek_veld` varchar(1000) NOT NULL,
  `ondernemend_veld` varchar(1000) NOT NULL,
  `AVO_veld` varchar(1000) NOT NULL,
  `softskills_veld` varchar(1000) NOT NULL,
  `evtKwaliteiten_veld` varchar(255) NOT NULL,
  `doorgroei_advies` varchar(1000) NOT NULL,
  `veld_a_beoordeling` varchar(20) NOT NULL,
  `veld_b_beoordeling` varchar(20) NOT NULL,
  `veld_c_beoordeling` varchar(20) NOT NULL,
  `veld_1_rating` varchar(20) NOT NULL,
  `veld_2_rating` varchar(20) NOT NULL,
  `veld_3_rating` varchar(20) NOT NULL,
  `veld_4_rating` varchar(20) NOT NULL,
  `veld_5_rating` varchar(20) NOT NULL,
  `veld_6_rating` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `opgeslagen_form_af1`
--

INSERT INTO `opgeslagen_form_af1` (`id`, `student`, `leerlingnummer`, `coach`, `klas`, `datum`, `checkboxen`, `vormgeven_veld`, `techniek_veld`, `ondernemend_veld`, `AVO_veld`, `softskills_veld`, `evtKwaliteiten_veld`, `doorgroei_advies`, `veld_a_beoordeling`, `veld_b_beoordeling`, `veld_c_beoordeling`, `veld_1_rating`, `veld_2_rating`, `veld_3_rating`, `veld_4_rating`, `veld_5_rating`, `veld_6_rating`) VALUES
(80, 'Gav', '533187', 'Thomas', '', '2022-05-18', '[1,2,9,12,13]', 'test', 'test', 'test', 'test', '    test', 'test', 'test', 'groen', 'geel', 'groen', 'geel', 'geel', 'geel', 'geel', 'geel', 'geel'),
(81, 'Sam', '200750', 'Thomas', '3WDV2', '2022-05-18', ' [1,2,12]', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'rood', 'geel', 'geel', '', '', '', '', '', ''),
(82, 'enzo', '200509', 'thomas', '', '', '[13]', 'wd', 'dawd', '', '', ' ', '', 'wadaef', 'rood', 'geel', 'groen', '', 'geel', 'geel', 'geel', 'geel', 'geel'),
(83, 'thymen', '2893', 'yhomas', '', '2022-05-20', '[1,2,7]', 'ds', 'sd', 'sd', 'sdsd', ' sd', 'sd', '', 'geel', 'geel', 'geel', 'geel', 'geel', 'geel', 'geel', 'geel', 'geel'),
(87, 'Jelle', '', 'Koen', '1WDS1', '2022-05-20', ' [2]', '', '', '', '', '', '', '', 'geel', 'geel', 'rood', 'rood', 'rood', 'rood', 'rood', 'rood', 'rood'),
(89, 'Jelle', '200516', 'Koen', '3WDV2', '2022-05-20', ' [1,2,5]', '', '', '', '', '', '', '', 'geel', 'geel', 'geel', 'rood', 'rood', 'geel', 'groen', 'geel', 'geel'),
(90, 'test', '54543642', '3453', '3WDV33', '2022-05-20', ' [5,7]', '', '', '', '', '', '', '', 'geel', 'geel', 'geel', 'rood', 'geel', 'geel', 'geel', 'geel', 'geel'),
(91, 'Logan', '200202', 'Mischa', '3WDV33', '2022-05-23', ' [1,2,8,9]', '', '', '', '', '', '', '', 'geel', 'groen', 'geel', 'rood', 'geel', 'groen', 'geel', 'groen', 'groen'),
(92, 'Thymen Blom', '200520', 'Thomas', '1WDS2', '2022-05-31', ' [1,2,5,9,10]', '', '', '', '', '', '', '', 'rood', 'geel', 'groen', 'groen', 'geel', 'geel', 'groen', 'geel', 'groen'),
(93, 'maarten\"bos', '200507', 'Thomas Tij', '3WDV2', '2022-05-31', '[1,2,5,7]', 'ewqdw', 'test', 'qwdq', 'qwd', '  dwqq', 'wdq', '', 'rood', 'geel', 'groen', 'rood', 'rood', 'rood', 'rood', 'rood', 'rood');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opgeslagen_form_af2`
--

CREATE TABLE `opgeslagen_form_af2` (
  `id` int(11) NOT NULL,
  `student` varchar(100) NOT NULL,
  `leerlingnummer` int(11) NOT NULL,
  `coach` varchar(100) NOT NULL,
  `klas` varchar(25) NOT NULL,
  `datum` datetime NOT NULL,
  `checkboxen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `opgeslagen_form_af2`
--

INSERT INTO `opgeslagen_form_af2` (`id`, `student`, `leerlingnummer`, `coach`, `klas`, `datum`, `checkboxen`) VALUES
(1, 'gaylord', 200509, 'thomas', '2wdv2', '2022-05-11 10:43:09', ''),
(2, 'Gavin', 533187, 'Thomas', '2WDV2', '2022-05-11 10:45:03', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `studenten`
--

CREATE TABLE `studenten` (
  `id` int(11) NOT NULL,
  `leerlingnummer` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `studenten`
--

INSERT INTO `studenten` (`id`, `leerlingnummer`, `naam`) VALUES
(52, 533187, 'Gavin'),
(53, 200750, 'Sam'),
(54, 200509, 'enzo'),
(55, 2893, 'thymen'),
(58, 200516, 'Jelle'),
(59, 453, 'yuyu'),
(60, 54543642, 'test'),
(61, 200202, 'Logan'),
(62, 200520, 'Thymen Blom'),
(63, 200507, 'maarten');

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
-- Indexen voor tabel `opgeslagen_form_af1`
--
ALTER TABLE `opgeslagen_form_af1`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `opgeslagen_form_af2`
--
ALTER TABLE `opgeslagen_form_af2`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT voor een tabel `checkboxen_koppeling`
--
ALTER TABLE `checkboxen_koppeling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `form_questions`
--
ALTER TABLE `form_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `klassen`
--
ALTER TABLE `klassen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT voor een tabel `opgeslagen_form_af1`
--
ALTER TABLE `opgeslagen_form_af1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT voor een tabel `opgeslagen_form_af2`
--
ALTER TABLE `opgeslagen_form_af2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `studenten`
--
ALTER TABLE `studenten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
