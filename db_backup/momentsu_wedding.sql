-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2017 at 11:32 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `momentsu_wedding`
--
CREATE DATABASE IF NOT EXISTS `momentsu_wedding` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `momentsu_wedding`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wedding_id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` text NOT NULL,
  `time` varchar(300) NOT NULL,
  `location` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `wedding_id`, `name`, `date`, `time`, `location`, `image`) VALUES
(6, 8, 'Check In & Lunch', '4 January, 2018', '11:00', 'Kensville Golf & Country Club, Dev Dholera Village, Nal Sarovar Rd, Dist. Ahmedabad (Gujarat) India', '6_eventImage.'),
(7, 8, 'Carnival of love', '4 January, 2018', '14:30', 'Kensville Golf & Country Club, Dev Dholera Village, Nal Sarovar Rd, Dist. Ahmedabad (Gujarat) India', '7_eventImage.'),
(8, 8, 'Sangeet Sandhya', '4 January, 2018', '19:30', 'Kensville Golf & Country Club, Dev Dholera Village, Nal Sarovar Rd, Dist. Ahmedabad (Gujarat) India', '8_eventImage.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `gallery_event` varchar(100) NOT NULL,
  `gallery_pic` text NOT NULL,
  `user_code` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `event_id`, `gallery_event`, `gallery_pic`, `user_code`) VALUES
(1, 4, 'Sangeet', 'https://d397bfy4gvgcdm.cloudfront.net/83834-0230.jpeg', 1),
(2, 4, 'Sangeet', 'https://i.pinimg.com/736x/aa/83/fa/aa83facbd74ed752486a8a1b7d9a1f28--indian-wedding-decorations-wedding-ceremony-decorations.jpg', 1),
(3, 4, 'Sangeet', 'https://i.pinimg.com/736x/aa/83/fa/aa83facbd74ed752486a8a1b7d9a1f28--indian-wedding-decorations-wedding-ceremony-decorations.jpg', 1),
(4, 5, 'Mehndi', 'https://www.hitched.co.uk/images/articleContent/Traditional-Wedding-Mehndi.jpg', 1),
(5, 5, 'Mehndi', 'https://bluenotchjeans.com/wp-content/uploads/2017/01/Latest-Wedding-mehndi-designs-2017.jpg', 1),
(6, 5, 'Mehndi', 'http://www.fashionlady.in/wp-content/uploads/2015/08/mehndi-designs-for-wedding.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guest_list`
--

CREATE TABLE IF NOT EXISTS `guest_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wedding_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `event_access` text NOT NULL,
  `guest_count` int(11) NOT NULL DEFAULT '1',
  `attending` varchar(50) NOT NULL DEFAULT 'yes',
  `arriving_on` varchar(100) NOT NULL,
  `arriving_by` varchar(100) NOT NULL,
  `departing_on` varchar(100) NOT NULL,
  `departing_by` varchar(100) NOT NULL,
  `remarks` text NOT NULL,
  `wishes` text NOT NULL,
  `reason` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `guest_list`
--

INSERT INTO `guest_list` (`id`, `wedding_id`, `profile_id`, `name`, `mobile`, `code`, `event_access`, `guest_count`, `attending`, `arriving_on`, `arriving_by`, `departing_on`, `departing_by`, `remarks`, `wishes`, `reason`) VALUES
(1, 5, 15, 'Rajan Kaneria', '9879798863', '1003', '[4],[5]', 1, 'yes', '', 'car', '', '', '', '', ''),
(2, 5, 14, 'Ankita Patel', '8320208561', '5871', '[5]', 5, 'yes', '', 'train', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `invitation`
--

CREATE TABLE IF NOT EXISTS `invitation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groom_pic` text NOT NULL,
  `bride_pic` text NOT NULL,
  `groom_name` varchar(100) NOT NULL,
  `bride_name` varchar(100) NOT NULL,
  `inv_name` varchar(100) NOT NULL,
  `inv_details` text NOT NULL,
  `user_code` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `invitation`
--

INSERT INTO `invitation` (`id`, `groom_pic`, `bride_pic`, `groom_name`, `bride_name`, `inv_name`, `inv_details`, `user_code`) VALUES
(1, 'http://4.bp.blogspot.com/-cBEdk4Cz-UM/UO_Dt2G06MI/AAAAAAAAC2o/X9lJ0FPOLGA/s1600/dashing20boys20wallpapers.jpg', 'http://sguru.org/wp-content/uploads/2017/04/cute-girl-dp-for-whatsapp-27.jpg', 'John Doe', 'Jenny Bae', 'Ankita Patel', 'Android is a mobile operating system developed by Google, based on the Linux kernel and designed primarily for touchscreen mobile devices such as smartphones and tablets. Android''s user interface is mainly based on direct manipulation, using touch gestures that loosely correspond to real-world actions, such as swiping, tapping and pinching, to manipulate on-screen objects, along with a virtual keyboard for text input. In addition to touchscreen devices, Google has further developed Android TV for televisions, Android Auto for cars, and Android Wear for wrist watches, each with a specialized user interface. Variants of Android are also used on game consoles, digital cameras, PCs and other electronics.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_relation` varchar(100) NOT NULL,
  `member_pic` text NOT NULL,
  `member_details` text NOT NULL,
  `user_code` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `profile_id`, `member_name`, `member_relation`, `member_pic`, `member_details`, `user_code`) VALUES
