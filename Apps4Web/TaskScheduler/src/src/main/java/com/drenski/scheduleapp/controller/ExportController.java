package com.drenski.scheduleapp.controller;

import com.drenski.scheduleapp.model.Todo;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.servlet.support.ServletUriComponentsBuilder;
import java.net.URI;
import java.util.List;

@RestController
@RequestMapping(value = "/api")
public class ExportController {

//    @Autowired
//    private TodoService todoService;

    @Autowired
    private TodoController todoController;
    private String name;

    @GetMapping(path="/", produces = "application/json")
    public List<Todo> getTodos(ModelMap model) {

        name = todoController.getLoggedInUserName(model);
        List<Todo> retrieved = todoController.service.retrieveTodos(name);
        model.put("todos", retrieved);
        return retrieved;
    }

    @PostMapping(path= "/", consumes = "application/json", produces = "application/json")
    public ResponseEntity<Object> addTodo(@RequestBody Todo todo, ModelMap model) {

        name = todoController.getLoggedInUserName(model);
        List<Todo> retrieved = todoController.service.retrieveTodos(name);
        model.put("todos", retrieved);

        Integer id = retrieved.size() + 1;
        todo.setId(id);

        todoController.service.addTodo(name, todo.getTask(), todo.getTargetDate(),
                todo.getDone());

        URI location = ServletUriComponentsBuilder.fromCurrentRequest()
                .path("/{id}")
                .buildAndExpand(todo.getId())
                .toUri();

        return ResponseEntity.created(location).build();
    }
}