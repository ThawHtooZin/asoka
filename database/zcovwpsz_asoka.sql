-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 04, 2025 at 06:50 PM
-- Server version: 8.0.36-cll-lve
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zcovwpsz_asoka`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `answer_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer_text`, `is_correct`, `created_at`, `updated_at`) VALUES
(281, 71, 'Answer Option 1 for Question 71', 1, '2024-11-23 05:03:25', '2024-11-23 05:03:25'),
(282, 71, 'Answer Option 2 for Question 71', 0, '2024-11-23 05:03:25', '2024-11-23 05:03:25'),
(283, 71, 'Answer Option 3 for Question 71', 0, '2024-11-23 05:03:25', '2024-11-23 05:03:25'),
(284, 71, 'Answer Option 4 for Question 71', 0, '2024-11-23 05:03:25', '2024-11-23 05:03:25'),
(285, 72, 'Answer Option 1 for Question 72', 1, '2024-11-23 05:03:25', '2024-11-23 05:03:25'),
(286, 72, 'Answer Option 2 for Question 72', 0, '2024-11-23 05:03:25', '2024-11-23 05:03:25'),
(287, 72, 'Answer Option 3 for Question 72', 0, '2024-11-23 05:03:25', '2024-11-23 05:03:25'),
(288, 72, 'Answer Option 4 for Question 72', 0, '2024-11-23 05:03:25', '2024-11-23 05:03:25'),
(289, 73, 'Answer Option 1 for Question 73', 1, '2024-11-23 05:03:25', '2024-11-23 05:03:25'),
(290, 73, 'Answer Option 2 for Question 73', 0, '2024-11-23 05:03:25', '2024-11-23 05:03:25'),
(291, 73, 'Answer Option 3 for Question 73', 0, '2024-11-23 05:03:25', '2024-11-23 05:03:25'),
(292, 73, 'Answer Option 4 for Question 73', 0, '2024-11-23 05:03:25', '2024-11-23 05:03:25'),
(293, 74, 'Answer Option 1 for Question 74', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(294, 74, 'Answer Option 2 for Question 74', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(295, 74, 'Answer Option 3 for Question 74', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(296, 74, 'Answer Option 4 for Question 74', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(297, 75, 'Answer Option 1 for Question 75', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(298, 75, 'Answer Option 2 for Question 75', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(299, 75, 'Answer Option 3 for Question 75', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(300, 75, 'Answer Option 4 for Question 75', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(301, 76, 'Answer Option 1 for Question 76', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(302, 76, 'Answer Option 2 for Question 76', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(303, 76, 'Answer Option 3 for Question 76', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(304, 76, 'Answer Option 4 for Question 76', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(305, 77, 'Answer Option 1 for Question 77', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(306, 77, 'Answer Option 2 for Question 77', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(307, 77, 'Answer Option 3 for Question 77', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(308, 77, 'Answer Option 4 for Question 77', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(309, 78, 'Answer Option 1 for Question 78', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(310, 78, 'Answer Option 2 for Question 78', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(311, 78, 'Answer Option 3 for Question 78', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(312, 78, 'Answer Option 4 for Question 78', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(313, 79, 'Answer Option 1 for Question 79', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(314, 79, 'Answer Option 2 for Question 79', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(315, 79, 'Answer Option 3 for Question 79', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(316, 79, 'Answer Option 4 for Question 79', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(317, 80, 'Answer Option 1 for Question 80', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(318, 80, 'Answer Option 2 for Question 80', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(319, 80, 'Answer Option 3 for Question 80', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(320, 80, 'Answer Option 4 for Question 80', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(321, 81, 'Answer Option 1 for Question 81', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(322, 81, 'Answer Option 2 for Question 81', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(323, 81, 'Answer Option 3 for Question 81', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(324, 81, 'Answer Option 4 for Question 81', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(325, 82, 'Answer Option 1 for Question 82', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(326, 82, 'Answer Option 2 for Question 82', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(327, 82, 'Answer Option 3 for Question 82', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(328, 82, 'Answer Option 4 for Question 82', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(329, 83, 'Answer Option 1 for Question 83', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(330, 83, 'Answer Option 2 for Question 83', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(331, 83, 'Answer Option 3 for Question 83', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(332, 83, 'Answer Option 4 for Question 83', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(333, 84, 'Answer Option 1 for Question 84', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(334, 84, 'Answer Option 2 for Question 84', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(335, 84, 'Answer Option 3 for Question 84', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(336, 84, 'Answer Option 4 for Question 84', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(337, 85, 'Answer Option 1 for Question 85', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(338, 85, 'Answer Option 2 for Question 85', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(339, 85, 'Answer Option 3 for Question 85', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(340, 85, 'Answer Option 4 for Question 85', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(341, 86, 'Answer Option 1 for Question 86', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(342, 86, 'Answer Option 2 for Question 86', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(343, 86, 'Answer Option 3 for Question 86', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(344, 86, 'Answer Option 4 for Question 86', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(345, 87, 'Answer Option 1 for Question 87', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(346, 87, 'Answer Option 2 for Question 87', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(347, 87, 'Answer Option 3 for Question 87', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(348, 87, 'Answer Option 4 for Question 87', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(349, 88, 'Answer Option 1 for Question 88', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(350, 88, 'Answer Option 2 for Question 88', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(351, 88, 'Answer Option 3 for Question 88', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(352, 88, 'Answer Option 4 for Question 88', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(353, 89, 'Answer Option 1 for Question 89', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(354, 89, 'Answer Option 2 for Question 89', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(355, 89, 'Answer Option 3 for Question 89', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(356, 89, 'Answer Option 4 for Question 89', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(357, 90, 'Answer Option 1 for Question 90', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(358, 90, 'Answer Option 2 for Question 90', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(359, 90, 'Answer Option 3 for Question 90', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(360, 90, 'Answer Option 4 for Question 90', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(361, 91, 'Answer Option 1 for Question 91', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(362, 91, 'Answer Option 2 for Question 91', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(363, 91, 'Answer Option 3 for Question 91', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(364, 91, 'Answer Option 4 for Question 91', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(365, 92, 'Answer Option 1 for Question 92', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(366, 92, 'Answer Option 2 for Question 92', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(367, 92, 'Answer Option 3 for Question 92', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(368, 92, 'Answer Option 4 for Question 92', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(369, 93, 'Answer Option 1 for Question 93', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(370, 93, 'Answer Option 2 for Question 93', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(371, 93, 'Answer Option 3 for Question 93', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(372, 93, 'Answer Option 4 for Question 93', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(373, 94, 'Answer Option 1 for Question 94', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(374, 94, 'Answer Option 2 for Question 94', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(375, 94, 'Answer Option 3 for Question 94', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(376, 94, 'Answer Option 4 for Question 94', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(377, 95, 'Answer Option 1 for Question 95', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(378, 95, 'Answer Option 2 for Question 95', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(379, 95, 'Answer Option 3 for Question 95', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(380, 95, 'Answer Option 4 for Question 95', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(381, 96, 'Answer Option 1 for Question 96', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(382, 96, 'Answer Option 2 for Question 96', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(383, 96, 'Answer Option 3 for Question 96', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(384, 96, 'Answer Option 4 for Question 96', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(385, 97, 'Answer Option 1 for Question 97', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(386, 97, 'Answer Option 2 for Question 97', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(387, 97, 'Answer Option 3 for Question 97', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(388, 97, 'Answer Option 4 for Question 97', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(389, 98, 'Answer Option 1 for Question 98', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(390, 98, 'Answer Option 2 for Question 98', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(391, 98, 'Answer Option 3 for Question 98', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(392, 98, 'Answer Option 4 for Question 98', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(393, 99, 'Answer Option 1 for Question 99', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(394, 99, 'Answer Option 2 for Question 99', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(395, 99, 'Answer Option 3 for Question 99', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(396, 99, 'Answer Option 4 for Question 99', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(397, 100, 'Answer Option 1 for Question 100', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(398, 100, 'Answer Option 2 for Question 100', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(399, 100, 'Answer Option 3 for Question 100', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(400, 100, 'Answer Option 4 for Question 100', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(401, 101, 'Answer Option 1 for Question 101', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(402, 101, 'Answer Option 2 for Question 101', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(403, 101, 'Answer Option 3 for Question 101', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(404, 101, 'Answer Option 4 for Question 101', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(405, 102, 'Answer Option 1 for Question 102', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(406, 102, 'Answer Option 2 for Question 102', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(407, 102, 'Answer Option 3 for Question 102', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(408, 102, 'Answer Option 4 for Question 102', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(409, 103, 'Answer Option 1 for Question 103', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(410, 103, 'Answer Option 2 for Question 103', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(411, 103, 'Answer Option 3 for Question 103', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(412, 103, 'Answer Option 4 for Question 103', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(413, 104, 'Answer Option 1 for Question 104', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(414, 104, 'Answer Option 2 for Question 104', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(415, 104, 'Answer Option 3 for Question 104', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(416, 104, 'Answer Option 4 for Question 104', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(417, 105, 'Answer Option 1 for Question 105', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(418, 105, 'Answer Option 2 for Question 105', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(419, 105, 'Answer Option 3 for Question 105', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(420, 105, 'Answer Option 4 for Question 105', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(421, 106, 'Answer Option 1 for Question 106', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(422, 106, 'Answer Option 2 for Question 106', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(423, 106, 'Answer Option 3 for Question 106', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(424, 106, 'Answer Option 4 for Question 106', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(425, 107, 'Answer Option 1 for Question 107', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(426, 107, 'Answer Option 2 for Question 107', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(427, 107, 'Answer Option 3 for Question 107', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(428, 107, 'Answer Option 4 for Question 107', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(429, 108, 'Answer Option 1 for Question 108', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(430, 108, 'Answer Option 2 for Question 108', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(431, 108, 'Answer Option 3 for Question 108', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(432, 108, 'Answer Option 4 for Question 108', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(433, 109, 'Answer Option 1 for Question 109', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(434, 109, 'Answer Option 2 for Question 109', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(435, 109, 'Answer Option 3 for Question 109', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(436, 109, 'Answer Option 4 for Question 109', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(437, 110, 'Answer Option 1 for Question 110', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(438, 110, 'Answer Option 2 for Question 110', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(439, 110, 'Answer Option 3 for Question 110', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(440, 110, 'Answer Option 4 for Question 110', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(441, 111, 'Answer Option 1 for Question 111', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(442, 111, 'Answer Option 2 for Question 111', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(443, 111, 'Answer Option 3 for Question 111', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(444, 111, 'Answer Option 4 for Question 111', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(445, 112, 'Answer Option 1 for Question 112', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(446, 112, 'Answer Option 2 for Question 112', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(447, 112, 'Answer Option 3 for Question 112', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(448, 112, 'Answer Option 4 for Question 112', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(449, 113, 'Answer Option 1 for Question 113', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(450, 113, 'Answer Option 2 for Question 113', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(451, 113, 'Answer Option 3 for Question 113', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(452, 113, 'Answer Option 4 for Question 113', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(453, 114, 'Answer Option 1 for Question 114', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(454, 114, 'Answer Option 2 for Question 114', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(455, 114, 'Answer Option 3 for Question 114', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(456, 114, 'Answer Option 4 for Question 114', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(457, 115, 'Answer Option 1 for Question 115', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(458, 115, 'Answer Option 2 for Question 115', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(459, 115, 'Answer Option 3 for Question 115', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(460, 115, 'Answer Option 4 for Question 115', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(461, 116, 'Answer Option 1 for Question 116', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(462, 116, 'Answer Option 2 for Question 116', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(463, 116, 'Answer Option 3 for Question 116', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(464, 116, 'Answer Option 4 for Question 116', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(465, 117, 'Answer Option 1 for Question 117', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(466, 117, 'Answer Option 2 for Question 117', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(467, 117, 'Answer Option 3 for Question 117', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(468, 117, 'Answer Option 4 for Question 117', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(469, 118, 'Answer Option 1 for Question 118', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(470, 118, 'Answer Option 2 for Question 118', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(471, 118, 'Answer Option 3 for Question 118', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(472, 118, 'Answer Option 4 for Question 118', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(473, 119, 'Answer Option 1 for Question 119', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(474, 119, 'Answer Option 2 for Question 119', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(475, 119, 'Answer Option 3 for Question 119', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(476, 119, 'Answer Option 4 for Question 119', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(477, 120, 'Answer Option 1 for Question 120', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(478, 120, 'Answer Option 2 for Question 120', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(479, 120, 'Answer Option 3 for Question 120', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(480, 120, 'Answer Option 4 for Question 120', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(481, 121, 'Answer Option 1 for Question 121', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(482, 121, 'Answer Option 2 for Question 121', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(483, 121, 'Answer Option 3 for Question 121', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(484, 121, 'Answer Option 4 for Question 121', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(485, 122, 'Answer Option 1 for Question 122', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(486, 122, 'Answer Option 2 for Question 122', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(487, 122, 'Answer Option 3 for Question 122', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(488, 122, 'Answer Option 4 for Question 122', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(489, 123, 'Answer Option 1 for Question 123', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(490, 123, 'Answer Option 2 for Question 123', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(491, 123, 'Answer Option 3 for Question 123', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(492, 123, 'Answer Option 4 for Question 123', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(493, 124, 'Answer Option 1 for Question 124', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(494, 124, 'Answer Option 2 for Question 124', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(495, 124, 'Answer Option 3 for Question 124', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(496, 124, 'Answer Option 4 for Question 124', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(497, 125, 'Answer Option 1 for Question 125', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(498, 125, 'Answer Option 2 for Question 125', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(499, 125, 'Answer Option 3 for Question 125', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(500, 125, 'Answer Option 4 for Question 125', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(501, 126, 'Answer Option 1 for Question 126', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(502, 126, 'Answer Option 2 for Question 126', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(503, 126, 'Answer Option 3 for Question 126', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(504, 126, 'Answer Option 4 for Question 126', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(505, 127, 'Answer Option 1 for Question 127', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(506, 127, 'Answer Option 2 for Question 127', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(507, 127, 'Answer Option 3 for Question 127', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(508, 127, 'Answer Option 4 for Question 127', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(509, 128, 'Answer Option 1 for Question 128', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(510, 128, 'Answer Option 2 for Question 128', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(511, 128, 'Answer Option 3 for Question 128', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(512, 128, 'Answer Option 4 for Question 128', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(513, 129, 'Answer Option 1 for Question 129', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(514, 129, 'Answer Option 2 for Question 129', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(515, 129, 'Answer Option 3 for Question 129', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(516, 129, 'Answer Option 4 for Question 129', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(517, 130, 'Answer Option 1 for Question 130', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(518, 130, 'Answer Option 2 for Question 130', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(519, 130, 'Answer Option 3 for Question 130', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(520, 130, 'Answer Option 4 for Question 130', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(521, 131, 'Answer Option 1 for Question 131', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(522, 131, 'Answer Option 2 for Question 131', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(523, 131, 'Answer Option 3 for Question 131', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(524, 131, 'Answer Option 4 for Question 131', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(525, 132, 'Answer Option 1 for Question 132', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(526, 132, 'Answer Option 2 for Question 132', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(527, 132, 'Answer Option 3 for Question 132', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(528, 132, 'Answer Option 4 for Question 132', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(529, 133, 'Answer Option 1 for Question 133', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(530, 133, 'Answer Option 2 for Question 133', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(531, 133, 'Answer Option 3 for Question 133', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(532, 133, 'Answer Option 4 for Question 133', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(533, 134, 'Answer Option 1 for Question 134', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(534, 134, 'Answer Option 2 for Question 134', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(535, 134, 'Answer Option 3 for Question 134', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(536, 134, 'Answer Option 4 for Question 134', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(537, 135, 'Answer Option 1 for Question 135', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(538, 135, 'Answer Option 2 for Question 135', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(539, 135, 'Answer Option 3 for Question 135', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(540, 135, 'Answer Option 4 for Question 135', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(541, 136, 'Answer Option 1 for Question 136', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(542, 136, 'Answer Option 2 for Question 136', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(543, 136, 'Answer Option 3 for Question 136', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(544, 136, 'Answer Option 4 for Question 136', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(545, 137, 'Answer Option 1 for Question 137', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(546, 137, 'Answer Option 2 for Question 137', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(547, 137, 'Answer Option 3 for Question 137', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(548, 137, 'Answer Option 4 for Question 137', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(549, 138, 'Answer Option 1 for Question 138', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(550, 138, 'Answer Option 2 for Question 138', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(551, 138, 'Answer Option 3 for Question 138', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(552, 138, 'Answer Option 4 for Question 138', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(553, 139, 'Answer Option 1 for Question 139', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(554, 139, 'Answer Option 2 for Question 139', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(555, 139, 'Answer Option 3 for Question 139', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(556, 139, 'Answer Option 4 for Question 139', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(557, 140, 'Answer Option 1 for Question 140', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(558, 140, 'Answer Option 2 for Question 140', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(559, 140, 'Answer Option 3 for Question 140', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(560, 140, 'Answer Option 4 for Question 140', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(561, 141, 'Answer Option 1 for Question 141', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(562, 141, 'Answer Option 2 for Question 141', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(563, 141, 'Answer Option 3 for Question 141', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(565, 142, 'Answer Option 1 for Question 142', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(566, 142, 'Answer Option 2 for Question 142', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(567, 142, 'Answer Option 3 for Question 142', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(568, 142, 'Answer Option 4 for Question 142', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(569, 143, 'Answer Option 1 for Question 143', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(570, 143, 'Answer Option 2 for Question 143', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(571, 143, 'Answer Option 3 for Question 143', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(572, 143, 'Answer Option 4 for Question 143', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(573, 144, 'Answer Option 1 for Question 144', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(574, 144, 'Answer Option 2 for Question 144', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(575, 144, 'Answer Option 3 for Question 144', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(576, 144, 'Answer Option 4 for Question 144', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(577, 145, 'Answer Option 1 for Question 145', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(578, 145, 'Answer Option 2 for Question 145', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(579, 145, 'Answer Option 3 for Question 145', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(580, 145, 'Answer Option 4 for Question 145', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(581, 146, 'Answer Option 1 for Question 146', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(582, 146, 'Answer Option 2 for Question 146', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(583, 146, 'Answer Option 3 for Question 146', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(584, 146, 'Answer Option 4 for Question 146', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(585, 147, 'Answer Option 1 for Question 147', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(586, 147, 'Answer Option 2 for Question 147', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(587, 147, 'Answer Option 3 for Question 147', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(588, 147, 'Answer Option 4 for Question 147', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(589, 148, 'Answer Option 1 for Question 148', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(590, 148, 'Answer Option 2 for Question 148', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(591, 148, 'Answer Option 3 for Question 148', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(592, 148, 'Answer Option 4 for Question 148', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(593, 149, 'Answer Option 1 for Question 149', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(594, 149, 'Answer Option 2 for Question 149', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(595, 149, 'Answer Option 3 for Question 149', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(596, 149, 'Answer Option 4 for Question 149', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(597, 150, 'Answer Option 1 for Question 150', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(598, 150, 'Answer Option 2 for Question 150', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(599, 150, 'Answer Option 3 for Question 150', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(600, 150, 'Answer Option 4 for Question 150', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(601, 151, 'Answer Option 1 for Question 151', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(602, 151, 'Answer Option 2 for Question 151', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(603, 151, 'Answer Option 3 for Question 151', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(604, 151, 'Answer Option 4 for Question 151', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(605, 152, 'Answer Option 1 for Question 152', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(606, 152, 'Answer Option 2 for Question 152', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(607, 152, 'Answer Option 3 for Question 152', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(608, 152, 'Answer Option 4 for Question 152', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(609, 153, 'Answer Option 1 for Question 153', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(610, 153, 'Answer Option 2 for Question 153', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(611, 153, 'Answer Option 3 for Question 153', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(612, 153, 'Answer Option 4 for Question 153', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(613, 154, 'Answer Option 1 for Question 154', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(614, 154, 'Answer Option 2 for Question 154', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(615, 154, 'Answer Option 3 for Question 154', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(616, 154, 'Answer Option 4 for Question 154', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(617, 155, 'Answer Option 1 for Question 155', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(618, 155, 'Answer Option 2 for Question 155', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(619, 155, 'Answer Option 3 for Question 155', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(620, 155, 'Answer Option 4 for Question 155', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(621, 156, 'Answer Option 1 for Question 156', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(622, 156, 'Answer Option 2 for Question 156', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(623, 156, 'Answer Option 3 for Question 156', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(624, 156, 'Answer Option 4 for Question 156', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(625, 157, 'Answer Option 1 for Question 157', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(626, 157, 'Answer Option 2 for Question 157', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(627, 157, 'Answer Option 3 for Question 157', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(628, 157, 'Answer Option 4 for Question 157', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(629, 158, 'Answer Option 1 for Question 158', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(630, 158, 'Answer Option 2 for Question 158', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(631, 158, 'Answer Option 3 for Question 158', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(632, 158, 'Answer Option 4 for Question 158', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(633, 159, 'Answer Option 1 for Question 159', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(634, 159, 'Answer Option 2 for Question 159', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(635, 159, 'Answer Option 3 for Question 159', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(636, 159, 'Answer Option 4 for Question 159', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(637, 160, 'Answer Option 1 for Question 160', 1, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(638, 160, 'Answer Option 2 for Question 160', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(639, 160, 'Answer Option 3 for Question 160', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(640, 160, 'Answer Option 4 for Question 160', 0, '2024-11-23 05:03:26', '2024-11-23 05:03:26'),
(642, 175, 'asdfadfs', 1, '2024-12-12 09:38:48', '2024-12-12 09:38:48'),
(643, 175, 'asdfasdfasdfasdf', 0, '2024-12-12 09:38:55', '2024-12-12 09:38:55'),
(644, 175, 'asdfasdfasdf', 0, '2024-12-12 09:38:59', '2024-12-12 09:38:59'),
(645, 175, 'HEHEHE', 0, '2024-12-12 09:39:02', '2024-12-12 09:39:02'),
(646, 141, 'Answer Option 4 for QUestion 141', 0, '2024-12-12 10:10:24', '2024-12-12 10:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `article_category_id` bigint UNSIGNED NOT NULL,
  `article_type` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `intro`, `pdf_url`, `user_id`, `article_category_id`, `article_type`, `created_at`, `updated_at`) VALUES
(21, 'The Great Benefactors in Myanmar Buddhist Culture', 'Myanmar is the most prominent Buddhist country in Southeast Asia and is located between\r\nIndia, China, Thailand, and Laos. Around 89% of the population practice and follow Theravada\r\nBuddhism.', 'uploads/articles/7Jj32uj5KuiWXG4WxAQVAifNIck7O5jXhpmmoVni.pdf', 1, 9, 'article', '2024-12-02 08:53:12', '2025-02-08 14:59:09'),
(22, 'Buddhist Perspectives on  Three Types  of Calamities  and  Effect on  Environment', 'Buddhists hold a wide range of environmental ideas. They hold that nature is neither \r\ngood nor evil and that humans and it must coexist. Buddhists devoted to everything in nature \r\nbecause they appreciate all lives. That is the general faith for all Buddhists. However, later on, \r\ndue to the lobha (greed); Dosa (anger or hatred) and Moha (ignorance or delusion), increasing \r\namong the society, and people starting to face a lot of troubles we can see in present world \r\ntoday.', 'uploads/articles/4KnuWrlrn760OgrrnbMy8yXh5a0QGYGlVU0taDJp.pdf', 1, 9, 'article', '2024-12-02 11:19:44', '2024-12-02 11:19:44'),
(25, 'Community Well-Being and Pali Paritta Chants', 'Community Well\r\nBeing and Pali Paritta Chants: The \r\nProtective Role of Pali Verses in Myanmar\'s Lay \r\nCommunities', 'uploads/articles/LRY6FN3imzBuwafLviZbSAcaf5FwDks23HD9139D.pdf', 1, 9, 'researcharticle', '2024-12-15 04:24:46', '2024-12-15 04:26:05'),
(26, 'Life of Buddhist Nuns in Myanmar', 'Life of Buddhist Nuns in Myanmar', 'uploads/articles/2XSxwqhkSBhqVfn7WZz36YbwlYJiroxCVag71pqR.pdf', 1, 9, 'researcharticle', '2024-12-15 04:25:11', '2024-12-15 04:25:18'),
(27, 'Cultural_and_Religious_Evolution_of_the_Pyu_and_Bagan_Dynasties', 'Cultural_and_Religious_Evolution_of_the_Pyu_and_Bagan_Dynasties', 'uploads/articles/5CaYHI1w48FzRWq5W7zaJTyPLTzNjdn8veePln85.pdf', 1, 9, 'researcharticle', '2024-12-15 04:26:24', '2024-12-15 04:26:24'),
(28, 'Cultural Lifestyle of Myanmar', 'Cultural Lifestyle of Myanmar', 'uploads/articles/M2lw3XP44LsIVMdltoUjt4Jrx2lmKx1PtFJ2CaX5.pdf', 1, 9, 'researcharticle', '2024-12-15 04:26:42', '2024-12-15 04:26:42'),
(29, 'Global Recovery and Our Responsibilities', 'Global Recovery and Our Responsibilities', 'uploads/articles/aVOaZKlHC9SbmL8RKaY6Ve5haMF5vynpVaQozpxW.pdf', 1, 9, 'researcharticle', '2024-12-15 04:27:09', '2024-12-15 04:27:09'),
(30, 'Buddhist Ethics and Values in Myanmar', 'Buddhist Ethics and Values in Myanmar', 'uploads/articles/5BN5yAaHA1dM4HBdMMW2BqucXh95OfvI1wfsexkW.pdf', 1, 9, 'researcharticle', '2024-12-15 04:27:26', '2024-12-15 04:27:26'),
(31, 'IHMS Paper', 'IHMS Paper', 'uploads/articles/hU5PoCe0hT7ZyLx459pTSlv3UMit5AA4kdk8v3DO.pdf', 1, 9, 'researcharticle', '2024-12-15 04:27:50', '2024-12-15 04:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `article_categories`
--

CREATE TABLE `article_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_categories`
--

INSERT INTO `article_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(9, 'ဗုဒ္ဓဝင်', '2024-11-05 04:07:17', '2024-11-05 04:07:17'),
(10, 'ဇာတ်ကြီး ဆယ် ဘွဲ့', '2024-11-05 04:07:58', '2024-11-05 04:07:58'),
(11, '၅၅၀ ဇာတ်နိပါတ်', '2024-11-05 04:08:24', '2024-11-05 04:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint NOT NULL DEFAULT '0',
  `book_category_id` bigint UNSIGNED NOT NULL,
  `cover_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `isbn`, `description`, `price`, `book_category_id`, `cover_image`, `book_url`, `created_at`, `updated_at`) VALUES
(13, 'Asoka ; beloved of the god', 'S. Veeranarayana Reddy', '111-1-11-111111-2', 'description of the book....', 100, 1, '/images/coverimage/1739087977.png', 'books/Asoka ; beloved of the god.pdf', '2024-12-05 11:13:34', '2025-02-09 07:29:38'),
(14, 'Buddha and his teachings', 'Narada', '111-1-11-111111-3', 'Description of the book....', 0, 1, '/images/coverimage/1739088232.png', 'books/Buddha and his teachings.pdf', '2024-12-05 11:28:38', '2025-02-09 07:33:53'),
(15, 'Buddhism_in_Myanmar', 'Roger Bischoff', '955-24-0127-5', 'Description of the book....', 100, 1, '/images/coverimage/1739088258.png', 'books/Buddhism_in_Myanmar.pdf', '2024-12-05 11:31:38', '2025-02-09 07:34:18'),
(16, 'Buddhism and Culture', 'Susumu Yamaguchi', '111-1-11-111111-4', 'Description of the book....', 0, 1, '/images/coverimage/1739088266.png', 'books/Buddhism and culture.pdf', '2024-12-05 11:34:11', '2025-02-09 07:34:26'),
(17, 'the 7stage of purifications', 'the 7stage of purifications.pdf', '111-1-11-111111-5', 'Description of the book....', 0, 1, '/images/coverimage/1739088311.png', 'books/the 7stage of purifications.pdf', '2024-12-05 11:35:33', '2025-02-09 07:35:11'),
(18, 'buddhism in a nutshell', 'Ven. Narada, Thera', '111-1-11-111111-6', 'Description of the book....', 0, 1, '/images/coverimage/1739088303.png', 'books/buddhism in a nutshell.pdf', '2024-12-05 11:39:34', '2025-02-09 07:35:03'),
(19, 'Way to practice Vipassana Meditation', 'Sayadaw U Pandita', '111-1-11-111111-7', 'Description of the book....', 0, 1, '/images/coverimage/1739088323.png', 'books/Way to practice Vipassana Meditation.pdf', '2024-12-05 11:48:07', '2025-02-09 07:35:24'),
(20, 'women under premative Buddhsim', 'Isaline Blew Horner', '111-1-11-111111-8', 'Description of the book....', 0, 1, '/images/coverimage/1739088334.png', 'books/women under premative Buddhsim.pdf', '2024-12-05 11:50:20', '2025-02-09 07:35:34'),
(21, 'words of the Buddha (Dr. Min tim mon)', 'Dr. Min tim mon', '111-1-11-111111-9', 'Description of the book....', 0, 1, '/images/coverimage/1739088345.png', 'books/words of the Buddha (Dr. Min tim mon).pdf', '2024-12-05 11:51:49', '2025-02-09 07:35:46'),
(22, 'The Four Essential Doctrine of Buddhism', 'Dr. C. L. A. de SILVA', '111-1-11-111112-0', 'Description of the book....', 0, 1, '/images/coverimage/1739088357.png', 'books/The Four Essential Doctrine of Buddhism.pdf', '2024-12-05 11:54:08', '2025-02-09 07:35:58'),
(23, 'Others-Dr.K.SriDhammanandaWhatBuddhistsBelieve', 'Dr. K. Sri Dhammananda', '111-1-11-111112-1', 'Description of the book....', 0, 1, '/images/coverimage/1739088374.png', 'books/Others-Dr.K.SriDhammanandaWhatBuddhistsBelieve.pdf', '2024-12-05 11:56:30', '2025-02-09 07:36:16'),
(24, 'Maha Paritta sutta', 'Venerable U Panna Vamsa (Dhammacariya)', '111-1-11-111112-2', 'Description of the book....', 0, 1, '/images/coverimage/1739088388.png', 'books/Maha Paritta sutta.pdf', '2024-12-05 11:57:44', '2025-02-09 07:36:29'),
(25, 'Hiuen Tsing', 'Samuel Beal', '111-1-11-111112-3', 'Description of the book....', 0, 1, '/images/coverimage/1739088400.png', 'books/Hiuen Tsing.pdf', '2024-12-05 12:03:28', '2025-02-09 07:36:42'),
(26, 'Pali-English Dictionary Free', 'Thomas William Rhys Davids and William Stede', '111-1-11-111112-4', 'Description of the book....', 0, 1, '/images/coverimage/1739088412.png', 'books/Pali-English Dictionary Free.pdf', '2024-12-05 12:04:36', '2025-02-09 07:36:52'),
(27, 'four foundation of mindfulness', 'Sayadaw U Silananda', '111-1-11-111112-5', 'Description of the book....', 0, 1, '/images/coverimage/1739088422.png', 'books/four foundation of mindfulness.pdf', '2024-12-05 12:05:58', '2025-02-09 07:37:03'),
(28, 'How_to live as a good buddhsit 1', 'Translated by U Han Htay And U Chit Tin', '111-1-11-111112-6', 'Description of the book....', 0, 1, '/images/coverimage/1739088447.png', 'books/How_to live as a good buddhsit 1.pdf', '2024-12-05 12:10:36', '2025-02-09 07:37:27'),
(29, 'Abhidhamma_in_daily_life_Janaka', 'Ashin Janakabhivamsa', '111-1-11-111112-7', 'Description of the book....', 0, 1, '/images/coverimage/1739088456.png', 'books/Abhidhamma_in_daily_life_Janaka.pdf', '2024-12-05 12:11:33', '2025-02-09 07:37:36'),
(30, 'Dr-Nandamala-Kama-at-death-and-rebirth', 'Sayardaw Dr. Nandamalabhivamsa', '111-1-11-111112-7', 'Description of the book....', 0, 1, '/images/coverimage/1739088456.png', 'books/Dr-Nandamala-Kama-at-death-and-rebirth.pdf', '2024-12-05 12:12:43', '2024-12-05 12:12:43'),
(31, '2500.Years.of.Buddhism.by.Prof.P.Y.Bapat.1956', 'Prof. P. V. Bapat', '111-1-11-111112-8', 'Description of the book....', 0, 1, '/images/coverimage/1739088456.png', 'books/2500.Years.of.Buddhism.by.Prof.P.Y.Bapat.1956.pdf', '2024-12-05 12:14:06', '2025-01-03 09:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `book_categories`
--

CREATE TABLE `book_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_categories`
--

INSERT INTO `book_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'category1', '2024-10-31 11:09:42', '2024-10-31 11:09:42'),
(2, 'Category2', '2024-11-10 00:30:46', '2024-11-10 00:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `book_purchases`
--

CREATE TABLE `book_purchases` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `payment_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_purchases`
--

INSERT INTO `book_purchases` (`id`, `user_id`, `book_id`, `payment_image`, `status`, `created_at`, `updated_at`) VALUES
(29, 1, 15, '/images/payments/PxLlGxmVXKKcCVbAvn8p4jenBBQznofPaf5HCPgf.png', 'achived', '2024-12-05 12:25:03', '2024-12-05 12:35:51'),
(30, 1, 13, '/images/payments/CNapl8vESKrQ7t4NlahN5Ilbxy36UYZ4lcQWc354.png', 'achived', '2024-12-05 12:36:43', '2024-12-05 12:36:56'),
(31, 13, 13, '/images/payments/N4AoSXGxzukg5ezlhigtiAbDdS9EtVI47ShFHdEp.jpg', 'confirmed', '2024-12-10 05:31:47', '2024-12-10 05:32:26'),
(32, 6, 13, '/images/payments/dC7Y3ZER6y4Eja8tTznJ8kQxRUNT2cl9bZDr17Di.jpg', 'requested', '2024-12-12 06:11:35', '2024-12-12 06:11:35'),
(33, 16, 13, '/images/payments/6hFL3qxEeMEicEtV6jMOr8RvKjN88f9D5h0FZzGF.jpg', 'confirmed', '2024-12-17 14:56:19', '2024-12-17 14:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `course_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `title`, `description`, `course_id`, `created_at`, `updated_at`) VALUES
(31, 'The Life of Buddha Associated with Ground Condition', 'The Life of Buddha Associated with Ground Condition', 16, '2024-12-15 04:43:34', '2024-12-15 04:43:34'),
(32, 'Chapter 1', 'description', 23, '2024-12-17 12:37:02', '2024-12-17 12:37:02'),
(33, 'Chapter 2', 'description', 23, '2024-12-17 12:37:17', '2024-12-17 12:37:17'),
(35, 'Grade 7 Chapter 1', 'description', 25, '2024-12-17 15:35:28', '2024-12-17 15:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `course_category_id` bigint UNSIGNED NOT NULL,
  `language` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL DEFAULT '0',
  `rating` double NOT NULL DEFAULT '5',
  `enrolled` int NOT NULL DEFAULT '0',
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `image`, `user_id`, `course_category_id`, `language`, `duration`, `price`, `rating`, `enrolled`, `status`, `created_at`, `updated_at`) VALUES
(16, 'The Life of Buddha Associated with Ground Condition', 'This 10-day online course explores the life of the Buddha, emphasizing significant events associated with specific ground conditions. Each session will delve into the spiritual, symbolic, and historical significance of these sites, offering students a unique understanding of the Buddha\'s journey and teachings.\r\nBy the end of the course, participants will gain insights into how the Buddha\'s life was intertwined with the natural and architectural, geographical, and historical environment, shaping his teachings and their impact on humanity.\r\n\r\nCourse Objectives\r\n•	Understand the Buddha’s life events in connection with ground conditions.\r\n•	Analyze the symbolic meaning of different places where major events occurred.\r\n•	Relate these teachings to personal and spiritual growth.\r\n\r\nCourse Highlights\r\n•	Interactive Live Sessions: Engage with the instructor and fellow participants.\r\n•	Comprehensive Study Materials: Access detailed notes and multimedia content.\r\nEligibility: Open to all, no prior knowledge of Buddhism is required.', '/images/courses/img1.1.jpg', 1, 5, 'Myanmar', '10 Days', 0, 5, 0, 'public', '2024-11-23 03:43:11', '2024-12-15 04:35:01'),
(17, 'Timeline of Buddhism Course', 'The Timeline of Buddhism Course offers a structured exploration of Buddhism’s evolution, tracing its origins, growth, and global influence. The course begins with the life of Siddhartha Gautama, detailing his enlightenment under the Bodhi tree and the foundational teachings of the Four Noble Truths and the Eightfold Path.\r\n\r\nIt then transitions into the spread of Buddhism across Asia, starting with King Ashoka\'s patronage during the Mauryan Empire, which led to the establishment of stupas and Buddhist councils. The timeline covers the emergence of key traditions, including Theravāda, Mahāyāna, and Vajrayāna, highlighting their unique philosophies and cultural influences.\r\n\r\nAs the course progresses, it delves into Buddhism\'s journey to China, Korea, and Japan, emphasizing the adaptation of teachings like Zen and Pure Land Buddhism. Modern developments, including Buddhism\'s introduction to the West, its role in contemporary mindfulness practices, and its influence on global peace movements, are also explored.\r\n\r\nWith each module, the course offers rich historical context, significant milestones, and insights into how Buddhism continues to shape human understanding and spiritual growth. This timeline provides students with a comprehensive view of Buddhism’s profound legacy, fostering a deeper appreciation of its timeless relevance.', '/images/courses/img2.jpg', 1, 5, 'English', '1 Month', 0, 5, 0, 'public', '2024-11-23 03:56:35', '2024-11-23 03:56:35'),
(18, 'Spread of Buddhism and Sects of Buddhism', 'Buddhism\'s spread began shortly after the enlightenment of Siddhartha Gautama, the Buddha, and the establishment of his teachings in India. Initially, it expanded through oral transmission, with disciples traveling across regions. A significant milestone was King Ashoka\'s patronage in the 3rd century BCE, following his conversion to Buddhism. Ashoka sent emissaries to neighboring territories, including Sri Lanka, Central Asia, and Southeast Asia, solidifying Buddhism as a global faith.\r\n\r\nAs Buddhism spread, it adapted to diverse cultures, leading to the development of distinct sects. The earliest division was between Theravāda and Mahāyāna traditions.\r\n\r\nTheravāda (\"The Teaching of the Elders\") focuses on the earliest teachings of the Buddha and emphasizes individual enlightenment through meditation and strict adherence to monastic discipline. It is predominant in Sri Lanka, Myanmar, Thailand, Laos, and Cambodia.\r\nMahāyāna (\"The Great Vehicle\") embraces a broader interpretation of the Buddha\'s teachings, focusing on universal compassion and the Bodhisattva ideal. This sect flourished in China, Korea, and Japan, giving rise to schools like Zen, Pure Land, and Tiantai.\r\nA later development was Vajrayāna (\"The Diamond Vehicle\"), a subset of Mahāyāna that incorporates esoteric practices and rituals. It is primarily found in Tibet, Bhutan, and Mongolia.\r\n\r\nTogether, these sects illustrate Buddhism\'s adaptability and its profound impact on diverse cultures worldwide.', '/images/courses/img3.jpg', 1, 5, 'English', '1 Month', 0, 5, 0, 'public', '2024-11-23 03:58:04', '2024-11-23 03:58:04'),
(19, 'Decline and Revival of Buddhism in India', 'Buddhism, once a flourishing religion in India, faced a gradual decline starting around the 7th century CE. This decline was attributed to multiple factors, including the rise of Hinduism, which absorbed many Buddhist practices and philosophies into its framework. Additionally, the growing influence of devotional movements (Bhakti) and the resurgence of Brahmanical traditions diminished Buddhism\'s distinct identity. Internal schisms within Buddhist communities and the loss of royal patronage further weakened the religion.\r\n\r\nThe decline was accelerated by invasions from Central Asia, particularly the destruction of monasteries like Nālandā and Vikramashila by the Turkic invader Bakhtiyar Khilji in the 12th century. These centers of learning were vital for Buddhist scholarship and their fall marked a significant blow to the religion. By the late medieval period, Buddhism had nearly vanished from its birthplace.\r\n\r\nThe revival of Buddhism in India began in the 19th and 20th centuries, inspired by global interest in Buddhism and efforts by Indian reformers. The works of Anagarika Dharmapala and the excavation of Buddhist sites by British archaeologists renewed interest. A significant turning point came with Dr. B.R. Ambedkar\'s movement in the mid-20th century, as he and millions of Dalits embraced Buddhism as a means of social and spiritual liberation. Today, Buddhism is experiencing a resurgence in India through heritage preservation, pilgrimage, and social reform.', '/images/courses/img4.jpg', 1, 5, 'English', '1 Month', 0, 5, 0, 'public', '2024-11-23 03:59:01', '2024-11-23 03:59:01'),
(23, 'Dhamma School Grade 6', 'The is the description', '/images/courses/1739777167.jpg', 1, 6, 'Myanmar', '1 Month', 100, 5, 0, 'public', '2024-12-17 12:36:35', '2024-12-17 12:36:35'),
(25, 'Grade 7', 'description', '/images/courses/1739777167.jpg', 1, 6, 'Myanmar', '1 year', 0, 5, 0, 'public', '2024-12-17 15:33:37', '2024-12-17 15:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'category1', '2024-10-31 05:51:18', '2024-11-06 05:30:48'),
(3, 'category2', '2024-11-07 08:00:35', '2024-11-07 08:00:35'),
(4, 'meditation', '2024-11-18 03:50:19', '2024-11-18 03:50:19'),
(5, 'Buddhist History', '2024-11-23 03:41:06', '2024-12-17 15:30:36'),
(6, 'Dhamma School Myanmar', '2024-12-17 12:35:05', '2024-12-17 15:31:48');

-- --------------------------------------------------------

--
-- Table structure for table `course_purchases`
--

CREATE TABLE `course_purchases` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `payment_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

CREATE TABLE `forum_comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `forum_id` bigint UNSIGNED NOT NULL,
  `parent_comment_id` bigint UNSIGNED DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum_views`
--

CREATE TABLE `forum_views` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `forum_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` bigint UNSIGNED NOT NULL,
  `meetingname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `meetingid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `meetingname`, `user_id`, `meetingid`, `created_at`, `updated_at`) VALUES
(55, 'meeting', 1, '123', '2025-02-17 06:35:28', '2025-02-17 06:35:28'),
(56, 'meeting', 1, '1234', '2025-02-17 06:37:38', '2025-02-17 06:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_27_125142_create_roles_table', 1),
(5, '2024_10_27_125151_create_role_user_table', 1),
(6, '2024_10_30_073059_create_courses_table', 1),
(7, '2024_10_30_082018_create_course_categories_table', 1),
(8, '2024_10_30_114936_create_chapters_table', 1),
(9, '2024_10_31_044649_create_articles_table', 1),
(10, '2024_10_31_053944_create_article_categories_table', 1),
(15, '2024_10_31_082557_create_books_table', 2),
(16, '2024_10_31_082618_create_book_categories_table', 2),
(17, '2024_10_31_094538_create_book_purchases_table', 2),
(18, '2024_10_31_094549_create_payments_table', 2),
(20, '2024_11_02_111117_create_videos_table', 3),
(33, '2024_10_31_094549_create_course_purchases_table', 4),
(34, '2024_11_09_033249_create_quizzes_table', 4),
(35, '2024_11_09_033625_create_questions_table', 4),
(36, '2024_11_09_034507_create_answers_table', 4),
(37, '2024_11_09_034558_create_user_answers_table', 4),
(38, '2024_11_12_111122_create_notifications_table', 5),
(39, '2024_11_13_063544_create_announcements_table', 6),
(44, '2024_11_20_084859_create_forums_table', 7),
(45, '2024_11_20_093131_create_forum_comments', 7),
(46, '2024_11_20_093135_create_forum_views', 7),
(51, '2024_11_13_063544_create_newsand_updates_table', 8),
(52, '2024_12_11_153750_create_meetings_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `newsand_updates`
--

CREATE TABLE `newsand_updates` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `by` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsand_updates`
--

INSERT INTO `newsand_updates` (`id`, `title`, `by`, `content`, `image`, `created_at`, `updated_at`) VALUES
(5, 'The Life of Buddha Course ဖွင့်လစ်ခြင်း', 'By Dr. Saw Htut Sander (Asoka)', 'The Life of Buddha Course ( Dec-24-31) will be conducted mainly in Burmese. \r\nDec-24-2022 တွင် ဖွင့်လှစ်မည့် The Life of Buddha Course - ကို မြန်မာဘာသာဖြင့် ဦးစားပေးသင်ကြားမည် ဖြစ်ပါသည်။ \r\nYou are accordingly invited to attend the Buddhism Course, cooperate with \r\nRas Bihari Bose Subharti University (Dehradun) & Asoka Buddhist Education Center \r\nunder the Course Title of “Life of Buddha; Associated with ground conditions”\r\nLecture given by Dr. Saw Htut Sandar\r\n(Advisor & Associate Professor) Maha Pajapati Gotami School of Buddhist Studies, Dehradun\r\nDuration: From Dec-24-2022 To Dec-31-2022\r\nTime : \r\nMyanmar : 7:30 - 9:00 PM\r\nIndia         : 6:30 - 8:00 PM\r\nNew York : 8:00 - 9:30 AM\r\nZoom ID : 897 5890 3426\r\nPassword: buddha\r\nRegistration is required.\r\nRegister at  https://forms.gle/ANjA7fKrvj5anNYn7 \r\nAsoka Buddhist Education Center\r\n🙏Asoka Buddhist Education Center \r\n                          နှင့်\r\nRas Bihari Bose Subharti University\r\nတို့ ပူပေါင်းဖွင့်လှစ်မည့်\r\nThe Life of Buddha, associated with ground conditions Course ကို\r\nRas Bihari Bose Subharti University,\r\nMaha Pajapati Gotami School of Buddhist Studies ၏\r\nAdvisor & Associate Professor \r\nDr. Saw Htut Sandar မှ \r\nZoom Online ဖြင့်သင်ကြားပို့ချပေးမည် ဖြစ်ပါသည်။\r\nDuration:\r\nFrom Dec-24-2022 To Dec-31-2022\r\nTime : \r\nYangon: 7:30 - 9:00 PM\r\nIndia     : 6:30 - 8:00 PM\r\nNew York : 8:00 - 9:30 AM\r\nZoom ID : 897 5890 3426\r\nPassword: buddha\r\nတက်ရောက်လိုသူများ register လုပ်ပါရန်\r\nhttps://forms.gle/ANjA7fKrvj5anNYn7\r\nဤpost ကို Like and Share လုပ်ပေးခြင်းဖြင့် ကုသိုလ်ယူနိုင်ပါသည်🙏\r\nAsoka Buddhist Education Center', '/images/newsandupdate/5iosfmWHTBJCqQXEaVf3HtEofRaJTicl4QvjwTeD.jpg', '2024-11-13 03:10:09', '2025-02-17 08:28:13'),
(6, 'သားသားမီးမီးများအတွက် ဗုဒ္ဓဘာသာနှင့် သိသင့်သိထိုက်သည်များကို  သင်ကြားပို့ချပေးခြင်း', 'By Dr. Saw Htut Center (Asoka)', 'သားသားမီးမီးများအတွက် ဗုဒ္ဓဘာသာနှင့် သိ သင့်သိထိုက်သည်များကို \r\nသင်ကြားပို့ချပေးမည့်\r\nThe Life Buddha သင်တန်းကို \r\nမကြာမီ ထပ်မံဖွင့်လှစ်ပေးမည် ဖြစ်ပါသည်\r\nသင်တန်းစတင်မည့် နေ့ရက် နှင့် အချိန်ကို Asoka Facebook page မှ ကြေငြာပေးမည်ဖြစ်ပါသည်\r\nစိတ်ပါဝင်စား၍ တက်ရောက်လိုသူများ\r\nဤpost ကို Like and Share လုပ်ပေးခြင်းဖြင့်ကုသိုလ်ယူနိုင်ပါသည်\r\nAsoka Buddhist Education Center', '/images/newsandupdate/K87jWjv6pK6nKdE2gW6csdazi3jp7UES6HVpYrd5.jpg', '2024-11-13 03:16:15', '2024-11-30 12:10:56'),
(7, 'The Life of Buddha Course ဖွင့်လစ်ခြင်း', 'By Dr. Saw Htut Center (Asoka)', 'The Life of Buddha Course ( Dec-24-31) will be conducted mainly in Burmese. \r\nDec-24-2022 တွင် ဖွင့်လှစ်မည့် The Life of Buddha Course - ကို မြန်မာဘာသာဖြင့် ဦးစားပေးသင်ကြားမည် ဖြစ်ပါသည်။ \r\nYou are accordingly invited to attend the Buddhism Course, cooperate with \r\nRas Bihari Bose Subharti University (Dehradun) & Asoka Buddhist Education Center \r\nunder the Course Title of “Life of Buddha; Associated with ground conditions”\r\nLecture given by Dr. Saw Htut Sandar\r\n(Advisor & Associate Professor) Maha Pajapati Gotami School of Buddhist Studies, Dehradun\r\nDuration: From Dec-24-2022 To Dec-31-2022\r\nTime : \r\nMyanmar : 7:30 - 9:00 PM\r\nIndia         : 6:30 - 8:00 PM\r\nNew York : 8:00 - 9:30 AM\r\nZoom ID : 897 5890 3426\r\nPassword: buddha\r\nRegistration is required.\r\nRegister at  https://forms.gle/ANjA7fKrvj5anNYn7 \r\nAsoka Buddhist Education Center\r\n🙏Asoka Buddhist Education Center \r\n                          နှင့်\r\nRas Bihari Bose Subharti University\r\nတို့ ပူပေါင်းဖွင့်လှစ်မည့်\r\nThe Life of Buddha, associated with ground conditions Course ကို\r\nRas Bihari Bose Subharti University,\r\nMaha Pajapati Gotami School of Buddhist Studies ၏\r\nAdvisor & Associate Professor \r\nDr. Saw Htut Sandar မှ \r\nZoom Online ဖြင့်သင်ကြားပို့ချပေးမည် ဖြစ်ပါသည်။\r\nDuration:\r\nFrom Dec-24-2022 To Dec-31-2022\r\nTime : \r\nYangon: 7:30 - 9:00 PM\r\nIndia     : 6:30 - 8:00 PM\r\nNew York : 8:00 - 9:30 AM\r\nZoom ID : 897 5890 3426\r\nPassword: buddha\r\nတက်ရောက်လိုသူများ register လုပ်ပါရန်\r\nhttps://forms.gle/ANjA7fKrvj5anNYn7\r\nဤpost ကို Like and Share လုပ်ပေးခြင်းဖြင့် ကုသိုလ်ယူနိုင်ပါသည်🙏\r\nAsoka Buddhist Education Center', '', '2024-11-13 03:21:03', '2024-11-13 03:21:03'),
(8, 'Timeline of Buddhism', 'By Dr. Saw Htut Center (Asoka)', 'Study about Timeline of Buddhism 6th century BC to 21st Century AD, along with the world history.', '/images/newsandupdate/lr34mYHFD56JEA72YtgFH9LLyfFMn8A8x7tsE5Fp.jpg', '2024-11-17 07:43:32', '2024-11-17 07:43:32'),
(9, 'GEM Dhamma E-Learning Course', 'Asoka Center for Buddhist Studies Administration', 'Buddhist Gem Fellowship is committed to providing opportunities  for all to learn & practice the Teaching of the Buddha through a continuous education program in line with its motto \'Growing People Inspiring the Future\'.\r\n\r\nCourses Teaching  Day and Times\r\nMonday, Tuesday & Thursday | 8:30 - 10:00 pm\r\nThere will be over 48 Courses, 350 Classes and 50 Facilitators\r\nThe Participants are limited to 500 PAX.\r\n\r\nThe Closing Date will be Jan - 3 (Today)!', '/images/newsandupdate/5iosfmWHTBJCqQXEaVf3HtEofRaJTicl4QvjwTeD.jpg', '2025-01-03 09:05:46', '2025-01-03 09:05:46'),
(11, 'Offering the Sacred Buddha Relics at Maha Bodhi Society of India, Bodhgaya. February 2, 2025', 'Buddha Gaya', 'Date: February 2, 2025\r\nLocation: Maha Bodhi Society of India, Bodhgaya Center\r\nCollaboration: Sri Lanka, Vietnam, Bangladesh, and Myanmar\r\n\r\nFounder and esteemed monks members of The ASOKA Center of Buddhist Studies are honored to participate in the exposition of the sacred Buddha relics at the Maha Bodhi Society of India, Bodhgaya Center on February 2, 2025. This auspicious event is a collaborative effort between Buddhist communities from Sri Lanka, Vietnam, Myanmar, and Bangladesh, bringing monks, scholars, and devoted practitioners to pay homage to the sacred relics.\r\nIn this ceremony, Research Scholars from RBBSU Ven. Kumarya, Ven. Adiccavamsa, and Ven. Candavara and M.A. final-year students—Ven. Cittita, Ven. Acara, and Ven. Varamainda, were engaged in scholarly discussions and spiritual reflections on the significance of the Buddha relics.\r\nThis sacred relic exposition serves as a rare opportunity for devotees to deepen their connection with the Buddha’s teachings while strengthening ties between Buddhist communities worldwide.', '/images/newsandupdate/1740460258.jpg', '2025-02-25 04:40:58', '2025-02-25 05:27:50'),
(12, 'သားငယ်သမီးငယ်များအတွက် online မှအိမ်တိုင်ရာရောက် ဘုရားရှိခိုးနည်းအားသင်ကြားပို့ချခြင်း', 'By Dr. Saw Htut Sander (Asoka)', 'အစီအစဥ်အသေးစိတ်\r\n\r\n\r\n🙏ဆရာတော်တစ်ပါးစီမှ ကလေး ၁၀ယောက်မှ ၁၅ ယောက်အထိ စနစ်တကျ ဘုရားရှိခိုးတတ်ရန် online မှ သင်ကြားပေးပါမည်။\r\n🙏တစ်ည လျှင် မိနစ် ၃၀ မှ ၄၀ မိနစ်ခန့် (ကလေးများသိလိုသည်များကိုလည်းဖြေကြားပေးပါမည်)\r\n🙏အသက် အပိုင်းအခြားအလိုက် အခြေခံဘုရားရှိခိုးမှ အစပြု၍ သင်ကြားပေးမည်ဖြစ်ပါသည်။\r\n🙏Course တစ်ခုလျှင် ၁၀ ရက်မှ ၁၄ ရက်အတွင်း သင်ကြားပေးပါမည်။\r\n🙏အခြေခံသင်တန်းမှ အစပြု၍ ပထမဆင့်၊ ဒုတိယဆင့်၊ တတိယ အဆင့် စသည်ဖြင့် level အလိုက်သင်ကြားပေးမည်ဖြစ်ပါသည်။\r\n🙏အချိန်- ည ၈ နာရီ/ ၉နာရီ ( ကလေးများအဆင်ပြေသည့်အုပ်စုအလိုက်သင်ကြားပေးပါမည်)\r\n🙏Online , Zoom,Google meet,team တိုမှ power point ဖြင့်သင်ကြားမည်ဖြစ်ပါသည်။\r\n🙏သာသနာ ပြန့်ပွားတည်တံ့စေရန် နှင့် ကလေးငယ်များ စစ်မှန်သောအသိနှင့် သံသရာတစ်လျောက်လုံခြုံစေရန်အခြေခံအုတ်မြစ်ချပေးသော သင်တန်းဖြစ်ပါသဖြင့် သင်တန်းေကြးဟူ၍အသတ်မှတ်ပါ။သင်ကြားပေးသောဆရာတော်များနှင့်သာသနာအပေါ် ကြည်ညိုသဒ္ဓါစိတ်ပေါ်အခြေခံ၍သာမိမိတိုနိုင်သလောက် လှုဒါန်းနိုင်ပါသည်။ \r\n\r\n🌸မိမိတို၏ရင်သွေးငယ်များ ဘ၀သံသရာတစ်လျောက်လုံးယဥ်ကျေးလိမ္မာစေရန်ရည်ရွယ်၍ အိန္ဒိယနိုင်ငံတွင် ကြွရောက်ပညာသင်ကြားနေကြသော ဆရာတော်များမှ ပြည်ပအတွေ့အကြုံများနှင့်အတူ ရှင်းပြသင်ကြားပေးကြမည်ဖြစ်ပါသဖြင့် တက်ရောက်လိုပါက အောက်ပါနံပါတ်များသို စာရင်းပေးသွင်းနိုင်ပါသည်။\r\n၁။ဆရာတော် ဦးအာဒစ္စ၀ံသ viber- +959420220392\r\n၂။ ဆရာေတာ်ဦးစန္ဒာ၀ရ - vibet - +959754156903\r\n၃။ ဆရာေတာ်ဦးအာစရ- viber +959258025703\r\n၄။ ဆရာတော်ဦး စိန္တိတ- viber- +918534083737\r\n၅။ ဆရာတော်ဦး၀ါရမိန္ဒ- viber- +959891244441\r\n၆။ မလင်းထက် Viber 09761813876 \r\n၇။ မစိမ်းမာလာမြင့် +959782065777 viber\r\n၈။ ဒေါ်မီမီဟန်- viber- 095194709\r\n၉။ဒေါက်တာစောထွဋ်စန္ဒာ - vibetlr +918368197987\r\n၁၀။ Tr Cham - viber 095194709\r\nတိုကို \r\n🔶️ကလေးအမည် (အင်္ဂလိပ်လို) \r\n🔶️အသက် နှင့် တက်ရောက်လိုသော level \r\n🔶️တက်ရောက်နိုင်သောအချိန်\r\nတိုကိုဖော်ပြ၍ message ပိုနိုင်ပါသည်။', '/images/newsandupdate/1741086146.jpg', '2025-03-04 10:30:12', '2025-03-04 10:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint UNSIGNED NOT NULL,
  `quiz_id` bigint UNSIGNED NOT NULL,
  `question_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quiz_id`, `question_text`, `created_at`, `updated_at`) VALUES
(141, 29, 'Sample Question', '2024-11-23 05:03:19', '2024-12-12 07:33:16'),
(142, 29, 'Sample Question 2 for Quiz 29', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(144, 29, 'Sample Question 4 for Quiz 29', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(146, 30, 'Sample Question 1 for Quiz 30', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(147, 30, 'Sample Question 2 for Quiz 30', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(148, 30, 'Sample Question 3 for Quiz 30', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(149, 30, 'Sample Question 4 for Quiz 30', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(150, 30, 'Sample Question 5 for Quiz 30', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(151, 31, 'Sample Question 1 for Quiz 31', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(152, 31, 'Sample Question 2 for Quiz 31', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(153, 31, 'Sample Question 3 for Quiz 31', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(154, 31, 'Sample Question 4 for Quiz 31', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(155, 31, 'Sample Question 5 for Quiz 31', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(156, 32, 'Sample Question 1 for Quiz 32', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(157, 32, 'Sample Question 2 for Quiz 32', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(158, 32, 'Sample Question 3 for Quiz 32', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(159, 32, 'Sample Question 4 for Quiz 32', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(160, 32, 'Sample Question 5 for Quiz 32', '2024-11-23 05:03:19', '2024-11-23 05:03:19'),
(175, 29, 'New Quiz Question LOL', '2024-12-12 07:39:22', '2024-12-12 07:39:22'),
(176, 35, 'Sample Question 5 for Quiz 35', '2024-12-17 12:48:06', '2024-12-17 12:48:06'),
(178, 37, 'Sample Question 1 for Quiz 37', '2024-12-17 15:33:37', '2024-12-17 15:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `course_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(29, 16, 'Sample Quiz for The Life of Buddha Associated with Ground Condition', 'A sample quiz for the course: The Life of Buddha Associated with Ground Condition', '2024-11-23 05:03:09', '2024-11-23 05:03:09'),
(30, 17, 'Sample Quiz for Timeline of Buddhism Course', 'A sample quiz for the course: Timeline of Buddhism Course', '2024-11-23 05:03:09', '2024-11-23 05:03:09'),
(31, 18, 'Sample Quiz for Spread of Buddhism and Sects of Buddhism', 'A sample quiz for the course: Spread of Buddhism and Sects of Buddhism', '2024-11-23 05:03:09', '2024-11-23 05:03:09'),
(32, 19, 'Sample Quiz for Decline and Revival of Buddhism in India', 'A sample quiz for the course: Decline and Revival of Buddhism in India', '2024-11-23 05:03:09', '2024-11-23 05:03:09'),
(35, 23, 'Sample Quiz for Dhamma School Grade 6', 'A sample quiz for the course: Dhamma School Grade 6', '2024-12-17 12:36:35', '2024-12-17 12:36:35'),
(37, 25, 'Sample Quiz for Grade 7', 'A sample quiz for the course: Grade 7', '2024-12-17 15:33:37', '2024-12-17 15:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2024-10-30 23:20:33', '2024-10-30 23:20:33'),
(2, 'instructor', '2024-10-30 23:20:33', '2024-11-30 07:04:37'),
(3, 'student', '2024-10-30 23:20:33', '2024-11-04 02:20:04'),
(5, 'Author', '2024-11-17 07:40:23', '2024-11-17 07:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(4, 1, 1, NULL, NULL),
(24, 19, 3, NULL, NULL),
(25, 20, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6f6OQf16SKFIt8Rol2LAimCwyzGHH0nufb3TnEbr', 1, '103.213.30.139', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieTZNdG83Wndab1puNVpjMTh5VHlla04zZmdZdEdIeEU5M1VCaXpMQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9hc29rYWJ1ZGRoaXN0c3R1ZGllcy5wcm90ZWNobW0uY29tIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1741087386),
('7tVQ0XrLCOHwIUHqASokAkMxonANw8ovIjNg6LW7', NULL, '61.4.66.199', 'Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) QtWebEngine/6.7.3 Chrome/118.0.5993.220 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTGFyaUU2QmVkenZGV2tRYWNqVUs1WUdjcjZBaTdCRk1udlFGMklHQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9hc29rYWJ1ZGRoaXN0c3R1ZGllcy5wcm90ZWNobW0uY29tL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1741086792),
('cAAQEcCPnGhH9y7xs2Nf69BB6sFKTR0iwiaYXObl', NULL, '61.4.66.199', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibzdaUFc4SjBHWTJ4cGJiSUVNV1ltYjZnMEs3YmsxdzlPSmVKRHhXMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9hc29rYWJ1ZGRoaXN0c3R1ZGllcy5wcm90ZWNobW0uY29tL2ZvcnVtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1741086840),
('dLAc9dcXHR0eHBoJuN76oMcuUchlSjmwN8MEXJOs', 1, '103.213.30.139', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidWw4ZTZvRHJ0YmRRT1BXeW85SWFNeGpGdnhENmladngwRlo4d2N3TyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzU6Imh0dHBzOi8vYXNva2FidWRkaGlzdHN0dWRpZXMucHJvdGVjaG1tLmNvbS9jb3Vyc2VzLzI1L2NoYXB0ZXJzLzM1L3ZpZGVvcy84NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1741088003),
('WbZHSuBrcGz5jqdBFemmagZciRotI0HpcXoSI2o8', 1, '103.213.30.139', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSlJaYlREd1lmNmhiTzRLYUh1WWFCTDBzSHVScXUyeFo2Z2g1YzlVQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjY6Imh0dHA6Ly9hc29rYWJ1ZGRoaXN0c3R1ZGllcy5wcm90ZWNobW0uY29tL2Rhc2hib2FyZC9uZXdzYW5kdXBkYXRlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1741086602);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `bio` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `bio`, `email`, `phone`, `address`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thaw Htoo Zin (Admin)', NULL, NULL, 'thawhtoozin@gmail.com', '09977221152', 'yangon\r\nyangon', '$2y$12$S8Z/EqUrMDfqxC9T8rlMo.pRgSw/5ju3zzAS1IWyxtCcyI69zriGG', NULL, '2025-02-03 10:55:58', '2025-02-03 10:55:58'),
(19, 'Tom', NULL, NULL, 'tom@gmail.com', '09977221155', 'yangon', '$2y$12$mDJTpjkO1sHl5DHY99oUAu5G3zsGjQkQbRxuBlFh6PvMecbUOYa7C', NULL, '2025-02-08 08:56:20', '2025-02-08 08:56:20'),
(20, 'YE SCIT', NULL, NULL, 'yescit.hmu@icloud.com', '959450049539', 'TestTestTest', '$2y$12$qV5Fnzj1LJKeIPX1HpvCPut53Vld4/314pLY0SRnhCnD1VdIa6bwS', NULL, '2025-02-09 02:10:16', '2025-02-09 02:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE `user_answers` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `quiz_id` bigint UNSIGNED NOT NULL,
  `answer_id` bigint UNSIGNED NOT NULL,
  `is_correct` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapter_id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED DEFAULT NULL,
  `video_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `chapter_id`, `course_id`, `video_url`, `description`, `created_at`, `updated_at`) VALUES
(69, 'Day 1: Introduction to the Course and Overview of Ground Conditions', 31, 16, '/videos/video1.1.mp4', '•	The significance of the Buddha’s life journey.\r\n•	Introduction to the concept of \"ground condition\" in Buddhist teachings.', '2024-12-15 04:49:36', '2024-12-15 04:49:36'),
(70, 'Day 2: Lumbini – The Birthplace of the Buddha', 31, 16, '/videos/video1.1.mp4', '•	Historical background and its importance in Buddhist heritage.\r\n•	Symbolism of the pristine natural surroundings.\r\n•	Importance of Lumbini\'s past and present', '2024-12-15 04:49:56', '2024-12-15 04:49:56'),
(71, 'Day 3: Bodh Gaya – The Ground of Enlightenment', 31, 16, '/videos/video1.1.mp4', '•	The Enlightenment of the Buddha and the situation of Bodhgaya\r\n•	Bodhgaya after Buddha’s Enlightenment', '2024-12-15 04:50:11', '2024-12-15 04:50:11'),
(72, 'Day 4: Deer Park at Sarnath – The Ground of the First Teaching', 31, 16, '/videos/video1.1.mp4', '•	The setting of the Dhammacakkappavattana Sutta.\r\n•	Foundation of Sangha Organization, propagation of Buddha Sasana', '2024-12-15 04:50:27', '2024-12-15 04:50:27'),
(73, 'Day 5/6/7: Buddha’s Forty-five Vassa with Great Events and Important Persons', 31, 16, '/videos/video1.1.mp4', '•	To study the Buddha’s forty-five Vassas', '2024-12-15 04:50:38', '2024-12-15 04:50:38'),
(74, 'Day 8: Kushinagar – The Ground of Parinibbana', 31, 16, '/videos/video1.1.mp4', '•	Buddha’s Mahaparinibbana and last words of the Buddha', '2024-12-15 04:50:49', '2024-12-15 04:50:49'),
(75, 'Day 9: Sacred Geography – The Pilgrimage Tradition', 31, 16, '/videos/video1.1.mp4', '•	Essences of the Buddha’s teachings', '2024-12-15 04:51:02', '2024-12-15 04:51:02'),
(76, 'Day 10: Summary and Reflection', 31, 16, '/videos/video1.1.mp4', '•	Revisiting key lessons and their relevance to modern life.\r\n•	Interactive discussion and Q&A session.', '2024-12-15 04:51:16', '2024-12-15 04:51:16'),
(77, 'လယ်တီဆရာတော်ဘုရားကြီး၏ ခုနှစ်နေ့ဘုရားရှိခိုး', 32, 23, '/videos/video1.1.mp4', 'လယ်တီဆရာတော်ဘုရားကြီး၏ ခုနှစ်နေ့ဘုရားရှိခိုး', '2024-12-17 12:38:35', '2024-12-17 12:38:35'),
(78, 'သတ္တသတ္တာဟ စံနေတော်မူခြင်း', 32, 23, '/videos/video1.1.mp4', 'သတ္တသတ္တာဟ စံနေတော်မူခြင်း', '2024-12-17 12:39:11', '2024-12-17 12:39:11'),
(79, 'ထူးထွေဆန်းပြား ရောင်ခြည်တော်ခြောက်ပါး', 32, 23, '/videos/video1.1.mp4', 'ထူးထွေဆန်းပြား ရောင်ခြည်တော်ခြောက်ပါး', '2024-12-17 12:39:53', '2024-12-17 12:39:53'),
(80, 'သဟမ္ပတိဗြဟ္မာကြီးက မြတ်စွာဘုရားရှင်အား တရားဟောတော်မူရန် တောင်းပန်လျှောက်ထားခြင်း', 33, 23, '/videos/video1.1.mp4', 'သဟမ္ပတိဗြဟ္မာကြီးက မြတ်စွာဘုရားရှင်အား တရားဟောတော်မူရန် တောင်းပန်လျှောက်ထားခြင်း', '2024-12-17 12:41:29', '2024-12-17 12:41:29'),
(81, 'မြတ်စွာဘုရားရှင်နှင့် ကုန်သည်ညီနောင်နှစ်ဦး', 33, 23, '/videos/video1.1.mp4', 'မြတ်စွာဘုရားရှင်နှင့် ကုန်သည်ညီနောင်နှစ်ဦး', '2024-12-17 12:42:32', '2024-12-17 12:42:32'),
(82, 'ယုံကြည်အားထားဖွယ်ရာ ဓမ္မရတနာ', 33, 23, '/videos/video1.1.mp4', 'ယုံကြည်အားထားဖွယ်ရာ ဓမ္မရတနာ', '2024-12-17 12:43:38', '2024-12-17 12:43:38'),
(84, 'Video Lesson 1', 35, 25, '/videos/video1.1.mp4', 'Description for the lesson.', '2024-12-17 15:36:53', '2024-12-17 15:36:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_categories`
--
ALTER TABLE `book_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_purchases`
--
ALTER TABLE `book_purchases`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_purchases`
--
ALTER TABLE `course_purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `forums_title_unique` (`title`(255)),
  ADD KEY `forums_user_id_foreign` (`user_id`);

--
-- Indexes for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forum_comments_user_id_foreign` (`user_id`),
  ADD KEY `forum_comments_forum_id_foreign` (`forum_id`),
  ADD KEY `forum_comments_parent_comment_id_foreign` (`parent_comment_id`);

--
-- Indexes for table `forum_views`
--
ALTER TABLE `forum_views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forum_views_user_id_foreign` (`user_id`),
  ADD KEY `forum_views_forum_id_foreign` (`forum_id`);

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
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `meetings_meetingid_unique` (`meetingid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsand_updates`
--
ALTER TABLE `newsand_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_quiz_id_foreign` (`quiz_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_course_id_foreign` (`course_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
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
  ADD UNIQUE KEY `users_email_unique` (`email`(255)),
  ADD UNIQUE KEY `users_phone_unique` (`phone`(255));

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_answers_user_id_foreign` (`user_id`),
  ADD KEY `user_answers_question_id_foreign` (`question_id`),
  ADD KEY `user_answers_answer_id_foreign` (`answer_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=650;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `book_categories`
--
ALTER TABLE `book_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_purchases`
--
ALTER TABLE `book_purchases`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course_purchases`
--
ALTER TABLE `course_purchases`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `forum_comments`
--
ALTER TABLE `forum_comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `forum_views`
--
ALTER TABLE `forum_views`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `newsand_updates`
--
ALTER TABLE `newsand_updates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_answers`
--
ALTER TABLE `user_answers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=695;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forums`
--
ALTER TABLE `forums`
  ADD CONSTRAINT `forums_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD CONSTRAINT `forum_comments_forum_id_foreign` FOREIGN KEY (`forum_id`) REFERENCES `forums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `forum_comments_parent_comment_id_foreign` FOREIGN KEY (`parent_comment_id`) REFERENCES `forum_comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `forum_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `forum_views`
--
ALTER TABLE `forum_views`
  ADD CONSTRAINT `forum_views_forum_id_foreign` FOREIGN KEY (`forum_id`) REFERENCES `forums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `forum_views_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD CONSTRAINT `user_answers_answer_id_foreign` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
