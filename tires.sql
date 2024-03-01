-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 01 Mar 2024, 13:24
-- Wersja serwera: 8.0.31
-- Wersja PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `tires`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `archive`
--

DROP TABLE IF EXISTS `archive`;
CREATE TABLE IF NOT EXISTS `archive` (
  `TireID` int NOT NULL,
  `Date` date NOT NULL,
  `comment` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `CARID` int NOT NULL AUTO_INCREMENT,
  `registration_number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `car_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `car_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `SETID` int NOT NULL,
  PRIMARY KEY (`CARID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `cars`
--

INSERT INTO `cars` (`CARID`, `registration_number`, `car_name`, `car_type`, `SETID`) VALUES
(3, 'SRC1234', 'FORD MONDEO', 'OSOBOWE', 1),
(4, 'SRC2345', 'FIAT DUCATO', 'DOSTAWCZE', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `loosetires`
--

DROP TABLE IF EXISTS `loosetires`;
CREATE TABLE IF NOT EXISTS `loosetires` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sets`
--

DROP TABLE IF EXISTS `sets`;
CREATE TABLE IF NOT EXISTS `sets` (
  `SETID` int NOT NULL AUTO_INCREMENT,
  `TIREID` int NOT NULL,
  `RightLeft` int NOT NULL,
  `RightFront` int NOT NULL,
  `LeftRear` int NOT NULL,
  `RightRear` int NOT NULL,
  PRIMARY KEY (`SETID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `summertires`
--

DROP TABLE IF EXISTS `summertires`;
CREATE TABLE IF NOT EXISTS `summertires` (
  `TIREID` int NOT NULL AUTO_INCREMENT,
  `Name` text COLLATE utf8mb4_polish_ci NOT NULL,
  `profile` int NOT NULL,
  `width` int NOT NULL,
  `size` int NOT NULL,
  `type` text COLLATE utf8mb4_polish_ci NOT NULL,
  `tread` int NOT NULL,
  PRIMARY KEY (`TIREID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `summertires`
--

INSERT INTO `summertires` (`TIREID`, `Name`, `profile`, `width`, `size`, `type`, `tread`) VALUES
(1, 'CONTINENTAL RACE', 180, 80, 16, 'LETNIA', 6),
(2, 'CONTINENTAL RACE', 180, 80, 16, 'LETNIA', 6),
(3, 'CONTINENTAL RACE', 180, 80, 16, 'LETNIA', 6),
(4, 'CONTINENTAL RACE', 180, 80, 16, 'LETNIA', 6),
(5, 'CONTINENTAL RACE', 180, 80, 16, 'LETNIA', 6),
(6, 'CONTINENTAL RACE', 180, 80, 16, 'LETNIA', 6),
(7, 'CONTINENTAL RACE', 180, 80, 16, 'LETNIA', 6),
(8, 'CONTINENTAL RACE', 180, 80, 16, 'LETNIA', 6),
(9, 'MICHELIN PRO', 200, 80, 20, 'LETNIA', 7),
(10, 'MICHELIN PRO', 200, 80, 20, 'LETNIA', 7),
(11, 'MICHELIN PRO', 200, 80, 20, 'LETNIA', 7),
(12, 'MICHELIN PRO', 200, 80, 20, 'LETNIA', 7),
(13, 'MICHELIN PRO', 200, 80, 20, 'LETNIA', 7),
(14, 'MICHELIN PRO', 200, 80, 20, 'LETNIA', 7),
(15, 'MICHELIN PRO', 200, 80, 20, 'LETNIA', 7),
(16, 'MICHELIN PRO', 200, 80, 20, 'LETNIA', 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wintertires`
--

DROP TABLE IF EXISTS `wintertires`;
CREATE TABLE IF NOT EXISTS `wintertires` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` int NOT NULL,
  `Profil` int NOT NULL,
  `Width` int NOT NULL,
  `Size` int NOT NULL,
  `Type` int NOT NULL,
  `Tread` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
