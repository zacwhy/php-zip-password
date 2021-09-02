FROM php:7.2-fpm

# https://www.php.net/manual/en/zip.installation.php
RUN apt-get update \
    && apt-get install -y libzip-dev \
    && docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-install zip

COPY ./script.php /src/script.php

WORKDIR /src

CMD ["php", "script.php"]
