package com.drenski.country.entity;

import java.io.Serializable;

public class CountryId implements Serializable {

	private static final long serialVersionUID = 1L;

	private int idFromX;
	
	private int idFromY;
	
	private int idFromZ;
	
	private String abbreviation;
	
	public CountryId() {}
	
	public CountryId(int idFromX, int idFromY, int idFromZ, String abbreviation) {
		this.idFromX = idFromX;
		this.idFromY = idFromY;
		this.idFromZ = idFromZ;
		this.abbreviation = abbreviation;
	}

	public int getIdFromX() {
		return idFromX;
	}

	public void setIdFromX(int idFromX) {
		this.idFromX = idFromX;
	}

	public int getIdFromY() {
		return idFromY;
	}

	public void setIdFromY(int idFromY) {
		this.idFromY = idFromY;
	}

	public int getIdFromZ() {
		return idFromZ;
	}

	public void setIdFromZ(int idFromZ) {
		this.idFromZ = idFromZ;
	}

	public String getAbbreviation() {
		return abbreviation;
	}

	public void setAbbreviation(String abbreviation) {
		this.abbreviation = abbreviation;
	}

	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + ((abbreviation == null) ? 0 : abbreviation.hashCode());
		result = prime * result + idFromX;
		result = prime * result + idFromY;
		result = prime * result + idFromZ;
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
		CountryId other = (CountryId) obj;
		if (abbreviation == null) {
			if (other.abbreviation != null)
				return false;
		} else if (!abbreviation.equals(other.abbreviation))
			return false;
		if (idFromX != other.idFromX)
			return false;
		if (idFromY != other.idFromY)
			return false;
		if (idFromZ != other.idFromZ)
			return false;
		return true;
	}
	
}
