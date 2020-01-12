package com.drenski.gwmanager.controller;

import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

import com.drenski.gwmanager.model.Device;
import com.drenski.gwmanager.service.DeviceService;

@Controller
public class DeviceController {

	@Autowired
	DeviceService service;

	@GetMapping("/add-device")
	public String showAddDevicePage(ModelMap model, Device device) {
		model.addAttribute("device", new Device(0, "", device.getCreationDate(), false));
		if (DeviceService.devices.size() >= 10) {
			System.out.println("MAX NUM OF DEVICES REACHED!");
			return "dev-limit";
		}
		return "device";
	}

	@PostMapping("/add-device")
	public String addDevice(ModelMap model, @Valid Device device, BindingResult result) {

		if (result.hasErrors()) {
			System.out.println("DeviceController has thrown error!");
			return "device";
		}

		service.addDevice(device.getId(), device.getVendor(), device.getCreationDate(), device.getOnline());
		return "redirect:/list-gateways";
	}

	@GetMapping("/delete-device")
	public String deleteDevice(@RequestParam String id) {
		if (id == "") {
			id = String.valueOf(DeviceService.devices.get(0).getId());
		}
		service.deleteDevice(Integer.parseInt(id));
		return "redirect:/list-gateways";
	}
}