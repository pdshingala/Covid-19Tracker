CREATE DATABASE 'covid19';

CREATE TABLE 'users' ( 'id' INT(255) NOT NULL AUTO_INCREMENT , 'email' VARCHAR(255) NOT NULL , 'password' VARCHAR(255) NOT NULL , 'location' VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE 'contact' ( 'id' INT(255) NOT NULL AUTO_INCREMENT , 'email' VARCHAR(255) NOT NULL , 'mobile' VARCHAR(15) NOT NULL , 'description' VARCHAR(255) NOT NULL , PRIMARY KEY (`id `)) ENGINE = InnoDB;