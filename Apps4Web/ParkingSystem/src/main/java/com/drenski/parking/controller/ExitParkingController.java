package com.drenski.parking.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.parking.service.ExitParkingService;

@RestController
public class ExitParkingController {

	/*
	 * Test sample without parameters: http://localhost:8888/exitParking
	 * Test sample with parameters for car: http://localhost:8888/exitParking?vehicleType=car&exitId=5
	 * Test sample with parameters for bus: http://localhost:8888/exitParking?vehicleType=bus&exitId=5
	 * Test sample with parameters for motor: http://localhost:8888/exitParking?vehicleType=motor&exitId=5
	 * 
	 * HINT: refresh the browser page until there are no spots left for each vehicle type
	 */

	private ExitParkingService service;
	private String exitData;

	public static String vehType;
	public static int exId;
	public static int availableSpotsForCars = CreateParkingController.spotsForCars - EnterParkingController.occupiedSpotsForCars; 
	public static int availableSpotsForBuses = CreateParkingController.spotsForBuses - EnterParkingController.occupiedSpotsForBuses; 
	public static int availableSpotsForMotors = CreateParkingController.spotsForMotors - EnterParkingController.occupiedSpotsForMotors;

	@Autowired
	public ExitParkingController(final ExitParkingService service) {
		this.service = service;
	}

	@GetMapping("/exitParking")
	public String exitParking(@RequestParam(value = "vehicleType", defaultValue = "car") String vehicleType,
			@RequestParam(value = "exitId", defaultValue = "1") int exitId) {

		vehType = vehicleType;
		exId = exitId;

		exitData = this.service.extractData();
		
		if (exitData.equals(null)) {
			return "error";
		}

		return exitData;
	}
}