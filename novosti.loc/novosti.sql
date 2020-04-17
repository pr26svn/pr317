-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 17 2020 г., 17:56
-- Версия сервера: 5.6.43
-- Версия PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newsnovosti`
--

-- --------------------------------------------------------

--
-- Структура таблицы `novosti`
--

CREATE TABLE `novosti` (
  `id` int(11) NOT NULL,
  `Zagolovok` varchar(355) COLLATE utf16_unicode_ci NOT NULL,
  `Opisanie` text COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Дамп данных таблицы `novosti`
--

INSERT INTO `novosti` (`id`, `Zagolovok`, `Opisanie`) VALUES
(1, 'Частичка Bloodborne на ПК: В Dark Souls III добавили Охотника из PS4-эксклюзива от FromSoftware', 'После анонса PC-версии Horizon Zero Dawn у многих ПК-геймеров появилась надежда увидеть со временем и другие крупные эксклюзивы Sony на своей любимой платформе, и среди них самым желанным является Bloodborne. И пока одни игроки ждут, моддерское сообщество уже делает первые маленькие шаги по \"переносу\" хита от FromSoftware на PC, однако пока лишь в виде небольших элементов.'),
(2, 'Гонки стали еще краше: Вышла новая версия мода Need for Speed Most Wanted Redux 2020', 'Энтузиаст под ником KryZeePlays выпустил свежую версию модификации Need for Speed Most Wanted Redux 2020, добавляющую в и без того улучшенную версию одной из культовых частей франшизы еще больше приятных нововведений.\r\n\r\nУсовершенствованная фанатами Need for Speed: Most Wanted предлагает более качественные текстуры, а также новые опции для гонок и даже играбельную полицию. Свежая же версия модификации включает в себя еще больше особенностей, вроде полностью обновленного интерфейса, улучшенных отражений от поверхностей автомобилей, переработанных эффектов дождя и возможности настроек времени суток.'),
(3, 'Peacock представила первый тизер приквела мультфильма \"Мадагаскар\"', 'Стриминговая платформа Peacock представила первый тизер мультсериала Madagascar: A Little Wild. Речь идет о приквеле оригинальной анимационной работы студии Dreamworks, посвященном детству главных героев. \r\n\r\nСудя по ролику, Алекс, Марти, Мелман и Глория будут попадать в различные приключения за пределами зоопарка. Премьера сериала запланирована на 2020 год.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `novosti`
--
ALTER TABLE `novosti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `novosti`
--
ALTER TABLE `novosti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
