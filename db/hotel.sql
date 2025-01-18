-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2024 at 01:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `day_out_bookings`
--

CREATE TABLE `day_out_bookings` (
  `id` int(11) DEFAULT NULL,
  `full_name` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `nic` varchar(55) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `guests` int(11) DEFAULT NULL,
  `payment_option` varchar(55) DEFAULT NULL,
  `guide` varchar(55) DEFAULT NULL,
  `phone_number` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `day_out_bookings`
--

INSERT INTO `day_out_bookings` (`id`, `full_name`, `email`, `nic`, `date`, `guests`, `payment_option`, `guide`, `phone_number`) VALUES
(NULL, 'Chathura Piyumal', 'chathurapiyumal@gmail.com', '200125001035', '2024-10-09', 3, 'bank_transfer', '2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(55) DEFAULT NULL,
  `experience` varchar(55) DEFAULT NULL,
  `languages` varchar(55) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `name`, `experience`, `languages`, `rating`) VALUES
(1, 'John Doe', '10', 'English, Spanish', 5),
(2, 'Jane Smith', '7', 'French, English', 4),
(3, 'Ahmed Khan', '5', 'Arabic, English', 4),
(4, 'Maria Garcia', '8', 'Spanish, English', 5),
(5, 'Ling Wei', '6', 'Chinese, English', 4),
(6, 'Sophie Martin', '9', 'English, German', 5);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `instructor_id` int(11) DEFAULT NULL,
  `instructor_name` varchar(55) DEFAULT NULL,
  `phone_number` varchar(55) DEFAULT NULL,
  `language` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`instructor_id`, `instructor_name`, `phone_number`, `language`) VALUES
(1, 'John Smith', '0788883540', 'English'),
(2, 'Maria Garcia', '0781101039', 'Tamil'),
(3, 'Hiroshi Tanaka', '0788123515', 'Sinhala'),
(4, 'Aisha Khan', '0781775059', 'Chinese'),
(5, 'Pierre Dubois', '0781081871', 'French'),
(6, 'Chen Wei', '0783998461', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `pool_party_bookings`
--

CREATE TABLE `pool_party_bookings` (
  `id` int(11) NOT NULL,
  `full_name` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `nic` varchar(55) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `guests` int(11) DEFAULT NULL,
  `payment_option` varchar(55) DEFAULT NULL,
  `additional_requirements` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pool_party_bookings`
--

INSERT INTO `pool_party_bookings` (`id`, `full_name`, `email`, `nic`, `event_date`, `guests`, `payment_option`, `additional_requirements`) VALUES
(0, 'Chathura Piyumal', 'chathurapiyumal@gmail.com', '200125001035', '2024-10-15', 3, 'debit_card', 'I want both breakfast and lunch');

-- --------------------------------------------------------

--
-- Table structure for table `room_bookings`
--

CREATE TABLE `room_bookings` (
  `id` int(11) NOT NULL,
  `full_name` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `nic` varchar(55) DEFAULT NULL,
  `checkin_date` date DEFAULT NULL,
  `checkout_date` date DEFAULT NULL,
  `guests` int(11) DEFAULT NULL,
  `room_type` varchar(55) DEFAULT NULL,
  `payment_option` varchar(55) DEFAULT NULL,
  `booking_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_bookings`
--

INSERT INTO `room_bookings` (`id`, `full_name`, `email`, `nic`, `checkin_date`, `checkout_date`, `guests`, `room_type`, `payment_option`, `booking_date`) VALUES
(0, 'Chathura Piyumal', 'chathurapiyumal@gmail.com', '200125001035', '2024-09-30', '2024-10-09', 3, 'single', 'credit_card', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `feedback` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `nic`, `phone_number`, `password`, `feedback`) VALUES
(1, 'chathurajy', 'user1@gmail.com', '200125001035', '0781378034', '123', 'Great!');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_bookings`
--

CREATE TABLE `wedding_bookings` (
  `id` int(11) NOT NULL,
  `full_name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `nic` varchar(55) NOT NULL,
  `wedding_date` date NOT NULL,
  `guests` int(11) NOT NULL,
  `additional_arrangements` text DEFAULT NULL,
  `menu_preference` text DEFAULT NULL,
  `payment_option` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding_bookings`
--

INSERT INTO `wedding_bookings` (`id`, `full_name`, `email`, `nic`, `wedding_date`, `guests`, `additional_arrangements`, `menu_preference`, `payment_option`) VALUES
(1, 'Chathura Piyumal', 'chathurapiyumal@gmail.com', '200125001035', '2024-10-07', 4, 'I want a music band', 'standard', 'debit_card');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pool_party_bookings`
--
ALTER TABLE `pool_party_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_bookings`
--
ALTER TABLE `room_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nic` (`nic`);

--
-- Indexes for table `wedding_bookings`
--
ALTER TABLE `wedding_bookings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wedding_bookings`
--
ALTER TABLE `wedding_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
