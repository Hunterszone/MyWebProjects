package com.drenski.budget.init;

import java.util.Date;

import javax.transaction.Transactional;

import org.apache.log4j.Logger;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.stereotype.Component;

import com.drenski.budget.dao.BaseDao;
import com.drenski.budget.entity.Budget;

@Component
public class BudgetInitializer implements CommandLineRunner {

    private static final Logger logger = Logger.getLogger(BudgetInitializer.class.getName());

    @Autowired
    private BaseDao budgetDao;

    @Override
    @Transactional
    public void run(String... args) throws Exception {

        logger.info("initializing budgets");

        Budget b1 = new Budget(1L, "FoodBudget", 12345, new Date(), new Date());
        budgetDao.save(b1);

        Budget b2 = new Budget(2L, "ClothesBudget", 54221, new Date(), new Date());
        budgetDao.save(b2);

        Budget b3 = new Budget(3L, "OtherBudget", 4543, new Date(), new Date());
        budgetDao.save(b3);
    }
}