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

## Used Libraries
* symfony/framework-bundle
* symfony/console
* symfony/dotenv
* symfony/maker-bundle
* symfony/orm-pack
* symfony/yaml
* doctrine/orm
* doctrine/doctrine-bundle
* doctrine/dbal
* fakerphp/faker
* symfony/var-dumper
* twig/twig
* alice/alice
* symfony/asset

## Installation Steps
* Clone the repository and navigate to the project directory:
* git clone git@github.com:michalm57/symfony_task_20240802.git
* cd symfony_task_20240802
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
The Symfony application should now be running. Access it in your web browser at http://localhost/books. 

##  Database Access
The PostgreSQL database is accessible through the database container. You can connect to it using your preferred PostgreSQL client with the following credentials:
```
Host: localhost
Port: 5432
Database Name: symfony_task
Username: symfony_task
Password: password
```

pgAdmin Access
pgAdmin, a web-based PostgreSQL administration tool, is available at http://localhost:5050. 
Use the following credentials to log in:

```
Email: pgadmin@mail.com
Password: pgadmin_password
```