-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 13 2016 г., 20:59
-- Версия сервера: 5.5.53-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `userlistdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Honey`
--

CREATE TABLE IF NOT EXISTS `Honey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `price` double NOT NULL,
  `images` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `Honey`
--

INSERT INTO `Honey` (`id`, `name`, `price`, `images`, `date`) VALUES
(1, 'Майський мед', 110, '', '0000-00-00'),
(2, 'Гречавий мед', 100, '', '0000-00-00'),
(3, 'Акаційовий мед', 130, '', '0000-00-00'),
(4, 'Соняшниковий мед', 80, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `Pollen`
--

CREATE TABLE IF NOT EXISTS `Pollen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(22) NOT NULL,
  `price` int(22) NOT NULL,
  `date` date NOT NULL,
  `images` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `Pollen`
--

INSERT INTO `Pollen` (`id`, `name`, `price`, `date`, `images`) VALUES
(5, 'ÐŸÐ¸Ð»Ð¾Ðº Ð²ÐµÑÐ½ÑÐ', 140, '0000-00-00', ''),
(6, 'ÐŸÐ¸Ð»Ð¾Ðº Ð»Ñ–Ñ‚Ð½Ñ–Ð', 160, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Структура таблицы `usertbl`
--

CREATE TABLE IF NOT EXISTS `usertbl` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `admib_is` tinyint(4) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `usertbl`
--

INSERT INTO `usertbl` (`user_id`, `full_name`, `email`, `username`, `password`, `admib_is`) VALUES
(1, 'ÐœÐµÐ´Ð²ÐµÐ´Ñ‡ÑƒÐº ÐœÐ°ÐºÑÐ¸Ð¼', 'max7uhm@gmail.com', 'Dabuday', 'sps606', 0),
(2, 'Medvedchuk Maksim', 'max7_hm@mail.ru', 'Dabuday1', 'sps606', 0),
(3, '', '', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
