SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
  SET sql_mode = '';
   /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



 DROP TABLE IF EXISTS `Address`;
CREATE TABLE `Address` (
  `address_id` int NOT NULL, 
  `user_id` int NOT NULL, 
  `state` varchar(255) NOT NULL, 
  `city` varchar(255) NOT NULL, 
  `street` varchar(255) NOT NULL, 
  `pincode` int NOT NULL 
  );
INSERT INTO `Address` (`address_id`, `user_id`, `state`, `city`, `street`, `pincode`) 
VALUES 
  (3001, 24001, 'Karnataka', 'Bengaluru', 'Ullal Upanagar', 560056), (3002, 24002, 'Karnataka', 'Bengaluru', 'Channasandra', 560098);



CREATE TABLE `Users` (
  `user_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL
);
INSERT INTO `Users` (`user_id`, `name`, `email`, `password`, `phone`) VALUES
(24001, 'Vivek', 'vivek@example.com', 'password', '1234567890'),
(24002, 'Vinay', 'vinay@example.com', 'wordpass', '0987654321');



DROP TABLE IF EXISTS `Drivers`;
CREATE TABLE `Drivers` (
  `driver_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
);
INSERT INTO `Drivers` (`driver_id`, `name`, `phone`, `location`, `email`) 
VALUES 
  (4001, 'Juan Pérez', '+52 55 1234 5678', '12.902188,77.518563', 'juanperez@eatingmty.com'),
  (4002, 'María García', '+52 33 2345 6789', '12.952637764399224, 77.54095503218228', 'mariagarcia@eatingmty.com'),
  (4003, 'Carlos Rodríguez', '+52 22 3456 7890', '12.907147890376503, 77.49914068847922', 'carlosrodriguez@eatingmty.com'),
  (4004, 'Ana López', '+52 55 4567 8901', '12.92589700476944, 77.49929910528323', 'analopez@eatingmty.com'),
  (4005, 'José Martínez', '+52 81 5678 9012', '12.963707650003279, 77.50593864138135', 'josemartinez@eatingmty.com'),
  (4006, 'Luis Hernández', '+52 33 6789 0123', '12.935856420607399, 77.53524982213646', 'luishernandez@eatingmty.com'),
  (4007, 'Patricia González', '+52 55 7890 1234', '12.936347878059921, 77.53865086292218', 'patriciagonzalez@eatingmty.com'),
  (4008, 'David Sánchez', '+52 22 8901 2345', '12.934413412244293, 77.53220283270251', 'davidsanchez@eatingmty.com'),
  (4009, 'Laura Pérez', '+52 81 9012 3456', '12.935950529521122, 77.53521763541792', 'lauraperez@eatingmty.com'),
  (4010, 'Pedro Ramírez', '+52 33 0123 4567', '12.940718669920193, 77.52657019377584', 'pedroramirez@eatingmty.com');



