package com.drenski.budget.init;

import org.apache.log4j.BasicConfigurator;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.boot.autoconfigure.domain.EntityScan;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.data.jpa.repository.config.EnableJpaRepositories;

@SpringBootApplication
@ComponentScan("com.drenski.budget.*")
@EntityScan("com.drenski.budget.*")
@EnableJpaRepositories(basePackages = "com.drenski.budget.*")
public class BudgetApplication {

	public static void main(String[] args) {

		BasicConfigurator.configure();
		
		SpringApplication.run(BudgetApplication.class, args);
	}

}
