package com.drenski.parking.service;

import java.sql.SQLException;

import org.apache.log4j.Logger;
import org.json.simple.parser.JSONParser;
import org.json.simple.parser.ParseException;
import org.springframework.stereotype.Service;

import com.drenski.parking.controller.CreateParkingController;
import com.drenski.parking.controller.EnterParkingController;
import com.drenski.parking.dbconn.DbConnWithH2;
import com.drenski.parking.handler.ApiHandler;
import com.drenski.parking.model.ParkingLevel;
import com.drenski.parking.model.ParkingProperties;
import com.drenski.parking.model.Vehicle;

@Service
public class EnterParkingService implements ApiHandler {

	private static Logger log = Logger.getLogger(JsonParserService.class.getName());

	@Override
	public String getAPIResponse() {

		ParkingProperties property = new ParkingProperties();
		ParkingLevel[] levels = new ParkingLevel[CreateParkingController.parkLev];
		Vehicle vehicle = new Vehicle();

		for (int i = 0; i < CreateParkingController.parkLev; i++) {

			levels[i] = new ParkingLevel();
			property.setParkingLevel(levels[i]);

			if (vehicle.getVehicleType() == null || vehicle.getVehicleType().isEmpty()) {
				vehicle.setVehicleType(EnterParkingController.vehType);
				log.debug("getVehicleType: " + vehicle.getVehicleType());
				if (vehicle.getVehicleType().equalsIgnoreCase("car")) {
					property.getParkingLevel().setNum_of_occupied_places_for_cars(1);
					CreateParkingController.spotsForCars -= property.getParkingLevel()
							.getNum_of_occupied_places_for_cars();
//					EnterParkingController.entId += 1;
					if (CreateParkingController.spotsForCars == 0) {
						return "No available spots for cars!";
					}
				}
				if (vehicle.getVehicleType().equalsIgnoreCase("bus")) {
					property.getParkingLevel().setNum_of_occupied_places_for_buses(1);
					CreateParkingController.spotsForBuses -= property.getParkingLevel()
							.getNum_of_occupied_places_for_buses();
//					EnterParkingController.entId += 1;
					if (CreateParkingController.spotsForBuses == 0) {
						return "No available spots for buses!";
					}
				}
				if (vehicle.getVehicleType().equalsIgnoreCase("motor")) {
					property.getParkingLevel().setNum_of_occupied_places_for_motors(1);
					CreateParkingController.spotsForMotors -= property.getParkingLevel()
							.getNum_of_occupied_places_for_motors();
//					EnterParkingController.entId += 1;
					if (CreateParkingController.spotsForMotors == 0) {
						return "No available spots for motors!";
					}
				}
				if(CreateParkingController.spotsForCars <= 0 && 
						CreateParkingController.spotsForBuses <= 0 && 
						CreateParkingController.spotsForMotors <= 0) {
					return "This parking level is fully occupied!";
				}
			}
		}

		return String.format(
				"Vehicle type: %s, entrance ID: %s, spots left - for cars: %s, for buses: %s, for motors: %s",
				vehicle.getVehicleType(), EnterParkingController.entId, CreateParkingController.spotsForCars,
				CreateParkingController.spotsForBuses, CreateParkingController.spotsForMotors);
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
