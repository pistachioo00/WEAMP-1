-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 04:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wao`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `accountID` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `addressLine1` varchar(200) NOT NULL,
  `workPosition` varchar(100) NOT NULL,
  `category` enum('Individual','Union Representative','','') NOT NULL,
  `natureOfWork` varchar(100) NOT NULL,
  `yearsOfService` int(2) NOT NULL,
  `employmentDate` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `selfieWithID` varchar(255) DEFAULT NULL,
  `governmentID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountID`, `fullName`, `email`, `region`, `province`, `city`, `barangay`, `addressLine1`, `workPosition`, `category`, `natureOfWork`, `yearsOfService`, `employmentDate`, `username`, `contact`, `password`, `selfieWithID`, `governmentID`) VALUES
(1, 'Andrei John Camposano', 'ajcamposano@gmail.com', 'National Capital Region (NCR)', 'NCR, Third District ', 'City of Caloocan', 'Barangay 163', 'Universal Robina Emiii', 'Administrative Officer', 'Individual', 'Administrative Work', 7, '2024-05-09', 'ajcamposano', '9955033891', '$2y$10$6TMH0gKSAQ.ZB5x/9AdrGut3bZ4XwbQ6IuEbC./61hISZxBfR1Cyu', NULL, NULL),
(2, 'Juan Dela Cruz', 'jdcrux@gmail.com', 'Region III (Central Luzon)', 'Bulacan', 'Plaridel', 'Agnaya', 'Rocka Village', 'Instructor', 'Union Representative', 'University Faculty', 4, '2024-05-15', 'jdcrux', '9474898247', '$2y$10$k20YuWJclhiHn5JDMyhtv.5hSf9Ww8MpsEl2l2GpWRFA4Yk1vIFl.', NULL, NULL),
(3, 'Jose Rizal', 'joserizal@gmail.com', 'Region IV-A (CALABARZON)', 'Laguna', 'Santa Cruz ', 'Bacungan ', '12345 Street', 'Optalmologist', 'Individual', 'National Hero', 10, '2024-05-02', 'joserizal', '9345572341', '$2y$10$FaGo8BkP7hXMJsces/90Ter1RM6SBcruYm4aMcLCG9vZOEGYmMlf2', NULL, NULL),
(4, 'Juan Luna', 'juanluna@gmail.com', 'Region I (Ilocos Region)', 'Ilocos Norte', 'Paoay', 'Aguso', 'Luna St.', 'Katipunero', 'Union Representative', 'General of PH', 4, '2024-05-14', 'juanluna', '9456732423', '$2y$10$B8j5xO8bGXyBlggfH3jpiu7K9MNoBYUZ742A5MLkyNFGynM8hACrG', NULL, NULL),
(5, 'Mikaela Rose D. Racelis', 'wondergirls@gmail.com', 'National Capital Region (NCR)', 'NCR, Third District ', 'City of Caloocan', 'Barangay 10 ', 'Karuhatan Sa Iba', 'Researchers', 'Union Representative', 'Advisers', 2, '2024-05-14', 'wondergirls', '9342124465', '$2y$10$/evfZkSrq0I9R4IWynB3Ae8K26w7TgUnKJZrHQpxZX3.IYgBxRgcW', NULL, NULL),
(6, 'Patrick Star', 'patrickstar@gmail.com', 'Region III (Central Luzon)', 'Bataan', 'Mariveles', 'Agutay', 'Abucay', 'Star Fish', 'Individual', 'Sea Creature', 4, '2024-05-09', 'patrickstar', '9567453242', '$2y$10$WEYz9tBZVoD4YVRY.0Zx0eiftoF.G.8.w3aAkrWTNrJw6iTjmkfYy', NULL, NULL),
(7, 'Adi Camposano', 'adi@gmail.com', 'Region VIII (Eastern Visayas)', 'Leyte', 'Dulag', 'Alon', 'Maasin', 'Tambay', 'Individual', 'Watcher', 1, '2024-05-08', 'adicamposano', '9123456887', '$2y$10$to/JFHxcSRCkAJed6f3YheJp0hXWOyFzBCTVFUh5z8vlhsSD1DmWy', NULL, NULL),
(8, 'Reid Guirera', 'ndreiic@gmail.com', 'National Capital Region (NCR)', 'NCR, Third District ', 'City of Caloocan', 'Airport', '12345', 'Admin', 'Individual', 'Admin', 1, '2024-05-08', 'ndreiica', '9123456789', '$2y$10$5S4zIFtCeE/ke7BAH7Bdu.t.oxhT22BAZJ7/8PqgLeQCDwCIl4tF.', NULL, NULL),
(9, 'Chester Malakas', 'hannahracelis.19@gmail.com', 'Cordillera Administrative Region (CAR)', 'Kalinga', 'Rizal', 'Ala-uli', '12345', 'Werk', 'Individual', 'Werk', 3, '2024-05-08', 'chester123', '9543514532', '$2y$10$Aj0./hinCpbDz7C11lQR4u1CAR95x8Paws2gw6QYnkC/Oo3j4uYpm', NULL, NULL),
(10, 'Mhia Calla', 'hannahracelis.19@gmail.com', 'National Capital Region (NCR)', 'NCR, Third District ', 'City of Caloocan', 'Agusan', 'asdasdsa', 'werk', 'Individual', 'basta', 5, '2024-05-22', 'mhiakeribels', '9235446567', '$2y$10$TBzz4DuKo8/pCXId0Xt6Eeq6fDOKhQW/le9DzgqoMevTX3Eo.1VN6', NULL, NULL),
(11, 'ASDASDASD', 'ASDASDASD@GMAIL.COM', '', '', '', '', 'ASDASDASD', 'ADSASDASD', 'Individual', 'ASDASDASD', 2, '2024-05-15', 'ASDASDASD', '4575689780', '$2y$10$IdJAwrBgzK7LIey3bu.3RO0TEAOLtq7D/i9TAvvPZq7pGciXwtwAW', NULL, NULL),
(12, 'Mhia Rose', 'mhiarosebaguanga1@gmail.com', '', '', '', '', 'Sa Lingunan', 'Aespa Member', 'Individual', 'Kpop Idol', 4, '2024-05-06', 'mhiarose', '9254724478', '$2y$10$Kk97Qmu2tquOgZLUaUFK4esfFRYxwQ67gT3NggNX44flJPnb/dN3a', NULL, NULL),
(13, 'Chester Zaragoza', 'pringmikaelaroisa48@gmail.com', '', '', '', '', 'BSOP', 'Tambay', 'Individual', 'Professional', 3, '2024-05-02', 'kendrick123', '9463455535', '$2y$10$ddo7IK201MM4Oq4ebyNLcOYy2bh6c04lOqSzhTqgbXYXfXEPv.u3e', NULL, NULL),
(14, 'Andrei John Camposano', 'aandreijohn@gmail.com', '', '', '', '', 'Sa May Tabi', 'Admin', 'Individual', 'Admin', 4, '2024-05-22', 'asdasdasd', '9123473457', '$2y$10$FnlPtOuaJ3wZWvgVH8nr.eAmZLRAljZPMbh5XU8Dy9ptzpIPJri42', NULL, NULL),
(15, 'Chester Malakas', 'hannahracelis.19@gmail.com', '', '', '', '', 'asfsesg', 'admin', 'Individual', 'admin', 4, '2024-05-14', 'chestermalakas', '1924325436', '$2y$10$uf54VXh195UvIqXo.G8ujuHPJeRJRtXXyg/gaX/t84MVcvzDkB4uC', NULL, NULL),
(16, 'Kenmar Bernardino', 'kenny@gmail.com', 'Region', 'Province', 'City', 'Barangay', 'GTDL', 'Chairperson', 'Individual', 'Instructor', 5, '2024-05-03', 'kenny123', '9123454363', '$2y$10$qsplZ4oyI5uFhmsbKN4IA.T.si9fJHTRtVwxfsxx2Eorb.QwVcV3e', NULL, NULL),
(17, 'Wes Gatchalian', 'aandreijohn@gmail.com', 'National Capital Region', 'Third District', 'Valenzuela', 'Gen. T. De Leon', 'Santolan Street', 'Mayor', 'Individual', 'Government Office', 3, '2024-05-03', 'mayorwes', '9123446356', '$2y$10$lys5H02kiIEEK7zdbBZ3xOVhO8ZzU/9ejpshQaedBNa5yYB2k6V9.', NULL, NULL),
(18, 'Jungwon Yang', 'spaghettimitbols@gmail.com', 'Region III', 'Bulacan', 'Meycauyan', 'Bancal', 'Sandiego St', 'Main Vocal', 'Individual', 'Kpop Idol', 3, '2024-05-22', 'jungwonie', '9845154152', '$2y$10$Q2lXf66L05aLoi1E1L5EZeDQ.YE1Gs/KSVTDyuimUxOO7xR.zIOxm', NULL, NULL),
(19, 'AJ Camposano', 'aandreijohn@gmail.com', 'National Capital Region', 'Third District', 'Valenzuela', 'Gen. T. De Leon', '3190', 'Student', 'Individual', 'Learner', 3, '2024-05-15', 'ajcamposano23', '9123456789', '$2y$10$iIju/914KJBMzy3ODaWRseKUE3fF7oXjSNSUIcaW0GBQpgEX/latS', NULL, NULL),
(20, 'bebulove', 'bebulove@gmail.com', 'NCR', 'NCR', 'NCR', 'NCR', 'Pasolo', 'wer', 'Individual', 'fsdfsd', 3, '2024-09-03', 'bebulove', '2385453463', '$2y$10$xdfgZbz.Z6/YYczI7crToOOxLTEYiV4tgQ0Oya8VWzQnrcgLpc0oG', NULL, NULL),
(22, 'Nathaniel T. Sabellano', 'wheredorosesbloom@gmail.com', 'NCR', 'Metro Manila', 'CITY OF VALENZUELA', 'Karuhatan', 'Block 1 Lot 22 Phase 4 Assumption Ville', 'Content Creator', 'Union Representative', 'Streaming', 5, '2024-08-28', 'pookiebear', '9547863214', '$2y$10$08LtLgIcWCysEls2Vqr8cul9jeexD0IFOZ9kTOT.P14gCPfoYCmai', 'SELFIE-66e23f5244dd69.14723477.jpg', 'ID-66e23f52450434.71546036.jpg'),
(23, 'Mhia Rose Balleras Baguanga', 'mhiarosebaguanga1@gmail.com', 'NCR', 'Metro Manila', 'CITY OF VALENZUELA', 'Karuhatan', 'Block 1 Lot 22 Phase 4 Assumption Ville', 'PRETTY', 'Union Representative', 'Maganda', 21, '2024-09-19', 'akoaypretty', '1222222222', '$2y$10$qSopfMsLb1gNP/G/x.Dxd.bkKawaZBf0FdrNuuPuNd.t0FbGOMxNy', 'SELFIE-66e6f911d2ad65.44803174.jpg', 'ID-66e6f911d30455.11234708.jpg'),
(24, 'Nightmare Cat', 'wheredorosesbloom@gmail.com', 'Cage', 'Square', 'Black', 'Tall', '123 Cat Litter', 'Cute', 'Individual', 'Homestay', 1, '2024-09-25', 'nightmarecat', '1546684566', '$2y$10$.2lIKCMSk2cBsuTlcJHlWu.QzqvVSTh1t6hK2A.mbI/Tq1PXGeDNS', 'SELFIE-66e7831f261703.26878578.jpg', 'ID-66e7831f266846.52109704.jpg'),
(26, 'hannah', 'hannahracelis.19@gmail.com', 'NCR', 'Metro Manila', 'Valenzuela City', 'Karuhatan', '25 Faith Bible st.', 'Sales', 'Individual', 'Sales Worker', 2, '2022-10-12', 'tobipogi', '9554574359', '$2y$10$rFIglWECLqxYxCfM789hWuu6x2YwygNWERr0XPvMO8EFE.uTyZ4YC', 'SELFIE-6707fa2dd65db8.80636475.jpg', 'ID-6707fa2dd6a2d7.79752857.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(2) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` enum('Admin','Super Admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `fullName`, `email`, `username`, `password`, `role`) VALUES
(1, 'Tobiya Racelis', 'tobi@gmail.com', 'tobicute', 'tobicute', 'Super Admin'),
(2, 'Hayami Exotic', 'hayami@gmail.com', 'hayami', 'hayami123', 'Admin'),
(3, 'Andrei John Camposano', 'aandreijohn@gmail.com', 'aandreijohn', '$2y$10$s.VemAFFiW2xt1j5vsxDE.CBtw1KlKMfrga4sLZsyBgfX3rBPl56O', 'Admin'),
(4, 'Mhia Rose Baguanga', 'mhiarosebaguanga1@gmail.com', 'mhiarosebaguanga1', '$2y$10$omX34XerpMgY7rlLb2Q0rOvCeQAkvD00OtivhxGiOsQKun2nzCNiW', 'Admin'),
(5, 'Mikaela Roisa Pring', 'pringmikaelaroisa48@gmail.com', 'pringmikaelaroisa48', '$2y$10$76M5FsSDBzF/9iQE19qRieTl6nu5KB8GVbhTgBiRMDD7SMj8jL19K', 'Admin'),
(6, 'Hannah Erika Racelis', 'hannahracelis.19@gmail.com', 'hannahracelis.19', '$2y$10$bjDjnygkyd3tBN5PldfCiuqBXgRlosmQUhJeG2fkLJjGUGfD/lPie', 'Admin'),
(7, 'AJ Camposano', 'ndreiic@gmail.com', 'ndreiica', '$2y$10$nv42aIxF7dnjqq9QUMKT9O8sNRfZlvKZLPHSJ7JRQtoVMG6Wgc0wi', 'Admin'),
(8, 'Kenmar Bernadino', 'kenbernardino@gmail.com', 'kenbernardino123', '$2y$10$u/d95Jq6gSlRnrsDqnAG3OnNvcQG78BK2zmzgKvQ2.p3dkgM9K8JG', 'Admin'),
(10, 'Bjorn Pogi', 'bjorn@gmail.com', 'jonathan', '$2y$10$PdfvLocV6CjxtnZOPW8LuuLlG8o2srA8lZgja6okQFVLart9gWNJW', 'Super Admin');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignmentID` int(11) NOT NULL,
  `referenceID` int(50) NOT NULL,
  `accountID` int(50) NOT NULL,
  `adminID` int(50) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignmentID`, `referenceID`, `accountID`, `adminID`, `datetime`) VALUES
