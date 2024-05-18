-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 05:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fkc_dbproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id_agent` int(25) NOT NULL,
  `agent_fname` varchar(255) NOT NULL,
  `agent_lname` varchar(255) NOT NULL,
  `agent_email` varchar(255) NOT NULL,
  `agent_phone` varchar(255) NOT NULL,
  `agent_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id_agent`, `agent_fname`, `agent_lname`, `agent_email`, `agent_phone`, `agent_address`) VALUES
(1, 'Muhammad Khairul', 'Bin Ahmad Rahmat', 'khairulRahmat@gmail.com', '+6014-755-7458', 'Lot Kilang KSB 1-1, 1-2 & 1-3, IKS, 86400 Parit Raja, Johor'),
(3, 'amir', 'Imtiaz', 'AmirImtiaz12@mail.com', '011-2558 8499', 'Kelantan Malaysia\r\n'),
(5, 'nazrul', 'alif', 'nazrul@gmail.com', '01255333553', 'Kampung Parit Buntar'),
(6, 'Hariz', 'Amri', 'hariz@gmail.com', '0194657182', 'Taman melinntang, Johor Bharu'),
(7, 'Faiz', 'Hamdan', 'faiz@example.com', '012459358', 'Jalan abadi, Seri Kembangan, Selangor'),
(8, 'Hisyamuddin', 'Zikri', 'hisyamuddin@outlook.com', '0124578956', 'Taman biru, Muar, Johor'),
(9, 'Chia', 'Szee', 'chia@student.com', '0124653258', 'Lorong 13, Taman Indah, Johor Bharu');

-- --------------------------------------------------------

--
-- Table structure for table `agent_order`
--

CREATE TABLE `agent_order` (
  `id_order` int(25) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `id_agent` int(25) NOT NULL,
  `id_product` int(25) NOT NULL,
  `order_quantity` int(25) NOT NULL,
  `order_totalprice` varchar(25) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent_order`
--

