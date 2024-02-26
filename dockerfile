FROM php:8.3.2-apache

RUN docker-php-ext-install pdo_mysql