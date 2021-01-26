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
import com.drenski.parking.services.ParkingLevelService;

@RunWith( SpringJUnit4ClassRunner.class )
@ContextConfiguration(classes = { TestConfiguration.class }, locations = {"classpath:/beans.xml"}, loader = AnnotationConfigContextLoader.class)
@SpringBootTest(classes = {ParkingLevel.class})
@WebAppConfiguration
@ExtendWith(SpringExtension.class)
public class ParkingServiceUnitTest {

    @Autowired
    private ParkingLevelService parkingLevelService;
    
	@Test
	public void saveParkingLevelDetails() {
		ParkingLevel parkingLevel = parkingLevelService.save();

		Assert.assertEquals(parkingLevel.getLevel_num(), 3);
	}
	
	@Test
	public void updateParkingLevelDetails() {
		ParkingLevel parkingLevel = parkingLevelService.update();

		Assert.assertEquals(parkingLevel.getLevel_num(), 5);
	}
}