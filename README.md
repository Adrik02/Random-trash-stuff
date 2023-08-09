# Random-trash-stuff
Random trash stuff


create database "food" then copy this:

DROP TABLE IF EXISTS `food`.`food`; CREATE TABLE `food`.`food` ( `id` int(8) NOT NULL, `name` varchar(15) NOT NULL, `type` varchar(15) NOT NULL, `price` decimal(15,2) NOT NULL, `size` int(15) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci; ALTER TABLE `food`.`food` ADD PRIMARY KEY (`id`); ALTER TABLE `food`.`food` MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0 ;

add some values:

INSERT INTO food.food (name, type, price, size) VALUES ('Pizza','Ananas','5.50','300'),('Pizza','Salama','6.50','320'),('Pizza','Kebab','5.30','320'),('Pizza','Chesse','5.10','350'),('Pizza','Classic','5.70','370'),('Pizza','Chilly','3.50','200'),('Pizza','Chocolate','6.50','335'),('Pizza','Sweet','8.50','500'),('Pizza','Tomato','4.50','270'),('Pizza','Meal','5.10','350'),('Pizza','Middle','5.90','340');


