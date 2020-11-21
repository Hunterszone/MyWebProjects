package com.drenski.currencyconverter;

import org.junit.runner.RunWith;
import org.junit.runners.Suite;

@RunWith(Suite.class)
@Suite.SuiteClasses({ InputTests.class, OutputTests.class })

public class AllTests {
	public static Class<?>[] getClasses() {
		Class<?>[] allClasses = { InputTests.class, OutputTests.class };
		return allClasses;
	}
}