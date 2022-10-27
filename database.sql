create database cars_db;

use cars_db;

CREATE TABLE `cars`(
    `id` int(11) NOT NULL auto_increment,
    `model` varchar(50),
    `type` varchar(20),
    `cubication` varchar(5),
    `origin` varchar(25),
    `price` varchar(25),
    PRIMARY KEY (`id`)
);