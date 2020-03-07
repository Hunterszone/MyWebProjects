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

import com.drenski.currencyconverter.handler.ApiHandler;

@Service
public class ConversionListApiService implements ApiHandler {

	/* https://currencylayer.com - service provider */
	private static final String TOKEN = "b860bbec1be4e73de0659ffbf932a996";
	private static final String API_URL = "http://api.currencylayer.com";

	@Override
	public String getAPIResponseConversionList(String date, String currency) {
		try {
			// Define endpoints
			String urlFromTo = API_URL + "/historical?access_key=" + TOKEN + "&date=" + date + "&currencies="
					+ currency.toUpperCase() + "&format=1";

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
		return date.toString() + " " + currency;
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
	public Object[] connAPIAndParseObjConversionList(String date, String currency)
			throws JSONException, IOException, ParseException {

		// calling gettingresponse method and initializing response object
		String response = getAPIResponseConversionList(date, currency);
		// calling method for parsing response in JSON object
		JSONObject resultDate = parsingJSONData(date.toString(), response);
		JSONObject resultCurrency = parsingJSONData(currency, response);
		if (resultDate != null && resultCurrency != null) {
			System.out.println("Data imported");
		} else {
			return new Object[] { date, currency };
		}
		return new Object[] { date, currency };
	}

	@Override
	public String[] extractConversionListData(Object date, Object currency) {
		JSONParser parser = new JSONParser();
		JSONObject json = null;
		try {
			String jsonRespBlock = getAPIResponseConversionList((String) date, (String) currency);
			json = (JSONObject) parser.parse(jsonRespBlock);
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

		date = json.get("date");
		currency = json.get("quotes");

		return new String[] { date.toString(), currency.toString() };
	}

	@Override
	public String getAPIResponseExchange(String currency, String source) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public Object[] connAPIAndParseObjExchange(String currency, String source)
			throws JSONException, IOException, ParseException {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public String[] extractExchangeData(Object currency, Object source) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public String getAPIResponseConversion(String source, String target, String amount) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public Object[] connAPIAndParseObjConversion(String source, String target, String amount)
			throws JSONException, IOException, ParseException {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public String[] extractConversionData(Object source, Object target, Object amount) {
		// TODO Auto-generated method stub
		return null;
	}

}