FROM php:8.3-fpm

WORKDIR /todo

# composerのインストール
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME "/opt/composer"
ENV PATH "$PATH:/opt/composer/vendor/bin"

# laravelで使うツール
RUN apt-get update && \
    apt-get -y install git unzip libzip-dev default-mysql-client && \
    docker-php-ext-install zip pdo pdo_mysql && \
    docker-php-ext-enable pdo_mysql

COPY . .
WORKDIR /todo/laravel-app
RUN composer install
CMD ["php", "artisan", "serve", "--host", "0.0.0.0"]
EXPOSE 8000