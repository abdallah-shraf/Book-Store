-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 04:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booke-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_Id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double(8,2) NOT NULL,
  `total_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `product_id`, `order_Id`, `quantity`, `unit_price`, `total_price`, `created_at`, `updated_at`) VALUES
(4, 5, 1, 10000, 19.99, 199900.00, '2023-04-29 13:48:02', '2023-04-29 13:48:11'),
(5, 3, 1, 1, 90.00, 90.00, '2023-04-29 13:55:07', '2023-04-29 13:55:07'),
(6, 2, 2, 1, 20.00, 20.00, '2023-05-01 03:15:30', '2023-05-01 03:15:30'),
(7, 2, 3, 1, 20.00, 20.00, '2023-05-01 03:18:28', '2023-05-01 03:18:28'),
(8, 3, 4, 1, 90.00, 90.00, '2023-05-01 03:19:09', '2023-05-01 03:19:09'),
(9, 1, 5, 1, 20.00, 20.00, '2023-05-01 03:23:02', '2023-05-01 03:23:02'),
(10, 2, 6, 1, 20.00, 20.00, '2023-05-01 03:37:12', '2023-05-01 03:37:12'),
(12, 5, 7, 1, 19.99, 19.99, '2023-05-01 21:50:31', '2023-05-01 21:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_21_114056_create_sections_table', 1),
(6, '2023_02_21_122820_create_prouducts_table', 1),
(7, '2023_03_10_223103_create_orders_table', 1),
(8, '2023_03_11_001934_create_cart_items_table', 1),
(9, '2023_03_11_215005_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `UserId` bigint(20) UNSIGNED NOT NULL,
  `surly` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `UserId`, `surly`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2023-03-20 16:52:58', '2023-04-29 13:55:21'),
(2, 1, 2, '2023-05-01 03:15:30', '2023-05-01 03:18:20'),
(3, 1, 2, '2023-05-01 03:18:28', '2023-05-01 03:18:37'),
(4, 1, 2, '2023-05-01 03:19:09', '2023-05-01 03:19:15'),
(5, 1, 2, '2023-05-01 03:23:02', '2023-05-01 03:23:10'),
(6, 1, 2, '2023-05-01 03:37:12', '2023-05-01 03:37:18'),
(7, 1, 1, '2023-05-01 21:50:10', '2023-05-01 21:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prouducts`
--

CREATE TABLE `prouducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ProductsName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AboutProduct` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sectionID` bigint(20) UNSIGNED NOT NULL,
  `ProductImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UnitePrice` double(8,2) NOT NULL,
  `Author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Created_by` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prouducts`
--

