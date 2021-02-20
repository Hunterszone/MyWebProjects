package com.drenski.country.controllers;

import org.springframework.beans.BeanUtils;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.MediaType;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.country.entities.Country;
import com.drenski.country.services.CreateCountryService;

@RestController
@RequestMapping(path = "/", produces = MediaType.APPLICATION_JSON_VALUE)
public class CreateCountryController {

	/*
	 * Test sample: http://localhost:8888/createCountry
	 *
	 * Example request body:
	 * {  
		    "name": "France",
		    "abbreviation": "FRA"
		} 
	 */

	private CreateCountryService service;
	private String countryData;
	
	public static String name, abbreviation;
	
	@Autowired
	public CreateCountryController(final CreateCountryService service) {
		this.service = service;
	}

	@PostMapping(path = "/createCountry")
	public String createCountry(@RequestBody Country countryDetails) {
		
		name = countryDetails.getName();
		abbreviation = countryDetails.getAbbreviation();
		
		String returnValue = new String();
        
        countryData = this.service.extractData();
        BeanUtils.copyProperties(countryData, returnValue);
		
		if (countryData.equals(null)) {
			return "error";
		}
		
		return returnValue;
	}
}