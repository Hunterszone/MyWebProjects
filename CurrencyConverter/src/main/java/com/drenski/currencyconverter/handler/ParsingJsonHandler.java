package com.drenski.currencyconverter.handler;

import org.json.simple.JSONObject;
import org.json.simple.parser.ParseException;

public interface ParsingJsonHandler {
	
	JSONObject parsingJSONData(String currency, String response) throws ParseException;
	
}
