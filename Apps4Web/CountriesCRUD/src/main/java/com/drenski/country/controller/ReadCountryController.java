package com.drenski.country.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.country.entity.Country;
import com.drenski.country.service.ReadCountryService;

@RestController
public class ReadCountryController {

	/*
	 * Test sample without parameters: http://localhost:8888/countries
	 * Test sample with parameters: http://localhost:8888/countries/{id}
	 */

	private ReadCountryService service;

	public static String name;
	public static String abbreviation;

	@Autowired
	public ReadCountryController(final ReadCountryService service) {
		this.service = service;
	}
	
	@GetMapping("/countries")
    public List<Country> allUsers() {

        return service.findAll();
    }
	
	@GetMapping("/countries/{id}")
	public void read(@PathVariable String id) {

		 Long userId = Long.parseLong(id);
		 service.readById(userId);
    }
}