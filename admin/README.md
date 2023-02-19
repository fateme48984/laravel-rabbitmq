# docker-laravel 🐳

<p align="center">
    <img src="https://user-images.githubusercontent.com/35098175/145682384-0f531ede-96e0-44c3-a35e-32494bd9af42.png" alt="docker-laravel">
</p>

## Introduction

Build a simple laravel development environment with docker-compose.

## Usage

### Laravel install

1. Git clone & change directory
2. Execute the following command

```bash
$ docker-compose up -d --build
$ docker exec -it projectname-php sh 
$ composer create-project laravel/laravel .
$ php artisan key:generate
$ php artisan storage:link
$ chown -R www-data:www-data logs/

```

- http://localhost
- phpmyadmin:  http://127.0.0.1:84
## Container structures

```bash
├── php
├── nginx
├── mysql
├── phpmyadmin
├── rabbitmq
└── redis
```

### php container

- Base image
    - [php:8.1.1-fpm](https://hub.docker.com/_/php)

### nginx container

- Base image
    - [nginx:latest](https://hub.docker.com/_/nginx)

### mysql container

- Base image
    - [mysql:8.0](https://hub.docker.com/_/mysql)

### phpmyadmin container

- Base image
    - [phpmyadmin](https://hub.docker.com/r/phpmyadmin/phpmyadmin)

### rabbitmq container

- Base image
    - [rabbitmq:3.11-management](https://hub.docker.com/_/rabbitmq)
    

### redis container

- Base image
  - [redis:alpine](https://hub.docker.com/_/redis)


