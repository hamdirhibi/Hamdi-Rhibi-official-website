FROM php:7.0-apache

WORKDIR /usr/src/app

COPY . /var/www/html

EXPOSE 80
