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