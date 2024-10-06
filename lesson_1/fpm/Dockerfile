FROM php:8.2-fpm

COPY ./php.ini /usr/local/etc/php/conf.d/php-custom.ini
COPY ./www.conf /usr/local/etc/php-fpm.d/www.conf

WORKDIR /data

VOLUME /data

CMD ["php-fpm"]
