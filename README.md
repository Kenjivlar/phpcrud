To execute this project you need to use this database scheme

CREATE DATABASE CRUDP;
USE CRUDP;
CREATE TABLE users
(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
nameu VARCHAR(255) NOT NULL,
lnameu VARCHAR(255) NULL,
email VARCHAR(255) NOT NULL,
mobile INT NULL,
birth DATE NOT NULL,
registertime TIMESTAMP DEFAULT CURRENT_TIMESTAMP)ENGINE=InnoDB CHARSET=UTF8;


An example of the funcionality of this project
http://phpcrud1.42web.io/phpCrudO/index.php
