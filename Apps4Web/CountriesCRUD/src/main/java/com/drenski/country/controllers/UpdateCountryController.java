package com.drenski.country.controllers;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.MediaType;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.country.entity.Country;
import com.drenski.country.service.UpdateCountryService;

@RestController
@RequestMapping(path = "/", produces = MediaType.APPLICATION_JSON_VALUE)
public class UpdateCountryController {

	/*
	 * Test sample: http://localhost:8888/countries/{id}
	 */

	private UpdateCountryService service;
	private Country countryData;

	public static String name, abbreviation;

	@Autowired
	public UpdateCountryController(final UpdateCountryService service) {
		this.service = service;
	}

	@PutMapping("/countries/{id}")
	Country updateCountry(@RequestBody Country newCountry, @PathVariable Long id) {

		countryData = this.service.updateCountryById(id, newCountry);

		return countryData;

	}
}