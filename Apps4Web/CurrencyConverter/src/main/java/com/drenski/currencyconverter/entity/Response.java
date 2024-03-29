package com.drenski.currencyconverter.entity;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name = "response")
public class Response {

	@Id
	@Column(name = "id")
	@GeneratedValue(strategy = GenerationType.AUTO)
	private int respId;
	
	@Column
	private String endpoint;
	@Column
	private String output;
	
	public int getRespId() {
		return respId;
	}

	public void setRespId(int respId) {
		this.respId = respId;
	}

	public String getEndpoint() {
		return endpoint;
	}

	public void setEndpoint(String endpoint) {
		this.endpoint = endpoint;
	}

	public String getOutput() {
		return output;
	}

	public void setOutput(String output) {
		this.output = output;
	}
	
	@Override
	public String toString() {
		return "Response [respId=" + respId + ", endpoint=" + endpoint + ", output=" + output + "]";
	}

}
