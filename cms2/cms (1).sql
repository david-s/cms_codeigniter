-- phpMyAdmin SQL Dump
-- version 3.4.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2011 at 05:19 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0b372522d10b492ac04770c45f2ec12c', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322730581, ''),
('fe59af94553d7cf0a46507605feb956a', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322730581, ''),
('f66591697dfc54bec4ef658281db40db', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322730585, ''),
('daa2ee44279732cd0d8e3d8b9ed2c2b1', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322730586, ''),
('37d112ba1867c49fcc359dd3cb94c97a', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731192, ''),
('2a19848ccc2a4854ecb505c72b2fa182', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731194, ''),
('5c0cf592b8e46c6f4ef47dad5001351e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731198, ''),
('0610fb7d3b43ca90a45b00a08195fc0f', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731202, ''),
('3cda36f68672ecbeb3becf91198cb234', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731204, ''),
('a5e9c8138929b1cdd66eb300362c4064', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731268, ''),
('1a23f0edfda6c4e1848ee26890d3ff7e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731269, ''),
('322e1810fc22cc4dcfcc6786207e6ec5', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731352, ''),
('4e418996e1897ccd341390d1b20843b6', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731353, ''),
('a57abb20eb6511f31e6bb06504d2851c', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731355, ''),
('52dee128ba42908830aae6f0c92afe41', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731357, ''),
('54726d09fa743fe8ed99824ced4786bb', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731536, ''),
('6032541f3929e4a3f5ea3d4a71cbcbe6', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731885, ''),
('db337f4a6f7e3117eebdcadf4f3eac5e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731886, ''),
('018065e9521765c52820cb70889f37e4', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731886, ''),
('72ec9459b44aab782d62990a1d38b46a', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731888, ''),
('5aa2687924a13bad09a3565fe90ba5e2', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731895, ''),
('403445577659c3bf5ed5dbd693635e36', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731896, ''),
('148a23f99c67348fb4fadc42b3ba809f', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731902, ''),
('eb7713b9de45d584761ec2faacffb3dd', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322731989, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"1";s:8:"username";s:8:"ubielabs";s:9:"logged_in";s:4:"true";}'),
('97e027cdf2cebd0ccdb7d878d9971905', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732033, ''),
('a11a1e197354588a566b9a1e41855d5e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732034, ''),
('c39afa70cb8aa92b34d8873273f17ef3', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732207, ''),
('e295344762ed7b318c15b40678fb760b', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732208, ''),
('24f5883c7cd5dc2791c83759370020df', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732209, ''),
('987a251361e8f3b0796d60e5ab045254', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732219, ''),
('058270cfb345846b54b7ca920d06c431', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732223, ''),
('a7f8de743c82e9d69e80956762206537', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732434, ''),
('8aea9e2d86950acfd912f70a7852fc30', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732446, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:6:"davids";s:12:"is_logged_in";b:1;}'),
('7b20d1226ca091dbfb7bc9f9bf494ce2', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732446, ''),
('d4d370fc5be3b95fd5874d7a6c5fd7ee', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732451, ''),
('b20c9d1c2d99712c01db7298ab67e0be', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732459, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:6:"davids";s:12:"is_logged_in";b:1;}'),
('218c4c0184b1a0ebcf6af7322892292d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732459, ''),
('1eba43ffeae45f14fe8ee00eb41a04a3', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732462, ''),
('7a1850117d35e36d4edf833888e96cab', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732478, ''),
('71f09a1130f4fd4f05e3eee3c0706fcc', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732483, ''),
('1e5688d5516e75b935d1fe33aeb0696c', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732500, ''),
('7ce5ce4c3fb5a9116c855a2dbe9cda7e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732525, ''),
('9b51919a4e7ada45e9600dac4fd2d9fc', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732526, ''),
('d7903284963cd0a7a33a61356f5123eb', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732530, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:4:"test";s:12:"is_logged_in";b:1;}'),
('33ad2a02b233f9f1c240daaafd0946af', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732531, ''),
('8d3bf0e814e3358ee9728a6e41e5463e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) App', 1322732535, '');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `page` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `content`, `page`) VALUES
(6, 'david', '<p>david</p>\n<p>stewart</p>\n<p>&nbsp;</p>\n<p>jj</p>', NULL),
(5, 'buzzlklklklk', 'dkf vkwejrg ie jrgiejrgouhetgo uheouhouehouehb', NULL),
(9, 'kljlkj', 'jlkjlkjlk', NULL),
(8, 'ghghg dkdkd', 'lkj lkjl klk jlkj lkj lkj', NULL),
(10, 'testme one time', 'hkhkjh kjh kjh kjh kjh kjh k', NULL),
(11, 'testme one time', 'hkhkjh kjh kjh kjh kjh kjh k', NULL),
(12, 'my blog hghg', '<p>	khkjhkj h kkjh kjh kjh kjhk  kjhk jh kjhk  kjhk kjh kjh kj kj kjh kjh khkjhgjhg jjgf</p>', NULL),
(13, 'this is memebers', '1010101918383838', NULL),
(14, 'khghjgj gjh jhg jhg jhg j', 'hjg jhg jhgjhg jhg jg', NULL),
(15, 'jg jhgjhgjh hdgfd gfdgf', 'dgfd gfd g gd gfd fgd fg', NULL),
(16, 'new one babay ', 'jlkjj hkjh jhg jhg jhg j', NULL),
(28, 'hello ', '<p>\n	khkjhkj h kkjh kjh kjh kjhk &nbsp;kjhk jh kjhk &nbsp;kjhk kjh kjh kj kj kjh kjh khkjhgjhg jjgf</p>\n', '0'),
(29, 'NEW CK TEST', '<p>\n	test test test ;kjkj lkj &nbsp; test</p>\n<p>\n	&nbsp;</p>\n<p>\n	test&nbsp;</p>\n<p>\n	&nbsp;</p>\n<p>\n	test this</p>\n', '0'),
(30, 'test tinymce', '<p>jlkj kjar</p>\n<p>qer</p>\n<p>wth</p>\n<p>wrt</p>\n<p>hw</p>\n<p>yj</p>', '0');

-- --------------------------------------------------------

--
-- Table structure for table `fresh`
--

CREATE TABLE IF NOT EXISTS `fresh` (
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `fresh`
--

INSERT INTO `fresh` (`title`, `content`, `id`) VALUES
('welcome to zest fresh', '<p>\n	lk;lk ;lk ;lk ;jlkjkljhklhg ljh kjhg jlhg jkhgjkhg jkhg jkhg jkjkjkj &nbsp; &nbsp;gghh</p>\n', 13),
('about', '<p>\n	about us&nbsp;</p>\n', 19),
('test1', '<p>\n	;lk;k ljk l;h kljhg jhg jhg jhg jghjg kjg ;lk;lk;lk;k &nbsp; hhhhhh gggg</p>\n', 16),
('home', '<p>\n	<img alt="" src="/ckfinder/userfiles/images/earn_reward_points.jpg" style="width: 220px; height: 190px; " />hklhjk jh klh klj&nbsp;</p>\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img`) VALUES
(12, 'img13.jpg'),
(17, 'img23.jpg'),
(18, 'img32.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `email_address`, `username`, `password`) VALUES
(1, 'david', 'stewart', 'studio@buzzagency.co.uk', 'davids', 'cbda8f7609867e51e05aec7056d4eb9a'),
(2, 'david', 'stewart', 'studio@buzzagency.co.uk', 'test', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page`, `description`, `link`) VALUES
(6, 'home', 'home page', NULL),
(7, 'about', 'about page', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `gallery` int(2) DEFAULT NULL,
  `metakey` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`gallery`, `metakey`) VALUES
(1, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
