// Created by Christopher Logel
// Date: 1/3/2014
// 
// I believe that all of my code should be either self-explanatory or
// commented to the point of self-explanation.  That being said, I'm
// unsure if my MySQL database dump gives you sufficient information
// on which commands I executed to populate the table with data.
//
// As such, below you can find the MySQL commands that I executed
// to populate the database.
//
// Questions?  
// christopher.logel@gmail.com
// 952.334.4087
//
// Thank you for your time!

CREATE TABLE addresses (
	fname VARCHAR(40),
	lname VARCHAR(40),
	street VARCHAR(40),
	city VARCHAR(20),
	state VARCHAR(40),
	zipcode VARCHAR(10),
	note VARCHAR(200),
	id INT(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(id)
	);
	
LOAD DATA LOCAL INFILE 'G:/apache2/htdocs/lamp/addresses.csv' INTO TABLE addresses fields TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'

UPDATE addresses SET state='MA' WHERE id='8'