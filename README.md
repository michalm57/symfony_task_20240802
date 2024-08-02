# Symfony Project Setup
This README provides instructions on how to set up and run a Symfony project using Docker Compose. The project utilizes Docker containers for PHP, Apache, PostgreSQL database, and pgAdmin.

## Requirements
* Docker and Docker Compose installed on your system.
* PHP
* Composer
* Symfony
* Apache
* PostgreSQL database
* pgAdmin

## Installation Steps
* Clone the repository and navigate to the project directory:
* git clone git@github.com:michalm57/symfony_crud.git
* cd symfony_crud
* In the project root directory, create a new .env file with the following contents:
```
APP_ENV=dev
APP_SECRET=ad0ea8abb1095405060cd81c0c741d7d
DATABASE_URL=postgresql://symfony_crud:password@database:5432/symfony_crud
MESSENGER_TRANSPORT_DSN=doctrine://default?auto_setup=0
```
* Build and start Docker containers:
Run the following command to build and start the Docker containers:
```
docker-compose up -d --build
```
##  Access the application:
The Symfony application should now be running. Access it in your web browser at http://localhost. 

##  Database Access
The PostgreSQL database is accessible through the database container. You can connect to it using your preferred PostgreSQL client with the following credentials:
```
Host: localhost
Port: 5432
Database Name: symfony_crud
Username: symfony_crud
Password: password
```

pgAdmin Access
pgAdmin, a web-based PostgreSQL administration tool, is available at http://localhost:5050. 
Use the following credentials to log in:

```
Email: your_email@example.com
Password: your_password
```