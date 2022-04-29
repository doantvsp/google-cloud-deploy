FROM php:7.4.3-apache-buster
COPY /dockers/apache/ /etc/apache2/sites-available/
RUN a2enmod rewrite && a2ensite app

COPY . /var/www/html
