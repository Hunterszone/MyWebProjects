package com.drenski.gwmanager.service;

import java.sql.SQLException;
import java.util.ArrayList;
import java.util.Date;
import java.util.Iterator;
import java.util.List;

import org.springframework.stereotype.Service;

import com.drenski.gwmanager.dbconn.DbConnWithMySql;
import com.drenski.gwmanager.model.Device;
import com.drenski.gwmanager.model.Gateway;

@Service
public class GatewayService {

	public static List<Gateway> gateways = new ArrayList<>();

	static {
		DeviceService.devices.add(new Device(DeviceService.generate(10, 100), "IBM", new Date(), true));
		DeviceService.devices.add(new Device(DeviceService.generate(10, 100), "AIWA", new Date(), false));

		gateways.add(new Gateway(getNumericString(7), "root", "192.168.0.1", DeviceService.devices));
		gateways.add(new Gateway(getNumericString(7), "root", "192.168.0.168", DeviceService.devices));
		try {
			DbConnWithMySql.initDbConn();
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}

	// function to generate a random string of length n
	public static String getNumericString(int n) {
		String NumericString = "0123456789";

		// create StringBuffer size of AlphaNumericString
		StringBuilder sb = new StringBuilder(n);
		for (int i = 0; i < n; i++) {
			int index = (int) (NumericString.length() * Math.random());
			sb.append(NumericString.charAt(index));
		}
		return sb.toString();
	}

	public void addGateway(String id, String gwName, String ipAddress, List<Device> devices) {
		DeviceService.devices = new ArrayList<Device>();
		gateways.add(new Gateway(GatewayService.getNumericString(7), gwName, ipAddress, DeviceService.devices));
		try {
			DbConnWithMySql.initDbConn();
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}

	public List<Gateway> retrieveGateways(String gwName) {
		List<Gateway> filteredGateways = new ArrayList<Gateway>();
		for (Gateway gateway : gateways) {
			filteredGateways.add(gateway);
		}
		return filteredGateways;
	}

	public Gateway retrieveGateway(String id) {
		for (Gateway gateway : gateways) {
			if (Integer.parseInt(gateway.getId()) == Integer.parseInt(id)) {
				return gateway;
			}
		}
		return null;
	}

	public void deleteGateway(String id) {
		Iterator<Gateway> iterator = gateways.iterator();
		while (iterator.hasNext()) {
			Gateway gateway = iterator.next();
			if (Integer.parseInt(gateway.getId()) == Integer.parseInt(id)) {
				iterator.remove();
				try {
					DbConnWithMySql.initDbConn();
				} catch (SQLException e) {
					e.printStackTrace();
				}
			}
		}
	}
}