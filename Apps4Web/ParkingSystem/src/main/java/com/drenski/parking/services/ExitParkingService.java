package com.drenski.parking.services;

import java.sql.SQLException;

import org.apache.log4j.Logger;
import org.json.simple.parser.JSONParser;
import org.json.simple.parser.ParseException;
import org.springframework.stereotype.Service;

import com.drenski.parking.controller.CreateParkingController;
import com.drenski.parking.controller.ExitParkingController;
import com.drenski.parking.handler.ApiHandler;
import com.drenski.parking.models.Vehicle;

@Service
public class ExitParkingService implements ApiHandler {

	private static Logger log = Logger.getLogger(ExitParkingService.class.getName());

	@Override
	public String getAPIResponse() {

		Vehicle vehicle = new Vehicle();

		if (vehicle.getVehicleType() == null || vehicle.getVehicleType().isEmpty()) {
			vehicle.setVehicleType(ExitParkingController.vehType);
			if (vehicle.getVehicleType().equalsIgnoreCase("car")) {
				property.getParkingLevel().setNum_of_free_places_for_cars(1);
				ExitParkingController.availableSpotsForCars += property.getParkingLevel()
						.getNum_of_free_places_for_cars();
				if (ExitParkingController.availableSpotsForCars == CreateParkingController.spotsForCars) {
					return "All car spots on this level are available!";
				}
			}
			if (vehicle.getVehicleType().equalsIgnoreCase("bus")) {
				property.getParkingLevel().setNum_of_free_places_for_buses(1);
				ExitParkingController.availableSpotsForBuses += property.getParkingLevel()
						.getNum_of_free_places_for_buses();
				if (ExitParkingController.availableSpotsForBuses == CreateParkingController.spotsForBuses) {
					return "All bus spots on this level are available!";
				}
			}
			if (vehicle.getVehicleType().equalsIgnoreCase("motor")) {
				property.getParkingLevel().setNum_of_free_places_for_motors(1);
				ExitParkingController.availableSpotsForMotors += property.getParkingLevel()
						.getNum_of_free_places_for_motors();
				if (ExitParkingController.availableSpotsForMotors == CreateParkingController.spotsForMotors) {
					return "All motor spots on this level are available!";
				}
			}

			log.debug("getVehicleType: " + vehicle.getVehicleType());
		}

		return String.format(
				"Vehicle type: %s, exit ID: %s, available spots - for cars: %s, for buses: %s, for motors: %s",
				vehicle.getVehicleType(), ExitParkingController.exId, ExitParkingController.availableSpotsForCars,
				ExitParkingController.availableSpotsForBuses, ExitParkingController.availableSpotsForMotors);
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