-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2021 at 12:15 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `2170db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jediblog`
--

CREATE TABLE `jediblog` (
  `jedi_post_id` int(11) NOT NULL,
  `jedi_author` varchar(64) NOT NULL,
  `jedi_post_date` date NOT NULL,
  `jedi_post_category` varchar(64) NOT NULL,
  `jedi_post_title` varchar(256) NOT NULL,
  `jedi_post_content` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jediblog`
--

INSERT INTO `jediblog` (`jedi_post_id`, `jedi_author`, `jedi_post_date`, `jedi_post_category`, `jedi_post_title`, `jedi_post_content`) VALUES
(1, 'Rey Skywalker', '2021-01-01', 'Introduction; The Force', 'I am Rey Skywalker', 'I know my past but my past does not define my path. I cannot avoid my Palpatine ancestry, but from now, I am Rey Skywalker. I am creating my own path using the Force to guide me.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel varius sem. Vivamus vel erat et massa pretium condimentum quis eget quam. Suspendisse cursus mollis metus, quis sodales felis sodales ut. Praesent luctus eu augue at malesuada. \r\n\r\nInteger nec mauris enim. Morbi est risus, suscipit quis fringilla eget, commodo id diam. Suspendisse cursus urna vitae tempus consequat. Proin euismod felis nisi, a dictum arcu eleifend sit amet. Aliquam leo nisi, dapibus a odio sit amet, mollis vulputate nunc. Donec ex mi, pharetra ac urna nec, pretium malesuada metus. Etiam et tortor sagittis, facilisis purus eu, auctor ex.'),
(2, 'Luke Skywalker', '2021-01-10', 'The Force', 'From beyond the physical dimension', 'I did not realize that this \"\"land\"\" beyond the physical dimension or realm was this astonishing. I get to hang out with Master Yoda, Obi-Wan, my dad in his Anakin form, my sister, Han and their kid. It is pretry cool!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel varius sem. Vivamus vel erat et massa pretium condimentum quis eget quam. Suspendisse cursus mollis metus, quis sodales felis sodales ut. Praesent luctus eu augue at malesuada. Integer nec mauris enim. Morbi est risus, suscipit quis fringilla eget, commodo id diam. Suspendisse cursus urna vitae tempus consequat.\r\n\r\nProin euismod felis nisi, a dictum arcu eleifend sit amet. Aliquam leo nisi, dapibus a odio sit amet, mollis vulputate nunc. Donec ex mi, pharetra ac urna nec, pretium malesuada metus. Etiam et tortor sagittis, facilisis purus eu, auctor ex.'),
(3, 'Yoda', '2021-01-18', 'The Force; Resolve', 'Sharing thoughts, I am', 'Do or do not. There is no try.'),
(7, 'Yoda ', '2021-02-18', 'Test Category; The Force', 'Test post', 'This is a test post'),
(9, 'Yoda ', '2021-02-18', 'The Force; Jedi; Sith', 'Destroyed, The Sith Are!', 'The Sith were finally destroyed in the end of &quot;The Rise of Skywalker&quot;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jediblog`
--
ALTER TABLE `jediblog`
  ADD PRIMARY KEY (`jedi_post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jediblog`
--
ALTER TABLE `jediblog`
  MODIFY `jedi_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;