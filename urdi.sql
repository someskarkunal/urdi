-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 08:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urdi`
--

-- --------------------------------------------------------

--
-- Table structure for table `advttable`
--

CREATE TABLE `advttable` (
  `advtid` int(11) NOT NULL,
  `adtype` varchar(50) NOT NULL,
  `adpath` varchar(120) NOT NULL,
  `adlink` varchar(500) NOT NULL,
  `adimgname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advttable`
--

INSERT INTO `advttable` (`advtid`, `adtype`, `adpath`, `adlink`, `adimgname`) VALUES
(1, 'Horizontal Advt 1', 'C:xampp	mpphp6CEC.tmp', 'https://www.materialrecycling.in/fe_singleart?id=106&title=Karnataka-plans-new-rules-for-e-waste-management-', 'hban1.png'),
(2, 'Horizontal Advt 2', 'C:xampp	mpphp9824.tmp', 'https://www.materialrecycling.in/fe_singleart?id=106&title=Karnataka-plans-new-rules-for-e-waste-management-', 'hban2.png'),
(3, 'Vertical Advt 1', 'C:xampp	mpphp2D23.tmp', 'https://www.materialrecycling.in/fe_singleart?id=106&title=Karnataka-plans-new-rules-for-e-waste-management-', 'vban1.png');

-- --------------------------------------------------------

--
-- Table structure for table `aeoregservices`
--

CREATE TABLE `aeoregservices` (
  `id` int(11) NOT NULL,
  `submitDate` date NOT NULL DEFAULT current_timestamp(),
  `clientName` varchar(120) NOT NULL,
  `companyName` varchar(120) NOT NULL,
  `clientEmail` varchar(120) NOT NULL,
  `clientwhatsApp` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aeoregservices`
--

