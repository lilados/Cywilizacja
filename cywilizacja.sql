-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Cze 02, 2024 at 06:08 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cywilizacja`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `administracja`
--

CREATE TABLE `administracja` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `budzet` decimal(15,2) NOT NULL,
  `panstwo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administracja`
--

INSERT INTO `administracja` (`id`, `nazwa`, `budzet`, `panstwo_id`) VALUES
(2, 'Morderstwa', 4444.00, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bilans`
--

CREATE TABLE `bilans` (
  `id` int(11) NOT NULL,
  `wartosc` decimal(10,2) NOT NULL,
  `panstwo_id` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bilans`
--

INSERT INTO `bilans` (`id`, `wartosc`, `panstwo_id`, `data`) VALUES
(1, 33333.00, 1, '2024-05-08'),
(2, 44546.00, 1, '2024-05-18');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `handel`
--

CREATE TABLE `handel` (
  `id` int(11) NOT NULL,
  `towar` varchar(100) NOT NULL,
  `ilosc` int(11) NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `partner_handlowy` varchar(50) NOT NULL,
  `panstwo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `handel`
--

INSERT INTO `handel` (`id`, `towar`, `ilosc`, `cena`, `partner_handlowy`, `panstwo_id`) VALUES
(4, 'zywnosc', 2333, 23.00, 'Wronis', 1),
(5, 'zywnosc', 25, 25.00, 'Wronis', 1),
(6, 'kamien', 20, 40.00, 'Wronis', 1),
(7, 'zywnosc', -20, 30.00, 'Wronis', 1),
(8, 'kamien', -30, 20.00, 'Wronis', 1),
(9, 'kamien', 10, 30.00, 'Wronis', 1),
(10, 'drewno', 20, 300.00, 'Wronis', 1),
(11, 'drewno', 200, 300.00, 'Wronis', 1),
(12, 'drewno', 300, 500.00, 'Wronis', 1),
(13, 'drewno', 3000, 500.00, 'Wronis', 1),
(14, 'drewno', 500, 300.00, 'Wronis', 1),
(15, 'drewno', 500, 300.00, 'Wronis', 1),
(16, 'drewno', 500, 300.00, 'Wronis', 1),
(17, 'kamien', 400, 200.00, 'Masuria', 1),
(18, 'zywnosc', 200, 600.00, 'Wronis', 1),
(19, 'kamien', 20, 50.00, 'Wronis', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jednostki_wojskowe`
--

CREATE TABLE `jednostki_wojskowe` (
  `id` int(11) NOT NULL,
  `rodzaj` varchar(255) NOT NULL,
  `liczebnosc` int(11) NOT NULL,
  `stan_gotowosci` varchar(255) DEFAULT NULL,
  `panstwo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jednostki_wojskowe`
--

INSERT INTO `jednostki_wojskowe` (`id`, `rodzaj`, `liczebnosc`, `stan_gotowosci`, `panstwo_id`) VALUES
(24, 'Rekrut', 50, 'Gotowy na front', 1),
(25, 'Rekrut', 50, 'Gotowy na front', 1),
(26, 'Kawalerzysta', 200, 'Gotowy na front', 1),
(27, 'Rekrut', 20, 'Gotowy na front', 2),
(28, 'Rekrut', 10, 'Gotowy na front', 3),
(29, 'Rekrut', 20, 'Obrona państwa', 1),
(30, 'Łucznik', 10, 'Gotowy na front', 4),
(31, 'Strażnik', 10, 'Obrona państwa', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `operacje_wojskowe`
--

CREATE TABLE `operacje_wojskowe` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `cel` varchar(255) NOT NULL,
  `data_rozpoczecia` date NOT NULL,
  `opis` text DEFAULT NULL,
  `panstwo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `operacje_wojskowe`
--

INSERT INTO `operacje_wojskowe` (`id`, `nazwa`, `cel`, `data_rozpoczecia`, `opis`, `panstwo_id`) VALUES
(1, 'Drewno', 'asdasd', '2024-05-08', 'asdasdasd', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `panstwo`
--

CREATE TABLE `panstwo` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `panstwo`
--

INSERT INTO `panstwo` (`id`, `nazwa`) VALUES
(1, 'Underwoodment'),
(2, 'Wronis'),
(3, 'Masuria'),
(4, 'Jagorria');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `polityki`
--

CREATE TABLE `polityki` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `typ` enum('ekonomiczna','społeczna','edukacyjna','zdrowotna','wojskowa') NOT NULL,
  `opis` text DEFAULT NULL,
  `panstwo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `polityki`
--

INSERT INTO `polityki` (`id`, `nazwa`, `typ`, `opis`, `panstwo_id`) VALUES
(1, 'Uczelnictwo nr 3', 'edukacyjna', 'Zniesienie potrzeby uczenia się?', 1),
(2, 'ds', 'ekonomiczna', 'dsds', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `postepy_badawcze`
--

CREATE TABLE `postepy_badawcze` (
  `id` int(11) NOT NULL,
  `projekt_id` int(11) DEFAULT NULL,
  `data` date NOT NULL,
  `postep` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postepy_badawcze`
--

INSERT INTO `postepy_badawcze` (`id`, `projekt_id`, `data`, `postep`) VALUES
(1, 1, '2024-05-09', 'adsasdasd');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `postepy_budowy`
--

CREATE TABLE `postepy_budowy` (
  `id` int(11) NOT NULL,
  `projekt_id` int(11) DEFAULT NULL,
  `data` date NOT NULL,
  `postep` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postepy_budowy`
--

INSERT INTO `postepy_budowy` (`id`, `projekt_id`, `data`, `postep`) VALUES
(1, 1, '2024-05-14', 'Zbudowano 20 domów z 30'),
(2, 1, '2024-05-08', 'Budujemy domy!!');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `projekty_badawcze`
--

CREATE TABLE `projekty_badawcze` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `cel` text NOT NULL,
  `zasoby_potrzebne` text DEFAULT NULL,
  `harmonogram` text DEFAULT NULL,
  `panstwo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projekty_badawcze`
--

INSERT INTO `projekty_badawcze` (`id`, `nazwa`, `cel`, `zasoby_potrzebne`, `harmonogram`, `panstwo_id`) VALUES
(1, 'Drewno', '3sdsda', 'asdasdasd', 'asdasdasd', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `projekty_infrastrukturalne`
--

CREATE TABLE `projekty_infrastrukturalne` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `ilosc` int(11) NOT NULL,
  `typ` text NOT NULL,
  `panstwo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projekty_infrastrukturalne`
--

INSERT INTO `projekty_infrastrukturalne` (`id`, `nazwa`, `ilosc`, `typ`, `panstwo_id`) VALUES
(1, 'Domy', 30, 'Dom', 4),
(2, 'asdwdad', 300, 'dom', 1),
(3, 'domy', 20, 'dom', 1),
(4, 'Drogi!', 34, 'droga', 1),
(5, 'Domy', 32, 'droga', 1),
(6, 'DOm', 2, 'dom', 3),
(7, 'Drogi', 1, 'droga', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `relations`
--

CREATE TABLE `relations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `panstwo1` varchar(50) DEFAULT NULL,
  `panstwo2` varchar(50) DEFAULT NULL,
  `relation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `relations`
--

INSERT INTO `relations` (`id`, `panstwo1`, `panstwo2`, `relation`) VALUES
(1, 'Masuria', 'Janczland', 'Sojusznicy'),
(2, 'Masuria', 'Underwoodland', 'Wrogowie'),
(3, 'Masuria', 'Wronis', 'Neutralni'),
(4, 'Janczland', 'Masuria', 'Sojusznicy'),
(5, 'Janczland', 'Underwoodland', 'Sojusznicy'),
(6, 'Janczland', 'Wronis', 'sojusznicy'),
(7, 'Underwoodland', 'Masuria', 'Wrogowie'),
(8, 'Underwoodland', 'Janczland', 'Sojusznicy'),
(9, 'Underwoodland', 'Wronis', 'Neutralni'),
(10, 'Wronis', 'Masuria', 'Wrogowie'),
(11, 'Wronis', 'Janczland', 'Neutralni'),
(12, 'Wronis', 'Underwoodland', 'Sojusznicy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wskazniki`
--

CREATE TABLE `wskazniki` (
  `id` int(11) NOT NULL,
  `typ` enum('ekonomiczny','społeczny','polityczny','wojskowy') NOT NULL,
  `wartosc` decimal(15,2) NOT NULL,
  `data` date NOT NULL,
  `panstwo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wskazniki`
--

INSERT INTO `wskazniki` (`id`, `typ`, `wartosc`, `data`, `panstwo_id`) VALUES
(1, 'wojskowy', 323232.00, '2024-05-08', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wydatki_wojskowe`
--

CREATE TABLE `wydatki_wojskowe` (
  `id` int(11) NOT NULL,
  `rodzaj` varchar(255) NOT NULL,
  `kwota` decimal(15,2) NOT NULL,
  `data` date NOT NULL,
  `panstwo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wydatki_wojskowe`
--

INSERT INTO `wydatki_wojskowe` (`id`, `rodzaj`, `kwota`, `data`, `panstwo_id`) VALUES
(1, 'Armor', 233.00, '2024-05-14', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyniki_badawcze`
--

CREATE TABLE `wyniki_badawcze` (
  `id` int(11) NOT NULL,
  `projekt_id` int(11) DEFAULT NULL,
  `data` date NOT NULL,
  `wynik` text NOT NULL,
  `wplyw` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wyniki_badawcze`
--

INSERT INTO `wyniki_badawcze` (`id`, `projekt_id`, `data`, `wynik`, `wplyw`) VALUES
(1, 1, '2024-05-08', 'asdasdasd', 'asdasdasd');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zasoby`
--

CREATE TABLE `zasoby` (
  `id` int(11) NOT NULL,
  `typ` enum('zywnosc','kamien','drewno','wegiel','zloto','kasa','zelazo') NOT NULL,
  `ilosc` int(11) NOT NULL,
  `panstwo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zasoby`
--

INSERT INTO `zasoby` (`id`, `typ`, `ilosc`, `panstwo_id`) VALUES
(140, 'zywnosc', 200, 1),
(141, 'kamien', 450, 1),
(142, 'drewno', 2000, 1),
(143, 'wegiel', 100, 1),
(144, 'zloto', 200, 1),
(145, 'kasa', 6000, 1),
(146, 'zelazo', 200, 1),
(147, 'zywnosc', 50, 2),
(148, 'kamien', 5000, 2),
(149, 'drewno', 20, 2),
(150, 'wegiel', 1000, 2),
(151, 'zloto', 2000, 2),
(152, 'kasa', 10000, 2),
(153, 'zelazo', 5000, 2),
(154, 'zywnosc', 500, 3),
(155, 'kamien', 600, 3),
(156, 'drewno', 400, 3),
(157, 'wegiel', 500, 3),
(158, 'zloto', 600, 3),
(159, 'kasa', 8000, 3),
(160, 'zelazo', 200, 3),
(161, 'zywnosc', 400, 4),
(162, 'kamien', 500, 4),
(163, 'drewno', 500, 4),
(164, 'wegiel', 200, 4),
(165, 'zloto', 500, 4),
(166, 'kasa', 400, 4),
(167, 'zelazo', 600, 4),
(168, 'zelazo', 500, 1),
(169, 'kamien', -400, 1),
(170, 'kasa', -200, 3),
(171, 'kasa', 200, 1),
(172, 'kamien', 400, 3),
(173, 'zywnosc', -100, 4),
(174, 'zywnosc', 10, 1),
(175, 'zywnosc', 20, 1),
(176, 'zywnosc', 200, 1),
(177, 'zywnosc', -200, 1),
(178, 'kasa', -600, 2),
(179, 'kasa', 600, 1),
(180, 'zywnosc', 200, 2),
(181, 'zywnosc', 600, 2),
(182, 'drewno', -40, 3),
(183, 'zywnosc', -100, 1),
(184, 'kamien', -20, 1),
(185, 'kasa', -50, 2),
(186, 'kasa', 50, 1),
(187, 'kamien', 20, 2),
(188, 'drewno', -20, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zasoby_infrastrukturalne`
--

CREATE TABLE `zasoby_infrastrukturalne` (
  `id` int(11) NOT NULL,
  `projekt_id` int(11) DEFAULT NULL,
  `zasob` varchar(255) NOT NULL,
  `ilosc` int(11) NOT NULL,
  `jednostka` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zasoby_infrastrukturalne`
--

INSERT INTO `zasoby_infrastrukturalne` (`id`, `projekt_id`, `zasob`, `ilosc`, `jednostka`) VALUES
(1, 1, 'zywnosc', 600, 'kg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `administracja`
--
ALTER TABLE `administracja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panstwo_id` (`panstwo_id`);

--
-- Indeksy dla tabeli `bilans`
--
ALTER TABLE `bilans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panstwo_id` (`panstwo_id`);

--
-- Indeksy dla tabeli `handel`
--
ALTER TABLE `handel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panstwo_id` (`panstwo_id`);

--
-- Indeksy dla tabeli `jednostki_wojskowe`
--
ALTER TABLE `jednostki_wojskowe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panstwo_id` (`panstwo_id`);

--
-- Indeksy dla tabeli `operacje_wojskowe`
--
ALTER TABLE `operacje_wojskowe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panstwo_id` (`panstwo_id`);

--
-- Indeksy dla tabeli `panstwo`
--
ALTER TABLE `panstwo`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `polityki`
--
ALTER TABLE `polityki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panstwo_id` (`panstwo_id`);

--
-- Indeksy dla tabeli `postepy_badawcze`
--
ALTER TABLE `postepy_badawcze`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projekt_id` (`projekt_id`);

--
-- Indeksy dla tabeli `postepy_budowy`
--
ALTER TABLE `postepy_budowy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projekt_id` (`projekt_id`);

--
-- Indeksy dla tabeli `projekty_badawcze`
--
ALTER TABLE `projekty_badawcze`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panstwo_id` (`panstwo_id`);

--
-- Indeksy dla tabeli `projekty_infrastrukturalne`
--
ALTER TABLE `projekty_infrastrukturalne`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panstwo_id` (`panstwo_id`);

--
-- Indeksy dla tabeli `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wskazniki`
--
ALTER TABLE `wskazniki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panstwo_id` (`panstwo_id`);

--
-- Indeksy dla tabeli `wydatki_wojskowe`
--
ALTER TABLE `wydatki_wojskowe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panstwo_id` (`panstwo_id`);

--
-- Indeksy dla tabeli `wyniki_badawcze`
--
ALTER TABLE `wyniki_badawcze`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projekt_id` (`projekt_id`);

--
-- Indeksy dla tabeli `zasoby`
--
ALTER TABLE `zasoby`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panstwo_id` (`panstwo_id`);

--
-- Indeksy dla tabeli `zasoby_infrastrukturalne`
--
ALTER TABLE `zasoby_infrastrukturalne`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projekt_id` (`projekt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administracja`
--
ALTER TABLE `administracja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bilans`
--
ALTER TABLE `bilans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `handel`
--
ALTER TABLE `handel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jednostki_wojskowe`
--
ALTER TABLE `jednostki_wojskowe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `operacje_wojskowe`
--
ALTER TABLE `operacje_wojskowe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panstwo`
--
ALTER TABLE `panstwo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `polityki`
--
ALTER TABLE `polityki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `postepy_badawcze`
--
ALTER TABLE `postepy_badawcze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `postepy_budowy`
--
ALTER TABLE `postepy_budowy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projekty_badawcze`
--
ALTER TABLE `projekty_badawcze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projekty_infrastrukturalne`
--
ALTER TABLE `projekty_infrastrukturalne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `relations`
--
ALTER TABLE `relations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wskazniki`
--
ALTER TABLE `wskazniki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wydatki_wojskowe`
--
ALTER TABLE `wydatki_wojskowe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wyniki_badawcze`
--
ALTER TABLE `wyniki_badawcze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zasoby`
--
ALTER TABLE `zasoby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `zasoby_infrastrukturalne`
--
ALTER TABLE `zasoby_infrastrukturalne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administracja`
--
ALTER TABLE `administracja`
  ADD CONSTRAINT `administracja_ibfk_1` FOREIGN KEY (`panstwo_id`) REFERENCES `panstwo` (`id`);

--
-- Constraints for table `bilans`
--
ALTER TABLE `bilans`
  ADD CONSTRAINT `bilans_ibfk_1` FOREIGN KEY (`panstwo_id`) REFERENCES `panstwo` (`id`);

--
-- Constraints for table `handel`
--
ALTER TABLE `handel`
  ADD CONSTRAINT `handel_ibfk_1` FOREIGN KEY (`panstwo_id`) REFERENCES `panstwo` (`id`);

--
-- Constraints for table `jednostki_wojskowe`
--
ALTER TABLE `jednostki_wojskowe`
  ADD CONSTRAINT `jednostki_wojskowe_ibfk_1` FOREIGN KEY (`panstwo_id`) REFERENCES `panstwo` (`id`);

--
-- Constraints for table `operacje_wojskowe`
--
ALTER TABLE `operacje_wojskowe`
  ADD CONSTRAINT `operacje_wojskowe_ibfk_1` FOREIGN KEY (`panstwo_id`) REFERENCES `panstwo` (`id`);

--
-- Constraints for table `polityki`
--
ALTER TABLE `polityki`
  ADD CONSTRAINT `polityki_ibfk_1` FOREIGN KEY (`panstwo_id`) REFERENCES `panstwo` (`id`);

--
-- Constraints for table `postepy_badawcze`
--
ALTER TABLE `postepy_badawcze`
  ADD CONSTRAINT `postepy_badawcze_ibfk_1` FOREIGN KEY (`projekt_id`) REFERENCES `projekty_badawcze` (`id`);

--
-- Constraints for table `postepy_budowy`
--
ALTER TABLE `postepy_budowy`
  ADD CONSTRAINT `postepy_budowy_ibfk_1` FOREIGN KEY (`projekt_id`) REFERENCES `projekty_infrastrukturalne` (`id`);

--
-- Constraints for table `projekty_badawcze`
--
ALTER TABLE `projekty_badawcze`
  ADD CONSTRAINT `projekty_badawcze_ibfk_1` FOREIGN KEY (`panstwo_id`) REFERENCES `panstwo` (`id`);

--
-- Constraints for table `projekty_infrastrukturalne`
--
ALTER TABLE `projekty_infrastrukturalne`
  ADD CONSTRAINT `projekty_infrastrukturalne_ibfk_1` FOREIGN KEY (`panstwo_id`) REFERENCES `panstwo` (`id`);

--
-- Constraints for table `wskazniki`
--
ALTER TABLE `wskazniki`
  ADD CONSTRAINT `wskazniki_ibfk_1` FOREIGN KEY (`panstwo_id`) REFERENCES `panstwo` (`id`);

--
-- Constraints for table `wydatki_wojskowe`
--
ALTER TABLE `wydatki_wojskowe`
  ADD CONSTRAINT `wydatki_wojskowe_ibfk_1` FOREIGN KEY (`panstwo_id`) REFERENCES `panstwo` (`id`);

--
-- Constraints for table `wyniki_badawcze`
--
ALTER TABLE `wyniki_badawcze`
  ADD CONSTRAINT `wyniki_badawcze_ibfk_1` FOREIGN KEY (`projekt_id`) REFERENCES `projekty_badawcze` (`id`);

--
-- Constraints for table `zasoby`
--
ALTER TABLE `zasoby`
  ADD CONSTRAINT `zasoby_ibfk_1` FOREIGN KEY (`panstwo_id`) REFERENCES `panstwo` (`id`);

--
-- Constraints for table `zasoby_infrastrukturalne`
--
ALTER TABLE `zasoby_infrastrukturalne`
  ADD CONSTRAINT `zasoby_infrastrukturalne_ibfk_1` FOREIGN KEY (`projekt_id`) REFERENCES `projekty_infrastrukturalne` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
