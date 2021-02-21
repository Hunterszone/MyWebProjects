package com.drenski.country.entity;

import java.time.LocalDateTime;

import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

@Entity(name = "COUNTRY")
//@IdClass(CountryId.class)
public class Country {
	
	@Id
	@Column(name = "id")
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private long id;
			
//	@Id
	@Column(name = "idX")
	@Basic(optional=true)
	private int idFromX;
	
//	@Id
	@Column(name = "idY")
	@Basic(optional=true)
	private int idFromY;
	
//	@Id
	@Column(name = "idZ")
	@Basic(optional=true)
	private int idFromZ;	
	
//	@Id
	@Column
	private String abbreviation;
	
	@Column
	private String name;
	
	@Column
	private LocalDateTime createdAt;
	
	@Column
	private LocalDateTime updatedAt;
	
	public Country() {}
	
	public Country(String name, String abbreviation) {
		this.name = name;
		this.abbreviation = abbreviation;
	}
	
	public long getId() {
		return id;
	}

	public void setId(long id) {
		this.id = id;
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

	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + ((abbreviation == null) ? 0 : abbreviation.hashCode());
		result = prime * result + ((createdAt == null) ? 0 : createdAt.hashCode());
		result = prime * result + idFromX;
		result = prime * result + idFromY;
		result = prime * result + idFromZ;
		result = prime * result + ((name == null) ? 0 : name.hashCode());
		result = prime * result + ((updatedAt == null) ? 0 : updatedAt.hashCode());
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
		Country other = (Country) obj;
		if (abbreviation == null) {
			if (other.abbreviation != null)
				return false;
		} else if (!abbreviation.equals(other.abbreviation))
			return false;
		if (createdAt == null) {
			if (other.createdAt != null)
				return false;
		} else if (!createdAt.equals(other.createdAt))
			return false;
		if (idFromX != other.idFromX)
			return false;
		if (idFromY != other.idFromY)
			return false;
		if (idFromZ != other.idFromZ)
			return false;
		if (name == null) {
			if (other.name != null)
				return false;
		} else if (!name.equals(other.name))
			return false;
		if (updatedAt == null) {
			if (other.updatedAt != null)
				return false;
		} else if (!updatedAt.equals(other.updatedAt))
			return false;
		return true;
	}

	@Override
	public String toString() {
		return "Country [idFromX=" + idFromX + ", idFromY=" + idFromY + ", idFromZ=" + idFromZ + ", abbreviation="
				+ abbreviation + ", name=" + name + ", createdAt=" + createdAt + ", updatedAt=" + updatedAt + "]";
	}
	
}
