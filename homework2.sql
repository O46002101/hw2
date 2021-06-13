-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 13, 2021 alle 17:30
-- Versione del server: 10.4.16-MariaDB
-- Versione PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homework2`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `merchandises`
--

CREATE TABLE `merchandises` (
  `titolo` varchar(50) NOT NULL,
  `immagine` varchar(200) NOT NULL,
  `prezzo` float NOT NULL,
  `brand` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `merchandises`
--

INSERT INTO `merchandises` (`titolo`, `immagine`, `prezzo`, `brand`, `created_at`, `updated_at`) VALUES
('Funko Pop - Lara Croft (Survivor)', 'https://i.imgur.com/uWuyE1q.jpg', 15.99, 'Funko', '2021-05-31 17:58:13', '2021-05-31 17:58:13'),
('Amiibo 3-Pack Animal Crossing', 'https://i.imgur.com/qjZQVNj.png', 39.99, 'Nintendo', '2021-05-31 17:58:13', '2021-05-31 17:58:13'),
('UNO! - Carte da gioco', 'https://i.imgur.com/JKPNhiP.jpg', 11.99, 'Mattel', '2021-05-31 17:58:13', '2021-05-31 17:58:13'),
('Cappello Super Mario Odyssey', 'https://i.imgur.com/ecarcPW.jpg', 19.99, 'Nintendo', '2021-05-31 17:58:13', '2021-05-31 17:58:13'),
('Collana Anello Nathan Drake', 'https://i.imgur.com/rYeKPMI.png', 21.99, 'Uncharted 4', '2021-05-31 17:58:13', '2021-05-31 17:58:13'),
('Lampada LED PlayStation', 'https://i.imgur.com/7M6kY8q.png', 29.99, 'Sony', '2021-05-31 17:58:13', '2021-05-31 17:58:13'),
('T-Shirt Zelda Breath of the Wild', 'https://i.imgur.com/6iq4DT9.png', 15.99, 'Nintendo', '2021-05-31 17:58:13', '2021-05-31 17:58:13'),
('Zaino Pokémon Pikachu', 'https://i.imgur.com/JJ4ElOh.jpg', 35.99, 'Loungefly', '2021-05-31 17:58:13', '2021-05-31 17:58:13'),
('Guanto dell\'Infinito di Thanos', 'https://i.imgur.com/PCj7jNm.jpg', 119.99, 'Hasbro', '2021-05-31 17:58:13', '2021-05-31 17:58:13'),
('Monopoly Super Mario Celebration', 'https://i.imgur.com/AIS7U0Z.png', 29.99, 'Hasbro', '2021-05-31 17:58:13', '2021-05-31 17:58:13'),
('Risk Game of Thrones', 'https://i.imgur.com/kfw4T1Y.png', 59.99, 'HBO', '2021-05-31 17:58:13', '2021-05-31 17:58:13'),
('Tazza Minecraft', 'https://i.imgur.com/vpz8Ibw.png', 12.99, 'Minecraft', '2021-05-31 17:58:13', '2021-05-31 17:58:13'),
('LEGO Harry Potter Torre dell\'Orologio', 'https://i.imgur.com/obniF2K.png', 89.99, 'LEGO', '2021-05-31 17:58:13', '2021-05-31 17:58:13'),
('Action Figure Ellie', 'https://i.imgur.com/KiCXFO8.png', 49.99, 'The Last of Us Part II', '2021-05-31 17:58:13', '2021-05-31 17:58:13');

-- --------------------------------------------------------

--
-- Struttura della tabella `shopping_carts`
--

CREATE TABLE `shopping_carts` (
  `username` varchar(50) NOT NULL,
  `articolo` varchar(100) NOT NULL,
  `quantita` int(11) NOT NULL,
  `prezzo` float NOT NULL,
  `immagine` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `shopping_carts`
--

INSERT INTO `shopping_carts` (`username`, `articolo`, `quantita`, `prezzo`, `immagine`, `id`, `created_at`, `updated_at`) VALUES
('whiteconti91', 'Assassin\'s Creed Valhalla', 1, 59.99, 'https://i.imgur.com/3nJsDon.png', 9, '2021-05-31 17:57:43', '2021-05-31 17:57:43'),
('whiteconti91', 'Biomutant', 1, 60.98, 'https://i.imgur.com/QGVBCcv.png', 10, '2021-05-31 17:57:43', '2021-05-31 17:57:43'),
('whiteconti91', 'Ricarica Netflix 25€', 2, 25, 'https://i.imgur.com/pUi4F6O.png', 11, '2021-05-31 17:57:43', '2021-05-31 17:57:43'),
('barbytrapani', 'Horizon Zero Dawn', 2, 19.99, 'https://i.imgur.com/y0e5ouQ.png', 33, '2021-06-07 14:02:42', '2021-06-07 14:02:43'),
('barbytrapani', 'Marvel\'s Spiderman', 1, 29.99, 'https://i.imgur.com/Z4INNqc.png', 34, '2021-06-07 14:02:47', '2021-06-07 14:02:47'),
('barbytrapani', 'Ricarica Nintendo eShop 25€', 2, 25, 'https://i.imgur.com/pgG1DxA.png', 35, '2021-06-07 14:02:51', '2021-06-13 13:21:05'),
('barbytrapani', 'Zaino Pokémon Pikachu', 1, 35.99, 'https://i.imgur.com/JJ4ElOh.jpg', 36, '2021-06-07 14:02:57', '2021-06-07 14:07:34'),
('barbytrapani', 'UNO! - Carte da gioco', 2, 11.99, 'https://i.imgur.com/JKPNhiP.jpg', 41, '2021-06-13 13:21:17', '2021-06-13 13:21:19'),
('barbytrapani', 'Ratchet and Clank Rift Apart', 2, 79.99, 'https://i.imgur.com/gwhP2ps.png', 43, '2021-06-13 13:21:38', '2021-06-13 13:21:41'),
('barbytrapani', 'Mario Golf Super Rush', 1, 60.99, 'https://i.imgur.com/CGO9WXB.jpg', 44, '2021-06-13 13:22:04', '2021-06-13 13:22:04'),
('maria_poli', 'Life is Strange: True Colors', 1, 59.99, 'https://i.imgur.com/eiW2YxP.png', 45, '2021-06-13 13:27:07', '2021-06-13 13:27:07'),
('maria_poli', 'Action Figure Ellie', 1, 49.99, 'https://i.imgur.com/KiCXFO8.png', 46, '2021-06-13 13:27:15', '2021-06-13 13:27:15'),
('maria_poli', 'Ricarica Netflix 25€', 2, 25, 'https://i.imgur.com/pUi4F6O.png', 47, '2021-06-13 13:27:22', '2021-06-13 13:27:25'),
('maria_poli', 'Spotify - Abbonamento 1 Mese', 1, 10, 'https://i.imgur.com/HEjO5D6.png', 48, '2021-06-13 13:27:28', '2021-06-13 13:27:28'),
('maria_poli', 'Days Gone', 1, 29.99, 'https://i.imgur.com/3WHueNH.png', 50, '2021-06-13 13:29:04', '2021-06-13 13:29:04');

-- --------------------------------------------------------

--
-- Struttura della tabella `subscriptions`
--

CREATE TABLE `subscriptions` (
  `prezzo` float DEFAULT NULL,
  `titolo` varchar(60) NOT NULL,
  `piattaforma` varchar(20) DEFAULT NULL,
  `immagine` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `subscriptions`
--

INSERT INTO `subscriptions` (`prezzo`, `titolo`, `piattaforma`, `immagine`, `id`, `created_at`, `updated_at`) VALUES
(9.99, 'PlayStation Now Card 1 Mese', 'Playstation Network', 'https://i.imgur.com/wvq5Hoo.png', 1, '2021-05-31 17:58:39', '2021-05-31 17:58:39'),
(24.99, 'Playstation Now Card 3 Mesi', 'Playstation Network', 'https://i.imgur.com/PIIB8UK.png', 2, '2021-05-31 17:58:39', '2021-05-31 17:58:39'),
(59.99, 'Playstation Now Card 12 Mesi', 'Playstation Network', 'https://i.imgur.com/7kfrPTE.png', 3, '2021-05-31 17:58:39', '2021-05-31 17:58:39'),
(9.99, 'Playstation Plus Card 1 Mese', 'Playstation Network', 'https://i.imgur.com/UfLPpba.png', 4, '2021-05-31 17:58:39', '2021-05-31 17:58:39'),
(24.99, 'Playstation Plus Card 3 Mesi', 'Playstation Network', 'https://i.imgur.com/BycdRrt.png', 5, '2021-05-31 17:58:39', '2021-05-31 17:58:39'),
(59.99, 'PlayStation Plus Card 12 Mesi', 'Playstation Network', 'https://i.imgur.com/Jvpl26H.png', 6, '2021-05-31 17:58:39', '2021-05-31 17:58:39'),
(15, 'Ricarica Netflix 15€', 'Netflix', 'https://i.imgur.com/swD38MQ.png', 7, '2021-05-31 17:58:39', '2021-05-31 17:58:39'),
(25, 'Ricarica Netflix 25€', 'Netflix', 'https://i.imgur.com/pUi4F6O.png', 8, '2021-05-31 17:58:39', '2021-05-31 17:58:39'),
(50, 'Ricarica Netflix 50€', 'Netflix', 'https://i.imgur.com/INI87fJ.png', 9, '2021-05-31 17:58:39', '2021-05-31 17:58:39'),
(15, 'Ricarica Nintendo eShop 15€', 'Nintendo eShop', 'https://i.imgur.com/vSZuF6u.png', 10, '2021-05-31 17:58:39', '2021-05-31 17:58:39'),
(25, 'Ricarica Nintendo eShop 25€', 'Nintendo eShop', 'https://i.imgur.com/pgG1DxA.png', 11, '2021-05-31 17:58:39', '2021-05-31 17:58:39'),
(10, 'Spotify - Abbonamento 1 Mese', 'Spotify', 'https://i.imgur.com/HEjO5D6.png', 12, '2021-05-31 17:58:39', '2021-05-31 17:58:39'),
(30, 'Spotify - Abbonamento 3 Mesi', 'Spotify', 'https://i.imgur.com/Vdh7qMo.png', 13, '2021-05-31 17:58:39', '2021-05-31 17:58:39'),
(60, 'Spotify - Abbonamento 6 Mesi', 'Spotify', 'https://i.imgur.com/vz2ny84.png', 14, '2021-05-31 17:58:39', '2021-05-31 17:58:39');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nome`, `cognome`, `email`, `created_at`, `updated_at`) VALUES
(1, 'barbytrapani', 'Caramello123_', 'Barbara', 'Trapani', 'barbara.trapani@homework1.it', '2021-05-26 08:20:10', '2021-05-26 08:20:10'),
(2, 'whiteconti91', 'Sesamo91!', 'Bianca', 'Conti', 'bianca-conti91@homework.it', '2021-06-02 14:47:00', '2021-06-02 14:47:00'),
(3, 'maria_poli', 'erbaGialla7+', 'Maria', 'Poli', 'polimaria@homework1.it', '2021-06-13 13:25:35', '2021-06-13 13:25:35');

