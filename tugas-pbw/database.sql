create database crud;

use crud;

CREATE TABLE `pengguna`
(
`id` int(11) NOT NULL auto_increment,
`nama` varchar(100),
`email` varchar(100),
`phone` varchar(100),
`message` varchar(250),
PRIMARY KEY (`id`)
);