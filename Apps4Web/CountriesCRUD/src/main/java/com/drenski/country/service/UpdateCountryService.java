package com.drenski.country.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.drenski.country.entity.Country;
import com.drenski.country.repository.CountryRepository;

@Service
public class UpdateCountryService {

	@Autowired
	private CountryRepository countryRepository;

	public Country updateCountryById(String id, Country newCountry) {

		return countryRepository.findById(id).map(country -> {
			country.setName(newCountry.getName());
			country.setAbbreviation(newCountry.getAbbreviation());
			return countryRepository.save(country);
		}).orElseGet(() -> {
			newCountry.setId(id);
			return countryRepository.save(newCountry);
		});

	}

}
