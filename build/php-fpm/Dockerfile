FROM php:7.2.0-fpm
LABEL Eakkabin Jaikeawma <eakkabin@codestep.io>

RUN apt-get update && apt-get install -y --no-install-recommends \
  && rm -rf /var/lib/apt/lists/* \
  && docker-php-ext-install pdo pdo_mysql
  
RUN mkdir -p /usr/share/nginx/html
WORKDIR /usr/share/nginx/html

EXPOSE 9000