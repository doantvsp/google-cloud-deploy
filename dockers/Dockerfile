FROM php:8.0-apache-buster
COPY dockers/apache/ /etc/apache2/sites-available/
#RUN a2enmod rewrite && a2ensite apache

COPY . /var/www/html
# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    vim \
    sudo \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite
RUN apt-get update && apt-get upgrade -y
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs
RUN apt-get install git

# Make the file executable, or use "chmod 777" instead of "chmod +x"
#RUN chmod +x /var/www/html/db-migration.sh

# This will run the shell file at the time when container is up-and-running successfully (and NOT at the BUILD time)
#ENTRYPOINT ["/var/www/html/db-migration.sh"]
