DROP TABLE IF EXISTS PARKING_LEVEL;
  
CREATE TABLE PARKING_LEVEL (
  id INT(10) NOT NULL,
  numOfEntrances INT(10) NOT NULL,
  numOfExits INT(10) NOT NULL,
  numOfFreeSlotsForCars INT(10) NOT NULL,
  numOfOccupiedSlotsForCars INT(10) NOT NULL,
  numOfFreeSlotsForBuses INT(10) NOT NULL,
  numOfOccupiedSlotsForBuses INT(10) NOT NULL,
  numOfFreeSlotsForMotors INT(10) NOT NULL,
  numOfOccupiedSlotsForMotors INT(10) NOT NULL
);

DROP TABLE IF EXISTS PARKING;
  
CREATE TABLE PARKING (
  id INT(10) NOT NULL,
  numOfLevels INT(10) NOT NULL
);