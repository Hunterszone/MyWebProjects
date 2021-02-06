package com.drenski.parking.services;

import org.apache.log4j.Logger;
import org.json.simple.parser.JSONParser;
import org.json.simple.parser.ParseException;
import org.springframework.stereotype.Service;

import com.drenski.parking.controllers.CreateParkingController;
import com.drenski.parking.controllers.EnterParkingController;
import com.drenski.parking.handlers.ApiHandler;
import com.drenski.parking.models.ParkingLevel;
import com.drenski.parking.models.Vehicle;

@Service
public class EnterParkingService implements ApiHandler {

	private static Logger log = Logger.getLogger(EnterParkingService.class.getName());

	@Override
	public String getAPIResponse() {

		Vehicle vehicle = new Vehicle();
		property.setParkingLevel(new ParkingLevel());

		if (vehicle.getVehicleType() == null || vehicle.getVehicleType().isEmpty()) {
			vehicle.setVehicleType(EnterParkingController.vehType);
			if (vehicle.getVehicleType().equalsIgnoreCase("car")) {
				property.getParkingLevel().setNumOfFreeSlotsForCars(1);
				EnterParkingController.occupiedSpotsForCars += property.getParkingLevel()
						.getNumOfFreeSlotsForCars();
				if ((CreateParkingController.spotsForCars - EnterParkingController.occupiedSpotsForCars) == 0) {
					return "No available spots for cars!";
				}
			}
			if (vehicle.getVehicleType().equalsIgnoreCase("bus")) {
				property.getParkingLevel().setNumOfFreeSlotsForBuses(1);
				EnterParkingController.occupiedSpotsForBuses += property.getParkingLevel()
						.getNumOfFreeSlotsForBuses();
				if ((CreateParkingController.spotsForBuses - EnterParkingController.occupiedSpotsForBuses) == 0) {
					return "No available spots for buses!";
				}
			}
			if (vehicle.getVehicleType().equalsIgnoreCase("motor")) {
				property.getParkingLevel().setNumOfFreeSlotsForMotors(1);
				EnterParkingController.occupiedSpotsForMotors += property.getParkingLevel()
						.getNumOfFreeSlotsForMotors();
				if ((CreateParkingController.spotsForMotors - EnterParkingController.occupiedSpotsForMotors) == 0) {
					return "No available spots for motors!";
				}
			}
			if (CreateParkingController.spotsForCars - EnterParkingController.occupiedSpotsForCars <= 0
					&& CreateParkingController.spotsForBuses - EnterParkingController.occupiedSpotsForBuses <= 0
					&& CreateParkingController.spotsForMotors - EnterParkingController.occupiedSpotsForMotors <= 0) {
				return "Parking level " + EnterParkingController.lvl + " is fully occupied!";
			}

			log.debug("getVehicleType: " + vehicle.getVehicleType());

		}

		return String.format(
				"Vehicle type: %s, entrance ID: %s, spots left on level %s - for cars: %s, for buses: %s, for motors: %s",
				vehicle.getVehicleType(), EnterParkingController.entId, EnterParkingController.lvl,
				CreateParkingController.spotsForCars - EnterParkingController.occupiedSpotsForCars,
				CreateParkingController.spotsForBuses - EnterParkingController.occupiedSpotsForBuses,
				CreateParkingController.spotsForMotors - EnterParkingController.occupiedSpotsForMotors);
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
