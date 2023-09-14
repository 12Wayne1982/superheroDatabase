-- phpMyAdmin SQL Dump
-- version 5.2.2-dev+20230704.42f0b8fe0f
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Sep 2023 um 15:08
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `superherodb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `superhero`
--

CREATE TABLE `superhero` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Alter Ego` text DEFAULT NULL,
  `Publisher` text NOT NULL,
  `First Appearence` text NOT NULL,
  `Publishing Year` int(11) NOT NULL,
  `Created By` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `superhero`
--

INSERT INTO `superhero` (`ID`, `Name`, `Alter Ego`, `Publisher`, `First Appearence`, `Publishing Year`, `Created By`) VALUES
(1, 'Spider-Man ', 'Peter Parker', 'Marvel Comics', 'Amazing Fantasy Nr. 15', 1962, 'Stan Lee, Steve Ditko'),
(2, 'Batman', 'Bruce Wayne', 'DC Comics', 'Detective Comics #27', 1939, 'Bob Kane, Bill Finger'),
(3, 'Superman ', 'Clark Kent', 'DC Comics', 'Action Comics #1', 1938, 'Jerry Siegel, Joe Shuster'),
(4, 'Wonder Woman', 'Princess Diana of Themyscira (Amazon identity), Diana Prince (civilian identity)', 'DC Comics', 'All Star Comics #8 ', 1941, 'William Moulton Marston'),
(5, 'Captain America', 'Steve Rogers', 'Marvel Comics', 'Captain America Comics #1', 1941, 'Joe Simon, Jack Kirby'),
(6, 'Wolverine', 'Logan', 'Marvel Comics', 'The Incredible Hulk #180', 1974, 'Roy Thomas, Len Wein, John Romita Sr.'),
(7, 'Green Lantern', 'Hal Jordan', 'DC Comics', 'All-American Comics #16', 1940, 'John Broome, Gil Kane'),
(8, 'The Flash      ', 'Barry Allen', 'DC Comics', 'Showcase #4', 1956, 'Robert Kanigher, Carmine Infantino'),
(86, 'Iron Man ', 'Tony Stark', 'Marvel Comics', 'Tales of Suspense No. 39', 1963, 'Stan Lee, Jack Kirby, Steve Ditko, Larry Lieber, Don Heck');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `superhero`
--
ALTER TABLE `superhero`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `superhero`
--
ALTER TABLE `superhero`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
