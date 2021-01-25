package com.drenski.parking.repositories;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.drenski.parking.models.ParkingLevel;

@Repository
public interface ParkingLevelRepository extends JpaRepository<ParkingLevel, Integer> {

}
