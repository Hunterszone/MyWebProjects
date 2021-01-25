package com.drenski.parking.services;

import java.sql.SQLException;

import org.apache.log4j.Logger;
import org.json.simple.parser.JSONParser;
import org.json.simple.parser.ParseException;
import org.springframework.stereotype.Service;

import com.drenski.parking.controller.CreateParkingController;
import com.drenski.parking.controller.EnterParkingController;
import com.drenski.parking.handler.ApiHandler;
import com.drenski.parking.models.Vehicle;

@Service
public class EnterParkingService implements ApiHandler {

	private static Logger log = Logger.getLogger(EnterParkingService.class.getName());

	@Override
	public String getAPIResponse() {

		Vehicle vehicle = new Vehicle();

		if (vehicle.getVehicleType() == null || vehicle.getVehicleType().isEmpty()) {
			vehicle.setVehicleType(EnterParkingController.vehType);
			if (vehicle.getVehicleType().equalsIgnoreCase("car")) {
				property.getParkingLevel().setNum_of_occupied_places_for_cars(1);
				EnterParkingController.occupiedSpotsForCars += property.getParkingLevel()
						.getNum_of_occupied_places_for_cars();
				if ((CreateParkingController.spotsForCars - EnterParkingController.occupiedSpotsForCars) == 0) {
					return "No available spots for cars!";
				}
			}
			if (vehicle.getVehicleType().equalsIgnoreCase("bus")) {
				property.getParkingLevel().setNum_of_occupied_places_for_buses(1);
				EnterParkingController.occupiedSpotsForBuses += property.getParkingLevel()
						.getNum_of_occupied_places_for_buses();
				if ((CreateParkingController.spotsForBuses - EnterParkingController.occupiedSpotsForBuses) == 0) {
					return "No available spots for buses!";
				}
			}
			if (vehicle.getVehicleType().equalsIgnoreCase("motor")) {
				property.getParkingLevel().setNum_of_occupied_places_for_motors(1);
				EnterParkingController.occupiedSpotsForMotors += property.getParkingLevel()
						.getNum_of_occupied_places_for_motors();
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