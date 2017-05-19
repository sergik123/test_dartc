-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 19 2017 г., 12:48
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `dartcform`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--
CREATE DATABASE IF NOT EXISTS `dartcform` CHARACTER SET utf8 COLLATE utf8_general_ci; 

CREATE TABLE IF NOT EXISTS `dartcform`.`comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `homepage` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `ip_users` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `date_comment` datetime NOT NULL,
  `files` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `dartcform`.`comments` (`id`, `username`, `email`, `homepage`, `comment`, `ip_users`, `browser`, `date_comment`, `files`) VALUES
(1, 'Sergey', 'qwerty@mail.ru', 'http://test', 'первое сообщение', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 11:12:06', 'image16.jpg'),
(2, 'Ivan', 'phoe123@mail.ru', '', 'еще одно сообщение', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 11:14:54', 'image19.jpg'),
(3, 'Igor123', 'test@mail.ru', '', 'какой-то текст', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 11:16:05', 'DSCN1373.JPG'),
(4, 'Sveta92', 'admin@mail.ru', 'http://admin.net', 'сообщение от админа', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 11:17:23', 'DSCN1387.JPG'),
(5, 'Alex', 'time@mail.ru', '', 'большой текст', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 11:18:29', 'DSCN1365.JPG'),
(6, 'Kate', 'site2@mail.ru', 'http://site2.com', 'Самый большой текст', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 11:21:44', '667_image.png'),
(7, 'Lev', 'test@mail.ru', '', 'текст', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 11:22:36', ''),
(8, 'Petr', 'petr@mail.ru', 'http://petr.com', 'текст 22222', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 11:23:38', ''),
(9, 'Elena', 'elena@mail.ru', 'http://elena.com', 'текст с html тегами. Проверка', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 11:41:57', ''),
(10, 'Elena2', 'elena2@mail.ru', 'http://elena2.com', 'текст вавав', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 11:46:02', ''),
(11, 'Elizaveta', 'liza@mail.ru', 'http://liza.com', 'текст на русском языке с html тегами. Еще одно предложение с тегами', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 11:49:59', ''),
(12, 'Ruslan', 'ruslan@mail.ru', 'http://ruslan.com', 'текст232323', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 11:56:05', '74541151_1.jpg'),
(13, 'Denis', 'denis@yandex.ru', '', 'сообщение от Дениса', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 11:58:47', 'bg7.jpg'),
(14, 'Kristina', 'kristina@mail.ru', 'http://kristina.com', 'message from kristina', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 12:00:13', ''),
(15, 'Svetlana', 'svatlana@mail.ru', '', 'текст от Светланы', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 12:02:06', ''),
(16, 'Margarita', 'margo@mail.ru', '', 'текст от Маргариты', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 12:03:22', '127580.jpg'),
(17, 'Sergey', 'serg@mail.ru', '', 'сообщение для админа от Сергея', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 12:04:16', '1(12).jpg'),
(18, 'Elizaveta2', 'liza2@mail.ru', '', 'письмо от Елизаветы', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 12:05:58', ''),
(19, 'Victor2', 'victor@mail.ru', 'http://victor.com', 'сообщение от Виктора', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 12:07:40', 'tmb_140042_1394.jpg'),
(20, 'Yana', 'yana@mail.ru', '', 'сообщение от Яны', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 12:08:40', ''),
(21, 'Vladimir', 'vlad@mail.ru', '', 'еще одно сообщение от кого-то', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 12:10:13', ''),
(22, 'Viktor', 'victor23@mail.ru', '', 'большой текст для админа', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 12:11:30', ''),
(23, 'Aleksandr', 'sasha@mail.ru', '', 'сообщение от Саши', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 12:14:11', '752084.JPG'),
(24, 'sasha', 'sfsf@mail.ru', '', 'fdgdgdg', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 12:37:30', 'drop.txt'),
(25, 'Galina', 'galina@mail.ru', '', 'сообщение от Галины', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 12:43:56', 'folder.txt'),
(26, 'Evgeniy52', 'evgen@mail.ru', '', 'текст с файлом', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110', '2017-05-19 12:44:52', 'path.txt');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