(7, 33, 16, 4, '2024-05-28 22:11:26'),
(9, 29, 10, 4, '2024-05-29 08:51:33'),
(10, 35, 19, 5, '2024-05-29 14:32:42'),
(11, 34, 17, 7, '2024-05-29 14:56:37'),
(12, 17, 2, 4, '2024-09-12 14:12:13'),
(13, 18, 4, 4, '2024-09-12 14:16:54'),
(14, 28, 9, 3, '2024-09-12 14:17:12'),
(15, 19, 5, 5, '2024-09-12 14:44:26'),
(16, 37, 22, 4, '2024-09-15 15:00:10'),
(17, 38, 24, 8, '2024-09-16 17:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `claimsID` int(2) NOT NULL,
  `claimsCode` varchar(10) NOT NULL,
  `claimsName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `claims`
--

INSERT INTO `claims` (`claimsID`, `claimsCode`, `claimsName`) VALUES
(1, 'ULP', 'Unfair Labor Practice'),
(2, 'ID', 'Illegal Dismissal'),
(3, 'IDMC', 'Illegal Dismissal with Money Claims'),
(4, 'NCOHSS', 'Non-compliance with Occupational Health and Safety Standards'),
(5, 'CED', 'Certification Election Dispute'),
(6, 'IUD', 'Inter/Intra Union Dispute'),
(7, 'CUR', 'Cancellation of Union Registration');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postID` int(15) NOT NULL,
  `adminID` int(10) NOT NULL,
  `postTitle` varchar(100) NOT NULL,
  `postContent` longtext NOT NULL,
  `postLink` varchar(255) NOT NULL,
  `postImage` varchar(200) NOT NULL,
  `postDate` datetime NOT NULL DEFAULT current_timestamp(),
  `postStatus` enum('Publish','Draft') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `adminID`, `postTitle`, `postContent`, `postLink`, `postImage`, `postDate`, `postStatus`) VALUES
