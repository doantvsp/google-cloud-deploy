FROM php:7.4-fpm-buster
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
RUN docker-php-ext-install mysqli pdo pdo_mysql  \
    && a2emod \
    rewrite
RUN service apache2 restart
RUN apt-get update && apt-get upgrade -y
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs
RUN apt-get install git