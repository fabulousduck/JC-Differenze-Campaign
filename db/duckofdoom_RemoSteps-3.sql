-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2016 at 02:35 PM
-- Server version: 10.0.22-MariaDB-0+deb8u1
-- PHP Version: 5.6.14-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `duckofdoom_RemoSteps`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_usrs`
--

CREATE TABLE IF NOT EXISTS `cms_usrs` (
`id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `upwd` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_usrs`
--

INSERT INTO `cms_usrs` (`id`, `uname`, `upwd`) VALUES
(1, 'admin', '1c46c18d116e5ff76b026510b54e603660c6954b'),
(2, 'admin', '1c46c18d116e5ff76b026510b54e603660c6954b');

-- --------------------------------------------------------

--
-- Table structure for table `Content`
--

CREATE TABLE IF NOT EXISTS `Content` (
`id` int(1) NOT NULL,
  `content_ENG_Title` varchar(255) NOT NULL,
  `content_NED_Title` varchar(255) NOT NULL,
  `content_ESP_Title` varchar(255) NOT NULL,
  `content_SRB_Title` varchar(255) NOT NULL,
  `spacer` varchar(11) NOT NULL,
  `Content_ENG` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Content_NED` varchar(255) NOT NULL,
  `Content_ESP` varchar(255) NOT NULL,
  `Content_SRB` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Text_align` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Font_size` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `Partof` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Content`
--

INSERT INTO `Content` (`id`, `content_ENG_Title`, `content_NED_Title`, `content_ESP_Title`, `content_SRB_Title`, `spacer`, `Content_ENG`, `Content_NED`, `Content_ESP`, `Content_SRB`, `Text_align`, `Font_size`, `img`, `Partof`, `link`) VALUES
(58, 'Discover how.', 'Ontdek hoe', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'Discover How', 'Content_NED_ph', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', 'headerButton', 'none'),
(60, 'Content_ENG_ph', 'content_NED_Title_Title_ph', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'Become Independant ', 'Word zelfstandig', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', 'quote', 'none'),
(70, 'Who are we?', 'Wie zijn wij?', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'We are Remosteps. Our goal is by using this service to help people with disabilities to become as independent as possible.\r\n\r\nThe app consists of a roadmap to get through the day. The app is available for download in the Appstore and Google Play Store.', 'Remosteps is een hulpdienst zodat mensenop afstand geholpen kunnen worden met hun dagelijkse taken.', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', 'info', 'none'),
(71, 'What are we?', 'Wat zijn wij?', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'We are an app that helps people with disabbilities trough their day, with the help of real care takers and specialists. They stand ready to help you for max 18 hours a day!!', 'Wij zijn een dienst die bestaat uit een app die mensen helpt bij de dagelijkse taken van hun dag, met de hulp van verzorgers en specialisten. ', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', 'info', 'none'),
(72, 'Why are we?', 'Waarom Remosteps?', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'Remosteps is a company that helps people with disabilities. We do this by using a roadmap, so it gets a lot easier to do things.\r\n\r\nOur Mission is to  let those people become independent. Because they can help themselves as far as possible.', 'Remontes helpt mensen die niet zelfstandig hun dagelijkse taken kunnen uitvoeren. Doormiddel van een dagplanning die te zien is op de app kunnen mensen zelfstandig hun dagelijkse dingen uitvoeren. De posters die voorheen aan de muur hingen kunnen weg dan.', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', 'info', 'none'),
(73, 'Where are we?', 'Waar kunt u ons vinden?', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'We are available in the apple app store and the google play store. You could ask your care taker or specialist if he supports this app. If he does not you could introduce him this app to make his and most important your life easier!', 'De begeleiders omgeving kunt u op deze site vinden door u aan te melden bij de dienst of in te loggen. De app voor de eindgebruiker kunt u in de App store of Google Play store vinden en downloaden.', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', 'info', 'none'),
(74, 'What the care taker sees ', 'content_NED_Title_Title_ph', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'The care taker sees a calender. In this calender, the care taker can set appointments for the user. The care taker can also add tasks, he or she will put the task in steps. So that the user can follow these steps and complete the task without any trouble.', 'Content_NED_ph', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', 'preview', 'none'),
(75, 'What the user sees', 'content_NED_Title_Title_ph', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'The user sees the tasks or appointments that the care taker put in. The user follows the steps from the tasks and this way he always has the help he needs, where ever he goes.', 'Content_NED_ph', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', 'preview', 'none'),
(80, 'About', 'content_NED_Title_Title_ph', 'Content_ESP_ph', 'content_SRB_Title_Title_ph', 'spacer', 'About', 'Content_NED_ph', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', 'navigation', '#nav1'),
(81, 'Preview', 'content_NED_Title_Title_ph', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'Preview', 'Content_NED_ph', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', 'navigation', '#nav2'),
(83, 'Sign Up', 'content_NED_Title_Title_ph', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'Sign Up', 'Content_NED_ph', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', 'navigation', '#nav3'),
(85, 'Content_ENG_ph', 'content_NED_Title_Title_ph', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'Privacy Policy', 'Content_NED_ph', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', 'footer', 'privacypolicy.php'),
(86, 'Disclaimer', 'content_NED_Title_Title_ph', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'Terms of use', 'Content_NED_ph', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', 'footer', 'termsofuse.php'),
(87, 'Disclaimer', 'content_NED_Title_Title_ph', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'Disclaimer', 'Content_NED_ph', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', 'footer', 'disclaimer.php'),
(90, 'Content_ENG_ph', 'content_NED_Title_Title_ph', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'Support', 'Content_NED_ph', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', 'footer', 'link'),
(92, 'Languages', 'Content_NED_ph', 'Languages', 'Content_SRB_ph', 'spacer', 'Languages', 'Languages', 'Languages', 'Languages', '', 14, '', 'navigation', '#languages'),
(95, 'content_ENG_Title_Title_ph', 'content_NED_Title_Title_ph', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'Content_ENG_ph', 'Content_NED_ph', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', '', 'link'),
(96, 'content_ENG_Title_Title_ph', 'content_NED_Title_Title_ph', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'Content_ENG_ph', 'Content_NED_ph', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', '', 'link'),
(97, 'content_ENG_Title_Title_ph', 'content_NED_Title_Title_ph', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'Content_ENG_ph', 'Content_NED_ph', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', '', 'link'),
(98, 'content_ENG_Title_Title_ph', 'content_NED_Title_Title_ph', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'Content_ENG_ph', 'Content_NED_ph', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', '', 'link'),
(99, 'content_ENG_Title_Title_ph', 'content_NED_Title_Title_ph', 'content_ESP_Title_Title_ph', 'content_SRB_Title_Title_ph', 'spacer', 'Content_ENG_ph', 'Content_NED_ph', 'Content_ESP_ph', 'Content_SRB_ph', '', 14, '', '', 'link');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_usrs`
--
ALTER TABLE `cms_usrs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Content`
--
ALTER TABLE `Content`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms_usrs`
--
ALTER TABLE `cms_usrs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Content`
--
ALTER TABLE `Content`
MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
