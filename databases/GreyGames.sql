-- phpMyAdmin SQL Dump
-- version 2.11.9
-- http://www.phpmyadmin.net
--
-- Host: mysql.itn.liu.se
-- Generation Time: Sep 11, 2013 at 11:20 AM
-- Server version: 5.5.31
-- PHP Version: 5.3.3-7+squeeze16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oscjo729`
--

-- --------------------------------------------------------

--
-- Table structure for table `Developer`
--

CREATE TABLE IF NOT EXISTS `Developer` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `developerName` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `Developer`
--

INSERT INTO `Developer` (`ID`, `developerName`) VALUES
(1, 'Blizzard Entertainment'),
(2, 'EA Digital Illusions'),
(3, 'Ubisoft Montreal'),
(4, 'Irrational Games'),
(5, 'EA Canada'),
(6, 'Rockstar North'),
(7, 'Treyarch'),
(8, 'EA The Sims Studio'),
(9, 'Quantic Dream');

-- --------------------------------------------------------

--
-- Table structure for table `Esrb`
--

CREATE TABLE IF NOT EXISTS `Esrb` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `ageRating` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Esrb`
--

INSERT INTO `Esrb` (`ID`, `ageRating`) VALUES
(1, 'EC'),
(2, 'E'),
(3, 'E10+'),
(4, 'T'),
(5, 'M'),
(6, 'AO'),
(7, 'RP');

-- --------------------------------------------------------

--
-- Table structure for table `Game`
--

CREATE TABLE IF NOT EXISTS `Game` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `developerID` int(4) NOT NULL,
  `genreID` int(4) NOT NULL,
  `esrbID` int(4) NOT NULL,
  `publisherID` int(4) NOT NULL,
  `releaseDate` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rating` float(2,2) DEFAULT NULL,
  `story` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `Game`
--

INSERT INTO `Game` (`ID`, `developerID`, `genreID`, `esrbID`, `publisherID`, `releaseDate`, `name`, `rating`, `story`) VALUES
(1, 3, 1, 7, 1, '2012-10-30', 'Assassin''s Creed 3', 0.00, NULL),
(2, 1, 1, 5, 5, '2012-05-15', 'Diablo 3', NULL, NULL),
(3, 2, 2, 5, 2, '2011-10-25', 'Battlefield 3', 0.00, NULL),
(4, 4, 2, 7, 3, '2013-02-26', 'Bioshock Infinite', NULL, NULL),
(5, 5, 3, 2, 2, '2012-09-25', 'FIFA 13', NULL, NULL),
(6, 6, 4, 5, 6, '2008-04-28', 'GTA IV', NULL, NULL),
(7, 7, 2, 5, 4, '2012-11-13', 'Call of Duty: Black Ops II', NULL, NULL),
(8, 1, 1, 4, 5, '2004-11-23', 'World of Warcraft', NULL, NULL),
(9, 8, 3, 4, 2, '2010-10-26', 'The Sims 3', NULL, NULL),
(10, 9, 4, 5, 7, '2010-02-23', 'Heavy Rain', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Genre`
--

