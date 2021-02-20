package com.drenski.country.handlers;

import com.drenski.country.entities.Country;

public interface ApiHandler extends GettingResponseHandler, ExtractionHandler {

	static Country country = new Country();
}
