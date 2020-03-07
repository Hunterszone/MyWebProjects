package com.drenski.currencyconverter.handler;

public interface ExtractionHandler {

	String[] extractExchangeData(Object source, Object target);

	String[] extractConversionData(Object source, Object target, Object amount);

	String[] extractConversionListData(Object date, Object currency);
}
