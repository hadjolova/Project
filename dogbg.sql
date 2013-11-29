-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Време на генериране: 
-- Версия на сървъра: 5.5.24-log
-- Версия на PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `dogdb`
--

-- --------------------------------------------------------

--
-- Структура на таблица `dog`
--

CREATE TABLE IF NOT EXISTS `dog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `review` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Ссхема на данните от таблица `dog`
--

INSERT INTO `dog` (`id`, `name`, `type`, `country`, `image`, `review`) VALUES
(1, 'Pincher', 'small', 'Germany', 'Images/Dog/Pincher.jpg', 'The Miniature Pinscher can really spice up a person''s life. This dog is small, but he doesn''t know it! He''s quick and active, with a lively curiosity. '),
(2, 'Yorkie terrier', 'small', 'England', 'Images/Dog/Yrkie.jpg', 'The Yorkshire Terrier is a small, toy-sized dog. The small head is rather flat on the top, with a medium-sized muzzle. '),
(3, 'Rottweiler', 'big', 'Germany', 'Images/Dog/Rottweiler.jpg', 'The Rottweiler has a muscular, massive, powerful body. The head is broad with a rounded forehead. The muzzle is well developed. '),
(4, 'Labrador', 'midle', 'Canada', 'Images/Dog/Labrador.jpg', 'The Labrador Retriever is very energetic, friendly, loyal, gentle, hardworking, non aggressive and intelligent. ');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Ссхема на данните от таблица `users`
--

INSERT INTO `users` (`ID`, `name`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin'),
(0, 'eee', 'eee', '670da91be64127c92faac35c8'),
(0, 'Mariq', 'mimka', 'mimka');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
