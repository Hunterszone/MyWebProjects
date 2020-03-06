package com.drenski.currencyconverter.service;

import org.json.simple.JSONObject;
import org.json.simple.parser.ParseException;

public interface ParsingJsonHandler {
	
	JSONObject parsingJSONData(String currency, String response) throws ParseException;
	
}
