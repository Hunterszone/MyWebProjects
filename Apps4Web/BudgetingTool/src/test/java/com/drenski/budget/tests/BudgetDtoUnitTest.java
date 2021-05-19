package com.drenski.budget.tests;

import static org.junit.jupiter.api.Assertions.assertEquals;

import org.junit.FixMethodOrder;
import org.junit.Test;
import org.junit.runner.RunWith;
import org.junit.runners.MethodSorters;
import org.modelmapper.ModelMapper;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.test.context.junit4.SpringRunner;

import com.drenski.budget.dto.BudgetDto;
import com.drenski.budget.entity.Budget;

@RunWith(SpringRunner.class)
@SpringBootTest(classes = { TestConfiguration.class })
@FixMethodOrder(MethodSorters.NAME_ASCENDING)
public class BudgetDtoUnitTest {

	private ModelMapper modelMapper = new ModelMapper();

	@Test
	public void whenConvertBudgetEntityToBudgetDto_thenCorrect() {
		Budget budget = new Budget();
		budget.setId(1L);
		budget.setName("TestBudget");
		budget.setAmount(12345);

		BudgetDto budgetDto = modelMapper.map(budget, BudgetDto.class);
		assertEquals(budget.getId(), budgetDto.getId());
		assertEquals(budget.getName(), budgetDto.getName());
		assertEquals(budget.getAmount(), budgetDto.getAmount());
	}

	@Test
	public void whenConvertBudgetDtoToBudgetEntity_thenCorrect() {
		BudgetDto budgetDto = new BudgetDto();
		budgetDto.setId(1L);
		budgetDto.setName("TestBudget");
		budgetDto.setAmount(12345);

		Budget budget = modelMapper.map(budgetDto, Budget.class);
		assertEquals(budgetDto.getId(), budget.getId());
		assertEquals(budgetDto.getName(), budget.getName());
		assertEquals(budgetDto.getAmount(), budget.getAmount());
	}

}