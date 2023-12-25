CREATE DATABASE lawwhiz;
USE lawwhiz;
CREATE TABLE CLIENT_T (
    c_id INT NOT NULL AUTO_INCREMENT ,
    name VARCHAR(30),
    email VARCHAR (30),
    phone_num INT(11),
    password VARCHAR (30),
    
    CONSTRAINT Clinet_PK PRIMARY KEY(c_id)
    );
 CREATE TABLE TOPIC_T(
     t_id INT NOT NULL AUTO_INCREMENT,
     t_name VARCHAR (30),
     CONSTRAINT Topic_PK PRIMARY KEY(t_id)
     );
 CREATE TABLE LAWYER_T(
     id INT NOT NULL AUTO_INCREMENT,
     phone_num INT (11) NOT NULL,
     p_cout VARCHAR (30) ,
     license_no VARCHAR (40) NOT NULL,
     email VARCHAR (40) NOT NULL,
     password VARCHAR(30)  NOT NULL,
     address VARCHAR (30) NOT NULL,
     experience TEXT ,
     p_city VARCHAR (30),
     specification VARCHAR (30),
     
     CONSTRAINT Lawyer_PK PRIMARY KEY (id)
    );
    
     
     
    
 CREATE TABLE ADVICE_T(
     id INT NOT NULL AUTO_INCREMENT,
     client_id INT,
     lawyer_id INT ,
     topic_id INT,
     description TEXT,
     reply TEXT,
     
     CONSTRAINT Advice_PK PRIMARY KEY( id),
     CONSTRAINT Advice_FK1 FOREIGN KEY(client_id) REFERENCES CLIENT_T(c_id),
     CONSTRAINT Advice_FK2 FOREIGN KEY( lawyer_id) REFERENCES LAWYER_T (id),
     CONSTRAINT Advice_FK3 FOREIGN KEY (topic_id) REFERENCES TOPIC_T(t_id)
     );
  CREATE TABLE LAW_T(
      law_id INT NOT NULL AUTO_INCREMENT,
      description VARCHAR( 30) NOT NULL,
      client_id INT ,
      
      CONSTRAINT Law_PK PRIMARY KEY (law_id),
      CONSTRAINT Law_FK1 FOREIGN KEY (client_id) REFERENCES CLIENT_T(c_id)
      );
    