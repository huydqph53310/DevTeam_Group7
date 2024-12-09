-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 09, 2024 at 09:33 AM
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
-- Database: `db_duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `users_id` int NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `status` enum('pending','paid','cancelled') DEFAULT 'pending',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `payment_method` enum('cash','card','online') DEFAULT 'cash',
  `shipping_address` varchar(255) DEFAULT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `founded_year` int DEFAULT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `name`, `country`, `founded_year`, `description`, `created_at`) VALUES
(1, 'Apple', 'USA', 1976, 'Apple Inc. is an American multinational technology company that designs, manufactures, and markets consumer electronics, computer software, and online services.', '2024-12-01 16:21:32'),
(2, 'Dell', 'USA', 1984, 'Dell Technologies is a global leader in IT, technology solutions, and services.', '2024-12-01 16:21:32'),
(3, 'HP', 'USA', 1939, 'Hewlett-Packard, commonly referred to as HP, is a multinational information technology company that provides hardware, software, and services.', '2024-12-01 16:21:32'),
(4, 'Lenovo', 'China', 1984, 'Lenovo Group is a Chinese multinational technology company that designs, manufactures, and sells consumer electronics, personal computers, and related services.', '2024-12-01 16:21:32'),
(5, 'Acer', 'Taiwan', 1976, 'Acer Inc. is a Taiwanese multinational hardware and electronics corporation that specializes in advanced electronics technology, including computers and peripherals.', '2024-12-01 16:21:32'),
(6, 'Asus', 'Taiwan', 1989, 'ASUS is a Taiwanese multinational computer and phone hardware and electronics company known for its high-performance computing solutions.', '2024-12-01 16:21:32'),
(7, 'Microsoft', 'USA', 1975, 'Microsoft Corporation is an American multinational technology company that develops, manufactures, licenses, supports, and sells computer software, consumer electronics, and personal computers and services.', '2024-12-01 16:21:32'),
(8, 'Razer', 'Singapore', 2005, 'Razer Inc. is a global gaming hardware manufacturing company known for its gaming laptops, accessories, and peripherals.', '2024-12-01 16:21:32'),
(9, 'Samsung', 'South Korea', 1938, 'Samsung Electronics is a South Korean multinational conglomerate that manufactures consumer electronics, semiconductors, and telecommunications equipment.', '2024-12-01 16:21:32'),
(10, 'Sony', 'Japan', 1946, 'Sony Corporation is a Japanese multinational conglomerate corporation that designs and manufactures consumer and professional electronics, gaming, and entertainment products.', '2024-12-01 16:21:32'),
(11, 'Huawei', 'China', 1987, 'Huawei Technologies Co., Ltd. is a Chinese multinational technology company that designs and manufactures telecommunications equipment and consumer electronics.', '2024-12-01 16:21:32'),
(12, 'Toshiba', 'Japan', 1939, 'Toshiba Corporation is a Japanese multinational conglomerate known for its products in various sectors, including electronics, energy, and industrial systems.', '2024-12-01 16:21:32'),
(13, 'MSI', 'Taiwan', 1986, 'Micro-Star International Co., Ltd. is a Taiwanese multinational information technology corporation that manufactures computer hardware, laptops, and consumer electronics.', '2024-12-01 16:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int NOT NULL,
  `user_id` int NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_item_id` int NOT NULL,
  `cart_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int NOT NULL,
  `users_id` int NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `SDT` varchar(10) NOT NULL,
  `GioHang` varchar(255) NOT NULL DEFAULT '[]',
  `binhluan` int NOT NULL,
  `danhgia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `users_id`, `diachi`, `SDT`, `GioHang`, `binhluan`, `danhgia`) VALUES
