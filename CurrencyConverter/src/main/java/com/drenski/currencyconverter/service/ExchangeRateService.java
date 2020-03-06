package com.drenski.currencyconverter.service;

import java.io.BufferedReader;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.ProtocolException;
import java.net.URL;
import java.net.UnknownHostException;
import java.nio.charset.StandardCharsets;
import java.util.Date;

import javax.swing.filechooser.FileSystemView;

import org.json.JSONException;
import org.json.simple.JSONObject;
import org.json.simple.parser.JSONParser;
import org.json.simple.parser.ParseException;
import org.springframework.stereotype.Service;

@Service
public class ExchangeRateService {

	/* https://currencylayer.com - service provider */
	private static final String TOKEN = "b860bbec1be4e73de0659ffbf932a996";
	private static final String API_URL = "http://api.currencylayer.com";

	String gettingResponseFromAPI(String currency, String source) {
		try {
			// Define endpoints and log the output
			String urlFromTo = API_URL + "/live?access_key=" + TOKEN + "&currencies=" + currency.toUpperCase()
					+ "&source=" + source.toUpperCase() + "&format=1";
			CustomLogger log = new CustomLogger();
			log.addToLog("Retrieving symbol for " + currency.toUpperCase() + " and " + source.toUpperCase()
					+ " from API: " + urlFromTo + "\n");

			// GET response from API
			URL obj = new URL(urlFromTo);
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
//			int code = con.getResponseCode();
//			System.out.println("Returned HTTP status code: " + code);
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
		return currency + " " + source;
	}

	private JSONObject parsingJSONCurrency(String currency, String response) throws ParseException {

		// parsing response in JSON object
		JSONParser parser = new JSONParser();
		JSONObject json = (JSONObject) parser.parse(response);
		JSONObject resultFrom = (JSONObject) json.get(currency.toUpperCase());
		return resultFrom;
	}

	private JSONObject parsingJSONSource(String source, String response) throws ParseException {

		// parsing response in JSON object
		JSONParser parser = new JSONParser();
		JSONObject json = (JSONObject) parser.parse(response);
		JSONObject resultFrom = (JSONObject) json.get(source.toUpperCase());
		return resultFrom;
	}

	public Object[] connectToAPIAndParseValues(String currency, String source)
			throws JSONException, IOException, ParseException {

		CustomLogger log = new CustomLogger();
		log.addToLog("Getting values for: " + currency.toUpperCase() + " and " + "\n");
		// calling gettingresponse method and initializing response object
		String response = gettingResponseFromAPI(currency, source);
		// calling method for parsing response in JSON object
		JSONObject resultCurrency = parsingJSONCurrency(currency, response);
		JSONObject resultSource = parsingJSONCurrency(source, response);
		if (resultCurrency != null && resultSource != null) {
			log.addToLog("Adding: " + currency.toUpperCase());
			log.addToLog("Adding: " + source.toUpperCase());
			System.out.println("Data imported");
		} else {
			log.addToLog(System.getProperty("line.separator"));
			return new Object[] { currency.toUpperCase(), source.toUpperCase(), 0, 0, 0, "NO DATA" };
		}
		// log.addToLog(System.getProperty("line.separator"));
		return new Object[] { currency.toUpperCase(), source.toUpperCase(), 0, 0, 0, "NO DATA" };
	}

	public String[] extractExchangeRates(Object currency, Object source) {
		JSONParser parser = new JSONParser();
		JSONObject json = null;
		try {
			String jsonRespBlock = gettingResponseFromAPI((String) currency, (String) source);
			json = (JSONObject) parser.parse(jsonRespBlock);
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		source = json.get("source");
		currency = json.get("quotes");

		CustomLogger log = new CustomLogger();

		log.addToLog("\n");
		log.addToLog("---------------------EXCHANGE RATES------------------------");
		log.addToLog(" source for exchanging " + currency + " is: " + source);
		return new String[] { currency.toString(), source.toString() };
	}
}

//Helper logger class

class CustomLogger {

	private static StringBuilder sb = new StringBuilder();

	void addToLog(String parameter) {
		long currentDateTime = System.currentTimeMillis();
		Date currentDate = new Date(currentDateTime);
		sb.append(currentDate).append("\n").append(parameter).append(System.getProperty("line.separator"));
	}

	void writeLogToDisk(String fileName) {
		try {
			String desktopPath = FileSystemView.getFileSystemView().getHomeDirectory().toString();
			FileOutputStream out = new FileOutputStream(desktopPath + fileName);
			OutputStreamWriter w = new OutputStreamWriter(out, StandardCharsets.UTF_8);
			w.append(sb);
			w.flush();
			w.close();
		} catch (IOException ex) {
			System.out.println("Caught" + ex);
		}
	}
}
