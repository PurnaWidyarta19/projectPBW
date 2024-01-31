-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2023 at 01:48 PM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhs_222112099`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `name`, `price`, `quantity`, `image`) VALUES
(24, 3, 27, 'Zebra Ballpoint Sarasa 0.5 Blue', 23800, 1, '1-zebra-ballpoint-sarasa-blue.jpg'),
(25, 3, 28, 'Kokuyo Dotliner', 18000, 1, '1-Koyuko-Dotliner.jpg'),
(31, 6, 29, 'SiDU Kertas Fotocopy 70 GSM A4', 52000, 1, '1-kertasa4-sidu.jpeg'),
(34, 7, 28, 'Kokuyo Dotliner', 18000, 1, '1-Koyuko-Dotliner.jpg'),
(36, 3, 29, 'SiDU Kertas Fotocopy 70 GSM A4', 52000, 1, '1-kertasa4-sidu.jpeg'),
(38, 6, 28, 'Kokuyo Dotliner', 18000, 1, '1-Koyuko-Dotliner.jpg'),
(39, 8, 29, 'SiDU Kertas Fotocopy 70 GSM A4', 52000, 1, '1-kertasa4-sidu.jpeg'),
(40, 7, 27, 'Zebra Ballpoint Sarasa 0.5 Blue', 23800, 1, '1-zebra-ballpoint-sarasa-blue.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart_order`
--