DROP TABLE IF EXISTS `Menu`;
CREATE TABLE `Menu` (
  `menu_id` int NOT NULL,
  `restaurant_id` int NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(255) NOT NULL
);
INSERT INTO `Menu` (`menu_id`, `restaurant_id`, `item_name`, `price`, `img`) 
VALUES 
  (1, 101, 'Margherita Pizza', 85.00, './img/menu/1.jpg'),
  (2, 101, 'Neapolitan pizza', 145.00, './img/menu/2.jpg'),
  (3, 101, 'Veggie pizza', 190.00, './img/menu/3.jpg'),
  (4, 101, 'Pepperoni', 145.00, './img/menu/4.jpg'),
  (5, 101, 'Supreme Pizza', 190.00, './img/menu/5.jpg'),
  (6, 101, 'Sicilian pizza', 135.00, './img/menu/6.jpg'),
  (7, 101, 'Corn Pizza', 155.00, './img/menu/7.jpg'),
  (8, 101, 'Indi Tandoori Paneer', 145.00, './img/menu/8.jpg'),
  (9, 101, 'Moroccan Spice Pasta Pizza', 190.00, './img/menu/9.jpg'),
  (10, 101, 'Achari Do Pyaza', 230.00, './img/menu/10.jpg'),
  (11, 102, 'Vegetable fried rice', 260.00, './img/menu/11.jpg'),
  (12, 102, 'Panner butter masala', 290.00, './img/menu/12.jpg'),
  (13, 102, 'Panner biriyani', 290.00, './img/menu/13.jpg'),
  (14, 102, 'Dal kichadi', 225.00, './img/menu/14.jpg'),
  (15, 102, 'Kadai vegetables', 255.00, './img/menu/15.jpg'),
  (16, 102, 'Roti with veg curry', 85.00, './img/menu/16.jpg'),
  (17, 102, 'Egg dosa with gravy', 190.00, './img/menu/17.jpg'),
  (18, 102, 'Mushroom masala rice', 285.00, './img/menu/18.jpg'),
  (19, 102, 'Palak panner', 290.00, './img/menu/19.jpg'),
  (20, 102, 'Chicken Guntur dry', 325.00, './img/menu/20.jpg'),
  (21, 103, 'North Meals', 95.00, './img/menu/21.jpg'),
  (22, 103, 'Tomato Soup', 50.00, './img/menu/22.jpg'),
  (23, 103, 'Gobi Manchurian', 85.00, './img/menu/23.jpg'),
  (24, 103, 'Baby Corn Manchurian', 95.00, './img/menu/24.jpg'),
  (25, 103, 'Paneer Butter Masala', 165.00, './img/menu/25.jpg'),
  (26, 103, 'Paneer Chilli', 125.00, './img/menu/26.jpg'),
  (27, 103, 'Palak Paneer', 125.00, './img/menu/27.jpg'),
  (28, 103, 'Kesari Bath', 40.00, './img/menu/28.jpg'),
  (29, 103, 'Paneer Fried Rice', 90.00, './img/menu/29.jpg'),
  (30, 103, 'Set Dosa', 65.00, './img/menu/30.jpg'),
  (31, 104, 'Stuffed Chicken Pizza', 215.00, './img/menu/31.jpg'),
  (32, 104, 'Roasted Chicken & Corn', 255.00, './img/menu/32.jpg'),
  (33, 104, 'Peppy Paneer Tikka', 156.00, './img/menu/33.jpg'),
  (34, 104, 'Paneer Tikka', 150.00, './img/menu/34.jpg'),
  (35, 104, 'Brownie with Hot Chocolate', 125.00, './img/menu/35.jpg'),
  (36, 104, 'Brownie Blast Jar', 95.00, './img/menu/36.jpg'),
  (37, 104, 'Chicken Tikka Skewer', 200.00, './img/menu/37.jpg'),
  (38, 104, 'Grilled Chicken Burger', 215.00, './img/menu/38.jpg'),
  (39, 105, 'Masala dosa', 60.00, './img/menu/39.jpg'),
  (40, 105, 'Sagu masala dosa', 65.00, './img/menu/40.jpg'),
  (41, 105, 'Uddina vada', 30.00, './img/menu/41.jpg'),
  (42, 105, 'Masala Vada', 30.00, './img/menu/42.jpg'),
  (43, 105, 'Idli', 35.00, './img/menu/43.jpg'),
  (44, 105, 'Khara Bath', 30.00, './img/menu/44.jpg'),
  (45, 105, 'Kesari Bath ', 30.00, './img/menu/45.jpg'),
  (46, 105, 'Poori Saagu', 45.00, './img/menu/46.jpg'),
  (47, 106, 'Dry fruit with softy', 65.00, './img/menu/47.jpg'),
  (48, 106, 'Eggless cake fudge ', 65.00, './img/menu/48.jpg'),
  (49, 106, 'Hot chocolate fudge', 80.00, './img/menu/49.jpg'),
  (50, 106, 'Gudbud', 70.00, './img/menu/50.jpg'),
  (51, 106, 'Special falloda ', 75.00, './img/menu/51.jpg'),
  (52, 106, 'Nut sundae', 85.00, './img/menu/52.jpg'),
  (53, 106, 'Chocolate sundae', 80.00, './img/menu/53.jpg'),
  (54, 106, 'honey nut crunch', 85.00, './img/menu/54.jpg'),
  (55, 107, 'Allo dum biriyani ', 165.00, './img/menu/55.jpg'),
  (56, 107, 'Mushroom biriyani', 180.00, './img/menu/56.jpg'),
  (57, 107, 'Chilly fish', 180.00, './img/menu/57.jpg'),
  (58, 107, 'Chilly chicken', 180.00, './img/menu/58.jpg'),
  (59, 107, 'Veg kadai', 125.00, './img/menu/59.jpg'),
  (60, 107, 'Egg fried rice', 125.00, './img/menu/60.jpg'),
  (61, 107, 'Meghana special biryani', 160.00, './img/menu/61.jpg'),
  (62, 107, 'Chicken lollypop', 150.00, './img/menu/62.jpg'),
  (63, 108, 'Ghee plain dosa', 90.00, './img/menu/63.jpg'),
  (64, 108, 'Ghee pudi masala dosa', 120.00, './img/menu/64.jpg'),
  (65, 108, 'Garlic roast dosa', 120.00, './img/menu/65.jpg'),
  (66, 108, 'Sakkarai Pongal ', 80.00, './img/menu/66.jpg'),
  (67, 108, 'Ghee pudi khara bhath', 75.00, './img/menu/67.jpg'),
  (68, 108, 'Poori saagu', 75.00, './img/menu/68.jpg'),
  (69, 108, 'Gulab jamun', 35.00, './img/menu/69.jpg'),
  (70, 108, 'Puliyogare', 110.00, './img/menu/70.jpg');



