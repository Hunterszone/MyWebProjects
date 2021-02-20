package com.drenski.country.services;

import org.apache.log4j.Logger;
import org.json.simple.parser.JSONParser;
import org.json.simple.parser.ParseException;
import org.springframework.stereotype.Service;

import com.drenski.country.controllers.CreateCountryController;
import com.drenski.country.handlers.ApiHandler;

@Service
public class CreateCountryService implements ApiHandler {

	private static Logger log = Logger.getLogger(CreateCountryService.class.getName());
	
	@Override
	public String getAPIResponse() {

		log.debug("get country name: " + CreateCountryController.name);
		log.debug("get country abbreviation: " + CreateCountryController.abbreviation);

		return String.format(
				"Country name: %s, country abbreviation: %s",
				CreateCountryController.name, CreateCountryController.abbreviation);
	}

	@Override
	public String extractData() {
		JSONParser parser = new JSONParser();
		Object json = null;
		String jsonRespBlock = "";
		try {
			jsonRespBlock = getAPIResponse().toString();
			json = parser.parse(jsonRespBlock);
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

		return jsonRespBlock;
	}

}
