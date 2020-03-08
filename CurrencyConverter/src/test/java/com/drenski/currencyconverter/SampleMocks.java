package com.drenski.currencyconverter;

import com.drenski.currencyconverter.service.HelperStructures;

public class SampleMocks {

	private String sampleInput;
	private String sampleOutput;

	public String getSampleInput() {
		sampleInput = HelperStructures.endpoints.get(0);
		return sampleInput;
	}

	public String getSampleOutput() {
		sampleOutput = HelperStructures.outputs.get(0);
		return sampleOutput;
	}

}
