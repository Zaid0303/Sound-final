-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 11:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sound2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` text NOT NULL,
  `admin_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_img`) VALUES
(1, 'Muhammad Zaid', 'zaid123aptech@gmail.com', '$2y$10$7zaQwNb5Z41xvtRUeVuG8uQSHp8NpVdVcsjeR44WAWOS3o6cdV2se', 'zaid.jpeg'),
(2, 'Syed Murtaza', 'murtaza123aptech@gmail.com', '$2y$10$JY2a9YVt/gPwGQqLLqnM1OezLrnnj4Fhq/JKtqI.faJzfKXPJadD2', 'murtaza.jpeg'),
(3, 'admin', 'admin@gmail.com', '$2y$10$zNOPai48uX6fAGJ4QlZtO.6zky3nvg7Z03AxljS/F3JDLLY2D1UW2', 'admin.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `c_genre` varchar(255) NOT NULL,
  `c_genre_img` varchar(255) NOT NULL,
  `c_year` varchar(255) NOT NULL,
  `c_artist` varchar(255) NOT NULL,
  `c_artist_img` varchar(255) NOT NULL,
  `c_album` varchar(255) NOT NULL,
  `c_album_img` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_genre`, `c_genre_img`, `c_year`, `c_artist`, `c_artist_img`, `c_album`, `c_album_img`, `status`) VALUES
(7, 'Pop', 'Pop.jpg', '2023', 'Badshah', 'Badshah.jpg', 'Super Hit Song', 'album.png', 1),
(8, 'Hip-Hop / Pap', 'Hip-Hop-Pop.jpg', '2018', 'Yo Yo Honey Singh', 'Honey singh2.jpg', 'Latest song', 'album.png', 1),
(9, 'Rap', 'Rap.jpg', '2014', 'Arijit Singh', 'arijit sing.jpg', 'Trending Song', 'album.png', 1),
(10, 'Indian Pop', 'Indian pop genre.jpg', '2022', 'Guri', 'guri artist.jpg', 'Summer Wave', 'album.png', 1),
(12, 'Hip Hop / Rap', 'Hip Hop-Rap.jpg', '2020', 'young stunner', 'young-stunners.jpg', 'Super Hit Song', 'album.png', 1),
(13, 'Classical', 'Classical.jpg', '2021', 'Atif Aslam', 'Atif Aslam.jpg', 'Latest song', 'album.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_artist` varchar(255) NOT NULL,
  `m_year` varchar(255) NOT NULL,
  `m_album` varchar(255) NOT NULL,
  `m_genre` varchar(255) NOT NULL,
  `m_language` varchar(255) NOT NULL,
  `m_img` varchar(255) NOT NULL,
  `m_file` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`m_id`, `m_name`, `m_artist`, `m_year`, `m_album`, `m_genre`, `m_language`, `m_img`, `m_file`, `status`, `cat_id`) VALUES
(16, 'Blue Eyes', 'Yo Yo Honey Sing', '9', 'Super Hit Song', 'Pop', 'English', 'Blue Eyes img.jpg', 'Blue Eyes Full Video Song Yo Yo Honey Singh  Blockbuster Song Of 2013.mp3', 1, 9),
(17, 'DHEETH', 'Yo Yo Honey Singh', '7', 'Latest Song', 'Hip-Hop / Rap', 'Punjabi', 'DHEETH.jpg', 'DHEETH - Full Video  Honey 3.0  Yo Yo Honey Singh  Zee Music Originals.mp3', 1, 7),
(18, 'Birthday Bash ', 'Yo Yo Honey Singh', '7', 'Latest Song', 'Hip-Hop / Rap', 'Hindi', 'Birthday BASH MP3.jpg', 'Birthday Bash.mp3', 1, 7),
(19, 'Dope Shope', 'Yo Yo Honey Singh', '7', 'Latest Song', 'Remix', 'Punjabi', 'Dope Shope mp3.jpg', 'Dope Shope   Yo Yo Honey Singh and Deep Money   Brand New Punjabi Songs HD   International Villager.mp3', 1, 7),
(20, 'Habibti', 'Yo Yo Honey Singh', '7', 'Latest Song', 'Remix', 'Punjabi', 'Habibti-mp3-image.jpg', 'Habibti - Full Video  Honey 3.0  Yo Yo Honey Singh  Zee Music Originals.mp3', 1, 7),
(21, 'O Maahi', 'Arijit Singh', '7', 'Latest Song', 'Classical', 'Hindi', 'O Maahi.jpg', 'Dunki Drop 5  O Maahi (Song)_ Shah Rukh Khan  Taapsee Pannu  Pritam  Arijit Singh  Irshad Kamil.mp3', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `ra_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `rating_val` int(11) NOT NULL,
  `times_tamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `r_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `r_text` text NOT NULL,
  `times_tamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_rating` int(11) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(0, 'Zaid', 5, 'gg', 1706041510),
(0, 'zaid', 5, 'Good Song', 1706130034);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_phone` int(12) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_password` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_address`, `u_phone`, `u_email`, `u_password`, `status`) VALUES
(2, 'Syed Murtaza', 'Aqsa Masjid Nazimabad no 2, Karachi', 343546457, 'murtaza@gmail.com', '123', 1),
(3, 'Abdullah Sheikh', 'Jama Masjid Nazimabad no 2, Karachi', 2147483647, 'abdullah@gmail.com', '111', 1),
(4, 'M.Zaid', '2B/31 Nazimabad no 2, Karachi', 2147483647, 'zaid@gmail.com', '1111', 1),
(5, 'Ahmed Khan', '4D/31 Nazimabad no 2, Karachi.', 2147483647, 'ahmed@gmail.com', '111', 1),
(6, 'Mubeen', '5G/42 Korangi no 3, Karachi', 321456779, 'mubeen@gmail.com', '111', 1),
(7, 'Ayesha', 'Nazimabad no 2, Karachi', 321456788, 'Ayesha@gmail.com', '111', 1),
(8, 'Aneeq', 'Nazimabad no 4, Karachi', 312677543, 'Aneed@gmail.com', '222', 1),
(9, 'Abdul Hadi', '2B/31 near  Lucky One Mall', 345678900, 'hadi@gmail.com', '$2y$10$CODcAqak8bh9Rfa3XZXiYOMXEJ7LFRH/k9ns8i8YEPQOYXb3KxtKO', 1),
(10, 'Muhammad Zaid', '2B/31 Nazimabad no 2', 2147483647, 'zaid123@gmail.com', '$2y$10$Nb/7xJT7yosYNte5inHCd.LSltKHbGyR2jSN5jooLhCbNoZeNYdnu', 1),
(11, 'ubaid', 'Nazimabad no 3, Karachi', 2147483647, 'ubaid@gmail.com', '$2y$10$L6QjkNcL/PsA53viGP50cOncjpHKGTvxpDti9WUYApKI9gQOzddDG', 1),
(12, 'Yash', 'Bharia Town, karachi', 233344555, 'yash@gmail.com', '$2y$10$rtV5ANLnpBMhT4HmCBTRUuT.Eq0PUm6AR7NqvabGtmUiCrLpbOulW', 1);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(255) NOT NULL,
  `v_artist` varchar(255) NOT NULL,
  `v_year` varchar(255) NOT NULL,
  `v_album` varchar(255) NOT NULL,
  `v_genre` varchar(255) NOT NULL,
  `v_language` varchar(255) NOT NULL,
  `v_img` varchar(255) NOT NULL,
  `v_file` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `cat_id` int(11) NOT NULL,
  `wishlist` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`v_id`, `v_name`, `v_artist`, `v_year`, `v_album`, `v_genre`, `v_language`, `v_img`, `v_file`, `status`, `cat_id`, `wishlist`) VALUES
