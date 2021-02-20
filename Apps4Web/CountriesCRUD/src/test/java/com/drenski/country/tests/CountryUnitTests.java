package com.drenski.country.tests;

import static org.assertj.core.api.Assertions.assertThat;
import static org.junit.Assert.assertEquals;

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
	public void testACountriesSize() {

		List<Country> countries = (List<Country>) countryRepository.findAll();

        assertThat(countries.size()).isEqualTo(3);  
	}
	
	@Test
	public void testBMatchingCountry() {

		Country country = new Country();
		country.setName("Germany");
		country.setAbbreviation("GER");

		List<Country> countries = (List<Country>) countryRepository.findAll();

	    assertThat(countries.get(0)).isEqualTo(country);
	}
	
	@Test
	public void testCIncrement() {
		Country country = new Country();

		country.setName("Senegal");
		country.setAbbreviation("SEN");
		countryRepository.save(country);

        assertEquals(4, countryRepository.count());
	}
	
	@Test
	public void testDecrement() {

		System.out.println("Country is: " + countryRepository.findById((long) 1));
		countryRepository.deleteById((long) 1);

        assertEquals(3, countryRepository.count());
	}

}