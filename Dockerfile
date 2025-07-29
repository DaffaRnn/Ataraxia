FROM php:8.2-apache

# Install dependencies sistem lebih ringan dalam dua langkah
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

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Salin semua file project
COPY . /var/www/html/

# Jika menggunakan secret file .env dari Railway atau Render (opsional)
COPY /etc/secrets/.env /var/www/html/.env

# Ubah hak akses
RUN chown -R www-data:www-data /var/www/html

# Port yang digunakan
EXPOSE 80
