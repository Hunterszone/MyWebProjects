package com.drenski.budget.service;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.drenski.budget.dao.BaseDao;
import com.drenski.budget.entity.Budget;

interface BudgetService {
	Budget createBudget(Budget budget);
	Optional<Budget> getBudgetById(Long id);
	Budget updateBudget(Long id, Budget budget);
	void removeBudget(Budget budget);
	List<Budget> getBudgetsList();
}

@Service
public class BudgetServiceImpl implements BudgetService {

	@Autowired
	private BaseDao budgetDao;

	@Override
	public Budget createBudget(Budget budget) {
		return budgetDao.save(budget);
	}

	@Override
	public Optional<Budget> getBudgetById(Long id) {
		return budgetDao.findById(id);
	}
	
	@Override
	public Budget updateBudget(Long id, Budget newBudget) {
		return budgetDao.findById(id).map(budget -> {
			budget.setName(newBudget.getName());
			budget.setAmount(newBudget.getAmount());
			return budgetDao.save(budget);
		}).orElseGet(() -> {
			newBudget.setId(id);
			return budgetDao.save(newBudget);
		});
	}
	
	@Override
	public void removeBudget(Budget budget) {
		budgetDao.delete(budget);
	}

	@Override
	public List<Budget> getBudgetsList() {
		return budgetDao.findAll();
	}

}
