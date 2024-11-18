-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2024 at 06:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house_of_perfume`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_12_150929_create_products_table', 1),
(5, '2024_11_14_100446_add_usertype_and_phone_to_users_table', 1),
(6, '2024_11_15_054418_create_products_table', 2),
(7, '2024_11_15_203545_add_profile_photo_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Brand` varchar(255) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `Notes_Description` longtext DEFAULT NULL,
  `Ingredients` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Image`, `Name`, `Brand`, `Price`, `Description`, `Notes_Description`, `Ingredients`, `created_at`, `updated_at`) VALUES
(6, 'products/mttIcy4bo7URmes8P63b9pyWk4xRSOychrwN8Tvm.jpg', 'Eros EDP', 'Versace', '1866000', 'Eros Eau de Parfum is a fragrance that embodies excess and provocation, boldly revealing its extremes: the stark contrast between the citrusy and the delicate. \r\n\r\nRooted in the depth of its woody accord of cedar, vetiver, and patchouli, this foundation is ignited by the radiant, energetic light of the quintessentially Italian lemon and mandarin pairing, further enlivened by a unique note of candied apple.\r\n\r\nDecadent vanilla dares to flirt with leather in the final note, creating a fatal and provocative weapon with its distinctive intoxicating and creamy effects, its vibrant contours, all enhancing its oriental character.', 'Eros Pour Homme Eau de Parfum is a seductive fragrance inspired by the classical Greek God of love. Its confident and masculine notes embody sensuality and power. The fragrance is housed in a transparent blue bottle, adorned with a central Medusa, Greca engravings, and gold accents on the cap. To enhance the fragrance\'s longevity, apply it to key pulse points (neck, inner wrists, behind the ears, or chest). Avoid spraying the fragrance directly on delicate materials and jewelry, as this may cause damage.\r\n\r\nTop: Italian lemon and mandarin, mint oil, candied apple\r\nHeart: Geranium flower, Clary sage essence, AmberMax®\r\nBase: Cedarwood Atlas and Virginia, Vetiver Orpur® essence, Patchouli Coeur Orpur® essence, sandalwood, vanilla\r\nOlfactory family: Woody (earthy and natural with a forest-like quality), Oriental (warm and spicy with a touch of sweetness) & Fresh (bright and invigorating evoking a feeling of renewal)', 'ALCOHOL DENAT. (SD ALCOHOL 39-C), PARFUM (FRAGRANCE), AQUA (WATER), LIMONENE, LINALOOL, COUMARIN, ALPHA-ISOMETHYL IONONE, CITRAL, CITRONELLOL, GERANIOL, CINNAMAL, EUGENOL.', '2024-11-18 07:22:41', '2024-11-18 10:43:13'),
(7, 'products/R0WA7u6Df88fmfoMSX6JK1hN5Or1HpJde3E11iZY.jpg', 'JPG Le Male Le Parfum', 'Jean Paul Gaultier', '2200000', 'The latest men\'s fragrance by Jean Paul Gaultier, Le Male Le Parfum, is about to set sail! Dressed in a black and gold officer’s jacket, this intense eau de parfum is taking leadership of the Le Male range with great style and strength. An elegant woody oriental trail capturing the charisma and power of a leader. Attention sailors! The captain has arrived and we’re about to set sail.', 'Drawing on the potency of cardamom in its top notes and the freshness of lavender and iris at its heart, this intense eau de parfum ultimately promises to immerse you in its wonderfully addictive and prominent vanilla base note. An olfactory odyssey full of contrasts to disorient and delight the senses, its masculine trail revealing the charisma of an officer.\r\n\r\nTOP NOTES -> Cardamom, HEART NOTES -> Lavender & Iris, BASE NOTES -> Vanilla', 'ALCOHOL DENAT., PARFUM (FRAGRANCE), AQUA (WATER), COUMARIN, LINALOOL, ALPHA-ISOMETHYL IONONE, BUTYL METHOXYDIBENZOYLMETHANE, LIMONENE, CINNAMAL, GERANIOL.', '2024-11-18 10:44:53', '2024-11-18 10:44:53'),
(8, 'products/98Q7MQ9bIRuJTg3QQc1e3F3KxhywbozrIeg12IPw.jpg', 'YSL Y Eau De Parfum', 'Yves Saint Laurent', '2600000', 'Y Eau de Parfum is one of YSL\'s long-lasting men\'s perfumes. This best men\'s perfume is able to provide an intense depiction of Y\'s distinctive characteristics. Delivering luxurious aromas of bergamot, ginger and sage, enriched with the aroma of apple to provide a fresh woody sensation.\r\n\r\nThis long-lasting men\'s perfume has a Vetiver scent that reflects the unique desires and strengths of men. This iconic design packaging is the embodiment of modernity. With sharp and minimalist lines, it is complemented by a strong Y identity in every creative detail.\r\nThat\'s Y he will never stop!\r\n\r\nYSL Beauty, in its commitment to Reduce Our Impact, transformed the iconic Y Eau de Parfum bottle into a refillable one. By refilling Eau de Parfum bottles, you can help save 59%* on glass, 73%* on metal and 9%* on plastic. The Y Eau de Parfum 150ml refillable bottle allows refilling 10ml, 60ml and 100ml format bottles with the words \"refill\" on the outer packaging.', 'In the top notes there is bergamot which is refreshing like a morning welcome combined with the spicy sensation of ginger. This uplifting freshness, enriched with the aroma of crisp green apple, awakens the senses like a breath of fresh air. The middle notes are filled with contrasts: the calming notes of sage and juniper, dancing with the cool, elegant masculinity of geranium. This aromatic symphony, intertwined with the gentle whisper of lavender and the warmth of clary sage and coumarin, creates an alluring aura of masculinity.\r\nThe base notes deepen the aroma, revealing the captivating power of amber wood, intertwined with the mystical allure of olibanum. This powerful, resonant foundation, adheres to the skin, leaving an unforgettable imprint of modern masculine charm.\r\n\r\nEDGY: This perfume opens with a fresh splash of crisp green apple and bergamot like the morning sun, balanced by cool gin-like juniper berry notes.\r\n\r\nYCONIC: Y Eau de Parfum combines the essence of a typical fougère with notes of mint, litchi, lemongrass, and geranium—a more masculine family of roses. Lavender, a clean scent, combines with ambery clary sage and almond-like coumarin, creating a warm and sensual balance.\r\n\r\nWHITE: A bold step in masculine composition, Dominique Ropion enhances the freshness of lavender and geranium with aldehydes that are crisp like a freshly ironed shirt, enlivened with a touch of warm lemon ginger.\r\n\r\nBLACK: Dive into a sea of ​​mystery. Smoky vetiver and olibanum mineral essence create a seductive, dark base, enhanced by the warmth of elemi resin.\r\n\r\nTop Notes:\r\nApple\r\n\r\nMiddle Notes:\r\nGeranium, Sage\r\n\r\nBase Notes:\r\nSensual Wood', 'ALCOHOL ● PARFUM / FRAGRANCE ● AQUA / WATER ● LIMONENE ● LINALOOL ● BUTYL METHOXYDIBENZOYLMETHANE ● CITRAL ● CITRONELLOL ● ALPHA-ISOMETHYL IONONE ● GERANIOL ● COUMARIN ● CI 60730 / EXT. VIOLET 2 ● CI 15985 / YELLOW 6 ● CI 42090 / BLUE 1 ●', '2024-11-18 10:45:23', '2024-11-18 10:45:23'),
(9, 'products/H5wglhx1TR2e1cyJzIU3IV8HbE1LvhvJZ5D127eD.jpg', 'Y MYSLF Eau De Parfum', 'Yves Saint Laurent', '2600000', 'MYSLF, the refillable men\'s fragrance by Yves Saint Laurent. The first YSL Beauty woody floral fragrance with a unique, long-lasting trail of modernity. On top, a fresh & vibrant accord with sparkling bergamot, followed by a rich and intense orange blossom absolute heart from Tunisia. At the base, the scent is balanced by warm and sensual woods, including Indonesian patchouli and musky Ambrofix™. A statement of modern masculinity to celebrate your true self. Unapologetically. Proudly. A fragrance that seamlessly fuses with your skin, revealing a distinct signature for each individual. My scent, MYSLF.\r\n\r\nMYSLF is the expression of the man you are, with all of your emotions and nuances. A distinctly unique fragrance for those redefining what it means to be a man. A floral twist on a traditional woody fragrance. My scent, MYSLF.', 'Top Notes: Fresh Accord\r\nMiddle Notes: Orange Blossom Absolute Heart\r\nBase Notes: Woods Accord', 'ALCOHOL ● PARFUM / FRAGRANCE ● AQUA / WATER / EAU ● LIMONENE ● LINALOOL ● COUMARIN ● CITRONELLOL ● BUTYL METHOXYDIBENZOYLMETHANE ● ALPHA-ISOMETHYL IONONE ● CITRAL ● METHYL ANTHRANILATE ● GERANIOL ● CINNAMAL ● ISOEUGENOL ● FARNESOL ● CI 60730 / EXT. VIOLET 2 ● CI 14700 / RED 4 ● CI 19140 / YELLOW 5 ● CI 42090 / BLUE 1', '2024-11-18 10:49:32', '2024-11-18 10:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('NeEsOzPggRVUjQCtr1MRMxte0ywD09WfmIqjgaqT', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidXpDMjJ3a2pHckJvWXRmc2VTSGVET3czMXQxWWhiUkZwa0hYUXozQSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1731952205);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `phone` varchar(255) DEFAULT NULL,
  `profile_photo_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
