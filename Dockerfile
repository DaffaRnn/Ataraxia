# Gunakan image PHP dengan Apache
FROM php:8.2-apache

# Install ekstensi PHP tambahan
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Aktifkan mod_rewrite (jika pakai routing/htaccess)
RUN a2enmod rewrite

# Salin semua file project
COPY . /var/www/html/

# Salin .env dari Render Secret (pastikan kamu sudah tambahkan secret .env di Render)
COPY /etc/secrets/.env /var/www/html/.env

# Ubah permission
RUN chown -R www-data:www-data /var/www/html

# Buka port 80
EXPOSE 80
