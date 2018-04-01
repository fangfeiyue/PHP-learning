CREATE TABLE IF NOT EXISTS user(
    id INT,
    userName VARCHAR(20),
    password CHAR(32),
    email VARCHAR(50),
    age TINYINT,
    card CHAR(18),
    tel CHAR(11),
    salary FLOAT(8, 2),
    marray TINYINT(1),
    address VARCHAR(100),
    sex ENUM('男','女','保密')
)ENGINE=INNODB CHARSET=UTF8;