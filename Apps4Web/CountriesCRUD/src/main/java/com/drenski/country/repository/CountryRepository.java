package com.drenski.country.repository;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import com.drenski.country.entity.Country;

@Repository
public interface CountryRepository extends CrudRepository<Country, Long> {

}
