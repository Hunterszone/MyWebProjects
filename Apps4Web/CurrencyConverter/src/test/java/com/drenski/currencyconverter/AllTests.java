package com.drenski.currencyconverter;

import org.junit.runner.RunWith;
import org.junit.runners.Suite;

@RunWith(Suite.class)
@Suite.SuiteClasses({ InputTest.class, OutputTest.class })

public class AllTests {
	public static Class<?>[] getClasses() {
		Class<?>[] allClasses = { InputTest.class, OutputTest.class };
		return allClasses;
	}
}