(1, 1, 'Phúc Lai, Thanh Phong, Thanh Liêm, Hà Nam', '0977675028', '[]', 0, 0),
(2, 4, 'Thôn Phúc Nhị - Xã Thanh Phong - Huyện Thanh Liêm - Tỉnh Hà Nam', '0977675028', '[]', 0, 0),
(3, 11, 'Hà Nam', '0342346036', '[]', 0, 0),
(5, 13, 'Hà Nam', '0865720862', '[]', 0, 0),
(6, 14, 'Hà Nam', '0865720862', '[]', 0, 0),
(7, 15, 'Hà Nam', '0865720862', '[]', 0, 0),
(8, 16, 'Hà Nam', '0865720863', '[]', 0, 0),
(9, 17, 'Thanh Phong - Thanh Liêm - Hà Nam', '0342346036', '[]', 0, 0),
(10, 20, 'Nhật Tân - Tây Hồ - Hà Nội', '865720862', '[]', 0, 0),
(11, 21, 'Giao Tiến - Giao Thủy - Nam Định', '0342346036', '[]', 0, 0),
(12, 22, 'Tiêu Động - Bình Lục - Hà Nam', '0342346036', '[]', 0, 0),
(13, 23, 'Không tìm thấy Xã - Không tìm thấy Huyện - Không tìm thấy Tỉnh', '0342346036', '[]', 0, 0),
(14, 24, 'Định Hóa - Kim Sơn - Ninh Bình', '0865720862', '[]', 0, 0),
(15, 25, 'Thi Sơn - Kim Bảng - Hà Nam', '0342346036', '[]', 0, 0),
(16, 26, 'Thanh Phong - Thanh Liêm - Hà Nam', '0865720863', '[]', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `detailbill`
--

CREATE TABLE `detailbill` (
  `id` int NOT NULL,
  `bill_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) GENERATED ALWAYS AS ((`quantity` * `price`)) STORED
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hardware_configurations`
--

CREATE TABLE `hardware_configurations` (
  `config_id` int NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `storage` varchar(255) NOT NULL,
  `gpu` varchar(255) DEFAULT NULL,
  `screen` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL,
  `battery` varchar(255) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hardware_configurations`
--

INSERT INTO `hardware_configurations` (`config_id`, `cpu`, `ram`, `storage`, `gpu`, `screen`, `os`, `battery`, `weight`, `created_at`) VALUES
(1, 'Intel Core i7-10750H', '16GB DDR4', '512GB SSD', 'NVIDIA GeForce GTX 1660 Ti', '15.6\" Full HD', NULL, '8 hours', 2.3, '2024-12-01 23:17:23'),
(2, 'Intel Core i5-10300H', '8GB DDR4', '256GB SSD', 'NVIDIA GeForce GTX 1650', '14\" Full HD', NULL, '6 hours', 1.8, '2024-12-01 23:17:23'),
(3, 'AMD Ryzen 7 5800H', '32GB DDR4', '1TB SSD', 'NVIDIA GeForce RTX 3080', '17.3\" 4K', NULL, '10 hours', 2.5, '2024-12-01 23:17:23'),
(4, 'Intel Core i9-12900K', '64GB DDR5', '2TB SSD', 'NVIDIA GeForce RTX 4090', '27\" 4K', NULL, '12 hours', 5.5, '2024-12-01 23:17:23'),
(5, 'Intel Core i5-10210U', '8GB DDR4', '1TB HDD', 'Intel UHD Graphics', '15.6\" HD', NULL, '5 hours', 2, '2024-12-01 23:17:23'),
(6, 'Apple M1', '8GB Unified', '512GB SSD', 'Apple Integrated Graphics', '13.3\" Retina', NULL, '18 hours', 1.4, '2024-12-01 23:17:23'),
(7, 'Intel Core i7-1165G7', '16GB LPDDR4X', '1TB SSD', 'Intel Iris Xe Graphics', '14\" Full HD', NULL, '9 hours', 1.3, '2024-12-01 23:17:23'),
(8, 'Intel Core i7-11800H', '16GB DDR4', '1TB SSD', 'NVIDIA GeForce RTX 3060', '15.6\" Full HD', NULL, '8 hours', 2.4, '2024-12-01 23:17:46'),
(9, 'AMD Ryzen 5 3500U', '8GB DDR4', '256GB SSD', 'AMD Radeon Vega 8', '13.3\" Full HD', NULL, '7 hours', 1.5, '2024-12-01 23:17:46'),
(10, 'Intel Core i9-10900K', '32GB DDR4', '1TB SSD', 'NVIDIA GeForce RTX 3070', '27\" 4K', NULL, '9 hours', 6, '2024-12-01 23:17:46'),
(11, 'Apple M1 Pro', '16GB Unified', '512GB SSD', 'Apple Integrated Graphics', '14\" Retina', NULL, '17 hours', 1.6, '2024-12-01 23:17:46'),
(12, 'Intel Core i7-1165G7', '8GB LPDDR4X', '512GB SSD', 'Intel Iris Xe Graphics', '13.3\" Full HD', NULL, '10 hours', 1.3, '2024-12-01 23:17:46'),
(13, 'Intel Core i5-1135G7', '16GB LPDDR4X', '1TB SSD', 'Intel Iris Xe Graphics', '15.6\" Full HD', NULL, '12 hours', 1.8, '2024-12-01 23:17:46'),
(14, 'AMD Ryzen 9 5900X', '64GB DDR4', '2TB SSD', 'NVIDIA GeForce RTX 3080', '17.3\" 4K', NULL, '11 hours', 3.2, '2024-12-01 23:17:46'),
(15, 'Intel Core i5-12400F', '8GB DDR4', '512GB SSD', 'NVIDIA GeForce GTX 1650', '15.6\" Full HD', NULL, '7 hours', 2.1, '2024-12-01 23:17:46'),
(16, 'AMD Ryzen 5 5600X', '16GB DDR4', '1TB SSD', 'NVIDIA GeForce RTX 3070', '15.6\" Full HD', NULL, '9 hours', 2.3, '2024-12-01 23:17:46'),
(17, 'Intel Core i3-10100', '8GB DDR4', '512GB SSD', 'Intel UHD Graphics', '14\" Full HD', NULL, '6 hours', 1.7, '2024-12-01 23:17:46'),
(18, 'Intel Core i7-12700K', '32GB DDR5', '2TB SSD', 'NVIDIA GeForce RTX 4080', '17.3\" 4K', NULL, '13 hours', 2.8, '2024-12-01 23:17:46'),
(19, 'Intel Core i5-11600K', '16GB DDR4', '1TB SSD', 'NVIDIA GeForce RTX 3060', '15.6\" Full HD', NULL, '8 hours', 2, '2024-12-01 23:17:46'),
(20, 'AMD Ryzen 7 5700U', '16GB LPDDR4X', '1TB SSD', 'AMD Radeon Vega 8', '13.3\" Full HD', NULL, '10 hours', 1.4, '2024-12-01 23:17:46'),
(21, 'Apple M1 Max', '64GB Unified', '4TB SSD', 'Apple Integrated Graphics', '16\" Retina', NULL, '21 hours', 2, '2024-12-01 23:17:46'),
(22, 'Intel Core i9-11900K', '64GB DDR4', '4TB SSD', 'NVIDIA GeForce RTX 3090', '17.3\" 4K', NULL, '10 hours', 3.5, '2024-12-01 23:18:20'),
(23, 'AMD Ryzen 7 5800H', '32GB DDR4', '1TB SSD', 'NVIDIA GeForce RTX 3060', '15.6\" Full HD', NULL, '8 hours', 2, '2024-12-01 23:18:20'),
(24, 'Intel Core i7-11800H', '16GB DDR4', '512GB SSD', 'NVIDIA GeForce GTX 1650', '14\" Full HD', NULL, '7 hours', 1.9, '2024-12-01 23:18:20'),
(25, 'Apple M1 Pro', '32GB Unified', '1TB SSD', 'Apple Integrated Graphics', '16\" Retina', NULL, '20 hours', 2.1, '2024-12-01 23:18:20'),
(26, 'Intel Core i5-11300H', '8GB DDR4', '256GB SSD', 'Intel Iris Xe Graphics', '14\" Full HD', NULL, '6 hours', 1.5, '2024-12-01 23:18:20'),
(27, 'AMD Ryzen 9 5950X', '128GB DDR4', '2TB SSD', 'NVIDIA GeForce RTX 3090', '17\" 4K', NULL, '12 hours', 3.6, '2024-12-01 23:18:20'),
(28, 'Intel Core i5-11400', '16GB DDR4', '512GB SSD', 'Intel Iris Xe Graphics', '13.3\" Full HD', NULL, '8 hours', 1.3, '2024-12-01 23:18:20'),
(29, 'Intel Core i7-12700', '32GB DDR5', '1TB SSD', 'NVIDIA GeForce RTX 3080', '15.6\" Full HD', NULL, '9 hours', 2.2, '2024-12-01 23:18:20'),
(30, 'Apple M1', '8GB Unified', '256GB SSD', 'Apple Integrated Graphics', '13.3\" Retina', NULL, '15 hours', 1.2, '2024-12-01 23:18:20'),
(31, 'AMD Ryzen 7 5700U', '16GB LPDDR4X', '1TB SSD', 'AMD Radeon Vega 8', '15.6\" Full HD', NULL, '10 hours', 1.7, '2024-12-01 23:18:20'),
(32, 'Intel Core i9-10980HK', '32GB DDR4', '1TB SSD', 'NVIDIA GeForce RTX 3080', '16\" 4K', NULL, '11 hours', 2.8, '2024-12-01 23:18:20'),
(33, 'Intel Core i7-1185G7', '16GB LPDDR4X', '512GB SSD', 'Intel Iris Xe Graphics', '14\" Full HD', NULL, '9 hours', 1.6, '2024-12-01 23:18:20'),
(34, 'AMD Ryzen 5 4600H', '8GB DDR4', '256GB SSD', 'NVIDIA GeForce GTX 1650', '15.6\" Full HD', NULL, '7 hours', 2.3, '2024-12-01 23:18:20'),
(35, 'Intel Core i5-12500H', '8GB DDR4', '512GB SSD', 'Intel Iris Xe Graphics', '13.3\" Full HD', NULL, '8 hours', 1.4, '2024-12-01 23:18:20'),
(36, 'Apple M2', '16GB Unified', '1TB SSD', 'Apple Integrated Graphics', '14\" Retina', NULL, '18 hours', 1.5, '2024-12-01 23:18:20'),
(37, 'Intel Core i7-1165G7', '16GB LPDDR4X', '512GB SSD', 'Intel Iris Xe Graphics', '14\" Full HD', NULL, '9 hours', 1.3, '2024-12-01 23:18:45'),
(38, 'AMD Ryzen 7 5700U', '8GB DDR4', '256GB SSD', 'AMD Radeon RX Vega 7', '13.3\" Full HD', NULL, '7 hours', 1.5, '2024-12-01 23:18:45'),
(39, 'Intel Core i9-11980HK', '32GB DDR4', '2TB SSD', 'NVIDIA GeForce RTX 3060', '17.3\" Full HD', NULL, '10 hours', 3.8, '2024-12-01 23:18:45'),
(40, 'Apple M1 Max', '64GB Unified', '4TB SSD', 'Apple Integrated Graphics', '16\" Retina', NULL, '22 hours', 2.3, '2024-12-01 23:18:45'),
(41, 'Intel Core i7-11700K', '64GB DDR4', '1TB SSD', 'NVIDIA GeForce RTX 3080', '15.6\" Full HD', NULL, '12 hours', 2.4, '2024-12-01 23:18:45'),
(42, 'AMD Ryzen 5 4500U', '8GB LPDDR4X', '512GB SSD', 'AMD Radeon Vega 6', '14\" Full HD', NULL, '8 hours', 1.4, '2024-12-01 23:18:45'),
(43, 'Intel Core i9-10885H', '64GB DDR4', '2TB SSD', 'NVIDIA GeForce RTX 3070', '16\" Full HD', NULL, '9 hours', 2.5, '2024-12-01 23:18:45'),
(44, 'Apple M2 Pro', '32GB Unified', '1TB SSD', 'Apple Integrated Graphics', '14\" Retina', NULL, '18 hours', 1.6, '2024-12-01 23:18:45'),
(45, 'Intel Core i7-11800H', '16GB DDR4', '512GB SSD', 'Intel Iris Xe Graphics', '13.3\" Full HD', NULL, '7 hours', 1.2, '2024-12-01 23:18:45'),
(46, 'AMD Ryzen 9 5900HX', '32GB DDR4', '1TB SSD', 'NVIDIA GeForce RTX 3080', '17.3\" 4K', NULL, '10 hours', 3.2, '2024-12-01 23:18:45'),
(47, 'Intel Core i5-12450H', '16GB DDR4', '512GB SSD', 'NVIDIA GeForce GTX 1650', '15.6\" Full HD', NULL, '8 hours', 2.1, '2024-12-01 23:18:45'),
(48, 'Apple M1', '8GB Unified', '256GB SSD', 'Apple Integrated Graphics', '13.3\" Retina', NULL, '14 hours', 1.3, '2024-12-01 23:18:45'),
(49, 'Intel Core i7-10750H', '16GB DDR4', '512GB SSD', 'NVIDIA GeForce GTX 1660 Ti', '15.6\" Full HD', NULL, '7 hours', 2, '2024-12-01 23:18:45'),
(50, 'AMD Ryzen 7 3800X', '64GB DDR4', '2TB SSD', 'NVIDIA GeForce RTX 3090', '17.3\" Full HD', NULL, '11 hours', 3.4, '2024-12-01 23:18:45'),
(51, 'Intel Core i5-10600K', '32GB DDR4', '1TB SSD', 'NVIDIA GeForce RTX 3070', '16\" Full HD', NULL, '9 hours', 2.3, '2024-12-01 23:18:45'),
(52, 'Apple M1', '16GB Unified', '512GB SSD', 'Apple Integrated Graphics', '13.3\" Retina', NULL, '20 hours', 1.1, '2024-12-01 23:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `config_id` int NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `Quantity` int NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `countClick` int NOT NULL,
  `brand_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`, `config_id`, `created_at`, `Quantity`, `img`, `countClick`, `brand_id`) VALUES
(205, 'MacBook Air M1', '999.99', 4, '2024-12-04 12:06:36', 15, 'https://example.com/macbook_air.jpg', 100, 1),
(206, 'Dell Inspiron 15', '849.99', 2, '2024-12-04 12:06:36', 20, 'https://example.com/inspiron.jpg', 50, 2),
(207, 'HP Pavilion 14', '799.99', 3, '2024-12-04 12:06:36', 18, 'https://example.com/pavilion.jpg', 80, 3),
(208, 'Lenovo ThinkPad X1 Carbon', '1299.99', 1, '2024-12-04 12:06:36', 12, 'https://example.com/thinkpad.jpg', 75, 4),
(209, 'Acer Swift 3', '699.99', 2, '2024-12-04 12:06:36', 25, 'https://example.com/swift3.jpg', 60, 5),
(210, 'Asus ROG Zephyrus G14', '1499.99', 3, '2024-12-04 12:06:36', 10, 'https://example.com/zephyrus.jpg', 150, 6),
(211, 'Microsoft Surface Laptop 4', '1199.99', 4, '2024-12-04 12:06:36', 20, 'https://example.com/surface.jpg', 140, 7),
(212, 'Razer Blade 15', '1799.99', 1, '2024-12-04 12:06:36', 8, 'https://example.com/blade.jpg', 90, 8),
(213, 'Samsung Galaxy Book Pro', '1099.99', 2, '2024-12-04 12:06:36', 22, 'https://example.com/galaxybook.jpg', 110, 9),
(214, 'Sony VAIO SX14', '1399.99', 3, '2024-12-04 12:06:36', 7, 'https://example.com/vaio.jpg', 90, 10),
(215, 'Huawei MateBook X Pro', '1299.99', 4, '2024-12-04 12:06:36', 11, 'https://example.com/matebook.jpg', 100, 11),
(216, 'Toshiba Dynabook Tecra', '999.99', 1, '2024-12-04 12:06:36', 14, 'https://example.com/dynabook.jpg', 60, 12),
(217, 'Apple Mac Mini M2', '699.99', 4, '2024-12-04 12:06:36', 30, 'https://example.com/macmini.jpg', 80, 1),
(218, 'Dell G15 Gaming', '1199.99', 2, '2024-12-04 12:06:36', 16, 'https://example.com/g15.jpg', 90, 2),
(219, 'HP EliteBook 840', '1049.99', 3, '2024-12-04 12:06:36', 12, 'https://example.com/elitebook.jpg', 75, 3),
(220, 'Lenovo IdeaPad Slim 7', '999.99', 1, '2024-12-04 12:06:36', 19, 'https://example.com/ideapad.jpg', 65, 4),
(221, 'Acer Aspire 5', '549.99', 2, '2024-12-04 12:06:36', 40, 'https://example.com/aspire.jpg', 50, 5),
(222, 'Asus VivoBook S15', '799.99', 3, '2024-12-04 12:06:36', 18, 'https://example.com/vivobook.jpg', 55, 6),
(223, 'Microsoft Surface Pro 8', '899.99', 4, '2024-12-04 12:06:36', 25, 'https://example.com/surfacepro.jpg', 70, 7),
(224, 'Razer Blade Stealth 13', '1499.99', 1, '2024-12-04 12:06:36', 9, 'https://example.com/stealth.jpg', 120, 8);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int NOT NULL,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  `rating` tinyint NOT NULL,
  `comment` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `action` int NOT NULL DEFAULT '0',
  `ban` int NOT NULL DEFAULT '0',
  `premium` int NOT NULL DEFAULT '0',
  `ngaythamgia` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `point` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `name`, `username`, `password`, `email`, `phone`, `action`, `ban`, `premium`, `ngaythamgia`, `point`) VALUES
(1, 'doquochuy', 'huydz', 'huyde', 'huydqph53310@gmail.com', '0123456789', 0, 0, 0, '2024-10-26 00:46:33', 0),
(2, 'doquochuy', 'huydz', 'huydz', '123', '0123456789', 0, 0, 0, '2024-10-26 00:46:33', 0),
(3, 'doquochuy', 'huydz', 'huyde', 'huydqph53310@gmail.com', '0123456789', 0, 0, 0, '2024-10-26 00:46:33', 0),
(4, 'doquochuy', 'Admin', '123', 'huy02112004@gmail.com', '0865720862', 0, 0, 0, '2024-10-26 00:46:33', 0),
(5, 'Bảo Hiểm', 'Nguyen Quoc Anh', '123', 'huy02112004@gmail.com', '0865720862', 0, 0, 0, '2024-10-26 00:46:33', 0),
(6, 'Đỗ Quốc Huy', 'Admin', '123', 'huy02112004@gmail.com', '0865720862', 0, 0, 0, '2024-10-26 00:46:33', 0),
(7, 'Đỗ Quốc Huy', 'Admin1', '12345', 'Admin.runsytem.mod@huydev.id.vn', '0865720862', 0, 0, 0, '2024-10-26 00:46:33', 0),
(8, 'Đỗ Quốc Huy', 'Admin1', '123456', '1.a@gmail.com', '0865720862', 0, 0, 0, '2024-10-26 00:46:33', 0),
(9, 'Đỗ Quốc Huy', 'Đỗ Quốc Huy', '123123', 'huy02112004@gmail.com', '0865720862', 0, 0, 0, '2024-10-26 00:46:33', 0),
(10, 'doquochuy', 'Nguyen Quoc Anh', '123', 'huy02112004@gmail.com', '0865720862', 0, 0, 0, '2024-10-26 00:46:33', 0),
(11, 'doquochuy', 'huyd35427', '123', '1.a@gmail.com', '0342346036', 0, 0, 0, '2024-11-12 15:13:44', 0),
(13, 'doquochuy', 'admin', '123', 'huy02112004@gmail.com', '0865720862', 0, 0, 0, '2024-11-13 01:13:38', 0),
(14, 'doquochuy', 'admin', '123', 'huy02112004@gmail.com', '0865720862', 0, 0, 0, '2024-11-13 01:18:22', 0),
(15, 'doquochuy', 'admin', '123', 'huy02112004@gmail.com', '0865720862', 0, 0, 0, '2024-11-13 01:28:29', 0),
(16, 'Đỗ Quốc Huy', 'huyd35427', '123', '1123.a@gmail.com', '0865720863', 0, 0, 0, '2024-11-13 13:21:02', 0),
(17, 'Đỗ Quốc Huy', 'huyd354271', '123', '2.a@gmail.com', '0342346036', 0, 0, 0, '2024-11-13 13:26:41', 0),
(20, 'Đỗ Quốc Huy', 'huyd354271', '123123', '1123.a@gmail.com', '865720862', 0, 0, 0, '2024-11-13 13:29:23', 0),
(21, 'Nguyễn Quốc Anh', 'adminlo', '123', 'Admin.runsytem.mod@huydev.id.vn', '0342346036', 0, 0, 0, '2024-11-13 13:41:59', 0),
(22, 'Đỗ Quốc Huy', 'admin1', '123123', 'Admin.runsytem.mod@huydev.id.vn', '0342346036', 0, 0, 0, '2024-11-13 13:43:34', 0),
(23, 'Đỗ Quốc Huy', 'admin', '123', 'Admin.runsytem.mod@huydev.id.vn', '0342346036', 0, 0, 0, '2024-11-13 17:23:24', 0),
(24, 'Đỗ Quốc Huy', 'nguyen quoc anh', '123', 'huy02112004@gmail.com', '0865720862', 0, 0, 0, '2024-11-13 18:31:30', 0),
(25, 'Đỗ Quốc Huy', 'huykhanh', '123456', 'Admin.runsytem.mod@huydev.id.vn', '0342346036', 0, 0, 0, '2024-11-14 00:58:07', 0),
(26, 'Đỗ Quốc Huy', 'huy2222', '111', '1231.a@gmail.com', '0865720863', 0, 0, 0, '2024-11-15 10:12:40', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_item_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `detailbill`
--
ALTER TABLE `detailbill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_id` (`bill_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `hardware_configurations`
--
ALTER TABLE `hardware_configurations`
  ADD PRIMARY KEY (`config_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `config_id` (`config_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD KEY `client` (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `cart_item_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `detailbill`
--
ALTER TABLE `detailbill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hardware_configurations`
--
ALTER TABLE `hardware_configurations`
  MODIFY `config_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`cart_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);

--
-- Constraints for table `detailbill`
--
ALTER TABLE `detailbill`
  ADD CONSTRAINT `detailbill_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `detailbill_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`config_id`) REFERENCES `hardware_configurations` (`config_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
