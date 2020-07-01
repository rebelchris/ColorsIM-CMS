## Colors IM Test

This project is a test CMS to contribute to the Frontend build in Ionic.

## Running the project

-   git clone this project locaclly
-   copy .env.example as .env and change database settings
-   php artisan db:seed (This will create a running basic database)
-   npm run watch (While locally developing (compiles the sass))
-   npm run dev (For a local dev build of the css)
-   php artisan serve (This runs a local version of the application)

## Routes available

You can open up the basic `/` path and get the list of users.
There are also the following `API` routes:

-   `GET` `api/users` Retrieve all users
-   `GET` `api/users/{user}` {user} is the ID will show a single record
-   `POST` `api/users` Create new user
-   `POST` `api/users/{user}` Updates an existing user
-   `DELETE` `api/users/{user}` Delete a specific user

## Enhancements

This application is setup very basic and can be enhanced by login security, and more crud operations.
