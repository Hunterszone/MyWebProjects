package com.drenski.scheduleapp;
import com.drenski.scheduleapp.model.Todo;
import org.springframework.security.config.annotation.authentication.builders.AuthenticationManagerBuilder;
import org.springframework.security.config.annotation.authentication.configurers.provisioning.UserDetailsManagerConfigurer;

import java.util.Date;

public class SampleMocks {

    private Todo sampleTodo;

    public Todo getSampleTodo() {
        sampleTodo = new Todo(44, "root", "cleaning", new Date(), true);
        return sampleTodo;
    }

}
