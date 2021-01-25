package com.drenski.parking.models;

import com.fasterxml.jackson.annotation.JsonIgnoreProperties;
import com.fasterxml.jackson.annotation.JsonProperty;

@JsonIgnoreProperties(ignoreUnknown = true)
public class Vehicle {

	@JsonProperty(value = "entranceId")
	private int entranceId;
	
	@JsonProperty(value = "vehicleType")
	private String vehicleType;
	
	public Vehicle() {}

	public int getEntranceId() {
		return entranceId;
	}

	public void setEntranceId(int entranceId) {
		this.entranceId = entranceId;
	}

	public String getVehicleType() {
		return vehicleType;
	}

	public void setVehicleType(String vehicleType) {
		this.vehicleType = vehicleType;
	}
	
}
