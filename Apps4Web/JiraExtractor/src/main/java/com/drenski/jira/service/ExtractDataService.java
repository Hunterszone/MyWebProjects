package com.drenski.jira.service;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.ProtocolException;
import java.net.URL;
import java.net.UnknownHostException;

import org.json.JSONException;
import org.json.simple.JSONObject;
import org.json.simple.parser.JSONParser;
import org.json.simple.parser.ParseException;
import org.springframework.stereotype.Service;

import com.drenski.jira.util.*;

@Service
public class ExtractDataService {

	private static final String TICKET_ENDPOINT = "https://jira.atlassian.com/rest/api/2/issuetype/";

	String gettingResponseFromAPI(Integer id) {
		try {
			// Define endpoint and log the output
			String allIssues = TICKET_ENDPOINT + id;
			CustomLogger log = new CustomLogger();
			log.addToLog("Retrieving issues from: " + allIssues);

			// GET response from API
			URL obj = new URL(allIssues);
			HttpURLConnection con = (HttpURLConnection) obj.openConnection();
			con.setRequestMethod("GET");
			con.connect();
			BufferedReader in = new BufferedReader(new InputStreamReader(con.getInputStream()));
			String inputLine;
			StringBuffer response = new StringBuffer();
			while ((inputLine = in.readLine()) != null) {
				response.append(inputLine);
			}
			in.close();
			String sResponse = response.toString();
			log.addToLog("JSON response from server: " + response.toString());
			return sResponse;
		} catch (MalformedURLException ex) {
			CustomLogger log = new CustomLogger();
			log.addToLog("Exception caught: " + ex);
		} catch (UnknownHostException uhe) {
			System.out.println("No connection!");
			CustomLogger log = new CustomLogger();
			log.addToLog("Exception caught: " + uhe);
		} catch (ProtocolException ex) {
			CustomLogger log = new CustomLogger();
			log.addToLog("Exception caught: " + ex);
		} catch (IOException ex) {
			CustomLogger log = new CustomLogger();
			log.addToLog("Exception caught: " + ex);
		}
		return String.valueOf(id);
	}

	public String[] extractData(Object id, String writerType) {
		JSONParser parser = new JSONParser();
		JSONObject json = null;
		String jsonRespBlock = null;
		try {
			jsonRespBlock = gettingResponseFromAPI((Integer) id);
			json = (JSONObject) parser.parse(jsonRespBlock);
		} catch (ParseException e) {
			e.printStackTrace();
		}

		id = json.get("id");
		Object self = json.get("self");
		Object description = json.get("description");
		Object iconUrl = json.get("iconUrl");
		Object name = json.get("name");
		Object subtask = json.get("subtask");
		Object avatarId = json.get("avatarId");		

		String[] params = new String[7];
		params[0] = id.toString();
		params[1] = self.toString();
		params[2] = description.toString();
		params[3] = iconUrl.toString();
		params[4] = name.toString();
		params[5] = subtask.toString();
		params[6] = avatarId.toString();
		
		if(writerType.equalsIgnoreCase("xml")) {			
			XmlWriter.writeXmlObj(params);
		}
		if(writerType.equalsIgnoreCase("json")) {			
			JsonWriter.writeJsonObj(params);
		}
		
		for (int i = 0; i < params.length; i++) {
			HelperStructures.outputs[i] = params[i];
			System.out.println("Parameter: " + HelperStructures.outputs[i]);
		}
		
		return params;
	}
}