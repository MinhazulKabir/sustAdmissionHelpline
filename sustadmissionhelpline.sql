-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2018 at 07:47 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sustadmissionhelpline`
--

-- --------------------------------------------------------

--
-- Table structure for table `associations`
--

CREATE TABLE `associations` (
  `id` int(10) UNSIGNED NOT NULL,
  `association_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `association_short_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `associations`
--

INSERT INTO `associations` (`id`, `association_name`, `association_short_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Jamalpur Association Hotel Holy Gate', '<p>Name: Ashikul Shakil</p>\r\n\r\n<p>Dept: CSE</p>\r\n\r\n<p>Phone: 019xxxxxxxx</p>\r\n\r\n<p>Name: Masiur Rahman</p>\r\n\r\n<p>Dept: CSE</p>\r\n\r\n<p>Phone: 017xxxxxxxx</p>\r\n\r\n<p>Name: Al Amin Shopoth</p>\r\n\r\n<p>Dept: BAN</p>\r\n\r\n<p>Phone: 019xxxxxxxx</p>', '2018-01-13 05:58:18', '2018-01-19 12:41:59', NULL),
(2, 'Dhaka Association', '<p>Name: Ashikul Shakil</p>\r\n\r\n<p>Dept: PME</p>\r\n\r\n<p>Phone: 019xxxxxxxx</p>\r\n\r\n<p>Name: Masiur Rahman</p>\r\n\r\n<p>Dept: CEE</p>\r\n\r\n<p>Phone: 017xxxxxxxx</p>', '2018-01-19 12:36:19', '2018-01-19 12:36:19', NULL),
(3, 'Dinajpur', '<p>Name: Shakil Ahmed</p>\r\n\r\n<p>Dept: PSS</p>\r\n\r\n<p>Phone: 019xxxxxxxx</p>\r\n\r\n<p>Name: Adnan Rahman</p>\r\n\r\n<p>Dept: ENG</p>\r\n\r\n<p>Phone: 017xxxxxxxx</p>', '2018-01-19 12:37:06', '2018-01-19 12:37:06', NULL),
(4, 'xx', '<p>Name: Ashikul Shakil</p>\r\n\r\n<p>Dept: CSE</p>\r\n\r\n<p>Phone: 019xxxxxxxx</p>\r\n\r\n<p>Name: Masiur Rahman</p>\r\n\r\n<p>Dept: CSE</p>\r\n\r\n<p>Phone: 017xxxxxxxx</p>\r\n\r\n<p>Name: Al Amin Shopoth</p>\r\n\r\n<p>Dept: BAN</p>\r\n\r\n<p>Phone: 019xxxxxxxx</p>', NULL, NULL, NULL),
(5, 'abcd', '<p>Name: Ashikul Shakil</p>\r\n\r\n<p>Dept: CSE</p>\r\n\r\n<p>Phone: 019xxxxxxxx</p>\r\n\r\n<p>Name: Masiur Rahman</p>\r\n\r\n<p>Dept: CSE</p>\r\n\r\n<p>Phone: 017xxxxxxxx</p>\r\n\r\n<p>Name: Al Amin Shopoth</p>\r\n\r\n<p>Dept: BAN</p>\r\n\r\n<p>Phone: 019xxxxxxxx</p>', NULL, NULL, NULL),
(6, 'jhsg', '<p>Name: Ashikul Shakil</p>\r\n\r\n<p>Dept: CSE</p>\r\n\r\n<p>Phone: 019xxxxxxxx</p>\r\n\r\n<p>Name: Masiur Rahman</p>\r\n\r\n<p>Dept: CSE</p>\r\n\r\n<p>Phone: 017xxxxxxxx</p>\r\n\r\n<p>Name: Al Amin Shopoth</p>\r\n\r\n<p>Dept: BAN</p>\r\n\r\n<p>Phone: 019xxxxxxxx</p>', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emergency_informations`
--

CREATE TABLE `emergency_informations` (
  `id` int(10) UNSIGNED NOT NULL,
  `emergency_info_admission` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emergency_informations`
--

INSERT INTO `emergency_informations` (`id`, `emergency_info_admission`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '<p>01.. Admission Test এর সময় প্রতিবছর জ্যাম থাকে । তাই, সেদিকে খেয়াল করে বের হবেন ।</p>\r\n\r\n<p>02.. অন্যান্য এলাকা থেকে সিলেট এ বেশী শীত থাকে, তাই সাবধানতা অবলম্বন করবেন ।</p>\r\n\r\n<p>03.. সিলেট পুলিশ এর নুম্বেরঃ 019xxxxxxxx.</p>\r\n\r\n<p>04.. সিলেট এ অবস্থিত ওসমানী মেডিকেল এর নাম্বারঃ 019xxxxx</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>যেকোনো প্রয়োজনে আমাদের সাথে যোগাযোগ করতে পারেন । আমাদের সাথে যোগাযোগ&nbsp; করার ঠিকানাঃ kabir110409@acc.edu.bd</p>', '2018-01-19 13:39:16', '2018-01-19 13:39:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_informations`
--

CREATE TABLE `hotel_informations` (
  `id` int(10) UNSIGNED NOT NULL,
  `hotel_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_informations`
--

INSERT INTO `hotel_informations` (`id`, `hotel_name`, `hotel_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hotel Noorjahan Grand', '<p>Featuring a fitness centre and a restaurant, Hotel Noorjahan Grand is situated in Sylhet. This 4-star hotel offers a 24-hour front desk, a concierge service and free WiFi.</p>\r\n\r\n<p>Location: Dorgah sharif, Ambarkhana</p>\r\n\r\n<p>Phone: 019xxxxxxxx</p>\r\n\r\n<p>email: nurjahan@gmail.com</p>', '2018-01-13 05:58:37', '2018-01-19 12:40:06', NULL),
(2, 'Hotel Holy Gate', '<p>Located just 500 metres from the holy Hazrat Shahjalal Mazar, Hotel Holy Gate operates a 24-hour front desk to help guests and offers free Wi-Fi throughout the property.</p>', '2018-01-13 06:19:27', '2018-01-19 12:43:19', NULL),
(3, 'All Season Lodge', '<p><a class=\"hotel_name_link url\" href=\"https://www.booking.com/hotel/bd/all-season-lodge.en-gb.html?aid=306395;label=sylhet-bd-TlBLnYhFGd2t0m_4hO2bmAS110121716549%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atikwd-66322003177%3Alp9069456%3Ali%3Adec%3Adm;sid=f4e4a217972f885a42408e40c1869ab9;ucfs=1;srpvid=bc678325819f0540;srepoch=1516387148;room1=A%2CA;hpos=4;hapos=4;dest_type=city;dest_id=900052126;srfid=76aeffdaf61e9fb61cbfcc7ff3185def2c94768bX4;from=searchresults;highlight_room=#hotelTmpl\" rel=\"noopener\" target=\"_blank\">All Season Lodge </a></p>\r\n\r\n<p>Situated in Sylhet, All Season Lodge offers 3-star accommodation with a terrace and on-site dining.</p>', '2018-01-19 13:28:36', '2018-01-19 13:29:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2017_11_22_204354_create_1511376234_roles_table', 1),
(3, '2017_11_22_204358_create_1511376237_users_table', 1),
(4, '2017_11_22_204359_add_5a15c56f57f4b_relationships_to_user_table', 1),
(5, '2017_11_22_204910_create_1511376550_transportations_table', 1),
(6, '2017_11_22_204957_create_1511376597_associations_table', 1),
(7, '2017_11_22_205043_create_1511376643_hotel_informations_table', 1),
(8, '2017_11_22_205135_create_1511376695_restaurant_infomations_table', 1),
(9, '2017_11_22_205609_create_1511376969_emergency_informations_table', 1),
(10, '2017_11_28_131450_update_1511867690_transportations_table', 1);

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
-- Table structure for table `restaurant_infomations`
--

CREATE TABLE `restaurant_infomations` (
  `id` int(10) UNSIGNED NOT NULL,
  `restaurant_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `restaurant_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant_infomations`
--

INSERT INTO `restaurant_infomations` (`id`, `restaurant_name`, `restaurant_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Palki Restaurant', '<p>Address: Shohir Plaza, East, Sylhet 3100<br />\r\nHours: Closed &sdot; Opens 6AM<br />\r\nPhone: 01715-396467</p>', '2018-01-13 05:58:57', '2018-01-19 13:30:44', NULL),
(2, 'Handi Restaurant And Party Center', '<p>Address: Karima Mansion, Hazrat Shahjalal Road, Sylhet 3100</p>\r\n\r\n<p>Phone: 01759-962096</p>', '2018-01-13 06:01:22', '2018-01-19 13:31:25', NULL),
(3, 'Panshi Restaurant', '<p>Address: Jallarpar Road Zindabazar, Sylhet 3100<br />\r\nHours: Closed &sdot; Opens 5:30AM</p>\r\n\r\n<p>Phone: 01761-152939</p>', '2018-01-19 13:31:57', '2018-01-19 13:31:57', NULL),
(4, 'Bhujon Bari', '<p>Address: Jallarpar Road, Zindabazar, Sylhet<br />\r\nHours: Closed &sdot; Opens 6AM<br />\r\nPhone: 01793-670000</p>', '2018-01-19 13:32:45', '2018-01-19 13:32:45', NULL),
(5, 'Spicy Restaurant', '<div class=\"_eFb\">\r\n<div class=\"_mr kno-fb-ctx\"><a class=\"fl\" href=\"https://www.google.com/search?client=firefox-b-ab&amp;site=async/lcl_akp&amp;q=spicy+restaurant+address&amp;stick=H4sIAAAAAAAAAOPgE-LVT9c3NEw3K6yoqDDK05LNTrbSz8lPTizJzM-DM6wSU1KKUouLASfoDQMwAAAA&amp;sa=X&amp;ved=0ahUKEwii_rrT4uTYAhUIvo8KHaa0C2cQ6BMIFTAD\">Address</a>: Main Road Hazrat Shahjalal Rd, Sylhet 3100 Hazrat Shahjalal Rd, Sylhet 3100</div>\r\n</div>', '2018-01-19 13:34:39', '2018-01-19 13:34:39', NULL),
(6, 'Pach Bhai Restaurant', '<p>Address: Dariapara Rd, Sylhet 3100<br />\r\nHours: Closed &sdot; Opens 5AM</p>\r\n\r\n<p>Phone: 01710-459607</p>', '2018-01-19 13:35:08', '2018-01-19 13:35:08', NULL),
(7, 'Hot Spot', '<p>Address: Jallarpar Rd, Sylhet<br />\r\nHours: Closed &sdot; Opens 11AM<br />\r\nPhone: 01955-517070</p>', '2018-01-19 13:35:43', '2018-01-19 13:35:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Administrator (can create other users)', '2018-01-13 05:50:00', '2018-01-13 05:50:00'),
(2, 'Simple user', '2018-01-13 05:50:00', '2018-01-13 05:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `transportations`
--

CREATE TABLE `transportations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `cost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_point` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transportations`
--

INSERT INTO `transportations` (`id`, `created_at`, `updated_at`, `deleted_at`, `cost`, `source`, `middle_point`, `destination`) VALUES
(1, '2018-01-13 05:57:58', '2018-01-13 05:57:58', NULL, '5', 'Modina Market point, Sylhet', 'NULL', 'Ambarkhana, সিলেট'),
(2, '2018-01-18 11:20:20', '2018-01-18 11:20:20', NULL, '10', 'Sylhet Bondor Bazaar, Mohajon Potti Road, সিলেট', 'c', 'SUST sylhet bd'),
(3, '2018-01-19 05:10:32', '2018-01-19 05:10:32', NULL, '15', 'কফিরাজ রেষ্টুরেন্ট, সিলেট - সুনামগঞ্জ মহাসড়ক, Sylhet', 'b', 'SUST, University Avenue, Sylhet'),
(4, '2018-01-19 05:10:53', '2018-01-19 05:11:11', NULL, '10', 'Ambarkhana Girls School and College, সিলেট', 'bb', 'SUST Sylhet BD'),
(5, NULL, NULL, NULL, '', 'Leading University, Bandar Bazar Road, সিলেট', '', 'সরকারি অগ্রগামী বালিকা উচ্চ বিদ্যালয় ও কলেজ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$2Nox0gPMMdvDolmIWNwHq.amnC8KVG84KkEre9PwkaguT3AIX8khq', 'jFVNtzkZbxjgCN4bQrNERl0EdeOpvsuyhEAHQdPn1pGJFF9Gb0hEpJgHEEJs', '2018-01-13 05:50:00', '2018-01-13 05:50:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `associations`
--
ALTER TABLE `associations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `associations_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `emergency_informations`
--
ALTER TABLE `emergency_informations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emergency_informations_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `hotel_informations`
--
ALTER TABLE `hotel_informations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_informations_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `restaurant_infomations`
--
ALTER TABLE `restaurant_infomations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurant_infomations_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportations`
--
ALTER TABLE `transportations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportations_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `91765_5a15c56e256f3` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `associations`
--
ALTER TABLE `associations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `emergency_informations`
--
ALTER TABLE `emergency_informations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel_informations`
--
ALTER TABLE `hotel_informations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `restaurant_infomations`
--
ALTER TABLE `restaurant_infomations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transportations`
--
ALTER TABLE `transportations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `91765_5a15c56e256f3` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
