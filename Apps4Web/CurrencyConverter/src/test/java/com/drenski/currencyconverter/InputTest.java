package com.drenski.currencyconverter;

import static org.junit.Assert.assertTrue;

import org.junit.After;
import org.junit.Before;
import org.junit.FixMethodOrder;
import org.junit.Test;
import org.junit.runners.MethodSorters;

import com.drenski.currencyconverter.service.ExchangeRateService;

@FixMethodOrder(MethodSorters.NAME_ASCENDING)
public class InputTest {

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

		assertTrue("Currency was modified!", mocks.getSampleInput().contains("currencies=USD&source=BGN"));
	}

	@Test
	public void testSourceInput() {

		service.getAPIResponseExchange("", "usd");

		assertTrue("Source does not match!", mocks.getSampleInput().contains("USD"));
	}

	@Test
	public void testTargetInput() {

		service.getAPIResponseExchange("bgn", "");

		assertTrue("Target does not match!", mocks.getSampleInput().contains("BGN"));
	}

	@After
	public void tearDown() {
		mocks = null;
		service = null;
	}
}
