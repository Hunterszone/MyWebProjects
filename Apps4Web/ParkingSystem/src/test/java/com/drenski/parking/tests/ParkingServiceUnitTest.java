package com.drenski.parking.tests;

import org.junit.Assert;
import org.junit.Test;
import org.junit.jupiter.api.extension.ExtendWith;
import org.junit.runner.RunWith;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.test.context.ContextConfiguration;
import org.springframework.test.context.junit.jupiter.SpringExtension;
import org.springframework.test.context.junit4.SpringJUnit4ClassRunner;
import org.springframework.test.context.support.AnnotationConfigContextLoader;
import org.springframework.test.context.web.WebAppConfiguration;

import com.drenski.parking.models.ParkingLevel;
import com.drenski.parking.models.ParkingProperties;
import com.drenski.parking.services.ParkingService;

@RunWith( SpringJUnit4ClassRunner.class )
@ContextConfiguration(classes = { TestConfiguration.class }, locations = {"classpath:/beans.xml"}, loader = AnnotationConfigContextLoader.class)
@SpringBootTest(classes = {ParkingLevel.class})
@WebAppConfiguration
@ExtendWith(SpringExtension.class)
public class ParkingServiceUnitTest {

    @Autowired
    private ParkingService parkingService;
    
	@Test
	public void saveParkingDetails() {
		ParkingProperties parking = parkingService.save();

		Assert.assertEquals(parking.getNumOfLevels(), 3);
	}
	
	@Test
	public void updateParkingLevelDetails() {
		ParkingProperties parking = parkingService.update();

		Assert.assertEquals(parking.getNumOfLevels(), 5);
	}
}