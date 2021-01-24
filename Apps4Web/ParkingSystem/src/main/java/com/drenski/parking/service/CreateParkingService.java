package com.drenski.parking.service;

import java.sql.SQLException;
import java.util.HashMap;
import java.util.Map;

import org.apache.log4j.Logger;
import org.json.simple.parser.JSONParser;
import org.json.simple.parser.ParseException;
import org.springframework.stereotype.Service;

import com.drenski.parking.controller.CreateParkingController;
import com.drenski.parking.dbconn.DbConnWithH2;
import com.drenski.parking.handler.ApiHandler;
import com.drenski.parking.model.ParkingLevel;
import com.drenski.parking.model.ParkingProperties;

@Service
public class CreateParkingService implements ApiHandler {

	private static Logger log = Logger.getLogger(JsonParserService.class.getName());

	@Override
	public String getAPIResponse() {

		ParkingProperties property = new ParkingProperties();
		ParkingLevel[] levels = new ParkingLevel[CreateParkingController.parkLev];
		Map<String, Integer> vehiclesPerLevel = new HashMap<String, Integer>(); 
		
		for(int i = 0; i < CreateParkingController.parkLev; i++) {
			
			levels[i] = new ParkingLevel();
			property.setParkingLevel(levels[i]);
			
			if (property.getParkingLevel().getNum_of_free_places_for_cars() == 0) {
				property.getParkingLevel().setNum_of_free_places_for_cars(CreateParkingController.spotsForCars);
				vehiclesPerLevel.put("cars", property.getParkingLevel().getNum_of_free_places_for_cars());
				log.debug("getNum_of_free_places_for_cars_per_level: " + property.getParkingLevel().getNum_of_free_places_for_cars());
			}

			if (property.getParkingLevel().getNum_of_free_places_for_buses() == 0) {
				property.getParkingLevel().setNum_of_free_places_for_buses(CreateParkingController.spotsForBuses);
				vehiclesPerLevel.put("buses", property.getParkingLevel().getNum_of_free_places_for_buses());
				log.debug("getNum_of_free_places_for_buses_per_level: " + property.getParkingLevel().getNum_of_free_places_for_buses());
			}

			if (property.getParkingLevel().getNum_of_free_places_for_motors() == 0) {
				property.getParkingLevel().setNum_of_free_places_for_motors(CreateParkingController.spotsForMotors);
				vehiclesPerLevel.put("motors", property.getParkingLevel().getNum_of_free_places_for_motors());
				log.debug("getNum_of_free_places_for_motors_per_level: " + property.getParkingLevel().getNum_of_free_places_for_motors());
			}
		}

		if (property.getNum_of_entrances() == 0) {
			property.setNum_of_entrances(CreateParkingController.numOfEntr);
			log.debug("getNum_of_entrances: " + property.getNum_of_entrances());
		}
		if (property.getNum_of_exits() == 0) {
			property.setNum_of_exits(CreateParkingController.numOfEx);
			log.debug("getNum_of_exits: " + property.getNum_of_exits());
		}

		return String.format("Parking levels: %s, num of available spots per level - cars: %s, buses: %s, motors: %s, num of entrances: %s, num of exits: %s",
				CreateParkingController.parkLev, 
				vehiclesPerLevel.get("cars"), 
				vehiclesPerLevel.get("buses"),
				vehiclesPerLevel.get("motors"),
				property.getNum_of_entrances(),
				property.getNum_of_exits());
	}

	@Override
	public String extractData() {
		JSONParser parser = new JSONParser();
		Object json = null;
		String jsonRespBlock = "";
		try {
			jsonRespBlock = getAPIResponse().toString();
			json = parser.parse(jsonRespBlock);
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

		try {
			DbConnWithH2.initDbConn();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

		return jsonRespBlock;
	}

}
