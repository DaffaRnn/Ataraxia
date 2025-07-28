# Gunakan image PHP dengan Apache
FROM php:8.2-apache

# Install ekstensi PHP tambahan
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy semua file ke direktori kerja container
COPY . /var/www/html/

# Aktifkan mod_rewrite (jika pakai routing/htaccess)
RUN a2enmod rewrite

# Ubah permission
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
