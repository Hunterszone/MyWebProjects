package com.drenski.parking.models;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name = "PARKING_LEVEL")
public class ParkingLevel {
	
	@Id
	@Column(name = "id")
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int id;

	@Column
	private int level_num;
	
	@Column
	private int num_of_free_places_for_cars;
	
	@Column
	private int num_of_occupied_places_for_cars;
	
	@Column
	private int num_of_free_places_for_buses;
	
	@Column
	private int num_of_occupied_places_for_buses;
	
	@Column
	private int num_of_free_places_for_motors;
	
	@Column
	private int num_of_occupied_places_for_motors;
	
	public ParkingLevel() {
	
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
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
