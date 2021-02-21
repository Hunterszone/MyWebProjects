package com.drenski.country.service;

import java.util.ArrayList;
import java.util.List;

import org.apache.log4j.Logger;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.drenski.country.entity.Country;
import com.drenski.country.repository.CountryRepository;

@Service
public class ReadCountryService {

	@Autowired
	private CountryRepository countryRepository;

	private static Logger log = Logger.getLogger(ReadCountryService.class.getName());

	public List<Country> findAll() {

		Iterable<Country> it = countryRepository.findAll();

		List<Country> countries = new ArrayList<Country>();
		it.forEach(e -> countries.add(e));

		return countries;
	}

	public void readById(String userId) {

		countryRepository.findById(userId);
	}

}
