package src.main.java.com.drenski.scheduleapp;

import static org.springframework.boot.SpringApplication.run;

import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
//@ComponentScan("com.drenski.scheduleapp")
public class TaskScheduler {

	public static void main(String[] args) {
		run(TaskScheduler.class, args);
	}
}