(1, 15, 'Pravinbhai Patel', 'Father', 'http://4.bp.blogspot.com/-cBEdk4Cz-UM/UO_Dt2G06MI/AAAAAAAAC2o/X9lJ0FPOLGA/s1600/dashing20boys20wallpapers.jpg', 'There is no who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 1),
(2, 15, 'Parvatiben Patel', 'Mother', 'http://sguru.org/wp-content/uploads/2017/04/cute-girl-dp-for-whatsapp-27.jpg', 'There is no who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 1),
(3, 15, 'Parth Patel', 'Brother', 'http://4.bp.blogspot.com/-cBEdk4Cz-UM/UO_Dt2G06MI/AAAAAAAAC2o/X9lJ0FPOLGA/s1600/dashing20boys20wallpapers.jpg', 'There is no who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 1),
(4, 14, 'Pravinbhai Patel', 'Father', 'http://4.bp.blogspot.com/-cBEdk4Cz-UM/UO_Dt2G06MI/AAAAAAAAC2o/X9lJ0FPOLGA/s1600/dashing20boys20wallpapers.jpg', 'There is no who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 1),
(5, 14, 'Parvatiben Patel', 'Mother', 'http://sguru.org/wp-content/uploads/2017/04/cute-girl-dp-for-whatsapp-27.jpg', 'There is no who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 1),
(6, 14, 'Parth Patel', 'Brother', 'http://4.bp.blogspot.com/-cBEdk4Cz-UM/UO_Dt2G06MI/AAAAAAAAC2o/X9lJ0FPOLGA/s1600/dashing20boys20wallpapers.jpg', 'There is no who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_pic` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `profile_details` text NOT NULL,
  `user_code` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `profile_pic`, `name`, `occupation`, `profile_details`, `user_code`) VALUES
(20, '20_profileImage.jpeg', 'Yesha', '', '', 0),
(21, '21_profileImage.jpeg', 'Rishabh', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_event` varchar(100) NOT NULL,
  `sch_pic` text NOT NULL,
  `address` text NOT NULL,
  `sch_details` text NOT NULL,
  `date` datetime NOT NULL,
  `user_code` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `wedding` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bride_id` int(20) NOT NULL,
  `groom_id` int(20) NOT NULL,
  `date` varchar(200) NOT NULL,
  `invitation` text NOT NULL,
  `code` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`id`, `bride_id`, `groom_id`, `date`, `invitation`, `code`) VALUES
(8, 20, 21, '5 January, 2018', 'Punam and Parag Rasiklal Sheth request the pleasure of your company on the joyous occasion to celebrate the special love that is shared by their son Rishabh & Yesha the daughter of Alpa and Snehal Ratilal Kotadia. This beautiful beginning will symbolize the infinity of love, pledge in front of family, driends and God above. Your presence will make the wedding more memorable.', 'gQSPx');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