(1, 10, 'trial', 'trial kuno', 'http://localhost/bloggingWeb/project/admin/dashboard.php', 'Opera Snapshot_2024-10-11_204813_localhost.png', '2024-10-12 02:13:53', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `reliefs`
--

CREATE TABLE `reliefs` (
  `reliefID` int(2) NOT NULL,
  `reliefCode` varchar(10) NOT NULL,
  `reliefName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reliefs`
--

INSERT INTO `reliefs` (`reliefID`, `reliefCode`, `reliefName`) VALUES
(1, 'PMC', 'Payment of Money Claims'),
(2, 'RS', 'Reinstatement'),
(3, 'CULPA', 'Cessation of ULP Acts'),
(4, 'RCVOSHS', 'Restitution/Correction of Violation of Occupational Safety and Health Standards'),
(5, 'CEUF', 'Conduct of Election of Union Funds'),
(6, 'AEUF', 'Audit/Examination of Union Funds');

-- --------------------------------------------------------

--
-- Table structure for table `rfa`
--

CREATE TABLE `rfa` (
  `referenceID` int(3) NOT NULL,
  `businessName` varchar(100) NOT NULL,
  `claimsAndIssues` varchar(500) NOT NULL,
  `claimsRemarks` varchar(1000) DEFAULT NULL,
  `reliefPrayedFor` varchar(500) NOT NULL,
  `reliefsRemarks` varchar(1000) DEFAULT NULL,
  `accountID` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` enum('PENDING','IN PROGRESS','COMPLETED','RECEIVED') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rfa`
--

INSERT INTO `rfa` (`referenceID`, `businessName`, `claimsAndIssues`, `claimsRemarks`, `reliefPrayedFor`, `reliefsRemarks`, `accountID`, `date`, `status`) VALUES
(16, 'Mind Your Own', 'ULP,ID,IDMC,Others', '', '', '', 1, '2024-05-20', 'PENDING'),
(17, 'Basta Business Ito', 'ULP,ID', '', '', '', 2, '2024-05-20', 'IN PROGRESS'),
(18, 'Balintawak', 'ID,Others', '', '', '', 4, '2024-05-20', 'IN PROGRESS'),
(19, 'Business Minded People', 'CUR,Others: Parang Others kasi', '', '', '', 5, '2024-05-21', 'IN PROGRESS'),
(20, 'Bagong Busyness', 'ULP,ID,Others: Ewan', 'Basta merong remarks', 'PMC,RS,Others: Incentives emii', 'Elaborate na lang', 6, '2024-05-22', 'PENDING'),
(26, 'MARE KOOOO', 'NCOHSS,CED,IUD,CUR', '', 'RS,AEUF', '', 7, '2024-05-22', 'PENDING'),
(27, 'Kabilang Tindahan', 'ID,IDMC,Others: Meron', 'Wala', 'RCVOSHS,CEUF', '', 8, '2024-05-23', 'PENDING'),
(28, 'Nabi Haus', 'ULP,ID,IDMC,Others: Parang Others Kasi', '', 'RCVOSHS,CEUF', 'Reklamo ko lang to', 9, '2024-05-24', 'IN PROGRESS'),
(29, 'Bahay ni Hannah', 'ULP,ID,Others: BASTA OTHERS', '', ',Others: ITO LANG MERON', 'WALA LANG BII', 10, '2024-05-24', 'IN PROGRESS'),
(31, 'SM Entertainment', 'ULP,CUR', '', 'CEUF,AEUF', '', 12, '2024-05-28', 'PENDING'),
(32, 'Mind Your Own', 'ULP,ID,Others: Basta Meron', 'None', 'PMC,RS', '', 15, '2024-05-28', 'PENDING'),
(34, 'Plastic City', 'ID,IDMC,Others: ', 'Explanation here for the claims or issues involved.', 'PMC', '', 17, '2024-05-29', 'IN PROGRESS'),
(35, 'PLV Malinta', 'ULP,ID,CUR,Others: Non payment', 'Explanation here', 'PMC,RS', '', 19, '2024-05-29', 'IN PROGRESS'),
(36, '', 'IDMC', '', 'PMC', '', 21, '2024-09-05', 'PENDING'),
(37, 'Alice Guo', 'CUR,Others: test ang others', 'Test lang', 'RCVOSHS,Others: test ang others 2', 'Test lang', 22, '2024-09-12', 'IN PROGRESS'),
(38, 'Apollo Quibolloy', 'ULP,IUD', '', 'CULPA', '', 24, '2024-09-16', 'IN PROGRESS');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `testingID` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`testingID`, `name`, `price`) VALUES
(1, 'Apple', 23),
(2, 'Banana', 12),
(3, 'Custard', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignmentID`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`claimsID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `reliefs`
--
ALTER TABLE `reliefs`
  ADD PRIMARY KEY (`reliefID`);

--
-- Indexes for table `rfa`
--
ALTER TABLE `rfa`
  ADD PRIMARY KEY (`referenceID`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`testingID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `accountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `claims`
--
ALTER TABLE `claims`
  MODIFY `claimsID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reliefs`
--
ALTER TABLE `reliefs`
  MODIFY `reliefID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rfa`
--
ALTER TABLE `rfa`
  MODIFY `referenceID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `testingID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
