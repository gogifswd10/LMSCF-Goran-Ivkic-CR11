-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 25. Jul 2020 um 16:46
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr11_goran_ivkic_petadoption`
--
CREATE DATABASE IF NOT EXISTS `cr11_goran_ivkic_petadoption` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr11_goran_ivkic_petadoption`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `hobbies` varchar(255) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `pets`
--

INSERT INTO `pets` (`id`, `image`, `name`, `age`, `description`, `hobbies`, `size`, `address`, `zip`, `city`) VALUES
(1, 'img/kitty.jpg', 'Kitty', 1, 'Frisky, feisty, funny, affectionate — a 6-month-old kitten is basically a tiny toddler wrapped in fur. If a 6-month-old has recently joined your household, learn how you can help him navigate his way through kittenhood. We’re sharing what you need to know about a 6 month-old kitten when it comes to health, mental well-being, behavior, diet and grooming.', 'sleeping, eating, poo, ...', 'small', 'Opernring 8', 1010, 'Wien'),
(2, 'img/puppy.jpg', 'Puppy', 1, 'You have probably witnessed what we call “The Puppy Craze”! Your precious little pup will be calm and sleepy one minute, and will suddenly flip a switch to level insanity. Your puppy will run around the living room in circles, bouncing up and down on furniture and act more or less like a lunatic for a good 5 minutes. Don’t sweat it, your puppy is not possessed.', 'Football, Boxing, MMA, ...', 'small', 'Praterstrasse 32', 1020, 'Vienna'),
(3, 'img/dalmatinac.jpg', 'Jure', 2, 'As your pup grows up into puppy adolescence it is extremely crucial to provide exercise and stimulation on a daily basis. Behavioral problems such as chewing, digging and barking often begin to occur at this age (roughly 6-10 months) and the most effective way to stem these negative behaviors is by providing adequate physical and mental stimulation.', 'Football, Boxing, Cycling, ...', 'large', 'Mladena Grdovica 54', 1010, 'Split '),
(4, 'img/doberman.jpg', 'Bismarck', 3, 'As your pup grows up into puppy adolescence it is extremely crucial to provide exercise and stimulation on a daily basis. Behavioral problems such as chewing, digging and barking often begin to occur at this age (roughly 6-10 months) and the most effective way to stem these negative behaviors is by providing adequate physical and mental stimulation. If you don’t have time to take your pup to the park or on long walks, consider enrolling in puppy daycare to get that energy released while you are ', 'Football, Biting, Cycling, ...', 'large', 'Zehetbauergasse 54', 1110, 'Vienna'),
(5, 'img/tiger.jpg', 'Tiger', 3, 'As your pup grows up into puppy adolescence it is extremely crucial to provide exercise and stimulation on a daily basis. Behavioral problems such as chewing, digging and barking often begin to occur at this age (roughly 6-10 months) and the most effective way to stem these negative behaviors is by providing adequate physical and mental stimulation. If you don’t have time to take your pup to the park or on long walks, consider enrolling in puppy daycare to get that energy released while you are ', 'Football, Volleyball, Cycling, ...', 'small', 'Zehetbauergasse 1', 1110, 'Vienna'),
(6, 'img/sivonja.jpg', 'Sivonja', 3, 'As your pup grows up into puppy adolescence it is extremely crucial to provide exercise and stimulation on a daily basis. Behavioral problems such as chewing, digging and barking often begin to occur at this age (roughly 6-10 months) and the most effective way to stem these negative behaviors is by providing adequate physical and mental stimulation. If you don’t have time to take your pup to the park or on long walks, consider enrolling in puppy daycare to get that energy released while you are ', 'Music, Volleybal, Tennis, ...', 'small', 'Wiedner Guertel 12', 1040, 'Vienna'),
(7, 'img/zebra.jpg', 'Partizan', 9, 'As your pup grows up into puppy adolescence it is extremely crucial to provide exercise and stimulation on a daily basis. Behavioral problems such as chewing, digging and barking often begin to occur at this age (roughly 6-10 months) and the most effective way to stem these negative behaviors is by providing adequate physical and mental stimulation. If you don’t have time to take your pup to the park or on long walks, consider enrolling in puppy daycare to get that energy released while you are ', 'Music, Volleybal, Jogging, ...', 'large', 'Dessert 12', 1040, 'Harare'),
(8, 'img/adler.jpg', 'Whitey', 10, 'As your pup grows up into puppy adolescence it is extremely crucial to provide exercise and stimulation on a daily basis. Behavioral problems such as chewing, digging and barking often begin to occur at this age (roughly 6-10 months) and the most effective way to stem these negative behaviors is by providing adequate physical and mental stimulation. If you don’t have time to take your pup to the park or on long walks, consider enrolling in puppy daycare to get that energy released while you are ', 'Music, Volleybal, Jogging, ...', 'large', 'Sierra Nevada 2', 1040, 'Arizona'),
(9, 'img/turtle.jpg', 'Michelangelo', 100, 'As your pup grows up into puppy adolescence it is extremely crucial to provide exercise and stimulation on a daily basis. Behavioral problems such as chewing, digging and barking often begin to occur at this age (roughly 6-10 months) and the most effective way to stem these negative behaviors is by providing adequate physical and mental stimulation. If you don’t have time to take your pup to the park or on long walks, consider enrolling in puppy daycare to get that energy released while you are ', 'Swimmingpool, Cocaine, Rock, Formula One, ...', 'medium', 'Plitvice 2', 1070, 'Karlovac'),
(10, 'img/marder.jpg', 'Bukephalos', 12, 'As your pup grows up into puppy adolescence it is extremely crucial to provide exercise and stimulation on a daily basis. Behavioral problems such as chewing, digging and barking often begin to occur at this age (roughly 6-10 months) and the most effective way to stem these negative behaviors is by providing adequate physical and mental stimulation. If you don’t have time to take your pup to the park or on long walks, consider enrolling in puppy daycare to get that energy released while you are ', 'Swimmingpool, Cocaine, Rock, Formula One, ...', 'medium', 'Los Vegasos 5', 1020, 'Zagreb'),
(11, 'img/horoz.jpg', 'Ismet Horoz', 11, 'As your pup grows up into puppy adolescence it is extremely crucial to provide exercise and stimulation on a daily basis. Behavioral problems such as chewing, digging and barking often begin to occur at this age (roughly 6-10 months) and the most effective way to stem these negative behaviors is by providing adequate physical and mental stimulation. If you don’t have time to take your pup to the park or on long walks, consider enrolling in puppy daycare to get that energy released while you are ', 'Chicks, Cocaine, Rock, Popcorn, ...', 'medium', 'Reeper Bahn 18', 20354, 'St.Pauli'),
(12, 'img/ara.jpg', 'Adolf', 9, 'As your pup grows up into puppy adolescence it is extremely crucial to provide exercise and stimulation on a daily basis. Behavioral problems such as chewing, digging and barking often begin to occur at this age (roughly 6-10 months) and the most effective way to stem these negative behaviors is by providing adequate physical and mental stimulation. If you don’t have time to take your pup to the park or on long walks, consider enrolling in puppy daycare to get that energy released while you are ', 'NSDAP, Politics, Boehse Onkelz, ...', 'medium', 'Braune Gasse 88', 5280, 'Braunau'),
(13, 'img/test.jpg', 'Test', 9, 'As your pup grows up into puppy adolescence it is extremely crucial to provide exercise and stimulation on a daily basis. Behavioral problems such as chewing, digging and barking often begin to occur at this age (roughly 6-10 months) and the most effective way to stem these negative behaviors is by providing adequate physical and mental stimulation. If you don’t have time to take your pup to the park or on long walks, consider enrolling in puppy daycare to get that energy released while you are ', 'Test, Test, Test Test, ...', 'small', 'Test Gasse 8', 5280, 'Test'),
(23, 'img/horoz.jpg', 'Tebra', 9, 'Chicken', 'Fudbal', 'medium', 'Beograd BB', 11000, 'Brcko'),
(33, 'img/adler.jpg', 'Kopao', 7, 'oraaaao', 'letenje', 'large', 'Nebo', 14, 'nbmo');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `status` enum('user','admin','superadmin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `status`) VALUES
(1, 'Goran Ivkic', 'gogi@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'user'),
(2, 'admin', 'admin@admin.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'admin'),
(3, 'superadmin', 'superadmin@admin.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'superadmin'),
(4, 'testo testovic', 'test@test.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'user');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
