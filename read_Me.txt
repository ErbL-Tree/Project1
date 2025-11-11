Note: Input the sql code below, inside phpmyadmin (xampp database). It will create Database,
      Table and columns that are needed to run. There is no index, and homepage.php is the 
      main page to start. The inventory system has CRUD functionality to store data and
      handle information.

username: sample
password: sample2
****************************************************************************************




CREATE DATABASE sampleone;

USE sampleone;

CREATE TABLE store (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    ITEM VARCHAR(225) NOT NULL,
    PRICE_IN_PESO INT(225) NOT NULL,
    SERIAL_NUMBER INT(225) NOT NULL,
    DESCRIPTION VARCHAR(225) NOT NULL,
    ITEM_TIME TIMESTAMP,
    STOCK_QUANTITY INT(225) NOT NULL);
    
CREATE TABLE try (
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NAME VARCHAR(225) NOT NULL,
    PASW VARCHAR(225),
    AGE INT(30) );
    
INSERT INTO try (ID, NAME, PASW, AGE) VALUES (NULL, 'sample','sample2',2)