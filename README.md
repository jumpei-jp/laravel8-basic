# laravel8-basic
This is test repository for Laravel8

## Development environment
* laravel: 8.x
* mysql: 8.0.26
* PHP: 8.0-apache-buster

## docker procedure
### fix file
1. change project name → `docker/php/Dockerfile`
2. specify container_name → `docker-compose.yaml`
3. fix `.env`

### command

    docker-compose build
    docker-compose up

    #login container
    docker exec -it laravel8-basic-php-container bash

    #install Laravel8（only first time）
    composer create-project laravel/laravel laravel8-basic "8.*"

    #change authority
    chmod 777 -R storage/

check http://localhost/

#### tailwind install(only first time)
[Install Tailwind CSS with Laravel](https://tailwindcss.com/docs/guides/laravel)

    docker exec -it laravel8-basic-php-container bash
    cd /var/www/html/laravel8
    apt update
    apt install nodejs npm

    npm install -D tailwindcss postcss autoprefixer
    npx tailwindcss init -p
    npm run dev

## login command

    php
    docker exec -it laravel8-basic-php-container bash

    mysql
    docker exec -it laravel8-basic-mysql-container mysql -u root -p

Login to phpMyAdmin
http://localhost:4040/