package com.drenski.budget.entity;

import java.util.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

import org.springframework.lang.NonNull;

@Entity(name = "BUDGET")
public class Budget {

	@Id
	@NonNull
	@GeneratedValue(strategy = GenerationType.AUTO)
//	@GeneratedValue(strategy = GenerationType.SEQUENCE, generator = "country_seq")
//	@GenericGenerator(name = "country_seq", strategy = "com.drenski.country.generator.StringSequenceGenerator", parameters = {
//			@Parameter(name = StringSequenceGenerator.INCREMENT_PARAM, value = "50"),
//			@Parameter(name = StringSequenceGenerator.VALUE_PREFIX_PARAMETER, value = "fz:country:"),
//			@Parameter(name = StringSequenceGenerator.NUMBER_FORMAT_PARAMETER, value = "%02d") })
	private Long id;

	@Column
	private String name;
	
	@Column
	private double amount;

	@Column
	private Date createdAt;

	@Column
	private Date updatedAt;

	public Budget() {
	}

	public Budget(String name) {
		this.name = name;
	}
	
	public Budget(double amount) {
		this.amount = amount;
	}
	
	public Budget(Long id, String name, double amount, Date createdAt, Date updatedAt) {
		this.id = id;
		this.name = name;
		this.amount = amount;
		this.createdAt = createdAt;
		this.updatedAt = updatedAt;
	}

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public double getAmount() {
		return amount;
	}

	public void setAmount(double amount) {
		this.amount = amount;
	}

	public Date getCreatedAt() {
		return createdAt;
	}

	public void setCreatedAt(Date createdAt) {
		this.createdAt = createdAt;
	}

	public Date getUpdatedAt() {
		return updatedAt;
	}

	public void setUpdatedAt(Date updatedAt) {
		this.updatedAt = updatedAt;
	}

}
