-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2021 at 08:56 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `2170db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jedilogin`
--

CREATE TABLE `jedilogin` (
  `jedi_id` int(11) NOT NULL,
  `jedi_username` varchar(128) NOT NULL,
  `jedi_password` varchar(256) NOT NULL,
  `jedi_firstname` varchar(128) NOT NULL,
  `jedi_lastname` varchar(128) NOT NULL,
  `jedi_email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jedilogin`
--

INSERT INTO `jedilogin` (`jedi_id`, `jedi_username`, `jedi_password`, `jedi_firstname`, `jedi_lastname`, `jedi_email`) VALUES
(1, 'yoda', '1234', 'Yoda', '', 'yoda@theforce.org'),
(2, 'luke', '1234', 'Luke', 'Skywalker', 'luke@theforce.org'),
(3, 'rey', '1234', 'Rey', 'Skywalker', 'rey@theforce.org');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jedilogin`
--
ALTER TABLE `jedilogin`
  ADD PRIMARY KEY (`jedi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jedilogin`
--
ALTER TABLE `jedilogin`
  MODIFY `jedi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;