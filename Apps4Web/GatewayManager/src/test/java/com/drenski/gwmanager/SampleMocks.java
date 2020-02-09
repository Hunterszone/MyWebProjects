package com.drenski.gwmanager;

import java.util.Date;

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
		sampleDevice = new Device(DeviceService.generate(10, 100), "IBM", new Date(), true);
		return sampleDevice;
	}

}
