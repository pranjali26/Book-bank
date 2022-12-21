-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 05:18 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first`, `last`, `username`, `password`, `email`, `contact`, `pic`) VALUES
(1, 'Pranjali', 'Dahake', 'admin', '12345', 'admin@mail.com', '9876543210', '/img/admin.jpg'),
(2, 'Trupti', 'Jadhav', 'trupti', '0987', 'truptijadhav25@gmail.com', '34567288', '');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `name`, `authors`, `status`, `quantity`, `category`) VALUES
(1, 'Discrete and Combinatorial Mathematics	', 'B.V.Ramana', 'Available  ', 5, 'Mathamathics'),
(2, 'Compiler Design', 'Rajkumar Singh Rathore', 'Available  ', 10, 'Programming Language'),
(3, 'Programming With C', 'Jitender Kumar Chhabra', 'Available  ', 5, 'Programming Language'),
(4, 'Data Structure Through C++', 'G.S.Baluja', 'Available  ', 15, 'Programming Language'),
(5, 'Theory of computer Science', 'K.L.P.Mishra', 'Available  ', 4, 'Other'),
(6, 'Operating System', 'Dhananjay. M.Dhamdhere', 'Available  ', 7, 'Operating system'),
(7, 'Fundamentals of Computer Programming with C & C++', 'Prof.Dinesh D. Patil', 'Available  ', 5, 'Programming Language'),
(8, 'Neural Networks', 'G.Vijay Kumar', 'Available  ', 4, 'Data Science'),
(9, 'Geographic Information System', 'Keith C. Clarke', 'Available ', 5, 'Other'),
(10, 'Polytechnic(Diploma In Engineering)', 'Charulata S. T.Pradhan', 'Available  ', 3, 'Other'),
(11, 'Programming Languages (Principal and Paradigms)', 'Allen Tucker', 'Available  ', 3, 'Programming Language'),
(12, 'Algorithms', 'Kenneth A. Berman and Jerome L.Paul', 'Available  ', 2, 'Data structure and Algorithm'),
(13, 'Data Warehousing in the Real World', 'Sam Anahory', 'Available  ', 4, 'DBMS'),
(14, 'Data and Text Mining', 'Tomas W.Miller', 'Available  ', 12, 'Data Science'),
(15, 'Computer network', 'Nirali Prakashan', 'Available  ', 3, 'Networking'),
(16, 'Mobile Communication', 'Dr.N.N.Jani', 'Available  ', 1, 'Networking'),
(17, 'Algoriths Design and Analysis', 'Udti Agarawal', 'Available  ', 5, 'Data structure and Algorithm'),
(18, 'Quantitative Analysis', 'A.L.Underwood', 'Available  ', 5, 'Mathamathics'),
(19, 'Software Engineering ', 'S.A.kelkar', 'Available  ', 4, 'Software Engineering'),
(20, 'Web Application Using ASP.NET 2.0', 'Kathleen Kalata', 'Available  ', 3, 'web developement'),
(21, 'Computer Programming in C', 'A.P.Godse', 'Available  ', 3, 'Programming Language'),
(22, 'Fuzzy Logic', 'Timothy J.Ross', 'Available  ', 4, 'Data structure and Algorithm'),
(23, 'The Design & Analysis of Algorithm', 'Nitin Upadhyay', 'Available  ', 5, 'Data structure and Algorithm'),
(24, 'Element of Discrete Mathematics', 'C.L.Liu', 'Available  ', 3, 'Mathamathics'),
(25, 'Operating System', 'D.M Dhamdhere', 'Available  ', 2, 'Operating system'),
(26, 'Pattern Classififcation', 'David  G. Stork', 'Available  ', 7, 'Data Science'),
(27, 'Principal of Multimedia', 'Ranjan Parekh', 'Available  ', 1, 'Other'),
(28, 'Fundamentals of Geographic Information System', 'Michaal N. Demers', 'Available  ', 3, 'Other'),
(29, 'Digital Signal Processing', 'Sanjit K Mitrea', 'Available  ', 2, 'Other'),
(30, 'Introduction to Multimedia Communication', 'K.R.Rao', 'Available  ', 3, 'Networking'),
(31, 'Digital Signal Processing', 'Sanjit K Mitrea', 'Available  ', 4, 'Networking'),
(32, 'Pascal Plus Data Structures,Algorithm ', 'Galgotia', 'Available  ', 7, 'Data structure and Algorithm'),
(33, 'Data  Structure', 'G.A.V PAI', 'Available  ', 1, 'Data structure and Algorithm'),
(34, 'Introduction to 8085,8086 Microprocess and Peripheral', 'A.K.Deshmane', 'Available ', 4, 'Microarchitecture'),
(35, 'E-commerce and its Application', 'S.chand', 'Available  ', 4, 'Software Engineering'),
(36, 'Design Pattern ', 'Grady Booch', 'Available  ', 5, 'Software Engineering'),
(37, 'Object Oriented Modeling and Design', 'S.D.Joshi', 'Available  ', 2, 'Programming Language'),
(38, 'Embeded Realtime System Programming', 'Pankaj Gupta', 'Available  ', 2, 'Microarchitecture'),
(39, 'Electronic Devices and circuits', 'Vidhyadhan', 'Available  ', 2, 'Microarchitecture'),
(40, 'Discrite Structure and Graph Theory', 'Prof Dr Sks Rathore', 'Available  ', 5, 'Other'),
(41, 'Comuter Organization', 'V Carl hamacl', 'Available  ', 5, 'Microarchitecture'),
(42, 'Operating System', 'Dhananjay M Dhamdhere', 'Available  ', 1, 'Microarchitecture'),
(43, 'Java Servlet Programming', 'Jason hunter', 'Available  ', 4, 'web developement'),
(44, 'Understanding Os', 'Ida M Flynm', 'Available  ', 1, 'Operating system'),
(45, 'Applied Data Mining ', 'Paolo Giudici', 'Available  ', 1, 'Datascience'),
(46, 'Object oriented Programming using Java', 'Dr NB Venkates ', 'Available  ', 1, 'Programming Language'),
(47, 'Database Manegement System', 'G.K.Gupta', 'Available ', 1, 'DBMS'),
(48, 'Data Communication and Networks', 'Achyut S Godbole', 'Available  ', 4, 'Networking'),
(49, 'Software Engineering ', 'Douglas Bell', 'Available  ', 4, 'Software Engineering'),
(50, 'Software Engineering ', 'Douglas Bell', 'Available  ', 3, 'Software Engineering'),
(51, 'Mobile Communication', 'Jochen Schiller', 'Available  ', 2, 'Networking'),
(52, 'Computer Oraganization & Networking', 'Brilliant & Excellent', 'Available  ', 3, 'Networking'),
(53, 'Data Mining', 'Margaret H. Dunham', 'Available ', 2, 'Data Science'),
(54, 'e-Business 2.0', 'Dr .Ravi Kalakota', 'Available  ', 2, 'Software Engineering'),
(55, 'e-Commerce', 'Bhushan Dewan', 'Available  ', 1, 'Software Engineering'),
(56, 'Distributed Operting System', 'Pradeep k .Sinha', 'Available  ', 2, 'Operating system'),
(57, 'Fundamentals of Computers', 'V.Rajaraman', 'Available  ', 6, 'Programming Language'),
(58, 'Discrete Mathematics', 'Babu Ram', 'Available ', 4, 'Mathamathics'),
(59, 'Computer Oraganization', 'ISRD Group', 'Available ', 5, 'Microarchitecture'),
(60, 'Oracle Database 10g New Feature', 'Mike Ault', 'Available  ', 3, 'DBMS'),
(61, 'Computer Oriented Numerical Method', 'Sumitabha Das', 'Available  ', 2, 'Mathamathics'),
(62, 'Advanced 80386 Programming Techniques', 'James L.Turley', 'Available  ', 4, 'Microarchitecture'),
(63, 'Web Commerece Technology Handbook', 'Emma Minoli', 'Available  ', 4, 'web developement'),
(64, 'Data Structure using C', 'N.Guruprasad', 'Available  ', 6, 'Programming Language'),
(65, 'Operating System and System Programming', 'P Balkrishna Prasad', 'Available  ', 6, 'Operating system');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`) VALUES
(0, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `username` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `approve` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `return` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`username`, `bid`, `approve`, `issue`, `return`) VALUES
('pd1', 2, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2022-12-01', '2022-12-12'),
('pd1', 14, '<p style=\"color:yellow; background-color:red;\">EXPIRED</p>', '2022-12-09', '2022-12-14'),
('pd1', 5, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2022-12-03', '2022-12-12'),
('pd1', 13, '', '', ''),
('rutu', 8, '', '', ''),
('rutu', 2, '', '', ''),
('pd1', 2, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roll` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`first`, `last`, `username`, `password`, `roll`, `email`, `contact`) VALUES
('Pranjali', 'Dahake', 'pd26', 'pass@26', 1, 'pranjalidahake26@gmail.com', 2147483647),
('Trupti', 'Jadhav', 'trupti', '12345', 2, 'truptijadhav25@gmail.com', 2147483647),
('Rutuja', 'Rathod', 'rutu', 'pass12345', 3, 'rutuja.rathod01@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD UNIQUE KEY `bid` (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
