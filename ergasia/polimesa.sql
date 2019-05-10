-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2018 at 05:32 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `albums` (
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

CREATE TABLE `comments` (
  `cid` int(3) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `date` text,
  `message` text,
  `postid` int(11) DEFAULT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `name`, `date`, `message`, `postid`, `userid`) VALUES
(5, 'giannis', '12/12/2017 - 20:43:21', ' sdfsdfsdf', 59, 0),
(21, 'giannis', '16/12/2017 - 12:51:29', 'hellooooo', 60, 0),
(26, 'lefos', '16/12/2017 - 13:14:34', 'asasasasasasas', 60, 0),
(27, 'lefos', '16/12/2017 - 13:16:33', 'asasas', 60, 0),
(28, 'lefos', '16/12/2017 - 13:17:5', 'asasas', 60, 0),
(29, 'lefos', '16/12/2017 - 18:16:12', ' heelo theree', 61, 0),
(30, 'giannis', '16/12/2017 - 20:48:33', ' yee its a nice idea since the wather is nice', 62, 0),
(43, 'a', '24/12/2017 - 11:58:52', 'best mj sonty', 64, 21),
(47, 'kostas', '6/1/2018 - 14:21:16', 'kostas edo', 62, 22),
(48, 'lefos', '6/1/2018 - 14:23:22', ' lefos edo magkes', 62, 16),
(49, 'a', '8/1/2018 - 18:35:46', ' me..When is gonna happen?', 65, 21),
(53, 'kostas', '13/1/2018 - 12:19:31', 'asdasd', 69, 22);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `name` varchar(128) NOT NULL,
  `url` varchar(767) NOT NULL,
  `if_approved` int(1) NOT NULL
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

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `name`, `message`) VALUES
(113, 'giannis', ' heey there'),
(114, 'giannis', 'how are ya'),
(115, 'lefos', ' dsfdsfgs'),
(116, 'lefos', 'dsfs'),
(117, 'lefos', 'df'),
(118, 'lefos', 's'),
(119, 'lefos', 'fd'),
(120, 'lefos', 'sf'),
(121, 'lefos', 'f'),
(122, 'giannis', ' asdsadasdasdasd'),
(123, 'giannis', 'asdadasdasasdasdasdasdasdasddsasdasadasdasd'),
(124, 'kostas', 'assssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `mjphotos`
--

CREATE TABLE `mjphotos` (
  `name` varchar(128) NOT NULL,
  `details` text NOT NULL,
  `if_approved` int(2) NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mjphotos`
--

INSERT INTO `mjphotos` (`name`, `details`, `if_approved`, `uploaded_by`, `user`) VALUES
('m1.jpg', ' ', 1, 1, 17),
('michael-jackson-singing-d.jpg', ' ', 1, 0, 22);

-- --------------------------------------------------------

--
-- Table structure for table `mjrec`
--

CREATE TABLE `mjrec` (
  `name` varchar(128) NOT NULL,
  `details` text NOT NULL,
  `if_approved` int(1) NOT NULL,
  `uploadedby` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `userid` int(11) NOT NULL,
  `if_approved` int(1) NOT NULL,
  `name` varchar(200) NOT NULL,
  `orderby` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `points_user`
--

CREATE TABLE `points_user` (
  `user` varchar(100) NOT NULL,
  `points` int(4) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `points_user`
--

INSERT INTO `points_user` (`user`, `points`, `user_id`) VALUES
('kostas', 30, 22),
('giannis', 20, 17),
('a', 0, 21),
('c', 0, 24);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` text NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `userid`, `content`, `date`, `name`) VALUES
(61, 16, ' sdfsdfsdf', '2017-12-14 23:23:42', 'lefos'),
(62, 17, 'what about being in \'this is it\'', '2017-12-17 06:47:53', 'giannis'),
(64, 17, 'dangerous was his first album with 2 millions sales', '2017-12-17 07:11:20', 'giannis'),
(65, 21, ' who wants to come to the biggest tour of mj?', '2017-12-19 07:17:53', 'a'),
(69, 22, ' best singer ive ever seen', '2017-12-26 22:22:06', 'kostas');

--
-- Triggers `posts`
--
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

CREATE TABLE `users` (
  `userid` int(3) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ifadmin` int(2) DEFAULT NULL,
  `post_count` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `username`, `password`, `email`, `ifadmin`, `post_count`) VALUES
(17, 'giannis', 'frag', '123', 'giannisfragoulis21@gmail.com', 1, -3),
(18, 'asd', 'test1', 'test1', 'test1', 0, 0),
(19, 'sd', 'sd', 'sd', 'asd', 0, 0),
(20, 'test', 'test5', 'test5', 'test5', 0, 2),
(21, 'a', 'a', 'a', 'a', 0, 1),
(22, 'kostas', 'kostas', 'kostas', 'kostas@gmail.com', 0, -1),
(23, 'f', 'f', 'f', 'f', 0, 3),
(24, 'c', 'c', 'c', 'c', 1, 0),
(25, 'dd', 'dd', 'dd', 'dd@gmail.com', 0, 0),
(26, 'giannis@gmail.com', NULL, '123', '', NULL, 0),
(27, 'frag', NULL, '123', 'citymenidi@gmail.com', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `details` text NOT NULL,
  `if_approved` int(11) NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `name`, `details`, `if_approved`, `uploaded_by`, `user`) VALUES
(10, 'Michael Jackson - Thriller (Shortened Version).mp4', ' ', 1, 0, 22),
(12, 'the ultimate king.mp4', ' ', 1, 0, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`url`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mjphotos`
--
ALTER TABLE `mjphotos`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `mjrec`
--
ALTER TABLE `mjrec`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `points_user`
--
ALTER TABLE `points_user`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
