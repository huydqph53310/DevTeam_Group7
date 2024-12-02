-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 02, 2024 at 02:40 AM
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
(106, 'Apple MacBook Pro 13-inch 2021', '1799.99', 1, '2024-12-01 23:46:22', 50, 'macbook_pro_13_2021.jpg', 2000, 1),
(107, 'Apple iMac 24-inch 2021', '1299.99', 2, '2024-12-01 23:46:22', 30, 'imac_24_2021.jpg', 1800, 1),
(108, 'Apple MacBook Pro 13-inch 2021', '1799.99', 1, '2024-12-01 23:46:22', 50, 'macbook_pro_13_2021.jpg', 2000, 1),
(109, 'Apple iMac 24-inch 2021', '1299.99', 2, '2024-12-01 23:46:22', 30, 'imac_24_2021.jpg', 1800, 1),
(110, 'Dell Inspiron 15', '699.99', 3, '2024-12-01 23:46:22', 40, 'dell_inspiron_15.jpg', 950, 2),
(111, 'Dell Alienware M15 R4', '1899.99', 4, '2024-12-01 23:46:22', 25, 'alienware_m15_r4.jpg', 1500, 2),
(112, 'Dell Inspiron 15', '699.99', 3, '2024-12-01 23:46:22', 40, 'dell_inspiron_15.jpg', 950, 2),
(113, 'Dell Alienware M15 R4', '1899.99', 4, '2024-12-01 23:46:22', 25, 'alienware_m15_r4.jpg', 1500, 2),
(114, 'HP Envy 13', '849.99', 5, '2024-12-01 23:46:22', 60, 'hp_envy_13.jpg', 1200, 3),
(115, 'HP Omen 15', '1499.99', 6, '2024-12-01 23:46:22', 50, 'hp_omen_15.jpg', 1000, 3),
(116, 'HP Envy 13', '849.99', 5, '2024-12-01 23:46:22', 60, 'hp_envy_13.jpg', 1200, 3),
(117, 'HP Omen 15', '1499.99', 6, '2024-12-01 23:46:22', 50, 'hp_omen_15.jpg', 1000, 3),
(118, 'Lenovo Yoga 7i', '899.99', 7, '2024-12-01 23:46:22', 70, 'lenovo_yoga_7i.jpg', 1100, 4),
(119, 'Lenovo Legion 5 Pro', '1299.99', 8, '2024-12-01 23:46:22', 20, 'lenovo_legion_5_pro.jpg', 1300, 4),
(120, 'Lenovo Yoga 7i', '899.99', 7, '2024-12-01 23:46:22', 70, 'lenovo_yoga_7i.jpg', 1100, 4),
(121, 'Lenovo Legion 5 Pro', '1299.99', 8, '2024-12-01 23:46:22', 20, 'lenovo_legion_5_pro.jpg', 1300, 4),
(122, 'Asus TUF Gaming F15', '1099.99', 9, '2024-12-01 23:46:22', 60, 'asus_tuf_f15.jpg', 1600, 5),
(123, 'Asus ROG Zephyrus G14', '1399.99', 10, '2024-12-01 23:46:22', 50, 'rog_zephyrus_g14.jpg', 1900, 5),
(124, 'Asus TUF Gaming F15', '1099.99', 9, '2024-12-01 23:46:22', 60, 'asus_tuf_f15.jpg', 1600, 5),
(125, 'Asus ROG Zephyrus G14', '1399.99', 10, '2024-12-01 23:46:22', 50, 'rog_zephyrus_g14.jpg', 1900, 5),
(126, 'Laptop Apple M1', '1299.99', 6, '2024-12-01 23:17:23', 50, 'apple_m1.jpg', 0, 1),
(127, 'Laptop Intel Core i7-10750H', '1499.99', 1, '2024-12-01 23:17:23', 30, 'intel_i7_10750h.jpg', 0, 2),
(128, 'Laptop Intel Core i5-10300H', '1199.99', 2, '2024-12-01 23:17:23', 40, 'intel_i5_10300h.jpg', 0, 3),
(129, 'Laptop AMD Ryzen 7 5800H', '1599.99', 3, '2024-12-01 23:17:23', 25, 'amd_ryzen_5800h.jpg', 0, 4),
(130, 'Laptop Intel Core i9-12900K', '2399.99', 4, '2024-12-01 23:17:23', 10, 'intel_i9_12900k.jpg', 0, 5),
(131, 'Laptop Intel Core i5-10210U', '999.99', 5, '2024-12-01 23:17:23', 35, 'intel_i5_10210u.jpg', 0, 6),
(132, 'Laptop Apple M1', '1399.99', 6, '2024-12-01 23:17:23', 15, 'apple_m1_512gb.jpg', 0, 1),
(133, 'Laptop Intel Core i7-1165G7', '1499.99', 7, '2024-12-01 23:17:23', 45, 'intel_i7_1165g7.jpg', 0, 7),
(134, 'Laptop Intel Core i7-11800H', '1699.99', 8, '2024-12-01 23:17:46', 50, 'intel_i7_11800h.jpg', 0, 2),
(135, 'Laptop AMD Ryzen 5 3500U', '899.99', 9, '2024-12-01 23:17:46', 60, 'amd_ryzen_3500u.jpg', 0, 3),
(136, 'Laptop Intel Core i9-10900K', '2299.99', 10, '2024-12-01 23:17:46', 20, 'intel_i9_10900k.jpg', 0, 4),
(137, 'Laptop Apple M1 Pro', '1699.99', 11, '2024-12-01 23:17:46', 10, 'apple_m1_pro.jpg', 0, 1),
(138, 'Laptop Intel Core i7-1165G7', '1399.99', 12, '2024-12-01 23:17:46', 40, 'intel_i7_1165g7_512gb.jpg', 0, 2),
(139, 'Laptop Intel Core i5-1135G7', '1199.99', 13, '2024-12-01 23:17:46', 30, 'intel_i5_1135g7.jpg', 0, 3),
(140, 'Laptop AMD Ryzen 9 5900X', '2499.99', 14, '2024-12-01 23:17:46', 12, 'amd_ryzen_5900x.jpg', 0, 4),
(141, 'Laptop Intel Core i5-12400F', '1199.99', 15, '2024-12-01 23:17:46', 50, 'intel_i5_12400f.jpg', 0, 5),
(142, 'Laptop AMD Ryzen 5 5600X', '1299.99', 16, '2024-12-01 23:17:46', 15, 'amd_ryzen_5600x.jpg', 0, 6),
(143, 'Laptop Intel Core i3-10100', '799.99', 17, '2024-12-01 23:17:46', 40, 'intel_i3_10100.jpg', 0, 7),
(144, 'Laptop Intel Core i7-12700K', '1999.99', 18, '2024-12-01 23:17:46', 30, 'intel_i7_12700k.jpg', 0, 8),
(145, 'Laptop Intel Core i5-11600K', '1299.99', 19, '2024-12-01 23:17:46', 25, 'intel_i5_11600k.jpg', 0, 9),
(146, 'Laptop AMD Ryzen 7 5700U', '1099.99', 20, '2024-12-01 23:17:46', 20, 'amd_ryzen_5700u.jpg', 0, 1),
(147, 'Laptop Apple M1 Max', '2799.99', 21, '2024-12-01 23:17:46', 15, 'apple_m1_max.jpg', 0, 2),
(148, 'Laptop Intel Core i9-11900K', '2299.99', 22, '2024-12-01 23:18:20', 30, 'intel_i9_11900k.jpg', 0, 3),
(149, 'Laptop AMD Ryzen 7 5800H', '1799.99', 23, '2024-12-01 23:18:20', 45, 'amd_ryzen_5800h_512gb.jpg', 0, 4),
(150, 'Laptop Intel Core i7-11800H', '1499.99', 24, '2024-12-01 23:18:20', 40, 'intel_i7_11800h_512gb.jpg', 0, 5),
(151, 'Laptop Apple M1 Pro', '1899.99', 25, '2024-12-01 23:18:20', 10, 'apple_m1_pro_256gb.jpg', 0, 1),
(152, 'Laptop Acer Nitro 5', '1399.99', 1, '2024-12-01 23:18:23', 30, 'acer_nitro_5.jpg', 0, 2),
(153, 'Laptop Dell Inspiron 15', '1099.99', 2, '2024-12-01 23:18:23', 40, 'dell_inspiron_15.jpg', 0, 3),
(154, 'Laptop HP Pavilion', '899.99', 3, '2024-12-01 23:18:23', 35, 'hp_pavilion.jpg', 0, 4),
(155, 'Laptop Lenovo Legion 5', '1599.99', 4, '2024-12-01 23:18:23', 20, 'lenovo_legion_5.jpg', 0, 5),
(156, 'Laptop MSI GF63', '1299.99', 5, '2024-12-01 23:18:23', 45, 'msi_gf63.jpg', 0, 6),
(157, 'Laptop Asus VivoBook', '799.99', 6, '2024-12-01 23:18:23', 50, 'asus_vivobook.jpg', 0, 1),
(158, 'Laptop Dell XPS 13', '1499.99', 7, '2024-12-01 23:18:23', 30, 'dell_xps_13.jpg', 0, 2),
(159, 'Laptop Apple MacBook Air', '1199.99', 8, '2024-12-01 23:18:23', 25, 'macbook_air.jpg', 0, 1),
(160, 'Laptop HP Spectre x360', '1699.99', 9, '2024-12-01 23:18:23', 15, 'hp_spectre_x360.jpg', 0, 3),
(161, 'Laptop Razer Blade 15', '1899.99', 10, '2024-12-01 23:18:23', 10, 'razer_blade_15.jpg', 0, 2),
(162, 'Laptop Lenovo ThinkPad X1', '1799.99', 11, '2024-12-01 23:18:23', 30, 'lenovo_thinkpad_x1.jpg', 0, 4),
(163, 'Laptop MSI Stealth GS66', '1799.99', 12, '2024-12-01 23:18:23', 35, 'msi_stealth_gs66.jpg', 0, 5),
(164, 'Laptop Alienware m15', '2099.99', 13, '2024-12-01 23:18:23', 20, 'alienware_m15.jpg', 0, 6),
(165, 'Laptop HP Envy 13', '1099.99', 14, '2024-12-01 23:18:23', 40, 'hp_envy_13.jpg', 0, 3),
(166, 'Laptop Acer Aspire 5', '899.99', 15, '2024-12-01 23:18:23', 60, 'acer_aspire_5.jpg', 0, 7),
(167, 'Laptop Asus ZenBook 14', '1399.99', 16, '2024-12-01 23:18:23', 30, 'asus_zenbook_14.jpg', 0, 5),
(168, 'Laptop Microsoft Surface Laptop 4', '1599.99', 17, '2024-12-01 23:18:23', 25, 'surface_laptop_4.jpg', 0, 8),
(169, 'Laptop Lenovo Ideapad 3', '749.99', 18, '2024-12-01 23:18:23', 50, 'lenovo_ideapad_3.jpg', 0, 3),
(170, 'Laptop HP Omen 15', '1899.99', 19, '2024-12-01 23:18:23', 20, 'hp_omen_15.jpg', 0, 4),
(171, 'Laptop Acer Predator Helios', '2199.99', 20, '2024-12-01 23:18:23', 15, 'acer_predator_helios.jpg', 0, 5),
(172, 'Laptop Gigabyte AORUS', '1799.99', 21, '2024-12-01 23:18:23', 30, 'gigabyte_aorus.jpg', 0, 6),
(173, 'Laptop Samsung Galaxy Book Pro', '1299.99', 22, '2024-12-01 23:18:23', 40, 'samsung_galaxy_book.jpg', 0, 2),
(174, 'Laptop Dell G5 15', '1499.99', 23, '2024-12-01 23:18:23', 25, 'dell_g5_15.jpg', 0, 3),
(175, 'Laptop Asus TUF Gaming', '1599.99', 24, '2024-12-01 23:18:23', 35, 'asus_tuf_gaming.jpg', 0, 4),
(176, 'Laptop HP Elite Dragonfly', '2199.99', 25, '2024-12-01 23:18:23', 15, 'hp_elite_dragonfly.jpg', 0, 1),
(177, 'Laptop MacBook Pro 14', '1999.99', 26, '2024-12-01 23:18:23', 20, 'macbook_pro_14.jpg', 0, 2),
(178, 'Laptop Apple MacBook Pro 16', '2399.99', 27, '2024-12-01 23:18:23', 10, 'macbook_pro_16.jpg', 0, 1),
(179, 'Laptop HP ProBook 450', '799.99', 28, '2024-12-01 23:18:23', 60, 'hp_probook_450.jpg', 0, 4),
(180, 'Laptop Lenovo Yoga 9i', '1699.99', 29, '2024-12-01 23:18:23', 30, 'lenovo_yoga_9i.jpg', 0, 3),
(181, 'Laptop Asus ROG Strix', '2499.99', 30, '2024-12-01 23:18:23', 20, 'asus_rog_strix.jpg', 0, 4),
(182, 'Laptop Dell Latitude 14', '1199.99', 31, '2024-12-01 23:18:23', 40, 'dell_latitude_14.jpg', 0, 5),
(183, 'Laptop HP EliteBook 850', '1599.99', 32, '2024-12-01 23:18:23', 25, 'hp_elitebook_850.jpg', 0, 6),
(184, 'Laptop MSI GE76 Raider', '2199.99', 33, '2024-12-01 23:18:23', 15, 'msi_ge76_raider.jpg', 0, 7),
(185, 'Laptop Lenovo ThinkPad L15', '899.99', 34, '2024-12-01 23:18:23', 50, 'lenovo_thinkpad_l15.jpg', 0, 5),
(186, 'Laptop Acer Swift 3', '999.99', 35, '2024-12-01 23:18:23', 40, 'acer_swift_3.jpg', 0, 6),
(187, 'Laptop Razer Blade Stealth', '1799.99', 36, '2024-12-01 23:18:23', 25, 'razer_blade_stealth.jpg', 0, 7),
(188, 'Laptop Apple MacBook Pro 13', '1799.99', 37, '2024-12-01 23:18:23', 20, 'macbook_pro_13.jpg', 0, 8),
(189, 'Laptop ASUS ProArt StudioBook', '1899.99', 38, '2024-12-01 23:18:23', 15, 'asus_proart_studiobook.jpg', 0, 1),
(190, 'Laptop Lenovo ThinkPad P1', '2499.99', 39, '2024-12-01 23:18:23', 10, 'lenovo_thinkpad_p1.jpg', 0, 2),
(191, 'Laptop HP ZBook Firefly', '1699.99', 40, '2024-12-01 23:18:23', 20, 'hp_zbook_firefly.jpg', 0, 3),
(192, 'Laptop Alienware X17', '2599.99', 41, '2024-12-01 23:18:23', 10, 'alienware_x17.jpg', 0, 4),
(193, 'Laptop MSI Creator Z16', '2099.99', 42, '2024-12-01 23:18:23', 25, 'msi_creator_z16.jpg', 0, 5),
(194, 'Laptop Lenovo Legion 7i', '2199.99', 43, '2024-12-01 23:18:23', 30, 'lenovo_legion_7i.jpg', 0, 6),
(195, 'Laptop Acer Chromebook Spin', '699.99', 44, '2024-12-01 23:18:23', 50, 'acer_chromebook_spin.jpg', 0, 7),
(196, 'Laptop Microsoft Surface Book 3', '2299.99', 45, '2024-12-01 23:18:23', 15, 'surface_book_3.jpg', 0, 8),
(197, 'Laptop HP Elite Dragonfly G2', '2499.99', 46, '2024-12-01 23:18:23', 10, 'hp_elite_dragonfly_g2.jpg', 0, 1),
(198, 'Laptop Acer Swift 5', '1399.99', 47, '2024-12-01 23:18:23', 20, 'acer_swift_5.jpg', 0, 2),
(199, 'Laptop Lenovo ThinkPad X1 Carbon', '2199.99', 48, '2024-12-01 23:18:23', 25, 'lenovo_thinkpad_x1_carbon.jpg', 0, 3),
(200, 'Laptop MSI GE66 Raider', '1899.99', 49, '2024-12-01 23:18:23', 30, 'msi_ge66_raider.jpg', 0, 4),
(201, 'Laptop Dell Precision 5550', '2299.99', 50, '2024-12-01 23:18:23', 20, 'dell_precision_5550.jpg', 0, 5);

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
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

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
