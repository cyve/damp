FROM php:8.3-fpm

WORKDIR /srv

COPY --from=composer /usr/bin/composer /usr/local/bin/composer
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN install-php-extensions pdo_mysql

COPY conf.d/* /usr/local/etc/php/conf.d/
COPY php-fpm.d/* /usr/local/etc/php-fpm.d/
