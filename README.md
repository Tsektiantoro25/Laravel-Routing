# Laravel API - Module-02 Routing

Laravel API Project - JWT Auth implementation

## Tutorials

- [tymon/jwt-auth](https://medium.com/employbl/build-authentication-into-your-laravel-api-with-json-web-tokens-jwt-cd223ace8d1a) configuration

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
- Change default guard to api, and api guard driver to jwt in config/auth.php file
- Implement jwt auth according to the tutorial
- Create API Endpoint for the User with conditions:
1. /me : will display biodata, need authenticaion
2. /login : for login process, without authentication
3. /register: for register login, without authentication
4. /logout: will destroy token, need authentication
- Use the postman to check the API that has been made
- Push project to this repositories
- Take a screenshot of your repositories link, postman process/output and then post to the [KK4-B Google Classroom](https://classroom.google.com)
