FROM php:8.2-apache

# Install ekstensi MySQL
RUN docker-php-ext-install mysqli

# Copy seluruh isi folder public ke dalam Apache root
COPY ./public/ /var/www/html/

# Aktifkan mod_rewrite jika dibutuhkan
RUN a2enmod rewrite

# Set permissions (opsional)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
