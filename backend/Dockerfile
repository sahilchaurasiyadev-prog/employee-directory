FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli

# Fix the Apache MPM conflict error
RUN a2dismod mpm_event && a2enmod mpm_prefork

COPY . /var/www/html/
EXPOSE 80