CREATE DATABASE Arx;
USE Arx;

CREATE TABLE Users (
    User_Nickname VARCHAR(45) NOT NULL PRIMARY KEY,
    User_Email VARCHAR(100) NOT NULL UNIQUE,
    User_Password VARCHAR(255) NOT NULL,
    Birthday_Date DATE,
    User_Name VARCHAR(45),
    User_Tel VARCHAR(45) UNIQUE,
    User_Img MEDIUMBLOB
);