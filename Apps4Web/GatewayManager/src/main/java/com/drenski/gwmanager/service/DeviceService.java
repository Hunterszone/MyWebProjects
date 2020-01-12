package com.drenski.gwmanager.service;

import java.sql.SQLException;
import java.util.Date;
import java.util.Iterator;
import java.util.List;

import org.springframework.stereotype.Service;

import com.drenski.gwmanager.model.DbConn;
import com.drenski.gwmanager.model.Device;

@Service
public class DeviceService {

	public static List<Device> devices = GatewayService.exampleDevices;

	public static int generate(int min, int max) {
		return min + (int) (Math.random() * ((max - min) + 1));
	}

	public void addDevice(int id, String vendor, Date creationDate, boolean isOnline) {
		if (devices.size() < 10) {
			devices.add(new Device(generate(10, 100), vendor, creationDate, isOnline));
			try {
				DbConn.main(null);
			} catch (SQLException e) {
				e.printStackTrace();
			}
		}
	}

	public void deleteDevice(int id) {
		Iterator<Device> iterator = devices.iterator();
		while (iterator.hasNext() && devices.size() > 1) {
			Device device = iterator.next();
			if (device.getId() == id) {
				iterator.remove();
			}
		}
		try {
			DbConn.main(null);
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
}
