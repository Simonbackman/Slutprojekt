CREATE DATABASE food;

use food;

CREATE TABlE dishes (id int(8)PRIMARY KEY AUTO_INCREMENT, name varchar(32), price int(8), laktos int(8), gluten int(8), notter int(8),spicy int(8),img varchar(32));



INSERT INTO dishes (id, name, price, laktos, gluten, notter, spicy, img)
Values  (1,'Karaage',50,1,0,0,2,'karaage.jpg'),
        (2,'Noodles',45,0,1,0,1,'noodles.jpg'),
        (3,'Pad thai cuisine',49,1,1,0,3,'pad_thai_cuisine.jpg'),
        (4,'Pad thai curry',49,1,1,1,2,'pad_thai_curry.jpg'),
        (5,'Niyom',59,0,1,1,3,'niyom.jpg'),
        (6,'Fried ice',70,1,0,0,1,'fried_rice.jpg');
        
        
        
        
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
CREATE DATABASE reservation;

use reservation;

CREATE TABLE bord (id int(8) PRIMARY KEY AUTO_INCREMENT, bordsnummer int(8), );