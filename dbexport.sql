USE tete_de_luxe;
DROP TABLE IF EXISTS commands;
DROP TABLE IF EXISTS products;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS ci_sessions;

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

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
);
