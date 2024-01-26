-- Create database
CREATE DATABASE `album`;

-- Declare it as the default database
USE album;

-- Create a table inside with columns to store data
CREATE TABLE photos(
	Id INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(500),
    Image VARCHAR(500),
    Description TEXT
);

-- Just changes table name :p
ALTER TABLE photos RENAME projects;


-- Insert data fields
INSERT INTO `album`.`projects` (`Name`, `Image`, `Description`) VALUES ('Task Manager', '$image', 'Simple task manager that allows users to add, edit, and delete tasks developed in Python')";

INSERT INTO `album`.`projects` (`Name`, `Image`, `Description`) VALUES ('Simple Game', '$image', 'Classic Tic-Tac-Toe game developed in Java')"; 

INSERT INTO `album`.`projects` (`Name`, `Image`, `Description`) VALUES ('Blog Platform', '$image', 'Basic blogging platform where users can create, edit, and delete posts developed in JavaScript')"; 

INSERT INTO `album`.`projects` (`Name`, `Image`, `Description`) VALUES ('Personal Portfolio Website', '$image', 'SPersonal website to showcase my projects, skills, and resume developed in PHP')"; 
