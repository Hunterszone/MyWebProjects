package com.drenski.currencyconverter.handler;

import java.io.IOException;
import java.util.Date;

import org.json.JSONException;
import org.json.simple.parser.ParseException;

public interface ConnectToApiHandler {

	Object[] connAPIAndParseObjExchange(String source, String target) throws JSONException, IOException, ParseException;

	Object[] connAPIAndParseObjConversion(String source, String target, String amount)
			throws JSONException, IOException, ParseException;

	Object[] connAPIAndParseObjConversionList(String date, String currency)
			throws JSONException, IOException, ParseException;

}
