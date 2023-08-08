# Random-trash-stuff
Random trash stuff


create database "food" then copy this:

DROP TABLE IF EXISTS `food`.`food`; CREATE TABLE `food`.`food` ( `id` int(8) NOT NULL, `name` varchar(15) NOT NULL, `type` varchar(15) NOT NULL, `price` varchar(15) NOT NULL, `size` varchar(15) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci; ALTER TABLE `mysql`.`food` ADD PRIMARY KEY (`id`); ALTER TABLE `mysql`.`food` MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8 ; SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO'; INSERT INTO `mysql`.`food`(`id`, `name`, `type`, `price`, `size`) SELECT `id`, `name`, `type`, `price`, `size` FROM `food`.`food`;