INSERT INTO `agent_order` (`id_order`, `order_date`, `id_agent`, `id_product`, `order_quantity`, `order_totalprice`, `order_status`) VALUES
(24, '2023-06-20', 1, 1, 50, '750.00', 'Disapproved'),
(27, '2023-06-19', 6, 5, 17, '170.00', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id_attendance` int(25) NOT NULL,
  `id_staff` int(11) NOT NULL,
  `attendance_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id_attendance`, `id_staff`, `attendance_date`) VALUES
(29, 3, '2023-06-19'),
(30, 3, '2023-06-20'),
(33, 3, '2023-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE `employee_leave` (
  `id_leave` int(25) NOT NULL,
  `id_staff` int(25) NOT NULL,
  `leave_detail` varchar(255) NOT NULL,
  `leave_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_leave`
--

INSERT INTO `employee_leave` (`id_leave`, `id_staff`, `leave_detail`, `leave_status`) VALUES
(12, 3, 'anniversary of janna nick (2023/06/22)', 'Approved'),
(13, 3, 'long term cough (2023/04/28)', 'Approved'),
(14, 3, 'my niece was accident (2023/05/09)', 'Disapproved'),
(16, 3, 'stomachache (2023/06/24)', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `kpi`
--

CREATE TABLE `kpi` (
  `id_kpi` int(25) NOT NULL,
  `kpi_task` varchar(255) NOT NULL,
  `kpi_due` date NOT NULL,
  `kpi_status` varchar(255) NOT NULL,
  `id_staff` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kpi`
--

INSERT INTO `kpi` (`id_kpi`, `kpi_task`, `kpi_due`, `kpi_status`, `id_staff`) VALUES
(7, 'Produce pizza frozen for 7000 pieces in a month', '2023-06-15', '93%', 1),
(9, 'Produce pizza frozen for 11000 pieces in a month', '2023-06-15', '94%', 3),
(10, 'Produce pizza frozen for 7500 pieces in a month', '2023-06-16', '99%', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(25) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_description` varchar(2555) NOT NULL,
  `product_price` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `product_name`, `product_category`, `product_description`, `product_price`) VALUES
(1, 'Pizza Chicken', 'Pizza', 'Pizza chicken is a delicious and popular dish that combines the flavors of pizza and chicken. It typically involves marinating chicken pieces in a mixture of pizza sauce, herbs, and spices, and then baking or grilling them to perfection. ', '15.00'),
(5, 'Garlic Pizza', 'Pizza', 'Garlic pizza is a delicious variation of traditional pizza that prominently features garlic as one of its main flavors. It typically starts with a classic pizza crust, which can be thin and crispy or thick and doughy, depending on personal preference.', '15.00'),
(9, ' Beef pizza', 'Pizza', 'Beef pizza is a mouthwatering twist on the traditional pizza that showcases the rich and savory flavors of beef. It begins with a base of classic pizza crust, which can be thin and crispy or thick and chewy, depending on individual taste preferences. Generously topped with succulent beef, it adds a hearty and satisfying element to the pizza. Complemented by a medley of ingredients such as onions, bell peppers, mushrooms, and a blend of cheeses, beef pizza offers a delicious and indulgent experience for meat lovers.', '15.00'),
(10, 'Cheesy pizza', 'Pizza', 'Cheesy pizza is a delectable rendition of the classic pizza, featuring an abundance of gooey and melty cheese. Starting with a base of traditional pizza crust, which can be thin and crispy or thick and doughy, the star of this pizza is the cheese. It can be a combination of various cheeses such as mozzarella, cheddar, Parmesan, or even specialty cheeses like feta or gorgonzola. The cheese melts to perfection, creating a stringy and irresistible texture, complementing the flavors of the other toppings, such as tomatoes, herbs, and vegetables.', '15.00'),
(11, 'Seafood pizza', 'Pizza', 'Seafood pizza offers a delightful twist to the traditional pizza by showcasing the flavors of the ocean. Beginning with a classic pizza crust, which can be thin and crispy or thick and chewy, this pizza is topped with an array of fresh and succulent seafood. It may include ingredients such as shrimp, crab, clams, mussels, or even pieces of fish. The seafood is typically paired with a tangy tomato sauce, herbs, and a sprinkle of cheese to create a delightful fusion of land and sea.', '15.00'),
(12, 'Garlic cheese pizza', 'Pizza', 'Garlic cheese pizza is a tantalizing variation of the classic pizza that combines the irresistible flavors of garlic and cheese. The foundation of this pizza is a traditional pizza crust, which can be thin and crispy or thick and doughy. The star ingredients, garlic, and cheese, are generously spread across the crust. The garlic infuses the pizza with its aromatic essence, while the cheese, often a blend of mozzarella and Parmesan, melts to perfection, creating a creamy and flavorful topping. The result is a heavenly combination that will satisfy both garlic and cheese lovers alike.', '15.00'),
(13, 'Garlic bread', 'Bread', 'Garlic bread is a beloved appetizer or side dish that features the enticing taste of garlic. It typically consists of a baguette or loaf of bread sliced lengthwise and spread with a mixture of butter or olive oil infused with minced garlic. The bread is then toasted or baked until golden brown, creating a crisp exterior while remaining soft and fluffy on the inside. The aroma of the garlic permeates the bread, resulting in a flavorful and aromatic treat that pairs well with various dishes or can be enjoyed on its own.', '7.00'),
(14, 'Garlic paste', 'Paste', 'Garlic paste is a versatile condiment that is made by crushing or blending garlic cloves into a smooth and aromatic paste. It is commonly used in cooking to add depth of flavor to a wide range of dishes. Garlic paste can be made by combining garlic cloves with a small amount of salt or oil to aid in the blending process. The resulting paste can be added to marinades, sauces, dressings, or used as a flavoring agent in various recipes. Its pungent and distinctive taste lends a savory kick to dishes, making it a popular ingredient in many culinary traditions.', '8.00');

-- --------------------------------------------------------

--
-- Table structure for table `raw_material`
--

CREATE TABLE `raw_material` (
  `id_rawproduct` int(11) NOT NULL,
  `raw_pname` varchar(255) NOT NULL,
  `raw_unit` varchar(25) NOT NULL,
  `raw_quantity` int(25) NOT NULL,
  `raw_price` varchar(50) NOT NULL,
  `id_vendor` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `raw_material`
--

INSERT INTO `raw_material` (`id_rawproduct`, `raw_pname`, `raw_unit`, `raw_quantity`, `raw_price`, `id_vendor`) VALUES
(4, 'Chilli Sauce', 'pack', 10, '6.50', 1),
(8, 'Oyster sauce', 'Bottle', 12, '7.50', 1),
(9, 'Tomato Sauce', 'Pack', 10, '6.50', 1),
(10, 'Sugar', 'Kg', 5, '2.50', 3),
(11, 'Salt', 'Kg', 5, '2.50', 3),
(12, 'Yeast', 'Pack', 20, '1.50', 4),
(13, 'Wheat Flour', 'Kg', 30, '2.50', 4),
(14, 'Cooking Oil', 'Bottle', 25, '30.10', 4);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(25) NOT NULL,
  `staff_username` varchar(255) NOT NULL,
  `staff_password` varchar(100) NOT NULL,
  `staff_fname` varchar(255) NOT NULL,
  `staff_lname` varchar(255) NOT NULL,
  `staff_email` varchar(255) NOT NULL,
  `staff_phone` varchar(255) NOT NULL,
  `staff_address` varchar(255) NOT NULL,
  `staff_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `staff_username`, `staff_password`, `staff_fname`, `staff_lname`, `staff_email`, `staff_phone`, `staff_address`, `staff_role`) VALUES
(1, 'di210098', '12345', 'Muhammad Izzuddin', 'Bin Mohsin', 'di210098@student.uthm.edu.my', '+6016-714 6935', 'Taman Universiti, Parit Raja, Johor', 'Administrator'),
(3, 'amir', '12345', 'amir', 'imtiaz', 'amirimtiaz@gmail.com', '01126987787', 'KELANTAN ', 'pizza frozen maker'),
(4, 'Hasif', '12345', 'Awang', 'Hasif', 'hasif@gmail.com', '0194575895', 'Jalan 35, Parit Jelutong, Parit Raja', 'Paste Maker');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int(25) NOT NULL,
  `vendor_companyname` varchar(255) NOT NULL,
  `vendor_category` varchar(255) NOT NULL,
  `vendor_address` varchar(255) NOT NULL,
  `vendor_picname` varchar(255) NOT NULL,
  `vendor_picphone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `vendor_companyname`, `vendor_category`, `vendor_address`, `vendor_picname`, `vendor_picphone`) VALUES
(1, 'AZAD FOOD INDUSTRIES SDN BHD', 'Sauce', 'Lot Kilang KSB 1-1, 1-2 & 1-3, IKS, 86400 Parit Raja, Johor.', 'En.Kasim Bin Baharudin', '+6018-7878112'),
(3, 'Kedai Runcit Sorlinaz', 'Flour and Oil.', 'Jalan Pangsapuri Desa Siswa (Jalan Parit Sempadan Laut) 86400 Parit Raja, Johor Malaysia', 'En. Nazrul Amir bin Imtiaz Alif', '+6011-2478 9998'),
(4, 'Pasaraya Dian Pang Cash & Carry Sdn Bhd', 'salt and sugar', ' Jalan Parit Raja Darat, 86400 Parit Raja, Johor', 'En. Isham Faiz Bin Muhammad Hariz', '+6012-456 8897');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id_agent`);

