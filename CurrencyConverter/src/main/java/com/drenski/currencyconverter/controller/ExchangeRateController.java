package com.drenski.currencyconverter.controller;

import java.util.Arrays;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.currencyconverter.model.ConvertRate;
import com.drenski.currencyconverter.service.ExchangeRateService;

@RestController
public class ExchangeRateController {

	@Autowired
	ExchangeRateService service;

	private String[] exchangeResults;
	private String template = "Exchange rate of %s for 1 %s is: ";

	@GetMapping("/rate")
	public ConvertRate exchangeRate(@RequestParam(value = "currency", defaultValue = "BGN") String currency,
			@RequestParam(value = "source", defaultValue = "USD") String source) {
		exchangeResults = service.extractData(currency, source);
		return new ConvertRate(String.format(template, currency, source) + Arrays.toString(exchangeResults));
	}
}