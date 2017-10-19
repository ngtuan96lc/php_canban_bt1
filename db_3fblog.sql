-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2017 at 07:48 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_3fblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(4) NOT NULL COMMENT '0 - Unread; 1 - Read; 2 - Deleted;'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Nguyen Hoang Tuan', 'ngtuan96lc@gmail.com', '01664787528', 'hello guys', '2017-09-28 07:16:38', '0000-00-00 00:00:00', 2),
(2, 'Trịnh Thị Hoài Anh', 'trinhthihoaianh96@gmail.com', '0987403507', 'Tôi yêu bạn !Tôi yêu bạn !Tôi yêu bạn !Tôi yêu bạn !Tôi yêu bạn !Tôi yêu bạn !Tôi yêu bạn !Tôi yêu bạn !Tôi yêu bạn !Tôi yêu bạn !Tôi yêu bạn !Tôi yêu bạn !Tôi yêu bạn !Tôi yêu bạn !', '2017-09-28 07:12:12', '0000-00-00 00:00:00', 2),
(3, 'Quyen', 'quyen96lc@gmail.com', '09763186', 'Asgdja khfjshdfh sdfhjds', '2017-09-28 07:08:52', '0000-00-00 00:00:00', 1),
(4, 'Trần Quỳnh Dư', 'tranquynhdu96@gmail.com', '0988278879', 'Tôi có 1 câu hỏi: mong admin trả lời giúp. \r\nLàm thế nào để học được JavaScript :( ?? \r\nTôi tiếp xúc với JS từ 2 năm trước, từ đó đến nay T không thể nắm vững đc nó, cứ một thời gian bẵng đi là quên hết ... ', '2017-09-28 08:07:54', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_cover` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(4) NOT NULL COMMENT '0 - Draft; 1 - Active; 2 - Delete;',
  `author_id` tinyint(4) NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `sub_title`, `body`, `post_cover`, `created_at`, `updated_at`, `status`, `author_id`, `picture`) VALUES
(1, '2222222222', '232123', 'sdfsdfsdfsdf', '', '2017-09-28 15:16:13', '0000-00-00 00:00:00', 1, 1, '1.jpg'),
(2, 'test time 2', 'Teach me 2!', '<p> \r\n fuck ! 2\r\n</p>', '', '2017-09-28 15:16:23', '0000-00-00 00:00:00', 1, 1, '2.jpg'),
(3, 'Science has not yet mastered prophecy', 'We predict too much for the next year and yet far too little for the next ten.', '<p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>\r\n\r\n<p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>', '', '2017-09-28 15:10:17', '0000-00-00 00:00:00', 1, 1, '3.jpg'),
(4, 'Reaching for the Stars', 'We predict too much for the next year and yet far too little for the next ten.', '<p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>', '', '2017-09-28 15:09:07', '0000-00-00 00:00:00', 1, 1, '4.jpg'),
(5, 'Failure is not an option\r\n', 'Many say exploration is part of our destiny, but it’s actually our duty to future generations.', '<p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That''s how I felt seeing the Earth for the first time. I could not help but love and cherish her.\r\n</p>\r\n<p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.</p>', '', '2017-09-28 15:10:17', '0000-00-00 00:00:00', 1, 1, '5.jpg'),
(27, 'Quá hay', 'Đã fixx đc lỗi', 'mừng rơi nước mắt :v', '', '2017-09-28 17:25:34', '0000-00-00 00:00:00', 1, 1, 'devil_may_cry_4__nero_by_devilkazz-d6cnofj.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(4) NOT NULL COMMENT '0 - Pending; 1 - Active; 2 - Delete'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `created_at`, `updated_at`, `status`) VALUES
(1, 'admin', 'c51af1913c8f8d906be9bfcd6e49cb3d', 'Nguyễn Hoàng Tuấn', '2017-09-22 16:13:45', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