--
-- Indexes for table `agent_order`
--
ALTER TABLE `agent_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `agent_or` (`id_agent`),
  ADD KEY `product_or` (`id_product`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id_attendance`),
  ADD KEY `staff` (`id_staff`);

--
-- Indexes for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD PRIMARY KEY (`id_leave`),
  ADD KEY `staffleave` (`id_staff`);

--
-- Indexes for table `kpi`
--
ALTER TABLE `kpi`
  ADD PRIMARY KEY (`id_kpi`),
  ADD KEY `staffkpi` (`id_staff`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `raw_material`
--
ALTER TABLE `raw_material`
  ADD PRIMARY KEY (`id_rawproduct`),
  ADD KEY `vendor` (`id_vendor`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`),
  ADD KEY `role` (`staff_role`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id_agent` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `agent_order`
--
ALTER TABLE `agent_order`
  MODIFY `id_order` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id_attendance` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `employee_leave`
--
    ALTER TABLE `employee_leave`
      MODIFY `id_leave` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kpi`
--
ALTER TABLE `kpi`
  MODIFY `id_kpi` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `raw_material`
--
ALTER TABLE `raw_material`
  MODIFY `id_rawproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id_vendor` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent_order`
--
ALTER TABLE `agent_order`
  ADD CONSTRAINT `agent_or` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id_agent`),
  ADD CONSTRAINT `product_or` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `staff` FOREIGN KEY (`id_staff`) REFERENCES `staff` (`id_staff`);

--
-- Constraints for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD CONSTRAINT `staffleave` FOREIGN KEY (`id_staff`) REFERENCES `staff` (`id_staff`);

--
-- Constraints for table `kpi`
--
ALTER TABLE `kpi`
  ADD CONSTRAINT `staffkpi` FOREIGN KEY (`id_staff`) REFERENCES `staff` (`id_staff`);

--
-- Constraints for table `raw_material`
--
ALTER TABLE `raw_material`
  ADD CONSTRAINT `vendor` FOREIGN KEY (`id_vendor`) REFERENCES `vendor` (`id_vendor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
