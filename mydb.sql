-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2018 at 07:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pas` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pas`) VALUES
(1, 'admin@.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `qs`
--

CREATE TABLE `qs` (
  `subject` varchar(20) NOT NULL,
  `qs` varchar(50) NOT NULL,
  `a` varchar(30) NOT NULL,
  `b` varchar(30) NOT NULL,
  `c` varchar(30) NOT NULL,
  `d` varchar(30) NOT NULL,
  `ans` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qs`
--

INSERT INTO `qs` (`subject`, `qs`, `a`, `b`, `c`, `d`, `ans`) VALUES
('chgjyuyjthetrytui', 'ethjryej6y', 'tryht35yh3', 'ertyrhjyhety', '3yj4y5nbet', 'erhynmrh', ''),
('intro', 'who is ?', 'a', 'b', 'c', 'd', 'a'),
('intro', 'why??', '1', '2', '3', '4', '2'),
('fqfsd', 'ffsfsw', 'mnsbnm', 'ghgwdj', 'vwcvc', 'mcb,cb', 'bxv'),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('adadad', 'vsffffffff', 'sdsd', 'sdsds', 'dsds', 'dsds', ''),
('where,,,', 'sdjskds', 'dds', 'dsds', 'dd', 'dds', 'xa'),
('sfgaergetyqwaadfbhsa', 'xaasasasa', 'aa', 'asas', 'sasa', 'sas', 'sas'),
('adkaj', 'asaksa', '1', '2', '3', '21', '21'),
('adkaj', 'asaksa', '1', '2', '3', '21', '21'),
('bangla', 'how?\r\n', '2', '3', '4', '5', 'a'),
('abc', 'njjkbjnkv', 'ss', 'fgbfg', 'vn', 'xnh', 'sfdgg'),
('fd', 'tfhh', 'hhhhg', 'g,cv', 'nmsnmf', 'fkgjbkj', 'afjj'),
('sfgaergetyqwaadfbhsa', 'nknlkn;l', 'bnlnlm;lm', 'bjblkn', 'nnm;l', ',mnn', 'n.n,'),
('mnmn', ' ,m ,.', ' ,m', ' ,m ,m', ' m, ,m', ' ,m ', ' ,m'),
(' m,m ', ' m, ', ' ,m ,m', ' m ,m', '  m', ' m,m,', ' ,mz'),
('vxhjvhcgfkvjk', 'asmb,gg', 'bebnkg', 'bjgbgkjnfg', 'sd ,mbf', 'dnfvf', 'q'),
('bsbkjfkkjg', 'dbwbvjgb', 'wbfjejbg', 'wd,fnr', ' ,mdf', ' cd', '1'),
('', 'wdbm,gv', 'sb,f', '  amdn', ' d', 'cdcsd', 'dcd'),
('sfgaergetyqwaadfbhsa', 'wfdggfdfdf', 'dfggfdg', 'fefdfgdfdfdfdf', 'gffd', 'fgdfdfgfd', 'df'),
('dfdf', 'dfdfdfdff', 'dfdf', 'fdf', 'dfgfdg', 'fgfd', 'fd'),
('fgdff', 'dffgdf', 'fd', 'fg', 'fgdf', 'gdg', 'fgd'),
('', '', '', '', '', '', ''),
('english', 'what?', 'aaaaaaaa', 'bbbbbbb', 'ccccccc', 'dddddd', 'a'),
('engli', 'why?', 'qweer', 'dsfsfs', 'ffgg', 'fbnn', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(200) NOT NULL,
  `name` varchar(700) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'Farhana Alam', 'mou@gmail.com', 1234567891, 'qwer'),
(2, 'Farhana Alam', 'mou@gmail.com', 1234567891, 'qwer'),
(3, 'Mahmuda Nasrin mukti', 'mahmuda35-1017@diu.edu.bd', 1234567891, 'asdf'),
(4, 'jahin tasnim ratri', 'samia@gmail.com', 0, 'asdf'),
(5, 'fdsjfdjf', 'fdfdf@ffdjkf.com', 0, 'fjdfsdkfdsjfkdfd'),
(6, 'Farhana Alam', 'farhana1048@gmail.com', 0, 'qwe'),
(7, 'samiahg', 'samia@gmail.com', 0, 'sdfgfhgjkgfjnfbdvc'),
(8, 'Farhana Alam', 'farhana1048@gmail.com', 0, 'asdfss'),
(9, 'jahin tasnim ratri', 'mou@gmail.com', 0, 'aadf'),
(10, 'Farhana Alam', 'mou@gmail.com', 0, 'hggjk'),
(11, 'Farhana Alam', 'mou@gmail.com', 0, 'asd'),
(12, 'Farhana Alam', 'mou@gmail.com', 0, 'qwddcv'),
(13, 'ndnvmhfjh', 'mahmuda35-1017@diu.edu.bd', 0, ',jhbv'),
(14, 'Farhana Alam', 'farhana1048@gmail.com', 0, 'dfff'),
(15, 'Farhana Alam', 'farhana1048@gmail.com', 0, '123sgfghhj'),
(16, 'samia', 'samia@gmail.com', 0, '12adasd'),
(17, 'Farhana Alam', 'farhana1048@gmail.com', 0, 'vhfhgkj');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `s_group` varchar(30) NOT NULL,
  `ssc` varchar(30) NOT NULL,
  `hsc` varchar(10) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `name`, `email`, `s_group`, `ssc`, `hsc`, `user_type`, `pass`) VALUES
(1, 'Farhana Alam', 'mou@gmail.com', 'Science', '23', '4.1', 'sdsds', '123'),
(2, 'Mahmuda Nasrin Mukti', 'mou@gmail.com', 'Science', '5', '5', 'fty', '123'),
(3, 'Mahmuda Nasrin Mukti', 'mou@gmail.com', 'Science', '5', '5', 'fty', ''),
(4, 'Farhana Alam', 'mou@gmail.com', 'Science', '23', '4.1', 'sdsds', ''),
(5, 'Farhana Alam', 'mou@gmail.com', 'Science', '23', '4.1', 'sdsds', ''),
(6, 'Farhana Alam', 'mou@gmail.com', 'Science', '23', '4.1', 'sdsds', '123'),
(7, 'mou', 'farhana1048@gmail.com', 'Science', '3', '4', 'hsc', '123'),
(8, 'mou', 'farhana1048@gmail.com', 'Science', '3', '4', 'hsc', '123'),
(9, 'mou', 'farhana1048@gmail.com', 'Science', '3', '4', 'hsc', '124'),
(10, 'samia', 'samiaw@gmail.com', 'Science', '23', '3', 'sdfg', '124'),
(11, 'samia', 'samiaw@gmail.com', 'Science', '23', '3', 'sdfg', ''),
(12, 'samia', 'samiaw@gmail.com', 'Science', '23', '3', 'sdfg', ''),
(13, 'samia', 'samiaw@gmail.com', 'Science', '23', '3', 'sdfg', '124'),
(14, 'samia', 'samiaw@gmail.com', 'Science', '23', '3', 'sdfg', '124'),
(15, 'samia', 'samiaw@gmail.com', 'Science', '23', '3', 'sdfg', '124'),
(16, 'Farhana Alam', '', 'null', '23', '4.1', 'sdfg', '124'),
(17, 'Farhana Alam', 'farhana@gmail.com', 'null', '23', '4.1', 'sdfg', '124'),
(18, 'Farhana Alam', 'farhana@gmail.com', 'null', '23', '4.1', 'sdsds', '124'),
(19, 'Farhana Alam', 'mou@gmail.com', 'Science', '23', '4.1', 'sdsds', '124'),
(20, 'Farhana Alam', 'mou@gmail.com', 'null', '5', '4.1', 'sdfg', '124'),
(21, 'gfhjk', 'mou@gmail.com', 'null', '3', '4.1', 'ffhgjh', '124'),
(22, 'gfhjk', 'mou@gmail.com', 'null', '3', '4.1', 'ffhgjh', 'T°<O—M‰^˜ŽJ–ED'),
(23, 'Farhana Alam', 'farhana1048@gmail.com', 'Science', '23', '4.1', 'sdfg', '1521879424'),
(24, 'Farhana Alam', 'mou@gmail.com', 'null', '23', '4.1', 'sdsds', '1522317613');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_reg`
--

CREATE TABLE `teacher_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(700) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `university` varchar(600) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_reg`
--

INSERT INTO `teacher_reg` (`id`, `name`, `email`, `password`, `university`, `subject`, `phone`, `address`) VALUES
(1, 'Mahmuda Nasrin Mukti', 'mahmuda35-1017@diu.edu.bd', '1234', 'diu', 'bangla', 1234567891, 'sdf'),
(2, 'samia', 'samia@gmail.com', '123', 'diu', 'english', 0, 'wert'),
(3, 'mou', 'mou@gmail.com', '12345', 'diu', 'math', 0, 'qwerty'),
(4, 'Farhana Alam', 'farhana1048@gmail.com', '12345', 'diu', 'bangla', 0, 'm m,c,sdc,s.m,.m.vmv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `teacher_reg`
--
ALTER TABLE `teacher_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `teacher_reg`
--
ALTER TABLE `teacher_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
