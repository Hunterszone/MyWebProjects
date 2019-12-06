package com.drenski.scheduleapp;

import org.springframework.boot.autoconfigure.SpringBootApplication;

import static org.springframework.boot.SpringApplication.run;

@SpringBootApplication
//@ComponentScan("com.drenski.scheduleapp")
public class TaskScheduler {

	public static void main(String[] args) {
		run(TaskScheduler.class, args);
	}
}
