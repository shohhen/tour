-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 20, 2023 at 05:19 PM
-- Server version: 8.0.30
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int NOT NULL,
  `d_id` int NOT NULL,
  `text` text NOT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `datee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `d_id`, `text`, `img`, `datee`) VALUES
(1, 1, 'Switzerland, officially called the Swiss Confederation, is a small country in Central Europe made up of 16,000 square miles of glacier-carved Alps, lakes and valleys', '1.jpg', '2023-02-01'),
(2, 6, 'Japan, one of the world’s most literate and technically advanced nations, is an East Asian archipelago country made up of four primary islands and more than 6,800 others.', '6.jpg', '2023-02-06'),
(3, 2, 'Germany is a highly developed nation that exerts considerable international economic, political, scientific and cultural influence.', '2.jpg', '2022-12-08'),
(4, 7, 'Australia has on the world, both in the past and today, is difficult to overstate. Located in Western Europe, France is one of the world’s oldest countries,', '7.jpg', '2023-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `proffesion` text NOT NULL,
  `comments` text NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `proffesion`, `comments`, `img`) VALUES
(1, 'Olivia', 'Software Developer.', 'I found the service and response of this travel agency to be excellent. Easily 5-stars. My emails were promptly responded to, and everyone showed up when they were supposed to. ', '1.jpg'),
(2, 'Oliver', 'Nurse Practitioner', 'The only reason I\'m not giving this travel agency 5-stars is because our tour of Angkor was very good, but not over-the-top fantastic, so there is room for improvement', '2.jpg'),
(3, 'Amelia', 'Physician Assistant', 'While a nice tour, we found the English of our private guide to only be good, not excellent (I could only understand about 85 to 90% of what he said),', '3.jpg'),
(4, 'Liam', 'Information Security Analyst', 'Like we had lunch in your typical, not very good tourist trap restaurant near the ruins. He did take us a little \"off the beaten path\" at the sites, however, so it was a very enjoyable tour', '4.jpg'),
(5, 'Emma', 'Physical Therapist', 'Both the guide and driver were friendly and courteous, and they constantly plied us with free bottled water (and you\'re going to need that, even in the \"cooler\" winter months). ', '5.jpg'),
(6, 'Noah', 'Financial Manager.', 'The 5 am sunrise at Angkor is a bit ridiculous these days (my favorite shots are of the bugs and hundreds of other tourists snapping photos), but I\'d do it again \"for the experience.\"\r\n\r\n', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `davlat`
--

CREATE TABLE `davlat` (
  `id` int NOT NULL,
  `davlat` text NOT NULL,
  `img` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `davlat`
--

INSERT INTO `davlat` (`id`, `davlat`, `img`) VALUES
(1, 'Switzerland', '1.jpg'),
(2, 'Germany', '2.jpg'),
(3, 'Canada', '3.jpg'),
(4, 'United States', '4.jpg'),
(5, 'Sweden', '5.jpg'),
(6, 'Japan', '6.jpg'),
(7, 'Australia', '7.jpg'),
(8, 'United Kingdom', '8.jpg'),
(9, 'France', '9.jpg'),
(10, 'Denmark', '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paketlar`
--

CREATE TABLE `paketlar` (
  `id` int NOT NULL,
  `d_id` int NOT NULL,
  `nechta odam` int NOT NULL,
  `muddat` varchar(20) NOT NULL,
  `narxi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `paketlar`
--

INSERT INTO `paketlar` (`id`, `d_id`, `nechta odam`, `muddat`, `narxi`) VALUES
(1, 1, 1, '1-kun', 10),
(2, 2, 3, '3-kun', 14),
(3, 5, 5, '5-kun', 18),
(4, 7, 7, '7-kun', 22),
(5, 4, 9, '9-kun', 26);

-- --------------------------------------------------------

--
-- Table structure for table `popular`
--

CREATE TABLE `popular` (
  `id` int NOT NULL,
  `d_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `popular`
--

INSERT INTO `popular` (`id`, `d_id`) VALUES
(1, 2),
(2, 6),
(3, 1),
(4, 7),
(5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `type` text NOT NULL,
  `cost` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `type`, `cost`) VALUES
(1, 'family', 200),
(2, 'friends', 150),
(3, 'alone', 100),
(4, 'workers', 250);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `job` text NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `job`, `img`) VALUES
(1, 'Violet', 'Personal Assistant', '11.jpg'),
(2, 'Henry', 'Transoptation security administration', '12.jpg'),
(3, 'Evelyn', 'Facilities-Assistant', '13.jpg'),
(4, 'Asher', 'Event Travel Coordinator', '14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `login`, `password`, `email`) VALUES
(1, 'admin', '1234567', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `davlat`
--
ALTER TABLE `davlat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paketlar`
--
ALTER TABLE `paketlar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular`
--
ALTER TABLE `popular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `davlat`
--
ALTER TABLE `davlat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `paketlar`
--
ALTER TABLE `paketlar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `popular`
--
ALTER TABLE `popular`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
