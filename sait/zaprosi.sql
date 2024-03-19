-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мая 16 2023 г., 13:27
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `web`
--

-- --------------------------------------------------------

--
-- Структура таблицы `serv`
--

CREATE TABLE `vivod` (
  `id` int(11) NOT NULL,
  `imya` varchar(300) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `cena` varchar(300) NOT NULL,
  `opicanie` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `serv`
--

INSERT INTO `vivod` (`id`, `imya`, `photo`, `cena`, `opicanie`) VALUES
(1, 'Разработка сайта', 'images/bd/1.png', 'От 80000 руб', 'Создание сайтов любой сложности, от визитки до корпоративного портала, с учетом всех особенностей Вашего бизнеса.'),
(2, 'Интернет-магазины', 'images/bd/2.png', 'от 120 000 руб', 'Невероятно удобный и гибкий пакет решений для продаж в интернет – идеальное соотношение цены и качества Вашего магазина.'),
(3, 'CRM-системы', 'images/bd/3.png', 'от 80 000 руб.', 'Автоматизация работы с клиентами, облачные технологии, интеграция с базами данных, безграничные возможности для автоматизации.'),
(4, 'Мобильное приложение', 'images/bd/4.png', 'от 150 000 руб.', 'Разработка приложений любой сложности на платформах iOS и Android. Ограничение - только Ваша фантазия.'),
(5, 'Реклама в интернете', 'images/bd/5.png', 'от 500 руб', 'Гибкий набор инструментов и уникальные решения нашей компании предоставят Вам преимущество.'),
(6, 'Аудит и оптимизация', 'images/bd/6.png', 'от 7 000 руб', 'Глубокий анализ Вашего сайта, поиск «узких» мест, решения по улучшению и оптимизации, исследование юзабилити.'),
(7, 'Реклама в интернете', 'images/bd/5.png', 'от 500 руб', 'Гибкий набор инструментов и уникальные решения нашей компании предоставят Вам огромное преимущество.'),
(8, 'Мобильное приложение', 'images/bd/4.png', 'от 150 000 руб', 'Разработка приложений любой сложности на платформах iOS и Android. Ограничение - только Ваша фантазия. И это круто'),
(9, 'CRM-системы', 'images/bd/3.png', 'от 80 000 руб', 'Автоматизация работы с клиентами, облачные технологии, интеграция с базами данных, безграничные возможности для автоматизации.');

-- --------------------------------------------------------

--
-- Структура таблицы `ostvit_zayavky`
--

CREATE TABLE `ostvit_zayavky` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `ysluga` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ostvit_zayavky`
--

INSERT INTO `ostvit_zayavky` (`id`, `name`, `email`, `phone`, `ysluga`) VALUES
(1, 'Красков В.А', 'kraskov_10@mail.ru', '89807003323', 'Сайт Визитка');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `vivod`
--
ALTER TABLE `vivod`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ostvit_zayavky`
--
ALTER TABLE `ostvit_zayavky`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `vivod`
--
ALTER TABLE `vivod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `ostvit_zayavky`
--
ALTER TABLE `ostvit_zayavky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
