package com.drenski.gwmanager;

import static org.junit.Assert.assertNotNull;

import org.junit.After;
import org.junit.Before;
import org.junit.Test;

public class DeviceTest {

	private SampleMocks mocks;

	@Before
	public void setUp() {
		mocks = new SampleMocks();
	}

	@Test
	public void testProperties() {
		assertNotNull("Id is null", mocks.getSampleDevice().getId());
		assertNotNull("Vendor name is null", mocks.getSampleDevice().getVendor());
		assertNotNull("Creation date is null", mocks.getSampleDevice().getCreationDate());
		assertNotNull("Status is null", mocks.getSampleDevice().getOnline());
	}

	@After
	public void tearDown() {
		mocks = null;
	}
}
