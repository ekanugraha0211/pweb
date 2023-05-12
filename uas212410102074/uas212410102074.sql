-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 08:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas212410102074`
--

-- --------------------------------------------------------

--
-- Table structure for table `pel_elpha`
--

CREATE TABLE `pel_elpha` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `lama_bermain` int(11) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `user_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pel_elpha`
--

INSERT INTO `pel_elpha` (`id`, `nama`, `gambar`, `lama_bermain`, `telp`, `user_id`) VALUES
(38, 'bifun', 'nophoto.jpg', 4, '081945396846', 19),
(39, 'gadang', 'nophoto.jpg', 4, '081223765888', 17),
(40, 'taher', 'nophoto.jpg', 2, '081233456667', 17),
(44, 'rommy', 'nophoto.jpg', 2, '081921340987', 17),
(45, 'andika', 'nophoto.jpg', 4, '081945396846', 19),
(46, 'hendrawan', 'nophoto.jpg', 1, '081249987543', 20),
(47, 'Ahmad', 'nophoto.jpg', 1, '08123456789', 19),
(48, 'tedjo', 'nophoto.jpg', 3, '081921435213', 20),
(49, 'kurniawan', 'nophoto.jpg', 3, '081921435785', 17),
(50, 'hendra', 'nophoto.jpg', 4, '089345409878', 20),
(51, 'andika', 'nophoto.jpg', 4, '081945396846', 17),
(52, 'Christ', 'nophoto.jpg', 2, '082334563456', 19),
(53, 'eko', 'nophoto.jpg', 4, '084231573334', 17),
(54, 'wahid', 'nophoto.jpg', 3, '088768889976', 20),
(55, 'kurniawan02', 'nophoto.jpg', 3, '081921435213', 19),
(56, 'Ashyad', 'nophoto.jpg', 2, '086543217778', 19),
(57, 'aji', 'nophoto.jpg', 1, '081945396887', 20),
(58, 'wahyu', 'nophoto.jpg', 2, '081453267889', 17),
(59, 'alex', 'nophoto.jpg', 3, '084556778334', 19),
(60, 'windah', 'nophoto.jpg', 6, '089997665546', 20),
(61, 'evan', 'nophoto.jpg', 3, '083224764900', 20),
(62, 'rezi', 'nophoto.jpg', 5, '081921340921', 19),
(63, 'agus', 'nophoto.jpg', 2, '081233432667', 20),
(64, 'rahadyan', 'nophoto.jpg', 2, '081665872981', 17),
(65, 'santo', 'nophoto.jpg', 3, '081287998768', 20),
(66, 'kurniati', 'nophoto.jpg', 3, '082314556897', 17),
(67, 'senis', 'nophoto.jpg', 3, '089554345888', 19),
(68, 'wira', 'nophoto.jpg', 2, '083441562887', 20),
(69, 'anies', 'nophoto.jpg', 3, '081945396887', 19),
(70, 'yanuar', 'nophoto.jpg', 4, '081921340987', 17),
(71, 'Jesnot', 'nophoto.jpg', 1, '08123456789', 20),
(72, 'ekas', 'nophoto.jpg', 3, '081921437724', 17),
(73, 'gusti', 'nophoto.jpg', 2, '081967533467', 20),
(74, 'rasta', 'nophoto.jpg', 4, '081921340987', 19),
(75, 'andovi', 'nophoto.jpg', 1, '081943668460', 19),
(76, 'rohid', 'nophoto.jpg', 3, '081921340987', 17),
(77, 'racan', 'nophoto.jpg', 6, '081299956789', 17),
(78, 'dien', 'nophoto.jpg', 1, '081921435213', 20),
(79, 'yenos', 'nophoto.jpg', 3, '081921435213', 19),
(80, 'yudi', 'nophoto.jpg', 2, '081921340987', 19),
(81, 'angger', 'nophoto.jpg', 2, '081945311846', 17),
(82, 'roma', 'nophoto.jpg', 1, '081921340987', 17),
(83, 'aguero', 'nophoto.jpg', 1, '081238797891', 20),
(84, 'rudi', 'nophoto.jpg', 4, '081921436666', 19),
(85, 'ratna', 'nophoto.jpg', 3, '081921435213', 20),
(86, 'robi', 'nophoto.jpg', 6, '081921340987', 19),
(87, 'venil', 'nophoto.jpg', 4, '081945396846', 17),
(88, 'rommy', 'nophoto.jpg', 2, '081921340987', 19),
(89, 'Ahmad', 'nophoto.jpg', 1, '08123456789', 20),
(90, 'anam', 'nophoto.jpg', 3, '081921435213', 20),
(91, 'kurniawan', 'nophoto.jpg', 3, '081921435433', 17),
(92, 'nani', 'nophoto.jpg', 2, '081921341987', 20),
(93, 'andika', 'nophoto.jpg', 4, '081945396846', 19),
(94, 'rommy', 'nophoto.jpg', 2, '081921340987', 20),
(95, 'Ahmad', 'nophoto.jpg', 1, '08123456789', 17),
(96, 'kurniawan', 'nophoto.jpg', 3, '081921435213', 19),
(97, 'atroni', 'nophoto.jpg', 3, '085921435213', 19),
(98, 'rommy', 'nophoto.jpg', 2, '081921340987', 20),
(99, 'andika', 'nophoto.jpg', 4, '081945396846', 20),
(100, 'rommy', 'nophoto.jpg', 2, '081921340987', 20),
(101, 'Ahmad', 'nophoto.jpg', 1, '08123456789', 19),
(102, 'kurniawan', 'nophoto.jpg', 3, '081921435213', 17),
(103, 'kurniawan', 'nophoto.jpg', 3, '081921435213', 19),
(104, 'rommy', 'nophoto.jpg', 2, '081921340987', 20),
(105, 'andika', 'nophoto.jpg', 4, '081945396846', 19),
(106, 'rommy', 'nophoto.jpg', 2, '081921340987', 20),
(107, 'Ahmad', 'nophoto.jpg', 1, '08123456789', 20),
(108, 'kurniawan', 'nophoto.jpg', 3, '081921435213', 19),
(109, 'kurniawan', 'nophoto.jpg', 3, '081921435213', 17),
(110, 'rommy', 'nophoto.jpg', 2, '081921340987', 19),
(111, 'andika', 'nophoto.jpg', 4, '081945396846', 20),
(112, 'rommy', 'nophoto.jpg', 2, '081921340987', 17),
(113, 'Ahmad', 'nophoto.jpg', 1, '08123456789', 17),
(114, 'kurniawan', 'nophoto.jpg', 3, '081921435213', 19),
(115, 'kurniawan', 'nophoto.jpg', 3, '081921435213', 17),
(116, 'rommy', 'nophoto.jpg', 2, '081921340987', 17),
(117, 'rommy', 'nophoto.jpg', 2, '081921340987', 20),
(118, 'andika', 'nophoto.jpg', 4, '081945396846', 19),
(119, 'rommy', 'nophoto.jpg', 2, '081921340987', 20),
(120, 'Ahmad', 'nophoto.jpg', 1, '08123456789', 19),
(121, 'robitz', 'nophoto.jpg', 6, '081921340921', 20),
(122, 'marcel', 'nophoto.jpg', 1, '089667865444', 19),
(123, 'feri', 'nophoto.jpg', 2, '089444666756', 19),
(124, 'yusron', 'nophoto.jpg', 2, '081234567893', 17),
(125, 'ajax', 'nophoto.jpg', 3, '081921435213', 17),
(126, 'kodir', 'nophoto.jpg', 3, '081921435277', 17),
(127, 'yezy', 'nophoto.jpg', 2, '082221340987', 17),
(128, 'andika', 'nophoto.jpg', 4, '081945396846', 17),
(129, 'mahendra', 'nophoto.jpg', 2, '081921340965', 20),
(130, 'papang', 'nophoto.jpg', 1, '081234567894', 19),
(131, 'fauzi', 'nophoto.jpg', 2, '081921435213', 19),
(132, 'abi', 'nophoto.jpg', 3, '081929935213', 19),
(133, 'rizal', 'nophoto.jpg', 2, '081921340987', 17),
(134, 'alief', 'nophoto.jpg', 4, '081945396846', 20),
(135, 'alie', 'nophoto.jpg', 2, '081929080987', 17),
(136, 'banyi', 'nophoto.jpg', 1, '081234567891', 20),
(137, 'justin', 'nophoto.jpg', 3, '081233889765', 19),
(138, 'timberlake', 'nophoto.jpg', 3, '081921435213', 19),
(139, 'hira', 'nophoto.jpg', 2, '081921340987', 17),
(140, 'turin', 'nophoto.jpg', 4, '081945396846', 19),
(141, 'trigo', 'nophoto.jpg', 2, '081921340987', 20),
(142, 'Ahmad', 'nophoto.jpg', 1, '08123456789', 19),
(143, 'kurniawan', 'nophoto.jpg', 3, '081921435213', 17),
(144, 'rommy', 'nophoto.jpg', 2, '081921340987', 17);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tglLahir` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `tglLahir`, `username`, `password`, `gambar`) VALUES
(17, 'eka', 'ekanugraha0211@gmail.com', '2002-11-02', 'eka', '$2y$10$4yluraso1HuwP3CgTwN6V.mSF5ZEykkNFD9mu9EbaEoxkrHYsXwRi', 'nophoto.jpg'),
(19, 'alvito', 'alvito@gmail.com', '2022-12-04', 'alvito', '$2y$10$5K85BzdUXqa0QSHISSpBXODvybGBCFfALkBJNBJfx3wqqKTnbxaUO', 'nophoto.jpg'),
(20, 'krisna', 'krisna@gmail.com', '2022-12-06', 'krisna', '$2y$10$1ipQjpkUjvqgohPzFSzRC.C3et7dBRrXovY1zKX3C032bgWHupPNG', 'nophoto.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pel_elpha`
--
ALTER TABLE `pel_elpha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pel_elpha`
--
ALTER TABLE `pel_elpha`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pel_elpha`
--
ALTER TABLE `pel_elpha`
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
