CREATE DATABASE IF NOT EXISTS `hotel_db`;
USE `hotel_db`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `admin` (
  `adminid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `empid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `admin` (`adminid`, `password`, `empid`) VALUES
('Admin', 'Blue$ky1234', 'Admin');


CREATE TABLE `balance` (
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `balance` (`balance`) VALUES (0);


CREATE TABLE `booked_hist` (
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `ac` varchar(10) NOT NULL,
  `breakfast` varchar(10) NOT NULL,
  `lunch` varchar(10) NOT NULL,
  `snacks` varchar(10) NOT NULL,
  `dinner` varchar(10) NOT NULL,
  `swimming` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `booked_hist` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `price`, `book_id`) VALUES
(123, 'Vishnu', '123', 'Single bed', '2019-10-09', '2019-10-17', 8, 'false', 'false', 'false', 'false', 'false', 'false', 1000, 10013),
(123, 'Vishnu', '123', 'Single bed', '2019-10-09', '2019-10-12', 3, 'false', 'true', 'true', 'false', 'false', 'false', 2350, 10014),
(1234, 'Vijay', '1234', 'Single bed', '2019-11-08', '2019-11-10', 2, 'false', 'true', 'true', 'false', 'false', 'false', 2900, 10019);


CREATE TABLE `confirmed_booking` (
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `ac` varchar(10) NOT NULL,
  `breakfast` varchar(10) NOT NULL,
  `lunch` varchar(10) NOT NULL,
  `snacks` varchar(10) NOT NULL,
  `dinner` varchar(10) NOT NULL,
  `swimming` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `confirmed_booking` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `price`, `book_id`) VALUES
(123, 'Vishnu', '123', 'Double bed', '2019-10-09', '2019-10-19', 10, 'false', 'false', 'true', 'false', 'false', 'false', 20400, 10017),
(123, 'Vishnu', '123', 'Single bed', '2019-10-02', '2019-10-04', 2, 'false', 'false', 'false', 'false', 'false', 'false', 2000, 10018);


CREATE TABLE `rooms_count` (
  `room_type` varchar(20) NOT NULL,
  `available_rooms` int(11) NOT NULL,
  `occupied_rooms` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `rooms_count` (`room_type`, `available_rooms`, `occupied_rooms`, `price`) VALUES
('Single bed', 10, 0, 1000),
('Double bed', 10, 0, 1800),
('Four bed', 10, 0, 3000);


CREATE TABLE `temp_session` (
  `phone` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `user_login` (
  `phone` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `user_login` (`phone`, `password`, `name`, `email`, `idproof`, `dob`) VALUES
(123, '1234', 'Vishnu', 'vishnu@gmail.com', '123', '2000-01-01'),
(1234, '12345', 'Vijay', 'vijay@gmail.com', '1234', '2000-01-01');


CREATE TABLE `user_room_book` (
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `ac` varchar(5) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Waiting',
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



ALTER TABLE `admin` ADD PRIMARY KEY (`adminid`);
ALTER TABLE `booked_hist` ADD PRIMARY KEY (`book_id`);
ALTER TABLE `confirmed_booking` ADD PRIMARY KEY (`book_id`);
ALTER TABLE `rooms_count` ADD PRIMARY KEY (`room_type`);
ALTER TABLE `user_login` ADD PRIMARY KEY (`phone`);
ALTER TABLE `user_room_book` ADD PRIMARY KEY (`book_id`);

COMMIT;