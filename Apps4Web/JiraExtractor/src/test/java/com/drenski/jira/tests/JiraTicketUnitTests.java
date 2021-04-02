package com.drenski.jira.tests;

import static org.junit.Assert.assertArrayEquals;
import static org.junit.Assert.assertNotNull;

import org.junit.After;
import org.junit.Before;
import org.junit.Test;
import org.junit.runner.RunWith;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.test.context.junit4.SpringRunner;

import com.drenski.jira.service.ExtractDataService;
import com.drenski.jira.util.HelperStructures;

@RunWith(SpringRunner.class)
@SpringBootTest(classes = {TestConfiguration.class})
public class JiraTicketUnitTests {
	
	private ExtractDataService service;
	private SampleMocks mocks;
	
	@Before
	public void setUp() {		
		service = new ExtractDataService();
		mocks = new SampleMocks();
	}
	
	@Test
	public void serviceInputIsNotNullTest() {
		
		mocks.setSampleInput(service.extractData(1, "json"));
		
		assertNotNull("Input is null!", mocks.getSampleInput());
	}
	
	@Test
	public void sampleOutputIsNotNullTest() {

		mocks.setSampleOutput(HelperStructures.output);
		
		assertNotNull("Output is null!", mocks.getSampleOutput());
	}
	
	@Test
	public void outputJsonTest() {

		mocks.setSampleOutput(HelperStructures.output);
		
		assertArrayEquals(mocks.getSampleOutput(), service.extractData(1, "json"));
	}
	
	@Test
	public void outputXmlTest() {
	
		mocks.setSampleOutput(HelperStructures.output);
		
		assertArrayEquals(mocks.getSampleOutput(), service.extractData(1, "xml"));
	}
	
	@After
	public void tearDown() {
		service = null;
		mocks = null;
	}

}
