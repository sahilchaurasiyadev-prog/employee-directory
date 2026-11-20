FROM php:8.2-cli

RUN docker-php-ext-install pdo pdo_mysql mysqli

COPY . /var/www/html/
WORKDIR /var/www/html

EXPOSE 80

# Use PHP built-in server bound to port 80 and all interfaces
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]