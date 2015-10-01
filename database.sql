-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Loomise aeg: Okt 01, 2015 kell 01:05 PL
-- Serveri versioon: 5.6.24
-- PHP versioon: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Andmebaas: `cleanblog`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `author_id` int(11) unsigned NOT NULL,
  `author_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Andmete tõmmistamine tabelile `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`) VALUES
(1, 'Klaabu'),
(2, 'Sipsik');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) unsigned NOT NULL,
  `author_id` int(10) unsigned NOT NULL,
  `post_title` varchar(255) DEFAULT NULL,
  `post_description` varchar(255) DEFAULT NULL,
  `post_text` text NOT NULL,
  `post_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Andmete tõmmistamine tabelile `posts`
--

INSERT INTO `posts` (`post_id`, `author_id`, `post_title`, `post_description`, `post_text`, `post_created`) VALUES
(1, 1, 'Mees, kes peab uurima ja korralikult!', 'Probleemid näevad väga väikseid kaugelt vaadates', 'Kunagi kogu oma ajaloo on mehed suutnud tõeliselt kujutleda maailma üks: ühe sfääri, maakera, millel omadusi maakera, ümmargune maa, kus kõik suunad lõpuks kohtuda, kus puudub keskus, sest iga punkt või neid pole, keskus - võrdne Maa, mis kõik mehed hõivata võrdsetena. Airman muld, kui vabad mehed teevad seda, mis on tõeliselt ringi: maakera praktikas, mitte teoorias.\n\nTeadus lõikab kaks võimalust, muidugi; Oma tooteid saab kasutada nii hea ja kurja vahel. Aga seal ei ole enam tagasiteed teadusest. Varajased hoiatused tehnoloogiliste ohtude tulla ka teaduses.\n\nMis oli kõige olulisem umbes Kuu reisi ei olnud, et mees jalg Moon, kuid mida nad määrata silma maa peal.\n\nÜks Hiina lugu räägib mõned mehed saadeti kahjustada noor tüdruk, kes nähes tema ilu, muutub tema kaitsjad, mitte tema rikkujaid. See, kuidas ma tundsin nähes Maa esmakordselt. Ma ei saa aidata, kuid armastan ja kalliks teda.\n\nNeile, kes on näinud Maa kosmosest, ja sadu ja võib-olla veel tuhandeid, kes on kogemus kindlasti muudab oma vaatenurgast. Asju, mida me jagame meie maailmas on palju väärtuslikum kui need, mis meid lahutavad.', '2014-09-24 12:50:29');

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indeksid tabelile `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`), ADD KEY `author_id` (`author_id`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT tabelile `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tõmmistatud tabelite piirangud
--

--
-- Piirangud tabelile `posts`
--
ALTER TABLE `posts`
ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