INSERT INTO `aeoregservices` (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`) VALUES
(1, '2023-05-26', 'aaa', 'aaaa', 'a@a.com', 123),
(2, '2023-05-26', 'aa', 'aa', 'a@a.com', 0),
(3, '2023-05-26', 'aa', 'aa', 'a@a.com', 0),
(4, '2023-05-26', 'ww', 'ww', 'w@a.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `cimg_id` int(11) NOT NULL,
  `cimg_name` varchar(50) NOT NULL,
  `cimg_path` varchar(500) NOT NULL,
  `cimg_topic` varchar(50) NOT NULL,
  `cimg_title` varchar(120) NOT NULL,
  `cimg_desc` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`cimg_id`, `cimg_name`, `cimg_path`, `cimg_topic`, `cimg_title`, `cimg_desc`) VALUES
(1, 'pexels-pixabay-147411.jpg', 'C:xampp	mpphp12FD.tmp', 'topic', 'Sample Title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna nunc id cursus metus aliquam eleifend mi. Elit duis tristique sollicitudin nibh. Diam in arcu cursus euismod quis viverra nibh cras. Diam ut venenatis tellus in metus. Vitae sapien pellentesque habitant morbi tristique senectus et netus. Vel turpis nunc eget lorem dolor sed viverra. Ipsum dolor sit amet consectetur adipiscing. Nullam ac tortor vitae purus. Consequat nisl vel pretium lectus quam id leo. Quam pellentesque nec nam aliquam sem. Suspendisse faucibus interdum posuere lorem. Habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat. Proin libero nunc consequat interdum varius sit amet. Elit at imperdiet dui accumsan sit amet nulla.\r\n\r\nFermentum iaculis eu non diam. Aliquam eleifend mi in nulla posuere. Ut sem viverra aliquet eget sit. Feugiat in fermentum posuere urna nec tincidunt. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Sed risus ultricies tristique nulla aliquet. Integer enim neque volutpat ac tincidunt vitae. Lacus laoreet non curabitur gravida arcu ac. Volutpat lacus laoreet non curabitur gravida arcu ac. Mattis aliquam faucibus purus in. Orci eu lobortis elementum nibh tellus. Ac tortor vitae purus faucibus. Donec enim diam vulputate ut pharetra sit amet aliquam. Ut venenatis tellus in metus vulputate eu scelerisque felis. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Id leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nVelit laoreet id donec ultrices tincidunt arcu non sodales neque. Sapien eget mi proin sed libero enim sed faucibus. Lacus viverra vitae congue eu consequat ac felis donec et. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. Pharetra diam sit amet nisl suscipit adipiscing bibendum est. Sit amet est placerat in. Sed faucibus turpis in eu mi bibendum neque egestas congue. Mattis enim ut tellus elementum sagittis vitae et leo duis. Erat imperdiet sed euismod nisi porta lorem mollis. Consequat ac felis donec et odio pellentesque diam volutpat commodo. Sed blandit libero volutpat sed cras ornare. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Lorem mollis aliquam ut porttitor leo a diam.'),
(2, 'pexels-eberhard-grossgasteiger-1287145.jpg', 'C:xampp	mpphp65A9.tmp', 'topic', 'Sample Title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna nunc id cursus metus aliquam eleifend mi. Elit duis tristique sollicitudin nibh. Diam in arcu cursus euismod quis viverra nibh cras. Diam ut venenatis tellus in metus. Vitae sapien pellentesque habitant morbi tristique senectus et netus. Vel turpis nunc eget lorem dolor sed viverra. Ipsum dolor sit amet consectetur adipiscing. Nullam ac tortor vitae purus. Consequat nisl vel pretium lectus quam id leo. Quam pellentesque nec nam aliquam sem. Suspendisse faucibus interdum posuere lorem. Habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat. Proin libero nunc consequat interdum varius sit amet. Elit at imperdiet dui accumsan sit amet nulla.\r\n\r\nFermentum iaculis eu non diam. Aliquam eleifend mi in nulla posuere. Ut sem viverra aliquet eget sit. Feugiat in fermentum posuere urna nec tincidunt. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Sed risus ultricies tristique nulla aliquet. Integer enim neque volutpat ac tincidunt vitae. Lacus laoreet non curabitur gravida arcu ac. Volutpat lacus laoreet non curabitur gravida arcu ac. Mattis aliquam faucibus purus in. Orci eu lobortis elementum nibh tellus. Ac tortor vitae purus faucibus. Donec enim diam vulputate ut pharetra sit amet aliquam. Ut venenatis tellus in metus vulputate eu scelerisque felis. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Id leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nVelit laoreet id donec ultrices tincidunt arcu non sodales neque. Sapien eget mi proin sed libero enim sed faucibus. Lacus viverra vitae congue eu consequat ac felis donec et. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. Pharetra diam sit amet nisl suscipit adipiscing bibendum est. Sit amet est placerat in. Sed faucibus turpis in eu mi bibendum neque egestas congue. Mattis enim ut tellus elementum sagittis vitae et leo duis. Erat imperdiet sed euismod nisi porta lorem mollis. Consequat ac felis donec et odio pellentesque diam volutpat commodo. Sed blandit libero volutpat sed cras ornare. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Lorem mollis aliquam ut porttitor leo a diam.'),
(3, 'pexels-ezra-comeau-2387418.jpg', 'C:xampp	mpphpF736.tmp', 'topic', 'Sample Title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna nunc id cursus metus aliquam eleifend mi. Elit duis tristique sollicitudin nibh. Diam in arcu cursus euismod quis viverra nibh cras. Diam ut venenatis tellus in metus. Vitae sapien pellentesque habitant morbi tristique senectus et netus. Vel turpis nunc eget lorem dolor sed viverra. Ipsum dolor sit amet consectetur adipiscing. Nullam ac tortor vitae purus. Consequat nisl vel pretium lectus quam id leo. Quam pellentesque nec nam aliquam sem. Suspendisse faucibus interdum posuere lorem. Habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat. Proin libero nunc consequat interdum varius sit amet. Elit at imperdiet dui accumsan sit amet nulla.\r\n\r\nFermentum iaculis eu non diam. Aliquam eleifend mi in nulla posuere. Ut sem viverra aliquet eget sit. Feugiat in fermentum posuere urna nec tincidunt. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Sed risus ultricies tristique nulla aliquet. Integer enim neque volutpat ac tincidunt vitae. Lacus laoreet non curabitur gravida arcu ac. Volutpat lacus laoreet non curabitur gravida arcu ac. Mattis aliquam faucibus purus in. Orci eu lobortis elementum nibh tellus. Ac tortor vitae purus faucibus. Donec enim diam vulputate ut pharetra sit amet aliquam. Ut venenatis tellus in metus vulputate eu scelerisque felis. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Id leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nVelit laoreet id donec ultrices tincidunt arcu non sodales neque. Sapien eget mi proin sed libero enim sed faucibus. Lacus viverra vitae congue eu consequat ac felis donec et. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. Pharetra diam sit amet nisl suscipit adipiscing bibendum est. Sit amet est placerat in. Sed faucibus turpis in eu mi bibendum neque egestas congue. Mattis enim ut tellus elementum sagittis vitae et leo duis. Erat imperdiet sed euismod nisi porta lorem mollis. Consequat ac felis donec et odio pellentesque diam volutpat commodo. Sed blandit libero volutpat sed cras ornare. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Lorem mollis aliquam ut porttitor leo a diam.'),
(4, 'pexels-francesco-ungaro-2325446.jpg', 'C:xampp	mpphp1280.tmp', 'topic', 'Sample Title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna nunc id cursus metus aliquam eleifend mi. Elit duis tristique sollicitudin nibh. Diam in arcu cursus euismod quis viverra nibh cras. Diam ut venenatis tellus in metus. Vitae sapien pellentesque habitant morbi tristique senectus et netus. Vel turpis nunc eget lorem dolor sed viverra. Ipsum dolor sit amet consectetur adipiscing. Nullam ac tortor vitae purus. Consequat nisl vel pretium lectus quam id leo. Quam pellentesque nec nam aliquam sem. Suspendisse faucibus interdum posuere lorem. Habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat. Proin libero nunc consequat interdum varius sit amet. Elit at imperdiet dui accumsan sit amet nulla.\r\n\r\nFermentum iaculis eu non diam. Aliquam eleifend mi in nulla posuere. Ut sem viverra aliquet eget sit. Feugiat in fermentum posuere urna nec tincidunt. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Sed risus ultricies tristique nulla aliquet. Integer enim neque volutpat ac tincidunt vitae. Lacus laoreet non curabitur gravida arcu ac. Volutpat lacus laoreet non curabitur gravida arcu ac. Mattis aliquam faucibus purus in. Orci eu lobortis elementum nibh tellus. Ac tortor vitae purus faucibus. Donec enim diam vulputate ut pharetra sit amet aliquam. Ut venenatis tellus in metus vulputate eu scelerisque felis. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Id leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nVelit laoreet id donec ultrices tincidunt arcu non sodales neque. Sapien eget mi proin sed libero enim sed faucibus. Lacus viverra vitae congue eu consequat ac felis donec et. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. Pharetra diam sit amet nisl suscipit adipiscing bibendum est. Sit amet est placerat in. Sed faucibus turpis in eu mi bibendum neque egestas congue. Mattis enim ut tellus elementum sagittis vitae et leo duis. Erat imperdiet sed euismod nisi porta lorem mollis. Consequat ac felis donec et odio pellentesque diam volutpat commodo. Sed blandit libero volutpat sed cras ornare. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Lorem mollis aliquam ut porttitor leo a diam.'),
(5, 'pexels-jaime-reimer-2662116.jpg', 'C:xampp	mpphp2E37.tmp', 'topic', 'Sample Title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna nunc id cursus metus aliquam eleifend mi. Elit duis tristique sollicitudin nibh. Diam in arcu cursus euismod quis viverra nibh cras. Diam ut venenatis tellus in metus. Vitae sapien pellentesque habitant morbi tristique senectus et netus. Vel turpis nunc eget lorem dolor sed viverra. Ipsum dolor sit amet consectetur adipiscing. Nullam ac tortor vitae purus. Consequat nisl vel pretium lectus quam id leo. Quam pellentesque nec nam aliquam sem. Suspendisse faucibus interdum posuere lorem. Habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat. Proin libero nunc consequat interdum varius sit amet. Elit at imperdiet dui accumsan sit amet nulla.\r\n\r\nFermentum iaculis eu non diam. Aliquam eleifend mi in nulla posuere. Ut sem viverra aliquet eget sit. Feugiat in fermentum posuere urna nec tincidunt. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Sed risus ultricies tristique nulla aliquet. Integer enim neque volutpat ac tincidunt vitae. Lacus laoreet non curabitur gravida arcu ac. Volutpat lacus laoreet non curabitur gravida arcu ac. Mattis aliquam faucibus purus in. Orci eu lobortis elementum nibh tellus. Ac tortor vitae purus faucibus. Donec enim diam vulputate ut pharetra sit amet aliquam. Ut venenatis tellus in metus vulputate eu scelerisque felis. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Id leo in vitae turpis massa sed elementum tempus egestas.\r\n\r\nVelit laoreet id donec ultrices tincidunt arcu non sodales neque. Sapien eget mi proin sed libero enim sed faucibus. Lacus viverra vitae congue eu consequat ac felis donec et. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. Pharetra diam sit amet nisl suscipit adipiscing bibendum est. Sit amet est placerat in. Sed faucibus turpis in eu mi bibendum neque egestas congue. Mattis enim ut tellus elementum sagittis vitae et leo duis. Erat imperdiet sed euismod nisi porta lorem mollis. Consequat ac felis donec et odio pellentesque diam volutpat commodo. Sed blandit libero volutpat sed cras ornare. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Lorem mollis aliquam ut porttitor leo a diam.');

-- --------------------------------------------------------

--
-- Table structure for table `dataservices`
--

CREATE TABLE `dataservices` (
  `id` int(11) NOT NULL,
  `submitDate` date NOT NULL DEFAULT current_timestamp(),
  `clientName` varchar(120) NOT NULL,
  `companyName` varchar(120) NOT NULL,
  `clientEmail` varchar(120) NOT NULL,
  `clientwhatsApp` int(15) DEFAULT NULL,
  `dscb1` tinyint(1) DEFAULT NULL,
  `dscb2` tinyint(1) DEFAULT NULL,
  `dscb3` tinyint(1) DEFAULT NULL,
  `dscb4` tinyint(1) DEFAULT NULL,
  `dscb5` tinyint(1) DEFAULT NULL,
  `dscb6` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dataservices`
--

INSERT INTO `dataservices` (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`, `dscb1`, `dscb2`, `dscb3`, `dscb4`, `dscb5`, `dscb6`) VALUES
(1, '2023-05-26', 'a', 'a', 'a@a.com', 0, 1, 1, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `infoservices`
--

CREATE TABLE `infoservices` (
  `id` int(11) NOT NULL,
  `submitDate` date NOT NULL DEFAULT current_timestamp(),
  `clientName` varchar(120) NOT NULL,
  `companyName` varchar(120) NOT NULL,
  `clientEmail` varchar(120) NOT NULL,
  `clientwhatsApp` int(15) DEFAULT NULL,
  `weekly` tinyint(1) DEFAULT NULL,
  `fortnightly` tinyint(1) DEFAULT NULL,
  `monthly` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infoservices`
--

INSERT INTO `infoservices` (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`, `weekly`, `fortnightly`, `monthly`) VALUES
(1, '2023-05-26', 'a', 'a', 'a@a.com', 1234, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsimage`
--

CREATE TABLE `newsimage` (
  `nimg_id` int(11) NOT NULL,
  `nimg_name` varchar(50) NOT NULL,
  `nimg_path` varchar(500) NOT NULL,
  `nimg_desc` varchar(500) NOT NULL,
  `nimg_blogtitle` varchar(25) NOT NULL,
  `nimg_blogtext` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsimage`
--

INSERT INTO `newsimage` (`nimg_id`, `nimg_name`, `nimg_path`, `nimg_desc`, `nimg_blogtitle`, `nimg_blogtext`) VALUES
(1, 'pexels-jaime-reimer-2662116.jpg', 'C:xampp	mpphp6C26.tmp', 'blog 1', '', ''),
(2, 'pexels-francesco-ungaro-2325446.jpg', 'C:xampp	mpphpE280.tmp', 'blog 2', '', ''),
(3, 'pexels-ezra-comeau-2387418.jpg', 'C:xampp	mpphp4562.tmp', 'blog 3', '', ''),
(4, 'pexels-eberhard-grossgasteiger-1287145.jpg', 'C:xampp	mpphp6AFC.tmp', 'blog 4', '', ''),
(5, 'pexels-pixabay-147411.jpg', 'C:xampp	mpphp8EC1.tmp', 'blog 5', '', ''),
(6, 'pexels-eberhard-grossgasteiger-1287145.jpg', 'C:xampp	mpphp8C96.tmp', 'test img', 'image blog title 1', 'test blog text');

-- --------------------------------------------------------

--
-- Table structure for table `newsvideo`
--

CREATE TABLE `newsvideo` (
  `nvid_id` int(11) NOT NULL,
  `nvid_name` varchar(50) NOT NULL,
  `nvid_path` varchar(500) NOT NULL,
  `nvid_desc` varchar(500) NOT NULL,
  `nvid_blogtitle` varchar(25) NOT NULL,
  `nvid_blogtext` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsvideo`
--

INSERT INTO `newsvideo` (`nvid_id`, `nvid_name`, `nvid_path`, `nvid_desc`, `nvid_blogtitle`, `nvid_blogtext`) VALUES
(1, '2022-02-19 15-30-00.mp4', 'C:xampp	mpphp5600.tmp', 'abcd', 'abcd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna nunc id cursus metus aliquam eleifend mi. Elit duis tristique sollicitudin nibh. Diam in arcu cursus euismod quis viverra nibh cras. Diam ut venenatis tellus in metus. Vitae sapien pellentesque habitant morbi tristique senectus et netus. Vel turpis nunc eget lorem dolor sed viverra. Ipsum dolor sit amet consectetur adipiscing. Nullam ac tortor vitae purus. Consequat nisl vel pretium lectus quam id leo. Quam pellentesque nec nam aliquam sem. Suspendisse faucibus interdum posuere lorem. Habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat. Proin libero nunc consequat interdum varius sit amet. Elit at imperdiet dui accumsan sit amet nulla.  Fermentum iaculis eu non diam. Aliquam eleifend mi in nulla posuere. Ut sem viverra aliquet eget sit. Feugiat in fermentum posuere urna nec tincidunt. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Sed risus ultricies tristique nulla aliquet. Integer enim neque volutpat ac tincidunt vitae. Lacus laoreet non curabitur gravida arcu ac. Volutpat lacus laoreet non curabitur gravida arcu ac. Mattis aliquam faucibus purus in. Orci eu lobortis elementum nibh tellus. Ac tortor vitae purus faucibus. Donec enim diam vulputate ut pharetra sit amet aliquam. Ut venenatis tellus in metus vulputate eu scelerisque felis. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Id leo in vitae turpis massa sed elementum tempus egestas.  Velit laoreet id donec ultrices tincidunt arcu non sodales neque. Sapien eget mi proin sed libero enim sed faucibus. Lacus viverra vitae congue eu consequat ac felis donec et. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. Pharetra diam sit amet nisl suscipit adipiscing bibendum est. Sit amet est placerat in. Sed faucibus turpis in eu mi bibendum neque egestas congue. Mattis enim ut tellus elementum sagittis vitae et leo duis. Erat imperdiet sed euismod nisi porta lorem mollis. Consequat ac felis donec et odio pellentesque diam volutpat commodo. Sed blandit libero volutpat sed cras ornare. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Lorem mollis aliquam ut porttitor leo a diam.'),
(2, '2022-02-19 15-30-00.mp4', 'C:xampp	mpphp9D1D.tmp', 'qwer', 'qwert', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna nunc id cursus metus aliquam eleifend mi. Elit duis tristique sollicitudin nibh. Diam in arcu cursus euismod quis viverra nibh cras. Diam ut venenatis tellus in metus. Vitae sapien pellentesque habitant morbi tristique senectus et netus. Vel turpis nunc eget lorem dolor sed viverra. Ipsum dolor sit amet consectetur adipiscing. Nullam ac tortor vitae purus. Consequat nisl vel pretium lectus quam id leo. Quam pellentesque nec nam aliquam sem. Suspendisse faucibus interdum posuere lorem. Habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat. Proin libero nunc consequat interdum varius sit amet. Elit at imperdiet dui accumsan sit amet nulla.  Fermentum iaculis eu non diam. Aliquam eleifend mi in nulla posuere. Ut sem viverra aliquet eget sit. Feugiat in fermentum posuere urna nec tincidunt. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Sed risus ultricies tristique nulla aliquet. Integer enim neque volutpat ac tincidunt vitae. Lacus laoreet non curabitur gravida arcu ac. Volutpat lacus laoreet non curabitur gravida arcu ac. Mattis aliquam faucibus purus in. Orci eu lobortis elementum nibh tellus. Ac tortor vitae purus faucibus. Donec enim diam vulputate ut pharetra sit amet aliquam. Ut venenatis tellus in metus vulputate eu scelerisque felis. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Id leo in vitae turpis massa sed elementum tempus egestas.  Velit laoreet id donec ultrices tincidunt arcu non sodales neque. Sapien eget mi proin sed libero enim sed faucibus. Lacus viverra vitae congue eu consequat ac felis donec et. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. Pharetra diam sit amet nisl suscipit adipiscing bibendum est. Sit amet est placerat in. Sed faucibus turpis in eu mi bibendum neque egestas congue. Mattis enim ut tellus elementum sagittis vitae et leo duis. Erat imperdiet sed euismod nisi porta lorem mollis. Consequat ac felis donec et odio pellentesque diam volutpat commodo. Sed blandit libero volutpat sed cras ornare. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Lorem mollis aliquam ut porttitor leo a diam.'),
(3, '2022-02-19 15-30-00.mp4', 'C:xampp	mpphpC9.tmp', 'asjv', 'shd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna nunc id cursus metus aliquam eleifend mi. Elit duis tristique sollicitudin nibh. Diam in arcu cursus euismod quis viverra nibh cras. Diam ut venenatis tellus in metus. Vitae sapien pellentesque habitant morbi tristique senectus et netus. Vel turpis nunc eget lorem dolor sed viverra. Ipsum dolor sit amet consectetur adipiscing. Nullam ac tortor vitae purus. Consequat nisl vel pretium lectus quam id leo. Quam pellentesque nec nam aliquam sem. Suspendisse faucibus interdum posuere lorem. Habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat. Proin libero nunc consequat interdum varius sit amet. Elit at imperdiet dui accumsan sit amet nulla.  Fermentum iaculis eu non diam. Aliquam eleifend mi in nulla posuere. Ut sem viverra aliquet eget sit. Feugiat in fermentum posuere urna nec tincidunt. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Sed risus ultricies tristique nulla aliquet. Integer enim neque volutpat ac tincidunt vitae. Lacus laoreet non curabitur gravida arcu ac. Volutpat lacus laoreet non curabitur gravida arcu ac. Mattis aliquam faucibus purus in. Orci eu lobortis elementum nibh tellus. Ac tortor vitae purus faucibus. Donec enim diam vulputate ut pharetra sit amet aliquam. Ut venenatis tellus in metus vulputate eu scelerisque felis. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Id leo in vitae turpis massa sed elementum tempus egestas.  Velit laoreet id donec ultrices tincidunt arcu non sodales neque. Sapien eget mi proin sed libero enim sed faucibus. Lacus viverra vitae congue eu consequat ac felis donec et. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. Pharetra diam sit amet nisl suscipit adipiscing bibendum est. Sit amet est placerat in. Sed faucibus turpis in eu mi bibendum neque egestas congue. Mattis enim ut tellus elementum sagittis vitae et leo duis. Erat imperdiet sed euismod nisi porta lorem mollis. Consequat ac felis donec et odio pellentesque diam volutpat commodo. Sed blandit libero volutpat sed cras ornare. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Lorem mollis aliquam ut porttitor leo a diam.'),
(4, '2022-02-19 15-30-00.mp4', 'C:xampp	mpphp2E53.tmp', 'sgfkhbk', 'KJBDS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna nunc id cursus metus aliquam eleifend mi. Elit duis tristique sollicitudin nibh. Diam in arcu cursus euismod quis viverra nibh cras. Diam ut venenatis tellus in metus. Vitae sapien pellentesque habitant morbi tristique senectus et netus. Vel turpis nunc eget lorem dolor sed viverra. Ipsum dolor sit amet consectetur adipiscing. Nullam ac tortor vitae purus. Consequat nisl vel pretium lectus quam id leo. Quam pellentesque nec nam aliquam sem. Suspendisse faucibus interdum posuere lorem. Habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat. Proin libero nunc consequat interdum varius sit amet. Elit at imperdiet dui accumsan sit amet nulla.  Fermentum iaculis eu non diam. Aliquam eleifend mi in nulla posuere. Ut sem viverra aliquet eget sit. Feugiat in fermentum posuere urna nec tincidunt. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Sed risus ultricies tristique nulla aliquet. Integer enim neque volutpat ac tincidunt vitae. Lacus laoreet non curabitur gravida arcu ac. Volutpat lacus laoreet non curabitur gravida arcu ac. Mattis aliquam faucibus purus in. Orci eu lobortis elementum nibh tellus. Ac tortor vitae purus faucibus. Donec enim diam vulputate ut pharetra sit amet aliquam. Ut venenatis tellus in metus vulputate eu scelerisque felis. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Id leo in vitae turpis massa sed elementum tempus egestas.  Velit laoreet id donec ultrices tincidunt arcu non sodales neque. Sapien eget mi proin sed libero enim sed faucibus. Lacus viverra vitae congue eu consequat ac felis donec et. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. Pharetra diam sit amet nisl suscipit adipiscing bibendum est. Sit amet est placerat in. Sed faucibus turpis in eu mi bibendum neque egestas congue. Mattis enim ut tellus elementum sagittis vitae et leo duis. Erat imperdiet sed euismod nisi porta lorem mollis. Consequat ac felis donec et odio pellentesque diam volutpat commodo. Sed blandit libero volutpat sed cras ornare. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Lorem mollis aliquam ut porttitor leo a diam.'),
(5, '2022-02-19 15-30-00.mp4', 'C:xampp	mpphp4F3A.tmp', 'dzvcb ', 'kjxbnjn', 'dfkjbnLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna nunc id cursus metus aliquam eleifend mi. Elit duis tristique sollicitudin nibh. Diam in arcu cursus euismod quis viverra nibh cras. Diam ut venenatis tellus in metus. Vitae sapien pellentesque habitant morbi tristique senectus et netus. Vel turpis nunc eget lorem dolor sed viverra. Ipsum dolor sit amet consectetur adipiscing. Nullam ac tortor vitae purus. Consequat nisl vel pretium lectus quam id leo. Quam pellentesque nec nam aliquam sem. Suspendisse faucibus interdum posuere lorem. Habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat. Proin libero nunc consequat interdum varius sit amet. Elit at imperdiet dui accumsan sit amet nulla.  Fermentum iaculis eu non diam. Aliquam eleifend mi in nulla posuere. Ut sem viverra aliquet eget sit. Feugiat in fermentum posuere urna nec tincidunt. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Sed risus ultricies tristique nulla aliquet. Integer enim neque volutpat ac tincidunt vitae. Lacus laoreet non curabitur gravida arcu ac. Volutpat lacus laoreet non curabitur gravida arcu ac. Mattis aliquam faucibus purus in. Orci eu lobortis elementum nibh tellus. Ac tortor vitae purus faucibus. Donec enim diam vulputate ut pharetra sit amet aliquam. Ut venenatis tellus in metus vulputate eu scelerisque felis. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Id leo in vitae turpis massa sed elementum tempus egestas.  Velit laoreet id donec ultrices tincidunt arcu non sodales neque. Sapien eget mi proin sed libero enim sed faucibus. Lacus viverra vitae congue eu consequat ac felis donec et. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. Pharetra diam sit amet nisl suscipit adipiscing bibendum est. Sit amet est placerat in. Sed faucibus turpis in eu mi bibendum neque egestas congue. Mattis enim ut tellus elementum sagittis vitae et leo duis. Erat imperdiet sed euismod nisi porta lorem mollis. Consequat ac felis donec et odio pellentesque diam volutpat commodo. Sed blandit libero volutpat sed cras ornare. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Lorem mollis aliquam ut porttitor leo a diam.');

-- --------------------------------------------------------

--
-- Table structure for table `recyclingshivir`
--

CREATE TABLE `recyclingshivir` (
  `id` int(11) NOT NULL,
  `submitDate` date NOT NULL DEFAULT current_timestamp(),
  `clientName` varchar(120) NOT NULL,
  `companyName` varchar(120) NOT NULL,
  `clientEmail` varchar(120) NOT NULL,
  `clientwhatsApp` int(15) DEFAULT NULL,
  `weekly` tinyint(1) DEFAULT NULL,
  `fortnightly` tinyint(1) DEFAULT NULL,
  `monthly` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recyclingshivir`
--

INSERT INTO `recyclingshivir` (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`, `weekly`, `fortnightly`, `monthly`) VALUES
(1, '2023-05-26', 'b', 'ba', 'b@b.com', 11, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `researchreports`
--

CREATE TABLE `researchreports` (
  `id` int(11) NOT NULL,
  `submitDate` date NOT NULL DEFAULT current_timestamp(),
  `clientName` varchar(120) NOT NULL,
  `companyName` varchar(120) NOT NULL,
  `clientEmail` varchar(120) NOT NULL,
  `clientwhatsApp` int(15) DEFAULT NULL,
  `rrcb1` tinyint(1) NOT NULL,
  `rrcb2` tinyint(1) NOT NULL,
  `rrcb3` tinyint(1) NOT NULL,
  `rrcb4` tinyint(1) NOT NULL,
  `rrcb5` tinyint(1) NOT NULL,
  `rrcb6` tinyint(1) NOT NULL,
  `rrcb7` tinyint(1) NOT NULL,
  `rrcb8` tinyint(1) NOT NULL,
  `rrcb9` tinyint(1) NOT NULL,
  `rrcb10` tinyint(1) NOT NULL,
  `rrcb11` tinyint(1) NOT NULL,
  `rrcb12` tinyint(1) NOT NULL,
  `rrcb13` tinyint(1) NOT NULL,
  `rrcb14` tinyint(1) NOT NULL,
  `rrcb15` tinyint(1) NOT NULL,
  `rrcb16` tinyint(1) NOT NULL,
  `rrcb17` tinyint(1) NOT NULL,
  `rrcb18` tinyint(1) NOT NULL,
  `rrcb19` tinyint(1) NOT NULL,
  `rrcb20` tinyint(1) NOT NULL,
  `rrcb21` tinyint(1) NOT NULL,
  `rrcb22` tinyint(1) NOT NULL,
  `rrcb23` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `researchreports`
--

INSERT INTO `researchreports` (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`, `rrcb1`, `rrcb2`, `rrcb3`, `rrcb4`, `rrcb5`, `rrcb6`, `rrcb7`, `rrcb8`, `rrcb9`, `rrcb10`, `rrcb11`, `rrcb12`, `rrcb13`, `rrcb14`, `rrcb15`, `rrcb16`, `rrcb17`, `rrcb18`, `rrcb19`, `rrcb20`, `rrcb21`, `rrcb22`, `rrcb23`) VALUES
(1, '0000-00-00', 'abc', 'a', 'a@a.com', 1234567890, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, '2023-05-26', 'b', 'b', 'b@b.com', 987654321, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(3, '2023-05-26', 'aaaaaa', 'aaaaa', 'a@a.com', 1234, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '2023-05-26', 'aaaaaa', 'aaaaa', 'a@a.com', 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rndtraining`
--

CREATE TABLE `rndtraining` (
  `id` int(11) NOT NULL,
  `submitDate` date NOT NULL DEFAULT current_timestamp(),
  `clientName` varchar(120) NOT NULL,
  `companyName` varchar(120) NOT NULL,
  `clientEmail` varchar(120) NOT NULL,
  `clientwhatsApp` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rndtraining`
--

INSERT INTO `rndtraining` (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`) VALUES
(1, '2023-05-26', 'aa', 'aa', 'a@a.com', 1322);

-- --------------------------------------------------------

--
-- Table structure for table `specialassignments`
--

CREATE TABLE `specialassignments` (
  `id` int(11) NOT NULL,
  `submitDate` date NOT NULL DEFAULT current_timestamp(),
  `clientName` varchar(120) NOT NULL,
  `companyName` varchar(120) NOT NULL,
  `clientEmail` varchar(120) NOT NULL,
  `clientwhatsApp` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specialassignments`
--

INSERT INTO `specialassignments` (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`) VALUES
(1, '2023-05-26', 'ww', 'ww', 'w@a.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE `tbllogin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `videomagazine`
--

CREATE TABLE `videomagazine` (
  `id` int(11) NOT NULL,
  `submitDate` date NOT NULL DEFAULT current_timestamp(),
  `clientName` varchar(120) NOT NULL,
  `companyName` varchar(120) NOT NULL,
  `clientEmail` varchar(120) NOT NULL,
  `clientwhatsApp` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videomagazine`
--

INSERT INTO `videomagazine` (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`) VALUES
(1, '2023-05-26', 'a', 'a', 'a@a.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advttable`
--
ALTER TABLE `advttable`
  ADD PRIMARY KEY (`advtid`);

--
-- Indexes for table `aeoregservices`
--
ALTER TABLE `aeoregservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`cimg_id`);

--
-- Indexes for table `dataservices`
--
ALTER TABLE `dataservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infoservices`
--
ALTER TABLE `infoservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsimage`
--
ALTER TABLE `newsimage`
  ADD PRIMARY KEY (`nimg_id`);

--
-- Indexes for table `newsvideo`
--
ALTER TABLE `newsvideo`
  ADD PRIMARY KEY (`nvid_id`);

--
-- Indexes for table `recyclingshivir`
--
ALTER TABLE `recyclingshivir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researchreports`
--
ALTER TABLE `researchreports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rndtraining`
--
ALTER TABLE `rndtraining`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialassignments`
--
ALTER TABLE `specialassignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videomagazine`
--
ALTER TABLE `videomagazine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advttable`
--
ALTER TABLE `advttable`
  MODIFY `advtid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aeoregservices`
--
ALTER TABLE `aeoregservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `cimg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dataservices`
--
ALTER TABLE `dataservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infoservices`
--
ALTER TABLE `infoservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsimage`
--
ALTER TABLE `newsimage`
  MODIFY `nimg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `newsvideo`
--
ALTER TABLE `newsvideo`
  MODIFY `nvid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recyclingshivir`
--
ALTER TABLE `recyclingshivir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `researchreports`
--
ALTER TABLE `researchreports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rndtraining`
--
ALTER TABLE `rndtraining`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specialassignments`
--
ALTER TABLE `specialassignments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbllogin`
--
ALTER TABLE `tbllogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videomagazine`
--
ALTER TABLE `videomagazine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
