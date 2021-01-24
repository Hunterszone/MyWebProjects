package com.drenski.parking.service;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import org.apache.log4j.Logger;

import com.fasterxml.jackson.databind.JsonNode;
import com.fasterxml.jackson.databind.ObjectMapper;

public class JsonParserService {
	
	private static Logger log = Logger.getLogger(JsonParserService.class.getName());
	private static JsonParserService instance;

	private JsonParserService() {
	}

	public static JsonParserService getInstnce() {
		if (instance == null) {
			instance = new JsonParserService();
			return instance;
		}
		return instance;
	}

	public <T> List<T> parseJSONToType(String res, Class<T> cls) throws IOException {

		List<T> listType = new ArrayList<T>();
		try {
			JsonNode arrNode = new ObjectMapper().readTree(res).get("features");
			if (arrNode.isArray()) {
				for (JsonNode objNode : arrNode) {
					ObjectMapper o = new ObjectMapper();
//					o.setPropertyNamingStrategy(PropertyNamingStrategy.UPPER_CAMEL_CASE);
					T att = (T) o.readValue(objNode.toString(), cls);
					listType.add(att);
				}
			}
		} catch (Exception e) {
			log.debug("Unable to parse the response: " + e.getMessage());
			return listType;
		}
		return listType;
	}
	
	public <T> T parseJSONToSingleObject(String res, Class<T> cls) throws IOException {
		try {
				JsonNode node = new ObjectMapper().readTree(res).get("features");
				ObjectMapper o = new ObjectMapper();
//				o.setPropertyNamingStrategy(PropertyNamingStrategy.UPPER_CAMEL_CASE );
			  	T obj = (T) o.readValue(node.toString(), cls);
				
			  	return obj;
			  	
			} catch (Exception e) {
				log.debug("Unable to parse the response: " + e.getMessage());
				return null;
		}
	}
}