CREATE TABLE IF NOT EXISTS `Genre` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `genreName` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Genre`
--

INSERT INTO `Genre` (`ID`, `genreName`) VALUES
(1, 'RPG'),
(2, 'FPS'),
(3, 'Simulation'),
(4, 'Adventure');

-- --------------------------------------------------------

--
-- Table structure for table `Has`
--

CREATE TABLE IF NOT EXISTS `Has` (
  `gameID` int(4) NOT NULL,
  `platformID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Has`
--

INSERT INTO `Has` (`gameID`, `platformID`) VALUES
(1, 1),
(1, 2),
(1, 4),
(1, 7),
(7, 7),
(7, 1),
(7, 2),
(7, 4),
(4, 2),
(4, 4),
(4, 1),
(4, 11),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 11),
(5, 5),
(5, 7),
(5, 10),
(6, 1),
(6, 2),
(6, 4),
(8, 4),
(8, 8),
(9, 2),
(9, 4),
(9, 1),
(9, 3),
(9, 10),
(9, 9),
(9, 8),
(10, 1),
(3, 1),
(3, 2),
(3, 4),
(3, 5),
(3, 10),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `Image`
--

CREATE TABLE IF NOT EXISTS `Image` (
  `imageName` varchar(50) NOT NULL,
  `game_ID` int(4) NOT NULL,
  PRIMARY KEY (`imageName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Image`
--

INSERT INTO `Image` (`imageName`, `game_ID`) VALUES
('assassins-banner-1.jpeg', 1),
('assassins-banner-2.jpeg', 1),
('assassins-banner-3.jpeg', 1),
('assassins-gameplay-1.jpeg', 1),
('assassins-gameplay-2.jpeg', 1),
('assassins-gameplay-3.jpeg', 1),
('assassins-gameplay-4.jpeg', 1),
('assassins-gameplay-5.jpeg', 1),
('assassins-thumbnail.jpg', 1),
('battlefield-banner-1.jpeg', 3),
('battlefield-banner-2.jpeg', 3),
('battlefield-banner-3.jpeg', 3),
('battlefield-gameplay-1.jpeg', 3),
('battlefield-gameplay-2.jpeg', 3),
('battlefield-gameplay-3.jpeg', 3),
('battlefield-gameplay-4.jpeg', 3),
('battlefield-gameplay-5.jpeg', 3),
('battlefield-thumbnail.jpg', 3),
('bioshock-banner-1.jpeg', 4),
('bioshock-banner-2.jpeg', 4),
('bioshock-banner-3.jpeg', 4),
('bioshock-gameplay-1.jpeg', 4),
('bioshock-gameplay-2.jpeg', 4),
('bioshock-gameplay-3.jpeg', 4),
('bioshock-gameplay-4.jpeg', 4),
('bioshock-gameplay-5.jpeg', 4),
('bioshock-thumbnail.jpg', 4),
('blackops-banner-1.jpg', 7),
('blackops-banner-2.jpg', 7),
('blackops-banner-3.jpg', 7),
('blackops-gameplay-1.jpg', 7),
('blackops-gameplay-2.jpg', 7),
('blackops-gameplay-3.jpg', 7),
('blackops-gameplay-4.jpg', 7),
('blackops-gameplay-5.jpg', 7),
('blackops-thumbnail.jpg', 7),
('diablo-banner-1.jpeg', 2),
('diablo-banner-2.jpeg', 2),
('diablo-banner-3.jpeg', 2),
('diablo-gameplay-1.jpeg', 2),
('diablo-gameplay-2.jpeg', 2),
('diablo-gameplay-3.jpeg', 2),
('diablo-gameplay-4.jpeg', 2),
('diablo-gameplay-5.jpeg', 2),
('diablo-thumbnail.jpg', 2),
('fifa-banner-1.jpeg', 5),
('fifa-banner-2.jpeg', 5),
('fifa-banner-3.jpeg', 5),
('fifa-gameplay-1.jpeg', 5),
('fifa-gameplay-2.jpeg', 5),
('fifa-gameplay-3.jpeg', 5),
('fifa-gameplay-4.jpeg', 5),
('fifa-gameplay-5.jpeg', 5),
('fifa-thumbnail.jpg', 5),
('gta-banner-1.jpg', 6),
('gta-banner-2.jpg', 6),
('gta-banner-3.jpg', 6),
('gta-gameplay-1.jpg', 6),
('gta-gameplay-2.jpg', 6),
('gta-gameplay-3.jpg', 6),
('gta-gameplay-4.jpg', 6),
('gta-gameplay-5.jpg', 6),
('gta-thumbnail.jpg', 6),
('heavyrain-banner-1.jpeg', 10),
('heavyrain-banner-2.png', 10),
('heavyrain-banner-3.jpeg', 10),
('heavyrain-gameplay-1.jpeg', 10),
('heavyrain-gameplay-2.jpeg', 10),
('heavyrain-gameplay-3.jpeg', 10),
('heavyrain-gameplay-4.jpeg', 10),
('heavyrain-gameplay-5.jpeg', 10),
('heavyrain-thumbnail.jpg', 10),
('sims-banner-1.jpeg', 9),
('sims-banner-2.jpeg', 9),
('sims-banner-3.jpeg', 9),
('sims-gameplay-1.jpeg', 9),
('sims-gameplay-2.jpeg', 9),
('sims-gameplay-3.jpeg', 9),
('sims-gameplay-4.jpeg', 9),
('sims-gameplay-5.jpeg', 9),
('sims-thumbnail.jpg', 9),
('wow-banner-1.jpg', 8),
('wow-banner-2.jpg', 8),
('wow-banner-3.jpg', 8),
('wow-gameplay-1.jpg', 8),
('wow-gameplay-2.jpg', 8),
('wow-gameplay-3.jpg', 8),
('wow-gameplay-4.jpg', 8),
('wow-gameplay-5.jpg', 8),
('wow-thumbnail.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE IF NOT EXISTS `News` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news` varchar(500) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`id`, `news`, `date`) VALUES
(1, 'Got the basic design of the website. The design is done in Photoshop. We tossed the old idea about making a copy of imdb for games. We decided we don’t like everything about imdb and want to do a site for ourselves. We have a new name, instead of IGDb, we are going to call it Grey Games. And we have come up with a logo.', '2012-10-16'),
(2, 'Working with the database. Done a ER-scheme. ', '2012-10-22'),
(3, 'Actually put the database into mysql. Also put in games and images for all the games.', '2012-10-23'),
(4, 'We have translated most of the photoshop-file into web design. We feel optimistic!', '2012-10-27'),
(5, 'Worked on a layout for the loginscreen, looks slick.', '2012-11-24'),
(6, 'We sat the whole team lining up tables and working on computers side by side all evening. Dividing the work. We got the login to work. Printing all the games in a list. Also much design. ', '2012-12-1'),
(7, 'Continued were we left of yesterday. Got the Playlist and ratings to work and much of the design.', '2012-12-2'),
(8, 'Worked on the rating function , fixing bugs around it.  Hooked up a pretty simple but nice search function.  We also put reviews in the database.', '2012-12-6'),
(9, 'Done much of the remaining work. Design of the profile. Fixing the reviews site and we are pretty much done with the work.', '2012-12-7');

