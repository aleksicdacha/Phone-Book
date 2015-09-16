-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2015 at 01:44 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(5) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `phone_number`, `address`, `comment`) VALUES
(1, 'Brianna', 'Kerr', '(639) 351-5368', '2 Easter Dr, Portlethen, Aberdeen, Aberdeenshire A', 'Lorem ipsum pretium faucibus.'),
(2, 'Tanner', 'King', '(280) 432-8451', '19A Loirston Rd, Cove Bay, Aberdeen, Aberdeen City', 'Habitant aliquam sit justo tortor litora erat dapibus augue platea.'),
(3, 'Rachell', 'Knox', '(485) 665-6563', 'Unnamed Road, Aberdeenshire, UK', 'Ante tortor libero.'),
(4, 'Mercy', 'Lambert', '(222) 164-5224', 'Unnamed Road, Aberdeen, Aberdeenshire AB12 5XN, UK', 'In lacus.'),
(5, 'Estrella', 'Langdon', '(534) 094-7969', 'Blackness Ave, Aberdeen, Aberdeen City AB12 3PG, U', 'Luctus nisl sodales venenatis.'),
(6, 'Damon', 'Lawrence', '(654) 327-3874', '1 Buchanan Pl, Aberdeen, Aberdeen City AB12 5EX, U', 'Elit taciti.'),
(7, 'Gil', 'Lee', '(228) 359-0419', '15 Old Inn Rd, Findon, Portlethen, Aberdeen, Aberd', 'Purus rutrum sapien lorem cubilia iaculis velit interdum bibendum.'),
(8, 'Chieko', 'Lewis', '(500) 310-5367', 'Craigshaw Cres, Aberdeen, Aberdeen City AB12, UK', 'Netus neque ad etiam placerat.'),
(9, 'Darron', 'Lyman', '(912) 868-3720', '35 Claymore Ave, Portlethen, Aberdeen, Aberdeenshi', 'Nostra sem volutpat donec sagittis.'),
(10, 'Marvin', 'MacDonald', '(888) 449-3099', 'Deeside Brae, Aberdeen, Aberdeen City AB12 5TQ, UK', 'Sagittis integer etiam cubilia dapibus.'),
(11, 'Yajaira', 'Mackay', '(609) 996-2895', '57 Allison Cl, Cove Bay, Aberdeen, Aberdeen City A', 'Pellentesque sollicitudin ante tellus ad quam.'),
(12, 'Thao', 'Mackenzie', '(363) 765-8299', 'Bruntland Rd, Portlethen, Aberdeen, Aberdeenshire ', 'Fusce semper.'),
(13, 'Rina', 'MacLeod', '(881) 455-2457', 'Broad St, Aberdeen, Aberdeen City AB10 1LP, UK', 'Turpis semper eros iaculis.'),
(14, 'Shizuko', 'Manning', '(416) 391-9773', '35 Findon Ness, Cove Bay, Aberdeen, Aberdeen City ', 'Aliquet hendrerit dapibus neque eget.'),
(15, 'Denny', 'Marshall', '(257) 647-4279', '41 Castle Terrace, Aberdeen, Aberdeen City AB11 5E', 'Nisl convallis ipsum facilisis dui vestibulum habitant.'),
(16, 'Prudence', 'Martin', '(796) 978-7931', 'Schoolhill Rd, Portlethen, Aberdeen, Aberdeenshire', 'Tempus.'),
(17, 'Lucina', 'Mathis', '(195) 261-9964', '10 Sinclair Cres, Cove Bay, Aberdeen, Aberdeen Cit', 'Quisque sollicitudin ligula aptent orci.'),
(18, 'Royce', 'May', '(229) 754-8139', '152 Faulds Gate, Aberdeen, Aberdeen City AB12 5RD,', 'Sed.'),
(19, 'Shakia', 'McDonald', '(507) 061-9373', '4 Willow Wynd, Portlethen, Aberdeen, Aberdeenshire', 'Nibh maecenas porttitor etiam cras.'),
(20, 'Alejandrina', 'McLean', '(630) 033-4555', '20 Upperkirkgate, Aberdeen, Aberdeen City AB10 1BA', 'Eros nam aptent luctus vehicula elementum dui.'),
(21, 'Malika', 'McGrath', '(454) 843-4596', 'Balquharn Dr, Portlethen, Aberdeen, Aberdeenshire ', 'Lorem ipsum class scelerisque ac.'),
(22, 'Granville', 'Metcalfe', '(467) 170-5858', 'Landykes Avenue, Cove Bay, Aberdeen, Aberdeen City', 'Eget malesuada vehicula dapibus accumsan mollis in mauris quam iaculis.'),
(23, 'Hilario', 'Miller', '(807) 087-6137', '54 Cairngorm Cres, Aberdeen, Aberdeen City AB12, U', 'Cursus est per ultricies elementum etiam.'),
(24, 'Dominque', 'Mills', '(887) 912-0370', '123 Cairngorm Dr, Aberdeen, Aberdeen City AB12 5PP', 'Risus aenean lectus.'),
(25, 'Rodrigo', 'Mitchell', '(708) 474-8047', '2 Robertson Smith Ct, Aberdeen, Aberdeen City AB12', 'Ullamcorper.'),
(26, 'Sandee', 'Morgan', '(469) 522-8284', '4 Lochinch Dr, Cove Bay, Aberdeen, Aberdeen City A', 'Vulputate eleifend libero.'),
(27, 'Luciana', 'Morrison', '(498) 257-8829', 'Badentoy Cres, Aberdeen, Aberdeenshire AB12 4YT, U', 'Nisi sem.'),
(28, 'Dolores', 'Murray', '(502) 208-3339', '17 Cairnvale Cres, Aberdeen, Aberdeen City AB12 5J', 'Aenean gravida facilisis fermentum consequat quisque sed in aptent conubia porttitor aliquet.'),
(29, 'Gaylord', 'Nash', '(944) 915-5158', 'Unnamed Road, Aberdeen, Aberdeenshire AB12 5XL, UK', 'Nam curabitur conubia massa volutpat.'),
(30, 'Rubin', 'Newman', '(394) 927-2977', 'Moss Rd, Aberdeen, Aberdeen City AB12 3GW, UK', 'Ut volutpat lectus vivamus torquent convallis ultrices facilisis aptent eget inceptos vitae.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
