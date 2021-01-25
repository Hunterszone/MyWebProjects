package com.drenski.parking.handler;

import com.drenski.parking.models.ParkingProperties;

public interface ApiHandler extends GettingResponseHandler, ExtractionHandler {

	static ParkingProperties property = new ParkingProperties();
}
