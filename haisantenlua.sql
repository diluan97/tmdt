-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th3 20, 2019 lúc 07:59 AM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `haisantenlua`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `context_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `description`, `parent_id`, `context_type`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sản Phẩm Bán Chạy Nhất', 'san-pham-ban-chay-nhat541264', '1', '<p>.</p>', 0, 'Sản Phẩm Bán Chạy Nhất', '1552809414haonuongphomai.jpg', '2019-03-16 03:57:42', '2019-03-17 00:56:54'),
(2, 'Đặc Sản Tên Lửa', 'dac-san-ten-lua772601', '1', '<p>.</p>', 0, 'Đặc Sản Tên Lửa', '1552809608haonuongphomai.jpg', '2019-03-16 04:18:59', '2019-03-17 01:00:08'),
(3, 'Sản Phẩm Đặc Biệt', 'san-pham-dac-biet311517', '1', '<p>.</p>', 0, 'Sản Phẩm Đặc Biệt', '1552888970haonuongphomai.jpg', '2019-03-17 22:57:26', '2019-03-17 23:02:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacs`
--

CREATE TABLE `contacs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_16_070213_create_categories_table', 1),
(4, '2019_03_16_070252_create_contacs_table', 1),
(5, '2019_03_16_070311_create_sliders_table', 1),
(6, '2019_03_16_070334_create_products_table', 1),
(7, '2019_03_16_070409_create_product_variants_table', 1),
(8, '2019_03_16_070556_create_jobs_table', 1),
(9, '2019_03_16_070655_create_orders_table', 1),
(10, '2019_03_16_070700_create_product_order_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `hot` int(11) DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `status`, `short_description`, `hot`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Hào Nướng Phô Mai', 'hao-nuong-pho-mai187326', '1', '<p>Đ&acirc;y l&agrave; m&oacute;n ăn ch&uacute;ng t&ocirc;i b&aacute;n chạy nhất của qu&aacute;n , hằng ng&agrave;y ch&uacute;ng t&ocirc;i ti&ecirc;u thụ đến 50-70kg h&agrave;o , được chế biến nhiều m&oacute;n . H&agrave;o của ch&uacute;ng t&ocirc;i lớn , nhiều thịt được chế biến&nbsp; sạch v&agrave; đẹp mắt . Tạo cho thực kh&aacute;ch thấy ngon miệng hơn khi thưởng thức m&oacute;n ăn ở qu&aacute;n ch&uacute;ng t&ocirc;i .</p>', 0, 1, '2019-03-16 04:48:07', '2019-03-17 01:08:22'),
(3, 'Cá Mú Nghệ Hấp', 'ca-mu-nghe-hap117420', '1', '<p>C&aacute; m&uacute; hay c&ograve;n gọi l&agrave; c&aacute; song, l&agrave; loại c&aacute; sống ở v&ugrave;ng nước mặn, thịt trắng, dai v&agrave; ngọt n&ecirc;n c&aacute;c m&oacute;n chế biến từ c&aacute; m&uacute; rất được ưa chuộng tại c&aacute;c nh&agrave; h&agrave;ng hải sản.&nbsp;Trong đ&oacute; m&oacute;n c&aacute; m&uacute; hấp x&igrave; dầu l&agrave; một m&oacute;n ăn đơn giản, c&oacute; thể dễ d&agrave;ng chế biến v&agrave; thực hiện tại nh&agrave;, vị ngọt của c&aacute; kết hợp với m&ugrave;i thơm của gia vị sẽ tạo n&ecirc;n hương vị mới lạ ngon miệng trong bữa ăn gia đ&igrave;nh.</p>', 0, 1, '2019-03-17 22:42:38', '2019-03-17 22:55:25'),
(4, 'Cua Rang Me', 'cua-rang-me307086', '1', '<p>M&oacute;n Cua rang me&nbsp;c&oacute; vị chua của những tr&aacute;i me quện với vị ngọt của đường, cay cay của ớt, thơm nồng của tỏi v&agrave; hương thơm đậm đ&agrave; của những con Cua Biển&nbsp;l&agrave;m cho ai cũng phải nhớ tới sau mỗi lần ăn. Rất nhiều gia đ&igrave;nh t&igrave;m đến c&aacute;c nh&agrave; h&agrave;ng lớn để thưởng thức cua rang me, nhưng sẽ th&uacute; vị hơn nhiều nếu bạn tự v&agrave;o bếp để l&agrave;m n&oacute; cho cả gia đ&igrave;nh c&ugrave;ng thưởng thức. Sau đ&acirc;y Cua Số Một xin giới thiệu với c&aacute;c bạn&nbsp;c&aacute;ch l&agrave;m m&oacute;n Cua rang mechua ngọt ngon hết sẩy tại gian bếp xinh xắn của gia đ&igrave;nh nh&eacute; !</p>', 0, 1, '2019-03-17 22:49:05', '2019-03-18 23:29:54'),
(5, 'Tôm Tích Nướng Muối Ớt', 'tom-tich-nuong-muoi-ot917832', '1', '<p>Từ l&acirc;u, t&ocirc;m t&iacute;t&nbsp;đ&atilde; trở th&agrave;nh m&oacute;n ăn kho&aacute;i khẩu của nhiều người. Được biết t&ocirc;m t&iacute;t l&agrave; lo&agrave;i hải sản biển, ch&uacute;ng c&ugrave;ng họ với nh&agrave; t&ocirc;m v&agrave; c&oacute; th&acirc;n h&igrave;nh rất giống với t&ocirc;m, tuy nhi&ecirc;n c&oacute; nhi&ecirc;u ch&acirc;n hơn v&agrave; thịt ch&uacute;ng ngon kh&ocirc;ng thua k&eacute;m g&igrave; so với c&aacute;c lo&agrave;i t&ocirc;m biển. T&ocirc;m t&iacute;t c&oacute; thể chế biến th&agrave;nh nhiều m&oacute;n ăn ngon kh&aacute;c nhau, tuy nhi&ecirc;n c&oacute; một m&oacute;n ăn v&ocirc; c&ugrave;ng hấp dẫn đ&oacute; ch&iacute;nh l&agrave;&nbsp;t&iacute;t nướng muối ớt.</p>', 3, 3, '2019-03-17 23:03:04', '2019-03-17 23:07:27'),
(6, 'Tôm Tích Hấp', 'tom-tich-hap418894', '1', '<p>Thịt t&ocirc;m t&iacute;t m&agrave;u đỏ hồng, m&ugrave;i phưng phức, mềm mại nhưng kh&ocirc;ng bở. D&acirc;n s&agrave;nh điệu d&ugrave;ng m&oacute;n n&agrave;y thường k&egrave;m th&ecirc;m rau sống, c&agrave; chua, chuối ch&aacute;t, dưa leo v&agrave; nếu như c&oacute; th&ecirc;m ch&uacute;t m&ugrave; tạt c&agrave;ng ngon nhất xứ.&nbsp;</p>', 3, 3, '2019-03-17 23:08:05', '2019-03-17 23:11:40'),
(7, 'Tôm Tích Cháy Tỏi', 'tom-tich-chay-toi645060', '1', '<p><strong>T&ocirc;m t&iacute;ch ch&aacute;y tỏi</strong>&nbsp;l&agrave; một m&oacute;n ăn thơm nồng hương vị biển v&agrave; ngon đậm đ&agrave; .</p>', 3, 3, '2019-03-17 23:11:45', '2019-03-17 23:12:51'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-19 23:31:40', '2019-03-19 23:31:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_order`
--

