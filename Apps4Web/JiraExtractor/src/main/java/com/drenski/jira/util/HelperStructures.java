package com.drenski.jira.util;

public class HelperStructures {

	public static String[] output = new String[7]; // the number of parameters is known

	public static boolean isNullOrEmpty(String[] param) { 
	    return param == null || param.length == 0;
	}

}
