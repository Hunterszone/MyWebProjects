package com.drenski.currencyconverter.service;

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

@Service
public class ConversionApiService implements ApiHandler {

	/* https://currencylayer.com - service provider */
	private static final String TOKEN = "b860bbec1be4e73de0659ffbf932a996";
	private static final String API_URL = "http://api.currencylayer.com";

	@Override
	public String gettingResponseFromAPI(String from, String to, String amount) {
		try {
			// Define endpoints
			String urlFromTo = API_URL + "/convert?access_key=" + TOKEN + "&from=" + from.toUpperCase()
					+ "&to=" + to.toUpperCase() + "&amount=" +  amount.toUpperCase() + "&format=1";

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
//			int code = con.getResponseCode();
//			System.out.println("Returned HTTP status code: " + code);
			return sResponse;
		} catch (MalformedURLException ex) {
		} catch (UnknownHostException uhe) {
			System.out.println("No connection!");
		} catch (ProtocolException ex) {
		} catch (IOException ex) {
		}
		return from + " " + to + " " + amount;
	}

	@Override
	public JSONObject parsingJSONData(String currency, String response) throws ParseException {

		// parsing response in JSON object
		JSONParser parser = new JSONParser();
		JSONObject json = (JSONObject) parser.parse(response);
		JSONObject resultFrom = (JSONObject) json.get(currency.toUpperCase());
		return resultFrom;
	}

	@Override
	public Object[] connectToAPIAndParseValues(String from, String to, String amount)
			throws JSONException, IOException, ParseException {

		// calling gettingresponse method and initializing response object
		String response = gettingResponseFromAPI(from, to, amount);
		// calling method for parsing response in JSON object
		JSONObject resultFrom = parsingJSONData(from, response);
		JSONObject resultTo = parsingJSONData(to, response);
		JSONObject resultAmount = parsingJSONData(amount, response);
		if (resultFrom != null && resultTo != null && resultAmount != null) {
			System.out.println("Data imported");
		} else {
			return new Object[] { from.toLowerCase(), to.toLowerCase(), amount.toLowerCase(), 0, 0, 0, "NO DATA" };
		}
		return new Object[] { from.toLowerCase(), to.toLowerCase(), amount.toLowerCase(), 0, 0, 0, "NO DATA" };
	}

	@Override
	public String[] extractData(Object from, Object to, Object amount) {
		JSONParser parser = new JSONParser();
		JSONObject json = null;
		try {
			String jsonRespBlock = gettingResponseFromAPI((String) from, (String) to, (String) amount);
			json = (JSONObject) parser.parse(jsonRespBlock);
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		from = json.get("source");
		to = json.get("source");
		amount = json.get("quotes");

		return new String[] { from.toString(), to.toString(), amount.toString() };
	}

	@Override
	public String gettingResponseFromAPI(String currency, String source) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public Object[] connectToAPIAndParseValues(String currency, String source)
			throws JSONException, IOException, ParseException {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public String[] extractData(Object currency, Object source) {
		// TODO Auto-generated method stub
		return null;
	}
}
