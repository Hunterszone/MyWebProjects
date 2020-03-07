package com.drenski.currencyconverter.service;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.ProtocolException;
import java.net.URL;
import java.net.UnknownHostException;

import org.json.simple.JSONObject;
import org.json.simple.parser.JSONParser;
import org.json.simple.parser.ParseException;
import org.springframework.stereotype.Service;

import com.drenski.currencyconverter.handler.ApiHandler;

@Service
public class ConversionApiService implements ApiHandler {

	/* https://currencylayer.com - service provider */
	private static final String TOKEN = "b860bbec1be4e73de0659ffbf932a996";
	private static final String API_URL = "http://api.currencylayer.com";

	@Override
	public String getAPIResponseConversion(String source, String target, String amount) {
		try {
			// Define endpoints
			String urlFromTo = API_URL + "/convert?access_key=" + TOKEN + "&from=" + source.toUpperCase() + "&to="
					+ target.toUpperCase() + "&amount=" + amount.toUpperCase() + "&format=1";

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
		return source + " " + target + " " + amount;
	}

	@Override
	public String[] extractConversionData(Object source, Object target, Object amount) {
		JSONParser parser = new JSONParser();
		JSONObject json = null;
		try {
			String jsonRespBlock = getAPIResponseConversion((String) source, (String) target, (String) amount);
			json = (JSONObject) parser.parse(jsonRespBlock);
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		source = json.get("source");
		target = json.get("source");
		amount = json.get("quotes");

		return new String[] { source.toString(), target.toString(), amount.toString() };
	}

	@Override
	public String getAPIResponseExchange(String currency, String source) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public String[] extractExchangeData(Object currency, Object source) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public String getAPIResponseConversionList(String date, String currency) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public String[] extractConversionListData(Object date, Object currency) {
		// TODO Auto-generated method stub
		return null;
	}
}
