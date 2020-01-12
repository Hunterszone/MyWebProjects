package com.drenski.gwmanager;

import com.drenski.gwmanager.model.Device;
import com.drenski.gwmanager.model.Gateway;
import com.drenski.gwmanager.service.DeviceService;
import com.drenski.gwmanager.service.GatewayService;

public class SampleMocks {

	private Gateway sampleGateway;
	private Device sampleDevice;

	public Gateway getSampleGateway() {
		sampleGateway = new Gateway(GatewayService.gateways.get(0).getId(),
				GatewayService.gateways.get(0).getGatewayName(), GatewayService.gateways.get(0).getIpAddress(),
				GatewayService.gateways.get(0).getDevices());
		return sampleGateway;
	}

	public Device getSampleDevice() {
		sampleDevice = new Device(DeviceService.devices.get(0).getId(), DeviceService.devices.get(0).getVendor(),
				DeviceService.devices.get(0).getCreationDate(), DeviceService.devices.get(0).getOnline());
		return sampleDevice;
	}

}
