DROP TABLE IF EXISTS COUNTRY;
  
CREATE TABLE COUNTRY (
  idFromX INT (50) NOT NULL,
  idFromY INT (50) NOT NULL,
  idFromZ INT (50) NOT NULL,
  name VARCHAR (50) NOT NULL,
  abbreviation VARCHAR (5) NOT NULL,
  createdAt TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updatedAt TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY(idFromX, abbreviation)
);