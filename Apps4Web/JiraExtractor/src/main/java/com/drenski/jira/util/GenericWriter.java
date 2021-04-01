package com.drenski.jira.util;

import com.drenski.jira.entity.JiraTicket;

public interface GenericWriter {
	
	public static JiraTicket setTicketProperties(String[] params) {

		JiraTicket sampleTicket = new JiraTicket();

		if (!HelperStructures.isNullOrEmpty(params)) {
			sampleTicket.setId(params[0]);
			sampleTicket.setIssueDescription(params[2]);
			sampleTicket.setIssueURL(params[3]);
			sampleTicket.setIssueType(params[4]);
		}

		return sampleTicket;
	}
}
