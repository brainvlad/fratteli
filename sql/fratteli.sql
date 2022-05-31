-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 28 2022 г., 16:07
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fratelli`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_title` text NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `answer`
--

INSERT INTO `answer` (`answer_id`, `question_id`, `answer_title`, `is_correct`) VALUES
(66, 44, 'Да', 1),
(67, 44, 'Нет', 0),
(68, 44, 'Все варианты верны', 0),
(69, 44, 'Все варианты НЕверны', 0),
(70, 45, 'Да', 1),
(71, 45, 'Нет', 0),
(72, 45, 'Все варианты верны', 0),
(73, 45, 'Все варианты НЕверны', 0),
(74, 46, 'Да', 1),
(75, 46, 'Нет', 0),
(76, 46, 'Все варианты верны', 0),
(77, 46, 'Все варианты НЕверны', 0),
(78, 47, 'Да', 1),
(79, 47, 'Нет', 0),
(80, 47, 'Все варианты верны', 0),
(81, 47, 'Все варианты НЕверны', 0),
(82, 48, 'Да', 1),
(83, 48, 'Нет', 0),
(84, 48, 'Все варианты верны', 0),
(85, 48, 'Все варианты НЕверны', 0),
(86, 49, 'Да', 1),
(87, 49, 'Нет', 0),
(88, 49, 'Все варианты верны', 0),
(89, 49, 'Все варианты НЕверны', 0),
(91, 51, 'Hui', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text,
  `file` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `exam_rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `exam`
--

INSERT INTO `exam` (`exam_id`, `student_id`, `test_id`, `exam_rating`) VALUES
(37, 9, 47, 0),
(38, 9, 48, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `group`
--

CREATE TABLE `group` (
  `group_id` int(11) NOT NULL,
  `group_title` varchar(255) NOT NULL,
  `group_level` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `group`
--

INSERT INTO `group` (`group_id`, `group_title`, `group_level`, `teacher_id`) VALUES
(3, 'Группа 1', 'A2', 14),
(5, 'Группа 2', 'B1', 14),
(6, 'Группа 1 - teacher2', 'B1', 16),
(7, 'квпл', 'B2', 18),
(8, 'ADMIN TEST', 'C2', 18);

-- --------------------------------------------------------

--
-- Структура таблицы `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `lesson_title` text NOT NULL,
  `lesson_date` date NOT NULL,
  `lesson_time` varchar(100) DEFAULT NULL,
  `lesson_link` text NOT NULL,
  `canceled_at` date DEFAULT NULL,
  `canceled_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `group_id`, `lesson_title`, `lesson_date`, `lesson_time`, `lesson_link`, `canceled_at`, `canceled_by`) VALUES
(6, 3, 'Урок №1. Алфавит', '2022-04-25', NULL, 'https://meet.google.com/cxk-ifqa-iac?pli=1&authuser=0', NULL, 0),
(7, 3, 'Урок №2. Приветствие', '2022-04-26', NULL, 'https://meet.google.com/cxk-ifqa-iac?pli=1&authuser=0', NULL, 0),
(8, 6, 'Урок №1. teacher2 group_id 6', '2022-04-28', NULL, 'https://meet.google.com/cxk-ifqa-iac?pli=1&authuser=0', NULL, 0),
(9, 5, 'кумукму', '2022-04-30', NULL, 'https://meet.google.com/cxk-ifqa-iac?pli=1&authuser=0', NULL, NULL),
(14, 8, 'ADMIN УРОК', '2022-05-16', '11:55', 'https://meet.google.com/cxk-ifqa-iac?pli=1&authuser=0', NULL, NULL),
(15, 7, 'AD', '2022-05-16', '15:20', 'https://meet.google.com/cxk-ifqa-iac?pli=1&authuser=0', NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_header` text NOT NULL,
  `post_text` text NOT NULL,
  `post_picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `question_title` text NOT NULL,
  `question_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `question`
--

INSERT INTO `question` (`question_id`, `test_id`, `type_id`, `question_title`, `question_desc`) VALUES
(44, 47, 0, 'Вы Алла Виленская?', 'Выберите вариант ответа'),
(45, 47, 0, 'Вы Алла Виленская??', 'Выберите вариант ответа'),
(46, 47, 0, 'Вы Алла Виленская???', 'Выберите вариант ответа'),
(47, 48, 0, 'Вы Алла Виленская?', 'Выберите вариант ответа'),
(48, 48, 0, 'Вы Алла Виленская??', 'Выберите вариант ответа'),
(49, 48, 0, 'Вы Алла Виленская???', 'Выберите вариант ответа'),
(51, 47, 0, 'zdhatrsjs srtj srtj srtj srttkj ', '23eedf3rvr');

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review_text` text NOT NULL,
  `review_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`review_id`, `user_id`, `review_text`, `review_date`) VALUES
