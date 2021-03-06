-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
<<<<<<< HEAD
-- Thời gian đã tạo: Th8 18, 2017 lúc 05:33 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30
=======
-- Thời gian đã tạo: Th8 24, 2017 lúc 06:50 AM
-- Phiên bản máy phục vụ: 10.1.22-MariaDB
-- Phiên bản PHP: 7.1.4
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `title`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'DELL', 2, '2017-07-28 17:19:27', '2017-07-28 17:19:27'),
(2, 'ASUS', 2, '2017-07-28 17:19:37', '2017-07-28 17:19:37'),
(3, 'ACER', 2, '2017-07-28 17:19:45', '2017-07-28 17:19:45'),
(4, 'HP', 2, '2017-07-28 17:19:53', '2017-07-28 17:20:00'),
(5, 'CPU - BỘ VI XỬ LÝ', 1, '2017-07-28 17:20:08', '2017-07-28 17:20:08'),
(6, 'MAIN - BO MẠCH CHỦ', 1, NULL, NULL),
(7, 'VGA _ CARD MÀN HÌNH', 1, NULL, NULL),
(8, 'RAM - BỘ NHỚ TRONG', 1, '2017-08-01 04:31:59', '2017-08-01 04:31:59'),
(9, 'PSU - NGUỒN MÁY TÍNH', 1, '2017-08-01 04:32:30', '2017-08-01 04:32:30'),
(10, 'MÁY CHIẾU', 6, '2017-08-01 04:33:20', '2017-08-01 04:33:20'),
(11, 'MÁY IN', 6, '2017-08-01 04:33:27', '2017-08-01 04:33:27'),
(12, 'MÁY PHOTOCOPY', 6, '2017-08-01 04:33:52', '2017-08-01 04:33:52'),
(13, 'MÁY FAX', 6, '2017-08-01 04:34:00', '2017-08-01 04:34:00'),
(14, 'CHUỘT GAMING', 3, '2017-08-01 06:37:37', '2017-08-01 06:37:37'),
(15, 'BÀN PHÍM GAMING', 3, '2017-08-01 06:38:05', '2017-08-01 06:38:05'),
(16, 'TAI NGHE', 3, '2017-08-01 06:38:29', '2017-08-01 06:38:29'),
(17, 'LOA MÁY TÍNH', 4, '2017-08-01 06:38:56', '2017-08-01 06:38:56'),
(18, 'WEBCAM', 4, '2017-08-01 06:39:04', '2017-08-01 06:39:16'),
(19, 'HEADPHONE & MIC', 4, '2017-08-01 06:39:45', '2017-08-01 06:39:45'),
(20, 'USB', 5, '2017-08-01 06:40:35', '2017-08-01 06:40:35'),
(21, 'Ổ CỨNG GẮN NGOÀI', 5, '2017-08-01 06:41:12', '2017-08-01 06:41:12'),
(22, 'Test', 10, '2017-08-22 00:17:34', '2017-08-22 19:11:32'),
(23, 'Test 12', 1, '2017-08-23 05:42:23', '2017-08-23 05:42:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmmuc`
--

CREATE TABLE `danhmmuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmmuc`
--

INSERT INTO `danhmmuc` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'LINH KIỆN MÁY TÍNH', NULL, NULL),
(2, 'MÁY TÍNH XÁCH TAY', NULL, NULL),
(3, 'GAMEGEAR-COOLING', NULL, NULL),
(4, 'THIẾT BỊ NGHE NHÌN', NULL, NULL),
(5, 'THIẾT BỊ LƯU TRỮ', NULL, NULL),
(6, 'THIẾT BỊ VĂN PHÒNG', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exports`
--

CREATE TABLE `exports` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `trade_date` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'User', NULL, NULL),
(6, 'Tester', '2017-08-22 00:25:16', '2017-08-22 01:11:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_07_19_132749_create_users_tables', 1),
(2, '2017_07_19_133546_create_categories_tables', 1),
(3, '2017_07_19_133626_create_products_tables', 1),
(4, '2017_07_19_133658_create_groups_tables', 1),
(5, '2017_07_19_133719_create_images_tables', 1),
(6, '2017_07_19_133803_create_suppliers_tables', 1),
(7, '2017_07_19_134034_create_purchases_tables', 1),
(8, '2017_07_26_103305_create_exports_tables', 2),
(9, '2017_07_26_103823_create_export_tables', 3),
(10, '2017_07_26_104011_create_purchase_tables', 3),
(11, '2017_07_26_104149_create_news_tables', 4),
(12, '2017_07_26_104946_create_users_table', 5),
(13, '2017_08_01_094803_create_slider_tables', 6),
(14, '2017_08_01_100050_create_slide_tables', 7),
(15, '2017_08_02_030308_create_danhmuc_tables', 8),
<<<<<<< HEAD
(16, '2017_08_09_093956_create_shoppingcart_table', 9),
(17, '2017_08_18_135238_create_tables_order', 10),
(18, '2017_08_18_142516_create_tables_order_details', 10);
=======
(16, '2017_08_09_093956_create_shoppingcart_table', 9);
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
<<<<<<< HEAD
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
=======
  `image` text COLLATE utf8mb4_unicode_ci,
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
<<<<<<< HEAD
(1, 'khaitruong.jpg', 'KHAI TRƯƠNG TƯNG BỪNG', 'Cửa hàng khai trương - khuyến mãi tưng bừng\r\n\r\n100 quà tặng dành cho khách hàng đến mua sản phẩm của cửa hàng đầu tiên !', NULL, NULL),
(2, 'sale.jpg', 'KHUYẾN MÃI CỰC KHỦNG', 'Khuyến mãi 15% cho tất cả các mặt hàng !', NULL, NULL),
(3, 'baotri.jpg', 'Bảo trì Website', 'Bảo trì Website từ ngày 9/8 đến 10/8', NULL, NULL);

=======
(1, 'khaitruong.jpg', 'KHAI TRƯƠNG TƯNG BỪNG', 'Cửa hàng khai trương - khuyến mãi tưng bừng\r\n100 quà tặng dành cho khách hàng đến mua sản phẩm của cửa hàng đầu tiên !!', NULL, '2017-08-23 20:49:07'),
(2, 'sale.jpg', 'KHUYẾN MÃI CỰC KHỦNG', 'Khuyến mãi 15% cho tất cả các mặt hàng !', NULL, NULL),
(3, 'baotri.jpg', 'Bảo trì Website', 'Bảo trì Website từ ngày 9/8 đến 10/8', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `status_id` int(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `total`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 6, 'Long', 'test@gmail.com', '0969969969', 'HN', '1', 1, NULL, '2017-08-23 19:28:51'),
(2, 1, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(3, 2, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
(4, 6, 'Linh', 'test@gmail.com', '0969969969', 'HN', '1', 0, '2017-08-23 05:59:16', '2017-08-23 06:08:51'),
(6, 6, NULL, NULL, NULL, NULL, NULL, -1, '2017-08-23 19:36:27', '2017-08-23 19:36:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `price` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `price`) VALUES
(1, 1, 1, NULL),
(2, 1, 2, NULL),
(3, 1, 3, NULL);

>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `price` double(12,2) NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale` int(11) DEFAULT NULL,
  `inventorynumber` int(11) DEFAULT NULL,
  `favorite` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `thumbnail`, `category_id`, `price`, `des`, `sale`, `inventorynumber`, `favorite`, `created_at`, `updated_at`) VALUES
