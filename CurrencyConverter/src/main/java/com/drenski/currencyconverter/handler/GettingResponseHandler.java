package com.drenski.currencyconverter.handler;

public interface GettingResponseHandler {

	String getAPIResponseExchange(String source, String target);

	String getAPIResponseConversion(String source, String target, String amount);

	String getAPIResponseConversionList(String date, String currency);
}
