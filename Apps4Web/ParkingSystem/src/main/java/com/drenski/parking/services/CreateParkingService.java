package com.drenski.parking.services;

import java.util.HashMap;
import java.util.Map;

import org.apache.log4j.Logger;
import org.json.simple.parser.JSONParser;
import org.json.simple.parser.ParseException;
import org.springframework.stereotype.Service;

import com.drenski.parking.controllers.CreateParkingController;
import com.drenski.parking.handlers.ApiHandler;
import com.drenski.parking.models.ParkingLevel;

@Service
public class CreateParkingService implements ApiHandler {

	private static Logger log = Logger.getLogger(CreateParkingService.class.getName());

	@Override
	public String getAPIResponse() {

		property.setNumOfLevels(3);
		Map<String, Integer> vehiclesPerLevel = new HashMap<String, Integer>();

		for (int i = 0; i < property.getNumOfLevels(); i++) {
			property.setParkingLevel(new ParkingLevel());
			property.getParkingLevel().setNumOfFreeSlotsForCars(CreateParkingController.spotsForCars);
			property.getParkingLevel().setNumOfFreeSlotsForBuses(CreateParkingController.spotsForBuses);
			property.getParkingLevel().setNumOfFreeSlotsForMotors(CreateParkingController.spotsForMotors);
		}

		vehiclesPerLevel.put("cars", property.getParkingLevel().getNumOfFreeSlotsForCars());

		vehiclesPerLevel.put("buses", property.getParkingLevel().getNumOfFreeSlotsForBuses());

		vehiclesPerLevel.put("motors", property.getParkingLevel().getNumOfFreeSlotsForMotors());

		log.debug("getNumOfFreeSlotsForCars per level: "
				+ property.getParkingLevel().getNumOfFreeSlotsForCars());
		log.debug("getNumOfFreeSlotsForBuses per level: "
				+ property.getParkingLevel().getNumOfFreeSlotsForBuses());
		log.debug("getNumOfFreeSlotsForMotors per level: "
				+ property.getParkingLevel().getNumOfFreeSlotsForMotors());

		if (property.getParkingLevel().getNumOfEntrances() == 0) {
			property.getParkingLevel().setNumOfEntrances(CreateParkingController.numOfEntr);
			log.debug("getNumOfEntrances: " + property.getParkingLevel().getNumOfEntrances());
		}
		
		if (property.getParkingLevel().getNumOfExits() == 0) {
			property.getParkingLevel().setNumOfExits(CreateParkingController.numOfEx);
			log.debug("getNumOfExits: " + property.getParkingLevel().getNumOfExits());
		}

		return String.format(
				"Parking levels: %s, num of available spots per level - cars: %s, buses: %s, motors: %s, num of entrances: %s, num of exits: %s",
				CreateParkingController.parkLev, vehiclesPerLevel.get("cars"), vehiclesPerLevel.get("buses"),
				vehiclesPerLevel.get("motors"), property.getParkingLevel().getNumOfEntrances(), property.getParkingLevel().getNumOfExits());
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

//		DbConnWithH2.initDbConn();

		return jsonRespBlock;
	}

}
