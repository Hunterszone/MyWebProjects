package com.drenski.parking.init;

import org.apache.log4j.BasicConfigurator;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.ComponentScan;

@SpringBootApplication
@ComponentScan("com.drenski.parking.*")
public class ParkingApplication {

	public static void main(String[] args) {

		BasicConfigurator.configure();

		SpringApplication.run(ParkingApplication.class, args);
	}

}
