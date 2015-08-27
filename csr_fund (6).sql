-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2015 at 09:20 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `csr_fund`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_staff_request`
--

CREATE TABLE IF NOT EXISTS `assigned_staff_request` (
  `request_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigned_staff_request`
--

INSERT INTO `assigned_staff_request` (`request_id`, `staff_id`) VALUES
(13, 53005),
(14, 53005),
(15, 53005),
(16, 53005),
(17, 53005),
(18, 53005),
(19, 53005),
(20, 53005),
(21, 53005),
(22, 53005),
(23, 53005),
(24, 53005);

-- --------------------------------------------------------

--
-- Table structure for table `date_requested`
--

CREATE TABLE IF NOT EXISTS `date_requested` (
  `request_id` int(11) NOT NULL,
  `date_marked` datetime NOT NULL,
  `date_received` varchar(20) NOT NULL,
  `date_process` varchar(20) NOT NULL,
  `date_deadline` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date_requested`
--

INSERT INTO `date_requested` (`request_id`, `date_marked`, `date_received`, `date_process`, `date_deadline`) VALUES
(13, '0000-00-00 00:00:00', '2015-07-17', '2015-07-22', '2015-07-14'),
(14, '0000-00-00 00:00:00', '2015-07-18', '2015-07-22', '2015-07-14'),
(15, '0000-00-00 00:00:00', '2015-07-19', '0', '0'),
(16, '0000-00-00 00:00:00', '2015-07-19', '2015-07-23', '2015-07-27'),
(17, '0000-00-00 00:00:00', '2015-07-19', '0', '0'),
(18, '0000-00-00 00:00:00', '2015-07-19', '2015-07-21', '2015-07-07'),
(19, '0000-00-00 00:00:00', '2015-07-19', '2015-07-22', '2015-07-15'),
(20, '0000-00-00 00:00:00', '2015-07-19', '2015-07-15', '2015-09-25'),
(21, '0000-00-00 00:00:00', '2015-07-19', '2015-07-15', '2015-07-28'),
(22, '0000-00-00 00:00:00', '2015-07-19', '2015-07-14', '2015-07-31'),
(23, '0000-00-00 00:00:00', '2015-07-19', '2015-07-17', '2015-07-29'),
(24, '0000-00-00 00:00:00', '2015-07-19', '', '2015-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL,
  `trans` text NOT NULL,
  `date_time` datetime NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `trans`, `date_time`, `value`) VALUES
