package com.drenski.country.init;

import org.apache.log4j.BasicConfigurator;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.boot.autoconfigure.domain.EntityScan;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.data.jpa.repository.config.EnableJpaRepositories;

@SpringBootApplication
@ComponentScan("com.drenski.country.*")
@EntityScan("com.drenski.country.*")
@EnableJpaRepositories(basePackages = "com.drenski.country.*")
public class CountryApplication {

	public static void main(String[] args) {

		BasicConfigurator.configure();
		
		SpringApplication.run(CountryApplication.class, args);
	}

}
