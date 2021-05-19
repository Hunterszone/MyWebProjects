package com.drenski.budget.dto;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.TimeZone;

public class BudgetDto {

	private static final SimpleDateFormat dateFormat = new SimpleDateFormat("yyyy-MM-dd HH:mm");

	private Long id;

	private String name;

	private double amount;

	private String createdAt;

	private String updatedAt;
	
	public BudgetDto(Long id, String name, double amount, String createdAt, String updatedAt) {
		this.id = id;
		this.name = name;
		this.amount = amount;
		this.createdAt = createdAt;
		this.updatedAt = updatedAt;
	}

	public BudgetDto() {
		// TODO Auto-generated constructor stub
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

	public String getCreatedAt() {
		return createdAt;
	}

	public void setCreatedAt(String createdAt) {
		this.createdAt = createdAt;
	}

	public String getUpdatedAt() {
		return updatedAt;
	}

	public void setUpdatedAt(String updatedAt) {
		this.updatedAt = updatedAt;
	}

	public Date getCreationDateConverted(String timezone) throws ParseException {
		dateFormat.setTimeZone(TimeZone.getTimeZone(timezone));
		return new Date();
	}

	public void setCreationDate(Date date, String timezone) {
		dateFormat.setTimeZone(TimeZone.getTimeZone(timezone));
		this.createdAt = dateFormat.format(date);
	}
	
	public Date getUpdateDateConverted(String timezone) throws ParseException {
		dateFormat.setTimeZone(TimeZone.getTimeZone(timezone));
		return dateFormat.parse(this.getUpdatedAt());
	}

	public void setUpdateDate(Date date, String timezone) {
		dateFormat.setTimeZone(TimeZone.getTimeZone(timezone));
		this.updatedAt = dateFormat.format(date);
	}

	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		long temp;
		temp = Double.doubleToLongBits(amount);
		result = prime * result + (int) (temp ^ (temp >>> 32));
		result = prime * result + ((id == null) ? 0 : id.hashCode());
		result = prime * result + ((name == null) ? 0 : name.hashCode());
		return result;
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		BudgetDto other = (BudgetDto) obj;
		if (Double.doubleToLongBits(amount) != Double.doubleToLongBits(other.amount))
			return false;
		if (id == null) {
			if (other.id != null)
				return false;
		} else if (!id.equals(other.id))
			return false;
		if (name == null) {
			if (other.name != null)
				return false;
		} else if (!name.equals(other.name))
			return false;
		return true;
	}

	@Override
	public String toString() {
		return "BudgetDto [id=" + id + ", name=" + name + ", amount=" + amount + ", createdAt=" + createdAt
				+ ", updatedAt=" + updatedAt + "]";
	}

}
