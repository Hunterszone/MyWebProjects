package com.drenski.parking.utils;

import java.io.IOException;
import java.util.List;

import org.apache.log4j.Logger;

import com.fasterxml.jackson.core.JsonParser;
import com.fasterxml.jackson.databind.BeanProperty;
import com.fasterxml.jackson.databind.DeserializationContext;
import com.fasterxml.jackson.databind.JavaType;
import com.fasterxml.jackson.databind.JsonDeserializer;
import com.fasterxml.jackson.databind.JsonNode;
import com.fasterxml.jackson.databind.ObjectMapper;
import com.fasterxml.jackson.databind.deser.ContextualDeserializer;

public class InnerListDeserializer extends JsonDeserializer<List<?>> implements ContextualDeserializer {

	private static Logger log = Logger.getLogger(InnerListDeserializer.class.getName());
	private final JavaType propertyType;

	public InnerListDeserializer() {
		this(null);
	}

	public InnerListDeserializer(JavaType propertyType) {
		this.propertyType = propertyType;
	}

	@Override
	public List<?> deserialize(JsonParser p, DeserializationContext context) throws IOException {
		
		try {
			ObjectMapper mapper = new ObjectMapper();
			JsonNode actualObj = (JsonNode) mapper.readTree(p).get("properties");
			if(actualObj == null) {
				return null;
			}
			List<?> list  = mapper.readValue(actualObj.toString(), propertyType);
			
			return list;
		} catch (Exception e) {
			log.debug("Unable to get inner list from object: " + propertyType + " " + e.getMessage());

			return null;
		}
		
	}

	@Override
	public JsonDeserializer<?> createContextual(DeserializationContext context, BeanProperty property) {
		return new InnerListDeserializer(property.getType());
	}

}
