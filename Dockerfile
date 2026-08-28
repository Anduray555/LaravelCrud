FROM php:8.3-fpm

# Dependencias del sistema y extensión de PostgreSQL para PHP
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_pgsql

# Composer (el gestor de paquetes de PHP)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html