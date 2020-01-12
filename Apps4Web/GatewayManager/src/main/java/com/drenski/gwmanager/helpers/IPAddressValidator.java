package com.drenski.gwmanager.helpers;

public class IPAddressValidator {

	public static boolean isValid(final String ip) {
		String IPADDRESS_PATTERN = "^((0|1\\d?\\d?|2[0-4]?\\d?|25[0-5]?|[3-9]\\d?)\\.){3}(0|1\\d?\\d?|2[0-4]?\\d?|25[0-5]?|[3-9]\\d?)$";
		return ip.matches(IPADDRESS_PATTERN);
	}
}