package com.drenski.parking.init;

import org.apache.log4j.BasicConfigurator;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.boot.autoconfigure.domain.EntityScan;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.data.jpa.repository.config.EnableJpaRepositories;

@SpringBootApplication
@ComponentScan("com.drenski.parking.*")
@EntityScan("com.drenski.parking.*")
@EnableJpaRepositories("com.drenski.parking.*")
public class ParkingApplication {

	public static void main(String[] args) {

		BasicConfigurator.configure();
		
		SpringApplication.run(ParkingApplication.class, args);
	}

}
