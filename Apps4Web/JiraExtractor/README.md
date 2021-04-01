# Jira Extractor
Spring Boot-based REST API client for data extraction from Jira tickets

## How to use:
Just double-click the pre-built JAR artifact, that is on top level inside the app dir. Then access Localhost on port **8888** with the endpoints, provided inside the controllers (if you want to address another port, do it within the **application.properties** under the **resources** folder) 

## How to build:
If using **Eclipse**, paste the Maven project into your workspace, import it from there and build it (use **clean package** as Maven goals). Inside the Target folder a runnable artifact will be generated. Copy it to the project root folder and run it from there, or just run the entire project in Eclipse. 
* **NOTE:** If using **IntelliJ Idea**, convert the project to Idea project and use following article, if needed: **https://www.jetbrains.com/help/idea/convert-a-regular-project-into-a-maven-project.html**

## Example response
Based on your selection a JSON or XML file with the following example content should be generated:  
- JSON:  
{"id":"1","issueSummary":null,"issueKey":null,"issueURL":"https://jira.atlassian.com/secure/viewavatar?size=xsmall&avatarId=51493&avatarType=issuetype","issueType":"Bug","issuePriority":null,"issueDescription":"A problem which impairs or prevents the functions of the product.","reporter":null,"creationDate":null,"comment":null}  
- XML:  
<JiraTicket><id>1</id><issueSummary/><issueKey/><issueURL>https://jira.atlassian.com/secure/viewavatar?size=xsmall&amp;avatarId=51493&amp;avatarType=issuetype</issueURL><issueType>Bug</issueType><issuePriority/><issueDescription>A problem which impairs or prevents the functions of the product.</issueDescription><reporter/><creationDate/><comment/></JiraTicket>