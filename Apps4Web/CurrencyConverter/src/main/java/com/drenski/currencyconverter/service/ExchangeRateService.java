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
public class ExchangeRateService implements ApiHandler {

	/* https://currencylayer.com - service provider */
	private static final String TOKEN = "b860bbec1be4e73de0659ffbf932a996";
	private static final String API_URL = "http://api.currencylayer.com";

	@Override
	public String getAPIResponseExchange(String source, String target) {
		try {
			// Define endpoints
			String urlFromTo = API_URL + "/live?access_key=" + TOKEN + "&currencies=" + target.toUpperCase()
					+ "&source=" + source.toUpperCase() + "&format=1";

			HelperStructures.endpoints.add(urlFromTo);

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
			return sResponse;
		} catch (MalformedURLException ex) {
		} catch (UnknownHostException uhe) {
			System.out.println("No connection!");
		} catch (ProtocolException ex) {
		} catch (IOException ex) {
		}
		return target + " " + source;
	}

	@Override
	public String[] extractExchangeData(Object source, Object target) {
		JSONParser parser = new JSONParser();
		JSONObject json = null;
		String jsonRespBlock = "";
		try {
			jsonRespBlock = getAPIResponseExchange((String) source, (String) target);
			json = (JSONObject) parser.parse(jsonRespBlock);
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		source = json.get("source");
		target = json.get("quotes");

		HelperStructures.outputs.add(jsonRespBlock);
		HelperStructures.endpointsAndOutputs.put(HelperStructures.endpoints.get(0), HelperStructures.outputs.get(0));

		return new String[] { source.toString(), target.toString() };
	}

	@Override
	public String getAPIResponseConversion(String from, String to, String amount) {
		// TODO Auto-generated method stub
		return null;
	}

	@Override
	public String[] extractConversionData(Object from, Object to, Object amount) {
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
