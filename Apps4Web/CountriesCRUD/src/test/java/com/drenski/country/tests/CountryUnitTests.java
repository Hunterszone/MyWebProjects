package com.drenski.country.tests;

import static org.assertj.core.api.Assertions.assertThat;

import java.util.List;

import org.junit.FixMethodOrder;
import org.junit.Test;
import org.junit.runner.RunWith;
import org.junit.runners.MethodSorters;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.test.context.junit4.SpringRunner;

import com.drenski.country.entity.Country;
import com.drenski.country.repository.CountryRepository;

@RunWith(SpringRunner.class)
@SpringBootTest(classes = {TestConfiguration.class})
@FixMethodOrder(MethodSorters.NAME_ASCENDING)
public class CountryUnitTests {

	@Autowired
	private CountryRepository countryRepository;

	@Test
	public void testA_CountriesSize() {

		List<Country> countries = (List<Country>) countryRepository.findAll();

        assertThat(countries.size()).isEqualTo(countryRepository.count());  
	}
	
	@Test
	public void testB_AddCountry() {
	
		Country country = new Country();

		country.setName("Senegal");
		country.setAbbreviation("SEN");
		countryRepository.save(country);

		List<Country> countries = (List<Country>) countryRepository.findAll();
		
		assertThat(countries.size()).isEqualTo(countryRepository.count());
	}
	
	@Test
	public void testC_UpdateCountry() {
		
		Country newCountry = new Country();

		newCountry.setName("Canada");
		newCountry.setAbbreviation("CAN");
		
		List<Country> oldCountries = (List<Country>) countryRepository.findAll();

		countryRepository.findById("fz:country:02").map(country -> {
			country.setName(newCountry.getName());
			country.setAbbreviation(newCountry.getAbbreviation());
			return countryRepository.save(country);
		}).orElseGet(() -> {
			newCountry.setId("fz:country:05");
			return countryRepository.save(newCountry);
		});
		
		List<Country> newCountries = (List<Country>) countryRepository.findAll();
		
		for(Country cOld : oldCountries) {
			for(Country cNew : newCountries) {
				assertThat(cOld.getId().equals(cNew.getId()));							
			}
		}
	}
	
	@Test
	public void testD_DeleteCountry() {

		countryRepository.deleteById("fz:country:01");

		List<Country> countries = (List<Country>) countryRepository.findAll();

		assertThat(countries.size()).isEqualTo(countryRepository.count());
	}

}