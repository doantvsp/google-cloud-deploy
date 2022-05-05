FROM php:8.0-apache-buster
COPY dockers/apache/ /etc/apache2/sites-available/
RUN a2enmod rewrite && a2ensite apache

COPY . /var/www/html
