-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 17 2017 г., 22:02
-- Версия сервера: 5.7.16
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `super_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
(1, 'Блокноты', 1, 1),
(2, 'Пеналы', 2, 1),
(3, 'Ручки', 3, 1),
(4, 'Рюкзаки', 4, 1),
(5, 'Тетради', 5, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL DEFAULT '1',
  `brand` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `image`, `description`, `is_new`, `is_recommended`, `status`) VALUES
(1, 'Блокнот', 1, 23232, 255, 1, 'адидас', '/template/images/home/product1.jpg', 'Описание товара', 1, 1, 1),
(3, 'Люся', 1, 24324, 15.8, 1, 'Ракета', '/template/images/home/product1.jpg', 'Офигенная ручка', 0, 1, 1),
(4, 'Люся', 1, 43534, 28.9, 1, 'Sony', '/template/images/home/product1.jpg', 'описание попрыгунчика', 0, 1, 1),
(5, 'Линейка', 1, 324, 55, 1, 'sony', '/template/images/home/product1.jpg', 'описание линейки', 0, 1, 1),
(6, 'Фломастер', 1, 434, 44, 1, 'meizu', '/template/images/home/product1.jpg', 'описание фломастера', 0, 1, 1),
(8, 'краски', 1, 4322, 65, 1, 'краски инк', '/template/images/home/product1.jpg', 'описание красок', 0, 0, 1),
(9, 'карандаш', 1, 36565, 23, 1, 'карандаши Запорожья', '/template/images/home/product1.jpg', 'описание карандаша', 0, 0, 1),
(10, 'Рамка', 1, 45646, 777, 1, 'Рамки Запорожья', '/template/images/home/product1.jpg', 'Описание рамки ', 0, 0, 1),
(11, 'Скрепки', 1, 23243, 33, 1, 'адидас', '/template/images/home/product1.jpg', 'описание скрепки', 0, 0, 1),
(12, 'Ключи', 1, 44442, 21.76, 1, 'Завод ключей', '/template/images/home/product1.jpg', 'описание ключей', 0, 0, 1),
(13, 'Ключи 2', 1, 23112, 24.54, 1, 'Завод ключей', '/template/images/home/product1.jpg', 'Описание ключей 2', 0, 0, 1),
(16, 'Картина', 1, 432432, 126.99, 1, 'Завод', '/template/images/home/product1.jpg', 'Описание картины', 0, 0, 1),
(17, 'Картина лошади', 1, 2432432, 654.99, 1, 'Завод', '/template/images/home/product1.jpg', 'Описание картины лошади', 0, 0, 1),
(18, 'Единорог', 1, 444234, 776.99, 1, 'Завод', '/template/images/home/product1.jpg', 'Описание единорога', 0, 0, 1),
(19, 'Картина малого в круге', 1, 54353453, 445.99, 1, 'Завод', '/template/images/home/product1.jpg', 'Картина малого в круге', 0, 0, 1),
(20, 'Дракон', 1, 4354353, 670.98, 1, 'Завод', '/template/images/home/product1.jpg', 'Описание красного дракона', 0, 0, 1),
(21, 'Плюшевые игрушки', 1, 563453, 490.5, 1, 'Завод', '/template/images/home/product1.jpg', 'Две плюшевые собаки', 0, 0, 1),
(22, 'ручка', 3, 455, 55, 1, 'пентиум', NULL, 'ыыыыыыыыы', 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(1, 'Вован', '45643456343', 'ыфвфывыфвыфвфы', NULL, '2017-07-02 09:54:01', '{\"16\":1,\"13\":2,\"12\":1}', 1),
(2, 'Вован', '063816365', 'ывфывыфвфы', NULL, '2017-07-02 09:56:36', '{\"16\":1,\"13\":1,\"12\":1}', 1),
(3, 'Vovan', '063816365', 'sdasdasdsadas', 1, '2017-07-02 09:59:00', '{\"16\":1,\"13\":1,\"12\":1,\"18\":1,\"17\":1}', 1),
(4, 'Vovan', '063816365', 'sdasdasds', 1, '2017-07-02 18:20:15', '{\"11\":2,\"10\":1,\"12\":1,\"13\":1}', 1),
(5, 'Vovan', '0638168365', 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', NULL, '2017-09-17 14:44:21', '{\"16\":1,\"13\":1}', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Vovan', 'afir@ua.fm', 'shaman22', 'admin'),
(2, 'vfvfd', 'vfvfd', 'ssssssssss', 'user'),
(3, 'vfvfd', 'vfvfd', 'ssssssssss', 'user'),
(4, 'vfvfd23232', 'vfvfd23232', 'ssssssssss', 'user'),
(5, 'vfvfd23232', 'vfvfd23232', 'ssssssssss', 'user'),
(6, 'vfvfd23232', 'afir23@ua.fm', 'ssssssssss', 'user'),
(7, 'Vovan', 'afir@ua.fm3', 'shaman22', 'user'),
(8, 'Vovan', 'afir222@ua.fm3', 'shaman22', 'user'),
(9, 'Vovan', 'afir22222@ua.fm3', 'shaman22', 'user'),
(10, 'Vovan', 'altus@ua.fm', 'shaman22', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
