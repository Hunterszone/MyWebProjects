package com.drenski.budget.dao;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.drenski.budget.entity.Budget;

@Repository
public interface BaseDao extends JpaRepository<Budget, Long> {

}