CREATE TABLE `cart_order` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tlpn` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `product_total` varchar(200) DEFAULT NULL,
  `total_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_order`
--

INSERT INTO `cart_order` (`id`, `user_id`, `nama`, `email`, `tlpn`, `address`, `method`, `product_total`, `total_price`) VALUES
(18, 9, 'Kadek Purna', '222112099@stis.ac.id', '6285338373609', 'Jalan Haji Yahya No 7 RT9/RW7', 'qris', 'SiDU Kertas Fotocopy 70 GSM A4 (1), Kokuyo Dotliner (2)', '88000');

-- --------------------------------------------------------

--
-- Table structure for table `my_order`
--

CREATE TABLE `my_order` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `total_products` varchar(100) NOT NULL,
  `total_price` int(100) NOT NULL,
  `payment_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `delprice` varchar(50) DEFAULT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` int(50) DEFAULT NULL,
  `image_01` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `delprice`, `price`, `quantity`, `image_01`) VALUES
(12, 'New Nature Book 52', 'Produk buku baru dengan tampilan estetik', NULL, '20000', 30, '1-nature-book.jpeg'),
(14, 'BigBoss Buku Tulis 42 Lembar', 'Produk ini telah di update', '35000', '30000', 30, '1-buku-tulis.jpeg'),
(16, 'Faber Castell Connector Pens 10\\\'S', 'Faber Castell Connector Pens 10\\\'S', '26900', '20000', 30, '1-fabercastel-10s.jpg'),
(17, 'Kenko Sticky Notes SN-0303 75x75mm', 'Kenko Sticky Notes SN-0303 75x75mm', '9900', '5000', 30, '1-kenko-75x75.jpg'),
(18, '1 Set Penghapus Bentuk Roti Tawar', '1 Set Penghapus Bentuk Roti Tawar', '15000', '8000', 30, '1-penghapus-roti-fix.jpeg'),
(19, 'Joyko Index & Mark', 'Joyko Index & Mark', '', '9900', 30, '1-joyko-index-mark.jpg'),
(20, 'Kenko Ballpoint 3S', 'Kenko Ballpoint 3S', '', '16100', 30, '1-kenko-ballpoint.jpg'),
(21, 'Kenko Stationery Set', 'Kenko Stationery Set', '', '23800', 30, '1-kenko-stationery-set.jpg'),
(22, 'Snowman Spidol Giant Hitam', 'Snowman Spidol Giant Hitam', '', '13100', 30, '1-snowman-spidol-giant.jpg'),
(23, 'Faber Castell Paket', 'Faber Castell Paket', '', '27800', 30, '1-fabercastel-paket.jpg'),
(24, 'Faber Castell Pensil 2B', 'Faber Castell Pensil 2B', '', '13100', 30, '1-fabercastel-pensil-2b.jpg'),
(25, 'Faster Ballpoint C-600/F3', 'Faster Ballpoint C-600/F3', '', '16100', 30, '1-faster-ballpoint.jpg'),
(26, 'Zebra Ballpoint Sarasa 0.5 Black', 'Zebra Ballpoint Sarasa 0.5 Black', '', '23800', 30, '1-zebra-ballpoint-sarasa.jpg'),
(27, 'Zebra Ballpoint Sarasa 0.5 Blue', 'Zebra Ballpoint Sarasa 0.5 Bue', '', '23800', 30, '1-zebra-ballpoint-sarasa-blue.jpg'),
(28, 'Kokuyo Dotliner', 'Kokuyo Dotliner', '', '18000', 30, '1-Koyuko-Dotliner.jpg'),
(29, 'SiDU Kertas Fotocopy 70 GSM A4', 'SiDU Kertas Fotocopy 70 GSM A4', '', '52000', 30, '1-kertasa4-sidu.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `pemesanan` varchar(100) DEFAULT NULL,
  `review` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `username`, `nama_barang`, `pemesanan`, `review`) VALUES
(1, 'kelas ks6', 'Faber Castell Connector Pens 10\'S', '', 'Barangnya bagus banget'),
(5, 'kadek satu', 'Kenko Ballpoint 3S', 'Print Berwarna', 'Prosesnya cepet, cetak mantap');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`nama`, `email`, `telp`, `password`, `id`) VALUES
('contoh satu', 'contoh1@gmail.com', '6285123456', 'a906449d5769fa7361d7ecc6aa3f6d28', 1),
('anak kaes', 'anakkaes@gmail.com', '6281085085', 'f33c068a23c7dd200f6231cbb0bc42b2', 2),
('kadek satu', 'kadsatu@gmail.com', '6285666777888', '309c7bde02f5d9138c547977162d9bc0', 3),
('admin', 'admin19@gmail.com', '6285338373609', '698d51a19d8a121ce581499d7b701668', 4),
('mirna mubin', 'mirbin@gmail.com', '62123123456', 'd0970714757783e6cf17b26fb8e2298f', 5),
('kelas ks6', 'kelasks6@gmail.com', '6285123456755', 'acc464f6db7ce28fdd93bf9b6ab072af', 6),
('coba kedua', 'cobakedua@gmail.com', '085334554675', 'a906449d5769fa7361d7ecc6aa3f6d28', 7),
('Adib Mmm', '222111840@stis.ac.id', '6286595555888', '28b662d883b6d76fd96e4ddc5e9ba780', 8),
('Kadek Purna', '222112099@stis.ac.id', '6285338373609', 'd5187e8cfff1b5beba3a5c73630191c7', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `p_hitamputih` varchar(50) NOT NULL,
  `p_warna` varchar(50) NOT NULL,
  `laminating` varchar(50) NOT NULL,
  `jilid` varchar(50) NOT NULL,
  `fc` varchar(50) NOT NULL,
  `lainnya` varchar(50) NOT NULL,
  `metode` varchar(50) NOT NULL,
  `kuantitas` int(10) NOT NULL,
  `file` varchar(255) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`nama`, `email`, `telp`, `p_hitamputih`, `p_warna`, `laminating`, `jilid`, `fc`, `lainnya`, `metode`, `kuantitas`, `file`, `keterangan`, `id`) VALUES
('contoh satu', 'contoh1@gmail.com', '6285123456', '1', '1', '0', '0', '0', '', '', 0, 'image/sanskrit.txt', 'iyfyu', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_order`
--
ALTER TABLE `cart_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_order`
--
ALTER TABLE `my_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `cart_order`
--
ALTER TABLE `cart_order`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `my_order`
--
ALTER TABLE `my_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_order`
--
ALTER TABLE `user_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
