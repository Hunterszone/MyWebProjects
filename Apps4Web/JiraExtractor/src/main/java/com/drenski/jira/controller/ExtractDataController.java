package com.drenski.jira.controller;

import java.util.Arrays;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.jira.service.ExtractDataService;

@RestController
public class ExtractDataController {

	/*
	 * Test sample: http://localhost:8888/rest/api/2/issuetype?id=1
	 */

	private ExtractDataService service;	
	private String[] extractionResult;
	private String template = "Extracted info for ticketId %s is: ";
	
	@Autowired
	public ExtractDataController(final ExtractDataService service) {
		this.service = service;
	}

	@GetMapping("/rest/api/2/issuetype")
	public String extracTicketId(@RequestParam(value = "id", defaultValue = "1") Integer id) {
		
		extractionResult = this.service.extractData(id, "json");
		
		if (extractionResult.equals(null)) {
			return "error";
		}
		return String.format(template, id) + Arrays.toString(extractionResult);
	}
}