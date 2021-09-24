FROM php:7-apache
RUN apt update
RUN apt install -y libmcrypt-dev libzip-dev libonig-dev libpng-dev libxml2-dev
RUN pecl install mcrypt
RUN docker-php-ext-enable mcrypt
RUN docker-php-ext-install zip mbstring gd opcache xml mysqli pdo pdo_mysql 
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY laravel /var/www/html
WORKDIR /var/www/html
RUN chmod 777 storage -R
RUN chmod 777 vendor -R
