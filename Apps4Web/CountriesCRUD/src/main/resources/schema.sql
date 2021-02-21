DROP TABLE IF EXISTS COUNTRY;
  
CREATE TABLE COUNTRY (
  id VARCHAR (20) NOT NULL,
  name VARCHAR (10) NOT NULL,
  abbreviation VARCHAR (3) NOT NULL,
  createdAt TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updatedAt TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);