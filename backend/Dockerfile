FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy source code first
COPY . /var/www/html/

# Update Apache port configuration to listen on $PORT
RUN sed -i 's/80/8383/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf
ENV PORT=80
RUN sed -i 's/8383/${PORT}/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80