(53005, 'Add Staff', '2015-07-01 14:46:05', 'First Name: Lou Last Name: Pinton Email: sdad@asdas.con Address:   Southern Davao Panabo City'),
(17404, 'Add Staff', '2015-07-19 14:38:29', 'First Name: csdd Last Name: scdcd Email: sdad@asdas.con Address:   dfsdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `nature_of_expense`
--

CREATE TABLE IF NOT EXISTS `nature_of_expense` (
  `code` varchar(5) NOT NULL,
  `nature_of_expense` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nature_of_expense`
--

INSERT INTO `nature_of_expense` (`code`, `nature_of_expense`) VALUES
('csr1', 'Education Program'),
('csr2', 'Medical Program'),
('csr3', 'Charitable Contribution'),
('csr4', 'Community Development'),
('csr5', 'Environment Development'),
('csr6', 'Social Program');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `reference_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`reference_id`, `request_id`, `code`) VALUES
(1, 13, 'csr1'),
(2, 13, 'csr1'),
(3, 13, 'csr1'),
(4, 13, 'csr1'),
(5, 13, 'csr1'),
(27, 14, 'csr5'),
(28, 14, 'csr5'),
(23, 16, 'csr4'),
(24, 16, 'csr4'),
(26, 16, 'csr4'),
(27, 18, 'csr5'),
(28, 18, 'csr5'),
(2, 19, 'csr1'),
(28, 20, 'csr5'),
(23, 21, 'csr4'),
(24, 21, 'csr4'),
(26, 21, 'csr4'),
(23, 22, 'csr4'),
(24, 22, 'csr4'),
(25, 22, 'csr4'),
(26, 22, 'csr4'),
(24, 23, 'csr4'),
(25, 23, 'csr4'),
(24, 24, 'csr4');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE IF NOT EXISTS `reference` (
`reference_id` int(11) NOT NULL,
  `reference_name` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`reference_id`, `reference_name`) VALUES
(1, 'Don AOF Excellence Award'),
(2, 'Balik aral Program-Alternative Learning System(ALS)'),
(3, 'Pilipino Banana Growers and Exporters Association'),
(4, 'Technical skills Training'),
(5, 'School supplies Donation'),
(6, 'SPorts Program'),
(7, 'Brigada Eskwela'),
(8, 'Garantisadong Pambata Activity'),
(9, 'Prostate Cancer Screening'),
(10, 'Filariasis'),
(11, 'Sputum Testing'),
(12, 'Goodbye Lamok'),
(13, 'MEdical Mission'),
(14, 'Operation Tuli'),
(15, 'Feeding Program'),
(16, 'Dental Flouride'),
(17, 'Urine Analysis'),
(18, 'Mobile Blood Donation'),
(19, 'Health advocacy and information drives on AIDS,. STD'),
(20, 'Donations/Solications'),
(21, 'Wake and Burial Assistance'),
(22, 'Cash assistance'),
(23, 'Peace Coopertion Program(Tadeco,.INC and Anflo)'),
(24, 'Pamaskong Handog program'),
(25, 'Kabuhayang Agri tayo(livelihood projects)'),
(26, 'Summer Job Program'),
(27, 'Tree Growing'),
(28, 'Coastal care'),
(29, 'Relief Operations'),
(30, 'Kasalan ng Bayan'),
(31, 'Responsible parenthood movement');

-- --------------------------------------------------------

--
-- Table structure for table `requestor_info`
--

CREATE TABLE IF NOT EXISTS `requestor_info` (
  `requestor_First_name` varchar(30) NOT NULL,
  `requestor_Middle_name` varchar(30) NOT NULL,
  `requestor_Last_name` varchar(30) NOT NULL,
  `requestor_contact` varchar(13) NOT NULL,
  `requestor_address` varchar(200) NOT NULL,
`requestor_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `requestor_info`
--

INSERT INTO `requestor_info` (`requestor_First_name`, `requestor_Middle_name`, `requestor_Last_name`, `requestor_contact`, `requestor_address`, `requestor_id`) VALUES
('Lou', 'Reyes', 'Pinton', '09484388157', 'Southern Davao Panabo City', 12),
('dffsdf', 'sdfsdf', 'sdfsdf', 'sdfsdfsd', 'fsdfsd', 13),
('0', '0', '0', '0', '0', 14),
('Junel Jay', 'Lasmese', 'Saumat', '09484388157', 'Southern Davao Panabo City', 15),
('0', '0', '0', '0', '0', 16),
('efdsf', 'dsfsdf', 'dsfdsf', '09484388157', 'Southern Davao Panabo City', 17),
('Lou', 'Reyes', 'Pinton', '09484388157', 'Southern Davao Panabo City', 18),
('April Jean', 'Diquit', 'Samarca', '090865635465', 'Caganguhan Panabo City', 19),
('Junel Jay', 'Lasmese', 'Saumat', '09103040067', 'Caganguhan Panabo City', 20),
('Jan Adrian', 'Jandumon', 'Villarin', '0920878734', 'fvvcvxcvxcv', 21),
('Lou', 'Reyes', 'Pinton', '09484388157', 'Caganguhan Panabo City', 22),
('Junel Jay', 'Lasmese', 'Saumat', '090865635465', 'Caganguhan Panabo City', 23);

-- --------------------------------------------------------

--
-- Table structure for table `requestor_locator`
--

CREATE TABLE IF NOT EXISTS `requestor_locator` (
  `requestor_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `request_affiliation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestor_locator`
--

INSERT INTO `requestor_locator` (`requestor_id`, `request_id`, `request_affiliation_id`) VALUES
(14, 15, 11),
(16, 17, 13),
(17, 18, 14),
(18, 19, 15),
(19, 20, 16),
(20, 21, 17),
(22, 23, 19),
(23, 24, 20);

-- --------------------------------------------------------

--
-- Table structure for table `request_affilation`
--

CREATE TABLE IF NOT EXISTS `request_affilation` (
  `requestor_id` int(11) NOT NULL,
  `requestor_affilation` varchar(200) NOT NULL,
`request_affiliation_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `request_affilation`
--

INSERT INTO `request_affilation` (`requestor_id`, `requestor_affilation`, `request_affiliation_id`) VALUES
(12, 'Teacher of A.O Floirendo National Hight School', 9),
(13, 'fsdfsdf', 10),
(14, '0', 11),
(15, 'Teacher of A.O Floirendo National Hight School', 12),
(16, '0', 13),
(17, 'Teacher of A.O Floirendo National Hight School', 14),
(18, 'Teacher of A.O Floirendo National Hight School', 15),
(19, 'Teacher of A.O Floirendo National Hight School', 16),
(20, 'jhvhvnbvnbvjhgjhgjhg', 17),
(21, 'vbdfgfdgds  d sdf sdfds fdasdf asd', 18),
(22, 'Teacher of A.O Floirendo National Hight School', 19),
(23, 'jhvhvnbvnbvjhgjhgjhg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `request_amount_cash`
--

CREATE TABLE IF NOT EXISTS `request_amount_cash` (
  `request_id` int(11) NOT NULL,
  `request_cash_amount` double(11,2) NOT NULL,
  `request_cash_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_amount_cash`
--

INSERT INTO `request_amount_cash` (`request_id`, `request_cash_amount`, `request_cash_description`) VALUES
(13, 0.00, 'scassac'),
(14, 2000.00, 'dffsdfsdfafsdafsadf'),
(15, 0.00, '0'),
(17, 0.00, '0'),
(18, 300.00, 'dfvbdfvdfv'),
(19, 5000.00, 'xcvcxvxcvxv'),
(21, 400.00, 'fdgdfgdfg'),
(23, 3223.00, 'dfvdvdfv'),
(24, 989898.00, 'dfdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `request_info`
--

CREATE TABLE IF NOT EXISTS `request_info` (
  `request_party` text NOT NULL,
  `request_description` text NOT NULL,
  `request_kind` varchar(20) NOT NULL,
`request_id` int(11) NOT NULL,
  `program_code` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `request_info`
--

INSERT INTO `request_info` (`request_party`, `request_description`, `request_kind`, `request_id`, `program_code`) VALUES
('Block 1', 'rfsdf', 'cash-inkind', 13, 'csr6'),
('sdfsdfsdf', 'sdfsdfsdf', 'cash', 14, 'csr1'),
('0', '0', 'cash-inkind', 15, 'csr2'),
('Savao Del Norte State College', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus...\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English.\r\n\r\nMany desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus.\r\n\r\nMany desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus...', 'inkind', 16, 'csr4'),
('0', '0', 'cash-inkind', 17, 'csr2'),
('Block 1', 'ioljkljkrferr g reg reg er wer g fgsdfg fdgdger r', 'cash-inkind', 18, 'csr5'),
('Savao Del Norte State College', 'xcdsc sd dds d', 'cash-inkind', 19, 'csr1'),
('Block 1', 'ddasdasdsdxcsdcd', 'inkind', 20, 'csr5'),
('Lkajshdkjshd', 'ghfgdfgdfg', 'cash', 21, 'csr4'),
('sdfdf sdf sf sdgds fg ', 'sdg dsfg sg sf sgdsfg sfdg dsf', 'inkind', 22, 'csr4'),
('Block 1', 'dfvferf', 'cash-inkind', 23, 'csr4'),
('Lkajshdkjshd', 'wefwdf', 'cash-inkind', 24, 'csr4');

-- --------------------------------------------------------

--
-- Table structure for table `request_items_inkind`
--

CREATE TABLE IF NOT EXISTS `request_items_inkind` (
  `request_id` int(11) NOT NULL,
  `request_item_name` text NOT NULL,
  `request_item_quantity` int(11) NOT NULL,
  `request_item_description` text NOT NULL,
  `request_item_price` double(11,2) NOT NULL,
  `request_total_item_price` double(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_items_inkind`
--

INSERT INTO `request_items_inkind` (`request_id`, `request_item_name`, `request_item_quantity`, `request_item_description`, `request_item_price`, `request_total_item_price`) VALUES
(13, 'asdasd', 2, ' sadsad', 23.00, 0.00),
(16, 'dfdsf', 3, ' fdsdfsdf', 12.00, 0.00),
(16, 'dsfsdf', 3, ' sdfsdfdsf', 23.00, 0.00),
(18, 'fsdfsd', 2, ' dfbdfv', 50.00, 100.00),
(18, 'fsdfsd', 4, ' fdvf', 12.00, 48.00),
(18, 'fsdfsdf', 5, ' vdfvfdvdfv', 5.00, 25.00),
(19, 'Ball', 3, ' fff', 400.00, 1200.00),
(19, 'Ring', 3, ' fff', 100.00, 300.00),
(20, 'asdasd', 3, 'sdfd', 400.00, 1200.00),
(20, 'dsfsdf', 2, ' sdfsdfsd', 100.00, 200.00),
(20, 'fsdfsdf', 1, ' fsdfsdf', 33.00, 33.00),
(24, 'sdfdsfsd', 3, ' dfdfdf', 232.00, 696.00);

-- --------------------------------------------------------

--
-- Table structure for table `request_remarks`
--

CREATE TABLE IF NOT EXISTS `request_remarks` (
  `request_id` int(11) NOT NULL,
  `request_remarks` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_remarks`
--

INSERT INTO `request_remarks` (`request_id`, `request_remarks`) VALUES
(13, 'waiting'),
(14, 'waiting'),
(15, 'disapproved'),
(16, 'waiting'),
(17, 'disapproved'),
(18, 'approved'),
(19, 'approved'),
(20, 'approved'),
(21, 'disapproved'),
(22, 'waiting'),
(23, 'disapproved'),
(24, 'disapproved');

-- --------------------------------------------------------

--
-- Table structure for table `scanned_documents`
--

CREATE TABLE IF NOT EXISTS `scanned_documents` (
  `request_id` int(11) NOT NULL,
  `request_description` text NOT NULL,
  `request_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE IF NOT EXISTS `socialmedia` (
  `id` int(11) NOT NULL,
  `account` varchar(50) NOT NULL,
  `youraccount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `account`, `youraccount`) VALUES
(1, 'facebook', 'www.facebook.com/pinton.lou.7'),
(1, 'youtube', 'fdfgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `staffdetail`
--

CREATE TABLE IF NOT EXISTS `staffdetail` (
`id` int(11) NOT NULL,
  `fn` varchar(25) NOT NULL,
  `ln` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53006 ;

--
-- Dumping data for table `staffdetail`
--

INSERT INTO `staffdetail` (`id`, `fn`, `ln`, `email`, `city`, `phone`, `address`) VALUES
(1, 'Lou', 'Pinton', 'pintonlou@gmail.com', 'Panabo City', '090994843881', 'Southern Davao Panabo City'),
(17404, 'csdd', 'scdcd', 'sdad@asdas.con', 'cdscd', '32312312', 'dfsdfsd'),
(53005, 'Lou', 'Pinton', 'sdad@asdas.con', 'Panabo City', '090994843881', 'Southern Davao Panabo City');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `remark` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pass`, `type`, `remark`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '', 'online'),
(53005, 'lou', '123456', 'staff', 'approved', 'offline'),
(17404, 'dsdas', '121212', 'staff', 'unapprove', 'offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
 ADD PRIMARY KEY (`reference_id`);

--
-- Indexes for table `requestor_info`
--
ALTER TABLE `requestor_info`
 ADD PRIMARY KEY (`requestor_id`);

--
-- Indexes for table `request_affilation`
--
ALTER TABLE `request_affilation`
 ADD PRIMARY KEY (`request_affiliation_id`);

--
-- Indexes for table `request_info`
--
ALTER TABLE `request_info`
 ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `staffdetail`
--
ALTER TABLE `staffdetail`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
MODIFY `reference_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `requestor_info`
--
ALTER TABLE `requestor_info`
MODIFY `requestor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `request_affilation`
--
ALTER TABLE `request_affilation`
MODIFY `request_affiliation_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `request_info`
--
ALTER TABLE `request_info`
MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `staffdetail`
--
ALTER TABLE `staffdetail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53006;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
