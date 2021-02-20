package com.drenski.country.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.drenski.country.entity.Country;
import com.drenski.country.repository.CountryRepository;

@Service
public class CreateCountryService {

	@Autowired
	private CountryRepository countryRepository;

	public Country createCountry(String name, String abbrev) {

		Country country = new Country(name, abbrev);
		
		return countryRepository.save(country);

	}

}