CREATE TABLE `product_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `product_variant_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_variants`
--

CREATE TABLE `product_variants` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `position` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `color`, `size`, `image`, `price`, `amount`, `status`, `position`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2', '1552810125haonuongphomai.jpg', 48000, 999, 1, 1, '2019-03-17 01:08:24', '2019-03-17 01:08:45'),
(4, 3, NULL, '2', '1552887853camunghe.jpg', 1600000, 999, 1, 1, '2019-03-17 22:43:59', '2019-03-17 22:55:29'),
(5, 4, NULL, '2', '1552976986cuarangme.jpg', 800000, 999, 1, 1, '2019-03-17 22:53:36', '2019-03-18 23:29:46'),
(6, 5, NULL, '2', '1552889213tomtichnuong.jpg', 1000000, 99, 1, 1, '2019-03-17 23:06:34', '2019-03-17 23:06:53'),
(7, 6, NULL, '2', '1552889415tom tich hap.jpg', 1000000, 99, 1, 1, '2019-03-17 23:10:01', '2019-03-17 23:10:15'),
(8, 7, NULL, '2', '1552889644Tôm-tích-cháy-tỏi.jpg', 1000000, 99, 1, 1, '2019-03-17 23:12:06', '2019-03-17 23:14:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `slug`, `image`, `status`, `logan`, `info`, `created_at`, `updated_at`) VALUES
(2, 'slide 1', 'slide-1830068', '1552901145haonuongphomai.jpg', '1', 'Cùng Trải Nghiệm Những Món Ăn Ngon', 'Nhà Hàng Hải Sản Tên Lửa - Không Gian Sang Trọng', '2019-03-18 02:21:23', '2019-03-18 02:25:45'),
(3, 'slide 2', 'slide-2322764', '1552902366cuarangme.jpg', '1', 'Các Loại Hải Sản Tươi Sống', 'Hải Sản Tươi Sống Phục Vụ Thực Khách', '2019-03-18 02:25:50', '2019-03-18 02:46:06'),
(4, 'slide 3', 'slide-3673913', '1552901346tomtichnuong.jpg', '1', 'Nhận Đặt Tiệc - Tất Niên - Liên Hoan - Sinh Nhật', 'Không gian quán rông , thoáng . Sức chứa lên đến hơn 100 khách hàng khu vực đãi tiệc.', '2019-03-18 02:27:56', '2019-03-18 02:29:06'),
(5, 'về chúng tôi 4', 've-chung-toi-4232726', '1553061021tomtichnuong.jpg', '1', 'Hải Sản Tên Lửa 4', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2019-03-19 22:49:22', '2019-03-19 22:50:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@hstl.net', '$2y$10$bw7vIW.BCNZQHebC8Ox8MeiR4ytIM/WqhfhrdgMtq4vNdZ5klmSWS', '1', 'BuUnNkq8oXi3mG2N71Oid3Klr02rNPc7K9ngZt7Xn3lVpKLXQPNUtJSNfFPR', '2019-03-16 00:29:13', '2019-03-16 00:29:13'),
(9, 'Luan Duong', 'admin@huflit.net', '$2y$10$6.5rK2bEyebWOzn8zNzADub9xLFPZjpdQQYlvfw8s3YM7Qf/NEe6G', '0', 'b13015db66d8bf37374e6212f2a7ef6e', '2019-03-18 00:24:10', '2019-03-18 00:24:10');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacs`
--
ALTER TABLE `contacs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_order_order_id_foreign` (`order_id`),
  ADD KEY `product_order_product_variant_id_foreign` (`product_variant_id`);

--
-- Chỉ mục cho bảng `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variants_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `contacs`
--
ALTER TABLE `contacs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_order_product_variant_id_foreign` FOREIGN KEY (`product_variant_id`) REFERENCES `product_variants` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
