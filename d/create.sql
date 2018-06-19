DROP DATABASE IF EXISTS imagedb;
CREATE DATABASE imagedb;
USE imagedb;

CREATE TABLE `images` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `uploaded_on` datetime NOT NULL,
 `Device_id` int(4),
 `Time` VARCHAR(10),
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `customer` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `photo` VARCHAR(20) NOT NULL,
    PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;