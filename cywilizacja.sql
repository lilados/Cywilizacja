-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 31, 2024 at 08:53 PM
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
(16, 'drewno', 500, 300.00, 'Wronis', 1);

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
(2, 'Kawalerzysta', 233, 'defend', 1),
(3, 'Łucznik', 10, 'defend', 1),
(4, 'Rekrut', 5, 'ready', 1),
(5, 'Rekrut', 5, 'ready', 1),
(6, 'Rekrut', 5, 'ready', 1),
(7, 'Rekrut', 5, 'ready', 1),
(8, 'Rekrut', 2, 'ready', 1),
(9, 'Rekrut', 3, 'ready', 1),
(10, 'Rekrut', 3, 'ready', 1),
(11, 'Rekrut', 2, 'ready', 1),
(12, 'Rekrut', 3, 'ready', 1),
(13, 'Rekrut', 4, 'ready', 1),
(14, 'Rekrut', 3, 'ready', 1),
(15, 'Łucznik', 20, 'ready', 1),
(16, 'Rekrut', 15, 'ready', 1),
(17, 'Rekrut', 10, 'ready', 1),
(18, 'Rekrut', 30, 'ready', 1),
(19, 'Rekrut', 20, 'ready', 3),
(20, 'Rekrut', 3, 'ready', 1);

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
(1, 'Uczelnictwo nr 3', 'edukacyjna', 'Zniesienie potrzeby uczenia się?', 1);

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
(5, 'Domy', 32, 'droga', 1);

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
(58, 'zywnosc', 0, 1),
(59, 'kamien', 0, 1),
(60, 'drewno', 0, 1),
(61, 'wegiel', 0, 1),
(62, 'zloto', 0, 1),
(63, 'kasa', 0, 1),
(64, 'zelazo', 0, 1),
(65, 'zywnosc', 0, 2),
(66, 'kamien', 0, 2),
(67, 'drewno', 0, 2),
(68, 'wegiel', 0, 2),
(69, 'zloto', 0, 2),
(70, 'kasa', 0, 2),
(71, 'zelazo', 0, 2),
(72, 'zywnosc', 0, 3),
(73, 'kamien', 0, 3),
(74, 'drewno', 0, 3),
(75, 'wegiel', 0, 3),
(76, 'zloto', 0, 3),
(77, 'kasa', 0, 3),
(78, 'zelazo', 0, 3),
(79, 'zywnosc', 0, 4),
(80, 'kamien', 0, 4),
(81, 'drewno', 0, 4),
(82, 'wegiel', 0, 4),
(83, 'zloto', 0, 4),
(84, 'kasa', 0, 4),
(85, 'zelazo', 0, 4),
(86, 'zywnosc', 1000, 1),
(87, 'zywnosc', -300, 1),
(88, 'zywnosc', 300, 3),
(89, 'zywnosc', -200, 3),
(90, 'zywnosc', -25, 1),
(91, 'zywnosc', 25, 2),
(92, 'kamien', -20, 1),
(93, 'kamien', 20, 2),
(94, 'zywnosc', 20, 1),
(95, 'zywnosc', -20, 2),
(96, 'kamien', 30, 1),
(97, 'kamien', -30, 2),
(98, 'kamien', -10, 1),
(99, 'kamien', 10, 2),
(100, 'drewno', 300, 1),
(101, 'drewno', -20, 1),
(102, 'drewno', 20, 2),
(103, 'zywnosc', -600, 1),
(104, 'zywnosc', -30, 1),
(105, 'drewno', -200, 1),
(106, 'drewno', 200, 2),
(107, 'drewno', 4000, 1),
(108, 'drewno', -640, 1),
(109, 'kasa', 3000, 2),
(110, 'drewno', -300, 1),
(111, 'drewno', 300, 2),
(112, 'kasa', -500, 2),
(113, 'drewno', 3000, 2),
(114, 'kasa', -300, 2),
(115, 'drewno', 500, 2),
(116, 'drewno', -500, 1),
(117, 'kasa', -300, 2),
(118, 'drewno', 500, 2),
(119, 'drewno', -500, 1),
(120, 'kasa', -300, 2),
(121, 'kasa', 300, 1),
(122, 'drewno', 500, 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jednostki_wojskowe`
--
ALTER TABLE `jednostki_wojskowe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

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
