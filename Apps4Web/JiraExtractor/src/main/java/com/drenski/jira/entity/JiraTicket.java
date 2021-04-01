package com.drenski.jira.entity;

import java.util.Date;
import java.util.Map;

public class JiraTicket {
	
	private String id;

	private String issueSummary;

	private String issueKey;

	private String issueURL;

	private String issueType;
	
	private String issuePriority;
	
	private String issueDescription;
	
	private String reporter;
	
	private Date creationDate;
	
	private Map<String, String> comment;

	public JiraTicket() {}

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getIssueSummary() {
		return issueSummary;
	}

	public void setIssueSummary(String issueSummary) {
		this.issueSummary = issueSummary;
	}

	public String getIssueKey() {
		return issueKey;
	}

	public void setIssueKey(String issueKey) {
		this.issueKey = issueKey;
	}

	public String getIssueURL() {
		return issueURL;
	}

	public void setIssueURL(String issueURL) {
		this.issueURL = issueURL;
	}

	public String getIssueType() {
		return issueType;
	}

	public void setIssueType(String issueType) {
		this.issueType = issueType;
	}

	public String getIssuePriority() {
		return issuePriority;
	}

	public void setIssuePriority(String issuePriority) {
		this.issuePriority = issuePriority;
	}

	public String getIssueDescription() {
		return issueDescription;
	}

	public void setIssueDescription(String issueDescription) {
		this.issueDescription = issueDescription;
	}

	public String getReporter() {
		return reporter;
	}

	public void setReporter(String reporter) {
		this.reporter = reporter;
	}

	public Date getCreationDate() {
		return creationDate;
	}

	public void setCreationDate(Date creationDate) {
		this.creationDate = creationDate;
	}

	public Map<String, String> getComment() {
		return comment;
	}

	public void setComment(Map<String, String> comment) {
		this.comment = comment;
	}
	
}
