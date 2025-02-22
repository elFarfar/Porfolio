FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    zip unzip curl git \
    && docker-php-ext-install pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy existing application
COPY . .