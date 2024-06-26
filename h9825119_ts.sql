-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 23 2024 г., 11:55
-- Версия сервера: 8.0.34-26-beget-1-1
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `h9825119_ts`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--
-- Создание: Июн 14 2024 г., 11:42
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id_category` int NOT NULL,
  `name_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_category`, `name_category`) VALUES
(1, 'Классическая гитара'),
(2, 'Акустическая гитара'),
(3, 'Бас-гитара'),
(4, 'Электро-гитара');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--
-- Создание: Июн 14 2024 г., 11:42
--

DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id_goods` int NOT NULL,
  `name_goods` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price_goods` int NOT NULL,
  `pic_goods` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category` int NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id_goods`, `name_goods`, `price_goods`, `pic_goods`, `category`, `description`, `count`) VALUES
(1, 'Kremona Fiesta Soloist F65C', 20000, 'classic1.png', 1, 'Акустическая гитара, верхняя дека ель, нижняя дека и обечайка меранти, гриф нато, накладка на гриф палисандр, хромированные колки, цвет натуральный', 89),
(2, 'YAMAHA C40', 20690, 'classic2.png', 1, 'Классическая гитара, дека ель, корпус меранти, гриф нато, накладка на гриф палисандр, колки хромированные, цвет натуральный', 100),
(3, 'VESTON C-45A', 6790, 'classic3.png', 1, 'Классическая гитара 4/4, цвет: натуральный', 50),
(4, 'VESTON C-45A BK', 8210, 'classic4.png', 1, 'Классическая гитара 4/4, цвет: черный', 70),
(11, 'ROCKDALE Classic C1', 7900, 'classic5.png', 1, 'Классическая гитара 4/4 с нейлоновыми струнами, цвет натуральный', 98),
(12, 'PEREZ 600', 38160, 'classic6.png', 1, 'В конструкции инструмента используются только селекционные компоненты, благодаря которым музыканты приобретают высококачественный инструмент с классическим мягким звучанием в лучших традициях испанских гитар', 99),
(13, 'Belucci BC3805 BLS', 3775, 'classic7.png', 1, 'Классическая гитара размер 38&#39; дюймов', 100),
(16, 'ROCKDALE Classic C1', 19990, 'acoustics1.png', 2, 'В гитаре предусмотрена классическая правосторонняя ориентация. Также в ней традиционное количество ладов – 20. Среднего размера – высота больше метра, длина – 42 см, а ширина – 12 см.', 40),
(17, 'Elitaro E4110 N', 7095, 'acoustics2.png', 2, 'Увеличенный корпус дредноут, корпус гитары изготовлен из американской липы, это позволяет комфортно использовать ее в условиях любого климата', 50),
(18, 'Belucci BC4010 BLS', 5057, 'acoustics3.png', 2, 'Акустическая гитара Belucci BC3820C BLS 38&#34;дюймов(4/4), форма корпуса фолк с вырезом', 50),
(19, 'Belucci BC3820 PI', 3632, 'acoustics4.png', 2, 'Гитара изготовлена из комбинированной древесины высшего качества, что обеспечивает инструменту звучание инструмента высокого уровня, а благодаря небольшому корпусу, акустическую гитару Belucci 38 удобно брать с собой в дорогу', 50),
(20, 'Fabio FAW-702BL', 7979, 'acoustics5.png', 2, 'Максимально громкое звучание инструмента достигается за счет увеличенной формы (Дредноут), а благодаря полноценному корпусу (без выреза), в сочетании с верхней декой из ели, а нижней деки и обечайки из красного дерева, достигается неповторимый объём звука и баланс по низким, средним и высоким частотам', 100),
(21, 'Elitaro E4040 Wave', 6981, 'acoustics6.png', 2, 'Акустическая гитара Elitaro L4040 UK Flag 41&#34; дюйм (4/4),форма корпуса: фолк с вырезом, 6 металлических струн. Материал корпуса выполнен из качественной древесины(липа),корпус покрыт глянцевым лаком голубого цвета', 50),
(22, 'JET JD-257 WHS', 17140, 'acoustics7.png', 2, 'Визуально инструменты с покрытием Open pore отличаются ясно видимыми и ощущаемыми ложбинкам. Инструменты с таким покрытием очень приятны на ощупь - они имеют бархатистую текстуру, тактильно кажутся натуральнее и естественнее. Этот же эффект подчеркивается разрезом древесины верхней деки, который раскрывает оригинальную структуру волокон древесины', 49),
(23, 'LAVA ME 4 Carbon 38&#39;&#39;', 139999, 'acoustics8.png', 2, 'Электроакустическая гитара со встроенными эффектами и чехлом Space bag', 200),
(24, 'ROCKDALE STARS HSS BK', 10900, 'electro1.png', 4, 'Электрогитара. Форма корпуса стратокастер. Цвет черный. Глянцевое покрытие. Хромированная фурнитура. Корпус из тополя. Гриф из клена. 22 лада. Анкерный стержень. Накладка на гриф из древесно-полимерного композита', 100),
(25, 'FARIDA F-5050 2-Tone', 42300, 'electro2.png', 4, 'Электрогитара, цвет санберст, корпус - ольха, гриф и накладка - американский клён, порожек - синтетическая кость, профиль грифа - C-shape, лады - 22 Medium Jumbo, мензура 25.5` (648 мм)', 20),
(26, 'IBANEZ GRG120QASP-BGD', 34000, 'electro3.png', 4, 'IBANEZ GRG120QASP-BGD электрогиатра, 6 струн, цвет - синий', 29),
(27, 'FENDER MAYMAUIER Affinity', 51000, 'electro4.png', 4, 'Электрогитара, цвет белый, корпус - тополь, гриф - клён, накладка грифа - индийский лавр, порожек - синтетическая кость, профиль грифа - C-shape, лады - 21 Medium Jumbo', 40),
(28, 'YAMAHA RS420 FACTORY', 38599, 'electro5.png', 4, 'Форма корпуса стратокастер. Цвет синий металлик. Глянцевое покрытие. Хромированная фурнитура. Корпус из тополя. Гриф из клена. 22 лада. Анкерный стержень. Накладка на гриф из древесно-полимерного композита', 27),
(29, 'IBANEZ S521-MOL', 54000, 'electro6.png', 4, 'Электрогитара, Шестиструнная модель в корпусе из махагони. Модель имеет 24 лада, мензуру 25.5`, 2 звукоснимателя H-H QM6, переключатель и регуляторы тона, громкости', 30),
(30, 'EART NK-C3 Trans', 48000, 'electro7.png', 4, 'Электрогитара, цвет санберст, корпус - печеный махагони, топ - фигурный клен, гриф - печеный клен, накладка грифа - печеный клен, порожек - кость, профиль грифа - переменный U-C, лады - 22 Medium Jumbo (сталь), мензура 25.5&#34;', 29),
(31, 'Fabio ST100 BLS', 4039, 'electro8.png', 4, 'Электрогитара Fabio ST100 BLS ,тип-стратокастер, бридж -стандартный тремоло,переключатель-5-позиционный.Шесть струн(металл),крепление грифа на болтах,количество ладов-22. Материал корпуса сделан из липы, отделка инструмента глянцевый лак синего цвета', 20),
(32, 'ARIA PRO II', 21555, 'bass1.png', 3, 'Корпус ольха, гриф кленовый с палисандровой накладкой', 35),
(33, 'IBANEZ SR370EF', 54000, 'bass2.png', 3, 'Электрическая безладовая бас-гиатра, Модель расцветки санберст, 24 лада. Дека клен, гриф клен и орех, накладка ятоба. HH, 3-позиционный переключатель, 3-полосный EQ, тон, громкость', 27),
(34, 'Cort GB64JJ-NAT', 49950, 'bass3.png', 3, 'GB64JJ оснащена активным предусилителем с питанием от 9-вольтовой батареи. Корпус из мягкого клена, хотя и менее плотный, чем твердый клен, все же гораздо более плотный, чем красное дерево - это обеспечивает идеальный баланс между чистым и ярким, плотным и густым тембром звучания.', 45),
(35, 'FARIDA F-5222', 54000, 'bass4.png', 3, 'FARIDA F-5222 также имеет надежный бридж и качественные колки Kluson Vintage, что обеспечивает точную настройку и стабильность строя. Эта бас-гитара позволяет достичь теплого и глубокого звучания, которое присуще стилю Jazz Bass.', 38),
(36, 'Cort Action Bass', 68900, 'bass5.png', 3, 'Материал грифа - клен, палисандр. Количество ладов - 24. Регуляторов громкости - 1. Регуляторов тона - 1.', 39),
(37, 'IBANEZ SR5FMDX2', 178000, 'bass6.png', 3, 'IBANEZ SR5FMDX2-NTL бас-гитара, 5 струн, цвет - натуральный', 30),
(38, 'IBANEZ SR4FMDX', 154000, 'bass7.png', 3, 'Электрическая бас-гитара, 4 струны, корпус - ясень с топом из огненного клёна, цвет - изумрудный зелёный', 30),
(39, 'Cort Rithimic-NAT', 102520, 'bass8.png', 3, 'Cort и Джефф Берлин начали совместную работу на бас-гитарой Rithimic в 2014 году. Гитары Джеффа всегда были простыми, вдохновленными классикой, а потом слегка изменялись под его личные требования, что делало их чем-то особенным. Басы серии Rithimic представляют собой то самое сочетание винтажности, простоты и эволюции современных требований к инструменту', 100),
(49, 'Гитара У2', 300004, 'classic3.png', 1, 'Новая', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--
-- Создание: Июн 14 2024 г., 11:42
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name_user` int NOT NULL,
  `id_prod` int NOT NULL,
  `count` int NOT NULL,
  `price` int NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name_user`, `id_prod`, `count`, `price`, `date`) VALUES
(18, 45, 1, 1, 20000, '2024-06-21'),
(19, 46, 33, 3, 54000, '2024-06-21'),
(20, 46, 49, 4, 300004, '2024-06-21');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--
-- Создание: Июн 14 2024 г., 11:42
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Пользователь'),
(2, 'Админ');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Июн 14 2024 г., 11:42
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `login` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `login`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin', '66d4aaa5ea177ac32c69946de3731ec0', 2),
(25, 'Павел', 'Емильянов', 'pavell', 'b58ac3365a63d8f96b4b0a06e1815d9e', 1),
(43, 'Елена', 'Павлова', 'elena12', '3bafa2e1df35398b13e71c5c62dbcc09', 1),
(44, 'Иван', 'Петров', 'ivan1234', 'fdffa7dd186baf01947c028e6abc18db', 1),
(45, 'ddd', 'ddd', 'dddddd', '624e9ced220c59de65e72f666a369a3c', 1),
(46, 'Иван', 'Петров', 'ivan123', 'fdffa7dd186baf01947c028e6abc18db', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id_goods`),
  ADD KEY `category` (`category`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_user` (`name_user`,`id_prod`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`),
  ADD KEY `role_2` (`role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id_goods` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id_category`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `goods` (`id_goods`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`name_user`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
