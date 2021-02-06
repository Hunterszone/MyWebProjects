package com.drenski.parking.repositories;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.drenski.parking.models.ParkingLevel;
import com.drenski.parking.models.ParkingProperties;

@Repository
public interface ParkingRepository extends JpaRepository<ParkingProperties, Integer> {

}
