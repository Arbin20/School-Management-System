-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 03:56 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ismailqemali`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `dates` date NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `attendance` varchar(15) DEFAULT 'N',
  `global_name_id` int(10) NOT NULL,
  `teacher_email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `dates`, `student_id`, `attendance`, `global_name_id`, `teacher_email`) VALUES
(46, '2018-07-17', '20210A0602@school.com', 'N', 52, 'mdserajuddin1958@gmail.com');


-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(3) NOT NULL,
  `class` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`) VALUES
(15, 9),
(14, 8),
(13, 7),
(12, 6),
(16, 5);

-- --------------------------------------------------------

--
-- Table structure for table `classtime`
--

CREATE TABLE `classtime` (
  `id` int(11) NOT NULL,
  `class_time` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classtime`
--

INSERT INTO `classtime` (`id`, `class_time`) VALUES
(26, '8:20'),
(27, '9:20'),
(28, '7:10'),
(29, '10:00'),
(30, '11:00');

-- --------------------------------------------------------

--
-- Table structure for table `class_teacher`
--

CREATE TABLE `class_teacher` (
  `id` int(5) NOT NULL,
  `global_name_id` int(5) NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `subject_name_id` int(6) NOT NULL,
  `class_time` varchar(255) NOT NULL,
  `class_days` varchar(255) NOT NULL,
  `is_class_teacher` varchar(5) NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_teacher`
--

INSERT INTO `class_teacher` (`id`, `global_name_id`, `teacher_email`, `subject_name_id`, `class_time`, `class_days`, `is_class_teacher`) VALUES
(40, 82, 'adhurim.qazimi@hotmail.com', 32, '11:00', '[\"e Hu00ebnu00eb\",\"e Martu00eb\"]', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(6) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_desc` text DEFAULT NULL,
  `event_date` date NOT NULL,
  `event_image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_title`, `event_desc`, `event_date`, `event_image`) VALUES
