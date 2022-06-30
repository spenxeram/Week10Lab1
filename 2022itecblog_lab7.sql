-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2022 at 12:46 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2022itecblog_lab22`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `reply_id` int(11) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `post_id`, `reply_id`, `date_created`) VALUES
(1, 'This is a test commment', 1, 3, NULL, '2022-05-26 14:08:29'),
(2, 'This is another comment', 1, 3, NULL, '2022-05-26 14:11:10'),
(3, 'Wow it works!', 1, 3, NULL, '2022-05-26 14:11:17'),
(4, 'Here is your first comment', 1, 1, NULL, '2022-05-26 14:48:18'),
(5, 'HI I\'m SAM 10 , nice to meet you!', 9, 3, NULL, '2022-05-26 14:48:46'),
(6, 'Nice material design', 9, 4, NULL, '2022-05-26 14:49:18'),
(7, 'I taught AI at TDT', 9, 5, NULL, '2022-05-26 14:49:31'),
(8, 'This is the most popular post~', 1, 3, NULL, '2022-05-26 15:02:17'),
(9, 'Whtz konichi mean?', 10, 3, NULL, '2022-05-27 11:40:01'),
(10, 'Cringe post bruh', 10, 5, NULL, '2022-05-27 11:41:24'),
(11, 'AI is lame, try Inkscape\r\n', 1, 5, NULL, '2022-05-29 08:46:38'),
(12, 'Hello world\r\n', 1, 9, NULL, '2022-05-29 13:20:44'),
(13, 'regreg', 1, 9, NULL, '2022-05-29 13:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_img` varchar(255) NOT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `user_id`, `post_img`, `date_created`, `date_updated`) VALUES
(1, 'Hello World', 'A typical Hello World post', 1, 'images/itec_blog_628decc193df9.jpeg', '2022-05-25 15:45:53', NULL),
(2, 'Hello World', 'A typical Hello World post', 1, 'images/itec_blog_628df03d103a4.jpeg', '2022-05-25 16:00:45', NULL),
(3, 'Konichi wa World', '&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;\r\n&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;', 1, 'images/itec_blog_628df26139e79.jpeg', '2022-05-25 16:09:53', NULL),
(4, 'Xin Chao ', '&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;\r\n\r\n&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;\r\n\r\n&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;', 1, 'images/itec_blog_628df28c500ec.jpeg', '2022-05-25 16:10:36', NULL),
(5, 'Hi this is Sam!', '&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;\r\n\r\n&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;\r\n\r\n\r\n&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;', 9, 'images/itec_blog_628df83a81ba6.png', '2022-05-25 16:34:50', NULL),
(6, 'Riding the bus~', 'Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC\r\n&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;', 9, 'images/itec_blog_628dfc938a019.jpeg', '2022-05-25 16:53:23', NULL),
(7, 'Lets add a post with no rating', 'Dont rate this post please!', 9, 'images/itec_629051ef13901.gif', '2022-05-27 11:22:07', NULL),
(8, 'No admin voet', 'No admin voetNo admin voetNo admin voetNo admin voetNo admin voetNo admin voetNo admin voetNo admin voetNo admin voetNo admin voetNo admin voetNo admin voetNo admin voetNo admin voetNo admin voetNo admin voetNo admin voetNo admin voet', 1, 'images/itec_62921aba45233.jpeg', '2022-05-28 19:51:06', NULL),
(9, 'This is post 9', 'This is post 9This is post 9This is post 9This is post 9This is post 9This is post 9This is post 9This is post 9This is post 9This is post 9This is post 9This is post 9This is post 9', 1, 'images/itec_62921f4f1bf02.png', '2022-05-28 20:10:39', NULL),
(10, 'what is this', 'SELECT posts.id, SUM(rating_value = 0) as thumbs_down, SUM(rating_value = 1) as thumbs_up, sum(CASE When ratings.user_id = 7 Then 1 Else 0 End) as user_reviewed,\r\nsum(CASE When ratings.user_id = 7 Then rating_value Else 0 End) as user_reviewed_value \r\n    FROM ratings \r\n	LEFT JOIN posts ON posts.id = ratings.content_id\r\n    GROUP BY content_id;', 1, 'images/itec_62921faec4cfe.png', '2022-05-28 20:12:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating_value` int(1) DEFAULT NULL,
  `content_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content_type` varchar(25) NOT NULL DEFAULT 'posts',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rating_value`, `content_id`, `user_id`, `content_type`, `date_created`) VALUES
(12, 0, 3, 9, 'posts', '2022-05-27 09:43:17'),
(11, 1, 1, 9, 'posts', '2022-05-27 09:43:12'),
(10, 1, 5, 1, 'posts', '2022-05-26 19:49:44'),
(8, 0, 4, 1, 'posts', '2022-05-26 16:54:44'),
(9, 0, 6, 1, 'posts', '2022-05-26 19:02:52'),
(7, 1, 2, 1, 'posts', '2022-05-26 16:21:53'),
(13, 1, 4, 9, 'posts', '2022-05-27 09:43:24'),
(14, 1, 5, 9, 'posts', '2022-05-27 09:43:30'),
(15, 1, 6, 9, 'posts', '2022-05-27 09:43:36'),
(16, 1, 3, 10, 'posts', '2022-05-27 11:40:19'),
(17, 1, 4, 10, 'posts', '2022-05-27 11:40:40'),
(18, 0, 5, 10, 'posts', '2022-05-27 11:41:11'),
(19, 1, 8, 1, 'posts', '2022-05-28 20:04:23'),
(20, 0, 10, 1, 'posts', '2022-05-28 20:14:03'),
(21, 1, 7, 1, 'posts', '2022-05-28 20:15:07'),
(22, 0, 1, 1, 'comments', '2022-05-29 14:22:16'),
(23, 1, 2, 1, 'comments', '2022-05-29 14:22:36'),
(24, 1, 5, 1, 'comments', '2022-05-29 14:22:40'),
(25, 0, 6, 1, 'comments', '2022-05-29 14:25:45'),
(26, 0, 3, 1, 'posts', '2022-05-29 18:44:01'),
(27, 0, 9, 1, 'comments', '2022-05-29 18:44:33'),
(28, 1, 3, 1, 'comments', '2022-05-29 18:45:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '2',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password_hash`, `role`, `date_created`, `date_updated`) VALUES
(1, 'admin', 'sam@gmail.com', '$2y$10$xkZ9CFoY/NDZOL7V7XdxOOPD5ojc826bHMcqYSFVL4LwMEGG9K5/K', 1, '2022-05-21 14:28:07', NULL),
(9, 'sam10', 'sam@gmail.com', '$2y$10$SFEXoinwiTG8l8dvjg4Ep.nYBv5hFWGSV21XcQ3EisyqigO5Fxuo.', 2, '2022-05-25 16:31:01', NULL),
(10, 'randoman', 'sam@gmail.com', '$2y$10$FVnSCl1aX7fs4zNYF.vKTupUKDPQLFXoBJyq2VyU9zQpTzB2qdrlO', 2, '2022-05-27 11:39:47', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
