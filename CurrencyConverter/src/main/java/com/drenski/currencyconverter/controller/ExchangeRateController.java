package com.drenski.currencyconverter.controller;

import java.sql.SQLException;
import java.util.Arrays;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.currencyconverter.dbconn.DbConnWithMySql;
import com.drenski.currencyconverter.service.ExchangeRateService;

@RestController
public class ExchangeRateController {

	/*
	 * Test sample: http://localhost:8080/exchange?source=USD&target=BGN
	 */

	@Autowired
	ExchangeRateService service;

	private String[] exchangeResults;
	private String template = "Exchange rate of %s for 1 %s is: ";

	@GetMapping("/exchange")
	public String exchangeRate(@RequestParam(value = "source", defaultValue = "USD") String source,
			@RequestParam(value = "target", defaultValue = "BGN") String target) {
		exchangeResults = service.extractExchangeData(source, target);
		try {
			DbConnWithMySql.initDbConn();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		if (exchangeResults == null) {
			return "error";
		}
		return String.format(template, target, source) + Arrays.toString(exchangeResults);
	}
}