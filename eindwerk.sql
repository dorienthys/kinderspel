-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 18 apr 2015 om 12:38
-- Serverversie: 5.6.14
-- PHP-versie: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `eindwerk`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblafbeeldingen`
--

CREATE TABLE IF NOT EXISTS `tblafbeeldingen` (
  `AfbeeldingID` int(11) NOT NULL AUTO_INCREMENT,
  `VerhaalID` int(11) NOT NULL,
  `ScoreVolImg` text NOT NULL,
  `ScoreLeegImg` text NOT NULL,
  `PrijsImg` text NOT NULL,
  `startImg` text NOT NULL,
  PRIMARY KEY (`AfbeeldingID`),
  KEY `VerhaalID` (`VerhaalID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `tblafbeeldingen`
--

INSERT INTO `tblafbeeldingen` (`AfbeeldingID`, `VerhaalID`, `ScoreVolImg`, `ScoreLeegImg`, `PrijsImg`, `startImg`) VALUES
(1, 1, 'images/jungle.png', 'images/gratis.png', 'images/jungle.png', 'images/jungle.png'),
(2, 2, 'd', 'd', 'd', 'images/jungle.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblkinderen`
--

CREATE TABLE IF NOT EXISTS `tblkinderen` (
  `KindID` int(11) NOT NULL AUTO_INCREMENT,
  `OuderID` int(11) NOT NULL,
  `Naam` text NOT NULL,
  `Voornaam` text NOT NULL,
  `Geboortedatum` text NOT NULL,
  `Afbeelding` text NOT NULL,
  `Geslacht` varchar(1) NOT NULL,
  PRIMARY KEY (`KindID`),
  KEY `OuderID` (`OuderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblouders`
--

CREATE TABLE IF NOT EXISTS `tblouders` (
  `OuderID` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` text NOT NULL,
  `Voornaam` text NOT NULL,
  `Wachtwoord` text NOT NULL,
  `Geboortedatum` text NOT NULL,
  `Plaats` text NOT NULL,
  `Adres` text NOT NULL,
  `Email` text NOT NULL,
  PRIMARY KEY (`OuderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblpaginas`
--

CREATE TABLE IF NOT EXISTS `tblpaginas` (
  `PaginaID` int(10) NOT NULL AUTO_INCREMENT,
  `VerhaalID` int(10) NOT NULL,
  `PaginaNummer` int(10) NOT NULL,
  `Prijs` tinyint(1) NOT NULL,
  `Wachtwoord` tinyint(1) NOT NULL,
  `Score` tinyint(1) NOT NULL,
  `Omschrijving` text NOT NULL,
  PRIMARY KEY (`PaginaID`),
  KEY `VerhaalID` (`VerhaalID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `tblpaginas`
--

INSERT INTO `tblpaginas` (`PaginaID`, `VerhaalID`, `PaginaNummer`, `Prijs`, `Wachtwoord`, `Score`, `Omschrijving`) VALUES
(1, 1, 0, 0, 0, 0, 'Ik zoek 10 bananen zoek jij mee?'),
(2, 1, 1, 0, 1, 0, 'OPDRACHT 1\r\n\r\nOM IN DE JUNGLE TE OVERLEVEN MOET IK EERST WETEN WELKE DIEREN HIER LEVEN. SCHRIJF IN GROTE DRUKLETTERS VIJF VERSCHILLENDE DIEREN OP. VOORZIE PER DIER DAT JE OPSCHRIJFT 1 BLAD;'),
(3, 1, 2, 0, 0, 1, 'GOED ZO!\r\nJe Hebt 1 Banaan gevonden.'),
(4, 1, 3, 0, 1, 0, 'OPDRACHT 2\r\n\r\nKNIP ALLE LETTERS DIE JE NET HEBT GESCHREVEN UIT EN VERSIER ELKE LETTER IN HET THEMA VAN HET DIER.'),
(5, 1, 4, 0, 0, 1, 'GOED ZO!\r\n\r\nJE HEBT NOG EEN BANAAN GEVONDEN.\r\n\r\nLEVEL 1'),
(6, 1, 5, 1, 0, 0, 'WAUW! AL LEVEL 1. OMDAT JE ZO GOED HEBT GEHOLPEN BIJ HET VINDEN VAN DE EERSTE BANANEN GEEF IK JOU EEN SUPER COOL DING.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblverhalen`
--

CREATE TABLE IF NOT EXISTS `tblverhalen` (
  `VerhaalID` int(11) NOT NULL AUTO_INCREMENT,
  `Omschrijving` text,
  `Leeftijd` int(2) DEFAULT NULL,
  PRIMARY KEY (`VerhaalID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Gegevens worden uitgevoerd voor tabel `tblverhalen`
--

INSERT INTO `tblverhalen` (`VerhaalID`, `Omschrijving`, `Leeftijd`) VALUES
(1, 'JEFKE DE AAP IN DE JUNGLE', 6),
(2, 'KITO HET VARKEN OP DE BOERDERIJ', 6),
(3, 'ouder dan 8', 8);

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `tblafbeeldingen`
--
ALTER TABLE `tblafbeeldingen`
  ADD CONSTRAINT `tblafbeeldingen_ibfk_1` FOREIGN KEY (`VerhaalID`) REFERENCES `tblverhalen` (`VerhaalID`);

--
-- Beperkingen voor tabel `tblkinderen`
--
ALTER TABLE `tblkinderen`
  ADD CONSTRAINT `tblkinderen_ibfk_1` FOREIGN KEY (`OuderID`) REFERENCES `tblouders` (`OuderID`);

--
-- Beperkingen voor tabel `tblpaginas`
--
ALTER TABLE `tblpaginas`
  ADD CONSTRAINT `tblpaginas_ibfk_1` FOREIGN KEY (`VerhaalID`) REFERENCES `tblverhalen` (`VerhaalID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
