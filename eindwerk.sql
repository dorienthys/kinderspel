-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 22 apr 2015 om 10:54
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
  `Mascotte` text NOT NULL,
  PRIMARY KEY (`AfbeeldingID`),
  KEY `VerhaalID` (`VerhaalID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `tblafbeeldingen`
--

INSERT INTO `tblafbeeldingen` (`AfbeeldingID`, `VerhaalID`, `ScoreVolImg`, `ScoreLeegImg`, `PrijsImg`, `startImg`, `Mascotte`) VALUES
(1, 1, 'images/banaanVol.png', 'images/banaanLeeg.png', 'images/cadeau1.png', 'images/jungle.png', 'images/mascotte.png'),
(2, 2, 'd', 'd', 'd', 'images/jungle.png', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `tblkinderen`
--

INSERT INTO `tblkinderen` (`KindID`, `OuderID`, `Naam`, `Voornaam`, `Geboortedatum`, `Afbeelding`, `Geslacht`) VALUES
(1, 1, 'KindN', 'KindV', '-2000', 'images/cadeau1.png', 'M'),
(5, 1, 'ertyhujk', 'dfghjkl', '1991', 'images/jungle.png', 'm');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `tblouders`
--

INSERT INTO `tblouders` (`OuderID`, `Naam`, `Voornaam`, `Wachtwoord`, `Geboortedatum`, `Plaats`, `Adres`, `Email`) VALUES
(1, 'test', 'test', 'f05bb0d9a57b1e5b10db0a8c96afc5c5', '1992-11-05', 'test', 'test', 'test@test.com');

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
  `Titel` text NOT NULL,
  PRIMARY KEY (`PaginaID`),
  KEY `VerhaalID` (`VerhaalID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Gegevens worden uitgevoerd voor tabel `tblpaginas`
--

INSERT INTO `tblpaginas` (`PaginaID`, `VerhaalID`, `PaginaNummer`, `Prijs`, `Wachtwoord`, `Score`, `Omschrijving`, `Titel`) VALUES
(1, 1, 0, 0, 0, 0, 'IK BEN JEFKE DE AAP EN IK WIL GRAAG IN DEZE MOOIE JUNGLE WILLEN WONEN. DAAROM IK ZOEK 10 BANANEN, ZOEK JIJ MEE?', 'HALLO '),
(2, 1, 1, 0, 1, 0, 'OM IN DE JUNGLE TE KUNNEN OVERLEVEN MOET IK EERST WETEN WELKE DIEREN HIER LEVEN. SCHRIJF IN GROTE DRUKLETTERS VIJF VERSCHILLENDE DIEREN OP. GEBRUIK PER DIER 1 BLAD PAPIER.', 'OPDRACHT 1'),
(3, 1, 2, 0, 0, 1, 'JE HEBT DE EERSTE BANAAN GEVONDEN. LATEN WE VERDER ZOEKEN.', 'GOED ZO!'),
(4, 1, 3, 0, 1, 0, 'KNIP AL DE DIEREN UIT DIE JE NET HEBT OPGESCHREVEN EN VERSIER ZE ZOALS EEN ECHT DIER.\r\nBIJVOORBEELD: ALS JE SLANG HEBT OPGESCHREVEN KAN JE DIE IN HET GROEN INKLEUREN', 'OPDRACHT 2'),
(5, 1, 4, 0, 0, 1, 'GOED ZO!\r\n\r\nJE HEBT NOG EEN BANAAN GEVONDEN. HOEVEEL BANANEN HEB JE NU AL?\r\n\r\n', 'LEVEL 1'),
(6, 1, 5, 1, 0, 0, 'OMDAT JE ZO GOED HEBT GEHOLPEN BIJ HET VINDEN VAN DE EERSTE BANANEN GEEF IK JOU EEN SUPER COOL DING.', 'WAUW AL LEVEL 1.'),
(7, 1, 6, 0, 1, 0, 'KNUTSEL DE 5 DIEREN NA DIE JE NET HEBT OPGESCHREVEN. JE KAN BIJVOORBEELD EEN DIER NAMAKEN MET PROPPEN WC PAPIER.', 'OPDRACHT 3'),
(8, 1, 7, 0, 0, 1, 'JE HEBT 3 BANANEN GEVONDEN.', 'GOED ZO!'),
(9, 1, 8, 0, 1, 0, 'OOH NEE ER ZIJN ENKELE BOMEN WAAR GEEN FRUIT MEER AANGROEIT. LATEN WE SAMEN EEN NIEUWE BOUWEN. NEEM EEN PLASTIEKEN FLES EN MAAK ER EEN BOOMSTAM VAN. TIP: VUL DE FLES MET WAT WATER ZO DAT ZE NIET KAN OMVALLEN.', 'OPDRACHT 4'),
(10, 1, 9, 0, 0, 1, 'GOED ZO!\r\n\r\nJE HEBT DE VIERDE BANAAN GEVONDEN.', 'LEVEL 2'),
(11, 1, 10, 1, 0, 0, 'IK DACHT DAT HET NU WEL WAT MOEILIJKER GING WORDEN VOOR JOU. MAAR OMDAT JE AL DE BANANEN TOCH NOG ZO SNEL HEBT GEVONDEN KRIJG JE VAN MIJ IETS SUPER COOL.', 'WAUW DAT IS SNEL!'),
(12, 1, 11, 0, 1, 0, 'IK BEN MOE. TIJD VOOR EEN KLEINE PAUZE. NEEM EEN BAKJE MET WATER EN LEG EEN 3 SNOEPJES IN. PROBEER DAARNA DE SNOEPJES UIT HET BAKJE TE NEMEN ZONDER JE HANDEN TE GEBRUIKEN.', 'OPDRACHT 5'),
(13, 1, 12, 0, 0, 1, 'JE HEBT AL 5 BANANEN GEVONDEN. WE ZITTEN AL AAN DE HELFT!', 'GOED ZO!'),
(14, 1, 13, 0, 1, 0, 'WE MOETEN ZORGEN DAT ONZE BOOM KLAAR IS ZODAT ER ZO SNEL MOGELIJK FRUIT AAN KAN GROEIEN. TEKEN OP EEN BLAD PAPIER VERSCHILLENDE BLADSOORTEN EN KNIP ZE UIT EN VERSIER ZE. INDIEN HET KAN, KAN JE OOK ECHT BLADEREN GAAN ZOEKEN.', 'OPDRACHT 6'),
(15, 1, 14, 0, 0, 1, 'GOED ZO!\r\n\r\nJE HEBT AL 6 BANANEN GEVONDEN WE ZITTEN OVER DE HELFT.', 'LEVEL 3'),
(16, 1, 15, 1, 0, 0, 'WAT KAN JIJ MIJ GOED HELPEN. HIER HEB JE NOG EEN CADEAU VAN MIJ VOOR AL JE GOEDE HULP. ', 'SUPER!'),
(17, 1, 16, 0, 1, 0, 'ER IS EEN BIJENZWERM OP KOMST? BLAAS ZE WEG VOOR MIJ. NEEM 30 KAARTEN EN LEG ZO OP DE BOVENKANT VAN EEN FLES. BLAAS DE KAARTEN ER AF EN ZORG DAT ER MAAR 1 KAART BLIJFT LIGGEN.', 'OPDRACHT 7'),
(18, 1, 17, 0, 0, 1, 'JE HEBT AL 7 BANANEN GEVONDEN.', 'GOED ZO!'),
(19, 1, 18, 0, 1, 0, 'ONZE BOOM IS BIJNA AF. NU HEB IK ALLEEN NOG TAKKEN NODIG VOOR AAN DE BOOM. ZOEK RIETJES OF ANDERE MATERIALEN EN MAAK ER TAKJES VAN.', 'OPDRACHT 8'),
(20, 1, 19, 0, 0, 1, 'GOED ZO!\r\nJE HEBT AL 8 BANANEN GEVONDEN.', 'LEVEL 4 '),
(21, 1, 20, 1, 0, 0, 'KIJK EENS WAT JE NOG KRIJGT VAN MIJ OMDAT JE MIJ ZO GOED KAN HELPEN.', 'LEVEL 4'),
(22, 1, 21, 0, 1, 0, 'ALLES VOOR ONZE BOOM IS NU KLAAR. KAN JIJ ALLES AAN ELKAAR KLEVEN ZODAT DE BOOM AF IS?', 'OPDRACHT 9'),
(23, 1, 22, 0, 0, 1, 'JE HEBT AL 9 BANANEN GEVONDEN. WE ZIJN ER BIJNA PAS DAN KAN IK OVERLEVEN IN DE JUNGLE.', 'GOED ZO!'),
(24, 1, 23, 0, 1, 0, 'WE HEBBEN BIJNA AL ONZE BANANEN. LEG JIJ DE ANDERE BANANEN AL EVEN WEG. NEEM EEN WASMAND OF SOORT ANDER DOOSJE EN 10 PAAR OPGEVOUWEN SOKKEN. GOOI DE SOKKEN IN DE MAND VAN OP 2 METER AFSTAND.', 'OPDRACHT 10'),
(25, 1, 24, 0, 0, 1, 'JE HEBT ALLE 10 BANANEN KUNNEN VINDEN.', 'LEVEL 5'),
(26, 1, 25, 1, 0, 0, 'NU KAN IK DANKZIJ JOU OVERLEVEN IN DE JUNGLE. NU HEB IK ZELFS MIJN EIGEN HUTJE. KOM JE BINNENKORT NOG EENS EEN KIJKJE NEMEN?', 'DANKJEWEL!');

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
