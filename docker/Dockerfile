FROM siomkin/8.1-fpm-alpine

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

RUN mkdir /phonestore && chown 1000:1000 -R /phonestore

WORKDIR /phonestore