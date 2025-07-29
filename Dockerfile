# Gunakan image PHP + Apache
FROM php:8.2-apache

# Install dependencies sistem (terpisah agar ringan)
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    unzip \
    zip \
    zlib1g-dev

# Install ekstensi PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Aktifkan mod_rewrite (htaccess)
RUN a2enmod rewrite

# Copy isi folder public ke folder default Apache
COPY public/ /var/www/html/

# Copy vendor kalau pakai composer
COPY vendor/ /var/www/html/vendor/

# Ubah permission
RUN chown -R www-data:www-data /var/www/html

# Port 80
EXPOSE 80
