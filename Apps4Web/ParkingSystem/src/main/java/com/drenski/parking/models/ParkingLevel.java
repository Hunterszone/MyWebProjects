package com.drenski.parking.models;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

import com.fasterxml.jackson.annotation.JsonIgnoreProperties;
import com.fasterxml.jackson.annotation.JsonProperty;

@Entity
@Table(name = "PARKING_LEVEL")
@JsonIgnoreProperties(ignoreUnknown = true)
public class ParkingLevel {
	
	@Id
	@Column(name = "id")
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@JsonProperty(value = "id")
	private int id;
	
	@Column(name = "entrances")
	@JsonProperty(value = "numOfEntrances")
	private int numOfEntrances;
	
	@Column(name = "exits")
	@JsonProperty(value = "numOfExits")
	private int numOfExits;
	
	@Column(name = "freeSlotsForCars")
	@JsonProperty(value = "numOfFreeSlotsForCars")
	private int numOfFreeSlotsForCars;
	
	@Column(name = "occupiedSlotsForCars")
	@JsonProperty(value = "numOfOccupiedSlotsForCars")
	private int numOfOccupiedSlotsForCars;
	
	@Column(name = "freeSlotsForBuses")
	@JsonProperty(value = "numOfFreeSlotsForBuses")
	private int numOfFreeSlotsForBuses;
	
	@Column(name = "occupiedSlotsForBuses")
	@JsonProperty(value = "numOfOccupiedSlotsForBuses")
	private int numOfOccupiedSlotsForBuses;
	
	@Column(name = "freeSlotsForMotors")
	@JsonProperty(value = "numOfFreeSlotsForMotors")
	private int numOfFreeSlotsForMotors;
	
	@Column(name = "occupiedSlotsForMotors")
	@JsonProperty(value = "numOfOccupiedSlotsForMotors")
	private int numOfOccupiedSlotsForMotors;
	
	public ParkingLevel() {
	
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public int getNumOfEntrances() {
		return numOfEntrances;
	}

	public void setNumOfEntrances(int numOfEntrances) {
		this.numOfEntrances = numOfEntrances;
	}

	public int getNumOfExits() {
		return numOfExits;
	}

	public void setNumOfExits(int numOfExits) {
		this.numOfExits = numOfExits;
	}

	public int getNumOfFreeSlotsForCars() {
		return numOfFreeSlotsForCars;
	}

	public void setNumOfFreeSlotsForCars(int numOfFreeSlotsForCars) {
		this.numOfFreeSlotsForCars = numOfFreeSlotsForCars;
	}

	public int getNumOfOccupiedSlotsForCars() {
		return numOfOccupiedSlotsForCars;
	}

	public void setNumOfOccupiedSlotsForCars(int numOfOccupiedSlotsForCars) {
		this.numOfOccupiedSlotsForCars = numOfOccupiedSlotsForCars;
	}

	public int getNumOfFreeSlotsForBuses() {
		return numOfFreeSlotsForBuses;
	}

	public void setNumOfFreeSlotsForBuses(int numOfFreeSlotsForBuses) {
		this.numOfFreeSlotsForBuses = numOfFreeSlotsForBuses;
	}

	public int getNumOfOccupiedSlotsForBuses() {
		return numOfOccupiedSlotsForBuses;
	}

	public void setNumOfOccupiedSlotsForBuses(int numOfOccupiedSlotsForBuses) {
		this.numOfOccupiedSlotsForBuses = numOfOccupiedSlotsForBuses;
	}

	public int getNumOfFreeSlotsForMotors() {
		return numOfFreeSlotsForMotors;
	}

	public void setNumOfFreeSlotsForMotors(int numOfFreeSlotsForMotors) {
		this.numOfFreeSlotsForMotors = numOfFreeSlotsForMotors;
	}

	public int getNumOfOccupiedSlotsForMotors() {
		return numOfOccupiedSlotsForMotors;
	}

	public void setNumOfOccupiedSlotsForMotors(int numOfOccupiedSlotsForMotors) {
		this.numOfOccupiedSlotsForMotors = numOfOccupiedSlotsForMotors;
	}

}