INSERT INTO `prouducts` (`id`, `ProductsName`, `AboutProduct`, `sectionID`, `ProductImage`, `UnitePrice`, `Author`, `Created_by`, `created_at`, `updated_at`) VALUES
(1, 'Red queen', 'ofxdhfjhjbn', 1, '1679338347.lloyd.jpg', 20.00, 'abdallah', 'dwsdf', '2023-03-20 16:52:27', '2023-03-20 16:52:27'),
(2, 'shattered', 'ofxdhfjhjbn', 1, '1679338369.shattered.jpg', 20.00, 'abdallah', 'dwsdf', '2023-03-20 16:52:49', '2023-03-20 16:52:49'),
(3, 'The World', 'asdgsfhdgfgffjdjshrsgf', 2, '1679413083.the_world.jpg', 90.00, 'abdallah', 'dwsdf', '2023-03-21 13:38:03', '2023-03-21 13:38:03'),
(4, 'فن الامبلاه', 'كتاب فن اللامبالاة: لعيش حياة تخالف المألوف تأليف مارك مانسون .. ظل يُقال لنا طيلة عشرات السنوات إن التفكير الإيجابي هو المفتاح إلى حياة سعيدة ثرية. لكن مارك مانسون يشتم تلك \"الإيجابية\" ويقول: \" فلنكن صادقين، السيء سيء وعلينا أن نتعايش مع هذا \". لا يتهرّب مانسون من الحقائق ولا يغلفها بالسكّر، بل يقولها لنا كما هي: جرعة من الحقيقة الفجِّة الصادقة المنعشة هي ما ينقصنا اليوم.\r\nهذا الكتاب ترياق للذهنية التي نهدهد أنفسنا بها، ذهنية \" فلنعمل على أن يكون لدينا كلنا شعور طيب \" التي غزت المجتمع المعاصر فأفسدت جيلًا بأسره صار ينال ميداليات ذهبية لمجرد الحضور إلى المدرسة.\r\nينصحنا مانسون بأن نعرف حدود إمكاناتنا وأن نتقبلها. وأن ندرك مخاوفنا ونواقصنا وما لسنا واثقين منه، وأن نكفّ عن التهرب والفرار من ذلك كله ونبدأ مواجهة الحقائق الموجعة، حتى نصير قادرين على العثور على ما نبحث عنه من جرأة ومثابرة وصدق ومسؤولية وتسامح وحب للمعرفة.\r\nلا يستطيع كل شخص أن يكون متميزًا متفوقًا. ففي المجتمع ناجحين وفاشلين؛ وقسم من هذا الواقع ليس عادلًا وليس نتيجة غلطتك أنت. وصحيح أن المال شيء حسن، لكن اهتمامك بما تفعله بحياتك أحسن كثيرًا؛ فالتجربة هي الثروة الحقيقية.\r\nإنها لحظة حديث حقيقي صادق لشخص يمسكك من كتفيك وينظر في عينيك. هذا الكتاب صفعة منعشة لهذا الجيل حتى تساعده في عيش حياة راضية مستقرة.', 1, '1682781950.R.jfif', 19.99, 'مارك مانسون', 'dwsdf', '2023-04-29 13:25:50', '2023-04-29 13:25:50'),
(5, 'فن الامبلاه', 'كتاب فن اللامبالاة: لعيش حياة تخالف المألوف تأليف مارك مانسون .. ظل يُقال لنا طيلة عشرات السنوات إن التفكير الإيجابي هو المفتاح إلى حياة سعيدة ثرية. لكن مارك مانسون يشتم تلك \"الإيجابية\" ويقول: \" فلنكن صادقين، السيء سيء وعلينا أن نتعايش مع هذا \". لا يتهرّب مانسون من الحقائق ولا يغلفها بالسكّر، بل يقولها لنا كما هي: جرعة من الحقيقة الفجِّة الصادقة المنعشة هي ما ينقصنا اليوم.\r\nهذا الكتاب ترياق للذهنية التي نهدهد أنفسنا بها، ذهنية \" فلنعمل على أن يكون لدينا كلنا شعور طيب \" التي غزت المجتمع المعاصر فأفسدت جيلًا بأسره صار ينال ميداليات ذهبية لمجرد الحضور إلى المدرسة.\r\nينصحنا مانسون بأن نعرف حدود إمكاناتنا وأن نتقبلها. وأن ندرك مخاوفنا ونواقصنا وما لسنا واثقين منه، وأن نكفّ عن التهرب والفرار من ذلك كله ونبدأ مواجهة الحقائق الموجعة، حتى نصير قادرين على العثور على ما نبحث عنه من جرأة ومثابرة وصدق ومسؤولية وتسامح وحب للمعرفة.\r\nلا يستطيع كل شخص أن يكون متميزًا متفوقًا. ففي المجتمع ناجحين وفاشلين؛ وقسم من هذا الواقع ليس عادلًا وليس نتيجة غلطتك أنت. وصحيح أن المال شيء حسن، لكن اهتمامك بما تفعله بحياتك أحسن كثيرًا؛ فالتجربة هي الثروة الحقيقية.\r\nإنها لحظة حديث حقيقي صادق لشخص يمسكك من كتفيك وينظر في عينيك. هذا الكتاب صفعة منعشة لهذا الجيل حتى تساعده في عيش حياة راضية مستقرة.', 1, '1682782085.Book.jpg', 19.99, 'مارك مانسون', 'dwsdf', '2023-04-29 13:28:05', '2023-04-29 13:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Section_Name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Created-by` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `Section_Name`, `Created-by`, `created_at`, `updated_at`) VALUES
(1, 'أدب', 'dwsdf', '2023-03-20 16:51:39', '2023-03-20 16:51:39'),
(2, 'تاريخ', 'dwsdf', '2023-03-20 16:51:47', '2023-03-20 16:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fjCndwJLvPgbJIuf6jrk1ljzXgiwVLm7C0PhhQki', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 Edg/112.0.1722.64', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVkM3TkVNNGVaU241OTJOZndVR2k5c0VTeVQ0ZW5yUXVwSVdGRDNsRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1683076583),
('LiiLbzZHdTskqMHLzNcV9Mhtk32LTQy46eEi9a4J', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 Edg/112.0.1722.64', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOGdSV1d2M0JsOEMxQnJBRTFzRGZWSW9DQW1xblhrTzJ1Z2cyNUgyNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1683077843),
('RzGUoW0ciYwTvKvFMFYDGEdVjIsKLZ6BTUgwuIAV', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 Edg/112.0.1722.68', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWWpMckpBYjhqeVZodmV2dm01MXJ5WEFrOUNNNTdyUVJyM09Jekh3ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTY4MzE1MjQ5Nzt9fQ==', 1683155890);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addressName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phoneNumber`, `country`, `city`, `addressName`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abdallah Ashraf', '117630598', 'Egypt', 'giza', 'wergf', 'abdallahashraf743@gmail.com', NULL, '$2y$10$K56.DVTBMX5ivw7fVsyH7Otegz29W0qoV4ypMvemDaLdSZGIS9fT6', 'yqr79EmmoIF1P7fNuXyi3jJNyjFi2p48o8o1YmNvCFwSrafYeb3BzsPGbSGK', '2023-03-19 23:04:00', '2023-05-02 23:37:23'),
(2, 'aaa', '0111762554', 'aaa', 'aaa', 'aaa', '324b95836f@emailkom.live', NULL, '$2y$10$9.kbG5iaPneQsoEqGM3Yd.00uj2eYEg7.NggatEmmWnQY0uUedTVm', NULL, '2023-05-01 08:04:46', '2023-05-01 08:04:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_product_id_foreign` (`product_id`),
  ADD KEY `cart_items_order_id_foreign` (`order_Id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_userid_foreign` (`UserId`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prouducts`
--
ALTER TABLE `prouducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prouducts_sectionid_foreign` (`sectionID`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phonenumber_unique` (`phoneNumber`),
  ADD UNIQUE KEY `users_country_unique` (`country`),
  ADD UNIQUE KEY `users_city_unique` (`city`),
  ADD UNIQUE KEY `users_addressname_unique` (`addressName`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prouducts`
--
ALTER TABLE `prouducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_order_id_foreign` FOREIGN KEY (`order_Id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `prouducts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_userid_foreign` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prouducts`
--
ALTER TABLE `prouducts`
  ADD CONSTRAINT `prouducts_sectionid_foreign` FOREIGN KEY (`sectionID`) REFERENCES `sections` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
