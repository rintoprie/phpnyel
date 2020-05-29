-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2020 at 06:34 AM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.31-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpnyeldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(25) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(25) NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `author`, `modified`) VALUES
(1, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eleifend donec pretium vulputate sapien nec. In nulla posuere sollicitudin aliquam ultrices sagittis. Leo in vitae turpis massa. Quis varius quam quisque id diam vel quam elementum. Amet tellus cras adipiscing enim eu turpis. Est ante in nibh mauris cursus mattis. Ut lectus arcu bibendum at varius vel pharetra vel. Est ante in nibh mauris cursus mattis molestie. Scelerisque eu ultrices vitae auctor eu augue ut lectus. Tristique risus nec feugiat in fermentum posuere. Sagittis purus sit amet volutpat consequat mauris. Urna molestie at elementum eu facilisis sed odio morbi quis. Mus mauris vitae ultricies leo. Dignissim convallis aenean et tortor at risus viverra adipiscing. Non pulvinar neque laoreet suspendisse interdum consectetur libero. Pretium nibh ipsum consequat nisl vel pretium lectus. Habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Proin sed libero enim sed faucibus turpis in eu mi. Lacus vestibulum sed arcu non odio euismod lacinia at.', 'admin', '2020-05-13 00:00:00'),
(2, 'Nam aliquam', 'Nam aliquam sem et tortor consequat id. Ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Et malesuada fames ac turpis egestas maecenas pharetra convallis. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Ut tellus elementum sagittis vitae et leo duis. Ut morbi tincidunt augue interdum velit euismod. Duis at tellus at urna condimentum mattis pellentesque id nibh. Cras adipiscing enim eu turpis. Leo duis ut diam quam nulla porttitor. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor.', 'admin', '2020-05-12 00:00:00'),
(3, 'Ut porttitor ', 'Ut porttitor leo a diam. Id porta nibh venenatis cras sed felis. Rhoncus aenean vel elit scelerisque mauris. Eget egestas purus viverra accumsan in nisl nisi scelerisque. Dui nunc mattis enim ut tellus. Tristique senectus et netus et malesuada fames. Eget duis at tellus at urna condimentum. Imperdiet dui accumsan sit amet nulla facilisi morbi. Luctus accumsan tortor posuere ac. Eget felis eget nunc lobortis mattis aliquam faucibus. Feugiat nisl pretium fusce id velit ut tortor pretium. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare. Lectus magna fringilla urna porttitor rhoncus. Sed velit dignissim sodales ut eu sem integer vitae. Et leo duis ut diam. Lectus magna fringilla urna porttitor rhoncus dolor. Nec nam aliquam sem et tortor consequat id porta. Amet venenatis urna cursus eget nunc scelerisque viverra mauris in.', 'admin', '2020-05-03 00:00:00'),
(4, 'Augue eget', 'Augue eget arcu dictum varius duis at consectetur lorem donec. Cum sociis natoque penatibus et magnis dis parturient. Gravida quis blandit turpis cursus in. Praesent elementum facilisis leo vel. Velit aliquet sagittis id consectetur. Massa sed elementum tempus egestas sed sed. Morbi tristique senectus et netus et malesuada fames. Sit amet tellus cras adipiscing enim eu turpis egestas pretium. Morbi quis commodo odio aenean sed. Egestas quis ipsum suspendisse ultrices gravida dictum fusce ut placerat.', 'admin', '2020-05-08 00:00:00'),
(5, 'Odio aenean sed adipiscin', 'Odio aenean sed adipiscing diam donec. Aliquam vestibulum morbi blandit cursus risus. Facilisi etiam dignissim diam quis enim. Sit amet mauris commodo quis imperdiet massa tincidunt. Ipsum dolor sit amet consectetur adipiscing elit duis. Arcu ac tortor dignissim convallis aenean et tortor. Pellentesque adipiscing commodo elit at. Tellus molestie nunc non blandit massa enim nec dui nunc. Accumsan in nisl nisi scelerisque eu ultrices vitae auctor eu. Lorem donec massa sapien faucibus et molestie ac. Netus et malesuada fames ac turpis. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Diam phasellus vestibulum lorem sed. At auctor urna nunc id cursus metus aliquam. Commodo nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Proin sed libero enim sed faucibus turpis in eu mi. Arcu cursus euismod quis viverra nibh. Sed adipiscing diam donec adipiscing tristique risus.', 'admin', '2020-05-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'a', 'a@a.com', '$2y$10$4suTp9N.6VLcDmXDICL/L.ZBqqvEJRgLH4U1NQExL9K00gSBkzQGe'),
(2, 'b', 'b@b.com', '$2y$10$BUD6JjlpXNA855v5vhb6juT/JxBMshaell8x7fHiDDmyx1YJ5jCKu'),
(3, 'c', 'c@c.com', '$2y$10$dpmkCZQsGy3Ja.He66.8t.kHUBTl6Tf9yq.VPsTpTgolYk/K7aE6i');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
