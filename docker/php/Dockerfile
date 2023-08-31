FROM php:8.1-fpm

RUN apt-get update \
    && apt-get -y install postgresql-server-dev-all \
    && rm -rf /var/lib/apt/lists/* \

RUN apt-get install -y libpq-dev \
    && docker-php-ext-install pgsql \
    && docker-php-ext-install pdo pdo_pgsql \
    && docker-php-ext-configure pgsql

RUN  echo extension=pdo_pgsql >> /usr/local/etc/php/php.ini \
     && echo extension=pgsql     >> /usr/local/etc/php/php.ini \
     && echo extension=pdo     >> /usr/local/etc/php/php.ini