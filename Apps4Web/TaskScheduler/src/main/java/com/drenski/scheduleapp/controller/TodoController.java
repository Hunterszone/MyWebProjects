package com.drenski.scheduleapp.controller;

import com.drenski.scheduleapp.model.Todo;
import com.drenski.scheduleapp.service.TodoService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.propertyeditors.CustomDateEditor;
import org.springframework.beans.propertyeditors.StringTrimmerEditor;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.WebDataBinder;
import org.springframework.web.bind.annotation.*;

import javax.validation.Valid;
import java.text.SimpleDateFormat;
import java.util.Date;

@Controller
public class TodoController {

	@Autowired
	TodoService service;

	@InitBinder
	public void initBinder(WebDataBinder binder) {
		// set date format
		SimpleDateFormat dateFormat = new SimpleDateFormat("dd/MM/yyyy");
		binder.registerCustomEditor(Date.class, new CustomDateEditor(
				dateFormat, false));
		// trim white spaces
		StringTrimmerEditor stringTrimmerEditor = new StringTrimmerEditor(true);
		binder.registerCustomEditor(String.class, stringTrimmerEditor);
	}
	
	@GetMapping("/list-todos")
	public String showTodos(ModelMap model) {
		String name = getLoggedInUserName(model);
		model.put("todos", service.retrieveTodos(name));
		return "list-todos";
	}

	private String getLoggedInUserName(ModelMap model) {
		Object principal = SecurityContextHolder.getContext()
				.getAuthentication().getPrincipal();
		
		if (principal instanceof UserDetails) {
			return ((UserDetails) principal).getUsername();
		}
		
		return principal.toString();
	}

	@GetMapping("/add-todo")
	public String showAddTodoPage(ModelMap model) {
		model.addAttribute("todo", new Todo(0, getLoggedInUserName(model),
				"New Task", new Date(), false));
		return "todo";
	}

	@GetMapping("/delete-todo")
	public String deleteTodo(@RequestParam int id) {

//		if(id==1)
//			throw new RuntimeException("Something went wrong");
		
		service.deleteTodo(id);
		return "redirect:/list-todos";
	}

	@GetMapping("/update-todo")
	public String showUpdateTodoPage(@RequestParam int id, ModelMap model) {
		Todo todo = service.retrieveTodo(id);
		model.put("todo", todo);
		return "todo";
	}

	@PostMapping("/update-todo")
	public String updateTodo(ModelMap model, @Valid Todo todo,
			BindingResult result) {

		if (result.hasErrors()) {
			return "todo";
		}

		todo.setUser(getLoggedInUserName(model));

		service.updateTodo(todo);

		return "redirect:/list-todos";
	}

	@PostMapping("/add-todo")
	public String addTodo(ModelMap model, @Valid Todo todo, BindingResult result) {

		if (result.hasErrors()) {
			return "todo";
		}

		service.addTodo(getLoggedInUserName(model), todo.getTask(), todo.getTargetDate(),
				todo.getDone());
		return "redirect:/list-todos";
	}
}
