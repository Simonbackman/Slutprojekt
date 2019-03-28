CREATE DATABASE food;

use food;

CREATE TABlE dishes (id int(8)PRIMARY KEY AUTO_INCREMENT, name varchar(32), price int(8), laktos int(8), gluten int(8), notter int(8),spicy int(8),img varchar(32));



INSERT INTO dishes (id, name, price, laktos, gluten, notter, spicy, img)
Values  (1,'karaage',50,1,0,0,2,'karaage.jpg'),
        (2,'noodle',45,0,1,0,1,'noodlejpg'),
        (3,'pad_thai_cuisine',49,1,1,0,0,'pad_thai_cuisine.jpg'),
        (4,'pad_thai_curry',49,1,1,1,2,'pad_thai_curry.jpg'),
        (5,'niyom',59,0,0,1,3,'niyom.png'),
        (6,'fried_rice',70,1,0,0,1,'fried_rice.png');