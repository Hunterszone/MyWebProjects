package com.drenski.scheduleapp.model;

import com.drenski.scheduleapp.service.TodoService;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;

public class DbConn {

    private static String[] taskAttributes;

    // JDBC driver name and database URL
    private static final String JDBC_DRIVER = "com.mysql.jdbc.Driver"; // for H2 is "org.h2.Driver"
    private static final String DB_URL = "jdbc:mysql://localhost:3306/taskscheduler"; // for H2 is "jdbc:h2:file:" +

    // Database credentials
    private static final String USER = "root";
    private static final String PASS = "root";

    public static void main(String[] args) throws SQLException {
        Connection conn = null;
        Todo todo = new Todo();
        PreparedStatement preparedStatement = null;
        int counter = 0;
        try {
            // STEP 1: Register JDBC driver
            Class.forName(JDBC_DRIVER);

            // STEP 2: Open a connection
            System.out.println("Connecting to a selected database...");
            conn = DriverManager.getConnection(DB_URL, USER, PASS);
            System.out.println("Connected database successfully...");

            // Empty DB before operations
            preparedStatement = conn.prepareStatement("DELETE FROM tasks WHERE 1");
            preparedStatement.executeUpdate();

            while (counter < TodoService.todos.size()) {
                // STEP 3: Execute a query
                taskAttributes = todo.getUserAndDesc(TodoService.todos.get(counter));
                preparedStatement = conn.prepareStatement("INSERT INTO tasks (USER, TASK) " + "VALUES (?,?)");
                preparedStatement.setString(1, taskAttributes[0]);
                System.out.println("USERS added: " + taskAttributes[0]);
                preparedStatement.setString(2, taskAttributes[1]);
                System.out.println("DESCRIPTION added: " + taskAttributes[1]);
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
        System.out.println("Goodbye!");
    }
}
