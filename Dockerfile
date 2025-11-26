FROM php:8.2-apache

WORKDIR /var/www/html

COPY . /var/www/html

# Activer mod_rewrite et autoriser .htaccess (configuration activée, Apache sera démarré au runtime)
RUN a2enmod rewrite
COPY apache.conf /etc/apache2/conf-available/app.conf
RUN a2enconf app

EXPOSE 80


