package com.drenski.currencyconverter.controller;

import java.util.Arrays;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.currencyconverter.service.ConversionListApiService;

@RestController
public class ConversionListApiController {

	/*
	 * Test sample:
	 * http://localhost:8080/history?date=2019-03-07&currency=USD,AUD,CAD,PLN,MXN
	 */

	@Autowired
	ConversionListApiService service;

	private String[] conversionListResults;
	private String template = "List from %s for currencies %s : ";

	@GetMapping("/history")
	public String conversionRate(@RequestParam(value = "date", defaultValue = "2010-03-07") String date,
			@RequestParam(value = "currency", defaultValue = "BGN") String currency) {
		conversionListResults = service.extractConversionListData(date, currency);
		if (conversionListResults == null) {
			return "error";
		}
		return String.format(template, date, currency) + Arrays.toString(conversionListResults);
	}
}
