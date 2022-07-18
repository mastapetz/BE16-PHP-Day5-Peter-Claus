-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 05:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be16_cr10_aigner_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be16_cr10_aigner_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be16_cr10_aigner_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `ISBN` varchar(17) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `author_fName` varchar(20) NOT NULL,
  `author_lName` varchar(25) NOT NULL,
  `publisher_Name` varchar(25) NOT NULL,
  `publisher_Address` varchar(100) NOT NULL,
  `publish_Date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `image`, `ISBN`, `description`, `type`, `author_fName`, `author_lName`, `publisher_Name`, `publisher_Address`, `publish_Date`, `status`) VALUES
(1, 'Horus Heresy: Horus Rising', '62d2dece4b35f.jpg', '978-1849707435', 'Promoted to Warmaster, the idealistic Horus tries to carry out the Emperors grand design.', 'book', 'Dan', 'Abnett', 'GamesWorkshop', 'Nottingham NG7 2WS', '2018-08-28', 1),
(2, 'Xenos(Eisenhorn)', '62d2dedb17852.jpg', ' 978-1849708722', 'When he finally corners an old foe, Inquisitor Gregor Eisenhorn is drawn into a sinister conspiracy.', 'book', 'Dan', 'Abnett', 'GamesWorkshop', 'Nottingham NG7 2WS', '2015-06-15', 1),
(3, 'Nightlords', '62d2deec8a458.jpg', ' 978-1849706124', 'Driven by their hatred of the False Emperor, the Night Lords stalk the shadows of the galaxy,...', 'book', 'Aaron', 'Dembski-Bowden', 'GamesWorkshop', 'Nottingham NG7 2WS', '2014-05-22', 0),
(4, 'The Colour of Magic: Discworld', '62d2def9c3433.jpg', ' 978-1473205328', 'On a world supported on the back of a giant turtle (sex unknown), a gleeful, explosive, wickedly eccentric expedition sets out.', 'book', 'Terry', 'Pratchett', 'Gollancz', 'London EC4Y 0DZ', '2014-08-07', 1),
(5, 'Programmieren lernen fur Dummies', '62d2df0db573f.jpg', ' 978-3527718511', 'Haben Sie auch schon mal den Wunsch verspürt, programmieren zu können?', 'book', 'Daniel', 'Lorig', 'Wiley-VCH', '69469 Weinheim', '2021-06-29', 0),
(6, 'SQL Handbuch für Einsteiger', '62d2df19c2f74.jpg', '978-3966450713', 'In diesem Buch erhalten Sie eine umfassende, praxisorientierte Einführung in SQL beginnend mit den Grundlagen, ohne dass dabei Vorkenntnisse notwendig wären.', 'book', 'Paul', 'Fuchs', 'BMU-Verlag', '10243 Berlin', '2020-04-02', 1),
(7, 'Angular: Programmieren für Einsteiger)', '62d2df24ec666.jpg', ' 978-3966451055', 'Mit diesem Buch lernen Sie praxisnah die notwendigen Grundlagen im Bereich TypeScript sowie die Zusammenhänge der einzelnen Bausteine von Angular kennen. ', 'book', 'Sebastian', 'Conrad', 'BMU-Verlag', '10243 Berlin', '2029-09-02', 0),
(8, 'Git Handbuch für Einsteiger', '62d2df30546d2.jpg', ' 978-3966451208', 'In diesem Buch lernen Sie mit Git zu arbeiten. Zu Beginn erhalten Sie alle wichtigen Informationen über Git und lernen die Software zu installieren. ', 'book', 'Paul', 'Fuchs', 'BMU-Verlag', '10243 Berlin', '2021-08-13', 1),
(9, 'Constantine', '62d2df3c00545.jpg', ' 7321921389429', 'John Constantine kam mit einer Gabe auf die Welt, die er verabscheut: Er kann Halbblut-Engel und -Dämonen erkennen, die sich als Menschen tarnen und in unserer Welt leben. ', 'dvd', 'Francis', 'Lawrence', 'Warner-Brothers', 'London EC4Y 0DZ', '2006-06-14', 1),
(10, 'HTML5 und CSS3 für Einsteiger', '62d2df4d38842.jpg', ' 978-3966450379', 'Mit diesem Buch lernen Sie HTML5 und CSS3 von Grund auf kennen, um eigene moderne Webseiten zu erstellen, ohne dass hierbei Vorkenntnisse nötig wären.?', 'book', 'Paul', 'Fuchs', 'BMU-Verlag', '10243 Berlin', '2019-06-21', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
