-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 27, 2024 at 09:11 PM
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
  `budzet` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administracja`
--

INSERT INTO `administracja` (`id`, `nazwa`, `budzet`) VALUES
(1, 'Ministerstwo Finansów', 200000000.00),
(2, 'Ministerstwo Zdrowia', 150000000.00);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `handel`
--

CREATE TABLE `handel` (
  `id` int(11) NOT NULL,
  `partner` varchar(255) NOT NULL,
  `typ` enum('import','export') NOT NULL,
  `zasob_id` int(11) DEFAULT NULL,
  `ilosc` decimal(10,2) NOT NULL,
  `cena` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `handel`
--

INSERT INTO `handel` (`id`, `partner`, `typ`, `zasob_id`, `ilosc`, `cena`) VALUES
(1, 'Kraj A', 'import', 1, 100.00, 50.00),
(2, 'Kraj B', 'export', 2, 200.00, 75.00);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `importeksport`
--

CREATE TABLE `importeksport` (
  `id` int(11) NOT NULL,
  `towar` varchar(255) NOT NULL,
  `ilosc` int(11) NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `partner_handlowy` varchar(255) NOT NULL,
  `typ` varchar(10) NOT NULL CHECK (`typ` in ('import','eksport')),
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jednostkiwojskowe`
--

