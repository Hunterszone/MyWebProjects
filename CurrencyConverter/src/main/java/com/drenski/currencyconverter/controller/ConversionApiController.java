package com.drenski.currencyconverter.controller;

import java.util.Arrays;

import javax.validation.groups.ConvertGroup;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.currencyconverter.model.ConvertRate;
import com.drenski.currencyconverter.service.ConversionApiService;

@RestController
public class ConversionApiController {
	
	@Autowired
	ConversionApiService service;
	
	private String[] conversionResults;
	private String template = "Exchange rate from %s to %s for amount %s is: ";

	@GetMapping("/convert")
	public ConvertRate exchangeRate(@RequestParam(value = "from", defaultValue = "BGN") String from,
			@RequestParam(value = "to", defaultValue = "USD") String to, 
			@RequestParam(value = "amount", defaultValue = "10") String amount) {
		conversionResults = service.extractData(from, to, amount);
		return new ConvertRate(String.format(template, from, to, amount) + Arrays.toString(conversionResults));
	}

}
