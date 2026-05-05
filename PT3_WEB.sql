-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2026 at 03:26 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PT3_WEB`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `page_content` text NOT NULL,
  `page_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_content`, `page_date`) VALUES
(1, 'Galvenā', '<main class=\"container\">\n\n        <section id=\"galvena\">\n            <h1>Laipni lūdzam mūsu mājaslapā!</h1>\n\n            <p>\n                Šī ir moderna un vienkārša mājaslapa, kas veidota ar\n                Pico CSS bibliotēku. Tā palīdz ātri izveidot skaistu dizainu\n                bez sarežģītas CSS rakstīšanas.\n            </p>\n\n            <article>\n                <h2>Kāpēc izmantot Pico CSS?</h2>\n\n                <p>\n                    Pico CSS ir viegla CSS bibliotēka, kas automātiski\n                    noformē HTML elementus un ļauj koncentrēties uz saturu.\n                </p>\n\n                <button>Uzzināt vairāk</button>\n            </article>\n        </section>', '2026-04-29 18:45:09'),
(2, 'Par mums', '<section id=\"par-mums\">\r\n\r\n            <div class=\"grid\">\r\n\r\n                <article>\r\n                    <h3>Mūsu misija</h3>\r\n\r\n                    <p>\r\n                        Mēs veidojam vienkāršus, modernus un pieejamus\r\n                        tīmekļa risinājumus studentiem, skolotājiem\r\n                        un uzņēmumiem.\r\n                    </p>\r\n                </article>\r\n\r\n                <article>\r\n                    <h3>Mūsu komanda</h3>\r\n\r\n                    <p>\r\n                        Komandā darbojas dizaineri, programmētāji un\r\n                        radoši cilvēki, kuriem patīk tehnoloģijas\r\n                        un digitālais dizains.\r\n                    </p>\r\n                </article>\r\n\r\n            </div>\r\n\r\n        </section>', '2026-04-29 18:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `surname`, `phone`) VALUES
(1, 'vitalijs.korabelnikovs@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Vitālijs', 'Korabeļņikovs', '20004598');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
