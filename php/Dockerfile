FROM php:8.4-apache

RUN docker-php-ext-install -j $(nproc) pdo_mysql

COPY www/ /var/www/html/

RUN chmod 777 /var/www/html/uploads