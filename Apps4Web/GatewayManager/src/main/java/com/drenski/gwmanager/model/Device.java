package com.drenski.gwmanager.model;

import java.util.Date;

public class Device {

	private int id;
	private String vendor;
	private Date creationDate;
	private boolean isOnline;

	public Device() {
		super();
	}

	public Device(int id, String vendor, Date creationDate, boolean isOnline) {
		this.id = id;
		this.vendor = vendor;
		this.creationDate = creationDate;
		this.isOnline = isOnline;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getVendor() {
		return vendor;
	}

	public void setVendor(String vendor) {
		this.vendor = vendor;
	}

	public Date getCreationDate() {
		return creationDate;
	}

	public void setCreationDate(Date creationDate) {
		this.creationDate = creationDate;
	}

	public boolean getOnline() {
		return isOnline;
	}

	public void setOnline(boolean isOnline) {
		this.isOnline = isOnline;
	}

	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + id;
		return result;
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj) {
			return true;
		}
		if (obj == null) {
			return false;
		}
		if (getClass() != obj.getClass()) {
			return false;
		}
		Device other = (Device) obj;
		if (id != other.id) {
			return false;
		}
		return true;
	}

	@Override
	public String toString() {
		return String.format("Device [id=%s, vendor=%s, creationDate=%s, isOnline=%s]", id, vendor, creationDate,
				isOnline) + "\n";
	}

}