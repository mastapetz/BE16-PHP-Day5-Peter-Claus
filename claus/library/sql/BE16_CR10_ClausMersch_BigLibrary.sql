-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2022 at 04:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BE16_CR10_ClausMersch_BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `BE16_CR10_ClausMersch_BigLibrary` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `BE16_CR10_ClausMersch_BigLibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `ISBN` varchar(15) NOT NULL,
  `type` varchar(4) NOT NULL,
  `image` varchar(40) NOT NULL,
  `author_first_name` varchar(30) NOT NULL,
  `author_last_name` varchar(30) NOT NULL,
  `publisher_name` varchar(30) NOT NULL,
  `publisher_address` varchar(50) NOT NULL,
  `publish_date` date NOT NULL,
  `short_description` varchar(600) NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `ISBN`, `type`, `image`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `short_description`, `available`) VALUES
(1, 'The Great Gatsby', '9780141194059', 'Book', '62d1676c66e6f.jpg', 'F. Scott', 'Fitzgerald', 'Penguin Books Ltd', 'London, United Kingdom', '2010-11-04', 'These sumptuous new hardback editions mark the 70th anniversary of Fitzgerald\'s death.\r\n\r\nJay Gatsby is the man who has everything. Everybody who is anybody is seen at his glittering parties. Day and night his Long Island mansion buzzes with bright young things drinking, dancing and debating his mysterious character. For Gatsby - young, handsome, fabulously rich - always seems alone in the crowd, watching and waiting, though no one knows what for. Beneath the shimmering surface of his life he is hiding a secret: a silent longing for the one thing that will always be out of his reach.', 1),
(2, 'The Picture of Dorian Gray', '9780141442464', 'Book', '62d16839439a9.jpg', 'Oscar', 'Wilde', 'Penguin Books Ltd', 'London, United Kingdom', '2008-11-06', 'Part of Penguin\'s beautiful hardback Clothbound Classics series, designed by the award-winning Coralie Bickford-Smith, these delectable and collectible editions are bound in high-quality colourful, tactile cloth with foil stamped into the design.\r\n\r\nEnthralled by his own exquisite portrait, Dorian Gray exchanges his soul for eternal youth and beauty. Influenced by his friend Lord Henry Wotton, he is drawn into a corrupt double life; indulging his desires in secret while remaining a gentleman in the eyes of polite society. ', 1),
(3, 'The Puppeteer', '0999295608', 'Book', '62d168d827869.jpg', 'Jostein', 'Gaarder', 'Mizan publishing', 'Jakarta, Indonesia', '2012-07-19', 'Jakop jacobsen is his name. Ordinary men with mediocre lives. His closest friend is pelle skrindo, a pirate who likes to come and go as he pleases. Her hobbies are attending funerals, and her dear pennies are agnes. To agnes, she recounts the various funerals she followed, as well as impressions about the families of the deceased.Jakop lives alone. He loves to share stories. Honey, he only has pelle as a shared friend. But pelle denied it more than he listened to it.', 0),
(4, 'The Diary of a Bookseller', '9781781258637', 'Book', '62d168f9a845f.jpg', 'Shaun', 'Bythell', 'Profile Books', 'London, Vereinigtes Königreich', '2018-09-27', 'Love, Nina meets Black Books: a wry and hilarious account of life in Scotland\'s biggest second-hand bookshop and the band of eccentrics and book-obsessives who work there\r\n\'The Diary Of A Bookseller is warm (unlike Bythell\'s freezing-cold shop) and funny, and deserves to become one of those bestsellers that irritate him so much.\' (Mail on Sunday)\r\n\r\n\'Utterly compelling and Bythell has a Bennett-like eye for the amusing eccentricities of ordinary people ... I urge you to buy this book and please, even at the risk of being insulted or moaned at, buy it from a real live bookseller.\' ', 1),
(5, 'Das Buch', '9782371190795', 'Book', '62d1696566b44.jpg', 'Line', 'Hoven', 'Schöffling', 'Frankfurt am Main, Germany', '2016-09-06', 'Gehen fünfhundert Jahre Buchkultur demnächst zu Ende? Löst das E-Book das gedruckte Buch ab, so schnell und vollständig, wie einst Auto und Traktor das Pferd ablösten? Und was wird dann aus unserer Lesekultur?Burkhard Spinnen, Autor und Leser, stellt sich Fragen, die wir uns heute alle stellen. Doch statt zu argumentieren, statt pro oder contra Buch zu plädieren, lässt er hier Revue passieren, was ihm und uns das gedruckte Buch bedeutet, wie es unseren Lebensalltag prägt. ', 1),
(6, 'Storytelling Workbook for Beginners', '9781736213506', 'Book', '62d1697ded981.jpg', 'B. Rain', 'Bennett', 'Flying Flounder Publishing', 'New York City, United States', '2020-11-22', 'This is a blank-lined journal with prompts to help you create and structure your stories and content. You can see the prompts in the ', 0),
(7, 'Salt Water', '9781945796753', 'Book', '62d16999a612d.jpg', 'Brianna', 'Wiest', 'Thought Catalog', 'New York City, United States', '2017-12-04', '\'Salt Water\' is Brianna Wiest\'s debut poetry book. Gracefully touching on the issues of self-awareness, wholeness and what it takes to reconcile with yourself, her prose artfully illustrates how healing helps us to actualize our latent potential and bring us into a greater awe for the universe that we are so irrevocably connected to.', 1),
(8, 'The Butterfly Lovers', 'B000VXVYWY', 'CD', '62d16a4264f5d.jpg', 'Gil', 'Shaham', 'Canary Classics', 'New York City, United States', '2007-10-01', 'TCHAIKOVSKY: VIOLIN CONCERTO, OP.35 - CHEN, HE: BUTTERFLY LOVERS, VIOLIN CONCERTOGil Shaham, Singapore Symphony Orchestra & Lan Shui10 SONGS - 1 STUNDE UND 4 MINUTEN ', 1),
(9, 'Sad music for sad days', '133701101', 'CD', '62d16a584c485.jpg', 'Dollar', 'Gill', 'Dollar Gill', 'Patiala, India', '2020-04-28', 'Boy dealing with Anxiety with sad music CD.', 1),
(10, 'Friends: Season 1', 'B003TNW02G', 'DVD', '62d1667a782eb.jpg', 'Marta', 'Kaufmann', 'WarnerBrothers', 'Burbank, United States', '2010-07-06', 'One of television\'s top-ranked series and the recipient of numerous Emmy Award and Golden Globe Award nominations, \"Friends\" is a smart, sophisticated comedy that looks into the hearts and minds of a group of friends living in New York.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