(2, 'UEJL', '<p>South East European University</p>', '2021-05-10', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `grading_result`
--

CREATE TABLE `grading_result` (
  `id` int(5) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `total_marks` float NOT NULL,
  `final_gpa` float NOT NULL,
  `position` int(4) NOT NULL DEFAULT 0,
  `result_status` varchar(10) NOT NULL,
  `current_roll` int(4) NOT NULL,
  `student_class` int(3) NOT NULL,
  `section` varchar(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(5) NOT NULL,
  `class_id` int(5) NOT NULL,
  `group_name` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `class_id`, `group_name`) VALUES
(1, 4, 'Shkencat'),
(2, 4, 'Shoqëror');
-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(6) NOT NULL,
  `notice_title` varchar(255) NOT NULL,
  `notice_desc` text NOT NULL,
  `notice_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice_title`, `notice_desc`, `notice_date`) VALUES
(2, 'Erasmus +', '<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2021-04-09'),
(14, 'Mësimet Online', '<p>Nx&euml;n&euml;s t&euml; nderuar p&euml;r shkak t&euml; pandemis&euml; Covid 19, do t&euml; jemi t&euml; detyruar q&euml; m&euml;simet ti mbajm&euml; online edhe n&euml; k&euml;t&euml; vit.</p>\r\n<p>&nbsp;</p>', '2021-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `page_contents`
--

CREATE TABLE `page_contents` (
  `id` int(11) NOT NULL,
  `page_name` varchar(20) NOT NULL,
  `page_text` text DEFAULT NULL,
  `page_image` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_contents`
--

INSERT INTO `page_contents` (`id`, `page_name`, `page_text`, `page_image`) VALUES
(1, 'about_page', '<p>Rreth Historis&euml; s&euml; Shkoll&euml;s Ismail Qemali n&euml; Fshatin Nerasht</p>\r\n<p>Shkolla fillore ,,Ismail Qemali&rdquo; graviton n&euml; teritorin e komun&euml;s s&euml; Tearc&euml;s. Si shkoll&euml; kat&euml;r vje&ccedil;are filloi t&euml; funksionoj n&euml; vitet 1945/46 n&euml; kushte shum&euml; t&euml; v&euml;shtira n&euml; qend&euml;r t&euml; fshatit me nj&euml; mejtep me hapsir&euml; shum&euml; t&euml; vog&euml;l, dhe jo t&euml; p&euml;rshtat&euml;shme p&euml;r mbajtjen e m&euml;simit, mir&euml;po nx&euml;n&euml;sit dhe prind&euml;rit e at&euml;hershem entuziast dhe t&euml; etsh&euml;m p&euml;r t&euml; ditur shkrim &ndash; lexim dhe p&euml;r dituri, edhe pse n&euml; munges&euml; t&euml; kushteve elementare p&euml;r m&euml;sim me gjith&euml; d&euml;shir&euml;n m&euml; t&euml; madhe pranonin q&euml; t&euml; m&euml;sojn&euml; n&euml; ato kushte.<br />N&euml; munges&euml; t&euml; kuadrit arsimor n&euml; at&euml; koh&euml; m&euml;simi organizohej n&euml; gjuh&euml;n serbe dhe alfabetin kirilik, m&euml;sues i asaj kohe ishte nj&euml; malazez me emrin Novica, ku nx&euml;n&euml;sit dhe prind&euml;rit e fshatit e thirrnin ,,DASKALL&rdquo; q&euml; n&euml; gjuh&euml;n shqipe don t&euml; thot&euml; m&euml;sues.<br />Pas m&euml;suesit malazes erdh&euml;n m&euml;sues shqiptar&euml; si Hafis Zudia, Nazmi Patpati, Mexhit Mexhiti, Nazmi Sulejmani, Memet Gega etj. Mir&euml;po, me rritjen e numrit t&euml; nx&euml;n&euml;sve m&euml; n&euml; at&euml; mejtep nuk kishte vend p&euml;r t&euml; m&euml;suar, dhe me iniciativ&euml; t&euml; nj&euml; grupi fshatar&euml;sh dhe paris&euml; s&euml; at&euml;hershme t&euml; fshatit u arrit&euml; mar&euml;veshje q&euml; t&euml; nd&euml;rtohet nj&euml; objekt shkollor nj&euml; kat&euml;sh, mir&euml;po fshati nuk kishte vend p&euml;r nd&euml;rtimin e objektit dhe b&euml;n&euml; ndrim me nje fshatar ku i dhane shume metra katror, p&euml;r me marr&euml; disa dylim toke q&euml; t&euml; ngrejn&euml; nj&euml; godin&euml; shkollore deri n&euml; klas&euml; t&euml; kat&euml;rt.<br />Shkolla e atyre viteve u em&euml;rua me emrin e patriotit vlonjat Isamil Qemali, por si shkoll&euml; periferike e shkolles se fshatit Vratnic&euml;. M&euml; 1968/69 themelohet shkolla tet&euml;vje&ccedil;are ku si m&euml;sues t&euml; par&euml; ishin Murat Pollozhani( nga Struga) Xhemali Beqiri dhe Sabri Qamili nga fshati Nerasht, Nazif Selami, Mevaip Saliu. Jonuz Iseni etj. Shkolla jone sot punon me dy ndrime, me 274 nxenes.</p>', NULL),
(4, 'site_logo', NULL, 'logo-shkolle.png'),
(6, 'gallery_page', NULL, '18671601_1569263569764404_7764325205055559067_o.jpg'),
(7, 'gallery_page', NULL, '121232390_1718771511624400_2219897984009688965_n.jpg'),
(8, 'gallery_page', NULL, '121452066_1718771414957743_1045837334538573079_n.jpg'),
(9, 'gallery_page', NULL, '163351525_1849874931847390_4796395746501264214_n.jpg'),
(2, 'admission_page', '<h4><strong>Admission Classes:</strong>&nbsp;We only admit students in class 6 and class 9.</h4>\r\n<p>To get admitted, please bring the follwing&nbsp;<em>documents</em>:</p>\r\n<ol>\r\n<li>Certificate of Class 5/8</li>\r\n<li>Testimonial from school</li>\r\n<li>Four copy passport size photographs</li>\r\n<li>Marksheet of class 5/8</li>\r\n<li>Birth Certificate</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<h4><strong>Admission Requirements</strong></h4>\r\n<ol>\r\n<li>Minimum GPA 3.50 out of 5.0</li>\r\n<li>Education gap upto 1 year</li>\r\n</ol>', NULL),
(5, 'gallery_page', NULL, 'Foto-nxenesve-scaled.jpg'),
(11, 'gallery_page', NULL, '103942005_1611388052362747_2595489565734479268_n.jpg'),
(14, 'gallery_page', NULL, '61050334_1274815159353373_6475746561270743040_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `page_options`
--

CREATE TABLE `page_options` (
  `id` int(11) NOT NULL,
  `school_meta_key` varchar(55) NOT NULL,
  `school_meta_value` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_options`
--

INSERT INTO `page_options` (`id`, `school_meta_key`, `school_meta_value`) VALUES
(1, 'school_name', 'SH.F.K Ismail Qemali'),
(4, 'school_address', '<ul>\r\n<li>Nerasht&nbsp; 107</li>\r\n<li>Telefon: 044 345 386</li>\r\n<li>07:30 - 18:00</li>\r\n<li>e H&euml;n&euml; - e Premte</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `student_roll` int(4) NOT NULL,
  `exam_year` int(10) NOT NULL,
  `exam_type` varchar(20) NOT NULL,
  `global_name_id` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `marks` varchar(10) NOT NULL DEFAULT '0',
  `grade` float NOT NULL DEFAULT 0,
  `student_class` int(5) NOT NULL,
  `teacher_email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `student_id`, `student_roll`, `exam_year`, `exam_type`, `global_name_id`, `subject_id`, `marks`, `grade`, `student_class`, `teacher_email`) VALUES
(131, '20211A0607@school.com', 7, 2021, 'final', 63, 26, '100', 5, 10, 'kanizfatemazuthi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(5) NOT NULL,
  `class_id` int(5) NOT NULL,
  `section` varchar(20) NOT NULL,
  `group_name` varchar(30) DEFAULT NULL,
  `global_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `class_id`, `section`, `group_name`, `global_name`) VALUES
(79, 5, 'II', 'Përgjithshëm', 'Class: 5 | Section: II  | Group: Përgjithshëm'),
(78, 5, 'I', 'Përgjithshëm', 'Class: 5 | Section: I  | Group: Përgjithshëm'),
(80, 6, 'I', 'Përgjithshëm', 'Class: 6 | Section: I  | Group: Përgjithshëm'),
(81, 6, 'II', 'Përgjithshëm', 'Class: 6 | Section: II  | Group: Përgjithshëm'),
(82, 7, 'I', 'Përgjithshëm', 'Class: 7 | Section: I  | Group: Përgjithshëm'),
(83, 7, 'II', 'Përgjithshëm', 'Class: 7 | Section: II  | Group: Përgjithshëm'),
(84, 8, 'I', 'Përgjithshëm', 'Class: 8 | Section: I  | Group: Përgjithshëm'),
(85, 8, 'II', 'Përgjithshëm', 'Class: 8 | Section: II  | Group: Përgjithshëm'),
(86, 9, 'I', 'Përgjithshëm', 'Class: 9 | Section: I  | Group: Përgjithshëm'),
(87, 9, 'II', 'Përgjithshëm', 'Class: 9 | Section: II  | Group: Përgjithshëm');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(12) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `student_class` int(3) NOT NULL,
  `student_section` varchar(10) DEFAULT NULL,
  `student_group` varchar(10) DEFAULT NULL,
  `student_roll` int(5) NOT NULL,
  `student_father_name` varchar(50) NOT NULL,
  `student_mother_name` varchar(50) NOT NULL,
  `student_address` text NOT NULL,
  `student_contact` varchar(20) NOT NULL,
  `student_dob` date DEFAULT NULL,
  `student_blood_group` varchar(15) DEFAULT NULL,
  `student_gender` varchar(10) DEFAULT NULL,
  `student_status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_email`, `student_name`, `student_class`, `student_section`, `student_group`, `student_roll`, `student_father_name`, `student_mother_name`, `student_address`, `student_contact`, `student_dob`, `student_blood_group`, `student_gender`, `student_status`) VALUES
(51, '20210II0601@school.com', 'Faton Xhemali', 5, 'II', 'Përgjithsh', 1, 'Islam', 'Muhabije', '<p>Nerasht</p>', '070112985', '2002-04-06', 'A+', 'Male', 'active'),
(52, '202121901@ismailqemali.com', 'Enis Mehdi', 9, '1', 'Shoqëror', 1, 'Agim', 'Rexhie', '<p>Nerasht&nbsp;</p>', '070123874', '2008-07-09', 'B+', 'Male', 'active'),
(53, '202122901@ismailqemali.com', 'Egzon Qamili', 9, '2', 'Shoqëror', 1, 'Xhevdet', 'Suzana', '<p>Nerashte</p>', '070421545', '2008-05-21', 'AB-', 'Male', 'active'),
(54, '202122902@ismailqemali.com', 'Fatime Alimi', 9, '2', 'Shoqëror', 2, 'Halit', 'Emine', '<p>Nerasht</p>', '071124554', '2008-09-22', 'A+', 'Female', 'active'),
(55, '202121701@ismailqemali.com', 'Kanita Qazimi', 7, '1', 'Shoqëror', 1, 'Habil', 'Lindita', '<p>Nerasht Shulke</p>', '075412121', '2009-05-14', 'AB+', 'Female', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(5) NOT NULL,
  `subject` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`) VALUES
(28, 'Matematikë për klasën e pestë'),
(27, 'Gjuhë Shqipe për klasën e pestë'),
(29, 'Shkencat Natyrore për klasën e pestë'),
(30, 'Shoqëria për klasën e pestë'),
(31, 'Biologji'),
(32, 'Edukatë Fizike');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `teacher_designation` varchar(50) NOT NULL,
  `teacher_gender` varchar(10) DEFAULT NULL,
  `teacher_qualification` text NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `teacher_address` text NOT NULL,
  `teacher_contact` varchar(20) NOT NULL,
  `teacher_image` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacher_designation`, `teacher_gender`, `teacher_qualification`, `teacher_email`, `teacher_address`, `teacher_contact`, `teacher_image`) VALUES
(34, 'Mësues i Rregullt', 'Male', '<p>Shkencat Matematikore</p>', 'mexhit@edu.mk', '<p>Nerasht</p>', '071755123', 'mesues-450x450.png'),
(33, 'Mësues i Rregullt', 'Female', '<p>Gjuh&euml; Gjermane</p>', 'z.selmani@edu.mk', '<p>Nerasht</p>', '070711321', 'mesuese-768x768.png'),
(32, 'Mësues i Rregullt', 'Female', '<p>Gjuh&euml; Shqipe dhe Let&euml;rsi</p>', 'a.memishi@edu.mk', '<p>Nerasht</p>', '070555000', 'mesuese-768x768.png'),
(35, 'Mësues Sporti', 'Male', '<p>Edukat&euml; Sportive</p>', 'adhurim.qazimi@hotmail.com', '<p>Nerasht 107</p>', '070329113', 'mesues-450x450.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` varchar(30) NOT NULL,
  `user_firstname` varchar(50) DEFAULT NULL,
  `user_lastname` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `user_password`, `user_role`, `user_firstname`, `user_lastname`) VALUES
(1, 'arbin.qazimi21@gmail.com', 'arbin123', 'administrator', 'Arbin', 'Qazimi'),
(87, 'mexhit@edu.mk', 'mexhit123', 'teacher', 'Mexhit', 'Musliu'),
(86, 'z.selmani@edu.mk', 'yemrije123', 'teacher', 'Zemrije', 'Selmani'),
(85, 'a.memishi@edu.mk', 'almira123', 'teacher', 'Almira', 'Memishi'),
(88, 'adhurim.qazimi@hotmail.com', 'adhurim123', 'teacher', 'Adhurim', 'Qazimi'),
(89, '20210II0601@school.com', 'faton123', 'student', 'Faton', 'Xhemali'),
(90, '202121901@ismailqemali.com', 'enis123', 'student', 'Enis', 'Mehdi'),
(91, '202122901@ismailqemali.com', 'egzon123', 'student', 'Egzon', 'Qamili'),
(92, '202122902@ismailqemali.com', 'fatime123', 'student', 'Fatime', 'Alimi'),
(93, '202121701@ismailqemali.com', 'kanita123', 'student', 'Kanita', 'Qazimi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classtime`
--
ALTER TABLE `classtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_teacher`
--
ALTER TABLE `class_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grading_result`
--
ALTER TABLE `grading_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_contents`
--
ALTER TABLE `page_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_options`
--
ALTER TABLE `page_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `classtime`
--
ALTER TABLE `classtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `class_teacher`
--
ALTER TABLE `class_teacher`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `grading_result`
--
ALTER TABLE `grading_result`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `page_contents`
--
ALTER TABLE `page_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `page_options`
--
ALTER TABLE `page_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
