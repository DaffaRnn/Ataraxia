# Gunakan image PHP + Apache
FROM php:8.2-apache

# Install dependencies sistem
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    unzip \
    zip \
    zlib1g-dev \
    git \
    curl

# Install ekstensi PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install Composer dari image resmi Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Set Apache DocumentRoot ke folder public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Copy file project (semua file) ke container
COPY . .

# Jalankan Composer install
RUN composer install --no-dev --optimize-autoloader

# Aktifkan mod_rewrite Apache (untuk .htaccess)
RUN a2enmod rewrite

# Ubah permission (opsional tapi aman untuk produksi)
RUN chown -R www-data:www-data /var/www/html

# Buka port 80
EXPOSE 80

# Jalankan Apache (otomatis dijalankan oleh base image)
