package com.drenski.country.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.MediaType;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.country.entity.Country;
import com.drenski.country.service.CreateCountryService;

@RestController
@RequestMapping(path = "/", produces = MediaType.APPLICATION_JSON_VALUE)
public class CreateCountryController {

	/*
	 * Test sample: http://localhost:8888/countries
	 *
	 * Example request body:
	 * {  
		    "name": "France",
		    "abbreviation": "FRA"
		} 
	 */

	private CreateCountryService service;
	private Country countryData;
	
	public static String name, abbreviation;
	
	@Autowired
	public CreateCountryController(final CreateCountryService service) {
		this.service = service;
	}

	@PostMapping(path = "/countries")
	public Country createCountry(@RequestBody Country countryDetails) {
		
		name = countryDetails.getName();
		abbreviation = countryDetails.getAbbreviation();
		
        countryData = this.service.createCountry(name, abbreviation);
				
		return countryData;
	}
}