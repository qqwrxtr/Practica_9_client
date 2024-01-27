-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 13 2023 г., 19:41
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nicolae`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `password`, `admin`) VALUES
(1, 'teodorghirba1@gmail.com', '$2y$10$CMWsBV9jknbUmA4CjXOvpuOsQUd15DUbDwkv.94qOVQFryldrG8VS', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discounted_price` int(11) NOT NULL,
  `description` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `packages`
--

INSERT INTO `packages` (`id`, `img`, `destination`, `price`, `discounted_price`, `description`) VALUES
(1, '/nicolae/pages/img/mumbai.jpg', 'mumbai', 290.99, 351, 'Orașul care nu doarme niciodată vă așteaptă cu brațele deschise. Explorează străzile animate, pline de culoare și arome exotice ale piețelor, vizitează faimoasa poartă a Indiei și descoperă istoria bogată și cultura vibrantă a orașului. Bucură-te de delic'),
(2, '/nicolae/pages/img/Hawaii.jfif', 'hawaii ', 290.99, 351, 'Paradisul tropical vă așteaptă să vă răsfățați cu plaje cu nisip fin, ape cristaline și priveliști uimitoare. Înotați în apele calde, savurați cocktailuri exotice pe plajă și explorați peisajele vulcanice impresionante. Hawaii este locul perfect pentru re'),
(3, '/nicolae/pages/img/Sydney.jpg', 'sydney', 290.99, 351, 'Orașul iconic al Australiei, Sydney, vă invită să explorați atracțiile sale celebre. Admiră Opera din Sydney, plimbă-te pe celebrul pod Sydney Harbour Bridge și relaxează-te pe plajele magnifice. Descoperă cultura bogată, gastronomia deosebită și bucură-t'),
(4, '/nicolae/pages/img/Paris.jpg', 'paris ', 290.99, 351, 'Capitala romantică a lumii, Paris, vă încântă cu farmecul său elegant. Vizitați celebrul turn Eiffel, explorați muzeele de artă renumite, plimbați-vă pe malurile râului Sena și savurați bucătăria gourmet în cele mai bune restaurante. Parisul oferă o combi'),
(5, '/nicolae/pages/img/Tokyo.jpg', 'tokyo', 290.99, 351, 'Orașul fascinant al contrastelor vă așteaptă cu o combinație unică de tradiție și tehnologie de ultimă oră. Descoperă templele antice, districtele moderne pline de lumină și viață, bucătăria delicioasă și străzile pline de viață. Tokyo este o experiență î'),
(6, '/nicolae/pages/img/Egypt.jpg', 'egypt ', 290.99, 351, 'O destinație plină de mister și istorie, Egiptul vă așteaptă cu piramidele sale uluitoare, templele antice și râul Nil fermecător. Explorați misterele vechii civilizații, vizitați Marea Roșie pentru snorkeling și bucurați-vă de ospitalitatea călduroasă a ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
