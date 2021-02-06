package com.drenski.parking.tests;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Configuration;

import com.drenski.parking.services.ParkingService;

@Configuration
@ComponentScan(basePackages={"com.drenski.parking.*"})
public class TestConfiguration {

//	@Bean
//    public ParkingLevelService getParkingLevelService() {
//        return new ParkingLevelService();
//    }
}
