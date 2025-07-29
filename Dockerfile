# Gunakan image PHP dengan Apache
FROM php:8.2-apache

# Install dependensi sistem agar bisa meng-compile ekstensi PHP
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Aktifkan mod_rewrite (jika pakai routing/htaccess)
RUN a2enmod rewrite

# Salin semua file project ke dalam container
COPY . /var/www/html/

# Salin file .env dari secret (jika pakai Railway Secret atau Render Secret)
# DI RAILWAY: kamu bisa inject .env ke dalam Environment Variable, jadi bagian ini opsional
COPY /etc/secrets/.env /var/www/html/.env

# Ubah hak akses file agar sesuai dengan user Apache
RUN chown -R www-data:www-data /var/www/html

# Buka port 80
EXPOSE 80
