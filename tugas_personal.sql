-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2025 at 02:29 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_personal`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `born` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `total_project` int NOT NULL,
  `image` text NOT NULL,
  `zip_code` int NOT NULL,
  `phone` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `address`, `born`, `email`, `total_project`, `image`, `zip_code`, `phone`, `work`) VALUES
(124, 'Faiq nadhif adiwinata', 'Mangiran RT 121 Trimurti Kecamatan Srandakan Kabupaten Bantul DIY', '2008-05-20', 'faiqnadhif216@gmail.com', 3, '1753078685.png', 55672, '081325507367', 'Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `autor` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `date`, `autor`, `title`, `description`) VALUES
(4, '1754030267.png', '2025-07-15', 'Faiq nadhif adiwinnata.', 'Perjalanan Belajar dan Berkembang di Dunia Teknologi.', 'Saya adalah siswa SMK yang sedang menempuh praktik kerja lapangan (PKL) di PT. Lauwba Techo Indonesia. Di blog ini, saya berbagi pengalaman belajar seputar HTML, CSS, PHP, dan pengembangan web. Selain itu, saya juga aktif dalam berwirausaha kecil sebagai bentuk kemandirian dan pembelajaran dunia nyata.');

-- --------------------------------------------------------

--
-- Table structure for table `contacs`
--

CREATE TABLE `contacs` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacs`
--

INSERT INTO `contacs` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Pepo', 'p3p0@gm.com', 'Pelajar', 'Infokan lokasi'),
(11, 'aku admin', 'AKUADMIN@GMAIL.COM', 'sswe', 'wewewew');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `title`, `job`, `description`) VALUES
(21, '1753250462-Screenshot 2025-07-23 105525.png', 'Dasar-dasar HTML', 'PKL di PT Lauwba Techo Indonesia', 'Tugas CRUD PT.Lauwba'),
(25, '1753525376-Screenshot 2025-07-26 172150.png', 'Web Galery', 'PKL di PT Lauwba Techo Indonesia', ''),
(26, '1753250872.png', 'Portofolio', 'PKL di PT Lauwba Techo Indonesia', '');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint NOT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `job` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `date`, `job`, `place`, `description`) VALUES
(1, '2025', 'SMK Negri 1 Sanden ', 'Rekayasa Perangkat Lunak', 'Saya Faiq Nadhif Adiwinata Siswa SMK Negeri 1 Sanden, Jurusan Rekayasa Perangkat Lunak (RPL)\r\nSelama menempuh pendidikan di SMK, saya aktif dalam mengikuti mata pelajaran produktif di bidang kejuruan. Dan di luar kegiatan sekolah, saya juga berjualan kopi, sebagai bentuk kemandirian dan jiwa kewirausahaan'),
(2, '2025', 'PT.Lauwba techno Indonesia ', 'Praktik Kerja Lapangan', 'Selama menjalani Praktik Kerja Lapangan (PKL) di PT Lauwba Techno Indonesia, saya mempelajari dan mengembangkan keterampilan dalam teknologi web, khususnya di bidang HTML, CSS, Bootstrap, serta pemrograman back-end menggunakan PHP. Selain itu, saya juga mempelajari konsep dan implementasi CRUD (Create, Read, Update, Delete) dalam pengelolaan data berbasis web.'),
(8, '2010-2012', 'Rekayasa Perangkat Lunak', 'Bantul', 'ada');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint NOT NULL,
  `icon` text NOT NULL,
  `job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `job`) VALUES
(3, '1754030712.png', 'Web Dev'),
(4, '1754030811.png', 'Design Grafis'),
(5, '1754030819.png', 'Penulis / Content Creator');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint NOT NULL,
  `skill` varchar(255) NOT NULL,
  `percent` int NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `percent`, `description`) VALUES
(12, 'HTML', 80, 'Sudah menguasai dasar-dasar HTML dan beshasil Membuat Web berita sederhana, Web Gallery, Web portofolio'),
(13, 'BOOTSTRAP', 75, 'Sudah paham dasar-dasarnya'),
(14, 'PHP', 40, 'Masih sering typo ');

-- --------------------------------------------------------

--
-- Table structure for table `socmeds`
--

CREATE TABLE `socmeds` (
  `id` bigint NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `socmeds`
--

INSERT INTO `socmeds` (`id`, `icon`, `link`) VALUES
(1, '1753409858.png', 'https://www.instagram.com/adiwinata208/'),
(2, '1753409846.png', 'https://www.facebook.com/profile.php?id=61559696333976'),
(3, '1753409895.png', 'https://web.telegram.org/a/');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `job`, `description`, `image`) VALUES
(9, 'Sugeng Monosox', 'aa', 'Faiq mampu membangun website yang responsif dan user-friendly sesuai dengan kebutuhan kami. Proses pengerjaan cepat, rapi, dan komunikatif dalam menerima masukan.', '1753668001.png'),
(10, ' Dina Ramadhani', 'Manajer Pemasaran PT Solusi Digital', 'Selama bekerja sama, Faiq menunjukkan pemahaman teknis yang kuat dalam HTML, CSS, dan PHP. Hasil website-nya membantu meningkatkan kehadiran digital bisnis kami.”', '1753427288.png'),
(11, ' Aulia', 'Social Media Specialist Kopi Kita', 'Desain yang dibuat Faiq selalu menarik dan sesuai dengan identitas brand kami. Ia sangat detail, kreatif, dan cepat dalam menyelesaikan revisi.', '1753427432.png'),
(12, 'Dimas kakap', 'll', '“Saya sangat puas dengan hasil kerja Faiq sebagai web developer. Website usaha saya kini tampil profesional dan mudah diakses pelanggan. Proses pengerjaannya cepat, rapi, dan komunikatif!”', '1753427508.png'),
(13, 'Yoga Tambal Ban', 'll', 'Mulai dari logo, desain menu, hingga tampilan media sosial kami semuanya dibuat dengan sangat profesional. Kreatif dan penuh ide baru!', '1753427575.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(10, '', 'faiq@gmail.com', '$2y$10$0y0OhVg.T3D64ohTKbixCO5ZCto1Y4u7OFwO8YHdw4TUEC0w00h0m'),
(11, 'Adiwinata208', 'faiqnadhif216@gmail.com', '$2y$10$xNUxmqzsJo9GpgvAp05HLOI0avhzuHCK5M9eSqDjYTDGiw8OJWg4C'),
(12, 'faiq', 'faiq@gm.cm', '$2y$10$WD7XMy7toVIZYaVeRchOGuPvlkiYJFXcSJs6/jnfHnpYd1Ju8F6t.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacs`
--
ALTER TABLE `contacs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socmeds`
--
ALTER TABLE `socmeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contacs`
--
ALTER TABLE `contacs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `socmeds`
--
ALTER TABLE `socmeds`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
