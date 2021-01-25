# Parking System
Spring Boot-based REST API for managing slots in parking levels for different vehicle types - TBD

# How to use:

## With H2 in-memory DB: 
Run the applcation from within your preffered IDE. On startup a DB table, called RESPONSES, is created. Yon can access it under **http://localhost:8888/h2-console**  

## If no DB is configured and/or you dont have an IDE: 
Just double-click the pre-built JAR artifact, that is on top level inside the app dir. Then access Localhost on port **8888** with the endpoints, provided inside the controllers (if you want to address another port, do it within the **application.properties** under the **resources** folder) 

# How to build:
If using **Eclipse**, paste the Maven project into your workspace, import it from there and build it (use **clean package** as Maven goals). Inside the Target folder a runnable artifact will be generated. Copy it to the project root folder and run it from there, or just run the entire project in Eclipse. 
* **NOTE:** If using **IntelliJ Idea**, convert the project to Idea project and use following article, if needed: **https://www.jetbrains.com/help/idea/convert-a-regular-project-into-a-maven-project.html**