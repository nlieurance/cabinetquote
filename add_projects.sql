CREATE TABLE if not exists projects (id PRIMARY KEY INT NOT NULL AUTO_INCREMENT title CHAR(100) budget INT(6) sqft INT(6) timeframe INT(2) sample_image CHAR(100));

INSERT INTO projects (id,title,budget,sqft,timeframe,sample_image)
VALUES
(1,'Remodel my kitchen','4000','120','1','kitchen.jpg');