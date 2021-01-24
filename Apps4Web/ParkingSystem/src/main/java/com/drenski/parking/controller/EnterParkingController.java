package com.drenski.parking.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.parking.service.EnterParkingService;

@RestController
public class EnterParkingController {

	/*
	 * Test sample without parameters: http://localhost:8888/enterParking
	 * Test sample with parameters for car: http://localhost:8888/enterParking?vehicleType=car&entranceId=5
	 * Test sample with parameters for bus: http://localhost:8888/enterParking?vehicleType=bus&entranceId=5
	 * Test sample with parameters for motor: http://localhost:8888/enterParking?vehicleType=motor&entranceId=5
	 * 
	 * HINT: refresh the browser page until there are no spots left for each vehicle type
	 */

	private EnterParkingService service;
	private String entranceData;

	public static String vehType;
	public static int entId;

	@Autowired
	public EnterParkingController(final EnterParkingService service) {
		this.service = service;
	}

	@GetMapping("/enterParking")
	public String enterParking(@RequestParam(value = "vehicleType", defaultValue = "car") String vehicleType,
			@RequestParam(value = "entranceId", defaultValue = "1") int entranceId) {

		vehType = vehicleType;
		entId = entranceId;

		entranceData = this.service.extractData();

		return entranceData;
	}
}