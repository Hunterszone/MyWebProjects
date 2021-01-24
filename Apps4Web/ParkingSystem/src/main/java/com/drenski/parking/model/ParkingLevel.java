package com.drenski.parking.model;

import com.fasterxml.jackson.annotation.JsonProperty;

public class ParkingLevel {

	@JsonProperty(value = "level_num")
	private int level_num;
	
	@JsonProperty(value = "num_of_free_places_for_cars")
	private int num_of_free_places_for_cars;
	
	@JsonProperty(value = "num_of_occupied_places_for_cars")
	private int num_of_occupied_places_for_cars;
	
	@JsonProperty(value = "num_of_free_places_for_buses")
	private int num_of_free_places_for_buses;
	
	@JsonProperty(value = "num_of_occupied_places_for_buses")
	private int num_of_occupied_places_for_buses;
	
	@JsonProperty(value = "num_of_free_places_for_motors")
	private int num_of_free_places_for_motors;
	
	@JsonProperty(value = "num_of_occupied_places_for_motors")
	private int num_of_occupied_places_for_motors;
	
	public ParkingLevel() {
	
	}

	public int getLevel_num() {
		return level_num;
	}

	public void setLevel_num(int level_num) {
		this.level_num = level_num;
	}

	public int getNum_of_free_places_for_cars() {
		return num_of_free_places_for_cars;
	}

	public void setNum_of_free_places_for_cars(int num_of_free_places_for_cars) {
		this.num_of_free_places_for_cars = num_of_free_places_for_cars;
	}

	public int getNum_of_free_places_for_buses() {
		return num_of_free_places_for_buses;
	}

	public void setNum_of_free_places_for_buses(int num_of_free_places_for_buses) {
		this.num_of_free_places_for_buses = num_of_free_places_for_buses;
	}

	public int getNum_of_free_places_for_motors() {
		return num_of_free_places_for_motors;
	}

	public void setNum_of_free_places_for_motors(int num_of_free_places_for_motors) {
		this.num_of_free_places_for_motors = num_of_free_places_for_motors;
	}

	public int getNum_of_occupied_places_for_cars() {
		return num_of_occupied_places_for_cars;
	}

	public void setNum_of_occupied_places_for_cars(int num_of_occupied_places_for_cars) {
		this.num_of_occupied_places_for_cars = num_of_occupied_places_for_cars;
	}

	public int getNum_of_occupied_places_for_buses() {
		return num_of_occupied_places_for_buses;
	}

	public void setNum_of_occupied_places_for_buses(int num_of_occupied_places_for_buses) {
		this.num_of_occupied_places_for_buses = num_of_occupied_places_for_buses;
	}

	public int getNum_of_occupied_places_for_motors() {
		return num_of_occupied_places_for_motors;
	}

	public void setNum_of_occupied_places_for_motors(int num_of_occupied_places_for_motors) {
		this.num_of_occupied_places_for_motors = num_of_occupied_places_for_motors;
	}
	
}
