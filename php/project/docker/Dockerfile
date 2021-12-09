FROM php:8.1-fpm

RUN apt update && apt install -y \
    git \
    curl \
    zip \
    unzip libgmp-dev re2c libmhash-dev file

RUN ln -s /usr/include/x86_64-linux-gnu/gmp.h /usr/local/include/

RUN docker-php-ext-configure gmp
RUN docker-php-ext-install gmp

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www
