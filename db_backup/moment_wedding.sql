-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 02:51 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moment_wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `wedding_id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` text NOT NULL,
  `time` varchar(300) NOT NULL,
  `location` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `wedding_id`, `name`, `date`, `time`, `location`, `image`) VALUES
(4, 2, 'dsd', '12 October, 2017', '08:50', 'dsdsdssd', '4_eventImage.'),
(5, 4, 'Rupal', '12 October, 2017', '08:50', 'dsdsdssd', '5_eventImage.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `event_id` varchar(100) NOT NULL,
  `gallery_pic` text NOT NULL,
  `user_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `event_id`, `gallery_pic`, `user_code`) VALUES
(1, 'Sangeet', 'https://d397bfy4gvgcdm.cloudfront.net/83834-0230.jpeg', 1),
(2, 'Sangeet', 'https://i.pinimg.com/736x/aa/83/fa/aa83facbd74ed752486a8a1b7d9a1f28--indian-wedding-decorations-wedding-ceremony-decorations.jpg', 1),
(3, 'Sangeet', 'https://i.pinimg.com/736x/aa/83/fa/aa83facbd74ed752486a8a1b7d9a1f28--indian-wedding-decorations-wedding-ceremony-decorations.jpg', 1),
(4, 'Mehndi', 'https://www.hitched.co.uk/images/articleContent/Traditional-Wedding-Mehndi.jpg', 1),
(5, 'Mehndi', 'https://bluenotchjeans.com/wp-content/uploads/2017/01/Latest-Wedding-mehndi-designs-2017.jpg', 1),
(6, 'Mehndi', 'http://www.fashionlady.in/wp-content/uploads/2015/08/mehndi-designs-for-wedding.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guest_list`
--

CREATE TABLE `guest_list` (
  `id` int(11) NOT NULL,
  `wedding_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `event_access` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest_list`
--

INSERT INTO `guest_list` (`id`, `wedding_id`, `profile_id`, `name`, `mobile`, `code`, `event_access`) VALUES
(1, 5, 15, 'Rajan Kaneria', '9662872090', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `invitation`
--

CREATE TABLE `invitation` (
  `id` int(11) NOT NULL,
  `groom_pic` text NOT NULL,
  `bride_pic` text NOT NULL,
  `groom_name` varchar(100) NOT NULL,
  `bride_name` varchar(100) NOT NULL,
  `inv_name` varchar(100) NOT NULL,
  `inv_details` text NOT NULL,
  `user_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invitation`
--

INSERT INTO `invitation` (`id`, `groom_pic`, `bride_pic`, `groom_name`, `bride_name`, `inv_name`, `inv_details`, `user_code`) VALUES
(1, 'http://4.bp.blogspot.com/-cBEdk4Cz-UM/UO_Dt2G06MI/AAAAAAAAC2o/X9lJ0FPOLGA/s1600/dashing20boys20wallpapers.jpg', 'http://sguru.org/wp-content/uploads/2017/04/cute-girl-dp-for-whatsapp-27.jpg', 'John Doe', 'Jenny Bae', 'Ankita Patel', 'Android is a mobile operating system developed by Google, based on the Linux kernel and designed primarily for touchscreen mobile devices such as smartphones and tablets. Android\'s user interface is mainly based on direct manipulation, using touch gestures that loosely correspond to real-world actions, such as swiping, tapping and pinching, to manipulate on-screen objects, along with a virtual keyboard for text input. In addition to touchscreen devices, Google has further developed Android TV for televisions, Android Auto for cars, and Android Wear for wrist watches, each with a specialized user interface. Variants of Android are also used on game consoles, digital cameras, PCs and other electronics.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_relation` varchar(100) NOT NULL,
  `member_pic` text NOT NULL,
  `member_details` text NOT NULL,
  `user_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `profile_id`, `member_name`, `member_relation`, `member_pic`, `member_details`, `user_code`) VALUES
(1, 15, 'Pravinbhai Patel', 'Father', 'http://4.bp.blogspot.com/-cBEdk4Cz-UM/UO_Dt2G06MI/AAAAAAAAC2o/X9lJ0FPOLGA/s1600/dashing20boys20wallpapers.jpg', 'There is no who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 1),
(2, 15, 'Parvatiben Patel', 'Mother', 'http://sguru.org/wp-content/uploads/2017/04/cute-girl-dp-for-whatsapp-27.jpg', 'There is no who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 1),
(3, 15, 'Parth Patel', 'Brother', 'http://4.bp.blogspot.com/-cBEdk4Cz-UM/UO_Dt2G06MI/AAAAAAAAC2o/X9lJ0FPOLGA/s1600/dashing20boys20wallpapers.jpg', 'There is no who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `profile_details` text NOT NULL,
  `user_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `profile_pic`, `name`, `occupation`, `profile_details`, `user_code`) VALUES
(1, '1_profileImage.jpg', 'Ankita', 'Android Developer', 'Android is a mobile operating system developed by Google, based on the Linux kernel and designed primarily for touchscreen mobile devices such as smartphones and tablets. Android\'s user interface is mainly based on direct manipulation, using touch gestures that loosely correspond to real-world actions, such as swiping, tapping and pinching, to manipulate on-screen objects, along with a virtual keyboard for text input. In addition to touchscreen devices, Google has further developed Android TV for televisions, Android Auto for cars, and Android Wear for wrist watches, each with a specialized user interface. Variants of Android are also used on game consoles, digital cameras, PCs and other electronics.', 1),
(2, '', 'bride', '', '', 0),
(3, '', 'groom', '', '', 0),
(4, '', 'palak', '', '', 0),
(5, '', 'Mihir', '', '', 0),
(6, '', 'sdsd', '', '', 0),
(7, '', 'dsd', '', '', 0),
(8, '', 'kavita', '', '', 0),
(9, '9_folderImage.jpg', 'Rupal', 'php', 'siduw8en uieyw uiewy uehw ', 0),
(10, '', 'Grina', '', '', 0),
(11, '', 'Sanket', '', '', 0),
(12, '', 'Grina', '', '', 0),
(13, '', 'Sanket', '', '', 0),
(14, '', 'Grina', '', '', 0),
(15, '', 'Sanket', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `sch_event` varchar(100) NOT NULL,
  `sch_pic` text NOT NULL,
  `address` text NOT NULL,
  `sch_details` text NOT NULL,
  `date` datetime NOT NULL,
  `user_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `sch_event`, `sch_pic`, `address`, `sch_details`, `date`, `user_code`) VALUES
(1, 'Sangeet', 'https://d397bfy4gvgcdm.cloudfront.net/83834-0230.jpeg', 'Bagban Party Plot, Bodakdev, Ahmedabad', 'Every one should come traditional outfit', '2017-09-26 21:00:00', 1),
(2, 'Ring Ceremony', 'https://i.pinimg.com/736x/aa/83/fa/aa83facbd74ed752486a8a1b7d9a1f28--indian-wedding-decorations-wedding-ceremony-decorations.jpg', 'Bagban Party Plot, Bodakdev, Ahmedabad', 'Every one should come traditional outfit', '2017-09-26 21:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `id` int(10) NOT NULL,
  `bride_id` int(20) NOT NULL,
  `groom_id` int(20) NOT NULL,
  `date` varchar(200) NOT NULL,
  `invitation` text NOT NULL,
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`id`, `bride_id`, `groom_id`, `date`, `invitation`, `code`) VALUES
(1, 2, 3, 'sas', 'sas', 'xyz'),
(2, 4, 5, '23/4/12', 'ieyhw87ue uiwe8w iuewe uewee', 'xyz'),
(4, 8, 9, '21/3/4', 'rekru98e', 'xyz'),
(5, 14, 15, '10 November, 2017', 'invitiation test', 'mMJ21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest_list`
--
ALTER TABLE `guest_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invitation`
--
ALTER TABLE `invitation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `guest_list`
--
ALTER TABLE `guest_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `invitation`
--
ALTER TABLE `invitation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
