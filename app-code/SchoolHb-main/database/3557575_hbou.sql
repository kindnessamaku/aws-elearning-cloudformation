-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb27.runhosting.com
-- Generation Time: Aug 14, 2021 at 06:55 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3557575_hbou`
--

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `liker`, `post_id`) VALUES
(12, 2102892076, 1608770601);

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`main_id`, `id`, `Fullname`, `Username`, `Email`, `Password`, `followers`, `Userphoto`, `user_cover_photo`, `school`, `work`, `work0`, `country`, `birthday`, `verify`, `website`, `bio`, `admin`, `gender`, `login_attempts`, `language`, `aSetup`, `online`) VALUES
(14, 2102892076, 'Hakim Bouzourdaz', 'hbouzourdaz', 'hbouzourdaz@gmail.com', '$2y$12$gU0.lxZ/FX3lA2QyvJM0WuYxhK30kevLJFdZyu3kn3qmEbt8KHAeG', 0, 'user-male.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '1', 'Male', 0, 'English', 0, 1);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(20, 'hakimbouzourdaz', '$2y$10$5qpCNC.IhtYwWgTTK7Itme3Ba3NbvrN3RdLZ6CONmNlg/V0TB2wee', '2021-08-07 22:12:04');

--
-- Dumping data for table `wpost`
--

INSERT INTO `wpost` (`post_id`, `author_id`, `post_img`, `post_time`, `post_content`, `p_title`, `p_likes`, `p_privacy`, `shared`) VALUES
(1606444196, 2102892076, NULL, 1601819927, '', NULL, 0, 0, '1608770601');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
