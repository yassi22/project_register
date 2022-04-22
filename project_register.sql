-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 apr 2022 om 11:08
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_register`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projecten`
--

CREATE TABLE `projecten` (
  `project_id` int(11) NOT NULL,
  `projectnaam` varchar(50) NOT NULL,
  `datum` date NOT NULL,
  `website_link` varchar(200) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_on` timestamp(6) NULL DEFAULT NULL ON UPDATE current_timestamp(6),
  `deleted` timestamp(6) NULL DEFAULT NULL,
  `omschrijving` varchar(1000) NOT NULL,
  `klant_id` varchar(50) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `projecten`
--

INSERT INTO `projecten` (`project_id`, `projectnaam`, `datum`, `website_link`, `created_on`, `updated_on`, `deleted`, `omschrijving`, `klant_id`, `views`) VALUES
(1, 'Hoek en Blok Personeelsevent', '2010-05-22', 'https://hoekenblokpersoneelsevent2021.nl/', '2022-04-21 14:07:42', '2022-04-21 14:07:42.897963', NULL, 'Graag vernemen we of jij (en je partner) aanwezig zijn. We willen je daarom vragen om je zsm te registreren. Daarbij kun je ook aangeven aan welke activiteiten je wilt deelnemen. Let op, er is per activiteit een maximale capaciteit, dus maak snel je keuze! ', '1', 31),
(4, 'Embrace 160 years Bleckmann', '2010-04-21', 'https://embracebleckmann.com/', '2022-04-21 14:07:40', '2022-04-21 14:07:40.249437', NULL, 'Welkom op Embrace, Het feest waar we met iedereen die zich inzet voor Bleckmann, iedereen die onze vier kernwaarden in zijn of haar DNA heeft en deze omarmd, ons 160 jarig jubileum vieren.', '2', 62),
(5, 'JA21 ALV', '2022-06-14', 'https://ja21alv.nl/', '2022-04-21 14:07:44', '2022-04-21 14:07:44.765084', NULL, 'Geen', '3', 2),
(6, 'Aproject', '2022-06-30', 'https://enexis-transition.nl/', '2022-04-21 10:50:29', NULL, NULL, 'blalalalalaalalalalalalalalala', 'KlantAA', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `schermafbeeldingen`
--

CREATE TABLE `schermafbeeldingen` (
  `schermafbeelding_id` int(11) NOT NULL,
  `naam` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `projecten`
--
ALTER TABLE `projecten`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexen voor tabel `schermafbeeldingen`
--
ALTER TABLE `schermafbeeldingen`
  ADD PRIMARY KEY (`schermafbeelding_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `projecten`
--
ALTER TABLE `projecten`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `schermafbeeldingen`
--
ALTER TABLE `schermafbeeldingen`
  MODIFY `schermafbeelding_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