(8, 18, 'Толпа притягивает автоматизм. Сознание отчуждает социометрический эгоцентризм, также это подчеркивается в труде Дж.Морено \"Театр Спонтанности\". Сновидение активно.\n\nВоспитание отражает эмпирический интеллект. Эскапизм, как принято считать, притягивает сублимированный генезис. Психоз, согласно традиционным представлениям, дает социальный стимул. Как было показано выше, мышление заметно аннигилирует ускоряющийся эгоцентризм.', '16.05.2022');

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`student_id`, `group_id`, `user_id`) VALUES
(9, 5, 14),
(10, 6, 15),
(11, 3, 15),
(12, 5, 13),
(13, 8, 13),
(14, 7, 13);

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test_title` text NOT NULL,
  `test_level` varchar(500) NOT NULL,
  `test_time` text NOT NULL,
  `test_complexity` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`test_id`, `test_title`, `test_level`, `test_time`, `test_complexity`, `created_by`) VALUES
(47, 'Тест Аллы Виленской', 'A2', '30', '3/5', 14),
(48, 'Тест Аллы Виленской', 'A2', '30', '', 14);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(1000) NOT NULL,
  `user_name` varchar(1000) NOT NULL,
  `user_password` varchar(1000) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `user_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_name`, `user_password`, `user_role`, `user_level`) VALUES
(13, 'alla@gmail.com', 'Алла Виленская', '17bbaa41b9eea6fb22ea26852d4994d3', 'student', 'A1'),
(14, 'teacher@mail.ru', 'Teacher Alla', '17bbaa41b9eea6fb22ea26852d4994d3', 'teacher', 'C2'),
(15, 'mail1@mail.ru', 'student1', '17bbaa41b9eea6fb22ea26852d4994d3', 'student', 'B1'),
(16, 'teacher2@mail.ru', 'teacher2', '17bbaa41b9eea6fb22ea26852d4994d3', 'teacher', 'C1'),
(17, 'aaa@mail.ru', 'aaa456', '200820e3227815ed1756a6b531e7e0d2', 'teacher', 'C1'),
(18, 'admin@admin.com', 'admin', '200820e3227815ed1756a6b531e7e0d2', 'teacher', 'B2'),
(19, 'hui228@hui.com', 'hui', '7adea9a9fbf527e9bb3aa5fedb02b505', 'student', 'C2'),
(20, 'hui228@hui.com', 'hui', '7adea9a9fbf527e9bb3aa5fedb02b505', 'student', 'C2');

-- --------------------------------------------------------

--
-- Структура таблицы `vocabulary`
--

CREATE TABLE `vocabulary` (
  `vocabulary_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `word_id` int(11) NOT NULL,
  `vocabulary_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `word`
--

CREATE TABLE `word` (
  `word_id` int(11) NOT NULL,
  `word_italian` text NOT NULL,
  `word_rus` text NOT NULL,
  `word_picture` text NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `word`
--

INSERT INTO `word` (`word_id`, `word_italian`, `word_rus`, `word_picture`, `created_by`) VALUES
(8, 'gatto', 'кот', '/app/uploads/16527310421532440298_3.jpg', 16),
(9, 'qweqwr', 'wer', '/app/uploads/16527310916010185746.jpg', 16);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Индексы таблицы `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Индексы таблицы `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `user_id` (`teacher_id`);

--
-- Индексы таблицы `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Индексы таблицы `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `group_id` (`group_id`) USING BTREE;

--
-- Индексы таблицы `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `vocabulary`
--
ALTER TABLE `vocabulary`
  ADD PRIMARY KEY (`vocabulary_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `word_id` (`word_id`);

--
-- Индексы таблицы `word`
--
ALTER TABLE `word`
  ADD PRIMARY KEY (`word_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT для таблицы `group`
--
ALTER TABLE `group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `vocabulary`
--
ALTER TABLE `vocabulary`
  MODIFY `vocabulary_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `word`
--
ALTER TABLE `word`
  MODIFY `word_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `group`
--
ALTER TABLE `group`
  ADD CONSTRAINT `group_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `creator_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `vocabulary`
--
ALTER TABLE `vocabulary`
  ADD CONSTRAINT `vocabulary_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vocabulary_ibfk_2` FOREIGN KEY (`word_id`) REFERENCES `word` (`word_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
