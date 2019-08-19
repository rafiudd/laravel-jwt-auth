# Laravel API - Module-04 CRUD

Laravel API Project - Create, Read, Update and Delete (CRUD)

## Requirements

- Composer
- PHP >= 7.1.3
- MySQL or MariaDB.

## Tutorials

- [Restfull API CRUD with Passport](https://itsolutionstuff.com/post/build-restful-api-in-laravel-58-exampleexample.html) CRUD, be careful tutorial using authentication with a passport, while the project uses jwt authentication

## Challenge
- Clone this repositories
- Install depedencies
```text
$ composer install
```
- Create .env file
```text
$ cp .env-example .env
```
- Genereate key (laravel and jwt)
```text
$ php artisan key:generate
$ php artisan jwt:secret
```
- Modify .env file, configure the database connection string
- Create a migration and a model file for the material table 
- Migrate database
- Create a new controller and add the crud command
- Create endpoints for controllers that have been made 
- Use the postman to check the API that has been made
- Push project to this repositories
- Take a screenshot of your repositories link and post to the [KK4-B Google Classroom](https://classroom.google.com)

## Example Table Schema
Material Table

| Name          | Type         |
| ------------- | ------------ |
| uuid          | uuid         |
| thumbnail     | string(100)  |
| title         | string(200)  |
| content       | text         |

## Postman Collection && Docs
- https://www.getpostman.com/collections/56fb137cc903a4a51e75
- https://documenter.getpostman.com/view/4289441/SVYurxCx?version=latest
