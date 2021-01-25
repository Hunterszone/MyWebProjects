DROP TABLE IF EXISTS PARKING_LEVEL;
  
CREATE TABLE PARKING_LEVEL (
  id INT(10) NOT NULL,
  level_num INT(10) NOT NULL,
  num_of_free_places_for_cars INT(10) NOT NULL,
  num_of_occupied_places_for_cars INT(10) NOT NULL,
  num_of_free_places_for_buses INT(10) NOT NULL,
  num_of_occupied_places_for_buses INT(10) NOT NULL,
  num_of_free_places_for_motors INT(10) NOT NULL,
  num_of_occupied_places_for_motors INT(10) NOT NULL
);