package com.drenski.parking.tests;

import org.junit.Assert;
import org.junit.Test;
import org.springframework.boot.test.autoconfigure.orm.jpa.DataJpaTest;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.context.annotation.Import;

import com.drenski.parking.models.ParkingLevel;
import com.drenski.parking.services.ParkingLevelService;

@DataJpaTest
@SpringBootTest
public class ParkingServiceUnitTest {

//    @Autowired
//    private ParkingLevelService parkingLevelService;
    
	@Configuration
	@Import(TestConfiguration.class) // the actual configuration
	public static class TestConfig {
		@Bean
		public static ParkingLevelService myService() {
			return new ParkingLevelService();
		}
	}

	@Test
	public void saveParkingLevelDetails() {
		ParkingLevel parkingLevel = ParkingServiceUnitTest.TestConfig.myService().save();

		Assert.assertEquals(parkingLevel.getLevel_num(), 3);
	}
}