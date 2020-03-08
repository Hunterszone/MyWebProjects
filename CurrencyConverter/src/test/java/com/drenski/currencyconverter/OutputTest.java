package com.drenski.currencyconverter;

import static org.junit.Assert.assertEquals;
import static org.junit.Assert.assertTrue;

import org.junit.After;
import org.junit.Before;
import org.junit.FixMethodOrder;
import org.junit.Test;
import org.junit.runners.MethodSorters;

import com.drenski.currencyconverter.service.ExchangeRateService;

@FixMethodOrder(MethodSorters.NAME_ASCENDING)
public class OutputTest {

	private SampleMocks mocks;
	private ExchangeRateService service;

	@Before
	public void setUp() {
		service = new ExchangeRateService();
		mocks = new SampleMocks();
	}

	@Test
	public void outputTest() {

		service.extractExchangeData("usd", "bgn");

		assertEquals("Output is incorrect!",
				"{  \"success\":true,  \"terms\":\"https:\\/\\/currencylayer.com\\/terms\",  \"privacy\":\"https:\\/\\/currencylayer.com\\/privacy\",  \"timestamp\":1583598847,  \"source\":\"USD\",  \"quotes\":{    \"USDBGN\":1.729495  }}",
				mocks.getSampleOutput());
	}

	@Test
	public void testSourceOutput() {

		service.extractExchangeData("usd", "");

		assertTrue("Source does not match!", mocks.getSampleOutput().contains("USD"));
	}

	@Test
	public void testTargetOutput() {

		service.extractExchangeData("", "bgn");

		assertTrue("Target does not match!", mocks.getSampleOutput().contains("BGN"));
	}

	@After
	public void tearDown() {
		mocks = null;
		service = null;
	}
}
