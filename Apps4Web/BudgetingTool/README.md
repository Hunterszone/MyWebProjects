# Budgeting Tool
Spring Boot-based REST API for performing CRUD operations on budgets

# Manual (for developers):

## Build:
- Build, using Maven

## Setup H2 in-memory DB: 
- Run the applcation from within your preffered IDE. On startup a DB table, called **BUDGET**, is created. Yon can access it under **http://localhost:8888/h2-console** . The required columns will be generated, based on the **schema.sql** file. 

## Setup MySql DB: 
- Create MySql database with a name of your choice, using PhpMyAdmin or another DB manager. On startup a DB table, called **BUDGET**, is created. The required columns will be generated, based on the **schema.sql** file.  

## Useful examples:
Import the JSON collection into Postman and you will see the pre-built endpoints for interaction with the REST API.


# Manual (for customers):
The API has predictable resource-oriented URLs, accepts form-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes.

## Useful examples:
- For reading (HTTP **GET**): http://localhost:8888/budgets or by id, e.g.: http://localhost:8888/budgets/2
- For creation (HTTP **POST**): http://localhost:8888/budgets and following request body, e.g.:
```
{  
    "name": "ExampBudget",
    "amount": 1234
}
```
- For updates (HTTP **PUT**), e.g.: http://localhost:8888/budgets/4 and following request body, e.g.:
```
{  
    "name": "NewBudget",
    "abbreviation": 3454
}
```
- For deletion (HTTP **DELETE**), e.g.: http://localhost:8888/budgets/2
