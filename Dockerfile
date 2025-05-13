# Gunakan image PHP dengan Apache
FROM php:8.1-apache

# Aktifkan ekstensi mysqli
RUN docker-php-ext-install mysqli

# Copy seluruh file project ke direktori Apache
COPY . /var/www/html/

# Beri permission
RUN chown -R www-data:www-data /var/www/html

# Set working directory
WORKDIR /var/www/html
