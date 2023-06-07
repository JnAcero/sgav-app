-- Active: 1686158672041@@127.0.0.1@3306@sgavapp
CREATE TABLE persons(
    id_person VARCHAR(20) NOT NULL PRIMARY KEY,
    firstname_person VARCHAR(50) NOT NULL
);
CREATE TABLE countries(
    id_country INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name_country VARCHAR(50) NOT NULL
);
CREATE TABLE cities(
    id_city INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name_city VARCHAR(50) NOT NULL,
    id_region INT,
    FOREIGN KEY (id_region) REFERENCES regions(id_region)
);
CREATE TABLE regions(
    id_region INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name_region VARCHAR(50) NOT NULL UNIQUE,
    id_country INT,
    FOREIGN KEY (id_country) REFERENCES countries(id_country)
);
CREATE TABLE housetype(
    id_housetype INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name_housetype VARCHAR(50) NOT NULL
);
CREATE TABLE living_place(
    id_living INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_person VARCHAR(20),
    FOREIGN KEY (id_person) REFERENCES persons(id_person),
    id_city INT,
    FOREIGN KEY (id_city) REFERENCES cities(id_city),
    rooms INT NOT NULL,
    bathrooms_living INT NOT NULL,
    kitchen_living INT NOT NULL,
    tvroom_living INT NOT NULL,
    patio_living INT NOT NULL,
    pool_living INT NOT NULL,
    barbecue INT NOT NULL,
    image_living VARCHAR(60) NOT NULL,
    id_typehouse INT,
    FOREIGN KEY (id_typehouse) REFERENCES housetype(id_housetype)
);