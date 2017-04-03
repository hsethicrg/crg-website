-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2016 at 01:34 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dateofbirth` varchar(20) NOT NULL,
  `guidance_name` varchar(20) NOT NULL,
  `present_address` varchar(100) NOT NULL,
  `permanent_address` varchar(100) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `date_of_interview` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`id`, `name`, `email`, `dateofbirth`, `guidance_name`, `present_address`, `permanent_address`, `qualification`, `date_of_interview`) VALUES
(2, 'saikat pal', 'saikat@gmail.com', '2016-01-25', 'abc', 'udaynarayuanpur', 'kolkata', 'B.A.', '2016-01-26'),
(3, 'xcvxcbvc', 'cvbcvbvbcb@ddbfggf.h', '2016-01-13', 'zxczxczc', 'xzccdsf', 'dsfdsfdsf', '12th', '2016-01-19'),
(4, 'asdadasd', 'asdadsad@jdgasdjsak.', '2016-01-24', 'sadadaddfd', 'asdasffdfs', 'sdfssdcsdf', '0', '2016-01-11'),
(5, 'abc', 'sadaa@sdads.jljlj', '2016-01-11', 'dfsddsfdsf', 'dsfdsfsssfdsf', 'sdffddbgfasdad', '0', '2016-01-25'),
(6, 'abc', 'sadaa@sdads.jljlj', '2016-01-11', 'dfsddsfdsf', 'dsfdsfsssfdsf', 'sdffddbgfasdad', '0', '2016-01-25'),
(7, 'dvsds', 'dfdsfsdfds@fvdgdfgf.', '2016-01-12', 'ghfhfhf', 'fghfghgfhfh', 'fghfghgfhf', '0', '2016-01-12'),
(8, 'gfhfghf', 'sadasdas@dasfs.gthgf', '2016-01-20', 'fghffg', 'fghfhf', 'hfhgf', '0', '2016-01-19'),
(10, 'JHKJHK', 'ASDASD@DFSF.HJJHK', '2016-01-26', 'HJKKHHH', 'JHKHKJHK', 'JHKJHKH', '12th', '2016-01-12'),
(13, 'abc', 'sdsdssdad@dsdsfds.jh', '2016-01-04', 'ghjgjhjghjhg', 'jghjghjghjhgjh', 'gjghjkhkjhk', '12th', '2016-01-25'),
(14, 'dsfdsfsf', 'dffdfd@fgdgfdfgd.fdg', '2016-01-25', 'dfgdgfdg', 'dfgfdgfdgdg', 'dfgf', '12th', '2016-01-25'),
(15, 'sdasdsad', 'asdasddd@sfdvdfgdg.g', '2016-01-12', 'ghjghjhg', 'ghjghjghj', 'ghjghjghj', '12th', '2016-01-12'),
(16, 'dghh', 'sdaasdada@dfdsfds.hj', '2016-01-12', 'jhhkjhkh', 'hjkhkjhk', 'hjhjkh', '12th', '2016-01-26'),
(17, 'dghh', 'zXZXZ@fsfdgdfgg.jkjk', '2016-01-12', 'klkjl', 'jkjljljljl', 'jkljklkj', '12th', '2016-01-18'),
(19, 'cddsfsdf', 'dsfsfss', '2016-01-12', 'dsfss', 'fsdsdfds', 'fdsfs', '12th', '2016-01-25'),
(20, 'dghh', 'dfsfsfdsfsdf@sdfsdgf', '2016-01-12', 'fghffgh', 'gfghgfhgfh', 'gjhhhgj', '12th', '2016-01-25'),
(21, 'abc123', 'sdsadsadsadsad@dfsff', '2016-01-04', 'gjghjhgj', 'ghjghjghjgjy', 'dfggfghf', '12th', '2016-01-04'),
(22, 'sdsadas', 'asdasd', '2016-01-04', 'asdasdasda', 'asdasda', 'asdada', '10th', '2016-01-18'),
(23, 'saikat', 'adassdsdsad', '2016-01-18', 'dadadadasd', 'udaynarayanpur', 'howrah', '12th', '2016-01-25'),
(24, 'sdfsfsdf', 'sdfdsfs', '2016-01-11', 'sdfsdfdsf', 'sdfdsfsffsf', 'fgfdgfdgfdg', '12th', '2016-01-26'),
(25, 'sdsadas', 'adassdsdsad@fghfghfh', '2016-01-12', 'sdfsdfdsf', 'ghjgjghjgj', 'ghjgjgh', '12th', ''),
(26, 'saikat', 'sdfdsfs@sddffd.gfdgf', '2016-01-11', 'asdasdasda', 'dfgfdgdf', 'dfgfdg', '12th', '2016-01-11'),
(27, 'saikat', 'sdfdsfs@sddffd.gfdgf', '2016-01-11', 'asdasdasda', 'dfgfdgdf', 'dfgfdg', '12th', '2016-01-11'),
(28, 'saikat', 'sdfdsfs@sddffd.gfdgf', '2016-01-11', 'asdasdasda', 'dfgfdgdf', 'dfgfdg', '12th', '2016-01-11'),
(29, 'sda', 'dsadsa', '2016-01-12', 'asdads', 'sadadas', 'asdadad', '12th', '2016-01-18'),
(30, 'dsfsfds', 'sdfsdfs', '2016-01-12', 'sdfsfds', 'sdfsdfs', 'sdfsdfds', '12th', '2016-01-19'),
(31, 'pal', 'asdadasdasdas1', '2016-01-20', 'vcnbcvbc1', 'howrah1', 'fgdfgfdgd', 'B.Tech', '2016-01-12'),
(32, 'sdadsad', 'asdasdsa', '2016-01-12', 'sadsad', 'asdadsa', 'asdasd', '12th', '2016-01-19'),
(33, 'dghh', 'asdadasd@fdgdfgd.hgj', '2016-01-12', 'fgfghfghf', 'fghfghf', 'fggfhfhf', '12th', '2016-01-18'),
(35, 'sdadsad', 'asdadasd@fdgdfgd.hgj', '2016-01-25', 'asdasdasda', 'sdasda', 'sad', '12th', '2016-01-12'),
(36, 'dsfsfds', 'asdadasd@fdgdfgd.hgj', '2016-01-04', 'sdfsdfdsf', 'ddd', 'ddds', '10th', '2016-01-11'),
(38, 'saikat', 'asdadasd@fdgdfgd.hgj', '2016-01-11', 'asdasdasda', 'sdad', 'adsdfdsf', '12th', ''),
(39, 'sdasdasdada', 'asdadasdasdas', '2016-01-31', 'sadasd', 'asdasdas', 'adadaaw', '', '2016-01-31'),
(40, 'sdadsad', 'asdadasd@fdgdfgd.hgj', '2016-01-12', 'asdads', 'dfdsf', 'ewfw', '12th', '2016-01-18'),
(41, 'dfsdfsf', 'sdfsfsf', '2016-01-11', 'sdfsdfsd', 'sdfsdfdsf', 'erfe', '12th', '2016-01-19'),
(42, 'dfsdfsf', 'sdfsfsf', '2016-01-11', 'sdfsdfsd', 'sdfsdfdsf', 'erfe', '12th', '2016-01-19'),
(43, 'dfsdfsf', 'sdfsfsf', '2016-01-11', 'sdfsdfsd', 'sdfsdfdsf', 'erfe', '12th', '2016-01-19'),
(45, 'sdaa', 'asdadasdasdas', '2016-01-11', 'dsasfs', 'sdfdfsf', 'sdfsfs', '12th', '2016-01-11'),
(47, 'saikat', 'adassdsdsad', '2016-01-12', 'sdfsfds', 'dfs', 'rewrwe', '12th', '2016-01-03'),
(49, 'matainja1', 'technology1', '2016-01-01', '216', 'chinrighata1', 'kolkata1', 'B.A.', '2016-01-26'),
(50, 'dsfsfds', 'asdadasdasdas', '2016-01-18', 'asdasdasda', 'adsafsa', 'dfsdf', '12th', '2016-01-26'),
(52, 'saikat', 'asdadasd@fdgdfgd.hgj', '2016-01-01', 'asdads', 'sdasfewfw', 'vfdvfdvdfdf', '12th', '2016-01-19'),
(53, 'saikat', 'asdadasd@fdgdfgd.hgj', '2016-01-01', 'asdads', 'sdasfewfw', 'vfdvfdvdfdf', '12th', '2016-01-19'),
(54, 'sdassfsd', 'sdfdsfs@sddffd.gfdgf', '2016-01-05', 'sdfsdfs', 'sdfsd', 'sdfdsfdsf', '12th', '2016-01-11'),
(55, 'dsfsfds', 'asdadasdasdas', '2016-01-12', 'casdcsad', 'sdsddssd', 'sddsds', '12th', '2016-01-18'),
(56, 'saikat kumar', 'kumer@gmail.com', '2016-01-12', 'sdfsfds', 'dsfsfre', 'kolkata', 'B.Tech', '2016-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `resouce_id` int(11) NOT NULL,
  `resource_name` varchar(20) NOT NULL,
  `resouce_categories` varchar(20) NOT NULL,
  `serial_number` varchar(20) NOT NULL,
  `date_of_purchase` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `warranty` date NOT NULL,
  `manually_bill_upload` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`resouce_id`, `resource_name`, `resouce_categories`, `serial_number`, `date_of_purchase`, `warranty`, `manually_bill_upload`) VALUES
(36, 'saikat', 'abc', '264', '2015-12-19 06:08:57', '2015-12-16', 'a7d64ee7dfbf988bedc2ae318bf70f03.docx'),
(37, 'saikat', 'abc', '164', '0000-00-00 00:00:00', '0000-00-00', '071f85765ba879322470fc5677925f42.docx'),
(39, 'rantec', 'gastric medicine', '2663', '0000-00-00 00:00:00', '0000-00-00', '6f9918a3a69cc82deaec68122b6e217e.docx'),
(42, 'saikat', 'abc', '6767', '2015-12-13 18:30:00', '2015-12-14', '19063e6ceb4bbb5ea5be5dd73291948b.docx'),
(43, 'saikat', 'dsfdsfdsfdsf', '6846513568', '2015-12-09 18:30:00', '2015-12-21', '0d79c7c8873957b51941c821362cdbbb.docx'),
(44, 'sascadsasd', 'sadasdasda', '25545', '2015-12-19 18:30:00', '2015-12-20', 'f6cbc00b24605c09f2e79cecd629dd5b.docx'),
(45, 'dsfdsfdsfds', 'abc', '2525454', '2015-12-19 06:08:32', '2015-12-19', '4543241902756188f3960b9ed1f591e1.docx'),
(48, 'saikat', 'dsfdsfdsfdsf', '4865', '2015-11-30 18:30:00', '2015-12-30', '66e1f00f935227386876db4996447173.txt'),
(49, 'dsfdsfdsfds', 'gastric medicine', '26', '2015-12-13 18:30:00', '2015-12-21', '667d13480661744bf0cddf9e40d98f4a.txt'),
(50, 'saikat', 'dsfdsfdsfdsf', '2555', '2015-12-29 18:30:00', '2015-12-15', '6c17ac7437594785d64aea9ec874032c.txt'),
(51, 'jhkjjkkllk;ll;', 'ggfhgfhf', '3436463', '2015-12-21 18:30:00', '2015-12-28', '23bcd15bbbc2e8b44e295574f9141c1e.txt'),
(53, 'gfhgh', 'dsfdsfdsfdsf', '256416', '2015-12-07 18:30:00', '2015-12-28', 'af198aca55570325ad8794485921c082.txt'),
(54, 'khgjgljgk', 'khukjhkhjkhjk', '56464346', '2016-01-17 18:30:00', '2016-01-27', 'bb7481adc42cc42f1cb7ebd3dd751fdb.txt');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `phone_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `user_name`, `password`, `email`, `sex`, `phone_no`) VALUES
(1, 'saikat', 'saikat', '', 'male', '0'),
(2, 'ram', '123', 'ram@gmail.com', 'male', '0'),
(3, 'abcdef', '123456', 'abc@gmail.com', 'Female', '0'),
(4, 'saikatghvj', 'nlkjl;kl', 'hgfjhgjh@hgfhgfhjgjh', 'Male', '0'),
(5, 'myname', '123456', 'myname@gmail.com', 'Male', '0'),
(6, 'mister a', '123456', 'mister@gmail.com', 'Male', '0'),
(7, 'saikat', '123456', 'dfdgdfg@hgfhhf.com', 'Male', '0'),
(8, 'abc123', 'saikat123', 'abc123@gmail.com', 'Male', '0'),
(9, 'qwert', '123456', 'qwert@gmail.com', 'Male', '0'),
(10, 'saikatpal', 'saikat', '', 'Male', ''),
(11, 'sham', '12345', 'sham@gmail.com', 'Male', ''),
(12, 'saikatnhgjhkjh', 'saikat123', 'gbcbgfhgfhjg@hgjgjhg', 'Male', ''),
(13, 'saikat hhhgjgjg', '123456', 'fgdhfhg@fhjjgj', 'Male', ''),
(14, 'admin', 'admin1', 'admin@gmail.com', 'Male', ''),
(15, 'saikat', '123456', 'jkjlkpopo@gmail.com', 'Female', ''),
(16, 'fcfgghjhjhjkkjl', '1485896652', 'jhghuiohi''jo''j@ghjkl', 'Female', '1455225525'),
(17, 'fcfgghjhjhjkkjl', '554464534', 'fghjjkkj@ghjhkj', 'Male', '1454525633'),
(18, 'saikat', '123456', 'fghjjkkj@ghjhkj', 'Male', '45656236'),
(19, 'fcfgghjhjhjkkjl', '676764366', 'jhghuiohi''jo''j@ghjkl', 'Female', '5456876765'),
(20, 'rtfyhfytytry', '546464644', 'jhghuiohi''jo''j@ghjkl', 'Male', '4557852776'),
(21, 'rtfyhfytytry', '4564566877', 'fgfdggh@fgjghj.hjhgj', 'Male', '4534546464'),
(22, 'saikatsdadad', '5468683255', 'jhghuiohi''jo''j@ghjkl', 'Female', '8524686556'),
(23, 'dffsfd', 'dfsfsfssss', 'asdsadasdkl@jhfdsfds', 'Male', '1265265121'),
(24, 'asssa', '243534', 'fghjjkkj@ghjhkj.bdfj', 'Female', '6446464646');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`resouce_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `resouce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
