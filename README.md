# laravel-rabbitmq 

<p align="center">
    <img src="https://miro.medium.com/max/875/1*99keed45qfA9aPvw6Ad9Yg.jpeg" alt="docker-laravel-rabbitmq">
</p>

## Introduction

Build a simple laravel microservice with docker and rabbitmq

## Usage

### Laravel install

1. Git clone & change directory
2. Execute the following command in admin folder

```bash
$ docker-compose up -d --build
$ docker exec -it admin-php sh 
$ composer create-project laravel/laravel .
$ php artisan key:generate
$ php artisan storage:link
$ chown -R www-data:www-data storage/logs/
$ chown -R www-data:www-data storage/framework/
$ php artisan migrate
```

3. Execute the following command in main folder

```bash
$ docker-compose up -d --build
$ docker exec -it main-php sh 
$ composer create-project laravel/laravel .
$ php artisan key:generate
$ php artisan storage:link
$ chown -R www-data:www-data storage/logs/
$ chown -R www-data:www-data storage/framework/
$ php artisan migrate
$ php artisan queue:work
```
 4. There are 3 http request in admin folder (create.http request, delete.http request, update.http request) ,run them and check phpmyadmin

- phpmyadmin admin:  http://127.0.0.1:84
- phpmyadmin main:  http://127.0.0.1:85
