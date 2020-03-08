package com.drenski.currencyconverter.controller;

import java.sql.SQLException;
import java.util.Arrays;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.currencyconverter.dbconn.DbConnWithH2;
import com.drenski.currencyconverter.service.ConversionApiService;

@RestController
public class ConversionApiController {

	/*
	 * Test sample: http://localhost:8080/convert?source=USD&target=PLN&amount=100
	 * (NB: requires paid subscription to work !!!)
	 */

	@Autowired
	ConversionApiService service;

	private String[] conversionResults;
	private String template = "Conversion rate from %s to %s for amount %s is: ";

	@GetMapping("/convert")
	public String conversionRate(@RequestParam(value = "source", defaultValue = "USD") String source,
			@RequestParam(value = "target", defaultValue = "BGN") String target,
			@RequestParam(value = "amount", defaultValue = "10") String amount) {
		conversionResults = service.extractConversionData(source, target, amount);
		try {
			DbConnWithH2.initDbConn();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		if (conversionResults == null) {
			return "error";
		}
		return String.format(template, source, target, amount) + Arrays.toString(conversionResults);
	}
}