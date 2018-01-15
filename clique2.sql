-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2017 at 10:00 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clique2`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `username`, `password`) VALUES
(49, 'iafbd24@gmail.com', 'mihaf24', '25d55ad283aa400af464c76d713c07ad'),
(52, 'iafbd243@gmail.com', 'mihaf', '25d55ad283aa400af464c76d713c07ad'),
(56, 'iafbd244@gmail.com', 'mihaf1', '25d55ad283aa400af464c76d713c07ad'),
(57, 'tama86@gmail.com', 'tama', '25d55ad283aa400af464c76d713c07ad'),
(58, 'tama861@gmail.com', 'tama2', '25d55ad283aa400af464c76d713c07ad'),
(59, 'tama863@gmail.com', 'tama3', '25d55ad283aa400af464c76d713c07ad'),
(60, 'tama864@gmail.com', 'tama4', '25d55ad283aa400af464c76d713c07ad'),
(61, 'tama85@gmail.com', 'tama5', '25d55ad283aa400af464c76d713c07ad'),
(62, 'iafbd247@gmail.com', 'tama7', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `image` varchar(30) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `instituition` varchar(20) NOT NULL,
  `description` longtext NOT NULL,
  `aboutmywork` longtext NOT NULL,
  `skills` longtext NOT NULL,
  `occupation` longtext NOT NULL,
  `highest_edu` mediumtext NOT NULL,
  `school` varchar(50) NOT NULL,
  `college` varchar(30) NOT NULL,
  `university` varchar(30) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `fbid` varchar(30) NOT NULL,
  `githubid` varchar(20) NOT NULL,
  `stackoverflowid` varchar(20) NOT NULL,
  `otherid` varchar(20) NOT NULL,
  `contact1` int(11) NOT NULL,
  `contact2` int(11) NOT NULL,
  `address1` mediumtext NOT NULL,
  `address2` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `first_name`, `last_name`, `instituition`, `description`, `aboutmywork`, `skills`, `occupation`, `highest_edu`, `school`, `college`, `university`, `degree`, `fbid`, `githubid`, `stackoverflowid`, `otherid`, `contact1`, `contact2`, `address1`, `address2`) VALUES
(49, 'fhm.jpg', 'Imtiaz Ahmed', 'Fahim', 'Ruet', 'Hello there. I am Imtiaz Ahmed Fahim from Ruet CSE department. I am enthusiastic in learning and love to code. love to listen music and surf the net. In my leisure time i go to different restaurant to taste different type of foods. \r\nI Live in Rajshahi now because of my study. but after my graduation i will move to Dhaka. My future plan is starting a software firm where i can work as pleased. ', 'I mainly do web programming. I do both front-end and back-end developing. Currently i am building a website for connecting employer and employee. This would be a great website for the newbies and students who want to work and learn about the professional world ', 'Web Developer,HTML,CSS,PHP,Bootstrap.', 'Student', '', 'Governemt Laboratory High School', 'Dhaka College', 'Ruet', 'BSC Engineering', 'ddd', 'dda', 'dsda', 'asd1', 934982398, 3943949, 'dhaa', 'dhdjdda'),
(52, 'tam.jpg', 'Tahsin ', 'Masrur', 'Ruet', 'hello there. i am Tahsin Masrur currently studying in ruet.Contest Programmer.', 'C Programming', 'Programmer,C, C++, Java, ', 'Student', '', '', '', '', '', '', '', '', '', 0, 0, '', ''),
(56, 'pkp.jpg', 'Pritom Kumar', 'Paul', 'Ruet', 'hello i am pritom kumar.Contest Programmer.', 'C Programming', 'Programmer,C, C++', 'Student', '', 'uaka', 'uaka', 'uaka', '', '', '', '', '', 0, 0, '', ''),
(57, 'nsf.jpg', 'Nasif', 'Mahbub', 'Ruet', 'Hello i am nasif mahbub.Contest Programmer', 'C Programming', 'Programmer,C, C++, Java,', '', '', '', '', '', '', '', '', '', '', 0, 0, '', ''),
(58, 'rmn.jpg', 'Romman', 'Siddique', 'Ruet', 'Hello i am romman', 'Graphics Designing', 'photoshop,lightroom,C,Graphics Design, Construct 2, Game Developer', '', '', '', '', '', '', '', '', '', '', 0, 0, '', ''),
(59, 'z.jpg', 'Zobair', 'Hossain', 'Ruet', 'Hello i am zobair Web Developer', 'Web Developer', 'HTML, CSS,PHP,Web Developer,PHP', '', '', '', '', '', '', '', '', '', '', 0, 0, '', ''),
(60, 'sri.jpg', 'Azmain Yakkin', 'Srizon', 'Ruet', 'Hello i am Srizon, Game Developer', 'Game Developer', 'Unity, C#,Construct 2, Game Developer', '', '', '', '', '', '', '', '', '', '', 0, 0, '', ''),
(61, 'masr.jpg', 'Masrur', 'Habib', 'Ruet', 'Hello i am Masrur, Game Developer', 'Game Developer', 'Unity, C#,Construct 2, Game Developer', '', '', '', '', '', '', '', '', '', '', 0, 0, '', ''),
(62, 'rkb.jpg', 'Rakib', 'Ahmed', '', 'Hello i am Rakib, Game Developer', 'Game Developer', 'Unity, C#,Construct 2, Game Developer', '', '', '', '', '', '', '', '', '', '', 0, 0, '', ''),
(74, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', ''),
(75, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
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
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
