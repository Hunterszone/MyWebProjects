package com.drenski.currencyconverter.dao;

import org.springframework.data.repository.CrudRepository;

import com.drenski.currencyconverter.entity.Response;

public interface IResponseDao extends CrudRepository<Response, Long> {

}

