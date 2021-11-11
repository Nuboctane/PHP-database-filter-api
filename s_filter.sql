-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 nov 2021 om 09:15
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s_filter`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `words`
--

CREATE TABLE `words` (
  `id` int(11) NOT NULL,
  `woord` varchar(255) NOT NULL,
  `gradatie` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `words`
--

INSERT INTO `words` (`id`, `woord`, `gradatie`) VALUES
(239, '<...><...>', 1),
(240, 'fat <...>', 1),
(241, 'hello ', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `words_to_filter`
--

CREATE TABLE `words_to_filter` (
  `id` int(11) NOT NULL,
  `word` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `words_to_filter`
--

INSERT INTO `words_to_filter` (`id`, `word`) VALUES
(1, 'fuck'),
(2, 'kanker'),
(3, 'bitch'),
(4, 'ass'),
(5, 'nigga'),
(6, 'hoe'),
(7, 'shut'),
(8, 'ass'),
(9, 'dick'),
(10, 'pussy'),
(11, 'motherfucker'),
(12, 'fucker'),
(13, 'abcd'),
(14, 'nigger'),
(15, 'f u c k'),
(16, 'bitchy'),
(17, 'cock'),
(18, 'dick'),
(19, 'cock'),
(20, 'nigurer'),
(21, 'niga'),
(22, 'nigar'),
(23, 'niger'),
(24, 'kanker bolle neger'),
(25, 'niggasas'),
(26, 'bi'),
(27, 'dikzak'),
(28, 'dik zak'),
(29, 'dikke'),
(30, 'kut'),
(31, 'neger'),
(32, 'f u c k you'),
(33, 'dikkeneger');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `words_to_filter`
--
ALTER TABLE `words_to_filter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `words`
--
ALTER TABLE `words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT voor een tabel `words_to_filter`
--
ALTER TABLE `words_to_filter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
