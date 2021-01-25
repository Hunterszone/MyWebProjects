package com.drenski.parking.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.parking.services.CreateParkingService;

@RestController
public class CreateParkingController {

	/*
	 * Test sample without parameters: http://localhost:8888/createParking
	 * Test sample with parameters: http://localhost:8888/createParking?parkingLevels=2&numOfSpotsForCars=20&numOfSpotsForBuses=5&numOfSpotsForMotors=10&numOfEntries=3&numOfExits=4
	 */

	private CreateParkingService service;
	private String parkingData;
	
	public static int parkLev, spotsForCars, spotsForBuses, spotsForMotors, numOfEntr, numOfEx;
	
	@Autowired
	public CreateParkingController(final CreateParkingService service) {
		this.service = service;
	}

	@GetMapping("/createParking")
	public String createParking(@RequestParam(value = "parkingLevels", defaultValue = "3") int parkingLevels,
			@RequestParam(value = "numOfSpotsForCars", defaultValue = "10") int numOfSpotsForCars, 
			@RequestParam(value = "numOfSpotsForBuses", defaultValue = "8") int numOfSpotsForBuses,
			@RequestParam(value = "numOfSpotsForMotors", defaultValue = "6") int numOfSpotsForMotors,
			@RequestParam(value = "numOfEntries", defaultValue = "2") int numOfEntries, 
			@RequestParam(value = "numOfExits", defaultValue = "2") int numOfExits) {
		
		parkLev = parkingLevels;
		spotsForCars = numOfSpotsForCars;
		spotsForBuses = numOfSpotsForBuses;
		spotsForMotors = numOfSpotsForMotors;
		numOfEntr = numOfEntries;
		numOfEx = numOfExits;
		
		parkingData = this.service.extractData();
		
		if (parkingData.equals(null)) {
			return "error";
		}
		return parkingData;
	}
}