FROM php:8.0-fpm

RUN apt-get update && apt-get install -y \
curl \
wget \

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install mysqli pdo pdo_mysql

# RUN sudo docker-php-ext-install pdo_mysql
RUN docker-php-ext-enable pdo_mysql

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

WORKDIR /var/www/magento2

CMD ["php-fpm"]