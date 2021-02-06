package com.drenski.parking.models;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Transient;

import com.fasterxml.jackson.annotation.JsonIgnoreProperties;
import com.fasterxml.jackson.annotation.JsonProperty;

@Entity(name = "PARKING")
@JsonIgnoreProperties(ignoreUnknown = true)
public class ParkingProperties {
	
	@Id
	@Column(name = "id")
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@JsonProperty(value = "id")
	private int id;
			
	@Column
	@JsonProperty(value = "numOfLevels")
	private int numOfLevels;
	
	@Transient
	@JsonProperty(value = "parkingLevel")
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
