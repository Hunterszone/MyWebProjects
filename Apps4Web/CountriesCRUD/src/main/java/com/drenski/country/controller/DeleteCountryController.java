package com.drenski.country.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.country.service.DeleteCountryService;

@RestController
public class DeleteCountryController {

	/*
	 * Test sample: http://localhost:8888/countries/{id}
	 */

	private DeleteCountryService service;

	@Autowired
	public DeleteCountryController(final DeleteCountryService service) {
		this.service = service;
	}

	@DeleteMapping("/countries/{id}")
	public void delete(@PathVariable String id) {
		
		service.deleteById(id);
	}
}