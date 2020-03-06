package com.drenski.currencyconverter.service;

import java.io.IOException;

import org.json.JSONException;
import org.json.simple.JSONObject;
import org.json.simple.parser.ParseException;

public interface ApiHandler extends GettingResponseHandler, ParsingJsonHandler, ConnectToApiHandler, ExtractionHandler {

}
