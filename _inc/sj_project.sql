-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 10:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sj_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `message` text NOT NULL,
  `acceptance` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `acceptance`) VALUES
(56, 'Test', 'test@test.sk', 'Toto je testovacia správa', 1),
(57, 'Test 2 ', 'test2@test.sk', 'Toto je druhá testovacia správa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `image`, `name`, `text`) VALUES
(1, '/Projekt/assets/img/gallery1.avif', 'Portfólio 1 ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in facilisis sapien. Ut dapibus eros eros, non tempor massa facilisis eu. Donec sit amet rhoncus metus. Proin eu urna a ipsum congue posuere. Vivamus vitae placerat ex. In gravida mollis efficitur. Donec tempus magna viverra tortor vulputate aliquam. Sed volutpat urna vel risus malesuada, id placerat erat efficitur. Quisque elementum eros ac leo eleifend, eget viverra est efficitur.'),
(2, '/Projekt/assets/img/gallery2.jpg', 'Portfólio 2 ', 'Quisque id gravida metus. Etiam at orci leo. Fusce fermentum a tellus sed eleifend. Praesent et massa non mi interdum auctor ut id augue. Fusce hendrerit euismod tincidunt. Maecenas consectetur placerat imperdiet. Maecenas semper commodo viverra. Pellentesque non mollis nulla, et volutpat sapien. In ac convallis mauris. Praesent bibendum augue ut hendrerit ultrices. Maecenas sagittis neque id justo viverra, eget interdum odio finibus. Aliquam ac feugiat ipsum. Vestibulum luctus vulputate magna eget cursus. Suspendisse consequat diam libero, in ultricies odio porttitor sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec volutpat feugiat orci eu dignissim.'),
(3, '/Projekt/assets/img/gallery3.jpeg', 'Portfólio 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in facilisis sapien. Ut dapibus eros eros, non tempor massa facilisis eu. Donec sit amet rhoncus metus. Proin eu urna a ipsum congue posuere. Vivamus vitae placerat ex. In gravida mollis efficitur. Donec tempus magna viverra tortor vulputate aliquam. Sed volutpat urna vel risus malesuada, id placerat erat efficitur. Quisque elementum eros ac leo eleifend, eget viverra est efficitur.'),
(4, '/Projekt/assets/img/gallery4.webm', 'Portfólio 4', 'Quisque id gravida metus. Etiam at orci leo. Fusce fermentum a tellus sed eleifend. Praesent et massa non mi interdum auctor ut id augue. Fusce hendrerit euismod tincidunt. Maecenas consectetur placerat imperdiet. Maecenas semper commodo viverra. Pellentesque non mollis nulla, et volutpat sapien. In ac convallis mauris. Praesent bibendum augue ut hendrerit ultrices. Maecenas sagittis neque id justo viverra, eget interdum odio finibus. Aliquam ac feugiat ipsum. Vestibulum luctus vulputate magna eget cursus. Suspendisse consequat diam libero, in ultricies odio porttitor sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec volutpat feugiat orci eu dignissim.'),
(5, '/Projekt/assets/img/gallery5.webm', 'Portfólio 5', 'Quisque id gravida metus. Etiam at orci leo. Fusce fermentum a tellus sed eleifend. Praesent et massa non mi interdum auctor ut id augue. Fusce hendrerit euismod tincidunt. Maecenas consectetur placerat imperdiet. Maecenas semper commodo viverra. Pellentesque non mollis nulla, et volutpat sapien. In ac convallis mauris. Praesent bibendum augue ut hendrerit ultrices. Maecenas sagittis neque id justo viverra, eget interdum odio finibus. Aliquam ac feugiat ipsum. Vestibulum luctus vulputate magna eget cursus. Suspendisse consequat diam libero, in ultricies odio porttitor sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec volutpat feugiat orci eu dignissim.'),
(6, '/Projekt/assets/img/gallery6.avif', 'Portfólio 6', 'Quisque id gravida metus. Etiam at orci leo. Fusce fermentum a tellus sed eleifend. Praesent et massa non mi interdum auctor ut id augue. Fusce hendrerit euismod tincidunt. Maecenas consectetur placerat imperdiet. Maecenas semper commodo viverra. Pellentesque non mollis nulla, et volutpat sapien. In ac convallis mauris. Praesent bibendum augue ut hendrerit ultrices. Maecenas sagittis neque id justo viverra, eget interdum odio finibus. Aliquam ac feugiat ipsum. Vestibulum luctus vulputate magna eget cursus. Suspendisse consequat diam libero, in ultricies odio porttitor sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec volutpat feugiat orci eu dignissim.'),
(7, '/Projekt/assets/img/gallery7.jpg', 'Portfólio 7', 'Quisque id gravida metus. Etiam at orci leo. Fusce fermentum a tellus sed eleifend. Praesent et massa non mi interdum auctor ut id augue. Fusce hendrerit euismod tincidunt. Maecenas consectetur placerat imperdiet. Maecenas semper commodo viverra. Pellentesque non mollis nulla, et volutpat sapien. In ac convallis mauris. Praesent bibendum augue ut hendrerit ultrices. Maecenas sagittis neque id justo viverra, eget interdum odio finibus. Aliquam ac feugiat ipsum. Vestibulum luctus vulputate magna eget cursus. Suspendisse consequat diam libero, in ultricies odio porttitor sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec volutpat feugiat orci eu dignissim.');
-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `answer`) VALUES
(1, 'Foundation', 'Arsenal was founded in 1886 by a master gunsmith in Woolwich, a suburb of London.The club has an impressive history of success, including numerous national and international tournament wins.'),
(2, 'Achievements', 'English Premier League: Arsenal have won 13 English league titles.
                FA Cup (FA Cup): The club holds the record for the most FA Cup wins, having won the tournament 14 times.
                League Cup: Arsenal also have several titles in the FA Cup.'),
(3, 'Stadium', 'Emirates Stadium: Emirates Stadium is Arsenals home arena. It is located in North London and has a capacity of over 60,000 people.'),
(4, 'Fans and popularity', 'Arsenal has a huge global fan base and is one of the most popular clubs in the world.
                The club is also known for its youth academy, which has produced many talented players.'),
(5, 'Importance', 'Arsenal are an integral part of English football history and continue to be one of the most recognisable clubs in the world, both on the pitch and culturally.
                This is just a brief overview of Arsenal, a club that has a rich history and continues to be one of the leading clubs in world football.');
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`) VALUES
(1, 'admin@admin.sk', 'admin', 1),
(2, 'user@user.sk', 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