CREATE TABLE `jednostkiwojskowe` (
  `id` int(11) NOT NULL,
  `rodzaj` varchar(255) NOT NULL,
  `liczebnosc` int(11) NOT NULL,
  `wyposazenie` text NOT NULL,
  `stan_gotowosci` enum('wysoki','sredni','niski') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jednostkiwojskowe`
--

INSERT INTO `jednostkiwojskowe` (`id`, `rodzaj`, `liczebnosc`, `wyposazenie`, `stan_gotowosci`) VALUES
(1, 'Piechota', 5000, 'Karabiny, Hełmy, Kamizelki', 'wysoki'),
(2, 'Czołgi', 200, 'Czołgi podstawowe, Czołgi średnie', 'sredni');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `operacjewojskowe`
--

CREATE TABLE `operacjewojskowe` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `opis` text NOT NULL,
  `data_rozpoczecia` date NOT NULL,
  `data_zakonczenia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `operacjewojskowe`
--

INSERT INTO `operacjewojskowe` (`id`, `nazwa`, `opis`, `data_rozpoczecia`, `data_zakonczenia`) VALUES
(1, 'Operacja Pokój', 'Stabilizacja regionu', '2024-04-01', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `polityki`
--

CREATE TABLE `polityki` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `kategoria` enum('ekonomiczna','społeczna','edukacyjna','zdrowotna','wojskowa') NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `polityki`
--

INSERT INTO `polityki` (`id`, `nazwa`, `kategoria`, `opis`) VALUES
(1, 'Obniżenie podatków', 'ekonomiczna', 'Zmniejszenie podatków dochodowych o 10%'),
(2, 'Powszechna edukacja', 'edukacyjna', 'Zapewnienie darmowej edukacji na poziomie podstawowym i średnim');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `postepybadan`
--

CREATE TABLE `postepybadan` (
  `id` int(11) NOT NULL,
  `projekt_id` int(11) DEFAULT NULL,
  `postep` decimal(5,2) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postepybadan`
--

INSERT INTO `postepybadan` (`id`, `projekt_id`, `postep`, `data`) VALUES
(1, 1, 20.00, '2024-03-01');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `postepybudowy`
--

CREATE TABLE `postepybudowy` (
  `id` int(11) NOT NULL,
  `projekt_id` int(11) DEFAULT NULL,
  `postep` decimal(5,2) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postepybudowy`
--

INSERT INTO `postepybudowy` (`id`, `projekt_id`, `postep`, `data`) VALUES
(1, 1, 50.00, '2024-06-01');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `projektybadawcze`
--

CREATE TABLE `projektybadawcze` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `cel` text NOT NULL,
  `zasoby_potrzebne` text NOT NULL,
  `harmonogram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projektybadawcze`
--

INSERT INTO `projektybadawcze` (`id`, `nazwa`, `cel`, `zasoby_potrzebne`, `harmonogram`) VALUES
(1, 'Badania nad energią słoneczną', 'Rozwój technologii paneli słonecznych', 'Kapitał, Laboratoria', '2024-01-01 do 2024-12-31');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `projektyinfrastrukturalne`
--

CREATE TABLE `projektyinfrastrukturalne` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `typ` enum('drogi','mosty','szkoły','szpitale','inne') NOT NULL,
  `zasoby_potrzebne` text NOT NULL,
  `harmonogram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projektyinfrastrukturalne`
--

INSERT INTO `projektyinfrastrukturalne` (`id`, `nazwa`, `typ`, `zasoby_potrzebne`, `harmonogram`) VALUES
(1, 'Budowa autostrady', 'drogi', 'Beton, Stal, Pracownicy', '2024-01-01 do 2025-01-01');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `staninfrastruktury`
--

CREATE TABLE `staninfrastruktury` (
  `id` int(11) NOT NULL,
  `projekt_id` int(11) DEFAULT NULL,
  `stan` enum('planowana','w budowie','ukończona','do konserwacji') NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staninfrastruktury`
--

INSERT INTO `staninfrastruktury` (`id`, `projekt_id`, `stan`, `data`) VALUES
(1, 1, 'w budowie', '2024-06-01');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `technologie`
--

CREATE TABLE `technologie` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `opis` text NOT NULL,
  `wplyw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technologie`
--

INSERT INTO `technologie` (`id`, `nazwa`, `opis`, `wplyw`) VALUES
(1, 'Energia słoneczna', 'Wykorzystanie energii słonecznej do produkcji energii elektrycznej', 'Zmniejszenie zużycia paliw kopalnych');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wskazniki`
--

CREATE TABLE `wskazniki` (
  `id` int(11) NOT NULL,
  `typ` enum('ekonomiczne','społeczne','polityczne','wojskowe') NOT NULL,
  `wartosc` decimal(10,2) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wydatkiwojskowe`
--

CREATE TABLE `wydatkiwojskowe` (
  `id` int(11) NOT NULL,
  `rodzaj_wydatku` varchar(255) NOT NULL,
  `kwota` decimal(15,2) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wydatkiwojskowe`
--

INSERT INTO `wydatkiwojskowe` (`id`, `rodzaj_wydatku`, `kwota`, `data`) VALUES
(1, 'Zakup sprzętu', 50000000.00, '2024-05-01');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wynikioperacji`
--

CREATE TABLE `wynikioperacji` (
  `id` int(11) NOT NULL,
  `operacja_id` int(11) DEFAULT NULL,
  `wynik` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wynikioperacji`
--

INSERT INTO `wynikioperacji` (`id`, `operacja_id`, `wynik`, `data`) VALUES
(1, 1, 'Sukces', '2024-05-01');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zasoby`
--

CREATE TABLE `zasoby` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `typ` enum('naturalne','rolnicze','przemysłowe','technologiczne') NOT NULL,
  `ilosc` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zasoby`
--

INSERT INTO `zasoby` (`id`, `nazwa`, `typ`, `ilosc`) VALUES
(1, 'Żelazo', 'naturalne', 1000.00),
(2, 'Pszenica', 'rolnicze', 500.00),
(3, 'Stal', 'przemysłowe', 300.00),
(4, 'Komputery', 'technologiczne', 150.00),
(5, 'Bawełna', 'naturalne', 6.00);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `administracja`
--
ALTER TABLE `administracja`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `handel`
--
ALTER TABLE `handel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zasob_id` (`zasob_id`);

--
-- Indeksy dla tabeli `importeksport`
--
ALTER TABLE `importeksport`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `jednostkiwojskowe`
--
ALTER TABLE `jednostkiwojskowe`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `operacjewojskowe`
--
ALTER TABLE `operacjewojskowe`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `polityki`
--
ALTER TABLE `polityki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `postepybadan`
--
ALTER TABLE `postepybadan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projekt_id` (`projekt_id`);

--
-- Indeksy dla tabeli `postepybudowy`
--
ALTER TABLE `postepybudowy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projekt_id` (`projekt_id`);

--
-- Indeksy dla tabeli `projektybadawcze`
--
ALTER TABLE `projektybadawcze`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `projektyinfrastrukturalne`
--
ALTER TABLE `projektyinfrastrukturalne`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `staninfrastruktury`
--
ALTER TABLE `staninfrastruktury`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projekt_id` (`projekt_id`);

--
-- Indeksy dla tabeli `technologie`
--
ALTER TABLE `technologie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wskazniki`
--
ALTER TABLE `wskazniki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wydatkiwojskowe`
--
ALTER TABLE `wydatkiwojskowe`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wynikioperacji`
--
ALTER TABLE `wynikioperacji`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operacja_id` (`operacja_id`);

--
-- Indeksy dla tabeli `zasoby`
--
ALTER TABLE `zasoby`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administracja`
--
ALTER TABLE `administracja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `handel`
--
ALTER TABLE `handel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `importeksport`
--
ALTER TABLE `importeksport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jednostkiwojskowe`
--
ALTER TABLE `jednostkiwojskowe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `operacjewojskowe`
--
ALTER TABLE `operacjewojskowe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `polityki`
--
ALTER TABLE `polityki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `postepybadan`
--
ALTER TABLE `postepybadan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `postepybudowy`
--
ALTER TABLE `postepybudowy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projektybadawcze`
--
ALTER TABLE `projektybadawcze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projektyinfrastrukturalne`
--
ALTER TABLE `projektyinfrastrukturalne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staninfrastruktury`
--
ALTER TABLE `staninfrastruktury`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `technologie`
--
ALTER TABLE `technologie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wskazniki`
--
ALTER TABLE `wskazniki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wydatkiwojskowe`
--
ALTER TABLE `wydatkiwojskowe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wynikioperacji`
--
ALTER TABLE `wynikioperacji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zasoby`
--
ALTER TABLE `zasoby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `handel`
--
ALTER TABLE `handel`
  ADD CONSTRAINT `handel_ibfk_1` FOREIGN KEY (`zasob_id`) REFERENCES `zasoby` (`id`);

--
-- Constraints for table `postepybadan`
--
ALTER TABLE `postepybadan`
  ADD CONSTRAINT `postepybadan_ibfk_1` FOREIGN KEY (`projekt_id`) REFERENCES `projektybadawcze` (`id`);

--
-- Constraints for table `postepybudowy`
--
ALTER TABLE `postepybudowy`
  ADD CONSTRAINT `postepybudowy_ibfk_1` FOREIGN KEY (`projekt_id`) REFERENCES `projektyinfrastrukturalne` (`id`);

--
-- Constraints for table `staninfrastruktury`
--
ALTER TABLE `staninfrastruktury`
  ADD CONSTRAINT `staninfrastruktury_ibfk_1` FOREIGN KEY (`projekt_id`) REFERENCES `projektyinfrastrukturalne` (`id`);

--
-- Constraints for table `wynikioperacji`
--
ALTER TABLE `wynikioperacji`
  ADD CONSTRAINT `wynikioperacji_ibfk_1` FOREIGN KEY (`operacja_id`) REFERENCES `operacjewojskowe` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