-- --------------------------------------------------------

--
-- Table structure for table `Platform`
--

CREATE TABLE IF NOT EXISTS `Platform` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `platformName` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `Platform`
--

INSERT INTO `Platform` (`ID`, `platformName`) VALUES
(1, 'PS3'),
(2, 'XBOX360'),
(3, 'Wii'),
(4, 'PC'),
(5, 'Mobile'),
(7, 'Wii U'),
(8, 'MAC'),
(9, 'DS'),
(10, '3DS'),
(11, 'Vita');

-- --------------------------------------------------------

--
-- Table structure for table `Playlist`
--

CREATE TABLE IF NOT EXISTS `Playlist` (
  `gameID` int(4) NOT NULL,
  `userID` int(4) NOT NULL,
  PRIMARY KEY (`gameID`,`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Playlist`
--

INSERT INTO `Playlist` (`gameID`, `userID`) VALUES
(0, 0),
(1, 28),
(2, 1),
(2, 29),
(3, 1),
(3, 27),
(4, 1),
(6, 27),
(6, 28),
(7, 27),
(7, 31),
(8, 1),
(8, 27),
(8, 30),
(9, 1),
(10, 0),
(10, 1),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Publisher`
--

CREATE TABLE IF NOT EXISTS `Publisher` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `publisherName` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Publisher`
--

INSERT INTO `Publisher` (`ID`, `publisherName`) VALUES
(1, 'Ubisoft'),
(2, 'Electronic Arts'),
(3, '2K Games'),
(4, 'Activision'),
(5, 'Blizzard Entertainment'),
(6, 'Rockstar Games'),
(7, 'Sony Computer Entertainment');

-- --------------------------------------------------------

--
-- Table structure for table `Rating`
--

CREATE TABLE IF NOT EXISTS `Rating` (
  `gameID` int(4) NOT NULL,
  `userID` int(4) NOT NULL,
  `userRating` float(2,0) NOT NULL,
  PRIMARY KEY (`gameID`,`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Rating`
--

INSERT INTO `Rating` (`gameID`, `userID`, `userRating`) VALUES
(0, 0, 8),
(1, 0, 8),
(1, 1, 7),
(1, 2, 9),
(1, 3, 6),
(1, 4, 8),
(1, 5, 4),
(1, 6, 8),
(1, 7, 6),
(1, 8, 9),
(1, 28, 10),
(1, 31, 9),
(2, 1, 10),
(2, 2, 7),
(2, 3, 6),
(2, 4, 4),
(2, 5, 9),
(2, 6, 4),
(2, 7, 9),
(2, 8, 6),
(2, 9, 6),
(2, 10, 4),
(2, 11, 8),
(2, 12, 9),
(2, 13, 5),
(2, 14, 7),
(2, 27, 6),
(2, 29, 10),
(2, 31, 7),
(3, 1, 5),
(3, 2, 8),
(3, 3, 5),
(3, 4, 8),
(3, 5, 3),
(3, 6, 10),
(3, 7, 7),
(3, 8, 8),
(3, 9, 0),
(3, 10, 5),
(3, 31, 10),
(4, 1, 5),
(4, 2, 5),
(4, 3, 8),
(4, 4, 6),
(4, 5, 7),
(4, 6, 7),
(4, 7, 5),
(4, 8, 10),
(4, 9, 8),
(4, 10, 9),
(4, 11, 5),
(4, 12, 7),
(4, 13, 4),
(4, 14, 6),
(4, 15, 9),
(5, 1, 8),
(5, 2, 6),
(5, 3, 3),
(5, 4, 3),
(5, 5, 8),
(5, 6, 9),
(5, 7, 5),
(5, 8, 9),
(5, 9, 5),
(5, 10, 3),
(5, 28, 10),
(5, 31, 8),
(6, 1, 7),
(6, 2, 6),
(6, 3, 9),
(6, 4, 5),
(6, 5, 8),
(6, 6, 6),
(6, 7, 8),
(6, 8, 10),
(6, 9, 7),
(6, 10, 6),
(6, 11, 7),
(6, 12, 7),
(6, 13, 4),
(6, 14, 9),
(6, 15, 7),
(6, 27, 9),
(6, 28, 7),
(6, 31, 7),
(7, 1, 7),
(7, 2, 5),
(7, 3, 8),
(7, 4, 7),
(7, 5, 3),
(7, 6, 9),
(7, 7, 7),
(7, 8, 4),
(7, 9, 5),
(7, 10, 4),
(7, 27, 8),
(8, 1, 9),
(8, 2, 8),
(8, 3, 8),
(8, 4, 9),
(8, 5, 7),
(8, 6, 4),
(8, 7, 5),
(8, 8, 8),
(8, 9, 10),
(8, 10, 5),
(8, 11, 4),
(8, 12, 8),
(8, 13, 4),
(8, 14, 8),
(8, 15, 10),
(8, 17, 7),
(8, 27, 1),
(8, 30, 8),
(8, 31, 9),
(9, 1, 4),
(9, 2, 3),
(9, 3, 4),
(9, 4, 5),
(9, 5, 6),
(9, 6, 6),
(9, 7, 4),
(9, 8, 7),
(9, 9, 2),
(9, 10, 2),
(10, 1, 5),
(10, 2, 7),
(10, 3, 8),
(10, 4, 7),
(10, 5, 6),
(10, 6, 8),
(10, 7, 4),
(10, 8, 8),
(10, 9, 6),
(10, 10, 10),
(10, 27, 8);

-- --------------------------------------------------------

--
-- Table structure for table `Review`
--

CREATE TABLE IF NOT EXISTS `Review` (
  `gameID` int(4) NOT NULL,
  `userID` int(4) NOT NULL,
  `reviewText` varchar(500) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`gameID`,`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Review`
--

INSERT INTO `Review` (`gameID`, `userID`, `reviewText`, `date`) VALUES
(1, 1, 'Outside it is snowing. On the table there is julmust, and also I have played this game, and it was ok.', '2012-10-09'),
(1, 2, 'Very good game. I liked the graphics a lot. And also I like pie,rhubarb espacially. My dogs name is Gunnar. Thank you for the game.', '2012-10-11'),
(1, 3, 'Assassins Creed is the best game ever! OMGLOL noobs', '2012-10-21'),
(2, 1, 'Diablo 3 is a fast pace game. With much hack and slash. I love this game. I want to marry it. But I cant, I think I would cheat on her with World of Warcraft.', '2012-10-28'),
(2, 2, 'Good Game. Grey Game. GG.', '2012-11-03'),
(2, 3, 'Boring, trying to be like WoW but can''t live up to its standards.', '2012-11-09'),
(3, 1, 'Beautiful visuals, fast paced gameplay and much much more. I love it!', '2012-11-15'),
(3, 2, 'BEST GAME EVER!! YOU HAVE TO BUY IT SO I CAN BEAT YOU IN IT. HAHA.', '2012-11-17'),
(3, 3, 'Best game ever!!!! I has shovel? No, me russia . Me like vodka and sexi ladies . Cheers', '2012-11-24'),
(4, 1, 'I love to dance. Dance is my favorite passion. I have always danced all my life. I really hope you will let me through this audition. It would mean the world to me. What is this? It''s not the dance forum..', '2012-11-30'),
(4, 2, 'Really like this game, it satisfies my needs in different ways.  Yesterday i went downtown and picked up some nice clothes, it was a hot and nice day :). How about you? Have you changed your underwear lately :)?', '2012-10-08'),
(4, 3, 'This game has the best music. I just listen to the music all night. I haven''t even begun playing yet. The menu music is really good! Can''t wait to play the game.', '2012-10-09'),
(5, 1, 'Rly 1337, hate dat there r so many n00bs around tho', '2012-10-24'),
(5, 2, 'Could really use a bear right now. Always drink a beer when I''ve played an awesome game! Thank you EA', '2012-10-29'),
(5, 3, 'I like turtles :)', '2012-10-31'),
(6, 1, 'Visuals: 9/10 Audio: 6/10 Gameplay: 8/10  Really fun to play with astonishing visuals. Why couldn''t this game get released earlier?', '2012-11-08'),
(6, 2, 'Grand Theft Auto! Is there something else that has to be said. Fuck up physics, thanks too this really funny stunts. Okey graphics. Fantastic gameplay. I can sit for hours forgetting about eating, cleaning and sleeping. ', '2012-11-13'),
(7, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '2012-11-14'),
(7, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '2012-11-28'),
(7, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '2012-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `Trailer`
--

CREATE TABLE IF NOT EXISTS `Trailer` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `game_ID` int(4) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `Trailer`
--

INSERT INTO `Trailer` (`ID`, `game_ID`, `link`) VALUES
(1, 1, '-pUhraVG7Ow'),
(2, 1, 'BVUMPrv8oRw'),
(3, 1, 'gZrklEy9ohQ'),
(4, 3, 'N3b2ST-yQ04'),
(5, 3, 'E0_JT_5jXD0'),
(6, 3, 'Bw00sZaOe8c'),
(7, 2, 'de2KlsLnIVU'),
(8, 2, 'nJaK_RwvxCA'),
(9, 2, 'HEvThjiE038'),
(10, 4, '1WDQ4FhslSk'),
(11, 4, 'kEBwKO4RFOU'),
(12, 4, 'bLHW78X1XeE'),
(13, 5, 'J4fMcYKWZqI'),
(14, 5, 'cNnmAlEnUt0'),
(15, 5, '0q0ndI0qs18'),
(16, 6, 'FO25p4JdB1U'),
(17, 6, 'RGzSOpEDJQM'),
(18, 6, 'h66OB0FMgt0'),
(19, 7, 'KQv90T800kw'),
(20, 7, 'x3tedlWs1XY'),
(21, 7, 'pTtsn2Srm3E'),
(22, 8, 'dYK_Gqyf48Y'),
(23, 8, 'Nre9r5t9jAM'),
(24, 8, 'GIhcL8K4shg'),
(25, 9, 'LPnK9JHoddc'),
(26, 9, 'K7xy4GjIpUU'),
(27, 9, 'yB5nTGm0j3Q'),
(28, 10, 'JKPPdgBK3r8'),
(29, 10, 'HyubR1rknBM'),
(30, 10, 'W4C4GK91nr0');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `facebook` varchar(1) NOT NULL,
  `info` varchar(300) NOT NULL,
  `background` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`ID`, `mail`, `password`, `facebook`, `info`, `background`) VALUES
(1, 'o.johnsson@live.se', '1234', '0', 'Jag heter oscar', 'black'),
(2, 'Crusyfied', '', '0', 'Raaarrrr', 'black'),
(3, 'Franklyn', '', '0', 'ramintt1', 'black'),
(4, 'Gustav', '', '0', 'hej', 'black'),
(5, 'knasbrallan', '', '0', 'knasssss', 'black'),
(6, 'hej', '', '0', '', 'black'),
(7, 'zito', '123', '0', 'gdsfgfgerg', 'black'),
(9, 'Hentrik', '123', '0', 'Glass', 'black'),
(22, 'Gustav', '123', '0', 'dfsdfsdf', 'black'),
(23, 'asdasdasda', '123', '0', 'dasdasd', 'black'),
(24, 'asdfasdfsdfs', '123', '0', 'asdasdasd', 'black'),
(25, 'Fille', '123', '0', 'asdasdad', 'black'),
(26, 'Majken', '123', '0', 'dasdasda', 'black'),
(27, 'test@gmail.com', '123', '0', '', 'black'),
(28, 'test@hotmail.com', '123', '0', 'hejhej', 'black'),
(29, 'tjo', 'tjo', '0', '', 'black'),
(30, 'sprazer', 'sprazer', '0', '', 'black'),
(31, 'rambo', 'raminramin', '0', 'ramin', 'black');
