
-- CREATE DATABASE ckc_kristians_mikelsons;
-- USE ckc_kristians_mikelsons;



CREATE TABLE pienakumi (

	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	date DATE NOT NULL,
	name VARCHAR(255) NOT NULL,
	place VARCHAR(255) NOT NULL

)



INSERT INTO pienakumi 
(date, name, place)
VALUES
('2024-03-31 13:00:00', 'Lieldienas Cēsīs', 'Rožu laukums'),
('2024-04-04 18:00:00', 'Leļļu teātra izrāde "Gangsteromīte"', 'Koncertzāle "Cēsis"'),
('2024-07-19 08:00:00', 'Cēsu pilsētas svētki 818', 'Cēsis');

