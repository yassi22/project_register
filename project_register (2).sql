-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 mei 2022 om 17:02
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
-- Tabelstructuur voor tabel `categorieen`
--

CREATE TABLE `categorieen` (
  `categorie_id` int(10) NOT NULL,
  `categorie_naam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `categorieen`
--

INSERT INTO `categorieen` (`categorie_id`, `categorie_naam`) VALUES
(1, 'Evenement Registratie Platform'),
(2, 'Medisch Congres Platform'),
(3, 'Congres Online Platform'),
(4, 'Hybride Event Platform ');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categoriee_projecten`
--

CREATE TABLE `categoriee_projecten` (
  `categorieen_categorie_id` int(10) NOT NULL,
  `projecten_project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `categoriee_projecten`
--

INSERT INTO `categoriee_projecten` (`categorieen_categorie_id`, `projecten_project_id`) VALUES
(1, 6),
(4, 7);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `diensten`
--

CREATE TABLE `diensten` (
  `diensten_id` int(10) NOT NULL,
  `diensten_naam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `diensten`
--

INSERT INTO `diensten` (`diensten_id`, `diensten_naam`) VALUES
(1, 'Lanyards'),
(2, 'Fotoalbum'),
(3, 'Evaluatie'),
(4, 'Hostesses'),
(5, 'Abstractmodule'),
(6, 'Toegangscontrole'),
(7, 'Event app'),
(8, 'Online Betaalmodule'),
(9, 'Evenement platform'),
(10, 'Eventwebsite');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klanten`
--

CREATE TABLE `klanten` (
  `klant_id` int(11) NOT NULL,
  `klant_naam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `omschrijving` varchar(1000) NOT NULL,
  `klant_id` varchar(50) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `projecten`
--

INSERT INTO `projecten` (`project_id`, `projectnaam`, `datum`, `website_link`, `created_on`, `updated_on`, `omschrijving`, `klant_id`, `views`) VALUES
(1, 'Bleckman', '2022-05-12', 'Bleckman', '2022-05-27 14:34:22', '2022-05-27 14:34:22.240796', 'Bleckman', 'kaat en co', 739),
(2, 'lol', '2022-05-20', 'lol', '2022-05-27 14:24:55', '2022-05-27 14:24:55.322793', 'okae', 'asd', 119),
(3, 'Project2020', '2020-05-24', '2020', '2022-05-26 11:10:12', '2022-05-26 11:10:12.541380', '2020', '2020', 7),
(4, 'Project2021', '2021-05-24', '2021', '2022-05-25 07:54:35', '2022-05-25 07:54:35.932867', '2021', '2021', 1),
(5, 'Project2019', '2019-05-24', '2019', '2022-05-25 08:50:23', '2022-05-25 08:50:23.154762', '2019', '2019', 3),
(6, 'Categorie', '2022-05-12', 'Categorie', '2022-05-25 08:10:15', '2022-05-25 08:10:15.006507', 'Categorie', 'Categorie', 7),
(7, 'ProjectMetCategorie', '2022-05-25', 'ProjectMetCategorie', '2022-05-27 09:48:03', '2022-05-27 09:48:03.299159', 'ProjectMetCategorie', 'ProjectMetCategorie', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projecten_diensten`
--

CREATE TABLE `projecten_diensten` (
  `projecten_project_id` int(10) NOT NULL,
  `diensten_diensten_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `projecten_diensten`
--

INSERT INTO `projecten_diensten` (`projecten_project_id`, `diensten_diensten_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(2, 1),
(2, 2),
(2, 3),
(3, 6),
(3, 7),
(4, 9),
(4, 10),
(5, 8),
(5, 9),
(6, 2),
(6, 3),
(6, 4),
(7, 9),
(7, 10);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `schermafbeeldingen`
--

CREATE TABLE `schermafbeeldingen` (
  `schermafbeelding_id` int(11) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `schermafbeeldingen`
--

INSERT INTO `schermafbeeldingen` (`schermafbeelding_id`, `naam`, `project_id`) VALUES
(1, 'bleckmann-1.png', 1),
(2, 'bleckmann-2.png', 1),
(3, 'bleckmann-3.png', 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `categorieen`
--
ALTER TABLE `categorieen`
  ADD PRIMARY KEY (`categorie_id`);

--
-- Indexen voor tabel `diensten`
--
ALTER TABLE `diensten`
  ADD PRIMARY KEY (`diensten_id`);

--
-- Indexen voor tabel `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`klant_id`);

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
-- AUTO_INCREMENT voor een tabel `categorieen`
--
ALTER TABLE `categorieen`
  MODIFY `categorie_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `diensten`
--
ALTER TABLE `diensten`
  MODIFY `diensten_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `klanten`
--
ALTER TABLE `klanten`
  MODIFY `klant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `projecten`
--
ALTER TABLE `projecten`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `schermafbeeldingen`
--
ALTER TABLE `schermafbeeldingen`
  MODIFY `schermafbeelding_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
