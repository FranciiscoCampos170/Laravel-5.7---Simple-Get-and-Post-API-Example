# Laravel-5.7---Simple-Get-and-Post-API-Example
# Setup
make a .env file and set your db run php artisan migrate
After migrating the tables, inserts one or more records in the users table.
Download and install postman The Only Complete API Development Environment : https://www.getpostman.com/products

# Run the backend
php artisan serve


# Usage
Opens Postman and creates a new GET request
enter the path http://127.0.0.1:8000/api
and then click send, and users will be displayed.

Opens Postman and creates a new POST request
enter the path http://127.0.0.1:8000/api
enter the data for example: 
{
	"id":1,
	"name":"rice",
	"desc":"good rice"
}
and then click send, to add products into database.
