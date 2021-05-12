DROP DATABASE IF EXISTS THELPIS;
CREATE DATABASE THELPIS;
USE THELPIS;
CREATE TABLE user_login(
    UserID INT AUTO_INCREMENT,
    Email VARCHAR(70) UNIQUE,
    Full_Name VARCHAR(150),
    Pass VARCHAR(150),
    primary key(UserID)
);
CREATE TABLE data(
    id INT AUTO_INCREMENT,
    title VARCHAR (255),
    content LONGBLOB,
    primary key(id)
);
CREATE TABLE admin(
    AdminID INT AUTO_INCREMENT,
    Admin_Email VARCHAR(70) UNIQUE,
    AdminName VARCHAR(150),
    Pass VACRHAR(150),
    primary key(AdminID) 
);