---Create Database
CREATE DATABASE focus;

---- Use the created database
USE focus;

-- Create a table to store form submissions - contact us
CREATE TABLE contact_sub (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    mob_num INT(100) NOT NULL,
    concerns TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create a table to store form submissions - feedback
CREATE TABLE feedback(
    id INT AUTO_INCREMENT PRIMARY KEY,
    f_name VARCHAR(100) NOT NULL,
    l_name VARCHAR(100) NOT NULL,
    rate_con INT NOT NULL,
    enjoy TEXT NOT NULL,
    satisfaction TEXT NOT NULL,
    clarity TEXT NOT NULL,
    rate_all INT NOT NULL,
    add_com TEXT NOT NULL
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)