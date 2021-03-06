package com.drenski.scheduleapp.init;

import static org.springframework.boot.SpringApplication.run;

import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.ComponentScan;

@SpringBootApplication
@ComponentScan("com.drenski.scheduleapp.*")
public class TaskScheduler {

	public static void main(String[] args) {
		run(TaskScheduler.class, args);
	}
}
