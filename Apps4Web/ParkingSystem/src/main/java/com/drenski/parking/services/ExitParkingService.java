package com.drenski.parking.services;

import org.apache.log4j.Logger;
import org.json.simple.parser.JSONParser;
import org.json.simple.parser.ParseException;
import org.springframework.stereotype.Service;

import com.drenski.parking.controllers.CreateParkingController;
import com.drenski.parking.controllers.ExitParkingController;
import com.drenski.parking.handlers.ApiHandler;
import com.drenski.parking.models.ParkingLevel;
import com.drenski.parking.models.Vehicle;

@Service
public class ExitParkingService implements ApiHandler {

	private static Logger log = Logger.getLogger(ExitParkingService.class.getName());

	@Override
	public String getAPIResponse() {

		Vehicle vehicle = new Vehicle();
		property.setParkingLevel(new ParkingLevel());

		if (vehicle.getVehicleType() == null || vehicle.getVehicleType().isEmpty()) {
			vehicle.setVehicleType(ExitParkingController.vehType);
			if (vehicle.getVehicleType().equalsIgnoreCase("car")) {
				property.getParkingLevel().setNumOfFreeSlotsForCars(1);
				ExitParkingController.availableSpotsForCars += property.getParkingLevel()
						.getNumOfFreeSlotsForCars();
				if (ExitParkingController.availableSpotsForCars == CreateParkingController.spotsForCars) {
					return "All car spots on this level are available!";
				}
			}
			if (vehicle.getVehicleType().equalsIgnoreCase("bus")) {
				property.getParkingLevel().setNumOfFreeSlotsForBuses(1);
				ExitParkingController.availableSpotsForBuses += property.getParkingLevel()
						.getNumOfFreeSlotsForBuses();
				if (ExitParkingController.availableSpotsForBuses == CreateParkingController.spotsForBuses) {
					return "All bus spots on this level are available!";
				}
			}
			if (vehicle.getVehicleType().equalsIgnoreCase("motor")) {
				property.getParkingLevel().setNumOfFreeSlotsForMotors(1);
				ExitParkingController.availableSpotsForMotors += property.getParkingLevel()
						.getNumOfFreeSlotsForMotors();
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
