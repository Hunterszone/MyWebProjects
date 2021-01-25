package com.drenski.parking.tests;

import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Configuration;

@Configuration
@ComponentScan(basePackages={"com.drenski.parking.*"})
public class TestConfiguration {

//	@Bean
//    public ParkingLevelService getParkingLevelService() {
//        return new ParkingLevelService();
//    }
}
