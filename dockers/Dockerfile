FROM php:7.4-apache-buster
COPY dockerfile/apache/ /etc/apache2/sites-available/
RUN a2enmod rewrite && a2ensite app

COPY . /var/www/html
