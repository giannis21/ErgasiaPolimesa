-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2019 at 08:36 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polimesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE IF NOT EXISTS `albums` (
  `album` varchar(128) NOT NULL,
  `song` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`album`, `song`) VALUES
('Off the wall', 'Dont stop till you get enough'),
('Off the wall', 'Rock with you'),
('Off the wall', 'Working day and night'),
('Off the wall', 'Get on the floor'),
('Thriller', 'Wanna be startin\' something'),
('Thriller', 'Baby be mine'),
('Dangerous', 'Jam'),
('Dangerous', 'Why you wanna trip on me'),
('Dangerous', 'She drives me wild'),
('Dangerous', 'In the closet'),
('Dangerous', 'Dangerous'),
('Dangerous', 'Will you be there'),
('Dangerous', 'Gone too soon'),
('Dangerous', 'Keep the faith'),
('Off the wall', 'Off the wall'),
('Off the wall', 'Girlfriend'),
('Off the wall', 'She is out of my life'),
('Off the wall', 'I cant help it'),
('Off the wall', 'It is the falling love'),
('Off the wall', 'Burn this disco out');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `cid` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `date` text,
  `message` text,
  `postid` int(11) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `name`, `date`, `message`, `postid`, `userid`) VALUES
(21, 'giannis', '16/12/2017 - 12:51:29', 'hellooooo', 60, 0),
(30, 'giannis', '16/12/2017 - 20:48:33', ' yee its a nice idea since the wather is nice', 62, 0),
(49, 'a', '8/1/2018 - 18:35:46', ' me..When is gonna happen?', 65, 21),
(54, 'asd', '10/5/2019 - 23:18:55', ' i fully agree!!', 69, 18);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `name` varchar(128) NOT NULL,
  `url` varchar(767) NOT NULL,
  `if_approved` int(1) NOT NULL,
  PRIMARY KEY (`url`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`name`, `url`, `if_approved`) VALUES
('kostas', 'http://www.wordreference.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `name`, `message`) VALUES
(113, 'giannis', ' heey there');

-- --------------------------------------------------------

--
-- Table structure for table `mjphotos`
--

DROP TABLE IF EXISTS `mjphotos`;
CREATE TABLE IF NOT EXISTS `mjphotos` (
  `name` varchar(128) NOT NULL,
  `details` text NOT NULL,
  `if_approved` int(2) NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mjphotos`
--

INSERT INTO `mjphotos` (`name`, `details`, `if_approved`, `uploaded_by`, `user`) VALUES
('Ï‡Ï„.jpg', ' ddd', 1, 0, 18),
('m1.jpg', ' ', 1, 1, 17),
('michael-jackson-singing-d.jpg', ' ', 1, 0, 22);

-- --------------------------------------------------------

--
-- Table structure for table `mjrec`
--

DROP TABLE IF EXISTS `mjrec`;
CREATE TABLE IF NOT EXISTS `mjrec` (
  `name` varchar(128) NOT NULL,
  `details` text NOT NULL,
  `if_approved` int(1) NOT NULL,
  `uploadedby` int(1) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `userid` int(11) NOT NULL,
  `if_approved` int(1) NOT NULL,
  `name` varchar(200) NOT NULL,
  `orderby` int(1) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `points_user`
--

DROP TABLE IF EXISTS `points_user`;
CREATE TABLE IF NOT EXISTS `points_user` (
  `user` varchar(100) NOT NULL,
  `points` int(4) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `points_user`
--

INSERT INTO `points_user` (`user`, `points`, `user_id`) VALUES
('kostas', 30, 22),
('giannis', 20, 17),
('a', 0, 21),
('c', 0, 24),
('asd', 0, 18);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` text NOT NULL,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `userid`, `content`, `date`, `name`) VALUES
(62, 17, 'what about being in \'this is it\'', '2017-12-17 06:47:53', 'giannis'),
(64, 17, 'dangerous was his first album with 2 millions sales', '2017-12-17 07:11:20', 'giannis'),
(65, 21, ' who wants to come to the biggest tour of mj?', '2017-12-19 07:17:53', 'a'),
(69, 22, ' best singer ive ever seen', '2017-12-26 22:22:06', 'kostas');

--
-- Triggers `posts`
--
DROP TRIGGER IF EXISTS `increase_post_count`;
DELIMITER $$
CREATE TRIGGER `increase_post_count` AFTER INSERT ON `posts` FOR EACH ROW BEGIN
    UPDATE users SET  post_count=post_count+1
         where users.userid=new.userid;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ifadmin` int(2) DEFAULT NULL,
  `post_count` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `username`, `password`, `email`, `ifadmin`, `post_count`) VALUES
(17, 'giannis', 'frag', '123', 'giannisfragoulis21@gmail.com', 1, 0),
(18, 'asd', 'test1', 'test1', 'test1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `details` text NOT NULL,
  `if_approved` int(11) NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `name`, `details`, `if_approved`, `uploaded_by`, `user`) VALUES
(10, 'Michael Jackson - Thriller (Shortened Version).mp4', ' ', 1, 0, 22),
(12, 'the ultimate king.mp4', ' ', 1, 0, 22);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