(60, 'Chaar Botal Vodka', 'Yo Yo Honey Singh', '9', 'Super Hit Song', 'Classical', 'Punjabi', 'Chaar Botal Vodka mp4.jpg', 'Chaar Botal Vodka Full Song Feat. Yo Yo Honey Singh, Sunny Leone _ Ragini MMS 2.mp4', 1, 9, 0),
(61, 'Blue Eyes Full Video', 'Yo Yo Honey Singh', '9', 'Super Hit Song', 'Hip-Hop / Rap', 'English', 'blue eyes.jpg', 'Blue Eyes Full Video Song Yo Yo Honey Singh _ Blockbuster Song Of 2013.mp4', 1, 9, 0),
(62, 'Mill lo na', 'Guri', '8', 'Hit Song', 'Hip-Hop', 'Punjabi', 'mill lo na.jpg', 'Mill Lo Na _ Guri Ft. Sukhe (Official Video) Jaani _ Satti Dhillon _ Punjabi Songs _ GK _ Geet MP3.mp4', 1, 8, 0),
(63, 'TWO TONE - Young Stunners', 'Young Stunners', '7', 'Super Hit Song', 'Hip-Hop / Rap', 'Hindi', 'two tone.jpg', 'TWO TONE - Young Stunners _ Talha Anjum _ Talhah Yunus _ Prod. by Umair (Official Music Video).mp4', 1, 7, 0),
(64, 'Rafta Rafta - Official Music Video', 'Atif Aslam', '12', 'Super Hit Song', 'Classical', 'Hindi', 'rafta rafta.jpg', 'Rafta Rafta - Official Music Video _ Raj Ranjodh _ Atif Aslam Ft. Sajal Ali _ Tarish Music.mp4', 1, 12, 0),
(65, 'Badshah | Paani Paani ', 'Badshah', '12', 'Super Hit Song', 'Indian Pop', 'Hindi', 'pani pani.jpg', '[4K] Paani Paani Full Video Song _ Badshah, Jacqueline Fernandez & Aastha Gill _ Bollywood New Song.mp4', 1, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist` int(1) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `music_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_video`
--

CREATE TABLE `wishlist_video` (
  `wishlist` int(1) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `m_cat_fk` (`cat_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`ra_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `u_fk` (`u_id`),
  ADD KEY `v_id` (`v_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `cat_fk` (`cat_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD KEY `u_fk_id` (`user_id`),
  ADD KEY `m_fk_id` (`music_id`);

--
-- Indexes for table `wishlist_video`
--
ALTER TABLE `wishlist_video`
  ADD KEY `user_fk_v` (`user_id`),
  ADD KEY `vide_fk_v` (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `ra_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `music`
--
ALTER TABLE `music`
  ADD CONSTRAINT `m_cat_fk` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`c_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `u_fk` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `v_id` FOREIGN KEY (`v_id`) REFERENCES `videos` (`v_id`);

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `cat_fk` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`c_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `m_fk_id` FOREIGN KEY (`music_id`) REFERENCES `music` (`m_id`),
  ADD CONSTRAINT `u_fk_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `wishlist_video`
--
ALTER TABLE `wishlist_video`
  ADD CONSTRAINT `user_fk_v` FOREIGN KEY (`user_id`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `vide_fk_v` FOREIGN KEY (`video_id`) REFERENCES `videos` (`v_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
