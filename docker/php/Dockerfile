FROM php:8.2-fpm

RUN apt-get update --fix-missing
RUN apt-get install -y zip unzip libonig-dev libicu-dev \
    libzip-dev libpq-dev build-essential libssl-dev zlib1g-dev

RUN pecl install mongodb-1.21.0 \
    && docker-php-ext-enable mongodb

RUN docker-php-ext-install pdo zip pdo_pgsql pgsql opcache intl bcmath mbstring

COPY /api/php.ini /usr/local/etc/php/conf.d/opcache.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www
WORKDIR /var/www

RUN chown -R www-data:www-data /var/www && \
    chmod -R 755 /var/www && \
    chmod -R 775 /var/www/cache

RUN composer install --prefer-dist --no-dev --optimize-autoloader --no-interaction

#RUN php saya key
#RUN php saya view:cache

USER www-data

EXPOSE 9000
CMD ["php-fpm"]
