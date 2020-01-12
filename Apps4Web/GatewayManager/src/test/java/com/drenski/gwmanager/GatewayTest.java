package com.drenski.gwmanager;

import static org.junit.Assert.assertNotEquals;
import static org.junit.Assert.assertNotNull;
import static org.junit.Assert.assertTrue;

import org.junit.After;
import org.junit.Before;
import org.junit.Test;

import com.drenski.gwmanager.service.GatewayService;

public class GatewayTest {

	private SampleMocks mocks;

	@Before
	public void setUp() {
		mocks = new SampleMocks();
	}

	@Test
	public void testProperties() {
		assertNotNull("Id is null", mocks.getSampleGateway().getId());
		assertTrue("Id length is not 7", mocks.getSampleGateway().getId().length() == 7);
		assertNotEquals("Id is duplicated", GatewayService.gateways.get(0).getId(),
				GatewayService.gateways.get(1).getId());
		assertNotNull("GatewayName is null", mocks.getSampleGateway().getGatewayName());
		assertNotNull("IpAddress is null", mocks.getSampleGateway().getIpAddress());
		assertNotNull("Devices list is null", mocks.getSampleGateway().getDevices());
	}

	@After
	public void tearDown() {
		mocks = null;
	}
}
