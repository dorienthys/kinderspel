-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 12 apr 2015 om 13:17
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
  `ScoreVol` text NOT NULL,
  `ScoreLeeg` text NOT NULL,
  `Prijs` text NOT NULL,
  PRIMARY KEY (`AfbeeldingID`),
  KEY `VerhaalID` (`VerhaalID`)
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblverhalen`
--

CREATE TABLE IF NOT EXISTS `tblverhalen` (
  `VerhaalID` int(11) NOT NULL AUTO_INCREMENT,
  `VerhaalOmschrijving` text,
  `Leeftijd` int(2) DEFAULT NULL,
  PRIMARY KEY (`VerhaalID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `tblafbeeldingen`
--
ALTER TABLE `tblafbeeldingen`
  ADD CONSTRAINT `tblafbeeldingen_ibfk_1` FOREIGN KEY (`VerhaalID`) REFERENCES `tblverhalen` (`VerhaalID`);

--
-- Beperkingen voor tabel `tblpaginas`
--
ALTER TABLE `tblpaginas`
  ADD CONSTRAINT `tblpaginas_ibfk_1` FOREIGN KEY (`VerhaalID`) REFERENCES `tblverhalen` (`VerhaalID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
