package com.drenski.country.repositories;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import com.drenski.country.entities.Country;

@Repository
public interface CountryRepository extends CrudRepository<Country, Long> {

}
