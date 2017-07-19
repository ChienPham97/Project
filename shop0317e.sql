-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 19, 2017 lúc 03:29 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop0317e`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type_id` int(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `title`, `type_id`, `updated_at`, `created_at`) VALUES
(2, 'ACER', 2, '2017-07-13 10:07:34', '0000-00-00 00:00:00'),
(3, 'DELL', 2, '2017-07-13 03:08:58', '2017-07-13 03:08:58'),
(4, 'LENOVO', 2, '2017-07-13 03:09:33', '2017-07-13 03:09:33'),
(5, 'CPU - BỘ VI XỬ LÝ', 1, '2017-07-13 03:10:38', '2017-07-13 03:10:38'),
(6, 'SEVER GAME', 5, '2017-07-13 03:22:39', '2017-07-13 03:22:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_export`
--

CREATE TABLE `detail_export` (
  `id` int(10) NOT NULL,
  `export_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `number` int(11) NOT NULL,
  `price` float NOT NULL,
  `money` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_purchase`
--

CREATE TABLE `detail_purchase` (
  `id` int(10) NOT NULL,
  `puchase_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `number` int(11) NOT NULL,
  `price` float NOT NULL,
  `money` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `detail_purchase`
--

INSERT INTO `detail_purchase` (`id`, `puchase_id`, `product_id`, `number`, `price`, `money`) VALUES
(1, 1, 1, 1, 12000000, 12000000),
(2, 1, 4, 1, 12000000, 12000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `export_invoice`
--

CREATE TABLE `export_invoice` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `trade_date` date NOT NULL,
  `total_money` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `title`, `position`) VALUES
(1, 'admin', 'staff'),
(2, '\r\ncustomer', 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `images_id` int(10) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `type_id` int(10) NOT NULL,
  `price` float NOT NULL,
  `des` text,
  `sale` int(3) DEFAULT NULL,
  `inventorynumber` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `supplier_id`, `type_id`, `price`, `des`, `sale`, `inventorynumber`, `created_at`, `updated_at`) VALUES
(1, 'ACER SS02', 2, 5, 12000000, 'New', 20, 12, '2017-07-18 22:27:12', '2017-07-18 15:20:29'),
(3, 'CPU - SK05', 4, 5, 500000, 'New', 0, 20, '2017-07-18 15:27:55', '2017-07-18 15:27:55'),
(4, 'DELL - K04SV', 2, 3, 12000000, 'New', 0, 10, '2017-07-18 22:29:09', '2017-07-18 15:29:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `purchase_invoice`
--

CREATE TABLE `purchase_invoice` (
  `id` int(10) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `trade_date` date NOT NULL,
  `total_money` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `purchase_invoice`
--

INSERT INTO `purchase_invoice` (`id`, `supplier_id`, `trade_date`, `total_money`) VALUES
(1, 1, '2017-07-20', 24000000),
(2, 2, '2017-08-20', 24000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `contact` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `contact`) VALUES
(1, 'Supplier A', 'Ba Đình - Cầu Giấy - Hà Nội ', 909876858),
(2, 'Supplier B', 'Hà Đông - Hà Nội ', 90708982),
(3, 'Supplier C', 'Ba Đình - Cầu Giấy - Hà Nội ', 909876858),
(4, 'Supplier D', 'Hà Đông - Hà Nội ', 90708982);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `position_id` int(1) NOT NULL DEFAULT '2',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `group_id` int(1) DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `phone`, `position_id`, `password`, `group_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'admin', 'admin@shop0317e.com', 'admin', 1111, 1, '$2y$10$x1y5M3dNumviR4lVbINzzuByG07FMUDL5M5amgQldSFREzNtZkm3W', 1, 'gZPpeTEguiEUP5sxwtCT18BkcYuc4JEcFX8veW6ChTluioGBkXw4RBjnVybR', '2017-07-05 16:21:10', '2017-07-19 06:21:30'),
(6, 'Phạm Minh Chiến', 'minhchienpham97@gmail.com', 'Thái Bình', 1687423992, 1, '$2y$10$BsoBC4.8tRlNokluXf3KouHDAX5oSp3R.1YLX/S6riyV4KeF3PlgG', 1, 'qFt9yr34Sql5t1bnQtzkur77IdvwNDsict8DObfvXwz6tje2mh0f07OKCkf0', '2017-07-05 16:26:22', '2017-07-16 18:17:15');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail_export`
--
ALTER TABLE `detail_export`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail_purchase`
--
ALTER TABLE `detail_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `export_invoice`
--
ALTER TABLE `export_invoice`
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
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `purchase_invoice`
--
ALTER TABLE `purchase_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `suppliers`
--
ALTER TABLE `suppliers`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `detail_export`
--
ALTER TABLE `detail_export`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `detail_purchase`
--
ALTER TABLE `detail_purchase`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `export_invoice`
--
ALTER TABLE `export_invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `purchase_invoice`
--
ALTER TABLE `purchase_invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
