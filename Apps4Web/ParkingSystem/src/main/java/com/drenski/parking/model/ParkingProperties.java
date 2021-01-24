package com.drenski.parking.model;

import com.fasterxml.jackson.annotation.JsonIgnoreProperties;
import com.fasterxml.jackson.annotation.JsonProperty;

@JsonIgnoreProperties(ignoreUnknown = true)
public class ParkingProperties {
		
	@JsonProperty(value = "id")
	private int id;
	
	@JsonProperty(value = "parkingLevel")
	private ParkingLevel parkingLevel;
	
	@JsonProperty(value = "num_of_entrances")
	private int num_of_entrances;
	
	@JsonProperty(value = "num_of_exits")
	private int num_of_exits;
		
	public ParkingProperties() {}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public int getNum_of_entrances() {
		return num_of_entrances;
	}

	public void setNum_of_entrances(int num_of_entrances) {
		this.num_of_entrances = num_of_entrances;
	}

	public int getNum_of_exits() {
		return num_of_exits;
	}

	public void setNum_of_exits(int num_of_exits) {
		this.num_of_exits = num_of_exits;
	}

	public ParkingLevel getParkingLevel() {
		return parkingLevel;
	}

	public void setParkingLevel(ParkingLevel parkingLevel) {
		this.parkingLevel = parkingLevel;
	}

}
