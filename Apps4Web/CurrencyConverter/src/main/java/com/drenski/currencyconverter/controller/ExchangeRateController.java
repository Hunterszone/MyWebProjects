package com.drenski.currencyconverter.controller;

import java.util.Arrays;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.currencyconverter.service.ExchangeRateService;

@RestController
public class ExchangeRateController {

	/*
	 * Test sample: http://localhost:8888/exchange?source=USD&target=BGN
	 */

	private ExchangeRateService service;
	
	@Autowired
	public ExchangeRateController(final ExchangeRateService service) {
		this.service = service;
	}

	private String[] exchangeResults;
	private String template = "Exchange rate of %s for 1 %s is: ";

	@GetMapping("/exchange")
	public String exchangeRate(@RequestParam(value = "source", defaultValue = "USD") String source,
			@RequestParam(value = "target", defaultValue = "BGN") String target) {
		
		exchangeResults = this.service.extractExchangeData(source, target);
		
		if (exchangeResults.equals(null)) {
			return "error";
		}
		return String.format(template, target, source) + Arrays.toString(exchangeResults);
	}
}