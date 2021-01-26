package com.drenski.parking.services;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.drenski.parking.models.ParkingLevel;
import com.drenski.parking.repositories.ParkingLevelRepository;

@Service
public class ParkingLevelService {
	
	@Autowired
    private ParkingLevelRepository parkingRepository;

    public List<ParkingLevel> list() {
        return parkingRepository.findAll();
    }
    
    public ParkingLevel save() {
    	ParkingLevel parkingLevel = new ParkingLevel();
    	parkingLevel.setLevel_num(3);
    	parkingLevel.setNum_of_free_places_for_cars(100);
    	parkingLevel.setNum_of_free_places_for_buses(59);
    	parkingLevel.setNum_of_free_places_for_motors(23);
    	parkingLevel.setNum_of_occupied_places_for_cars(12);
    	parkingLevel.setNum_of_occupied_places_for_buses(12);
    	parkingLevel.setNum_of_occupied_places_for_motors(12);
        return parkingRepository.save(parkingLevel);
    }
    
    public ParkingLevel update() {
    	ParkingLevel parkingLevelInDb = parkingRepository.findById(1).get();
    	parkingLevelInDb.setLevel_num(5);
        return parkingRepository.save(parkingLevelInDb);
    }
}
