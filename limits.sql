-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Мар 03 2024 г., 11:15
-- Версия сервера: 5.7.24
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `limits`
--

-- --------------------------------------------------------

--
-- Структура таблицы `community`
--

CREATE TABLE `community` (
  `id` int(11) NOT NULL,
  `name_community` text NOT NULL,
  `photo_community` text NOT NULL,
  `describe_community` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `community`
--

INSERT INTO `community` (`id`, `name_community`, `photo_community`, `describe_community`) VALUES
(1, 'МАТЕМАТИКА', 'src=\"img/community1.jpg\"', 'Курсы по математике');

-- --------------------------------------------------------

--
-- Структура таблицы `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name_company` text NOT NULL,
  `photo_company` text NOT NULL,
  `describe_company` text NOT NULL,
  `raiting_company` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `company`
--

INSERT INTO `company` (`id`, `name_company`, `photo_company`, `describe_company`, `raiting_company`) VALUES
(1, 'Программируй как в Google', 'src=\"img/company1.jpg\"', 'IT компания GOOGLE', 10),
(2, 'Решай задачи как в Microsoft', 'src=\"img/company2.jpg\"', 'IT компания Microsoft', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `friends`
--

CREATE TABLE `friends` (
  `id_user` int(11) NOT NULL,
  `id_friend` int(11) NOT NULL,
  `raiting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `friends`
--

INSERT INTO `friends` (`id_user`, `id_friend`, `raiting`) VALUES
(2, 3, 10),
(1, 2, 11),
(1, 3, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id` text NOT NULL,
  `message` text NOT NULL,
  `d` text NOT NULL,
  `tosend` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id`, `message`, `d`, `tosend`) VALUES
('3', 'Hello', '2024-02-25 17:42:40', '2'),
('2', 'Hi', '2024-02-25 17:42:48', '3'),
('2', 'Привет', '2024-02-26 19:54:39', ''),
('2', 'ff', '2024-02-26 19:58:35', ''),
('2', 'jjj', '2024-02-26 20:01:09', ''),
('2', 'Привет', '2024-02-26 20:34:33', '1'),
('2', 'Как дела?', '2024-02-26 21:22:57', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_time` text NOT NULL,
  `textnews` text NOT NULL,
  `photourl` text NOT NULL,
  `likes_count` int(11) NOT NULL,
  `community_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `id_user`, `date_time`, `textnews`, `photourl`, `likes_count`, `community_id`) VALUES
(1, 2, '2024-02-25 17:42:40', 'Всех с новым годом!', 'src=\"img/news1.jpg\"', 8, 0),
(2, 2, '2024-02-25 17:43:40', 'Все супер', 'src=\"img/bg.jpg\"', 4, 1),
(3, 2, '2024-02-25 17:43:40', 'Всем привет', 'src=\"img/index2.jpg\"', 5, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `sername` text NOT NULL,
  `name` text NOT NULL,
  `patron` text NOT NULL,
  `adress` text NOT NULL,
  `phone` text NOT NULL,
  `birthday` text NOT NULL,
  `fotourl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `sername`, `name`, `patron`, `adress`, `phone`, `birthday`, `fotourl`) VALUES
(1, 'admin@gmail.com', '9b39e0fa22728040d5c28ddfd5c0d70b', 'Админ', 'Ад', 'Админыч', 'Москва', '1234567890', '2000-01-01', 'src=\"img/p1.jpg\"'),
(2, 'ivanov@gmail.com', 'e64376fd1a06a169bf9c2e084faf0b0c', 'Иванов', 'Иван', 'Иваныч', 'Москва', '+1234567890', '2002-02-02', 'src=\"img/p4.jpg\"'),
(3, 'petrova@gmail.com', 'fb0ee836fe6d142bbf40d93e4d57b00d', 'Петрова', 'Мария', 'Ивановна', 'Питер', '+1234567890', '2010-01-13', 'src=\"img/p2.jpg\"');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
