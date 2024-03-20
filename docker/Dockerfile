#syntax=docker/dockerfile:1.4

ARG PHP_VERSION=7.4

# Prod image
FROM php:${PHP_VERSION}-fpm-alpine AS app_php

ENV APP_ENV=prod

WORKDIR /srv/app

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions

# persistent / runtime deps
RUN apk add --no-cache \
		acl \
		fcgi \
		file \
		gettext \
		git \
	;

RUN set -eux; \
    install-php-extensions \
    	intl \
    	zip \
        pdo_mysql \
    	apcu \
		opcache \
        gd      \
        memcached      \
        mysqli      \
    ;

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
COPY --link docker/php/conf.d/app.ini $PHP_INI_DIR/conf.d/

COPY --link docker/php/php-fpm.d/zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf
RUN mkdir -p /var/run/php

CMD php-fpm;


# copy sources
COPY --link  . .
RUN rm -Rf docker/

# Dev image
FROM app_php AS app_php_dev

ENV APP_ENV=dev XDEBUG_MODE=off


RUN set -eux; \
	install-php-extensions xdebug

# Nginx image
FROM nginx:stable-alpine AS app_nginx

WORKDIR /srv/app

COPY --from=app_php --link /srv/app ./
ADD docker/nginx/default.conf /etc/nginx/conf.d/default.conf
