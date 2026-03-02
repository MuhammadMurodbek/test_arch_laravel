FROM php:8.3-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    libicu-dev \
    g++ \
    && docker-php-ext-configure intl \
    && docker-php-ext-install pdo_mysql bcmath mbstring intl pcntl \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY .docker/php/conf.d/app.ini /usr/local/etc/php/conf.d/app.ini

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

USER www-data

