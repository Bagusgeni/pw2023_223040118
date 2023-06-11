-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 01:03 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'geni', 'bagusgeni00@gmail.com', '$2y$10$nVmD.k.ZpMQToxvdNDnCM.vqmCw8MwJuLgMf/PzVayB8gTSGIq6yO'),
(3, 'qwert', 'qwaasd@gmail.com', '$2y$10$u9/ZEtwXi0D6TTSfjqzYhOE3f17gewHnQb.SzC13wNEGLESuAvO9i');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_news` int NOT NULL,
  `category` int NOT NULL,
  `img` varchar(100) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_news`, `category`, `img`, `judul`, `isi`) VALUES
(10, 2, '648489bdbc37f.jpg', 'fhasion casual wanita', 'Gaya casual adalah salah satu gaya berpakaian yang cenderung santai dan fokus pada kenyamanan pemakainya. Selama beberapa waktu terakhir, gaya casual pun mulai banyak diterapkan pula dalam lingkungan kerja profesional.'),
(11, 1, '64848d290b59c.jpg', 'casual style pria', 'Gaya casual adalah salah satu gaya berpakaian yang cenderung santai dan fokus pada kenyamanan pemakainya. Selama beberapa waktu terakhir, gaya casual pun mulai banyak diterapkan pula dalam lingkungan kerja profesional'),
(12, 2, '6485a520c5c9a.webp', 'Cargo Style', 'Celana cargo adalah pakaian utilitarian yang bakal tren untuk 2023. Walaupun sudah ada sejak lama dan biasanya dipakai oleh para tentara, celana ini diprediksi akan ngehits di tahun depan.\r\nSelain itu, desain celana kargo juga mengalami perubahan. Dari yang tadinya hanya memiliki satu motif menjadi lebih modis.\r\nModel celana ini memiliki potongan siluet lurus yang sedikit lebar, sehingga nyaman dikenakan. Aksen kantung di sisi sampingnya membuat celana cargo lebih fleksibel dikenakan untuk gaya casual ataupun saat ingin tampil keren di akhir pekan.'),
(13, 1, '6485a80eebfd8.jpg', 'Style Musim Dingin Pria', 'qa');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_category` int NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_category`, `category`) VALUES
(1, 'Men'),
(2, 'WOMEN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_news` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
