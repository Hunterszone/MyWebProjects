package com.drenski.currencyconverter.dbconn;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.Map;

import com.drenski.currencyconverter.service.HelperStructures;

public class DbConnWithMySql {

	// API extraction
	private static Map<String, String> endpointAndOutput;

	// JDBC driver name and database URL
	private static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";
	private static final String DB_URL = "jdbc:mysql://localhost:3306/currconverter";

	// Database credentials
	private static final String USER = "root";
	private static final String PASS = "";

	public static void initDbConn() throws SQLException {
		Connection conn = null;
		PreparedStatement preparedStatement = null;
		int counter = 0;
		try {
			// STEP 1: Register JDBC driver
			Class.forName(JDBC_DRIVER);

			// STEP 2: Open a connection
			System.out.println("Connecting to a selected database...");
			conn = DriverManager.getConnection(DB_URL, USER, PASS);
			System.out.println("Connected database successfully...");

			// Empty DB table before operations - optional
//			preparedStatement = conn.prepareStatement("DELETE FROM responses WHERE 1");
//			preparedStatement.executeUpdate();

			while (counter < HelperStructures.endpoints.size()) {
				// STEP 3: Execute a query
				endpointAndOutput = HelperStructures.endpointsAndOutputs;
				preparedStatement = conn.prepareStatement("INSERT INTO responses (ENDPOINT, OUTPUT) " + "VALUES (?,?)");
				preparedStatement.setString(1, endpointAndOutput.keySet().iterator().next());
				System.out.println("ENDPOINT added: " + endpointAndOutput.keySet().iterator().next());
				preparedStatement.setString(2, endpointAndOutput.get(endpointAndOutput.keySet().iterator().next()));
				System.out.println(
						"OUTPUT added: " + endpointAndOutput.get(endpointAndOutput.keySet().iterator().next()));
				preparedStatement.executeUpdate();
				System.out.println("Records inserted into table!");
				counter++;
			}

			// STEP 4: Clean-up environment
			preparedStatement.close();
			conn.close();
		} catch (Exception se) {
			// Handle errors for JDBC
			se.printStackTrace();
		} finally {
			// finally block used to close resources
			if (preparedStatement != null)
				preparedStatement.close();
			try {
				if (conn != null)
					conn.close();
			} catch (SQLException se) {
				se.printStackTrace();
			} // end finally try
		} // end try
		endpointAndOutput.clear();
		HelperStructures.endpoints.clear();
		HelperStructures.outputs.clear();
		System.out.println("Goodbye!");
	}
}