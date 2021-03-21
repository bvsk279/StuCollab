-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2021 at 02:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `StuCollab`
--
CREATE DATABASE IF NOT EXISTS `StuCollab` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `StuCollab`;

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `USERS` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `USERS`
--

INSERT INTO `USERS` (`user_id`, `username`, `password`, `email`, `first_name`, `last_name`) VALUES
(1, 'test', '$2y$10$sN.TqOM7lRuVjHjvpUUi0u0XI0QEquMuImKC4Uslv//GRoYWZeGgm', 'test@test.com', 'Test', 'Test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




CREATE TABLE `ACTIVITIES`(
	`activity_id` int auto_increment primary key,
    `user_id` int not null,
    `activity_title` text not null,
    `activity_desc` text not null,
    `activity_type` varchar(10) not null,
    `starts` datetime not null,
    `link` varchar(255),
    `location` varchar(255),
    `posted_on` datetime not null,
	foreign key(`user_id`) references USERS(`user_id`)
);

-- @activity_type = either 'VC' or 'PA'; (Video Conferencing or physical activity)

insert into `ACTIVITIES`(`user_id`,`activity_title`,`activity_desc`,`activity_type`,`starts`,`link`,`posted_on`) values(1, "Zumba Dance", "Dance keep my Motivation Up. Join the conference & Lets dance together.", "VC", "2021-03-21 06:00:00", "www.xyz.com/123", "2021-03-20 12:00:00");

CREATE TABLE `PROJECTS`(
	`project_id` int auto_increment primary key,
    `user_id` int not null,
    `project_title` text not null,
    `project_desc` text not null,
    `tech_stack` varchar(150),
    `posted_on` datetime not null,
    foreign key(`user_id`) references USERS(`user_id`)
);

insert into `PROJECTS`(`user_id`,`project_title`,`project_desc`,`tech_stack`,`posted_on`) values(1, "A Student Collaboration Platform", "A platform which allows students to connect and collaborate among themselves and work together. Like-minded people who share the same passion, interests and ideologies can connect and work along. Lets you connect to students from any branch or year within a college.", "PHP, Javascript, Angular", "2021-03-20 04:15:00");

CREATE TABLE `EVENTS`(
	`event_id` int auto_increment primary key,
    `user_id` int not null,
    `event_title` text not null,
    `event_desc` text not null,
    `starts` datetime not null,
    `ends` datetime not null,
    `web_link` datetime not null,
    `location` varchar(255),
    `enrollments_count` int,
    `posted_on` datetime not null,
    foreign key(`user_id`) references USERS(`user_id`)
);