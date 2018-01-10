USE tete_de_luxe;
DROP TABLE IF EXISTS commands;
DROP TABLE IF EXISTS products;
DROP TABLE IF EXISTS users;

CREATE TABLE products
(
 id       INT NOT NULL PRIMARY KEY,
 category VARCHAR(50) NOT NULL ,
 name     VARCHAR(200) NOT NULL ,
 price    VARCHAR(50) NOT NULL
);

CREATE TABLE users
(
 id          INT NOT NULL PRIMARY KEY,
 email       VARCHAR(50) NOT NULL ,
 password    VARCHAR(1000) NOT NULL ,
 phoneNumber VARCHAR(20) NOT NULL 
);

CREATE TABLE commands
(
 id         INT NOT NULL PRIMARY KEY,
 product_id INT NOT NULL ,
 user_id    INT NOT NULL ,
 date       DATETIME NOT NULL ,
 FOREIGN KEY (product_id)
  REFERENCES products(id),
 FOREIGN KEY (user_id)
  REFERENCES users(id)
);
