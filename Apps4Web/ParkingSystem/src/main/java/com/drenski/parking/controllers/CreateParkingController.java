package com.drenski.parking.controllers;

import org.springframework.beans.BeanUtils;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.MediaType;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.parking.models.ParkingProperties;
import com.drenski.parking.services.CreateParkingService;

@RestController
@RequestMapping(path = "/", produces = MediaType.APPLICATION_JSON_VALUE)
public class CreateParkingController {

	/*
	 * Example request body:
	 * {  
		    "id": 1,
		    "numOfLevels": 3,
		    "parkingLevel" :
		       {
		            "id": 1,
		            "numOfEntrances": 4,
		            "numOfExits": 6,
		            "numOfFreeSlotsForCars": 4,
		            "numOfOccupiedSlotsForCars": 66,
		            "numOfFreeSlotsForBuses": 23,
		            "numOfOccupiedSlotsForBuses": 50,
		            "numOfFreeSlotsForMotors": 31,
		            "occupiedSlotsForMotors": 12
		        }
		} 
	 */

	private CreateParkingService service;
	private String parkingData;
	
	public static int parkLev, spotsForCars, spotsForBuses, spotsForMotors, numOfEntr, numOfEx;
	
	@Autowired
	public CreateParkingController(final CreateParkingService service) {
		this.service = service;
	}

	@PostMapping(path = "/createParking")
	public String createParking(@RequestBody ParkingProperties parkingDetails) {
		
		parkLev = parkingDetails.getNumOfLevels();
		spotsForCars = parkingDetails.getParkingLevel().getNumOfFreeSlotsForCars();
		spotsForBuses = parkingDetails.getParkingLevel().getNumOfFreeSlotsForBuses();
		spotsForMotors = parkingDetails.getParkingLevel().getNumOfFreeSlotsForMotors();
		numOfEntr = parkingDetails.getParkingLevel().getNumOfEntrances();
		numOfEx = parkingDetails.getParkingLevel().getNumOfExits();
		
		String returnValue = new String();
        
        parkingData = this.service.extractData();
        BeanUtils.copyProperties(parkingData, returnValue);
		
		if (parkingData.equals(null)) {
			return "error";
		}
		
		return returnValue;
	}
}