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