package com.drenski.budget.controller;

import java.text.ParseException;
import java.time.Instant;
import java.time.ZoneId;
import java.time.ZonedDateTime;
import java.time.format.DateTimeFormatter;
import java.util.Date;
import java.util.List;
import java.util.stream.Collectors;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.MediaType;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.ResponseStatus;
import org.springframework.web.bind.annotation.RestController;

import com.drenski.budget.dto.BudgetDto;
import com.drenski.budget.entity.Budget;
import com.drenski.budget.service.BudgetServiceImpl;

@RestController
@RequestMapping(path = "/", produces = MediaType.APPLICATION_JSON_VALUE)
class BudgetRestController {

    @Autowired
    private BudgetServiceImpl budgetService;

//    @Autowired
//    private ModelMapper modelMapper;

    @GetMapping("/budgets")
    @ResponseBody
    public List<BudgetDto> getSubBudgets() {
        List<Budget> subBudgets = budgetService.getBudgetsList();
        return subBudgets.stream()
          .map(this::convertToDto)
          .collect(Collectors.toList());
    }

    @GetMapping("/budgets/{id}")
    @ResponseBody
    public BudgetDto getBudget(@PathVariable("id") Long id) {
        return convertToDto(budgetService.getBudgetById(id).orElse(null));
    }

    @PutMapping("/budgets/{id}")
    @ResponseStatus(HttpStatus.OK)
    public void updateBudget(@RequestBody BudgetDto budgetDto, @PathVariable Long id) throws ParseException {
        Budget budget = convertToEntity(budgetDto);
        budgetService.updateBudget(id, budget);
    }
    
    @PostMapping("/budgets")
    @ResponseStatus(HttpStatus.CREATED)
    @ResponseBody
    public BudgetDto createBudget(@RequestBody BudgetDto budgetDto) throws ParseException {
    	Budget budget = convertToEntity(budgetDto);
    	Budget budgetCreated = budgetService.createBudget(budget);
        return convertToDto(budgetCreated);
    }
    
    @DeleteMapping("/budgets/{id}")
    @ResponseStatus(HttpStatus.OK)
    public void deleteBudget(BudgetDto budgetDto) throws ParseException {
        Budget budget = convertToEntity(budgetDto);
        budgetService.removeBudget(budget);
    }

    private BudgetDto convertToDto(Budget budget) {
    	BudgetDto budgetDto = new BudgetDto(budget.getId(), budget.getName(), budget.getAmount(), new String("2021-05-16 14:14:53.144"), new String("2021-05-16 14:14:53.144"));//modelMapper.map(budget, BudgetDto.class);
    	budgetDto.setCreationDate(budget.getCreatedAt(), getTimezone());
        return budgetDto;
    }
    
    private Budget convertToEntity(BudgetDto budgetDto) throws ParseException {
    	Budget budget = new Budget(budgetDto.getId(), budgetDto.getName(), budgetDto.getAmount(), new Date(), new Date());//modelMapper.map(budgetDto, Budget.class);
    	budget.setCreatedAt(budgetDto.getCreationDateConverted(getTimezone()));
     
        if (budgetDto.getId() != null) {
        	Budget oldBudget = budgetService.getBudgetById(budgetDto.getId()).orElse(null);
        	budget.setName(oldBudget.getName());
        	budget.setAmount(oldBudget.getAmount());
        }
        return budget;
    }
    
    private String getTimezone() {
    	Instant nowUtc = Instant.now();
    	ZoneId berlin = ZoneId.of("Europe/Berlin");
    	ZonedDateTime nowBerlin = ZonedDateTime.ofInstant(nowUtc, berlin);
    	DateTimeFormatter formatter = DateTimeFormatter.ofPattern("yyyy-MM-dd HH:mm");
    	String formattedString = nowBerlin.format(formatter);
    	
    	return formattedString;
    }
}