CREATE TABLE `Orders` (
  `order_id` int NOT NULL,
  `user_id` int NOT NULL,
  `order_total` decimal(10,2) NOT NULL,
  `delivery_status` varchar(20) NOT NULL,
  `driver_id` int NOT NULL,
  `menu_id` int NOT NULL
);
INSERT INTO `Orders` (`order_id`, `user_id`, `order_total`, `delivery_status`, `driver_id`, `menu_id`) VALUES
(1, 24001, '21.00', 'cooking', 4001, 27),
(2, 24001, '32.00', 'pending', 4002, 10),
(3, 24001, '43.00', 'delivered', 4003, 59);



DROP TABLE IF EXISTS `Payment`;
CREATE TABLE `Payment` (
  `payment_id` INT NOT NULL,
  `order_id` INT NOT NULL,
  `payment_method` VARCHAR(20) NOT NULL,
  `amount` DECIMAL(10,2) NOT NULL,
  `status` VARCHAR(20) NOT NULL
);
INSERT INTO `Payment` (`payment_id`, `order_id`, `payment_method`, `amount`, `status`) 
VALUES 
  (2024001, 3, 'CREDIT CARD', '43.00', 'Success'),
  (2024002, 2, 'DEBIT CARD', '21.00', 'Success');



CREATE TABLE `Rating` (
  `rating_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `restaurant_id` INT NOT NULL,
  `rating` INT NOT NULL
);



DROP TABLE IF EXISTS `Restaurants`;
CREATE TABLE `Restaurants` (
  `restaurant_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `desp` varchar(300) NOT NULL,
  `img` varchar(255) NOT NULL
);
INSERT INTO `Restaurants` (`restaurant_id`, `name`, `address`, `phone`, `desp`, `img`) VALUES
(101, 'Señor Bigotes', 'Libertad 200 ote Esquina con Morelos, San Pedro Garza García, N.L.', '81 2317 5015', 'Famoso por su pizzas caseras y variedad. Prueba tu pizza ideal', './img/res/101.jpg'),
(102, 'La Casa de los Tacos', 'Calle Guerrero 123, Monterrey, N.L.', '81 2345 6789', 'Tacos al vapor y al pastor, acompañados de salsas caseras. Un lugar tradicional en Monterrey', './img/res/102.jpg'),
(103, 'Sushi & Roll', 'Calle Zaragoza 123, Monterrey, N.L.', '81 8901 2345', 'La mejor comida japonesa en Monterrey. Sushi fresco y platos japoneses tradicionales', './img/res/103.jpg'),
(104, 'El Puerto', 'Calle Río Mississippi 234, Monterrey, N.L.', '81 4567 8901', 'Deliciosos buffets de tu gustos con la mejor atención. Todo el sabor de la mano en Monterrey', './img/res/104.jpg'),
(105, 'La Margarita', 'Calle Valle de San Ángel, Monterrey, N.L.', '81 5678 9012', 'Tacos, parrilladas y todo lo mejor de la cocina mexicana. Ideal para reuniones familiares', './img/res/105.jpg'),
(106, 'Cool Joint', 'Calle Delicias 789, Monterrey, N.L.', '81 6789 0123', 'Pastelería y helados artesanales. Deléitate con postres únicos, helados de sabores exóticos y más.', './img/res/106.jpg'),
(107, 'El Lingote', 'Calle Constitución 456, Monterrey, N.L.', '81 7890 1234', 'Carnes asadas, cortes de alta calidad y una amplia variedad de guarniciones', './img/res/107.jpg'),
(108, 'Punto Norte', 'Av. Pedro Infante, Monterrey, N.L.', '81 3456 7890', 'Pizzas gourmet con ingredientes frescos y únicos. ¡Una explosión de sabor!','./img/res/108.jpg');



 ALTER TABLE `Address` ADD PRIMARY KEY (`address_id`), ADD KEY `user_id` (`user_id`);
 ALTER TABLE `Drivers` ADD PRIMARY KEY (`driver_id`);
 ALTER TABLE `Menu` ADD PRIMARY KEY (`menu_id`), ADD KEY `restaurant_id` (`restaurant_id`);
 ALTER TABLE `Orders` ADD PRIMARY KEY (`order_id`), ADD KEY `driver_id` (`driver_id`), ADD KEY `user_id` (`user_id`), ADD KEY `menu_id` (`menu_id`);
 ALTER TABLE `Payment` ADD PRIMARY KEY (`payment_id`), ADD KEY `order_id` (`order_id`);
 ALTER TABLE `Rating` ADD PRIMARY KEY (`rating_id`), ADD KEY `user_id` (`user_id`), ADD KEY `restaurant_id` (`restaurant_id`);
 ALTER TABLE `Restaurants` ADD PRIMARY KEY (`restaurant_id`);
 ALTER TABLE `Users` ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `phone` (`phone`);
 ALTER TABLE `Address` MODIFY `address_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3031;
 ALTER TABLE `Drivers` MODIFY `driver_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4011;
 ALTER TABLE `Menu` MODIFY `menu_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
 ALTER TABLE `Orders` MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
 ALTER TABLE `Payment` MODIFY `payment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2024052;
 ALTER TABLE `Rating` MODIFY `rating_id` int NOT NULL AUTO_INCREMENT;
 ALTER TABLE `Restaurants` MODIFY `restaurant_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
 ALTER TABLE `Users` MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24156;
 ALTER TABLE `Address` ADD CONSTRAINT `Address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`);
 ALTER TABLE `Menu` ADD CONSTRAINT `Menu_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `Restaurants` (`restaurant_id`);
 ALTER TABLE `Orders` ADD CONSTRAINT `Orders_ibfk_3` FOREIGN KEY (`driver_id`) REFERENCES `Drivers` (`driver_id`), ADD CONSTRAINT `Orders_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`), ADD CONSTRAINT `Orders_ibfk_5` FOREIGN KEY (`menu_id`) REFERENCES `Menu` (`menu_id`);
 ALTER TABLE `Payment` ADD CONSTRAINT `Payment_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `Orders` (`order_id`);
 ALTER TABLE `Rating` ADD CONSTRAINT `Rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`), ADD CONSTRAINT `Rating_ibfk_2` FOREIGN KEY (`restaurant_id`) REFERENCES `Restaurants` (`restaurant_id`);
COMMIT;
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;