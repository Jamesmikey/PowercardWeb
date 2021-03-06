-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 03:36 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `powercard`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20170902185636, 'CreateUsersTable', '2017-12-04 11:04:01', '2017-12-04 11:04:02', 0),
(20170902191019, 'CreateSliderImagesTable', '2017-12-04 11:04:02', '2017-12-04 11:04:02', 0),
(20170902191531, 'CreateServicesTable', '2017-12-04 11:04:02', '2017-12-04 11:04:02', 0),
(20170902191719, 'CreateServiceImagesTable', '2017-12-04 11:04:02', '2017-12-04 11:04:03', 0),
(20170902191904, 'CreateSiteSettingsTable', '2017-12-04 11:04:03', '2017-12-04 11:04:03', 0),
(20170902192013, 'CreateFeedbackTable', '2017-12-04 11:04:03', '2017-12-04 11:04:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `published`, `created_at`, `updated_at`) VALUES
(1, 'Photo Entry', 'We directly provide the photo entry services and system to schools for self on hand operations for real time accomplishment and output accuracy and quality and cost saving.', 'http://via.placeholder.com/600x300', 1, '2017-12-04 13:04:57', '2017-12-04 13:04:57'),
(2, 'ID Card Print and Design', 'High quality cards with medium and high security level upon clients requests for determining organizations/institution strength, ensuring cards long life span and makes cards unique with unique attractiveness Supply of all id cards printer consumables (ribbons, blank cards, contactless, rf-id and chip cards).', 'http://via.placeholder.com/600x300', 1, '2017-12-04 13:04:57', '2017-12-04 13:04:57'),
(3, 'Laboratory Chemical Supply', 'At low and competitive friendly price, you get quality and durable laboratory apparatus, devices, pure fine reagents and chemicals for accurate scientific practical experiments.', 'http://via.placeholder.com/600x300', 1, '2017-12-04 13:04:57', '2017-12-04 13:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `service_images`
--

CREATE TABLE `service_images` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `service_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tag_line` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `name`, `tag_line`, `about`, `created_at`, `updated_at`) VALUES
(1, 'Powercard Group Company Ltd', 'Real for you not just for you', 'Established for providing id card services and laboratory apparatus, reagents and fine chemicals for schools and organizations/institutions in advanced technology and competitive business platform.', '2017-12-04 13:04:57', '2017-12-04 13:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `email`, `position`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Jonathan', 'Robert', '0719000001', 'jonathan@powercard.co.tz', 'Managing Director', '81dc9bdb52d04dc20036dbd8313ed055', '2017-12-04 13:04:58', '2017-12-04 13:04:58'),
(2, 'Frank Michael', 'Mshana', '0719000002', 'frank@powercard.co.tz', 'Managing Director', '81dc9bdb52d04dc20036dbd8313ed055', '2017-12-04 13:04:58', '2017-12-04 13:04:58'),
(3, 'James', 'Michael', '0719000003', 'james@powercard.co.tz', 'ICT Director And Consultant', '81dc9bdb52d04dc20036dbd8313ed055', '2017-12-04 13:04:58', '2017-12-04 13:04:58'),
(4, 'Kelvin', 'Bina', '0719000004', 'kelvin@powercard.co.tz', 'Financial Management Advisor', '81dc9bdb52d04dc20036dbd8313ed055', '2017-12-04 13:04:58', '2017-12-04 13:04:58'),
(5, 'Godfrey', 'Kimambo', '0719000005', 'godfrey@powercard.co.tz', 'Body Member,Marketing And Logistic Manager', '81dc9bdb52d04dc20036dbd8313ed055', '2017-12-04 13:04:58', '2017-12-04 13:04:58'),
(6, 'Vivian', 'Kimambo', '0719000006', 'vivian@powercard.co.tz', 'Body Member', '81dc9bdb52d04dc20036dbd8313ed055', '2017-12-04 13:04:58', '2017-12-04 13:04:58'),
(7, 'Samwel', 'Chacha', '0719000007', 'samwel@powercard.co.tz', 'Body Member', '81dc9bdb52d04dc20036dbd8313ed055', '2017-12-04 13:04:58', '2017-12-04 13:04:58'),
(8, 'Mwita Joseph', 'Bina', '0719000008', 'mwita@powercard.co.tz', 'Body Member', '81dc9bdb52d04dc20036dbd8313ed055', '2017-12-04 13:04:58', '2017-12-04 13:04:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_images`
--
ALTER TABLE `service_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_images`
--
ALTER TABLE `service_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
