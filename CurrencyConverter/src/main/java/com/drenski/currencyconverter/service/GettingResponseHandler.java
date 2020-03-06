package com.drenski.currencyconverter.service;

public interface GettingResponseHandler {

	String gettingResponseFromAPI(String currency, String source);
	
	String gettingResponseFromAPI(String from, String to, String amount);
}
