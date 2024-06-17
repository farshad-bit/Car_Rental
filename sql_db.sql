-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Jun 2024 um 14:22
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `car_rental`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `make` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `rentalPrice` decimal(10,2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `cars`
--

INSERT INTO `cars` (`id`, `make`, `model`, `year`, `rentalPrice`, `user_id`) VALUES
(1, 'Toyota', 'Camry', 2022, 50.00, NULL),
(2, 'Honda', 'Civic', 2021, 45.00, 24),
(3, 'Ford', 'Mustang', 2020, 70.00, NULL),
(4, 'Chevrolet', 'Cruze', 2019, 40.00, 21),
(5, 'BMW', 'X5', 2022, 80.00, NULL),
(6, 'Mercedes-Benz', 'C-Class', 2021, 75.00, 23),
(7, 'Audi', 'A4', 2020, 65.00, 22),
(8, 'Volkswagen', 'Golf', 2019, 35.00, 25),
(9, 'Tesla', 'Model S', 2022, 90.00, NULL),
(10, 'Hyundai', 'Elantra', 2021, 40.00, NULL),
(11, 'Kia', 'Sportage', 2020, 55.00, NULL),
(12, 'Subaru', 'Outback', 2019, 60.00, NULL),
(13, 'Mazda', 'CX-5', 2022, 55.00, NULL),
(14, 'Nissan', 'Altima', 2021, 45.00, NULL),
(15, 'Jeep', 'Wrangler', 2020, 70.00, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `id`) VALUES
(1, 'john_doe', 'password123', 'john@example.com', NULL),
(2, 'jane_smith', 'securepass456', 'jane@example.com', NULL),
(3, 'admin', 'adminpass', 'admin@example.com', NULL),
(9, 'sag', '4444', 'dx@dcmc', NULL),
(10, 'far', 'ffsff', 'ff@sss.com', NULL),
(14, 'as', '$2y$10$U6VDCjYWri0Zd83hSJlXa.16./Ih2wKev4GusCfcEtsfB7hamtmFi', 'dx@dcmc.com', NULL),
(15, 'farshid', '$2y$10$SZDferKdTqYVzp4lYVH.f.uFUhexyqqtd8pPvkxHYUhAr.7dGuIie', 'farshid.taleshi1994@icloud.com', NULL),
(16, 'ali', '$2y$10$j7GCeN5a/9x1oaPdjvDcHe4wiFNUkGGMJvdjz8/twFjEahcmtt0TK', 'ali@g.com', NULL),
(17, 'farshad', '$2y$10$foHUbExpzrsjC1SArjxDxOJz4mPgXoS/isAye.PhrvL3l2g84GC4C', 'fa@gm.com', NULL),
(18, 'farshad', '$2y$10$m5zqbvpqFoQl0ngookbVcepgYt5XYhHRqvy3mVN3nNnG.WsmVrvlS', 'ss@22.com', NULL),
(19, 'farshad', 'test123', 'ddd@f.com', NULL),
(20, 'farshad', 'test123', 'fa@gm.com', NULL),
(21, 'farshad', 'test123', 'qq@d.com', NULL),
(22, 'farshad', 'test123', 's@ss.com', NULL),
(23, 'Farshid', '125', 'farshi@g.com', NULL),
(24, 'farshad', 'test123', 'cc@ss.com', NULL),
(25, 'farshad', 'test123', 'ddd@f.com', NULL);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_user_car` (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints der Tabelle `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_car` FOREIGN KEY (`id`) REFERENCES `cars` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
