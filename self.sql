
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `table1` (
  `sr` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `table1` (`sr`, `name`, `username`, `password`) VALUES
(1, 'Neha', 'neha@gmail.com', '123'),
(2, 'Shivani', 'shivani@gmail.com', '321'),
(3, 'Akanksha', 'akanksha123@gmail.com', '123'),
(4, 'Jyoti', 'jyoti@123.com', '123'),
(5, 'Pooja', 'pooja01@gmail.com', '123'),
(6, 'Kritika', 'kritika@gmail.com', '123'),
(7, 'Anjali', 'anjali@gmail.com', '123'),
(8, 'Riya', 'riya@gmail.com', '123'),
(9, 'Simran', 'simran@gmail.com', '123'),
(10, 'Sneha', 'sneha@gmail.com', '123'),
(11, 'Neha', 'neha.thakur@gmail.com', '87'),
(12, 'Shivani', 'shivani.thakur@gmail.com', '87'),
(13, 'Pooja', 'pooja@gmail.com', '123'),
(14, 'Akanksha', 'akanksha@123.com', '123'),
(15, 'Jyoti', 'jyoti@gmail.com', '123'),
(16, 'Kritika', 'kritika.sharma@gmail.com', '123'),
(17, 'Riya', 'riya.mehta@gmail.com', '123'),
(18, 'Simran', 'simran.kumari@gmail.com', '123'),
(19, 'Sneha', 'sneha.verma@gmail.com', '123'),
(20, 'Anjali', 'anjali.kaur@gmail.com', '123'),
(21, 'Neha', 'neha@123.com', '123'),
(22, 'Priya', 'priya@gmail.com', '123'),
(23, 'Aarti', 'aarti@gmail.com', 'mannat'),
(24, 'Muskan', 'muskan@gmail.com', '123');


ALTER TABLE `table1`
  ADD PRIMARY KEY (`sr`);


ALTER TABLE `table1`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;
