CREATE DATABASE assignmentOne;

USE assignmentOne;


CREATE TABLE `registration` (
 `id` int(11) NOT NULL,
 `fname` varchar(30) NOT NULL,
 `lname` varchar(30),
 `address` varchar(100),
 `phone` varchar(30) NOT NULL,
 `email` varchar(100) NOT NULL
);