-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2022 at 09:40 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tryholpz_taleemi`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `faq_question` text NOT NULL,
  `faq_answer` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'ENABLED' COMMENT 'ENABLED,DISABLED'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_question`, `faq_answer`, `created_by`, `created_at`, `status`) VALUES
(1, 'Can any Student/Parent subscribe to Taalimi?', 'Only Students/Parents registered in Schools already listed in Taalimi website (www.taalimibahrain.com) can subscribe.', 1, '2022-03-28 05:18:25', 'ENABLED'),
(2, 'What does annual subscription fee means?', 'It means the cost of using Taalimi for the educational year selected.', 1, '2022-03-28 05:18:25', 'ENABLED'),
(3, 'Is your subscription refundable?', 'All subscriptions are non-refundable for Taalimi.', 0, '0000-00-00 00:00:00', 'ENABLED'),
(4, 'What if I joined mid of the term. Am I still going to pay full subscription?', 'YES, payment is for full or part of the educational year selected.', 0, '0000-00-00 00:00:00', 'ENABLED'),
(5, 'Is Taalimi Bahrain a private or Government entity?', 'Taalimi Bahrain is a commercial name of a private Bahraini legal entity, who is the sole distributor for valuetech Taalimi software products in Bahrain.', 0, '0000-00-00 00:00:00', 'ENABLED');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` varchar(22) NOT NULL DEFAULT 'ENABLED'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `full_name`, `username`, `password`, `status`) VALUES
(1, 'Admin Person', 'admin@admin.com', 'c4ca4238a0b923820dcc509a6f75849b', 'ENABLED');

-- --------------------------------------------------------

--
-- Table structure for table `pricerange`
--

CREATE TABLE `pricerange` (
  `id` int(10) UNSIGNED NOT NULL,
  `start_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(55) NOT NULL,
  `created_by` int(55) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pricerange`
--

INSERT INTO `pricerange` (`id`, `start_number`, `end_number`, `price`, `date`, `status`, `created_by`, `updated_on`) VALUES
(19, '1', '100', '100', '2022-04-12 09:04:12', 1, 1, '2022-04-11 04:38:31'),
(20, '101', '200', '200', '2022-04-12 09:04:12', 1, 1, '2022-04-11 04:38:44'),
(21, '201', '500', '500', '2022-04-12 09:04:12', 1, 1, '2022-04-12 09:55:56'),
(22, '501', '1000', '800', '2022-04-12 09:04:12', 1, 1, '2022-04-12 09:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `save_registration`
--

CREATE TABLE `save_registration` (
  `reg_id` int(11) NOT NULL,
  `company_name` text NOT NULL,
  `school_name` text NOT NULL,
  `school_address_building` text NOT NULL,
  `school_address_road` varchar(255) NOT NULL,
  `school_address_block` varchar(255) NOT NULL,
  `contact_number` text NOT NULL,
  `email_id` text NOT NULL,
  `no_of_students_school` int(11) NOT NULL,
  `no_of_teachers_school` int(11) NOT NULL,
  `education_type` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(22) NOT NULL DEFAULT 'CREATED'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `save_registration`
--

INSERT INTO `save_registration` (`reg_id`, `company_name`, `school_name`, `school_address_building`, `school_address_road`, `school_address_block`, `contact_number`, `email_id`, `no_of_students_school`, `no_of_teachers_school`, `education_type`, `created_at`, `status`) VALUES
(12, 'AMD', 'AMD School', 'School Address', '', '', '942141242', 'amd@gmail.com', 30, 33, 'boys', '2022-04-12 06:13:58', 'CREATED'),
(45, 'Companyy Name', 'sdaf', 'sdaf', '', '', '234213', 'add@gmail.com', 100, 4, 'boys', '2022-04-12 10:07:00', 'CREATED'),
(46, 'sdfas', 'fsadfs', 'sadfsd', '', '', '3452345', 'abdul@gmail.com', 56, 55, 'boys', '2022-04-12 10:07:30', 'CREATED'),
(47, 'India', 'Indian School', 'Indian School Address', '', '', '9988778899', 'indain@gmail.com', 20, 33, 'boys', '2022-04-12 10:11:23', 'CREATED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `pricerange`
--
ALTER TABLE `pricerange`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_registration`
--
ALTER TABLE `save_registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricerange`
--
ALTER TABLE `pricerange`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `save_registration`
--
ALTER TABLE `save_registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- INSERT INTO `faq_arb` (`faq_id`, `created_at`, `created_by`,`faq_answer`, `faq_question`,  `status`) VALUES
-- (1, 'هي يمكن لأي طالب/ولي أمر الإشتراك في تعليمي؟', ' يمكن حصريا للطلاب/أولياء الأمور المنتسبين للمدارس المعتمدين في قائمة المدارس على موقع تعليمي', 1, '2022-03-28 05:18:25', 'ENABLED'),
-- (2, 'ماذا يعني الإشتراك السنوي؟', 'الإشتراك السنوي هو المبلغ المدفوع لقاء استخدام خدمات ومميزات تطبيق تعليمي للسنة الدراسية المحددة من قبل المشترك', 1, '2022-03-28 05:18:25', 'ENABLED'),
-- (3, 'هل يمكن استرجاع النقد المدفوع للإشتراك؟', 'جميع إشتراكات برنامج تعليمي غير قابلة للإسترجاع', 0, '0000-00-00 00:00:00', 'ENABLED'),
-- (4, 'ماذا لو اشتركت خلال منتصف العام الدراسي. هل مازلت ملزما بدفع كامل الإشتراك؟', 'نعم، تدفع الإشتراكات لاستخدام خدمات البرنامج لكل السنة الدراسية المحددة أو جزء منها', 0, '0000-00-00 00:00:00', 'ENABLED'),
-- (5, 'هل تعليمي بحرين منشأة خاصة أم حكومية؟', 'تعليمي بحرين هو اسم تجاري لمنشأة قانونية مسجلة في البحرين، وهي الموزع الحصري في البحرين لبرامج تعليمي الخاصة  بشركة فاليوتيك', 0, '0000-00-00 00:00:00', 'ENABLED');