## To implement this project

1. Install Xampp and Postman.
2. Start mysql server.
3. Execute the below command.

    ```
    php artisan serve
    ``` 
    Then server is running on http://127.0.0.1:8000

## API Documentation

### Endpoint: `/`

#### Purpose

This endpoint is used to test the Server is running.

#### Request

**Method:** `GET`
This endpoint does not require any parameters.


#### Response

A successful response will return a `200 OK` status code and `{"Laravel":"11.4.0"}`


### Endpoint: `/register`

#### Purpose

This endpoint is used to register a new user to DB.

#### Request

**Method:** `POST`

`name`, `email` and `password` are needed.

#### Response

A successful response will return a `200 OK` status code and the data will be stored in DB.


### Endpoint: `/login`

#### Purpose

This endpoint is used to generate token using User Data.

#### Request

**Method:** `POST`

`email` and `password` are needed.

#### Response

A successful response will return a `200 OK` status code and will get Bearer token.


### Endpoint: `/API/products`

#### Purpose

This endpoint is used to retrieve a list of all products available in the application.

#### Request

**Method:** `GET`

Need Bearer Token to authenticate the request.

#### Response

A successful response will return a `200 OK` status code along with a JSON object containing an array of products. 




#### Errors

If an error occurs, the API will return a `4xx` or `5xx` status code along with a JSON object containing an error message.
