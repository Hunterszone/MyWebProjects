package com.drenski.country.init;

import javax.transaction.Transactional;

import org.apache.log4j.Logger;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.stereotype.Component;

import com.drenski.country.entities.Country;
import com.drenski.country.repositories.CountryRepository;

@Component
public class CLRunner implements CommandLineRunner {

    private static final Logger logger = Logger.getLogger(CLRunner.class.getName());

    @Autowired
    private CountryRepository countryRepository;

    @Override
    @Transactional
    public void run(String... args) throws Exception {

        logger.info("initializing countries");

        Country c1 = new Country("Germany", "GER");
        countryRepository.save(c1);

        Country c2 = new Country("Japan", "JPN");
        countryRepository.save(c2);

        Country c3 = new Country("Serbia", "SRB");
        countryRepository.save(c3);
    }
}