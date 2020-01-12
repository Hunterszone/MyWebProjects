package com.drenski.gwmanager.controller;

import java.sql.SQLException;
import java.text.SimpleDateFormat;
import java.util.Date;

import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.propertyeditors.CustomDateEditor;
import org.springframework.beans.propertyeditors.StringTrimmerEditor;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.WebDataBinder;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.InitBinder;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

import com.drenski.gwmanager.helpers.IPAddressValidator;
import com.drenski.gwmanager.model.DbConn;
import com.drenski.gwmanager.model.Gateway;
import com.drenski.gwmanager.service.DeviceService;
import com.drenski.gwmanager.service.GatewayService;

@Controller
public class GatewayController {

	@Autowired
	GatewayService service;

	@InitBinder
	public void initBinder(WebDataBinder binder) {
		// set date format
		SimpleDateFormat dateFormat = new SimpleDateFormat("dd/MM/yyyy");
		binder.registerCustomEditor(Date.class, new CustomDateEditor(dateFormat, false));
		// trim white spaces
		StringTrimmerEditor stringTrimmerEditor = new StringTrimmerEditor(true);
		binder.registerCustomEditor(String.class, stringTrimmerEditor);
	}

	@GetMapping("/list-gateways")
	public String showGateways(ModelMap model, Gateway gateway) {
		String name = gateway.getGatewayName();
		model.put("gateways", service.retrieveGateways(name));
		return "list-gateways";
	}

	@GetMapping("/add-gateway")
	public String showAddGatewayPage(ModelMap model, Gateway gateway) {
		model.addAttribute("gateway", service.addGateway(gateway));
		return "gateway";
	}

	@PostMapping("/add-gateway")
	public String addGateway(ModelMap model, @Valid Gateway gateway, BindingResult result) {

		gateway = new Gateway(GatewayService.getNumericString(7), gateway.getGatewayName(), gateway.getIpAddress(),
				DeviceService.devices);

		if (result.hasErrors()) {
			model.addAttribute("gateway", gateway);
			if (IPAddressValidator.isValid(gateway.getIpAddress())) {
				GatewayService.gateways.add(gateway);
				try {
					DbConn.main(null);
				} catch (SQLException e) {
					e.printStackTrace();
				}
			} else {
				System.out.println("WRONG IP PATTERN!");
				return "invalid";
			}
		}

		return "redirect:/list-gateways";
	}

	@GetMapping("/delete-gateway")
	public String deleteGateway(@RequestParam String id) {
		service.deleteGateway(id);
		try {
			DbConn.main(null);
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return "redirect:/list-gateways";
	}

	@GetMapping("/update-gateway")
	public String showUpdateGatewayPage(@RequestParam String id, ModelMap model) {
		Gateway gateway = service.retrieveGateway(id);
		model.put("update", gateway);
		return "update";
	}

	public String getLoggedInUserName(ModelMap model) {
		Object principal = SecurityContextHolder.getContext().getAuthentication().getPrincipal();

		if (principal instanceof UserDetails) {
			return ((UserDetails) principal).getUsername();
		}

		return principal.toString();
	}
}
