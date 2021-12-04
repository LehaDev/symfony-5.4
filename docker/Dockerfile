FROM library/php:8.0-apache

RUN apt update

RUN apt install -y zlib1g-dev libpq-dev git libicu-dev libxml2-dev libzip-dev libpng-dev libonig-dev acl \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-install zip xml \
    && docker-php-ext-install gd mbstring \
    && docker-php-ext-install opcache \
    && docker-php-ext-install calendar dom 

RUN pecl install apcu && docker-php-ext-enable apcu

RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

WORKDIR /var/www/html