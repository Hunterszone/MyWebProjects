package com.drenski.gwmanager.init;

import static org.springframework.boot.SpringApplication.run;

import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.ComponentScan;

@SpringBootApplication
@ComponentScan("com.drenski.gwmanager.*")
public class GatewayManager {

	public static void main(String[] args) {
		run(GatewayManager.class, args);
	}
}
