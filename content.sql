-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 16 2018 г., 23:57
-- Версия сервера: 5.7.24-0ubuntu0.16.04.1
-- Версия PHP: 7.2.12-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `arealidea`
--

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE `content` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `name`, `text`, `password`, `token`) VALUES
(32, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'faa1c5954ac8017a1dcf2c57394d040a'),
(33, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'e1c319e859618519e053ef7ca9c6d5a4'),
(34, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'fcf4707026e2715db6fab18a1aae6012'),
(35, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2220622140be84be09bc56618e4e3da0'),
(36, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '4795b18cb7638cb1ac5ac2811aca2aec'),
(37, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '5f16a5fa0f748343f074bd4ed2de1c35'),
(38, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'ee333700c14025aa87546ee6016613bd'),
(39, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '9a9bf2dcf75d066ac206756721551a69'),
(40, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '6df7327ed94fde54981254be816912db'),
(41, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd21c005bcac7d3da166540b06ea4de96'),
(42, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '0bcf79f9558e020c35c022951969c486'),
(43, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '0e8a0e9529340e6a1e8b9096d18cabe7'),
(44, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '94b5818e67fe6a081faf7c13c35a8a8b'),
(45, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '5a6f4f6756c8fa0739221fe2efb8d330'),
(46, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '9e2cf79a3dacae0fbc0811ab2f4bdaaf'),
(47, 'Максим', 'fsdfdsf', 'e1b89fd44668841dcb75a6a56b2988fb', '406be71fe798875c122ad0154a7742e6'),
(49, 'Максим', 'fdsfds', '15ba0ad18c9b3211cba2d8ae6e49d4fa', '8c8b46cd3e6a706c3026ba8b07be0be3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
