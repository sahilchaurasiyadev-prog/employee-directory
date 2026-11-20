FROM php:8.2-apache
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Configure Apache to listen on Railway's dynamic PORT
RUN sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

COPY . /var/www/html/
EXPOSE 80