-- --------------------------------------------------------

--
-- Struttura della tabella `videogames`
--

CREATE TABLE `videogames` (
  `titolo` varchar(50) NOT NULL,
  `anno` int(11) DEFAULT NULL,
  `genere` varchar(20) DEFAULT NULL,
  `prezzo` float NOT NULL,
  `immagine` varchar(200) NOT NULL,
  `nuovi_arrivi` int(11) NOT NULL,
  `preordine` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `videogames`
--

INSERT INTO `videogames` (`titolo`, `anno`, `genere`, `prezzo`, `immagine`, `nuovi_arrivi`, `preordine`, `created_at`, `updated_at`) VALUES
('A Way Out', 2018, 'Avventura', 19.99, 'https://i.imgur.com/R5vxFwu.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Animal Crossing: New Horizons', 2020, 'Simulatore di vita', 49.99, 'https://i.imgur.com/F3vGroW.jpg', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Assassin\'s Creed Valhalla', 2020, 'Action RPG', 59.99, 'https://i.imgur.com/3nJsDon.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Biomutant', 2021, 'Action RPG', 60.98, 'https://i.imgur.com/QGVBCcv.png', 1, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Control', 2019, 'Avventura', 29.99, 'https://i.imgur.com/y88boRC.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Cyberpunk 2077', 2020, 'GdR', 59.99, 'https://i.imgur.com/1rv0gFz.jpg', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Days Gone', 2019, 'Survival horror', 29.99, 'https://i.imgur.com/3WHueNH.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Death Stranding', 2020, 'Avventura', 39.99, 'https://i.imgur.com/6EvxwkW.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Detroit : Become Human', 2018, 'Avventura grafica', 39.99, 'https://i.imgur.com/f0MMMeR.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Far Cry 6', 2021, 'Avventura', 70.99, 'https://i.imgur.com/BZT1BHw.jpg', 0, 1, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Ghost of Tsushima', 2020, 'Avventura', 69.99, 'https://i.imgur.com/mub39WA.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('God of War', 2018, 'Avventura', 29.99, 'https://i.imgur.com/oYjz8VY.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Grand Theft Auto V', 2013, 'Avventura', 49.99, 'https://i.imgur.com/7QOS3mV.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Hitman III', 2021, 'Azione', 49.99, 'https://i.imgur.com/aix4ef4.png', 1, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Horizon Zero Dawn', 2017, 'Action RPG', 19.99, 'https://i.imgur.com/y0e5ouQ.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Life is Strange: True Colors', 2021, 'Avventura grafica', 59.99, 'https://i.imgur.com/eiW2YxP.png', 0, 1, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Little Nightmares II', 2021, 'Platform', 29.99, 'https://i.imgur.com/Vwo7YeH.png', 1, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Man of Medan', 2019, 'Survival horror', 24.99, 'https://i.imgur.com/BNFYd14.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Mario Golf Super Rush', 2021, 'Golf', 60.99, 'https://i.imgur.com/CGO9WXB.jpg', 0, 1, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Mario Kart 8 Deluxe', 2017, 'Simulatore di guida', 59.99, 'https://i.imgur.com/W3cg431.jpg', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Marvel\'s Avengers', 2020, 'Avventura', 29.99, 'https://i.imgur.com/2Ymmphs.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Marvel\'s Spiderman', 2018, 'Avventura', 29.99, 'https://i.imgur.com/Z4INNqc.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Marvel\'s Spiderman: Miles Morales', 2020, 'Avventura', 51.99, 'https://i.imgur.com/YNuTikJ.jpg', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Mass Effect: Legendary Edition', 2021, 'Action RPG', 69.99, 'https://i.imgur.com/d3BLbdB.jpg', 1, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Miitopia', 2021, 'GdR', 49.99, 'https://i.imgur.com/csEloms.jpg', 1, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Monster Hunter Rise', 2021, 'Action RPG', 54.99, 'https://i.imgur.com/BeRkjxQ.jpg', 1, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Necromunda: Hired Gun', 2021, 'Avventura', 40.98, 'https://i.imgur.com/8T5Nm4C.png', 0, 1, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Outriders', 2021, 'Action RPG', 59.99, 'https://i.imgur.com/m7zAclL.png', 1, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Ratchet and Clank Rift Apart', 2021, 'Platform', 79.99, 'https://i.imgur.com/gwhP2ps.png', 0, 1, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Red Dead Redemption II', 2018, 'Avventura', 69.99, 'https://i.imgur.com/QSn5y9X.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Remothered: Broken Porcelain', 2018, 'Survival', 39.99, 'https://i.imgur.com/PcUtn2j.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Remothered: Tormented Fathers', 2020, 'Survival', 39.99, 'https://i.imgur.com/M5ArVSj.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Resident Evil 2', 2019, 'Survival horror', 19.99, 'https://i.imgur.com/PFT7S4V.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Resident Evil Village', 2021, 'Survival horror', 69.99, 'https://i.imgur.com/9DDb2RI.png', 1, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Returnal', 2021, 'Horror psicologico', 66.99, 'https://i.imgur.com/4MvTWwN.png', 1, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Rise of the Tomb Raider', 2015, 'Avventura', 29.99, 'https://i.imgur.com/FiZOgrH.jpg', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Sekiro: Shadows Die Twice', 2019, 'Avventura', 39.99, 'https://i.imgur.com/HAjYgif.jpg', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Shadow of the Tomb Raider', 2018, 'Avventura', 39.99, 'https://i.imgur.com/4u78Bpa.jpg', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Super Mario 3D World', 2021, 'Platform', 59.99, 'https://i.imgur.com/Nf71vV9.jpg', 1, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Super Mario Odyssey', 2017, 'Platform', 59.99, 'https://i.imgur.com/HZe95M6.jpg', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Tell Me Why', 2020, 'Avventura grafica', 29.99, 'https://i.imgur.com/j6JuTWN.jpg', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('The Last of Us Parte II', 2020, 'Survival', 59.99, 'https://i.imgur.com/Lv5qfq9.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('The Medium', 2021, 'Horror psicologico', 39.99, 'https://i.imgur.com/6wRNaor.jpg', 1, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('The Witcher 3 : Wild Hunt', 2015, 'GdR', 39.99, 'https://i.imgur.com/uixBvOM.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Twin Mirror', 2020, 'Avventura grafica', 29.99, 'https://i.imgur.com/otfa3VV.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Uncharted 4: Fine di un ladro', 2016, 'Avventura', 19.99, 'https://i.imgur.com/kkJjuIn.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Until Dawn', 2016, 'Survival horror', 19.99, 'https://i.imgur.com/9qxzFa8.jpg', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55'),
('Watch Dogs: Legion', 2020, 'Avventura', 59.99, 'https://i.imgur.com/49Myr1k.png', 0, 0, '2021-05-31 17:56:55', '2021-05-31 17:56:55');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`articolo`);

--
-- Indici per le tabelle `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `videogames`
--
ALTER TABLE `videogames`
  ADD PRIMARY KEY (`titolo`),
  ADD UNIQUE KEY `titolo` (`titolo`),
  ADD KEY `ind_1` (`titolo`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `shopping_carts`
--
ALTER TABLE `shopping_carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT per la tabella `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
