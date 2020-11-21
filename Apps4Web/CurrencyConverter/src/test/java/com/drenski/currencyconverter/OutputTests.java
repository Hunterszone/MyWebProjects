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
public class OutputTests {

	private SampleMocks mocks;
	private ExchangeRateService service;

	@Before
	public void setUp() {
		service = new ExchangeRateService();
		mocks = new SampleMocks();
	}

	@Test
	public void testModifiedOutput() {

		service.extractExchangeData("usd", "bgn");
		mocks.setSampleOutput(HelperStructures.outputs.get(0));

		assertTrue("Output was modified externally!", mocks.getSampleOutput().contains("1.729495"));
	}
	
	@Test
	public void testNullOrEmptyOutput() {

		service.extractExchangeData("usd", "bgn");
		mocks.setSampleOutput(HelperStructures.outputs.get(0));

		assertFalse("Output was null or empty!", HelperStructures.isNullOrEmpty(mocks.getSampleOutput()));
	}

	@Test
	public void testSourceOutput() {

		service.extractExchangeData("usd", "");
		mocks.setSampleOutput(HelperStructures.outputs.get(0));

		assertTrue("Source does not match!", mocks.getSampleOutput().contains("USD"));
	}

	@Test
	public void testTargetOutput() {

		service.extractExchangeData("", "bgn");
		mocks.setSampleOutput(HelperStructures.outputs.get(0));

		assertTrue("Target does not match!", mocks.getSampleOutput().contains("BGN"));
	}

	@After
	public void tearDown() {
		mocks = null;
		service = null;
	}
}
