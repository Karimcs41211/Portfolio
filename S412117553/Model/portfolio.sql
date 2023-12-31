

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------



CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `category` (`id`, `name`) VALUES
(1, 'app'),
(2, 'web');

-- --------------------------------------------------------



CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Karim Maged', 'kareemcs@gmail.com', 'Hello', 'Hi How are you'),
(2, 'Maged', 'Maged@gmail.com', 'Hi', 'Hi How is life ? '),
(3, 'Karim Maged', 'kareemcs@gmail.com', 'Hello', 'Hi How are you'),
(4, 'Ahmed', 'Ahmed@gmail.com', 'Quiz', 'what is the different between Frontend and Backend'),
(5, 'Karim Maged', 'kareemcs@gmail.com', 'Hello', 'Hi How are you'),
(6, 'Maged', 'Maged@gmail.com', 'Hi', 'Hi How is life ? ');

-- --------------------------------------------------------



CREATE TABLE `counter` (
  `id` int NOT NULL,
  `icon` varchar(255) NOT NULL,
  `pre` int NOT NULL,
  `post` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `counter` (`id`, `icon`, `pre`, `post`, `title`) VALUES
(3, 'bi bi-emoji-smile', 0, 15, 'Assistents'),
(4, 'bi bi-book', 0, 50, 'Books'),
(5, 'bi bi-book', 0, 30, 'Courses'),
(6, 'bi bi-emoji-smile', 0, 10, 'Happy Clients');

-- --------------------------------------------------------



CREATE TABLE `details` (
  `company` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `details` (`company`, `url`, `id`) VALUES
('Karim', '#', 1);

-- --------------------------------------------------------



CREATE TABLE `portfolio` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `project_date` date NOT NULL,
  `url` varchar(255) NOT NULL,
  `text` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `portfolio` (`id`, `title`, `category`, `client`, `project_date`, `url`, `text`, `image`) VALUES
(1, 'Restaurant', '1', 'Karim', '2023-06-5', 'https://karimcs41211.github.io/RestaurantKarim/', 'Restaurant', 'View/img/portfolio/portfolio-1.jpg'),
(2, 'CRUDS', '2', 'Karim', '2023-06-15', 'https://karimcs41211.github.io/CRUDS/', 'CRUDS', 'View/img/portfolio/portfolio-2.jpg'),
(3, 'Quiz', '2', 'Karim', '2023-07-25', 'https://karimcs41211.github.io/Quiz/', 'Quiz', 'View/img/portfolio/portfolio-4.jpg');

-- --------------------------------------------------------



--
-- 
--



-- --------------------------------------------------------



CREATE TABLE `skills` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `skills` (`id`, `title`, `icon`, `color`) VALUES
(1, 'Web Development\r\n', 'bi bi-globe', 'ffbb2c'),
(2, 'Networks\r\n', 'bi bi-hdd-network', '4CEB95'),
(3, 'Problem Solving and Algorithms\r\n', 'ri-bar-chart-box-line', 'E75C54'),
(4, 'Communication', 'bi bi-send', 'ffbb2c');

-- --------------------------------------------------------



CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `linkedin` text NOT NULL,
  `github` text NOT NULL,
  `slogan` text NOT NULL,
  `birthday` date NOT NULL,
  `website` text NOT NULL,
  `phone` text NOT NULL,
  `city` text NOT NULL,
  `age` text NOT NULL,
  `degree` text NOT NULL,
  `freelance` int NOT NULL,
  `certification` text NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `title`, `place`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`, `github`, `slogan`, `birthday`, `website`, `phone`, `city`, `age`, `degree`, `freelance`, `certification`, `address`) VALUES
(1, 'Karim', 'Karim', 'kareemcs41211@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Web Developer', 'KSA', '#', '#', '#', '#', '#', '#', 'Karim Maged', '2003-07-02', 'https://Karim.com', '+966 53 010 2767', 'Buraidah', '20', 'Bsc in CS', 1, 'CS', 'Buraidah,Qassim.');

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(128) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user` (`id`, `username`, `password_hash`) VALUES
(1,'Kareem','$2y$10$b1Qjvpm8mxHnXSWmJ0Gd..iTJrI1BuogT44j/xX8SPIcmD7bMn6/O'),
(2,'Maged','$2y$10$5uZX1.rNLctHu7e/5OHyw.d3sjrQhO7njOLeD/eDl4KPOIowVxpQG');



ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);




ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);




ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


ALTER TABLE `counter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


ALTER TABLE `details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;




ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `user`
  ADD UNIQUE (username);



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
