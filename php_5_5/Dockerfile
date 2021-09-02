FROM php:5.5-fpm

RUN apt-get update \
    && apt-get install -y zip

COPY ./script.php /src/script.php

WORKDIR /src

CMD ["php", "script.php"]
