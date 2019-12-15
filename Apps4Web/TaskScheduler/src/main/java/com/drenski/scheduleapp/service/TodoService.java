package com.drenski.scheduleapp.service;

import com.drenski.scheduleapp.model.DbConn;
import com.drenski.scheduleapp.model.Todo;
import org.springframework.stereotype.Service;

import java.sql.SQLException;
import java.util.ArrayList;
import java.util.Date;
import java.util.Iterator;
import java.util.List;

@Service
public class TodoService {
    public static List<Todo> todos = new ArrayList<>();
    private static int todoCount = 3;

    static{
        todos.add(new Todo(1, "root", "Learn Spring MVC", new Date(),
                false));
        todos.add(new Todo(2, "root", "Learn Struts", new Date(), false));
        todos.add(new Todo(3, "root", "Learn Hibernate", new Date(),
                false));
        try {
            DbConn.main(null);
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public List<Todo> retrieveTodos(String user) {
        List<Todo> filteredTodos = new ArrayList<Todo>();
        for (Todo todo : todos) {
            if (todo.getUser().equalsIgnoreCase(user)) {
                filteredTodos.add(todo);
            }
        }
        return filteredTodos;
    }
    
    public Todo retrieveTodo(int id) {
        for (Todo todo : todos) {
            if (todo.getId()==id) {
                return todo;
            }
        }
        return null;
    }

    public void updateTodo(Todo todo){
    	todos.remove(todo);
    	addTodo(todo.getUser(), todo.getTask(), todo.getTargetDate(), todo.getDone());
    }

    public void addTodo(String name, String desc, Date targetDate, boolean isDone) {
        todos.add(new Todo(++todoCount, name, desc, targetDate, isDone));
        try {
            DbConn.main(null);
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public void deleteTodo(int id) {
        Iterator<Todo> iterator = todos.iterator();
        while (iterator.hasNext()) {
            Todo todo = iterator.next();
            if (todo.getId() == id) {
                iterator.remove();
            }
        } try {
            DbConn.main(null);
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}