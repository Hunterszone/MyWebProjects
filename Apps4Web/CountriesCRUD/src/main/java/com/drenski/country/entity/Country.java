package com.drenski.country.entity;

import java.time.LocalDateTime;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

import org.hibernate.annotations.GenericGenerator;
import org.hibernate.annotations.Parameter;

import com.drenski.country.generator.StringSequenceGenerator;

@Entity(name = "COUNTRY")
public class Country {

	@Id
	@GeneratedValue(strategy = GenerationType.SEQUENCE, generator = "country_seq")
	@GenericGenerator(name = "country_seq", strategy = "com.drenski.country.generator.StringSequenceGenerator", parameters = {
			@Parameter(name = StringSequenceGenerator.INCREMENT_PARAM, value = "50"),
			@Parameter(name = StringSequenceGenerator.VALUE_PREFIX_PARAMETER, value = "fz:country:"),
			@Parameter(name = StringSequenceGenerator.NUMBER_FORMAT_PARAMETER, value = "%02d") })
	private String id;

	@Column
	private String abbreviation;

	@Column
	private String name;

	@Column
	private LocalDateTime createdAt;

	@Column
	private LocalDateTime updatedAt;

	public Country() {
	}

	public Country(String name, String abbreviation) {
		this.name = name;
		this.abbreviation = abbreviation;
	}

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getAbbreviation() {
		return abbreviation;
	}

	public void setAbbreviation(String abbreviation) {
		this.abbreviation = abbreviation;
	}

	public LocalDateTime getCreatedAt() {
		return createdAt;
	}

	public void setCreatedAt(LocalDateTime createdAt) {
		this.createdAt = createdAt;
	}

	public LocalDateTime getUpdatedAt() {
		return updatedAt;
	}

	public void setUpdatedAt(LocalDateTime updatedAt) {
		this.updatedAt = updatedAt;
	}

}
