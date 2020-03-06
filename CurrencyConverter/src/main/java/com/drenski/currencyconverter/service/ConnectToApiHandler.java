package com.drenski.currencyconverter.service;

import java.io.IOException;

import org.json.JSONException;
import org.json.simple.parser.ParseException;

public interface ConnectToApiHandler {

	Object[] connectToAPIAndParseValues(String currency, String source) throws JSONException, IOException, ParseException;
	
	Object[] connectToAPIAndParseValues(String from, String to, String amount) throws JSONException, IOException, ParseException;
	
}
