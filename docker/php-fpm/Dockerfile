FROM php:8.3-fpm

RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql

RUN apt-get update && apt-get install -y git

RUN  apt-get install -y librabbitmq-dev

RUN pecl install amqp


