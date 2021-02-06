package com.drenski.parking.services;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.drenski.parking.models.ParkingLevel;
import com.drenski.parking.models.ParkingProperties;
import com.drenski.parking.repositories.ParkingRepository;

@Service
public class ParkingService {
	
	@Autowired
    private ParkingRepository parkingRepository;

    public List<ParkingProperties> list() {
        return parkingRepository.findAll();
    }
    
    public ParkingProperties save() {
    	
    	ParkingProperties parking = new ParkingProperties();
    	List<ParkingLevel> levels = new ArrayList<ParkingLevel>();
    	
    	parking.setNumOfLevels(3);
    	
    	for(int i = 0; i < parking.getNumOfLevels(); i++) {
    		
    		parking.getParkingLevel().setNumOfEntrances(2);
    		parking.getParkingLevel().setNumOfExits(3);

    		parking.getParkingLevel().setNumOfFreeSlotsForCars(100);
    		parking.getParkingLevel().setNumOfFreeSlotsForBuses(59);
    		parking.getParkingLevel().setNumOfFreeSlotsForMotors(23);
    		
    		parking.getParkingLevel().setNumOfOccupiedSlotsForCars(2);
    		parking.getParkingLevel().setNumOfFreeSlotsForBuses(12);
    		parking.getParkingLevel().setNumOfFreeSlotsForMotors(12);
    		
    		levels.add(parking.getParkingLevel());
        	
    	}
        return parkingRepository.save(parking);
    }
    
    public ParkingProperties update() {
    	ParkingProperties parkingInDb = parkingRepository.findById(1).get();
    	parkingInDb.setNumOfLevels(5);
        return parkingRepository.save(parkingInDb);
    }
}
