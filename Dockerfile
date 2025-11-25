FROM php:8.2-apache

WORKDIR /var/www/html

COPY . /var/www/html

# (optionnel) Extensions à activer plus tard si besoin de BDD, etc.
# RUN docker-php-ext-install mysqli pdo pdo_mysql

EXPOSE 80


