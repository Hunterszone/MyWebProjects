package com.drenski.gwmanager.dbconn;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.List;
import java.util.Map;

import com.drenski.gwmanager.model.Device;
import com.drenski.gwmanager.model.Gateway;
import com.drenski.gwmanager.service.GatewayService;

public class DbConnWithMySql {

	private static Map<String, List<Device>> gatewaysAndDevices;

	// JDBC driver name and database URL
	private static final String JDBC_DRIVER = "com.mysql.jdbc.Driver"; // for H2 is "org.h2.Driver"
	private static final String DB_URL = "jdbc:mysql://localhost:3306/gwmanager"; // for H2 is "jdbc:h2:file:"

	// Database credentials
	private static final String USER = "root";
	private static final String PASS = "root";

	public static void initDbConn() throws SQLException {
		Gateway gateway = new Gateway();
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

			// Empty DB table before operations
			preparedStatement = conn.prepareStatement("DELETE FROM devices WHERE 1");
			preparedStatement.executeUpdate();

			while (counter < GatewayService.gateways.size()) {
				// STEP 3: Execute a query
				gatewaysAndDevices = gateway.getGatewayAndDevices();
				preparedStatement = conn.prepareStatement("INSERT INTO devices (GATEWAY, DEVICES) " + "VALUES (?,?)");
				preparedStatement.setObject(1, gatewaysAndDevices.keySet().iterator().next());
				System.out.println("GATEWAY added: " + gatewaysAndDevices.keySet().iterator().next());
				preparedStatement.setObject(2,
						gatewaysAndDevices.get(gatewaysAndDevices.keySet().iterator().next()).toString());
				System.out.println("DEVICES added: "
						+ gatewaysAndDevices.get(gatewaysAndDevices.keySet().iterator().next()).toString());
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
			}
		}
		if (gatewaysAndDevices != null)
			gatewaysAndDevices.clear();
		System.out.println("Goodbye!");
	}
}