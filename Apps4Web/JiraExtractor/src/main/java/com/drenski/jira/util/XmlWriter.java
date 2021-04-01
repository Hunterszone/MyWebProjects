package com.drenski.jira.util;

import java.io.File;
import java.io.IOException;

import javax.swing.filechooser.FileSystemView;

import com.fasterxml.jackson.dataformat.xml.XmlMapper;

public class XmlWriter {
	
	public static void writeXmlObj(String[] params) {
		
		XmlMapper xmlMapper = new XmlMapper();
		
		try {
			// Writing to a file
			File home = FileSystemView.getFileSystemView().getHomeDirectory();
			xmlMapper.writeValue(new File(home.getAbsolutePath() + "\\ticketDetails.xml"), GenericWriter.setTicketProperties(params));
		} catch (IOException e) {
			e.printStackTrace();
		}

	}

}
