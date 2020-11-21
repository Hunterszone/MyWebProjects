package com.drenski.currencyconverter;

import static org.junit.Assert.assertFalse;
import static org.junit.Assert.assertTrue;

import org.junit.After;
import org.junit.Before;
import org.junit.FixMethodOrder;
import org.junit.Test;
import org.junit.runners.MethodSorters;

import com.drenski.currencyconverter.service.ExchangeRateService;
import com.drenski.currencyconverter.service.HelperStructures;

@FixMethodOrder(MethodSorters.NAME_ASCENDING)
public class InputTests {

	private SampleMocks mocks;
	private ExchangeRateService service;

	@Before
	public void setUp() {
		service = new ExchangeRateService();
		mocks = new SampleMocks();
	}

	@Test
	public void testEndpoint() {

		service.getAPIResponseExchange("bgn", "usd");
		mocks.setSampleInput(HelperStructures.endpoints.get(0));

		assertTrue("Currency was modified!", mocks.getSampleInput().contains("currencies=USD&source=BGN"));
	}
	
	@Test
	public void testNullOrEmptyInput() {

		service.extractExchangeData("usd", "bgn");
		mocks.setSampleInput(HelperStructures.endpoints.get(0));

		assertFalse("Input was null or empty!", HelperStructures.isNullOrEmpty(mocks.getSampleInput()));
	}

	@Test
	public void testSourceInput() {

		service.getAPIResponseExchange("", "usd");
		mocks.setSampleInput(HelperStructures.endpoints.get(0));

		assertTrue("Source does not match!", mocks.getSampleInput().contains("USD"));
	}

	@Test
	public void testTargetInput() {

		service.getAPIResponseExchange("bgn", "");
		mocks.setSampleInput(HelperStructures.endpoints.get(0));

		assertTrue("Target does not match!", mocks.getSampleInput().contains("BGN"));
	}

	@After
	public void tearDown() {
		mocks = null;
		service = null;
	}
}
