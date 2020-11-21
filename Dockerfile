FROM php:fpm-alpine

COPY . /usr/src/empire-town
WORKDIR /usr/src/empire-town

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/bin/ --filename=composer \
    && php -r "unlink('composer-setup.php');"