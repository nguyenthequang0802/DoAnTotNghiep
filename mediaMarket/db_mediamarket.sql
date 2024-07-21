-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2024 at 03:34 PM
-- Server version: 5.6.51
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mediamarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin 1', 'admin1@gmail.com', NULL, '$2y$12$vwpiJs/JJBlndAvEUsVpOOKkZbu3ccFqUfiFkIxBfte9UCBFuYvly', NULL, '2024-05-14 15:03:35', '2024-05-14 15:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `description`, `status`, `path`, `created_at`, `updated_at`) VALUES
(4, 'Mua sắm ngày hè', 'Deal hot ngày hè', 1, 'http://media.th/storage/banner/banner-1.jpg', '2024-06-28 07:23:47', '2024-06-28 07:23:47'),
(5, 'Phụ kiện ngon bổ rẻ', 'Phụ kiện ngon bổ rẻ, giá hời', 1, 'http://media.th/storage/banner/banner-2.jpg', '2024-06-28 07:24:31', '2024-06-28 07:24:31'),
(6, 'Sạc dự phòng giá sốc', 'Sạc dự phòng giá sốc', 1, 'http://media.th/storage/banner/banner-3.jpg', '2024-06-28 07:25:08', '2024-06-28 07:25:08'),
(7, 'Phiên bán hàng đặc biệt', 'Phiên bán hàng đặc biệt', 1, 'http://media.th/storage/banner/banner-4.jpg', '2024-06-28 07:25:58', '2024-06-28 07:25:58'),
(8, 'Hè rực rỡ', 'Hè rực rỡ', 0, 'http://media.th/storage/banner/banner-5.jpg', '2024-06-28 07:26:25', '2024-06-28 07:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `icon_path`, `country`, `created_at`, `updated_at`) VALUES
(2, 'Iphone', 'Iphone', 'http://media.th/storage/Brand/Apple-Logo.png', 'USA', '2024-06-03 15:18:28', '2024-06-11 12:13:48'),
(3, 'Samsung', 'samsung', 'http://media.th/storage/Brand/Samsung_Logo.svg.png', 'Hàn Quốc', '2024-06-03 15:19:47', '2024-06-03 15:19:47'),
(4, 'Huawei', 'huawei', 'http://media.th/storage/Brand/Huawei-Logo.png', 'Trung Quốc', '2024-06-03 15:20:47', '2024-06-03 15:20:47'),
(5, 'Lenovo', 'Lenovo', 'http://media.th/storage/Brand/Lenovo-Logo-1.png', 'Trung Quốc', '2024-06-03 15:21:39', '2024-06-03 15:21:50'),
(6, 'Xiaomi', 'xiaomi', 'http://media.th/storage/Brand/Xiaomi-Logo.png', 'Trung Quốc', '2024-06-03 15:22:46', '2024-06-03 15:22:46'),
(7, 'Dell', 'dell', 'http://media.th/storage/Brand/Dell_Logo.svg.png', 'USA', '2024-06-03 15:23:38', '2024-06-03 15:23:38'),
(8, 'HP', 'hp', 'http://media.th/storage/Brand/2048px-HP_logo_2012.svg.png', 'USA', '2024-06-03 15:24:40', '2024-06-03 15:24:40'),
(9, 'OPPO', 'oppo', 'http://media.th/storage/Brand/oppo-logo.png', 'Trung Quốc', '2024-06-03 15:25:49', '2024-06-03 15:25:49'),
(10, 'Nokia', 'nokia', 'http://media.th/storage/Brand/Nokia-Logo.png', 'Phần Lan', '2024-06-03 15:26:43', '2024-06-03 15:26:43'),
(11, 'Vivo', 'vivo', 'http://media.th/storage/Brand/Vivo_logo_2019.svg.png', 'Trung Quốc', '2024-06-03 15:27:45', '2024-06-03 15:27:45'),
(12, 'Realme', 'realme', 'http://media.th/storage/Brand/Realme_logo.png', 'Trung Quốc', '2024-06-03 15:29:05', '2024-06-03 15:29:05'),
(13, 'Asus', 'asus', 'http://media.th/storage/Brand/Asus-Logo.png', 'Trung Quốc', '2024-06-03 15:31:09', '2024-06-03 15:31:09'),
(14, 'Acer', 'acer', 'http://media.th/storage/Brand/Acer_2011.svg.png', 'Trung Quốc', '2024-06-03 15:33:04', '2024-06-03 15:33:04'),
(15, 'MSI', 'msi', 'http://media.th/storage/Brand/images.png', 'Đài Loan', '2024-06-03 15:34:38', '2024-06-03 15:34:38'),
(16, 'LG', 'lg', 'http://media.th/storage/Brand/LG-Logo.png', 'Hàn Quốc', '2024-06-03 15:35:43', '2024-06-03 15:35:43'),
(17, 'Sony', 'sony', 'http://media.th/storage/Brand/Sony-logo.png', 'Hàn Quốc', '2024-06-03 15:37:46', '2024-06-03 15:37:46'),
(18, 'JBL', 'jbl', 'http://media.th/storage/Brand/2560px-JBL-Logo.svg.png', 'USA', '2024-06-03 15:39:11', '2024-06-03 15:39:11'),
(19, 'Marshall', 'marshall', 'http://media.th/storage/Brand/Marshall_logo.svg.png', 'Anh', '2024-06-03 15:40:32', '2024-06-03 15:40:32'),
(20, 'Beats', 'beats', 'http://media.th/storage/Brand/Beats_Electronics_logo.svg.png', 'USA', '2024-06-03 15:41:34', '2024-06-03 15:41:34'),
(21, 'Baseus', 'baseus', 'http://media.th/storage/Brand/baseus_logo.png', 'Trung Quốc', '2024-06-03 15:43:25', '2024-06-03 15:43:25'),
(22, 'Macbook', 'macbook', 'http://media.th/storage/Menu/icon/no_image.png', 'USA', '2024-06-11 12:12:02', '2024-06-11 12:12:02'),
(23, 'Apple', 'apple', 'http://media.th/storage/Brand/Apple-Logo.png', 'USA', '2024-07-14 13:19:11', '2024-07-14 13:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `model_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `slug`, `model_type`, `icon_path`, `description`, `status`, `created_at`, `updated_at`) VALUES
(7, NULL, 'Tin tức', 'tin-tuc', 'post', 'http://media.th/storage/Category/post/icon/news-64.png', 'tin tức', 1, '2024-06-07 11:27:18', '2024-07-03 11:04:41'),
(8, 7, 'Tin công nghệ', 'tin-cong-nghe', 'post', 'http://media.th/storage/Category/post/icon/no_image.png', 'Tin tức công nghệ', 1, '2024-06-07 11:28:06', '2024-07-08 06:10:34'),
(9, 7, 'Giới thiệu', 'gioi-thieu', 'post', 'http://media.th/storage/Category/post/icon/no_image.png', 'giới thiệu về cửa hàng', 1, '2024-06-07 11:30:38', '2024-07-08 06:10:48'),
(10, NULL, 'Khuyến mãi', 'khuyen-mai', 'post', 'http://media.th/storage/Category/post/icon/sale-tag-64.png', 'tin tức khuyến mãi, ưu đãi', 0, '2024-06-07 11:34:10', '2024-07-03 11:12:28'),
(11, NULL, 'Giới thiệu sản phẩm', 'gioi-thieu-san-pham', 'post', 'http://media.th/storage/Category/post/icon/no_image.png', 'bài viết giới thiệu sản phẩm', 0, '2024-06-07 11:35:01', '2024-07-08 06:10:17'),
(12, NULL, 'Đồ chơi công nghệ', 'do-choi-cong-nghe', 'product', 'http://media.th/storage/Category/product/icon/drone-64.png', 'Đồ chơi công nghệ: máy ảnh, gimble, drone, ....', 1, '2024-06-07 11:40:49', '2024-07-03 11:08:26'),
(13, NULL, 'Thiết bị âm thanh', 'thiet-bi-am-thanh', 'product', 'http://media.th/storage/Category/product/icon/headphone-64.png', 'Thiết bị âm thanh', 1, '2024-06-07 11:41:51', '2024-07-03 11:08:07'),
(14, NULL, 'Phụ kiện', 'phu-kien', 'product', 'http://media.th/storage/Category/product/icon/battery-50.png', 'phụ kiện: sạc, ốp lưng, bảo vệ màn hình,.....', 1, '2024-06-07 11:43:31', '2024-07-03 11:07:50'),
(15, NULL, 'Smartwatch', 'smartwatch', 'product', 'http://media.th/storage/Category/product/icon/smartwatch-50.png', 'đồng hồ thông minh', 1, '2024-06-07 11:44:18', '2024-07-03 11:07:22'),
(16, NULL, 'Tablet', 'tablet', 'product', 'http://media.th/storage/Category/product/icon/tablet-64.png', 'máy tính bảng', 1, '2024-06-07 11:45:20', '2024-07-03 11:06:55'),
(17, NULL, 'Laptop', 'laptop', 'product', 'http://media.th/storage/Category/product/icon/laptop-64.png', 'Laptop', 1, '2024-06-07 11:46:02', '2024-07-03 11:06:37'),
(18, NULL, 'Điện thoại', 'dien-thoai', 'product', 'http://media.th/storage/Category/product/icon/phone.png', 'điện thoại', 1, '2024-06-07 11:46:59', '2024-07-03 11:06:18'),
(27, 70, 'Iphone 12 series', 'iphone-12-series', 'product', '', 'Iphone 12 series', 0, '2024-06-07 12:38:44', '2024-06-12 04:45:05'),
(28, 70, 'Iphone 13 series', 'iphone-13-series', 'product', '', 'Iphone 13 series', 0, '2024-06-07 12:40:36', '2024-06-12 04:45:23'),
(29, 70, 'Iphone 14 series', 'iphone-14-series', 'product', '', 'Iphone 14 series', 1, '2024-06-07 12:40:52', '2024-06-12 04:45:42'),
(30, 70, 'Iphone 15 series', 'iphone-15-series', 'product', '', 'Iphone 15 series', 0, '2024-06-07 12:42:15', '2024-06-12 04:45:58'),
(31, 27, 'Iphone 12 64GB', 'iphone-12-64gb', 'product', '', 'Iphone 12 64GB', 0, '2024-06-07 12:49:58', '2024-06-07 12:49:58'),
(32, 27, 'Iphone 12 128GB', 'iphone-12-128gb', 'product', '', 'Iphone 12 128GB', 0, '2024-06-07 12:50:17', '2024-06-07 12:50:17'),
(33, 29, 'Iphone 14 128GB', 'iphone-14-128gb', 'product', '', 'Iphone 14 128GB', 0, '2024-06-07 12:51:29', '2024-06-07 12:51:29'),
(34, 29, 'Iphone 14 256GB', 'iphone-14-256gb', 'product', '', 'Iphone 14 256GB', 0, '2024-06-07 12:51:49', '2024-06-07 12:51:49'),
(35, 29, 'Iphone 14 512GB', 'iphone-14-512gb', 'product', '', 'Iphone 14 512GB', 0, '2024-06-07 12:52:49', '2024-06-07 12:53:17'),
(36, 29, 'Iphone 14 Plus 128GB', 'iphone-14-plus-128gb', 'product', '', 'Iphone 14 Plus 128GB', 0, '2024-06-07 12:53:50', '2024-06-07 12:53:50'),
(37, 29, 'Iphone 14 Plus 256GB', 'iphone-14-plus-256gb', 'product', '', 'Iphone 14 Plus 256GB', 0, '2024-06-07 12:55:43', '2024-06-07 12:55:43'),
(38, 29, 'Iphone 14 Plus 512GB', 'iphone-14-plus-512gb', 'product', '', 'Iphone 14 Plus 512GB', 0, '2024-06-07 12:56:10', '2024-06-07 12:56:10'),
(39, 29, 'Iphone 14 Pro 128GB', 'iphone-14-pro-128gb', 'product', '', 'Iphone 14 Pro 128GB', 0, '2024-06-07 12:58:29', '2024-06-07 12:58:29'),
(40, 29, 'Iphone 14 Pro 256GB', 'iphone-14-pro-256gb', 'product', '', 'Iphone 14 Pro 256GB', 0, '2024-06-07 12:58:48', '2024-06-07 12:58:48'),
(41, 29, 'Iphone 14 Pro 512GB', 'iphone-14-pro-512gb', 'product', '', 'Iphone 14 Pro 512GB', 0, '2024-06-07 12:59:22', '2024-06-07 12:59:22'),
(42, 29, 'Iphone 14 Pro 1TB', 'iphone-14-pro-1tb', 'product', '', 'Iphone 14 Pro 1TB', 0, '2024-06-07 12:59:45', '2024-06-07 12:59:45'),
(43, 29, 'Iphone 14 Promax 128GB', 'iphone-14-promax-128gb', 'product', '', 'Iphone 14 Promax 128GB', 0, '2024-06-07 13:05:29', '2024-06-07 13:05:29'),
(44, 29, 'Iphone 14 Promax 256GB', 'iphone-14-promax-256gb', 'product', '', 'Iphone 14 Promax 256GB', 0, '2024-06-07 13:05:46', '2024-06-07 13:05:46'),
(45, 29, 'Iphone 14 Promax 512GB', 'iphone-14-promax-512gb', 'product', '', 'Iphone 14 Promax 512GB', 0, '2024-06-07 13:06:24', '2024-06-07 13:06:24'),
(46, 29, 'Iphone 14 Promax 1TB', 'iphone-14-promax-1tb', 'product', '', 'Iphone 14 Promax 1TB', 0, '2024-06-07 13:08:55', '2024-06-07 13:08:55'),
(47, 30, 'Iphone 15 128GB', 'iphone-15-128gb', 'product', '', 'Iphone 15 128GB', 0, '2024-06-07 13:11:14', '2024-06-07 13:11:14'),
(48, 30, 'Iphone 15 256GB', 'iphone-15-256gb', 'product', '', 'Iphone 15 256GB', 0, '2024-06-07 13:14:39', '2024-06-07 13:14:39'),
(49, 30, 'Iphone 15 512GB', 'iphone-15-512gb', 'product', '', 'Iphone 15 512GB', 0, '2024-06-07 13:16:30', '2024-06-07 13:16:30'),
(50, 30, 'Iphone 15 Plus 128GB', 'iphone-15-plus-128gb', 'product', '', 'Iphone 15 Plus 128GB', 0, '2024-06-07 13:17:11', '2024-06-07 13:17:11'),
(51, 30, 'Iphone 15 Plus 256GB', 'iphone-15-plus-256gb', 'product', '', 'Iphone 15 Plus 256GB', 0, '2024-06-07 13:18:25', '2024-06-07 13:18:25'),
(52, 30, 'Iphone 15 Plus 512GB', 'iphone-15-plus-512gb', 'product', '', 'Iphone 15 Plus 512GB', 0, '2024-06-07 13:18:45', '2024-06-07 13:18:45'),
(53, 30, 'Iphone 15 Pro 256GB', 'iphone-15-pro-256gb', 'product', '', 'Iphone 15 Pro 256GB', 0, '2024-06-07 13:19:32', '2024-06-07 13:19:32'),
(54, 30, 'Iphone 15 Pro 512GB', 'iphone-15-pro-512gb', 'product', '', 'Iphone 15 Pro 512GB', 0, '2024-06-07 13:19:50', '2024-06-07 13:19:50'),
(55, 30, 'Iphone 15 Pro 1TB', 'iphone-15-pro-1tb', 'product', '', 'Iphone 15 Pro 1TB', 0, '2024-06-07 13:20:08', '2024-06-07 13:20:08'),
(56, 30, 'Iphone 15 Promax 256GB', 'iphone-15-promax-256gb', 'product', '', 'Iphone 15 Promax 256GB', 0, '2024-06-07 13:20:30', '2024-06-07 13:20:30'),
(57, 30, 'Iphone 15 Promax 512GB', 'iphone-15-promax-512gb', 'product', '', 'Iphone 15 Promax 512GB', 0, '2024-06-07 13:21:00', '2024-06-07 13:21:00'),
(58, 30, 'Iphone 15 Promax 1TB', 'iphone-15-promax-1tb', 'product', '', 'Iphone 15 Promax 1TB', 0, '2024-06-07 13:21:41', '2024-06-07 13:21:41'),
(59, 17, 'Dell', 'dell', 'product', '', 'laptop Dell', 1, '2024-06-08 06:14:12', '2024-06-08 06:14:12'),
(60, 17, 'HP', 'hp', 'product', '', 'Laptop HP', 1, '2024-06-08 06:14:40', '2024-06-08 06:14:40'),
(61, 17, 'Apple', 'laptop-apple', 'product', '', 'macbook', 1, '2024-06-08 06:15:42', '2024-06-16 05:28:02'),
(62, 14, 'Phụ kiện điện thoại', 'phu-kien-dien-thoai', 'product', '', 'Phụ kiện điện thoại', 1, '2024-06-08 06:16:33', '2024-06-08 06:16:33'),
(63, 14, 'Phụ kiện Laptop', 'phu-kien-laptop', 'product', '', 'Phụ kiện Laptop', 1, '2024-06-08 06:16:57', '2024-06-08 06:16:57'),
(64, 13, 'Tai nghe', 'tai-nghe', 'product', '', 'Tai nghe', 1, '2024-06-08 06:17:21', '2024-06-08 06:17:21'),
(65, 64, 'Tai nghe có dây', 'tai-nghe-co-day', 'product', '', 'Tai nghe có dây', 1, '2024-06-08 06:17:36', '2024-06-08 06:18:11'),
(66, 64, 'Tai nghe Bluetooth', 'tai-nghe-bluetooth', 'product', '', 'Tai nghe Bluetooth', 1, '2024-06-08 06:17:57', '2024-06-08 06:17:57'),
(67, 13, 'Loa', 'loa', 'product', '', 'Loa nghe nhạc', 1, '2024-06-08 06:18:33', '2024-06-08 06:18:33'),
(68, 13, 'Loa máy tính', 'loa-may-tinh', 'product', '', 'Loa máy tính', 1, '2024-06-08 06:18:54', '2024-06-08 06:18:54'),
(69, 67, 'Loa Bluetooth', 'loa-bluetooth', 'product', '', 'Loa Bluetooth', 1, '2024-06-08 06:19:12', '2024-06-08 06:19:12'),
(70, 18, 'Apple', 'dtdd-apple', 'product', '', 'điện thoại iphone', 1, '2024-06-12 04:44:39', '2024-06-16 05:27:47'),
(71, 18, 'Samsung', 'dtdd-samsung', 'product', '', 'điện thoại Samsung', 1, '2024-06-12 04:47:14', '2024-06-16 06:09:51'),
(72, 18, 'Oppo', 'dtdd-oppo', 'product', '', 'điện thoại Oppo', 1, '2024-06-12 04:47:38', '2024-06-16 06:10:06'),
(73, 18, 'Realme', 'dtdd-realme', 'product', '', 'điện thoại Realme', 1, '2024-06-12 04:48:06', '2024-06-16 06:10:19'),
(74, 18, 'Xiaomi', 'dtdd-xiaomi', 'product', '', 'điện thoại Xiaoi', 1, '2024-06-12 04:48:30', '2024-06-16 06:11:04'),
(75, 18, 'Nokia', 'dtdd-nokia', 'product', '', 'Điện thoại Nokia', 1, '2024-06-12 04:48:50', '2024-06-16 06:11:20'),
(77, 71, 'Galaxy S23', 'galaxy-s23', 'product', '', 'Samsung galaxy', 0, '2024-07-07 14:47:14', '2024-07-07 14:47:14'),
(78, 71, 'Galaxy A55', 'galaxy-a55', 'product', '', 'Samsung galaxy A55', 0, '2024-07-07 14:48:10', '2024-07-07 14:48:10'),
(79, 71, 'Galaxy s24', 'galaxy-s24', 'product', '', 'Samsung galaxy s24', 0, '2024-07-07 14:49:10', '2024-07-07 14:49:10'),
(80, 72, 'Oppo A58', 'oppo-a58', 'product', '', 'oppo a58', 0, '2024-07-07 14:49:52', '2024-07-07 14:49:52'),
(81, 72, 'Oppo find N3', 'oppo-find-n3', 'product', '', 'Oppo find N3', 0, '2024-07-07 14:50:23', '2024-07-07 14:50:23'),
(82, 72, 'Oppo Reno 11', 'oppo-reno-11', 'product', '', 'Oppo Reno 11', 0, '2024-07-07 14:50:50', '2024-07-07 14:50:50'),
(83, 72, 'Oppo Reno 11 pro', 'oppo-reno-11-pro', 'product', '', 'Oppo Reno 11 pro', 0, '2024-07-07 14:51:09', '2024-07-07 14:51:09'),
(84, 74, 'Redmi note 13', 'redmi-note-13', 'product', '', 'Redmi note 13', 0, '2024-07-07 14:52:03', '2024-07-07 14:52:03'),
(85, 74, 'Vivo v30', 'vivo-v30', 'product', '', 'Vivo v30', 0, '2024-07-07 14:52:35', '2024-07-07 14:52:35'),
(86, 74, 'Vivo y03', 'vivo-y03', 'product', '', 'Vivo y03', 0, '2024-07-07 14:53:03', '2024-07-07 14:53:03'),
(87, 74, 'Vivo y28', 'vivo-y28', 'product', '', 'Vivo y28', 0, '2024-07-07 14:53:18', '2024-07-07 14:53:18'),
(88, 74, 'Xiaomi note 13 pro', 'xiaomi-note-13-pro', 'product', '', 'Xiaomi note 13 pro', 0, '2024-07-07 14:53:48', '2024-07-07 14:53:48'),
(89, 74, 'Xiaomi 13t', 'xiaomi-13t', 'product', '', 'Xiaomi 13t', 0, '2024-07-07 14:54:13', '2024-07-07 14:54:13'),
(90, 73, 'Realme c65', 'realme-c65', 'product', '', 'Realme c65', 0, '2024-07-07 14:55:27', '2024-07-07 14:55:27'),
(91, 73, 'Realme c67', 'realme-c67', 'product', '', 'Realme c67', 0, '2024-07-07 14:55:41', '2024-07-07 14:55:41'),
(92, 59, 'Dell Inspiron', 'dell-inspiron', 'product', '', 'Dell Inspiron', 0, '2024-07-07 15:02:04', '2024-07-07 15:02:04'),
(93, 59, 'Dell Vostro', 'dell-vostro', 'product', '', 'Dell Vostro', 0, '2024-07-07 15:02:25', '2024-07-07 15:02:25'),
(94, 59, 'Dell Precision', 'dell-precision', 'product', '', 'Dell Precision', 0, '2024-07-07 15:03:05', '2024-07-07 15:03:05'),
(95, 60, 'HP 245 G10', 'hp-245-g10', 'product', '', 'HP 245 G10', 0, '2024-07-07 15:08:36', '2024-07-07 15:08:36'),
(96, 60, 'HP 240 G8', 'hp-240', 'product', '', 'HP 240', 0, '2024-07-08 01:09:58', '2024-07-08 01:10:39'),
(97, 60, 'HP Pavilion', 'hp-pavilion', 'product', '', 'HP Pavilion', 0, '2024-07-08 01:11:17', '2024-07-08 01:11:17'),
(98, 60, 'HP Gaming VICTUS', 'hp-gaming-victus', 'product', '', 'HP Gaming VICTUS', 0, '2024-07-08 01:11:52', '2024-07-08 01:11:52'),
(99, NULL, 'Chính sách', 'chinh-sach', 'post', 'http://media.th/storage/Category/post/icon/no_image.png', 'bài viết chính sách của cửa hàng', 0, '2024-07-13 13:32:48', '2024-07-13 13:32:48'),
(102, 15, 'Apple Watch Series 9 GPS', 'apple-watch-series-9-gps', 'product', '', 'Apple Watch Series 9 GPS', 0, '2024-07-14 14:37:55', '2024-07-14 14:37:55'),
(103, 15, 'Apple Watch Series 9 GPS + Cellular', 'apple-watch-series-9-gps-cellular', 'product', '', 'Apple Watch Series 9 GPS + Cellular', 0, '2024-07-14 14:38:30', '2024-07-14 14:38:30'),
(104, 15, 'Apple Watch SE 2023', 'apple-watch-se-2023', 'product', '', 'Apple Watch SE 2023', 0, '2024-07-14 14:39:02', '2024-07-14 14:39:02'),
(105, 15, 'Galaxy watch 4', 'galaxy-watch-4', 'product', '', 'Galaxy watch 4', 0, '2024-07-14 14:42:15', '2024-07-14 14:42:15'),
(106, 15, 'Galaxy watch 5', 'galaxy-watch-5', 'product', '', 'Galaxy watch 5', 0, '2024-07-14 14:43:01', '2024-07-14 14:43:01'),
(107, 15, 'Galaxy watch 5 pro lte', 'galaxy-watch-5-pro-lte', 'product', '', 'Galaxy watch 5 pro lte', 0, '2024-07-14 14:43:16', '2024-07-14 14:43:16'),
(108, 15, 'Galaxy Watch 6', 'galaxy-watch-6', 'product', '', 'Galaxy Watch 6', 0, '2024-07-14 14:55:34', '2024-07-14 14:55:34'),
(109, 15, 'Galaxy Watch 6 Classic', 'galaxy-watch-6-classic', 'product', '', 'Galaxy Watch 6 Classic', 0, '2024-07-14 14:55:57', '2024-07-14 14:55:57'),
(110, 15, 'Galaxy Fit3', 'galaxy-fit3', 'product', '', 'Galaxy Fit3', 0, '2024-07-14 14:59:27', '2024-07-14 14:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `value` int(10) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `limit_quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `code`, `description`, `value`, `start_date`, `end_date`, `limit_quantity`, `created_at`, `updated_at`) VALUES
(1, 'Giảm giá Black Friday', 'BLACKFRIDAY2024', 'Giảm giá Black Friday', 200000, '2024-06-06', '2024-06-08', 5, '2024-06-17 11:41:19', '2024-06-26 17:23:51'),
(2, 'Giảm giá cuối tuần', 'SALEWEEKEND', NULL, 500000, '2024-06-06', '2024-06-28', 9, '2024-06-26 14:36:24', '2024-06-27 04:32:08'),
(3, 'Tri ân sinh nhật cửa hàng', 'BIRTHDAY2024', 'Tri ân sinh nhật cửa hàng', 350000, '2024-06-27', '2024-07-19', 0, '2024-06-26 17:21:44', '2024-07-14 15:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `name`, `url`, `slug`, `icon_path`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Điện thoại', 'dien-thoai', 'dien-thoai', 'http://media.th/storage/Menu/icon/ic_phone.jpg', '2024-06-04 05:50:11', '2024-06-11 11:37:52'),
(2, NULL, 'Laptop', 'laptop', 'laptop', 'http://media.th/storage/Menu/icon/laptop-icon.png', '2024-06-04 05:50:59', '2024-06-11 11:48:38'),
(3, NULL, 'Ipad', 'tablet', 'ipad', 'http://media.th/storage/Menu/icon/ic_tablet.jpg', '2024-06-04 05:51:31', '2024-06-11 12:16:49'),
(4, NULL, 'Smartwatch', 'smartwatch', 'smartwatch', 'http://media.th/storage/Menu/icon/3602416.png', '2024-06-04 05:57:12', '2024-06-12 04:40:26'),
(5, NULL, 'Phụ kiện', '/phu-kien', 'phu-kien', 'http://media.th/storage/Menu/icon/ic_phukien.jpg', '2024-06-04 05:57:39', '2024-06-04 05:57:39'),
(6, NULL, 'Tin tức', 'tin-tuc', 'tin-tuc', 'http://media.th/storage/Menu/icon/free-news-icon.png', '2024-06-04 05:59:32', '2024-06-12 04:42:11'),
(7, 1, 'Hãng sản xuất', '#', 'hang-san-xuat', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 06:12:36', '2024-06-11 11:45:54'),
(8, 7, 'Apple', 'Iphone', 'apple', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 06:13:33', '2024-06-11 12:14:40'),
(9, 7, 'Samsung', 'samsung', 'samsung', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 06:14:19', '2024-06-11 11:38:29'),
(10, 7, 'Xiaomi', 'xiaomi', 'xiaomi', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 06:14:52', '2024-06-11 11:40:06'),
(11, 7, 'Huawei', 'huawei', 'huawei', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 06:15:49', '2024-06-11 11:40:20'),
(12, 7, 'Nokia', 'nokia', 'nokia', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 06:48:42', '2024-06-11 11:46:13'),
(13, 7, 'Realme', 'realme', 'realme', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 06:51:41', '2024-06-11 11:47:46'),
(14, 7, 'Oppo', 'oppo', 'oppo', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 06:52:15', '2024-06-11 11:48:04'),
(15, 7, 'Vivo', 'vivo', 'vivo', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 06:52:42', '2024-06-11 11:48:17'),
(16, NULL, 'Giới thiệu', 'gioi-thieu', 'gioi-thieu', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 06:55:59', '2024-06-12 04:42:55'),
(17, 19, 'Dell', 'dell', 'dell', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 11:32:15', '2024-06-11 11:49:40'),
(18, 19, 'HP', 'hp', 'hp', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 11:32:36', '2024-06-11 11:49:57'),
(19, 2, 'Hãng sản xuất', '.', 'hang-san-xuat', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 11:33:20', '2024-06-04 11:33:20'),
(20, 19, 'Apple', 'macbook', 'apple', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 11:36:06', '2024-06-11 12:12:45'),
(21, 19, 'MSI', 'msi', 'msi', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 11:36:40', '2024-06-11 12:15:01'),
(22, 19, 'Lenovo', 'Lenovo', 'lenovo', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 11:37:36', '2024-06-11 12:15:11'),
(29, 5, 'Phụ kiện điện thoại', 'phu-kien-dien-thoai', 'phu-kien-dien-thoai', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 11:45:06', '2024-06-12 04:40:56'),
(30, 5, 'Phụ kiện máy tính', 'phu-kien-laptop', 'phu-kien-may-tinh', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 11:45:41', '2024-06-12 04:41:08'),
(31, 5, 'Thiết bị âm thanh', 'thiet-bi-am-thanh', 'thiet-bi-am-thanh', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 11:46:18', '2024-06-12 04:41:36'),
(32, 6, 'Khuyễn mãi', '/tin-yuc/khuyen-mai', 'khuyen-mai', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 11:47:06', '2024-06-04 11:47:06'),
(33, 6, 'Tin công nghệ', 'tin-cong-nghe', 'tin-cong-nghe', 'http://media.th/storage/Menu/icon/no_image.png', '2024-06-04 11:47:43', '2024-06-12 04:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_05_14_172642_create_admins_table', 1),
(7, '2024_05_20_173759_create_menus_table', 2),
(9, '2024_05_24_085913_create_brands_table', 4),
(16, '2024_05_30_173629_create_product_images_table', 7),
(18, '2024_05_25_043929_create_posts_table', 9),
(21, '2024_05_24_015925_create_categories_table', 11),
(24, '2024_06_16_034904_create_coupons_table', 12),
(26, '2014_10_12_000000_create_users_table', 13),
(27, '2024_06_18_173429_create_shippings_table', 14),
(33, '2024_05_26_102204_create_products_table', 16),
(34, '2024_06_21_143536_add_google_id_column', 17),
(35, '2024_06_18_173921_create_orders_table', 18),
(36, '2024_06_18_174430_create_order_details_table', 18),
(38, '2024_06_24_094952_create_momo_payments_table', 19),
(39, '2024_06_24_144342_create_vnpay_payments_table', 20),
(40, '2024_06_28_094019_create_banners_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `momo_payments`
--

CREATE TABLE `momo_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partnerCode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requestId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderInfo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signature` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `momo_payments`
--

INSERT INTO `momo_payments` (`id`, `partnerCode`, `orderId`, `requestId`, `amount`, `orderInfo`, `orderType`, `transId`, `payType`, `signature`, `created_at`, `updated_at`) VALUES
(1, 'MOMOBKUN20180529', '3a8abd', '1719224437', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067729122', 'napas', 'f7d8bfe2e38df1a5d1b678ce46179b6b62f2d70d66b501d0377b194a804808ec', '2024-06-24 07:32:34', '2024-06-24 07:32:34'),
(2, 'MOMOBKUN20180529', '6e6709', '1719225266', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067750236', 'napas', 'a48d065c1a2a0e0020455091d61532f6d2818730b6695d731be65103afc83bad', '2024-06-24 07:35:32', '2024-06-24 07:35:32'),
(3, 'MOMOBKUN20180529', 'b885ef', '1719227289', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067752591', 'napas', 'dc48032281b43d259ad8c54d1341387b0f8ca8779aa99dd2f4c4799b732cfe98', '2024-06-24 08:09:01', '2024-06-24 08:09:01'),
(4, 'MOMOBKUN20180529', 'b885ef', '1719227289', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067752591', 'napas', 'dc48032281b43d259ad8c54d1341387b0f8ca8779aa99dd2f4c4799b732cfe98', '2024-06-24 08:12:27', '2024-06-24 08:12:27'),
(5, 'MOMOBKUN20180529', 'b885ef', '1719227289', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067752591', 'napas', 'dc48032281b43d259ad8c54d1341387b0f8ca8779aa99dd2f4c4799b732cfe98', '2024-06-24 08:12:53', '2024-06-24 08:12:53'),
(6, 'MOMOBKUN20180529', 'b885ef', '1719227289', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067752591', 'napas', 'dc48032281b43d259ad8c54d1341387b0f8ca8779aa99dd2f4c4799b732cfe98', '2024-06-24 08:13:11', '2024-06-24 08:13:11'),
(7, 'MOMOBKUN20180529', 'b885ef', '1719227289', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067752591', 'napas', 'dc48032281b43d259ad8c54d1341387b0f8ca8779aa99dd2f4c4799b732cfe98', '2024-06-24 08:13:15', '2024-06-24 08:13:15'),
(8, 'MOMOBKUN20180529', 'b885ef', '1719227289', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067752591', 'napas', 'dc48032281b43d259ad8c54d1341387b0f8ca8779aa99dd2f4c4799b732cfe98', '2024-06-24 08:13:24', '2024-06-24 08:13:24'),
(9, 'MOMOBKUN20180529', 'b885ef', '1719227289', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067752591', 'napas', 'dc48032281b43d259ad8c54d1341387b0f8ca8779aa99dd2f4c4799b732cfe98', '2024-06-24 08:13:34', '2024-06-24 08:13:34'),
(10, 'MOMOBKUN20180529', 'b885ef', '1719227289', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067752591', 'napas', 'dc48032281b43d259ad8c54d1341387b0f8ca8779aa99dd2f4c4799b732cfe98', '2024-06-24 08:13:47', '2024-06-24 08:13:47'),
(11, 'MOMOBKUN20180529', 'b885ef', '1719227289', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067752591', 'napas', 'dc48032281b43d259ad8c54d1341387b0f8ca8779aa99dd2f4c4799b732cfe98', '2024-06-24 08:15:25', '2024-06-24 08:15:25'),
(12, 'MOMOBKUN20180529', 'b885ef', '1719227289', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067752591', 'napas', 'dc48032281b43d259ad8c54d1341387b0f8ca8779aa99dd2f4c4799b732cfe98', '2024-06-24 08:16:03', '2024-06-24 08:16:03'),
(13, 'MOMOBKUN20180529', 'b885ef', '1719227289', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067752591', 'napas', 'dc48032281b43d259ad8c54d1341387b0f8ca8779aa99dd2f4c4799b732cfe98', '2024-06-24 08:16:22', '2024-06-24 08:16:22'),
(14, 'MOMOBKUN20180529', 'b885ef', '1719227289', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067752591', 'napas', 'dc48032281b43d259ad8c54d1341387b0f8ca8779aa99dd2f4c4799b732cfe98', '2024-06-24 08:16:51', '2024-06-24 08:16:51'),
(15, 'MOMOBKUN20180529', 'b885ef', '1719227289', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067752591', 'napas', 'dc48032281b43d259ad8c54d1341387b0f8ca8779aa99dd2f4c4799b732cfe98', '2024-06-24 08:18:51', '2024-06-24 08:18:51'),
(16, 'MOMOBKUN20180529', 'b885ef', '1719227289', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4067752591', 'napas', 'dc48032281b43d259ad8c54d1341387b0f8ca8779aa99dd2f4c4799b732cfe98', '2024-06-24 08:19:56', '2024-06-24 08:19:56'),
(17, 'MOMOBKUN20180529', 'aea4de', '1719731800', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4072615781', 'napas', '4cb1891636a0a70dbfd31b89b04d59ffb5fd44abd41c4e812fd1cc22d65ff860', '2024-06-30 04:18:39', '2024-06-30 04:18:39'),
(18, 'MOMOBKUN20180529', '1032e5', '1719741970', '10000', 'Thanh toán qua MoMo', 'momo_wallet', '4072650967', 'napas', '0b3c7b81e1f9ab3cb07bbc3882d247b80ae89bd3b6337a2d3b389c576f438360', '2024-06-30 07:07:01', '2024-06-30 07:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_id` bigint(20) UNSIGNED NOT NULL,
  `order_total` int(10) UNSIGNED NOT NULL,
  `order_code_coupon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_code_value` int(10) UNSIGNED NOT NULL,
  `order_status` int(11) NOT NULL,
  `order_payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `user_id`, `shipping_id`, `order_total`, `order_code_coupon`, `order_code_value`, `order_status`, `order_payment_method`, `created_at`, `updated_at`) VALUES
(7, 'b885ef', 3, 23, 53580000, 'null', 0, 1, 'payUrl', '2024-06-24 08:08:09', '2024-06-24 08:10:23'),
(8, '229ef8', 1, 27, 20425000, 'null', 0, 0, 'redirect', '2024-06-24 11:40:05', '2024-06-24 11:40:05'),
(9, '837df3', 3, 28, 12000000, 'SALEWEEKEND', 500000, 0, 'cod', '2024-06-27 04:32:08', '2024-06-27 04:32:08'),
(10, 'aea4de', 3, 31, 50182000, 'BIRTHDAY2024', 350000, 0, 'payUrl', '2024-06-30 04:16:40', '2024-06-30 04:16:40'),
(11, '1032e5', 3, 32, 29757000, 'null', 0, 0, 'payUrl', '2024-06-30 07:06:10', '2024-06-30 07:06:10'),
(12, 'b0bac2', 3, 33, 29757000, 'null', 0, 0, 'redirect', '2024-06-30 07:18:02', '2024-06-30 07:18:02'),
(14, '24b017', 3, 35, 46106900, 'null', 0, 0, 'redirect', '2024-07-08 05:19:38', '2024-07-08 05:19:38'),
(15, 'bcb769', 3, 36, 21000000, 'null', 0, 0, 'cod', '2024-07-08 05:25:49', '2024-07-08 05:25:49'),
(16, '021f2d', 1, 37, 15105700, 'BIRTHDAY2024', 350000, 0, 'payUrl', '2024-07-14 15:23:23', '2024-07-14 15:23:23'),
(17, '42cb0e', 1, 38, 15105700, 'BIRTHDAY2024', 350000, 0, 'redirect', '2024-07-14 15:23:39', '2024-07-14 15:23:39'),
(18, '4e853e', 1, 39, 10313700, 'BIRTHDAY2024', 350000, 0, 'redirect', '2024-07-14 15:24:55', '2024-07-14 15:24:55'),
(19, 'c06faa', 1, 40, 10313700, 'BIRTHDAY2024', 350000, 0, 'redirect', '2024-07-14 15:27:14', '2024-07-14 15:27:14'),
(20, '01cce7', 2, 42, 10313700, 'null', 0, 0, 'payUrl', '2024-07-15 09:21:36', '2024-07-15 09:21:36'),
(21, 'fbec24', 2, 43, 10313700, 'null', 0, 0, 'redirect', '2024-07-15 09:21:45', '2024-07-15 09:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_promotion` int(11) NOT NULL,
  `product_order_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_code`, `product_id`, `product_name`, `product_price`, `product_promotion`, `product_order_quantity`, `created_at`, `updated_at`) VALUES
(3, 'bcb769', 13, 'Điện thoại Samsung Galaxy S23 Ultra 5G Tím', 21000000, 0, 1, '2024-07-08 05:25:49', '2024-07-08 05:25:49'),
(4, '021f2d', 10, 'Điện thoại Samsung Galaxy A55 5G Xanh', 11090000, 7, 1, '2024-07-14 15:23:23', '2024-07-14 15:23:23'),
(5, '021f2d', 49, 'Đồng hồ thông minh Samsung Galaxy Watch5 40mm đen', 5990000, 20, 1, '2024-07-14 15:23:23', '2024-07-14 15:23:23'),
(6, '4e853e', 9, 'Điện thoại Samsung Galaxy A55 5G Tím', 11090000, 7, 1, '2024-07-14 15:24:55', '2024-07-14 15:24:55'),
(7, 'c06faa', 10, 'Điện thoại Samsung Galaxy A55 5G Xanh', 11090000, 7, 1, '2024-07-14 15:27:14', '2024-07-14 15:27:14'),
(8, '01cce7', 10, 'Điện thoại Samsung Galaxy A55 5G Xanh', 11090000, 7, 1, '2024-07-15 09:21:36', '2024-07-15 09:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('quangnguyenthe7@gmail.com', '$2y$12$Ge1ZitPMKClmpWMZ7mM2Fu2pqxxSAbR3nN9Rwb2ZJ5fwPRWO6ezg2', '2024-07-15 09:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview_image` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` bigint(20) NOT NULL DEFAULT '0',
  `rating_num` double NOT NULL DEFAULT '0',
  `rating_value` int(11) NOT NULL DEFAULT '0',
  `seo_title` text COLLATE utf8mb4_unicode_ci,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `product_id`, `title`, `slug`, `description`, `preview_image`, `content`, `views`, `rating_num`, `rating_value`, `seo_title`, `seo_keywords`, `seo_description`, `created_at`, `updated_at`) VALUES
(4, 8, NULL, 'Samsung Ưu Tiên Phát HànGiao Diện One UI 6.1.1 Trước One UI 7.0', 'samsung-uu-tien-phat-hangiao-dien-one-ui-611-truoc-one-ui-70', '<p>Samsung, &ocirc;ng lớn c&ocirc;ng nghệ H&agrave;n Quốc, lu&ocirc;n được biết đến với những bản cập nhật phần mềm thường xuy&ecirc;n v&agrave; đầy t&iacute;nh năng. Tuy nhi&ecirc;n, một tin đồn mới đ&acirc;y cho rằng h&atilde;ng c&oacute; thể sẽ ưu ti&ecirc;n ph&aacute;t h&agrave;nh One UI 6.1.1 cho d&ograve;ng điện thoại Galaxy thay v&igrave; tung ra One UI 7 dựa tr&ecirc;n Android 15 như dự kiến đ&atilde; khiến giới c&ocirc;ng nghệ x&ocirc;n xao. Vậy đ&acirc;u l&agrave; l&yacute; do cho quyết định n&agrave;y? Liệu đ&acirc;y l&agrave; một lựa chọn kh&ocirc;n ngoan hay một chiến lược mạo hiểm của Samsung?</p>', 'http://media.th/storage/Post/Preview/1200x675-6-2-1068x601.jpg', '<h2 id=\"ftoc-1-one-ui-6-1-1-se-la-ban-nang-cap-lon\" class=\"wp-block-heading ftwp-heading\">1. One UI 6.1.1 Sẽ L&agrave; Bản N&acirc;ng Cấp Lớn?</h2>\r\n<p>Theo nguồn tin r&ograve; rỉ, One UI 6.1.1 sẽ kh&ocirc;ng chỉ l&agrave; một bản cập nhật nhỏ với những cải tiến th&ocirc;ng thường. Thay v&agrave;o đ&oacute;, n&oacute; được kỳ vọng sẽ mang đến nhiều t&iacute;nh năng mới đ&aacute;ng ch&uacute; &yacute;, đặc biệt l&agrave; c&ocirc;ng cụ AI-Powered d&agrave;nh cho b&uacute;t S Pen.</p>\r\n<h2 id=\"ftoc-2-but-s-pen-than-ky-hon-nho-ai\" class=\"wp-block-heading ftwp-heading\">2. B&uacute;t S Pen &ldquo;Thần Kỳ&rdquo; Hơn Nhờ AI</h2>\r\n<p>Điểm nhấn của One UI 6.1.1 ch&iacute;nh l&agrave; khả năng biến chữ viết tay th&agrave;nh graffiti đầy s&aacute;ng tạo bằng c&aacute;ch kết hợp sức mạnh của AI với b&uacute;t S Pen. Đ&acirc;y l&agrave; lần đầu ti&ecirc;n Samsung tận dụng tối đa tiềm năng của S Pen, biến n&oacute; từ một c&ocirc;ng cụ ghi ch&uacute; đơn thuần th&agrave;nh một &ldquo;c&acirc;y đũa ph&eacute;p&rdquo; nghệ thuật trong tay người d&ugrave;ng.</p>\r\n<p style=\"text-align: center;\"><img src=\"../../storage/Post/1000000340.jpg\" alt=\"\" width=\"780\" height=\"520\"></p>\r\n<p>B&ecirc;n cạnh đ&oacute;, One UI 6.1.1 c&ograve;n được cho l&agrave; sẽ cải thiện đ&aacute;ng kể hiệu ứng động của hệ thống, đặc biệt l&agrave; hoạt ảnh nền, mang đến trải nghiệm mượt m&agrave; v&agrave; sống động hơn. Việc tập trung v&agrave;o tối ưu h&oacute;a hiệu năng v&agrave; giao diện cho thấy Samsung đang nỗ lực mang đến trải nghiệm người d&ugrave;ng tốt nhất tr&ecirc;n c&aacute;c thiết bị Galaxy.</p>\r\n<h2 id=\"ftoc-3-one-ui-7-se-tam-tri-hoan\" class=\"wp-block-heading ftwp-heading\">3. One UI 7 Sẽ Tạm Tr&igrave; Ho&atilde;n?</h2>\r\n<p>Việc Samsung ưu ti&ecirc;n One UI 6.1.1 đồng nghĩa với việc người d&ugrave;ng sẽ phải chờ đợi l&acirc;u hơn cho One UI 7 dựa tr&ecirc;n Android 15. Mặc d&ugrave; đ&aacute;ng tiếc, nhưng đ&acirc;y c&oacute; thể l&agrave; một quyết định hợp l&yacute;.</p>\r\n<p>One UI 6.1.1 được cho l&agrave; sẽ l&agrave; một bản cập nhật lớn, đ&ograve;i hỏi nhiều thời gian để ho&agrave;n thiện v&agrave; tối ưu h&oacute;a. Bằng c&aacute;ch tập trung v&agrave;o One UI 6.1.1, Samsung c&oacute; thể đảm bảo mang đến một phi&ecirc;n bản ổn định v&agrave; mượt m&agrave;, tr&aacute;nh lặp lại những lỗi phần mềm đ&aacute;ng tiếc trong qu&aacute; khứ.</p>\r\n<p style=\"text-align: center;\"><img src=\"../../storage/Post/1000000341.jpg\" alt=\"\" width=\"780\" height=\"520\"></p>\r\n<p>Nguồn tin r&ograve; rỉ cũng cho rằng One UI 6.1.1 sẽ tập trung giải quyết một số vấn đề về camera v&agrave; bổ sung t&iacute;nh năng mới cho d&ograve;ng Galaxy S24. Điều n&agrave;y cho thấy Samsung đang nỗ lực cải thiện trải nghiệm người d&ugrave;ng tr&ecirc;n d&ograve;ng flagship mới nhất của m&igrave;nh.</p>\r\n<h2 id=\"ftoc-4-ket-luan\" class=\"wp-block-heading ftwp-heading\">4. Kết Luận</h2>\r\n<p>Việc Samsung ưu ti&ecirc;n One UI 6.1.1 c&oacute; thể khiến một số người d&ugrave;ng thất vọng v&igrave; phải chờ đợi One UI 7. Tuy nhi&ecirc;n, đ&acirc;y c&oacute; thể được xem l&agrave; một lựa chọn c&acirc;n bằng, cho ph&eacute;p h&atilde;ng tập trung nguồn lực để ho&agrave;n thiện sản phẩm v&agrave; mang đến trải nghiệm tốt nhất cho người d&ugrave;ng.</p>\r\n<p>One UI 6.1.1 hứa hẹn sẽ l&agrave; một bản cập nhật đ&aacute;ng gi&aacute; với nhiều t&iacute;nh năng hấp dẫn, đặc biệt l&agrave; c&ocirc;ng cụ AI-Powered cho b&uacute;t S Pen. C&ograve;n One UI 7, d&ugrave; bị tr&igrave; ho&atilde;n, nhưng chắc chắn sẽ được Samsung đầu tư kỹ lưỡng để mang đến những cải tiến đột ph&aacute; hơn nữa trong tương lai.</p>\r\n<p>Cảm ơn bạn đ&atilde; đọc b&agrave;i viết, ch&uacute;c bạn c&oacute; một ng&agrave;y vui vẻ. Đừng qu&ecirc;n đăng k&yacute; k&ecirc;nh Dchannel để nhận được th&ocirc;ng tin c&ocirc;ng nghệ mới nhất v&agrave; ch&iacute;nh x&aacute;c mỗi ng&agrave;y. Nếu bạn cần mua sản phẩm c&ocirc;ng nghệ, điện thoại, MacBook, phụ kiện, h&atilde;y gh&eacute; Di Động Việt để trải nghiệm dịch vụ mua sắm c&ocirc;ng nghệ h&agrave;ng đầu.</p>', 2, 0, 0, 'Samsung Ưu Tiên Phát HànGiao Diện One UI 6.1.1 Trước One UI 7.0', 'Samsung', '<p>One UI 6.1.1</p>', '2024-06-21 17:23:52', '2024-07-10 15:49:33'),
(5, 8, NULL, 'Apple lý giải vì sao Apple Intelligence chỉ hoạt động với iPhone 15 Pro Max trở lên', 'apple-ly-giai-vi-sao-apple-intelligence-chi-hoat-dong-voi-iphone-15-pro-max-tro-len', '<p>Tại sự kiện WWDC 2024, Apple đ&atilde; giới thiệu Apple Intelligence, một trải nghiệm AI c&aacute; nh&acirc;n h&oacute;a mới được t&iacute;ch hợp trong c&aacute;c bản cập nhật phần mềm cho iPhone, iPad v&agrave; Mac. C&ocirc;ng nghệ n&agrave;y sử dụng c&aacute;c m&ocirc; h&igrave;nh ng&ocirc;n ngữ lớn (LLM) để n&acirc;ng cao trải nghiệm người d&ugrave;ng, hứa hẹn mang đến những c&aacute;ch thức tương t&aacute;c mới mẻ v&agrave; th&ocirc;ng minh hơn.</p>\r\n<p>Tuy nhi&ecirc;n, điều g&acirc;y ch&uacute; &yacute; v&agrave; tranh c&atilde;i l&agrave; Apple Intelligence hiện chỉ khả dụng tr&ecirc;n c&aacute;c mẫu iPhone 15 Pro v&agrave; iPhone 15 Pro Max mới nhất. Quyết định n&agrave;y đ&atilde; dấy l&ecirc;n nhiều nghi ngờ về động cơ thực sự của Apple, liệu đ&acirc;y c&oacute; phải l&agrave; một chiến lược kinh doanh nhằm th&uacute;c đẩy người d&ugrave;ng n&acirc;ng cấp l&ecirc;n thiết bị mới?</p>', 'http://media.th/storage/Post/Preview/1200x675-5-2-1068x601.jpg', '<h2 id=\"ftoc-1-yeu-cau-phan-cung-cao\" class=\"wp-block-heading ftwp-heading\">1. Y&ecirc;u Cầu Phần Cứng Cao</h2>\r\n<p>Trong một buổi phỏng vấn tr&ecirc;n &ldquo;The Talk Show&rdquo; của John Gruber, John Giannandrea, người đứng đầu mảng AI/học m&aacute;y của Apple, đ&atilde; giải th&iacute;ch rằng việc chạy c&aacute;c m&ocirc; h&igrave;nh ng&ocirc;n ngữ lớn như Apple Intelligence đ&ograve;i hỏi sức mạnh xử l&yacute; v&agrave; băng th&ocirc;ng đ&aacute;ng kể. Mặc d&ugrave; về mặt kỹ thuật, việc chạy c&aacute;c m&ocirc; h&igrave;nh n&agrave;y tr&ecirc;n c&aacute;c thiết bị cũ hơn l&agrave; khả thi, nhưng hiệu suất sẽ cực kỳ chậm, ảnh hưởng nghi&ecirc;m trọng đến trải nghiệm người d&ugrave;ng.</p>\r\n<p style=\"text-align: center;\"><img src=\"../../storage/Post/1000000337.jpg\" alt=\"\" width=\"780\" height=\"520\"></p>\r\n<p>Greg Joswiak, gi&aacute;m đốc tiếp thị của Apple, v&agrave; Craig Federighi, gi&aacute;m đốc kỹ thuật phần mềm, cũng khẳng định rằng việc giới hạn n&agrave;y kh&ocirc;ng phải l&agrave; một chi&ecirc;u tr&ograve; b&aacute;n h&agrave;ng. Họ chỉ ra rằng ngay cả những chiếc iPad v&agrave; Mac gần đ&acirc;y cũng kh&ocirc;ng hỗ trợ Apple Intelligence.</p>\r\n<p>Thực tế, iPhone 15 Pro được trang bị chip A17 Pro với Neural Engine 16 l&otilde;i v&agrave; &iacute;t nhất 8GB RAM, những yếu tố phần cứng cần thiết để Apple Intelligence hoạt động hiệu quả. Trong khi đ&oacute;, c&aacute;c thiết bị cũ hơn thiếu những khả năng n&agrave;y, khiến việc triển khai Apple Intelligence trở n&ecirc;n kh&ocirc;ng khả thi.</p>\r\n<p class=\"has-text-align-center\">Xem th&ecirc;m<a href=\"https://didongviet.vn/iphone-15.html\" target=\"_blank\" rel=\"noreferrer noopener\">&nbsp;iPhone 15 Series Ch&iacute;nh H&atilde;ng</a>&nbsp;Ch&iacute;nh Thống Apple tại website Di Động Việt</p>\r\n<h2 id=\"ftoc-2-bai-toan-kho-can-bang-giua-sang-tao-va-kha-nang-tiep-can\" class=\"wp-block-heading ftwp-heading\">2. B&agrave;i To&aacute;n Kh&oacute;: C&acirc;n Bằng Giữa S&aacute;ng Tạo v&agrave; Khả Năng Tiếp Cận</h2>\r\n<p>Quyết định của Apple phản &aacute;nh một b&agrave;i to&aacute;n nan giải m&agrave; nhiều c&ocirc;ng ty c&ocirc;ng nghệ đang phải đối mặt: l&agrave;m thế n&agrave;o để c&acirc;n bằng giữa việc mang đến những c&ocirc;ng nghệ đột ph&aacute; v&agrave; đảm bảo khả năng tiếp cận cho đại đa số người d&ugrave;ng?</p>\r\n<p style=\"text-align: center;\"><img src=\"../../storage/Post/1000000338.jpg\" alt=\"\" width=\"780\" height=\"520\"></p>\r\n<p>Một mặt, việc giới hạn Apple Intelligence tr&ecirc;n c&aacute;c thiết bị mới nhất cho ph&eacute;p Apple khai th&aacute;c tối đa tiềm năng của c&ocirc;ng nghệ n&agrave;y, mang đến trải nghiệm người d&ugrave;ng tốt nhất c&oacute; thể. Mặt kh&aacute;c, điều n&agrave;y tạo ra một r&agrave;o cản đối với những người d&ugrave;ng kh&ocirc;ng đủ khả năng n&acirc;ng cấp l&ecirc;n thiết bị mới, khiến họ bị bỏ lại ph&iacute;a sau trong cuộc đua c&ocirc;ng nghệ.</p>\r\n<h2 id=\"ftoc-3-tam-ket\" class=\"wp-block-heading ftwp-heading\">3. Tạm Kết</h2>\r\n<p>Apple Intelligence l&agrave; một minh chứng cho thấy AI đang ng&agrave;y c&agrave;ng đ&oacute;ng vai tr&ograve; quan trọng trong cuộc sống của ch&uacute;ng ta. Tuy nhi&ecirc;n, việc triển khai c&ocirc;ng nghệ n&agrave;y đi k&egrave;m với những th&aacute;ch thức về y&ecirc;u cầu phần cứng v&agrave; khả năng tiếp cận.</p>\r\n<p>Trong tương lai, khi c&ocirc;ng nghệ tiếp tục ph&aacute;t triển, hy vọng rằng Apple sẽ t&igrave;m ra những giải ph&aacute;p hiệu quả hơn để mang Apple Intelligence đến với nhiều người d&ugrave;ng hơn, x&oacute;a bỏ r&agrave;o cản c&ocirc;ng nghệ v&agrave; tạo điều kiện cho mọi người đều c&oacute; thể trải nghiệm những lợi &iacute;ch m&agrave; AI mang lại.</p>\r\n<p>Cảm ơn bạn đ&atilde; đọc b&agrave;i viết, ch&uacute;c bạn c&oacute; một ng&agrave;y vui vẻ. Đừng qu&ecirc;n đăng k&yacute; k&ecirc;nh Dchannel để nhận được th&ocirc;ng tin c&ocirc;ng nghệ mới nhất v&agrave; ch&iacute;nh x&aacute;c mỗi ng&agrave;y. Nếu bạn cần mua sản phẩm c&ocirc;ng nghệ, điện thoại, MacBook, phụ kiện, h&atilde;y gh&eacute; Di Động Việt để trải nghiệm dịch vụ mua sắm c&ocirc;ng nghệ h&agrave;ng đầu.</p>', 1, 0, 0, 'Apple lý giải vì sao Apple Intelligence chỉ hoạt động với iPhone 15 Pro Max trở lên', 'Apple Intelligence', '', '2024-06-21 17:28:56', '2024-07-10 15:43:02'),
(6, 9, NULL, 'Tại sao nên chọn Di Động Việt để mua sản phẩm Apple?', 'tai-sao-nen-chon-di-dong-viet-de-mua-san-pham-apple', '<p><strong>&ldquo;Mua sản phẩm &ndash; Chọn sản phẩm. Mua ở đ&acirc;u &ndash; Chọn Di Động Việt&rdquo; vừa l&agrave; th&ocirc;ng điệp của Di Động Việt vừa l&agrave; c&acirc;u n&oacute;i của c&aacute;c kh&aacute;ch h&agrave;ng đ&atilde; từng trải nghiệm v&agrave; mua sắm tại hệ thống. Với h&agrave;nh tr&igrave;nh gần 15 năm chinh phục kh&aacute;ch h&agrave;ng bằng gi&aacute; trị vượt trội, Di Động Việt tự tin l&agrave; điểm đến h&agrave;ng đầu khi kh&aacute;ch h&agrave;ng muốn mua Apple hay bất kỳ sản phẩm c&ocirc;ng nghệ ch&iacute;nh h&atilde;ng n&agrave;o.&nbsp;</strong></p>', 'http://media.th/storage/Post/Preview/20240516-162149.jpg', '<h2 id=\"ftoc-1-cac-san-pham-apple-tai-di-dong-viet-cam-ket-gia-luon-re-hon-cac-loai-re\" class=\"wp-block-heading ftwp-heading\">1. C&aacute;c sản phẩm Apple tại Di Động Việt cam kết gi&aacute; lu&ocirc;n &ldquo;Rẻ hơn c&aacute;c loại rẻ&rdquo;</h2>\r\n<p>Suốt hơn 1 năm qua, mặc c&aacute;c hệ thống tuy&ecirc;n bố ngừng &ldquo;chiến gi&aacute;&rdquo; &ndash; bắt đầu chạy theo lợi nhuận&hellip; Di Động Viện vẫn bền bỉ với th&ocirc;ng điệp &ldquo;Rẻ hơn c&aacute;c loại rẻ&rdquo; để chia sẻ với kh&aacute;ch h&agrave;ng trong giai đoạn kinh tế kh&oacute; khăn.&nbsp;</p>\r\n<p style=\"text-align: center;\"><img src=\"../../storage/Post/iphone-didongviet-01.jpg\" alt=\"\" width=\"780\" height=\"520\"></p>\r\n<p>Ngo&agrave;i ra, Di Động Việt c&ograve;n l&agrave; đại l&yacute; uỷ quyền ch&iacute;nh thức của Apple tại Việt Nam (AAR) n&ecirc;n kh&aacute;ch h&agrave;ng sẽ kh&ocirc;ng chỉ an t&acirc;m mua sắm sản phẩm &ldquo;Ch&iacute;nh h&atilde;ng hơn cả ch&iacute;nh h&atilde;ng&rdquo; m&agrave; c&ograve;n c&oacute; thể tiết kiệm tối đa về chi ph&iacute; v&igrave; mức gi&aacute; ở Di Động Việt lu&ocirc;n rất cạnh tranh, thường xuy&ecirc;n điều chỉnh gi&aacute; k&egrave;m theo c&aacute;c chương tr&igrave;nh khuyến m&atilde;i đặc biệt v&agrave; độc quyền để mang lại lợi &iacute;ch cao nhất d&agrave;nh cho kh&aacute;ch h&agrave;ng.&nbsp;</p>\r\n<p>Trong đ&oacute;, từ những sản phẩm Apple mới ra mắt như iPhone 15 series, MacBook Air M3 hay bộ đ&ocirc;i iPad 2024 sắp ra mắt đến c&aacute;c model m&aacute;y LikeNew (đ&atilde; qua sử dụng), Di Động Việt lu&ocirc;n c&oacute; mức gi&aacute; tốt nhất thị trường k&egrave;m c&aacute;c ch&iacute;nh s&aacute;ch đặc biệt v&agrave; độc quyền, mang lại gi&aacute; trị vượt tr&ecirc;n kỳ vọng của kh&aacute;ch h&agrave;ng.&nbsp;</p>\r\n<h2 id=\"ftoc-2-chuong-trinh-tra-gop-doc-quyen-tai-di-dong-viet\" class=\"wp-block-heading ftwp-heading\">2. Chương tr&igrave;nh trả g&oacute;p độc quyền tại Di Động Việt</h2>\r\n<p>Ngo&agrave;i c&aacute;c ch&iacute;nh s&aacute;ch khuyến m&atilde;i, điều chỉnh gi&aacute; b&aacute;n &ldquo;Rẻ hơn c&aacute;c loại rẻ&rdquo;, hệ thống Di Động Việt c&ograve;n hỗ trợ kh&aacute;ch h&agrave;ng tối đa để kh&aacute;ch h&agrave;ng dễ d&agrave;ng sở hữu sản phẩm, chi ti&ecirc;u th&ocirc;ng minh qua h&igrave;nh thức trả g&oacute;p.&nbsp;</p>\r\n<p>Tại Di Động Việt, kh&aacute;ch h&agrave;ng c&oacute; thể thoải m&aacute;i trải nghiệm v&agrave; chọn sản phẩm ph&ugrave; hợp với nhu cầu sử dụng m&agrave; kh&ocirc;ng cần trả tiền trước, c&aacute;c ch&iacute;nh s&aacute;ch trả g&oacute;p đơn giản &ndash; dễ d&agrave;ng, kh&ocirc;ng mất th&ecirc;m ph&iacute; chuyển đổi, 0% l&atilde;i suất&hellip; để kh&aacute;ch h&agrave;ng y&ecirc;n t&acirc;m mua sắm.&nbsp;</p>\r\n<p style=\"text-align: center;\"><img src=\"../../storage/Post/image-67.png\" alt=\"\" width=\"780\" height=\"520\"></p>\r\n<p>Đặc biệt, với d&ograve;ng iPhone 15 series vẫn chưa giảm nhiệt tr&ecirc;n thị trường từ khi ra mắt, Di Động Việt đang &aacute;p dụng những ch&iacute;nh s&aacute;ch trả g&oacute;p rất thuận tiện cho người d&ugrave;ng. Khi kh&aacute;ch h&agrave;ng chọn h&igrave;nh thức trả qua thẻ t&iacute;n dụng với thời hạn 3 th&aacute;ng, Di Động Việt cam kết kh&ocirc;ng ph&aacute;t sinh bất kỳ chi ph&iacute; n&agrave;o. Kh&aacute;ch h&agrave;ng c&oacute; thể chọn trả trước 0 đồng vẫn được &aacute;p dụng 0% l&atilde;i suất, ph&iacute; chuyển đổi 0 đồng.&nbsp;</p>\r\n<p>B&ecirc;n cạnh đ&oacute;, nếu kh&aacute;ch h&agrave;ng chọn h&igrave;nh thức trả g&oacute;p qua Shinhan Finance với kỳ hạn 6 th&aacute;ng, cũng được &aacute;p dụng 0% l&atilde;i suất v&agrave; kh&ocirc;ng mất ph&iacute; chuyển đổi.</p>\r\n<h2 id=\"ftoc-3-di-dong-viet-la-he-thong-tien-phong-chuong-trinh-thu-cu-doi-moi\" class=\"wp-block-heading ftwp-heading\">3. Di Động Việt l&agrave; hệ thống ti&ecirc;n phong chương tr&igrave;nh &ldquo;Thu cũ &ndash; đổi mới&rdquo;&nbsp;</h2>\r\n<p>Di Động Việt &ndash; hệ thống đầu ti&ecirc;n đưa ra chương tr&igrave;nh trade-in (Thu cũ &ndash; đổi mới) tr&ecirc;n thị trường v&agrave; đ&atilde; được h&agrave;ng triệu kh&aacute;ch h&agrave;ng c&ugrave;ng hơn 600 người c&oacute; tầm ảnh hưởng tham gia v&igrave; lợi &iacute;ch cộng dồn họ nhận được qua chương tr&igrave;nh n&agrave;y.&nbsp;</p>\r\n<p>Nỗi băn khoăn điện thoại cũ rớt gi&aacute;, h&igrave;nh thức x&eacute;t duyệt m&aacute;y cũ kh&oacute; khăn&hellip; sẽ kh&ocirc;ng c&ograve;n khi kh&aacute;ch h&agrave;ng đến với Di Động Việt v&agrave; trải nghiệm chương tr&igrave;nh thu cũ &ndash; l&ecirc;n đời m&aacute;y mới. To&agrave;n hệ thống Di Động Việt đang c&oacute; mức gi&aacute; thu cao nhất thị trường, kh&aacute;ch h&agrave;ng được trợ gi&aacute; m&aacute;y thu l&ecirc;n đến 97%, đồng thời được tặng th&ecirc;m đến 4 triệu đồng trong chương tr&igrave;nh n&agrave;y.&nbsp;</p>\r\n<p>Di Động Việt cam kết lu&ocirc;n mang gi&aacute; trị vượt trội đến kh&aacute;ch h&agrave;ng, v&igrave; vậy, ngo&agrave;i ưu điểm về gi&aacute; thu cũ cao k&egrave;m trợ gi&aacute;, chương tr&igrave;nh trade-in tại Di Động Việt c&ograve;n được tối ưu ho&aacute; về mặt thời gian, thủ tục đơn giản, chỉ x&eacute;t h&igrave;nh thức m&aacute;y n&ecirc;n kh&aacute;ch sẽ kh&ocirc;ng phải lo lắng bung m&aacute;y. Chỉ sau khoảng 5 ph&uacute;t với quy tr&igrave;nh trade-in nhanh gọn, nh&acirc;n vi&ecirc;n Di Động Việt sẽ b&aacute;o kết quả v&agrave; mức gi&aacute; thu để kh&aacute;ch h&agrave;ng tiết kiệm th&ecirc;m chi ph&iacute; khi l&ecirc;n đời m&aacute;y mới.&nbsp;</p>\r\n<h2 id=\"ftoc-4-di-dong-viet-mang-gia-tri-vuot-troi-den-khach-hang\" class=\"wp-block-heading ftwp-heading ftwp-heading-target\">4. Di Động Việt mang gi&aacute; trị vượt trội đến kh&aacute;ch h&agrave;ng</h2>\r\n<p>Di Động Việt kh&ocirc;ng cạnh tranh bằng gi&aacute; m&agrave; cạnh tranh bằng gi&aacute; trị &ndash; đ&acirc;y l&agrave; mục ti&ecirc;u Di Động Việt vẫn đang hướng đến. Sau hơn một năm dịch chuyển từ b&aacute;n h&agrave;ng đơn thuần sang chuyển giao gi&aacute; trị vượt trội, Di Động Việt nhận được rất nhiều sự ủng hộ của kh&aacute;ch h&agrave;ng với hơn 60% kh&aacute;ch h&agrave;ng đ&atilde; trở th&agrave;nh kh&aacute;ch h&agrave;ng th&acirc;n thiết của hệ thống.&nbsp;</p>\r\n<p style=\"text-align: center;\"><img src=\"../../storage/Post/image-68.png\" alt=\"\" width=\"780\" height=\"585\"></p>\r\n<p style=\"text-align: left;\">Đ&oacute; l&agrave; l&yacute; do Di Động Việt sẽ tiếp tục ki&ecirc;n định với triết l&yacute; kinh doanh đang thực hiện, tiếp tục mang đến những gi&aacute; trị vượt trội cho kh&aacute;ch h&agrave;ng trước, trong v&agrave; sau khi mua h&agrave;ng. Di Động Việt đ&atilde;, đang v&agrave; sẽ kh&ocirc;ng ngừng nỗ lực để h&agrave;nh tr&igrave;nh mua sắm của kh&aacute;ch h&agrave;ng tại Di Động Việt, kh&ocirc;ng chỉ l&agrave; mua Apple m&agrave; tất cả c&aacute;c sản phẩm c&ocirc;ng nghệ ch&iacute;nh h&atilde;ng ch&iacute;nh thống kh&aacute;, cũng đều nhận được &ldquo;Sản phẩm vượt trội&rdquo;, &ldquo;Trải nghiệm vượt trội&rdquo; v&agrave; &ldquo;Quyền lợi vượt trội&rdquo;.&nbsp;</p>', 0, 0, 0, 'Di Động Việt', 'Di Động Việt', '<p><strong>Mua sản phẩm &ndash; Chọn sản phẩm. Mua ở đ&acirc;u &ndash; Chọn Di Động Việt</strong></p>', '2024-06-21 17:34:25', '2024-06-21 17:35:09'),
(8, 8, NULL, 'Những điều cần biết về Microsoft Copilot+ PC, chuẩn mới cho laptop AI trong tương lai', 'nhung-dieu-can-biet-ve-microsoft-copilot-pc-chuan-moi-cho-laptop-ai-trong-tuong-lai', '<p><strong>Microsoft Copilot+ PC l&agrave; một trong những ph&aacute;t triển mới tr&ecirc;n tr&ecirc;n c&aacute;c thiết bị Windows, Microsoft c&ocirc;ng bố nhiều t&iacute;nh năng v&agrave; khẳng định mạnh hơn c&aacute;c thiết bị của&nbsp;<a href=\"https://cellphones.com.vn/apple\" target=\"_blank\" rel=\"noopener\">Apple</a>.</strong></p>\r\n<p>Microsoft đ&atilde; kh&ocirc;ng ngừng nỗ lực trong việc đưa&nbsp;<a href=\"https://cellphones.com.vn/sforum\" target=\"_blank\" rel=\"noopener\">c&ocirc;ng nghệ</a> ti&ecirc;n tiến v&agrave;o sản phẩm của m&igrave;nh, v&agrave; kết quả l&agrave; sự ra đời của Microsoft Copilot+. Đ&acirc;y l&agrave; d&ograve;ng m&aacute;y t&iacute;nh Windows ti&ecirc;n tiến nhất, được t&iacute;ch hợp với những t&iacute;nh năng AI mạnh mẽ, mở ra c&aacute;nh cửa mới cho c&ocirc;ng nghệ. Vậy những ph&aacute;t triển mới đ&oacute; l&agrave; g&igrave;, h&atilde;y c&ugrave;ng m&igrave;nh t&igrave;m hiểu kỹ ở b&agrave;i viết b&ecirc;n dưới đ&acirc;y nh&eacute;!</p>', 'http://media.th/storage/Post/Preview/nhung-dieu-can-biet-ve-microsoft-copilot-pc-1.jpg', '<h2 id=\"microsoft-copilot-pc-ra-doi-de-phuc-vu-cho-cac-tinh-nang-ai\"><strong>Microsoft Copilot+ PC ra đời để phục vụ cho c&aacute;c t&iacute;nh năng AI</strong></h2>\r\n<p>Microsoft Copilot+ PC kh&ocirc;ng chỉ l&agrave; những chiếc m&aacute;y t&iacute;nh Windows nhanh nhất v&agrave; th&ocirc;ng minh nhất từng được thiết kế, m&agrave; c&ograve;n l&agrave; một ứng dụng của sự ph&aacute;t triển c&ocirc;ng nghệ AI thế hệ tiếp theo. Microsoft Copilot+ l&agrave; thuật ngữ d&ugrave;ng để chỉ một số chức năng AI kh&aacute;c nhau được cung cấp cục bộ tr&ecirc;n m&aacute;y t&iacute;nh AI chạy Windows, đem đến cho người d&ugrave;ng trải nghiệm AI n&acirc;ng cao vượt trội.</p>\r\n<p style=\"text-align: center;\"><img src=\"../../storage/Post/nhung-dieu-can-biet-ve-microsoft-copilot-pc-2.jpg\" alt=\"\" width=\"1164\" height=\"776\"></p>\r\n<p>C&oacute; thể kể đến như t&iacute;nh năng tự cuộn lại lịch sử xem, gi&uacute;p người d&ugrave;ng xem lại những nội dung đ&atilde; xem trước đ&oacute;. Copilot+ c&ograve;n c&oacute; khả năng tạo ra h&igrave;nh ảnh AI ngay tại m&aacute;y t&iacute;nh của bạn, gi&uacute;p bạn c&oacute; thể thao t&aacute;c chỉnh sửa n&acirc;ng cao ở cấp độ cục bộ trong một số phần mềm s&aacute;ng tạo như Adobe Photoshop.</p>\r\n<p>Về phần cứng, Copilot+ PC sở hữu silicon mới, mạnh mẽ, c&oacute; khả năng đạt hơn 40 TOPS - đơn vị đo lường lượng ph&eacute;p to&aacute;n trong một gi&acirc;y. Điều n&agrave;y gi&uacute;p Copilot+ PC c&oacute; thể xử l&yacute; lượng lớn dữ liệu, ph&acirc;n t&iacute;ch phức tạp v&agrave; nhanh ch&oacute;ng.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../storage/Post/nhung-dieu-can-biet-ve-microsoft-copilot-pc-3.jpg\" alt=\"\" width=\"1200\" height=\"800\"></p>\r\n<p>Đặc biệt, Microsoft cho biết, Copilot+ PC được tối ưu h&oacute;a để chạy khối lượng c&ocirc;ng việc AI cục bộ với hiệu suất tốt hơn. Trang bị 8 l&otilde;i hiệu suất cao v&agrave; 4 l&otilde;i được tối ưu h&oacute;a hiệu quả trong CPU t&iacute;ch hợp trong X Elite, Copilot+ PC hứa hẹn mang đến trải nghiệm cực kỳ mượt m&agrave; v&agrave; hiệu quả cho người d&ugrave;ng.</p>\r\n<h2 id=\"microsoft-copilot-khac-biet-voi-copilot-pro\"><strong>Microsoft Copilot+ kh&aacute;c biệt với Copilot Pro&nbsp;</strong></h2>\r\n<p>Microsoft Copilot+ PC v&agrave; Copilot Pro đều l&agrave; sản phẩm của Microsoft, nhưng ch&uacute;ng ho&agrave;n to&agrave;n kh&aacute;c biệt về mục đ&iacute;ch sử dụng v&agrave; những g&igrave; ch&uacute;ng cung cấp cho người d&ugrave;ng.</p>\r\n<p>Copilot Pro l&agrave; dịch vụ đăng k&yacute; m&agrave; Microsoft cung cấp, n&oacute; cung cấp một loạt c&aacute;c t&iacute;nh năng trợ l&yacute; AI bổ sung. N&oacute; được thiết kế để hỗ trợ người d&ugrave;ng trong việc thực hiện c&aacute;c t&aacute;c vụ h&agrave;ng ng&agrave;y v&agrave; cải thiện năng suất l&agrave;m việc của họ. T&iacute;nh năng n&agrave;y mang lại cho người d&ugrave;ng sự thuận tiện v&agrave; linh hoạt, cho ph&eacute;p họ tận hưởng trải nghiệm người d&ugrave;ng được tối ưu h&oacute;a tốt nhất.</p>\r\n<p>Tr&aacute;i ngược với Copilot Pro, Copilot+ kh&ocirc;ng phải l&agrave; một dịch vụ đăng k&yacute; m&agrave; l&agrave; một chức năng mới được Microsoft đ&atilde; ph&aacute;t triển v&agrave; t&iacute;ch hợp trực tiếp v&agrave;o d&ograve;ng PC AI của m&igrave;nh. Copilot+ được định r&otilde; l&agrave; \"một số t&iacute;nh năng AI thế hệ tiếp theo của Microsoft chỉ c&oacute; tr&ecirc;n PC AI chạy Windows\".</p>\r\n<p>Những t&iacute;nh năng n&agrave;y bao gồm nhưng kh&ocirc;ng giới hạn ở việc học từ những hoạt động h&agrave;ng ng&agrave;y của người d&ugrave;ng, đề xuất nhiều h&agrave;nh động c&oacute; &iacute;ch, v&agrave; thậm ch&iacute; cố gắng dự đo&aacute;n v&agrave; thực hiện c&aacute;c t&aacute;c vụ tiếp theo dựa tr&ecirc;n c&aacute;c m&ocirc; h&igrave;nh học m&aacute;y phức tạp. N&oacute;i c&aacute;ch kh&aacute;c, Copilot+ kh&ocirc;ng chỉ hỗ trợ người d&ugrave;ng m&agrave; c&ograve;n cung cấp một trải nghiệm thật sự c&aacute; nh&acirc;n h&oacute;a v&agrave; đ&aacute;ng gi&aacute;.</p>\r\n<h2 id=\"copilot-pc-co-nhanh-hon-apple-macbook-air-m3-khong\"><strong>Copilot+ PC c&oacute; nhanh hơn Apple MacBook Air M3 kh&ocirc;ng?</strong></h2>\r\n<p>Theo Microsoft, Copilot+ PC, trang bị c&ocirc;ng nghệ AI mạnh mẽ, đ&atilde; đạt được một bước tiến đ&aacute;ng kể về tốc độ v&agrave; hiệu suất. Microsoft khẳng định rằng Copilot+ PC nhanh hơn đến 58% so với Apple&nbsp;<a href=\"https://cellphones.com.vn/laptop/mac.html\" target=\"_blank\" rel=\"noopener\">MacBook</a> Air M3, m&aacute;y t&iacute;nh x&aacute;ch tay mạnh mẽ nhất của Apple.</p>\r\n<p>Khả năng mạnh mẽ n&agrave;y của Copilot+ PC c&oacute; được nhờ v&agrave;o kiến tr&uacute;c hệ thống ho&agrave;n to&agrave;n mới m&agrave; Microsoft đ&atilde; giới thiệu. Hậu quả của việc kết hợp sức mạnh của CPU, GPU v&agrave; Bộ xử l&yacute; thần kinh (NPU) hiệu quả cao mới, đ&atilde; tạo n&ecirc;n sự vượt trội trong hiệu suất của Copilot+ PC. Đ&acirc;y ch&iacute;nh l&agrave; sản phẩm của sự tiếp thị của c&ocirc;ng ty, dựa tr&ecirc;n sức mạnh của c&ocirc;ng nghệ.</p>\r\n<p>Đặc biệt, Copilot+ PC c&ograve;n được hỗ trợ bởi c&aacute;c m&ocirc; h&igrave;nh ng&ocirc;n ngữ lớn (Large Language Models-LLMs) chạy trong Đ&aacute;m m&acirc;y Azure của Microsoft, c&ugrave;ng với c&aacute;c m&ocirc; h&igrave;nh ng&ocirc;n ngữ nhỏ (Small Language Models-SLMs). Sự kết hợp n&agrave;y đ&atilde; đưa Copilot+ PC đạt được mức hiệu suất chưa từng c&oacute;.</p>\r\n<p>B&ecirc;n cạnh đ&oacute;, Copilot+ PC c&ograve;n cho thấy khả năng vượt trội hơn MacBook Air 15&rdquo; của Apple tới 58% về hiệu suất đa luồng bền vững, đồng thời mang lại thời lượng pin cả ng&agrave;y. Hiệu suất n&agrave;y kh&ocirc;ng chỉ chứng tỏ sức mạnh của Copilot+ PC m&agrave; c&ograve;n đồng nghĩa với việc việc l&agrave;m việc, học tập, giải tr&iacute; tr&ecirc;n Copilot+ PC sẽ kh&ocirc;ng bị gi&aacute;n đoạn bởi vấn đề thời lượng pin.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../storage/Post/nhung-dieu-can-biet-ve-microsoft-copilot-pc-10.jpg\" alt=\"\" width=\"1200\" height=\"858\"></p>\r\n<p>Về thời lượng pin, Microsoft ấn tượng khi tuy&ecirc;n bố rằng Copilot+ PC c&oacute; thể cung cấp tới 22 giờ ph&aacute;t lại video cục bộ hoặc 15 giờ duyệt web trong một lần sạc. Con số n&agrave;y c&ograve;n nhiều hơn tới 20% so với MacBook Air 15&rdquo; - một điểm cộng quan trọng của Copilot+ PC so với đối thủ của m&igrave;nh.</p>\r\n<h2 id=\"microsoft-copilot-pc-ra-mat-lan-dau-tren-surface\"><strong>Microsoft Copilot+ PC ra mắt lần đầu tr&ecirc;n Surface&nbsp;</strong></h2>\r\n<p>Microsoft Copilot+ PC đ&atilde; ch&iacute;nh thức ra mắt v&agrave;o ng&agrave;y 18 th&aacute;ng 6 năm 2024. Thời điểm đầu ti&ecirc;n, c&aacute;c thiết bị Surface của Microsoft l&agrave; d&ograve;ng sản phẩm đầu ti&ecirc;n được trang bị Copilot+. Đ&oacute; ch&iacute;nh l&agrave; một bước tiến đột ph&aacute; trong ng&agrave;nh c&ocirc;ng nghệ, đ&aacute;nh dấu sự khởi đầu của kỷ nguy&ecirc;n m&aacute;y t&iacute;nh AI.</p>\r\n<p>Sau c&uacute; vọt đầu ti&ecirc;n về vấn đề t&iacute;ch hợp AI v&agrave;o c&aacute;c thiết bị, đ&atilde; c&oacute; rất nhiều nh&agrave; sản xuất từ c&aacute;c h&atilde;ng kh&aacute;c nhau đ&atilde; bắt đầu ch&uacute; trọng v&agrave;o việc ph&aacute;t triển v&agrave; tung ra th&ecirc;m nhiều d&ograve;ng PC Windows AI hỗ trợ Copilot+. Họ nhận thức r&otilde; rằng AI đang dần trở th&agrave;nh một xu hướng tất yếu, sẽ th&uacute;c đẩy nhiều sự thay đổi xu hướng v&agrave; định h&igrave;nh ng&agrave;nh c&ocirc;ng nghệ tương lai.</p>\r\n<p>Cho n&ecirc;n, Copilot+ kh&ocirc;ng chỉ dừng lại ở c&aacute;c thiết bị Surface m&agrave; tiếp tục được t&iacute;ch hợp tr&ecirc;n nhiều hệ thống m&aacute;y t&iacute;nh kh&aacute;c. Ng&agrave;y ra mắt của Copilot+ đ&atilde; đ&aacute;nh dấu sự bắt đầu của một kỷ nguy&ecirc;n mới, kỷ nguy&ecirc;n của AI trong m&aacute;y t&iacute;nh c&aacute; nh&acirc;n.</p>\r\n<h2 id=\"cach-de-co-duoc-copilot-pc\"><strong>C&aacute;ch để c&oacute; được &nbsp;Copilot+ PC</strong></h2>\r\n<p>Hiện tại, c&aacute;c t&iacute;nh năng trong Copilot+ PC được th&ocirc;ng tin sẽ c&oacute; mặt tr&ecirc;n một v&agrave;i mẫu laptop PC m&agrave; Microsoft gắn nh&atilde;n trước đ&oacute;. C&aacute;c c&ocirc;ng ty ti&ecirc;n trong trong việc sản xuất c&aacute;c mẫu laptop n&agrave;y chủ yếu l&agrave; c&aacute;c thương hiệu như: Acer, ASUS,<a href=\"https://cellphones.com.vn/laptop/dell.html\" target=\"_blank\" rel=\"noopener\">&nbsp;Dell</a>, HP, Lenovo v&agrave; Samsung.</p>\r\n<p>Với những bạn quan t&acirc;m v&agrave; n&oacute;ng l&ograve;ng sử dụng c&aacute;c t&iacute;nh năng tr&ecirc;n Copilot+ PC th&igrave; c&oacute; thể t&igrave;m hiểu v&agrave; đặt mua những chiếc m&aacute;y sau đ&acirc;y: Acer Swift 14,&nbsp;<a href=\"https://cellphones.com.vn/laptop/asus/vivobook.html\" target=\"_blank\" rel=\"noopener\">ASUS VivoBook</a>&nbsp;S15,&nbsp;<a href=\"https://cellphones.com.vn/laptop/dell/xps.html\" target=\"_blank\" rel=\"noopener\">Dell XPS</a>&nbsp;13,&nbsp;<a href=\"https://cellphones.com.vn/laptop/dell/inspiron.html\" target=\"_blank\" rel=\"noopener\">Dell Inspiron</a>&nbsp;14 Plus &amp; Dell Inspiron 14 , Dell Latitude 7455 &amp; Dell Latitude 5455, HP OmniBook X, HP EliteBook Ultra G1q, Lenovo Yoga Slim 7x, Lenovo ThinkPad T14s Gen 6, M&aacute;y t&iacute;nh x&aacute;ch tay Microsoft Surface 7, Microsoft Surface Pro 11,&nbsp;<a href=\"https://cellphones.com.vn/mobile/samsung.html\" target=\"_blank\" rel=\"noopener\">Samsung Galaxy</a> Book4 Edge.</p>\r\n<h2 id=\"tong-ket\"><strong>Tổng kết</strong></h2>\r\n<p>Microsoft Copilot+ l&agrave; một sản phẩm đầy hứa hẹn với t&iacute;nh năng AI độc đ&aacute;o v&agrave; hiệu xuất mạnh mẽ. N&oacute; mang lại những trải nghiệm hấp dẫn cho người d&ugrave;ng, gi&uacute;p cải tạo c&aacute;ch l&agrave;m việc, v&agrave; tạo n&ecirc;n những hoạt động s&aacute;ng tạo. Với Copilot+, người d&ugrave;ng c&oacute; thể kh&aacute;m ph&aacute; những cơ hội mới m&agrave; c&ocirc;ng nghệ hiện đại mang lại.</p>\r\n<p>Đối với những người đang t&igrave;m kiếm một c&aacute;ch mới để l&agrave;m việc v&agrave; s&aacute;ng tạo, Copilot+ PC c&oacute; thể l&agrave; một lựa chọn tốt. Tuy nhi&ecirc;n, người d&ugrave;ng cần xem x&eacute;t cẩn thận trước khi đưa ra quyết định mua, bởi giữa Copilot+ PC v&agrave; c&aacute;c sản phẩm kh&aacute;c như Apple MacBook Air M3, sự chọn lựa c&ograve;n phụ thuộc v&agrave;o nhu cầu sử dụng cụ thể v&agrave; ng&acirc;n s&aacute;ch của m&igrave;nh.</p>', 0, 0, 0, 'Microsoft Copilot+ PC', 'Microsoft Copilot+ PC', '<p><strong>Microsoft Copilot+ PC</strong></p>', '2024-06-22 11:49:16', '2024-06-22 11:49:16'),
(9, 8, NULL, '5 nâng cấp lớn nhất được đồn đại về camera Galaxy Z Fold6 và Galaxy Z Flip6 mà bạn nên biết', '5-nang-cap-lon-nhat-duoc-don-dai-ve-camera-galaxy-z-fold6-va-galaxy-z-flip6-ma-ban-nen-biet', '<p><strong>Nếu c&aacute;c b&aacute;o c&aacute;o v&agrave;&nbsp;<a href=\"https://cellphones.com.vn/mobile/hang-sap-ve.html\" target=\"_blank\" rel=\"noopener\">tin đồn</a>&nbsp;xuất hiện thời gian qua ch&iacute;nh x&aacute;c, Samsung sẽ ra mắt c&aacute;c&nbsp;<a href=\"https://cellphones.com.vn/mobile.html\" target=\"_blank\" rel=\"noopener\">điện thoại</a>&nbsp;<a href=\"https://cellphones.com.vn/man-hinh.html\" target=\"_blank\" rel=\"noopener\">m&agrave;n h&igrave;nh</a>&nbsp;gập mới l&agrave; Galaxy Z Fold6 v&agrave; Galaxy Z Flip6 trong sự kiện Galaxy Unpacked tiếp theo, được tổ chức v&agrave;o ng&agrave;y 10/7 tới.</strong></p>\r\n<p>Được biết, th&ocirc;ng tin r&ograve; rỉ về loạt smartphone n&agrave;y đ&atilde; được chia sẻ kh&aacute; nhiều trong thời gian qua, cho thấy những n&acirc;ng cấp ấn tượng so với thế hệ trước. Vậy Samsung sẽ mang đến những cải tiến g&igrave; về khả năng chụp ảnh cho d&ograve;ng Galaxy Z 2024? Dưới đ&acirc;y l&agrave; 5 n&acirc;ng cấp lớn nhất về&nbsp;<a href=\"https://cellphones.com.vn/phu-kien/camera.html\" target=\"_blank\" rel=\"noopener\">camera</a> của Galaxy Z Fold6 v&agrave; Z Flip6 m&agrave; bạn n&ecirc;n biết.</p>', 'http://media.th/storage/Post/Preview/camera-galaxy-z-fold6-1.jpg', '<h2 id=\"camera-cua-galaxy-z-fold6-on-dinh-khi-hoat-dong\"><strong>Camera của Galaxy Z Fold6: Ổn định khi hoạt động</strong></h2>\r\n<p>Theo hầu hết c&aacute;c tin đồn, r&ograve; rỉ xuất hiện thời gian qua, Samsung dường như sẽ kh&ocirc;ng mang đến nhiều n&acirc;ng cấp lớn về phần cứng m&aacute;y ảnh cho Galaxy Z Fold6. Leaker c&oacute; t&ecirc;n Revegnus đ&atilde; tuy&ecirc;n bố trong một b&agrave;i đăng đ&atilde; bị x&oacute;a tr&ecirc;n X rằng, Samsung sẽ sử dụng cảm biến GN3 tương tự được t&igrave;m thấy trong Galaxy Z Fold5 cho mẫu điện thoại m&agrave;n h&igrave;nh gập ngang sắp tới của m&igrave;nh. Một r&ograve; rỉ kh&aacute;c đến từ leaker nổi tiếng Ice Universe, x&aacute;c nhận rằng thiết lập camera của Z Fold6 \"giống với Fold4 v&agrave; Fold5, đ&oacute; l&agrave; điều chắc chắn.\"</p>\r\n<p style=\"text-align: center;\"><img src=\"../../storage/Post/camera-galaxy-z-fold6-2.jpg\" alt=\"\" width=\"1200\" height=\"675\"></p>\r\n<p>Th&ocirc;ng số kỹ thuật bị r&ograve; rỉ gần đ&acirc;y cũng x&aacute;c nhận điều đ&oacute;. SmartPrix đ&atilde; đăng những g&igrave; họ tuy&ecirc;n bố l&agrave; th&ocirc;ng số kỹ thuật đầy đủ cho Galaxy Z Fold6, cho thấy điện thoại c&oacute; hệ thống 3 camera sau, bao gồm cảm biến ch&iacute;nh 50MP, si&ecirc;u rộng 12MP v&agrave; ống k&iacute;nh tele 10MP. Đ&acirc;y l&agrave; hệ thống m&aacute;y ảnh m&agrave; ch&uacute;ng ta đ&atilde; được thấy Samsung trang bị cho Z Fold5.</p>\r\n<p>Camera trước tr&ecirc;n Galaxy Z Fold6 &ndash; được đồn đại sử dụng cảm biến 10MP nằm trong lỗ đục của m&agrave;n h&igrave;nh ngo&agrave;i v&agrave; cảm biến 4MP ẩn dưới m&agrave;n h&igrave;nh ch&iacute;nh như Z Fold5.</p>\r\n<h2 id=\"galaxy-z-fold6-duoc-cai-thien-kha-nang-quay-video\"><strong>Galaxy Z Fold6 được cải thiện khả năng quay video</strong></h2>\r\n<p>Mặc d&ugrave; c&oacute; phần cứng camera kh&ocirc;ng thay đổi so với thế hệ trước nhưng Galaxy Z Fold6 được cho l&agrave; sẽ c&oacute; khả năng quay video tốt hơn thế hệ trước. Cụ thể, c&aacute;c b&aacute;o c&aacute;o tiết lộ điện thoại n&agrave;y sẽ c&oacute; thể quay video slo-mo chất lượng 4K ở 120 khung h&igrave;nh/gi&acirc;y v&agrave; Full-HD ở 240 khung h&igrave;nh/gi&acirc;y. Trong khi Galaxy Z Fold5 hỗ trợ quay video th&ocirc;ng thường ở độ ph&acirc;n giải l&ecirc;n tới 8K th&igrave; video slowmotion chỉ dừng ở mức Full-HD.</p>\r\n<p style=\"text-align: center;\"><img src=\"../../storage/Post/camera-galaxy-z-fold6-3.jpg\" alt=\"\" width=\"1200\" height=\"675\"></p>\r\n<h2 id=\"mo-dun-camera-moi-cho-galaxy-z-fold6\"><strong>M&ocirc;-đun camera mới cho Galaxy Z Fold6</strong></h2>\r\n<p>Mặc d&ugrave; đ&acirc;y kh&ocirc;ng phải l&agrave; thay đổi được nhiều người mong chờ, nhưng Samsung được cho l&agrave; sẽ thiết kế lại m&ocirc;-đun camera sau cho Galaxy Z Fold6.</p>\r\n<div>\r\n<p>Để nhớ lại, Galaxy Z Fold5 c&oacute; cụm camera ri&ecirc;ng biệt, với khu vực nh&ocirc; cao ở b&ecirc;n ngo&agrave;i điện thoại bao quanh ba ống k&iacute;nh ph&iacute;a sau. Trong khi đ&oacute;, leaker nổi tiếng Ice Universe đ&atilde; đăng tải h&igrave;nh ảnh cho thấy Galaxy Z Fold6 vẫn c&oacute; hệ thống camera với c&aacute;c ống k&iacute;nh được sắp xếp theo chiều dọc nhưng đi k&egrave;m phần lồi ri&ecirc;ng biệt v&agrave; chỉ c&oacute; c&aacute;c ống k&iacute;nh nh&ocirc; ra một ch&uacute;t so với mặt sau của điện thoại. N&oacute;i c&aacute;ch kh&aacute;c, Galaxy Z Fold6 sẽ c&oacute; giao diện tương tự như bạn thấy ở mặt sau của Galaxy&nbsp;<a href=\"https://cellphones.com.vn/samsung-galaxy-s24.html\" target=\"_blank\" rel=\"noopener\">S24</a>, nơi c&oacute; một chồng camera nh&ocirc; ra ph&iacute;a sau điện thoại.</p>\r\n<h2 id=\"galaxy-z-flip6-cai-tien-lon-ve-camera-chinh\"><strong>Galaxy Z Flip6: Cải tiến lớn về camera ch&iacute;nh</strong></h2>\r\n<p>Nếu bạn đang mong chờ nhận được những n&acirc;ng cấp lớn về camera th&igrave; Galaxy Z Flip6 c&oacute; thể đ&aacute;p ứng được điều đ&oacute;. Theo c&aacute;c nguồn tin r&ograve; rỉ, mẫu điện thoại m&agrave;n h&igrave;nh gập dọc n&agrave;y sẽ tiếp tục sử dụng hệ thống camera k&eacute;p ở mặt sau, nhưng cảm biến ch&iacute;nh được n&acirc;ng cấp độ ph&acirc;n giải l&ecirc;n 50MP thay v&igrave; sử dụng m&aacute;y ảnh 12MP như thế hệ trước.</p>\r\n<p style=\"text-align: center;\"><img src=\"../../storage/Post/cau-hinh-galaxy-z-flip6.jpeg\" alt=\"\" width=\"1200\" height=\"675\"></p>\r\n<p>Thay đổi n&agrave;y chắc chắn sẽ mang đến những bức ảnh chất lượng hơn cho người d&ugrave;ng, cả trong điều kiện đủ s&aacute;ng hay thiếu s&aacute;ng. Chưa hết, trong khi Galaxy Z Flip5 c&oacute; t&iacute;nh năng chống rung quang học cho camera sau th&igrave; Galaxy Z Flip6 dự kiến ​​sẽ bổ sung th&ecirc;m t&iacute;nh năng chống rung&nbsp; điện tử. Điều đ&oacute; c&oacute; nghĩa l&agrave; ảnh chụp ổn định hơn v&agrave;o ban đ&ecirc;m.</p>\r\n<h2 id=\"tinh-nang-chup-anh-dua-tren-ai\"><strong>T&iacute;nh năng chụp ảnh dựa tr&ecirc;n AI?</strong></h2>\r\n<p>Theo c&aacute;c tin đồn, Samsung đang ph&aacute;t triển nhiều t&iacute;nh năng AI mới, bao gồm một số t&iacute;nh năng c&oacute; thể được gắn với camera tr&ecirc;n loạt điện thoại Z Fold v&agrave; Z Flip thế hệ tiếp theo. Một t&iacute;nh năng AI tiềm năng của Galaxy dường như nhắm đến Galaxy Z Fold6 sẽ lấy c&aacute;c bản ph&aacute;c thảo bạn vẽ tr&ecirc;n m&agrave;n h&igrave;nh điện thoại đ&oacute; - c&oacute; lẽ l&agrave; bằng S Pen đi k&egrave;m - v&agrave; n&acirc;ng cao ch&uacute;ng bằng Generative AI.</p>\r\n<p>Nếu c&aacute;c c&ocirc;ng cụ Galaxy AI được cập nhật sẽ sử dụng Generative AI để cải thiện h&igrave;nh ảnh được vẽ, th&igrave; c&oacute; vẻ như c&aacute;ch tiếp cận tương tự c&oacute; thể được &aacute;p dụng cho những bức ảnh được chụp bằng camera của Galaxy Z Fold6. C&aacute;c t&iacute;nh năng Galaxy AI hiện c&oacute; đ&atilde; cho ph&eacute;p bạn chỉnh sửa h&igrave;nh ảnh bằng c&aacute;ch thay đổi k&iacute;ch thước v&agrave; di chuyển xung quanh c&aacute;c vật thể. Ch&uacute;ng cũng sẽ đề xuất c&aacute;c chỉnh sửa tiềm năng như x&oacute;a h&igrave;nh ảnh phản chiếu khỏi h&igrave;nh ảnh.</p>\r\n</div>\r\n<p>&nbsp;</p>', 0, 0, 0, '5 nâng cấp lớn nhất được đồn đại về camera Galaxy Z Fold6 và Galaxy Z Flip6 mà bạn nên biết', 'Galaxy Z Fold6', '<p><strong>Nếu c&aacute;c b&aacute;o c&aacute;o v&agrave;&nbsp;<a href=\"https://cellphones.com.vn/mobile/hang-sap-ve.html\" target=\"_blank\" rel=\"noopener\">tin đồn</a>&nbsp;xuất hiện thời gian qua ch&iacute;nh x&aacute;c, Samsung sẽ ra mắt c&aacute;c&nbsp;<a href=\"https://cellphones.com.vn/mobile.html\" target=\"_blank\" rel=\"noopener\">điện thoại</a>&nbsp;<a href=\"https://cellphones.com.vn/man-hinh.html\" target=\"_blank\" rel=\"noopener\">m&agrave;n h&igrave;nh</a>&nbsp;gập mới l&agrave; Galaxy Z Fold6 v&agrave; Galaxy Z Flip6 trong sự kiện Galaxy Unpacked tiếp theo, được tổ chức v&agrave;o ng&agrave;y 10/7 tới.</strong></p>', '2024-06-22 11:56:21', '2024-06-22 11:56:21');
INSERT INTO `posts` (`id`, `category_id`, `product_id`, `title`, `slug`, `description`, `preview_image`, `content`, `views`, `rating_num`, `rating_value`, `seo_title`, `seo_keywords`, `seo_description`, `created_at`, `updated_at`) VALUES
(10, 11, 17, 'iPhone 15 Pro Max trả góp 0% - Mọi thông tin quý khách cần biết trước khi mua', 'iphone-15-pro-max-tra-gop-0-moi-thong-tin-quy-khach-can-biet-truoc-khi-mua', '<p><span style=\"background-color: #ffffff;\"><em><strong>iPhone 15 Pro max</strong></em></span>&nbsp;phi&ecirc;n bản 256GB l&agrave; tuỳ chọn dung lượng thấp nhất của d&ograve;ng cao cấp Pro Max, năm 2023 dung lượng 128GB của d&ograve;ng iPhone 15 Pro Max Apple đ&atilde; bị khai tử. Với những n&acirc;ng cấp đầy vượt trội từ thay đổi cổng sạc USB-C, trang bị ống k&iacute;nh tiền vọng mới, con chip Apple A17 mới nhất v&agrave; nhiều t&iacute;nh năng hấp dẫn kh&aacute;c.&nbsp;</p>', 'http://media.th/storage/products/iphone-15-pro-max-256gb-blue/1-1720379173.jpg', '<h2><strong>iPhone 15 Pro Max được n&acirc;ng cấp g&igrave; so với iPhone 14 Pro Max</strong></h2>\r\n<p>Đầu ti&ecirc;n, h&atilde;y c&ugrave;ng b&agrave;i viết đi v&agrave;o so s&aacute;nh tổng quan những n&acirc;ng cấp vượt trội của&nbsp;<strong>iPhone 15 Pro Max 256GB</strong>&nbsp;so với iPhone 14 Pro Max tiền nhiệm trong bản th&ocirc;ng số cụ thể dưới đ&acirc;y nh&eacute;.</p>\r\n<table border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p><strong>C&aacute;c ti&ecirc;u chuẩn so s&aacute;nh&nbsp;</strong></p>\r\n</td>\r\n<td>\r\n<p><strong>iPhone 14 Pro Max&nbsp;</strong></p>\r\n</td>\r\n<td>\r\n<p><strong>iPhone 15 Pro Max</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>K&iacute;ch thước m&agrave;n h&igrave;nh&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>6.7inch</p>\r\n</td>\r\n<td>\r\n<p>6.7inch</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Độ ph&acirc;n giải&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>1290 x 2796px</p>\r\n</td>\r\n<td>\r\n<p>1290 x 2796px</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Tấm nền&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>OLED</p>\r\n</td>\r\n<td>\r\n<p>OLED</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Hiệu năng&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>Apple A16 Bionic</p>\r\n</td>\r\n<td>\r\n<p><strong>Apple A17 Pro</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Hệ điều h&agrave;nh</p>\r\n</td>\r\n<td>\r\n<p>iOS 16</p>\r\n</td>\r\n<td>\r\n<p><strong>iOS 17</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Camera ch&iacute;nh&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>48MP|12MP|12MP</p>\r\n</td>\r\n<td>\r\n<p>48MP|12MP|12MP</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Camera trước&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>12MP</p>\r\n</td>\r\n<td>\r\n<p>12MP</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>K&iacute;ch thước</p>\r\n</td>\r\n<td>\r\n<p>160.7x77.6x7.85 mm</p>\r\n</td>\r\n<td>\r\n<p>159.86x76.73x8.25 mm</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Trọng lượng</p>\r\n</td>\r\n<td>\r\n<p>240gr</p>\r\n</td>\r\n<td>\r\n<p><strong>221gr</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Dung lượng pin&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>4.323 mAh</p>\r\n</td>\r\n<td>\r\n<p><strong>4.422mAh</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Sạc nhanh&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>27W</p>\r\n</td>\r\n<td>\r\n<p>Đang cập nhật</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Cổng sạc</p>\r\n</td>\r\n<td>\r\n<p>Lightning</p>\r\n</td>\r\n<td>\r\n<p><strong>USB-C</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Khung viền&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>Th&eacute;p kh&ocirc;ng ghỉ</p>\r\n</td>\r\n<td>\r\n<p><strong>&nbsp;Titanium</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>M&agrave;u sắc</p>\r\n</td>\r\n<td>\r\n<p>V&agrave;ng, T&iacute;m, X&aacute;m, Bạc</p>\r\n</td>\r\n<td>\r\n<p>X&aacute;m Titan, Đen Titan, Xanh Titan, Trắng Titan</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h2><strong>iPhone 15 Pro Max gi&aacute; bao nhi&ecirc;u?</strong></h2>\r\n<p>iPhone 15 Pro Max 256GB l&agrave; phi&ecirc;n bản dung lượng thấp nhất của bản cao cấp nhất của d&ograve;ng&nbsp;<strong><a href=\"https://didongviet.vn/iphone-15.html\">iPhone 15</a></strong>&nbsp;nh&agrave; T&aacute;o ra mắt năm 2023. D&ograve;ng sản phẩm n&agrave;y năm nay c&oacute; mức gi&aacute; kh&ocirc;ng qu&aacute; ch&ecirc;nh lệch lớn so với bản tiền nhiệm 14 Pro Max 256GB. H&atilde;y c&ugrave;ng b&agrave;i viết tham khảo qua mức gi&aacute; iPhone 15 Pro Max 256GB cập nhật mới nhất trong bảng dưới đ&acirc;y nh&eacute;.&nbsp;</p>\r\n<p><strong>Lưu &yacute;:&nbsp;Gi&aacute; tr&ecirc;n đ&acirc;y chỉ l&agrave; gi&aacute; tham khảo được cập nhật v&agrave;o ng&agrave;y 3/2/2024. Qu&yacute; kh&aacute;ch vui l&ograve;ng xem gi&aacute; ch&iacute;nh x&aacute;c 100% được hiển thị ở tr&ecirc;n sản phẩm. (Di Động Việt xin lỗi qu&yacute; kh&aacute;ch v&igrave; sự bất tiện n&agrave;y).</strong></p>\r\n<table style=\"margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p><strong>C&aacute;c phi&ecirc;n bản m&agrave;u sắc t&ugrave;y chọn của bản 256GB</strong></p>\r\n</td>\r\n<td>\r\n<p><strong>Gi&aacute; b&aacute;n khi mới ra mắt tại Mỹ&nbsp;</strong></p>\r\n</td>\r\n<td>\r\n<p><strong>Gi&aacute; b&aacute;n hiện tại</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>iPhone 15 Pro Max bản 256GB m&agrave;u Đen</p>\r\n</td>\r\n<td>\r\n<p>1.199 USD</p>\r\n</td>\r\n<td>\r\n<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;33.490.000 đ&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:12523,&quot;3&quot;:{&quot;1&quot;:4,&quot;2&quot;:&quot;#,##0 [$đ-42A]&quot;,&quot;3&quot;:1},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16777215},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;9&quot;:1,&quot;10&quot;:1,&quot;15&quot;:&quot;Arial&quot;,&quot;16&quot;:12}\" data-sheets-formula=\"=\'TTin Gốc\'!R[-16]C[3]\">31.290.000 đ</span>&nbsp;VNĐ</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>iPhone 15 Pro Max bản 256GB m&agrave;u Trắng</p>\r\n</td>\r\n<td>\r\n<p>1.199 USD</p>\r\n</td>\r\n<td>\r\n<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;33.490.000 đ&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:12523,&quot;3&quot;:{&quot;1&quot;:4,&quot;2&quot;:&quot;#,##0 [$đ-42A]&quot;,&quot;3&quot;:1},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16777215},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;9&quot;:1,&quot;10&quot;:1,&quot;15&quot;:&quot;Arial&quot;,&quot;16&quot;:12}\" data-sheets-formula=\"=\'TTin Gốc\'!R[-16]C[3]\">31.690.000 đ</span>&nbsp;VNĐ</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>iPhone 15 Pro Max bản 256GB m&agrave;u Titan Tự Nhi&ecirc;n</p>\r\n</td>\r\n<td>\r\n<p>1.199 USD</p>\r\n</td>\r\n<td>\r\n<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;33.490.000 đ&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:12523,&quot;3&quot;:{&quot;1&quot;:4,&quot;2&quot;:&quot;#,##0 [$đ-42A]&quot;,&quot;3&quot;:1},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16777215},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;9&quot;:1,&quot;10&quot;:1,&quot;15&quot;:&quot;Arial&quot;,&quot;16&quot;:12}\" data-sheets-formula=\"=\'TTin Gốc\'!R[-16]C[3]\">31.590.000 đ</span>&nbsp;VNĐ</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>iPhone 15 Pro Max bản 256GB m&agrave;u Titan Xanh&nbsp;</p>\r\n</td>\r\n<td>\r\n<p>1.199 USD</p>\r\n</td>\r\n<td><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;33.490.000 đ&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:12523,&quot;3&quot;:{&quot;1&quot;:4,&quot;2&quot;:&quot;#,##0 [$đ-42A]&quot;,&quot;3&quot;:1},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16777215},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;9&quot;:1,&quot;10&quot;:1,&quot;15&quot;:&quot;Arial&quot;,&quot;16&quot;:12}\" data-sheets-formula=\"=\'TTin Gốc\'!R[-16]C[3]\">31.190.000 đ</span>&nbsp;VNĐ</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>Tham khảo th&ecirc;m d&ograve;ng kh&aacute;c:&nbsp;<a href=\"https://didongviet.vn/dien-thoai/iphone-15-plus.html\">iPhone 15 Plus</a></strong></p>\r\n<h2><strong>iPhone 15 Pro Max c&oacute; mấy m&agrave;u?</strong></h2>\r\n<p>Phi&ecirc;n bản iPhone 15 Pro Max năm nay được trang bị 4 tuỳ chọn m&agrave;u sắc, bao gồm:</p>\r\n<ul>\r\n<li aria-level=\"1\">Black Titan (Đen): M&agrave;u đen sang trọng v&agrave; lịch l&atilde;m.</li>\r\n<li aria-level=\"1\">White Titan (Trắng): M&agrave;u bạc tinh tế v&agrave; truyền thống.</li>\r\n<li aria-level=\"1\">Natural Titanium (X&aacute;m): M&agrave;u x&aacute;m đậm v&agrave; mạnh mẽ.</li>\r\n<li aria-level=\"1\">Blue Titan (Xanh Dương): M&agrave;u xanh dương đậm, mang đến sự c&aacute; t&iacute;nh v&agrave; nổi bật.</li>\r\n</ul>\r\n<p>Mang đến những phi&ecirc;n bản m&agrave;u sắc đa dạng người d&ugrave;ng c&oacute; thể lựa chọn thể hiện phong c&aacute;ch, c&aacute; t&iacute;nh ri&ecirc;ng của m&igrave;nh. C&aacute;c tuỳ chọn m&agrave;u sắc tr&ecirc;n iPhone 15 Pro Max năm nay kh&ocirc;ng c&oacute; qu&aacute; nhiều sự thay đổi nổi bật. Vẫn l&agrave; những bản m&agrave;u sang trọng kh&aacute;c quen thuộc đ&atilde; từng xuất hiện tr&ecirc;n c&aacute;c phi&ecirc;n bản cũ, tuy nhi&ecirc;n vẫn mang đến vẻ ngo&agrave;i sang trọng độc đ&aacute;o của nh&agrave; Apple.&nbsp;</p>\r\n<p style=\"text-align: center;\"><img src=\"../../storage/products/iphone-15-pro-max-256gb-blue/0-1720379173.jpg\" alt=\"\" width=\"1020\" height=\"680\"></p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<h2><strong>iPhone 15 Pro Max c&oacute; g&igrave; mới đ&aacute;ng mua?</strong></h2>\r\n<p>Kế đến, h&atilde;y c&ugrave;ng b&agrave;i viết đi v&agrave;o đ&aacute;nh gi&aacute; chi tiết hơn những ưu điểm n&acirc;ng cấp vượt trội tr&ecirc;n&nbsp; điện thoại iPhone 15 Pro Max 256GB năm nay dưới đ&acirc;y nh&eacute;.&nbsp;</p>\r\n<h3><strong>Thiết kế sang trọng với khung viền Titan mới</strong></h3>\r\n<p>iPhone 15 Pro Max 256GB vẫn giữ nguy&ecirc;n thiết kế tương tự phi&ecirc;n bản trước đ&oacute; iPhone 14 Pro Max. Tuy nhi&ecirc;n, điều n&agrave;y kh&ocirc;ng phải l&agrave; một điểm trừ v&igrave; thiết kế của iPhone 14 Pro Max vẫn mang lại cảm gi&aacute;c sang trọng v&agrave; thời thượng.</p>\r\n<p>Ở mặt sau của iPhone 15 Pro Max, vẫn được trang bị một cụm camera lớn với ba ống k&iacute;nh, khung kim loại phẳng v&agrave; m&agrave;n h&igrave;nh với đường cắt Dynamic Island ở ph&iacute;a trước. Tuy nhi&ecirc;n, sự kh&aacute;c biệt giữa hai phi&ecirc;n bản rất l&agrave; tinh tế, cần để &yacute; kỹ mới c&oacute; thể nhận ra.&nbsp;</p>\r\n<p>Apple đ&atilde; l&agrave;m cho viền m&agrave;n h&igrave;nh của iPhone 15 Pro Max mỏng hơn, tạo ra tỷ lệ m&agrave;n h&igrave;nh so với th&acirc;n m&aacute;y cao hơn một ch&uacute;t. Hơn nữa, khung viền m&aacute;y đ&atilde; kh&ocirc;ng sử dụng th&eacute;p kh&ocirc;ng gỉ như trước đ&acirc;y, m&agrave; được l&agrave;m bằng chất liệu Titan mới. Điều n&agrave;y đ&atilde; gi&uacute;p iPhone 15 Pro Max nhẹ hơn trong khi vẫn giữ được cảm gi&aacute;c bền bỉ cao cấp.</p>\r\n<p>Bố tr&iacute; c&aacute;c n&uacute;t nguồn v&agrave; n&uacute;t &acirc;m lượng vẫn được giữ nguy&ecirc;n, mặc d&ugrave; h&igrave;nh dạng đ&atilde; được điều chỉnh đ&ocirc;i ch&uacute;t. Điều th&uacute; vị l&agrave; c&ocirc;ng tắc tắt tiếng ở cạnh tr&aacute;i đ&atilde;</p>\r\n<p>được thay thế bằng một n&uacute;t h&agrave;nh động mới. Tương tự như tr&ecirc;n Apple Watch Ultra, n&uacute;t n&agrave;y c&oacute; thể được lập tr&igrave;nh để thực hiện c&aacute;c chức năng tắt tiếng hoặc k&iacute;ch hoạt c&aacute;c ứng dụng y&ecirc;u th&iacute;ch theo &yacute; muốn của người d&ugrave;ng.</p>\r\n<p>Về cổng kết nối, theo quy định của c&aacute;c cơ quan quản l&yacute; EU, c&aacute;c thiết bị điện tử nhỏ cần tu&acirc;n thủ ti&ecirc;u chuẩn USB-C. Do đ&oacute;, iPhone 15 Pro Max đ&atilde; ch&agrave;o tạm biệt cổng Lightning truyền thống v&agrave; chuyển sang sử dụng cổng USB-C. Cổng mới n&agrave;y cung cấp tốc độ USB 3.2, nhanh hơn khoảng 10 lần so với Lightning hiện tại.&nbsp;</p>\r\n<p style=\"text-align: center;\"><img src=\"../../storage/products/iphone-15-pro-max-256gb-white/0-1720408534.jpg\" alt=\"\" width=\"1020\" height=\"680\"></p>\r\n<h3><strong>M&agrave;n h&igrave;nh n&acirc;ng cấp với mức s&aacute;ng 2.500 nits ấn tượng</strong></h3>\r\n<p>Apple iPhone 15 Pro Max 256GB được trang bị tấm nền OLED k&iacute;ch thước 6.7 inch như trước đ&acirc;y. Thiết kế Dynamic Island, m&agrave; ch&uacute;ng ta đ&atilde; thấy tr&ecirc;n phi&ecirc;n bản 14 Pro, vẫn được duy tr&igrave;. Tuy nhi&ecirc;n, viền xung quanh m&agrave;n h&igrave;nh đ&atilde; được l&agrave;m mỏng hơn, gi&uacute;p chiếc điện thoại trở n&ecirc;n nhỏ gọn hơn v&agrave; mang đến trải nghiệm to&agrave;n m&agrave;n h&igrave;nh tốt hơn ở ph&iacute;a trước.</p>\r\n<p>Người d&ugrave;ng vẫn được trải nghiệm m&agrave;n h&igrave;nh ProMotion 120Hz, t&iacute;nh năng Always On v&agrave; độ s&aacute;ng cực đại để thưởng thức video HDR trong mọi t&igrave;nh huống. M&agrave;n h&igrave;nh của iPhone 15 Pro Max đạt tới độ s&aacute;ng tối đa 2.500 nits, một con số cực kỳ ấn tượng so với bản tiền nhiệm.&nbsp;</p>\r\n<h3><strong>Camera n&acirc;ng cấp ấn tượng với ống k&iacute;nh tiềm vọng</strong></h3>\r\n<p>iPhone 15 Pro Max mới đ&atilde; tiếp tục sử dụng cụm camera 3 ống k&iacute;nh quen thuộc, bao gồm cả hệ thống LiDAR. Cảm biến ch&iacute;nh của camera đ&atilde; kh&ocirc;ng được n&acirc;ng cấp trong năm nay, vẫn duy tr&igrave; độ ph&acirc;n giải 48MP. Cụ thể, hệ thống camera vẫn bao gồm camera ch&iacute;nh 48MP, g&oacute;c si&ecirc;u rộng 12MP, tele 12MP cho khả năng zoom 5x đến 6x.</p>\r\n<p>Cảm biến 48MP đ&atilde; được giới thiệu c&ugrave;ng với d&ograve;ng iPhone 14 Pro v&agrave; đ&acirc;y l&agrave; một bước tiến lớn so với cảm biến 12MP trước đ&oacute;. iPhone 15 Pro Max đ&atilde; được trang bị th&ecirc;m một ống k&iacute;nh zoom độc quyền, cho ph&eacute;p ph&oacute;ng đại l&ecirc;n đến 5x. Về khả năng quay video, iPhone 15 Pro Max hỗ trợ quay video 8K đảm bảo chất lượng chuẩn chuy&ecirc;n nghiệp.</p>\r\n<h3><strong>Dung lượng pin ấn tượng với n&acirc;ng cấp hiệu năng mới&nbsp;</strong></h3>\r\n<p>Tr&ecirc;n iPhone 15 Pro Max 256GB vẫn giữ nguy&ecirc;n dung lượng pin như iPhone 14 Pro Max với vi&ecirc;n pin 4.323 mAh. Mặc d&ugrave; c&oacute; vẻ kh&ocirc;ng lớn so với c&aacute;c điện thoại cao cấp kh&aacute;c, nhưng iPhone 14 Pro Max đ&atilde; chứng minh khả năng ấn tượng về thời lượng pin nhờ sự tối ưu h&oacute;a từ hệ điều h&agrave;nh iOS.</p>\r\n<p>Với việc sử dụng chipset A17 Pro mới nhất tiết kiệm năng lượng tốt hơn, c&ugrave;ng bản n&acirc;ng cấp iOS 17 chắc chắn đ&atilde; mang lại sự cải thiện về thời lượng pin vượt trội hơn bản 14 Pro Max tiền nhiệm.</p>\r\n<h3><strong>Cổng sạc thay đổi ho&agrave;n to&agrave;n mới với cổng USB-C</strong></h3>\r\n<p>iPhone 15 Pro Max 256GB được trang bị cổng sạc USB-C ho&agrave;n to&agrave;n mới loại bỏ đi cổng lightning tiền nhiệm. Mang đến tốc độ sạc nhanh ch&oacute;ng hơn, nhưng hiện tại Apple vẫn chưa c&ocirc;ng bố c&ocirc;ng suất sạc v&agrave; vẫn giữ nguy&ecirc;n c&ocirc;ng suất 15W khi sử dụng MagSafe. C&aacute;c bộ sạc kh&ocirc;ng d&acirc;y Qi kh&aacute;c vẫn sạc ở mức chậm 7.5W.</p>\r\n<h3><strong>Sạc nhanh với n&acirc;ng cấp vượt trội hơn</strong></h3>\r\n<p>iPhone 15 Pro Max 256GB hỗ trợ sạc với c&ocirc;ng suất vẫn giữ nguy&ecirc;n l&agrave; 27W, nhưng th&ocirc;ng tin n&agrave;y vẫn chưa được Apple tiết lộ con số cụ thể. Điều n&agrave;y đ&atilde; gi&uacute;p điện thoại sạc pin nhanh hơn, đặc biệt l&agrave; trong việc đạt mức 50% v&agrave; 80% dung lượng pin. C&aacute;c phi&ecirc;n bản iPhone 15 đều được hỗ trợ cả sạc MagSafe v&agrave; ti&ecirc;u chuẩn Qi2 mới.&nbsp;</p>\r\n<p>Cho ph&eacute;p sạc kh&ocirc;ng d&acirc;y với c&ocirc;ng suất 15W từ c&aacute;c phụ kiện b&ecirc;n thứ ba kh&ocirc;ng phải l&agrave; MagSafe. Điều n&agrave;y đ&atilde; mang lại tốc độ sạc kh&ocirc;ng d&acirc;y nhanh hơn. Ngay cả khi sử dụng c&aacute;c phụ kiện kh&ocirc;ng ch&iacute;nh thức hỗ trợ MagSafe, miễn l&agrave; ch&uacute;ng hỗ trợ c&ocirc;ng nghệ Qi2.</p>\r\n<h3><strong>Hệ điều h&agrave;nh iOS 17 mới nhất với nhiều t&iacute;nh năng mới hấp dẫn</strong></h3>\r\n<p>Apple đ&atilde; chia c&aacute;i nh&igrave;n sơ bộ về iOS 17, hệ điều h&agrave;nh mới mắt c&ugrave;ng với d&ograve;ng iPhone 15. Trong năm 2023, người d&ugrave;ng đ&atilde; được trải nghiệm t&iacute;nh năng mới gọi l&agrave; Contact Poster, cho ph&eacute;p người d&ugrave;ng t&ugrave;y chọn c&aacute;ch họ xuất hiện tr&ecirc;n m&agrave;n h&igrave;nh điện thoại khi đang ở trong cuộc gọi.&nbsp;</p>\r\n<p>Apple cũng đ&atilde; cải thiện t&iacute;nh năng tự động sửa lỗi v&agrave; dự đo&aacute;n từ với b&agrave;n ph&iacute;m. B&agrave;n ph&iacute;m lưu trữ phong c&aacute;ch diễn đạt c&aacute; nh&acirc;n của bạn v&agrave; tự động th&iacute;ch nghi tốt hơn. Ngo&agrave;i ra, c&ograve;n c&oacute; nhiều t&iacute;nh năng th&uacute; vị kh&aacute;c như sao ch&eacute;p cuộc tr&ograve; chuyện hoặc tin nhắn thoại trong iMessage. Đương nhi&ecirc;n, tất cả c&aacute;c t&iacute;nh năng n&agrave;y cũng đ&atilde; c&oacute; mặt tr&ecirc;n bất kỳ điện thoại n&agrave;o hỗ trợ iOS 17.</p>\r\n<p>iPhone của Apple đ&atilde; nổi tiếng v&igrave; việc nhận được c&aacute;c bản cập nhật iOS trong nhiều năm li&ecirc;n tiếp, với thời gian hỗ trợ th&ocirc;ng thường l&agrave; 5 năm. V&igrave; vậy, iPhone 15 Pro Max ra mắt c&ugrave;ng với iOS 17 v&agrave;o năm 2023 v&agrave; đ&atilde; tiếp tục nhận được c&aacute;c bản cập nhật iOS cho đến năm 2028, trừ khi c&oacute; sự thay đổi.</p>', 2, 0, 0, 'iPhone 15 Pro Max', 'iPhone 15 Pro Max', '<p><span style=\"background-color: #ffffff;\"><em><strong>iPhone 15 Pro max</strong></em></span> phi&ecirc;n bản 256GB</p>', '2024-07-08 05:12:29', '2024-07-10 15:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_product` mediumtext COLLATE utf8mb4_unicode_ci,
  `color` text COLLATE utf8mb4_unicode_ci,
  `price` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `quantity_sold` int(11) NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `slug`, `info_product`, `color`, `price`, `quantity`, `quantity_sold`, `status`, `description`, `promotion`, `created_at`, `updated_at`) VALUES
(7, 50, 2, 'Iphone 15 Plus 128GB Hồng nhạt', 'iphone-15-plus-128gb-hong-nhat', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th>T&ecirc;n</th>\r\n<th>Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">C&ocirc;ng nghệ m&agrave; h&igrave;nh</td>\r\n<td style=\"text-align: center;\">Oled</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">Độ ph&acirc;n giải</td>\r\n<td style=\"text-align: center;\">Super Retina XDR (1290 x 2796 Pixels)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">M&agrave;n h&igrave;nh rộng</td>\r\n<td style=\"text-align: center;\">6.7\" - 60 Hz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">Mặt cảm ứng</td>\r\n<td style=\"text-align: center;\">K&iacute;nh cường lực Ceramic</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">Độ ph&acirc;n giải&nbsp;</td>\r\n<td style=\"text-align: center;\">12MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">Hệ điều h&agrave;nh&nbsp;</td>\r\n<td style=\"text-align: center;\">iOS 17</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">CPU</td>\r\n<td style=\"text-align: center;\">Apple A16 Bionic 6 nh&acirc;n&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">Tốc độ CPU&nbsp;</td>\r\n<td style=\"text-align: center;\">2.46 GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">&nbsp;</td>\r\n<td style=\"text-align: center;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Hồng nhạt', 22790000, 14, 15, 'conhang', 'Iphone 15 Plus 128GB Hồng nhạt', 12, '2024-07-07 15:19:58', '2024-07-07 15:19:58'),
(9, 78, 3, 'Điện thoại Samsung Galaxy A55 5G Tím', 'dien-thoai-samsung-galaxy-a55-5g-tim', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th>T&ecirc;n</th>\r\n<th>Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">M&agrave;n h&igrave;nh&nbsp;</td>\r\n<td style=\"text-align: center;\">Super AMOLED, 6.6\", Full HD+</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center;\">Android 13</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">Cam sau&nbsp;</td>\r\n<td style=\"text-align: center;\">50 MP, 12 MP, 5 MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">Cam trước</td>\r\n<td style=\"text-align: center;\">32 MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">Chip</td>\r\n<td style=\"text-align: center;\">Exynos 1480 8 nh&acirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">RAM</td>\r\n<td style=\"text-align: center;\">12 GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">Pin, Sạc</td>\r\n<td style=\"text-align: center;\"><span class=\"comma\">5000 mAh</span><span class=\"\">25 W</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">&nbsp;</td>\r\n<td style=\"text-align: center;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">&nbsp;</td>\r\n<td style=\"text-align: center;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Tím', 11090000, 32, 0, 'conhang', 'Điện thoại Samsung Galaxy A55 5G Tím', 7, '2024-07-07 15:30:13', '2024-07-07 15:30:13'),
(10, 78, 3, 'Điện thoại Samsung Galaxy A55 5G Xanh', 'dien-thoai-samsung-galaxy-a55-5g-xanh', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 32.4042%;\">T&ecirc;n</th>\r\n<th style=\"width: 67.5958%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">M&agrave;n h&igrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">Super AMOLED, 6.6\", Full HD+</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">Android 13</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Cam sau&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">50 MP, 12 MP, 5 MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Cam trước</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">32 MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Chip</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">Exynos 1480 8 nh&acirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">RAM</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">12 GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Pin, Sạc</td>\r\n<td style=\"text-align: center; width: 67.5958%;\"><span class=\"comma\">5000 mAh</span><span class=\"\">25 W</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Xanh', 11090000, 31, 0, 'conhang', 'Điện thoại Samsung Galaxy A55 5G Xanh', 7, '2024-07-07 15:32:35', '2024-07-07 15:32:35'),
(11, 77, 3, 'Điện thoại Samsung Galaxy S23 Ultra 5G Xanh Rêu', 'dien-thoai-samsung-galaxy-s23-ultra-5g-xanh-reu', '<table style=\"width: 100%; height: 390px;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr style=\"height: 39px;\">\r\n<th style=\"width: 32.4042%;\">T&ecirc;n</th>\r\n<th style=\"width: 67.5958%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 32.4042%;\">M&agrave;n h&igrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">Super AMOLED, 6.6\", Full HD+</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 32.4042%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">Android 13</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 32.4042%;\">Cam sau&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">50 MP, 12 MP, 5 MP</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 32.4042%;\">Cam trước</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">32 MP</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 32.4042%;\">Chip</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">Exynos 1480 8 nh&acirc;n</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 32.4042%;\">RAM</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">12 GB</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 32.4042%;\">Pin, Sạc</td>\r\n<td style=\"text-align: center; width: 67.5958%;\"><span class=\"comma\">5000 mAh</span><span class=\"\">25 W</span></td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 32.4042%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 32.4042%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Xanh Rêu', 23990000, 12, 0, 'conhang', 'Điện thoại Samsung Galaxy S23 Ultra 5G Xanh Rêu', 4, '2024-07-07 15:35:55', '2024-07-07 15:35:55'),
(12, 77, 3, 'Điện thoại Samsung Galaxy S23 Ultra 5G Đen', 'dien-thoai-samsung-galaxy-s23-ultra-5g-den', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 32.4042%;\">T&ecirc;n</th>\r\n<th style=\"width: 67.5958%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">M&agrave;n h&igrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">Super AMOLED, 6.6\", Full HD+</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">Android 13</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Cam sau&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">50 MP, 12 MP, 5 MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Cam trước</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">32 MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Chip</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">Exynos 1480 8 nh&acirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">RAM</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">12 GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Pin, Sạc</td>\r\n<td style=\"text-align: center; width: 67.5958%;\"><span class=\"comma\">5000 mAh</span><span class=\"\">25 W</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Đen', 23990000, 4, 0, 'conhang', 'Điện thoại Samsung Galaxy S23 Ultra 5G Đen', 4, '2024-07-07 15:37:39', '2024-07-07 15:37:39'),
(13, 77, 3, 'Điện thoại Samsung Galaxy S23 Ultra 5G Tím', 'dien-thoai-samsung-galaxy-s23-ultra-5g-tim', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 32.4042%;\">T&ecirc;n</th>\r\n<th style=\"width: 67.5958%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">M&agrave;n h&igrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">Super AMOLED, 6.6\", Full HD+</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">Android 13</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Cam sau&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">50 MP, 12 MP, 5 MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Cam trước</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">32 MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Chip</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">Exynos 1480 8 nh&acirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">RAM</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">12 GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Pin, Sạc</td>\r\n<td style=\"text-align: center; width: 67.5958%;\"><span class=\"comma\">5000 mAh</span><span class=\"\">25 W</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Tím', 21000000, 12, 4, 'conhang', 'Điện thoại Samsung Galaxy S23 Ultra 5G Tím', 0, '2024-07-07 15:39:23', '2024-07-07 15:39:23'),
(14, 79, 3, 'Điện thoại Samsung Galaxy S24 Đen', 'dien-thoai-samsung-galaxy-s24-den', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 32.4042%;\">T&ecirc;n</th>\r\n<th style=\"width: 67.5958%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">M&agrave;n h&igrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">Super AMOLED, 6.6\", Full HD+</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">Android 13</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Cam sau&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">50 MP, 12 MP, 5 MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Cam trước</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">32 MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Chip</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">Exynos 1480 8 nh&acirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">RAM</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">12 GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">Pin, Sạc</td>\r\n<td style=\"text-align: center; width: 67.5958%;\"><span class=\"comma\">5000 mAh</span><span class=\"\">25 W</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.4042%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.5958%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Đen', 12300000, 3, 0, 'conhang', 'Điện thoại Samsung Galaxy S24 Đen', 0, '2024-07-07 15:42:29', '2024-07-07 15:42:29'),
(15, 79, 3, 'Điện thoại Samsung Galaxy S24 Vàng', 'dien-thoai-samsung-galaxy-s24-vang', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 32.341%;\">T&ecirc;n</th>\r\n<th style=\"width: 67.659%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">M&agrave;n h&igrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.659%;\">Super AMOLED, 6.6\", Full HD+</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 67.659%;\">Android 13</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">Cam sau&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.659%;\">50 MP, 12 MP, 5 MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">Cam trước</td>\r\n<td style=\"text-align: center; width: 67.659%;\">32 MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">Chip</td>\r\n<td style=\"text-align: center; width: 67.659%;\">Exynos 1480 8 nh&acirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">RAM</td>\r\n<td style=\"text-align: center; width: 67.659%;\">12 GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">Pin, Sạc</td>\r\n<td style=\"text-align: center; width: 67.659%;\"><span class=\"comma\">5000 mAh</span><span class=\"\">25 W</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.659%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.659%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Vàng', 33990000, 9, 0, 'conhang', 'Điện thoại Samsung Galaxy S24 Vàng', 17, '2024-07-07 15:45:05', '2024-07-07 15:45:05'),
(16, 79, 3, 'Điện thoại Samsung Galaxy S24 Tím', 'dien-thoai-samsung-galaxy-s24-tim', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 32.341%;\">T&ecirc;n</th>\r\n<th style=\"width: 67.659%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">M&agrave;n h&igrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.659%;\">Super AMOLED, 6.6\", Full HD+</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 67.659%;\">Android 13</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">Cam sau&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.659%;\">50 MP, 12 MP, 5 MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">Cam trước</td>\r\n<td style=\"text-align: center; width: 67.659%;\">32 MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">Chip</td>\r\n<td style=\"text-align: center; width: 67.659%;\">Exynos 1480 8 nh&acirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">RAM</td>\r\n<td style=\"text-align: center; width: 67.659%;\">12 GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">Pin, Sạc</td>\r\n<td style=\"text-align: center; width: 67.659%;\"><span class=\"comma\">5000 mAh</span><span class=\"\">25 W</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.659%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 32.341%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 67.659%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Tím', 29090000, 10, 0, 'conhang', 'Điện thoại Samsung Galaxy S24 Tím', 5, '2024-07-07 15:46:33', '2024-07-07 15:46:33'),
(17, 56, 2, 'Iphone 15 Pro max 256GB Blue', 'iphone-15-pro-max-256gb-blue', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 34.8432%;\">T&ecirc;n</th>\r\n<th style=\"width: 65.1568%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">C&ocirc;ng nghệ m&agrave; h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Oled</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Super Retina XDR (1290 x 2796 Pixels)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">M&agrave;n h&igrave;nh rộng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">6.7\", Super Retina XDR</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Mặt cảm ứng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">K&iacute;nh cường lực Ceramic</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">12MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Hệ điều h&agrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">iOS 17</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">CPU</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Apple A17 Pro 6 nh&acirc;n&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Tốc độ CPU&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">3.78 GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Titan xanh', 34990000, 16, 0, 'conhang', 'Iphone 15 Pro max 128GB Blue', 15, '2024-07-07 16:05:53', '2024-07-07 16:05:53'),
(18, 56, 2, 'Iphone 15 Pro max 256GB White', 'iphone-15-pro-max-256gb-white', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 34.8432%;\">T&ecirc;n</th>\r\n<th style=\"width: 65.1568%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">C&ocirc;ng nghệ m&agrave; h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Oled</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Super Retina XDR (1290 x 2796 Pixels)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">M&agrave;n h&igrave;nh rộng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">6.7\", Super Retina XDR</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Mặt cảm ứng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">K&iacute;nh cường lực Ceramic</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">12MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Hệ điều h&agrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">iOS 17</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">CPU</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Apple A17 Pro 6 nh&acirc;n&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Tốc độ CPU&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">3.78 GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Titan trắng', 32990000, 5, 19, 'conhang', 'Iphone 15 Pro max 256GB White', 12, '2024-07-07 16:07:54', '2024-07-07 16:07:54'),
(19, 56, 2, 'Iphone 15 Pro max 256GB Titan Tự nhiên', 'iphone-15-pro-max-256gb-titan-tu-nhien', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 34.8432%;\">T&ecirc;n</th>\r\n<th style=\"width: 65.1568%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">C&ocirc;ng nghệ m&agrave; h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Oled</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Super Retina XDR (1290 x 2796 Pixels)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">M&agrave;n h&igrave;nh rộng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">6.7\", Super Retina XDR</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Mặt cảm ứng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">K&iacute;nh cường lực Ceramic</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">12MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Hệ điều h&agrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">iOS 17</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">CPU</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Apple A17 Pro 6 nh&acirc;n&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Tốc độ CPU&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">3.78 GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Titan Tự nhiên', 33990000, 12, 16, 'conhang', 'Iphone 15 Pro max 256GB Titan Tự nhiên', 10, '2024-07-07 16:09:41', '2024-07-07 16:09:41'),
(20, 56, 2, 'Iphone 15 Pro max 256GB Black', 'iphone-15-pro-max-256gb-black', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 34.8432%;\">T&ecirc;n</th>\r\n<th style=\"width: 65.1568%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">C&ocirc;ng nghệ m&agrave; h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Oled</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Super Retina XDR (1290 x 2796 Pixels)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">M&agrave;n h&igrave;nh rộng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">6.7\", Super Retina XDR</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Mặt cảm ứng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">K&iacute;nh cường lực Ceramic</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">12MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Hệ điều h&agrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">iOS 17</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">CPU</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Apple A17 Pro 6 nh&acirc;n&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Tốc độ CPU&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">3.78 GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Titan đen', 34990000, 29, 0, 'conhang', 'Iphone 15 Pro max 256GB Black', 14, '2024-07-07 16:14:59', '2024-07-07 16:14:59'),
(21, 57, 2, 'Iphone 15 Pro max 512GB Black', 'iphone-15-pro-max-512gb-black', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 34.8432%;\">T&ecirc;n</th>\r\n<th style=\"width: 65.1568%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">C&ocirc;ng nghệ m&agrave; h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Oled</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Super Retina XDR (1290 x 2796 Pixels)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">M&agrave;n h&igrave;nh rộng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">6.7\", Super Retina XDR</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Mặt cảm ứng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">K&iacute;nh cường lực Ceramic</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">12MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Hệ điều h&agrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">iOS 17</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">CPU</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Apple A17 Pro 6 nh&acirc;n&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Tốc độ CPU&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">3.78 GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Titan đen', 40990000, 9, 0, 'conhang', 'Iphone 15 Pro max 512GB Black', 10, '2024-07-08 00:13:27', '2024-07-08 00:13:27'),
(22, 57, 2, 'Iphone 15 Pro max 1TB White', 'iphone-15-pro-max-1tb-white', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 34.8432%;\">T&ecirc;n</th>\r\n<th style=\"width: 65.1568%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">C&ocirc;ng nghệ m&agrave; h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Oled</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Super Retina XDR (1290 x 2796 Pixels)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">M&agrave;n h&igrave;nh rộng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">6.7\", Super Retina XDR</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Mặt cảm ứng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">K&iacute;nh cường lực Ceramic</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">12MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Hệ điều h&agrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">iOS 17</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">CPU</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Apple A17 Pro 6 nh&acirc;n&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Tốc độ CPU&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">3.78 GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Titan trắng', 40990000, 7, 21, 'conhang', 'Iphone 15 Pro max 1TB White', 10, '2024-07-08 00:15:11', '2024-07-08 00:23:04'),
(23, 58, 2, 'Iphone 15 Pro max 1TB Titan tự nhiên', 'iphone-15-pro-max-1tb-titan-tu-nhien', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 34.8432%;\">T&ecirc;n</th>\r\n<th style=\"width: 65.1568%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">C&ocirc;ng nghệ m&agrave; h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Oled</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Super Retina XDR (1290 x 2796 Pixels)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">M&agrave;n h&igrave;nh rộng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">6.7\", Super Retina XDR</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Mặt cảm ứng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">K&iacute;nh cường lực Ceramic</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">12MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Hệ điều h&agrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">iOS 17</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">CPU</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Apple A17 Pro 6 nh&acirc;n&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Tốc độ CPU&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">3.78 GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Titan tự nhiên', 46990000, 8, 0, 'conhang', 'Iphone 15 Pro max 1TB Titan tự nhiên', 8, '2024-07-08 00:18:29', '2024-07-08 00:20:15'),
(24, 84, 6, 'Redmi Note 13 Đen', 'redmi-note-13-den', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 34.8432%;\">T&ecirc;n</th>\r\n<th style=\"width: 65.1568%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">C&ocirc;ng nghệ m&agrave; h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">AMOLED</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Full HD+ (1080 x 2400 Pixels)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">M&agrave;n h&igrave;nh rộng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">6.67\", 120HZ</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Mặt cảm ứng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">K&iacute;nh cường lực Corning Gorilla Glass 3</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">108MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Hệ điều h&agrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Android 13</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">CPU</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Snaodragon 685 8 nh&acirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Tốc độ CPU&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">2.8 GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Đen', 5290000, 19, 22, 'conhang', 'Redmi Note 13 Đen', 0, '2024-07-08 00:28:52', '2024-07-08 00:28:52'),
(25, 84, 6, 'Redmi Note 13 Xanh', 'redmi-note-13-xanh', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 34.8432%;\">T&ecirc;n</th>\r\n<th style=\"width: 65.1568%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">C&ocirc;ng nghệ m&agrave; h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">AMOLED</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Full HD+ (1080 x 2400 Pixels)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">M&agrave;n h&igrave;nh rộng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">6.67\", 120HZ</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Mặt cảm ứng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">K&iacute;nh cường lực Corning Gorilla Glass 3</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">108MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Hệ điều h&agrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Android 13</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">CPU</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Snaodragon 685 8 nh&acirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Tốc độ CPU&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">2.8 GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Xanh', 5290000, 16, 0, 'conhang', 'Redmi Note 13 Xanh', 4, '2024-07-08 00:30:48', '2024-07-08 00:30:48'),
(26, 88, 6, 'Xiaomi Note 13 Pro Xanh lá', 'xiaomi-note-13-pro-xanh-la', '<table style=\"width: 100%; height: 390px;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr style=\"height: 39px;\">\r\n<th style=\"width: 34.8432%;\">T&ecirc;n</th>\r\n<th style=\"width: 65.1568%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">C&ocirc;ng nghệ m&agrave; h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">AMOLED</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Full HD+ (1080 x 2400 Pixels)</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">M&agrave;n h&igrave;nh rộng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">6.67\", 120HZ</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">Mặt cảm ứng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">K&iacute;nh cường lực Corning Gorilla Glass 3</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">108MP</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">Hệ điều h&agrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Android 13</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">CPU</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Snaodragon 685 8 nh&acirc;n</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">Tốc độ CPU&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">2.8 GHz</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Xanh lá', 7290000, 9, 0, 'conhang', 'Xiaomi Note 13 Pro Xanh lá', 0, '2024-07-08 00:34:37', '2024-07-08 00:34:37'),
(27, 88, 6, 'Xiaomi Note 13 Xanh ngọc', 'xiaomi-note-13-xanh-ngoc', '<table style=\"width: 100%; height: 390px;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr style=\"height: 39px;\">\r\n<th style=\"width: 34.8432%;\">T&ecirc;n</th>\r\n<th style=\"width: 65.1568%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">C&ocirc;ng nghệ m&agrave; h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">AMOLED</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Full HD+ (1080 x 2400 Pixels)</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">M&agrave;n h&igrave;nh rộng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">6.67\", 120HZ</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">Mặt cảm ứng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">K&iacute;nh cường lực Corning Gorilla Glass 3</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">108MP</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">Hệ điều h&agrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Android 13</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">CPU</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Snaodragon 685 8 nh&acirc;n</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">Tốc độ CPU&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">2.8 GHz</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 34.8432%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Xanh ngọc', 6990000, 21, 0, 'conhang', 'Xiaomi Note 13 Xanh ngọc', 11, '2024-07-08 00:36:37', '2024-07-08 00:36:37'),
(28, 89, 6, 'Xiaomi 13T Xanh Rêu', 'xiaomi-13t-xanh-reu', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 34.8432%;\">T&ecirc;n</th>\r\n<th style=\"width: 65.1568%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">C&ocirc;ng nghệ m&agrave; h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">AMOLED</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Full HD+ (1080 x 2400 Pixels)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">M&agrave;n h&igrave;nh rộng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">6.67\", 120HZ</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Mặt cảm ứng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">K&iacute;nh cường lực Corning Gorilla Glass 3</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">108MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Hệ điều h&agrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Android 13</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">CPU</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Snaodragon 685 8 nh&acirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Tốc độ CPU&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">2.8 GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Xanh Rêu', 10990000, 16, 5, 'conhang', 'Xiaomi 13T Xanh Rêu', 0, '2024-07-08 00:39:07', '2024-07-08 00:39:07'),
(29, 89, 6, 'Xiaomi 13T Xanh dương', 'xiaomi-13t-xanh-duong', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 34.8432%;\">T&ecirc;n</th>\r\n<th style=\"width: 65.1568%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">C&ocirc;ng nghệ m&agrave; h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">AMOLED</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Full HD+ (1080 x 2400 Pixels)</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">M&agrave;n h&igrave;nh rộng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">6.67\", 120HZ</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Mặt cảm ứng</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">K&iacute;nh cường lực Corning Gorilla Glass 3</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Độ ph&acirc;n giải&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">108MP</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Hệ điều h&agrave;nh&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Android 13</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">CPU</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">Snaodragon 685 8 nh&acirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">Tốc độ CPU&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">2.8 GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 34.8432%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 65.1568%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Xanh dương', 9990000, 12, 0, 'conhang', 'Xiaomi 13T Xanh dương', 0, '2024-07-08 00:41:06', '2024-07-08 00:41:06'),
(30, 92, 7, 'Laptop Dell Inspiron 15 3520 Đen', 'laptop-dell-inspiron-15-3520-den', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 23.8737%;\">T&ecirc;n</th>\r\n<th style=\"width: 76.1263%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8737%;\">CPU</td>\r\n<td style=\"text-align: center; width: 76.1263%;\">i5, 1235U, 1.3GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8737%;\">RAM</td>\r\n<td style=\"text-align: center; width: 76.1263%;\">16GB, DDR4 2 khe, 2666MHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8737%;\">Ổ cứng&nbsp;</td>\r\n<td style=\"text-align: center; width: 76.1263%;\"><span class=\"comma\">Hỗ trợ khe cắm HDD SATA (n&acirc;ng cấp tối đa 2 TB)</span><span class=\"\">512 GB SSD NVMe PCIe</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8737%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1263%;\">15.6\", Full HD (1920 x 1080), 120Hz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8737%;\">Card m&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1263%;\">Intel Iris Xe</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8737%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1263%;\">Windows 11 Home SL + Office Home &amp; Student vĩnh viễn</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8737%;\">Thiết kế</td>\r\n<td style=\"text-align: center; width: 76.1263%;\">Vỏ nhựa</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8737%;\">K&iacute;ch thước, khối lượng</td>\r\n<td style=\"text-align: center; width: 76.1263%;\">D&agrave;i 358.5 mm - Rộng 235.56 mm - D&agrave;y 18.99 mm</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8737%;\">Thời điểm ra mắt</td>\r\n<td style=\"text-align: center; width: 76.1263%;\">2022</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Đen', 16990000, 8, 0, 'conhang', 'Laptop Dell Inspiron 15 3520 Đen', 4, '2024-07-08 00:58:55', '2024-07-08 00:58:55'),
(31, 92, 7, 'Dell Inspiron 15 3520 Bạc', 'dell-inspiron-15-3520-bac', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 23.8779%;\">T&ecirc;n</th>\r\n<th style=\"width: 76.1221%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">CPU</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">i5, 1235U, 1.3GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">RAM</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">16GB, DDR4 2 khe, 2666MHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Ổ cứng&nbsp;</td>\r\n<td style=\"text-align: center; width: 76.1221%;\"><span class=\"comma\">Hỗ trợ khe cắm HDD SATA (n&acirc;ng cấp tối đa 2 TB)</span><span class=\"\">512 GB SSD NVMe PCIe</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">15.6\", Full HD (1920 x 1080), 120Hz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Card m&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Intel Iris Xe</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Windows 11 Home SL + Office Home &amp; Student vĩnh viễn</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Thiết kế</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Vỏ nhựa</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">K&iacute;ch thước, khối lượng</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">D&agrave;i 358.5 mm - Rộng 235.56 mm - D&agrave;y 18.99 mm</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.8779%;\">&nbsp;</td>\r\n<td style=\"width: 76.1221%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Bạc', 16990000, 7, 10, 'conhang', 'Dell Inspiron 15 3520 Xám', 0, '2024-07-08 01:03:04', '2024-07-08 01:03:04'),
(32, 93, 7, 'Dell Vostro 15 3520 Xám', 'dell-vostro-15-3520-xam', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 23.8779%;\">T&ecirc;n</th>\r\n<th style=\"width: 76.1221%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">CPU</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">i5, 1235U, 1.3GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">RAM</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">16GB, DDR4 2 khe, 2666MHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Ổ cứng&nbsp;</td>\r\n<td style=\"text-align: center; width: 76.1221%;\"><span class=\"comma\">Hỗ trợ khe cắm HDD SATA (n&acirc;ng cấp tối đa 2 TB)</span><span class=\"\">512 GB SSD NVMe PCIe</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">15.6\", Full HD (1920 x 1080), 120Hz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Card m&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Intel Iris Xe</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Windows 11 Home SL + Office Home &amp; Student vĩnh viễn</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Thiết kế</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Vỏ nhựa</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">K&iacute;ch thước, khối lượng</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">D&agrave;i 358.5 mm - Rộng 235.56 mm - D&agrave;y 18.99 mm</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.8779%;\">&nbsp;</td>\r\n<td style=\"width: 76.1221%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Xám', 16900000, 15, 0, 'conhang', 'Dell Vostro 15 3520 Xám', 11, '2024-07-08 01:05:35', '2024-07-08 01:05:35');
INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `slug`, `info_product`, `color`, `price`, `quantity`, `quantity_sold`, `status`, `description`, `promotion`, `created_at`, `updated_at`) VALUES
(33, 94, 7, 'Dell Precision 16 5680 Xám', 'dell-precision-16-5680-xam', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 23.8779%;\">T&ecirc;n</th>\r\n<th style=\"width: 76.1221%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">CPU</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">i5, 1235U, 1.3GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">RAM</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">16GB, DDR4 2 khe, 2666MHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Ổ cứng&nbsp;</td>\r\n<td style=\"text-align: center; width: 76.1221%;\"><span class=\"comma\">Hỗ trợ khe cắm HDD SATA (n&acirc;ng cấp tối đa 2 TB)</span><span class=\"\">512 GB SSD NVMe PCIe</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">15.6\", Full HD (1920 x 1080), 120Hz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Card m&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Intel Iris Xe</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Windows 11 Home SL + Office Home &amp; Student vĩnh viễn</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Thiết kế</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Vỏ nhựa</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">K&iacute;ch thước, khối lượng</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">D&agrave;i 358.5 mm - Rộng 235.56 mm - D&agrave;y 18.99 mm</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.8779%;\">&nbsp;</td>\r\n<td style=\"width: 76.1221%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Xám', 85290000, 12, 0, 'conhang', 'Dell Precision 16 5680 Xám', 8, '2024-07-08 01:08:07', '2024-07-08 01:08:07'),
(34, 95, 8, 'Laptop HP 245 G10 R5 7530U', 'laptop-hp-245-g10-r5-7530u', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 23.8779%;\">T&ecirc;n</th>\r\n<th style=\"width: 76.1221%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">CPU</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">i5, 1235U, 1.3GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">RAM</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">16GB, DDR4 2 khe, 2666MHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Ổ cứng&nbsp;</td>\r\n<td style=\"text-align: center; width: 76.1221%;\"><span class=\"comma\">Hỗ trợ khe cắm HDD SATA (n&acirc;ng cấp tối đa 2 TB)</span><span class=\"\">512 GB SSD NVMe PCIe</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">15.6\", Full HD (1920 x 1080), 120Hz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Card m&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Intel Iris Xe</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Windows 11 Home SL + Office Home &amp; Student vĩnh viễn</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Thiết kế</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Vỏ nhựa</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">K&iacute;ch thước, khối lượng</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">D&agrave;i 358.5 mm - Rộng 235.56 mm - D&agrave;y 18.99 mm</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.8779%;\">&nbsp;</td>\r\n<td style=\"width: 76.1221%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Xám', 14590000, 9, 0, 'conhang', 'Laptop HP 245 G10 R5 7530U', 16, '2024-07-08 01:15:06', '2024-07-08 01:15:06'),
(35, 98, 8, 'Laptop HP Gaming VICTUS 15 fb1022AX R5 7535HS/16GB/512GB/4GB RTX2050/144Hz/Win11 (94F19PA)', 'laptop-hp-gaming-victus-15-fb1022ax-r5-7535hs16gb512gb4gb-rtx2050144hzwin11-94f19pa', '<table style=\"width: 100%; height: 444px;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr style=\"height: 39px;\">\r\n<th style=\"width: 23.8779%;\">T&ecirc;n</th>\r\n<th style=\"width: 76.1221%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 23.8779%;\">CPU</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">i5, 1235U, 1.3GHz</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 23.8779%;\">RAM</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">16GB, DDR4 2 khe, 2666MHz</td>\r\n</tr>\r\n<tr style=\"height: 57px;\">\r\n<td style=\"text-align: center; width: 23.8779%;\">Ổ cứng&nbsp;</td>\r\n<td style=\"text-align: center; width: 76.1221%;\"><span class=\"comma\">Hỗ trợ khe cắm HDD SATA (n&acirc;ng cấp tối đa 2 TB)</span><span class=\"\">512 GB SSD NVMe PCIe</span></td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 23.8779%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">15.6\", Full HD (1920 x 1080), 120Hz</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 23.8779%;\">Card m&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Intel Iris Xe</td>\r\n</tr>\r\n<tr style=\"height: 57px;\">\r\n<td style=\"text-align: center; width: 23.8779%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Windows 11 Home SL + Office Home &amp; Student vĩnh viễn</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center; width: 23.8779%;\">Thiết kế</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Vỏ nhựa</td>\r\n</tr>\r\n<tr style=\"height: 57px;\">\r\n<td style=\"text-align: center; width: 23.8779%;\">K&iacute;ch thước, khối lượng</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">D&agrave;i 358.5 mm - Rộng 235.56 mm - D&agrave;y 18.99 mm</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"width: 23.8779%;\">&nbsp;Thời điểm ra mắt&nbsp;</td>\r\n<td style=\"width: 76.1221%;\">2023&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Đen', 25490000, 16, 0, 'conhang', 'Laptop HP Gaming VICTUS 15 fb1022AX R5 7535HS/16GB/512GB/4GB RTX2050/144Hz/Win11 (94F19PA)', 27, '2024-07-08 01:18:38', '2024-07-08 01:18:38'),
(36, 96, 8, 'Laptop HP 240 G8 i3 1115G4/8GB/512GB/Win11 (6L1A2PA)', 'laptop-hp-240-g8-i3-1115g48gb512gbwin11-6l1a2pa', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 23.8779%;\">T&ecirc;n</th>\r\n<th style=\"width: 76.1221%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">CPU</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">i5, 1235U, 1.3GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">RAM</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">16GB, DDR4 2 khe, 2666MHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Ổ cứng&nbsp;</td>\r\n<td style=\"text-align: center; width: 76.1221%;\"><span class=\"comma\">Hỗ trợ khe cắm HDD SATA (n&acirc;ng cấp tối đa 2 TB)</span><span class=\"\">512 GB SSD NVMe PCIe</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">15.6\", Full HD (1920 x 1080), 120Hz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Card m&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Intel Iris Xe</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Windows 11 Home SL + Office Home &amp; Student vĩnh viễn</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Thiết kế</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Vỏ nhựa</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">K&iacute;ch thước, khối lượng</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">D&agrave;i 358.5 mm - Rộng 235.56 mm - D&agrave;y 18.99 mm</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.8779%;\">&nbsp;</td>\r\n<td style=\"width: 76.1221%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Bạc', 12790000, 14, 0, 'conhang', 'Laptop HP 240 G8 i3 1115G4/8GB/512GB/Win11 (6L1A2PA)', 25, '2024-07-08 01:21:27', '2024-07-08 01:21:27'),
(37, 97, 8, 'Laptop HP Pavilion X360 14 ek1047TU i7 1355U/16GB/512GB/Touch/Pen/Win11 (80R25PA)', 'laptop-hp-pavilion-x360-14-ek1047tu-i7-1355u16gb512gbtouchpenwin11-80r25pa', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 23.8779%;\">T&ecirc;n</th>\r\n<th style=\"width: 76.1221%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">CPU</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">i5, 1235U, 1.3GHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">RAM</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">16GB, DDR4 2 khe, 2666MHz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Ổ cứng&nbsp;</td>\r\n<td style=\"text-align: center; width: 76.1221%;\"><span class=\"comma\">Hỗ trợ khe cắm HDD SATA (n&acirc;ng cấp tối đa 2 TB)</span><span class=\"\">512 GB SSD NVMe PCIe</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">15.6\", Full HD (1920 x 1080), 120Hz</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Card m&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Intel Iris Xe</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Windows 11 Home SL + Office Home &amp; Student vĩnh viễn</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">Thiết kế</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">Kim loại</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 23.8779%;\">K&iacute;ch thước, khối lượng</td>\r\n<td style=\"text-align: center; width: 76.1221%;\">D&agrave;i 358.5 mm - Rộng 235.56 mm - D&agrave;y 18.99 mm</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.8779%; text-align: center;\">Thời điểm ra mắt</td>\r\n<td style=\"width: 76.1221%; text-align: center;\">&nbsp;2023</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Hồng', 27590000, 15, 0, 'conhang', 'Laptop HP Pavilion X360 14 ek1047TU i7 1355U/16GB/512GB/Touch/Pen/Win11 (80R25PA)', 9, '2024-07-08 01:24:49', '2024-07-08 01:24:49'),
(38, 104, 23, 'Đồng hồ thông minh Apple Watch SE 2023 GPS 40mm viền nhôm dây thể thao', 'dong-ho-thong-minh-apple-watch-se-2023-gps-40mm-vien-nhom-day-the-thao', '<table style=\"width: 100%; height: 390px;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr style=\"height: 39px;\">\r\n<th>T&ecirc;n</th>\r\n<th>Th&ocirc;ng số</th>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center;\">OLED</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">Thời lượng PIN</td>\r\n<td style=\"text-align: center;\">Khoảng 18 giờ</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">Kết nối với hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center;\">iOS17 trở l&ecirc;n&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">Khung viền</td>\r\n<td style=\"text-align: center;\">Hợp kim nh&ocirc;m</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">Chất liệu d&acirc;y</td>\r\n<td style=\"text-align: center;\">Silicone</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">K&iacute;ch thước mặt</td>\r\n<td style=\"text-align: center;\">40 mm</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">CPU</td>\r\n<td style=\"text-align: center;\">Apple S8</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">Bộ nhớ trong&nbsp;</td>\r\n<td style=\"text-align: center;\">32 GB</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center;\">WatchOS</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Trắng Starlight', 6390000, 5, 0, 'conhang', 'Đồng hồ thông minh Apple Watch SE 2023 GPS 40mm viền nhôm dây thể thao', 0, '2024-07-14 13:26:01', '2024-07-14 14:39:49'),
(39, 104, 23, 'Đồng hồ thông minh Apple Watch SE 2023 GPS 40mm viền nhôm dây thể thao Xanh đen', 'dong-ho-thong-minh-apple-watch-se-2023-gps-40mm-vien-nhom-day-the-thao-xanh-den', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 60.6272%;\">T&ecirc;n</th>\r\n<th style=\"width: 39.3728%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">OLED</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Thời lượng PIN</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Khoảng 18 giờ</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Kết nối với hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">iOS17 trở l&ecirc;n&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Khung viền</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Hợp kim nh&ocirc;m</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Chất liệu d&acirc;y</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Silicone</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">K&iacute;ch thước mặt</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">40 mm</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">CPU</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Apple S8</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Bộ nhớ trong&nbsp;</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">32 GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">WatchOS</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Xanh đen đậm', 6390000, 8, 0, 'conhang', 'Đồng hồ thông minh Apple Watch SE 2023 GPS 40mm viền nhôm dây thể thao', 5, '2024-07-14 13:28:33', '2024-07-14 14:40:01'),
(40, 102, 23, 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm viền nhôm dây thể thao Xanh đen đậm', 'dong-ho-thong-minh-apple-watch-series-9-gps-41mm-vien-nhom-day-the-thao-xanh-den-dam', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 60.6272%;\">T&ecirc;n</th>\r\n<th style=\"width: 39.3728%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">OLED</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Thời lượng PIN</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Khoảng 18 giờ</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Kết nối với hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">iOS17 trở l&ecirc;n&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Khung viền</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Hợp kim nh&ocirc;m</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Chất liệu d&acirc;y</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Silicone</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">K&iacute;ch thước mặt</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">40 mm</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">CPU</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Apple S8</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Bộ nhớ trong&nbsp;</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">32 GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">WatchOS</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Xanh đen đậm', 10490000, 4, 0, 'conhang', 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm viền nhôm dây thể thao', 5, '2024-07-14 13:31:29', '2024-07-14 14:40:15'),
(41, 102, 23, 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm viền nhôm dây hồng thể thao', 'dong-ho-thong-minh-apple-watch-series-9-gps-41mm-vien-nhom-day-hong-the-thao', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 60.6272%;\">T&ecirc;n</th>\r\n<th style=\"width: 39.3728%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">OLED</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Thời lượng PIN</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Khoảng 18 giờ</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Kết nối với hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">iOS17 trở l&ecirc;n&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Khung viền</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Hợp kim nh&ocirc;m</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Chất liệu d&acirc;y</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Silicone</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">K&iacute;ch thước mặt</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">40 mm</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">CPU</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Apple S8</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Bộ nhớ trong&nbsp;</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">32 GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">WatchOS</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Hồng', 10490000, 9, 0, 'conhang', 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm viền nhôm dây thể thao', 5, '2024-07-14 13:33:55', '2024-07-14 14:40:55'),
(42, 102, 23, 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm viền nhôm dây vải Xanh dương nhạt', 'dong-ho-thong-minh-apple-watch-series-9-gps-41mm-vien-nhom-day-vai-xanh-duong-nhat', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 60.6272%;\">T&ecirc;n</th>\r\n<th style=\"width: 39.3728%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">OLED</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Thời lượng PIN</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Khoảng 18 giờ</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Kết nối với hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">iOS17 trở l&ecirc;n&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Khung viền</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Hợp kim nh&ocirc;m</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Chất liệu d&acirc;y</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Silicone</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">K&iacute;ch thước mặt</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">40 mm</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">CPU</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">Apple S8</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Bộ nhớ trong&nbsp;</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">32 GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 60.6272%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 39.3728%;\">WatchOS</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Xanh dương', 10490000, 6, 0, 'conhang', 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm viền nhôm dây vải', 6, '2024-07-14 13:43:13', '2024-07-14 14:41:07'),
(46, 105, 3, 'Đồng hồ thông minh Samsung Galaxy Watch 4 40mm', 'dong-ho-thong-minh-samsung-galaxy-watch-4-40mm', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th>T&ecirc;n</th>\r\n<th>Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center;\">Super AMOLED, 1.2 inch</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">Thời lượng PIN</td>\r\n<td style=\"text-align: center;\">Khoảng 1.5 ng&agrave;y</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">Kết nối với hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center;\">Android 7 trở l&ecirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">Khung viền</td>\r\n<td style=\"text-align: center;\">Nh&ocirc;m</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">D&acirc;y</td>\r\n<td style=\"text-align: center;\">Silicone</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">CPU</td>\r\n<td style=\"text-align: center;\">Exynos W920</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">Bộ nhớ trong</td>\r\n<td style=\"text-align: center;\">16GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center;\">Wear OS</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\">&nbsp;</td>\r\n<td style=\"text-align: center;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Vàng hồng', 3990000, 7, 0, 'conhang', 'Đồng hồ thông minh Samsung Galaxy Watch 4 40mm', 15, '2024-07-14 14:48:57', '2024-07-14 14:48:57'),
(47, 105, 3, 'Đồng hồ thông minh Samsung Galaxy Watch4 40mm đen', 'dong-ho-thong-minh-samsung-galaxy-watch4-40mm-den', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 49.3031%;\">T&ecirc;n</th>\r\n<th style=\"width: 50.6969%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Super AMOLED, 1.2 inch</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Thời lượng PIN</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Khoảng 1.5 ng&agrave;y</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Kết nối với hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Android 7 trở l&ecirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Khung viền</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Nh&ocirc;m</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">D&acirc;y</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Silicone</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">CPU</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Exynos W920</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Bộ nhớ trong</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">16GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Wear OS</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Đen', 3990000, 5, 0, 'conhang', 'Đồng hồ thông minh Samsung Galaxy Watch4 40mm', 12, '2024-07-14 14:50:27', '2024-07-14 14:50:27'),
(48, 106, 3, 'Đồng hồ thông minh Samsung Galaxy Watch5 40mm Tím', 'dong-ho-thong-minh-samsung-galaxy-watch5-40mm-tim', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 49.3031%;\">T&ecirc;n</th>\r\n<th style=\"width: 50.6969%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Super AMOLED, 1.2 inch</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Thời lượng PIN</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Khoảng 1.5 ng&agrave;y</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Kết nối với hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Android 7 trở l&ecirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Khung viền</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Nh&ocirc;m</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">D&acirc;y</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Silicone</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">CPU</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Exynos W920</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Bộ nhớ trong</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">16GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Wear OS</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Tím', 5990000, 12, 0, 'conhang', 'Đồng hồ thông minh Samsung Galaxy Watch5 40mm', 20, '2024-07-14 14:52:30', '2024-07-14 14:52:30'),
(49, 106, 3, 'Đồng hồ thông minh Samsung Galaxy Watch5 40mm đen', 'dong-ho-thong-minh-samsung-galaxy-watch5-40mm-den', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 49.3031%;\">T&ecirc;n</th>\r\n<th style=\"width: 50.6969%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Super AMOLED, 1.2 inch</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Thời lượng PIN</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Khoảng 1.5 ng&agrave;y</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Kết nối với hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Android 7 trở l&ecirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Khung viền</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Nh&ocirc;m</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">D&acirc;y</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Silicone</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">CPU</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Exynos W920</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Bộ nhớ trong</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">16GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Wear OS</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Đen', 5990000, 12, 0, 'conhang', 'Đồng hồ thông minh Samsung Galaxy Watch5 40mm', 20, '2024-07-14 14:54:00', '2024-07-14 14:54:00'),
(50, 15, 3, 'Đồng hồ thông minh Samsung Galaxy Watch6 Classic 43mm bạc', 'dong-ho-thong-minh-samsung-galaxy-watch6-classic-43mm-bac', '<table style=\"width: 100%; height: 390px;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr style=\"height: 39px;\">\r\n<th>T&ecirc;n</th>\r\n<th>Th&ocirc;ng số</th>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center;\">Super AMOLED, 1.2 inch</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">Thời lượng PIN</td>\r\n<td style=\"text-align: center;\">Khoảng 1.5 ng&agrave;y</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">Kết nối với hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center;\">Android 7 trở l&ecirc;n</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">Khung viền</td>\r\n<td style=\"text-align: center;\">Nh&ocirc;m</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">D&acirc;y</td>\r\n<td style=\"text-align: center;\">Silicone</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">CPU</td>\r\n<td style=\"text-align: center;\">Exynos W920</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">Bộ nhớ trong</td>\r\n<td style=\"text-align: center;\">16GB</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center;\">Wear OS</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"text-align: center;\">&nbsp;</td>\r\n<td style=\"text-align: center;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Bạc', 8990000, 12, 0, 'conhang', 'Đồng hồ thông minh Samsung Galaxy Watch6 Classic 43mm', 11, '2024-07-14 14:56:54', '2024-07-14 14:56:54'),
(51, 15, 3, 'Vòng tay thông minh Samsung Galaxy Fit3 hồng', 'vong-tay-thong-minh-samsung-galaxy-fit3-hong', '<table style=\"width: 100%;\" border=\"1\" cellpadding=\"10\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 49.3031%;\">T&ecirc;n</th>\r\n<th style=\"width: 50.6969%;\">Th&ocirc;ng số</th>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">M&agrave;n h&igrave;nh</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Super AMOLED, 1.2 inch</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Thời lượng PIN</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Khoảng 1.5 ng&agrave;y</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Kết nối với hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Android 7 trở l&ecirc;n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Khung viền</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Nh&ocirc;m</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">D&acirc;y</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Silicone</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">CPU</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Exynos W920</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Bộ nhớ trong</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">16GB</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">Hệ điều h&agrave;nh</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">Wear OS</td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center; width: 49.3031%;\">&nbsp;</td>\r\n<td style=\"text-align: center; width: 50.6969%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'Hồng', 1390000, 11, 0, 'conhang', 'Vòng tay thông minh Samsung Galaxy Fit3', 21, '2024-07-14 15:01:52', '2024-07-14 15:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `path_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `path_image`, `created_at`, `updated_at`) VALUES
(23, 7, 'storage/products/iphone-15-plus-128gb-hong-nhat/0-1720376615.jpg', NULL, NULL),
(24, 7, 'storage/products/iphone-15-plus-128gb-hong-nhat/1-1720376615.jpg', NULL, NULL),
(27, 9, 'storage/products/dien-thoai-samsung-galaxy-a55-5g-tim/0-1720377026.jpg', NULL, NULL),
(28, 9, 'storage/products/dien-thoai-samsung-galaxy-a55-5g-tim/1-1720377026.jpg', NULL, NULL),
(29, 9, 'storage/products/dien-thoai-samsung-galaxy-a55-5g-tim/2-1720377026.jpg', NULL, NULL),
(30, 10, 'storage/products/dien-thoai-samsung-galaxy-a55-5g-xanh/0-1720377174.jpg', NULL, NULL),
(31, 10, 'storage/products/dien-thoai-samsung-galaxy-a55-5g-xanh/1-1720377174.jpg', NULL, NULL),
(32, 10, 'storage/products/dien-thoai-samsung-galaxy-a55-5g-xanh/2-1720377174.jpg', NULL, NULL),
(33, 10, 'storage/products/dien-thoai-samsung-galaxy-a55-5g-xanh/3-1720377174.jpg', NULL, NULL),
(34, 11, 'storage/products/dien-thoai-samsung-galaxy-s23-ultra-5g-xanh-reu/0-1720377375.jpg', NULL, NULL),
(35, 11, 'storage/products/dien-thoai-samsung-galaxy-s23-ultra-5g-xanh-reu/1-1720377375.jpg', NULL, NULL),
(36, 11, 'storage/products/dien-thoai-samsung-galaxy-s23-ultra-5g-xanh-reu/0-1720377390.jpg', NULL, NULL),
(37, 11, 'storage/products/dien-thoai-samsung-galaxy-s23-ultra-5g-xanh-reu/1-1720377390.jpg', NULL, NULL),
(38, 12, 'storage/products/dien-thoai-samsung-galaxy-s23-ultra-5g-den/0-1720377490.jpg', NULL, NULL),
(39, 12, 'storage/products/dien-thoai-samsung-galaxy-s23-ultra-5g-den/1-1720377490.jpg', NULL, NULL),
(40, 12, 'storage/products/dien-thoai-samsung-galaxy-s23-ultra-5g-den/2-1720377490.jpg', NULL, NULL),
(41, 12, 'storage/products/dien-thoai-samsung-galaxy-s23-ultra-5g-den/3-1720377490.jpg', NULL, NULL),
(42, 13, 'storage/products/dien-thoai-samsung-galaxy-s23-ultra-5g-tim/0-1720377618.jpg', NULL, NULL),
(43, 13, 'storage/products/dien-thoai-samsung-galaxy-s23-ultra-5g-tim/1-1720377618.jpg', NULL, NULL),
(44, 14, 'storage/products/dien-thoai-samsung-galaxy-s24-den/0-1720377764.jpg', NULL, NULL),
(45, 14, 'storage/products/dien-thoai-samsung-galaxy-s24-den/1-1720377764.jpg', NULL, NULL),
(46, 14, 'storage/products/dien-thoai-samsung-galaxy-s24-den/2-1720377764.jpg', NULL, NULL),
(47, 15, 'storage/products/dien-thoai-samsung-galaxy-s24-vang/0-1720377919.jpg', NULL, NULL),
(48, 15, 'storage/products/dien-thoai-samsung-galaxy-s24-vang/1-1720377919.jpg', NULL, NULL),
(49, 16, 'storage/products/dien-thoai-samsung-galaxy-s24-tim/0-1720378007.jpg', NULL, NULL),
(51, 16, 'storage/products/dien-thoai-samsung-galaxy-s24-tim/0-1720378020.jpg', NULL, NULL),
(52, 17, 'storage/products/iphone-15-pro-max-256gb-blue/0-1720379173.jpg', NULL, NULL),
(53, 17, 'storage/products/iphone-15-pro-max-256gb-blue/1-1720379173.jpg', NULL, NULL),
(54, 17, 'storage/products/iphone-15-pro-max-256gb-blue/2-1720379173.jpg', NULL, NULL),
(55, 17, 'storage/products/iphone-15-pro-max-256gb-blue/3-1720379173.jpg', NULL, NULL),
(56, 18, 'storage/products/iphone-15-pro-max-256gb-white/0-1720379289.jpg', NULL, NULL),
(57, 18, 'storage/products/iphone-15-pro-max-256gb-white/1-1720379289.jpg', NULL, NULL),
(58, 18, 'storage/products/iphone-15-pro-max-256gb-white/2-1720379289.jpg', NULL, NULL),
(59, 18, 'storage/products/iphone-15-pro-max-256gb-white/3-1720379289.jpg', NULL, NULL),
(60, 19, 'storage/products/iphone-15-pro-max-256gb-titan-tu-nhien/0-1720379413.jpg', NULL, NULL),
(61, 19, 'storage/products/iphone-15-pro-max-256gb-titan-tu-nhien/1-1720379413.jpg', NULL, NULL),
(62, 19, 'storage/products/iphone-15-pro-max-256gb-titan-tu-nhien/2-1720379413.jpg', NULL, NULL),
(63, 19, 'storage/products/iphone-15-pro-max-256gb-titan-tu-nhien/3-1720379413.jpg', NULL, NULL),
(65, 20, 'storage/products/iphone-15-pro-max-256gb-black/1-1720379722.jpg', NULL, NULL),
(66, 20, 'storage/products/iphone-15-pro-max-256gb-black/2-1720379722.jpg', NULL, NULL),
(67, 20, 'storage/products/iphone-15-pro-max-256gb-black/3-1720379722.jpg', NULL, NULL),
(68, 21, 'storage/products/iphone-15-pro-max-512gb-black/0-1720408430.jpg', NULL, NULL),
(69, 21, 'storage/products/iphone-15-pro-max-512gb-black/1-1720408430.jpg', NULL, NULL),
(70, 21, 'storage/products/iphone-15-pro-max-512gb-black/2-1720408430.jpg', NULL, NULL),
(71, 22, 'storage/products/iphone-15-pro-max-256gb-white/0-1720408534.jpg', NULL, NULL),
(72, 22, 'storage/products/iphone-15-pro-max-256gb-white/1-1720408534.jpg', NULL, NULL),
(73, 22, 'storage/products/iphone-15-pro-max-256gb-white/2-1720408534.jpg', NULL, NULL),
(74, 22, 'storage/products/iphone-15-pro-max-256gb-white/3-1720408534.jpg', NULL, NULL),
(75, 23, 'storage/products/iphone-15-pro-max-256gb-titan-tu-nhien/0-1720408724.jpg', NULL, NULL),
(76, 23, 'storage/products/iphone-15-pro-max-256gb-titan-tu-nhien/1-1720408724.jpg', NULL, NULL),
(77, 23, 'storage/products/iphone-15-pro-max-256gb-titan-tu-nhien/2-1720408724.jpg', NULL, NULL),
(78, 23, 'storage/products/iphone-15-pro-max-256gb-titan-tu-nhien/3-1720408724.jpg', NULL, NULL),
(79, 24, 'storage/products/redmi-note-13-den/0-1720409349.jpg', NULL, NULL),
(80, 24, 'storage/products/redmi-note-13-den/1-1720409349.jpg', NULL, NULL),
(81, 24, 'storage/products/redmi-note-13-den/2-1720409349.jpg', NULL, NULL),
(82, 24, 'storage/products/redmi-note-13-den/3-1720409349.jpg', NULL, NULL),
(83, 25, 'storage/products/redmi-note-13-xanh/0-1720409476.jpg', NULL, NULL),
(84, 25, 'storage/products/redmi-note-13-xanh/1-1720409476.jpg', NULL, NULL),
(85, 25, 'storage/products/redmi-note-13-xanh/2-1720409476.jpg', NULL, NULL),
(86, 25, 'storage/products/redmi-note-13-xanh/3-1720409476.jpg', NULL, NULL),
(87, 25, 'storage/products/redmi-note-13-xanh/4-1720409476.jpg', NULL, NULL),
(88, 26, 'storage/products/xiaomi-note-13-pro-xanh-la/0-1720409707.jpg', NULL, NULL),
(89, 26, 'storage/products/xiaomi-note-13-pro-xanh-la/1-1720409707.jpg', NULL, NULL),
(90, 26, 'storage/products/xiaomi-note-13-pro-xanh-la/2-1720409707.jpg', NULL, NULL),
(91, 26, 'storage/products/xiaomi-note-13-pro-xanh-la/3-1720409707.jpg', NULL, NULL),
(92, 27, 'storage/products/xiaomi-note-13-xanh-ngoc/0-1720409820.jpg', NULL, NULL),
(93, 27, 'storage/products/xiaomi-note-13-xanh-ngoc/1-1720409820.jpg', NULL, NULL),
(94, 27, 'storage/products/xiaomi-note-13-xanh-ngoc/2-1720409820.jpg', NULL, NULL),
(95, 27, 'storage/products/xiaomi-note-13-xanh-ngoc/3-1720409820.jpg', NULL, NULL),
(96, 27, 'storage/products/xiaomi-note-13-xanh-ngoc/4-1720409820.jpg', NULL, NULL),
(97, 28, 'storage/products/xiaomi-13t-xanh-reu/0-1720409973.jpg', NULL, NULL),
(98, 28, 'storage/products/xiaomi-13t-xanh-reu/1-1720409973.jpg', NULL, NULL),
(99, 28, 'storage/products/xiaomi-13t-xanh-reu/2-1720409973.jpg', NULL, NULL),
(100, 28, 'storage/products/xiaomi-13t-xanh-reu/3-1720409973.jpg', NULL, NULL),
(101, 29, 'storage/products/xiaomi-13t-xanh-duong/0-1720410095.jpg', NULL, NULL),
(102, 29, 'storage/products/xiaomi-13t-xanh-duong/1-1720410095.jpg', NULL, NULL),
(103, 29, 'storage/products/xiaomi-13t-xanh-duong/2-1720410095.jpg', NULL, NULL),
(104, 29, 'storage/products/xiaomi-13t-xanh-duong/3-1720410095.jpg', NULL, NULL),
(105, 29, 'storage/products/xiaomi-13t-xanh-duong/4-1720410095.jpg', NULL, NULL),
(106, 30, 'storage/products/laptop-dell-inspiron-15-3520-den/0-1720411203.jpg', NULL, NULL),
(107, 30, 'storage/products/laptop-dell-inspiron-15-3520-den/1-1720411203.jpg', NULL, NULL),
(108, 30, 'storage/products/laptop-dell-inspiron-15-3520-den/2-1720411203.jpg', NULL, NULL),
(109, 30, 'storage/products/laptop-dell-inspiron-15-3520-den/3-1720411203.jpg', NULL, NULL),
(110, 30, 'storage/products/laptop-dell-inspiron-15-3520-den/4-1720411203.jpg', NULL, NULL),
(111, 31, 'storage/products/dell-inspiron-15-3520-bac/0-1720411417.jpg', NULL, NULL),
(112, 31, 'storage/products/dell-inspiron-15-3520-bac/1-1720411417.jpg', NULL, NULL),
(113, 31, 'storage/products/dell-inspiron-15-3520-bac/2-1720411417.jpg', NULL, NULL),
(114, 31, 'storage/products/dell-inspiron-15-3520-bac/0-1720411425.jpg', NULL, NULL),
(115, 31, 'storage/products/dell-inspiron-15-3520-bac/1-1720411425.jpg', NULL, NULL),
(116, 32, 'storage/products/dell-vostro-15-3520-xam/0-1720411553.jpg', NULL, NULL),
(117, 32, 'storage/products/dell-vostro-15-3520-xam/1-1720411553.jpg', NULL, NULL),
(118, 32, 'storage/products/dell-vostro-15-3520-xam/2-1720411553.jpg', NULL, NULL),
(119, 32, 'storage/products/dell-vostro-15-3520-xam/3-1720411553.jpg', NULL, NULL),
(120, 33, 'storage/products/dell-precision-16-5680-xam/0-1720411707.jpg', NULL, NULL),
(121, 33, 'storage/products/dell-precision-16-5680-xam/1-1720411707.jpg', NULL, NULL),
(122, 33, 'storage/products/dell-precision-16-5680-xam/2-1720411707.jpg', NULL, NULL),
(123, 33, 'storage/products/dell-precision-16-5680-xam/3-1720411707.jpg', NULL, NULL),
(124, 33, 'storage/products/dell-precision-16-5680-xam/4-1720411707.jpg', NULL, NULL),
(125, 34, 'storage/products/laptop-hp-245-g10-r5-7530u/0-1720412192.jpg', NULL, NULL),
(126, 34, 'storage/products/laptop-hp-245-g10-r5-7530u/1-1720412192.jpg', NULL, NULL),
(127, 34, 'storage/products/laptop-hp-245-g10-r5-7530u/2-1720412192.jpg', NULL, NULL),
(128, 34, 'storage/products/laptop-hp-245-g10-r5-7530u/3-1720412192.jpg', NULL, NULL),
(129, 34, 'storage/products/laptop-hp-245-g10-r5-7530u/4-1720412192.jpg', NULL, NULL),
(130, 34, 'storage/products/laptop-hp-245-g10-r5-7530u/5-1720412192.jpg', NULL, NULL),
(131, 34, 'storage/products/laptop-hp-245-g10-r5-7530u/6-1720412192.jpg', NULL, NULL),
(132, 34, 'storage/products/laptop-hp-245-g10-r5-7530u/7-1720412192.jpg', NULL, NULL),
(133, 35, 'storage/products/laptop-hp-gaming-victus-15-fb1022ax-r5-7535hs16gb512gb4gb-rtx2050144hzwin11-94f19pa/0-1720412399.jpg', NULL, NULL),
(134, 35, 'storage/products/laptop-hp-gaming-victus-15-fb1022ax-r5-7535hs16gb512gb4gb-rtx2050144hzwin11-94f19pa/1-1720412399.jpg', NULL, NULL),
(135, 35, 'storage/products/laptop-hp-gaming-victus-15-fb1022ax-r5-7535hs16gb512gb4gb-rtx2050144hzwin11-94f19pa/2-1720412399.jpg', NULL, NULL),
(136, 35, 'storage/products/laptop-hp-gaming-victus-15-fb1022ax-r5-7535hs16gb512gb4gb-rtx2050144hzwin11-94f19pa/3-1720412399.jpg', NULL, NULL),
(137, 35, 'storage/products/laptop-hp-gaming-victus-15-fb1022ax-r5-7535hs16gb512gb4gb-rtx2050144hzwin11-94f19pa/4-1720412399.jpg', NULL, NULL),
(138, 35, 'storage/products/laptop-hp-gaming-victus-15-fb1022ax-r5-7535hs16gb512gb4gb-rtx2050144hzwin11-94f19pa/5-1720412399.jpg', NULL, NULL),
(139, 35, 'storage/products/laptop-hp-gaming-victus-15-fb1022ax-r5-7535hs16gb512gb4gb-rtx2050144hzwin11-94f19pa/6-1720412399.jpg', NULL, NULL),
(140, 35, 'storage/products/laptop-hp-gaming-victus-15-fb1022ax-r5-7535hs16gb512gb4gb-rtx2050144hzwin11-94f19pa/7-1720412399.jpg', NULL, NULL),
(141, 35, 'storage/products/laptop-hp-gaming-victus-15-fb1022ax-r5-7535hs16gb512gb4gb-rtx2050144hzwin11-94f19pa/8-1720412399.jpg', NULL, NULL),
(142, 36, 'storage/products/laptop-hp-240-g8-i3-1115g48gb512gbwin11-6l1a2pa/0-1720412570.jpg', NULL, NULL),
(143, 36, 'storage/products/laptop-hp-240-g8-i3-1115g48gb512gbwin11-6l1a2pa/1-1720412570.jpg', NULL, NULL),
(144, 36, 'storage/products/laptop-hp-240-g8-i3-1115g48gb512gbwin11-6l1a2pa/2-1720412570.jpg', NULL, NULL),
(145, 36, 'storage/products/laptop-hp-240-g8-i3-1115g48gb512gbwin11-6l1a2pa/3-1720412570.jpg', NULL, NULL),
(146, 36, 'storage/products/laptop-hp-240-g8-i3-1115g48gb512gbwin11-6l1a2pa/4-1720412570.jpg', NULL, NULL),
(147, 36, 'storage/products/laptop-hp-240-g8-i3-1115g48gb512gbwin11-6l1a2pa/5-1720412570.jpg', NULL, NULL),
(148, 37, 'storage/products/laptop-hp-pavilion-x360-14-ek1047tu-i7-1355u16gb512gbtouchpenwin11-80r25pa/0-1720412793.jpg', NULL, NULL),
(149, 37, 'storage/products/laptop-hp-pavilion-x360-14-ek1047tu-i7-1355u16gb512gbtouchpenwin11-80r25pa/1-1720412793.jpg', NULL, NULL),
(150, 37, 'storage/products/laptop-hp-pavilion-x360-14-ek1047tu-i7-1355u16gb512gbtouchpenwin11-80r25pa/2-1720412793.jpg', NULL, NULL),
(151, 37, 'storage/products/laptop-hp-pavilion-x360-14-ek1047tu-i7-1355u16gb512gbtouchpenwin11-80r25pa/3-1720412793.jpg', NULL, NULL),
(152, 37, 'storage/products/laptop-hp-pavilion-x360-14-ek1047tu-i7-1355u16gb512gbtouchpenwin11-80r25pa/4-1720412793.jpg', NULL, NULL),
(153, 37, 'storage/products/laptop-hp-pavilion-x360-14-ek1047tu-i7-1355u16gb512gbtouchpenwin11-80r25pa/5-1720412793.jpg', NULL, NULL),
(154, 37, 'storage/products/laptop-hp-pavilion-x360-14-ek1047tu-i7-1355u16gb512gbtouchpenwin11-80r25pa/6-1720412793.jpg', NULL, NULL),
(155, 37, 'storage/products/laptop-hp-pavilion-x360-14-ek1047tu-i7-1355u16gb512gbtouchpenwin11-80r25pa/7-1720412793.jpg', NULL, NULL),
(156, 37, 'storage/products/laptop-hp-pavilion-x360-14-ek1047tu-i7-1355u16gb512gbtouchpenwin11-80r25pa/8-1720412793.jpg', NULL, NULL),
(157, 37, 'storage/products/laptop-hp-pavilion-x360-14-ek1047tu-i7-1355u16gb512gbtouchpenwin11-80r25pa/9-1720412793.jpg', NULL, NULL),
(158, 38, 'storage/products/dong-ho-thong-minh-apple-watch-se-2023-gps-40mm-vien-nhom-day-the-thao/0-1720974428.jpg', NULL, NULL),
(159, 38, 'storage/products/dong-ho-thong-minh-apple-watch-se-2023-gps-40mm-vien-nhom-day-the-thao/1-1720974428.jpg', NULL, NULL),
(160, 38, 'storage/products/dong-ho-thong-minh-apple-watch-se-2023-gps-40mm-vien-nhom-day-the-thao/2-1720974428.jpg', NULL, NULL),
(161, 39, 'storage/products/dong-ho-thong-minh-apple-watch-se-2023-gps-40mm-vien-nhom-day-the-thao-xanh-den/0-1720974567.jpg', NULL, NULL),
(162, 39, 'storage/products/dong-ho-thong-minh-apple-watch-se-2023-gps-40mm-vien-nhom-day-the-thao-xanh-den/1-1720974567.jpg', NULL, NULL),
(163, 39, 'storage/products/dong-ho-thong-minh-apple-watch-se-2023-gps-40mm-vien-nhom-day-the-thao-xanh-den/0-1720974572.jpg', NULL, NULL),
(164, 40, 'storage/products/dong-ho-thong-minh-apple-watch-series-9-gps-41mm-vien-nhom-day-the-thao-xanh-den-dam/0-1720974723.jpg', NULL, NULL),
(165, 40, 'storage/products/dong-ho-thong-minh-apple-watch-series-9-gps-41mm-vien-nhom-day-the-thao-xanh-den-dam/1-1720974723.jpg', NULL, NULL),
(166, 40, 'storage/products/dong-ho-thong-minh-apple-watch-series-9-gps-41mm-vien-nhom-day-the-thao-xanh-den-dam/2-1720974723.jpg', NULL, NULL),
(167, 41, 'storage/products/dong-ho-thong-minh-apple-watch-series-9-gps-41mm-vien-nhom-day-hong-the-thao/0-1720974861.jpg', NULL, NULL),
(168, 41, 'storage/products/dong-ho-thong-minh-apple-watch-series-9-gps-41mm-vien-nhom-day-hong-the-thao/1-1720974861.jpg', NULL, NULL),
(169, 41, 'storage/products/dong-ho-thong-minh-apple-watch-series-9-gps-41mm-vien-nhom-day-hong-the-thao/2-1720974861.jpg', NULL, NULL),
(170, 42, 'storage/products/dong-ho-thong-minh-apple-watch-series-9-gps-41mm-vien-nhom-day-vai-xanh-duong-nhat/0-1720975424.jpg', NULL, NULL),
(171, 42, 'storage/products/dong-ho-thong-minh-apple-watch-series-9-gps-41mm-vien-nhom-day-vai-xanh-duong-nhat/1-1720975424.jpg', NULL, NULL),
(172, 42, 'storage/products/dong-ho-thong-minh-apple-watch-series-9-gps-41mm-vien-nhom-day-vai-xanh-duong-nhat/2-1720975424.jpg', NULL, NULL),
(186, 46, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch-4-40mm/0-1720979355.jpg', NULL, NULL),
(187, 46, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch-4-40mm/1-1720979355.jpg', NULL, NULL),
(188, 46, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch-4-40mm/2-1720979355.jpg', NULL, NULL),
(189, 46, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch-4-40mm/3-1720979355.jpg', NULL, NULL),
(190, 46, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch-4-40mm/4-1720979355.jpg', NULL, NULL),
(191, 47, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch4-40mm-den/0-1720979440.jpg', NULL, NULL),
(192, 47, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch4-40mm-den/1-1720979440.jpg', NULL, NULL),
(193, 47, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch4-40mm-den/2-1720979440.jpg', NULL, NULL),
(194, 47, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch4-40mm-den/3-1720979440.jpg', NULL, NULL),
(195, 47, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch4-40mm-den/4-1720979440.jpg', NULL, NULL),
(196, 48, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch5-40mm-tim/0-1720979586.jpg', NULL, NULL),
(197, 48, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch5-40mm-tim/1-1720979586.jpg', NULL, NULL),
(198, 48, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch5-40mm-tim/2-1720979586.jpg', NULL, NULL),
(199, 48, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch5-40mm-tim/3-1720979586.jpg', NULL, NULL),
(200, 49, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch5-40mm-den/0-1720979677.jpg', NULL, NULL),
(201, 49, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch5-40mm-den/1-1720979677.jpg', NULL, NULL),
(202, 49, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch5-40mm-den/2-1720979677.jpg', NULL, NULL),
(203, 50, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch6-classic-43mm-bac/0-1720979859.jpg', NULL, NULL),
(204, 50, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch6-classic-43mm-bac/1-1720979859.jpg', NULL, NULL),
(205, 50, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch6-classic-43mm-bac/2-1720979859.jpg', NULL, NULL),
(206, 50, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch6-classic-43mm-bac/3-1720979859.jpg', NULL, NULL),
(207, 50, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch6-classic-43mm-bac/4-1720979859.jpg', NULL, NULL),
(208, 50, 'storage/products/dong-ho-thong-minh-samsung-galaxy-watch6-classic-43mm-bac/5-1720979859.jpg', NULL, NULL),
(209, 51, 'storage/products/vong-tay-thong-minh-samsung-galaxy-fit3-hong/0-1720980132.jpg', NULL, NULL),
(210, 51, 'storage/products/vong-tay-thong-minh-samsung-galaxy-fit3-hong/1-1720980132.jpg', NULL, NULL),
(211, 51, 'storage/products/vong-tay-thong-minh-samsung-galaxy-fit3-hong/2-1720980132.jpg', NULL, NULL),
(212, 51, 'storage/products/vong-tay-thong-minh-samsung-galaxy-fit3-hong/3-1720980132.jpg', NULL, NULL),
(213, 51, 'storage/products/vong-tay-thong-minh-samsung-galaxy-fit3-hong/4-1720980132.jpg', NULL, NULL),
(214, 51, 'storage/products/vong-tay-thong-minh-samsung-galaxy-fit3-hong/5-1720980132.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_note`, `created_at`, `updated_at`) VALUES
(23, 'Nguyễn Y Vân', 'số 173, Phường Giảng Võ, Quận Ba Đình, Thành phố Hà Nội', '09876432567', 'check', '2024-06-24 08:08:09', '2024-06-24 08:08:09'),
(26, 'Nguyễn Van A', 'số 39, Phường Tây Tựu, Quận Bắc Từ Liêm, Thành phố Hà Nội', '0986452833', 'check VNpay', '2024-06-24 11:35:10', '2024-06-24 11:35:10'),
(27, 'Nguyễn Thế Quang', 'Phố Tó, Phường Tây Mỗ, Quận Nam Từ Liêm, Thành phố Hà Nội', '0986476911', 'check VnPay', '2024-06-24 11:40:05', '2024-06-24 11:40:05'),
(28, 'Nguyễn Thế Quang', 'An Thọ, Xã An Khánh, Huyện Hoài Đức, Thành phố Hà Nội', '0947744844', 'check', '2024-06-27 04:32:08', '2024-06-27 04:32:08'),
(29, 'Nguyễn Thế Quang', 'Hà nội, Phường Kiến Hưng, Quận Hà Đông, Thành phố Hà Nội', '0984764643', 'hhhhh', '2024-06-30 04:14:06', '2024-06-30 04:14:06'),
(30, 'Nguyễn Thế Quang', 'Hà nội, Phường Kiến Hưng, Quận Hà Đông, Thành phố Hà Nội', '0984764643', 'hhhhh', '2024-06-30 04:14:16', '2024-06-30 04:14:16'),
(31, 'Nguyễn Thế Quang', 'số 12, Phường Đại Phúc, Thành phố Bắc Ninh, Tỉnh Bắc Ninh', '0983766434', 'dddddd', '2024-06-30 04:16:40', '2024-06-30 04:16:40'),
(32, 'abc', 'số 114, Xã An Khánh, Huyện Hoài Đức, Thành phố Hà Nội', '0937464633', 'dddđ', '2024-06-30 07:06:10', '2024-06-30 07:06:10'),
(33, 'nguyễn văn b', ', Xã An Khánh, Huyện Hoài Đức, Thành phố Hà Nội', '0974646434', 'rrrrrrrrrrr', '2024-06-30 07:18:02', '2024-06-30 07:18:02'),
(35, 'Nguyễn Thế Quang', 'Số 9, Đường An Thọ, Xã An Khánh, Huyện Hoài Đức, Thành phố Hà Nội', '0983777262', 'test', '2024-07-08 05:19:38', '2024-07-08 05:19:38'),
(36, 'Nguyễn Văn A', 'số 12, Phường Đồng Xuân, Quận Hoàn Kiếm, Thành phố Hà Nội', '0984781625', 'test', '2024-07-08 05:25:49', '2024-07-08 05:25:49'),
(37, 'Nguyễn Văn ABC', '12, Xã An Khánh, Huyện Hoài Đức, Thành phố Hà Nội', '0839746436', 'dd', '2024-07-14 15:23:22', '2024-07-14 15:23:22'),
(38, 'Nguyễn Văn ABC', '12, Xã An Khánh, Huyện Hoài Đức, Thành phố Hà Nội', '0839746436', 'dd', '2024-07-14 15:23:39', '2024-07-14 15:23:39'),
(39, 'Nguyễn Van ABC', '23, Xã Nghĩa Dõng, Thành phố Quảng Ngãi, Tỉnh Quảng Ngãi', '0389473332', '32r23r', '2024-07-14 15:24:55', '2024-07-14 15:24:55'),
(40, 'Nguyễn Van Hoa Lá Cành', '115, Phường Quang Trung, Quận Hà Đông, Thành phố Hà Nội', '0947737432', '32323', '2024-07-14 15:27:13', '2024-07-14 15:27:13'),
(41, 'Nguyễn Van Hoa Lá Cành', '115, Phường Quang Trung, Quận Hà Đông, Thành phố Hà Nội', '0947737432', '32323', '2024-07-14 15:27:30', '2024-07-14 15:27:30'),
(42, 'Nguyễn Văn B', '19, Phường An Dương, Quận Lê Chân, Thành phố Hải Phòng', '0948374635', 'aaaaaa', '2024-07-15 09:21:36', '2024-07-15 09:21:36'),
(43, 'Nguyễn Văn B', '19, Phường An Dương, Quận Lê Chân, Thành phố Hải Phòng', '0948374635', 'aaaaaa', '2024-07-15 09:21:45', '2024-07-15 09:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '0932434545', NULL, '$2y$12$3TQ29/G5Oe4.b6EFAHwlpeG64DsOdfzhCEbftp2mlkyN.0199ROAe', NULL, '2024-06-18 07:22:50', '2024-06-18 07:22:50', NULL),
(2, 'Nguyễn Văn B', 'nguyenvanb@gmail.com', '0932434534', NULL, '$2y$12$khIyeIc8RRxul81UeZ7/TurqXdw6/z5AfjE1yg9D/P6KIHuYEK/SS', NULL, '2024-06-18 07:24:06', '2024-06-18 07:24:06', NULL),
(3, 'Nguyễn Thế Quang', 'quangnguyenthe7@gmail.com', '', NULL, '$2y$12$Kctlvh4ZYeIpca/0wqkbSeIjOCJSD1iELd15tPaUk96G4WDbd7ziq', NULL, '2024-06-21 12:00:39', '2024-06-21 12:00:39', '100664831806501044585');

-- --------------------------------------------------------

--
-- Table structure for table `vnpay_payments`
--

CREATE TABLE `vnpay_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vnp_TxnRef` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_Amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_BankCode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_BankTranNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_CardType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_OrderInfo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_PayDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_ResponseCode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_TmnCode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_TransactionNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_TransactionStatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_SecureHash` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vnpay_payments`
--

INSERT INTO `vnpay_payments` (`id`, `vnp_TxnRef`, `vnp_Amount`, `vnp_BankCode`, `vnp_BankTranNo`, `vnp_CardType`, `vnp_OrderInfo`, `vnp_PayDate`, `vnp_ResponseCode`, `vnp_TmnCode`, `vnp_TransactionNo`, `vnp_TransactionStatus`, `vnp_SecureHash`, `created_at`, `updated_at`) VALUES
(1, '229ef8', '1000000', 'NCB', 'VNP14476391', 'ATM', 'Noi dung thanh toan', '20240624214031', '00', 'CGXZLS0Z', '14476391', '00', '1ac868e7f4aa0b2acb78256813db07d90f9c0e7f34aaebcd428c2b7258c422752d4c849fa6b811b52319783bf175515a7af5cfcbb11445cd8e8604f96567c0f3', '2024-06-24 12:09:05', '2024-06-24 12:09:05'),
(2, 'b0bac2', '1000000', 'NCB', 'VNP14486249', 'ATM', 'Noi dung thanh toan', '20240630171842', '00', 'CGXZLS0Z', '14486249', '00', 'b9f9e4b9cc6adb999ff66f9b3ff203f1bc3ef63b1b7cf4443844532d1f18046a792e02aaff9cc2158a0524f4c7932ad170c4fade1afaac27d1bffb35a197b70a', '2024-06-30 07:18:50', '2024-06-30 07:18:50'),
(3, '24b017', '1000000', 'NCB', 'VNP14499635', 'ATM', 'Noi dung thanh toan', '20240708152142', '00', 'CGXZLS0Z', '14499635', '00', 'd904881bc52dfd2819ce5e1bb2297656e3fc5bb8fec1dbec3f21fbdc4d8f4b183b1332bbe16e07472466f7cfc9211300a80317dc513658eb4d3a69fb5ae7b1ba', '2024-07-08 05:21:48', '2024-07-08 05:21:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `momo_payments`
--
ALTER TABLE `momo_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_code_unique` (`order_code`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_shipping_id_foreign` (`shipping_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_code_foreign` (`order_code`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_product_id_foreign` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vnpay_payments`
--
ALTER TABLE `vnpay_payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `momo_payments`
--
ALTER TABLE `momo_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vnpay_payments`
--
ALTER TABLE `vnpay_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_shipping_id_foreign` FOREIGN KEY (`shipping_id`) REFERENCES `shippings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_code_foreign` FOREIGN KEY (`order_code`) REFERENCES `orders` (`order_code`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
