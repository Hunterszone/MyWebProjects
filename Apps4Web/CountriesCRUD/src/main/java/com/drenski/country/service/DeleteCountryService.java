package com.drenski.country.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.drenski.country.repository.CountryRepository;

@Service
public class DeleteCountryService {

	@Autowired
	private CountryRepository countryRepository;

	public void deleteById(Long userId) {

		countryRepository.deleteById(userId);
	}
}
