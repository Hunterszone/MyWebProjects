package com.drenski.jira.util;

import java.io.File;
import java.io.IOException;

import javax.swing.filechooser.FileSystemView;

import com.fasterxml.jackson.databind.ObjectMapper;

public class JsonWriter {

	public static void writeJsonObj(String[] params) {
		
		ObjectMapper mapper = new ObjectMapper();

		try {
			// Writing to a file
			File home = FileSystemView.getFileSystemView().getHomeDirectory();
			mapper.writeValue(new File(home.getAbsolutePath() + "\\ticketDetails.json"), GenericWriter.setTicketProperties(params));
		} catch (IOException e) {
			e.printStackTrace();
		}
	}
}
