package com.drenski.parking.models;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Transient;

@Entity(name = "PARKING")
public class ParkingProperties {
	
	@Id
	@Column(name = "id")
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int id;
			
	@Column
	private int numOfLevels;
	
	@Transient
	private ParkingLevel parkingLevel;
		
	public ParkingProperties() {}
	
	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public int getNumOfLevels() {
		return numOfLevels;
	}

	public void setNumOfLevels(int numOfLevels) {
		this.numOfLevels = numOfLevels;
	}

	public ParkingLevel getParkingLevel() {
		return parkingLevel;
	}

	public void setParkingLevel(ParkingLevel parkingLevel) {
		this.parkingLevel = parkingLevel;
	}

}
