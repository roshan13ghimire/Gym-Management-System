CREATE TABLE register(
    email varchar(30),
    password varchar(20)

);




CREATE TABLE details(
    fname varchar(20),
    lname varchar(20),
    email varchar(30),
    height varchar(10),
    weight varchar(10),
    gender varchar(20)

);

CREATE TABLE trainerresister(
    id int NOT NULL AUTO_INCREMENT,
    fname varchar(20),
    lname varchar(20),
    email varchar(30),
    password varchar(10),
    number varchar(10),
    PRIMARY KEY (id)

);