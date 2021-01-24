package com.drenski.parking.utils;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class HelperStructures {

	public static List<String> endpoints = new ArrayList<>();
	public static List<String> outputs = new ArrayList<>();
	public static Map<String, String> endpointsAndOutputs = new HashMap<>();

	public static boolean isNullOrEmpty(String param) { 
	    return param == null || param.trim().length() == 0;
	}

}
