package com.drenski.currencyconverter.service;

public interface ExtractionHandler {

	String[] extractData(Object currency, Object source);

	String[] extractData(Object from, Object to, Object amount);
}
