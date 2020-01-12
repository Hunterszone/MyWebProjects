package com.drenski.gwmanager.model;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import com.drenski.gwmanager.service.GatewayService;

public class Gateway {

	private String id;
	private String gatewayName;
	private String ipAddress;
	private List<Device> devices;

	public Gateway() {
		super();
	}

	public Gateway(String id, String gatewayName, String ipAddress, List<Device> exampleDevices) {
		super();
		this.id = id;
		this.gatewayName = gatewayName;
		this.ipAddress = ipAddress;
		this.devices = exampleDevices;
	}

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getGatewayName() {
		return gatewayName;
	}

	public void setGatewayName(String gwName) {
		this.gatewayName = gwName;
	}

	public String getIpAddress() {
		return ipAddress;
	}

	public void setIpAddress(String ipAddress) {
		this.ipAddress = ipAddress;
	}

	public List<Device> getDevices() {
		return devices;
	}

	public void setDevices(ArrayList<Device> devices) {
		this.devices = devices;
	}

	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + Integer.parseInt(id);
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
		Gateway other = (Gateway) obj;
		if (id != other.id) {
			return false;
		}
		return true;
	}

	public Map<String, List<Device>> getGatewayAndDevices() {
		Map<String, List<Device>> gatewaysAndDevices = new HashMap<>();
		gatewaysAndDevices.put(GatewayService.gateways.iterator().next().getGatewayName(),
				GatewayService.gateways.iterator().next().getDevices());
		return gatewaysAndDevices;
	}

	@Override
	public String toString() {
		return String.format("Gateway [id=%s, gatewayName=%s, ipAddress=%s, devices=%s]", id, gatewayName, ipAddress,
				devices);
	}
}