(1, 'ACER K502', 'Capture001.png', 1, 15999000.00, 'new', 10, 15, 1, '2017-07-28 17:24:13', '2017-08-23 04:41:59'),
(2, 'Xeon® Processor E5-2670', '2670.jpg', 5, 3245000.00, 'new', 0, 24, 0, '2017-08-01 04:28:54', '2017-08-01 06:07:43'),
(3, 'Dell XPS 13', 'XPS_13.jpeg', 1, 38000000.00, 'new', 0, 8, 0, '2017-08-01 05:01:41', '2017-08-01 06:14:46'),
(5, 'Intel® Core™ i7-6700K Processor', 'a11.png', 5, 7990000.00, 'new', 0, 13, 0, '2017-08-01 07:14:09', '2017-08-01 07:23:20'),
(6, 'Intel® Core™ i9-7900X X-series Processor', '7900x.jpg', 5, 6500000.00, 'old', 20, 24, 0, '2017-08-01 07:15:05', '2017-08-01 08:11:58'),
(7, 'MSI X299 TOMAHAWK ARCTIC', '102425.png', 6, 8880000.00, 'old', 0, 13, 0, '2017-08-01 07:17:16', '2017-08-01 07:22:42'),
(8, 'MSI X370 GAMING PLUS → Số 1 cho Game thủ!', 'main1.png', 6, 4260000.00, 'old', 15, 27, 0, '2017-08-01 07:19:00', '2017-08-01 08:12:06'),
(9, 'G.SKILL RIPJAW 4 - 32GB', 'ram1.jpg', 8, 4500000.00, 'new', 0, 23, 0, '2017-08-01 07:20:37', '2017-08-01 07:20:37'),
(10, 'Dell XPS 13 9360', 'dell2.jpg', 1, 31900000.00, 'old', 0, 15, 0, '2017-08-01 07:21:44', '2017-08-01 07:21:44'),
(21, 'Test 1', 'Capture001.png', 1, 8000000.00, NULL, NULL, NULL, 0, '2017-08-22 20:43:43', '2017-08-22 20:43:43'),
(22, 'P 1qwe', 'Capture001.png', 23, 8000000.00, NULL, 12, NULL, 0, '2017-08-23 05:43:34', '2017-08-23 05:43:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shoppingcart`
--

INSERT INTO `shoppingcart` (`id`, `thumbnail`, `name`, `price`, `number`, `created_at`, `updated_at`) VALUES
('', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test ', 'test ', '123123', 1, NULL, NULL),
('', 'test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  test1  ', 'test1  ', '21123123', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `image`, `h1`, `h2`, `p`, `created_at`, `updated_at`) VALUES
(1, 'slider1.jpg', 'E-SHOPPER', 'Free E-Commerce Template', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, '2017-08-23 21:42:39'),
(2, 'slider2.jpg', 'E-SHOPPER', '100% Responsive Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, '2017-08-23 21:42:27'),
(3, 'slider3.jpg', 'E-SHOPPER', 'Free Ecommerce Template', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, '2017-08-23 21:42:13'),
(7, 'similar3.jpg', NULL, NULL, NULL, '2017-08-23 21:42:50', '2017-08-23 21:42:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `statuses`
--

INSERT INTO `statuses` (`id`, `title`) VALUES
(-1, 'Chưa xử lý'),
(0, 'Chờ xử lý'),
(1, 'Đã xử lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'Intel', 'HN', 'intel@intel.net', NULL, '2017-08-23 00:53:58'),
(2, 'Geforce', 'US', 'US', NULL, '2017-08-23 00:53:34'),
(4, 'Test', 'Ha Noi', '0969969969', '2017-08-23 00:26:59', '2017-08-23 00:26:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `types`
--

CREATE TABLE `types` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'LINH KIỆN MÁY TÍNH', NULL, NULL),
(2, 'MÁY TÍNH XÁCH TAY', NULL, NULL),
(3, 'MÁY TÍNH ĐỂ BÀN', NULL, NULL),
(4, 'GAMEGEAR-COOLING', NULL, NULL),
(5, 'GAMES NET', NULL, NULL),
(6, 'THIẾT BỊ NGHE NHÌN', NULL, NULL),
(7, 'THIẾT BỊ LƯU TRỮ', NULL, NULL),
(8, 'THIẾT BỊ MẠNG', NULL, NULL),
(9, 'THIẾT BỊ VĂN PHÒNG', NULL, NULL),
(10, 'THIẾT BỊ KHÁC', NULL, NULL),
(11, 'Test', '2017-08-23 01:32:20', '2017-08-23 01:52:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
<<<<<<< HEAD
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
=======
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `group_id`, `address`, `phone`, `created_at`, `updated_at`, `remember_token`) VALUES
<<<<<<< HEAD
(1, 'admin', 'admin@shop0317e.com', '$2y$10$apNPPIp2uYSmkl1FmyWbd.dAOmeVLhvWrjxHu5MRA4qdv5fcz1lmK', '1', 'admin', '', '2017-07-26 03:52:31', '2017-07-26 03:52:31', 'O2HhkZDVFNU8CNHAhfExyXs4xCk6XKByvTZBQ01QQIOe3HZFQD0pK7asWJn0'),
(2, 'Phạm Minh Chiến', 'minhchienpham97@gmail.com', '$2y$10$Cbn4qvBRn3ObcxCLqUaJkeGsuQv51p4mmjQiZeHn9WXSscLyc4SNG', '2', NULL, NULL, '2017-08-17 08:51:48', '2017-08-17 08:51:48', 'WyDEpaQ9rVBHYF24oXw1nzDtUDKGCcjMW6RQXXlq6u2bxbTcFKjz781nWgXb');
=======
(1, 'admin', 'admin@shop0317e.com', '$2y$10$apNPPIp2uYSmkl1FmyWbd.dAOmeVLhvWrjxHu5MRA4qdv5fcz1lmK', '1', 'admin', '+841231231231', '2017-07-26 03:52:31', '2017-08-18 18:41:59', NULL),
(2, 'Duy', 'admin@gmail.com', '$2y$10$.TBquufVoYpGy4239QWxM.wupybL4SKyVZXbeYlWb8JyyXB72sahi', '1', 'Tuyên Quang', '0969969972', '2017-08-18 02:18:40', '2017-08-23 04:48:34', 'DExVTJHvXpKLqUEYioq9UFS59v0OzZPj3zJk9ZvwwXfZBgqAgYKtiAYSvH3i'),
(3, 'User', 'user@gmail.com', '$2y$10$rw1ym2sIanImpn/muDoKde89xyeGzB2BxB5voa4NU6krbTie./t5a', '2', 'HN', NULL, '2017-08-18 03:09:54', '2017-08-23 04:48:22', 'sl4cVmJvsprHGZdvM1xwfaTK5yf7Eb6eIq04JpNsqrK62FUNfsVONth5eyvc'),
(5, 'Test', 'khanhleesin9@gmail.com', '123123', '1', 'khánh', '0969969969', '2017-08-18 20:36:51', '2017-08-23 04:48:57', NULL),
(6, 'Anonymous', 'Anonymous@shopcomputer.com', 'anonymous123', '2', 'earth', NULL, '2017-08-23 05:58:53', '2017-08-23 05:58:53', NULL);
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmmuc`
--
ALTER TABLE `danhmmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `exports`
--
ALTER TABLE `exports`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT cho bảng `danhmmuc`
--
ALTER TABLE `danhmmuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `exports`
--
ALTER TABLE `exports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
<<<<<<< HEAD
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
=======
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
<<<<<<< HEAD
=======
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
<<<<<<< HEAD
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
