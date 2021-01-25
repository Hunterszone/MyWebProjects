package com.drenski.parking.handler;

import com.drenski.parking.model.ParkingProperties;

public interface ApiHandler extends GettingResponseHandler, ExtractionHandler {

	static ParkingProperties property = new ParkingProperties();
}
